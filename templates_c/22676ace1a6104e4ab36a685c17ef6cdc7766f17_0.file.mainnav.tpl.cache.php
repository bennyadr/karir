<?php /* Smarty version 3.1.27, created on 2016-03-17 05:09:49
         compiled from "C:\xampp\htdocs\sip\templates\mainnav.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1276856ea2e0d8e0fd8_01077612%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22676ace1a6104e4ab36a685c17ef6cdc7766f17' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\mainnav.tpl',
      1 => 1456208154,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1276856ea2e0d8e0fd8_01077612',
  'variables' => 
  array (
    'statuslogin' => 0,
    'samping' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56ea2e0d944e43_68279420',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ea2e0d944e43_68279420')) {
function content_56ea2e0d944e43_68279420 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1276856ea2e0d8e0fd8_01077612';
?>
<!-- Main navigation -->
<?php if ($_smarty_tpl->tpl_vars['statuslogin']->value == "0") {?>
				<ul class="navigation">				
					<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "1") {?> class="active" <?php }?>><a href="index.php?action=home"><span>Dashboard</span> <i class="icon-screen2"></i></a></li>
					<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "2") {?> class="active" <?php }?>><a href="profile.php"><span>Profile</span> <i class="icon-profile"></i></a></li>
					<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "3") {?> class="active" <?php }?>><a href="permohonan.php"><span>Form Permohonan</span> <i class="icon-clipboard"></i></a></li>
					<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "4") {?> class="active" <?php }?>><a href="seepayroll.php"><span>Payroll</span> <i class="icon-accessibility"></i></a></li>
					<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "5") {?> class="active" <?php }?>><a href="password.php"><span>Change Password</span> <i class="icon-users"></i></a></li>
					<li><a href="index.php?action=logout"><span>Logout</span> <i class="icon-exit"></i></a></li>
				</ul>
<?php } else { ?>
				<ul class="navigation">				
					<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "1") {?> class="active" <?php }?>><a href="index.php?action=showmenu"><span>Dashboard</span> <i class="icon-screen2"></i></a></li>
					<li><a href="#"><span>Staffing</span> <i class="icon-accessibility"></i></a>
					<ul>
							<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "21") {?> class="active" <?php }?>><a href="employee.php">Database Pegawai</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "22") {?> class="active" <?php }?>><a href="form_cuti.php">Daftar Cuti Pegawai</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "23") {?> class="active" <?php }?>><a href="news.php">Daftar Pengumuman/News</a></li>
					</ul>
					</li>
					<li><a href="#"><span>Payroll</span> <i class="icon-clipboard"></i></a>
					<ul>
							<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "31") {?> class="active" <?php }?>><a href="uploaddata.php">Upload Data Pendukung</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "32") {?> class="active" <?php }?>><a href="uploadfp.php">Upload Data Finger Print</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "33") {?> class="active" <?php }?>><a href="pendapatan.php">Pendapatan</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "34") {?> class="active" <?php }?>><a href="potongan.php">Potongan</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['samping']->value == "35") {?> class="active" <?php }?>><a href="payroll.php">Payroll (Penggajian)</a></li>
					</ul>
					</li>
					
					<li><a href="index.php?action=logout"><span>Logout</span> <i class="icon-exit"></i></a></li>
				</ul>				
<?php }?>
				<!-- /main navigation --><?php }
}
?>