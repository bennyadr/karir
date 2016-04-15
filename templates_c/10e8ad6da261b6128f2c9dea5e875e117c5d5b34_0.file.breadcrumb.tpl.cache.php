<?php /* Smarty version 3.1.27, created on 2016-03-17 05:09:49
         compiled from "C:\xampp\htdocs\sip\templates\breadcrumb.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1141756ea2e0d9ad3a0_00949442%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10e8ad6da261b6128f2c9dea5e875e117c5d5b34' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\breadcrumb.tpl',
      1 => 1456208216,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1141756ea2e0d9ad3a0_00949442',
  'variables' => 
  array (
    'statuslogin' => 0,
    'samping' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56ea2e0da10218_62341185',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ea2e0da10218_62341185')) {
function content_56ea2e0da10218_62341185 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1141756ea2e0d9ad3a0_00949442';
?>
<!-- Info Block -->
<?php if ($_smarty_tpl->tpl_vars['statuslogin']->value == "0") {?>
<div class="breadcrumb-line">
				<ul class="breadcrumb">
					<li><a href="index.php?action=home">Home</a></li>
					 <?php if ($_smarty_tpl->tpl_vars['samping']->value == "1") {?><li class="active">Dashboard</li><?php }?>
					 <?php if ($_smarty_tpl->tpl_vars['samping']->value == "2") {?><li class="active">Profile</li><?php }?>
					 <?php if ($_smarty_tpl->tpl_vars['samping']->value == "3") {?><li class="active">Form Permohonan</li><?php }?>
					 <?php if ($_smarty_tpl->tpl_vars['samping']->value == "4") {?><li class="active">Payroll</li><?php }?>
					 <?php if ($_smarty_tpl->tpl_vars['samping']->value == "5") {?><li class="active">Change PAssword</li><?php }?>
				</ul>
				<div class="visible-xs breadcrumb-toggle">
					<a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
				</div>
			</div>
<?php } elseif ($_smarty_tpl->tpl_vars['statuslogin']->value == "1") {?>			
<div class="breadcrumb-line">
				<ul class="breadcrumb">
					<li><a href="index.php?action=showmenu">Home</a></li>
					 <?php if ($_smarty_tpl->tpl_vars['samping']->value == "21") {?><li class="active">Data Pegawai</li><?php }?>
					 <?php if ($_smarty_tpl->tpl_vars['samping']->value == "22") {?><li class="active">Daftar Cuti Pegawai</li><?php }?>
					 <?php if ($_smarty_tpl->tpl_vars['samping']->value == "23") {?><li class="active">Daftar Pengumuman/News</li><?php }?>
					 <?php if ($_smarty_tpl->tpl_vars['samping']->value == "31") {?><li class="active">Upload Data Pendukung</li><?php }?>
					 <?php if ($_smarty_tpl->tpl_vars['samping']->value == "32") {?><li class="active">Upload Data Finger Print</li><?php }?>
					 <?php if ($_smarty_tpl->tpl_vars['samping']->value == "33") {?><li class="active">Pendapatan</li><?php }?>
					 <?php if ($_smarty_tpl->tpl_vars['samping']->value == "34") {?><li class="active">Potongan</li><?php }?>
					 <?php if ($_smarty_tpl->tpl_vars['samping']->value == "35") {?><li class="active">Payroll (Penggajian)</li><?php }?>
					 <?php if ($_smarty_tpl->tpl_vars['samping']->value == "4") {?><li class="active">Laporan</li><?php }?>
				</ul>
				<div class="visible-xs breadcrumb-toggle">
					<a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
				</div>
			</div>

<?php }?>
				<!-- /main navigation --><?php }
}
?>