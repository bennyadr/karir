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
    $('#transport').mask('000.000.000.000.000', {reverse: true});
    $('#thadir').mask('000.000.000.000.000', {reverse: true});
    $('#tjabatan').mask('000.000.000.000.000', {reverse: true});
    $('#tlain').mask('000.000.000.000.000', {reverse: true});
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
<form name="pendapatan_form" class="" action="?action=editProcess" method="POST" ENCTYPE="multipart/form-data"><input type="hidden" name="id" value="{$id}">
	<div class="panel panel-default">
    <div class="panel-heading"><h6 class="panel-title"><i class="icon-menu"></i>Edit Pendapatan</h6></div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-11">
             <div class="form-group">
                <label>Periode :</label> </td>
                <select name="idperiode" required class="form-control">
					          <option value='{$periode_opt[detail_periode].id}' selected="selected">Pilih</option>
								{section name=detail_periode loop=$periode_opt}
					        <option value="{$periode_opt[detail_periode].id}" {$periode_opt[detail_periode].selected}>{$periode_opt[detail_periode].nama}</option>
					        
					            {/section}
                </select>
              </div>
              <div class="form-group">
                <label>Nama Karyawan :</label> </td>
                <select name="pegawai" required class="form-control">
						<option value='{$deahass_opt[detail].id}' selected="selected">Pilih</option>
						{section name=detail loop=$deahass_opt}
							<option value="{$deahass_opt[detail].id}" {$deahass_opt[detail].selected}>{$deahass_opt[detail].nama}</option>
						{/section}
						</select>
              </div>

             <div class="form-group">
                <label>Transport & Meal :</label>
                <input type="text" name="transport" id="transport" placeholder="Transport & Meal" class="form-control" value="{$transport}">
              </div>

              <div class="form-group">
                <label>Tunjangan Kehadiran :</label> 
                <input type="text" name="thadir" id="thadir" placeholder="Tunjangan Kehadiran" class="form-control" value="{$thadir}">
              </div>
              <div class="form-group">
                <label>Tunjangan Jabatan :</label>
                <input type="text" name="tjabatan" id="tjabatan" placeholder="Tunjangan Jabatan" class="form-control" value="{$tjabatan}">
              </div>

              <div class="form-group">
                <label>Tunjangan Lain :</label> 
                <input type="text" name="tlain" id="tlain" placeholder="Tunjangan Lain" class="form-control" value="{$tlain}">
              </div>
              <div class="form-group">
                <label>Ket. Pendapatan Lain :</label> 
                <input type="text" name="ket_lain" placeholder="Ket. Pendapatan Lain" class="form-control" value="{$ket_lain}">
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
            {include file="footer.tpl"}