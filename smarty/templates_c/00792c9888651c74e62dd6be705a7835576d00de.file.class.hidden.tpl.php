<?php /* Smarty version Smarty-3.1.16, created on 2016-01-20 09:19:26
         compiled from "inc\fields\class.hidden.tpl" */ ?>
<?php /*%%SmartyHeaderCode:452569fddbe4bd6c6-86243617%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00792c9888651c74e62dd6be705a7835576d00de' => 
    array (
      0 => 'inc\\fields\\class.hidden.tpl',
      1 => 1439599780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '452569fddbe4bd6c6-86243617',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
    'clg' => 0,
    'extlg' => 0,
    'fieldLg' => 0,
    'valueField' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_569fddbe5ee1c3_41121103',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569fddbe5ee1c3_41121103')) {function content_569fddbe5ee1c3_41121103($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['extlg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['extlg']->_loop = false;
 $_smarty_tpl->tpl_vars['clg'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['this']->value->list_lang; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['extlg']->key => $_smarty_tpl->tpl_vars['extlg']->value) {
$_smarty_tpl->tpl_vars['extlg']->_loop = true;
 $_smarty_tpl->tpl_vars['clg']->value = $_smarty_tpl->tpl_vars['extlg']->key;
?>

	<?php $_smarty_tpl->tpl_vars["valueField"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['this']->value->getValue($_smarty_tpl->tpl_vars['clg']->value)), null, 0);?>
	<?php $_smarty_tpl->tpl_vars["fieldLg"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['this']->value->field).((string)$_smarty_tpl->tpl_vars['extlg']->value), null, 0);?>

	<input name='<?php echo $_smarty_tpl->tpl_vars['fieldLg']->value;?>
' id='<?php echo $_smarty_tpl->tpl_vars['fieldLg']->value;?>
' type='hidden' <?php echo $_smarty_tpl->tpl_vars['this']->value->str_variablesAuthorized;?>
 value='<?php echo $_smarty_tpl->tpl_vars['valueField']->value;?>
'  >

<?php } ?><?php }} ?>
