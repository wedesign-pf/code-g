<?php /* Smarty version Smarty-3.1.16, created on 2016-01-20 12:15:51
         compiled from "change-categorie.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3134056a00717f1b4d9-99124085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70d99cc7fcb882e65d4ffef80c199f913cc32b84' => 
    array (
      0 => 'change-categorie.tpl',
      1 => 1453319886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3134056a00717f1b4d9-99124085',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list_elements_champs' => 0,
    'row' => 0,
    'list_elements_champs_null' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56a007180cccd8_79862162',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a007180cccd8_79862162')) {function content_56a007180cccd8_79862162($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list_elements_champs']->value[0]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
    <div class="form-group">
        <label class="control-label col-sm-3" for="inputSuccess3"><?php echo $_smarty_tpl->tpl_vars['row']->value['champ'];?>
</label>
        <div class="col-sm-9">
              <input class='form-control' type="text" name="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['valeur'];?>
"> 
        </div> 
    </div>
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list_elements_champs_null']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
    <div class="form-group">
        <label class="control-label col-sm-3" for="inputSuccess3"><?php echo $_smarty_tpl->tpl_vars['row']->value['champ'];?>
</label>
        <div class="col-sm-9">
              <input class='form-control' type="text" name="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['valeur'];?>
"> 
        </div> 
    </div>
<?php } ?><?php }} ?>
