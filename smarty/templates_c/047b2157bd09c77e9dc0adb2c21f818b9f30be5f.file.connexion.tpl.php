<?php /* Smarty version Smarty-3.1.16, created on 2016-01-21 14:15:19
         compiled from "client\_pages\connexion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3217956a17497329433-63727681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '047b2157bd09c77e9dc0adb2c21f818b9f30be5f' => 
    array (
      0 => 'client\\_pages\\connexion.tpl',
      1 => 1449684111,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3217956a17497329433-63727681',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56a174973a3236_14586438',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a174973a3236_14586438')) {function content_56a174973a3236_14586438($_smarty_tpl) {?><div class="row connexion">
    <div class="col-md-4 col-md-offset-4">
        <h1 class="text-center">Code générale</h1>
        <div class="login-panel panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Connexion</h3>
            </div>
            <div class="panel-body">
                <form role="form" method="post" action="">
                    <fieldset>
                        <div class="form-group">
                          <input class="form-control" placeholder="Adresse mail" name="email" type="email" value=""  required autofocus>
                            <?php if ($_smarty_tpl->tpl_vars['errors']->value['email']) {?>
                                <span style="color:#a94442;"><?php echo $_smarty_tpl->tpl_vars['errors']->value['email'];?>
</span>
                            <?php }?>
                        </div>
                        <br/>
                        <div class="form-group">
                            <input class="form-control" placeholder="Mot de passe" name="password" value="mpd" type="password" value="" required>
                            <?php if ($_smarty_tpl->tpl_vars['errors']->value['password']) {?>
                                <span style="color:#a94442;"><?php echo $_smarty_tpl->tpl_vars['errors']->value['password'];?>
</span>
                            <?php }?>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox" value="remember">Se souvenir de moi
                            </label>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['errors']->value['connexion']) {?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $_smarty_tpl->tpl_vars['errors']->value['connexion'];?>

                            </div>
                        <?php }?>
                        <!-- Change this to a button or input when using this as a form -->
                        <input  type="submit" class="btn btn-sm btn-primary btn-block" value="Se connecter" > 
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<?php }} ?>
