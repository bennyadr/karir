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
    'e69b1d9b6462a960f6e40c26dcc5286353725220' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\header.tpl',
      1 => 1455719267,
      2 => 'file',
    ),
    '0c8ea50e9a5ac91fe80a6d56e761b1087c9f50af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\pengelola.tpl',
      1 => 1454316992,
      2 => 'file',
    ),
    '22676ace1a6104e4ab36a685c17ef6cdc7766f17' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\mainnav.tpl',
      1 => 1455765005,
      2 => 'file',
    ),
    'fa63a2d5c70af2cf4d6d31c4a279d32375eea31b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\footer.tpl',
      1 => 1453872114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1553056c541545903d3_88089612',
  'tpl_function' => 
  array (
  ),
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
  'unifunc' => 'content_56c541558b2d07_77683744',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56c541558b2d07_77683744')) {
function content_56c541558b2d07_77683744 ($_smarty_tpl) {
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
			<a class="navbar-brand" style="margin-top:-4px;" href="index.php?action=showmenu"><title="S.I.P" alt="S.I.P"></a>
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
					<span>admin</span>
					<i class="caret"></i>
				</a>
				<ul class="dropdown-menu dropdown-menu-right icons-right">
					<li><a href="password.php"><i class="icon-key"></i> Change Password</a></li>
					<li><a href="index.php?mod=logout"><i class="icon-exit"></i> Logout</a></li>
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
							Pengelola Website <span>Administrator</span>
						</div>
					</a>
					
				</div>
				<!-- /user dropdown -->
				
				<!-- Main navigation -->
				<ul class="navigation">				
					<li ><a href="index.php?action=showmenu"><span>Dashboard</span> <i class="icon-screen2"></i></a></li>
					<li><a href="#"><span>Staffing</span> <i class="icon-accessibility"></i></a>
					<ul>
							<li  class="active" ><a href="employee.php">Database Pegawai</a></li>
							<li ><a href="form_cuti.php">Daftar Cuti Pegawai</a></li>
							
					</ul>
					</li>
					<li><a href="#"><span>Payroll</span> <i class="icon-clipboard"></i></a>
					<ul>
							<li ><a href="payroll.php">Payroll</a></li>
					</ul>
					</li>
					
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

      <div class="form-actions text-left">

                          			
				<!-- Simple registration form -->
			<form name="myForm" class="" action="?action=update" method="POST" ENCTYPE="multipart/form-data">
      <input type="hidden" name="id" value="17">
			    <div class="panel panel-default">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-menu"></i>Update Data Pegawai</h6></div>
   <div class="panel-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>NIK :</label>
                <input type="text" name="nik" placeholder="NIK" class="form-control" value="01407024" >
              </div>

              <div class="form-group">
                <label>Nama Lengkap :</label> 
                <input type="text" name="name" placeholder="Nama Lengkap" class="form-control" value="Abda Saputra Sitopu" >
              </div>
                        
              <div class="form-group">
                <label>Jabatan :</label> </td>
                <select name="jabatan" class="form-control" >
                <option value='<br />
<b>Notice</b>:  Undefined index:  in <b>C:\xampp\htdocs\sip\templates_c\ee44d1cd30b6eb9ed8f336dfa3196a4eec9bff21_0.file.employee_edit.tpl.cache.php</b> on line <b>228</b><br />
' selected="selected">--Pilih--</option>
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
                                <option value="178" >HR Supervisor</option>
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
                                </select>
              </div>

               <div class="form-group">
                  <label>Departemen :</label>
                  <select name=divisi class="form-control" required>
                  <option value='<br />
<b>Notice</b>:  Undefined offset: 28 in <b>C:\xampp\htdocs\sip\templates_c\ee44d1cd30b6eb9ed8f336dfa3196a4eec9bff21_0.file.employee_edit.tpl.cache.php</b> on line <b>265</b><br />
' selected="selected">--Pilih--</option>
                                    <option value="1" >Support Division</option>
                                     <option value="6" >QHSE Unit</option>
                                     <option value="8" >Operation Division</option>
                                     <option value="9" >Project Unit</option>
                                     <option value="10" >IT & Infrastructure Unit</option>
                                     <option value="11" >Utilities Unit</option>
                                     <option value="12" >Top Management</option>
                                     </select>
              </div>
              <div class="form-group">
                            <div class="row">
                              <div class="col-xs-6"> 
                            <label>Pendidikan :</label> </td>
                            <select name=pend_darat class="form-control">
                              <option value='' selected="selected">--Pilih--</option>
                                                            <option value="1" >SD</option>
                                                            <option value="2" >SMP</option>
                                                            <option value="3" >SMU</option>
                                                            <option value="4" >D1</option>
                                                            <option value="5" >D2</option>
                                                            <option value="6" >D3</option>
                                                            <option value="7" selected=selected>S1</option>
                                                            <option value="8" >S2</option>
                                                            <option value="9" >S3</option>
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
                            <input type="text" name="tlahir" placeholder="Tempat Lahir" class="form-control" value="Sindar Raya" >
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
                                                                <option value="1" >Islam</option>
                                                                <option value="2" >Khatolik</option>
                                                                <option value="3" selected=selected>Protestan</option>
                                                                <option value="4" >Hindu</option>
                                                                <option value="5" >Budha</option>
                                                                <option value="6" >Konghucu</option>
                                                                </select>
                                 </div>
                                 <div class="form-group">
                                 <label>Nama Bank :</label>
                                    <input type="text" name="bank" placeholder="Nama Bank" class="form-control" >
                                 </div>
                                  <div class="form-group">
                           <label>No Rekening :</label>
                            <input type="text" name="no_rek" placeholder="No Rekening" class="form-control" value="" >
                            </div>
                          
                          <div class="form-group">
                          <label>Gaji Pokok :</label>
                          <input type="text" id="gaji" name="gaji" placeholder="Gaji Pokok" class="form-control" value="1469350">
                          </div>
                      <div class="form-group"><label>NPWP :</label>
                            <input type="text" name="npwp" placeholder="NPWP" class="form-control" value="64.289.150.1.432.000">
                              </div>
                              <div class="form-group">
                         <label>Biaya Asuransi:</label>
                            <input type="text" name="by_asuransi" placeholder="Biaya Asuransi" class="form-control" value="0">
                          </div>

                          <div class="form-group">
                              <label>Status Perusahaan :</label> 
                              <select name=perusahaan class="form-control" >
                                 <option value=''>Pilih</option>
                                                         <option value="1" >BDR</option>
                                                            <option value="2" >CRA</option>
                                                            <option value="3" >SUP</option>
                                                            <option value="4" >Budatama</option>
                                                            <option value="5" >Sukses</option>
                                                                    </select>
                               </div>
                                <div class="form-group">
                            <label>Email Company :</label>
                            <input type="email" name="email" placeholder="Email" class="form-control" value="" >
                            </div>

                          <div class="form-group">
                           <label>Email Alternatif :</label>
                            <input type="email" name="emailal" placeholder="Email Alternatif" class="form-control" value="" >
                            </div>

                               </div>



                  <div class="col-md-6">
                      <div class="form-group">
                          <label>Alamat Tetap :</label>
                          <input type="text" name="address" placeholder="Alamat Tetap" class="form-control" value="Perum TJP Cluster Bali Q 1/ 14 kel Jatisari , kota bekasi">
                      </div>
                                  <div class="form-group">
                                    <label>Alamat Sementara :</label>
                                      <input type="text" name="alamat_sementara" placeholder="Alamat Sementara" class="form-control" value="Komplek Araya, Ruko Galaxi, Blok 6 No.1, Surabaya">
                                  </div>
                                    <div class="form-group">
                                      <label>Photo :</label>
                                        <input type="file" name="pathfoto" id="pathfoto" class="form-control" value="<br />
<b>Notice</b>:  Undefined index: pathfoto in <b>C:\xampp\htdocs\sip\templates_c\ee44d1cd30b6eb9ed8f336dfa3196a4eec9bff21_0.file.employee_edit.tpl.cache.php</b> on line <b>485</b><br />
<br />
<b>Notice</b>:  Trying to get property of non-object in <b>C:\xampp\htdocs\sip\templates_c\ee44d1cd30b6eb9ed8f336dfa3196a4eec9bff21_0.file.employee_edit.tpl.cache.php</b> on line <b>485</b><br />
" required> Maks 100 KB
                                    </div>
                                    <div class="form-group">
                                    <label>Status Kawin :</label>
                                      <select name=stskawin class="form-control">
                                      <option value=''>--Pilih--</option>
                                                                            <option value="1" >K0</option>
                                                                            <option value="2" >K1</option>
                                                                            <option value="3" >K2</option>
                                                                            <option value="4" >K3</option>
                                                                            <option value="5" selected=selected>TK</option>
                                                                            <option value="6" >TK1</option>
                                                                            <option value="7" >TK2</option>
                                                                            <option value="8" >TK3</option>
                                                                            </select>
                                    </div>
                                    <div class="form-group">
                                    <label>Telfon Kantor :</label> 
                                    <input type="text" name="telpon_kantor" placeholder="Telfon Kantor" class="form-control" value="">
                                    </div>
                                    <div class="form-group"><label>Telfon Rumah :</label>
                                    <input type="text" name="telpon_rumah" placeholder="Telfon Rumah" class="form-control" value=""></div>
                                    <div class="form-group"><label>Handphone :</label>
                                    <input type="text" id="hp" name="hp" placeholder="Handphone" class="form-control" value="081294751279"></div>
                                    <div class="form-group"><label>Tanggal Masuk :</label>
                                      <input type="text" name="tgl_masuk" class="form-control input-sm" id="tgl_masuk" placeholder="dd/mm/yyyy">
                                    </div>
                                    <div class="form-group">
                                    <label>No. BPJS Ketenagakerjaan :</label>
                            <input type="text" name="jamsostek" placeholder="No. BPJS Ketenagakerjaan" class="form-control" value="">
                            </div>
                                    <div class="form-group"><label>No. BPJS Kesehatan :</label>
                                    <input type="text" name="no_askes" placeholder="No. BPJS Kesehatan" class="form-control" value="">
                                    </div>
                                                            

                           <div class="form-group">
                            <div class="row">
                              <div class="col-xs-6"> <label>Status Karyawan :</label> 
                            <select name="status_p" class="form-control" >
                                                <option value="" selected="selected">T </option>
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
                              <option value='<br />
<b>Notice</b>:  Undefined offset: 8 in <b>C:\xampp\htdocs\sip\templates_c\ee44d1cd30b6eb9ed8f336dfa3196a4eec9bff21_0.file.employee_edit.tpl.cache.php</b> on line <b>573</b><br />
' selected="selected">Pilih</option>
                                                                <option value="1" >Mandala</option>
                                                           <option value="2" >Akasa</option>
                                                           <option value="3" >Agni</option>
                                                           <option value="4" >Bumi</option>
                                                           <option value="5" >Banyu</option>
                                                           <option value="6" >Projects</option>
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
                    <TR>
              <TD VALIGN=TOP align=center>n/a</TD>
              <TD VALIGN=TOP>n/a</TD>
              <TD VALIGN=TOP>n/a</TD>
              <TD VALIGN=TOP align=center>n/a</TD>
              <TD VALIGN=TOP align=center>n/a</TD>
              <TD VALIGN=TOP align=center>n/a</TD>
              <TD align=center>
                  <a title='Edit' href="employee.php?action=PendidikanEdit&id=n/a">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='employee.php?action=PendidikanDeleteProses&id=n/a'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
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
                    <TR>
              <TD VALIGN=TOP align=center>n/a</TD>
              <TD VALIGN=TOP >n/a</TD>
              <TD VALIGN=TOP>n/a</TD>
              <TD VALIGN=TOP align=center>n/a</TD>
              <TD VALIGN=TOP align=center>n/a</TD>
              <TD VALIGN=TOP align=center>n/a</TD>
              <TD VALIGN=TOP align=center>n/a</TD>
              <TD VALIGN=TOP align=center>n/a</TD>
              <TD align=center>
                  <a title='Edit' href="employee.php?action=KursusEdit&id=n/a">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='employee.php?action=KursusDeleteProses&id=n/a'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
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
                    <TR>
              <TD VALIGN=TOP align=center>n/a</TD>
              <TD VALIGN=TOP >n/a</TD>
              <TD VALIGN=TOP>n/a</TD>
              <TD VALIGN=TOP>n/a</TD>
              <TD VALIGN=TOP>n/a</TD>
              <TD VALIGN=TOP align=center>n/a</TD>
              <TD VALIGN=TOP align=center>n/a</TD>
              <TD align=center>
                  <a title='Edit' href="employee.php?action=PekerjaanEdit&id=n/a">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='employee.php?action=PekerjaanDeleteProses&id=n/a'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    
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
                    <TR>
              <TD VALIGN=TOP align=center>n/a</TD>
              <TD VALIGN=TOP >n/a</TD>
              <TD VALIGN=TOP>n/a</TD>
              <TD VALIGN=TOP>n/a</TD>
              <TD align=center>
                  <a title='Edit' href="employee.php?action=OrganisasiEdit&id=n/a">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='employee.php?action=OrganisasiDeleteProses&id=n/a'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    
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
                    <TR>
                  <TD VALIGN=TOP align=center>n/a</TD>
                  <TD VALIGN=TOP align=CENTER>n/a</TD>
                  <TD VALIGN=TOP align=LEFT>n/a</TD>
                  <TD VALIGN=TOP align=CENTER>n/a</TD>
              <TD align=center>
                  <a title='Edit' href="employee.php?action=KeluargaEdit&id=n/a">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='employee.php?action=KeluargaDeleteProses&id=n/a'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    
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
                    <TR>
                      <TD VALIGN=TOP align=center>n/a</TD>
                      <TD VALIGN=TOP align=LEFT>n/a</TD>
                      <TD VALIGN=TOP align=CENTER>n/a</TD>
                      <TD VALIGN=TOP align=LEFT>n/a</TD>
              <TD align=center>
                  <a title='Edit' href="employee.php?action=KesehatanEdit&id=n/a">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='employee.php?action=KesehatanDeleteProses&id=n/a'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    
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
                    <TR>
                 <TD VALIGN=TOP align=center>n/a</TD>
                 <TD VALIGN=TOP align=LEFT>n/a</TD>
                 <TD VALIGN=TOP align=LEFT>n/a</TD>
                 <TD VALIGN=TOP align=CENTER>n/a</TD>
                 <TD VALIGN=TOP align=LEFT>n/a</TD>
              <TD align=center>
                  <a title='Edit' href="employee.php?action=PenghargaanEdit&id=n/a">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='employee.php?action=PenghargaanDeleteProses&id=n/a'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    
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
              <TD VALIGN=TOP align=center>n/a</TD>
              <TD VALIGN=TOP align=CENTER>n/a</TD>
              <TD VALIGN=TOP align=LEFT>n/a</TD>
              <TD VALIGN=TOP align=CENTER>n/a</TD>
              <TD VALIGN=TOP align=CENTER>n/a</TD>
              <TD VALIGN=TOP align=LEFT>n/a</TD>
              <TD align=center>
                  <a title='Edit' href="employee.php?action=HukumanEdit&id=n/a">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='employee.php?action=HukumanDeleteProses&id=n/a'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    
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
                  <a title='Edit' href="employee.php?action=MCUEdit&id=n/a">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='employee.php?action=MCuDeleteProses&id=n/a'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    
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