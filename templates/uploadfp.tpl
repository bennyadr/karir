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
    $('#tglbuka').datepicker({
          changeMonth: true,
          changeYear: true
          });
    $('#tgltutup').datepicker({
          changeMonth: true,
          changeYear: true
          }); 

  
  });
    $(function(){
        $("#tglbuka").datepicker($.datepicker.regional['id']);
    $("#tgltutup").datepicker($.datepicker.regional['id']);
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
				<div class="page-title">
					<h3>Upload Data Finger Print<small>Upload Data Finger Print</small></h3>
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
			{include file="breadcrumb.tpl"}
			<!-- /breadcrumbs line -->
						    <div class="panel panel-default">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-upload2"></i>Upload Data</h6></div>
			                <form method=post name="Form" action=uploadfp.php?action=Process ENCTYPE="multipart/form-data">
			                
						<div class="panel-body">
				          <div class="row">
				            <div class="col-md-6">
				               <div class="form-group">
                              <label>Browse : </label>
                            <input type="file" name="smap" >
                          </div>
                           <div class="form-group">
                            <div class="row">
                              <div class="col-xs-6">
                              <label>Tanggal Buka : </label>
                            <input type="text" name="tglbuka" class="form-control input-sm" id="tglbuka" placeholder="dd/mm/yyyy">
                          </div>
                              <div class="col-xs-6">
                              <label>Tanggal Tutup : </label>
                            <input type="text" name="tgltutup" class="form-control input-sm" id="tgltutup" placeholder="dd/mm/yyyy">
                          </div></div>
                              </div>
                          </div>
                          </div>
			                <div class="form-actions text-left">
           					<input type="submit" data-toggle="modal" role="button"  value="Import" class="btn btn-primary">
           					</div>
           					</div>
			                </div>
			                </form>

			<!-- Table inside panel body -->
			            <div class="table-controls">
			            <form method=post action="uploadfp.php?action=SendToDataSoft" name="multicheckbox">
						<div class="form-actions text-left">
           					<input type="submit" data-toggle="modal" role="button"  value="Proses" class="btn btn-success">
				    </p>
				</div>
							<!-- Striped datatable inside panel -->
			    <div class="panel panel-success">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Finger Print</h6></div>
			                <table id="example" class="table table-striped table-bordered table-hover" style="width:100%; ">
              <thead>
              <tr>
              		<th width=1%><input type="checkbox" name="act" value="" id="d"></th>
                  <th style="width:1%;">No</th>
				  <th style="width:4%;">Tanggal Buka</th>
				  <th style="width:4%;">Tanggal Tutup</th>
				  <th style="width:3%;">ID Absensi</th>
				  <th style="width:10%;">Nama Pegawai</th>
				  <th style="width:4%;">Tanggal</th>
				  <th style="width:3%;">Jam Masuk</th>
				  <th style="width:3%;">Jam Pulang</th>
	 </tr>
              </thead>
              <tbody>
	{section name=detail loop=$pos}
	<tr>
	<TD VALIGN=TOP><input type="checkbox" name="idabsensi[]" value="{$pos[detail].idabsensi}"></TD>
        <TD VALIGN=TOP align=LEFT>{$pos[detail].no}</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="tglbuka[]" value="{$pos[detail].tglbuka}">{$pos[detail].tglbuka}</TD>
		<TD VALIGN=TOP ><input type=hidden name="tgltutup[]" value="{$pos[detail].tgltutup}">{$pos[detail].tgltutup}</TD>
		<TD VALIGN=TOP >{$pos[detail].idabsensi}</TD>
		<TD VALIGN=TOP >{$pos[detail].nama}</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="tanggal[]" value="{$pos[detail].tanggal}">{$pos[detail].tanggal}</a></TD>
		<TD VALIGN=TOP >{$pos[detail].jammasuk}</a></TD>
		<TD VALIGN=TOP >{$pos[detail].jampulang}</a></TD>
		<!--<TD VALIGN=TOP ><a class="btn btn-mini btn-info" href="?action=edit&id={$pos[detail].id}">Update</a></TD>-->
    {/section}
	</tbody></table>
	</form>

				        </div>
						
				        <!-- /striped datatable inside panel -->
	
	<script src="js/jquery.dataTables.js" type="text/javascript"></script>
	<script language="javascript" type="text/javascript">  
	$(document).ready(function() {
		$('#example').dataTable( {
			"pagingType": "full_numbers"
		} );
	} );
	</script>
			
	       {include file="footer.tpl"}