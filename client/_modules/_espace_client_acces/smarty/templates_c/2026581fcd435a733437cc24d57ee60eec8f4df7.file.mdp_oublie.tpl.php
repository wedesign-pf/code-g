<?php /* Smarty version Smarty-3.1.16, created on 2015-10-29 13:58:57
         compiled from "..\..\..\client\email_templates\mdp_oublie.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142335632b2c18a0134-78969938%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2026581fcd435a733437cc24d57ee60eec8f4df7' => 
    array (
      0 => '..\\..\\..\\client\\email_templates\\mdp_oublie.tpl',
      1 => 1446160736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142335632b2c18a0134-78969938',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'login' => 0,
    'mdp' => 0,
    'thisSite' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5632b2c19185f0_26962517',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5632b2c19185f0_26962517')) {function content_5632b2c19185f0_26962517($_smarty_tpl) {?><html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" />
<style>
</style>
</head>
<body>
Ia orana <?php echo $_smarty_tpl->tpl_vars['login']->value;?>
,
<br><br>
 Le mot de passe de votre compte CARREFOUR est:  <?php echo $_smarty_tpl->tpl_vars['mdp']->value;?>

 <br><br>
 Merci pour votre confiance et votre fidélité.
<br>
<img src="<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->RACINE;?>
<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->DOS_CLIENT;?>
files/logo2.png" />
</p>
</body>
</html><?php }} ?>
