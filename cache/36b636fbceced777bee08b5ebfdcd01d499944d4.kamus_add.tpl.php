<?php
/*%%SmartyHeaderCode:3014256fa76278bca26_88318032%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36b636fbceced777bee08b5ebfdcd01d499944d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karir\\templates\\kamus_add.tpl',
      1 => 1459254760,
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
      1 => 1459242859,
      2 => 'file',
    ),
    'e1e3a632bcaaa5aac4ab979dfc088b7095e354f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karir\\templates\\footer.tpl',
      1 => 1453872114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3014256fa76278bca26_88318032',
  'tpl_function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56fa762845da47_77784296',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56fa762845da47_77784296')) {
function content_56fa762845da47_77784296 ($_smarty_tpl) {
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
<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
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
							<li  class="active" ><a href="kamus.php">Kamus Kompetensi</a></li>
							<li ><a href="matrik.php">Matrik Kompetensi</a></li>
							<li ><a href="arah.php">Arah Karir</a></li>
					</ul>
					</li>
					<li><a href="#"><span>Karir</span> <i class="icon-clipboard"></i></a>
					<ul>
							<li ><a href="kompetensi.php">Kompetensi Jabatan</a></li>
							<li ><a href="#">Pengukuran Kompetensi Pegawai</a></li>
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
					<h3>Add Kamus Kompetensi<small>Informasi Kamus Kompetensi</small></h3>
				</div>
			</div>	
			
				<!-- Simple registration form -->
			<form class="" action="?action=save" method="POST" ENCTYPE="multipart/form-data">
			    <div class="panel panel-default">
	                <div class="panel-body">
	                	<div class="row">
	                		<div class="col-md-10">
	                			<div class="form-group">
									<label>Kode Kompetensi :</label>
                                    <input type="text" name="kode" placeholder="Kode Kompetensi" class="form-control" required>
	                			</div>
	                		</div>
							<div class="col-md-10">
	                			<div class="form-group">
									<label>Nama Kompetensi :</label>
                                    <input type="text" name="kompetensi" placeholder="Nama Kompetensi" class="form-control" required>
	                			</div>
	                		</div>
	                		<div class="col-md-10">
	                			<div class="form-group">
									<label>Jenis Kompetensi :</label>
                                     <select name="jenis" class="form-control">
                                                <option value="" selected="selected"> --Pilih-- </option>
                                                <option value="Dasar" > Dasar </option>
                                                <option value="Umum" > Umum </option>
                                                <option value="Spesifik" > Spesifik </option>
                                                </select>
	                			</div>
	                		</div>
	                		<div class="col-md-10">
	                			<div class="form-group">
									<label>Defenisi Kompetensi :</label>
                                    <input type="text" name="definisikompetensi" placeholder="Defenisi Kompetensi" class="form-control" required>
	                			</div>
	                		</div>
	                		
	                		<div class="col-md-10">
	                			<div class="form-group">
									<label>Pertanyaan ybs :</label>
                                    <textarea name="question_ybs" placeholder="Pertanyaan Yang Bersangkutan" class="form-control" ></textarea>
	                			</div>
	                		</div>
	                		<div class="col-md-10">
	                			<div class="form-group">
									<label>Pertanyaan noybs :</label>
                                    <textarea name="question_noybs" placeholder="Pertanyaan Yang Bersangkutan" class="form-control" ></textarea>
	                			</div>
	                		</div>
	                		
	                			<div class="col-md-10">
	                			<div class="form-group">
									<label>Pertanyaan ke-2 ybs :</label>
                                    <textarea name="question2_ybs" placeholder="Pertanyaan Yang Bersangkutan" class="form-control" ></textarea>
	                			</div>
	                		</div>
	                		<div class="col-md-10">
	                			<div class="form-group">
									<label>Pertanyaan ke-2 noybs :</label>
                                    <textarea name="question2_noybs" placeholder="Pertanyaan Yang Bersangkutan" class="form-control" ></textarea>
	                			</div>
	                		</div>

	                		<div class="col-md-10">
	                			<div class="form-group">
									<label>Pertanyaan ke-3 ybs :</label>
                                    <textarea name="question3_ybs" placeholder="Pertanyaan Yang Bersangkutan" class="form-control" ></textarea>
	                			</div>
	                		</div>
	                		<div class="col-md-10">
	                			<div class="form-group">
									<label>Pertanyaan ke-3 noybs :</label>
                                    <textarea name="question3_noybs" placeholder="Pertanyaan Yang Bersangkutan" class="form-control" ></textarea>
	                			</div>
	                		</div>

	                	</div>
                        <div class="form-actions text-left">
                        	<input type="submit" data-toggle="modal" role="button"  value="Simpan" class="btn btn-primary">
                        </div>
				    </div>
				</div>
			</form>
			<!-- /simple registration form -->
			
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