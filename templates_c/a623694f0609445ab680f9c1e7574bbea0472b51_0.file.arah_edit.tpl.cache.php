<?php /* Smarty version 3.1.27, created on 2016-03-29 14:27:49
         compiled from "C:\xampp\htdocs\karir\templates\arah_edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:57756fa74c52828a8_49287352%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a623694f0609445ab680f9c1e7574bbea0472b51' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karir\\templates\\arah_edit.tpl',
      1 => 1459241467,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57756fa74c52828a8_49287352',
  'variables' => 
  array (
    'Nama_KelompokTingkatJbt' => 0,
    'Nama_KelompokTingkatJbt2' => 0,
    'Flag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56fa74c54bc487_92012396',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56fa74c54bc487_92012396')) {
function content_56fa74c54bc487_92012396 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '57756fa74c52828a8_49287352';
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
					<h3>Edit Arah Karir<small>Informasi Arah Karir</small></h3>
				</div>
			</div>	
			
				<!-- Simple registration form -->
			<form class="" action="?action=save" method="POST" ENCTYPE="multipart/form-data">
			    <div class="panel panel-default">
	                <div class="panel-body">
	                	<div class="row">
	                		<div class="col-md-6">
	                			<div class="form-group">
									<label>Nama Kelompok 1 :</label>
                                    <input type="text" name="Nama_KelompokTingkatJbt" placeholder="Nama Kelompk" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Nama_KelompokTingkatJbt']->value;?>
" required>
	                			</div>
	                		</div>
	                		<div class="col-md-6">
	                		<div class="form-group">
									<label>Nama Kelompok 2 :</label>
                                    <input type="text" name="Nama_KelompokTingkatJbt2" placeholder="Nama Kelompok" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Nama_KelompokTingkatJbt2']->value;?>
" required>
	                			</div>
	                		</div>
	                		<div class="col-md-6">
	                		<div class="form-group">
									<label>Flag :</label>
                                    <select name="Flag" class="form-control">
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['Flag']->value;?>
" selected="selected"> --Pilih-- </option>
                                                <option value="IN" > IN </option>
                                                <option value="OUT" > OUT </option>
                                                </select>
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