<?php /* Smarty version 3.1.27, created on 2016-03-01 03:54:07
         compiled from "C:\xampp\htdocs\sip\templates\profile_edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3224956d5044fba3dd6_65288949%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47bf25f9db26565da8e4fbedf54d22067a9a0b73' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\profile_edit.tpl',
      1 => 1456391873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3224956d5044fba3dd6_65288949',
  'variables' => 
  array (
    'nik' => 0,
    'gambar' => 0,
    'sex' => 0,
    'nama' => 0,
    'agama_opt' => 0,
    'jabatan_opt' => 0,
    'stskawin_opt' => 0,
    'divisi_opt' => 0,
    'telp' => 0,
    'hp' => 0,
    'penddarat_opt' => 0,
    'ktp' => 0,
    'tempat' => 0,
    'tanggal' => 0,
    'alamatktp' => 0,
    'alamatsmr' => 0,
    'bank' => 0,
    'norek' => 0,
    'email' => 0,
    'npwp' => 0,
    'pathktp' => 0,
    'pathnpwp' => 0,
    'pathbpjs' => 0,
    'pathbpjssehat' => 0,
    'pathnikah' => 0,
    'pathkk' => 0,
    'pendidikan_list' => 0,
    'kursus_list' => 0,
    'keluarga_list' => 0,
    'organisasi_list' => 0,
    'pekerjaan_list' => 0,
    'kesehatan_list' => 0,
    'penghargaan_list' => 0,
    'hukuman_list' => 0,
    'mcu_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56d504503cabc3_04018301',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56d504503cabc3_04018301')) {
function content_56d504503cabc3_04018301 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3224956d5044fba3dd6_65288949';
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
    $('#tanggal').datepicker({
          changeMonth: true,
          changeYear: true
          });
    $('#tgllahir').datepicker({
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
        $("#tanggal").datepicker($.datepicker.regional['id']);
    $("#tgl_lahir").datepicker($.datepicker.regional['id']);
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
				<div class="page-title">
					<h3>Profile<small>Informasi Data Diri</small></h3>
				</div>

				<div id="reportrange" class="range">
					<div class="visible-xs header-element-toggle">
						<a class="btn btn-primary btn-icon"><i class="icon-calendar"></i></a>
					</div>
					<!--<div class="date-range"></div>-->
					<!--<span class="label label-danger">9</span>-->
				</div>
			</div>
			<!-- /page header -->
			<!-- Breadcrumbs line -->
			<?php echo $_smarty_tpl->getSubTemplate ("breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>

			<!-- /breadcrumbs line -->
			<!-- Table inside panel body -->
			          <h3>Edit Profile</h3>

<div class="tabbable" id="tabs">

        <div class="tab-content">         
        </div>
      </div>


    <div class="tabbable" id="tabs-79220">
                <ul class="nav nav-tabs">
                  <li class="active">
                    <a href="#biodata" data-toggle="tab">Biodata Diri</a>
                  </li>
                  <li>
                    <a href="#pendidikan" data-toggle="tab">Pendidikan</a>
                  </li>
                  <li>
                    <a href="#kursus" data-toggle="tab">Kursus</a>
                  </li>
                  <li>
                    <a href="#keluarga" data-toggle="tab">Keluarga</a>
                  </li>
                  <li>
                    <a href="#organisasi" data-toggle="tab">Organisasi</a>
                  </li>
                  <li>
                    <a href="#pekerjaan" data-toggle="tab">Pekerjaan</a>
                  </li>
                  <li>
                    <a href="#kesehatan" data-toggle="tab">Kesehatan</a>
                  </li>
                   <li>
                    <a href="#penghargaan" data-toggle="tab">Penghargaan</a>
                  </li>
                   <li>
                    <a href="#hukuman" data-toggle="tab">Hukuman</a>
                  </li>
                   <li>
                    <a href="#mcu" data-toggle="tab">MCU</a>
                  </li>
                </ul>
        
        <div class="tab-content">
          <div class="tab-pane active" id="biodata">
			<form action="profile.php?action=update" method=post>
	  <INPUT type="hidden" NAME=nik value="<?php echo $_smarty_tpl->tpl_vars['nik']->value;?>
">
		  <div style="text-align:right;">
		  <div class="form-actions text-right">
                          <input type="submit" data-toggle="modal" role="button"  value="Update" class="btn btn-success">
                          <INPUT TYPE="BUTTON" VALUE="Back" ONCLICK="history.go(-1)" class="btn btn-primary">
                        </div>
		  <!--<a class="btn btn-mini" href="profile.php?mod=edit" title="Edit"><img src="assets/img/edit.png" ></a>
		  <a class="btn btn-mini" href="profile.php?mod=print" title="View PDF"><img src="assets/img/pdf.png" ></a>-->
		  </div>
		  <div class="row-fluid">
		<div class="block span12">
        <div id="widget1container" class="block-body collapse in">
        <table class="table table-bordered">
		<tr>
		<?php if ($_smarty_tpl->tpl_vars['gambar']->value != null) {?>
		  <td rowspan="6" style="width:8%;text-align:left;"><img src="<?php echo $_smarty_tpl->tpl_vars['gambar']->value;?>
" ><p style="margin-top:5px;text-align:center;"><a href="profile.php?action=uppphoto" class="btn btn-small" >CHANGE PHOTO</a></p></td>
		 <?php } else { ?> 
		 <td rowspan="6" style="width:8%;text-align:left;"><img src="img/no_photo.jpg" ><p style="margin-top:5px;text-align:center;"><a href="profile.php?action=uppphoto" class="btn btn-small" >UPLOAD PHOTO</a></p></td>
		 <?php }?>
		<td style="width:10%;text-align:left;">NIK</td>
		<td style="width:1%;text-align:center;">:</td>
		<td style="width:30%;text-align:left;"><?php echo $_smarty_tpl->tpl_vars['nik']->value;?>
</td>
		<td >Jenis Kelamin</td>
		<td >:</td>
		<td > <select name="sex" class="form-control" >
                                                <option value="" selected="selected"> <?php echo $_smarty_tpl->tpl_vars['sex']->value;?>
 </option>
                                                <option value="L" > Pria </option>
                                                <option value="P" > Wanita </option>
                                                </select>
		</tr>
		<tr>
		  <td style="width:10%;text-align:left;">Nama</td>
		<td style="width:1%;text-align:center;">:</td>
		<td><INPUT type=TEXT NAME=name value="<?php echo $_smarty_tpl->tpl_vars['nama']->value;?>
" class="form-control"></td>
		<td >Agama</td>
		<td >:</td>
		<td ><select name=agama class="form-control">
						<option value=''>Pilih</option>
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
						</select></td>
		</tr>
		<tr>
		  <td style="width:10%;text-align:left;">Jabatan</td>
		<td style="width:1%;text-align:center;">:</td>
		<td><select name=jabatan class="form-control">
						<option value=''>Pilih</option>
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
						</select></td>
		<td >Status Kawin</td>
		<td >:</td>
		<td ><select name=stskawin class="form-control">
						<option value=''>Pilih</option>
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
						</select></td>
		</tr>
		<tr>
		  <td style="width:10%;text-align:left;">Depatemen</td>
		<td style="width:1%;text-align:center;">:</td>
		<td ><select name=divisi class="form-control">
						<option value=''>Pilih</option>
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
						</select></td>
		<td >Telp Rumah/HP</td>
		<td >:</td>
		<td ><INPUT TYPE=TEXT NAME=telpon_rumah class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['telp']->value;?>
">&nbsp;<span valign=middle>&nbsp;/&nbsp;</span>&nbsp;<INPUT TYPE=TEXT NAME=hp class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['hp']->value;?>
"></td>
		</tr>
		<tr>
		  <td style="width:10%;text-align:left;">Pendidikan</td>
		<td style="width:1%;text-align:center;">:</td>
		<td><select name=pendidikan class="form-control">
						<option value=''>Pilih</option>
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
						</select></td>
		<td>No KTP</td>
		<td>:</td>
		<td><INPUT TYPE=TEXT NAME=ktp value="<?php echo $_smarty_tpl->tpl_vars['ktp']->value;?>
" class="form-control"></td>
		</tr>
		<tr>
		  <td style="width:10%;text-align:left;">Tempat Lahir</td>
		<td style="width:1%;text-align:center;">:</td>
		<td><INPUT TYPE=TEXT NAME=tempat value="<?php echo $_smarty_tpl->tpl_vars['tempat']->value;?>
" class="form-control"></td>
		<td style="width:12%;text-align:left;">Tanggal Lahir</td>
		<td style="width:1%;text-align:center;">:</td>
		<td><INPUT class="form-control" TYPE=TEXT NAME=tgllahir id="tgllahir" value="<?php echo $_smarty_tpl->tpl_vars['tanggal']->value;?>
"><span valign=middle>&nbsp;dd/mm/yyyy</span></td>
		</tr>
		<tr>
		  <td rowspan="3" style="width:12%;text-align:left;">&nbsp;</td>
		  <td style="width:10%;text-align:left;">Alamat KTP</td>
		  <td style="width:1%;text-align:center;">:</td>
		  <td><TEXTAREA NAME="alamatktp" cols=30 rows=3 class="form-control"><?php echo $_smarty_tpl->tpl_vars['alamatktp']->value;?>
</TEXTAREA></td>
		  <td style="width:12%;text-align:left;">Alamat Sementara</td>
		  <td style="width:1%;text-align:center;">:</td>
		  <td><TEXTAREA NAME="alamatsmr" cols=30 rows=3 class="form-control"><?php echo $_smarty_tpl->tpl_vars['alamatsmr']->value;?>
</TEXTAREA></td>
		</tr>
		<tr>
		<td style="width:10%;text-align:left;">Nama Bank</td>
		<td style="width:1%;text-align:center;">:</td>
		<td><INPUT TYPE=TEXT NAME=bank value="<?php echo $_smarty_tpl->tpl_vars['bank']->value;?>
" class="form-control"></td>
		<td style="width:12%;text-align:left;">No Rekening</td>
		<td style="width:1%;text-align:center;">:</td>
		<td><INPUT TYPE=TEXT NAME=norek value="<?php echo $_smarty_tpl->tpl_vars['norek']->value;?>
" class="form-control"></td>
		</tr>
		<tr>
		  <td style="width:10%;text-align:left;">Email</td>
		<td style="width:1%;text-align:center;">:</td>
		<td><INPUT TYPE=TEXT NAME=email value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" class="form-control"></td>
		<td style="width:12%;text-align:left;">No NPWP</td>
		<td style="width:1%;text-align:center;">:</td>
		<td><INPUT TYPE=TEXT NAME=npwp value="<?php echo $_smarty_tpl->tpl_vars['npwp']->value;?>
" class="form-control"></td>
		</tr>
		</table>
		
		</div>
    </div>
	</div>
<div class="info-buttons block row">
     <div class="col-sm-2">
	<?php if ($_smarty_tpl->tpl_vars['pathktp']->value != "kosong" && $_smarty_tpl->tpl_vars['pathktp']->value != "Null" && $_smarty_tpl->tpl_vars['pathktp']->value != '') {?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['pathktp']->value;?>
" title="View Document"><i class="icon-disk"></i>
	<a href="profile.php?action=upktp" title="Upload KTP"><i class="icon-upload4"></i>
	<?php } else { ?>
	<a href="profile.php?action=upktp" title="Upload KTP"><i class="icon-upload4"></i>
	<?php }?>
	  <span> KTP </span>           
          </a></a></a></div>	

	<div class="col-sm-2">
  	<?php if ($_smarty_tpl->tpl_vars['pathnpwp']->value != "kosong" && $_smarty_tpl->tpl_vars['pathnpwp']->value != "Null" && $_smarty_tpl->tpl_vars['pathnpwp']->value != '') {?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['pathnpwp']->value;?>
" title="View Document"><i class="icon-disk"></i>
	<a href="profile.php?action=upnpwp" title="Upload NPWP"><i class="icon-upload4"></i>
	<?php } else { ?>
	<a href="profile.php?action=upnpwp" title="Upload NPWP"><i class="icon-upload4"></i>
	<?php }?>
    				    <span>NPWP</span>
                 </a></a></a></div>

	<div class="col-sm-2">
	<?php if ($_smarty_tpl->tpl_vars['pathbpjs']->value != "kosong" && $_smarty_tpl->tpl_vars['pathbpjs']->value != "Null" && $_smarty_tpl->tpl_vars['pathbpjs']->value != '') {?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['pathbpjs']->value;?>
" title="View Document"><i class="icon-disk"></i>
	<a href="profile.php?action=upbpjs" title="Upload BPJS NAKER"><i class="icon-upload4"></i>
	<?php } else { ?>
	<a href="profile.php?action=upbpjs" title="Upload BPJS NAKER"><i class="icon-upload4"></i>
	<?php }?>
	  <span>BPJS NAKER</span>
       </a></a></a></div>
						 
    				
   	<div class="col-sm-2">
	<?php if ($_smarty_tpl->tpl_vars['pathbpjssehat']->value != "kosong" && $_smarty_tpl->tpl_vars['pathbpjssehat']->value != "Null" && $_smarty_tpl->tpl_vars['pathbpjssehat']->value != '') {?>
  	<a href="<?php echo $_smarty_tpl->tpl_vars['pathbpjssehat']->value;?>
" title="View Document"><i class="icon-disk"></i>
	<a href="profile.php?action=upbpjssehat" title="Upload BPJS SEHAT"><i class="icon-upload4"></i>
	<?php } else { ?>
	<a href="profile.php?action=upbpjssehat" title="Upload BPJS SEHAT"><i class="icon-upload4"></i>
	<?php }?>
						 <span>BPJS SEHAT</span>
         </a></a></a></div>

	<div class="col-sm-2">
	<?php if ($_smarty_tpl->tpl_vars['pathnikah']->value != "kosong" && $_smarty_tpl->tpl_vars['pathnikah']->value != "Null" && $_smarty_tpl->tpl_vars['pathnikah']->value != '') {?>
  	<a href="<?php echo $_smarty_tpl->tpl_vars['pathnikah']->value;?>
" title="View Document"><i class="icon-disk"></i>
	<a href="profile.php?action=upbukunikah" title="Upload Buku Nikah"><i class="icon-upload4"></i>
	<?php } else { ?>
	<a href="profile.php?action=upbukunikah" title="Upload Buku Nikah"><i class="icon-upload4"></i>
	<?php }?>						 
    				      <span>Buku Nikah</span>
            </a></a></a></div>
	<div class="col-sm-2">
	<?php if ($_smarty_tpl->tpl_vars['pathkk']->value != "kosong" && $_smarty_tpl->tpl_vars['pathkk']->value != "Null" && $_smarty_tpl->tpl_vars['pathkk']->value != '') {?>
  	<div class="thumbnail"><a href="<?php echo $_smarty_tpl->tpl_vars['pathkk']->value;?>
" title="View Document"><i class="icon-disk"></i>
	<a href="profile.php?action=upkk" title="Upload Kartu Keluarga"><i class="icon-upload4"></i>
	<?php } else { ?>
	<div class="thumbnail"><a href="profile.php?action=upkk" title="Upload Kartu Keluarga"><i class="icon-upload4"></i>
	<?php }?>
						  <span>Kartu Keluarga</span>
          </a></a></a></div>
</div></div>
<hr>

</a>
</a>
</div>
<div class="tab-pane active" id="pendidikan">
<p style="text-align:left;">
    <a href="propendidikan.php?action=add" class="btn btn-primary btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>
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
                  <a title='Edit' href="propendidikan.php?action=edit&id=<?php echo $_smarty_tpl->tpl_vars['pendidikan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='propendidikan.php?action=edit&id=<?php echo $_smarty_tpl->tpl_vars['pendidikan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    <?php endfor; endif; ?>
</TABLE>
</div>
</div>

<div class="tab-pane active" id="kursus">            
   <p style="text-align:left;">
    <a href="prokursus.php?action=add" class="btn btn-primary btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>
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
                  <a title='Edit' href="prokursus.php?action=edit&id=<?php echo $_smarty_tpl->tpl_vars['kursus_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='prokursus.php?action=del&id=<?php echo $_smarty_tpl->tpl_vars['kursus_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    <?php endfor; endif; ?>
    </table>
    </div>
    </div>

<div class="tab-pane active" id="keluarga">            
<p style="text-align:left;">
    <a href="prokeluarga.php?action=add" class="btn btn-primary btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>
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
                  <a title='Edit' href="prokeluarga.php?action=edit&id=<?php echo $_smarty_tpl->tpl_vars['keluarga_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='prokeluarga.php?action=del&id=<?php echo $_smarty_tpl->tpl_vars['keluarga_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    <?php endfor; endif; ?>

</table>
</div>
</div>

<div class="tab-pane active" id="organisasi">
<p style="text-align:left;">
    <a href="proorganisasi.php?action=add" class="btn btn-primary btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>
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
                  <a title='Edit' href="proorganisasi.php?action=edit&id=<?php echo $_smarty_tpl->tpl_vars['organisasi_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='proorganisasi.php?action=del&id=<?php echo $_smarty_tpl->tpl_vars['organisasi_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    <?php endfor; endif; ?>

</table>
</div>
</div>


<div class="tab-pane active" id="pekerjaan">
<p style="text-align:left;">
    <a href="propengalaman.php?action=add" class="btn btn-primary btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>
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
                  <a title='Edit' href="propengalaman.php?action=edit&id=<?php echo $_smarty_tpl->tpl_vars['pekerjaan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='propengalaman.php?action=del&id=<?php echo $_smarty_tpl->tpl_vars['pekerjaan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    <?php endfor; endif; ?>

</table>
</div>
</div>

<div class="tab-pane active" id="kesehatan">
<p style="text-align:left;">
    <a href="prokesehatan.php?action=add" class="btn btn-primary btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>
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
                  <a title='Edit' href="prokesehatan.php?action=edit&id=<?php echo $_smarty_tpl->tpl_vars['kesehatan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='prokesehatan.php?action=del&id=<?php echo $_smarty_tpl->tpl_vars['kesehatan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    <?php endfor; endif; ?>

</table>
</div>
</div>

<div class="tab-pane active" id="penghargaan">
<p style="text-align:left;">
    <a href="propenghargaan.php?action=add" class="btn btn-primary btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>
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
                  <a title='Edit' href="propenghargaan.php?action=edit&id=<?php echo $_smarty_tpl->tpl_vars['penghargaan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='propenghargaan.php?action=del&id=<?php echo $_smarty_tpl->tpl_vars['penghargaan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    <?php endfor; endif; ?>

</table>
</div>
</div>

<div class="tab-pane active" id="hukuman">
<p style="text-align:left;">
    <a href="prohukuman.php?action=add" class="btn btn-primary btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>
         </p>
 <div class="panel panel-primary">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Hukuman</h6></div>
                      <table id="example" class="table table-striped table-bordered table-hover" style="width:100%;">
          <thead>
            <TR>
              <TH ALIGN=CENTER width=4<?php echo '/*%%SmartyNocache:3224956d5044fba3dd6_65288949%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:3224956d5044fba3dd6_65288949%%*/';?>
