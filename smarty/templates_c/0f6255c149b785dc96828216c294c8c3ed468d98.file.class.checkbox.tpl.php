<?php /* Smarty version Smarty-3.1.16, created on 2016-01-20 09:19:26
         compiled from "inc\fields\class.checkbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8873569fddbef36ad5-54137859%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f6255c149b785dc96828216c294c8c3ed468d98' => 
    array (
      0 => 'inc\\fields\\class.checkbox.tpl',
      1 => 1439600094,
      2 => 'file',
    ),
    'be0ec25b48bf1a155e2e53636f3e8541c8c1d011' => 
    array (
      0 => 'inc\\fields\\field.tpl',
      1 => 1422986634,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8873569fddbef36ad5-54137859',
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
  'unifunc' => 'content_569fddbf2cfae2_58779896',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569fddbf2cfae2_58779896')) {function content_569fddbf2cfae2_58779896($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['this']->value->str_label;?>

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
	
	<div style='position:relative;' class='lang<?php echo $_smarty_tpl->tpl_vars['extlg']->value;?>
'>

		<?php if ($_smarty_tpl->tpl_vars['this']->value->iconeLangue()==true) {?>
		<i class='icon-prepend iconTxt fa'><?php echo $_smarty_tpl->tpl_vars['clg']->value;?>
</i>
		<?php }?>
		
		<input name='<?php echo $_smarty_tpl->tpl_vars['fieldLg']->value;?>
' id='<?php echo $_smarty_tpl->tpl_vars['fieldLg']->value;?>
' type='hidden' value='<?php echo $_smarty_tpl->tpl_vars['valueField']->value;?>
' >

		<?php  $_smarty_tpl->tpl_vars['datasItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datasItem']->_loop = false;
 $_smarty_tpl->tpl_vars['indice'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['datasItemByLg']->value[$_smarty_tpl->tpl_vars['clg']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datasItem']->key => $_smarty_tpl->tpl_vars['datasItem']->value) {
$_smarty_tpl->tpl_vars['datasItem']->_loop = true;
 $_smarty_tpl->tpl_vars['indice']->value = $_smarty_tpl->tpl_vars['datasItem']->key;
?>
			<label style='margin-left:<?php echo $_smarty_tpl->tpl_vars['datasItem']->value['marginLeft'];?>
px' class='checkbox <?php echo $_smarty_tpl->tpl_vars['this']->value->state_disabled;?>
 <?php echo $_smarty_tpl->tpl_vars['datasItem']->value['stateDisabled'];?>
 <?php echo $_smarty_tpl->tpl_vars['this']->value->addClass;?>
'>
			<input  type='checkbox' name='<?php echo $_smarty_tpl->tpl_vars['datasItem']->value['idField'];?>
' id='<?php echo $_smarty_tpl->tpl_vars['datasItem']->value['idField'];?>
' class='<?php echo $_smarty_tpl->tpl_vars['fieldLg']->value;?>
' value='<?php echo $_smarty_tpl->tpl_vars['datasItem']->value['val'];?>
' <?php echo $_smarty_tpl->tpl_vars['datasItem']->value['checked'];?>
 <?php echo $_smarty_tpl->tpl_vars['datasItem']->value['disabled'];?>
 <?php echo $_smarty_tpl->tpl_vars['this']->value->str_disabled;?>
 <?php echo $_smarty_tpl->tpl_vars['this']->value->str_javascript;?>
 ><i></i>
			<?php echo $_smarty_tpl->tpl_vars['datasItem']->value['text'];?>

			</label>
		<?php } ?>	
	
	<?php if ($_smarty_tpl->tpl_vars['this']->value->tooltip!='') {?><div class='tooltipInline'><?php echo $_smarty_tpl->tpl_vars['this']->value->tooltip;?>
</div><?php }?>
	</div>
<script>
$(function(){
	$('.<?php echo $_smarty_tpl->tpl_vars['fieldLg']->value;?>
').change(function(e){
		var r='';
		var sep='';
		$('.<?php echo $_smarty_tpl->tpl_vars['fieldLg']->value;?>
').each(function(i){
			if($(this).attr('checked')) {
				//alert($(this).val());
				r+=sep + $(this).val();
				sep=',';
			}
			$('#<?php echo $_smarty_tpl->tpl_vars['fieldLg']->value;?>
').val(r);
		});	
	});	
});
</script>
<?php } ?>	

</div><?php }} ?>
