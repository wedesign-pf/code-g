        <div id="loader-gif" style="display:none;"></div>
        <!-- Page Wrapper -->
        <div id="page-wrapper" style="min-height: 888px;">
            <div class="container-fluid">
                <div class="col-lg-12">
            <!-- Row top nav -->
                {if empty($messEmptyElement)}
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Top nav wrapper -->
                        <nav class="navbar navbar-default top-nav-wrapper">
                            <div class="container-fluid">
                                <div class="row">
                                <div class="col-sm-6">
                                <div class="navbar-header">
                                    <h4 style="line-height: 38px;">
                                        {$label_heading} : 
                                        <span style="color:#337ab7">
                                            {$title_heading}
                                        </span>
                                    </h4> 
                                </div> 
                                </div>
                                    <div class="col-sm-6">
                                <ul class="nav navbar-top-links navbar-right">
                                    <li style="margin-top: 7px;">
                                        <select class="form-control" name="selectCat">
                                            <option value="noItem" selected>Ajouter...</option>
                                            {foreach $list_select_categorie as $categorie}
                                                <option value="{$categorie['id']}">{$categorie['titre']}</option>
                                            {/foreach}
                                        </select>
                                    </li>
                                </ul>
                                </div>
                                </div>
                            </div> 
                        </nav><!-- ./Top nav wrapper -->
                    </div>
                </div><!-- /.Row top nav -->
                {/if}
            <!-- Row Panel content -->
            {if $notification}
            <div class="alert alert-danger alert-dismissible fade in" role="alert"> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button> 
                <strong>{$notification}</strong>
            </div>
            
            {/if}
            {if $messEmptyElement}
                <div class="row">
                    <div class="col-sm-12">
                        <div class="alert alert-danger" role="alert" style="margin-top:10px;">
                          {$messEmptyElement}
                        </div>
                                                
                    </div>
                </div>  
            {/if}
            {foreach $list_element as $kElement => $vElement }
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-info">
                        <!-- Panel Heading -->
                        <div class="panel-heading">
                           {if $SessionIdType < 2}
                            <div class="button pull-right">
                             <button class="btn btn-sm btn-danger">
                                 <i class="fa fa-trash"></i> Supprimer
                            </button>
                             <button class="btn btn-sm btn-primary modifier" data-id-element="{$vElement['id']}">
                                 <i class="fa fa-pencil"></i> Modifier
                            </button>
                        </div>    
                            {/if}
                            <span class="auteur pull-right">
                            <span class="" style="margin-top:8px;"><p style="font-size:12px;"># {$vElement['id']} | Créer par {$vElement['creation_utilisateur']}</p></span>
                            </span>
                                {if $onglet == 'projet'}
                                 <h4>{$list_categorie[$kElement]['titre']}</h4> 
                                {/if}
                                 {if $onglet == 'categorie'}
                                 <h4>{$list_projet[$kElement]['titre']}</h4>
                                  {/if}
                               <h5>{$vElement['titre']}</h5>
                        </div><!-- /.Panel Heading -->
                        <!-- Panel Body -->
                        <div class="panel-body element">
                            <div class="row">
                                <div class="col-sm-2">
                                    {foreach $list_Champ_Valeur[$kElement]['champ'] as $KlistChamp => $Champ}
                                    <span><strong>{$Champ}</strong></span><br><br>
                                    {/foreach}
                                    {if $vElement['remarques']}
                                    <span><strong>Remarques</strong></span><br><br>
                                    {/if}
                                </div>
                                <div class="col-sm-8 listChamp">
                                    {foreach $list_Champ_Valeur[$kElement]['valeur'] as $KlistValeur => $Valeur}
                                    <span id="champValue" class="champValue">{$Valeur['valeur']}</span>
                                    <a  id="clipboard" data-toggle="tooltip" data-placement="right" data-original-title="Copier l'élément">
                                        <i class="fa fa-clipboard"></i>
                                    </a>
                                    <br><br>
                                    {/foreach}
                                    {if $vElement['remarques']}
                                    <span class="champValue">{$vElement['remarques']}</span>
                                    {/if}
                                </div>
                            </div>
                        </div><!-- /.Panel Body -->
                    </div>
                </div>
            </div><!-- Row Panel content -->
            {/foreach}
            </div>
          </div>
        </div><!-- /.Page Wrapper -->

    </div> <!-- /#wrapper -->

    <script>
        /*$(function(){
            
            $(".panel-heading button.modifier").click(function(event){
                
                var TitreOnglet = $(this).attr("data-onglet");
                var IdOnglet = $(this).attr("data-id-onglet");
                var IdElement = $(this).attr("data-id-element");
                
                $("#page-wrapper").fadeOut();
                $("#loader-gif").fadeIn();
               
                $.ajax({
                    type: "GET",
                    cache:false,
                    url: 'client/_modules/ajax/element-maj.php',
                    data:{ onglet:TitreOnglet, idonglet:IdOnglet, idelement:IdElement},
                    dataType: 'html',
                        success: function(donnee) {
                            $("#page-wrapper").empty();
                            $("#page-wrapper").append(donnee);
                            $("#loader-gif").fadeOut();
                            $("#page-wrapper").fadeIn();
                            }
                });
                
                
            });
            
        });*/
    </script>


