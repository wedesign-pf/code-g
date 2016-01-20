<?php /* Smarty version Smarty-3.1.16, created on 2016-01-20 08:48:15
         compiled from "_client\pages\elements-maj.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18111569fd66fc0b675-51802201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '594f6c026936076ae93bc77693c6010f23b152e0' => 
    array (
      0 => '_client\\pages\\elements-maj.tpl',
      1 => 1448585068,
      2 => 'file',
    ),
    '2b1ef29f1157c685da5ed5f57e6e13a19c8cec71' => 
    array (
      0 => 'C:\\wamp2\\www\\Fabrice\\code-g\\gestion\\inc_pages\\maj-prepare.tpl',
      1 => 1444437716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18111569fd66fc0b675-51802201',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'templateParent' => 0,
    'idCurrent' => 0,
    'thisSite' => 0,
    'myAdmin' => 0,
    'clg' => 0,
    'sep' => 0,
    'allrules' => 0,
    'rules' => 0,
    'allmessages' => 0,
    'message' => 0,
    'myGroup' => 0,
    'addClassRules' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_569fd66fea9b79_60079600',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569fd66fea9b79_60079600')) {function content_569fd66fea9b79_60079600($_smarty_tpl) {?><form action="" method="post" id="formMaj" class="sky-form" enctype="multipart/form-data">
<input type="hidden"  name="actionForm" id="actionForm" value="">
<input type="hidden" name="idCurrent"  id="idCurrent" value="<?php echo $_smarty_tpl->tpl_vars['idCurrent']->value;?>
" >
<div id="showID">#<?php echo $_smarty_tpl->tpl_vars['idCurrent']->value;?>
</div>
<div id="contentMaj" class="left col w100 pas">

    <?php echo $_smarty_tpl->tpl_vars['field_creation_date']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['field_creation_utilisateur']->value;?>

    <section><div class="row"><?php echo $_smarty_tpl->tpl_vars['field_id_projet']->value;?>
</div></section>
    <section><div class="row"><?php echo $_smarty_tpl->tpl_vars['field_actif']->value;?>
</div></section>
	<section><div class="row"><?php echo $_smarty_tpl->tpl_vars['field_titre']->value;?>
</div></section>
    <section><div class="row"><?php echo $_smarty_tpl->tpl_vars['field_id_categorie']->value;?>
</div></section>
    <div id="champs" class="pbm"></div>
    <section><div class="row"><?php echo $_smarty_tpl->tpl_vars['field_remarques']->value;?>
</div></section>
<script>
function changeCategorie(idc) {
    var param="ide=<?php echo $_smarty_tpl->tpl_vars['idCurrent']->value;?>
&idc=" + idc;
    $.ajax({
			type: "GET",
			cache:false,
			url: '<?php echo @constant('DOS_CLIENT_ADMIN');?>
pages/elements-maj_ajax.php',
			data:param,
				success: function(data) {
					$("#champs").html(data);
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

</div><!--contentMaj-->
</form>	
<script type="text/javascript" >
jQuery.validator.setDefaults({
	debug: false
});

$(document).ready(function () {
	
		$('.showFieldFile').click(function (event) {
			event.preventDefault();

			fullfile='<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->RACINE;?>
' + $("#" + $(this).attr('href')).val();
			ext = getExtension(fullfile,'image');

			
			if(ext!=undefined && ext!='') { 
				$(this).colorbox({href:fullfile ,transition:'fade',opacity:0.7,loop:false, maxWidth:'95%', maxhheight:'95%'});
			}
			
		});
			
			
	// Datepicker’s Today button problem
	var _gotoToday = jQuery.datepicker._gotoToday;
	jQuery.datepicker._gotoToday = function(a){
	    var target = jQuery(a);
	    var inst = this._getInst(target[0]);
	    _gotoToday.call(this, a);
	    jQuery.datepicker._selectDate(a, jQuery.datepicker._formatDate(inst,inst.selectedDay, inst.selectedMonth, inst.selectedYear));
	}
	
	$('#btnValider').click(function (event) { 
		event.preventDefault();
		$( "#actionForm" ).val("valider");
		$("#formMaj").submit();  
	});
	
	$('#btnAppliquer').click(function (event) { 
		event.preventDefault();
		$( "#actionForm" ).val("appliquer");
		$("#formMaj").submit();
	});  
    
    $('#btnAppliquerAndAjout').click(function (event) { 
		event.preventDefault();
		$( "#actionForm" ).val("appliquerAndAJout");
		$("#formMaj").submit();
	});   
	
	$('#btnAnnuler').click(function (event) { 
		event.preventDefault();
		$("#actionForm").val("annuler");
		$("#formMaj")[0].submit();
	});  

	
});



$(function() {
		
	$("#formMaj").validate({
		
		focusInvalid: false,
		invalidHandler: function(form, validator) {
	
			if (!validator.numberOfInvalids())
				return;
	
			$('html, body').animate({
				scrollTop: $(validator.errorList[0].element).offset().top-100
			}, 500);
	
		},
	
		event:'blur',
		<?php if (count($_smarty_tpl->tpl_vars['myAdmin']->value->LIST_LANG_DATAS)>1) {?>	
				ignore: 
		<?php $_smarty_tpl->tpl_vars['sep'] = new Smarty_variable('', null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['extlg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['extlg']->_loop = false;
 $_smarty_tpl->tpl_vars['clg'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['myAdmin']->value->LIST_LANG_DATAS; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['extlg']->key => $_smarty_tpl->tpl_vars['extlg']->value) {
$_smarty_tpl->tpl_vars['extlg']->_loop = true;
 $_smarty_tpl->tpl_vars['clg']->value = $_smarty_tpl->tpl_vars['extlg']->key;
?>
			<?php if (!array_key_exists($_smarty_tpl->tpl_vars['clg']->value,$_smarty_tpl->tpl_vars['thisSite']->value->LIST_LANG_CONTROLE)) {?>
				<?php echo $_smarty_tpl->tpl_vars['sep']->value;?>
".ctrlg_<?php echo $_smarty_tpl->tpl_vars['clg']->value;?>
"
				<?php $_smarty_tpl->tpl_vars['sep'] = new Smarty_variable(',', null, 0);?>
			<?php }?>
		<?php } ?>
				,
		<?php }?>		
		rules:	{
			<?php  $_smarty_tpl->tpl_vars['rules'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rules']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allrules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rules']->key => $_smarty_tpl->tpl_vars['rules']->value) {
$_smarty_tpl->tpl_vars['rules']->_loop = true;
?>
				<?php echo $_smarty_tpl->tpl_vars['rules']->value;?>

			<?php } ?>
		},
	
		messages:{
			<?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allmessages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
				<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

			<?php } ?>
		},
							
		submitHandler: function(form){
			$('.btnACacher').hide();
			$('#loaderBtnAction').show();
			$("#loaderForm").show();
			form.submit();

		},
		
		errorPlacement: function(error, element){

			 if (element.attr("type")=="checkbox" || element.attr("type")=="radio" ) {
				 error.insertBefore(element.parent());
			 } else {
				error.insertAfter(element.parent()); 
			 }
		},
		groups: {
               
			<?php echo $_smarty_tpl->tpl_vars['myGroup']->value;?>

            }
		
	});
	
	<?php echo $_smarty_tpl->tpl_vars['addClassRules']->value;?>


	
});
</script>
<?php }} ?>
