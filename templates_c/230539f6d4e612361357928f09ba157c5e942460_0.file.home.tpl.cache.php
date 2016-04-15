<?php /* Smarty version 3.1.27, created on 2016-03-17 05:09:32
         compiled from "C:\xampp\htdocs\sip\templates\home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1120156ea2dfcaf5554_81908159%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '230539f6d4e612361357928f09ba157c5e942460' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\home.tpl',
      1 => 1455000066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1120156ea2dfcaf5554_81908159',
  'variables' => 
  array (
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56ea2dfcb49687_13087528',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ea2dfcb49687_13087528')) {
function content_56ea2dfcb49687_13087528 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1120156ea2dfcaf5554_81908159';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<!-- Page container -->

 	<div class="page-container">


		<!-- Sidebar -->
		<div class="sidebar">
			<div class="sidebar-content">
				<?php echo $_smarty_tpl->getSubTemplate ("pengelola.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>

				<?php echo $_smarty_tpl->getSubTemplate ("mainnav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>

				
			</div>
		</div>
		<!-- /sidebar -->


		<!-- Page content -->
	 	<div class="page-content">


			<!-- Page header -->
			<div class="page-header">
				<div class="page-title">
					<h3>Dashboard <small>Selamat Datang <b><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</b> Di Sistem Informasi Pegawai</small></h3>
				</div>

			</div>
			<!-- /page header -->
			<ul class="info-blocks">
				<li class="bg-primary">
					<div class="top-info">
						<a href="entrycost.php">Staffing</a>
						<small>Staffing</small>
					</div>
					<a href="entrycost.php"><i class="icon-cogs"></i></a>
					<span class="bottom-info bg-info">Database Pegawai</span>
				</li>
				<li class="bg-primary">
					<div class="top-info">
						<a href="#">Payroll</a>
						<small>Payroll</small>
					</div>
					<a href="#"><i class="icon-file4"></i></a>
					<span class="bottom-info bg-danger">Payroll</span>
				</li>
			</ul>

		
						
				        <!-- /striped datatable inside panel -->
	

	<?php echo '<script'; ?>
 src="js/jquery.dataTables.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 language="javascript" type="text/javascript">  
	$(document).ready(function() {
		$('#example').dataTable( {
			"pagingType": "full_numbers"
		} );
	} );
	<?php echo '</script'; ?>
>

	       <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>