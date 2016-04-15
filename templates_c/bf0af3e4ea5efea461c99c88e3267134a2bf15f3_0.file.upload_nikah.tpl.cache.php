<?php /* Smarty version 3.1.27, created on 2016-02-17 06:35:13
         compiled from "C:\xampp\htdocs\sip\templates\upload_nikah.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1798256c4069113d513_47357411%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf0af3e4ea5efea461c99c88e3267134a2bf15f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\upload_nikah.tpl',
      1 => 1455687269,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1798256c4069113d513_47357411',
  'variables' => 
  array (
    'id' => 0,
    'kode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56c406911dd243_09576881',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56c406911dd243_09576881')) {
function content_56c406911dd243_09576881 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1798256c4069113d513_47357411';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/jquery.min2.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-1.8.0.min.js"><?php echo '</script'; ?>
>
  <link type="text/css" href="development-bundle/themes/base/jquery.ui.all.css" rel="stylesheet" />
	<?php echo '<script'; ?>
 type="text/javascript" src="development-bundle/ui/jquery.ui.core.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="development-bundle/ui/jquery.ui.datepicker.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="development-bundle/ui/i18n/jquery.ui.datepicker-id.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="js/autoNumeric.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/jQuery-Mask-Plugin_js_jquery.mask.min.js"> <?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="development-bundle/ui/jquery.ui.widget.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="development-bundle/ui/jquery.ui.position.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="development-bundle/ui/jquery.ui.autocomplete.js"><?php echo '</script'; ?>
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
      <br />
				<div class="page-title">
				</div>
			</div>	
			
				<!-- Simple registration form -->
<form name="myForm" class="" action="?action=NikahProses" method="POST" ENCTYPE="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
<input type="hidden" name="kode" value="<?php echo $_smarty_tpl->tpl_vars['kode']->value;?>
">
	<div class="panel panel-info">
    <div class="panel-heading"><h6 class="panel-title"><i class="icon-menu"></i>Upload Surat/Buku Nikah</h6></div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                  <input type="file" name="pathnikah" id="pathnikah" class="form-control" STYLE="text-align:centre;">
                </div>
                    </div> 
                  </div>
          <div class="form-actions text-left">
           <input type="submit" data-toggle="modal" role="button"  value="Upload" class="btn btn-info">
              <INPUT TYPE="BUTTON" VALUE="Back" ONCLICK="history.go(-1)" class="btn btn-default">
            </div>
      </div>
      </div>
      </form>
                  <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>