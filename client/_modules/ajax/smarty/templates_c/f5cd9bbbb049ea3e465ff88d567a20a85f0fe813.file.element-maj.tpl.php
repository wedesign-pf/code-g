<?php /* Smarty version Smarty-3.1.16, created on 2016-01-07 12:22:58
         compiled from "element-maj.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4245568ee5425c60d4-59804807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5cd9bbbb049ea3e465ff88d567a20a85f0fe813' => 
    array (
      0 => 'element-maj.tpl',
      1 => 1452134177,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4245568ee5425c60d4-59804807',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list_element' => 0,
    'vElement' => 0,
    'projet' => 0,
    'selectProjet' => 0,
    'list_categorie_select' => 0,
    'categorie' => 0,
    'kElement' => 0,
    'list_Champ_Valeur' => 0,
    'Champ' => 0,
    'Valeur' => 0,
    'thisSite' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_568ee5427ea7d0_51458848',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568ee5427ea7d0_51458848')) {function content_568ee5427ea7d0_51458848($_smarty_tpl) {?>                <div class="row">
                    <div class="col-sm-12">
                        <form id="form-horizontal" class="form-horizontal">
                            <?php  $_smarty_tpl->tpl_vars['vElement'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vElement']->_loop = false;
 $_smarty_tpl->tpl_vars['kElement'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list_element']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                                    <!-- Select Projet -->
                                     <div class="form-group">
                                        <label for="selectProjet" class="col-sm-2 control-label">Projet</label>
                                        <div class="col-sm-10">
                                            <select id="id_projet" class="form-control" name="id_projet">
                                                <?php  $_smarty_tpl->tpl_vars['selectProjet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['selectProjet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['projet']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['selectProjet']->key => $_smarty_tpl->tpl_vars['selectProjet']->value) {
$_smarty_tpl->tpl_vars['selectProjet']->_loop = true;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['selectProjet']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['selectProjet']->value['titre'];?>
</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Radio Actif  -->
                                    <div class="form-group">
                                        <label for="Actif" class="col-sm-2 control-label">Actif</label>
                                        <div class="col-sm-10">
                                        <input type="radio" name="actif" value="oui" checked > Oui 
                                        <input type="radio" name="actif" value="non" style="margin-left:30px;"> Non <br>
                                        </div>
                                    </div>
                                    <!-- Input Titre Element  -->
                                    <div class="form-group">
                                        <label for="Titre de l'élément" class="col-sm-2 control-label">Titre</label>
                                        <div class="col-sm-10">
                                        <input class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['vElement']->value['titre'];?>
" name="titreElement">
                                        </div>    
                                    </div> 
                                    <!-- Select Categorie  -->
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
                                    <!-- Element Champ_Valeur  -->
                                    <div id="inputAjax" class="form-group">
                                        <div class="col-sm-2">
                                            <?php  $_smarty_tpl->tpl_vars['Champ'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Champ']->_loop = false;
 $_smarty_tpl->tpl_vars['KlistChamp'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list_Champ_Valeur']->value[$_smarty_tpl->tpl_vars['kElement']->value]['Champ']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Champ']->key => $_smarty_tpl->tpl_vars['Champ']->value) {
$_smarty_tpl->tpl_vars['Champ']->_loop = true;
 $_smarty_tpl->tpl_vars['KlistChamp']->value = $_smarty_tpl->tpl_vars['Champ']->key;
?>
                                                <label class="ChampTitre"><?php echo $_smarty_tpl->tpl_vars['Champ']->value['titre'];?>
</label>         
                                            <?php } ?>
                                        </div>
                                        <div class="col-sm-10 listChamp">
                                            <?php  $_smarty_tpl->tpl_vars['Valeur'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Valeur']->_loop = false;
 $_smarty_tpl->tpl_vars['KlistValeur'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list_Champ_Valeur']->value[$_smarty_tpl->tpl_vars['kElement']->value]['Valeur']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Valeur']->key => $_smarty_tpl->tpl_vars['Valeur']->value) {
$_smarty_tpl->tpl_vars['Valeur']->_loop = true;
 $_smarty_tpl->tpl_vars['KlistValeur']->value = $_smarty_tpl->tpl_vars['Valeur']->key;
?>
                                            <input id="ChampValue" name="<?php echo $_smarty_tpl->tpl_vars['Valeur']->value['id'];?>
" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Valeur']->value['valeur'];?>
"><br>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div id="champvaleur"></div>
                                    <div class="form-group">
                                        <div class="col-sm-2">
                                            <span><strong>Remarques</strong></span><br><br>
                                        </div>
                                        <div class="col-sm-10 listChamp">
                                            <textarea class="form-control" row="3"><?php echo $_smarty_tpl->tpl_vars['vElement']->value['remarques'];?>
</textarea>
                                        </div>
                                    </div>
                                </div><!-- /.Panel Body -->
                            </div> 
                            <?php } ?>
                        </form>
                    </div>
                </div><!-- Row Panel content -->


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
                            $("#inputAjax").removeClass();
                            $("#inputAjax").html(data);
                            $("#inputAjax #page-wrapper").remove();
                        }
                });
                
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
