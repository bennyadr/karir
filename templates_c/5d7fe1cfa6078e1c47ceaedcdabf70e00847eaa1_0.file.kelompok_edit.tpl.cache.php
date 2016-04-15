<?php /* Smarty version 3.1.27, created on 2016-03-29 07:28:33
         compiled from "C:\xampp\htdocs\karir\templates\kelompok_edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:183556fa12818206b2_43900949%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d7fe1cfa6078e1c47ceaedcdabf70e00847eaa1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karir\\templates\\kelompok_edit.tpl',
      1 => 1459146979,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183556fa12818206b2_43900949',
  'variables' => 
  array (
    'id' => 0,
    'kelompokjbt' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56fa12818fef60_27137161',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56fa12818fef60_27137161')) {
function content_56fa12818fef60_27137161 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '183556fa12818206b2_43900949';
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
					<h3>Edit Kelompok Jabatan<small>Informasi Kelompok Jabatan</small></h3>
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
									<label>Nama Kelompok Jabatan :</label>
                                    <input type="text" name="kelompokjbt" value="<?php echo $_smarty_tpl->tpl_vars['kelompokjbt']->value;?>
" placeholder="Nama Kelompok Jabatan" class="form-control" required>
	                			</div>
	                		</div>

	                		
	                	</div>
                        <div class="form-actions text-left">
                        	<input type="submit" data-toggle="modal" role="button"  value="Update" class="btn btn-primary">
                        </div>
				    </div>
				</div>
			</form>
			<!-- /simple registration form -->
			
	       <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>