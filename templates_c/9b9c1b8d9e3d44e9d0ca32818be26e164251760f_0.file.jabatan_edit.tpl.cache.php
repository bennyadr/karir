<?php /* Smarty version 3.1.27, created on 2016-03-29 06:40:10
         compiled from "C:\xampp\htdocs\karir\templates\jabatan_edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:329156fa072adf3d44_27044137%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b9c1b8d9e3d44e9d0ca32818be26e164251760f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karir\\templates\\jabatan_edit.tpl',
      1 => 1459226406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '329156fa072adf3d44_27044137',
  'variables' => 
  array (
    'id' => 0,
    'jabatan_code' => 0,
    'jabatan_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56fa072aef00e2_63254634',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56fa072aef00e2_63254634')) {
function content_56fa072aef00e2_63254634 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '329156fa072adf3d44_27044137';
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
			<form class="" action="?action=update" method="POST" ENCTYPE="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
			    <div class="panel panel-default">
	                <div class="panel-body">
	                	<div class="row">
	                		<div class="col-md-6">
	                			<div class="form-group">
									<label>Kode Jabatan :</label>
                                    <input type="text" name="jabatan_code" placeholder="Kode Jabatan" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['jabatan_code']->value;?>
" required>
	                			</div>
	                		</div>

	                		<div class="col-md-6">
	                		<div class="form-group">
									<label>Nama Jabatan :</label>
                                    <input type="text" name="jabatan_name" placeholder="Nama Jabatan" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['jabatan_name']->value;?>
" required>
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