No</TH>
              <TH ALIGN=CENTER width=10<?php echo '/*%%SmartyNocache:3224956d5044fba3dd6_65288949%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:3224956d5044fba3dd6_65288949%%*/';?>
Hukuman</TH>
              <TH ALIGN=CENTER width=15<?php echo '/*%%SmartyNocache:3224956d5044fba3dd6_65288949%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:3224956d5044fba3dd6_65288949%%*/';?>
Pemberi Hukuman</TH>
              <TH ALIGN=CENTER width=10<?php echo '/*%%SmartyNocache:3224956d5044fba3dd6_65288949%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:3224956d5044fba3dd6_65288949%%*/';?>
Tanggal Hukuman</TH>
              <TH ALIGN=CENTER width=10<?php echo '/*%%SmartyNocache:3224956d5044fba3dd6_65288949%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:3224956d5044fba3dd6_65288949%%*/';?>
No Surat/SK</TH>
              <TH ALIGN=CENTER width=10<?php echo '/*%%SmartyNocache:3224956d5044fba3dd6_65288949%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:3224956d5044fba3dd6_65288949%%*/';?>
Keterangan</TH>
              <TH ALIGN=CENTER width=10<?php echo '/*%%SmartyNocache:3224956d5044fba3dd6_65288949%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:3224956d5044fba3dd6_65288949%%*/';?>
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
                  <a title='Edit' href="prohukuman.php?action=edit&id=<?php echo $_smarty_tpl->tpl_vars['hukuman_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='prohukuman.php?action=del&id=<?php echo $_smarty_tpl->tpl_vars['hukuman_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    <?php endfor; endif; ?>

