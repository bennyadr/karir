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
    $('#tgl_penghargaan').datepicker({
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
        $("#tgl_penghargaan").datepicker($.datepicker.regional['id']);
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
      <form name="myForm" class="" action="?action=PenghargaanEditProses" method="POST" ENCTYPE="multipart/form-data">
        <input type="hidden" name="id" value="{$id}">
          <div class="panel panel-default">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-menu"></i>Edit Data Penghargaan</h6></div>
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                        <table width="1000">
                        <tr>
                            <td width="200"> <label>Nama Penghargaan :</label> </td>
                             <td><input type="text" name="penghargaan" placeholder="Nama Penghargaan" class="form-control" value="{$penghargaan}">
                                <br /> </td>
                          </tr>
                          <tr>
                            <td width="200"> <label>Pemberi Penghargaan :</label> </td>
                            <td><input type="text" name="pemberi_penghargaan" placeholder="Pemberi Penghargaan" class="form-control" value="{$pemberi_penghargaan}"><br /> </td>
                          </tr>
                          <tr>
                          <td width="200"><label>Tanggal Pemberian :</label></td>
                                    <td><input type="text" name="tgl_penghargaan" class="form-control input-sm" id="tgl_penghargaan" placeholder="dd/mm/yyyy" value="{$tgl_penghargaan}"><br /></td>
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
           <input type="submit" data-toggle="modal" role="button"  value="Update" class="btn btn-success">
              <INPUT TYPE="BUTTON" VALUE="Back" ONCLICK="history.go(-1)" class="btn btn-primary">
          </div>
      </div>
      </div>
      </form>
                  {include file="footer.tpl"}