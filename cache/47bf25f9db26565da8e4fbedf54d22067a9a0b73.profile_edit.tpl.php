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
    '10e8ad6da261b6128f2c9dea5e875e117c5d5b34' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\breadcrumb.tpl',
      1 => 1456208215,
      2 => 'file',
    ),
    'fa63a2d5c70af2cf4d6d31c4a279d32375eea31b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\footer.tpl',
      1 => 1453872114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3224956d5044fba3dd6_65288949',
  'tpl_function' => 
  array (
  ),
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
  'unifunc' => 'content_56d50451ba6e12_89941966',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56d50451ba6e12_89941966')) {
function content_56d50451ba6e12_89941966 ($_smarty_tpl) {
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
  $(document).ready(function(){
    $('#gaji').mask('000.000.000.000.000', {reverse: true});
  });
  
</script>


<script type="text/javascript">
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
			<!-- Info Block -->
<div class="breadcrumb-line">
				<ul class="breadcrumb">
					<li><a href="index.php?action=home">Home</a></li>
					 					 <li class="active">Profile</li>					 					 					 				</ul>
				<div class="visible-xs breadcrumb-toggle">
					<a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
				</div>
			</div>
				<!-- /main navigation -->
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
	  <INPUT type="hidden" NAME=nik value="15028904050">
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
				  <td rowspan="6" style="width:8%;text-align:left;"><img src="gambar/15028904050_new4.jpg" ><p style="margin-top:5px;text-align:center;"><a href="profile.php?action=uppphoto" class="btn btn-small" >CHANGE PHOTO</a></p></td>
		 		<td style="width:10%;text-align:left;">NIK</td>
		<td style="width:1%;text-align:center;">:</td>
		<td style="width:30%;text-align:left;">15028904050</td>
		<td >Jenis Kelamin</td>
		<td >:</td>
		<td > <select name="sex" class="form-control" >
                                                <option value="" selected="selected">  </option>
                                                <option value="L" > Pria </option>
                                                <option value="P" > Wanita </option>
                                                </select>
		</tr>
		<tr>
		  <td style="width:10%;text-align:left;">Nama</td>
		<td style="width:1%;text-align:center;">:</td>
		<td><INPUT type=TEXT NAME=name value="ANNISA NURUL HIKMAH" class="form-control"></td>
		<td >Agama</td>
		<td >:</td>
		<td ><select name=agama class="form-control">
						<option value=''>Pilih</option>
													<option value="1" selected=selected>Islam</option>
													<option value="2" >Khatolik</option>
													<option value="3" >Protestan</option>
													<option value="4" >Hindu</option>
													<option value="5" >Budha</option>
													<option value="6" >Konghucu</option>
												</select></td>
		</tr>
		<tr>
		  <td style="width:10%;text-align:left;">Jabatan</td>
		<td style="width:1%;text-align:center;">:</td>
		<td><select name=jabatan class="form-control">
						<option value=''>Pilih</option>
													<option value="172" >Accounting Supervisor</option>
													<option value="192" >Administration - Staff</option>
													<option value="190" >Administration Supervisor</option>
													<option value="219" >Advisor</option>
													<option value="193" >BU Assistant Director</option>
													<option value="196" >Business Unit Director</option>
													<option value="179" >Cashier - Staff</option>
													<option value="171" >CEO</option>
													<option value="206" >Contractor</option>
													<option value="181" >Driver</option>
													<option value="209" >Engineer - Staff</option>
													<option value="173" >Finance Supervisor</option>
													<option value="188" >General Affair Supervisor</option>
													<option value="178" selected=selected>HR Supervisor</option>
													<option value="218" >Marketing Manager</option>
													<option value="211" >Marketing Staff</option>
													<option value="183" >Messenger</option>
													<option value="186" >Office Boy</option>
													<option value="213" >Project Manager</option>
													<option value="180" >QHSE Coordinator </option>
													<option value="199" >QHSE Officer</option>
													<option value="216" >Receptionist</option>
													<option value="187" >Sales Engineer</option>
													<option value="217" >Secretary</option>
													<option value="205" >Staff</option>
													<option value="212" >Support Manager</option>
													<option value="207" >Vice President Operational</option>
													<option value="208" >Vice President Support</option>
												</select></td>
		<td >Status Kawin</td>
		<td >:</td>
		<td ><select name=stskawin class="form-control">
						<option value=''>Pilih</option>
													<option value="1" >K0</option>
													<option value="2" selected=selected>K1</option>
													<option value="3" >K2</option>
													<option value="4" >K3</option>
													<option value="5" >TK</option>
													<option value="6" >TK1</option>
													<option value="7" >TK2</option>
													<option value="8" >TK3</option>
												</select></td>
		</tr>
		<tr>
		  <td style="width:10%;text-align:left;">Depatemen</td>
		<td style="width:1%;text-align:center;">:</td>
		<td ><select name=divisi class="form-control">
						<option value=''>Pilih</option>
													<option value="1" selected=selected>Support Division</option>
													<option value="6" >QHSE Unit</option>
													<option value="8" >Operation Division</option>
													<option value="9" >Project Unit</option>
													<option value="10" >IT & Infrastructure Unit</option>
													<option value="11" >Utilities Unit</option>
													<option value="12" >Top Management</option>
												</select></td>
		<td >Telp Rumah/HP</td>
		<td >:</td>
		<td ><INPUT TYPE=TEXT NAME=telpon_rumah class="form-control" value="">&nbsp;<span valign=middle>&nbsp;/&nbsp;</span>&nbsp;<INPUT TYPE=TEXT NAME=hp class="form-control" value="085774183889"></td>
		</tr>
		<tr>
		  <td style="width:10%;text-align:left;">Pendidikan</td>
		<td style="width:1%;text-align:center;">:</td>
		<td><select name=pendidikan class="form-control">
						<option value=''>Pilih</option>
													<option value="1" >SD</option>
													<option value="2" >SMP</option>
													<option value="3" >SMU</option>
													<option value="4" >D1</option>
													<option value="5" >D2</option>
													<option value="6" >D3</option>
													<option value="7" selected=selected>S1</option>
													<option value="8" >S2</option>
													<option value="9" >S3</option>
												</select></td>
		<td>No KTP</td>
		<td>:</td>
		<td><INPUT TYPE=TEXT NAME=ktp value="" class="form-control"></td>
		</tr>
		<tr>
		  <td style="width:10%;text-align:left;">Tempat Lahir</td>
		<td style="width:1%;text-align:center;">:</td>
		<td><INPUT TYPE=TEXT NAME=tempat value="Bekasi" class="form-control"></td>
		<td style="width:12%;text-align:left;">Tanggal Lahir</td>
		<td style="width:1%;text-align:center;">:</td>
		<td><INPUT class="form-control" TYPE=TEXT NAME=tgllahir id="tgllahir" value="20/04/1989"><span valign=middle>&nbsp;dd/mm/yyyy</span></td>
		</tr>
		<tr>
		  <td rowspan="3" style="width:12%;text-align:left;">&nbsp;</td>
		  <td style="width:10%;text-align:left;">Alamat KTP</td>
		  <td style="width:1%;text-align:center;">:</td>
		  <td><TEXTAREA NAME="alamatktp" cols=30 rows=3 class="form-control">Jl.Dahlia 6 No 186 RT008/03 Jatikramat Indah 1 Jatiasih, Bekasi</TEXTAREA></td>
		  <td style="width:12%;text-align:left;">Alamat Sementara</td>
		  <td style="width:1%;text-align:center;">:</td>
		  <td><TEXTAREA NAME="alamatsmr" cols=30 rows=3 class="form-control"></TEXTAREA></td>
		</tr>
		<tr>
		<td style="width:10%;text-align:left;">Nama Bank</td>
		<td style="width:1%;text-align:center;">:</td>
		<td><INPUT TYPE=TEXT NAME=bank value="" class="form-control"></td>
		<td style="width:12%;text-align:left;">No Rekening</td>
		<td style="width:1%;text-align:center;">:</td>
		<td><INPUT TYPE=TEXT NAME=norek value="" class="form-control"></td>
		</tr>
		<tr>
		  <td style="width:10%;text-align:left;">Email</td>
		<td style="width:1%;text-align:center;">:</td>
		<td><INPUT TYPE=TEXT NAME=email value="hrgl@bdrindonesia.co.id" class="form-control"></td>
		<td style="width:12%;text-align:left;">No NPWP</td>
		<td style="width:1%;text-align:center;">:</td>
		<td><INPUT TYPE=TEXT NAME=npwp value="" class="form-control"></td>
		</tr>
		</table>
		
		</div>
    </div>
	</div>
<div class="info-buttons block row">
     <div class="col-sm-2">
		<a href="dokumen/15028904050_KTP__KTP__KTP_10005_KTP_KTP.jpg" title="View Document"><i class="icon-disk"></i>
	<a href="profile.php?action=upktp" title="Upload KTP"><i class="icon-upload4"></i>
		  <span> KTP </span>           
          </a></a></a></div>	

	<div class="col-sm-2">
  		<a href="profile.php?action=upnpwp" title="Upload NPWP"><i class="icon-upload4"></i>
	    				    <span>NPWP</span>
                 </a></a></a></div>

	<div class="col-sm-2">
		<a href="dokumen/04890215041_BPJS_bpjs_naker_annisa.jpg" title="View Document"><i class="icon-disk"></i>
	<a href="profile.php?action=upbpjs" title="Upload BPJS NAKER"><i class="icon-upload4"></i>
		  <span>BPJS NAKER</span>
       </a></a></a></div>
						 
    				
   	<div class="col-sm-2">
	  	<a href="dokumen/04890215041_BPJS_SEHAT_BPJS Annisa.docx" title="View Document"><i class="icon-disk"></i>
	<a href="profile.php?action=upbpjssehat" title="Upload BPJS SEHAT"><i class="icon-upload4"></i>
							 <span>BPJS SEHAT</span>
         </a></a></a></div>

	<div class="col-sm-2">
		<a href="profile.php?action=upbukunikah" title="Upload Buku Nikah"><i class="icon-upload4"></i>
							 
    				      <span>Buku Nikah</span>
            </a></a></a></div>
	<div class="col-sm-2">
		<div class="thumbnail"><a href="profile.php?action=upkk" title="Upload Kartu Keluarga"><i class="icon-upload4"></i>
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
                    <TR>
              <TD VALIGN=TOP align=center>n/a</TD>
              <TD VALIGN=TOP>n/a</TD>
              <TD VALIGN=TOP>n/a</TD>
              <TD VALIGN=TOP align=center>n/a</TD>
              <TD VALIGN=TOP align=center>n/a</TD>
              <TD VALIGN=TOP align=center>n/a</TD>
              <TD align=center>
                  <a title='Edit' href="propendidikan.php?action=edit&id=n/a">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='propendidikan.php?action=edit&id=n/a'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
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
                    <TR>
              <TD VALIGN=TOP align=center>1</TD>
              <TD VALIGN=TOP >asdsads</TD>
              <TD VALIGN=TOP>asdads</TD>
              <TD VALIGN=TOP align=center>asas</TD>
              <TD VALIGN=TOP align=center>2013</TD>
              <TD VALIGN=TOP align=center></TD>
              <TD VALIGN=TOP align=center>qwqwqwq</TD>
              <TD VALIGN=TOP align=center></TD>
              <TD align=center>
                  <a title='Edit' href="prokursus.php?action=edit&id=31">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='prokursus.php?action=del&id=31'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
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
                    <TR>
                  <TD VALIGN=TOP align=center>1</TD>
                  <TD VALIGN=TOP align=CENTER>16/02/2016</TD>
                  <TD VALIGN=TOP align=LEFT>Nofri</TD>
                  <TD VALIGN=TOP align=CENTER>Istri/Suami</TD>
              <TD align=center>
                  <a title='Edit' href="prokeluarga.php?action=edit&id=24">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='prokeluarga.php?action=del&id=24'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    
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
                    <TR>
              <TD VALIGN=TOP align=center>n/a</TD>
              <TD VALIGN=TOP >n/a</TD>
              <TD VALIGN=TOP>n/a</TD>
              <TD VALIGN=TOP>n/a</TD>
              <TD align=center>
                  <a title='Edit' href="proorganisasi.php?action=edit&id=n/a">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='proorganisasi.php?action=del&id=n/a'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    
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
                    <TR>
              <TD VALIGN=TOP align=center>n/a</TD>
              <TD VALIGN=TOP >n/a</TD>
              <TD VALIGN=TOP>n/a</TD>
              <TD VALIGN=TOP>n/a</TD>
              <TD VALIGN=TOP>n/a</TD>
              <TD VALIGN=TOP align=center>n/a</TD>
              <TD VALIGN=TOP align=center>n/a</TD>
              <TD align=center>
                  <a title='Edit' href="propengalaman.php?action=edit&id=n/a">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='propengalaman.php?action=del&id=n/a'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    
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
                    <TR>
                      <TD VALIGN=TOP align=center>1</TD>
                      <TD VALIGN=TOP align=LEFT>adsasas</TD>
                      <TD VALIGN=TOP align=CENTER>2016</TD>
                      <TD VALIGN=TOP align=LEFT>qwqwqwqw</TD>
              <TD align=center>
                  <a title='Edit' href="prokesehatan.php?action=edit&id=6">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='prokesehatan.php?action=del&id=6'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    
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
                    <TR>
                 <TD VALIGN=TOP align=center>1</TD>
                 <TD VALIGN=TOP align=LEFT>zxczxcxz</TD>
                 <TD VALIGN=TOP align=LEFT>zxczxc</TD>
                 <TD VALIGN=TOP align=CENTER>18/02/2016</TD>
                 <TD VALIGN=TOP align=LEFT>zxcxzc</TD>
              <TD align=center>
                  <a title='Edit' href="propenghargaan.php?action=edit&id=6">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='propenghargaan.php?action=del&id=6'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
              <TR>
                 <TD VALIGN=TOP align=center>2</TD>
                 <TD VALIGN=TOP align=LEFT>xzzxzxz</TD>
                 <TD VALIGN=TOP align=LEFT>zxzxz</TD>
                 <TD VALIGN=TOP align=CENTER>09/02/2016</TD>
                 <TD VALIGN=TOP align=LEFT></TD>
              <TD align=center>
                  <a title='Edit' href="propenghargaan.php?action=edit&id=5">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='propenghargaan.php?action=del&id=5'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    
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
              <TH ALIGN=CENTER width=4<?php echo '%>';?>No</TH>
              <TH ALIGN=CENTER width=10<?php echo '%>';?>Hukuman</TH>
              <TH ALIGN=CENTER width=15<?php echo '%>';?>Pemberi Hukuman</TH>
              <TH ALIGN=CENTER width=10<?php echo '%>';?>Tanggal Hukuman</TH>
              <TH ALIGN=CENTER width=10<?php echo '%>';?>No Surat/SK</TH>
              <TH ALIGN=CENTER width=10<?php echo '%>';?>Keterangan</TH>
              <TH ALIGN=CENTER width=10<?php echo '%>';?>OPTION</TH>
            </TR>
          </thead>
                    <TR>
              <TD VALIGN=TOP align=center>1</TD>
              <TD VALIGN=TOP align=CENTER>tes</TD>
              <TD VALIGN=TOP align=LEFT>tes</TD>
              <TD VALIGN=TOP align=CENTER>25/02/2016</TD>
              <TD VALIGN=TOP align=CENTER>ga ada</TD>
              <TD VALIGN=TOP align=LEFT></TD>
              <TD align=center>
                  <a title='Edit' href="prohukuman.php?action=edit&id=10">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='prohukuman.php?action=del&id=10'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    
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
                <TH ALIGN=CENTER width=4<?php echo '%>';?>No</TH>
                <TH ALIGN=CENTER width=10<?php echo '%>';?>Tanggal Pemeriksaan</TH>
                <TH ALIGN=CENTER width=10<?php echo '%>';?>Hasil Pemeriksaan</TH>
                <TH ALIGN=CENTER width=10<?php echo '%>';?>Tenaga Medis</TH>
                <TH ALIGN=CENTER width=15<?php echo '%>';?>Catatan Kesehatan</TH>
                <TH ALIGN=CENTER width=10<?php echo '%>';?>Tanggal dari</TH>
                <TH ALIGN=CENTER width=10<?php echo '%>';?>Tanggal sampai</TH>
                <TH ALIGN=CENTER width=10<?php echo '%>';?>OPTION</TH>
            </TR>
          </thead>
                    <TR>
              <TD VALIGN=TOP align=center>n/a</TD>
              <TD VALIGN=TOP align=CENTER>n/a</TD>
              <TD VALIGN=TOP align=LEFT>n/a</TD>
              <TD VALIGN=TOP align=LEFT>n/a</TD>
              <TD VALIGN=TOP align=LEFT>n/a</TD>
              <TD VALIGN=TOP align=CENTER>n/a</TD>
              <TD VALIGN=TOP align=CENTER>n/a</TD>
              <TD align=center>
                  <a title='Edit' href="promcu.php?action=edit&id=n/a">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='promcu.php?action=del&id=n/a'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    	</tbody></table>
</div>
          </div>

        </div> </div>

      </form>

<a href="#" class="back-to-top">Back to Top</a>

       
  <script src="js/jquery.dataTables.js" type="text/javascript"></script>
  <script language="javascript" type="text/javascript">  
  $(document).ready(function() {
    $('#example').dataTable( {
      "pagingType": "full_numbers"
    } );
  } );
  </script>
      <script>
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

        </script>
      
           <!-- Footer -->
    <div class="footer clearfix">
        <div class="pull-left">&copy; 2016. Langit Infotama</div>
    	<div class="pull-right icons-group">
    		<a href="#"><i class="icon-cog3"></i></a>
    	</div>
    </div>
    <!-- /footer -->

</body>
</html>


<?php }
}
?>