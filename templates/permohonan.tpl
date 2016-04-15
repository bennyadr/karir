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
					<h3>Data Cuti Pegawai<small>Informasi Permohonan Cuti/Sakit/Izin/Dinas Pegawai</small></h3>
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
			<h3>Form Permohonan Cuti/Izin/Sakit/Dinas</h3>

							<!-- Striped datatable inside panel -->
 <div class="container">
          

          <form class="form-horizontal" action="#" role="form">
				<div class="row">
					<div class="col-md-5">
		            	<div class="panel panel-default">
		                    <div class="panel-heading"><h6 class="panel-title"><i class="icon-user"></i> Identitas Karyawan</h6></div>
		                	<div class="panel-body">
									<br>
							        <p>NIK : <b>{$nik}</b></p>
									<p>Nama : <b>{$nama}</b></p>
									<p>Jabatan : <b>{$jabatan}</b></p>
									<p>Departemen : <b>{$divisi}</b></p>								
							</div>
						</div>
					</div>

					<div class="col-md-5">
						<div class="panel panel-default">
		                    <div class="panel-heading"><h6 class="panel-title"><i class="icon-menu5"></i> Selects</h6></div>
							<div class="panel-body">
							 <p>Cuti ( Terpakai : <b>{$cuti}</b> Sisa : <b>{$sisacuti}</b>)</p>
		<p>Izin ( Terpakai : <b>{$izin}</b> Sisa : <b>{$sisaizin}</b>)</p>
		<p>Sakit ( Terpakai : <b>{$sakit}</b> )</p>
		<p>Dinas ( Terpakai : <b>{$dinas}</b> )</p>
		</div>
    </div>
	</div>
	</div>
	</form>
</div>
		<div class="table-controls">
					<p style="text-align:left;">
						<a href="?action=add" class="btn btn-success btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>
						</p>
				</div>
	 <div class="panel panel-success">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Cuti/Sakit/Izin/Dinas</h6></div>
			                <table id="example" class="table table-striped table-bordered table-hover" style="width:100%; ">
              <thead>
              <tr>
              <th style="width:1%;text-align:center;">No</th>
				  <th style="width:1%;text-align:center;">No Dokumen</th>
				  <th style="width:3%;text-align:center;">Tanggal Pengajuan</th>
				  <th style="width:2%;text-align:center;">Jenis</th>
				  <th style="width:3%;text-align:center;">Jumlah Hari</th>
				  <th style="width:3%;text-align:center;">Alasan</th>
				  <th style="width:3%;text-align:center;">No Telp/HP</th>
				  <th style="width:3%;text-align:center;">OPTION</th>
                </tr>
              </thead>
              <tbody>
	{section name=detail loop=$pos}
	<tr>
	    <TD VALIGN=TOP >{$pos[detail].no}</a></TD>
		<TD VALIGN=TOP style="text-align:center;">{$pos[detail].nodu}</a></TD>
		<TD VALIGN=TOP style="text-align:center;">{$pos[detail].tanggal}</a></TD>
		<TD VALIGN=TOP style="text-align:center;">{$pos[detail].jenis}</a></TD>
		<TD VALIGN=TOP style="text-align:center;">{$pos[detail].jmlhari}</a></TD>
		<TD VALIGN=TOP style="text-align:left;">{$pos[detail].alasan}</a></TD>
		<TD VALIGN=TOP style="text-align:center;">{$pos[detail].notelp}</a></TD>
<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id={$pos[detail].id}" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id={$pos[detail].id}" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printformpermohonan.php?action=cetak&nodu={$pos[detail].nodu}" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
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