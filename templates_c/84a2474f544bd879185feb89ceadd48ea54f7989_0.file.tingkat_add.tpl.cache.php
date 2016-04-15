<?php /* Smarty version 3.1.27, created on 2016-04-06 06:33:41
         compiled from "C:\xampp\htdocs\karir\templates\tingkat_add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2439570491a5602a97_06708441%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84a2474f544bd879185feb89ceadd48ea54f7989' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karir\\templates\\tingkat_add.tpl',
      1 => 1459241926,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2439570491a5602a97_06708441',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_570491a56fbec7_17136970',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_570491a56fbec7_17136970')) {
function content_570491a56fbec7_17136970 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2439570491a5602a97_06708441';
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
					<h3>Add Tingkat Jabatan<small>Informasi Tingkat Jabatan</small></h3>
				</div>
			</div>	
			
				<!-- Simple registration form -->
			<form class="" action="?action=save" method="POST" ENCTYPE="multipart/form-data">
			    <div class="panel panel-default">
	                <div class="panel-body">
	                	<div class="row">
	                		<div class="col-md-6">
	                			<div class="form-group">
									<label>Tingkat Jabatan :</label>
                                    <input type="number" name="tingkatjbt" placeholder="Tingkat Jabatan" class="form-control" required>
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