<?php
/*%%SmartyHeaderCode:977356dcf7f592af49_97514059%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eaa17908d48ae536b13c151c370213ac1933c765' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\pendapatan.tpl',
      1 => 1456113399,
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
  'nocache_hash' => '977356dcf7f592af49_97514059',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'unite' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56dcf7f67c4084_23086192',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56dcf7f67c4084_23086192')) {
function content_56dcf7f67c4084_23086192 ($_smarty_tpl) {
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
							<li ><a href="uploaddata.php">Upload Data Pendukung</a></li>
							<li ><a href="uploadfp.php">Upload Data Finger Print</a></li>
							<li ><a href="pendapatan.php">Pendapatan</a></li>
							<li  class="active" ><a href="potongan.php">Potongan</a></li>
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
					<h3>Daftar Pendapatan<small>Informasi Pendapatan Pegawai</small></h3>
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
					 					 					 					 					 					 					 <li class="active">Potongan</li>					 					 				</ul>
				<div class="visible-xs breadcrumb-toggle">
					<a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
				</div>
			</div>

				<!-- /main navigation -->
			<!-- /breadcrumbs line -->

			 <div class="table-controls">
					<p style="text-align:left;">
						<a href="?action=showAddMenu" class="btn btn-success btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>
						</p>
				</div>
							<!-- Striped datatable inside panel -->
			    <div class="panel panel-success">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Pendapatan</h6></div>
			                <table id="example" class="table table-striped table-bordered table-hover" style="width:100%; ">
              <thead>
              <tr>
	  			 <th style="width:1%;text-align:center;">No</th>
				  <th style="width:1%;text-align:center;">Periode</th>
				  <th style="width:6%;text-align:center;">Nama</th>
				  <th style="width:5%;text-align:center;">Jabatan</th>
				  <th style="width:2%;text-align:center;">Gapok</th>
				  <th style="width:2%;text-align:center;">Tunj. Kehadiran</th>
				  <th style="width:2%;text-align:center;">Tunj. Lain</th>
				  <th style="width:2%;text-align:center;">Tunj. Jabatan</th>
				  <th style="width:2%;text-align:center;">Transport & Meal</th>
				<th style="width:2%;text-align:center;">OPTION</th>
				 </tr>
              </thead>
              <tbody>
                 <TR>
       <TD VALIGN=TOP align=center>1</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>AHMAD JAENAL ARIFIN</TD>
		<TD VALIGN=TOP>Office Boy</TD>
		<TD VALIGN=TOP style="text-align:right;">800,000</TD>
		<TD VALIGN=TOP style="text-align:right;">227,273</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">400,000</TD>
        <TD VALIGN=TOP style="text-align:right;">227,273</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=522" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=522" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>2</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>ALI USMAN</TD>
		<TD VALIGN=TOP>Office Boy</TD>
		<TD VALIGN=TOP style="text-align:right;">1,187,875</TD>
		<TD VALIGN=TOP style="text-align:right;">296,968</TD>
		<TD VALIGN=TOP style="text-align:right;">165,750</TD>
		<TD VALIGN=TOP style="text-align:right;">593,937</TD>
        <TD VALIGN=TOP style="text-align:right;">296,968</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=524" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=524" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>3</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>AMRIYANTO</TD>
		<TD VALIGN=TOP>Messenger</TD>
		<TD VALIGN=TOP style="text-align:right;">1,060,657</TD>
		<TD VALIGN=TOP style="text-align:right;">252,538</TD>
		<TD VALIGN=TOP style="text-align:right;">101,015</TD>
		<TD VALIGN=TOP style="text-align:right;">530,328</TD>
        <TD VALIGN=TOP style="text-align:right;">265,164</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=525" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=525" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>4</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>ANANG BUDI SETYAWAN</TD>
		<TD VALIGN=TOP>Contractor</TD>
		<TD VALIGN=TOP style="text-align:right;">4,000,000</TD>
		<TD VALIGN=TOP style="text-align:right;">1,000,000</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">2,000,000</TD>
        <TD VALIGN=TOP style="text-align:right;">1,000,000</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=526" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=526" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>5</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>ANNISA NURUL HIKMAH</TD>
		<TD VALIGN=TOP>HR Supervisor</TD>
		<TD VALIGN=TOP style="text-align:right;">1,500,000</TD>
		<TD VALIGN=TOP style="text-align:right;">357,955</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">750,000</TD>
        <TD VALIGN=TOP style="text-align:right;">357,955</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=527" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=527" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>6</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>ASRI MAULIA RAHMA</TD>
		<TD VALIGN=TOP>Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">1,718,182</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=529" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=529" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>7</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>BANGUN PURWANTO</TD>
		<TD VALIGN=TOP>Administration - Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">1,269,307</TD>
		<TD VALIGN=TOP style="text-align:right;">317,327</TD>
		<TD VALIGN=TOP style="text-align:right;">362,112</TD>
		<TD VALIGN=TOP style="text-align:right;">634,653</TD>
        <TD VALIGN=TOP style="text-align:right;">317,327</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=530" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=530" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>8</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>CHANDRA CAHYADI</TD>
		<TD VALIGN=TOP>Contractor</TD>
		<TD VALIGN=TOP style="text-align:right;">4,000,000</TD>
		<TD VALIGN=TOP style="text-align:right;">1,000,000</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">2,000,000</TD>
        <TD VALIGN=TOP style="text-align:right;">1,000,000</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=532" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=532" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>9</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>DAMARJATI SAPTO ARIOYUDHO</TD>
		<TD VALIGN=TOP>Administration Supervisor</TD>
		<TD VALIGN=TOP style="text-align:right;">2,625,000</TD>
		<TD VALIGN=TOP style="text-align:right;">656,250</TD>
		<TD VALIGN=TOP style="text-align:right;">250,000</TD>
		<TD VALIGN=TOP style="text-align:right;">1,312,500</TD>
        <TD VALIGN=TOP style="text-align:right;">656,250</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=534" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=534" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>10</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>DANIEL AZIS</TD>
		<TD VALIGN=TOP>Contractor</TD>
		<TD VALIGN=TOP style="text-align:right;">5,000,000</TD>
		<TD VALIGN=TOP style="text-align:right;">1,250,000</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">2,500,000</TD>
        <TD VALIGN=TOP style="text-align:right;">1,250,000</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=535" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=535" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>11</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>DICKY SUHARTO </TD>
		<TD VALIGN=TOP>CEO</TD>
		<TD VALIGN=TOP style="text-align:right;">15,675,000</TD>
		<TD VALIGN=TOP style="text-align:right;">3,581,250</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">7,162,500</TD>
        <TD VALIGN=TOP style="text-align:right;">3,581,250</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=537" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=537" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>12</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>EMILDA SITARA</TD>
		<TD VALIGN=TOP>Marketing Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">2,068,000</TD>
		<TD VALIGN=TOP style="text-align:right;">517,000</TD>
		<TD VALIGN=TOP style="text-align:right;">196,000</TD>
		<TD VALIGN=TOP style="text-align:right;">1,034,000</TD>
        <TD VALIGN=TOP style="text-align:right;">517,000</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=538" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=538" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>13</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>FILYO RONDONUWU</TD>
		<TD VALIGN=TOP>Business Unit Director</TD>
		<TD VALIGN=TOP style="text-align:right;">5,000,000</TD>
		<TD VALIGN=TOP style="text-align:right;">1,250,000</TD>
		<TD VALIGN=TOP style="text-align:right;">4,285,715</TD>
		<TD VALIGN=TOP style="text-align:right;">2,500,000</TD>
        <TD VALIGN=TOP style="text-align:right;">1,250,000</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=540" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=540" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>14</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>HUSAINI</TD>
		<TD VALIGN=TOP>Contractor</TD>
		<TD VALIGN=TOP style="text-align:right;">5,000,000</TD>
		<TD VALIGN=TOP style="text-align:right;">1,250,000</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">2,500,000</TD>
        <TD VALIGN=TOP style="text-align:right;">1,250,000</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=541" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=541" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>15</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>IHSANUL HAKIM</TD>
		<TD VALIGN=TOP>Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">3,477,273</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=542" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=542" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>16</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>INDAH DWI ARIANI</TD>
		<TD VALIGN=TOP>Secretary</TD>
		<TD VALIGN=TOP style="text-align:right;">2,704,545</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=543" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=543" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>17</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>IVAN SADDAM ARDINGHI SIREGAR</TD>
		<TD VALIGN=TOP>Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">2,642,377</TD>
		<TD VALIGN=TOP style="text-align:right;">660,595</TD>
		<TD VALIGN=TOP style="text-align:right;">251,655</TD>
		<TD VALIGN=TOP style="text-align:right;">1,321,189</TD>
        <TD VALIGN=TOP style="text-align:right;">660,595</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=544" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=544" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>18</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>JYALITA NITI HANDIPANI</TD>
		<TD VALIGN=TOP>Administration - Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">1,500,000</TD>
		<TD VALIGN=TOP style="text-align:right;">375,000</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">750,000</TD>
        <TD VALIGN=TOP style="text-align:right;">375,000</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=545" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=545" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>19</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>KIKI ANUGRAH MAHARANI</TD>
		<TD VALIGN=TOP>Marketing Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">2,118,645</TD>
		<TD VALIGN=TOP style="text-align:right;">563,988</TD>
		<TD VALIGN=TOP style="text-align:right;">808,490</TD>
		<TD VALIGN=TOP style="text-align:right;">1,059,323</TD>
        <TD VALIGN=TOP style="text-align:right;">563,988</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=546" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=546" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>20</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>MOCH. ANWAR JULISUSANTO</TD>
		<TD VALIGN=TOP>Sales Engineer</TD>
		<TD VALIGN=TOP style="text-align:right;">2,750,000</TD>
		<TD VALIGN=TOP style="text-align:right;">687,500</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">1,375,000</TD>
        <TD VALIGN=TOP style="text-align:right;">687,500</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=548" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=548" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>21</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>MARIANA </TD>
		<TD VALIGN=TOP>Finance Supervisor</TD>
		<TD VALIGN=TOP style="text-align:right;">3,863,636</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=549" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=549" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>22</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>MUHAMMAD IQBAL IBRAHIM</TD>
		<TD VALIGN=TOP>QHSE Officer</TD>
		<TD VALIGN=TOP style="text-align:right;">1,600,000</TD>
		<TD VALIGN=TOP style="text-align:right;">400,000</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">800,000</TD>
        <TD VALIGN=TOP style="text-align:right;">400,000</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=550" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=550" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>23</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>MUH GULUH</TD>
		<TD VALIGN=TOP>Contractor</TD>
		<TD VALIGN=TOP style="text-align:right;">4,000,000</TD>
		<TD VALIGN=TOP style="text-align:right;">1,000,000</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">2,000,000</TD>
        <TD VALIGN=TOP style="text-align:right;">1,000,000</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=551" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=551" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>24</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>MUNAWAR ZEGA</TD>
		<TD VALIGN=TOP>Support Manager</TD>
		<TD VALIGN=TOP style="text-align:right;">6,750,000</TD>
		<TD VALIGN=TOP style="text-align:right;">1,687,500</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">3,375,000</TD>
        <TD VALIGN=TOP style="text-align:right;">1,687,500</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=553" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=553" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>25</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>PANDUJATI</TD>
		<TD VALIGN=TOP>Vice President Support</TD>
		<TD VALIGN=TOP style="text-align:right;">2,500,000</TD>
		<TD VALIGN=TOP style="text-align:right;">625,000</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">1,250,000</TD>
        <TD VALIGN=TOP style="text-align:right;">625,000</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=554" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=554" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>26</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>POETRI ERWANDA SEPTIYANTI</TD>
		<TD VALIGN=TOP>Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">2,255,951</TD>
		<TD VALIGN=TOP style="text-align:right;">563,988</TD>
		<TD VALIGN=TOP style="text-align:right;">55,702</TD>
		<TD VALIGN=TOP style="text-align:right;">1,127,976</TD>
        <TD VALIGN=TOP style="text-align:right;">563,988</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=555" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=555" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>27</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>RIKA RAHIMDY</TD>
		<TD VALIGN=TOP>Administration - Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">1,567,912</TD>
		<TD VALIGN=TOP style="text-align:right;">391,979</TD>
		<TD VALIGN=TOP style="text-align:right;">149,325</TD>
		<TD VALIGN=TOP style="text-align:right;">783,957</TD>
        <TD VALIGN=TOP style="text-align:right;">391,979</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=556" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=556" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>28</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>SADI </TD>
		<TD VALIGN=TOP>Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">1,333,763</TD>
		<TD VALIGN=TOP style="text-align:right;">333,441</TD>
		<TD VALIGN=TOP style="text-align:right;">627,186</TD>
		<TD VALIGN=TOP style="text-align:right;">666,882</TD>
        <TD VALIGN=TOP style="text-align:right;">333,441</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=557" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=557" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>29</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>SAMSUDIN</TD>
		<TD VALIGN=TOP>Contractor</TD>
		<TD VALIGN=TOP style="text-align:right;">4,000,000</TD>
		<TD VALIGN=TOP style="text-align:right;">1,000,000</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">2,000,000</TD>
        <TD VALIGN=TOP style="text-align:right;">1,000,000</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=558" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=558" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>30</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>SUGIANTO</TD>
		<TD VALIGN=TOP>Contractor</TD>
		<TD VALIGN=TOP style="text-align:right;">4,000,000</TD>
		<TD VALIGN=TOP style="text-align:right;">1,000,000</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">2,000,000</TD>
        <TD VALIGN=TOP style="text-align:right;">1,000,000</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=559" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=559" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>31</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>SUPARMAN</TD>
		<TD VALIGN=TOP>Contractor</TD>
		<TD VALIGN=TOP style="text-align:right;">4,000,000</TD>
		<TD VALIGN=TOP style="text-align:right;">1,000,000</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">2,000,000</TD>
        <TD VALIGN=TOP style="text-align:right;">1,000,000</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=560" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=560" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>32</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>SUTEJO</TD>
		<TD VALIGN=TOP>Administration Supervisor</TD>
		<TD VALIGN=TOP style="text-align:right;">1,873,725</TD>
		<TD VALIGN=TOP style="text-align:right;">468,432</TD>
		<TD VALIGN=TOP style="text-align:right;">261,450</TD>
		<TD VALIGN=TOP style="text-align:right;">936,863</TD>
        <TD VALIGN=TOP style="text-align:right;">468,432</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=561" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=561" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>33</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>TAUCHID ROELIANTO</TD>
		<TD VALIGN=TOP>Vice President Operational</TD>
		<TD VALIGN=TOP style="text-align:right;">5,000,000</TD>
		<TD VALIGN=TOP style="text-align:right;">1,250,000</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">2,500,000</TD>
        <TD VALIGN=TOP style="text-align:right;">1,250,000</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=562" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=562" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>34</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>TOMMY ALAMANDA GULTOM</TD>
		<TD VALIGN=TOP>Business Unit Director</TD>
		<TD VALIGN=TOP style="text-align:right;">2,969,820</TD>
		<TD VALIGN=TOP style="text-align:right;">742,455</TD>
		<TD VALIGN=TOP style="text-align:right;">782,840</TD>
		<TD VALIGN=TOP style="text-align:right;">1,484,910</TD>
        <TD VALIGN=TOP style="text-align:right;">742,455</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=563" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=563" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>35</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>USMARYONO</TD>
		<TD VALIGN=TOP>Business Unit Director</TD>
		<TD VALIGN=TOP style="text-align:right;">7,875,000</TD>
		<TD VALIGN=TOP style="text-align:right;">1,968,750</TD>
		<TD VALIGN=TOP style="text-align:right;">750,000</TD>
		<TD VALIGN=TOP style="text-align:right;">3,937,500</TD>
        <TD VALIGN=TOP style="text-align:right;">1,968,750</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=564" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=564" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>36</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>VEICKY DELFIANDRI TAUFIK</TD>
		<TD VALIGN=TOP>Project Manager</TD>
		<TD VALIGN=TOP style="text-align:right;">8,125,000</TD>
		<TD VALIGN=TOP style="text-align:right;">2,031,250</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">4,062,500</TD>
        <TD VALIGN=TOP style="text-align:right;">2,031,250</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=565" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=565" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>37</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>WAHYU SAPUTRO</TD>
		<TD VALIGN=TOP>Advisor</TD>
		<TD VALIGN=TOP style="text-align:right;">1,750,000</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=566" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=566" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>38</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>WINDA</TD>
		<TD VALIGN=TOP>Administration - Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">1,402,875</TD>
		<TD VALIGN=TOP style="text-align:right;">350,719</TD>
		<TD VALIGN=TOP style="text-align:right;">195,750</TD>
		<TD VALIGN=TOP style="text-align:right;">701,437</TD>
        <TD VALIGN=TOP style="text-align:right;">350,719</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=567" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=567" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>39</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>YULYANTO ADI PRABOWO</TD>
		<TD VALIGN=TOP>Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">2,119,373</TD>
		<TD VALIGN=TOP style="text-align:right;">529,844</TD>
		<TD VALIGN=TOP style="text-align:right;">283,245</TD>
		<TD VALIGN=TOP style="text-align:right;">1,059,687</TD>
        <TD VALIGN=TOP style="text-align:right;">529,844</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=568" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=568" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>40</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>AHMAD JAENAL ARIFIN</TD>
		<TD VALIGN=TOP>Office Boy</TD>
		<TD VALIGN=TOP style="text-align:right;">800,000</TD>
		<TD VALIGN=TOP style="text-align:right;">200,000</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">400,000</TD>
        <TD VALIGN=TOP style="text-align:right;">200,000</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=569" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=569" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>41</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>ALI USMAN</TD>
		<TD VALIGN=TOP>Office Boy</TD>
		<TD VALIGN=TOP style="text-align:right;">1,187,875</TD>
		<TD VALIGN=TOP style="text-align:right;">296,968</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">593,937</TD>
        <TD VALIGN=TOP style="text-align:right;">296,968</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=570" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=570" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>42</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>AMRIYANTO</TD>
		<TD VALIGN=TOP>Messenger</TD>
		<TD VALIGN=TOP style="text-align:right;">1,060,657</TD>
		<TD VALIGN=TOP style="text-align:right;">252,538</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">530,328</TD>
        <TD VALIGN=TOP style="text-align:right;">265,164</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=571" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=571" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>43</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>ANANG BUDI SETYAWAN</TD>
		<TD VALIGN=TOP>Contractor</TD>
		<TD VALIGN=TOP style="text-align:right;">4,000,000</TD>
		<TD VALIGN=TOP style="text-align:right;">1,000,000</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">2,000,000</TD>
        <TD VALIGN=TOP style="text-align:right;">1,000,000</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=572" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=572" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>44</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>ANNISA NURUL HIKMAH</TD>
		<TD VALIGN=TOP>HR Supervisor</TD>
		<TD VALIGN=TOP style="text-align:right;">1,750,000</TD>
		<TD VALIGN=TOP style="text-align:right;">437,500</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">875,000</TD>
        <TD VALIGN=TOP style="text-align:right;">437,500</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=573" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=573" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>45</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>ASRI MAULIA RAHMA</TD>
		<TD VALIGN=TOP>Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">1,350,000</TD>
		<TD VALIGN=TOP style="text-align:right;">337,500</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">675,000</TD>
        <TD VALIGN=TOP style="text-align:right;">337,500</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=575" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=575" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>46</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>BANGUN PURWANTO</TD>
		<TD VALIGN=TOP>Administration - Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">1,269,307</TD>
		<TD VALIGN=TOP style="text-align:right;">317,327</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">634,653</TD>
        <TD VALIGN=TOP style="text-align:right;">317,327</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=576" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=576" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>47</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>CERAH SRI IRNANTI</TD>
		<TD VALIGN=TOP>Cashier - Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">859,091</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=578" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=578" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>48</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>CHANDRA CAHYADI</TD>
		<TD VALIGN=TOP>Contractor</TD>
		<TD VALIGN=TOP style="text-align:right;">4,000,000</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=579" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=579" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>49</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>DAMARJATI SAPTO ARIOYUDHO</TD>
		<TD VALIGN=TOP>Administration Supervisor</TD>
		<TD VALIGN=TOP style="text-align:right;">2,625,000</TD>
		<TD VALIGN=TOP style="text-align:right;">656,250</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">1,312,500</TD>
        <TD VALIGN=TOP style="text-align:right;">656,250</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=581" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=581" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>50</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>DANIEL AZIS</TD>
		<TD VALIGN=TOP>Contractor</TD>
		<TD VALIGN=TOP style="text-align:right;">5,000,000</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=582" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=582" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>51</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>DICKY SUHARTO </TD>
		<TD VALIGN=TOP>CEO</TD>
		<TD VALIGN=TOP style="text-align:right;">15,675,000</TD>
		<TD VALIGN=TOP style="text-align:right;">3,581,250</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">7,162,500</TD>
        <TD VALIGN=TOP style="text-align:right;">3,581,250</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=584" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=584" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>52</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>EMILDA SITARA</TD>
		<TD VALIGN=TOP>Marketing Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">2,068,000</TD>
		<TD VALIGN=TOP style="text-align:right;">517,000</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">1,034,000</TD>
        <TD VALIGN=TOP style="text-align:right;">517,000</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=585" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=585" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>53</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>FILYO RONDONUWU</TD>
		<TD VALIGN=TOP>Business Unit Director</TD>
		<TD VALIGN=TOP style="text-align:right;">6,500,000</TD>
		<TD VALIGN=TOP style="text-align:right;">1,250,000</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">3,500,000</TD>
        <TD VALIGN=TOP style="text-align:right;">1,250,000</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=587" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=587" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>54</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>HUSAINI</TD>
		<TD VALIGN=TOP>Contractor</TD>
		<TD VALIGN=TOP style="text-align:right;">5,000,000</TD>
		<TD VALIGN=TOP style="text-align:right;">1,250,000</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">2,500,000</TD>
        <TD VALIGN=TOP style="text-align:right;">1,250,000</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=589" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=589" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>55</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>IHSANUL HAKIM</TD>
		<TD VALIGN=TOP>Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">2,250,000</TD>
		<TD VALIGN=TOP style="text-align:right;">562,500</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">1,125,000</TD>
        <TD VALIGN=TOP style="text-align:right;">562,500</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=590" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=590" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>56</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>INDAH DWI ARIANI</TD>
		<TD VALIGN=TOP>Secretary</TD>
		<TD VALIGN=TOP style="text-align:right;">1,750,000</TD>
		<TD VALIGN=TOP style="text-align:right;">437,500</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">875,000</TD>
        <TD VALIGN=TOP style="text-align:right;">437,500</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=591" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=591" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>57</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>IVAN SADDAM ARDINGHI SIREGAR</TD>
		<TD VALIGN=TOP>Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">2,642,377</TD>
		<TD VALIGN=TOP style="text-align:right;">630,568</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">1,321,189</TD>
        <TD VALIGN=TOP style="text-align:right;">630,568</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=592" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=592" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>58</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>JYALITA NITI HANDIPANI</TD>
		<TD VALIGN=TOP>Administration - Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">1,500,000</TD>
		<TD VALIGN=TOP style="text-align:right;">375,000</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">750,000</TD>
        <TD VALIGN=TOP style="text-align:right;">375,000</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=593" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=593" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>59</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>KIKI ANUGRAH MAHARANI</TD>
		<TD VALIGN=TOP>Marketing Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">2,118,645</TD>
		<TD VALIGN=TOP style="text-align:right;">563,988</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">1,059,323</TD>
        <TD VALIGN=TOP style="text-align:right;">563,988</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=594" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=594" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>60</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>MOCH. ANWAR JULISUSANTO</TD>
		<TD VALIGN=TOP>Sales Engineer</TD>
		<TD VALIGN=TOP style="text-align:right;">2,750,000</TD>
		<TD VALIGN=TOP style="text-align:right;">687,500</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">1,375,000</TD>
        <TD VALIGN=TOP style="text-align:right;">687,500</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=596" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=596" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>61</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>MARIANA </TD>
		<TD VALIGN=TOP>Finance Supervisor</TD>
		<TD VALIGN=TOP style="text-align:right;">2,500,000</TD>
		<TD VALIGN=TOP style="text-align:right;">625,000</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">1,250,000</TD>
        <TD VALIGN=TOP style="text-align:right;">625,000</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=597" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=597" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>62</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>MUHAMMAD IQBAL IBRAHIM</TD>
		<TD VALIGN=TOP>QHSE Officer</TD>
		<TD VALIGN=TOP style="text-align:right;">1,600,000</TD>
		<TD VALIGN=TOP style="text-align:right;">400,000</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">800,000</TD>
        <TD VALIGN=TOP style="text-align:right;">400,000</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=598" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=598" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>63</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>MUH GULUH</TD>
		<TD VALIGN=TOP>Contractor</TD>
		<TD VALIGN=TOP style="text-align:right;">4,000,000</TD>
		<TD VALIGN=TOP style="text-align:right;">1,000,000</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">2,000,000</TD>
        <TD VALIGN=TOP style="text-align:right;">1,000,000</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=599" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=599" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>64</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>MUNAWAR ZEGA</TD>
		<TD VALIGN=TOP>Support Manager</TD>
		<TD VALIGN=TOP style="text-align:right;">7,250,000</TD>
		<TD VALIGN=TOP style="text-align:right;">1,812,500</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">3,625,000</TD>
        <TD VALIGN=TOP style="text-align:right;">1,812,500</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=603" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=603" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>65</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>PANDUJATI</TD>
		<TD VALIGN=TOP>Vice President Support</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=604" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=604" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>66</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>POETRI ERWANDA SEPTIYANTI</TD>
		<TD VALIGN=TOP>Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">2,255,951</TD>
		<TD VALIGN=TOP style="text-align:right;">563,988</TD>
		<TD VALIGN=TOP style="text-align:right;">1,000,000</TD>
		<TD VALIGN=TOP style="text-align:right;">1,127,976</TD>
        <TD VALIGN=TOP style="text-align:right;">563,988</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=606" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=606" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>67</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>RIKA RAHIMDY</TD>
		<TD VALIGN=TOP>Administration - Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">1,567,912</TD>
		<TD VALIGN=TOP style="text-align:right;">391,979</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">783,957</TD>
        <TD VALIGN=TOP style="text-align:right;">391,979</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=608" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=608" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>68</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>SADI </TD>
		<TD VALIGN=TOP>Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">1,333,763</TD>
		<TD VALIGN=TOP style="text-align:right;">333,441</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">666,882</TD>
        <TD VALIGN=TOP style="text-align:right;">333,441</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=610" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=610" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>69</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>SAMSUDIN</TD>
		<TD VALIGN=TOP>Contractor</TD>
		<TD VALIGN=TOP style="text-align:right;">4,000,000</TD>
		<TD VALIGN=TOP style="text-align:right;">1,000,000</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">2,000,000</TD>
        <TD VALIGN=TOP style="text-align:right;">1,000,000</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=611" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=611" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>70</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>SUGIANTO</TD>
		<TD VALIGN=TOP>Contractor</TD>
		<TD VALIGN=TOP style="text-align:right;">4,000,000</TD>
		<TD VALIGN=TOP style="text-align:right;">1,000,000</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">2,000,000</TD>
        <TD VALIGN=TOP style="text-align:right;">1,000,000</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=613" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=613" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>71</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>SUPARMAN</TD>
		<TD VALIGN=TOP>Contractor</TD>
		<TD VALIGN=TOP style="text-align:right;">4,000,000</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=615" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=615" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>72</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>SUTEJO</TD>
		<TD VALIGN=TOP>Administration Supervisor</TD>
		<TD VALIGN=TOP style="text-align:right;">1,873,725</TD>
		<TD VALIGN=TOP style="text-align:right;">468,432</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">936,863</TD>
        <TD VALIGN=TOP style="text-align:right;">468,432</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=616" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=616" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>73</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>TAUCHID ROELIANTO</TD>
		<TD VALIGN=TOP>Vice President Operational</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=617" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=617" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>74</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>TOMMY ALAMANDA GULTOM</TD>
		<TD VALIGN=TOP>Business Unit Director</TD>
		<TD VALIGN=TOP style="text-align:right;">2,969,820</TD>
		<TD VALIGN=TOP style="text-align:right;">742,455</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">1,484,910</TD>
        <TD VALIGN=TOP style="text-align:right;">742,455</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=619" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=619" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>75</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>USMARYONO</TD>
		<TD VALIGN=TOP>Business Unit Director</TD>
		<TD VALIGN=TOP style="text-align:right;">7,875,000</TD>
		<TD VALIGN=TOP style="text-align:right;">1,968,750</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">3,937,500</TD>
        <TD VALIGN=TOP style="text-align:right;">1,968,750</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=620" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=620" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>76</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>VEICKY DELFIANDRI TAUFIK</TD>
		<TD VALIGN=TOP>Project Manager</TD>
		<TD VALIGN=TOP style="text-align:right;">8,125,000</TD>
		<TD VALIGN=TOP style="text-align:right;">1,938,920</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">4,062,500</TD>
        <TD VALIGN=TOP style="text-align:right;">1,938,920</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=621" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=621" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>77</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>WAHYU SAPUTRO</TD>
		<TD VALIGN=TOP>Advisor</TD>
		<TD VALIGN=TOP style="text-align:right;">1,750,000</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=622" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=622" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>78</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>WINDA</TD>
		<TD VALIGN=TOP>Administration - Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">1,402,875</TD>
		<TD VALIGN=TOP style="text-align:right;">350,719</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">701,437</TD>
        <TD VALIGN=TOP style="text-align:right;">350,719</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=623" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=623" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>79</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>YULYANTO ADI PRABOWO</TD>
		<TD VALIGN=TOP>Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">2,119,373</TD>
		<TD VALIGN=TOP style="text-align:right;">529,844</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">1,059,687</TD>
        <TD VALIGN=TOP style="text-align:right;">529,844</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=626" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=626" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR>
       <TD VALIGN=TOP align=center>80</TD>
		<TD VALIGN=TOP align=center>082015</TD>
        <TD VALIGN=TOP>NUFRI WILIS</TD>
		<TD VALIGN=TOP>Accounting Supervisor</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">2,222,222</TD>
		<TD VALIGN=TOP style="text-align:right;">2,222,222</TD>
		<TD VALIGN=TOP style="text-align:right;">2,222,222</TD>
        <TD VALIGN=TOP style="text-align:right;">2,222,222</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=635" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=635" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
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