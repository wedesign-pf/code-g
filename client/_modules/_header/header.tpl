    <div id="wrapper" style="margin-top:-20px">
        <!-- Top Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;background: #FFFFFF;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{$thisSite->RACINE}accueil">Ia orana, {$user_titre}</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <li><a href="{$thisSite->RACINE}deconnexion"><i class="fa fa-sign-out fa-fw"></i> Déconnexion</a></li>
            </ul>
            <!-- /.navbar-top-links -->
        </nav><!-- /.Top Navigation -->
    
        <!-- Navigation sidebar left -->
        <div class="navbar-default sidebar sidebar-nav navbar-collapse collapse" aria-expanded="false" role="navigation" style="margin-top: 0;">
            <div class="bs-example bs-example-tabs" data-example-id="togglable-tabs"> 
                <!-- Links Tabs -->
                <ul id="myTabs" class="nav nav-tabs" role="tablist"> 
                    <li role="presentation" class="active">
                        <a href="#projets" id="home-tab" role="tab" data-toggle="tab" aria-controls="projets" aria-expanded="true" style="height: 50px;"><i class="fa fa-briefcase"></i> Projets</a>
                    </li> 
                    <li role="presentation" class="">
                        <a href="#categories" role="tab" id="profile-tab" data-toggle="tab" aria-controls="categories" aria-expanded="false" style="height: 50px;">
                            <i class="fa fa-tags"></i> Categories</a>
                    </li> 
                </ul> 
                <!-- ./Links Tabs -->
                <!-- Contents Tabs -->
                <div id="myTabContent" class="tab-content"> 
                    <div role="tabpanel" class="tab-pane fade active in" id="projets" aria-labelledby="home-tab"> 
                        <ul id="side-menu" class="nav in projet">  
                            {foreach $list_projet as $projet}
                                <li><span data-onglet="Projet" data-id="{$projet['id']}"class="projet">{$projet['titre']}</span></li>                               
                            {/foreach}
                        </ul>
                    </div> 
                    <div role="tabpanel" class="tab-pane fade" id="categories" aria-labelledby="profile-tab">
                         <ul class="nav in" id="side-menu">    
                            {foreach $list_categorie as $categorie}
                            <li><span data-onglet="Categorie" data-id="{$categorie['id']}">{$categorie['titre']}</span></li>
                            {/foreach}
                        </ul>
                    </div> 
                </div>
                <!-- /.Contents Tabs -->
            </div>
        </div><!-- /.Navigation sidebar left -->    
        
        <div id="page-wrapper"></div>

<script>

   $( "#side-menu li span" ).click(function (e) { 

        Onglet  = $(this).attr("data-onglet");
        Id      = $(this).attr("data-id");
        Value  = $(this).text();

        $("#page-wrapper").fadeOut();
        $("#loader-gif").fadeIn();

        $.ajax({
            type: "GET",
            cache:false,
            url: '{$thisSite->DOS_CLIENT}_modules/ajax/element.php',
            data:{ onglet: Onglet , id: Id, value:Value},
            dataType: 'html',
                success: function(donnee) {
                    $("#page-wrapper").empty();
                    $("#page-wrapper").append(donnee);
                    $("#loader-gif").fadeOut();
                    $("#page-wrapper").fadeIn();
                    }
        });
   });




    // Au chargement de la page
    jQuery(document).ready(function(){

        // Activé le lien sur le premier lien
        $('#side-menu.projet li:first-child').addClass('active');

        // Au clic sur la navigation "sidebar-right"
        $('#side-menu li').click(function(){

            $('#side-menu li').removeClass('active');
            $(this).addClass('active');
        }); 



        /****************************************/



        Onglet  = $("#side-menu.projet li:first-child span").attr("data-onglet");
        Id      = $("#side-menu.projet li:first-child span").attr("data-id");
        Value  = $("#side-menu.projet li:first-child").text();



        $.ajax({
            type: "GET",
            cache:false,
            url: '{$thisSite->DOS_CLIENT}_modules/ajax/element.php',
            data:{ onglet: Onglet , id: Id, value:Value},
            dataType: 'html',
                success: function(donnee) {
                    $("#page-wrapper").empty();
                    $("#page-wrapper").append(donnee);

                    }
        });
        

        


    });


</script>