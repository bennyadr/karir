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
			               			                
						<div class="panel-body">
				          <div class="row">
				            <div class="col-md-6">
				              <div class="form-group">
				              <label>NIK 		: {$nik}</label>
				              </div>
				              <div class="form-group">
				              <label>Nama		: {$nama}</label>
				              </div>
				              <div class="form-group">
				              <label>Jabatan	: {$jabatan}</label>
				              </div>
				              
                          </div>
                          </div>
			            	</div>
			                </div>
<div class="table-controls">
			            <form method=post action="pdfpayroll.php" >
						
							<!-- Striped datatable inside panel -->
			    <div class="panel panel-success">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Gaji</h6></div>
			                <table id="example" class="table table-striped table-bordered table-hover" style="width:100%; ">
              <thead>
              <tr>
              	  <th style="width:1%;text-align:center;">No</th>
				  <th style="width:4%;text-align:center;">Bulan</th>
				  <th style="width:4%;text-align:center;">Periode</th>
				  <th style="width:6%;text-align:center;">Take Home Pay</th>
                  <th style="width:2%;text-align:center;">View</th>
	 </tr>
              </thead>
              <tbody>
	{section name=detail loop=$pos}
	<tr>
	<TD VALIGN=TOP >{$pos[detail].no}</a></TD>
		<TD VALIGN=TOP style="text-align:center;">{$pos[detail].bulan}</a></TD>
		<TD VALIGN=TOP style="text-align:center;">{$pos[detail].periode}</a></TD>
		<TD VALIGN=TOP style="text-align:right;">{$pos[detail].thp}</a></TD>
		<TD VALIGN=TOP style="text-align:center;">
		<a class="btn btn-warning btn-icon btn-xs tip" href="pdfpayroll.php?periode={$pos[detail].periode}">Print</a>
			
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