</table>
</div>
</div>

<div class="tab-pane active" id="mcu">
<p style="text-align:left;">
    <a href="promcu.php?action=add" class="btn btn-primary btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>
         </p>
 <div class="panel panel-primary">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel MCU</h6></div>
                      <table id="example" class="table table-striped table-bordered table-hover" style="width:100%;">
          <thead>
            <TR>
                <TH ALIGN=CENTER width=4<?php echo '/*%%SmartyNocache:3224956d5044fba3dd6_65288949%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:3224956d5044fba3dd6_65288949%%*/';?>
No</TH>
                <TH ALIGN=CENTER width=10<?php echo '/*%%SmartyNocache:3224956d5044fba3dd6_65288949%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:3224956d5044fba3dd6_65288949%%*/';?>
Tanggal Pemeriksaan</TH>
                <TH ALIGN=CENTER width=10<?php echo '/*%%SmartyNocache:3224956d5044fba3dd6_65288949%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:3224956d5044fba3dd6_65288949%%*/';?>
Hasil Pemeriksaan</TH>
                <TH ALIGN=CENTER width=10<?php echo '/*%%SmartyNocache:3224956d5044fba3dd6_65288949%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:3224956d5044fba3dd6_65288949%%*/';?>
Tenaga Medis</TH>
                <TH ALIGN=CENTER width=15<?php echo '/*%%SmartyNocache:3224956d5044fba3dd6_65288949%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:3224956d5044fba3dd6_65288949%%*/';?>
