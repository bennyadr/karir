<?php /* Smarty version 3.1.27, created on 2016-03-29 04:35:47
         compiled from "C:\xampp\htdocs\karir\templates\pendidikan_edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:822556f9ea0396dca3_78442870%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17ecf659e07dd1f39e9ecba776e2b6df7eadcb5d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karir\\templates\\pendidikan_edit.tpl',
      1 => 1459138836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '822556f9ea0396dca3_78442870',
  'variables' => 
  array (
    'id_pen' => 0,
    'nama_pendidikan' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56f9ea03abd7c9_07138074',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56f9ea03abd7c9_07138074')) {
function content_56f9ea03abd7c9_07138074 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '822556f9ea0396dca3_78442870';
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
					<h3>Edit Pendidikan<small>Informasi Pendidikan</small></h3>
				</div>
			</div>	
			
				<!-- Simple registration form -->
			<form class="" action="?action=update" method="POST" ENCTYPE="multipart/form-data">
			<input type="hidden" name="id_pen" value="<?php echo $_smarty_tpl->tpl_vars['id_pen']->value;?>
">
			    <div class="panel panel-default">
	                <div class="panel-body">
	                	<div class="row">
	                		<div class="col-md-6">
	                			<div class="form-group">
									<label>Nama Pendidikan :</label>
                                    <input type="text" name="nama_pendidikan" value="<?php echo $_smarty_tpl->tpl_vars['nama_pendidikan']->value;?>
" placeholder="Nama Pendidikan" class="form-control" required>
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