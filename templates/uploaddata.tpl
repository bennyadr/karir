{include file="header.tpl"}
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
					<h3>Upload Data Pendukung<small>Upload Data Pendukung</small></h3>
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
			                <form method=post name="Form" action=uploaddata.php?action=Process ENCTYPE="multipart/form-data">
			                
						<div class="panel-body">
				          <div class="row">
				            <div class="col-md-6">
				              <div class="form-group">
				              <a href="data/template_penpot.xls" class="btn btn-default btn-icon btn-xs tip" title="Download">Download Template Excel</a> 
				              </div>
				              <div class="form-group">
                              <label>Browse : </label>
                            <input type="file" name="smap" >
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
			            <form method=post action="uploaddata.php?action=SendToDataSoft" name="multicheckbox">
						<div class="form-actions text-left">
           					<input type="submit" data-toggle="modal" role="button"  value="Proses" class="btn btn-success">
				    </p>
				</div>
							<!-- Striped datatable inside panel -->
			    <div class="panel panel-success">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Gaji</h6></div>
			                <table id="example" class="table table-striped table-bordered table-hover" style="width:100%; ">
              <thead>
              <tr>
              		<th width=1%><input type="checkbox" name="act" value="" id="d"></th>
	  			  <th style="width:1%;text-align:center;">No</th>
				  <th style="width:2%;text-align:center;">Periode</th>
				  <th style="width:2%;text-align:center;">NIK</th>
				  <th style="width:2%;text-align:center;">Jum lah Hadir</th>
				  <th style="width:3%;text-align:center;">Gapok</th>
				  <th style="width:3%;text-align:center;">Kehadir an</th>
				  <th style="width:4%;text-align:center;">Jabat an</th>
				  <th style="width:3%;text-align:center;">Trans. Meal</th>
				  <th style="width:4%;text-align:center;">Lain</th>
				  <th style="width:3%;text-align:center;">PPH 21</th>
				  <th style="width:4%;text-align:center;">BPJS Naker (2%)</th>
				  <th style="width:4%;text-align:center;">BPJS Sehat (0,5%)</th>
				  <th style="width:2%;text-align:center;">Pin jam an</th>
				  <th style="width:2%;text-align:center;">Po tong an</th>
	 </tr>
              </thead>
              <tbody>
	{section name=detail loop=$pos}
	<tr>
	<TD VALIGN=TOP><input type="checkbox" name="nik[]" value="{$pos[detail].nik}"></TD>
        <TD VALIGN=TOP align=LEFT>{$pos[detail].no}</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="periode[]" value="{$pos[detail].periode}">{$pos[detail].periode}</a></TD>
		<TD VALIGN=TOP >{$pos[detail].nik}</a></TD>
		<TD VALIGN=TOP >{$pos[detail].jhadir}</a></TD>
		<TD VALIGN=TOP style="text-align:right;">{$pos[detail].gapok}</a></TD>
		<TD VALIGN=TOP style="text-align:right;">{$pos[detail].thadir}</a></TD>
		<TD VALIGN=TOP style="text-align:right;">{$pos[detail].tjabatan}</a></TD>
		<TD VALIGN=TOP style="text-align:right;">{$pos[detail].transmeal}</a></TD>
		<TD VALIGN=TOP style="text-align:right;">{$pos[detail].tlain}</a></TD>
		<TD VALIGN=TOP style="text-align:right;">{$pos[detail].pph21}</a></TD>
		<TD VALIGN=TOP style="text-align:right;">{$pos[detail].jht}</a></TD>
		<TD VALIGN=TOP style="text-align:right;">{$pos[detail].bpjs}</a></TD>
		<TD VALIGN=TOP style="text-align:right;">{$pos[detail].pinjaman}</a></TD>
		<TD VALIGN=TOP style="text-align:right;">{$pos[detail].potlain}</a></TD>
			
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