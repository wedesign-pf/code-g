<?php /* Smarty version Smarty-3.1.16, created on 2016-01-20 12:13:12
         compiled from "client\_modules\_footer\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1145656a006784b3b46-85078346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9cfc56ba27e5f760c2be7a5e6305fbd6e871025' => 
    array (
      0 => 'client\\_modules\\_footer\\footer.tpl',
      1 => 1452539748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1145656a006784b3b46-85078346',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56a006784b3b44_27897682',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a006784b3b44_27897682')) {function content_56a006784b3b44_27897682($_smarty_tpl) {?></div>
<script>
    $(document).ready(function() {
        
		$('#dataTables-example').DataTable({
                responsive: true
        });
		
		$('[data-toggle="tooltip"]').tooltip();
		
		$('#tabsModalClient a').click(function (e) {
			  e.preventDefault();
			  $(this).tab('show');
		})
		
    });
    </script><?php }} ?>
