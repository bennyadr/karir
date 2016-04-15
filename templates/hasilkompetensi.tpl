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
					<h3>Hasil Kompetensi Pegawai<small>Informasi Hasil Kompetensi Pegawair</small></h3>
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
<form class="" role="form">	           
	<div class="row">
					<div class="col-md-12" >
		            	<div class="panel panel-default">
		                    <div class="panel-heading"><h6 class="panel-title" ><i class="icon-user"></i> Indentitas Pegawai</h6></div>
		                	<div class="panel-body">
			    <TABLE cellSpacing=0 cellPadding=0 border=0 width=100%>   
			        <TR>
                    <TD width="18%" height="30"></TD>
			          <TD width="28%"><B> N I P</B> </TD>          			              
			          <TD width="3%" Align=left> : </TD>
			          <TD width="51%" Align=left> {} </TD>
		          </TR>
                    <TR>
                      <TD width="18%" height="30"></TD>
			          <TD width="28%" ><B>Nama Pegawai</B> </TD>          			              
			          <TD width="3%" Align=left > : </TD>
			          <TD width="51%" Align=left > {} </TD>
			        </TR>
                    <TR>
                      <TD width="18%" height="30"></TD>
			          <TD width="28%" > <B>Jabatan</B> </TD>          			              
			          <TD width="3%" Align=left> : </TD>
			          <TD width="51%" Align=left> {} </TD>
			        </TR>
			        </TABLE>
			      </TABLE>
		                	</div>
		                	</div>
		                	</div>
		               </div>
		               </form>
		               


 <div class="panel panel-info">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Hasil Kompetensi</h6></div>
			                <table id="example" class="table table-striped table-bordered table-hover" style="width:100%;">
              <thead>
              <tr>
	  			  <th style="width:1%;text-align:center;">No</th>
				  <th style="width:5%;text-align:center;">Jenis Kompetensi</th>
				  <th style="width:5%;text-align:center;">Kompetensi</th>
				  <th style="width:5%;text-align:center;">Atasan</th>
				  <th style="width:5%;text-align:center;">Yang Bersangkutan</th>
				  <th style="width:5%;text-align:center;">Bawahan</th>
	 </tr>
              </thead>
              <tbody>
              {section name=detail loop=$pos}
    <TR align="center">
        <TD VALIGN=TOP align=center>{$pos[detail].no}</TD>
        <TD VALIGN=TOP align=LEFT>{$pos[detail].jeniskompetensi}</TD>
        <TD VALIGN=TOP align=CENTER>{$pos[detail].kompetensi}</TD>
        <TD VALIGN=TOP align=CENTER>{$pos[detail].ats}</TD>
        <TD VALIGN=TOP align=CENTER>{$pos[detail].ybs}</TD>
        <TD VALIGN=TOP align=CENTER>{$pos[detail].bwh}</TD>
		
    {/section}
	</tbody>
   <thead>
              <tr>
	  			  <th style="width:1%;text-align:center;"></th>
				  <th style="width:5%;text-align:center;"></th>
				  <th style="width:5%;text-align:center;">Nilai Kompetensi</th>
				  <th style="width:5%;text-align:center;"></th>
				  <th style="width:5%;text-align:center;"></th>
				  <th style="width:5%;text-align:center;"></th>
	 </tr>
              </thead>
	</table>
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