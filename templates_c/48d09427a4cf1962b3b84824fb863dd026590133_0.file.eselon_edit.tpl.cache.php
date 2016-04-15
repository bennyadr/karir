<?php /* Smarty version 3.1.27, created on 2016-03-28 06:50:41
         compiled from "C:\xampp\htdocs\karir\templates\eselon_edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1199356f8b821a141b5_29688444%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48d09427a4cf1962b3b84824fb863dd026590133' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karir\\templates\\eselon_edit.tpl',
      1 => 1459139990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1199356f8b821a141b5_29688444',
  'variables' => 
  array (
    'id' => 0,
    'eselon' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56f8b821b8e466_65495928',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56f8b821b8e466_65495928')) {
function content_56f8b821b8e466_65495928 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1199356f8b821a141b5_29688444';
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
					<h3>Edit Eselon<small>Informasi Eselon</small></h3>
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
									<label>Nama Eselon :</label>
                                    <input type="text" name="eselon" value="<?php echo $_smarty_tpl->tpl_vars['eselon']->value;?>
" placeholder="Nama Eselon" class="form-control" required>
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