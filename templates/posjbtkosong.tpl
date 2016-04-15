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
					<h3>Posisi Jabatan Kosong<small>Informasi Posisi Jabatan Kosong</small></h3>
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
			          

         <form class="form-horizontal" ame="kompetensiform" method="post" id="form"  action="posjbtkosong.php?mod=idposjbtkosong" role="form">
         <input type="hidden" name="orderby" value="{$orderby}">
		<INPUT TYPE="hidden" NAME="id" VALUE="{$id}">
<div class="row">
					<div class="col-md-12" >
		            	<div class="panel panel-default">
		                	<div class="panel-body">
			    <TABLE cellSpacing=0 cellPadding=0 border=0 width=100%>   
			        <TR>
                    <TD width="10%" height="30"></TD>
			          <TD width="20%"><B> Jabatan</B> </TD>          			              
			          <TD width="3%" Align=left> : </TD>
			          <TD width="40%" Align=left> <select name="jabatan" onChange=submit() class="form-control" tabindex="2">
									<option value=''>Semua</option>
									{section name=detail loop=$jabatan_opt}
									<option value="{$jabatan_opt[detail].id}" {$jabatan_opt[detail].selected}>{$jabatan_opt[detail].nama}</option>
									{/section}
									</select> </TD>
                    <TD width="51%" Align=left></TD>
		          </TR>
                    <TR>
                      <TD width="10%" height="30"></TD>
			          <TD width="20%" ><B>Kelompok</B> </TD>          			              
			         <TD width="3%" Align=left> : </TD>
                     <TD width="40%" Align=left> {} </TD>
                     <TD width="51%" Align=left></TD>
			        </TR>
                    <TR>
                      <TD width="10%" height="30"></TD>
			          <TD width="20%" > <B>Level</B> </TD>          			              
			          <TD width="3%" Align=left> : </TD>
			          <TD width="40%" Align=left> {} </TD>
                      <TD width="51%" Align=left></TD>
			        </TR>
			        </TABLE>
			      </TABLE>
		                	</div>
		                	</div>
		                	</div>
		               </div>
		               </form>
		               


							<!-- Striped datatable inside panel -->
			    <div class="panel panel-info">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Posisi Jabatan Kosong</h6></div>
			                <table id="example" class="table table-striped table-bordered table-hover" style="width:100%; ">
              <thead>
              <tr>
	  			  <th style="width:1%;text-align:center;">No</th>
				  <th style="width:5%;text-align:center;">Kelompok</th>
				  <th style="width:5%;text-align:center;">Jabatan</th>
	 </tr>
              </thead>
              <tbody>
              {section name=detail loop=$unite}
    <TR align="center">
        <TD VALIGN=TOP align=center>{$unite[detail].no}</TD>
        <TD VALIGN=TOP align=center>{$unite[detail].kelompok}</TD>
        <TD VALIGN=TOP align=center>{$unite[detail].jabatan}</TD>
		
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