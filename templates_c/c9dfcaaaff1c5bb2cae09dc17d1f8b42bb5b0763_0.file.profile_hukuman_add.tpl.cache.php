<?php /* Smarty version 3.1.27, created on 2016-02-25 06:18:34
         compiled from "C:\xampp\htdocs\sip\templates\profile_hukuman_add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1101156ce8eaa4b6a55_74907183%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9dfcaaaff1c5bb2cae09dc17d1f8b42bb5b0763' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\profile_hukuman_add.tpl',
      1 => 1456376911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1101156ce8eaa4b6a55_74907183',
  'variables' => 
  array (
    'idpeg' => 0,
    'nik' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56ce8eaa63df80_80090219',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ce8eaa63df80_80090219')) {
function content_56ce8eaa63df80_80090219 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1101156ce8eaa4b6a55_74907183';
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
    $('#tgl_sanksi').datepicker({
          changeMonth: true,
          changeYear: true
          });
    $('#tgl_masuk').datepicker({
          changeMonth: true,
          changeYear: true
          }); 
    $('#tgl_tidakaktif').datepicker({
          changeMonth: true,
          changeYear: true
          }); 
  
  });
    $(function(){
        $("#tgl_sanksi").datepicker($.datepicker.regional['id']);
    $("#tgl_masuk").datepicker($.datepicker.regional['id']);
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
      <form name="myForm" class="" action="prohukuman.php?action=save" method="POST" ENCTYPE="multipart/form-data">
        <input type="hidden" name="idpeg" value="<?php echo $_smarty_tpl->tpl_vars['idpeg']->value;?>
">
        <input type="hidden" name="nik" value="<?php echo $_smarty_tpl->tpl_vars['nik']->value;?>
">

          <div class="panel panel-default">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-menu"></i>Add Data Hukuman</h6></div>
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                        <table width="1000">
                        <tr>
                            <td width="200"> <label>Nama Hukuman :</label> </td>
                             <td><input type="text" name="hukuman" placeholder="Nama Hukuman" class="form-control">
                                <br /> </td>
                          </tr>
                          <tr>
                            <td width="200"> <label>Pemberi Hukuman :</label> </td>
                            <td><input type="text" name="pemberi_hukuman" placeholder="Pemberi Hukuman" class="form-control"><br /> </td>
                          </tr>
                          <tr>
                          <td width="200"><label>Tanggal Pemberian :</label></td>
                                    <td><input type="text" name="tgl_sanksi" class="form-control input-sm" id="tgl_sanksi" placeholder="dd/mm/yyyy"><br /></td>
                                    </tr>
                                    <tr>
                            <td width="200"> <label>No. Surat :</label> </td>
                            <td><input type="text" name="no_sanksi" placeholder="No Surat" class="form-control"><br /> </td>
                          </tr>
                          <tr>
                            <td width="200"> <label>Keterangan :</label> </td>
                            <td><input type="text" name="ket" placeholder="Keterangan" class="form-control"><br /> </td>
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