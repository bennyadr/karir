<?php /* Smarty version 3.1.27, created on 2016-03-29 06:36:52
         compiled from "C:\xampp\htdocs\karir\templates\jabatan_add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:424656fa066450b718_94434916%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db67793d6c480ac51216a1aa30be4ec081c2eb47' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karir\\templates\\jabatan_add.tpl',
      1 => 1459226210,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '424656fa066450b718_94434916',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56fa06645e4209_82026229',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56fa06645e4209_82026229')) {
function content_56fa06645e4209_82026229 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '424656fa066450b718_94434916';
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
					<h3>Add Jabatan<small>Informasi Jabatan</small></h3>
				</div>
			</div>	
			
				<!-- Simple registration form -->
			<form class="" action="?action=save" method="POST" ENCTYPE="multipart/form-data">
			    <div class="panel panel-default">
	                <div class="panel-body">
	                	<div class="row">
	                		<div class="col-md-6">
	                			<div class="form-group">
									<label>Kode Jabatan :</label>
                                    <input type="text" name="jabatan_code" placeholder="Kode Jabatan" class="form-control" required>
	                			</div>
	                		</div>

	                		<div class="col-md-6">
	                		<div class="form-group">
									<label>Nama Jabatan :</label>
                                    <input type="text" name="jabatan_name" placeholder="Nama Jabatan" class="form-control" required>
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