<?php /* Smarty version Smarty-3.1.16, created on 2016-01-20 12:13:09
         compiled from "client\_modules\_header\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:365156a006759c6201-47761898%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b33bf5808057ca6afd8eb6d4d9b7c2aec427159' => 
    array (
      0 => 'client\\_modules\\_header\\header.tpl',
      1 => 1453313376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '365156a006759c6201-47761898',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'thisSite' => 0,
    'user_titre' => 0,
    'list_projet' => 0,
    'projet' => 0,
    'list_categorie' => 0,
    'categorie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56a00675ab9e00_70141933',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a00675ab9e00_70141933')) {function content_56a00675ab9e00_70141933($_smarty_tpl) {?>    <div id="wrapper" style="margin-top:-20px">
        <!-- Top Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;background: #FFFFFF;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->RACINE;?>
accueil">Ia orana, <?php echo $_smarty_tpl->tpl_vars['user_titre']->value;?>
</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->RACINE;?>
deconnexion"><i class="fa fa-sign-out fa-fw"></i> Déconnexion</a></li>
            </ul>
            <!-- /.navbar-top-links -->
        </nav><!-- /.Top Navigation -->
    
        <!-- Navigation sidebar left -->
        <div class="navbar-default sidebar sidebar-nav navbar-collapse collapse" aria-expanded="false" role="navigation" style="margin-top: 0;">
            <div class="bs-example bs-example-tabs" data-example-id="togglable-tabs"> 
                <!-- Links Tabs -->
                <ul id="myTabs" class="nav nav-tabs" role="tablist"> 
                    <li role="presentation" class="active">
                        <a href="#projets" id="home-tab" role="tab" data-toggle="tab" aria-controls="projets" aria-expanded="true" style="height: 50px;"><i class="fa fa-briefcase"></i> Projets</a>
                    </li> 
                    <li role="presentation" class="">
                        <a href="#categories" role="tab" id="profile-tab" data-toggle="tab" aria-controls="categories" aria-expanded="false" style="height: 50px;">
                            <i class="fa fa-tags"></i> Categories</a>
                    </li> 
                </ul> 
                <!-- ./Links Tabs -->
                <!-- Contents Tabs -->
                <div id="myTabContent" class="tab-content"> 
                    <div role="tabpanel" class="tab-pane fade active in" id="projets" aria-labelledby="home-tab"> 
                        <ul id="side-menu" class="nav in projet">  
                            <?php  $_smarty_tpl->tpl_vars['projet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['projet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_projet']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['projet']->key => $_smarty_tpl->tpl_vars['projet']->value) {
$_smarty_tpl->tpl_vars['projet']->_loop = true;
?>
                                <li><span data-onglet="Projet" data-id="<?php echo $_smarty_tpl->tpl_vars['projet']->value['id'];?>
"class="projet"><?php echo $_smarty_tpl->tpl_vars['projet']->value['titre'];?>
</span></li>                               
                            <?php } ?>
                        </ul>
                    </div> 
                    <div role="tabpanel" class="tab-pane fade" id="categories" aria-labelledby="profile-tab">
                         <ul class="nav in" id="side-menu">    
                            <?php  $_smarty_tpl->tpl_vars['categorie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categorie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_categorie']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categorie']->key => $_smarty_tpl->tpl_vars['categorie']->value) {
$_smarty_tpl->tpl_vars['categorie']->_loop = true;
?>
                            <li><span data-onglet="Categorie" data-id="<?php echo $_smarty_tpl->tpl_vars['categorie']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['categorie']->value['titre'];?>
</span></li>
                            <?php } ?>
                        </ul>
                    </div> 
                </div>
                <!-- /.Contents Tabs -->
            </div>
        </div><!-- /.Navigation sidebar left -->    
        
        <div id="page-wrapper"></div>

<script>

   $( "#side-menu li span" ).click(function (e) { 

        Onglet  = $(this).attr("data-onglet");
        Id      = $(this).attr("data-id");
        Value  = $(this).text();

        $("#page-wrapper").fadeOut();
        $("#loader-gif").fadeIn();

        $.ajax({
            type: "GET",
            cache:false,
            url: '<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->DOS_CLIENT;?>
_modules/ajax/element.php',
            data:{ onglet: Onglet , id: Id, value:Value},
            dataType: 'html',
                success: function(donnee) {
                    $("#page-wrapper").empty();
                    $("#page-wrapper").append(donnee);
                    $("#loader-gif").fadeOut();
                    $("#page-wrapper").fadeIn();
                    }
        });
   });




    // Au chargement de la page
    jQuery(document).ready(function(){

        // Activé le lien sur le premier lien
        $('#side-menu.projet li:first-child').addClass('active');

        // Au clic sur la navigation "sidebar-right"
        $('#side-menu li').click(function(){

            $('#side-menu li').removeClass('active');
            $(this).addClass('active');
        }); 



        /****************************************/



        Onglet  = $("#side-menu.projet li:first-child span").attr("data-onglet");
        Id      = $("#side-menu.projet li:first-child span").attr("data-id");
        Value  = $("#side-menu.projet li:first-child").text();



        $.ajax({
            type: "GET",
            cache:false,
            url: '<?php echo $_smarty_tpl->tpl_vars['thisSite']->value->DOS_CLIENT;?>
_modules/ajax/element.php',
            data:{ onglet: Onglet , id: Id, value:Value},
            dataType: 'html',
                success: function(donnee) {
                    $("#page-wrapper").empty();
                    $("#page-wrapper").append(donnee);

                    }
        });
        

        


    });


</script><?php }} ?>
