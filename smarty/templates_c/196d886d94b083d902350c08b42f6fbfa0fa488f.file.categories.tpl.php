<?php /* Smarty version Smarty-3.1.16, created on 2016-01-20 09:20:28
         compiled from "_client\pages\categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14633569fddfc521d96-88807776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '196d886d94b083d902350c08b42f6fbfa0fa488f' => 
    array (
      0 => '_client\\pages\\categories.tpl',
      1 => 1448487925,
      2 => 'file',
    ),
    '626d5c11fa4d3c4b220825a39d2250acc0ac0993' => 
    array (
      0 => 'C:\\wamp2\\www\\Fabrice\\code-g\\gestion\\inc_pages\\list-prepare.tpl',
      1 => 1444178522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14633569fddfc521d96-88807776',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'templateParent' => 0,
    'infosParent' => 0,
    'filtres' => 0,
    'datas_lang' => 0,
    'orderby' => 0,
    'start' => 0,
    'limit' => 0,
    'myTableParent' => 0,
    'idParent' => 0,
    'maxElements' => 0,
    'actionsPage' => 0,
    'typePage' => 0,
    'boutons' => 0,
    'bouton' => 0,
    'count_datas' => 0,
    'listRow' => 0,
    'width_liste' => 0,
    'listCols' => 0,
    'datasCol' => 0,
    'keyId' => 0,
    'datasRow' => 0,
    'etat' => 0,
    'getPagination' => 0,
    'getElmsByPage' => 0,
    'totPagination' => 0,
    'alertConfDel' => 0,
    'myTable' => 0,
    'clauseWhere' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_569fddfce2d7a1_52481340',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569fddfce2d7a1_52481340')) {function content_569fddfce2d7a1_52481340($_smarty_tpl) {?><div id="contentList" class="line w100 pts plm prm">
<?php echo $_smarty_tpl->tpl_vars['infosParent']->value;?>

<?php if ($_smarty_tpl->tpl_vars['filtres']->value==1) {?>
<div id="filtreList" class="line w100">
	<form action="" method="post" id="formFiltres" class="sky-form">
	<input type="hidden"  name="Filtres" id="Filtres" value="1">
	<fieldset><legend><?php echo $_smarty_tpl->tpl_vars['datas_lang']->value['filtres'];?>
</legend>


	</fieldset>
	</form>
</div>
<?php }?>
<form action="" method="post" id="formList">
<input type="hidden"  name="actionOutList" id="actionOutList" value="">
<input type="hidden"  name="actionInList" id="actionInList" value="">
<input type="hidden"  name="actionListId" id="actionListId" value="">
<input type="hidden"  name="orderby" id="orderby" value="<?php echo $_smarty_tpl->tpl_vars['orderby']->value;?>
">
<input type="hidden"  name="start" id="start" value="<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
">
<input type="hidden"  name="limit" id="limit" value="<?php echo $_smarty_tpl->tpl_vars['limit']->value;?>
">
<input type="hidden" name="myTableParent"  id="myTableParent" value="<?php echo $_smarty_tpl->tpl_vars['myTableParent']->value;?>
" >
<input type="hidden" name="id_parent"  id="id_parent" value="<?php echo $_smarty_tpl->tpl_vars['idParent']->value;?>
" >
<div id="tableList" class="clear w100">
<div class="w100 mtbs">
	<?php if ($_smarty_tpl->tpl_vars['maxElements']->value>0) {?><div id="maxElements" class="left mrs"><?php echo $_smarty_tpl->tpl_vars['maxElements']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['datas_lang']->value['maxElements'];?>
</div><?php }?>
	<?php if (in_array("ajouter",$_smarty_tpl->tpl_vars['actionsPage']->value)&&$_smarty_tpl->tpl_vars['typePage']->value!="medias") {?><div id="btnAjouter" class="left btnAction" ><?php echo $_smarty_tpl->tpl_vars['datas_lang']->value['ajouter'];?>
</div><?php }?>
	<?php  $_smarty_tpl->tpl_vars['bouton'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bouton']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['boutons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bouton']->key => $_smarty_tpl->tpl_vars['bouton']->value) {
$_smarty_tpl->tpl_vars['bouton']->_loop = true;
?>
	<?php if (in_array($_smarty_tpl->tpl_vars['bouton']->value['assAction'],$_smarty_tpl->tpl_vars['actionsPage']->value)) {?><div class="left btnAction btnExtra" action="<?php echo $_smarty_tpl->tpl_vars['bouton']->value['action'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['bouton']->value['target'];?>
" ><?php echo $_smarty_tpl->tpl_vars['bouton']->value['label'];?>
</div><?php }?>
	<?php } ?>
	<div id="nbElements" class="right mrs"><?php echo $_smarty_tpl->tpl_vars['count_datas']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['datas_lang']->value['nbElements'];?>
</div>
	<div class="clear"></div>
</div>
<?php if (count($_smarty_tpl->tpl_vars['listRow']->value)>0) {?>
<TABLE width="100%" id="datasTable" class="<?php echo $_smarty_tpl->tpl_vars['width_liste']->value;?>
 ptvs" cellpadding="0" cellspacing="0" >
	<THEAD>
		<TR>
			<?php  $_smarty_tpl->tpl_vars['datasCol'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datasCol']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listCols']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datasCol']->key => $_smarty_tpl->tpl_vars['datasCol']->value) {
$_smarty_tpl->tpl_vars['datasCol']->_loop = true;
?>
				<TD width="<?php echo $_smarty_tpl->tpl_vars['datasCol']->value['width'];?>
" align="<?php echo $_smarty_tpl->tpl_vars['datasCol']->value['align'];?>
" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['datasCol']->value['orderOk'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1==1) {?> class="orderby" field="<?php echo $_smarty_tpl->tpl_vars['datasCol']->value['field'];?>
" <?php }?>><?php echo $_smarty_tpl->tpl_vars['datasCol']->value['label'];?>
<?php if ($_smarty_tpl->tpl_vars['datasCol']->value['update']>0) {?> (<?php echo $_smarty_tpl->tpl_vars['datasCol']->value['update'];?>
)<?php }?> </TD>
			<?php } ?>
			
			<?php if (in_array("move",$_smarty_tpl->tpl_vars['actionsPage']->value)) {?><TD width="8%" align="center" class="orderby" field="chrono"><i class="icon-append fa fa-15x fa-retweet"></i></TD><?php }?>
			<?php if (in_array("dupliquer",$_smarty_tpl->tpl_vars['actionsPage']->value)) {?><TD width="5%" align="center"><i class="icon-append fa fa-15x fa-copy"></TD><?php }?>
			<?php if (in_array("supprimer",$_smarty_tpl->tpl_vars['actionsPage']->value)) {?><TD width="5%" align="center"><i id="allDel" class="icon-append fa fa-15x fa-trash-o"></TD><?php }?>
		</TR>
	</THEAD>
	<TBODY>
		<?php  $_smarty_tpl->tpl_vars['datasRow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datasRow']->_loop = false;
 $_smarty_tpl->tpl_vars['keyId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['listRow']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datasRow']->key => $_smarty_tpl->tpl_vars['datasRow']->value) {
$_smarty_tpl->tpl_vars['datasRow']->_loop = true;
 $_smarty_tpl->tpl_vars['keyId']->value = $_smarty_tpl->tpl_vars['datasRow']->key;
?>
			<TR class="goMaj" id="<?php echo $_smarty_tpl->tpl_vars['keyId']->value;?>
" <?php if (in_array("move",$_smarty_tpl->tpl_vars['actionsPage']->value)) {?> data-id="<?php echo $_smarty_tpl->tpl_vars['datasRow']->value["chrono"];?>
" <?php }?>>
				<?php  $_smarty_tpl->tpl_vars['datasCol'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datasCol']->_loop = false;
 $_smarty_tpl->tpl_vars['col'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['listCols']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datasCol']->key => $_smarty_tpl->tpl_vars['datasCol']->value) {
$_smarty_tpl->tpl_vars['datasCol']->_loop = true;
 $_smarty_tpl->tpl_vars['col']->value = $_smarty_tpl->tpl_vars['datasCol']->key;
?>
					<?php if ($_smarty_tpl->tpl_vars['datasCol']->value['update']>="0") {?> 
						<TD align="<?php echo $_smarty_tpl->tpl_vars['datasCol']->value['align'];?>
" class="notGoMaj <?php echo $_smarty_tpl->tpl_vars['datasCol']->value['class'];?>
">
							<?php $_smarty_tpl->tpl_vars['etat'] = new Smarty_variable('', null, 0);?>
							<?php if ($_smarty_tpl->tpl_vars['datasRow']->value[$_smarty_tpl->tpl_vars['datasCol']->value['field']]==1) {?> 
								<?php $_smarty_tpl->tpl_vars['etat'] = new Smarty_variable("checked", null, 0);?>
							<?php } else { ?>
								<?php if ($_smarty_tpl->tpl_vars['datasCol']->value['update']==0||$_smarty_tpl->tpl_vars['datasCol']->value['countTrue']<$_smarty_tpl->tpl_vars['datasCol']->value['update']) {?> 
									<?php $_smarty_tpl->tpl_vars['etat'] = new Smarty_variable('', null, 0);?>
								<?php } else { ?>
									<?php $_smarty_tpl->tpl_vars['etat'] = new Smarty_variable("disabled", null, 0);?>
								<?php }?>
							<?php }?>
							<input type="checkbox"  <?php echo $_smarty_tpl->tpl_vars['etat']->value;?>
 class="checkboxUpdate" id="<?php echo $_smarty_tpl->tpl_vars['datasCol']->value['field'];?>
_<?php echo $_smarty_tpl->tpl_vars['keyId']->value;?>
"  name="<?php echo $_smarty_tpl->tpl_vars['datasCol']->value['field'];?>
"  value="<?php echo $_smarty_tpl->tpl_vars['keyId']->value;?>
" update="<?php echo $_smarty_tpl->tpl_vars['datasCol']->value['update'];?>
" ><i class="actionInListInProgress fa fa-15x fa-cog fa-spin"></i>
						</TD>
					<?php } else { ?> 
						<?php if ($_smarty_tpl->tpl_vars['datasCol']->value['action']!='') {?>
							<?php if ($_smarty_tpl->tpl_vars['datasCol']->value['action']=="lightbox") {?>
								<TD align="<?php echo $_smarty_tpl->tpl_vars['datasCol']->value['align'];?>
" class="notGoMaj <?php echo $_smarty_tpl->tpl_vars['datasCol']->value['class'];?>
"><input class="btnLighBoxList action_<?php echo $_smarty_tpl->tpl_vars['datasCol']->value['field'];?>
" field="<?php echo $_smarty_tpl->tpl_vars['datasCol']->value['field'];?>
" type="radio"><?php echo $_smarty_tpl->tpl_vars['datasRow']->value[$_smarty_tpl->tpl_vars['datasCol']->value['field']];?>
</TD>
							<?php } else { ?>
								<TD align="<?php echo $_smarty_tpl->tpl_vars['datasCol']->value['align'];?>
" class="notGoMaj <?php echo $_smarty_tpl->tpl_vars['datasCol']->value['class'];?>
"><input class="btnActionList action_<?php echo $_smarty_tpl->tpl_vars['datasCol']->value['field'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['datasCol']->value['field'];?>
" action="<?php echo $_smarty_tpl->tpl_vars['datasCol']->value['action'];?>
" type="radio"><?php echo $_smarty_tpl->tpl_vars['datasRow']->value[$_smarty_tpl->tpl_vars['datasCol']->value['field']];?>
</TD>
							<?php }?>
						<?php } else { ?>
							<TD align="<?php echo $_smarty_tpl->tpl_vars['datasCol']->value['align'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['datasCol']->value['class'];?>
"><?php echo $_smarty_tpl->tpl_vars['datasRow']->value[$_smarty_tpl->tpl_vars['datasCol']->value['field']];?>
</TD>
						<?php }?>
						
					<?php }?>
				<?php } ?>
				
				<?php if (in_array("move",$_smarty_tpl->tpl_vars['actionsPage']->value)) {?><TD align="center" class="notGoMaj"><?php echo $_smarty_tpl->tpl_vars['datasRow']->value["arrowsMove"];?>
</TD><?php }?>
				<?php if (in_array("dupliquer",$_smarty_tpl->tpl_vars['actionsPage']->value)) {?><TD align="center" class="notGoMaj"><input type="radio" class="dupliquer" value="<?php echo $_smarty_tpl->tpl_vars['keyId']->value;?>
" ></TD><?php }?>
				<?php if (in_array("supprimer",$_smarty_tpl->tpl_vars['actionsPage']->value)) {?><TD align="center" class="notGoMaj"><input type="checkbox" class="checkboxDel" id="deleteMe<?php echo $_smarty_tpl->tpl_vars['keyId']->value;?>
"  name="deleteMe<?php echo $_smarty_tpl->tpl_vars['keyId']->value;?>
"  value="<?php echo $_smarty_tpl->tpl_vars['keyId']->value;?>
" ></TD><?php }?>
			</TR>
		<?php } ?>
	</TBODY>

</TABLE>
<div id="footerList">
	<div class="left w33 infos">
		<?php if ($_smarty_tpl->tpl_vars['count_datas']->value>$_smarty_tpl->tpl_vars['limit']->value||$_smarty_tpl->tpl_vars['start']->value!=0) {?><?php echo $_smarty_tpl->tpl_vars['getPagination']->value;?>
&nbsp;&nbsp;|&nbsp;&nbsp;<?php }?>
		<?php echo $_smarty_tpl->tpl_vars['getElmsByPage']->value;?>

	</div>
	<?php if ($_smarty_tpl->tpl_vars['count_datas']->value>$_smarty_tpl->tpl_vars['limit']->value&&$_smarty_tpl->tpl_vars['limit']->value) {?><div class="left w33 txtcenter infos"><?php echo $_smarty_tpl->tpl_vars['start']->value+1;?>
 à <?php echo $_smarty_tpl->tpl_vars['totPagination']->value;?>
 de <?php echo $_smarty_tpl->tpl_vars['count_datas']->value;?>
 élements</div><?php }?>
	<?php if (in_array("supprimer",$_smarty_tpl->tpl_vars['actionsPage']->value)) {?>
		<div class="right">
			<?php if (in_array("supprimer",$_smarty_tpl->tpl_vars['actionsPage']->value)) {?><div id="btnDelete" class="btnAction" onmouseup="<?php if ($_smarty_tpl->tpl_vars['alertConfDel']->value!='') {?>window.alert('<?php echo $_smarty_tpl->tpl_vars['alertConfDel']->value;?>
'); <?php }?> confirme_del();"><?php echo $_smarty_tpl->tpl_vars['datas_lang']->value['delete'];?>
</div><?php }?>
		</div>
	<?php }?>
	<div class="clear"></div>
</div>
</div>
<?php } else { ?>
	<?php echo $_smarty_tpl->tpl_vars['datas_lang']->value['aucunelements'];?>

<?php }?>
</form>

</div><!--contentList-->
<script type="text/javascript" >
jQuery.validator.setDefaults({
	debug: false
});

$(document).ready(function () {
	
	// Datepicker’s Today button problem
	var _gotoToday = jQuery.datepicker._gotoToday;
	jQuery.datepicker._gotoToday = function(a){
	    var target = jQuery(a);
	    var inst = this._getInst(target[0]);
	    _gotoToday.call(this, a);
	    jQuery.datepicker._selectDate(a, jQuery.datepicker._formatDate(inst,inst.selectedDay, inst.selectedMonth, inst.selectedYear));
	}


	// on active ou désactive toutes les cases à cocher de suppression
	$('#allDel').click(function () { 
		$('.checkboxDel').each(function () { this.checked = !this.checked; });
	});
	
	// Pagination
	$('.pagin').click(function (event) { 
		event.preventDefault();
		$("#start").val($(this).attr("href"));
		submitList();
	});
	
	// Elements par page
	$('.elmsByPage').click(function (event) { 
		event.preventDefault();
		$("#limit").val($(this).attr("href"));
		submitList();
	});
	
	// Changement d'order
	$('.orderby').click(function () {
		var orderbyArray = $('#orderby').val().split(" ");
		if(orderbyArray[0]==$(this).attr("field")) {
			if(orderbyArray[1]=="ASC") { var newdir = "DESC"; } else { var newdir = "ASC"; }
		} else {
			var newdir = orderbyArray[1];
		}
		$("#orderby").val($(this).attr("field") + " " + newdir);
		submitList();
	});
		
	// affectation class suivant l'order by
	var orderbyArray = $('#orderby').val().split(" ");
	$( "td[field='" + orderbyArray[0] + "']" ).addClass("order_" + orderbyArray[1])
	
	// on appel la page de mise à jour
	<?php if ($_smarty_tpl->tpl_vars['typePage']->value!="medias") {?>
		$('.goMaj td').click(function (event) { 
			if (!$(this).hasClass('notGoMaj')) {
				$("#actionOutList").val("maj");
				$("#actionListId").val($(this).parent().attr("id"));
				submitList();
			}
		});
	<?php }?>
	
	$('#btnFiltre').click(function (event) { 
		event.preventDefault();
		submitFiltres();
	});
	
	$('#btnAjouter').click(function (event) { 
		$("#actionOutList").val("maj");
		$("#actionListId").val(0);
		submitList();
	});
	
	$('.btnActionList').click(function (event) { 
		if($(this).attr("action")=="inList") {
			$("#actionInList").val($(this).attr("field"));
		} else {
			$("#actionOutList").val($(this).attr("action"));
			if($(this).attr("action")=="page") {
				$("#myTableParent").val($(this).attr("field"));
			}
		}
		$("#actionListId").val($(this).parent().parent().attr("id"));
		$("#orderby").val("");
		$("#start").val("");
		$("#limit").val("");
		submitList();
	});
	
	$('.btnLighBoxList').click(function (event) { 
		$(this).val(['0']);
		$("#actionListId").val($(this).parent().parent().attr("id"));
	});
	
	$('#btnRetourList').click(function (event) { 
		$("#actionOutList").val("annuler");
		$("#orderby").val("");
		$("#start").val("");
		$("#limit").val("");
		submitList();
	});
	
	$('.btnExtra').click(function (event) { 
        if($(this).attr("target")=="_blank") {
		    window.open($(this).attr("action"));
            
        } else if($(this).attr("target")=="_self") {
           top.location.href=$(this).attr("action") 
           
        } else {
            window.open($(this).attr("action") ,'','menubar=no, status=no, scrollbars=yes, menubar=no, width=10, height=10, top=0,left=0'); 
        }
	});
	
	// on appel l'update 
	$('.checkboxUpdate').click(function (event) { 

		var $this=$(this)
		$this.hide();
		$this.next().show();
		var param="table=<?php echo $_smarty_tpl->tpl_vars['myTable']->value;?>
";
		param+="&field=" + $(this).attr("name");
		param+="&id=" + $(this).attr("value");
		param+="&checked=" + $(this).is(':checked');
		param+="&update=" + $(this).attr("update");
		param+="&where=<?php echo $_smarty_tpl->tpl_vars['clauseWhere']->value;?>
";

		var myName=$(this).attr("name");
		//alert(param);
		$.ajax({
			type: "GET",
			cache:false,
			url: '<?php echo @constant('DOS_AJAX_ADMIN');?>
ajax_update_list.php',
			data:param,
				success: function(data) {
					if(data==1) { // on active les cases car on a pas atteint la limite
						$( "input[name='" + myName + "']:not(:checked)" ).removeAttr("disabled");
					} else { // on désactive les cases non cochés
						$( "input[name='" + myName + "']:not(:checked)" ).attr("disabled", true);	
					}
					$this.next().hide();
					$this.show();
				}
		});
	});
	
	// Move Up
	$('.arrowup').click(function (event) { 
		event.preventDefault();
		$("#actionListId").val($(this).parent().parent().attr("id")+">"+$(this).parent().parent().prev().attr("id"));
		$("#actionInList").val("move");
		submitList();
	});
	// Move Down
	$('.arrowdown').click(function (event) { 
		event.preventDefault();
		$("#actionListId").val($(this).parent().parent().attr("id")+">"+$(this).parent().parent().next().attr("id"));
		$("#actionInList").val("move");
		submitList();
	});
	
	$('.dupliquer').click(function (event) { 
		event.preventDefault();
		$("#actionListId").val($(this).parent().parent().attr("id"));
		$("#actionInList").val("dupliquer");
		$("#orderby").val("");
		$("#start").val("");
		$("#limit").val("");
		submitList();
	});
	
});

function confirme_del(){ // suppression d'élements d'une liste
	if(confirm('<?php echo $_smarty_tpl->tpl_vars['datas_lang']->value['confirmDelete'];?>
')) {
		$("#actionInList").val("delete");
		$("#loaderForm").show();
		submitList();
	}
}
</script>
<?php }} ?>
