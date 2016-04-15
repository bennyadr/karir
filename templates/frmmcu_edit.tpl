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
			<form name="myForm" class="" action="?action=MCUEditProses" method="POST" ENCTYPE="multipart/form-data">
      <INPUT TYPE="hidden" NAME="id" VALUE="{$id}">
			    <div class="panel panel-default">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-menu"></i>Add Data MCU</h6></div>
                  <div class="panel-body">
	                	<div class="row">
	                		<div class="col-md-6">
	                			<div class="form-group">
	                			<table width="1000">
	                				<tr>
                          <td width="200"><label>Tanggal Pemeriksaan :</label></td>
                                    <td><input type="text" name="tgl_pemeriksaan" class="form-control input-sm" id="tgl_pemeriksaan" placeholder="dd/mm/yyyy" value="{$tgl_pemeriksaan}"><br /></td>
                                    </tr>
                          <tr>
                            <td width="200"> <label>Hasil Pemeriksaan :</label> </td>
                            <td><textarea type="text" name="hasil" placeholder="Hasil Pemeriksaan" class="form-control" value="{$hasil}"></textarea><br /> </td>
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
                            <td><input type="text" name="no_sertifikat" placeholder="No Sertifikat  " class="form-control" value="{$no_sertifikat}"><br /> </td>
                          </tr>

                          <tr>
                            <td width="200"> <label>Tenaga Medis :</label> </td>
                            <td><input type="text" name="tenaga_medis" placeholder="Hasil Pemeriksaan" class="form-control" value="{$tenaga_medis}"><br /> </td>
                          </tr>
                          <tr>
                            <td width="200"> <label>Catatan Kesehatan :</label> </td>
                            <td><textarea type="text" name="catatan" placeholder="Catatan Kesehatan" class="form-control" value="{$catatan}"></textarea><br /> </td>
                          </tr>
                          <tr>
                          <td width="200"><label>Tanggal Dari :</label></td>
                                    <td><input type="text" name="tgl_dari" class="form-control input-sm" id="tgl_dari" placeholder="dd/mm/yyyy" value="{$tgl_dari}"><br /></td>
                                    </tr>
                          
                          <tr>
                          <td width="200"><label>Tanggal Sampai :</label></td>
                                    <td><input type="text" name="tgl_sampai" class="form-control input-sm" id="tgl_sampai" placeholder="dd/mm/yyyy" value="{$tgl_sampai}"><br /></td>
                                    </tr>
                          <tr>
                            <td width="200"> <label>Keterangan :</label> </td>
                            <td><input type="text" name="ket" placeholder="Keterangan" class="form-control" value="{$ket}"><br /> </td>
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
                  {include file="footer.tpl"}