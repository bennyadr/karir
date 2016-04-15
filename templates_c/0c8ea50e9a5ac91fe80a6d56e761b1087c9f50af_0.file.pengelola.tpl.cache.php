<?php /* Smarty version 3.1.27, created on 2016-03-17 05:09:49
         compiled from "C:\xampp\htdocs\sip\templates\pengelola.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2966756ea2e0d8b6583_39949059%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c8ea50e9a5ac91fe80a6d56e761b1087c9f50af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\pengelola.tpl',
      1 => 1456301560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2966756ea2e0d8b6583_39949059',
  'variables' => 
  array (
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56ea2e0d8bc2d9_84858588',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ea2e0d8bc2d9_84858588')) {
function content_56ea2e0d8bc2d9_84858588 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2966756ea2e0d8b6583_39949059';
?>
				<!-- User dropdown -->
				<div class="user-menu dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="images/admin.png">
						<div class="user-info">
							Pengelola Website <span><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span>
						</div>
					</a>
					
				</div>
				<!-- /user dropdown --><?php }
}
?>