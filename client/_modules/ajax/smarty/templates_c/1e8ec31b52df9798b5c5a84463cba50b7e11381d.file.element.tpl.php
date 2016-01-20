<?php /* Smarty version Smarty-3.1.16, created on 2016-01-20 12:13:13
         compiled from "element.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2992656a00679289069-35816476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e8ec31b52df9798b5c5a84463cba50b7e11381d' => 
    array (
      0 => 'element.tpl',
      1 => 1453327544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2992656a00679289069-35816476',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'label_heading' => 0,
    'title_heading' => 0,
    'list_select_categorie' => 0,
    'categorie' => 0,
    'list_elements' => 0,
    'SessionIdType' => 0,
    'vElement' => 0,
    'list_categories' => 0,
    'list_projets' => 0,
    'list_champs' => 0,
    'row' => 0,
    'kElement' => 0,
    'list_elements_champs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56a006794ea663_32300616',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a006794ea663_32300616')) {function content_56a006794ea663_32300616($_smarty_tpl) {?><div class="container-fluid">
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
                                <?php echo $_smarty_tpl->tpl_vars['label_heading']->value;?>
 :
                                <span style="color:#337ab7"><?php echo $_smarty_tpl->tpl_vars['title_heading']->value;?>
</span>
                            </h4> 
                        </div> 
                    </div>
                    <div class="col-sm-6">
                        <ul class="nav navbar-top-links navbar-right">
                            <li style="margin-top: 7px;">
                                <select class="form-control" name="addElement">
                                    <option value="noItem" selected>Ajouter...</option>
                                    <?php  $_smarty_tpl->tpl_vars['categorie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categorie']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list_select_categorie']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categorie']->key => $_smarty_tpl->tpl_vars['categorie']->value) {
$_smarty_tpl->tpl_vars['categorie']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['categorie']->key;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['categorie']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['categorie']->value['titre'];?>
</option>
                                    <?php } ?>
                                </select>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> 
        </nav><!-- ./Top nav wrapper -->
    </div>
</div><!-- /.Row top nav -->
</div><!-- /.col-lg-12 -->
</div><!-- /.Container-fluid -->



<!-- Row Panel content -->
<?php  $_smarty_tpl->tpl_vars['vElement'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vElement']->_loop = false;
 $_smarty_tpl->tpl_vars['kElement'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list_elements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vElement']->key => $_smarty_tpl->tpl_vars['vElement']->value) {
$_smarty_tpl->tpl_vars['vElement']->_loop = true;
 $_smarty_tpl->tpl_vars['kElement']->value = $_smarty_tpl->tpl_vars['vElement']->key;
?>
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-info">
            <!-- Panel Heading -->
            <div class="panel-heading">
               <?php if ($_smarty_tpl->tpl_vars['SessionIdType']->value<2) {?>
                <div class="button pull-right">
                 <button class="btn btn-sm btn-danger supprimer"  data-action="delete" data-id="<?php echo $_smarty_tpl->tpl_vars['vElement']->value['id'];?>
">
                     <i class="fa fa-trash"></i> Supprimer
                </button>
                 <button class="btn btn-sm btn-primary editer"  data-toggle="modal" data-target="#formEdit" data-action="edit" data-id="<?php echo $_smarty_tpl->tpl_vars['vElement']->value['id'];?>
">
                     <i class="fa fa-pencil"></i> Modifier
                </button>
            </div>    
                <?php }?>
                <span class="auteur pull-right">
                <span class="" style="margin-top:8px;"><p style="font-size:12px;"># <?php echo $_smarty_tpl->tpl_vars['vElement']->value['id'];?>
 | Créer par <?php echo $_smarty_tpl->tpl_vars['vElement']->value['creation_utilisateur'];?>
</p></span>
                </span>
                   <?php if ($_smarty_tpl->tpl_vars['label_heading']->value=='Projet') {?>
                    <h4 class="categorie"><?php echo $_smarty_tpl->tpl_vars['list_categories']->value[$_smarty_tpl->tpl_vars['vElement']->value['id_categorie']]['titre'];?>
</h4> 
                   <?php } else { ?>
                    <h4 class="projet"><?php echo $_smarty_tpl->tpl_vars['list_projets']->value[$_smarty_tpl->tpl_vars['vElement']->value['id_projet']]['titre'];?>
</h4> 
                   <?php }?>
                   <h5><?php echo $_smarty_tpl->tpl_vars['vElement']->value['titre'];?>
</h5>
            </div><!-- /.Panel Heading -->
            <!-- Panel Body -->
            <div class="panel-body element">
                <div class="row">
                    <div class="col-sm-2">
                        <!-- Liste des champs -->
                        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_champs']->value[$_smarty_tpl->tpl_vars['vElement']->value['id_categorie']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                            <span><strong><?php echo $_smarty_tpl->tpl_vars['row']->value;?>
</strong></span><br><br>
                        <?php } ?>
                        <?php if ($_smarty_tpl->tpl_vars['vElement']->value['remarques']) {?>
                        <span><strong>Remarques</strong></span><br><br>
                        <?php }?>
                    </div>
                    <div class="col-sm-8 listChamp">
                        
                        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list_elements_champs']->value[$_smarty_tpl->tpl_vars['kElement']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
                        <span id="champValue" class="champValue"><?php echo $_smarty_tpl->tpl_vars['row']->value['valeur'];?>
</span>
                        <a  id="clipboard" data-toggle="tooltip" data-placement="right" data-original-title="Copier l'élément">
                            <i class="fa fa-clipboard"></i>
                        </a>
                        <br><br>
                        <?php } ?>
                        <?php if ($_smarty_tpl->tpl_vars['vElement']->value['remarques']) {?>
                        <span class="champValue"><?php echo $_smarty_tpl->tpl_vars['vElement']->value['remarques'];?>
</span>
                        <?php }?>
                    </div>
                </div>
            </div><!-- /.Panel Body -->
        </div>
    </div>
</div><!-- Row Panel content -->
<?php } ?>


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


    // Clique sur bouton editer
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

    
 
    
    
    
   /* $(".panel-heading button.modifier").click(function(event){



        var IdElement = $(this).attr("data-id-element");

        $("#page-wrapper").fadeOut();
        $("#loader-gif").fadeIn();

        $.ajax({
            type: "GET",
            cache:false,
            url: 'client/_modules/ajax/element-maj.php',
            data:"idelement="+IdElement,
            dataType: 'html',
                success: function(donnee) {

                    $("#page-wrapper").empty();
                    $("#page-wrapper").append(donnee);
                    $("#loader-gif").fadeOut();
                    $("#page-wrapper").fadeIn();
                    }
        });


    });*/

</script>


<?php }} ?>
