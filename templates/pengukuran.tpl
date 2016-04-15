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
					<h3>Pegukuran Kompetensi Jabatan<small>Informasi Pegukuran Kompetensi Jabatan</small></h3>
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
    <div class="panel panel-success">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Pengukuran Kompetensi Jabatan</h6></div>
			                <table id="example" class="table table-striped table-bordered table-hover" style="width:100%; ">
              <thead>
              <tr>
	  			  <th style="width:1%;text-align:center;">No</th>
				  <th style="width:5%;text-align:center;">Nama Pegawai</th>
				  <th style="width:5%;text-align:center;">Nama Jabatan</th>
				  <th style="width:5%;text-align:center;">Diri Sendiri</th>
				  <th style="width:5%;text-align:center;">Atasan</th>
				  <th style="width:5%;text-align:center;">Bawahan</th>
	 </tr>
              </thead>
              <tbody>
              {section name=detail loop=$pos}
    <TR align="center">
        <TD VALIGN=TOP align=center>{$pos[detail].no}</TD>
        <TD VALIGN=TOP align=LEFT>{$pos[detail].pegawai}</TD>
        <TD VALIGN=TOP align=LEFT>{$pos[detail].jabatan}</TD>
{if $pos[detail].p1 == 'Sudah'}
        <TD VALIGN=TOP align=center style="background-color:green;color:white;">SUDAH</TD>
		{else}
		<TD VALIGN=TOP align=center style="background-color:red;color:white;">BELUM</TD>
		{/if}
		{if $pos[detail].p2 == 'Sudah'} 
        <TD VALIGN=TOP align=center style="background-color:green;color:white;">SUDAH - {$pos[detail].nipbwh}</TD>
		{else}
		<TD VALIGN=TOP align=center style="background-color:red;color:white;">BELUM</TD>
		{/if}
        {if $pos[detail].p3 == 'Sudah'}
        <TD VALIGN=TOP align=center style="background-color:green;color:white;">SUDAH - {$pos[detail].niprekan}</TD>
		{else}
		<TD VALIGN=TOP align=center style="background-color:red;color:white;">BELUM</TD>
		{/if}
		<!--{if $pos[detail].p4 == 'Sudah'}
        <TD VALIGN=TOP align=center style="background-color:green;color:white;">SUDAH</TD>
		{else}
		<TD VALIGN=TOP align=center style="background-color:red;color:white;">BELUM</TD>
		{/if}-->
        
	<!--<TD VALIGN=TOP align=LEFT>{$pos[detail].posKet}</TD>-->
        {if $authenticated == 1}
		<!--<TD align=center>
            <a title='Edit' class=edit href=pegawai.php?mod=edit&id={$pos[detail].id}></a> |
            <a title='Delete' class=delete onclick="return confirm('Anda Yakin?');" href=pegawai.php?mod=del&id={$pos[detail].id}></a>
         </TD>-->
    </TR>
		{/if}            
    {/section}
</TABLE>
</form>

				        </div>
						


				<script src="js/jquery.dataTables.js" type="text/javascript"></script>
	<script language="javascript" type="text/javascript">  
	$(document).ready(function() {
		$('#example').dataTable( {
			"pagingType": "full_numbers"
		} );
	} );
	</script>
			
	       {include file="footer.tpl"}