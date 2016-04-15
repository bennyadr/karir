<?php
/*%%SmartyHeaderCode:1679657029a6d451ae3_64138606%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cd868d4d0dd0326140ccb18d2aba69fa2822c15' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karir\\templates\\employee.tpl',
      1 => 1456293966,
      2 => 'file',
    ),
    'c35f576cdadeaf749e52d9c4f71f8b8e386d3203' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karir\\templates\\header.tpl',
      1 => 1458188498,
      2 => 'file',
    ),
    '2527243d118472ae5b699e4cc0b8e1f892cbf895' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karir\\templates\\pengelola.tpl',
      1 => 1456301560,
      2 => 'file',
    ),
    '13aacec472de38201bb15fd18a7e54b2c7aff444' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karir\\templates\\mainnav.tpl',
      1 => 1459750727,
      2 => 'file',
    ),
    'de2b6711481e58d8ed9cdc4d37d7abac51ab1f6b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karir\\templates\\breadcrumb.tpl',
      1 => 1458198476,
      2 => 'file',
    ),
    'e1e3a632bcaaa5aac4ab979dfc088b7095e354f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karir\\templates\\footer.tpl',
      1 => 1453872114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1679657029a6d451ae3_64138606',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'unite' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57029a703fc489_06670362',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57029a703fc489_06670362')) {
function content_57029a703fc489_06670362 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
<title>Sistem Informasi Karir Pegawai</title>

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
			<a class="navbar-brand" style="margin-top:-4px;" href="index.php?action=showmenu"><title="Sistem Informasi Pegawai" alt="Sistem Informasi Karir Pegawai">Karir Pegawai</a>
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
					<li><a href="#"><span>Master</span> <i class="icon-accessibility"></i></a>
					<ul>
							<li  class="active" ><a href="employee.php">Database Pegawai</a></li>
							<li ><a href="pendidikan.php">Pendidikan</a></li>
							<li ><a href="eselon.php">Eselon</a></li>
							<li ><a href="unitkerja.php">Unit Kerja</a></li>
							<li ><a href="jabatan.php">Jabatan</a></li>
							<li ><a href="kelompok.php">Kelompok Jabatan</a></li>
							<li ><a href="tingkat.php">Tingkat Jabatan</a></li>
							<li ><a href="kamus.php">Kamus Kompetensi</a></li>
							<li ><a href="matrik.php">Matrik Kompetensi</a></li>
							<li ><a href="arah.php">Arah Karir</a></li>
					</ul>
					</li>
					<li><a href="#"><span>Karir</span> <i class="icon-clipboard"></i></a>
					<ul>
							<li ><a href="kompetensi.php">Kompetensi Jabatan</a></li>
							<li ><a href="pengukuran.php">Pengukuran Kompetensi Pegawai</a></li>
							<li ><a href="#">Hasil Pengukuran Kompetensi</a></li>
							<li ><a href="#">Kinerja Pegawai</a></li>
							<li ><a href="#">Peluang Karir (Jabatan)</a></li>
							<li ><a href="#">Posisi Jabatan Kosong</a></li>
							<li ><a href="#">Peluang Karir Pegawai</a></li>
							<li ><a href="#">Calon Pemegang Jabatan</a></li>
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
					<h3>Database Pegawai<small>Informasi Data Pegawai</small></h3>
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
					 <li class="active">Data Pegawai</li>					 					 					 					 					 					 					 					 					 					 					 					 					 					 					 					 					 				</ul>
				<div class="visible-xs breadcrumb-toggle">
					<a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
				</div>
			</div>

				<!-- /main navigation -->
			<!-- /breadcrumbs line -->
			<!-- Table inside panel body -->
			            
			               
				<div class="table-controls">
					<p style="text-align:left;">
						<a href="?action=add" class="btn btn-success btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>
							<input class="btn btn-default" type=button value="Export to Excel " onClick="javascript:window.location='export.php'" class=Button1>
							<input class="btn btn-primary" type=button value="View Karyawan Tidak Aktif " onClick="javascript:window.location='employee.php?action=tidakaktif'" class=Button1>
				    </p>
				</div>
							<!-- Striped datatable inside panel -->
			    <div class="panel panel-success">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Pegawai</h6></div>
			                <table id="example" class="table table-striped table-bordered table-hover" style="width:100%; ">
              <thead>
              <tr>
	  			  <th style="width:1%;text-align:center;">No</th>
				  <th style="width:2%;text-align:center;">NIK</th>
				  <th style="width:3%;text-align:center;">Nama</th>
				  <th style="width:6%;text-align:center;">Jabatan</th>
				  <th style="width:3%;text-align:center;">Departemen</th>
				  <th style="width:3%;text-align:center;">File Upload</th>
				  <th style="width:4%;text-align:center;">Foto</th>
				  <th style="width:4%;text-align:center;">OPTION</th>
	 </tr>
              </thead>
              <tbody>
		   <tr>
    	<TD VALIGN=TOP align=center>1</TD>
    	<TD VALIGN=TOP>01408019</TD>
    	<TD VALIGN=TOP>DIRGA NUR SWASONO</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=1">Lihat Upload</a></TD>

		<TD style="text-align:center;"><a href=upload_foto.php?action=edit&idpeg=1><img src='gambar/01408019_dirga.jpg' border=0 width=80px height=100px></a></TD>
	<!--a title='upload foto' href=upload.php?action=<br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>146</b><br />
&kodeEmp=1><br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>148</b><br />
</a-->
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=1" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=1" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=1" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>2</TD>
    	<TD VALIGN=TOP>14028304016</TD>
    	<TD VALIGN=TOP>RIKA RAHIMDY</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Operation Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=2">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=2">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=2" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=2" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=2" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>3</TD>
    	<TD VALIGN=TOP>13059209008</TD>
    	<TD VALIGN=TOP>AMRIYANTO</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Support Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=3">Lihat Upload</a></TD>

		<TD style="text-align:center;"><a href=upload_foto.php?action=edit&idpeg=3><img src='gambar/Amry.jpg' border=0 width=80px height=100px></a></TD>
	<!--a title='upload foto' href=upload.php?action=<br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>146</b><br />
&kodeEmp=3><br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>148</b><br />
</a-->
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=3" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=3" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=3" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>4</TD>
    	<TD VALIGN=TOP>13048909006</TD>
    	<TD VALIGN=TOP>POETRI ERWANDA SEPTIYANTI</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Project Unit</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=4">Lihat Upload</a></TD>

		<TD style="text-align:center;"><a href=upload_foto.php?action=edit&idpeg=4><img src='gambar/putri.jpg' border=0 width=80px height=100px></a></TD>
	<!--a title='upload foto' href=upload.php?action=<br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>146</b><br />
&kodeEmp=4><br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>148</b><br />
</a-->
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=4" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=4" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=4" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>5</TD>
    	<TD VALIGN=TOP>0113009</TD>
    	<TD VALIGN=TOP>TOMMY ALAMANDA GULTOM</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=5">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=5">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=5" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=5" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=5" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>6</TD>
    	<TD VALIGN=TOP>13018209003</TD>
    	<TD VALIGN=TOP>SUTEJO</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Utilities Unit</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=6">Lihat Upload</a></TD>

		<TD style="text-align:center;"><a href=upload_foto.php?action=edit&idpeg=6><img src='gambar/sutejo.jpg' border=0 width=80px height=100px></a></TD>
	<!--a title='upload foto' href=upload.php?action=<br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>146</b><br />
&kodeEmp=6><br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>148</b><br />
</a-->
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=6" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=6" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=6" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>7</TD>
    	<TD VALIGN=TOP>11890413006</TD>
    	<TD VALIGN=TOP>BAYU NOPRIYANTONO</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Utilities Unit</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=7">Lihat Upload</a></TD>

		<TD style="text-align:center;"><a href=upload_foto.php?action=edit&idpeg=7><img src='gambar/bayu.jpg' border=0 width=80px height=100px></a></TD>
	<!--a title='upload foto' href=upload.php?action=<br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>146</b><br />
&kodeEmp=7><br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>148</b><br />
</a-->
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=7" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=7" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=7" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>8</TD>
    	<TD VALIGN=TOP>15037601057</TD>
    	<TD VALIGN=TOP>ARRY ARMAT</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Project Unit</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=58">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=58">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=58" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=58" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=58" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>9</TD>
    	<TD VALIGN=TOP>01203003</TD>
    	<TD VALIGN=TOP>AHMAD YANI </TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Support Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=8">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=8">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=8" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=8" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=8" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>10</TD>
    	<TD VALIGN=TOP>13018810004</TD>
    	<TD VALIGN=TOP>SADI </TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Project Unit</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=9">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=9">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=9" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=9" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=9" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>11</TD>
    	<TD VALIGN=TOP>01303013</TD>
    	<TD VALIGN=TOP>RINA WAHYU ANNISA</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Support Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=10">Lihat Upload</a></TD>

		<TD style="text-align:center;"><a href=upload_foto.php?action=edit&idpeg=10><img src='gambar/01303013_rina.jpg' border=0 width=80px height=100px></a></TD>
	<!--a title='upload foto' href=upload.php?action=<br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>146</b><br />
&kodeEmp=11><br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>148</b><br />
</a-->
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=10" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=10" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=10" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>12</TD>
    	<TD VALIGN=TOP>01304014</TD>
    	<TD VALIGN=TOP>NOVIA ZULFA HANUM</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>QHSE Unit</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=11">Lihat Upload</a></TD>

		<TD style="text-align:center;"><a href=upload_foto.php?action=edit&idpeg=11><img src='gambar/01304014_novia.jpg' border=0 width=80px height=100px></a></TD>
	<!--a title='upload foto' href=upload.php?action=<br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>146</b><br />
&kodeEmp=12><br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>148</b><br />
</a-->
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=11" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=11" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=11" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>13</TD>
    	<TD VALIGN=TOP>01302015</TD>
    	<TD VALIGN=TOP>IKROM KASIONO</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=12">Lihat Upload</a></TD>

		<TD style="text-align:center;"><a href=upload_foto.php?action=edit&idpeg=12><img src='gambar/01302015_ikrom.jpg' border=0 width=80px height=100px></a></TD>
	<!--a title='upload foto' href=upload.php?action=<br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>146</b><br />
&kodeEmp=13><br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>148</b><br />
</a-->
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=12" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=12" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=12" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>14</TD>
    	<TD VALIGN=TOP>01306016</TD>
    	<TD VALIGN=TOP>MUIZZ SIDIQ</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=13">Lihat Upload</a></TD>

		<TD style="text-align:center;"><a href=upload_foto.php?action=edit&idpeg=13><img src='gambar/01306016_muizz.jpg' border=0 width=80px height=100px></a></TD>
	<!--a title='upload foto' href=upload.php?action=<br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>146</b><br />
&kodeEmp=14><br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>148</b><br />
</a-->
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=13" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=13" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=13" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>15</TD>
    	<TD VALIGN=TOP>01402017</TD>
    	<TD VALIGN=TOP>FAJAR SETIAWAN</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=14">Lihat Upload</a></TD>

		<TD style="text-align:center;"><a href=upload_foto.php?action=edit&idpeg=14><img src='gambar/01402017_fajar.jpg' border=0 width=80px height=100px></a></TD>
	<!--a title='upload foto' href=upload.php?action=<br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>146</b><br />
&kodeEmp=15><br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>148</b><br />
</a-->
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=14" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=14" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=14" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>16</TD>
    	<TD VALIGN=TOP>14088707023</TD>
    	<TD VALIGN=TOP>YULYANTO ADI PRABOWO</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Project Unit</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=15">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=15">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=15" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=15" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=15" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>17</TD>
    	<TD VALIGN=TOP>14058507018</TD>
    	<TD VALIGN=TOP>ALI USMAN</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Support Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=16">Lihat Upload</a></TD>

		<TD style="text-align:center;"><a href=upload_foto.php?action=edit&idpeg=16><img src='gambar/Ali.jpg' border=0 width=80px height=100px></a></TD>
	<!--a title='upload foto' href=upload.php?action=<br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>146</b><br />
&kodeEmp=17><br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>148</b><br />
</a-->
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=16" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=16" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=16" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>18</TD>
    	<TD VALIGN=TOP>01407024</TD>
    	<TD VALIGN=TOP>ABDA SAPUTRA SITOPU</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=17">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=17">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=17" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=17" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=17" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>19</TD>
    	<TD VALIGN=TOP>01409025</TD>
    	<TD VALIGN=TOP>MERDEYSA HADIATAMA</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=18">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=18">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=18" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=18" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=18" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>20</TD>
    	<TD VALIGN=TOP>14098606025</TD>
    	<TD VALIGN=TOP>WINDA</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Operation Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=19">Lihat Upload</a></TD>

		<TD style="text-align:center;"><a href=upload_foto.php?action=edit&idpeg=19><img src='gambar/new15.jpg' border=0 width=80px height=100px></a></TD>
	<!--a title='upload foto' href=upload.php?action=<br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>146</b><br />
&kodeEmp=20><br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>148</b><br />
</a-->
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=19" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=19" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=19" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>21</TD>
    	<TD VALIGN=TOP>01409027</TD>
    	<TD VALIGN=TOP>LELA SOFA</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=20">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=20">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=20" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=20" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=20" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>22</TD>
    	<TD VALIGN=TOP>3671132001720006</TD>
    	<TD VALIGN=TOP>MAX MILLIAN</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=21">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=21">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=21" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=21" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=21" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>23</TD>
    	<TD VALIGN=TOP>14018908014</TD>
    	<TD VALIGN=TOP>BANGUN PURWANTO</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Operation Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=22">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=22">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=22" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=22" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=22" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>24</TD>
    	<TD VALIGN=TOP>10001</TD>
    	<TD VALIGN=TOP>PAIMIN RYS</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=23">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=23">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=23" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=23" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=23" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>25</TD>
    	<TD VALIGN=TOP>1472010307880021</TD>
    	<TD VALIGN=TOP>VICKY YULEF</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=24">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=24">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=24" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=24" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=24" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>26</TD>
    	<TD VALIGN=TOP>14068007020</TD>
    	<TD VALIGN=TOP>KIKI ANUGRAH MAHARANI</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Operation Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=25">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=25">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=25" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=25" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=25" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>27</TD>
    	<TD VALIGN=TOP>6471045001810002</TD>
    	<TD VALIGN=TOP>ENI KUSRINI</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=26">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=26">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=26" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=26" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=26" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>28</TD>
    	<TD VALIGN=TOP>3310160704830002</TD>
    	<TD VALIGN=TOP>MUH KURNIAWAN JADI PRABOWO</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=28">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=28">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=28" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=28" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=28" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>29</TD>
    	<TD VALIGN=TOP>3578025112880001</TD>
    	<TD VALIGN=TOP>DEVITA PERDANI RACHMAN</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=29">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=29">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=29" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=29" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=29" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>30</TD>
    	<TD VALIGN=TOP>14106707029</TD>
    	<TD VALIGN=TOP>MOCH. ANWAR JULISUSANTO</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Operation Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=30">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=30">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=30" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=30" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=30" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>31</TD>
    	<TD VALIGN=TOP>3215030203910002</TD>
    	<TD VALIGN=TOP>AHMAD FAZRI</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Operation Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=31">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=31">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=31" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=31" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=31" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>32</TD>
    	<TD VALIGN=TOP>14110101032</TD>
    	<TD VALIGN=TOP>IVAN SADDAM ARDINGHI SIREGAR</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Project Unit</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=32">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=32">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=32" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=32" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=32" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>33</TD>
    	<TD VALIGN=TOP>10003</TD>
    	<TD VALIGN=TOP>BONANG SETIAWAN</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=34">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=34">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=34" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=34" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=34" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>34</TD>
    	<TD VALIGN=TOP>15018007040</TD>
    	<TD VALIGN=TOP>DAMARJATI SAPTO ARIOYUDHO</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Operation Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=35">Lihat Upload</a></TD>

		<TD style="text-align:center;"><a href=upload_foto.php?action=edit&idpeg=35><img src='gambar/Damar.jpg' border=0 width=80px height=100px></a></TD>
	<!--a title='upload foto' href=upload.php?action=<br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>146</b><br />
&kodeEmp=34><br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>148</b><br />
</a-->
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=35" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=35" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=35" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>35</TD>
    	<TD VALIGN=TOP>15018204037</TD>
    	<TD VALIGN=TOP>EMILDA SITARA</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Operation Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=36">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=36">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=36" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=36" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=36" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>36</TD>
    	<TD VALIGN=TOP>10006</TD>
    	<TD VALIGN=TOP>SATRIYO PUGUH</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=37">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=37">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=37" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=37" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=37" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>37</TD>
    	<TD VALIGN=TOP>10007</TD>
    	<TD VALIGN=TOP>YANA SURYANA</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=38">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=38">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=38" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=38" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=38" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>38</TD>
    	<TD VALIGN=TOP>15049512067</TD>
    	<TD VALIGN=TOP>ASRI MAULIA RAHMA</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Support Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=66">Lihat Upload</a></TD>

		<TD style="text-align:center;"><a href=upload_foto.php?action=edit&idpeg=66><img src='gambar/Asri.jpg' border=0 width=80px height=100px></a></TD>
	<!--a title='upload foto' href=upload.php?action=<br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>146</b><br />
&kodeEmp=38><br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>148</b><br />
</a-->
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=66" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=66" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=66" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>39</TD>
    	<TD VALIGN=TOP>10009</TD>
    	<TD VALIGN=TOP>ANNISA</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=40">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=40">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=40" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=40" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=40" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>40</TD>
    	<TD VALIGN=TOP>13017407005</TD>
    	<TD VALIGN=TOP>TOMMY ALAMANDA GULTOM</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Operation Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=41">Lihat Upload</a></TD>

		<TD style="text-align:center;"><a href=upload_foto.php?action=edit&idpeg=41><img src='gambar/tommy.jpg' border=0 width=80px height=100px></a></TD>
	<!--a title='upload foto' href=upload.php?action=<br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>146</b><br />
&kodeEmp=40><br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>148</b><br />
</a-->
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=41" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=41" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=41" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>41</TD>
    	<TD VALIGN=TOP>P0001</TD>
    	<TD VALIGN=TOP>ARLI GULO</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Project Unit</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=42">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=42">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=42" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=42" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=42" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>42</TD>
    	<TD VALIGN=TOP>P0002</TD>
    	<TD VALIGN=TOP>DEDDY HIDAYAT</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Operation Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=43">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=43">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=43" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=43" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=43" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>43</TD>
    	<TD VALIGN=TOP>15016204038</TD>
    	<TD VALIGN=TOP>USMARYONO</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Operation Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=44">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=44">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=44" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=44" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=44" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>44</TD>
    	<TD VALIGN=TOP>P0004</TD>
    	<TD VALIGN=TOP>TAUCHID ROELIANTO</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=45">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=45">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=45" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=45" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=45" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>45</TD>
    	<TD VALIGN=TOP>P0005</TD>
    	<TD VALIGN=TOP>PANDUJATI</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=46">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=46">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=46" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=46" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=46" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>46</TD>
    	<TD VALIGN=TOP>15017208041</TD>
    	<TD VALIGN=TOP>MUNAWAR ZEGA</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Support Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=47">Lihat Upload</a></TD>

		<TD style="text-align:center;"><a href=upload_foto.php?action=edit&idpeg=47><img src='gambar/Munawar Zega.jpg' border=0 width=80px height=100px></a></TD>
	<!--a title='upload foto' href=upload.php?action=<br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>146</b><br />
&kodeEmp=46><br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>148</b><br />
</a-->
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=47" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=47" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=47" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>47</TD>
    	<TD VALIGN=TOP>15028904050</TD>
    	<TD VALIGN=TOP>ANNISA NURUL HIKMAH</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Support Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=48">Lihat Upload</a></TD>

		<TD style="text-align:center;"><a href=upload_foto.php?action=edit&idpeg=48><img src='gambar/Annisa.jpg' border=0 width=80px height=100px></a></TD>
	<!--a title='upload foto' href=upload.php?action=<br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>146</b><br />
&kodeEmp=47><br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>148</b><br />
</a-->
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=48" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=48" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=48" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>48</TD>
    	<TD VALIGN=TOP>15018412047</TD>
    	<TD VALIGN=TOP>MUHAMMAD DEDI</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Project Unit</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=49">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=49">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=49" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=49" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=49" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>49</TD>
    	<TD VALIGN=TOP>P0009</TD>
    	<TD VALIGN=TOP>DODI RIZA PAHLEVY</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>IT & Infrastructure Unit</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=50">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=50">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=50" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=50" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=50" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>50</TD>
    	<TD VALIGN=TOP>15017309042-P</TD>
    	<TD VALIGN=TOP>HUSAINI</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Project Unit</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=51">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=51">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=51" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=51" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=51" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>51</TD>
    	<TD VALIGN=TOP>15027804049</TD>
    	<TD VALIGN=TOP>FILYO RONDONUWU</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Operation Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=52">Lihat Upload</a></TD>

		<TD style="text-align:center;"><a href=upload_foto.php?action=edit&idpeg=52><img src='gambar/Filyo.jpg' border=0 width=80px height=100px></a></TD>
	<!--a title='upload foto' href=upload.php?action=<br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>146</b><br />
&kodeEmp=51><br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>148</b><br />
</a-->
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=52" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=52" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=52" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>52</TD>
    	<TD VALIGN=TOP>15027702048-P</TD>
    	<TD VALIGN=TOP>SUPARMAN</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Project Unit</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=53">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=53">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=53" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=53" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=53" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>53</TD>
    	<TD VALIGN=TOP>15017901044-P</TD>
    	<TD VALIGN=TOP>SAMSUDIN</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Project Unit</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=54">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=54">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=54" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=54" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=54" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>54</TD>
    	<TD VALIGN=TOP>15017706046-P</TD>
    	<TD VALIGN=TOP>MUH GULUH</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Project Unit</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=55">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=55">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=55" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=55" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=55" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>55</TD>
    	<TD VALIGN=TOP>15017610045-P</TD>
    	<TD VALIGN=TOP>SUGIANTO</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Project Unit</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=56">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=56">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=56" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=56" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=56" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>56</TD>
    	<TD VALIGN=TOP>P0016</TD>
    	<TD VALIGN=TOP>WAHYU SAPUTRO</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Utilities Unit</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=57">Lihat Upload</a></TD>

		<TD style="text-align:center;"><a href=upload_foto.php?action=edit&idpeg=57><img src='gambar/new16.jpg' border=0 width=80px height=100px></a></TD>
	<!--a title='upload foto' href=upload.php?action=<br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>146</b><br />
&kodeEmp=56><br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>148</b><br />
</a-->
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=57" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=57" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=57" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>57</TD>
    	<TD VALIGN=TOP>15028903051</TD>
    	<TD VALIGN=TOP>JYALITA NITI HANDIPANI</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Operation Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=60">Lihat Upload</a></TD>

		<TD style="text-align:center;"><a href=upload_foto.php?action=edit&idpeg=60><img src='gambar/Jyalita.jpg' border=0 width=80px height=100px></a></TD>
	<!--a title='upload foto' href=upload.php?action=<br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>146</b><br />
&kodeEmp=57><br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>148</b><br />
</a-->
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=60" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=60" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=60" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>58</TD>
    	<TD VALIGN=TOP>15038308055</TD>
    	<TD VALIGN=TOP>VEICKY DELFIANDRI TAUFIK</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Project Unit</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=62">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=62">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=62" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=62" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=62" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>59</TD>
    	<TD VALIGN=TOP>15068208079</TD>
    	<TD VALIGN=TOP>AGUSTINA MAYAWATI </TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Support Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=63">Lihat Upload</a></TD>

		<TD style="text-align:center;"><a href=upload_foto.php?action=edit&idpeg=63><img src='gambar/Agustina.jpg' border=0 width=80px height=100px></a></TD>
	<!--a title='upload foto' href=upload.php?action=<br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>146</b><br />
&kodeEmp=59><br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>148</b><br />
</a-->
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=63" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=63" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=63" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>60</TD>
    	<TD VALIGN=TOP>15038801056</TD>
    	<TD VALIGN=TOP>AHMAD JAENAL ARIFIN</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Support Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=64">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=64">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=64" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=64" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=64" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>61</TD>
    	<TD VALIGN=TOP>15047011066-P</TD>
    	<TD VALIGN=TOP>ANANG BUDI SETYAWAN</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Project Unit</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=65">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=65">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=65" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=65" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=65" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>62</TD>
    	<TD VALIGN=TOP>15059712076</TD>
    	<TD VALIGN=TOP>CERAH SRI IRNANTI</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Support Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=67">Lihat Upload</a></TD>

		<TD style="text-align:center;"><a href=upload_foto.php?action=edit&idpeg=67><img src='gambar/Cerah.jpg' border=0 width=80px height=100px></a></TD>
	<!--a title='upload foto' href=upload.php?action=<br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>146</b><br />
&kodeEmp=62><br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>148</b><br />
</a-->
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=67" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=67" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=67" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>63</TD>
    	<TD VALIGN=TOP>11107408001</TD>
    	<TD VALIGN=TOP>DICKY SUHARTO </TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Top Management</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=68">Lihat Upload</a></TD>

		<TD style="text-align:center;"><a href=upload_foto.php?action=edit&idpeg=68><img src='gambar/BDR.png' border=0 width=80px height=100px></a></TD>
	<!--a title='upload foto' href=upload.php?action=<br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>146</b><br />
&kodeEmp=63><br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>148</b><br />
</a-->
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=68" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=68" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=68" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>64</TD>
    	<TD VALIGN=TOP>15049102063</TD>
    	<TD VALIGN=TOP>IHSANUL HAKIM</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Operation Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=69">Lihat Upload</a></TD>

		<TD style="text-align:center;"><a href=upload_foto.php?action=edit&idpeg=69><img src='gambar/ihsanul hakim.jpg' border=0 width=80px height=100px></a></TD>
	<!--a title='upload foto' href=upload.php?action=<br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>146</b><br />
&kodeEmp=64><br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>148</b><br />
</a-->
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=69" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=69" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=69" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>65</TD>
    	<TD VALIGN=TOP>15039212062</TD>
    	<TD VALIGN=TOP>INDAH DWI ARIANI</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Operation Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=70">Lihat Upload</a></TD>

		<TD style="text-align:center;"><a href=upload_foto.php?action=edit&idpeg=70><img src='gambar/Indah.jpg' border=0 width=80px height=100px></a></TD>
	<!--a title='upload foto' href=upload.php?action=<br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>146</b><br />
&kodeEmp=65><br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>148</b><br />
</a-->
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=70" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=70" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=70" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>66</TD>
    	<TD VALIGN=TOP>15068908080</TD>
    	<TD VALIGN=TOP>KARTIKA LEONI DWIJAYANTI</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Utilities Unit</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=71">Lihat Upload</a></TD>

		<TD style="text-align:center;"><a href=upload_foto.php?action=edit&idpeg=71><img src='gambar/Kartika.jpg' border=0 width=80px height=100px></a></TD>
	<!--a title='upload foto' href=upload.php?action=<br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>146</b><br />
&kodeEmp=66><br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>148</b><br />
</a-->
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=71" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=71" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=71" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>67</TD>
    	<TD VALIGN=TOP>15037805061</TD>
    	<TD VALIGN=TOP>MARIANA </TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Support Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=72">Lihat Upload</a></TD>

		<TD style="text-align:center;"><a href=upload_foto.php?action=edit&idpeg=72><img src='gambar/Mariana.jpg' border=0 width=80px height=100px></a></TD>
	<!--a title='upload foto' href=upload.php?action=<br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>146</b><br />
&kodeEmp=67><br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>148</b><br />
</a-->
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=72" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=72" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=72" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>68</TD>
    	<TD VALIGN=TOP>15039210058</TD>
    	<TD VALIGN=TOP>MUHAMMAD IQBAL IBRAHIM</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>QHSE Unit</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=73">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=73">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=73" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=73" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=73" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>69</TD>
    	<TD VALIGN=TOP>15059609077</TD>
    	<TD VALIGN=TOP>SITI MAWADATURROHMAH</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Support Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=74">Lihat Upload</a></TD>

		<TD style="text-align:center;"><a href=upload_foto.php?action=edit&idpeg=74><img src='gambar/mawadah.jpg' border=0 width=80px height=100px></a></TD>
	<!--a title='upload foto' href=upload.php?action=<br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>146</b><br />
&kodeEmp=69><br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>148</b><br />
</a-->
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=74" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=74" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=74" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>70</TD>
    	<TD VALIGN=TOP>15088202084</TD>
    	<TD VALIGN=TOP>PANDUJATI</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Top Management</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=75">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=75">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=75" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=75" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=75" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>71</TD>
    	<TD VALIGN=TOP>15048304065-P</TD>
    	<TD VALIGN=TOP>CHANDRA CAHYADI</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Project Unit</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=77">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=77">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=77" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=77" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=77" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>72</TD>
    	<TD VALIGN=TOP>08750315055</TD>
    	<TD VALIGN=TOP>DADI GUNAWAN</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Project Unit</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=78">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=78">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=78" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=78" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=78" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>73</TD>
    	<TD VALIGN=TOP>15067507082</TD>
    	<TD VALIGN=TOP>MUGHIRA SUBHAN</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Operation Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=79">Lihat Upload</a></TD>

		<TD style="text-align:center;"><a href=upload_foto.php?action=edit&idpeg=79><img src='gambar/Boni.jpg' border=0 width=80px height=100px></a></TD>
	<!--a title='upload foto' href=upload.php?action=<br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>146</b><br />
&kodeEmp=73><br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>148</b><br />
</a-->
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=79" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=79" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=79" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>74</TD>
    	<TD VALIGN=TOP>15068012081</TD>
    	<TD VALIGN=TOP>PENDI YANI </TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Support Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=80">Lihat Upload</a></TD>

		<TD style="text-align:center;"><a href=upload_foto.php?action=edit&idpeg=80><img src='gambar/Pendi Yani.jpg' border=0 width=80px height=100px></a></TD>
	<!--a title='upload foto' href=upload.php?action=<br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>146</b><br />
&kodeEmp=74><br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\karir\templates_c\9cd868d4d0dd0326140ccb18d2aba69fa2822c15_0.file.employee.tpl.cache.php</b> on line <b>148</b><br />
</a-->
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=80" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=80" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=80" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>75</TD>
    	<TD VALIGN=TOP>12760213002</TD>
    	<TD VALIGN=TOP>AHMAD YANI </TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Support Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=81">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=81">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=81" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=81" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=81" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>76</TD>
    	<TD VALIGN=TOP>1283101400</TD>
    	<TD VALIGN=TOP>HARYADI</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Support Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=82">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=82">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=82" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=82" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=82" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>77</TD>
    	<TD VALIGN=TOP>05890913010</TD>
    	<TD VALIGN=TOP>RINA WAHYU ANNISA</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Support Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=83">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=83">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=83" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=83" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=83" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>78</TD>
    	<TD VALIGN=TOP>11891013011</TD>
    	<TD VALIGN=TOP>NOVIA ZULFA HANUM</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>QHSE Unit</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=84">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=84">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=84" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=84" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=84" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>79</TD>
    	<TD VALIGN=TOP>09730214012</TD>
    	<TD VALIGN=TOP>IKROM KASIONO </TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Support Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=85">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=85">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=85" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=85" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=85" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>80</TD>
    	<TD VALIGN=TOP>06890614013</TD>
    	<TD VALIGN=TOP>MUIZZ SIDIQ</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Operation Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=86">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=86">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=86" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=86" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=86" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>81</TD>
    	<TD VALIGN=TOP>07910114014</TD>
    	<TD VALIGN=TOP>FAJAR SETIAWAN </TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Support Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=87">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=87">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=87" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=87" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=87" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>82</TD>
    	<TD VALIGN=TOP>08910914016</TD>
    	<TD VALIGN=TOP>DIRGA NUR SWASONO </TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Support Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=88">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=88">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=88" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=88" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=88" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>83</TD>
    	<TD VALIGN=TOP>01870914020</TD>
    	<TD VALIGN=TOP>MERDEYSA HADIATAMA</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Operation Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=89">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=89">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=89" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=89" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=89" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>84</TD>
    	<TD VALIGN=TOP>05930914022</TD>
    	<TD VALIGN=TOP>LELA SOFA</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Support Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=90">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=90">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=90" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=90" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=90" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>85</TD>
    	<TD VALIGN=TOP>15036302059-P</TD>
    	<TD VALIGN=TOP>DANIEL AZIS</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Operation Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=91">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=91">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=91" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=91" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=91" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>86</TD>
    	<TD VALIGN=TOP>20710315052</TD>
    	<TD VALIGN=TOP>LAMBOK SALOMO HUTAGAOL</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Operation Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=92">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=92">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=92" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=92" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=92" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    	   <tr>
    	<TD VALIGN=TOP align=center>87</TD>
    	<TD VALIGN=TOP>08690115001</TD>
    	<TD VALIGN=TOP>TAUCHID ROELIANTO</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Top Management</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=93">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=upload&idEmp=93">upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=93" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=93" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=93" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
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