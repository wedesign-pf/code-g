<?php /* Smarty version Smarty-3.1.16, created on 2016-01-20 12:13:12
         compiled from "commun\templates\page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1586556a0067852d942-71253022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1ae7e5287b519c4d20479e66fb3dfa06a3b6411' => 
    array (
      0 => 'commun\\templates\\page.tpl',
      1 => 1447793130,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1586556a0067852d942-71253022',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'thisSite' => 0,
    'lg' => 0,
    'MODULE_favicon' => 0,
    'url' => 0,
    'PAGE_css_client' => 0,
    'elt' => 0,
    'PAGE_js_client' => 0,
    'PAGE_head' => 0,
    'PAGE_old_IE' => 0,
    'boutons_partage' => 0,
    'MODULE_header' => 0,
    'MODULE_footer' => 0,
    'PAGE_javascript' => 0,
    'PAGE_doc_ready' => 0,
    'PAGE_win_load' => 0,
    'PAGE_footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56a00678c8ea57_21747644',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a00678c8ea57_21747644')) {function content_56a00678c8ea57_21747644($_smarty_tpl) {?><!DOCTYPE html>
<!--[if IE 8]><html xmlns="http://www.w3.org/1999/xhtml" prefix="og: http://ogp.me/ns#" lang="<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->current_lang;?>
" class="ie8 ie"> <![endif]-->
<!--[if IE 9]><html xmlns="http://www.w3.org/1999/xhtml" prefix="og: http://ogp.me/ns#" lang="<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->current_lang;?>
" class="ie9 ie"> <![endif]-->
<!--[if gte IE 9]><html xmlns="http://www.w3.org/1999/xhtml" prefix="og: http://ogp.me/ns#" lang="<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->current_lang;?>
" class="ie10 ie"> <![endif]-->
<!--[if !(IE)]><!-->
<html itemscope itemtype="http://schema.org/WebPage" xmlns="http://www.w3.org/1999/xhtml" prefix="og: http://ogp.me/ns#" lang="<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->current_lang;?>
">
<!--<![endif]-->
<head>
<!--[if !IE]><!--><script>
if (/*@cc_on!@*/false) {
    document.documentElement.className+=' ie10';
}
</script><!--<![endif]-->
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="HandheldFriendly" content="True"/>
<meta name="format-detection" content="telephone=no"/>
<meta name="robots" content="<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->metaTags['robots'];?>
" />
<meta name="author" content="<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->AUTHOR;?>
" />
<base href="<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->racineWithLang;?>
" target="_self" />
<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->current_urlCanonical;?>
" />
<title><?php echo $_smarty_tpl->tpl_vars['thisSite']->value->metaTags['title'];?>
</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->metaTags['keywords'];?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->metaTags['description'];?>
" />
<!-- FB OPENGRAPH -->
<meta property="og:site_name" content="<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->siteTitle;?>
" />
<meta property="og:type" content="website" />
<meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->socialTags['titre'];?>
" />   
<meta property="og:description" content="<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->socialTags['texte'];?>
" />  
<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->socialTags['image'];?>
" />
<meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->socialTags['lien'];?>
" />
<?php  $_smarty_tpl->tpl_vars['liblg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['liblg']->_loop = false;
 $_smarty_tpl->tpl_vars['lg'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['thisSite']->value->LIST_LANG; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['liblg']->key => $_smarty_tpl->tpl_vars['liblg']->value) {
$_smarty_tpl->tpl_vars['liblg']->_loop = true;
 $_smarty_tpl->tpl_vars['lg']->value = $_smarty_tpl->tpl_vars['liblg']->key;
?>
<?php if ($_smarty_tpl->tpl_vars['lg']->value==$_smarty_tpl->tpl_vars['thisSite']->value->current_lang) {?>
<meta property="og:locale" content="<?php echo $_smarty_tpl->tpl_vars['lg']->value;?>
" />
<?php } else { ?>
<meta property="og:locale:alternate" content="<?php echo $_smarty_tpl->tpl_vars['lg']->value;?>
" />
<link rel="alternate" href="<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->RACINE;?>
<?php echo $_smarty_tpl->tpl_vars['lg']->value;?>
" hreflang="<?php echo $_smarty_tpl->tpl_vars['lg']->value;?>
" />
<?php }?>
<?php } ?>
<!-- TWITTER CARD -->
<meta name="twitter:card" content="summary">
<meta name="twitter:url" content="<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->socialTags['lien'];?>
">
<meta name="twitter:title" content="<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->socialTags['titre'];?>
">
<meta name="twitter:description" content="<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->socialTags['texte'];?>
">
<meta name="twitter:image" content="<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->socialTags['image'];?>
">
<!-- RICH SNIPPET -->
<script type="application/ld+json">
{   "@context" : "http://schema.org",
    "@type" : "Organization",
    "name" : "<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->siteTitle;?>
",
    "url" : "<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->racineWithLang;?>
",
    "logo" : "<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->socialTags['image'];?>
",
    <?php echo $_smarty_tpl->tpl_vars['thisSite']->value->richSnippet;?>

}
</script>

<!-- LINKS -->
<?php echo $_smarty_tpl->tpl_vars['MODULE_favicon']->value;?>

<link rel="image_src" href="<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->socialTags['image'];?>
" />
<!-- pré-chargements -->
<?php  $_smarty_tpl->tpl_vars['url'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['url']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['thisSite']->value->DNS_PREFETCH; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['url']->key => $_smarty_tpl->tpl_vars['url']->value) {
$_smarty_tpl->tpl_vars['url']->_loop = true;
?>
<link rel="dns-prefetch" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">
<?php } ?>

<link href="<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->DOS_BASE_CSS;?>
reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->skin;?>
base.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->skin;?>
style.css" rel="stylesheet" type="text/css" />
<?php if ($_smarty_tpl->tpl_vars['thisSite']->value->printCSS==true) {?><link href="<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->skin;?>
print.css" rel="stylesheet" type="text/css" media="print"/><?php }?>
<link href="<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->skin;?>
font-awesome.css" rel="stylesheet" type="text/css" />
<?php if ($_smarty_tpl->tpl_vars['PAGE_css_client']->value[0]!='') {?>
<?php  $_smarty_tpl->tpl_vars['elt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['elt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PAGE_css_client']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['elt']->key => $_smarty_tpl->tpl_vars['elt']->value) {
$_smarty_tpl->tpl_vars['elt']->_loop = true;
?>
<link href="<?php echo $_smarty_tpl->tpl_vars['elt']->value;?>
" rel="stylesheet" type="text/css" />
<?php } ?>
<?php }?>
<link href="<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->skin;?>
responsive.css" rel="stylesheet" type="text/css" />

<!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->DOS_BASE;?>
js/<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->JQUERY1;?>
"></script>
<![endif]-->
<!--[if (gte IE 9) | (!IE)]><!-->
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->DOS_BASE;?>
js/<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->JQUERY2;?>
"></script>
<!--<![endif]-->
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->DOS_BASE;?>
js/<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->JQUERYM;?>
"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->DOS_BASE;?>
js/commun.js"></script>
<?php if ($_smarty_tpl->tpl_vars['PAGE_js_client']->value[0]!='') {?>
<?php  $_smarty_tpl->tpl_vars['elt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['elt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PAGE_js_client']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['elt']->key => $_smarty_tpl->tpl_vars['elt']->value) {
$_smarty_tpl->tpl_vars['elt']->_loop = true;
?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['elt']->value;?>
"></script>
<?php } ?>
<?php }?>

<?php  $_smarty_tpl->tpl_vars['elt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['elt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PAGE_head']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['elt']->key => $_smarty_tpl->tpl_vars['elt']->value) {
$_smarty_tpl->tpl_vars['elt']->_loop = true;
?>
<?php if ($_smarty_tpl->tpl_vars['elt']->value!='') {?> <?php echo $_smarty_tpl->tpl_vars['elt']->value;?>
 <?php }?>
<?php } ?>
<?php if ($_smarty_tpl->tpl_vars['thisSite']->value->googleAnalytics!=''&&$_smarty_tpl->tpl_vars['thisSite']->value->SERVER!="local") {?>
<script><?php echo $_smarty_tpl->tpl_vars['thisSite']->value->googleAnalytics;?>
</script>
<?php }?>
<?php echo $_smarty_tpl->tpl_vars['PAGE_old_IE']->value;?>

</head>
<body>
<?php if ($_smarty_tpl->tpl_vars['thisSite']->value->LOADER_PAGE==1) {?><div id="loaderPage"></div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['boutons_partage']->value==1) {?>

<?php }?>
<a id="top"></a>

<?php echo $_smarty_tpl->tpl_vars['MODULE_header']->value;?>

<?php if ($_smarty_tpl->tpl_vars['thisSite']->value->current_scriptTPL!='') {?> <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['thisSite']->value->current_scriptTPL), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }?>
<?php echo $_smarty_tpl->tpl_vars['MODULE_footer']->value;?>

<?php if ($_smarty_tpl->tpl_vars['thisSite']->value->cookiesAccept==1&&$_smarty_tpl->tpl_vars['thisSite']->value->current_lang=="fr") {?>
<div id="cookiesOK">
	En poursuivant votre navigation sur ce site, vous acceptez l'utilisation des cookies qui nous permettent de vous proposer des services et une offre adapt&eacute;s &agrave; vos centres d'int&eacute;r&ecirc;ts. <a href="cookies_cgu" target="_blank">(En savoir plus)</a>
    <div class="close">OK</div>
</div>
<?php }?>

<script type="text/javascript" >
    var loader_page=<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->LOADER_PAGE;?>
;

    
<?php if ($_smarty_tpl->tpl_vars['PAGE_javascript']->value[0]!='') {?>

<?php  $_smarty_tpl->tpl_vars['elt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['elt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PAGE_javascript']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['elt']->key => $_smarty_tpl->tpl_vars['elt']->value) {
$_smarty_tpl->tpl_vars['elt']->_loop = true;
?>
	<?php if ($_smarty_tpl->tpl_vars['elt']->value!='') {?> <?php echo $_smarty_tpl->tpl_vars['elt']->value;?>
 <?php }?>
<?php } ?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['PAGE_doc_ready']->value[0]!='') {?>

$(document).ready( function(){
<?php  $_smarty_tpl->tpl_vars['elt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['elt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PAGE_doc_ready']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['elt']->key => $_smarty_tpl->tpl_vars['elt']->value) {
$_smarty_tpl->tpl_vars['elt']->_loop = true;
?>
	<?php if ($_smarty_tpl->tpl_vars['elt']->value!='') {?> <?php echo $_smarty_tpl->tpl_vars['elt']->value;?>
 <?php }?>
<?php } ?>
});
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['PAGE_win_load']->value[0]!='') {?>

$(window).on("load", function() {

<?php  $_smarty_tpl->tpl_vars['elt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['elt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PAGE_win_load']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['elt']->key => $_smarty_tpl->tpl_vars['elt']->value) {
$_smarty_tpl->tpl_vars['elt']->_loop = true;
?>
	<?php if ($_smarty_tpl->tpl_vars['elt']->value!='') {?> <?php echo $_smarty_tpl->tpl_vars['elt']->value;?>
 <?php }?>
<?php } ?>
});
<?php }?>
</script>
<?php if ($_smarty_tpl->tpl_vars['PAGE_footer']->value[0]!='') {?>

<?php  $_smarty_tpl->tpl_vars['elt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['elt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PAGE_footer']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['elt']->key => $_smarty_tpl->tpl_vars['elt']->value) {
$_smarty_tpl->tpl_vars['elt']->_loop = true;
?>
   <?php if ($_smarty_tpl->tpl_vars['elt']->value!='') {?> <?php echo $_smarty_tpl->tpl_vars['elt']->value;?>
 <?php }?>
<?php } ?>
<?php }?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->DOS_CLIENT;?>
js/page.js"></script>
<?php if ($_smarty_tpl->tpl_vars['thisSite']->value->current_scriptJS!='') {?> <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->current_scriptJS;?>
"></script><?php }?>
</body>
</html><?php }} ?>
