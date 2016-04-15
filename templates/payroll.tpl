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
					<h3>Payroll<small>Informasi Payroll</small></h3>
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
			    <table> 
			          <TD class=txt_form vAlign=center height=30>
			            <B>&nbsp;&nbsp;Periode [mm/yyyy] </B>
			            </TD>
			          <TD class=txt_form vAlign=center height=30>
			              &nbsp;
			              : 
			
						<select name="idperiode" onChange=submit()>
					          <option value=''>-- Pilih --</option>
					        
								{section name=detail_periode loop=$periode}
					              
					        <option value={$periode[detail_periode].id} {$periode[detail_periode].selected}>{$periode[detail_periode].nama}</option>
					        
					            {/section}
				            </select>
			</TD>
			            
			        	<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			        	<td>	         
				<div class="table-controls">
					<p style="text-align:left;">
						<a href="pdfslipgaji2.php?idprd={$idperiode}" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>

				    </p>
				</div></td></table>	
							<!-- Striped datatable inside panel -->
			    <div class="panel panel-success">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Payroll</h6></div>
			                <table id="example" class="table table-striped table-bordered table-hover" style="width:100%; ">
                          <thead>
              <tr>
	  			  <th style="width:1%;text-align:center;">No</th>
				  <th style="width:2%;text-align:center;">Periode</th>
				  <th style="width:2%;text-align:center;">Nama</th>
				  <th style="width:3%;text-align:center;">Jabatan</th>
				  <th style="width:3%;text-align:center;">Upah</th>
				  <th style="width:3%;text-align:center;">T. Jabatan</th>
				  <th style="width:4%;text-align:center;">Trans & Meal</th>
				  <th style="width:3%;text-align:center;">T. Lain</th>
				  <th style="width:3%;text-align:center;">T. Hadir</th>
				  <th style="width:3%;text-align:center;">Pend. Lain</th>
				  <th style="width:3%;text-align:center;">PPH 21</th>
				  <th style="width:4%;text-align:center;">BPJS Naker (2%)</th>
				  <th style="width:4%;text-align:center;">BPJS Sehat (0,5%)</th>
				  <th style="width:2%;text-align:center;">Pin jam an</th>
				  <th style="width:2%;text-align:center;">Po tong an</th>
				  <th style="width:3%;text-align:center;">Pengu ra ngan</th>
				  <th style="width:3%;text-align:center;">THP</th>
	 </tr>
             </thead>
<tbody >
    {section name=detail loop=$pos}
    <TR bgcolor={cycle name=cyclerincian values="#BDCCDC, #DDE4F9"} >
        <TD VALIGN=TOP align=center>{$pos[detail].no}</TD>
<TD VALIGN=TOP align=center>{$pos[detail].posprd}</TD>
        <TD VALIGN=TOP align=LEFT>{$pos[detail].posName}</TD>
<TD VALIGN=TOP align=LEFT>{$pos[detail].posjbt}</TD>
<!--<TD VALIGN=TOP align=right>{$pos[detail].poslevel}</TD>-->
<TD VALIGN=TOP align=right>{$pos[detail].posgaji}</TD>
<TD VALIGN=TOP align=right>{$pos[detail].posjabatan}</TD>
<TD VALIGN=TOP align=right>{$pos[detail].posmeal}</TD>
<TD VALIGN=TOP align=right>{$pos[detail].postlain}</TD>
<TD VALIGN=TOP align=right>{$pos[detail].poshadir}</TD>
<TD VALIGN=TOP align=right>{$pos[detail].pospendlain}</TD>
<TD VALIGN=TOP align=right>{$pos[detail].pospph}</TD>
<TD VALIGN=TOP align=right>{$pos[detail].pospotjht}</TD>
<TD VALIGN=TOP align=right>{$pos[detail].pospotsehat}</TD>
<TD VALIGN=TOP align=right>{$pos[detail].pospotlain}</TD>
<TD VALIGN=TOP align=right>{$pos[detail].pospotpinjaman}</TD>
<TD VALIGN=TOP align=right>{$pos[detail].pospotbro}</TD>
<TD VALIGN=TOP align=right>{$pos[detail].posupahterima}</TD>
</TR>
 {/section}
	</tbody></table>
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