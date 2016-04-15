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
					<h3>Daftar Cuti Pegawai<small>Informasi Cuti/Sakit/Izin/Dinas Pegawai</small></h3>
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
						<a href="?action=addPos" class="btn btn-success btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>
						</p>
				</div>
							<!-- Striped datatable inside panel -->
			    <div class="panel panel-success">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Cuti/Sakit/Izin/Dinas</h6></div>
			                <table id="example" class="table table-striped table-bordered table-hover" style="width:100%; ">
              <thead>
              <tr>
	  			  <th style="width:1%;text-align:center;">No</th>
				  <th style="width:2%;text-align:center;">NIK</th>
				  <th style="width:3%;text-align:center;">Nama</th>
				  <th style="width:4%;text-align:center;">Jabatan</th>
				  <th style="width:3%;text-align:center;">Jenis</th>
				  <th style="width:3%;text-align:center;">Jumlah Hari</th>
				  <th style="width:4%;text-align:center;">Tanggal Mulai</th>
				  <th style="width:4%;text-align:center;">Alasan</th>
				  <th style="width:4%;text-align:center;">No. Telp</th>
				  <th style="width:3%;text-align:center;">Approve Atasan</th>
				  <th style="width:5%;text-align:center;">OPTION</th>
	 </tr>
              </thead>
              <tbody>
              {section name=detail loop=$pos}
    <TR align="center">
        <TD VALIGN=TOP align=center>{$pos[detail].no}</TD>
        <TD VALIGN=TOP align=LEFT>{$pos[detail].NIK}</TD>
		<TD VALIGN=TOP align=LEFT>{$pos[detail].nama}</TD>
		<TD VALIGN=TOP align=LEFT>{$pos[detail].nama_jabatan}</TD>
		<!--<TD VALIGN=TOP width=10% align=LEFT>{$pos[detail].divisi}</TD>-->
		<TD VALIGN=TOP>{$pos[detail].nama_jeniscuti}</TD>
		<TD VALIGN=TOP>{$pos[detail].jmlhari}</TD>
		<TD VALIGN=TOP align=CENTER>{$pos[detail].tgl_mulai}</TD>
		<TD align=center>{$pos[detail].alasan}</TD>
		<TD align=center>{$pos[detail].notelp}</TD>
		{if $pos[detail].status == 1}
		<TD style="text-align:center;" width=15%>{$pos[detail].namaats} - <!--<a href="form_cuti.php?mod=proses&id={$pos[detail].id}&status=0">--><i class="icon-checkmark-circle2"></i></a></TD>
		{elseif $pos[detail].status == 0}
		<TD style="text-align:center;" width=15%>{$pos[detail].namaats} - <!--<a href="form_cuti.php?mod=proses&id={$pos[detail].id}&status=1">--><i class="icon-cancel"></a></TD>
		{/if}
		<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id={$pos[detail].id}" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id={$pos[detail].id}" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printcuti.php?id={$pos[detail].id}" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
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