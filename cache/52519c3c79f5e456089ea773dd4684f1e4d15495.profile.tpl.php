<?php
/*%%SmartyHeaderCode:206056d934ed51c777_04518417%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52519c3c79f5e456089ea773dd4684f1e4d15495' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\profile.tpl',
      1 => 1456988896,
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
  'nocache_hash' => '206056d934ed51c777_04518417',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'idperiode' => 0,
    'gambar' => 0,
    'nik' => 0,
    'sex' => 0,
    'nama' => 0,
    'agama' => 0,
    'jabatan' => 0,
    'stskawin' => 0,
    'divisi' => 0,
    'telp' => 0,
    'hp' => 0,
    'pendidikan' => 0,
    'ktp' => 0,
    'tempat' => 0,
    'tanggal' => 0,
    'alamatktp' => 0,
    'alamatsmr' => 0,
    'bank' => 0,
    'norek' => 0,
    'email' => 0,
    'npwp' => 0,
    'pathktp' => 0,
    'pathnpwp' => 0,
    'pathbpjs' => 0,
    'pathbpjssehat' => 0,
    'pathnikah' => 0,
    'pathkk' => 0,
    'pendidikan_list' => 0,
    'kursus_list' => 0,
    'keluarga_list' => 0,
    'organisasi_list' => 0,
    'pekerjaan_list' => 0,
    'kesehatan_list' => 0,
    'penghargaan_list' => 0,
    'hukuman_list' => 0,
    'mcu_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56d934ef51f371_54830709',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56d934ef51f371_54830709')) {
function content_56d934ef51f371_54830709 ($_smarty_tpl) {
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
					<li  class="active" ><a href="profile.php"><span>Profile</span> <i class="icon-profile"></i></a></li>
					<li ><a href="permohonan.php"><span>Form Permohonan</span> <i class="icon-clipboard"></i></a></li>
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
					<h3>Profile<small>Informasi Data Diri</small></h3>
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
					 					 <li class="active">Profile</li>					 					 					 				</ul>
				<div class="visible-xs breadcrumb-toggle">
					<a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
				</div>
			</div>
				<!-- /main navigation -->
			<!-- /breadcrumbs line -->
			<!-- Table inside panel body -->
      <div class="table-controls">
           <div style="text-align:right;">
      <div class="form-actions text-right">
            

            <form action="profile.php?action=print" method="post">
            <a href="profile.php?action=edit" title="Edit" class="btn btn-info">Edit</a>
            <input type="hidden" name="idperiode" value="<br />
<b>Notice</b>:  Undefined index: idperiode in <b>C:\xampp\htdocs\sip\templates_c\52519c3c79f5e456089ea773dd4684f1e4d15495_0.file.profile.tpl.cache.php</b> on line <b>121</b><br />
<br />
<b>Notice</b>:  Trying to get property of non-object in <b>C:\xampp\htdocs\sip\templates_c\52519c3c79f5e456089ea773dd4684f1e4d15495_0.file.profile.tpl.cache.php</b> on line <b>121</b><br />
">
              <input type="submit" data-toggle="modal" role="button" value="View PDF" class="btn btn-danger"></div>

            </form> 
              <!--<a href="profile.php?action=print" title="View PDF"><i class="icon-file-pdf"></i></div></a> -->
              </div>
        </div>




<div class="tabbable" id="tabs">

        <div class="tab-content">         
        </div>
      </div>


    <div class="tabbable" id="tabs-79220">
                <ul class="nav nav-tabs">
                  <li class="active">
                    <a href="#biodata" data-toggle="tab">Biodata Diri</a>
                  </li>
                  <li>
                    <a href="#pendidikan" data-toggle="tab">Pendidikan</a>
                  </li>
                  <li>
                    <a href="#kursus" data-toggle="tab">Kursus</a>
                  </li>
                  <li>
                    <a href="#keluarga" data-toggle="tab">Keluarga</a>
                  </li>
                  <li>
                    <a href="#organisasi" data-toggle="tab">Organisasi</a>
                  </li>
                  <li>
                    <a href="#pekerjaan" data-toggle="tab">Pekerjaan</a>
                  </li>
                  <li>
                    <a href="#kesehatan" data-toggle="tab">Kesehatan</a>
                  </li>
                   <li>
                    <a href="#penghargaan" data-toggle="tab">Penghargaan</a>
                  </li>
                   <li>
                    <a href="#hukuman" data-toggle="tab">Hukuman</a>
                  </li>
                   <li>
                    <a href="#mcu" data-toggle="tab">MCU</a>
                  </li>
                </ul>
        
        <div class="tab-content">
          <div class="tab-pane active" id="biodata">
            <table class="table table-bordered">
                      <tr>
                                              <td rowspan="6" style="text-align:left;"><img width=120 src="gambar/15028904050_new4.jpg" ></td>
                                           <td style="width:10%;text-align:left;">NIK</td>
                      <td style="width:1%;text-align:center;">:</td>
                      <td style="width:30%;text-align:left;">15028904050</td>
                      <td >Jenis Kelamin</td>
                      <td >:</td>
                      <td ></td>
                      </tr>
                      <tr>
                        <td style="width:10%;text-align:left;">Nama</td>
                      <td style="width:1%;text-align:center;">:</td>
                      <td><b>ANNISA NURUL HIKMAH</b></td>
                      <td >Agama</td>
                      <td >:</td>
                      <td >Islam</td>
                      </tr>
                      <tr>
                        <td style="width:10%;text-align:left;">Jabatan</td>
                      <td style="width:1%;text-align:center;">:</td>
                      <td>HR Supervisor</td>
                      <td >Status Kawin</td>
                      <td >:</td>
                      <td >K1 - Kawin Anak 1</td>
                      </tr>
                      <tr>
                        <td style="width:10%;text-align:left;">Depatemen</td>
                      <td style="width:1%;text-align:center;">:</td>
                      <td >Support Division</td>
                      <td >Telp/HP</td>
                      <td >:</td>
                      <td >&nbsp;/&nbsp;085774183889</td>
                      </tr>
                      <tr>
                        <td style="width:10%;text-align:left;">Pendidikan</td>
                      <td style="width:1%;text-align:center;">:</td>
                      <td>S1</td>
                      <td>No KTP</td>
                      <td>:</td>
                      <td></td>
                      </tr>
                      <tr>
                        <td style="width:10%;text-align:left;">Tempat Lahir</td>
                      <td style="width:1%;text-align:center;">:</td>
                      <td>Bekasi</td>
                      <td style="width:12%;text-align:left;">Tanggal Lahir</td>
                      <td style="width:1%;text-align:center;">:</td>
                      <td>20/04/1989</td>
                      </tr>
                      <tr>
                        <td rowspan="3" style="width:12%;text-align:left;">&nbsp;</td>
                        <td style="width:10%;text-align:left;">Alamat KTP</td>
                        <td style="width:1%;text-align:center;">:</td>
                        <td>Jl.Dahlia 6 No 186 RT008/03 Jatikramat Indah 1 Jatiasih, Bekasi</td>
                        <td style="width:12%;text-align:left;">Alamat Sementara</td>
                        <td style="width:1%;text-align:center;">:</td>
                        <td></td>
                      </tr>
                      <tr>
                      <td style="width:10%;text-align:left;">Nama Bank</td>
                      <td style="width:1%;text-align:center;">:</td>
                      <td></td>
                      <td style="width:12%;text-align:left;">No Rekening</td>
                      <td style="width:1%;text-align:center;">:</td>
                      <td></td>
                      </tr>
                      <tr>
                        <td style="width:10%;text-align:left;">Email</td>
                      <td style="width:1%;text-align:center;">:</td>
                      <td>hrgl@bdrindonesia.co.id</td>
                      <td style="width:12%;text-align:left;">No NPWP</td>
                      <td style="width:1%;text-align:center;">:</td>
                      <td></td>
                      </tr>
                      </table>

                  <p></p>
                  <div class="info-buttons block row">
                       <div class="col-sm-2">
                                          <a href="dokumen/15028904050_KTP__KTP__KTP_10005_KTP_KTP.jpg" >
                     
                               <i class="icon-disk"></i>
                                   <span> KTP </span>           
                            </div></a>

                  <div class="col-sm-2">
                                            <a href="">
                                
                               <i class="icon-disk"></i>
                                   <span>NPWP</span>
                                   </div></a>

                  <div class="col-sm-2">
                                          <a href="dokumen/04890215041_BPJS_bpjs_naker_annisa.jpg">
                                
                               <i class="icon-disk"></i>
                                   <span>BPJS NAKER</span>
                         </div></a>

                  <div class="col-sm-2">
                                          <a href="dokumen/04890215041_BPJS_SEHAT_BPJS Annisa.docx">
                                                   <i class="icon-disk"></i>
                                   <span>BPJS SEHAT</span>
                            </div></a>

                  <div class="col-sm-2">
                                          <a href="">
                                
                               <i class="icon-disk"></i>
                                   <span>Buku Nikah</span>
                            </div></a>

                  <div class="col-sm-2">
                                          <a href="">
                                
                               <i class="icon-disk"></i>
                                   <span>Kartu Keluarga</span>
                            </div></a>

                          </div>

                          </div>


                      <div class="tab-pane active" id="pendidikan">
            <div class="panel panel-primary">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Pendidikan</h6></div>
                      <table id="example" class="table table-striped table-bordered table-hover" style="width:100%;">
          <thead>
            <TR>
                <th style="width:1%;text-align:center;">No</th>
          <th style="width:4%;text-align:center;">Tingkat</th>
          <th style="width:4%;text-align:center;">Sekolah/Universitas</th>
          <th style="width:6%;text-align:center;">Jurusan</th>
          <th style="width:3%;text-align:center;">IPK/Nilai</th>
          <th style="width:3%;text-align:center;">Gelar</th>
          <th style="width:6%;text-align:center;">Tempat</th>
          <!--<th style="width:6%;text-align:center;">Option</th>-->

      
            </TR>
          </thead>
            <tr>
      <TD VALIGN=TOP align=center>n/a</TD>
        <TD VALIGN=TOP style="text-align:center;">n/a</TD>
    <TD VALIGN=TOP>n/a</TD>
    <TD VALIGN=TOP>n/a</TD>
    <TD VALIGN=TOP align=center>n/a</TD>
    <TD VALIGN=TOP align=center>n/a</TD>
    <TD VALIGN=TOP align=center>n/a</TD>
 
    
</tr>

</table>
</div>
</div>
          <div class="tab-pane active" id="kursus">
            <div class="panel panel-primary">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Kursus</h6></div>
                      <table id="example" class="table table-striped table-bordered table-hover" style="width:100%;">
          <thead>
            <TR>
              <th style="width:1%;text-align:center;">No</th>
          <th style="width:6%;text-align:center;">Kursus</th>
          <th style="width:6%;text-align:center;">Instansi/Perusahaan</th>
          <th style="width:5%;text-align:center;">Kota</th>
          <th style="width:3%;text-align:center;">Tahun</th>
          <th style="width:3%;text-align:center;">Sertifikat</th>
          <th style="width:6%;text-align:center;">No Sertifikat</th>

      
            </TR>
          </thead>
              <TR>
        <TD VALIGN=TOP align=center>1</TD>
        <TD VALIGN=TOP>asdsads</TD>
    <TD VALIGN=TOP>asdads</TD>
         <TD VALIGN=TOP align=CENTER>asas</TD>
    <TD VALIGN=TOP align=CENTER>2013</TD>
    <TD VALIGN=TOP align=CENTER></TD>
    <TD VALIGN=TOP align=CENTER>qwqwqwq</TD>
      </TR>
</table>
</div>
</div>

          <div class="tab-pane active" id="keluarga">
           <div class="panel panel-primary">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Keluarga</h6></div>
                      <table id="example" class="table table-striped table-bordered table-hover" style="width:100%;">
          <thead>
            <TR>
              <th style="width:3%;text-align:center;">No</th>
              <th style="width:20%;text-align:center;">Tanggal Lahir</th>
              <th style="width:20%;text-align:center;">Nama Anggota Keluarga</th>
              <th style="width:20%;text-align:center;">Status Anggota Keluarga</th>
    
            </TR>
          </thead>
                    <TR>
                  <TD VALIGN=TOP align=center>1</TD>
                  <TD VALIGN=TOP align=CENTER>16/02/2016</TD>
                  <TD VALIGN=TOP align=LEFT>Nofri</TD>
                  <TD VALIGN=TOP align=CENTER>Istri/Suami</TD>

        </TR>
    
</table>
</div>
          </div>
          <div class="tab-pane active" id="organisasi">
            <p>
             
 <div class="panel panel-primary">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Organisasi</h6></div>
                      <table id="example" class="table table-striped table-bordered table-hover" style="width:100%;">
          <thead>
            <TR>
              <th style="width:3%;text-align:center;">No</th>
              <th style="width:20%;text-align:center;">Nama Organisasi</th>
              <th style="width:20%;text-align:center;">Jabatan</th>
              <th style="width:10%;text-align:center;">Tahun</th>  

            </TR>
          </thead>
                    <TR>
              <TD VALIGN=TOP align=center>n/a</TD>
              <TD VALIGN=TOP >n/a</TD>
              <TD VALIGN=TOP>n/a</TD>
              <TD VALIGN=TOP>n/a</TD>

        </TR>
    
</table>
</div>
          </div>

                    <div class="tab-pane active" id="pekerjaan">
            <div class="panel panel-primary">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Pekerjaan</h6></div>
                      <table id="example" class="table table-striped table-bordered table-hover" style="width:100%;">
          <thead>
            <TR>
              <th style="width:3%;text-align:center;">No</th>
              <th style="width:15%;text-align:center;">Perusahaan</th>
              <th style="width:10%;text-align:center;">Jabatan</th>
              <th style="width:20%;text-align:center;">Deskripsi Pekerjaan</th>
              <th style="width:15%;text-align:center;">Alamat</th>
              <th style="width:7%;text-align:center;">Tanggal Mulai</th>
              <th style="width:10%;text-align:center;">Tanggal Akhir</th>

      
            </TR>
          </thead>
                    <TR>
              <TD VALIGN=TOP align=center>n/a</TD>
              <TD VALIGN=TOP >n/a</TD>
              <TD VALIGN=TOP>n/a</TD>
              <TD VALIGN=TOP>n/a</TD>
              <TD VALIGN=TOP>n/a</TD>
              <TD VALIGN=TOP align=center>n/a</TD>
              <TD VALIGN=TOP align=center>n/a</TD>

        </TR>
    
                </table>
                </div>
                    </div>

          <div class="tab-pane active" id="kesehatan">
            <div class="panel panel-primary">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Kesehatan</h6></div>
                      <table id="example" class="table table-striped table-bordered table-hover" style="width:100%;">
          <thead>
            <TR>
                  <TH style="width:3%;text-align:center;">No</th>
                  <TH style="width:20%;text-align:center;">Penyakit</TH>
                  <TH style="width:6%;text-align:center;">Tahun Sakit</TH>
                  <TH style="width:15%;text-align:center;">Keterangan</TH>

            </TR>
          </thead>
                    <TR>
                      <TD VALIGN=TOP align=center>1</TD>
                      <TD VALIGN=TOP align=LEFT>adsasas</TD>
                      <TD VALIGN=TOP align=CENTER>2016</TD>
                      <TD VALIGN=TOP align=LEFT>qwqwqwqw</TD>

        </TR>
    
</table>
</div>
          </div>
          <div class="tab-pane active" id="penghargaan">
           <div class="panel panel-primary">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Penghargaan</h6></div>
                      <table id="example" class="table table-striped table-bordered table-hover" style="width:100%;">
          <thead>
            <TR>
                  <TH style="width:3%;text-align:center;">No</TH>
                  <TH style="width:15%;text-align:center;">Penghargaan</TH>
                  <TH style="width:15%;text-align:center;">Pemberi Penghargaan</TH>
                  <TH style="width:15%;text-align:center;">Tanggal Pemberian</TH>
                  <TH style="width:15%;text-align:center;">Keterangan</TH>

            </TR>
          </thead>
                    <TR>
                 <TD VALIGN=TOP align=center>1</TD>
                 <TD VALIGN=TOP align=LEFT>zxczxcxz</TD>
                 <TD VALIGN=TOP align=LEFT>zxczxc</TD>
                 <TD VALIGN=TOP align=CENTER>18/02/2016</TD>
                 <TD VALIGN=TOP align=LEFT>zxcxzc</TD>

        </TR>
              <TR>
                 <TD VALIGN=TOP align=center>2</TD>
                 <TD VALIGN=TOP align=LEFT>xzzxzxz</TD>
                 <TD VALIGN=TOP align=LEFT>zxzxz</TD>
                 <TD VALIGN=TOP align=CENTER>09/02/2016</TD>
                 <TD VALIGN=TOP align=LEFT></TD>

        </TR>
    
</table>
</div>

          </div>
          <div class="tab-pane active" id="hukuman">
            <div class="panel panel-primary">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Hukuman</h6></div>
                      <table id="example" class="table table-striped table-bordered table-hover" style="width:100%;">
          <thead>
            <TR>
              <TH ALIGN=CENTER width=4<?php echo '%>';?>No</TH>
              <TH ALIGN=CENTER width=10<?php echo '%>';?>Hukuman</TH>
              <TH ALIGN=CENTER width=15<?php echo '%>';?>Pemberi Hukuman</TH>
              <TH ALIGN=CENTER width=10<?php echo '%>';?>Tanggal Hukuman</TH>
              <TH ALIGN=CENTER width=10<?php echo '%>';?>No Surat/SK</TH>
              <TH ALIGN=CENTER width=10<?php echo '%>';?>Keterangan</TH>
            </TR>
          </thead>
                    <TR>
              <TD VALIGN=TOP align=center>1</TD>
              <TD VALIGN=TOP align=CENTER>tes</TD>
              <TD VALIGN=TOP align=LEFT>tes</TD>
              <TD VALIGN=TOP align=CENTER>25/02/2016</TD>
              <TD VALIGN=TOP align=CENTER>ga ada</TD>
              <TD VALIGN=TOP align=LEFT></TD>

        </TR>
    
</table>
</div>


          </div>
          <div class="tab-pane" id="mcu">
            <div class="panel panel-primary">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel MCU</h6></div>
                      <table id="example" class="table table-striped table-bordered table-hover" style="width:100%;">
          <thead>
            <TR>
                <TH ALIGN=CENTER width=4<?php echo '%>';?>No</TH>
                <TH ALIGN=CENTER width=10<?php echo '%>';?>Tanggal Pemeriksaan</TH>
                <TH ALIGN=CENTER width=10<?php echo '%>';?>Hasil Pemeriksaan</TH>
                <TH ALIGN=CENTER width=10<?php echo '%>';?>Tenaga Medis</TH>
                <TH ALIGN=CENTER width=15<?php echo '%>';?>Catatan Kesehatan</TH>
                <TH ALIGN=CENTER width=10<?php echo '%>';?>Tanggal dari</TH>
                <TH ALIGN=CENTER width=10<?php echo '%>';?>Tanggal sampai</TH>
            </TR>
          </thead>
                    <TR>
              <TD VALIGN=TOP align=center>n/a</TD>
              <TD VALIGN=TOP align=CENTER>n/a</TD>
              <TD VALIGN=TOP align=LEFT>n/a</TD>
              <TD VALIGN=TOP align=LEFT>n/a</TD>
              <TD VALIGN=TOP align=LEFT>n/a</TD>
              <TD VALIGN=TOP align=CENTER>n/a</TD>
              <TD VALIGN=TOP align=CENTER>n/a</TD>

        </TR>
    
</table>
</div>
          </div>

        </div> </div>

      </form>
<a href="#" class="back-to-top">Back to Top</a>
      
      
        
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