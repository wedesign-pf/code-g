
            <!-- Row top nav -->
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Top nav wrapper -->
                        <nav class="navbar navbar-default top-nav-wrapper">
                            <div class="container-fluid">
                                <div class="row">
                                <div class="col-sm-6">
                                <div class="navbar-header">
                                    <h4 style="line-height: 38px;">Projet : <span style="color:#337ab7">{$projet[0]['titre']}</span></h4> 
                                </div> 
                                </div>
                                    <div class="col-sm-6">
                                <ul class="nav navbar-top-links navbar-right">
                                    <li style="margin-top: 7px;">
                                        <select class="form-control" name="selectCat">
                                            <option value="noItem" selected>Ajouter...</option>
                                            {foreach $list_categorie as $categorie}
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
                
                <div class="row">
                    <div class="col-sm-12">
                        <form id="form-horizontal" class="form-horizontal">
                            {foreach $list_element['Element'] as $kElement => $vElement }
                            <div class="panel panel-info">
                                <!-- Panel Heading -->
                                <div class="panel-heading">
                                    <div class="button pull-right">
                                     <button class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Annuler</button>
                                     <button class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Enregistrer</button>
                                    </div>    
                                    <span class="auteur-maj pull-left">
                                    <span class="" style="margin-top:8px;">
                                        <p style="font-size:12px;"># {$vElement['id']} | Créer par {$vElement['creation_utilisateur']}</p>
                                    </span>
                                    </span>
                                    <div class="clearfix"></div>
                                </div><!-- /.Panel Heading -->
                                <!-- Panel Body -->
                                <div class="panel-body">
                                     <div class="form-group">
                                        <label for="selectCategorie" class="col-sm-2 control-label">Catégorie</label>
                                        <div class="col-sm-10">
                                            <select id="id_categorie" class="form-control" name="id_categorie" onchange="call_changeCategorie()">
                                                <option value="{$vElement['Categorie']['id']}" selected>{$vElement['Categorie']['titre']}</option>
                                                {foreach $list_categorie_select as $categorie}
                                                    <option value="{$categorie['id']}">{$categorie['titre']}</option>
                                                {/foreach}
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Actif" class="col-sm-2 control-label">Actif</label>
                                        <div class="col-sm-10">
                                        <input type="radio" name="actif" value="oui" checked > Oui 
                                        <input type="radio" name="actif" value="non" style="margin-left:30px;"> Non <br>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Titre de l'élément" class="col-sm-2 control-label">Titre</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" value="{$vElement['titre']}" name="titreElement">
                                        </div>    
                                    </div>
                                    <!--
                                    <div class="form-group">
                                        {foreach $list_Champ_Valeur[$kElement]['Champ'] as $KlistChamp => $Champ}
                                        <label for="Titre de l'élément" class="col-sm-2 control-label">{$Champ['titre']}</label>
                                        {/foreach}
                                        
                                        {foreach $list_Champ_Valeur[$kElement]['Valeur'] as $KlistValeur => $Valeur}    
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" value="{$Valeur['valeur']}" name="titreElement">
                                        </div>    
                                        {/foreach}    
                                        
                                    </div> --> 
                                    <div id="inputAjax"></div>    
                                    <div class="form-group">
                                        <label for="Remarques" class="col-sm-2 control-label">Remarques</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" row="3" placeholder="Remarques">{$vElement['remarques']}</textarea>
                                        </div>
                                    </div>
                                </div><!-- /.Panel Body -->
                            </div> 
                            {/foreach}
                        </form>
                    </div>
                </div><!-- Row Panel content -->
        </div><!-- /.Page Wrapper -->


    <script>
        function changeCategorie(idc) {

            var param="id-element={$vElement['id']}&id-categorie=" + idc;
            
            $.ajax({
                    type: "GET",
                    cache:false,
                    url: '{$thisSite->DOS_CLIENT}_modules/bloc_element/elements-maj_ajax_categorie.php',
                    data:param,
                        success: function(data) {
                            $("#inputAjax").html(data);
                        }
                });
            
            
           /* $.ajax({
                    type: "GET",
                    url: '{$thisSite->DOS_CLIENT}_modules/bloc_element/ajax_projet.php',
                    data:{ id: id_projet },
                    dataType: 'html',
                        success: function(donnee) {
                            $("#page-wrapper").empty();
                            $("#page-wrapper").append(donnee);
                            $("#loader-gif").fadeOut();
                            $("#page-wrapper").fadeIn();
                            }
                    });*/
                
        }


        function call_changeCategorie() {
           changeCategorie($("#id_categorie option:selected").val());
        }

        $(document).ready(function () {
            if($("#id_categorie option:selected").val()!="") {
                changeCategorie($("#id_categorie option:selected").val());
            }
        })
    </script>

