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
					<h3>Dashboard <small>Selamat Datang <b>{$username}</b> Di Sistem Informasi Karir Pegawai</small></h3>
				</div>

			</div>
			<!-- /page header -->
			<ul class="info-blocks">
				<li class="bg-primary">
					<div class="top-info">
						<a href="entrycost.php">Staffing</a>
						<small>Staffing</small>
					</div>
					<a href="entrycost.php"><i class="icon-cogs"></i></a>
					<span class="bottom-info bg-info">Database Pegawai</span>
				</li>
				<li class="bg-primary">
					<div class="top-info">
						<a href="#">Payroll</a>
						<small>Payroll</small>
					</div>
					<a href="#"><i class="icon-file4"></i></a>
					<span class="bottom-info bg-danger">Payroll</span>
				</li>
			</ul>

		
						
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