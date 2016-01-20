<?php /* Smarty version Smarty-3.1.16, created on 2016-01-20 07:16:16
         compiled from "pages\commun\accueil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12134569fc0e0319f87-92366042%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '772be6a704e3f0af2020790ea41a6c503779ccfd' => 
    array (
      0 => 'pages\\commun\\accueil.tpl',
      1 => 1438049208,
      2 => 'file',
    ),
    '2b1ef29f1157c685da5ed5f57e6e13a19c8cec71' => 
    array (
      0 => 'C:\\wamp2\\www\\Fabrice\\code-g\\gestion\\inc_pages\\maj-prepare.tpl',
      1 => 1444437716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12134569fc0e0319f87-92366042',
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
  'unifunc' => 'content_569fc0e079fc96_11895570',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569fc0e079fc96_11895570')) {function content_569fc0e079fc96_11895570($_smarty_tpl) {?><form action="" method="post" id="formMaj" class="sky-form" enctype="multipart/form-data">
<input type="hidden"  name="actionForm" id="actionForm" value="">
<input type="hidden" name="idCurrent"  id="idCurrent" value="<?php echo $_smarty_tpl->tpl_vars['idCurrent']->value;?>
" >
<div id="showID">#<?php echo $_smarty_tpl->tpl_vars['idCurrent']->value;?>
</div>
<div id="contentMaj" class="left col w100 pas">

    
    <?php if ($_smarty_tpl->tpl_vars['infos']->value!='') {?>
    	<fieldset><legend>ERREURS DROITS DOSSIERS</legend>
    	<section><?php echo $_smarty_tpl->tpl_vars['infos']->value;?>
</section>
    	</fieldset>
	<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['myAdmin']->value->PRIVILEGE==9) {?>
        <div style="margin-left:15px;">
        <?php if ($_smarty_tpl->tpl_vars['mod_expires']->value!="1") {?>
            <fieldset><legend>AVERTISSEMENT</legend>
            <section>le module <b>Expires de APACHE</b> n'est pas activé</section>
            </fieldset>
        <?php }?>
    
        <fieldset><legend>ToDoList</legend>
    	<section><div class="row"><?php echo $_smarty_tpl->tpl_vars['field_todolist']->value;?>
</div></section>
        </fieldset>
	    <?php  $_smarty_tpl->tpl_vars['ligbLg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ligbLg']->_loop = false;
 $_smarty_tpl->tpl_vars['lg'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['thisSite']->value->LIST_LANG; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ligbLg']->key => $_smarty_tpl->tpl_vars['ligbLg']->value) {
$_smarty_tpl->tpl_vars['ligbLg']->_loop = true;
 $_smarty_tpl->tpl_vars['lg']->value = $_smarty_tpl->tpl_vars['ligbLg']->key;
?>
		    <?php if ($_smarty_tpl->tpl_vars['lg']->value==$_smarty_tpl->tpl_vars['thisSite']->value->LANG_DEF) {?><?php $_smarty_tpl->tpl_vars['lg'] = new Smarty_variable('', null, 0);?><?php }?>
    		<li><a href="<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->RACINE;?>
<?php echo $_smarty_tpl->tpl_vars['this']->value->PREFIXE_LG;?>
<?php echo $_smarty_tpl->tpl_vars['lg']->value;?>
/sitemap.xml" target="_blank">SiteMap <?php echo $_smarty_tpl->tpl_vars['ligbLg']->value;?>
</a></li>
	    <?php } ?>
	    
	
        <fieldset><legend>CheckList avant Recette > <a href="http://webdevchecklist.com/" target="_blank">webdevchecklist.com</a></legend>
        <div id="checklist">
	    <?php  $_smarty_tpl->tpl_vars['checklistItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['checklistItem']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['checklist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['checklistItem']->key => $_smarty_tpl->tpl_vars['checklistItem']->value) {
$_smarty_tpl->tpl_vars['checklistItem']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['checklistItem']->key;
?>
    		<div class="checklistItem">
            <input name="checklist-<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" type="checkbox" id="checklist-<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['checklistItem']->value['check']=="1") {?>checked <?php }?>>
            &nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['checklistItem']->value['titre'];?>

            <?php if ($_smarty_tpl->tpl_vars['checklistItem']->value['lien']!='') {?> 
                &nbsp;&nbsp;>&nbsp;<a href=<?php echo $_smarty_tpl->tpl_vars['checklistItem']->value['lien'];?>
 target="_blank">lien</a>
            <?php }?>
            </div>
	    <?php } ?>
        </div>
	    </fieldset>
	
    </div>
    <?php }?>



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
