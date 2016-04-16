<?php /* Smarty version 3.1.27, created on 2016-04-16 05:37:31
         compiled from "C:\xampp\htdocs\karir\templates\breadcrumb.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:135295711b37b809771_17201609%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de2b6711481e58d8ed9cdc4d37d7abac51ab1f6b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karir\\templates\\breadcrumb.tpl',
      1 => 1459824448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135295711b37b809771_17201609',
  'variables' => 
  array (
    'statuslogin' => 0,
    'samping' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5711b37b91ba68_36588806',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5711b37b91ba68_36588806')) {
function content_5711b37b91ba68_36588806 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '135295711b37b809771_17201609';
?>
<!-- Info Block -->
<?php if ($_smarty_tpl->tpl_vars['statuslogin']->value == "0") {?>
<div class="breadcrumb-line">
				<ul class="breadcrumb">
					<li><a href="index.php?action=home">Home</a></li>
					 <?php if ($_smarty_tpl->tpl_vars['samping']->value == "1") {?><li class="active">Dashboard</li><?php }?>
					 <?php if ($_smarty_tpl->tpl_vars['samping']->value == "2") {?><li class="active">Profile</li><?php }?>
					 <?php if ($_smarty_tpl->tpl_vars['samping']->value == "3") {?><li class="active">Pengukuran Kompetensi</li><?php }?>
					 <?php if ($_smarty_tpl->tpl_vars['samping']->value == "4") {?><li class="active">Karir</li><?php }?>
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
					 <?php if ($_smarty_tpl->tpl_vars['samping']->value == "22") {?><li class="active">Pendidikan</li><?php }?>
					 <?php if ($_smarty_tpl->tpl_vars['samping']->value == "23") {?><li class="active">Eselon</li><?php }?>
					 <?php if ($_smarty_tpl->tpl_vars['samping']->value == "24") {?><li class="active">Unit Kerja</li><?php }?>
					 <?php if ($_smarty_tpl->tpl_vars['samping']->value == "25") {?><li class="active">Jabatan</li><?php }?>
					 <?php if ($_smarty_tpl->tpl_vars['samping']->value == "26") {?><li class="active">Kelompok Jabatan</li><?php }?>
					 <?php if ($_smarty_tpl->tpl_vars['samping']->value == "27") {?><li class="active">Tingkat Jabatan</li><?php }?>
					 <?php if ($_smarty_tpl->tpl_vars['samping']->value == "28") {?><li class="active">Kamus Kompetensi</li><?php }?>
					 <?php if ($_smarty_tpl->tpl_vars['samping']->value == "29") {?><li class="active">Matrik Kompetensi</li><?php }?>
					 <?php if ($_smarty_tpl->tpl_vars['samping']->value == "30") {?><li class="active">Arah Karir</li><?php }?>
					 <?php if ($_smarty_tpl->tpl_vars['samping']->value == "31") {?><li class="active">Kompetensi Jabatan</li><?php }?>
					 <?php if ($_smarty_tpl->tpl_vars['samping']->value == "32") {?><li class="active">Pengukuran Kompetensi Pegawai</li><?php }?>
					 <?php if ($_smarty_tpl->tpl_vars['samping']->value == "33") {?><li class="active">Hasil Pengukuran Kompetensi</li><?php }?>
					 <?php if ($_smarty_tpl->tpl_vars['samping']->value == "34") {?><li class="active">Kinerja Pegawai</li><?php }?>
					 <?php if ($_smarty_tpl->tpl_vars['samping']->value == "35") {?><li class="active">Peluang Karir (Jabatan)</li><?php }?>
					 <?php if ($_smarty_tpl->tpl_vars['samping']->value == "36") {?><li class="active">Posisi Jabatan Kosong</li><?php }?>
					 <?php if ($_smarty_tpl->tpl_vars['samping']->value == "37") {?><li class="active">Peluang Karir Pegawai</li><?php }?>
					 <?php if ($_smarty_tpl->tpl_vars['samping']->value == "38") {?><li class="active">Calon Pemegang Jabatan</li><?php }?>
				</ul>
				<div class="visible-xs breadcrumb-toggle">
					<a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
				</div>
			</div>

<?php }?>
				<!-- /main navigation --><?php }
}
?>