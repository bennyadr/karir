<?php
/*%%SmartyHeaderCode:1254956c5415f179b59_46636544%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c59b1c66854dc74719642db72a020f7ef9d0182' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\employee_notactive.tpl',
      1 => 1455767880,
      2 => 'file',
    ),
    'e69b1d9b6462a960f6e40c26dcc5286353725220' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\header.tpl',
      1 => 1455719267,
      2 => 'file',
    ),
    '0c8ea50e9a5ac91fe80a6d56e761b1087c9f50af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\pengelola.tpl',
      1 => 1454316992,
      2 => 'file',
    ),
    '22676ace1a6104e4ab36a685c17ef6cdc7766f17' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\mainnav.tpl',
      1 => 1455765005,
      2 => 'file',
    ),
    '10e8ad6da261b6128f2c9dea5e875e117c5d5b34' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\breadcrumb.tpl',
      1 => 1455764898,
      2 => 'file',
    ),
    'fa63a2d5c70af2cf4d6d31c4a279d32375eea31b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\footer.tpl',
      1 => 1453872114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1254956c5415f179b59_46636544',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'unite' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56c5415fc1c726_19527883',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56c5415fc1c726_19527883')) {
function content_56c5415fc1c726_19527883 ($_smarty_tpl) {
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
			<a class="navbar-brand" style="margin-top:-4px;" href="index.php?action=showmenu"><title="S.I.P" alt="S.I.P"></a>
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
					<li><a href="index.php?mod=logout"><i class="icon-exit"></i> Logout</a></li>
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
							Pengelola Website <span>Administrator</span>
						</div>
					</a>
					
				</div>
				<!-- /user dropdown -->

				<!-- Main navigation -->
				<ul class="navigation">				
					<li ><a href="index.php?action=showmenu"><span>Dashboard</span> <i class="icon-screen2"></i></a></li>
					<li><a href="#"><span>Staffing</span> <i class="icon-accessibility"></i></a>
					<ul>
							<li  class="active" ><a href="employee.php">Database Pegawai</a></li>
							<li ><a href="form_cuti.php">Daftar Cuti Pegawai</a></li>
							
					</ul>
					</li>
					<li><a href="#"><span>Payroll</span> <i class="icon-clipboard"></i></a>
					<ul>
							<li ><a href="payroll.php">Payroll</a></li>
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
					<h3>Database Pegawai<small>Informasi Data Pegawai Tidak Aktif</small></h3>
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
					 <li class="active">Data Pegawai</li>					 					 					 				</ul>
				<div class="visible-xs breadcrumb-toggle">
					<a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
				</div>
			</div>

				<!-- /main navigation -->
			<!-- /breadcrumbs line -->
			<!-- Table inside panel body -->
			<div class="panel panel-success">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Pegawai Tidak Aktif</h6></div>
			                <table id="example" class="table table-striped table-bordered table-hover" style="width:100%; ">
               <thead>
              <TR>
	  			  <th style="width:1%;text-align:center;">No</th>
				  <th style="width:2%;text-align:center;">NIK</th>
				  <th style="width:3%;text-align:center;">Nama</th>
				  <th style="width:6%;text-align:center;">Jabatan</th>
				  <th style="width:3%;text-align:center;">Departemen</th>
				  <th style="width:3%;text-align:center;">File Upload</th>
				  <th style="width:4%;text-align:center;">Foto</th>
				  <th style="width:4%;text-align:center;">OPTION</th>
	    
    </TR>
             </thead>
        <TR>
    	<TD VALIGN=TOP align=center>1</TD>
    	<TD VALIGN=TOP>01407024</TD>
    	<TD VALIGN=TOP>ABDA SAPUTRA SITOPU</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list1&id=17">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href=upload_foto.php?action=upload&idEmp=17>upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=17" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=17" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		</TD>

		
    </TR>
        <TR>
    	<TD VALIGN=TOP align=center>2</TD>
    	<TD VALIGN=TOP>3215030203910002</TD>
    	<TD VALIGN=TOP>AHMAD FAZRI</TD>
    	<TD VALIGN=TOP>Administration - Staff</TD>
		<TD VALIGN=TOP>Operation Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list1&id=31">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href=upload_foto.php?action=upload&idEmp=31>upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=31" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=31" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		</TD>

		
    </TR>
        <TR>
    	<TD VALIGN=TOP align=center>3</TD>
    	<TD VALIGN=TOP>01203003</TD>
    	<TD VALIGN=TOP>AHMAD YANI </TD>
    	<TD VALIGN=TOP>Accounting Supervisor</TD>
		<TD VALIGN=TOP>Support Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list1&id=8">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href=upload_foto.php?action=upload&idEmp=8>upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=8" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=8" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		</TD>

		
    </TR>
        <TR>
    	<TD VALIGN=TOP align=center>4</TD>
    	<TD VALIGN=TOP>12760213002</TD>
    	<TD VALIGN=TOP>AHMAD YANI </TD>
    	<TD VALIGN=TOP>Staff</TD>
		<TD VALIGN=TOP>Support Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list1&id=81">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href=upload_foto.php?action=upload&idEmp=81>upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=81" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=81" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		</TD>

		
    </TR>
        <TR>
    	<TD VALIGN=TOP align=center>5</TD>
    	<TD VALIGN=TOP>P0001</TD>
    	<TD VALIGN=TOP>ARLI GULO</TD>
    	<TD VALIGN=TOP>BU Assistant Director</TD>
		<TD VALIGN=TOP>Project Unit</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list1&id=42">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href=upload_foto.php?action=upload&idEmp=42>upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=42" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=42" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		</TD>

		
    </TR>
        <TR>
    	<TD VALIGN=TOP align=center>6</TD>
    	<TD VALIGN=TOP>15037601057</TD>
    	<TD VALIGN=TOP>ARRY ARMAT</TD>
    	<TD VALIGN=TOP>Contractor</TD>
		<TD VALIGN=TOP>Project Unit</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list1&id=58">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href=upload_foto.php?action=upload&idEmp=58>upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=58" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=58" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		</TD>

		
    </TR>
        <TR>
    	<TD VALIGN=TOP align=center>7</TD>
    	<TD VALIGN=TOP>11890413006</TD>
    	<TD VALIGN=TOP>BAYU NOPRIYANTONO</TD>
    	<TD VALIGN=TOP>Staff</TD>
		<TD VALIGN=TOP>Utilities Unit</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list1&id=7">Lihat Upload</a></TD>

		<TD style="text-align:center;"><a href=upload_foto.php?mod=edit&idpeg=7><img src='gambar/bayu.jpg' border=0 width=80px height=100px></a></TD>
	<!--a title='upload foto' href=upload.php?action=<br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\sip\templates_c\7c59b1c66854dc74719642db72a020f7ef9d0182_0.file.employee_notactive.tpl.cache.php</b> on line <b>136</b><br />
&kodeEmp=7><br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\sip\templates_c\7c59b1c66854dc74719642db72a020f7ef9d0182_0.file.employee_notactive.tpl.cache.php</b> on line <b>138</b><br />
</a-->
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=7" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=7" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		</TD>

		
    </TR>
        <TR>
    	<TD VALIGN=TOP align=center>8</TD>
    	<TD VALIGN=TOP>10003</TD>
    	<TD VALIGN=TOP>BONANG SETIAWAN</TD>
    	<TD VALIGN=TOP>Business Unit Director</TD>
		<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list1&id=34">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href=upload_foto.php?action=upload&idEmp=34>upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=34" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=34" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		</TD>

		
    </TR>
        <TR>
    	<TD VALIGN=TOP align=center>9</TD>
    	<TD VALIGN=TOP>08750315055</TD>
    	<TD VALIGN=TOP>DADI GUNAWAN</TD>
    	<TD VALIGN=TOP>Contractor</TD>
		<TD VALIGN=TOP>Project Unit</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list1&id=78">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href=upload_foto.php?action=upload&idEmp=78>upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=78" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=78" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		</TD>

		
    </TR>
        <TR>
    	<TD VALIGN=TOP align=center>10</TD>
    	<TD VALIGN=TOP>P0002</TD>
    	<TD VALIGN=TOP>DEDDY HIDAYAT</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP>Operation Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list1&id=43">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href=upload_foto.php?action=upload&idEmp=43>upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=43" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=43" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		</TD>

		
    </TR>
        <TR>
    	<TD VALIGN=TOP align=center>11</TD>
    	<TD VALIGN=TOP>3578025112880001</TD>
    	<TD VALIGN=TOP>DEVITA PERDANI RACHMAN</TD>
    	<TD VALIGN=TOP>Sales Engineer</TD>
		<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list1&id=29">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href=upload_foto.php?action=upload&idEmp=29>upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=29" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=29" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		</TD>

		
    </TR>
        <TR>
    	<TD VALIGN=TOP align=center>12</TD>
    	<TD VALIGN=TOP>08910914016</TD>
    	<TD VALIGN=TOP>DIRGA NUR SWASONO </TD>
    	<TD VALIGN=TOP>Staff</TD>
		<TD VALIGN=TOP>Support Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list1&id=88">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href=upload_foto.php?action=upload&idEmp=88>upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=88" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=88" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		</TD>

		
    </TR>
        <TR>
    	<TD VALIGN=TOP align=center>13</TD>
    	<TD VALIGN=TOP>P0009</TD>
    	<TD VALIGN=TOP>DODI RIZA PAHLEVY</TD>
    	<TD VALIGN=TOP>QHSE Officer</TD>
		<TD VALIGN=TOP>IT & Infrastructure Unit</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list1&id=50">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href=upload_foto.php?action=upload&idEmp=50>upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=50" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=50" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		</TD>

		
    </TR>
        <TR>
    	<TD VALIGN=TOP align=center>14</TD>
    	<TD VALIGN=TOP>6471045001810002</TD>
    	<TD VALIGN=TOP>ENI KUSRINI</TD>
    	<TD VALIGN=TOP>Sales Engineer</TD>
		<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list1&id=26">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href=upload_foto.php?action=upload&idEmp=26>upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=26" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=26" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		</TD>

		
    </TR>
        <TR>
    	<TD VALIGN=TOP align=center>15</TD>
    	<TD VALIGN=TOP>01402017</TD>
    	<TD VALIGN=TOP>FAJAR SETIAWAN</TD>
    	<TD VALIGN=TOP>Messenger</TD>
		<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list1&id=14">Lihat Upload</a></TD>

		<TD style="text-align:center;"><a href=upload_foto.php?mod=edit&idpeg=14><img src='gambar/01402017_fajar.jpg' border=0 width=80px height=100px></a></TD>
	<!--a title='upload foto' href=upload.php?action=<br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\sip\templates_c\7c59b1c66854dc74719642db72a020f7ef9d0182_0.file.employee_notactive.tpl.cache.php</b> on line <b>136</b><br />
&kodeEmp=15><br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\sip\templates_c\7c59b1c66854dc74719642db72a020f7ef9d0182_0.file.employee_notactive.tpl.cache.php</b> on line <b>138</b><br />
</a-->
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=14" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=14" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		</TD>

		
    </TR>
        <TR>
    	<TD VALIGN=TOP align=center>16</TD>
    	<TD VALIGN=TOP>07910114014</TD>
    	<TD VALIGN=TOP>FAJAR SETIAWAN </TD>
    	<TD VALIGN=TOP>Messenger</TD>
		<TD VALIGN=TOP>Support Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list1&id=87">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href=upload_foto.php?action=upload&idEmp=87>upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=87" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=87" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		</TD>

		
    </TR>
        <TR>
    	<TD VALIGN=TOP align=center>17</TD>
    	<TD VALIGN=TOP>1283101400</TD>
    	<TD VALIGN=TOP>HARYADI</TD>
    	<TD VALIGN=TOP>HR Supervisor</TD>
		<TD VALIGN=TOP>Support Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list1&id=82">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href=upload_foto.php?action=upload&idEmp=82>upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=82" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=82" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		</TD>

		
    </TR>
        <TR>
    	<TD VALIGN=TOP align=center>18</TD>
    	<TD VALIGN=TOP>01302015</TD>
    	<TD VALIGN=TOP>IKROM KASIONO</TD>
    	<TD VALIGN=TOP>Driver</TD>
		<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list1&id=12">Lihat Upload</a></TD>

		<TD style="text-align:center;"><a href=upload_foto.php?mod=edit&idpeg=12><img src='gambar/01302015_ikrom.jpg' border=0 width=80px height=100px></a></TD>
	<!--a title='upload foto' href=upload.php?action=<br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\sip\templates_c\7c59b1c66854dc74719642db72a020f7ef9d0182_0.file.employee_notactive.tpl.cache.php</b> on line <b>136</b><br />
&kodeEmp=18><br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\sip\templates_c\7c59b1c66854dc74719642db72a020f7ef9d0182_0.file.employee_notactive.tpl.cache.php</b> on line <b>138</b><br />
</a-->
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=12" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=12" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		</TD>

		
    </TR>
        <TR>
    	<TD VALIGN=TOP align=center>19</TD>
    	<TD VALIGN=TOP>09730214012</TD>
    	<TD VALIGN=TOP>IKROM KASIONO </TD>
    	<TD VALIGN=TOP>Driver</TD>
		<TD VALIGN=TOP>Support Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list1&id=85">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href=upload_foto.php?action=upload&idEmp=85>upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=85" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=85" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		</TD>

		
    </TR>
        <TR>
    	<TD VALIGN=TOP align=center>20</TD>
    	<TD VALIGN=TOP>20710315052</TD>
    	<TD VALIGN=TOP>LAMBOK SALOMO HUTAGAOL</TD>
    	<TD VALIGN=TOP>Contractor</TD>
		<TD VALIGN=TOP>Operation Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list1&id=92">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href=upload_foto.php?action=upload&idEmp=92>upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=92" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=92" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		</TD>

		
    </TR>
        <TR>
    	<TD VALIGN=TOP align=center>21</TD>
    	<TD VALIGN=TOP>01409027</TD>
    	<TD VALIGN=TOP>LELA SOFA</TD>
    	<TD VALIGN=TOP>General Affair Supervisor</TD>
		<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list1&id=20">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href=upload_foto.php?action=upload&idEmp=20>upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=20" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=20" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		</TD>

		
    </TR>
        <TR>
    	<TD VALIGN=TOP align=center>22</TD>
    	<TD VALIGN=TOP>05930914022</TD>
    	<TD VALIGN=TOP>LELA SOFA</TD>
    	<TD VALIGN=TOP>Receptionist</TD>
		<TD VALIGN=TOP>Support Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list1&id=90">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href=upload_foto.php?action=upload&idEmp=90>upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=90" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=90" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		</TD>

		
    </TR>
        <TR>
    	<TD VALIGN=TOP align=center>23</TD>
    	<TD VALIGN=TOP>3671132001720006</TD>
    	<TD VALIGN=TOP>MAX MILLIAN</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list1&id=21">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href=upload_foto.php?action=upload&idEmp=21>upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=21" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=21" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		</TD>

		
    </TR>
        <TR>
    	<TD VALIGN=TOP align=center>24</TD>
    	<TD VALIGN=TOP>01409025</TD>
    	<TD VALIGN=TOP>MERDEYSA HADIATAMA</TD>
    	<TD VALIGN=TOP>Sales Engineer</TD>
		<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list1&id=18">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href=upload_foto.php?action=upload&idEmp=18>upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=18" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=18" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		</TD>

		
    </TR>
        <TR>
    	<TD VALIGN=TOP align=center>25</TD>
    	<TD VALIGN=TOP>01870914020</TD>
    	<TD VALIGN=TOP>MERDEYSA HADIATAMA</TD>
    	<TD VALIGN=TOP>Sales Engineer</TD>
		<TD VALIGN=TOP>Operation Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list1&id=89">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href=upload_foto.php?action=upload&idEmp=89>upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=89" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=89" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		</TD>

		
    </TR>
        <TR>
    	<TD VALIGN=TOP align=center>26</TD>
    	<TD VALIGN=TOP>3310160704830002</TD>
    	<TD VALIGN=TOP>MUH KURNIAWAN JADI PRABOWO</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list1&id=28">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href=upload_foto.php?action=upload&idEmp=28>upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=28" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=28" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		</TD>

		
    </TR>
        <TR>
    	<TD VALIGN=TOP align=center>27</TD>
    	<TD VALIGN=TOP>15018412047</TD>
    	<TD VALIGN=TOP>MUHAMMAD DEDI</TD>
    	<TD VALIGN=TOP>Contractor</TD>
		<TD VALIGN=TOP>Project Unit</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list1&id=49">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href=upload_foto.php?action=upload&idEmp=49>upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=49" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=49" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		</TD>

		
    </TR>
        <TR>
    	<TD VALIGN=TOP align=center>28</TD>
    	<TD VALIGN=TOP>01306016</TD>
    	<TD VALIGN=TOP>MUIZZ SIDIQ</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list1&id=13">Lihat Upload</a></TD>

		<TD style="text-align:center;"><a href=upload_foto.php?mod=edit&idpeg=13><img src='gambar/01306016_muizz.jpg' border=0 width=80px height=100px></a></TD>
	<!--a title='upload foto' href=upload.php?action=<br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\sip\templates_c\7c59b1c66854dc74719642db72a020f7ef9d0182_0.file.employee_notactive.tpl.cache.php</b> on line <b>136</b><br />
&kodeEmp=28><br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\sip\templates_c\7c59b1c66854dc74719642db72a020f7ef9d0182_0.file.employee_notactive.tpl.cache.php</b> on line <b>138</b><br />
</a-->
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=13" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=13" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		</TD>

		
    </TR>
        <TR>
    	<TD VALIGN=TOP align=center>29</TD>
    	<TD VALIGN=TOP>06890614013</TD>
    	<TD VALIGN=TOP>MUIZZ SIDIQ</TD>
    	<TD VALIGN=TOP>Administration - Staff</TD>
		<TD VALIGN=TOP>Operation Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list1&id=86">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href=upload_foto.php?action=upload&idEmp=86>upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=86" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=86" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		</TD>

		
    </TR>
        <TR>
    	<TD VALIGN=TOP align=center>30</TD>
    	<TD VALIGN=TOP>01304014</TD>
    	<TD VALIGN=TOP>NOVIA ZULFA HANUM</TD>
    	<TD VALIGN=TOP>QHSE Coordinator </TD>
		<TD VALIGN=TOP>QHSE Unit</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list1&id=11">Lihat Upload</a></TD>

		<TD style="text-align:center;"><a href=upload_foto.php?mod=edit&idpeg=11><img src='gambar/01304014_novia.jpg' border=0 width=80px height=100px></a></TD>
	<!--a title='upload foto' href=upload.php?action=<br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\sip\templates_c\7c59b1c66854dc74719642db72a020f7ef9d0182_0.file.employee_notactive.tpl.cache.php</b> on line <b>136</b><br />
&kodeEmp=30><br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\sip\templates_c\7c59b1c66854dc74719642db72a020f7ef9d0182_0.file.employee_notactive.tpl.cache.php</b> on line <b>138</b><br />
</a-->
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=11" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=11" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		</TD>

		
    </TR>
        <TR>
    	<TD VALIGN=TOP align=center>31</TD>
    	<TD VALIGN=TOP>11891013011</TD>
    	<TD VALIGN=TOP>NOVIA ZULFA HANUM</TD>
    	<TD VALIGN=TOP>QHSE Coordinator </TD>
		<TD VALIGN=TOP>QHSE Unit</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list1&id=84">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href=upload_foto.php?action=upload&idEmp=84>upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=84" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=84" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		</TD>

		
    </TR>
        <TR>
    	<TD VALIGN=TOP align=center>32</TD>
    	<TD VALIGN=TOP>10001</TD>
    	<TD VALIGN=TOP>PAIMIN RYS</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list1&id=23">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href=upload_foto.php?action=upload&idEmp=23>upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=23" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=23" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		</TD>

		
    </TR>
        <TR>
    	<TD VALIGN=TOP align=center>33</TD>
    	<TD VALIGN=TOP>P0005</TD>
    	<TD VALIGN=TOP>PANDUJATI</TD>
    	<TD VALIGN=TOP>Business Unit Director</TD>
		<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list1&id=46">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href=upload_foto.php?action=upload&idEmp=46>upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=46" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=46" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		</TD>

		
    </TR>
        <TR>
    	<TD VALIGN=TOP align=center>34</TD>
    	<TD VALIGN=TOP>01303013</TD>
    	<TD VALIGN=TOP>RINA WAHYU ANNISA</TD>
    	<TD VALIGN=TOP>Cashier - Staff</TD>
		<TD VALIGN=TOP>Support Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list1&id=10">Lihat Upload</a></TD>

		<TD style="text-align:center;"><a href=upload_foto.php?mod=edit&idpeg=10><img src='gambar/01303013_rina.jpg' border=0 width=80px height=100px></a></TD>
	<!--a title='upload foto' href=upload.php?action=<br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\sip\templates_c\7c59b1c66854dc74719642db72a020f7ef9d0182_0.file.employee_notactive.tpl.cache.php</b> on line <b>136</b><br />
&kodeEmp=34><br />
<b>Notice</b>:  Undefined index: datflp in <b>C:\xampp\htdocs\sip\templates_c\7c59b1c66854dc74719642db72a020f7ef9d0182_0.file.employee_notactive.tpl.cache.php</b> on line <b>138</b><br />
</a-->
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=10" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=10" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		</TD>

		
    </TR>
        <TR>
    	<TD VALIGN=TOP align=center>35</TD>
    	<TD VALIGN=TOP>05890913010</TD>
    	<TD VALIGN=TOP>RINA WAHYU ANNISA</TD>
    	<TD VALIGN=TOP>Cashier - Staff</TD>
		<TD VALIGN=TOP>Support Division</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list1&id=83">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href=upload_foto.php?action=upload&idEmp=83>upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=83" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=83" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		</TD>

		
    </TR>
        <TR>
    	<TD VALIGN=TOP align=center>36</TD>
    	<TD VALIGN=TOP>10006</TD>
    	<TD VALIGN=TOP>SATRIYO PUGUH</TD>
    	<TD VALIGN=TOP>Office Boy</TD>
		<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list1&id=37">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href=upload_foto.php?action=upload&idEmp=37>upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=37" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=37" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		</TD>

		
    </TR>
        <TR>
    	<TD VALIGN=TOP align=center>37</TD>
    	<TD VALIGN=TOP>P0004</TD>
    	<TD VALIGN=TOP>TAUCHID ROELIANTO</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list1&id=45">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href=upload_foto.php?action=upload&idEmp=45>upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=45" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=45" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		</TD>

		
    </TR>
        <TR>
    	<TD VALIGN=TOP align=center>38</TD>
    	<TD VALIGN=TOP>0113009</TD>
    	<TD VALIGN=TOP>TOMMY ALAMANDA GULTOM</TD>
    	<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list1&id=5">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href=upload_foto.php?action=upload&idEmp=5>upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=5" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=5" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		</TD>

		
    </TR>
        <TR>
    	<TD VALIGN=TOP align=center>39</TD>
    	<TD VALIGN=TOP>1472010307880021</TD>
    	<TD VALIGN=TOP>VICKY YULEF</TD>
    	<TD VALIGN=TOP>Administration Supervisor</TD>
		<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list1&id=24">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href=upload_foto.php?action=upload&idEmp=24>upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=24" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=24" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		</TD>

		
    </TR>
        <TR>
    	<TD VALIGN=TOP align=center>40</TD>
    	<TD VALIGN=TOP>10007</TD>
    	<TD VALIGN=TOP>YANA SURYANA</TD>
    	<TD VALIGN=TOP>Office Boy</TD>
		<TD VALIGN=TOP></TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list1&id=38">Lihat Upload</a></TD>

			<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href=upload_foto.php?action=upload&idEmp=38>upload</a>
		</TD>
				
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=38" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=38" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		</TD>

		
    </TR>
    </TABLE>
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