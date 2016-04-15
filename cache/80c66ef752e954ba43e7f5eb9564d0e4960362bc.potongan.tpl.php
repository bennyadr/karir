<?php
/*%%SmartyHeaderCode:2719156dcf7eeb28619_56753649%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80c66ef752e954ba43e7f5eb9564d0e4960362bc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\potongan.tpl',
      1 => 1456119229,
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
  'nocache_hash' => '2719156dcf7eeb28619_56753649',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'unite' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56dcf7ef9dbbb3_15740681',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56dcf7ef9dbbb3_15740681')) {
function content_56dcf7ef9dbbb3_15740681 ($_smarty_tpl) {
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
					<h3>Daftar Potongan<small>Informasi Potongan Pegawai</small></h3>
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
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Potongan</h6></div>
			                <table id="example" class="table table-striped table-bordered table-hover" style="width:100%; ">
              <thead>
              <tr>
	  			  <th style="width:1%;text-align:center;">No</th>
				  <th style="width:2%;text-align:center;">Periode</th>
				  <th style="width:8%;text-align:center;">Nama</th>
				  <th style="width:8%;text-align:center;">Jabatan</th>
				  <th style="width:2%;text-align:center;">PPH21</th>
				  <th style="width:2%;text-align:center;">JHT(2%)</th>
				  <th style="width:2%;text-align:center;">Pot. Lain</th>
				  <th style="width:2%;text-align:center;">Pinjaman</th>
				<th style="width:2%;text-align:center;">OPTION</th>
				 </tr>
              </thead>
              <tbody>
                 <TR >
        <TD VALIGN=TOP align=center>1</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>AHMAD JAENAL ARIFIN</TD>
		<TD VALIGN=TOP >Office Boy</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">24,000</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1083" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1083" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>2</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>ALI USMAN</TD>
		<TD VALIGN=TOP >Office Boy</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">35,636</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1085" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1085" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>3</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>AMRIYANTO</TD>
		<TD VALIGN=TOP >Messenger</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">31,820</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1086" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1086" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>4</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>ANANG BUDI SETYAWAN</TD>
		<TD VALIGN=TOP >Contractor</TD>
		<TD VALIGN=TOP style="text-align:right;">372,400</TD>
		<TD VALIGN=TOP style="text-align:right;">120,000</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1087" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1087" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>5</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>ANNISA NURUL HIKMAH</TD>
		<TD VALIGN=TOP >HR Supervisor</TD>
		<TD VALIGN=TOP style="text-align:right;">19,200</TD>
		<TD VALIGN=TOP style="text-align:right;">45,000</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1088" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1088" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>6</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>ASRI MAULIA RAHMA</TD>
		<TD VALIGN=TOP >Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1090" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1090" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>7</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>BANGUN PURWANTO</TD>
		<TD VALIGN=TOP >Administration - Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">17,100</TD>
		<TD VALIGN=TOP style="text-align:right;">38,079</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1091" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1091" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>8</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>CHANDRA CAHYADI</TD>
		<TD VALIGN=TOP >Contractor</TD>
		<TD VALIGN=TOP style="text-align:right;">372,400</TD>
		<TD VALIGN=TOP style="text-align:right;">120,000</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1093" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1093" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>9</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>DAMARJATI SAPTO ARIOYUDHO</TD>
		<TD VALIGN=TOP >Administration Supervisor</TD>
		<TD VALIGN=TOP style="text-align:right;">139,000</TD>
		<TD VALIGN=TOP style="text-align:right;">78,750</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1095" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1095" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>10</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>DANIEL AZIS</TD>
		<TD VALIGN=TOP >Contractor</TD>
		<TD VALIGN=TOP style="text-align:right;">372,400</TD>
		<TD VALIGN=TOP style="text-align:right;">150,000</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1096" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1096" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>11</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>DICKY SUHARTO </TD>
		<TD VALIGN=TOP >CEO</TD>
		<TD VALIGN=TOP style="text-align:right;">2,971,600</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1098" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1098" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>12</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>EMILDA SITARA</TD>
		<TD VALIGN=TOP >Marketing Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">97,700</TD>
		<TD VALIGN=TOP style="text-align:right;">62,040</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1099" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1099" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>13</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>FILYO RONDONUWU</TD>
		<TD VALIGN=TOP >Business Unit Director</TD>
		<TD VALIGN=TOP style="text-align:right;">675,900</TD>
		<TD VALIGN=TOP style="text-align:right;">150,000</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1101" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1101" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>14</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>HUSAINI</TD>
		<TD VALIGN=TOP >Contractor</TD>
		<TD VALIGN=TOP style="text-align:right;">675,900</TD>
		<TD VALIGN=TOP style="text-align:right;">150,000</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1102" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1102" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>15</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>IHSANUL HAKIM</TD>
		<TD VALIGN=TOP >Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1103" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1103" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>16</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>INDAH DWI ARIANI</TD>
		<TD VALIGN=TOP >Secretary</TD>
		<TD VALIGN=TOP style="text-align:right;">19,200</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1104" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1104" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>17</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>IVAN SADDAM ARDINGHI SIREGAR</TD>
		<TD VALIGN=TOP >Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">147,500</TD>
		<TD VALIGN=TOP style="text-align:right;">79,271</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1105" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1105" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>18</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>JYALITA NITI HANDIPANI</TD>
		<TD VALIGN=TOP >Administration - Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">19,200</TD>
		<TD VALIGN=TOP style="text-align:right;">45,000</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1106" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1106" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>19</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>KIKI ANUGRAH MAHARANI</TD>
		<TD VALIGN=TOP >Marketing Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">103,100</TD>
		<TD VALIGN=TOP style="text-align:right;">63,559</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1107" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1107" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>20</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>MOCH. ANWAR JULISUSANTO</TD>
		<TD VALIGN=TOP >Sales Engineer</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">82,500</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1109" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1109" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>21</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>MARIANA </TD>
		<TD VALIGN=TOP >Finance Supervisor</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1110" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1110" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>22</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>MUHAMMAD IQBAL IBRAHIM</TD>
		<TD VALIGN=TOP >QHSE Officer</TD>
		<TD VALIGN=TOP style="text-align:right;">19,200</TD>
		<TD VALIGN=TOP style="text-align:right;">48,000</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1111" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1111" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>23</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>MUH GULUH</TD>
		<TD VALIGN=TOP >Contractor</TD>
		<TD VALIGN=TOP style="text-align:right;">372,400</TD>
		<TD VALIGN=TOP style="text-align:right;">120,000</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1112" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1112" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>24</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>MUNAWAR ZEGA</TD>
		<TD VALIGN=TOP >Support Manager</TD>
		<TD VALIGN=TOP style="text-align:right;">1,226,700</TD>
		<TD VALIGN=TOP style="text-align:right;">135,000</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1114" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1114" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>25</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>PANDUJATI</TD>
		<TD VALIGN=TOP >Vice President Support</TD>
		<TD VALIGN=TOP style="text-align:right;">146,700</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1115" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1115" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>26</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>POETRI ERWANDA SEPTIYANTI</TD>
		<TD VALIGN=TOP >Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">114,900</TD>
		<TD VALIGN=TOP style="text-align:right;">67,679</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">1,333,255</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1116" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1116" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>27</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>RIKA RAHIMDY</TD>
		<TD VALIGN=TOP >Administration - Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">49,600</TD>
		<TD VALIGN=TOP style="text-align:right;">47,037</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1117" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1117" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>28</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>SADI </TD>
		<TD VALIGN=TOP >Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">23,900</TD>
		<TD VALIGN=TOP style="text-align:right;">40,013</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1118" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1118" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>29</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>SAMSUDIN</TD>
		<TD VALIGN=TOP >Contractor</TD>
		<TD VALIGN=TOP style="text-align:right;">372,400</TD>
		<TD VALIGN=TOP style="text-align:right;">120,000</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1119" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1119" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>30</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>SUGIANTO</TD>
		<TD VALIGN=TOP >Contractor</TD>
		<TD VALIGN=TOP style="text-align:right;">372,400</TD>
		<TD VALIGN=TOP style="text-align:right;">120,000</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1120" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1120" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>31</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>SUPARMAN</TD>
		<TD VALIGN=TOP >Contractor</TD>
		<TD VALIGN=TOP style="text-align:right;">372,400</TD>
		<TD VALIGN=TOP style="text-align:right;">120,000</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1121" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1121" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>32</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>SUTEJO</TD>
		<TD VALIGN=TOP >Administration Supervisor</TD>
		<TD VALIGN=TOP style="text-align:right;">69,400</TD>
		<TD VALIGN=TOP style="text-align:right;">56,212</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1122" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1122" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>33</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>TAUCHID ROELIANTO</TD>
		<TD VALIGN=TOP >Vice President Operational</TD>
		<TD VALIGN=TOP style="text-align:right;">777,200</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1123" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1123" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>34</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>TOMMY ALAMANDA GULTOM</TD>
		<TD VALIGN=TOP >Business Unit Director</TD>
		<TD VALIGN=TOP style="text-align:right;">146,100</TD>
		<TD VALIGN=TOP style="text-align:right;">89,095</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1124" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1124" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>35</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>USMARYONO</TD>
		<TD VALIGN=TOP >Business Unit Director</TD>
		<TD VALIGN=TOP style="text-align:right;">1,466,000</TD>
		<TD VALIGN=TOP style="text-align:right;">157,500</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1125" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1125" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>36</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>VEICKY DELFIANDRI TAUFIK</TD>
		<TD VALIGN=TOP >Project Manager</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">162,500</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1126" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1126" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>37</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>WAHYU SAPUTRO</TD>
		<TD VALIGN=TOP >Advisor</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1127" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1127" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>38</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>WINDA</TD>
		<TD VALIGN=TOP >Administration - Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">42,086</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1128" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1128" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>39</TD>
		<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP>YULYANTO ADI PRABOWO</TD>
		<TD VALIGN=TOP >Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">96,600</TD>
		<TD VALIGN=TOP style="text-align:right;">63,581</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1129" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1129" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>40</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>AHMAD JAENAL ARIFIN</TD>
		<TD VALIGN=TOP >Office Boy</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">24,000</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1130" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1130" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>41</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>ALI USMAN</TD>
		<TD VALIGN=TOP >Office Boy</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">35,636</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1131" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1131" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>42</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>AMRIYANTO</TD>
		<TD VALIGN=TOP >Messenger</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">31,820</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1132" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1132" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>43</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>ANANG BUDI SETYAWAN</TD>
		<TD VALIGN=TOP >Contractor</TD>
		<TD VALIGN=TOP style="text-align:right;">372,400</TD>
		<TD VALIGN=TOP style="text-align:right;">120,000</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1133" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1133" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>44</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>ANNISA NURUL HIKMAH</TD>
		<TD VALIGN=TOP >HR Supervisor</TD>
		<TD VALIGN=TOP style="text-align:right;">19,200</TD>
		<TD VALIGN=TOP style="text-align:right;">52,500</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1134" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1134" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>45</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>ASRI MAULIA RAHMA</TD>
		<TD VALIGN=TOP >Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">19,200</TD>
		<TD VALIGN=TOP style="text-align:right;">40,500</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1136" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1136" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>46</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>BANGUN PURWANTO</TD>
		<TD VALIGN=TOP >Administration - Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">17,100</TD>
		<TD VALIGN=TOP style="text-align:right;">38,079</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1137" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1137" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>47</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>CERAH SRI IRNANTI</TD>
		<TD VALIGN=TOP >Cashier - Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">17,182</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1139" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1139" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>48</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>CHANDRA CAHYADI</TD>
		<TD VALIGN=TOP >Contractor</TD>
		<TD VALIGN=TOP style="text-align:right;">372,400</TD>
		<TD VALIGN=TOP style="text-align:right;">80,000</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1140" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1140" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>49</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>DAMARJATI SAPTO ARIOYUDHO</TD>
		<TD VALIGN=TOP >Administration Supervisor</TD>
		<TD VALIGN=TOP style="text-align:right;">139,000</TD>
		<TD VALIGN=TOP style="text-align:right;">78,750</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1142" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1142" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>50</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>DANIEL AZIS</TD>
		<TD VALIGN=TOP >Contractor</TD>
		<TD VALIGN=TOP style="text-align:right;">372,400</TD>
		<TD VALIGN=TOP style="text-align:right;">100,000</TD>
        <TD VALIGN=TOP style="text-align:right;">1,000,000</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1143" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1143" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>51</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>DICKY SUHARTO </TD>
		<TD VALIGN=TOP >CEO</TD>
		<TD VALIGN=TOP style="text-align:right;">2,971,600</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1145" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1145" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>52</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>EMILDA SITARA</TD>
		<TD VALIGN=TOP >Marketing Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">97,700</TD>
		<TD VALIGN=TOP style="text-align:right;">62,040</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1146" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1146" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>53</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>FILYO RONDONUWU</TD>
		<TD VALIGN=TOP >Business Unit Director</TD>
		<TD VALIGN=TOP style="text-align:right;">675,900</TD>
		<TD VALIGN=TOP style="text-align:right;">200,000</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1148" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1148" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>54</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>HUSAINI</TD>
		<TD VALIGN=TOP >Contractor</TD>
		<TD VALIGN=TOP style="text-align:right;">675,900</TD>
		<TD VALIGN=TOP style="text-align:right;">150,000</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1150" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1150" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>55</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>IHSANUL HAKIM</TD>
		<TD VALIGN=TOP >Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">19,200</TD>
		<TD VALIGN=TOP style="text-align:right;">67,500</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1151" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1151" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>56</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>INDAH DWI ARIANI</TD>
		<TD VALIGN=TOP >Secretary</TD>
		<TD VALIGN=TOP style="text-align:right;">19,200</TD>
		<TD VALIGN=TOP style="text-align:right;">52,500</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1152" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1152" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>57</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>IVAN SADDAM ARDINGHI SIREGAR</TD>
		<TD VALIGN=TOP >Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">147,500</TD>
		<TD VALIGN=TOP style="text-align:right;">79,271</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1153" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1153" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>58</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>JYALITA NITI HANDIPANI</TD>
		<TD VALIGN=TOP >Administration - Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">19,200</TD>
		<TD VALIGN=TOP style="text-align:right;">45,000</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1154" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1154" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>59</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>KIKI ANUGRAH MAHARANI</TD>
		<TD VALIGN=TOP >Marketing Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">103,100</TD>
		<TD VALIGN=TOP style="text-align:right;">63,559</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1155" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1155" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>60</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>MOCH. ANWAR JULISUSANTO</TD>
		<TD VALIGN=TOP >Sales Engineer</TD>
		<TD VALIGN=TOP style="text-align:right;">146,700</TD>
		<TD VALIGN=TOP style="text-align:right;">82,500</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1157" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1157" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>61</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>MARIANA </TD>
		<TD VALIGN=TOP >Finance Supervisor</TD>
		<TD VALIGN=TOP style="text-align:right;">588,700</TD>
		<TD VALIGN=TOP style="text-align:right;">75,000</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1158" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1158" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>62</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>MUHAMMAD IQBAL IBRAHIM</TD>
		<TD VALIGN=TOP >QHSE Officer</TD>
		<TD VALIGN=TOP style="text-align:right;">19,200</TD>
		<TD VALIGN=TOP style="text-align:right;">48,000</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1159" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1159" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>63</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>MUH GULUH</TD>
		<TD VALIGN=TOP >Contractor</TD>
		<TD VALIGN=TOP style="text-align:right;">372,400</TD>
		<TD VALIGN=TOP style="text-align:right;">120,000</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1160" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1160" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>64</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>MUNAWAR ZEGA</TD>
		<TD VALIGN=TOP >Support Manager</TD>
		<TD VALIGN=TOP style="text-align:right;">1,226,700</TD>
		<TD VALIGN=TOP style="text-align:right;">145,000</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1164" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1164" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>65</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>PANDUJATI</TD>
		<TD VALIGN=TOP >Vice President Support</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1165" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1165" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>66</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>POETRI ERWANDA SEPTIYANTI</TD>
		<TD VALIGN=TOP >Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">114,900</TD>
		<TD VALIGN=TOP style="text-align:right;">67,679</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1167" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1167" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>67</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>RIKA RAHIMDY</TD>
		<TD VALIGN=TOP >Administration - Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">49,600</TD>
		<TD VALIGN=TOP style="text-align:right;">47,037</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1169" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1169" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>68</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>SADI </TD>
		<TD VALIGN=TOP >Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">23,900</TD>
		<TD VALIGN=TOP style="text-align:right;">40,013</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1171" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1171" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>69</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>SAMSUDIN</TD>
		<TD VALIGN=TOP >Contractor</TD>
		<TD VALIGN=TOP style="text-align:right;">372,400</TD>
		<TD VALIGN=TOP style="text-align:right;">120,000</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1172" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1172" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>70</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>SUGIANTO</TD>
		<TD VALIGN=TOP >Contractor</TD>
		<TD VALIGN=TOP style="text-align:right;">372,400</TD>
		<TD VALIGN=TOP style="text-align:right;">120,000</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1174" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1174" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>71</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>SUPARMAN</TD>
		<TD VALIGN=TOP >Contractor</TD>
		<TD VALIGN=TOP style="text-align:right;">372,400</TD>
		<TD VALIGN=TOP style="text-align:right;">80,000</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1176" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1176" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>72</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>SUTEJO</TD>
		<TD VALIGN=TOP >Administration Supervisor</TD>
		<TD VALIGN=TOP style="text-align:right;">69,400</TD>
		<TD VALIGN=TOP style="text-align:right;">56,212</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1177" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1177" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>73</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>TAUCHID ROELIANTO</TD>
		<TD VALIGN=TOP >Vice President Operational</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1178" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1178" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>74</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>TOMMY ALAMANDA GULTOM</TD>
		<TD VALIGN=TOP >Business Unit Director</TD>
		<TD VALIGN=TOP style="text-align:right;">146,100</TD>
		<TD VALIGN=TOP style="text-align:right;">89,095</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1180" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1180" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>75</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>USMARYONO</TD>
		<TD VALIGN=TOP >Business Unit Director</TD>
		<TD VALIGN=TOP style="text-align:right;">1,466,000</TD>
		<TD VALIGN=TOP style="text-align:right;">157,500</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1181" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1181" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>76</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>VEICKY DELFIANDRI TAUFIK</TD>
		<TD VALIGN=TOP >Project Manager</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">162,500</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1182" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1182" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>77</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>WAHYU SAPUTRO</TD>
		<TD VALIGN=TOP >Advisor</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1183" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1183" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>78</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>WINDA</TD>
		<TD VALIGN=TOP >Administration - Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">42,086</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1184" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1184" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>79</TD>
		<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP>YULYANTO ADI PRABOWO</TD>
		<TD VALIGN=TOP >Staff</TD>
		<TD VALIGN=TOP style="text-align:right;">96,600</TD>
		<TD VALIGN=TOP style="text-align:right;">63,581</TD>
        <TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD VALIGN=TOP style="text-align:right;">0</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1187" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1187" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
        </TD>          
        <TR >
        <TD VALIGN=TOP align=center>80</TD>
		<TD VALIGN=TOP align=center>082015</TD>
        <TD VALIGN=TOP>NUFRI WILIS</TD>
		<TD VALIGN=TOP >Accounting Supervisor</TD>
		<TD VALIGN=TOP style="text-align:right;">222,222</TD>
		<TD VALIGN=TOP style="text-align:right;">1,111,111</TD>
        <TD VALIGN=TOP style="text-align:right;">1,111,111</TD>
		<TD VALIGN=TOP style="text-align:right;">1,111,111</TD>
		<TD style="text-align:center;">
            <a href="?action=edit&id=1195" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a> 
            <a href="?action=del&id=del&id=1195" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
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