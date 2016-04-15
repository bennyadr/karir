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


     <div class="table-controls">
							<p style="text-align:right;">
							<!--<a href="?action=add" class="btn btn-info btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>-->
				            </p>
							</div>
							<!-- Striped datatable inside panel -->
			            <div class="panel panel-default">
						
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-paragraph-justify"></i>Tabel Rekap Data</h6></div>
							<br>
							<div class="form-group">
							<div class="col-xs-2">
									<label>jabatan/Wilayah : </label>
									<select name="jabatan" onChange=submit() class="form-control" tabindex="2">
									<option value=''>Semua</option>
									{section name=detail loop=$jabatan_opt}
									<option value="{$jabatan_opt[detail].id}" {$jabatan_opt[detail].selected}>{$jabatan_opt[detail].nama}</option>
									{/section}
									</select>
                                    </div>
							<div class="col-xs-2">
									<label>Kejuruan : </label>
									<select name="kejuruan" onChange=submit() class="form-control" tabindex="2">
									<option value=''>Semua</option>
									{section name=detail loop=$kejuruan_opt}
									<option value="{$kejuruan_opt[detail].id}" {$kejuruan_opt[detail].selected}>{$kejuruan_opt[detail].nama}</option>
									{/section}
									</select>
                                    </div>		
							</div>		
  <button class="btn" type="submit">Check</button>
 
			                <table id="example" class="table table-striped table-bordered table-hover" style="width:100%; ">
              <thead>
              <tr>
	  			  <th style="width:1%;text-align:center;">No</th>
				  <th style="width:5%;text-align:center;">Nama</th>
				  <th style="width:5%;text-align:center;">Jabatan</th>
	 </tr>
              </thead>
              <tbody>
              {section name=detail loop=$pos}
    <TR align="center">
        <TD VALIGN=TOP align=center>{$pos[detail].no}</TD>
        <TD VALIGN=TOP align=center>{$pos[detail].name}</TD>
        <TD VALIGN=TOP align=center>{$pos[detail].jabatan}</TD>
		
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