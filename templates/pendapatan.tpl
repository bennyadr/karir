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
					<h3>Daftar Pendapatan<small>Informasi Pendapatan Pegawai</small></h3>
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

			 <div class="table-controls">
					<p style="text-align:left;">
						<a href="?action=showAddMenu" class="btn btn-success btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>
						</p>
				</div>
							<!-- Striped datatable inside panel -->
			    <div class="panel panel-success">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Pendapatan</h6></div>
			                <table id="example" class="table table-striped table-bordered table-hover" style="width:100%; ">
              <thead>
              <tr>
	  			 <th style="width:1%;text-align:center;">No</th>
				  <th style="width:1%;text-align:center;">Periode</th>
				  <th style="width:6%;text-align:center;">Nama</th>
				  <th style="width:5%;text-align:center;">Jabatan</th>
				  <th style="width:2%;text-align:center;">Gapok</th>
				  <th style="width:2%;text-align:center;">Tunj. Kehadiran</th>
				  <th style="width:2%;text-align:center;">Tunj. Lain</th>
				  <th style="width:2%;text-align:center;">Tunj. Jabatan</th>
				  <th style="width:2%;text-align:center;">Transport & Meal</th>
				<th style="width:2%;text-align:center;">OPTION</th>
				 </tr>
              </thead>
              <tbody>
             {section name=detail loop=$unite}
    <TR>
       <TD VALIGN=TOP align=center>{$unite[detail].no}</TD>
		<TD VALIGN=TOP align=center>{$unite[detail].periode}</TD>
        <TD VALIGN=TOP>{$unite[detail].name}</TD>
		<TD VALIGN=TOP>{$unite[detail].jabatan}</TD>
		<TD VALIGN=TOP style="text-align:right;">{$unite[detail].gapok}</TD>
		<TD VALIGN=TOP style="text-align:right;">{$unite[detail].thadir}</TD>
		<TD VALIGN=TOP style="text-align:right;">{$unite[detail].tlain}</TD>
		<TD VALIGN=TOP style="text-align:right;">{$unite[detail].tjabatan}</TD>
        <TD VALIGN=TOP style="text-align:right;">{$unite[detail].transport}</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id={$unite[detail].id}" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id={$unite[detail].id}" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
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