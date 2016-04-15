<?php /* Smarty version 3.1.27, created on 2016-03-03 19:38:28
         compiled from "C:\xampp\htdocs\sip\templates\permohonan_add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2654656d884a4b32307_29177380%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0773b96c62b69cc0b569ed793eb26d90376e2dcd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\permohonan_add.tpl',
      1 => 1456459635,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2654656d884a4b32307_29177380',
  'variables' => 
  array (
    'kode' => 0,
    'id' => 0,
    'no_izin' => 0,
    'datenow' => 0,
    'nama' => 0,
    'nik' => 0,
    'jabatan' => 0,
    'jenis_cuti' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56d884a4cf98f4_73362690',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56d884a4cf98f4_73362690')) {
function content_56d884a4cf98f4_73362690 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2654656d884a4b32307_29177380';
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
  <?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 language='JavaScript'>
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
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript'>
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
<form name="myForm" class="" action="?action=save" method="POST" ENCTYPE="multipart/form-data">
	<div class="panel panel-default">
  <input type="hidden" name=kode value="<?php echo $_smarty_tpl->tpl_vars['kode']->value;?>
">
  <input type="hidden" name=id value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <div class="panel-heading"><h6 class="panel-title"><i class="icon-menu"></i>Add Data Cuti/Izin/Sakit/Dinas</h6></div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <label>No. Dokumen :</label>
                <INPUT TYPE="hidden" NAME="no_izin" value="<?php echo $_smarty_tpl->tpl_vars['no_izin']->value;?>
">
                <label><?php echo $_smarty_tpl->tpl_vars['no_izin']->value;?>
</label>
              </div>

                              <div class="form-group">
                <label>Tanggal Pembuatan :</label>
                <label><?php echo $_smarty_tpl->tpl_vars['datenow']->value;?>
</label>
                </div>


               <div class="form-group">
                <label>Nama Karyawan :</label>
                <label><?php echo $_smarty_tpl->tpl_vars['nama']->value;?>
</label>
              </div>

              <div class="form-group">
                <label>NIK :</label>
                <label><?php echo $_smarty_tpl->tpl_vars['nik']->value;?>
</label>
                </div>

                <div class="form-group">
                <label>Jabatan :</label>
                <label><?php echo $_smarty_tpl->tpl_vars['jabatan']->value;?>
</label>
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
                             <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['name'] = 'detail';
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['jenis_cuti']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                            <option value="<?php echo $_smarty_tpl->tpl_vars['jenis_cuti']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
" <?php echo $_smarty_tpl->tpl_vars['jenis_cuti']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['jenis_cuti']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['nama'];?>
</option>
                                <?php endfor; endif; ?>
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
       <?php echo '<script'; ?>
>
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

        <?php echo '</script'; ?>
>
            <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>