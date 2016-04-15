<?php
/*%%SmartyHeaderCode:1276056d8846e2d3952_44319870%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b46bf021388f7416f1aed8f885b296641baba88a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\permohonan_edit.tpl',
      1 => 1457030252,
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
  'nocache_hash' => '1276056d8846e2d3952_44319870',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'kode' => 0,
    'datenow' => 0,
    'nama' => 0,
    'nik' => 0,
    'jabatan' => 0,
    'notelp' => 0,
    'alamat' => 0,
    'namaats' => 0,
    'idpegats' => 0,
    'jabatanats' => 0,
    'tglmulai' => 0,
    'jenis_cuti' => 0,
    'jmlhari' => 0,
    'alasan' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56d8846eec7110_91980627',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56d8846eec7110_91980627')) {
function content_56d8846eec7110_91980627 ($_smarty_tpl) {
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
    $('#tgl_mulai').datepicker({
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
        $("#tgl_mulai").datepicker($.datepicker.regional['id']);
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
  </script>

<script language='JavaScript'>
var ajaxRequest;

function getAjax() //fungsi untuk mengecek AJAX pada browser
{
  try
  {
    ajaxRequest = new XMLHttpRequest();
  }
  catch (e)
  {
    try
    {
      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
    }
    catch (e) 
    {
      try
      {
        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
      }
      catch (e)
      {
        alert("Your browser broke!");
        return false;
      }
    }
  }
}

function autoComplete() //fungsi menangkap input search dan menampilkan hasil search
{
  getAjax();
  input = document.getElementById('inputan').value;
  
  if (input == "")
  {
    document.getElementById("hasil").innerHTML = "";
  }
  else
  {
    ajaxRequest.open("GET","autosuggest.php?nama="+input);
    ajaxRequest.onreadystatechange = function()
    {
      document.getElementById("hasil").innerHTML = ajaxRequest.responseText;      
    }
    ajaxRequest.send(null);
  }
} 
function autoInsert(id,nip,nama,jabatan) //fungsi mengisi input text dengan hasil pencarian yang dipilih
{
  document.getElementById("inputan").value = nama;
  document.getElementById("nama").value = id;
  document.myForm.nip.value = nip;
  document.myForm.jabatan.value = jabatan;

  document.getElementById("hasil").innerHTML = "";
}
function autoComplete2() //fungsi menangkap input search dan menampilkan hasil search
{
  getAjax();
  idpeg = document.getElementById('inputan2').value;
  
  if (idpeg == "")
  {
    document.getElementById("hasil2").innerHTML = "";
  }
  else
  { 
    ajaxRequest.open("GET","autosuggest.php?idpeg="+idpeg);
    ajaxRequest.onreadystatechange = function()
    {
      document.getElementById("hasil2").innerHTML = ajaxRequest.responseText;     
    }
    ajaxRequest.send(null);
  }
}
function autoInsert2(id,nama,jabatanats) //fungsi mengisi input text dengan hasil pencarian yang dipilih
{
  document.getElementById("inputan2").value = nama;
  document.getElementById("nama2").value = id;
  document.myForm.jabatanats.value= jabatanats;
  document.getElementById("hasil2").innerHTML = "";
}
</script>
<script type='text/javascript'>
function createRequestObject() {
    var ro;
    var browser = navigator.appName;
    if(browser == "Microsoft Internet Explorer"){
        ro = new ActiveXObject("Microsoft.XMLHTTP");
    }else{
        ro = new XMLHttpRequest();
    }
    return ro;
}

var xmlhttp = createRequestObject();

function rubah(pilih)
{
  idpeg = document.getElementById('nama').value;
  jenis = document.getElementById('jenis_cuti').value;
  //document.getElementById("test").innerHTML = jenis;
   //var jenis = pilih.value; "&idjabatan="+jabatan +'&=jenis'+jenis
  if (!jenis) return;
    //xmlhttp.open('get', 'ajax_check.php?idpeg='+jenis,true);
  xmlhttp.open("GET","ajax_check.php?idpeg="+idpeg+"&jenis="+jenis,true);
    xmlhttp.onreadystatechange = function() {
    if ((xmlhttp.readyState==2) || (xmlhttp.readyState==3))
    {
     document.getElementById("input").innerHTML="<img src='images/loader.gif'>";
         return false;
    }
        if ((xmlhttp.readyState == 4) && (xmlhttp.status == 200))
         document.getElementById("sisacuti").innerHTML = xmlhttp.responseText;
         return false;
    }
    xmlhttp.send(null);         
}
 
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
					<li ><a href="profile.php"><span>Profile</span> <i class="icon-profile"></i></a></li>
					<li  class="active" ><a href="permohonan.php"><span>Form Permohonan</span> <i class="icon-clipboard"></i></a></li>
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
<form name="myForm" class="" action="?action=update" method="POST" ENCTYPE="multipart/form-data">
<input type="text" name="id" value="15">
	<div class="panel panel-default">
    <div class="panel-heading"><h6 class="panel-title"><i class="icon-menu"></i>Edit Data Cuti/Izin/Sakit/Dinas</h6></div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <label>No. Dokumen :</label>
                <INPUT TYPE="hidden" NAME="kode" value="BDR/HRD/03/16/02">
                <label>BDR/HRD/03/16/02</label>
              </div>

                              <div class="form-group">
                <label>Tanggal Pembuatan :</label>
                <label>03 March 2016</label>
                </div>


               <div class="form-group">
                <label>Nama Karyawan :</label>
                <label>ANNISA NURUL HIKMAH</label>
              </div>

              <div class="form-group">
                <label>NIK :</label>
                <label>15028904050</label>
                </div>

                <div class="form-group">
                <label>Jabatan :</label>
                <label>HR Supervisor</label>
                </div>

                

                <div class="form-group">
                <label>No Telp/HP :</label>
                <input type="text" name="no_telp" id="no_telp" class="form-control" placeholder="No Telp/HP" value="09201920129" />
                </div>

                <div class="form-group">
                <label>Alamat Pemohon :</label> 
                <textarea type="text" name="alamat" placeholder="Alamat Pemohon" class="form-control" required>sadadsad</textarea>
                </div>
 
                 </div>




                <div class="col-md-6">
                      <div class="form-group">
                          <label>Nama Atasan/Penanggung Jawab :</label>
                          <input type="text" autocomplete="off" onkeyup="autoComplete2();" id='inputan2' placeholder="Autosuggest Nama Atasan" class="form-control" value="" required>
                          <input type='text' id='nama2' name='idpegats' value="0">
                      <div id="hasil2"></div>
                      </div>

                      <div class="form-group">
                <label>Jabatan Atasan/Penanggung Jawab :</label>
                <input type="text" name="jabatanats" id="jabatanats" class="form-control" value="" />
                </div>

                <div class="form-group"><label>Tanggal Mulai :</label>
                                      <input type="text" name="tglmulai" class="form-control input-sm" id="tgl_mulai" placeholder="dd/mm/yyyy" value="03/03/2016" required>
                                    </div>

                                    <div class="form-group">
                            <div class="row">
                              <div class="col-xs-6"> 
                              <label>Jenis Permohonan :</label> 
                              <select name="jenis_cuti" class="form-control" required>
                                 <option value=''>--Pilih--</option>
                                                         <option value="1" >Cuti</option>
                                                            <option value="2" >Izin</option>
                                                            <option value="3" >Sakit</option>
                                                            <option value="4" >Dinas</option>
                                                                    </select>
                               </div>
                              <div class="col-xs-6">
                <label>Jumlah Hari :</label>
                <input type="text" name="jmlhari" id="jmlhari" placeholder="Hari Kerja" class="form-control" / value="2" required></div></div>
                              </div>

                 <div class="form-group">
                <label>Alasan Pemohon :</label> 
                <textarea type="text" name="alasan" placeholder="Alasan Pemohon" class="form-control" required>sadsa</textarea>
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
       <script>
$(document).ready(function () {
  //called when key is pressed in textbox
  $("#jmlhari").keypress(function (e) {
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