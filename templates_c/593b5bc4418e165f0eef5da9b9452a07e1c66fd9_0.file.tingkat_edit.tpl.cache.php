<?php /* Smarty version 3.1.27, created on 2016-03-29 10:59:49
         compiled from "C:\xampp\htdocs\karir\templates\tingkat_edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1016156fa4405b498b1_09416258%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '593b5bc4418e165f0eef5da9b9452a07e1c66fd9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karir\\templates\\tingkat_edit.tpl',
      1 => 1459241973,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1016156fa4405b498b1_09416258',
  'variables' => 
  array (
    'id' => 0,
    'tingkatjbt' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56fa4405bf1176_47572407',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56fa4405bf1176_47572407')) {
function content_56fa4405bf1176_47572407 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1016156fa4405b498b1_09416258';
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
					<h3>Edit Tingkat Jabatan<small>Informasi Tingkat Jabatan</small></h3>
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
									<label>Tingkat Jabatan :</label>
                                    <input type="number" name="tingkatjbt" placeholder="Tingkat Jabatan" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tingkatjbt']->value;?>
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