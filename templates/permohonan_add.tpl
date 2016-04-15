{include file="header.tpl"}
{literal}
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



{/literal}

	<!-- Page container -->
 	<div class="page-container">


		<!-- Sidebar -->
		<div class="sidebar">
			<div class="sidebar-content">

				
				{include file="pengelola.tpl"}
				
				{include file="mainnav.tpl"}
				
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
<form name="myForm" class="" action="?action=save" method="POST" ENCTYPE="multipart/form-data">
	<div class="panel panel-default">
  <input type="hidden" name=kode value="{$kode}">
  <input type="hidden" name=id value="{$id}">
    <div class="panel-heading"><h6 class="panel-title"><i class="icon-menu"></i>Add Data Cuti/Izin/Sakit/Dinas</h6></div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <label>No. Dokumen :</label>
                <INPUT TYPE="hidden" NAME="no_izin" value="{$no_izin}">
                <label>{$no_izin}</label>
              </div>

                              <div class="form-group">
                <label>Tanggal Pembuatan :</label>
                <label>{$datenow}</label>
                </div>


               <div class="form-group">
                <label>Nama Karyawan :</label>
                <label>{$nama}</label>
              </div>

              <div class="form-group">
                <label>NIK :</label>
                <label>{$nik}</label>
                </div>

                <div class="form-group">
                <label>Jabatan :</label>
                <label>{$jabatan}</label>
                </div>

                

                <div class="form-group">
                <label>No Telp/HP :</label>
                <input type="text" name="no_telp" id="no_telp" class="form-control" placeholder="No Telp/HP" />
                </div>

                <div class="form-group">
                <label>Alamat Pemohon :</label> 
                <textarea type="text" name="alamat" placeholder="Alamat Pemohon" class="form-control" required></textarea>
                </div>

                </div>




                <div class="col-md-6">
                      <div class="form-group">
                          <label>Nama Atasan/Penanggung Jawab :</label>
                          <input type="text" autocomplete="off" onkeyup="autoComplete2();" id='inputan2' placeholder="Autosuggest Nama Atasan" class="form-control" required>
                          <input type='hidden' id='nama2' name='nama2'>
                      <div id="hasil2"></div>
                      </div>

                      <div class="form-group">
                <label>Jabatan Atasan/Penanggung Jawab :</label>
                <input type="text" name="jabatanats" id="jabatanats" class="form-control" />
                </div>

                <div class="form-group"><label>Tanggal Mulai :</label>
                                      <input type="text" name="tgl_mulai" class="form-control input-sm" id="tgl_mulai" placeholder="dd/mm/yyyy" required>
                                    </div>

                                    <div class="form-group">
                            <div class="row">
                              <div class="col-xs-6"> 
                              <label>Jenis Permohonan :</label> 
                              <select name="jenis_cuti" class="form-control" required>
                                 <option value=''>--Pilih--</option>
                             {section name=detail loop=$jenis_cuti}
                            <option value="{$jenis_cuti[detail].id}" {$jenis_cuti[detail].selected}>{$jenis_cuti[detail].nama}</option>
                                {/section}
                                    </select>
                               </div>
                              <div class="col-xs-6">
                <label>Jumlah Hari :</label>
                <input type="text" name="jmlhari" id="jmlhari" placeholder="Hari Kerja" class="form-control" /></div></div>
                              </div>

                 <div class="form-group">
                <label>Alasan Pemohon :</label> 
                <textarea type="text" name="alasan" placeholder="Alasan Pemohon" class="form-control" required></textarea>
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
            {include file="footer.tpl"}
