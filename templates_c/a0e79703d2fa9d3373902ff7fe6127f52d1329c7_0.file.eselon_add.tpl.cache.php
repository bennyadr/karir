<?php /* Smarty version 3.1.27, created on 2016-03-28 06:50:31
         compiled from "C:\xampp\htdocs\karir\templates\eselon_add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:155256f8b817276d16_04965136%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0e79703d2fa9d3373902ff7fe6127f52d1329c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karir\\templates\\eselon_add.tpl',
      1 => 1459140017,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155256f8b817276d16_04965136',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56f8b8173af284_76307461',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56f8b8173af284_76307461')) {
function content_56f8b8173af284_76307461 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '155256f8b817276d16_04965136';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-1.8.0.min.js"><?php echo '</script'; ?>
>
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
					<h3>Add Eselon<small>Informasi Eselon</small></h3>
				</div>
			</div>	
			
				<!-- Simple registration form -->
			<form class="" action="?action=save" method="POST" ENCTYPE="multipart/form-data">
			    <div class="panel panel-default">
	                <div class="panel-body">
	                	<div class="row">
	                		<div class="col-md-6">
	                			<div class="form-group">
									<label>Nama Eselon :</label>
                                    <input type="text" name="eselon" placeholder="Nama Eselon" class="form-control" required>
	                			</div>
	                		</div>

	                		
	                	</div>
                        <div class="form-actions text-left">
                        	<input type="submit" data-toggle="modal" role="button"  value="Simpan" class="btn btn-primary">
                        </div>
				    </div>
				</div>
			</form>
			<!-- /simple registration form -->
			
	       <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>