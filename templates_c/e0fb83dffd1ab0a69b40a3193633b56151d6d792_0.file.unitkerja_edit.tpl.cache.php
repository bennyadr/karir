<?php /* Smarty version 3.1.27, created on 2016-03-29 05:42:58
         compiled from "C:\xampp\htdocs\karir\templates\unitkerja_edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2175856f9f9c24b8716_15991530%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0fb83dffd1ab0a69b40a3193633b56151d6d792' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karir\\templates\\unitkerja_edit.tpl',
      1 => 1459141505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2175856f9f9c24b8716_15991530',
  'variables' => 
  array (
    'id' => 0,
    'nm_unit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56f9f9c2678461_62815084',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56f9f9c2678461_62815084')) {
function content_56f9f9c2678461_62815084 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2175856f9f9c24b8716_15991530';
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
					<h3>Edit Unit Kerja<small>Informasi Unit Kerja</small></h3>
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
									<label>Nama Unit Kerja :</label>
                                    <input type="text" name="nm_unit" value="<?php echo $_smarty_tpl->tpl_vars['nm_unit']->value;?>
" placeholder="Nama Unit Kerja" class="form-control" required>
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