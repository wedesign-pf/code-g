<?php /* Smarty version Smarty-3.1.16, created on 2016-01-20 09:19:26
         compiled from "inc\fields\class.input.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10413569fddbe62b0c5-53386938%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2280eef14ec317e250c5c812434799e793a46ae7' => 
    array (
      0 => 'inc\\fields\\class.input.tpl',
      1 => 1448048617,
      2 => 'file',
    ),
    'be0ec25b48bf1a155e2e53636f3e8541c8c1d011' => 
    array (
      0 => 'inc\\fields\\field.tpl',
      1 => 1422986634,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10413569fddbe62b0c5-53386938',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
    'classPlus' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_569fddbe9802d4_69317523',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569fddbe9802d4_69317523')) {function content_569fddbe9802d4_69317523($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['this']->value->str_label;?>

<div class='col <?php echo $_smarty_tpl->tpl_vars['this']->value->str_widthField;?>
 <?php echo $_smarty_tpl->tpl_vars['classPlus']->value;?>
'>

<?php  $_smarty_tpl->tpl_vars['extlg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['extlg']->_loop = false;
 $_smarty_tpl->tpl_vars['clg'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['this']->value->list_lang; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['extlg']->key => $_smarty_tpl->tpl_vars['extlg']->value) {
$_smarty_tpl->tpl_vars['extlg']->_loop = true;
 $_smarty_tpl->tpl_vars['clg']->value = $_smarty_tpl->tpl_vars['extlg']->key;
?>

	<?php $_smarty_tpl->tpl_vars["valueField"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['this']->value->getValue($_smarty_tpl->tpl_vars['clg']->value)), null, 0);?>
	<?php $_smarty_tpl->tpl_vars["fieldLg"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['this']->value->field).((string)$_smarty_tpl->tpl_vars['extlg']->value), null, 0);?>

	<label class='input lang<?php echo $_smarty_tpl->tpl_vars['extlg']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['this']->value->state_disabled;?>
'>
	<?php if ($_smarty_tpl->tpl_vars['this']->value->iconeLangue()==true) {?><i class='icon-prepend iconTxt fa'><?php echo $_smarty_tpl->tpl_vars['clg']->value;?>
</i><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['this']->value->readonly==false) {?>
		<?php if ($_smarty_tpl->tpl_vars['this']->value->tooltip!='') {?><i class='icon-append fa-question fa'></i><?php }?>
		<input <?php echo $_smarty_tpl->tpl_vars['this']->value->str_autocomplete;?>
 class='ctrlg_<?php echo $_smarty_tpl->tpl_vars['clg']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['this']->value->addClass;?>
' name='<?php echo $_smarty_tpl->tpl_vars['fieldLg']->value;?>
' id='<?php echo $_smarty_tpl->tpl_vars['fieldLg']->value;?>
' type='text' <?php echo $_smarty_tpl->tpl_vars['this']->value->str_variablesAuthorized;?>
 <?php echo $_smarty_tpl->tpl_vars['this']->value->str_placeholder;?>
 <?php echo $_smarty_tpl->tpl_vars['this']->value->str_disabled;?>
 value="<?php echo $_smarty_tpl->tpl_vars['valueField']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['this']->value->str_javascript;?>
 >
		<?php echo $_smarty_tpl->tpl_vars['this']->value->str_tooltip;?>

		<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['fieldLg']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['this']->value->addCounter($_tmp1);?>

	<?php } else { ?>
		<label class='label col'><b><?php echo $_smarty_tpl->tpl_vars['valueField']->value;?>
</b></label>
		<input name='<?php echo $_smarty_tpl->tpl_vars['fieldLg']->value;?>
' id='<?php echo $_smarty_tpl->tpl_vars['fieldLg']->value;?>
' type='hidden' value="<?php echo $_smarty_tpl->tpl_vars['valueField']->value;?>
"  >
	<?php }?>
	</label>

<?php } ?>	

</div><?php }} ?>
