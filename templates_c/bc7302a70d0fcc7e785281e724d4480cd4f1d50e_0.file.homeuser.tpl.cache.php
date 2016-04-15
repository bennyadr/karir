<?php /* Smarty version 3.1.27, created on 2016-02-23 09:47:09
         compiled from "C:\xampp\htdocs\sip\templates\homeuser.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:26356cc1c8d96d110_75358025%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc7302a70d0fcc7e785281e724d4480cd4f1d50e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\homeuser.tpl',
      1 => 1456217144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26356cc1c8d96d110_75358025',
  'variables' => 
  array (
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56cc1c8dac1f30_93344499',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56cc1c8dac1f30_93344499')) {
function content_56cc1c8dac1f30_93344499 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '26356cc1c8d96d110_75358025';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<!-- Page container -->
 	<div class="page-container">


		<!-- Sidebar -->
		<div class="sidebar">
			<div class="sidebar-content">

				<!-- User dropdown -->
				<div class="user-menu dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">

						</div>
					</a>
				</div>
				<!-- /user dropdown -->

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
					<h3>Dashboard <small>Welcome <b><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</b> on Sistem Informasi Pegawai</h3>
				</div>

				<div id="reportrange" class="range">
					<div class="visible-xs header-element-toggle">
						<a class="btn btn-primary btn-icon"><i class="icon-calendar"></i></a>
					</div>
					<!--<div class="date-range"></div>-->
					<!--<span class="label label-danger">9</span>-->
				</div>
			</div>
			<!-- /page header -->
		
		            
			<!-- Breadcrumbs line -->
			<?php echo $_smarty_tpl->getSubTemplate ("breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>

			<!-- /breadcrumbs line -->

	       <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>