<?php
/*%%SmartyHeaderCode:2285056d90c90003ae2_87539492%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91347d527525185ad46b174ceb61cbe4d480a161' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\permohonan.tpl',
      1 => 1456806016,
      2 => 'file',
    ),
    'e69b1d9b6462a960f6e40c26dcc5286353725220' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\header.tpl',
      1 => 1456377007,
      2 => 'file',
    ),
    '0c8ea50e9a5ac91fe80a6d56e761b1087c9f50af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\pengelola.tpl',
      1 => 1456301558,
      2 => 'file',
    ),
    '22676ace1a6104e4ab36a685c17ef6cdc7766f17' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\mainnav.tpl',
      1 => 1456208153,
      2 => 'file',
    ),
    '10e8ad6da261b6128f2c9dea5e875e117c5d5b34' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\breadcrumb.tpl',
      1 => 1456208215,
      2 => 'file',
    ),
    'fa63a2d5c70af2cf4d6d31c4a279d32375eea31b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\footer.tpl',
      1 => 1453872114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2285056d90c90003ae2_87539492',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'nik' => 0,
    'nama' => 0,
    'jabatan' => 0,
    'divisi' => 0,
    'cuti' => 0,
    'sisacuti' => 0,
    'izin' => 0,
    'sisaizin' => 0,
    'sakit' => 0,
    'dinas' => 0,
    'pos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56d90c90f232e4_09002935',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56d90c90f232e4_09002935')) {
function content_56d90c90f232e4_09002935 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
<title>Sistem Informasi Pegawai</title>

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/londinium-theme.css" rel="stylesheet" type="text/css">
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link href="css/icons.css" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>

<script type="text/javascript" src="js/plugins/charts/sparkline.min.js"></script>

<script type="text/javascript" src="js/plugins/forms/uniform.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/select2.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/inputmask.js"></script>
<script type="text/javascript" src="js/plugins/forms/autosize.js"></script>
<script type="text/javascript" src="js/plugins/forms/inputlimit.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/listbox.js"></script>
<script type="text/javascript" src="js/plugins/forms/multiselect.js"></script>
<script type="text/javascript" src="js/plugins/forms/validate.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/tags.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/switch.min.js"></script>

<script type="text/javascript" src="js/plugins/forms/uploader/plupload.full.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/uploader/plupload.queue.min.js"></script>

<script type="text/javascript" src="js/plugins/forms/wysihtml5/wysihtml5.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/wysihtml5/toolbar.js"></script>

<script type="text/javascript" src="js/plugins/interface/daterangepicker.js"></script>
<script type="text/javascript" src="js/plugins/interface/fancybox.min.js"></script>
<script type="text/javascript" src="js/plugins/interface/moment.js"></script>
<script type="text/javascript" src="js/plugins/interface/jgrowl.min.js"></script>
<script type="text/javascript" src="js/plugins/interface/datatables.min.js"></script>
<script type="text/javascript" src="js/plugins/interface/tabletools.min.js"></script>
<script type="text/javascript" src="js/plugins/interface/colorpicker.js"></script>
<script type="text/javascript" src="js/plugins/interface/fullcalendar.min.js"></script>
<script type="text/javascript" src="js/plugins/interface/timepicker.min.js"></script>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/application.js"></script>

</style>


</head>

<body>

	<!-- Navbar -->
	<div class="navbar navbar-inverse " role="navigation">
		<div class="navbar-header">
			<a class="navbar-brand" style="margin-top:-4px;" href="index.php?action=showmenu"><title="Sistem Informasi Pegawai" alt="Sistem Informasi Pegawai">Sisfo Pegawai</a>
			<a class="sidebar-toggle"><i class="icon-paragraph-justify2"></i></a>
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-icons">
				<span class="sr-only">Toggle navbar</span>
				<i class="icon-grid3"></i>
			</button>
			<button type="button" class="navbar-toggle offcanvas">
				<span class="sr-only">Toggle navigation</span>
				<i class="icon-paragraph-justify2"></i>
			</button>
		</div>

		<ul class="nav navbar-nav navbar-right collapse" id="navbar-icons">
					
			
			<li class="user dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown">
					<!--<img src="http://placehold.it/300">-->
					<span>anisa</span>
					<i class="caret"></i>
				</a>
				<ul class="dropdown-menu dropdown-menu-right icons-right">
					<li><a href="password.php"><i class="icon-key"></i> Change Password</a></li>
					<li><a href="index.php?action=logout"><i class="icon-exit"></i> Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<!-- /navbar -->
	<!-- Page container -->
 	<div class="page-container">

		<!-- Sidebar -->
		<div class="sidebar">
			<div class="sidebar-content">

								<!-- User dropdown -->
				<div class="user-menu dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="images/admin.png">
						<div class="user-info">
							Pengelola Website <span>anisa</span>
						</div>
					</a>
					
				</div>
				<!-- /user dropdown -->

				<!-- Main navigation -->
				<ul class="navigation">				
					<li ><a href="index.php?action=home"><span>Dashboard</span> <i class="icon-screen2"></i></a></li>
					<li ><a href="profile.php"><span>Profile</span> <i class="icon-profile"></i></a></li>
					<li  class="active" ><a href="permohonan.php"><span>Form Permohonan</span> <i class="icon-clipboard"></i></a></li>
					<li ><a href="seepayroll.php"><span>Payroll</span> <i class="icon-accessibility"></i></a></li>
					<li ><a href="password.php"><span>Change Password</span> <i class="icon-users"></i></a></li>
					<li><a href="index.php?action=logout"><span>Logout</span> <i class="icon-exit"></i></a></li>
				</ul>
				<!-- /main navigation -->
				
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
			<!-- Info Block -->
<div class="breadcrumb-line">
				<ul class="breadcrumb">
					<li><a href="index.php?action=home">Home</a></li>
					 					 					 <li class="active">Form Permohonan</li>					 					 				</ul>
				<div class="visible-xs breadcrumb-toggle">
					<a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
				</div>
			</div>
				<!-- /main navigation -->
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
							        <p>NIK : <b>15028904050</b></p>
									<p>Nama : <b>ANNISA NURUL HIKMAH</b></p>
									<p>Jabatan : <b>HR Supervisor</b></p>
									<p>Departemen : <b>Support Division</b></p>								
							</div>
						</div>
					</div>

					<div class="col-md-5">
						<div class="panel panel-default">
		                    <div class="panel-heading"><h6 class="panel-title"><i class="icon-menu5"></i> Selects</h6></div>
							<div class="panel-body">
							 <p>Cuti ( Terpakai : <b>2</b> Sisa : <b>10</b>)</p>
		<p>Izin ( Terpakai : <b>0</b> Sisa : <b>10</b>)</p>
		<p>Sakit ( Terpakai : <b>0</b> )</p>
		<p>Dinas ( Terpakai : <b>0</b> )</p>
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
		<tr>
	    <TD VALIGN=TOP >1</a></TD>
		<TD VALIGN=TOP style="text-align:center;">BDR/HRD/03/16/02</a></TD>
		<TD VALIGN=TOP style="text-align:center;">03/03/2016</a></TD>
		<TD VALIGN=TOP style="text-align:center;">Cuti</a></TD>
		<TD VALIGN=TOP style="text-align:center;">2</a></TD>
		<TD VALIGN=TOP style="text-align:left;">sadsa</a></TD>
		<TD VALIGN=TOP style="text-align:center;">09201920129</a></TD>
<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=15" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=15" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printformpermohonan.php?action=cetak&nodu=BDR/HRD/03/16/02" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
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
			
	         <!-- Footer -->
    <div class="footer clearfix">
        <div class="pull-left">&copy; 2016. Langit Infotama</div>
    	<div class="pull-right icons-group">
    		<a href="#"><i class="icon-cog3"></i></a>
    	</div>
    </div>
    <!-- /footer -->

</body>
</html><?php }
}
?>