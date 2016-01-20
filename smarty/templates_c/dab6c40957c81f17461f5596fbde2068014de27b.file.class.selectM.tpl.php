<?php /* Smarty version Smarty-3.1.16, created on 2016-01-20 09:19:26
         compiled from "inc\fields\class.selectM.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22387569fddbe9bd1d4-28180657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dab6c40957c81f17461f5596fbde2068014de27b' => 
    array (
      0 => 'inc\\fields\\class.selectM.tpl',
      1 => 1442889486,
      2 => 'file',
    ),
    'be0ec25b48bf1a155e2e53636f3e8541c8c1d011' => 
    array (
      0 => 'inc\\fields\\field.tpl',
      1 => 1422986634,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22387569fddbe9bd1d4-28180657',
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
  'unifunc' => 'content_569fddbef36ad7_80800366',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569fddbef36ad7_80800366')) {function content_569fddbef36ad7_80800366($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['this']->value->str_label;?>

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
		<?php if ($_smarty_tpl->tpl_vars['this']->value->tags==true) {?>
		<i  id="addTag<?php echo $_smarty_tpl->tpl_vars['fieldLg']->value;?>
" class='icon-prepend fa fa-plus-square fa-2x addTag' ></i>
		<div id="blocAddTag<?php echo $_smarty_tpl->tpl_vars['fieldLg']->value;?>
" style='display:none; margin-left:<?php echo $_smarty_tpl->tpl_vars['marginLeft']->value;?>
px'><fieldset>
			<?php  $_smarty_tpl->tpl_vars['extlgT'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['extlgT']->_loop = false;
 $_smarty_tpl->tpl_vars['clgT'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['this']->value->LIST_LANG_EXTENSION_FIELD; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['extlgT']->key => $_smarty_tpl->tpl_vars['extlgT']->value) {
$_smarty_tpl->tpl_vars['extlgT']->_loop = true;
 $_smarty_tpl->tpl_vars['clgT']->value = $_smarty_tpl->tpl_vars['extlgT']->key;
?>
				<section>
				<label class="label" from="newfile">Tag <?php echo $_smarty_tpl->tpl_vars['clgT']->value;?>
</label>
				<label class="input"><input type="text"  name="newtag_<?php echo $_smarty_tpl->tpl_vars['this']->value->field;?>
<?php echo $_smarty_tpl->tpl_vars['extlgT']->value;?>
" id="newtag_<?php echo $_smarty_tpl->tpl_vars['this']->value->field;?>
<?php echo $_smarty_tpl->tpl_vars['extlgT']->value;?>
" value=""></label>
				</section>
			<?php } ?>
			<div id="btnAddTag<?php echo $_smarty_tpl->tpl_vars['fieldLg']->value;?>
" class="btnAddTag left btnAction">OK</div><div class="loaderBtn"></div>
			</fieldset>
		</div>
		<?php }?>
		<input name='<?php echo $_smarty_tpl->tpl_vars['fieldLg']->value;?>
' id='<?php echo $_smarty_tpl->tpl_vars['fieldLg']->value;?>
' type='hidden' class='ctrlg_<?php echo $_smarty_tpl->tpl_vars['clg']->value;?>
' value='<?php echo $_smarty_tpl->tpl_vars['valueField']->value;?>
' >
		<label style='margin-left:<?php echo $_smarty_tpl->tpl_vars['marginLeft']->value;?>
px' class='select <?php echo $_smarty_tpl->tpl_vars['this']->value->state_disabled;?>
 <?php echo $_smarty_tpl->tpl_vars['this']->value->addClass;?>
'>
		<select name='scr_<?php echo $_smarty_tpl->tpl_vars['fieldLg']->value;?>
' id='scr_<?php echo $_smarty_tpl->tpl_vars['fieldLg']->value;?>
' multiple='multiple' <?php echo $_smarty_tpl->tpl_vars['this']->value->str_javascript;?>
 <?php echo $_smarty_tpl->tpl_vars['this']->value->str_disabled;?>
  >
		<?php  $_smarty_tpl->tpl_vars['datasItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datasItem']->_loop = false;
 $_smarty_tpl->tpl_vars['indice'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['datasItemByLg']->value[$_smarty_tpl->tpl_vars['clg']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datasItem']->key => $_smarty_tpl->tpl_vars['datasItem']->value) {
$_smarty_tpl->tpl_vars['datasItem']->_loop = true;
 $_smarty_tpl->tpl_vars['indice']->value = $_smarty_tpl->tpl_vars['datasItem']->key;
?>
			<option value='<?php echo $_smarty_tpl->tpl_vars['datasItem']->value['val'];?>
' <?php echo $_smarty_tpl->tpl_vars['datasItem']->value['disabled'];?>
 <?php echo $_smarty_tpl->tpl_vars['datasItem']->value['selected'];?>
 ><?php echo $_smarty_tpl->tpl_vars['datasItem']->value['text'];?>
</option>
		<?php } ?>	
		</select>
		</label>
	<?php if ($_smarty_tpl->tpl_vars['this']->value->tooltip!='') {?><div class='tooltipInline' style='margin-left:<?php echo $_smarty_tpl->tpl_vars['marginLeft']->value;?>
px'><?php echo $_smarty_tpl->tpl_vars['this']->value->tooltip;?>
</div><?php }?>
	</div>
<script>
$(function(){
	$('#scr_<?php echo $_smarty_tpl->tpl_vars['fieldLg']->value;?>
').multipleSelect({
		placeholder: '<?php echo $_smarty_tpl->tpl_vars['this']->value->placeholder;?>
',
		multiple: <?php if ($_smarty_tpl->tpl_vars['this']->value->multiple==1) {?>true<?php } else { ?>false<?php }?>,
		selectAll: <?php if ($_smarty_tpl->tpl_vars['this']->value->selectAll==1) {?>true<?php } else { ?>false<?php }?>,
		single: <?php if ($_smarty_tpl->tpl_vars['this']->value->single==1) {?>true<?php } else { ?>false<?php }?>,
		filter: <?php if ($_smarty_tpl->tpl_vars['this']->value->filter==1) {?>true<?php } else { ?>false<?php }?>,
		isOpen: <?php if ($_smarty_tpl->tpl_vars['this']->value->isOpen==1) {?>true<?php } else { ?>false<?php }?>,
		keepOpen: <?php if ($_smarty_tpl->tpl_vars['this']->value->keepOpen==1) {?>true<?php } else { ?>false<?php }?>,
		minimumCountSelected: <?php echo $_smarty_tpl->tpl_vars['this']->value->minimumCountSelected;?>
,
		countSelected: '<?php echo $_smarty_tpl->tpl_vars['this']->value->countSelected;?>
',
		width: '100%'
	});	
	
	$('#scr_<?php echo $_smarty_tpl->tpl_vars['fieldLg']->value;?>
').change(function(){
		$('#<?php echo $_smarty_tpl->tpl_vars['fieldLg']->value;?>
').val($(this).multipleSelect('getSelects'));
	});		
});
</script>
<?php } ?>

<script type="text/javascript" >
$(document).ready(function () {
	$('#addTag<?php echo $_smarty_tpl->tpl_vars['fieldLg']->value;?>
').click(function (event) { 
		$('#blocAddTag<?php echo $_smarty_tpl->tpl_vars['fieldLg']->value;?>
').slideToggle();
	});

	$('#btnAddTag<?php echo $_smarty_tpl->tpl_vars['fieldLg']->value;?>
').click(function (event) { 
		var $this=$(this);
		$this.hide();
		$('.loaderBtn').show();
		
		var ajaxData='field=<?php echo $_smarty_tpl->tpl_vars['this']->value->field;?>
';
		<?php  $_smarty_tpl->tpl_vars['extlgT'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['extlgT']->_loop = false;
 $_smarty_tpl->tpl_vars['clgT'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['this']->value->LIST_LANG_EXTENSION_FIELD; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['extlgT']->key => $_smarty_tpl->tpl_vars['extlgT']->value) {
$_smarty_tpl->tpl_vars['extlgT']->_loop = true;
 $_smarty_tpl->tpl_vars['clgT']->value = $_smarty_tpl->tpl_vars['extlgT']->key;
?>
		ajaxData+='&newtag_<?php echo $_smarty_tpl->tpl_vars['clgT']->value;?>
='+$('#newtag_<?php echo $_smarty_tpl->tpl_vars['this']->value->field;?>
<?php echo $_smarty_tpl->tpl_vars['extlgT']->value;?>
').val();
		<?php } ?>
		
		$.ajax({
			type: "POST",
			cache:false,
			url: '<?php echo @constant('DOS_AJAX_ADMIN');?>
ajax_add_process.php',
			dataType: 'json',
			data: ajaxData,
				success: function(data) {
					$('#blocAddTag<?php echo $_smarty_tpl->tpl_vars['fieldLg']->value;?>
').slideToggle();
					<?php  $_smarty_tpl->tpl_vars['extlgT'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['extlgT']->_loop = false;
 $_smarty_tpl->tpl_vars['clgT'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['this']->value->LIST_LANG_EXTENSION_FIELD; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['extlgT']->key => $_smarty_tpl->tpl_vars['extlgT']->value) {
$_smarty_tpl->tpl_vars['extlgT']->_loop = true;
 $_smarty_tpl->tpl_vars['clgT']->value = $_smarty_tpl->tpl_vars['extlgT']->key;
?>
					$('#newtag_<?php echo $_smarty_tpl->tpl_vars['this']->value->field;?>
<?php echo $_smarty_tpl->tpl_vars['extlgT']->value;?>
').val("");
					<?php } ?>
					$this.show();
					$('.loaderBtn').hide();
					//
					if(data.lastId!=0) {
						var $opt = $("<option />", {
							value: data.lastId,
							text: data.titre
						});
						$opt.prop("selected", true);
						$('#scr_<?php echo $_smarty_tpl->tpl_vars['fieldLg']->value;?>
').append($opt).multipleSelect("refresh");
					}
				}
		});
	
	});
});
</script>

</div><?php }} ?>
