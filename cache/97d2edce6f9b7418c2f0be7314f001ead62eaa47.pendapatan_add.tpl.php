<?php
/*%%SmartyHeaderCode:2588956ca9137895061_52835501%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97d2edce6f9b7418c2f0be7314f001ead62eaa47' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\pendapatan_add.tpl',
      1 => 1456115943,
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
      1 => 1455888832,
      2 => 'file',
    ),
    'fa63a2d5c70af2cf4d6d31c4a279d32375eea31b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\footer.tpl',
      1 => 1453872114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2588956ca9137895061_52835501',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'periode_opt' => 0,
    'deahass_opt' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56ca913861f462_15288616',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ca913861f462_15288616')) {
function content_56ca913861f462_15288616 ($_smarty_tpl) {
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
    $('#transport').mask('000.000.000.000.000', {reverse: true});
    $('#thadir').mask('000.000.000.000.000', {reverse: true});
    $('#tjabatan').mask('000.000.000.000.000', {reverse: true});
    $('#tlain').mask('000.000.000.000.000', {reverse: true});
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
							<li ><a href="employee.php">Database Pegawai</a></li>
							<li ><a href="form_cuti.php">Daftar Cuti Pegawai</a></li>
							<li ><a href="news.php">Daftar Pengumuman/News</a></li>
					</ul>
					</li>
					<li><a href="#"><span>Payroll</span> <i class="icon-clipboard"></i></a>
					<ul>
							<li ><a href="uploaddata.php">Upload Data Pendukung</a></li>
							<li ><a href="uploadfp.php">Upload Data Finger Print</a></li>
							<li  class="active" ><a href="pendapatan.php">Pendapatan</a></li>
							<li ><a href="potongan.php">Potongan</a></li>
							<li ><a href="#">Payroll (Penggajian)</a></li>
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
			
				<!-- Simple registration form -->
<form name="pendapatan_form" class="" action="?action=saveEmployee" method="POST" ENCTYPE="multipart/form-data">
	<div class="panel panel-default">
    <div class="panel-heading"><h6 class="panel-title"><i class="icon-menu"></i>Add Pendapatan</h6></div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-11">
             <div class="form-group">
                <label>Periode :</label> </td>
                <select name="idperiode" required class="form-control">
					          <option value=''>Pilih</option>
													        <option value="012015" >012015</option>
					        
					            					        <option value="022015" >022015</option>
					        
					            					        <option value="032015" >032015</option>
					        
					            					        <option value="042015" >042015</option>
					        
					            					        <option value="052015" >052015</option>
					        
					            					        <option value="062015" >062015</option>
					        
					            					        <option value="072015" >072015</option>
					        
					            					        <option value="082015" >082015</option>
					        
					                            </select>
              </div>
              <div class="form-group">
                <label>Nama Karyawan :</label> </td>
                <select name="pegawai" required class="form-control">
						<option value=''>Pilih</option>
													<option value="15068208079" >AGUSTINA MAYAWATI </option>
													<option value="15038801056" >AHMAD JAENAL ARIFIN</option>
													<option value="14058507018" >ALI USMAN</option>
													<option value="13059209008" >AMRIYANTO</option>
													<option value="15047011066-P" >ANANG BUDI SETYAWAN</option>
													<option value="15028904050" >ANNISA NURUL HIKMAH</option>
													<option value="15049512067" >ASRI MAULIA RAHMA</option>
													<option value="14018908014" >BANGUN PURWANTO</option>
													<option value="15059712076" >CERAH SRI IRNANTI</option>
													<option value="15048304065-P" >CHANDRA CAHYADI</option>
													<option value="15018007040" >DAMARJATI SAPTO ARIOYUDHO</option>
													<option value="15036302059-P" >DANIEL AZIS</option>
													<option value="11107408001" >DICKY SUHARTO </option>
													<option value="15018204037" >EMILDA SITARA</option>
													<option value="15027804049" >FILYO RONDONUWU</option>
													<option value="15017309042-P" >HUSAINI</option>
													<option value="15049102063" >IHSANUL HAKIM</option>
													<option value="15039212062" >INDAH DWI ARIANI</option>
													<option value="14110101032" >IVAN SADDAM ARDINGHI SIREGAR</option>
													<option value="15028903051" >JYALITA NITI HANDIPANI</option>
													<option value="15068908080" >KARTIKA LEONI DWIJAYANTI</option>
													<option value="14068007020" >KIKI ANUGRAH MAHARANI</option>
													<option value="15037805061" >MARIANA </option>
													<option value="14106707029" >MOCH. ANWAR JULISUSANTO</option>
													<option value="15067507082" >MUGHIRA SUBHAN</option>
													<option value="15017706046-P" >MUH GULUH</option>
													<option value="15039210058" >MUHAMMAD IQBAL IBRAHIM</option>
													<option value="15017208041" >MUNAWAR ZEGA</option>
													<option value="11212121212" >NUFRI WILIS</option>
													<option value="15088202084" >PANDUJATI</option>
													<option value="15068012081" >PENDI YANI </option>
													<option value="13048909006" >POETRI ERWANDA SEPTIYANTI</option>
													<option value="14028304016" >RIKA RAHIMDY</option>
													<option value="13018810004" >SADI </option>
													<option value="15017901044-P" >SAMSUDIN</option>
													<option value="15059609077" >SITI MAWADATURROHMAH</option>
													<option value="15017610045-P" >SUGIANTO</option>
													<option value="15027702048-P" >SUPARMAN</option>
													<option value="13018209003" >SUTEJO</option>
													<option value="08690115001" >TAUCHID ROELIANTO</option>
													<option value="13017407005" >TOMMY ALAMANDA GULTOM</option>
													<option value="15016204038" >USMARYONO</option>
													<option value="15038308055" >VEICKY DELFIANDRI TAUFIK</option>
													<option value="P0016" >WAHYU SAPUTRO</option>
													<option value="14098606025" >WINDA</option>
													<option value="14088707023" >YULYANTO ADI PRABOWO</option>
												</select>
              </div>

             <div class="form-group">
                <label>Transport & Meal :</label>
                <input type="text" name="transport" id="transport" placeholder="Transport & Meal" class="form-control">
              </div>

              <div class="form-group">
                <label>Tunjangan Kehadiran :</label> 
                <input type="text" name="thadir" id="thadir" placeholder="Tunjangan Kehadiran" class="form-control">
              </div>
              <div class="form-group">
                <label>Tunjangan Jabatan :</label>
                <input type="text" name="tjabatan" id="tjabatan" placeholder="Tunjangan Jabatan" class="form-control">
              </div>

              <div class="form-group">
                <label>Tunjangan Lain :</label> 
                <input type="text" name="tlain" id="tlain" placeholder="Tunjangan Lain" class="form-control">
              </div>
              <div class="form-group">
                <label>Ket. Pendapatan Lain :</label> 
                <input type="text" name="ket_lain" placeholder="Ket. Pendapatan Lain" class="form-control">
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
  <script>
$(document).ready(function () {
  //called when key is pressed in textbox
  $("#transport").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
  $("#thadir").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
  $("#tjabatan").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
$("#tlain").keypress(function (e) {
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
</html><?php }
}
?>