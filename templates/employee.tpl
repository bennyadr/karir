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
					<h3>Database Pegawai<small>Informasi Data Pegawai</small></h3>
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
			<!-- Table inside panel body -->
			            
			               
				<div class="table-controls">
					<p style="text-align:left;">
						<a href="?action=add" class="btn btn-success btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>
							<input class="btn btn-default" type=button value="Export to Excel " onClick="javascript:window.location='export.php'" class=Button1>
							<input class="btn btn-primary" type=button value="View Karyawan Tidak Aktif " onClick="javascript:window.location='employee.php?action=tidakaktif'" class=Button1>
				    </p>
				</div>
							<!-- Striped datatable inside panel -->
			    <div class="panel panel-success">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Pegawai</h6></div>
			                <table id="example" class="table table-striped table-bordered table-hover" style="width:100%; ">
              <thead>
              <tr>
	  			  <th style="width:1%;text-align:center;">No</th>
				  <th style="width:2%;text-align:center;">NIK</th>
				  <th style="width:3%;text-align:center;">Nama</th>
				  <th style="width:6%;text-align:center;">Jabatan</th>
				  <th style="width:3%;text-align:center;">Departemen</th>
				  <th style="width:3%;text-align:center;">File Upload</th>
				  <th style="width:4%;text-align:center;">Foto</th>
				  <th style="width:4%;text-align:center;">OPTION</th>
	 </tr>
              </thead>
              <tbody>
	{section name=detail loop=$unite}
	   <tr>
    	<TD VALIGN=TOP align=center>{$unite[detail].no}</TD>
    	<TD VALIGN=TOP>{$unite[detail].nik}</TD>
    	<TD VALIGN=TOP>{$unite[detail].name}</TD>
    	<TD VALIGN=TOP>{$unite[detail].jabatan}</TD>
		<TD VALIGN=TOP>{$unite[detail].dept}</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id={$unite[detail].id}">Lihat Upload</a></TD>

	{if $unite[detail].smap != "upload"}
	<TD style="text-align:center;">{$unite[detail].smap}</TD>
	<!--a title='upload foto' href=upload.php?action={$unite[detail].datflp}&kodeEmp={$unite[detail].no}>{$unite[detail].datflp}</a-->
	{else}
		<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action={$unite[detail].smap}&idEmp={$unite[detail].id}">{$unite[detail].smap}</a>
		</TD>
	{/if}
			
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id={$unite[detail].id}" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id={$unite[detail].id}" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id={$unite[detail].id}" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    {/section}
	</tbody></table>
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