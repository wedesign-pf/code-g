<?php /* Smarty version Smarty-3.1.16, created on 2015-12-29 14:22:32
         compiled from "ajax_projet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28554568323c8420a49-45269019%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1777b0a0cfc949c92dd0055ffec39abb26897143' => 
    array (
      0 => 'ajax_projet.tpl',
      1 => 1451418997,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28554568323c8420a49-45269019',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'projet' => 0,
    'list_categorie' => 0,
    'categorie' => 0,
    'list_element' => 0,
    'vElement' => 0,
    'list_categorie_select' => 0,
    'kElement' => 0,
    'list_Champ_Valeur' => 0,
    'Champ' => 0,
    'Valeur' => 0,
    'thisSite' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_568323c8645151_99681846',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568323c8645151_99681846')) {function content_568323c8645151_99681846($_smarty_tpl) {?>
            <!-- Row top nav -->
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Top nav wrapper -->
                        <nav class="navbar navbar-default top-nav-wrapper">
                            <div class="container-fluid">
                                <div class="row">
                                <div class="col-sm-6">
                                <div class="navbar-header">
                                    <h4 style="line-height: 38px;">Projet : <span style="color:#337ab7"><?php echo $_smarty_tpl->tpl_vars['projet']->value[0]['titre'];?>
</span></h4> 
                                </div> 
                                </div>
                                    <div class="col-sm-6">
                                <ul class="nav navbar-top-links navbar-right">
                                    <li style="margin-top: 7px;">
                                        <select class="form-control" name="selectCat">
                                            <option value="noItem" selected>Ajouter...</option>
                                            <?php  $_smarty_tpl->tpl_vars['categorie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categorie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_categorie']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categorie']->key => $_smarty_tpl->tpl_vars['categorie']->value) {
$_smarty_tpl->tpl_vars['categorie']->_loop = true;
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
                
                <div class="row">
                    <div class="col-sm-12">
                        <form id="form-horizontal" class="form-horizontal">
                            <?php  $_smarty_tpl->tpl_vars['vElement'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vElement']->_loop = false;
 $_smarty_tpl->tpl_vars['kElement'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list_element']->value['Element']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vElement']->key => $_smarty_tpl->tpl_vars['vElement']->value) {
$_smarty_tpl->tpl_vars['vElement']->_loop = true;
 $_smarty_tpl->tpl_vars['kElement']->value = $_smarty_tpl->tpl_vars['vElement']->key;
?>
                            <div class="panel panel-info">
                                <!-- Panel Heading -->
                                <div class="panel-heading">
                                    <div class="button pull-right">
                                     <button class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Annuler</button>
                                     <button class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Enregistrer</button>
                                    </div>    
                                    <span class="auteur-maj pull-left">
                                    <span class="" style="margin-top:8px;">
                                        <p style="font-size:12px;"># <?php echo $_smarty_tpl->tpl_vars['vElement']->value['id'];?>
 | Créer par <?php echo $_smarty_tpl->tpl_vars['vElement']->value['creation_utilisateur'];?>
</p>
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
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['vElement']->value['Categorie']['id'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['vElement']->value['Categorie']['titre'];?>
</option>
                                                <?php  $_smarty_tpl->tpl_vars['categorie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categorie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_categorie_select']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categorie']->key => $_smarty_tpl->tpl_vars['categorie']->value) {
$_smarty_tpl->tpl_vars['categorie']->_loop = true;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['categorie']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['categorie']->value['titre'];?>
</option>
                                                <?php } ?>
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
                                        <input class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['vElement']->value['titre'];?>
" name="titreElement">
                                        </div>    
                                    </div>
                                    <!--
                                    <div class="form-group">
                                        <?php  $_smarty_tpl->tpl_vars['Champ'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Champ']->_loop = false;
 $_smarty_tpl->tpl_vars['KlistChamp'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list_Champ_Valeur']->value[$_smarty_tpl->tpl_vars['kElement']->value]['Champ']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Champ']->key => $_smarty_tpl->tpl_vars['Champ']->value) {
$_smarty_tpl->tpl_vars['Champ']->_loop = true;
 $_smarty_tpl->tpl_vars['KlistChamp']->value = $_smarty_tpl->tpl_vars['Champ']->key;
?>
                                        <label for="Titre de l'élément" class="col-sm-2 control-label"><?php echo $_smarty_tpl->tpl_vars['Champ']->value['titre'];?>
</label>
                                        <?php } ?>
                                        
                                        <?php  $_smarty_tpl->tpl_vars['Valeur'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Valeur']->_loop = false;
 $_smarty_tpl->tpl_vars['KlistValeur'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list_Champ_Valeur']->value[$_smarty_tpl->tpl_vars['kElement']->value]['Valeur']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Valeur']->key => $_smarty_tpl->tpl_vars['Valeur']->value) {
$_smarty_tpl->tpl_vars['Valeur']->_loop = true;
 $_smarty_tpl->tpl_vars['KlistValeur']->value = $_smarty_tpl->tpl_vars['Valeur']->key;
?>    
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['Valeur']->value['valeur'];?>
" name="titreElement">
                                        </div>    
                                        <?php } ?>    
                                        
                                    </div> --> 
                                    <div id="inputAjax"></div>    
                                    <div class="form-group">
                                        <label for="Remarques" class="col-sm-2 control-label">Remarques</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" row="3" placeholder="Remarques"><?php echo $_smarty_tpl->tpl_vars['vElement']->value['remarques'];?>
</textarea>
                                        </div>
                                    </div>
                                </div><!-- /.Panel Body -->
                            </div> 
                            <?php } ?>
                        </form>
                    </div>
                </div><!-- Row Panel content -->
        </div><!-- /.Page Wrapper -->


    <script>
        function changeCategorie(idc) {

            var param="id-element=<?php echo $_smarty_tpl->tpl_vars['vElement']->value['id'];?>
&id-categorie=" + idc;
            
            $.ajax({
                    type: "GET",
                    cache:false,
                    url: '<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->DOS_CLIENT;?>
_modules/bloc_element/elements-maj_ajax_categorie.php',
                    data:param,
                        success: function(data) {
                            $("#inputAjax").html(data);
                        }
                });
            
            
           /* $.ajax({
                    type: "GET",
                    url: '<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->DOS_CLIENT;?>
_modules/bloc_element/ajax_projet.php',
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

<?php }} ?>
