<?php
/*%%SmartyHeaderCode:25709570f5aa1306e70_05641981%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b5be83045bed809ccced7e3b48dc1ecd2d99f1a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karir\\templates\\calpemegangjab.tpl',
      1 => 1460532161,
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
    'e1e3a632bcaaa5aac4ab979dfc088b7095e354f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karir\\templates\\footer.tpl',
      1 => 1453872114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25709570f5aa1306e70_05641981',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'jabatan_opt' => 0,
    'kejuruan_opt' => 0,
    'pos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_570f5aa2439a02_80753950',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_570f5aa2439a02_80753950')) {
function content_570f5aa2439a02_80753950 ($_smarty_tpl) {
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
							<li ><a href="ukur.php">Pengukuran Kompetensi Pegawai</a></li>
							<li ><a href="hasilkompetensi.php">Hasil Pengukuran Kompetensi</a></li>
							<li ><a href="kinerja.php">Kinerja Pegawai</a></li>
							<li ><a href="peluangkarir.php">Peluang Karir (Jabatan)</a></li>
							<li ><a href="posjbtkosong.php">Posisi Jabatan Kosong</a></li>
							<li ><a href="peljabpeg.php">Peluang Karir Pegawai</a></li>
							<li  class="active" ><a href="calpemegangjab.php">Calon Pemegang Jabatan</a></li>
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
					<h3>Posisi Jabatan Kosong<small>Informasi Posisi Jabatan Kosong</small></h3>
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
					 					 					 					 					 					 					 					 					 					 					 					 					 					 					 					 					 					 <li class="active">Calon Pemegang Jabatan</li>				</ul>
				<div class="visible-xs breadcrumb-toggle">
					<a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
				</div>
			</div>

				<!-- /main navigation -->
			<!-- /breadcrumbs line -->
			<!-- Table inside panel body -->


     <div class="table-controls">
							<p style="text-align:right;">
							<!--<a href="?action=add" class="btn btn-info btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>-->
				            </p>
							</div>
							<!-- Striped datatable inside panel -->
			            <div class="panel panel-default">
						
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-paragraph-justify"></i>Tabel Rekap Data</h6></div>
							<br>
							<div class="form-group">
							<div class="col-xs-2">
									<label>jabatan/Wilayah : </label>
									<select name="jabatan" onChange=submit() class="form-control" tabindex="2">
									<option value=''>Semua</option>
																		<option value="KEPALA CABANG" >KEPALA CABANG</option>
																		<option value="KEPALA DIVISI KEUANGAN DAN UMUM" >KEPALA DIVISI KEUANGAN DAN UMUM</option>
																		<option value="KEPALA DIVISI PORTOFOLIO INVESTASI I" >KEPALA DIVISI PORTOFOLIO INVESTASI I</option>
																		<option value="KEPALA SUBDIV. PENGEMBANGAN INST. & PENG. I" >KEPALA SUBDIV. PENGEMBANGAN INST. & PENG. I</option>
																		<option value="KEPALA SUBDIVISI PEMBIAYAAN DAN HUKUM I" >KEPALA SUBDIVISI PEMBIAYAAN DAN HUKUM I</option>
																		<option value="KEPALA SUBDIV. PENILAIAN KELAYAKAN & MNJ. RISIKO I" >KEPALA SUBDIV. PENILAIAN KELAYAKAN & MNJ. RISIKO I</option>
																		<option value="KEPALA SUBDIVISI ANGGARAN" >KEPALA SUBDIVISI ANGGARAN</option>
																		<option value="KEPALA SUBDIVISI UMUM" >KEPALA SUBDIVISI UMUM</option>
																		<option value="KEPALA SUBDIVISI AKUNTANSI DAN PELAPORAN" >KEPALA SUBDIVISI AKUNTANSI DAN PELAPORAN</option>
																		<option value="PELAKSANA SUBDIVISI ANGGARAN" >PELAKSANA SUBDIVISI ANGGARAN</option>
																		<option value="PELAKSANA SUBDIVISI UMUM" >PELAKSANA SUBDIVISI UMUM</option>
																		<option value="PELAKSANA SUBDIVISI PKMR" >PELAKSANA SUBDIVISI PKMR</option>
																		<option value="PELAKSANA SUBDIVISI P & H" >PELAKSANA SUBDIVISI P & H</option>
																		<option value="PELAKSANA SUBDIVISI PI & P" >PELAKSANA SUBDIVISI PI & P</option>
																		<option value="PELAKSANA SUBDIVISI AKLAP" >PELAKSANA SUBDIVISI AKLAP</option>
																		<option value="-" >-</option>
																		</select>
                                    </div>
							<div class="col-xs-2">
									<label>Kejuruan : </label>
									<select name="kejuruan" onChange=submit() class="form-control" tabindex="2">
									<option value=''>Semua</option>
									<br />
<b>Notice</b>:  Undefined index: kejuruan_opt in <b>C:\xampp\htdocs\karir\templates_c\3b5be83045bed809ccced7e3b48dc1ecd2d99f1a_0.file.calpemegangjab.tpl.cache.php</b> on line <b>134</b><br />
<br />
<b>Notice</b>:  Trying to get property of non-object in <b>C:\xampp\htdocs\karir\templates_c\3b5be83045bed809ccced7e3b48dc1ecd2d99f1a_0.file.calpemegangjab.tpl.cache.php</b> on line <b>134</b><br />
									</select>
                                    </div>		
							</div>		
  <button class="btn" type="submit">Check</button>
 
			                <table id="example" class="table table-striped table-bordered table-hover" style="width:100%; ">
              <thead>
              <tr>
	  			  <th style="width:1%;text-align:center;">No</th>
				  <th style="width:5%;text-align:center;">Nama</th>
				  <th style="width:5%;text-align:center;">Jabatan</th>
	 </tr>
              </thead>
              <tbody>
                  <TR align="center">
        <TD VALIGN=TOP align=center>1</TD>
        <TD VALIGN=TOP align=center>Langgeng Subur</TD>
        <TD VALIGN=TOP align=center>KEPALA CABANG</TD>
		
        <TR align="center">
        <TD VALIGN=TOP align=center>2</TD>
        <TD VALIGN=TOP align=center>Ismu Sudaryanto</TD>
        <TD VALIGN=TOP align=center>KEPALA DIVISI KEUANGAN DAN UMUM</TD>
		
        <TR align="center">
        <TD VALIGN=TOP align=center>3</TD>
        <TD VALIGN=TOP align=center>Langgeng Suwito</TD>
        <TD VALIGN=TOP align=center>KEPALA DIVISI PORTOFOLIO INVESTASI I</TD>
		
        <TR align="center">
        <TD VALIGN=TOP align=center>4</TD>
        <TD VALIGN=TOP align=center>Saifurrahman</TD>
        <TD VALIGN=TOP align=center>KEPALA SUBDIV. PENGEMBANGAN INST. & PENG. I</TD>
		
        <TR align="center">
        <TD VALIGN=TOP align=center>5</TD>
        <TD VALIGN=TOP align=center>Mas Soeharto</TD>
        <TD VALIGN=TOP align=center>KEPALA SUBDIVISI PEMBIAYAAN DAN HUKUM I</TD>
		
        <TR align="center">
        <TD VALIGN=TOP align=center>6</TD>
        <TD VALIGN=TOP align=center>Mokh.Mahdum</TD>
        <TD VALIGN=TOP align=center>KEPALA SUBDIV. PENILAIAN KELAYAKAN & MNJ. RISIKO I</TD>
		
        <TR align="center">
        <TD VALIGN=TOP align=center>7</TD>
        <TD VALIGN=TOP align=center>Luqman Joyo Kartono</TD>
        <TD VALIGN=TOP align=center>KEPALA SUBDIVISI UMUM</TD>
		
        <TR align="center">
        <TD VALIGN=TOP align=center>8</TD>
        <TD VALIGN=TOP align=center>Hari Kuncoro</TD>
        <TD VALIGN=TOP align=center>KEPALA SUBDIVISI AKUNTANSI DAN PELAPORAN</TD>
		
        <TR align="center">
        <TD VALIGN=TOP align=center>9</TD>
        <TD VALIGN=TOP align=center>Edy Sucipto</TD>
        <TD VALIGN=TOP align=center>PELAKSANA SUBDIVISI ANGGARAN</TD>
		
        <TR align="center">
        <TD VALIGN=TOP align=center>10</TD>
        <TD VALIGN=TOP align=center>Ahmady Muhajiri</TD>
        <TD VALIGN=TOP align=center>PELAKSANA SUBDIVISI P & H</TD>
		
        <TR align="center">
        <TD VALIGN=TOP align=center>11</TD>
        <TD VALIGN=TOP align=center>Agus Darmawan</TD>
        <TD VALIGN=TOP align=center>PELAKSANA SUBDIVISI P & H</TD>
		
        <TR align="center">
        <TD VALIGN=TOP align=center>12</TD>
        <TD VALIGN=TOP align=center>Ogan</TD>
        <TD VALIGN=TOP align=center>PELAKSANA SUBDIVISI PI & P</TD>
		
        <TR align="center">
        <TD VALIGN=TOP align=center>13</TD>
        <TD VALIGN=TOP align=center>Agung Sudaryono</TD>
        <TD VALIGN=TOP align=center>PELAKSANA SUBDIVISI PKMR</TD>
		
        <TR align="center">
        <TD VALIGN=TOP align=center>14</TD>
        <TD VALIGN=TOP align=center>Ajeng Loshita Sari</TD>
        <TD VALIGN=TOP align=center>PELAKSANA SUBDIVISI AKLAP</TD>
		
        <TR align="center">
        <TD VALIGN=TOP align=center>15</TD>
        <TD VALIGN=TOP align=center>Joko Mulyono</TD>
        <TD VALIGN=TOP align=center>PELAKSANA SUBDIVISI UMUM</TD>
		
        <TR align="center">
        <TD VALIGN=TOP align=center>16</TD>
        <TD VALIGN=TOP align=center>Agus Heri Purnomo</TD>
        <TD VALIGN=TOP align=center>PELAKSANA SUBDIVISI ANGGARAN</TD>
		
        <TR align="center">
        <TD VALIGN=TOP align=center>17</TD>
        <TD VALIGN=TOP align=center>Fajril Amirul</TD>
        <TD VALIGN=TOP align=center>PELAKSANA SUBDIVISI AKLAP</TD>
		
        <TR align="center">
        <TD VALIGN=TOP align=center>18</TD>
        <TD VALIGN=TOP align=center>Rias Widy Pratiwi</TD>
        <TD VALIGN=TOP align=center>PELAKSANA SUBDIVISI UMUM</TD>
		
        <TR align="center">
        <TD VALIGN=TOP align=center>19</TD>
        <TD VALIGN=TOP align=center>Fahdiansyah Putra</TD>
        <TD VALIGN=TOP align=center>PELAKSANA SUBDIVISI ANGGARAN</TD>
		
        <TR align="center">
        <TD VALIGN=TOP align=center>20</TD>
        <TD VALIGN=TOP align=center>Risa Rahajeng</TD>
        <TD VALIGN=TOP align=center>PELAKSANA SUBDIVISI PI & P</TD>
		
        <TR align="center">
        <TD VALIGN=TOP align=center>21</TD>
        <TD VALIGN=TOP align=center>M.Sito Cahyono</TD>
        <TD VALIGN=TOP align=center>PELAKSANA SUBDIVISI PI & P</TD>
		
        <TR align="center">
        <TD VALIGN=TOP align=center>22</TD>
        <TD VALIGN=TOP align=center>Julia Rahmi</TD>
        <TD VALIGN=TOP align=center>PELAKSANA SUBDIVISI P & H</TD>
		
        <TR align="center">
        <TD VALIGN=TOP align=center>23</TD>
        <TD VALIGN=TOP align=center>M.Ikhwan Hadi Prasojo</TD>
        <TD VALIGN=TOP align=center>PELAKSANA SUBDIVISI PKMR</TD>
		
        <TR align="center">
        <TD VALIGN=TOP align=center>24</TD>
        <TD VALIGN=TOP align=center>Hardisc Edy</TD>
        <TD VALIGN=TOP align=center>PELAKSANA SUBDIVISI UMUM</TD>
		
        <TR align="center">
        <TD VALIGN=TOP align=center>25</TD>
        <TD VALIGN=TOP align=center>Hardisc veri</TD>
        <TD VALIGN=TOP align=center>PELAKSANA SUBDIVISI UMUM</TD>
		
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