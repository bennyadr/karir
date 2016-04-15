<?php /* Smarty version 3.1.27, created on 2016-02-25 10:04:36
         compiled from "C:\xampp\htdocs\sip\templates\profile_kursus_edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:303656cec3a460b050_39761683%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d0114d501cd3597dcf96b352d36b8fc313beab6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\profile_kursus_edit.tpl',
      1 => 1456387937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '303656cec3a460b050_39761683',
  'variables' => 
  array (
    'id' => 0,
    'idpeg' => 0,
    'kursus' => 0,
    'instansi' => 0,
    'kota' => 0,
    'tahun' => 0,
    'no_sertifikat' => 0,
    'ket' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56cec3a47567a2_08015473',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56cec3a47567a2_08015473')) {
function content_56cec3a47567a2_08015473 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '303656cec3a460b050_39761683';
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
			<form name="myForm" class="" action="prokursus.php?action=update" method="POST" ENCTYPE="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
        <input type="hidden" name="idpeg" value="<?php echo $_smarty_tpl->tpl_vars['idpeg']->value;?>
">
			    <div class="panel panel-default">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-menu"></i>Edit Data Kursus</h6></div>
                  <div class="panel-body">
	                	<div class="row">
	                		<div class="col-md-6">
	                			<div class="form-group">
	                			<table width="1000">
	                				

                          <tr>
                          <td width="200"> <label>Kursus :</label> </td>
                            <td><input type="text" name="kursus" placeholder="Kursus" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['kursus']->value;?>
"><br /> </td>
                            </tr>

                            <tr>
                          <td width="200"> <label>Instansi :</label> </td>
                            <td><input type="text" name="instansi" placeholder="Tempat" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['instansi']->value;?>
"><br /> </td>
                            </tr>

                            <tr>
                          <td width="200"> <label>Kota :</label> </td>
                            <td><input type="text" name="kota" placeholder="Kota" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['kota']->value;?>
"><br /> </td>
                            </tr>
                             <tr>
                          <td width="200"> <label>Tahun :</label> </td>
                            <td><input type="text" name="tahun" placeholder="tahun" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tahun']->value;?>
"><br /> </td>
                            </tr>
                            <tr>
                            <td width="200"> <label>Status Sertifikat :</label> </td>
                            <td><select name="sertifikat" class="form-control">
                                                <option value="" selected="selected"> --Pilih-- </option>
                                                <option value="Y" > Ya </option>
                                                <option value="T" > Tidak </option>
                                                </select>
                               <br /> </td>
                                        <td><br /></td></tr>

                                        <tr>
                            <tr>
                          <td width="200"> <label>No. Sertifikat :</label> </td>
                            <td><input type="text" name="no_sertifikat" placeholder="No. Sertifikat" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['no_sertifikat']->value;?>
"><br /> </td>
                            </tr>
                            <tr>
                          <td width="200"> <label>Keterangan :</label> </td>
                            <td><input type="text" name="ket" placeholder="Keterangan" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['ket']->value;?>
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