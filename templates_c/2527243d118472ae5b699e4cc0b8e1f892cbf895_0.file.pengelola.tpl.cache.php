<?php /* Smarty version 3.1.27, created on 2016-04-16 05:37:31
         compiled from "C:\xampp\htdocs\karir\templates\pengelola.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:128355711b37b3e1221_04287499%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2527243d118472ae5b699e4cc0b8e1f892cbf895' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karir\\templates\\pengelola.tpl',
      1 => 1456301560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128355711b37b3e1221_04287499',
  'variables' => 
  array (
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5711b37b3eae29_19357790',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5711b37b3eae29_19357790')) {
function content_5711b37b3eae29_19357790 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '128355711b37b3e1221_04287499';
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