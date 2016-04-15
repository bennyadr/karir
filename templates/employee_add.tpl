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
  
  });
    $(function(){
        $("#tglahir2").datepicker($.datepicker.regional['id']);
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
    <div class="panel-heading"><h6 class="panel-title"><i class="icon-menu"></i>Add Data Pegawai</h6></div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>NIK :</label>
                <input type="text" name="nik" placeholder="NIK" class="form-control" required>
              </div>

              <div class="form-group">
                <label>Nama Lengkap :</label> 
                <input type="text" name="name" placeholder="Nama Lengkap" class="form-control" required>
              </div>
                        
              <div class="form-group">
                <label>Jabatan :</label> </td>
                <select name="jabatan" class="form-control" required>
                <option value=''>--Pilih--</option>
                {section name=detail loop=$jabatan_opt}
                <option value="{$jabatan_opt[detail].id}" {$jabatan_opt[detail].selected}>{$jabatan_opt[detail].nama}</option>
                {/section}
                </select>
              </div>

                          <div class="form-group">
                            <label>Departemen :</label>
                              <select name=divisi class="form-control" required>
                              <option value=''>--Pilih--</option>
                              {section name=detail loop=$divisi_opt}
                              <option value="{$divisi_opt[detail].id}" {$divisi_opt[detail].selected}>{$divisi_opt[detail].nama}</option>
                              {/section}
                              </select>
                          </div>

                            <div class="form-group">
                            <div class="row">
                              <div class="col-xs-6"> 
                            <label>Pendidikan :</label> </td>
                            <select name=pend_darat class="form-control">
                              <option value=''>--Pilih--</option>
                              {section name=detail loop=$penddarat_opt}
                              <option value="{$penddarat_opt[detail].id}" {$penddarat_opt[detail].selected}>{$penddarat_opt[detail].nama}</option>
                              {/section}
                                </select>
                                </div>
                                 <div class="col-xs-6">
                                  <label>Jenis Kelamin :</label> 
                            <select name="sex" class="form-control" required>
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
                            <input type="text" name="tlahir" placeholder="Tempat Lahir" class="form-control" required>
                          </div>
                            <div class="col-xs-6">
                              <label>Tanggal Lahir :</label>
                                <input type="text" name="tglahir2" class="form-control input-sm" id="tglahir2" placeholder="dd/mm/yyyy" required>
                                    </div>
                                    </div>
                                    </div>

                            <div class="form-group">
                              <label>Agama :</label>
                            <select name=agama class="form-control">
                                <option value=''>--Pilih--</option>
                                {section name=detail loop=$agama_opt}
                                <option value="{$agama_opt[detail].id}" {$agama_opt[detail].selected}>{$agama_opt[detail].nama}</option>
                                {/section}
                                </select>
                                 </div>
                                 <div class="form-group">
                                 <label>Nama Bank :</label>
                                    <input type="text" name="bank" placeholder="Nama Bank" class="form-control" >
                                 </div>
                                  <div class="form-group">
                           <label>No Rekening :</label>
                            <input type="text" name="no_rek" placeholder="No Rekening" class="form-control" >
                            </div>
                          
                          <div class="form-group">
                          <label>Gaji Pokok :</label>
                          <input type="text" id="gaji" name="gaji" placeholder="Gaji Pokok" class="form-control" >
                          </div>
                      <div class="form-group"><label>NPWP :</label>
                            <input type="text" name="npwp" placeholder="NPWP" class="form-control" >
                              </div>

                          <div class="form-group">
                              <label>Status Perusahaan :</label> 
                              <select name=perusahaan class="form-control">
                                 <option value=''>Pilih</option>
                             {section name=detail loop=$perusahaan_opt}
                            <option value="{$perusahaan_opt[detail].id}" {$perusahaan_opt[detail].selected}>{$perusahaan_opt[detail].nama}</option>
                                {/section}
                                    </select>
                               </div>
                               </div>




                  <div class="col-md-6">
                      <div class="form-group">
                          <label>Alamat Tetap :</label>
                          <input type="text" name="address" placeholder="Alamat Tetap" class="form-control">
                      </div>
                                  <div class="form-group">
                                    <label>Alamat Sementara :</label>
                                      <input type="text" name="alamat_sementara" placeholder="Alamat Sementara" class="form-control" >
                                  </div>
                                    <div class="form-group">
                                      <label>Photo :</label>
                                        <input type="file" name="pathfoto" id="pathfoto" class="form-control" value="{$pathfoto}"> Maks 100 KB
                                    </div>
                                    <div class="form-group">
                                    <label>Status Kawin :</label>
                                      <select name=stskawin class="form-control">
                                      <option value=''>--Pilih--</option>
                                      {section name=detail loop=$stskawin_opt}
                                      <option value="{$stskawin_opt[detail].id}" {$stskawin_opt[detail].selected}>{$stskawin_opt[detail].nama}</option>
                                      {/section}
                                      </select>
                                    </div>
                                    <div class="form-group">
                                    <label>Telfon Kantor :</label> 
                                    <input type="text" name="telpon_kantor" placeholder="Telfon Kantor" class="form-control" >
                                    </div>
                                    <div class="form-group"><label>Telfon Rumah :</label>
                                    <input type="text" name="telpon_rumah" placeholder="Telfon Rumah" class="form-control" ></div>
                                    <div class="form-group"><label>Handphone :</label>
                                    <input type="text" id="hp" name="hp" placeholder="Handphone" class="form-control" ></div>
                                    <div class="form-group"><label>Tanggal Masuk :</label>
                                      <input type="text" name="tgl_masuk" class="form-control input-sm" id="tgl_masuk" placeholder="dd/mm/yyyy" required>
                                    </div>
                                    <div class="form-group">
                                    <label>No. BPJS Ketenagakerjaan :</label>
                            <input type="text" name="jamsostek" placeholder="No. BPJS Ketenagakerjaan" class="form-control" >
                            </div>
                                    <div class="form-group"><label>No. BPJS Kesehatan :</label>
                                    <input type="text" name="no_askes" placeholder="No. BPJS Kesehatan" class="form-control" >
                                    </div>
                                                            

                           <div class="form-group">
                            <div class="row">
                              <div class="col-xs-6"> <label>Status Karyawan :</label> 
                            <select name="status_p" class="form-control" required>
                                                <option value="" selected="selected"> --Pilih-- </option>
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
                      </div>
                    </div> 

          <div class="form-actions text-left">
           <input type="submit" data-toggle="modal" role="button"  value="Simpan" class="btn btn-success">
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
            {include file="footer.tpl"}