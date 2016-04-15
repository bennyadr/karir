<?php /* Smarty version 3.1.27, created on 2016-02-25 08:56:42
         compiled from "C:\xampp\htdocs\sip\templates\profile_organisasi_edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:909756ceb3ba069b48_25301589%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b740b4929c585a90debdce6026f2768b52c407d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\profile_organisasi_edit.tpl',
      1 => 1456385559,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '909756ceb3ba069b48_25301589',
  'variables' => 
  array (
    'id' => 0,
    'idpeg' => 0,
    'organisasi' => 0,
    'jabatan' => 0,
    'tahun' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56ceb3ba1a4079_99915567',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ceb3ba1a4079_99915567')) {
function content_56ceb3ba1a4079_99915567 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '909756ceb3ba069b48_25301589';
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
			<form name="myForm" class="" action="proorganisasi.php?action=update" method="POST" ENCTYPE="multipart/form-data">
       <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
        <input type="hidden" name="idpeg" value="<?php echo $_smarty_tpl->tpl_vars['idpeg']->value;?>
">
			    <div class="panel panel-default">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-menu"></i>Edit Data Organisasi</h6></div>
                  <div class="panel-body">
	                	<div class="row">
	                		<div class="col-md-6">
	                			<div class="form-group">
	                			<table width="1000">
	                				<tr>
	                					
                          <tr>
                          <td width="200"> <label>Nama Organisasi :</label> </td>
                            <td><input type="text" name="organisasi" placeholder="Nama Organisaasi" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['organisasi']->value;?>
"><br /> </td>
                            </tr>

                            <tr>
                          <td width="200"> <label>Jabatan :</label> </td>
                            <td><input type="text" name="jabatan" placeholder="Jabatan" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['jabatan']->value;?>
" ><br /> </td>
                            </tr>
                             <tr>
                          <td width="200"> <label>Tahun :</label> </td>
                            <td><input type="text" name="tahun" placeholder="Tahun" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tahun']->value;?>
"><br /> </td>
                            </tr>
                        </table>
                      </div>
                    </div> 
                  </div>
          <div class="form-actions text-left">
           <input type="submit" data-toggle="modal" role="button"  value="Update" class="btn btn-success">
              <INPUT TYPE="BUTTON" VALUE="Back" ONCLICK="history.go(-1)" class="btn btn-primary">
          </div>
      </div>
      </div>
      </form>
                  <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>