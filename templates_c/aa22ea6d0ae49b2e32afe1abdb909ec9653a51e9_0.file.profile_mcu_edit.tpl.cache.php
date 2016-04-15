<?php /* Smarty version 3.1.27, created on 2016-02-25 08:31:49
         compiled from "C:\xampp\htdocs\sip\templates\profile_mcu_edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:569656ceade52fee43_94286634%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa22ea6d0ae49b2e32afe1abdb909ec9653a51e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\profile_mcu_edit.tpl',
      1 => 1456379968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '569656ceade52fee43_94286634',
  'variables' => 
  array (
    'id' => 0,
    'idpeg' => 0,
    'tgl_pemeriksaan' => 0,
    'hasil' => 0,
    'no_sertifikat' => 0,
    'tenaga_medis' => 0,
    'catatan' => 0,
    'tgl_dari' => 0,
    'tgl_sampai' => 0,
    'ket' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56ceade5473b41_32023432',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ceade5473b41_32023432')) {
function content_56ceade5473b41_32023432 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '569656ceade52fee43_94286634';
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



<?php echo '<script'; ?>
 type="text/javascript">
  $(function() {
    $('#tgl_pemeriksaan').datepicker({
          changeMonth: true,
          changeYear: true
          });
    $('#tgl_dari').datepicker({
          changeMonth: true,
          changeYear: true
          }); 
    $('#tgl_sampai').datepicker({
          changeMonth: true,
          changeYear: true
          }); 
  
  });
    $(function(){
        $("#tgl_pemeriksaan").datepicker($.datepicker.regional['id']);
    $("#tgl_dari").datepicker($.datepicker.regional['id']);
    $("#tgl_sampai").datepicker($.datepicker.regional['id']);
    });
  $(function() {
    $('.month-picker').datepicker( {
        changeMonth: true,
        changeYear: true,
        showButtonPanel: true,
        dateFormat: 'mm/dd/yy',
        onClose: function(dateText, inst) { 
            var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
            var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
            $(this).datepicker('setDate', new Date(year, month, 1));
        }
    });
    //$('.date-picker').datepicker();
    $('.month-picker').focus(function () {
        $('.ui-datepicker-calendar').addClass('hideDates');
    });
});
  <?php echo '</script'; ?>
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
			<form name="myForm" class="" action="promcu.php?action=update" method="POST" ENCTYPE="multipart/form-data">
       <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
        <input type="hidden" name="idpeg" value="<?php echo $_smarty_tpl->tpl_vars['idpeg']->value;?>
">
			    <div class="panel panel-default">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-menu"></i>Add Data MCU</h6></div>
                  <div class="panel-body">
	                	<div class="row">
	                		<div class="col-md-6">
	                			<div class="form-group">
	                			<table width="1000">
	                				<tr>
                          <td width="200"><label>Tanggal Pemeriksaan :</label></td>
                                    <td><input type="text" name="tgl_pemeriksaan" class="form-control input-sm" id="tgl_pemeriksaan" placeholder="dd/mm/yyyy" value="<?php echo $_smarty_tpl->tpl_vars['tgl_pemeriksaan']->value;?>
"><br /></td>
                                    </tr>
                          <tr>
                            <td width="200"> <label>Hasil Pemeriksaan :</label> </td>
                            <td><textarea type="text" name="hasil" placeholder="Hasil Pemeriksaan" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['hasil']->value;?>
"></textarea><br /> </td>
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
                            <td width="200"> <label>No Sertifikat :</label> </td>
                            <td><input type="text" name="no_sertifikat" placeholder="No Sertifikat  " class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['no_sertifikat']->value;?>
"><br /> </td>
                          </tr>

                          <tr>
                            <td width="200"> <label>Tenaga Medis :</label> </td>
                            <td><input type="text" name="tenaga_medis" placeholder="Hasil Pemeriksaan" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tenaga_medis']->value;?>
"><br /> </td>
                          </tr>
                          <tr>
                            <td width="200"> <label>Catatan Kesehatan :</label> </td>
                            <td><textarea type="text" name="catatan" placeholder="Catatan Kesehatan" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['catatan']->value;?>
"></textarea><br /> </td>
                          </tr>
                          <tr>
                          <td width="200"><label>Tanggal Dari :</label></td>
                                    <td><input type="text" name="tgl_dari" class="form-control input-sm" id="tgl_dari" placeholder="dd/mm/yyyy" value="<?php echo $_smarty_tpl->tpl_vars['tgl_dari']->value;?>
"><br /></td>
                                    </tr>
                          
                          <tr>
                          <td width="200"><label>Tanggal Sampai :</label></td>
                                    <td><input type="text" name="tgl_sampai" class="form-control input-sm" id="tgl_sampai" placeholder="dd/mm/yyyy" value="<?php echo $_smarty_tpl->tpl_vars['tgl_sampai']->value;?>
"><br /></td>
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
           <input type="submit" data-toggle="modal" role="button"  value="Simpan" class="btn btn-success">
              <INPUT TYPE="BUTTON" VALUE="Back" ONCLICK="history.go(-1)" class="btn btn-primary">
          </div>
      </div>
      </div>
      </form>
                  <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>