<?php /* Smarty version 3.1.27, created on 2016-02-23 07:07:35
         compiled from "C:\xampp\htdocs\sip\templates\block.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2556156cbf727be2f94_11415163%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c77e5356e574b0a01d6e5e588a9650ffb230080c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\block.tpl',
      1 => 1455159385,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2556156cbf727be2f94_11415163',
  'variables' => 
  array (
    'statuslogin' => 0,
    'namalpk' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56cbf727c33366_07027320',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56cbf727c33366_07027320')) {
function content_56cbf727c33366_07027320 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2556156cbf727be2f94_11415163';
?>
<!-- Info Block -->
<?php if ($_smarty_tpl->tpl_vars['statuslogin']->value == "0") {?>
<ul class="info-blocks">
				<li class="bg-primary">
					<div class="top-info">
						<a href="profile.php">Profile</a>
						<small>Data LPK Swasta</small>
					</div>
					<a href="profile.php"><i class="icon-profile"></i></a>
					<span class="bottom-info bg-danger"><?php echo $_smarty_tpl->tpl_vars['namalpk']->value;?>
</span>
				</li>
				<li class="bg-success">
					<div class="top-info">
						<a href="kejuruan.php">Kejuruan</a>
						<small>Kejuruan dan TUK</small>
					</div>
					<a href="kejuruan.php"><i class="icon-clipboard"></i></a>
					<span class="bottom-info bg-primary"><?php echo $_smarty_tpl->tpl_vars['namalpk']->value;?>
</span>
				</li>
				<li class="bg-danger">
					<div class="top-info">
						<a href="pegawai.php">Pegawai</a>
						<small>Instruktur dan Tenaga</small>
					</div>
					<a href="pegawai.php"><i class="icon-accessibility"></i></a>
					<span class="bottom-info bg-primary"><?php echo $_smarty_tpl->tpl_vars['namalpk']->value;?>
</span>
				</li>
				<li class="bg-info">
					<div class="top-info">
						<a href="uploadfoto.php">Upload Photo</a>
						<small>Tampilan LPK Swasta</small>
					</div>
					<a href="uploadfoto.php"><i class="icon-camera"></i></a>
					<span class="bottom-info bg-primary"><?php echo $_smarty_tpl->tpl_vars['namalpk']->value;?>
</span>
				</li>
				<li class="bg-warning">
					<div class="top-info">
						<a href="peserta.php">Peserta</a>
						<small>Data Peserta Uji</small>
					</div>
					<a href="peserta.php"><i class="icon-users"></i></a>
					<span class="bottom-info bg-primary"><?php echo $_smarty_tpl->tpl_vars['namalpk']->value;?>
</span>
				</li>
				<li class="bg-primary">
					<div class="top-info">
						<a href="printout.php?username=<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
">Print Out</a>
						<small>Cetak Profile Lembaga</small>
					</div>
					<a href="printout.php?username=<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
"><i class="icon-print"></i></a>
					<span class="bottom-info bg-danger"><?php echo $_smarty_tpl->tpl_vars['namalpk']->value;?>
</span>
				</li>
			</ul>
<?php }?>
				<!-- /main navigation --><?php }
}
?>