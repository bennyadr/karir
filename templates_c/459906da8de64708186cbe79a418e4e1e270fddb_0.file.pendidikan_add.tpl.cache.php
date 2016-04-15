<?php /* Smarty version 3.1.27, created on 2016-03-28 06:00:14
         compiled from "C:\xampp\htdocs\karir\templates\pendidikan_add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:158356f8ac4e0e04e7_51810398%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '459906da8de64708186cbe79a418e4e1e270fddb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karir\\templates\\pendidikan_add.tpl',
      1 => 1459136238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158356f8ac4e0e04e7_51810398',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56f8ac4e205336_35459902',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56f8ac4e205336_35459902')) {
function content_56f8ac4e205336_35459902 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '158356f8ac4e0e04e7_51810398';
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
					<h3>Add Pendidikan<small>Informasi Pendidikan</small></h3>
				</div>
			</div>	
			
				<!-- Simple registration form -->
			<form class="" action="?action=save" method="POST" ENCTYPE="multipart/form-data">
			    <div class="panel panel-default">
	                <div class="panel-body">
	                	<div class="row">
	                		<div class="col-md-6">
	                			<div class="form-group">
									<label>Nama Pendidikan :</label>
                                    <input type="text" name="nama_pendidikan" placeholder="Nama Pendidikan" class="form-control" required>
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