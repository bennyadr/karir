<?php /* Smarty version 3.1.27, created on 2016-02-18 04:58:12
         compiled from "C:\xampp\htdocs\sip\templates\employee_edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1553056c541545903d3_88089612%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee44d1cd30b6eb9ed8f336dfa3196a4eec9bff21' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\employee_edit.tpl',
      1 => 1455764455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1553056c541545903d3_88089612',
  'variables' => 
  array (
    'id' => 0,
    'nik' => 0,
    'name' => 0,
    'jabatan_opt' => 0,
    'divisi_opt' => 0,
    'penddarat_opt' => 0,
    'tlahir' => 0,
    'agama_opt' => 0,
    'no_rek' => 0,
    'gaji' => 0,
    'npwp' => 0,
    'by_asuransi' => 0,
    'perusahaan_opt' => 0,
    'email' => 0,
    'emailal' => 0,
    'address' => 0,
    'alamat_sementara' => 0,
    'pathfoto' => 0,
    'stskawin_opt' => 0,
    'telpon_kantor' => 0,
    'telpon_rumah' => 0,
    'hp' => 0,
    'jamsostek' => 0,
    'no_askes' => 0,
    'status_p' => 0,
    'bisnisunit_opt' => 0,
    'pendidikan_list' => 0,
    'kursus_list' => 0,
    'pekerjaan_list' => 0,
    'organisasi_list' => 0,
    'keluarga_list' => 0,
    'kesehatan_list' => 0,
    'penghargaan_list' => 0,
    'hukuman_list' => 0,
    'mcu_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56c5415499bf03_65563185',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56c5415499bf03_65563185')) {
function content_56c5415499bf03_65563185 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1553056c541545903d3_88089612';
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
  $(document).ready(function(){
    $('#gaji').mask('000.000.000.000.000', {reverse: true});
  });
  
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="text/javascript">
  $(function() {
    $('#tglahir2').datepicker({
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
    $('#tgl_kontrak_dari').datepicker({
          changeMonth: true,
          changeYear: true
          });
    $('#tgl_kontrak_sampai').datepicker({
          changeMonth: true,
          changeYear: true
          });
  
  });
    $(function(){
        $("#tglahir2").datepicker($.datepicker.regional['id']);
    $("#tgl_masuk").datepicker($.datepicker.regional['id']);
    $("#tgl_tidakaktif").datepicker($.datepicker.regional['id']);
    $("#tgl_kontrak_dari").datepicker($.datepicker.regional['id']);
    $("#tgl_kontrak_sampai").datepicker($.datepicker.regional['id']);
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

      <div class="form-actions text-left">

                          			
				<!-- Simple registration form -->
			<form name="myForm" class="" action="?action=update" method="POST" ENCTYPE="multipart/form-data">
      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
			    <div class="panel panel-default">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-menu"></i>Update Data Pegawai</h6></div>
   <div class="panel-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>NIK :</label>
                <input type="text" name="nik" placeholder="NIK" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['nik']->value;?>
" >
              </div>

              <div class="form-group">
                <label>Nama Lengkap :</label> 
                <input type="text" name="name" placeholder="Nama Lengkap" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" >
              </div>
                        
              <div class="form-group">
                <label>Jabatan :</label> </td>
                <select name="jabatan" class="form-control" >
                <option value='<?php echo $_smarty_tpl->tpl_vars['jabatan_opt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
' selected="selected">--Pilih--</option>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['name'] = 'detail';
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['jabatan_opt']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total']);
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['jabatan_opt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
" <?php echo $_smarty_tpl->tpl_vars['jabatan_opt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['jabatan_opt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['nama'];?>
</option>
                <?php endfor; endif; ?>
                </select>
              </div>

               <div class="form-group">
                  <label>Departemen :</label>
                  <select name=divisi class="form-control" required>
                  <option value='<?php echo $_smarty_tpl->tpl_vars['divisi_opt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
' selected="selected">--Pilih--</option>
                  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['name'] = 'detail';
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['divisi_opt']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total']);
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['divisi_opt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
" <?php echo $_smarty_tpl->tpl_vars['divisi_opt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['divisi_opt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['nama'];?>
</option>
                   <?php endfor; endif; ?>
                  </select>
              </div>
              <div class="form-group">
                            <div class="row">
                              <div class="col-xs-6"> 
                            <label>Pendidikan :</label> </td>
                            <select name=pend_darat class="form-control">
                              <option value='<?php echo $_smarty_tpl->tpl_vars['penddarat_opt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['selected'];?>
' selected="selected">--Pilih--</option>
                              <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['name'] = 'detail';
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['penddarat_opt']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total']);
?>
                              <option value="<?php echo $_smarty_tpl->tpl_vars['penddarat_opt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
" <?php echo $_smarty_tpl->tpl_vars['penddarat_opt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['penddarat_opt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['nama'];?>
</option>
                              <?php endfor; endif; ?>
                                </select>
                                </div>
                                 <div class="col-xs-6">
                                  <label>Jenis Kelamin :</label> 
                            <select name="sex" class="form-control" >
                                                <option value="" selected="selected"> --Pilih-- </option>
                                                <option value="L" > Pria </option>
                                                <option value="P" > Wanita </option>
                                                </select>
                                                </div>
                                              </div>
                                            </div>

                      <div class="form-group">
                            <div class="row">
                              <div class="col-xs-6"> 
                            <label>Tempat Lahir :</label>
                            <input type="text" name="tlahir" placeholder="Tempat Lahir" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tlahir']->value;?>
" >
                          </div>
                            <div class="col-xs-6">
                              <label>Tanggal Lahir :</label>
                                <input type="text" name="tglahir2" class="form-control input-sm" id="tglahir2" placeholder="dd/mm/yyyy" >
                                    </div>
                                    </div>
                                    </div>

                            <div class="form-group">
                              <label>Agama :</label>
                            <select name=agama class="form-control">
                                <option value=''>--Pilih--</option>
                                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['name'] = 'detail';
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['agama_opt']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total']);
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['agama_opt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
" <?php echo $_smarty_tpl->tpl_vars['agama_opt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['agama_opt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['nama'];?>
</option>
                                <?php endfor; endif; ?>
                                </select>
                                 </div>
                                 <div class="form-group">
                                 <label>Nama Bank :</label>
                                    <input type="text" name="bank" placeholder="Nama Bank" class="form-control" >
                                 </div>
                                  <div class="form-group">
                           <label>No Rekening :</label>
                            <input type="text" name="no_rek" placeholder="No Rekening" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['no_rek']->value;?>
" >
                            </div>
                          
                          <div class="form-group">
                          <label>Gaji Pokok :</label>
                          <input type="text" id="gaji" name="gaji" placeholder="Gaji Pokok" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['gaji']->value;?>
">
                          </div>
                      <div class="form-group"><label>NPWP :</label>
                            <input type="text" name="npwp" placeholder="NPWP" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['npwp']->value;?>
">
                              </div>
                              <div class="form-group">
                         <label>Biaya Asuransi:</label>
                            <input type="text" name="by_asuransi" placeholder="Biaya Asuransi" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['by_asuransi']->value;?>
">
                          </div>

                          <div class="form-group">
                              <label>Status Perusahaan :</label> 
                              <select name=perusahaan class="form-control" >
                                 <option value=''>Pilih</option>
                             <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['name'] = 'detail';
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['perusahaan_opt']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total']);
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['perusahaan_opt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
" <?php echo $_smarty_tpl->tpl_vars['perusahaan_opt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['perusahaan_opt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['nama'];?>
</option>
                                <?php endfor; endif; ?>
                                    </select>
                               </div>
                                <div class="form-group">
                            <label>Email Company :</label>
                            <input type="email" name="email" placeholder="Email" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" >
                            </div>

                          <div class="form-group">
                           <label>Email Alternatif :</label>
                            <input type="email" name="emailal" placeholder="Email Alternatif" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['emailal']->value;?>
" >
                            </div>

                               </div>



                  <div class="col-md-6">
                      <div class="form-group">
                          <label>Alamat Tetap :</label>
                          <input type="text" name="address" placeholder="Alamat Tetap" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['address']->value;?>
">
                      </div>
                                  <div class="form-group">
                                    <label>Alamat Sementara :</label>
                                      <input type="text" name="alamat_sementara" placeholder="Alamat Sementara" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['alamat_sementara']->value;?>
">
                                  </div>
                                    <div class="form-group">
                                      <label>Photo :</label>
                                        <input type="file" name="pathfoto" id="pathfoto" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['pathfoto']->value;?>
" required> Maks 100 KB
                                    </div>
                                    <div class="form-group">
                                    <label>Status Kawin :</label>
                                      <select name=stskawin class="form-control">
                                      <option value=''>--Pilih--</option>
                                      <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['name'] = 'detail';
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['stskawin_opt']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total']);
?>
                                      <option value="<?php echo $_smarty_tpl->tpl_vars['stskawin_opt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
" <?php echo $_smarty_tpl->tpl_vars['stskawin_opt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['stskawin_opt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['nama'];?>
</option>
                                      <?php endfor; endif; ?>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                    <label>Telfon Kantor :</label> 
                                    <input type="text" name="telpon_kantor" placeholder="Telfon Kantor" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['telpon_kantor']->value;?>
">
                                    </div>
                                    <div class="form-group"><label>Telfon Rumah :</label>
                                    <input type="text" name="telpon_rumah" placeholder="Telfon Rumah" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['telpon_rumah']->value;?>
"></div>
                                    <div class="form-group"><label>Handphone :</label>
                                    <input type="text" id="hp" name="hp" placeholder="Handphone" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['hp']->value;?>
"></div>
                                    <div class="form-group"><label>Tanggal Masuk :</label>
                                      <input type="text" name="tgl_masuk" class="form-control input-sm" id="tgl_masuk" placeholder="dd/mm/yyyy">
                                    </div>
                                    <div class="form-group">
                                    <label>No. BPJS Ketenagakerjaan :</label>
                            <input type="text" name="jamsostek" placeholder="No. BPJS Ketenagakerjaan" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['jamsostek']->value;?>
">
                            </div>
                                    <div class="form-group"><label>No. BPJS Kesehatan :</label>
                                    <input type="text" name="no_askes" placeholder="No. BPJS Kesehatan" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['no_askes']->value;?>
">
                                    </div>
                                                            

                           <div class="form-group">
                            <div class="row">
                              <div class="col-xs-6"> <label>Status Karyawan :</label> 
                            <select name="status_p" class="form-control" >
                                                <option value="" selected="selected"><?php echo $_smarty_tpl->tpl_vars['status_p']->value;?>
 </option>
                                                <option value="A" > Aktif </option>
                                                <option value="T" > Tidak Aktif </option>
                                                </select>
                                                </div>
                              <div class="col-xs-6">
                                  <label>Tanggal Tidak Aktif :</label>
                            <input class="form-control" TYPE=TEXT ID="tgl_tidakaktif" NAME="tgl_tidakaktif" size=10 placeholder="dd/mm/yyyy">
                              </div></div>
                              </div>

                          <div class="form-group">
                            <label>Keterangan :</label>
                            <input type="text" name="keterangan" placeholder="Keterangan" class="form-control" >
                            </div>
                       
                            
                            <div class="form-group">
                           <label>Bisnis Unit :</label> </td>
                            <td><select name=bisnisunit class="form-control">
                              <option value='<?php echo $_smarty_tpl->tpl_vars['bisnisunit_opt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
' selected="selected">Pilih</option>
                                  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['name'] = 'detail';
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['bisnisunit_opt']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total']);
?>
                              <option value="<?php echo $_smarty_tpl->tpl_vars['bisnisunit_opt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
" <?php echo $_smarty_tpl->tpl_vars['bisnisunit_opt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['bisnisunit_opt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['nama'];?>
</option>
                             <?php endfor; endif; ?>
                            </div>

                            <tr>
                             <td width="200"> <label>  Kontrak :</label> </td>
                            <td><input type="text" NAME="tgl_kontrak_dari" id="tgl_kontrak_dari" placeholder="Mulai" class="form-control"> <br/></td>
                            <td width="50" align="center">s/d <br /></td>
                            <td width="200"><input type="text" NAME="tgl_kontrak_sampai" id="tgl_kontrak_sampai" placeholder="Terakhir" class="form-control"><br /> </td>
                             </tr>

                             
                        </table>
                      </div>
                    </div> 
                  </div>

  <p style="text-align:left;">
    <a href="?action=PendidikanAdd" class="btn btn-primary btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>
         </p>
 <div class="panel panel-primary">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Pendidikan</h6></div>
                      <table id="example" class="table table-striped table-bordered table-hover" style="width:100%;">
          <thead>
            <TR>
              <th style="width:3%;text-align:center;">No</th>
              <th style="width:30%;text-align:center;">Sekolah/Universitas</th>
              <th style="width:20%;text-align:center;">Jurusan</th>
              <th style="width:7%;text-align:center;">IPK</th>
              <th style="width:7%;text-align:center;">Gelar</th>
              <th style="width:10%;text-align:center;">Tempat</th>
              <th style="width:20%;text-align:center;">OPTION</th>
      
            </TR>
          </thead>
          <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['name'] = 'detail';
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pendidikan_list']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total']);
?>
          <TR>
              <TD VALIGN=TOP align=center><?php echo $_smarty_tpl->tpl_vars['pendidikan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['no'];?>
</TD>
              <TD VALIGN=TOP><?php echo $_smarty_tpl->tpl_vars['pendidikan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['sekolah'];?>
</TD>
              <TD VALIGN=TOP><?php echo $_smarty_tpl->tpl_vars['pendidikan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['jurusan'];?>
</TD>
              <TD VALIGN=TOP align=center><?php echo $_smarty_tpl->tpl_vars['pendidikan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['ipk'];?>
</TD>
              <TD VALIGN=TOP align=center><?php echo $_smarty_tpl->tpl_vars['pendidikan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['gelar'];?>
</TD>
              <TD VALIGN=TOP align=center><?php echo $_smarty_tpl->tpl_vars['pendidikan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['tempat'];?>
</TD>
              <TD align=center>
                  <a title='Edit' href="employee.php?action=PendidikanEdit&id=<?php echo $_smarty_tpl->tpl_vars['pendidikan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='employee.php?action=PendidikanDeleteProses&id=<?php echo $_smarty_tpl->tpl_vars['pendidikan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    <?php endfor; endif; ?>
</TABLE>

</div>
            
   <p style="text-align:left;">
    <a href="?action=KursusAdd" class="btn btn-primary btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>
         </p>
 <div class="panel panel-primary">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Kursus</h6></div>
                      <table id="example" class="table table-striped table-bordered table-hover" style="width:100%;">
          <thead>
            <TR>
              <th style="width:3%;text-align:center;">No</th>
              <th style="width:10%;text-align:center;">Kursus</th>
              <th style="width:30%;text-align:center;">Instansi</th>
              <th style="width:20%;text-align:center;">Kota</th>
              <th style="width:7%;text-align:center;">Tahun</th>
              <th style="width:7%;text-align:center;">Sertifikat</th>
              <th style="width:10%;text-align:center;">No. Sertifikat</th>
              <th style="width:10%;text-align:center;">Keterangan</th>
              <th style="width:20%;text-align:center;">OPTION</th>
      
            </TR>
          </thead>
          <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['name'] = 'detail';
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['kursus_list']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total']);
?>
          <TR>
              <TD VALIGN=TOP align=center><?php echo $_smarty_tpl->tpl_vars['kursus_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['no'];?>
</TD>
              <TD VALIGN=TOP ><?php echo $_smarty_tpl->tpl_vars['kursus_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['kursus'];?>
</TD>
              <TD VALIGN=TOP><?php echo $_smarty_tpl->tpl_vars['kursus_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['instansi'];?>
</TD>
              <TD VALIGN=TOP align=center><?php echo $_smarty_tpl->tpl_vars['kursus_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['kota'];?>
</TD>
              <TD VALIGN=TOP align=center><?php echo $_smarty_tpl->tpl_vars['kursus_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['tahun'];?>
</TD>
              <TD VALIGN=TOP align=center><?php echo $_smarty_tpl->tpl_vars['kursus_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['sertifikat'];?>
</TD>
              <TD VALIGN=TOP align=center><?php echo $_smarty_tpl->tpl_vars['kursus_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['no_sertifikat'];?>
</TD>
              <TD VALIGN=TOP align=center><?php echo $_smarty_tpl->tpl_vars['kursus_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['ket'];?>
</TD>
              <TD align=center>
                  <a title='Edit' href="employee.php?action=KursusEdit&id=<?php echo $_smarty_tpl->tpl_vars['kursus_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='employee.php?action=KursusDeleteProses&id=<?php echo $_smarty_tpl->tpl_vars['kursus_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    <?php endfor; endif; ?>
    </table>
    </div>

<p style="text-align:left;">
    <a href="?action=PekerjaanAdd" class="btn btn-primary btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>
         </p>
 <div class="panel panel-primary">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Pekerjaan</h6></div>
                      <table id="example" class="table table-striped table-bordered table-hover" style="width:100%;">
          <thead>
            <TR>
              <th style="width:3%;text-align:center;">No</th>
              <th style="width:15%;text-align:center;">Perusahaan</th>
              <th style="width:10%;text-align:center;">Jabatan</th>
              <th style="width:20%;text-align:center;">Deskripsi Pekerjaan</th>
              <th style="width:15%;text-align:center;">Alamat</th>
              <th style="width:7%;text-align:center;">Tanggal Mulai</th>
              <th style="width:10%;text-align:center;">Tanggal Akhir</th>
              <th style="width:20%;text-align:center;">OPTION</th>
      
            </TR>
          </thead>
          <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['name'] = 'detail';
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pekerjaan_list']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total']);
?>
          <TR>
              <TD VALIGN=TOP align=center><?php echo $_smarty_tpl->tpl_vars['pekerjaan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['no'];?>
</TD>
              <TD VALIGN=TOP ><?php echo $_smarty_tpl->tpl_vars['pekerjaan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['perusahaan'];?>
</TD>
              <TD VALIGN=TOP><?php echo $_smarty_tpl->tpl_vars['pekerjaan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['jabatan'];?>
</TD>
              <TD VALIGN=TOP><?php echo $_smarty_tpl->tpl_vars['pekerjaan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['deskripsi'];?>
</TD>
              <TD VALIGN=TOP><?php echo $_smarty_tpl->tpl_vars['pekerjaan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['alamat'];?>
</TD>
              <TD VALIGN=TOP align=center><?php echo $_smarty_tpl->tpl_vars['pekerjaan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['tgl_mulai'];?>
</TD>
              <TD VALIGN=TOP align=center><?php echo $_smarty_tpl->tpl_vars['pekerjaan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['tgl_akhir'];?>
</TD>
              <TD align=center>
                  <a title='Edit' href="employee.php?action=PekerjaanEdit&id=<?php echo $_smarty_tpl->tpl_vars['pekerjaan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='employee.php?action=PekerjaanDeleteProses&id=<?php echo $_smarty_tpl->tpl_vars['pekerjaan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    <?php endfor; endif; ?>

</table>
</div>

<p style="text-align:left;">
    <a href="?action=OrganisasiAdd" class="btn btn-primary btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>
         </p>
 <div class="panel panel-primary">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Organisasi</h6></div>
                      <table id="example" class="table table-striped table-bordered table-hover" style="width:100%;">
          <thead>
            <TR>
              <th style="width:3%;text-align:center;">No</th>
              <th style="width:20%;text-align:center;">Nama Organisasi</th>
              <th style="width:20%;text-align:center;">Jabatan</th>
              <th style="width:10%;text-align:center;">Tahun</th>  
              <th style="width:20%;text-align:center;">OPTION</th>   
            </TR>
          </thead>
          <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['name'] = 'detail';
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['organisasi_list']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total']);
?>
          <TR>
              <TD VALIGN=TOP align=center><?php echo $_smarty_tpl->tpl_vars['organisasi_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['no'];?>
</TD>
              <TD VALIGN=TOP ><?php echo $_smarty_tpl->tpl_vars['organisasi_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['organisasi'];?>
</TD>
              <TD VALIGN=TOP><?php echo $_smarty_tpl->tpl_vars['organisasi_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['jabatan'];?>
</TD>
              <TD VALIGN=TOP><?php echo $_smarty_tpl->tpl_vars['organisasi_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['tahun'];?>
</TD>
              <TD align=center>
                  <a title='Edit' href="employee.php?action=OrganisasiEdit&id=<?php echo $_smarty_tpl->tpl_vars['organisasi_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='employee.php?action=OrganisasiDeleteProses&id=<?php echo $_smarty_tpl->tpl_vars['organisasi_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    <?php endfor; endif; ?>

</table>
</div>
            
<p style="text-align:left;">
    <a href="?action=KeluargaAdd" class="btn btn-primary btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>
         </p>
 <div class="panel panel-primary">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Keluarga</h6></div>
                      <table id="example" class="table table-striped table-bordered table-hover" style="width:100%;">
          <thead>
            <TR>
              <th style="width:3%;text-align:center;">No</th>
              <th style="width:20%;text-align:center;">Tanggal Lahir</th>
              <th style="width:20%;text-align:center;">Nama Anggota Keluarga</th>
              <th style="width:20%;text-align:center;">Status Anggota Keluarga</th>
              <th style="width:20%;text-align:center;">OPTION</th>      
            </TR>
          </thead>
          <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['name'] = 'detail';
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['keluarga_list']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total']);
?>
          <TR>
                  <TD VALIGN=TOP align=center><?php echo $_smarty_tpl->tpl_vars['keluarga_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['no'];?>
</TD>
                  <TD VALIGN=TOP align=CENTER><?php echo $_smarty_tpl->tpl_vars['keluarga_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['tgl_lahir'];?>
</TD>
                  <TD VALIGN=TOP align=LEFT><?php echo $_smarty_tpl->tpl_vars['keluarga_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['nama'];?>
</TD>
                  <TD VALIGN=TOP align=CENTER><?php echo $_smarty_tpl->tpl_vars['keluarga_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['status'];?>
</TD>
              <TD align=center>
                  <a title='Edit' href="employee.php?action=KeluargaEdit&id=<?php echo $_smarty_tpl->tpl_vars['keluarga_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='employee.php?action=KeluargaDeleteProses&id=<?php echo $_smarty_tpl->tpl_vars['keluarga_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    <?php endfor; endif; ?>

</table>
</div>


<p style="text-align:left;">
    <a href="?action=KesehatanAdd" class="btn btn-primary btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>
         </p>
 <div class="panel panel-primary">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Kesehatan</h6></div>
                      <table id="example" class="table table-striped table-bordered table-hover" style="width:100%;">
          <thead>
            <TR>
                  <TH style="width:3%;text-align:center;">No</th>
                  <TH style="width:20%;text-align:center;">Penyakit</TH>
                  <TH style="width:6%;text-align:center;">Tahun Sakit</TH>
                  <TH style="width:15%;text-align:center;">Keterangan</TH>
                  <TH style="width:15%;text-align:center;">OPTION</TH>
            </TR>
          </thead>
          <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['name'] = 'detail';
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['kesehatan_list']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total']);
?>
          <TR>
                      <TD VALIGN=TOP align=center><?php echo $_smarty_tpl->tpl_vars['kesehatan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['no'];?>
</TD>
                      <TD VALIGN=TOP align=LEFT><?php echo $_smarty_tpl->tpl_vars['kesehatan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['penyakit'];?>
</TD>
                      <TD VALIGN=TOP align=CENTER><?php echo $_smarty_tpl->tpl_vars['kesehatan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['tahun'];?>
</TD>
                      <TD VALIGN=TOP align=LEFT><?php echo $_smarty_tpl->tpl_vars['kesehatan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['ket'];?>
</TD>
              <TD align=center>
                  <a title='Edit' href="employee.php?action=KesehatanEdit&id=<?php echo $_smarty_tpl->tpl_vars['kesehatan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='employee.php?action=KesehatanDeleteProses&id=<?php echo $_smarty_tpl->tpl_vars['kesehatan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    <?php endfor; endif; ?>

</table>
</div>

<p style="text-align:left;">
    <a href="?action=PenghargaanAdd" class="btn btn-primary btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>
         </p>
 <div class="panel panel-primary">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Penghargaan</h6></div>
                      <table id="example" class="table table-striped table-bordered table-hover" style="width:100%;">
          <thead>
            <TR>
                  <TH style="width:3%;text-align:center;">No</TH>
                  <TH style="width:15%;text-align:center;">Penghargaan</TH>
                  <TH style="width:15%;text-align:center;">Pemberi Penghargaan</TH>
                  <TH style="width:15%;text-align:center;">Tanggal Pemberian</TH>
                  <TH style="width:15%;text-align:center;">Keterangan</TH>
                  <TH style="width:15%;text-align:center;">OPTION</TH>
            </TR>
          </thead>
          <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['name'] = 'detail';
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['penghargaan_list']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total']);
?>
          <TR>
                 <TD VALIGN=TOP align=center><?php echo $_smarty_tpl->tpl_vars['penghargaan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['no'];?>
</TD>
                 <TD VALIGN=TOP align=LEFT><?php echo $_smarty_tpl->tpl_vars['penghargaan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['penghargaan'];?>
</TD>
                 <TD VALIGN=TOP align=LEFT><?php echo $_smarty_tpl->tpl_vars['penghargaan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['pemberi_penghargaan'];?>
</TD>
                 <TD VALIGN=TOP align=CENTER><?php echo $_smarty_tpl->tpl_vars['penghargaan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['tgl_penghargaan'];?>
</TD>
                 <TD VALIGN=TOP align=LEFT><?php echo $_smarty_tpl->tpl_vars['penghargaan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['ket'];?>
</TD>
              <TD align=center>
                  <a title='Edit' href="employee.php?action=PenghargaanEdit&id=<?php echo $_smarty_tpl->tpl_vars['penghargaan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='employee.php?action=PenghargaanDeleteProses&id=<?php echo $_smarty_tpl->tpl_vars['penghargaan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    <?php endfor; endif; ?>

</table>
</div>

<p style="text-align:left;">
    <a href="?action=HukumanAdd" class="btn btn-primary btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>
         </p>
 <div class="panel panel-primary">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Hukuman</h6></div>
                      <table id="example" class="table table-striped table-bordered table-hover" style="width:100%;">
          <thead>
            <TR>
              <TH ALIGN=CENTER width=4<?php echo '/*%%SmartyNocache:1553056c541545903d3_88089612%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:1553056c541545903d3_88089612%%*/';?>
