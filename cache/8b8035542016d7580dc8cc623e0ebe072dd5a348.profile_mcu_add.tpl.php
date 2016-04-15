<?php
/*%%SmartyHeaderCode:2792656cea15cabd012_94683509%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b8035542016d7580dc8cc623e0ebe072dd5a348' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\profile_mcu_add.tpl',
      1 => 1456379971,
      2 => 'file',
    ),
    'e69b1d9b6462a960f6e40c26dcc5286353725220' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\header.tpl',
      1 => 1456377007,
      2 => 'file',
    ),
    '0c8ea50e9a5ac91fe80a6d56e761b1087c9f50af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\pengelola.tpl',
      1 => 1456301558,
      2 => 'file',
    ),
    '22676ace1a6104e4ab36a685c17ef6cdc7766f17' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\mainnav.tpl',
      1 => 1456208153,
      2 => 'file',
    ),
    'fa63a2d5c70af2cf4d6d31c4a279d32375eea31b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\footer.tpl',
      1 => 1453872114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2792656cea15cabd012_94683509',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'idpeg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56cea15d5f7304_27243390',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56cea15d5f7304_27243390')) {
function content_56cea15d5f7304_27243390 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
<title>Sistem Informasi Pegawai</title>

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/londinium-theme.css" rel="stylesheet" type="text/css">
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link href="css/icons.css" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>

<script type="text/javascript" src="js/plugins/charts/sparkline.min.js"></script>

<script type="text/javascript" src="js/plugins/forms/uniform.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/select2.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/inputmask.js"></script>
<script type="text/javascript" src="js/plugins/forms/autosize.js"></script>
<script type="text/javascript" src="js/plugins/forms/inputlimit.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/listbox.js"></script>
<script type="text/javascript" src="js/plugins/forms/multiselect.js"></script>
<script type="text/javascript" src="js/plugins/forms/validate.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/tags.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/switch.min.js"></script>

<script type="text/javascript" src="js/plugins/forms/uploader/plupload.full.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/uploader/plupload.queue.min.js"></script>

<script type="text/javascript" src="js/plugins/forms/wysihtml5/wysihtml5.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/wysihtml5/toolbar.js"></script>

<script type="text/javascript" src="js/plugins/interface/daterangepicker.js"></script>
<script type="text/javascript" src="js/plugins/interface/fancybox.min.js"></script>
<script type="text/javascript" src="js/plugins/interface/moment.js"></script>
<script type="text/javascript" src="js/plugins/interface/jgrowl.min.js"></script>
<script type="text/javascript" src="js/plugins/interface/datatables.min.js"></script>
<script type="text/javascript" src="js/plugins/interface/tabletools.min.js"></script>
<script type="text/javascript" src="js/plugins/interface/colorpicker.js"></script>
<script type="text/javascript" src="js/plugins/interface/fullcalendar.min.js"></script>
<script type="text/javascript" src="js/plugins/interface/timepicker.min.js"></script>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/application.js"></script>

</style>


</head>

<body>

	<!-- Navbar -->
	<div class="navbar navbar-inverse " role="navigation">
		<div class="navbar-header">
			<a class="navbar-brand" style="margin-top:-4px;" href="index.php?action=showmenu"><title="Sistem Informasi Pegawai" alt="Sistem Informasi Pegawai">Sisfo Pegawai</a>
			<a class="sidebar-toggle"><i class="icon-paragraph-justify2"></i></a>
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-icons">
				<span class="sr-only">Toggle navbar</span>
				<i class="icon-grid3"></i>
			</button>
			<button type="button" class="navbar-toggle offcanvas">
				<span class="sr-only">Toggle navigation</span>
				<i class="icon-paragraph-justify2"></i>
			</button>
		</div>

		<ul class="nav navbar-nav navbar-right collapse" id="navbar-icons">
					
			
			<li class="user dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown">
					<!--<img src="http://placehold.it/300">-->
					<span>anisa</span>
					<i class="caret"></i>
				</a>
				<ul class="dropdown-menu dropdown-menu-right icons-right">
					<li><a href="password.php"><i class="icon-key"></i> Change Password</a></li>
					<li><a href="index.php?action=logout"><i class="icon-exit"></i> Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<!-- /navbar -->

<script src="js/jquery.js"></script>
<script src="js/jquery.min2.js"></script>
<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
  <link type="text/css" href="development-bundle/themes/base/jquery.ui.all.css" rel="stylesheet" />
	<script type="text/javascript" src="development-bundle/ui/jquery.ui.core.js"></script>
	<script type="text/javascript" src="development-bundle/ui/jquery.ui.datepicker.js"></script>
	<script type="text/javascript" src="development-bundle/ui/i18n/jquery.ui.datepicker-id.js"></script>
  <script type="text/javascript" src="js/autoNumeric.js"></script>
  <script src="js/jQuery-Mask-Plugin_js_jquery.mask.min.js"> </script>
  <script src="development-bundle/ui/jquery.ui.widget.js"></script>
  <script src="development-bundle/ui/jquery.ui.position.js"></script>
  <script src="development-bundle/ui/jquery.ui.autocomplete.js"></script>



<script type="text/javascript">
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
  </script>


	<!-- Page container -->
 	<div class="page-container">


		<!-- Sidebar -->
		<div class="sidebar">
			<div class="sidebar-content">

				
								<!-- User dropdown -->
				<div class="user-menu dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="images/admin.png">
						<div class="user-info">
							Pengelola Website <span>anisa</span>
						</div>
					</a>
					
				</div>
				<!-- /user dropdown -->
				
				<!-- Main navigation -->
				<ul class="navigation">				
					<li ><a href="index.php?action=home"><span>Dashboard</span> <i class="icon-screen2"></i></a></li>
					<li  class="active" ><a href="profile.php"><span>Profile</span> <i class="icon-profile"></i></a></li>
					<li ><a href="permohonan.php"><span>Form Permohonan</span> <i class="icon-clipboard"></i></a></li>
					<li ><a href="seepayroll.php"><span>Payroll</span> <i class="icon-accessibility"></i></a></li>
					<li ><a href="password.php"><span>Change Password</span> <i class="icon-users"></i></a></li>
					<li><a href="index.php?action=logout"><span>Logout</span> <i class="icon-exit"></i></a></li>
				</ul>
				<!-- /main navigation -->
				
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
			<form name="myForm" class="" action="promcu.php?action=save" method="POST" ENCTYPE="multipart/form-data">
       <input type="hidden" name="id" value="<br />
<b>Notice</b>:  Undefined index: id in <b>C:\xampp\htdocs\sip\templates_c\8b8035542016d7580dc8cc623e0ebe072dd5a348_0.file.profile_mcu_add.tpl.cache.php</b> on line <b>150</b><br />
<br />
<b>Notice</b>:  Trying to get property of non-object in <b>C:\xampp\htdocs\sip\templates_c\8b8035542016d7580dc8cc623e0ebe072dd5a348_0.file.profile_mcu_add.tpl.cache.php</b> on line <b>150</b><br />
">
        <input type="hidden" name="idpeg" value="48">
			    <div class="panel panel-default">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-menu"></i>Add Data MCU</h6></div>
                  <div class="panel-body">
	                	<div class="row">
	                		<div class="col-md-6">
	                			<div class="form-group">
	                			<table width="1000">
	                				<tr>
                          <td width="200"><label>Tanggal Pemeriksaan :</label></td>
                                    <td><input type="text" name="tgl_pemeriksaan" class="form-control input-sm" id="tgl_pemeriksaan" placeholder="dd/mm/yyyy"><br /></td>
                                    </tr>
                          <tr>
                            <td width="200"> <label>Hasil Pemeriksaan :</label> </td>
                            <td><textarea type="text" name="hasil" placeholder="Hasil Pemeriksaan" class="form-control"></textarea><br /> </td>
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
                            <td><input type="text" name="no_sertifikat" placeholder="No Sertifikat  " class="form-control"><br /> </td>
                          </tr>

                          <tr>
                            <td width="200"> <label>Tenaga Medis :</label> </td>
                            <td><input type="text" name="tenaga_medis" placeholder="Hasil Pemeriksaan" class="form-control"><br /> </td>
                          </tr>
                          <tr>
                            <td width="200"> <label>Catatan Kesehatan :</label> </td>
                            <td><textarea type="text" name="catatan" placeholder="Catatan Kesehatan" class="form-control"></textarea><br /> </td>
                          </tr>
                          <tr>
                          <td width="200"><label>Tanggal Dari :</label></td>
                                    <td><input type="text" name="tgl_dari" class="form-control input-sm" id="tgl_dari" placeholder="dd/mm/yyyy"><br /></td>
                                    </tr>
                          
                          <tr>
                          <td width="200"><label>Tanggal Sampai :</label></td>
                                    <td><input type="text" name="tgl_sampai" class="form-control input-sm" id="tgl_sampai" placeholder="dd/mm/yyyy"><br /></td>
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
                    <!-- Footer -->
    <div class="footer clearfix">
        <div class="pull-left">&copy; 2016. Langit Infotama</div>
    	<div class="pull-right icons-group">
    		<a href="#"><i class="icon-cog3"></i></a>
    	</div>
    </div>
    <!-- /footer -->

</body>
</html><?php }
}
?>