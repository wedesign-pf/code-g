
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
                                    <h4 style="line-height: 38px;">Categorie : <span style="color:#337ab7">{$categorie_titre}</span></h4> 
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
                {/if}
            <!-- Row Panel content -->
            {if $messEmptyElement}
                <div class="row">
                    <div class="col-sm-12">
                        <div class="alert alert-danger" role="alert" style="margin-top:10px;">
                          {$messEmptyElement}
                        </div>
                                                
                    </div>
                </div>  
            {/if}
            {foreach $list_element['Element'] as $kElement => $vElement }
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-info">
                        <!-- Panel Heading -->
                        <div class="panel-heading">
                            {if $SessionIdType < 2}
                            <div class="button pull-right">
                             <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Supprimer</button>
                             <button class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i> Modifier</button>
                        </div>    
                            {/if}
                        <span class="auteur pull-right">
                        <span class="" style="margin-top:8px;"><p style="font-size:12px;"># {$vElement['id']} | Créer par {$vElement['creation_utilisateur']}</p></span>
                        </span>
                        {foreach $projets[$kElement] as $Vprojet}
                        <h4>{$Vprojet}</h4>
                        {/foreach} 
                        <h5>{$vElement['titre']}</h5>
                        </div><!-- /.Panel Heading -->
                        <!-- Panel Body -->
                        <div class="panel-body element">
                            <div class="row">
                                {if isset($messEmptyElement)}
                                <div class="col-sm-12">
                                    <div class="panel panel-default">
                                      <div class="panel-body">
                                        {$messEmptyElement}
                                      </div>
                                    </div>
                                </div>
                                {/if}
                                <div class="col-sm-2">
                                    {foreach $list_Champ_Valeur[$kElement]['Champ'] as $KlistChamp => $Champ}
                                    <span><strong>{$Champ['titre']}</strong></span><br><br>
                                    {/foreach}
                                    {if $vElement['remarques']}
                                    <span><strong>Remarques</strong></span><br><br>
                                    {/if}
                                </div>
                                <div class="col-sm-8 listChamp">
                                    {foreach $list_Champ_Valeur[$kElement]['Valeur'] as $KlistValeur => $Valeur}
                                    <span class="champValue">{$Valeur['valeur']}</span>
                                    <a  id="clipboard" data-toggle="tooltip" data-placement="right" title="Copier l'élément"><i class="fa fa-clipboard"></i></a>
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
        </div><!-- /.Page Wrapper -->
        <script>

            $('#dataTables-example').DataTable({
                responsive: true
            });

            $('[data-toggle="tooltip"]').tooltip();

            $('#tabsModalClient a').click(function (e) {
              e.preventDefault();
              $(this).tab('show');
            });

            // Traitement pour un copier/coller 
            $( ".listChamp" ).on( "click", "i", function(event) {

                var Cible = $(event.target);
                var Parent = Cible.parent();
                var Champ = Parent.prev();

                clipboard.copy(Champ.text()).then(function(){
                    Champ.css('background','#6DDC77');
                }, function(err){
                    alert(err);
                });

            });


        </script>