No</TH>
              <TH ALIGN=CENTER width=10<?php echo '/*%%SmartyNocache:1553056c541545903d3_88089612%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:1553056c541545903d3_88089612%%*/';?>
Hukuman</TH>
              <TH ALIGN=CENTER width=15<?php echo '/*%%SmartyNocache:1553056c541545903d3_88089612%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:1553056c541545903d3_88089612%%*/';?>
Pemberi Hukuman</TH>
              <TH ALIGN=CENTER width=10<?php echo '/*%%SmartyNocache:1553056c541545903d3_88089612%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:1553056c541545903d3_88089612%%*/';?>
Tanggal Hukuman</TH>
              <TH ALIGN=CENTER width=10<?php echo '/*%%SmartyNocache:1553056c541545903d3_88089612%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:1553056c541545903d3_88089612%%*/';?>
No Surat/SK</TH>
              <TH ALIGN=CENTER width=10<?php echo '/*%%SmartyNocache:1553056c541545903d3_88089612%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:1553056c541545903d3_88089612%%*/';?>
Keterangan</TH>
              <TH ALIGN=CENTER width=10<?php echo '/*%%SmartyNocache:1553056c541545903d3_88089612%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:1553056c541545903d3_88089612%%*/';?>
OPTION</TH>
            </TR>
          </thead>
          <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['name'] = 'detail';
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['hukuman_list']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total']);
?>
          <TR>
              <TD VALIGN=TOP align=center><?php echo $_smarty_tpl->tpl_vars['hukuman_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['no'];?>
</TD>
              <TD VALIGN=TOP align=CENTER><?php echo $_smarty_tpl->tpl_vars['hukuman_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['hukuman'];?>
</TD>
              <TD VALIGN=TOP align=LEFT><?php echo $_smarty_tpl->tpl_vars['hukuman_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['pemberi_hukuman'];?>
</TD>
              <TD VALIGN=TOP align=CENTER><?php echo $_smarty_tpl->tpl_vars['hukuman_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['tgl_sanksi'];?>
</TD>
              <TD VALIGN=TOP align=CENTER><?php echo $_smarty_tpl->tpl_vars['hukuman_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['no_sanksi'];?>
</TD>
              <TD VALIGN=TOP align=LEFT><?php echo $_smarty_tpl->tpl_vars['hukuman_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['ket'];?>
</TD>
              <TD align=center>
                  <a title='Edit' href="employee.php?action=HukumanEdit&id=<?php echo $_smarty_tpl->tpl_vars['hukuman_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='employee.php?action=HukumanDeleteProses&id=<?php echo $_smarty_tpl->tpl_vars['hukuman_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    <?php endfor; endif; ?>

</table>
</div>

<p style="text-align:left;">
    <a href="?action=MCUAdd" class="btn btn-primary btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>
         </p>
 <div class="panel panel-primary">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel MCU</h6></div>
                      <table id="example" class="table table-striped table-bordered table-hover" style="width:100%;">
          <thead>
            <TR>
                <TH ALIGN=CENTER width=4<?php echo '/*%%SmartyNocache:1553056c541545903d3_88089612%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:1553056c541545903d3_88089612%%*/';?>
No</TH>
                <TH ALIGN=CENTER width=10<?php echo '/*%%SmartyNocache:1553056c541545903d3_88089612%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:1553056c541545903d3_88089612%%*/';?>
Tanggal Pemeriksaan</TH>
                <TH ALIGN=CENTER width=10<?php echo '/*%%SmartyNocache:1553056c541545903d3_88089612%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:1553056c541545903d3_88089612%%*/';?>
Hasil Pemeriksaan</TH>
                <TH ALIGN=CENTER width=10<?php echo '/*%%SmartyNocache:1553056c541545903d3_88089612%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:1553056c541545903d3_88089612%%*/';?>
Tenaga Medis</TH>
                <TH ALIGN=CENTER width=15<?php echo '/*%%SmartyNocache:1553056c541545903d3_88089612%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:1553056c541545903d3_88089612%%*/';?>
Catatan Kesehatan</TH>
                <TH ALIGN=CENTER width=10<?php echo '/*%%SmartyNocache:1553056c541545903d3_88089612%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:1553056c541545903d3_88089612%%*/';?>
Tanggal dari</TH>
                <TH ALIGN=CENTER width=10<?php echo '/*%%SmartyNocache:1553056c541545903d3_88089612%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:1553056c541545903d3_88089612%%*/';?>
Tanggal sampai</TH>
                <TH ALIGN=CENTER width=10<?php echo '/*%%SmartyNocache:1553056c541545903d3_88089612%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:1553056c541545903d3_88089612%%*/';?>
OPTION</TH>
            </TR>
          </thead>
          <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['name'] = 'detail';
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['mcu_list']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total']);
?>
          <TR>
              <TD VALIGN=TOP align=center><?php echo $_smarty_tpl->tpl_vars['mcu_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['no'];?>
</TD>
              <TD VALIGN=TOP align=CENTER><?php echo $_smarty_tpl->tpl_vars['mcu_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['tgl_pemeriksaan'];?>
</TD>
              <TD VALIGN=TOP align=LEFT><?php echo $_smarty_tpl->tpl_vars['mcu_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['hasil'];?>
</TD>
              <TD VALIGN=TOP align=LEFT><?php echo $_smarty_tpl->tpl_vars['mcu_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['tenaga'];?>
</TD>
              <TD VALIGN=TOP align=LEFT><?php echo $_smarty_tpl->tpl_vars['mcu_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['catatan'];?>
</TD>
              <TD VALIGN=TOP align=CENTER><?php echo $_smarty_tpl->tpl_vars['mcu_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['tgl_dari'];?>
</TD>
              <TD VALIGN=TOP align=CENTER><?php echo $_smarty_tpl->tpl_vars['mcu_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['tgl_sampai'];?>
</TD>
              <TD align=center>
                  <a title='Edit' href="employee.php?action=MCUEdit&id=<?php echo $_smarty_tpl->tpl_vars['mcu_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='employee.php?action=MCuDeleteProses&id=<?php echo $_smarty_tpl->tpl_vars['mcu_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    <?php endfor; endif; ?>

</table>
</div>
<div class="form-actions text-left">
                          <input type="submit" data-toggle="modal" role="button"  value="Update" class="btn btn-success">
                          <INPUT TYPE="BUTTON" VALUE="Back" ONCLICK="history.go(-1)" class="btn btn-primary">
                        </div>
            </div>
        </div>
      </form>
<a href="#" class="back-to-top">Back to Top</a>
      <?php echo '<script'; ?>
>
$(document).ready(function () {
  //called when key is pressed in textbox
  $("#hp").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
$("#gaji").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });

});

        <?php echo '</script'; ?>
>
      
         <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }
}
?>