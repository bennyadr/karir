<?php /* Smarty version 3.1.27, created on 2016-02-25 08:31:26
         compiled from "C:\xampp\htdocs\sip\templates\profile_pengalaman_edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2488656ceadce6e03d8_56520617%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec7a0a5482bfb7a558fd0fbba009384abd334571' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\profile_pengalaman_edit.tpl',
      1 => 1456384160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2488656ceadce6e03d8_56520617',
  'variables' => 
  array (
    'id' => 0,
    'idpeg' => 0,
    'perusahaan' => 0,
    'jabatan' => 0,
    'tgl_mulai' => 0,
    'tgl_akhir' => 0,
    'alamat' => 0,
    'deskripsi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56ceadce861db9_15453059',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ceadce861db9_15453059')) {
function content_56ceadce861db9_15453059 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2488656ceadce6e03d8_56520617';
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
    $('#tgl_mulai').datepicker({
          changeMonth: true,
          changeYear: true
          });
    $('#tgl_akhir').datepicker({
          changeMonth: true,
          changeYear: true
          }); 
    $('#tgl_tidakaktif').datepicker({
          changeMonth: true,
          changeYear: true
          }); 
  
  });
    $(function(){
        $("#tgl_mulai").datepicker($.datepicker.regional['id']);
    $("#tgl_akhir").datepicker($.datepicker.regional['id']);
    $("#tgl_tidakaktif").datepicker($.datepicker.regional['id']);
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
			<form name="myForm" class="" action="propengalaman.php?action=update" method="POST" ENCTYPE="multipart/form-data">
      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
        <input type="hidden" name="idpeg" value="<?php echo $_smarty_tpl->tpl_vars['idpeg']->value;?>
">
			    <div class="panel panel-default">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-menu"></i>Edit Data Pekerjaan</h6></div>
                  <div class="panel-body">
	                	<div class="row">
	                		<div class="col-md-6">
	                			<div class="form-group">
	                			<table width="1000">
                        <tr>
                            <td width="200"> <label>Nama Perusahaan :</label> </td>
                            <td><input type="text" name="perusahaan" placeholder="Nama Perusahaan" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['perusahaan']->value;?>
"><br /> </td>
                          </tr>
                          <tr>
                            <td width="200"> <label>Jabatan :</label> </td>
                            <td><input type="text" name="jabatan" placeholder="Jabatan" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['jabatan']->value;?>
"><br /> </td>
                          </tr>
	                				<tr>
                          <td width="200"><label>Tanggal Mulai :</label></td>
                                    <td><input type="text" name="tgl_mulai" class="form-control input-sm" id="tgl_mulai" placeholder="dd/mm/yyyy" value="<?php echo $_smarty_tpl->tpl_vars['tgl_mulai']->value;?>
"><br /></td>
                                    </tr>
                          <tr>
                          <tr>
                          <td width="200"><label>Tanggal Akhir :</label></td>
                                    <td><input type="text" name="tgl_akhir" class="form-control input-sm" id="tgl_akhir" placeholder="dd/mm/yyyy" value="<?php echo $_smarty_tpl->tpl_vars['tgl_akhir']->value;?>
"><br /></td>
                                    </tr>
                          <tr>
                            <td width="200"> <label>Alamat Perusahaan :</label> </td>
                            <td><input type="text" name="alamat" placeholder="Alamat Perusahaan" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['alamat']->value;?>
"><br /> </td>
                          </tr>

                          <tr>
                            <td width="200"> <label>Deskripsi Pekerjaan :</label> </td>
                            <td><input type="text" name="deskripsi" placeholder="Deskripsi Pekerjaan" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['deskripsi']->value;?>
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