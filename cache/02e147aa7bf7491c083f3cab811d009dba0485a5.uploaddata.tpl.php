<?php
/*%%SmartyHeaderCode:1010656dcf7d64a4dd0_50742066%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02e147aa7bf7491c083f3cab811d009dba0485a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\uploaddata.tpl',
      1 => 1455867634,
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
  'nocache_hash' => '1010656dcf7d64a4dd0_50742066',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'pos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56dcf7d74d6235_27379670',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56dcf7d74d6235_27379670')) {
function content_56dcf7d74d6235_27379670 ($_smarty_tpl) {
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
					<span>admin</span>
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
							Pengelola Website <span>admin</span>
						</div>
					</a>
					
				</div>
				<!-- /user dropdown -->

				<!-- Main navigation -->
				<ul class="navigation">				
					<li ><a href="index.php?action=showmenu"><span>Dashboard</span> <i class="icon-screen2"></i></a></li>
					<li><a href="#"><span>Staffing</span> <i class="icon-accessibility"></i></a>
					<ul>
							<li ><a href="employee.php">Database Pegawai</a></li>
							<li ><a href="form_cuti.php">Daftar Cuti Pegawai</a></li>
							<li ><a href="news.php">Daftar Pengumuman/News</a></li>
					</ul>
					</li>
					<li><a href="#"><span>Payroll</span> <i class="icon-clipboard"></i></a>
					<ul>
							<li  class="active" ><a href="uploaddata.php">Upload Data Pendukung</a></li>
							<li ><a href="uploadfp.php">Upload Data Finger Print</a></li>
							<li ><a href="pendapatan.php">Pendapatan</a></li>
							<li ><a href="potongan.php">Potongan</a></li>
							<li ><a href="payroll.php">Payroll (Penggajian)</a></li>
					</ul>
					</li>
					
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
					<h3>Upload Data Pendukung<small>Upload Data Pendukung</small></h3>
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
					<li><a href="index.php?action=showmenu">Home</a></li>
					 					 					 					 <li class="active">Upload Data Pendukung</li>					 					 					 					 					 				</ul>
				<div class="visible-xs breadcrumb-toggle">
					<a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
				</div>
			</div>

				<!-- /main navigation -->
			<!-- /breadcrumbs line -->
						    <div class="panel panel-default">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-upload2"></i>Upload Data</h6></div>
			                <form method=post name="Form" action=uploaddata.php?action=Process ENCTYPE="multipart/form-data">
			                
						<div class="panel-body">
				          <div class="row">
				            <div class="col-md-6">
				              <div class="form-group">
				              <a href="data/template_penpot.xls" class="btn btn-default btn-icon btn-xs tip" title="Download">Download Template Excel</a> 
				              </div>
				              <div class="form-group">
                              <label>Browse : </label>
                            <input type="file" name="smap" >
                          </div>
                          </div>
                          </div>
			                <div class="form-actions text-left">
           					<input type="submit" data-toggle="modal" role="button"  value="Import" class="btn btn-primary">
           					</div>
           					</div>
			                </div>
			                </form>

			<!-- Table inside panel body -->
			            <div class="table-controls">
			            <form method=post action="uploaddata.php?action=SendToDataSoft" name="multicheckbox">
						<div class="form-actions text-left">
           					<input type="submit" data-toggle="modal" role="button"  value="Proses" class="btn btn-success">
				    </p>
				</div>
							<!-- Striped datatable inside panel -->
			    <div class="panel panel-success">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Gaji</h6></div>
			                <table id="example" class="table table-striped table-bordered table-hover" style="width:100%; ">
              <thead>
              <tr>
              		<th width=1<?php echo '%>';?><input type="checkbox" name="act" value="" id="d"></th>
	  			  <th style="width:1%;text-align:center;">No</th>
				  <th style="width:2%;text-align:center;">Periode</th>
				  <th style="width:2%;text-align:center;">NIK</th>
				  <th style="width:2%;text-align:center;">Jum lah Hadir</th>
				  <th style="width:3%;text-align:center;">Gapok</th>
				  <th style="width:3%;text-align:center;">Kehadir an</th>
				  <th style="width:4%;text-align:center;">Jabat an</th>
				  <th style="width:3%;text-align:center;">Trans. Meal</th>
				  <th style="width:4%;text-align:center;">Lain</th>
				  <th style="width:3%;text-align:center;">PPH 21</th>
				  <th style="width:4%;text-align:center;">BPJS Naker (2%)</th>
				  <th style="width:4%;text-align:center;">BPJS Sehat (0,5%)</th>
				  <th style="width:2%;text-align:center;">Pin jam an</th>
				  <th style="width:2%;text-align:center;">Po tong an</th>
	 </tr>
              </thead>
              <tbody>
		<tr>
	<TD VALIGN=TOP><input type="checkbox" name="nik[]" value="01305010"></TD>
        <TD VALIGN=TOP align=LEFT>1</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="periode[]" value="022015">022015</a></TD>
		<TD VALIGN=TOP >01305010</a></TD>
		<TD VALIGN=TOP >22</a></TD>
		<TD VALIGN=TOP style="text-align:right;">248000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">496000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">248000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">29760</a></TD>
		<TD VALIGN=TOP style="text-align:right;">13500</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
			
	 	<tr>
	<TD VALIGN=TOP><input type="checkbox" name="nik[]" value="P0007"></TD>
        <TD VALIGN=TOP align=LEFT>2</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="periode[]" value="022015">022015</a></TD>
		<TD VALIGN=TOP >P0007</a></TD>
		<TD VALIGN=TOP >8</a></TD>
		<TD VALIGN=TOP style="text-align:right;">133636</a></TD>
		<TD VALIGN=TOP style="text-align:right;">735000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">133636</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">44100</a></TD>
		<TD VALIGN=TOP style="text-align:right;">15000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
			
	 	<tr>
	<TD VALIGN=TOP><input type="checkbox" name="nik[]" value="P0001"></TD>
        <TD VALIGN=TOP align=LEFT>3</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="periode[]" value="022015">022015</a></TD>
		<TD VALIGN=TOP >P0001</a></TD>
		<TD VALIGN=TOP >20</a></TD>
		<TD VALIGN=TOP style="text-align:right;">1670455</a></TD>
		<TD VALIGN=TOP style="text-align:right;">3675000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">1670455</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">147000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">23625</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
			
	 	<tr>
	<TD VALIGN=TOP><input type="checkbox" name="nik[]" value="3526010208890006"></TD>
        <TD VALIGN=TOP align=LEFT>4</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="periode[]" value="022015">022015</a></TD>
		<TD VALIGN=TOP >3526010208890006</a></TD>
		<TD VALIGN=TOP >22</a></TD>
		<TD VALIGN=TOP style="text-align:right;">289750</a></TD>
		<TD VALIGN=TOP style="text-align:right;">579500</a></TD>
		<TD VALIGN=TOP style="text-align:right;">289750</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">34770</a></TD>
		<TD VALIGN=TOP style="text-align:right;">13500</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
			
	 	<tr>
	<TD VALIGN=TOP><input type="checkbox" name="nik[]" value="01308009"></TD>
        <TD VALIGN=TOP align=LEFT>5</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="periode[]" value="022015">022015</a></TD>
		<TD VALIGN=TOP >01308009</a></TD>
		<TD VALIGN=TOP >22</a></TD>
		<TD VALIGN=TOP style="text-align:right;">437625</a></TD>
		<TD VALIGN=TOP style="text-align:right;">875250</a></TD>
		<TD VALIGN=TOP style="text-align:right;">437625</a></TD>
		<TD VALIGN=TOP style="text-align:right;">260000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">52515</a></TD>
		<TD VALIGN=TOP style="text-align:right;">17505</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
			
	 	<tr>
	<TD VALIGN=TOP><input type="checkbox" name="nik[]" value="10003"></TD>
        <TD VALIGN=TOP align=LEFT>6</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="periode[]" value="022015">022015</a></TD>
		<TD VALIGN=TOP >10003</a></TD>
		<TD VALIGN=TOP >0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">620938</a></TD>
		<TD VALIGN=TOP style="text-align:right;">1241875</a></TD>
		<TD VALIGN=TOP style="text-align:right;">620938</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">74513</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
			
	 	<tr>
	<TD VALIGN=TOP><input type="checkbox" name="nik[]" value="10004"></TD>
        <TD VALIGN=TOP align=LEFT>7</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="periode[]" value="022015">022015</a></TD>
		<TD VALIGN=TOP >10004</a></TD>
		<TD VALIGN=TOP >22</a></TD>
		<TD VALIGN=TOP style="text-align:right;">625000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">1250000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">625000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">937500</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">75000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
			
	 	<tr>
	<TD VALIGN=TOP><input type="checkbox" name="nik[]" value="P0002"></TD>
        <TD VALIGN=TOP align=LEFT>8</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="periode[]" value="022015">022015</a></TD>
		<TD VALIGN=TOP >P0002</a></TD>
		<TD VALIGN=TOP >0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">1250000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">2500000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">1250000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
			
	 	<tr>
	<TD VALIGN=TOP><input type="checkbox" name="nik[]" value="0112001"></TD>
        <TD VALIGN=TOP align=LEFT>9</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="periode[]" value="022015">022015</a></TD>
		<TD VALIGN=TOP >0112001</a></TD>
		<TD VALIGN=TOP >0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">3581250</a></TD>
		<TD VALIGN=TOP style="text-align:right;">7162500</a></TD>
		<TD VALIGN=TOP style="text-align:right;">3581250</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
			
	 	<tr>
	<TD VALIGN=TOP><input type="checkbox" name="nik[]" value="P0009"></TD>
        <TD VALIGN=TOP align=LEFT>10</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="periode[]" value="022015">022015</a></TD>
		<TD VALIGN=TOP >P0009</a></TD>
		<TD VALIGN=TOP >0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">1250000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">2500000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">1250000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">150000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">23625</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
			
	 	<tr>
	<TD VALIGN=TOP><input type="checkbox" name="nik[]" value="10005"></TD>
        <TD VALIGN=TOP align=LEFT>11</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="periode[]" value="022015">022015</a></TD>
		<TD VALIGN=TOP >10005</a></TD>
		<TD VALIGN=TOP >22</a></TD>
		<TD VALIGN=TOP style="text-align:right;">490000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">980000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">490000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">58800</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
			
	 	<tr>
	<TD VALIGN=TOP><input type="checkbox" name="nik[]" value="P0011"></TD>
        <TD VALIGN=TOP align=LEFT>12</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="periode[]" value="022015">022015</a></TD>
		<TD VALIGN=TOP >P0011</a></TD>
		<TD VALIGN=TOP >0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">1250000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">2500000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">1250000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">150000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">23625</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
			
	 	<tr>
	<TD VALIGN=TOP><input type="checkbox" name="nik[]" value="P0010"></TD>
        <TD VALIGN=TOP align=LEFT>13</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="periode[]" value="022015">022015</a></TD>
		<TD VALIGN=TOP >P0010</a></TD>
		<TD VALIGN=TOP >0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">1250000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">2500000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">1250000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">150000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">23625</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
			
	 	<tr>
	<TD VALIGN=TOP><input type="checkbox" name="nik[]" value="3174092101910006"></TD>
        <TD VALIGN=TOP align=LEFT>14</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="periode[]" value="022015">022015</a></TD>
		<TD VALIGN=TOP >3174092101910006</a></TD>
		<TD VALIGN=TOP >22</a></TD>
		<TD VALIGN=TOP style="text-align:right;">616125</a></TD>
		<TD VALIGN=TOP style="text-align:right;">1232250</a></TD>
		<TD VALIGN=TOP style="text-align:right;">616125</a></TD>
		<TD VALIGN=TOP style="text-align:right;">924188</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">73935</a></TD>
		<TD VALIGN=TOP style="text-align:right;">20000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
			
	 	<tr>
	<TD VALIGN=TOP><input type="checkbox" name="nik[]" value="3578206007800002"></TD>
        <TD VALIGN=TOP align=LEFT>15</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="periode[]" value="022015">022015</a></TD>
		<TD VALIGN=TOP >3578206007800002</a></TD>
		<TD VALIGN=TOP >22</a></TD>
		<TD VALIGN=TOP style="text-align:right;">493438</a></TD>
		<TD VALIGN=TOP style="text-align:right;">986875</a></TD>
		<TD VALIGN=TOP style="text-align:right;">493438</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">59213</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
			
	 	<tr>
	<TD VALIGN=TOP><input type="checkbox" name="nik[]" value="01409027"></TD>
        <TD VALIGN=TOP align=LEFT>16</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="periode[]" value="022015">022015</a></TD>
		<TD VALIGN=TOP >01409027</a></TD>
		<TD VALIGN=TOP >20</a></TD>
		<TD VALIGN=TOP style="text-align:right;">290295</a></TD>
		<TD VALIGN=TOP style="text-align:right;">638650</a></TD>
		<TD VALIGN=TOP style="text-align:right;">290295</a></TD>
		<TD VALIGN=TOP style="text-align:right;">50000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">38319</a></TD>
		<TD VALIGN=TOP style="text-align:right;">13500</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">300000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
			
	 	<tr>
	<TD VALIGN=TOP><input type="checkbox" name="nik[]" value="01409025"></TD>
        <TD VALIGN=TOP align=LEFT>17</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="periode[]" value="022015">022015</a></TD>
		<TD VALIGN=TOP >01409025</a></TD>
		<TD VALIGN=TOP >21</a></TD>
		<TD VALIGN=TOP style="text-align:right;">656250</a></TD>
		<TD VALIGN=TOP style="text-align:right;">1375000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">656250</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">82500</a></TD>
		<TD VALIGN=TOP style="text-align:right;">20000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
			
	 	<tr>
	<TD VALIGN=TOP><input type="checkbox" name="nik[]" value="3578181407670002"></TD>
        <TD VALIGN=TOP align=LEFT>18</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="periode[]" value="022015">022015</a></TD>
		<TD VALIGN=TOP >3578181407670002</a></TD>
		<TD VALIGN=TOP >22</a></TD>
		<TD VALIGN=TOP style="text-align:right;">614525</a></TD>
		<TD VALIGN=TOP style="text-align:right;">1229050</a></TD>
		<TD VALIGN=TOP style="text-align:right;">614525</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">73743</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
			
	 	<tr>
	<TD VALIGN=TOP><input type="checkbox" name="nik[]" value="P0014"></TD>
        <TD VALIGN=TOP align=LEFT>19</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="periode[]" value="022015">022015</a></TD>
		<TD VALIGN=TOP >P0014</a></TD>
		<TD VALIGN=TOP >0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">1000000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">2000000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">1000000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">120000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">23625</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
			
	 	<tr>
	<TD VALIGN=TOP><input type="checkbox" name="nik[]" value="P0008"></TD>
        <TD VALIGN=TOP align=LEFT>20</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="periode[]" value="022015">022015</a></TD>
		<TD VALIGN=TOP >P0008</a></TD>
		<TD VALIGN=TOP >0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">1500000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">3000000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">1500000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">180000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">23625</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
			
	 	<tr>
	<TD VALIGN=TOP><input type="checkbox" name="nik[]" value="647105.010790010"></TD>
        <TD VALIGN=TOP align=LEFT>21</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="periode[]" value="022015">022015</a></TD>
		<TD VALIGN=TOP >647105.010790010</a></TD>
		<TD VALIGN=TOP >22</a></TD>
		<TD VALIGN=TOP style="text-align:right;">344575</a></TD>
		<TD VALIGN=TOP style="text-align:right;">689150</a></TD>
		<TD VALIGN=TOP style="text-align:right;">344575</a></TD>
		<TD VALIGN=TOP style="text-align:right;">516863</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">41349</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">500000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
			
	 	<tr>
	<TD VALIGN=TOP><input type="checkbox" name="nik[]" value="P0006"></TD>
        <TD VALIGN=TOP align=LEFT>22</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="periode[]" value="022015">022015</a></TD>
		<TD VALIGN=TOP >P0006</a></TD>
		<TD VALIGN=TOP >22</a></TD>
		<TD VALIGN=TOP style="text-align:right;">1653750</a></TD>
		<TD VALIGN=TOP style="text-align:right;">3307500</a></TD>
		<TD VALIGN=TOP style="text-align:right;">1653750</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">132300</a></TD>
		<TD VALIGN=TOP style="text-align:right;">23625</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
			
	 	<tr>
	<TD VALIGN=TOP><input type="checkbox" name="nik[]" value="01304014"></TD>
        <TD VALIGN=TOP align=LEFT>23</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="periode[]" value="022015">022015</a></TD>
		<TD VALIGN=TOP >01304014</a></TD>
		<TD VALIGN=TOP >20</a></TD>
		<TD VALIGN=TOP style="text-align:right;">377216</a></TD>
		<TD VALIGN=TOP style="text-align:right;">829875</a></TD>
		<TD VALIGN=TOP style="text-align:right;">377216</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">49793</a></TD>
		<TD VALIGN=TOP style="text-align:right;">16598</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
			
	 	<tr>
	<TD VALIGN=TOP><input type="checkbox" name="nik[]" value="P0005"></TD>
        <TD VALIGN=TOP align=LEFT>24</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="periode[]" value="022015">022015</a></TD>
		<TD VALIGN=TOP >P0005</a></TD>
		<TD VALIGN=TOP >0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">625000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">1250000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">625000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
			
	 	<tr>
	<TD VALIGN=TOP><input type="checkbox" name="nik[]" value="01203004"></TD>
        <TD VALIGN=TOP align=LEFT>25</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="periode[]" value="022015">022015</a></TD>
		<TD VALIGN=TOP >01203004</a></TD>
		<TD VALIGN=TOP >21</a></TD>
		<TD VALIGN=TOP style="text-align:right;">510682</a></TD>
		<TD VALIGN=TOP style="text-align:right;">1070000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">510682</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">64200</a></TD>
		<TD VALIGN=TOP style="text-align:right;">14734</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">1333365</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
			
	 	<tr>
	<TD VALIGN=TOP><input type="checkbox" name="nik[]" value="01405018"></TD>
        <TD VALIGN=TOP align=LEFT>26</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="periode[]" value="022015">022015</a></TD>
		<TD VALIGN=TOP >01405018</a></TD>
		<TD VALIGN=TOP >22</a></TD>
		<TD VALIGN=TOP style="text-align:right;">362770</a></TD>
		<TD VALIGN=TOP style="text-align:right;">725540</a></TD>
		<TD VALIGN=TOP style="text-align:right;">362770</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">43532</a></TD>
		<TD VALIGN=TOP style="text-align:right;">14511</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
			
	 	<tr>
	<TD VALIGN=TOP><input type="checkbox" name="nik[]" value="01303013"></TD>
        <TD VALIGN=TOP align=LEFT>27</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="periode[]" value="022015">022015</a></TD>
		<TD VALIGN=TOP >01303013</a></TD>
		<TD VALIGN=TOP >19</a></TD>
		<TD VALIGN=TOP style="text-align:right;">335199</a></TD>
		<TD VALIGN=TOP style="text-align:right;">776250</a></TD>
		<TD VALIGN=TOP style="text-align:right;">335199</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">46575</a></TD>
		<TD VALIGN=TOP style="text-align:right;">15525</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">300000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
			
	 	<tr>
	<TD VALIGN=TOP><input type="checkbox" name="nik[]" value="00011355"></TD>
        <TD VALIGN=TOP align=LEFT>28</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="periode[]" value="022015">022015</a></TD>
		<TD VALIGN=TOP >00011355</a></TD>
		<TD VALIGN=TOP >22</a></TD>
		<TD VALIGN=TOP style="text-align:right;">309875</a></TD>
		<TD VALIGN=TOP style="text-align:right;">619750</a></TD>
		<TD VALIGN=TOP style="text-align:right;">309875</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">37185</a></TD>
		<TD VALIGN=TOP style="text-align:right;">13500</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">150000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
			
	 	<tr>
	<TD VALIGN=TOP><input type="checkbox" name="nik[]" value="P0013"></TD>
        <TD VALIGN=TOP align=LEFT>29</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="periode[]" value="022015">022015</a></TD>
		<TD VALIGN=TOP >P0013</a></TD>
		<TD VALIGN=TOP >0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">1000000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">2000000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">1000000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">120000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">23625</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
			
	 	<tr>
	<TD VALIGN=TOP><input type="checkbox" name="nik[]" value="10006"></TD>
        <TD VALIGN=TOP align=LEFT>30</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="periode[]" value="022015">022015</a></TD>
		<TD VALIGN=TOP >10006</a></TD>
		<TD VALIGN=TOP >22</a></TD>
		<TD VALIGN=TOP style="text-align:right;">160063</a></TD>
		<TD VALIGN=TOP style="text-align:right;">320125</a></TD>
		<TD VALIGN=TOP style="text-align:right;">160063</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">19208</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
			
	 	<tr>
	<TD VALIGN=TOP><input type="checkbox" name="nik[]" value="P0015"></TD>
        <TD VALIGN=TOP align=LEFT>31</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="periode[]" value="022015">022015</a></TD>
		<TD VALIGN=TOP >P0015</a></TD>
		<TD VALIGN=TOP >0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">1000000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">2000000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">1000000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">120000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">23625</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
			
	 	<tr>
	<TD VALIGN=TOP><input type="checkbox" name="nik[]" value="P0012"></TD>
        <TD VALIGN=TOP align=LEFT>32</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="periode[]" value="022015">022015</a></TD>
		<TD VALIGN=TOP >P0012</a></TD>
		<TD VALIGN=TOP >0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">1000000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">2000000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">1000000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">120000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">23625</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
			
	 	<tr>
	<TD VALIGN=TOP><input type="checkbox" name="nik[]" value="01206006"></TD>
        <TD VALIGN=TOP align=LEFT>33</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="periode[]" value="022015">022015</a></TD>
		<TD VALIGN=TOP >01206006</a></TD>
		<TD VALIGN=TOP >21</a></TD>
		<TD VALIGN=TOP style="text-align:right;">401386</a></TD>
		<TD VALIGN=TOP style="text-align:right;">841000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">401386</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">50460</a></TD>
		<TD VALIGN=TOP style="text-align:right;">16820</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
			
	 	<tr>
	<TD VALIGN=TOP><input type="checkbox" name="nik[]" value="P0004"></TD>
        <TD VALIGN=TOP align=LEFT>34</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="periode[]" value="022015">022015</a></TD>
		<TD VALIGN=TOP >P0004</a></TD>
		<TD VALIGN=TOP >0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">1250000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">2500000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">1250000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
			
	 	<tr>
	<TD VALIGN=TOP><input type="checkbox" name="nik[]" value="077405131004"></TD>
        <TD VALIGN=TOP align=LEFT>35</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="periode[]" value="022015">022015</a></TD>
		<TD VALIGN=TOP >077405131004</a></TD>
		<TD VALIGN=TOP >20</a></TD>
		<TD VALIGN=TOP style="text-align:right;">617614</a></TD>
		<TD VALIGN=TOP style="text-align:right;">1358750</a></TD>
		<TD VALIGN=TOP style="text-align:right;">617614</a></TD>
		<TD VALIGN=TOP style="text-align:right;">49000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">81525</a></TD>
		<TD VALIGN=TOP style="text-align:right;">23625</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
			
	 	<tr>
	<TD VALIGN=TOP><input type="checkbox" name="nik[]" value="P0003"></TD>
        <TD VALIGN=TOP align=LEFT>36</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="periode[]" value="022015">022015</a></TD>
		<TD VALIGN=TOP >P0003</a></TD>
		<TD VALIGN=TOP >22</a></TD>
		<TD VALIGN=TOP style="text-align:right;">1837500</a></TD>
		<TD VALIGN=TOP style="text-align:right;">3675000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">1837500</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">147000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">23625</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
			
	 	<tr>
	<TD VALIGN=TOP><input type="checkbox" name="nik[]" value="1472010307880021"></TD>
        <TD VALIGN=TOP align=LEFT>37</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="periode[]" value="022015">022015</a></TD>
		<TD VALIGN=TOP >1472010307880021</a></TD>
		<TD VALIGN=TOP >0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">721125</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">43268</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
			
	 	<tr>
	<TD VALIGN=TOP><input type="checkbox" name="nik[]" value="P0016"></TD>
        <TD VALIGN=TOP align=LEFT>38</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="periode[]" value="022015">022015</a></TD>
		<TD VALIGN=TOP >P0016</a></TD>
		<TD VALIGN=TOP >22</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
			
	 	<tr>
	<TD VALIGN=TOP><input type="checkbox" name="nik[]" value="01409026"></TD>
        <TD VALIGN=TOP align=LEFT>39</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="periode[]" value="022015">022015</a></TD>
		<TD VALIGN=TOP >01409026</a></TD>
		<TD VALIGN=TOP >21</a></TD>
		<TD VALIGN=TOP style="text-align:right;">307197</a></TD>
		<TD VALIGN=TOP style="text-align:right;">643650</a></TD>
		<TD VALIGN=TOP style="text-align:right;">307197</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">38619</a></TD>
		<TD VALIGN=TOP style="text-align:right;">13500</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
			
	 	<tr>
	<TD VALIGN=TOP><input type="checkbox" name="nik[]" value="10007"></TD>
        <TD VALIGN=TOP align=LEFT>40</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="periode[]" value="022015">022015</a></TD>
		<TD VALIGN=TOP >10007</a></TD>
		<TD VALIGN=TOP >22</a></TD>
		<TD VALIGN=TOP style="text-align:right;">190313</a></TD>
		<TD VALIGN=TOP style="text-align:right;">380625</a></TD>
		<TD VALIGN=TOP style="text-align:right;">190313</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">22838</a></TD>
		<TD VALIGN=TOP style="text-align:right;">13500</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
			
	 	<tr>
	<TD VALIGN=TOP><input type="checkbox" name="nik[]" value="01407021"></TD>
        <TD VALIGN=TOP align=LEFT>41</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="periode[]" value="022015">022015</a></TD>
		<TD VALIGN=TOP >01407021</a></TD>
		<TD VALIGN=TOP >21</a></TD>
		<TD VALIGN=TOP style="text-align:right;">470985</a></TD>
		<TD VALIGN=TOP style="text-align:right;">986825</a></TD>
		<TD VALIGN=TOP style="text-align:right;">470985</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">59210</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
			
	 	<tr>
	<TD VALIGN=TOP><input type="checkbox" name="nik[]" value="10008"></TD>
        <TD VALIGN=TOP align=LEFT>42</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="periode[]" value="022015">022015</a></TD>
		<TD VALIGN=TOP >10008</a></TD>
		<TD VALIGN=TOP >22</a></TD>
		<TD VALIGN=TOP style="text-align:right;">375000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">750000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">375000</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
		<TD VALIGN=TOP style="text-align:right;">0</a></TD>
			
	 	</tbody></table>
	</form>

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