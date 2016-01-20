<?php /* Smarty version Smarty-3.1.16, created on 2016-01-20 09:20:27
         compiled from "templates\page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27123569fddfb20fe73-22446455%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6cdc0dd54836ae2c701704d3b888273b6085f10' => 
    array (
      0 => 'templates\\page.tpl',
      1 => 1444437686,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27123569fddfb20fe73-22446455',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'thisSite' => 0,
    'page_tag_title' => 0,
    'addCssStructure' => 0,
    'elt' => 0,
    'myAdmin' => 0,
    'addJsStructure' => 0,
    'TITRE_SITE' => 0,
    'dateCurrent' => 0,
    'heureCurrent' => 0,
    'datas_lang' => 0,
    'niveaux0' => 0,
    'id0' => 0,
    'actif' => 0,
    'titre' => 0,
    'datasniv2' => 0,
    'id2' => 0,
    'menuNavigation' => 0,
    'datasNav' => 0,
    'sep' => 0,
    'id' => 0,
    'sepfin' => 0,
    'clg' => 0,
    'extlg' => 0,
    'script_tpl' => 0,
    'typePage' => 0,
    'actionsPage' => 0,
    'listLg' => 0,
    'reloadLangue' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_569fddfc4a7f94_31758149',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569fddfc4a7f94_31758149')) {function content_569fddfc4a7f94_31758149($_smarty_tpl) {?><html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->current_lang;?>
">
<head>
<meta charset="utf-8">
<TITLE><?php echo $_smarty_tpl->tpl_vars['page_tag_title']->value;?>
</TITLE>
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<![endif]-->
<base href="<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->RACINE;?>
<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->DOS_ADMIN;?>
" target="_self" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--CSS BASE-->
<link href="<?php echo @constant('DOS_BASE_ADMIN');?>
css/reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo @constant('DOS_SKIN_ADMIN');?>
font-awesome.css" rel="stylesheet" type="text/css" />
<link href="<?php echo @constant('DOS_SKIN_ADMIN');?>
structure.css" rel="stylesheet" type="text/css" />
<link href="<?php echo @constant('DOS_SKIN_ADMIN');?>
responsive.css" rel="stylesheet" type="text/css" />
<link href="<?php echo @constant('DOS_SKIN_ADMIN');?>
sky-forms.css" rel="stylesheet" type="text/css" />
<link href="<?php echo @constant('DOS_SKIN_ADMIN');?>
multiple-select.css" rel="stylesheet" type="text/css" />
<link href="<?php echo @constant('DOS_SKIN_ADMIN');?>
jBox.css" rel="stylesheet" type="text/css" />
<link href="<?php echo @constant('DOS_SKIN_ADMIN');?>
jBox_themes/NoticeBorder.css" rel="stylesheet" type="text/css" />
<link href="<?php echo @constant('DOS_SKIN_ADMIN');?>
colorbox.css" rel="stylesheet" type="text/css" />
<link href="<?php echo @constant('DOS_SKIN_ADMIN');?>
style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo @constant('DOS_SKIN_ADMIN');?>
menus.css" rel="stylesheet" type="text/css" />
<?php if ($_smarty_tpl->tpl_vars['addCssStructure']->value[0]!='') {?>
<?php  $_smarty_tpl->tpl_vars['elt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['elt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['addCssStructure']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['elt']->key => $_smarty_tpl->tpl_vars['elt']->value) {
$_smarty_tpl->tpl_vars['elt']->_loop = true;
?>
<link href="<?php echo $_smarty_tpl->tpl_vars['elt']->value;?>
" rel="stylesheet" type="text/css" />
<?php } ?>
<?php }?>
<!--[if lt IE 9]>
	<link href="<?php echo @constant('DOS_OUTILS_ADMIN');?>
skyforms/css/sky-forms-ie8.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--JS BASE-->
<!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->RACINE;?>
<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->DOS_BASE;?>
js/<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->JQUERY1;?>
"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->RACINE;?>
<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->DOS_BASE;?>
js/<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->JQUERY2;?>
"></script>
<![endif]-->
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->RACINE;?>
<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->DOS_BASE;?>
js/<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->JQUERYM;?>
"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->RACINE;?>
<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->DOS_BASE;?>
js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo @constant('DOS_BASE_ADMIN');?>
js/scripts.js"></script>
<script type="text/javascript" src="<?php echo @constant('DOS_OUTILS_ADMIN');?>
jBox/jBox.min.js"></script>
<script type="text/javascript" src="<?php echo @constant('DOS_OUTILS_ADMIN');?>
skyforms/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo @constant('DOS_OUTILS_ADMIN');?>
skyforms/js/jquery.form.min.js"></script>
<script type="text/javascript" src="<?php echo @constant('DOS_OUTILS_ADMIN');?>
skyforms/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo @constant('DOS_OUTILS_ADMIN');?>
skyforms/js/jquery.validate.addMethod.js"></script>
<script type="text/javascript" src="<?php echo @constant('DOS_OUTILS_ADMIN');?>
skyforms/js/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="<?php echo @constant('DOS_OUTILS_ADMIN');?>
skyforms/js/jquery.modal.js"></script>
<script type="text/javascript" src="<?php echo @constant('DOS_OUTILS_ADMIN');?>
skyforms/js/additional-methods.min.js"></script>
<script type="text/javascript" src="<?php echo @constant('DOS_OUTILS_ADMIN');?>
skyforms/js/jquery.simplyCountable.js"></script>
<?php if ($_smarty_tpl->tpl_vars['myAdmin']->value->LANG_ADMIN=="fr") {?><script type="text/javascript" src="<?php echo @constant('DOS_OUTILS_ADMIN');?>
skyforms/lang/messages_fr.js"></script><?php }?>
<?php if ($_smarty_tpl->tpl_vars['myAdmin']->value->LANG_ADMIN=="fr") {?><script type="text/javascript" src="<?php echo @constant('DOS_OUTILS_ADMIN');?>
skyforms/lang/datepicker-fr.js"></script><?php }?>
<script type="text/javascript" src="<?php echo @constant('DOS_OUTILS_ADMIN');?>
colorbox/jquery.colorbox-min.js"></script>
<!--[if lt IE 10]>
	<script type="text/javascript" src="<?php echo @constant('DOS_OUTILS_ADMIN');?>
skyforms/js/jquery.placeholder.min.js"></script>
<![endif]-->	
<!--[if lt IE 9]>
	<script type="text/javascript" src="<?php echo @constant('DOS_OUTILS_ADMIN');?>
skyforms/js/sky-forms-ie8.js"></script>
<![endif]-->
<?php if ($_smarty_tpl->tpl_vars['addJsStructure']->value[0]!='') {?>
<!--JS CLIENT-->
<?php  $_smarty_tpl->tpl_vars['elt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['elt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['addJsStructure']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['elt']->key => $_smarty_tpl->tpl_vars['elt']->value) {
$_smarty_tpl->tpl_vars['elt']->_loop = true;
?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['elt']->value;?>
"></script>
<?php } ?>
<?php }?>
</head>
<body>
<form method="post" id="form_navigation" style="display:none">
<input name="newNiveau0" type="hidden" id="newNiveau0" value="">
<input name="newNiveau2" type="hidden" id="newNiveau2" value="">
<input name="pageNew" type="hidden" id="pageNew" value="">
<input name="request" type="hidden" id="request" value="">
</form>
<div id="loaderForm"></div>
<a id="top"></a>
<header id="header">
<div id="header_1">
	<a id="logo" class="left borderRightBGBlack" href="<?php echo @constant('PAGE_ACCUEIL');?>
"><img src="<?php echo @constant('DOS_SKIN_ADMIN');?>
images/logo_page.png" /></a>
	<h0 class="left pls"><?php echo $_smarty_tpl->tpl_vars['TITRE_SITE']->value;?>
</h0>
	<div id="infos_header" class="right txtright plrm borderLeftBGBlack"><?php echo $_smarty_tpl->tpl_vars['dateCurrent']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['heureCurrent']->value;?>
<br><a href="<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->RACINE;?>
" target="_blank" ><?php echo $_smarty_tpl->tpl_vars['datas_lang']->value['access_public'];?>
 <i class="fa fa-15x fa-angle-right" ></i></a>
    </div>
	 
	<div id="selectAdministrateur" class="right borderLeftBGBlack">
	<ul id="menuAdministrateur">
		<li class='left menuA'>
		<a href="#"><i class="fa fa-15x fa-user mrvs" ></i><?php echo $_smarty_tpl->tpl_vars['myAdmin']->value->LOGIN;?>
</a>
			<ul class="sousmenuA">
				<li class="borderTopBGBlack"><a id="btnProfil" href="<?php echo @constant('DOS_PAGES_ADMIN');?>
admin/administrateurs"><i class="fa fa-15x fa-user mrvs" ></i>Profil</a></li>
				<li class="borderTopBGBlack"><a href="logout.php"><i class="fa fa-15x fa-power-off mrvs" ></i>Deconnexion</a></li>
				<?php if ($_smarty_tpl->tpl_vars['myAdmin']->value->PRIVILEGE==9) {?><li class="borderTopBGBlack"><a href="#" data-request="initMyAdmin" class="requestLink"><i class="fa fa-15x fa-refresh mrvs requestLink" ></i>ReInitialisation</a></li><?php }?> 
			</ul>
		</li>
	</ul>
	</div>
     
</div>

<div id="header_2" class="borderBottom">
	<ul id="niveau0" class="borderBottom">
	<?php  $_smarty_tpl->tpl_vars['titre'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['titre']->_loop = false;
 $_smarty_tpl->tpl_vars['id0'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['niveaux0']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['titre']->key => $_smarty_tpl->tpl_vars['titre']->value) {
$_smarty_tpl->tpl_vars['titre']->_loop = true;
 $_smarty_tpl->tpl_vars['id0']->value = $_smarty_tpl->tpl_vars['titre']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['id0']->value==$_smarty_tpl->tpl_vars['myAdmin']->value->newNiveau0) {?> <?php $_smarty_tpl->tpl_vars['actif'] = new Smarty_variable("_actif", null, 0);?> <?php } else { ?> <?php $_smarty_tpl->tpl_vars['actif'] = new Smarty_variable('', null, 0);?><?php }?>	
        <li id="li0<?php echo $_smarty_tpl->tpl_vars['id0']->value;?>
" class='left menu0 li0<?php echo $_smarty_tpl->tpl_vars['actif']->value;?>
 '>
			<a class="left borderRight a0<?php echo $_smarty_tpl->tpl_vars['actif']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['id0']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
<i class="fa fa-15x fa-caret-down mlvs" ></i></a>
			<ul class="sousmenu0">
				<?php  $_smarty_tpl->tpl_vars['datasniv2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datasniv2']->_loop = false;
 $_smarty_tpl->tpl_vars['id2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['myAdmin']->value->menuNavigation[$_smarty_tpl->tpl_vars['id0']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datasniv2']->key => $_smarty_tpl->tpl_vars['datasniv2']->value) {
$_smarty_tpl->tpl_vars['datasniv2']->_loop = true;
 $_smarty_tpl->tpl_vars['id2']->value = $_smarty_tpl->tpl_vars['datasniv2']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['datasniv2']->value['lien']=='') {?>	
				<li class='li1'><?php echo $_smarty_tpl->tpl_vars['datasniv2']->value['titre'];?>
</li>
				<?php } else { ?>
				<li class='li2 borderTopBGBlack'><a href="<?php echo $_smarty_tpl->tpl_vars['datasniv2']->value['lien'];?>
" niv0="<?php echo $_smarty_tpl->tpl_vars['id0']->value;?>
" niv2="<?php echo $_smarty_tpl->tpl_vars['id2']->value;?>
" target="<?php echo $_smarty_tpl->tpl_vars['datasniv2']->value['cible'];?>
"><?php echo $_smarty_tpl->tpl_vars['datasniv2']->value['titre'];?>
</a></li>
				<?php }?>
				<?php } ?>				
			</ul>
		</li>
    <?php } ?>
	</ul>
</div>
</header>
<div id="mainContent" class="">
	<div id="navigationPage" class="borderRight" >
    <?php if ($_smarty_tpl->tpl_vars['myAdmin']->value->PRIVILEGE==9) {?>
    <a href="javascript: void(0)" id="n1-" class="n1"><span class="addNiv2" niv0="<?php echo $_smarty_tpl->tpl_vars['myAdmin']->value->newNiveau0;?>
" niv1="0" niv2="6352" href="pages/admin/niveaux2-maj">[+]</span></a>
    <?php }?>
	<?php  $_smarty_tpl->tpl_vars['datasNav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datasNav']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menuNavigation']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datasNav']->key => $_smarty_tpl->tpl_vars['datasNav']->value) {
$_smarty_tpl->tpl_vars['datasNav']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['datasNav']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['datasNav']->value['lien']=='') {?>
			<?php $_smarty_tpl->tpl_vars['sepfin'] = new Smarty_variable('', null, 0);?>
			<?php echo $_smarty_tpl->tpl_vars['sep']->value;?>

			<li>
                <a href="javascript: void(0)" id="n1-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="n1 <?php if ($_smarty_tpl->tpl_vars['datasNav']->value['ferme']==0) {?>open<?php }?>"><?php echo $_smarty_tpl->tpl_vars['datasNav']->value['titre'];?>

                <?php if ($_smarty_tpl->tpl_vars['myAdmin']->value->PRIVILEGE==9) {?><span class="addNiv2 mlvs" niv0="<?php echo $_smarty_tpl->tpl_vars['myAdmin']->value->newNiveau0;?>
" niv1="0" niv2="6352" href="pages/admin/niveaux2-maj">[+]</span><?php }?>
                </a>
                <ul  <?php if ($_smarty_tpl->tpl_vars['datasNav']->value['ferme']==1) {?>style="display:none"<?php }?>>
			<?php $_smarty_tpl->tpl_vars['sep'] = new Smarty_variable("</ul></li>", null, 0);?>
			<?php $_smarty_tpl->tpl_vars['sepfin'] = new Smarty_variable("</ul>", null, 0);?>
		<?php } else { ?>
			<?php if ($_smarty_tpl->tpl_vars['id']->value==$_smarty_tpl->tpl_vars['myAdmin']->value->newNiveau2) {?> <?php $_smarty_tpl->tpl_vars['actif'] = new Smarty_variable("actif", null, 0);?> <?php } else { ?> <?php $_smarty_tpl->tpl_vars['actif'] = new Smarty_variable('', null, 0);?><?php }?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['datasNav']->value['lien'];?>
" niv2="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"  niv0="<?php echo $_smarty_tpl->tpl_vars['myAdmin']->value->newNiveau0;?>
" target="<?php echo $_smarty_tpl->tpl_vars['datasNav']->value['cible'];?>
" class="n2 <?php echo $_smarty_tpl->tpl_vars['actif']->value;?>
 borderBottom"><?php echo $_smarty_tpl->tpl_vars['datasNav']->value['titre'];?>
</a></li>
		<?php }?>
	<?php } ?>
	<?php echo $_smarty_tpl->tpl_vars['sepfin']->value;?>

	</div>
	<div id="mainContentPage" >
		<div id="headerContent" class="borderBottom">
			<h1 class="left plrs"><?php echo $_smarty_tpl->tpl_vars['myAdmin']->value->titrePage;?>
</h1>
			<div class="right">
				<?php echo $_smarty_tpl->getSubTemplate (((string)@constant('DOS_INC_ADMIN'))."selectVariables.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					<div class="left borderRight plvs prvs">
					<?php  $_smarty_tpl->tpl_vars['extlg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['extlg']->_loop = false;
 $_smarty_tpl->tpl_vars['clg'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['myAdmin']->value->LIST_LANG_EXTENSION_FIELD; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['extlg']->key => $_smarty_tpl->tpl_vars['extlg']->value) {
$_smarty_tpl->tpl_vars['extlg']->_loop = true;
 $_smarty_tpl->tpl_vars['clg']->value = $_smarty_tpl->tpl_vars['extlg']->key;
?>
						<?php if ($_smarty_tpl->tpl_vars['clg']->value==$_smarty_tpl->tpl_vars['myAdmin']->value->LANG_DATAS) {?> <?php $_smarty_tpl->tpl_vars['actif'] = new Smarty_variable("actif", null, 0);?> <?php } else { ?> <?php $_smarty_tpl->tpl_vars['actif'] = new Smarty_variable('', null, 0);?><?php }?>	
						<a class="choixLangue left  <?php echo $_smarty_tpl->tpl_vars['actif']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['extlg']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['clg']->value;?>
</a>
					<?php } ?>
					</div>
			</div>
			<div class="clear"></div>
		</div><!--headerContent-->
		<div id="contentPage" class="">
		<?php if ($_smarty_tpl->tpl_vars['myAdmin']->value->explicationsPage!='') {?><div id="explicationsPage" class="borderBottom pas clear w100"><?php echo $_smarty_tpl->tpl_vars['myAdmin']->value->explicationsPage;?>
</div><?php }?>

<?php if ($_smarty_tpl->tpl_vars['script_tpl']->value!='') {?> <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['script_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }?>

			<div id="footerContent" class="borderTop">
					<div id="bloc_action_haut" class="right txtright plrm">
						<?php if ($_smarty_tpl->tpl_vars['typePage']->value!="medias") {?>
						<?php if (in_array("valider",$_smarty_tpl->tpl_vars['actionsPage']->value)) {?><div id="btnValider" class="right btnAction btnACacher"><?php echo $_smarty_tpl->tpl_vars['datas_lang']->value['valider'];?>
</div><?php }?>
						<?php if (in_array("appliquer",$_smarty_tpl->tpl_vars['actionsPage']->value)) {?><div id="btnAppliquer" class="right btnAction btnACacher"><?php echo $_smarty_tpl->tpl_vars['datas_lang']->value['appliquer'];?>
</div><?php }?>
                        <?php if (in_array("appliquerAndAjout",$_smarty_tpl->tpl_vars['actionsPage']->value)) {?><div id="btnAppliquerAndAjout" class="right btnAction btnACacher"><?php echo $_smarty_tpl->tpl_vars['datas_lang']->value['appliquerAndAjout'];?>
</div><?php }?>
						<?php if (in_array("annuler",$_smarty_tpl->tpl_vars['actionsPage']->value)) {?><div id="btnAnnuler" class="right btnAction btnACacher"><?php echo $_smarty_tpl->tpl_vars['datas_lang']->value['annuler'];?>
</div><?php }?>
						<?php }?>
						<div id="loaderBtnAction"></div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="clear"></div>
			</div><!--footerContent-->
		</div><!--contentPage-->
	</div><!--mainContentPage-->
</div><!--mainContent-->
<script type="text/javascript" >

// déclaration des langues PHP en JS
// langues administration
<?php $_smarty_tpl->tpl_vars['listLg'] = new Smarty_variable('[', null, 0);?>
<?php $_smarty_tpl->tpl_vars['sep'] = new Smarty_variable('', null, 0);?>
<?php  $_smarty_tpl->tpl_vars['titlg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['titlg']->_loop = false;
 $_smarty_tpl->tpl_vars['clg'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['myAdmin']->value->LIST_LANG_DATAS; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['titlg']->key => $_smarty_tpl->tpl_vars['titlg']->value) {
$_smarty_tpl->tpl_vars['titlg']->_loop = true;
 $_smarty_tpl->tpl_vars['clg']->value = $_smarty_tpl->tpl_vars['titlg']->key;
?>
	<?php $_smarty_tpl->tpl_vars['listLg'] = new Smarty_variable(($_smarty_tpl->tpl_vars['listLg']->value).($_smarty_tpl->tpl_vars['sep']->value), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['listLg'] = new Smarty_variable(($_smarty_tpl->tpl_vars['listLg']->value).("'"), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['listLg'] = new Smarty_variable(($_smarty_tpl->tpl_vars['listLg']->value).($_smarty_tpl->tpl_vars['clg']->value), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['listLg'] = new Smarty_variable(($_smarty_tpl->tpl_vars['listLg']->value).("'"), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['sep'] = new Smarty_variable(',', null, 0);?>
<?php } ?>
<?php $_smarty_tpl->tpl_vars['listLg'] = new Smarty_variable(($_smarty_tpl->tpl_vars['listLg']->value).("];"), null, 0);?>
var lang_admin = <?php echo $_smarty_tpl->tpl_vars['listLg']->value;?>


// extensions langues
<?php $_smarty_tpl->tpl_vars['listLg'] = new Smarty_variable('[', null, 0);?>
<?php $_smarty_tpl->tpl_vars['sep'] = new Smarty_variable('', null, 0);?>
<?php  $_smarty_tpl->tpl_vars['extlg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['extlg']->_loop = false;
 $_smarty_tpl->tpl_vars['clg'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['myAdmin']->value->LIST_LANG_EXTENSION_FIELD; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['extlg']->key => $_smarty_tpl->tpl_vars['extlg']->value) {
$_smarty_tpl->tpl_vars['extlg']->_loop = true;
 $_smarty_tpl->tpl_vars['clg']->value = $_smarty_tpl->tpl_vars['extlg']->key;
?>
	<?php $_smarty_tpl->tpl_vars['listLg'] = new Smarty_variable(($_smarty_tpl->tpl_vars['listLg']->value).($_smarty_tpl->tpl_vars['sep']->value), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['listLg'] = new Smarty_variable(($_smarty_tpl->tpl_vars['listLg']->value).("'_"), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['listLg'] = new Smarty_variable(($_smarty_tpl->tpl_vars['listLg']->value).($_smarty_tpl->tpl_vars['clg']->value), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['listLg'] = new Smarty_variable(($_smarty_tpl->tpl_vars['listLg']->value).("'"), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['sep'] = new Smarty_variable(',', null, 0);?>
<?php } ?>
<?php $_smarty_tpl->tpl_vars['listLg'] = new Smarty_variable(($_smarty_tpl->tpl_vars['listLg']->value).("];"), null, 0);?>
var lang_extension = <?php echo $_smarty_tpl->tpl_vars['listLg']->value;?>


// langues controles
<?php $_smarty_tpl->tpl_vars['listLg'] = new Smarty_variable('[', null, 0);?>
<?php $_smarty_tpl->tpl_vars['sep'] = new Smarty_variable('', null, 0);?>
<?php  $_smarty_tpl->tpl_vars['extlg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['extlg']->_loop = false;
 $_smarty_tpl->tpl_vars['clg'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['thisSite']->value->LIST_LANG_CONTROLE; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['extlg']->key => $_smarty_tpl->tpl_vars['extlg']->value) {
$_smarty_tpl->tpl_vars['extlg']->_loop = true;
 $_smarty_tpl->tpl_vars['clg']->value = $_smarty_tpl->tpl_vars['extlg']->key;
?>
	<?php $_smarty_tpl->tpl_vars['listLg'] = new Smarty_variable(($_smarty_tpl->tpl_vars['listLg']->value).($_smarty_tpl->tpl_vars['sep']->value), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['listLg'] = new Smarty_variable(($_smarty_tpl->tpl_vars['listLg']->value).("'"), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['listLg'] = new Smarty_variable(($_smarty_tpl->tpl_vars['listLg']->value).($_smarty_tpl->tpl_vars['clg']->value), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['listLg'] = new Smarty_variable(($_smarty_tpl->tpl_vars['listLg']->value).("'"), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['sep'] = new Smarty_variable(',', null, 0);?>
<?php } ?>
<?php $_smarty_tpl->tpl_vars['listLg'] = new Smarty_variable(($_smarty_tpl->tpl_vars['listLg']->value).("];"), null, 0);?>
var lang_controle = <?php echo $_smarty_tpl->tpl_vars['listLg']->value;?>


$(document).ready(function () {
	
	// Accueil
	$('#logo').click(function (event) { 
		event.preventDefault();
		$("#pageNew").val($(this).attr('href'));
		$( "#form_navigation" ).submit(); 
	});
	
	$('.requestLink').click(function(event) {
		event.preventDefault();
		$("#request").val($(this).attr('data-request'));
		$( "#form_navigation" ).submit(); 
	});
    
	// Ne pas afficher les champs SuperAdmin
	<?php if ($_smarty_tpl->tpl_vars['myAdmin']->value->PRIVILEGE<9) {?>$('.superAdmin').hide();<?php }?>

	// on cache tous les champs les langues sauf la langue en cours
	<?php  $_smarty_tpl->tpl_vars['extlg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['extlg']->_loop = false;
 $_smarty_tpl->tpl_vars['clg'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['myAdmin']->value->LIST_LANG_EXTENSION_FIELD; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['extlg']->key => $_smarty_tpl->tpl_vars['extlg']->value) {
$_smarty_tpl->tpl_vars['extlg']->_loop = true;
 $_smarty_tpl->tpl_vars['clg']->value = $_smarty_tpl->tpl_vars['extlg']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['clg']->value!=$_smarty_tpl->tpl_vars['myAdmin']->value->LANG_DATAS) {?> { $(".lang<?php echo $_smarty_tpl->tpl_vars['extlg']->value;?>
").hide();  }<?php }?>		
	<?php } ?>
			
	// on change de langues des champs
	$('.choixLangue').click(function (event) { 
    	event.preventDefault();
		var newExtlg= $(this).attr('href')
	<?php if ($_smarty_tpl->tpl_vars['reloadLangue']->value==false) {?>	
		<?php  $_smarty_tpl->tpl_vars['extlg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['extlg']->_loop = false;
 $_smarty_tpl->tpl_vars['clg'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['myAdmin']->value->LIST_LANG_EXTENSION_FIELD; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['extlg']->key => $_smarty_tpl->tpl_vars['extlg']->value) {
$_smarty_tpl->tpl_vars['extlg']->_loop = true;
 $_smarty_tpl->tpl_vars['clg']->value = $_smarty_tpl->tpl_vars['extlg']->key;
?>
			$(".lang<?php echo $_smarty_tpl->tpl_vars['extlg']->value;?>
").slideUp(); 	
    	<?php } ?>
		$(".choixLangue").removeClass("actif"); 
		$(this).addClass("actif");    
		$(".lang"+newExtlg).slideDown(); 
	<?php }?> 
	<?php if ($_smarty_tpl->tpl_vars['reloadLangue']->value==true) {?>
		$.ajax({

			type: "POST",
			cache:false,
			url: '<?php echo @constant('DOS_AJAX_ADMIN');?>
ajax_change_langue.php',
			data: 'newextlg='+newExtlg,
				success: function(data) {
					window.location.reload()
				}
		});
	<?php }?>		
	});
				
	// Changement de niveau 1
	$('#niveau0 a.a0').click(function (event) { 
		event.preventDefault();
		$("#newNiveau0").val($(this).attr('href'));
		$( "#form_navigation" ).submit(); 
	});
    
    
    $('.addNiv2').click(function(event) {
        event.stopPropagation();
        $("#pageNew").val($(this).attr('href'));
		$("#newNiveau2").val($(this).attr('niv2'));
		$("#newNiveau0").val($(this).attr('niv0'));
        $("#request").val($(this).attr('niv1'));
		$( "#form_navigation" ).submit(); 
	});
	
    			
	// Changement de niveau 2
	$('#navigationPage li a.n2, .sousmenu0 a').click(function (event) { 
		var xxx=$(this).attr('href');
		if(xxx.match('http:') || xxx.match('https:')){
			//alert(xxx);
		} else { 
			event.preventDefault();
			$("#pageNew").val($(this).attr('href'));
			$("#newNiveau2").val($(this).attr('niv2'));
			$("#newNiveau0").val($(this).attr('niv0'));
			$( "#form_navigation" ).submit(); 
		}
	});
	
	$('#btnProfil').click(function (event) { 
		event.preventDefault();
		$("#pageNew").val($(this).attr('href'));  
		$( "#form_navigation" ).submit(); 
	});	

	// gestion niveau du menu de navigation

	$('#navigationPage li a.n1').click(function () {
 
		if(!$(this).hasClass("open")) {
			$(this).siblings('ul').slideDown('slow');
			$(this).addClass('open');
            var closed=0;	
		} else {
			$(this).siblings('ul').slideUp('slow');
			$(this).removeClass('open');
             var closed=1;	
		}
        
        var n1=$(this).attr("id");
        $.ajax({
			type: "POST",
			cache:false,
			url: '<?php echo @constant('DOS_AJAX_ADMIN');?>
ajax_niv1_closed.php',
			data: 'n1='+ n1 + '&closed=' + closed
		});

		return false;

	});

			
	// on affiche une notification si elle existe 
	<?php if ($_smarty_tpl->tpl_vars['myAdmin']->value->notification!='') {?>
		show_notification("<?php echo $_smarty_tpl->tpl_vars['myAdmin']->value->notification;?>
","<?php echo $_smarty_tpl->tpl_vars['myAdmin']->value->notificationClass;?>
");
	<?php }?>
});

</script>

</body>
</html><?php }} ?>
