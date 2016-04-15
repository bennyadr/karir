<?php /* Smarty version 3.1.27, created on 2016-03-29 08:11:03
         compiled from "C:\xampp\htdocs\karir\templates\kelompok_add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:92756fa1c77a88428_23531312%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acef3001eab820000afbbefed36fd91b81d8546d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karir\\templates\\kelompok_add.tpl',
      1 => 1459146988,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92756fa1c77a88428_23531312',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56fa1c77b44934_38237776',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56fa1c77b44934_38237776')) {
function content_56fa1c77b44934_38237776 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '92756fa1c77a88428_23531312';
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
					<h3>Add Kelompok Jabatan<small>Informasi Kelompok Jabatan</small></h3>
				</div>
			</div>	
			
				<!-- Simple registration form -->
			<form class="" action="?action=save" method="POST" ENCTYPE="multipart/form-data">
			    <div class="panel panel-default">
	                <div class="panel-body">
	                	<div class="row">
	                		<div class="col-md-6">
	                			<div class="form-group">
									<label>Nama Kelompok Jabatan :</label>
                                    <input type="text" name="kelompokjbt" placeholder="Nama Kelompok Jabatan" class="form-control" required>
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