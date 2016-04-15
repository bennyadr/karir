<?php /* Smarty version 3.1.27, created on 2016-03-29 05:42:44
         compiled from "C:\xampp\htdocs\karir\templates\unitkerja_add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:250656f9f9b45c0e52_44450637%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3443019e30eca08a864e142c05bbbb3fa67dbc94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karir\\templates\\unitkerja_add.tpl',
      1 => 1459141466,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '250656f9f9b45c0e52_44450637',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56f9f9b46da7b3_27369566',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56f9f9b46da7b3_27369566')) {
function content_56f9f9b46da7b3_27369566 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '250656f9f9b45c0e52_44450637';
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
					<h3>Add Unit Kerja<small>Informasi Unit Kerja</small></h3>
				</div>
			</div>	
			
				<!-- Simple registration form -->
			<form class="" action="?action=save" method="POST" ENCTYPE="multipart/form-data">
			    <div class="panel panel-default">
	                <div class="panel-body">
	                	<div class="row">
	                		<div class="col-md-6">
	                			<div class="form-group">
									<label>Nama Unit Kerja :</label>
                                    <input type="text" name="nm_unit" placeholder="Nama Unit Kerja" class="form-control" required>
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