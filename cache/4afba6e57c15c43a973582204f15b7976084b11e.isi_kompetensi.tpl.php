<?php
/*%%SmartyHeaderCode:26095711277e374b37_01774759%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4afba6e57c15c43a973582204f15b7976084b11e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karir\\templates\\isi_kompetensi.tpl',
      1 => 1460521114,
      2 => 'file',
    ),
    'c35f576cdadeaf749e52d9c4f71f8b8e386d3203' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karir\\templates\\header.tpl',
      1 => 1460354985,
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
      1 => 1460623783,
      2 => 'file',
    ),
    'de2b6711481e58d8ed9cdc4d37d7abac51ab1f6b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karir\\templates\\breadcrumb.tpl',
      1 => 1459824448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26095711277e374b37_01774759',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'nik' => 0,
    'name' => 0,
    'jabatan' => 0,
    'idkompetensi' => 0,
    'jabatan_option' => 0,
    'jabatan_onchange' => 0,
    'keterangan_menilai' => 0,
    'bawahan' => 0,
    'bawahan_option' => 0,
    'atasan' => 0,
    'atasan_option' => 0,
    'rekan' => 0,
    'rekan_option' => 0,
    'nip_dinilai' => 0,
    'name_dinilai' => 0,
    'jumlah' => 0,
    'jabatan_dinilai' => 0,
    'nikRelasiJabatan_onchange' => 0,
    'nikdinilai' => 0,
    'soal' => 0,
    'kembali' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5711277f863d47_29754515',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5711277f863d47_29754515')) {
function content_5711277f863d47_29754515 ($_smarty_tpl) {
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
			<a class="navbar-brand" style="margin-top:-4px;" href="index.php?action=showmenu"><title="Sistem Informasi Pegawai" alt="Sistem Informasi Karir Pegawai"><img src="img/logo kementerian PU.png"></a>
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
							<li ><a href="employee.php">Database Pegawai</a></li>
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
							<li  class="active" ><a href="ukur.php">Pengukuran Kompetensi Pegawai</a></li>
							<li ><a href="hasilkompetensi.php">Hasil Pengukuran Kompetensi</a></li>
							<li ><a href="kinerja.php">Kinerja Pegawai</a></li>
							<li ><a href="peluangkarir.php">Peluang Karir (Jabatan)</a></li>
							<li ><a href="posjbtkosong.php">Posisi Jabatan Kosong</a></li>
							<li ><a href="peljabpeg.php">Peluang Karir Pegawai</a></li>
							<li ><a href="calpemegangjab.php">Calon Pemegang Jabatan</a></li>
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
					<h3>Pengukuran Kompetensi<small> Pengukuran Kompetensi</small></h3>
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
					 					 					 					 					 					 					 					 					 					 					 					 <li class="active">Pengukuran Kompetensi Pegawai</li>					 					 					 					 					 					 				</ul>
				<div class="visible-xs breadcrumb-toggle">
					<a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
				</div>
			</div>

				<!-- /main navigation -->
			<!-- /breadcrumbs line -->
			<!-- Table inside panel body -->

<form method="post" action="ukur.php?action=pertanyaan" ENCTYPE="multipart/form-data">
<div class="row">
        		<div class="col-md-6">
		            <div class="panel panel-success">
		                <div class="panel-heading">
	                    	<h3 class="panel-title"><i class="icon-accessibility"></i> PENILAI</h3>
                    	</div>
                    	<div class="panel-body">
	                    	<table>
	                    		<tr>
	                    		<td width="12%" valign="top"><b>NIK</b></td>
                                <td width="4%" valign="top">:</td>
                                <td width="64%"><input type="text" name="textfield" id="textfield" size="40" value="131473865" disabled="disabled" class="form-control input-sm"> <br /></td>
	                    		</tr>
	                    		<tr>
	                    		<td width="12%" valign="top"><b>Nama</b></td>
                                <td width="4%" valign="top">:</td>
                                <td width="64%"><input type="text" name="textfield" id="textfield" size="40" value="si pegawai 1" disabled="disabled" class="form-control input-sm"><br /></td>
	                    		</tr>
	                    		<tr>
	                    		<td width="12%" valign="top"><b>Jabatan</b></td>
                                <td width="4%" valign="top">:</td>
                                <td width="64%"><input type="text" name="textfield" id="textfield" size="40" value="KEPALA CABANG" disabled="disabled" class="form-control input-sm"><br /></td>
	                    		</tr>
	                    		<tr>
	                    		<td width="12%" valign="top"><b>Menilai</b></td>
                                <td width="4%" valign="top">:</td>
                                <td width="64%"> <form name="jabatanform" method="post" id="form"  action="ukurkomp.php?action=jabatan">
                                  <input type="hidden" name="idkompetensi" id="textfield" size="40" value=""/>
                                  <select name="idjabatan" id="jumpMenu"onchange="javascript:document.jabatanform.submit ();" class="form-control input-sm">
                                    <option value="Yang Bersangkutan" selected="selected">Yang Bersangkutan</option>
                                      <option value='Atasan'>Atasan</option><option value='Bawahan'>Bawahan</option>
                                   </select>
                                </form>
                                </td>
	                    		</tr>
	                    	</table>
                    	</div>
                	</div>
                	</div>


        		<div class="col-md-6">
		            <div class="panel panel-info">
		                <div class="panel-heading">
	                    	<h3 class="panel-title"><i class="icon-accessibility"></i>MENILAI :
	                    	                      Yang Bersangkutan
                                            </h3>
                    	</div>
                    	<div class="panel-body">
                    	
	                    	<table>

	                    		<tr>
	                    		<td width="12%" height="10" valign=top><b>NIK</b></td>
                                <td width="4%" valign=top>:</td>
                                <td width="64%" valign=top>                                  <input type="text" class="form-control input-sm" <input type='text' size='40' value='131473865' disabled/>
                                                              </td>
	                    		</tr>
	                    		<tr>
	                    		<td width="12%" height="100"><b>Nama</b></td>
                                <td width="4%">:</td>
                                <td width="64%">                                        	<input type="text" name="textfield2" id="textfield2" size="40" value="si pegawai 1" disabled="disabled" class="form-control input-sm" />	
                                        									</td>
	                    		</tr>
	                    		
	                    		<tr>
	                    		<td width="12%"><b>Jabatan</b></td>
                                <td width="4%">:</td>
                                <td width="64%">                                   	<input type="text" name="textfield2" id="textfield2" size="40" value="KEPALA CABANG" disabled="disabled" class="form-control input-sm" />	
                                </td>
	                    		</tr>
	                    		<br />
	                    	</table>
                    	</div>
                    	</div>
                    	</div>


                    <table width="100%">       
              <tr>
                  <td align="center">
                    <form method="post" action="ukur.php?action=pertanyaan">
                        <input type="hidden" name="nikPenilai" id="textfield" size="40" value="131473865" />
                        
                                                    <input type="hidden" name="posisi" id="textfield" size="40" value="Yang Bersangkutan" />
                                                
                                                    <input type="hidden" name="nikDinilai" id="textfield" size="40" value="131473865" />
                          
                        <input type="hidden" name="idkompetensi" id="textfield" size="40" value=""/>
            <input type="hidden" name="name" id="textfield" size="40" value="si pegawai 1"/>
                        <input type="hidden" name="soal" id="textfield" size="40" value="0"/>
                        <input type="hidden" name="kembali" id="textfield" size="40" value=""/>
                        <input name="" type="button" onClick="javascript:window.location='ukur.php?action=petunjukhard'" class="btn btn-primary" value="Cancel"/>&nbsp;&nbsp;
                       <input type=submit value="MASUK KE PERTANYAAN" class="btn btn-primary" />
                        <input name="" type="hidden" value="Rekap" v/>
                    </form>
                    </td>
                </tr>
            </table>
        </TD>
    </TR>

</TABLE>


                	</div>
</div>
<?php }
}
?>