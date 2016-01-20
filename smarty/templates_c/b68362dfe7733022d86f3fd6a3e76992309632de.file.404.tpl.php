<?php /* Smarty version Smarty-3.1.16, created on 2016-01-20 10:07:47
         compiled from "client\_pages_std\404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5320569fe913936549-87199534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b68362dfe7733022d86f3fd6a3e76992309632de' => 
    array (
      0 => 'client\\_pages_std\\404.tpl',
      1 => 1451500446,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5320569fe913936549-87199534',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'thisSite' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_569fe913973447_35510587',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569fe913973447_35510587')) {function content_569fe913973447_35510587($_smarty_tpl) {?><div id="page-wrapper" style="min-height: 888px;">
    <div class="row">
        <div class="col-sm-12">
            <div class="jumbotron">
                <div class="container">
                      <h1>OUPS!</h1>
                      <p>Page inconnue</p>
                      <p><a href="<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->racineWithLang;?>
">Cliquez ici pour être redirigé vers la page d'accueil du site</a></p>
                </div>
            </div>
        </div>
    </div>
</div><?php }} ?>
