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
		      

		      <table class="table table-bordered">
	            <tbody>
	            	<TR bgcolor=#237EA0>
        				<TD ALIGN=CENTER width=5%><font color=#FFFFFF><b>A</b></font></TD>
        				<TD ALIGN=CENTER colspan=3 width=15%><font color=#FFFFFF><b>Nilai SKP = Hasil SKP x 60%</b></font></TD>
						<TD ALIGN=CENTER width=6%><font color=#FFFFFF><b>Total Nilai SKP</b></font></TD>
  					</TR>

   					<TR bgcolor=#237EA0>
						<TD ALIGN=LEFT width=5%><font color=#FFFFFF size=5><b>SKP</b></font></TD>
				        <TD ALIGN=CENTER width=5% height=40><font color=#FFFFFF size=17><b>nilainya</b></font></TD>
				        <TD ALIGN=CENTER width=1%><font color=#FFFFFF size=17><b>x</b></font></TD>
				        <TD ALIGN=CENTER width=6%><font color=#FFFFFF size=17><b>60%</b></font></TD>
						<TD ALIGN=CENTER width=6%><font color=#FFFFFF size=17><b>totnilainya</b></font></TD>
 					</TR>

 					 <TR bgcolor=#237EA0>
				        <TD ALIGN=CENTER width=5%><font color=#FFFFFF><b>B</b></font></TD>
				        <TD ALIGN=CENTER colspan=3 width=15%><font color=#FFFFFF><b>Nilai Kompetensi = Hasil Kompetensi x 40%</b></font></TD>
						<TD VALIGN=TOP></TD>
						<TR bgcolor=#237EA0>
						<TD VALIGN=TOP></TD>
				        <!--<TD ALIGN=CENTER width=5%><font color=#FFFFFF><b></b></font></TD>-->
				        <TD ALIGN=CENTER width=10% colspan=2><font color=#FFFFFF><b>KOMPETENSI</b></font></TD>
					<TD ALIGN=CENTER width=6%><font color=#FFFFFF><b>Nilai</b></font></TD>
					<TD VALIGN=TOP></TD>
				  </TR>
				{section name=detail loop=$unite}
				    <TR bgcolor=#237EA0>
				        <TD VALIGN=TOP></TD>
						<TD VALIGN=TOP colspan=2><font color=#FFFFFF>{$unite[detail].kompetensi}</font></TD>
				        <!--<TD VALIGN=TOP><font color=#FFFFFF>{$unite[detail].kompetensi}</font></TD>-->
				        <TD VALIGN=TOP align="center"><font color=#FFFFFF>{$unite[detail].nilai}</font></TD>
						<TD VALIGN=TOP></TD>
				    </TR>
				    {/section}
				       <TR bgcolor=#237EA0>
					   <TD VALIGN=TOP></TD>
				        <!--<TD ALIGN=CENTER width=5%><font color=#FFFFFF><b></b></font></TD>-->
				        <TD ALIGN=CENTER width=10% colspan=2><font color=#FFFFFF><b>NILAI KOMPETENSI</b></font></TD>
					<TD ALIGN=CENTER width=6%><font color=#FFFFFF><b>nilai</b></font></TD>
					<TD VALIGN=TOP></TD>
				  <TR bgcolor=#237EA0>
						<TD ALIGN=LEFT width=5%><font color=#FFFFFF size=5><b>PERILAKU KERJA</b></font></TD>
				        <TD ALIGN=CENTER width=5% height=40><font color=#FFFFFF size=17><b>nilai</b></font></TD>
				        <TD ALIGN=CENTER width=1%><font color=#FFFFFF size=17><b>x</b></font></TD>
				        <TD ALIGN=CENTER width=6%><font color=#FFFFFF size=17><b>40%</b></font></TD>
						<TD ALIGN=CENTER width=6%><font color=#FFFFFF size=17><b>totnilai</b></font></TD>
				  </TR>
				  <TR bgcolor=#237EA0>
						<TD ALIGN=LEFT width=5%><font color=#FFFFFF size=5><b>NPK</b></font></TD>
				        <TD ALIGN=CENTER colspan=3 width=5% height=40><font color=#FFFFFF size=17><b>NILAI = A + B</b></font></TD>
				        <TD ALIGN=CENTER width=6%><font color=#FFFFFF size=17><b>totnilaikinerja</b></font></TD>
				  </TR>
				  <TR bgcolor=#237EA0>
						<TD ALIGN=LEFT width=5%><font color=#FFFFFF size=2>
						<b>91 - 100 &nbsp;= Sangat Baik</br>
						   76 - 90 &nbsp;&nbsp; = Baik</br>
						   61 - 76 &nbsp;&nbsp; = Cukup</br>
						   51 - 60 &nbsp;&nbsp;  = Kurang</br>
						   < 50    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = Buruk</b></font></TD>
				        <TD ALIGN=CENTER colspan=4 width=4% height=40><font color=#FFFFFF size=17><b>predikat</b></font></TD>
				  </TR>

  				</tbody>
 			</table>

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