Catatan Kesehatan</TH>
                <TH ALIGN=CENTER width=10<?php echo '/*%%SmartyNocache:3224956d5044fba3dd6_65288949%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:3224956d5044fba3dd6_65288949%%*/';?>
Tanggal dari</TH>
                <TH ALIGN=CENTER width=10<?php echo '/*%%SmartyNocache:3224956d5044fba3dd6_65288949%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:3224956d5044fba3dd6_65288949%%*/';?>
Tanggal sampai</TH>
                <TH ALIGN=CENTER width=10<?php echo '/*%%SmartyNocache:3224956d5044fba3dd6_65288949%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:3224956d5044fba3dd6_65288949%%*/';?>
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
                  <a title='Edit' href="promcu.php?action=edit&id=<?php echo $_smarty_tpl->tpl_vars['mcu_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='promcu.php?action=del&id=<?php echo $_smarty_tpl->tpl_vars['mcu_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    <?php endfor; endif; ?>
	</tbody></table>
</div>
          </div>

        </div> </div>

      </form>

<a href="#" class="back-to-top">Back to Top</a>

       
  <?php echo '<script'; ?>
 src="js/jquery.dataTables.js" type="text/javascript"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 language="javascript" type="text/javascript">  
  $(document).ready(function() {
    $('#example').dataTable( {
      "pagingType": "full_numbers"
    } );
  } );
  <?php echo '</script'; ?>
>
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