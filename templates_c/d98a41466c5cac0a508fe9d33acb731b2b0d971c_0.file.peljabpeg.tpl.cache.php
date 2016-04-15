<?php /* Smarty version 3.1.27, created on 2016-04-14 10:53:57
         compiled from "C:\xampp\htdocs\karir\templates\peljabpeg.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:23181570f5aa5309f75_56654686%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd98a41466c5cac0a508fe9d33acb731b2b0d971c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karir\\templates\\peljabpeg.tpl',
      1 => 1460623839,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23181570f5aa5309f75_56654686',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_570f5aa540d045_13450133',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_570f5aa540d045_13450133')) {
function content_570f5aa540d045_13450133 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '23181570f5aa5309f75_56654686';
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
					<h3>Peluang Karir Pegawai<small>Informasi Peluang Karir Pegawai</small></h3>
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
			<!-- Table inside panel body -->
			           <?php }
}
?>