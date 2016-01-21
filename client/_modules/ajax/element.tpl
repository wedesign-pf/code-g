<div class="container-fluid">
<div class="col-lg-12">
<!-- Row top nav -->
<div class="row">
    <div class="col-sm-12">
        <!-- Top nav wrapper -->
        <nav class="navbar navbar-default top-nav-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <div id="navbar-header" class="navbar-header">
                            <h4 style="line-height: 38px;">
                                {$label_heading} :
                                <span style="color:#337ab7">{$title_heading}</span>
                            </h4> 
                        </div> 
                    </div>
                    <div class="col-sm-6">
                        <ul class="nav navbar-top-links navbar-right">
                            <li style="margin-top: 7px;">
                                <select class="form-control" name="addElement">
                                    <option value="noItem" selected>Ajouter...</option>
                                    {foreach $list_select_categorie as $key => $categorie}
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
    <div id="Notify">
        <div class="message">
            <h4>&Eacute;lément mis à jour &nbsp;&nbsp;&nbsp;<i class="fa fa-check-circle"></i></h4>
        </div>
    </div>
</div><!-- /.Row top nav -->
</div><!-- /.col-lg-12 -->
</div><!-- /.Container-fluid -->



<!-- Row Panel content -->
{foreach $list_elements as $kElement => $vElement }
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-info">
            <!-- Panel Heading -->
            <div class="panel-heading">
               {if $SessionIdType < 2}
                <div class="button pull-right">
                 <button class="btn btn-sm btn-danger supprimer"  data-action="delete" data-id="{$vElement['id']}">
                     <i class="fa fa-trash"></i> Supprimer
                </button>
                 <button class="btn btn-sm btn-primary editer"  data-toggle="modal" data-target="#formEdit" data-action="edit" data-id="{$vElement['id']}">
                     <i class="fa fa-pencil"></i> Modifier
                </button>
            </div>    
                {/if}
                <span class="auteur pull-right">
                <span class="" style="margin-top:8px;"><p style="font-size:12px;"># {$vElement['id']} | Créer par {$vElement['creation_utilisateur']}</p></span>
                </span>
                   {if $label_heading == 'Projet'}
                    <h4 class="categorie">{$list_categories[$vElement['id_categorie']]['titre']}</h4> 
                   {else}
                    <h4 class="projet">{$list_projets[$vElement['id_projet']]['titre']}</h4> 
                   {/if}
                   <h5>{$vElement['titre']}</h5>
            </div><!-- /.Panel Heading -->
            <!-- Panel Body -->
            <div class="panel-body element">
                <div class="row">
                    <div class="col-sm-2">
                        <!-- Liste des champs -->
                        {foreach $list_champs[$vElement['id_categorie']] as $row}
                            <span><strong>{$row}</strong></span><br><br>
                        {/foreach}
                        {if $vElement['remarques']}
                        <span><strong>Remarques</strong></span><br><br>
                        {/if}
                    </div>
                    <div class="col-sm-8 listChamp">
                        
                        {foreach $list_elements_champs[$kElement] as $k => $row}
                        <span id="champValue" class="champValue">{$row['valeur']}</span>
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


<!-- Modal -->
<div class="modal fade" id="formEdit" tabindex="-1" role="dialog" aria-labelledby="Formulaire d'édition">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
    </div>
  </div>
</div>

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


    
    // Clique sur bouton supprimer
    $(".panel").on("click",".panel-heading button.supprimer", function(event){


        var IdElement = $(this).attr("data-id");
        var FormAction = $(this).attr("data-action");

        if(confirm('Confirmer la suppression de l\'élément #'+IdElement)){

            $.ajax({
                type: "POST",
                cache:false,
                url: 'client/_modules/ajax/element-maj.php',
                data:"id="+IdElement+"&action="+FormAction,
                dataType: 'json',
                    success: function(data){

                       if(data.message == 'success'){
                            var Panel = $(event.target).parent().parent().parent();
                            Panel.fadeOut();  
                       }else{
                           alert('Une erreur s\'est produit lors de la soumission');
                       }
                    }
                });  
        }
    });


    // Clique sur bouton modifier
    $(".panel").on("click",".panel-heading button.editer", function(event){


        var IdElement = $(this).attr("data-id");
        var FormAction = $(this).attr("data-action");
        var PanelHeading = $(event.target).parent().parent();
        var TitleHeadingClass = PanelHeading.find('h4').attr('class');

        if(TitleHeadingClass == "categorie"){
           TitleCategorie = PanelHeading.find('h4').text();
           TitleProjet  = $('#navbar-header h4 span').text();
        }else{
            TitleProjet = PanelHeading.find('h4').text();
            TitleCategorie = $('#navbar-header h4 span').text();
        }

        var content_modal = $("#formEdit .modal-content");


        $.ajax({
            type: "POST",
            cache:false,
            url: 'client/_modules/ajax/element-maj.php',
            data:"id_element="+IdElement+"&action="+FormAction+"&categorie="+TitleCategorie+"&projet="+TitleProjet,
            dataType: 'html',
                success: function(data){
                    content_modal.empty().append(data);
                }
            });  
        
    });


</script>


