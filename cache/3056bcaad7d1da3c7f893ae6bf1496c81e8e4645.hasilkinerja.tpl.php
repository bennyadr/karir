<?php
/*%%SmartyHeaderCode:20594570f26403c32c6_17963020%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3056bcaad7d1da3c7f893ae6bf1496c81e8e4645' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karir\\templates\\hasilkinerja.tpl',
      1 => 1460610620,
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
      1 => 1460541674,
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
  'nocache_hash' => '20594570f26403c32c6_17963020',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'unite' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_570f264146f982_02180054',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_570f264146f982_02180054')) {
function content_570f264146f982_02180054 ($_smarty_tpl) {
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
							<li  class="active" ><a href="kinerja.php">Kinerja Pegawai</a></li>
							<li ><a href="peluangkarir.php">Peluang Karir (Jabatan)</a></li>
							<li ><a href="posjbtkosong.php">Posisi Jabatan Kosong</a></li>
							<li ><a href="#">Peluang Karir Pegawai</a></li>
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
			<!-- Info Block -->
			
<div class="breadcrumb-line">
				<ul class="breadcrumb">
					<li><a href="index.php?action=showmenu">Home</a></li>
					 					 					 					 					 					 					 					 					 					 					 					 					 					 <li class="active">Kinerja Pegawai</li>					 					 					 					 				</ul>
				<div class="visible-xs breadcrumb-toggle">
					<a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
				</div>
			</div>

				<!-- /main navigation -->
			<!-- /breadcrumbs line -->
			<!-- Table inside panel body -->
<form class="" role="form">	           
	<div class="row">
					<div class="col-md-12" >
		            	<div class="panel panel-default">
		                    <div class="panel-heading"><h6 class="panel-title" ><i class="icon-user"></i> Indentitas Pegawai</h6></div>
		                	<div class="panel-body">
			    <TABLE cellSpacing=0 cellPadding=0 border=0 width=100<?php echo '%>';?>   
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
        				<TD ALIGN=CENTER width=5<?php echo '%>';?><font color=#FFFFFF><b>A</b></font></TD>
        				<TD ALIGN=CENTER colspan=3 width=15<?php echo '%>';?><font color=#FFFFFF><b>Nilai SKP = Hasil SKP x 60%</b></font></TD>
						<TD ALIGN=CENTER width=6<?php echo '%>';?><font color=#FFFFFF><b>Total Nilai SKP</b></font></TD>
  					</TR>

   					<TR bgcolor=#237EA0>
						<TD ALIGN=LEFT width=5<?php echo '%>';?><font color=#FFFFFF size=5><b>SKP</b></font></TD>
				        <TD ALIGN=CENTER width=5% height=40><font color=#FFFFFF size=17><b>nilainya</b></font></TD>
				        <TD ALIGN=CENTER width=1<?php echo '%>';?><font color=#FFFFFF size=17><b>x</b></font></TD>
				        <TD ALIGN=CENTER width=6<?php echo '%>';?><font color=#FFFFFF size=17><b>60%</b></font></TD>
						<TD ALIGN=CENTER width=6<?php echo '%>';?><font color=#FFFFFF size=17><b>totnilainya</b></font></TD>
 					</TR>

 					 <TR bgcolor=#237EA0>
				        <TD ALIGN=CENTER width=5<?php echo '%>';?><font color=#FFFFFF><b>B</b></font></TD>
				        <TD ALIGN=CENTER colspan=3 width=15<?php echo '%>';?><font color=#FFFFFF><b>Nilai Kompetensi = Hasil Kompetensi x 40%</b></font></TD>
						<TD VALIGN=TOP></TD>
						<TR bgcolor=#237EA0>
						<TD VALIGN=TOP></TD>
				        <!--<TD ALIGN=CENTER width=5<?php echo '%>';?><font color=#FFFFFF><b></b></font></TD>-->
				        <TD ALIGN=CENTER width=10% colspan=2><font color=#FFFFFF><b>KOMPETENSI</b></font></TD>
					<TD ALIGN=CENTER width=6<?php echo '%>';?><font color=#FFFFFF><b>Nilai</b></font></TD>
					<TD VALIGN=TOP></TD>
				  </TR>
				<br />
<b>Notice</b>:  Undefined index: unite in <b>C:\xampp\htdocs\karir\templates_c\3056bcaad7d1da3c7f893ae6bf1496c81e8e4645_0.file.hasilkinerja.tpl.cache.php</b> on line <b>153</b><br />
<br />
<b>Notice</b>:  Trying to get property of non-object in <b>C:\xampp\htdocs\karir\templates_c\3056bcaad7d1da3c7f893ae6bf1496c81e8e4645_0.file.hasilkinerja.tpl.cache.php</b> on line <b>153</b><br />
				       <TR bgcolor=#237EA0>
					   <TD VALIGN=TOP></TD>
				        <!--<TD ALIGN=CENTER width=5<?php echo '%>';?><font color=#FFFFFF><b></b></font></TD>-->
				        <TD ALIGN=CENTER width=10% colspan=2><font color=#FFFFFF><b>NILAI KOMPETENSI</b></font></TD>
					<TD ALIGN=CENTER width=6<?php echo '%>';?><font color=#FFFFFF><b>nilai</b></font></TD>
					<TD VALIGN=TOP></TD>
				  <TR bgcolor=#237EA0>
						<TD ALIGN=LEFT width=5<?php echo '%>';?><font color=#FFFFFF size=5><b>PERILAKU KERJA</b></font></TD>
				        <TD ALIGN=CENTER width=5% height=40><font color=#FFFFFF size=17><b>nilai</b></font></TD>
				        <TD ALIGN=CENTER width=1<?php echo '%>';?><font color=#FFFFFF size=17><b>x</b></font></TD>
				        <TD ALIGN=CENTER width=6<?php echo '%>';?><font color=#FFFFFF size=17><b>40%</b></font></TD>
						<TD ALIGN=CENTER width=6<?php echo '%>';?><font color=#FFFFFF size=17><b>totnilai</b></font></TD>
				  </TR>
				  <TR bgcolor=#237EA0>
						<TD ALIGN=LEFT width=5<?php echo '%>';?><font color=#FFFFFF size=5><b>NPK</b></font></TD>
				        <TD ALIGN=CENTER colspan=3 width=5% height=40><font color=#FFFFFF size=17><b>NILAI = A + B</b></font></TD>
				        <TD ALIGN=CENTER width=6<?php echo '%>';?><font color=#FFFFFF size=17><b>totnilaikinerja</b></font></TD>
				  </TR>
				  <TR bgcolor=#237EA0>
						<TD ALIGN=LEFT width=5<?php echo '%>';?><font color=#FFFFFF size=2>
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
			
	         <!-- Footer -->
    <div class="footer clearfix">
        <div class="pull-left">&copy; 2016. Langit Infotama</div>
    	<div class="pull-right icons-group">
    		<a href="#"><i class="icon-cog3"></i></a>
    	</div>
    </div>
    <!-- /footer -->

</body>
</html>

<?php }
}
?>