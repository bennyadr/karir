<?php /* Smarty version 3.1.27, created on 2016-04-01 06:16:10
         compiled from "C:\xampp\htdocs\karir\templates\password.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2551756fdf60a77b7f4_46447612%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '483d87c65e4a86f46cec027a57bd434d2387d864' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karir\\templates\\password.tpl',
      1 => 1456721082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2551756fdf60a77b7f4_46447612',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56fdf60a95bfd4_46089461',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56fdf60a95bfd4_46089461')) {
function content_56fdf60a95bfd4_46089461 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2551756fdf60a77b7f4_46447612';
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
			<form name="loginForm" class="" action="password.php" method="POST" ENCTYPE="multipart/form-data">
     <input type="hidden" name="action" value="changePassword">
			    <div class="panel panel-default">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-menu"></i>Add Data Organisasi</h6></div>
                  <div class="panel-body">
	                	<div class="row">
	                		<div class="col-md-6">
	                			<div class="form-group">
	                			<table width="1000">
	                				<tr>
	                					
               <label>Password Lama</label><br />
            <input name="oldpass" type="password" size="15"><br /><br />
            <label>Password Baru</label><br />
            <input name="nupass" type="password" size="15"><br /><br />
            <label>Ulangi Password Baru</label><br />
          <input name="retype" type="password" size="15" ><br /><br />
            <br>
                  
                    <input type="submit" name="submit" class="button" value="Simpan" />&nbsp;&nbsp;&nbsp;
                    <input type="reset" name="reset" class="button" value="Reset" />&nbsp;&nbsp;&nbsp;
                    <input type="button" name="cancel" class="button" value="Batal" onClick="javascript:history.go(-1);"/>
                  
 
      </tr>
      </table>
      </form>
      </div>
                       <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>