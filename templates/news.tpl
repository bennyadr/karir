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
					<h3>Daftar Pengumuman/News<small>Informasi Pengumuman/News</small></h3>
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
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Pengumuman/News</h6></div>
			                <table id="example" class="table table-striped table-bordered table-hover" style="width:100%; ">
              <thead>
              <tr>
	  			  <th style="width:1%;text-align:center;">No</th>
				 <th style="width:10%;text-align:center;">Judul</th>
				 <th style="width:20%;text-align:center;">Isi Berita</th>
				 <th style="width:5%;text-align:center;">Publish</th>
				<th style="width:3%;text-align:center;">OPTION</th>
				 </tr>
              </thead>
              <tbody>
             {section name=detail loop=$pos}
    <TR>
        <TD VALIGN=TOP align=center>{$pos[detail].no}</TD>
        <TD VALIGN=TOP align=LEFT>{$pos[detail].judul}</TD>
		<TD VALIGN=TOP align=LEFT>{$pos[detail].berita}</TD>
		<TD VALIGN=TOP style="text-align:center;">
		{if $pos[detail].publish == 1}
		<a href="?action=proses&id={$pos[detail].id}&publish=0" class="btn btn-success btn-icon btn-xs tip"><i class="icon-checkmark-circle2"></i></a>
		{elseif $pos[detail].publish == 0}
		<a href="?action=proses&id={$pos[detail].id}&publish=1" class="btn btn-primary btn-icon btn-xs tip"><i class="icon-cancel "></i></a>
		{/if}
		</TD>
		<TD align=center width=3%>
            <a href="?action=edit&id={$pos[detail].id}" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id={$pos[detail].id}" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
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