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
							<div class="form-actions text-left">
              				<INPUT TYPE="BUTTON" VALUE="Back" ONCLICK="history.go(-1)" class="btn btn-primary">
          </div>
					</TD>
    </TR>
</TABLE>

				            </p>
							</div>
							<!-- Striped datatable inside panel -->
			            <div class="panel panel-success">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Pegawai</h6></div>
			                <table id="example" class="table table-striped table-bordered table-hover" style="width:100%; ">
			                <input type="hidden" name="id" value="$id">
              <thead>
              <TR>
              	  <th style="width:1%;text-align:center;">No</th>
				  <th style="width:2%;text-align:center;">NIK</th>
				  <th style="width:3%;text-align:center;">Nama</th>
				  <th style="width:2%;text-align:center;">KTP</th>
				  <th style="width:2%;text-align:center;">NPWP</th>
				  <th style="width:2%;text-align:center;">BPJS Naker</th>
				  <th style="width:2%;text-align:center;">BPJS Sehat</th>
				  <th style="width:2%;text-align:center;">Buku Nikah</th>
				  <th style="width:2%;text-align:center;">KK</th>
				  <th style="width:2%;text-align:center;">Buku Rekening</th>

	    
    </TR>
             </thead>
    {section name=detail loop=$unite}
   

    <TR>
    <TD VALIGN=TOP align=center>{$unite[detail].no}</TD>
    	<TD VALIGN=TOP>{$unite[detail].nik}</TD>
    	<TD VALIGN=TOP>{$unite[detail].name}</TD>
{if $unite[detail].ktp != "" or $unite[detail].ktp != NULL}
	<TD style="text-align:center;"><a class="icon-file-pdf" title='upload' href="{$unite[detail].ktp}"></a> | <a class="icon-file7" title='Ganti File Upload' href="uploaddokumen.php?action=ktp&idEmp={$unite[detail].id}&kode={$unite[detail].nik}"></a></TD>
	{else}
	<TD style="text-align:center;">
		<a class="btn btn-default" title='upload' href="uploaddokumen.php?action=ktp&idEmp={$unite[detail].id}&kode={$unite[detail].nik}">upload</a>
		</TD>
	{/if}

	{if $unite[detail].npwp != "" or $unite[detail].npwp != NULL}
	<TD style="text-align:center;"><a class="icon-file-pdf" title='upload' href="{$unite[detail].npwp}"></a> | <a class="icon-file7" title='Ganti File Upload' href="uploaddokumen.php?action=npwp&idEmp={$unite[detail].id}&kode={$unite[detail].nik}"></a></TD>
	{else}
	<TD style="text-align:center;">
		<a class="btn btn-default" title='upload' href="uploaddokumen.php?action=npwp&idEmp={$unite[detail].id}&kode={$unite[detail].nik}">upload</a>
		</TD>
	{/if}

	{if $unite[detail].bpjs != "" or $unite[detail].bpjs != NULL}
	<TD style="text-align:center;"><a class="icon-file-pdf" title='upload' href="{$unite[detail].bpjs}"></a> | <a class="icon-file7" title='Ganti File Upload' href="uploaddokumen.php?action=bpjs&idEmp={$unite[detail].id}&kode={$unite[detail].nik}"></a></TD>
	{else}
	<TD style="text-align:center;">
		<a class="btn btn-default" title='upload' href="uploaddokumen.php?action=bpjs&idEmp={$unite[detail].id}&kode={$unite[detail].nik}">upload</a>
		</TD>
	{/if}
	{if $unite[detail].bpjssehat != "" or $unite[detail].bpjssehat != NULL}
	<TD style="text-align:center;"><a class="icon-file-pdf" title='upload' href="{$unite[detail].bpjssehat}"></a> | <a class="icon-file7" title='Ganti File Upload' href="uploaddokumen.php?action=bpjssehat&idEmp={$unite[detail].id}&kode={$unite[detail].nik}"></a></TD>
	{else}
	<TD style="text-align:center;">
		<a class="btn btn-default" title='upload' href="uploaddokumen.php?action=bpjssehat&idEmp={$unite[detail].id}&kode={$unite[detail].nik}">upload</a>
		</TD>
	{/if}
	{if $unite[detail].nikah != "" or $unite[detail].nikah != NULL}
	<TD style="text-align:center;"><a class="icon-file-pdf" title='upload' href="{$unite[detail].nikah}"></a> | <a class="icon-file7" title='Ganti File Upload' href="uploaddokumen.php?action=nikah&idEmp={$unite[detail].id}&kode={$unite[detail].nik}"></a></TD>
	{else}
	<TD style="text-align:center;">
		<a class="btn btn-default" title='upload' href="uploaddokumen.php?action=nikah&idEmp={$unite[detail].id}&kode={$unite[detail].nik}">upload</a>
		</TD>
	{/if}
	{if $unite[detail].kk != "" or $unite[detail].kk != NULL}
	<TD VALIGN=CENTER ALIGN=CENTER><a class="icon-file-pdf" title='upload' href="{$unite[detail].kk}"></a> | <a class="icon-file7" title='Ganti File Upload' href="uploaddokumen.php?action=kk&idEmp={$unite[detail].id}&kode={$unite[detail].nik}"></a></TD>
	{else}
	<TD style="text-align:center;">
		<a class="btn btn-default" title='upload' href="uploaddokumen.php?action=kk&idEmp={$unite[detail].id}&kode={$unite[detail].nik}">upload</a>
		</TD>
	{/if}
	{if $unite[detail].reke != "" or $unite[detail].reke != NULL}
	<TD style="text-align:center;"><a class="icon-file-pdf" title='upload' href="{$unite[detail].reke}"></a> | <a class="icon-file7" title='Ganti File Upload' href="uploaddokumen.php?action=reke&idEmp={$unite[detail].id}&kode={$unite[detail].nik}"></a></TD>
	{else}
	<TD style="text-align:center;">
		<a class="btn btn-default" title='upload' href="uploaddokumen.php?action=reke&idEmp={$unite[detail].id}&kode={$unite[detail].nik}">upload</a>
		</TD>
		{/if}

		
    </TR>
    {/section}
</TABLE>
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