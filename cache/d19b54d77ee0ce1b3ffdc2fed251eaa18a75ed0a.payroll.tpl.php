<?php
/*%%SmartyHeaderCode:462756dcf7e679a184_10951976%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\payroll.tpl',
      1 => 1457320904,
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
  'nocache_hash' => '462756dcf7e679a184_10951976',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'periode' => 0,
    'idperiode' => 0,
    'pos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56dcf7e8d4aa24_34537417',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56dcf7e8d4aa24_34537417')) {
function content_56dcf7e8d4aa24_34537417 ($_smarty_tpl) {
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
							<li ><a href="potongan.php">Potongan</a></li>
							<li  class="active" ><a href="payroll.php">Payroll (Penggajian)</a></li>
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
					<h3>Payroll<small>Informasi Payroll</small></h3>
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
					 					 					 					 					 					 					 					 <li class="active">Payroll (Penggajian)</li>					 				</ul>
				<div class="visible-xs breadcrumb-toggle">
					<a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
				</div>
			</div>

				<!-- /main navigation -->
			<!-- /breadcrumbs line -->
			<!-- Table inside panel body -->
			    <table> 
			          <TD class=txt_form vAlign=center height=30>
			            <B>&nbsp;&nbsp;Periode [mm/yyyy] </B>
			            </TD>
			          <TD class=txt_form vAlign=center height=30>
			              &nbsp;
			              : 
			
						<select name="idperiode" onChange=submit()>
					          <option value=''>-- Pilih --</option>
					        
								<br />
<b>Notice</b>:  Undefined index: periode in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>95</b><br />
<br />
<b>Notice</b>:  Trying to get property of non-object in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>95</b><br />
				            </select>
			</TD>
			            
			        	<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			        	<td>	         
				<div class="table-controls">
					<p style="text-align:left;">
						<a href="pdfslipgaji2.php?idprd=<br />
<b>Notice</b>:  Undefined index: idperiode in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>131</b><br />
<br />
<b>Notice</b>:  Trying to get property of non-object in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>131</b><br />
" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>

				    </p>
				</div></td></table>	
							<!-- Striped datatable inside panel -->
			    <div class="panel panel-success">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Payroll</h6></div>
			                <table id="example" class="table table-striped table-bordered table-hover" style="width:100%; ">
                          <thead>
              <tr>
	  			  <th style="width:1%;text-align:center;">No</th>
				  <th style="width:2%;text-align:center;">Periode</th>
				  <th style="width:2%;text-align:center;">Nama</th>
				  <th style="width:3%;text-align:center;">Jabatan</th>
				  <th style="width:3%;text-align:center;">Upah</th>
				  <th style="width:3%;text-align:center;">T. Jabatan</th>
				  <th style="width:4%;text-align:center;">Trans & Meal</th>
				  <th style="width:3%;text-align:center;">T. Lain</th>
				  <th style="width:3%;text-align:center;">T. Hadir</th>
				  <th style="width:3%;text-align:center;">Pend. Lain</th>
				  <th style="width:3%;text-align:center;">PPH 21</th>
				  <th style="width:4%;text-align:center;">BPJS Naker (2%)</th>
				  <th style="width:4%;text-align:center;">BPJS Sehat (0,5%)</th>
				  <th style="width:2%;text-align:center;">Pin jam an</th>
				  <th style="width:2%;text-align:center;">Po tong an</th>
				  <th style="width:3%;text-align:center;">Pengu ra ngan</th>
				  <th style="width:3%;text-align:center;">THP</th>
	 </tr>
             </thead>
<tbody >
        <TR bgcolor=#BDCCDC >
        <TD VALIGN=TOP align=center>1</TD>
<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP align=LEFT>RIKA RAHIMDY</TD>
<TD VALIGN=TOP align=LEFT>Administration - Staff</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>1,567,912</TD>
<TD VALIGN=TOP align=right>783,957</TD>
<TD VALIGN=TOP align=right>391,979</TD>
<TD VALIGN=TOP align=right>149,325</TD>
<TD VALIGN=TOP align=right>391,979</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>49,600</TD>
<TD VALIGN=TOP align=right>47,037</TD>
<TD VALIGN=TOP align=right>14,511</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>61,548</TD>
<TD VALIGN=TOP align=right>3,223,604</TD>
</TR>
     <TR bgcolor= #DDE4F9 >
        <TD VALIGN=TOP align=center>2</TD>
<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP align=LEFT>AMRIYANTO</TD>
<TD VALIGN=TOP align=LEFT>Messenger</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>1,060,657</TD>
<TD VALIGN=TOP align=right>530,328</TD>
<TD VALIGN=TOP align=right>265,164</TD>
<TD VALIGN=TOP align=right>101,015</TD>
<TD VALIGN=TOP align=right>252,538</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>31,820</TD>
<TD VALIGN=TOP align=right>13,500</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>45,320</TD>
<TD VALIGN=TOP align=right>2,164,382</TD>
</TR>
     <TR bgcolor=#BDCCDC >
        <TD VALIGN=TOP align=center>3</TD>
<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP align=LEFT>POETRI ERWANDA SEPTIYANTI</TD>
<TD VALIGN=TOP align=LEFT>Staff</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>2,255,951</TD>
<TD VALIGN=TOP align=right>1,127,976</TD>
<TD VALIGN=TOP align=right>563,988</TD>
<TD VALIGN=TOP align=right>55,702</TD>
<TD VALIGN=TOP align=right>563,988</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>114,900</TD>
<TD VALIGN=TOP align=right>67,679</TD>
<TD VALIGN=TOP align=right>14,734</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>1,333,255</TD>
<TD VALIGN=TOP align=right>1,415,668</TD>
<TD VALIGN=TOP align=right>3,151,937</TD>
</TR>
     <TR bgcolor= #DDE4F9 >
        <TD VALIGN=TOP align=center>4</TD>
<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP align=LEFT>SUTEJO</TD>
<TD VALIGN=TOP align=LEFT>Administration Supervisor</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>1,873,725</TD>
<TD VALIGN=TOP align=right>936,863</TD>
<TD VALIGN=TOP align=right>468,432</TD>
<TD VALIGN=TOP align=right>261,450</TD>
<TD VALIGN=TOP align=right>468,432</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>69,400</TD>
<TD VALIGN=TOP align=right>56,212</TD>
<TD VALIGN=TOP align=right>16,820</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>73,032</TD>
<TD VALIGN=TOP align=right>3,935,870</TD>
</TR>
     <TR bgcolor=#BDCCDC >
        <TD VALIGN=TOP align=center>5</TD>
<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP align=LEFT>SADI </TD>
<TD VALIGN=TOP align=LEFT>Staff</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>1,333,763</TD>
<TD VALIGN=TOP align=right>666,882</TD>
<TD VALIGN=TOP align=right>333,441</TD>
<TD VALIGN=TOP align=right>627,186</TD>
<TD VALIGN=TOP align=right>333,441</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>23,900</TD>
<TD VALIGN=TOP align=right>40,013</TD>
<TD VALIGN=TOP align=right>13,500</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>53,513</TD>
<TD VALIGN=TOP align=right>3,241,200</TD>
</TR>
     <TR bgcolor= #DDE4F9 >
        <TD VALIGN=TOP align=center>6</TD>
<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP align=LEFT>YULYANTO ADI PRABOWO</TD>
<TD VALIGN=TOP align=LEFT>Staff</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>2,119,373</TD>
<TD VALIGN=TOP align=right>1,059,687</TD>
<TD VALIGN=TOP align=right>529,844</TD>
<TD VALIGN=TOP align=right>283,245</TD>
<TD VALIGN=TOP align=right>529,844</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>96,600</TD>
<TD VALIGN=TOP align=right>63,581</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>63,581</TD>
<TD VALIGN=TOP align=right>4,458,412</TD>
</TR>
     <TR bgcolor=#BDCCDC >
        <TD VALIGN=TOP align=center>7</TD>
<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP align=LEFT>ALI USMAN</TD>
<TD VALIGN=TOP align=LEFT>Office Boy</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>1,187,875</TD>
<TD VALIGN=TOP align=right>593,937</TD>
<TD VALIGN=TOP align=right>296,968</TD>
<TD VALIGN=TOP align=right>165,750</TD>
<TD VALIGN=TOP align=right>296,968</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>35,636</TD>
<TD VALIGN=TOP align=right>13,500</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>49,136</TD>
<TD VALIGN=TOP align=right>2,492,362</TD>
</TR>
     <TR bgcolor= #DDE4F9 >
        <TD VALIGN=TOP align=center>8</TD>
<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP align=LEFT>WINDA</TD>
<TD VALIGN=TOP align=LEFT>Administration - Staff</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>1,402,875</TD>
<TD VALIGN=TOP align=right>701,437</TD>
<TD VALIGN=TOP align=right>350,719</TD>
<TD VALIGN=TOP align=right>195,750</TD>
<TD VALIGN=TOP align=right>350,719</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>42,086</TD>
<TD VALIGN=TOP align=right>13,500</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>55,586</TD>
<TD VALIGN=TOP align=right>2,945,914</TD>
</TR>
     <TR bgcolor=#BDCCDC >
        <TD VALIGN=TOP align=center>9</TD>
<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP align=LEFT>BANGUN PURWANTO</TD>
<TD VALIGN=TOP align=LEFT>Administration - Staff</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>1,269,307</TD>
<TD VALIGN=TOP align=right>634,653</TD>
<TD VALIGN=TOP align=right>317,327</TD>
<TD VALIGN=TOP align=right>362,112</TD>
<TD VALIGN=TOP align=right>317,327</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>17,100</TD>
<TD VALIGN=TOP align=right>38,079</TD>
<TD VALIGN=TOP align=right>13,500</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>51,579</TD>
<TD VALIGN=TOP align=right>2,849,147</TD>
</TR>
     <TR bgcolor= #DDE4F9 >
        <TD VALIGN=TOP align=center>10</TD>
<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP align=LEFT>KIKI ANUGRAH MAHARANI</TD>
<TD VALIGN=TOP align=LEFT>Marketing Staff</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>2,118,645</TD>
<TD VALIGN=TOP align=right>1,059,323</TD>
<TD VALIGN=TOP align=right>563,988</TD>
<TD VALIGN=TOP align=right>808,490</TD>
<TD VALIGN=TOP align=right>563,988</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>103,100</TD>
<TD VALIGN=TOP align=right>63,559</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>63,559</TD>
<TD VALIGN=TOP align=right>5,050,875</TD>
</TR>
     <TR bgcolor=#BDCCDC >
        <TD VALIGN=TOP align=center>11</TD>
<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP align=LEFT>MOCH. ANWAR JULISUSANTO</TD>
<TD VALIGN=TOP align=LEFT>Sales Engineer</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>2,750,000</TD>
<TD VALIGN=TOP align=right>1,375,000</TD>
<TD VALIGN=TOP align=right>687,500</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>687,500</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>82,500</TD>
<TD VALIGN=TOP align=right>20,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>102,500</TD>
<TD VALIGN=TOP align=right>5,397,500</TD>
</TR>
     <TR bgcolor= #DDE4F9 >
        <TD VALIGN=TOP align=center>12</TD>
<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP align=LEFT>IVAN SADDAM ARDINGHI SIREGAR</TD>
<TD VALIGN=TOP align=LEFT>Staff</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>2,642,377</TD>
<TD VALIGN=TOP align=right>1,321,189</TD>
<TD VALIGN=TOP align=right>660,595</TD>
<TD VALIGN=TOP align=right>251,655</TD>
<TD VALIGN=TOP align=right>660,595</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>147,500</TD>
<TD VALIGN=TOP align=right>79,271</TD>
<TD VALIGN=TOP align=right>20,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>99,271</TD>
<TD VALIGN=TOP align=right>5,437,140</TD>
</TR>
     <TR bgcolor=#BDCCDC >
        <TD VALIGN=TOP align=center>13</TD>
<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP align=LEFT>DAMARJATI SAPTO ARIOYUDHO</TD>
<TD VALIGN=TOP align=LEFT>Administration Supervisor</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>2,625,000</TD>
<TD VALIGN=TOP align=right>1,312,500</TD>
<TD VALIGN=TOP align=right>656,250</TD>
<TD VALIGN=TOP align=right>250,000</TD>
<TD VALIGN=TOP align=right>656,250</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>139,000</TD>
<TD VALIGN=TOP align=right>78,750</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>78,750</TD>
<TD VALIGN=TOP align=right>5,421,250</TD>
</TR>
     <TR bgcolor= #DDE4F9 >
        <TD VALIGN=TOP align=center>14</TD>
<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP align=LEFT>EMILDA SITARA</TD>
<TD VALIGN=TOP align=LEFT>Marketing Staff</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>2,068,000</TD>
<TD VALIGN=TOP align=right>1,034,000</TD>
<TD VALIGN=TOP align=right>517,000</TD>
<TD VALIGN=TOP align=right>196,000</TD>
<TD VALIGN=TOP align=right>517,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>97,700</TD>
<TD VALIGN=TOP align=right>62,040</TD>
<TD VALIGN=TOP align=right>20,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>82,040</TD>
<TD VALIGN=TOP align=right>4,249,960</TD>
</TR>
     <TR bgcolor=#BDCCDC >
        <TD VALIGN=TOP align=center>15</TD>
<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP align=LEFT>ASRI MAULIA RAHMA</TD>
<TD VALIGN=TOP align=LEFT>Staff</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>1,718,182</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>1,718,182</TD>
</TR>
     <TR bgcolor= #DDE4F9 >
        <TD VALIGN=TOP align=center>16</TD>
<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP align=LEFT>TOMMY ALAMANDA GULTOM</TD>
<TD VALIGN=TOP align=LEFT>Business Unit Director</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>2,969,820</TD>
<TD VALIGN=TOP align=right>1,484,910</TD>
<TD VALIGN=TOP align=right>742,455</TD>
<TD VALIGN=TOP align=right>782,840</TD>
<TD VALIGN=TOP align=right>742,455</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>146,100</TD>
<TD VALIGN=TOP align=right>89,095</TD>
<TD VALIGN=TOP align=right>23,625</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>112,720</TD>
<TD VALIGN=TOP align=right>6,609,760</TD>
</TR>
     <TR bgcolor=#BDCCDC >
        <TD VALIGN=TOP align=center>17</TD>
<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP align=LEFT>USMARYONO</TD>
<TD VALIGN=TOP align=LEFT>Business Unit Director</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>7,875,000</TD>
<TD VALIGN=TOP align=right>3,937,500</TD>
<TD VALIGN=TOP align=right>1,968,750</TD>
<TD VALIGN=TOP align=right>750,000</TD>
<TD VALIGN=TOP align=right>1,968,750</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>1,466,000</TD>
<TD VALIGN=TOP align=right>157,500</TD>
<TD VALIGN=TOP align=right>23,625</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>181,125</TD>
<TD VALIGN=TOP align=right>16,318,875</TD>
</TR>
     <TR bgcolor= #DDE4F9 >
        <TD VALIGN=TOP align=center>18</TD>
<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP align=LEFT>MUNAWAR ZEGA</TD>
<TD VALIGN=TOP align=LEFT>Support Manager</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>6,750,000</TD>
<TD VALIGN=TOP align=right>3,375,000</TD>
<TD VALIGN=TOP align=right>1,687,500</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>1,687,500</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>1,226,700</TD>
<TD VALIGN=TOP align=right>135,000</TD>
<TD VALIGN=TOP align=right>23,625</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>158,625</TD>
<TD VALIGN=TOP align=right>13,341,375</TD>
</TR>
     <TR bgcolor=#BDCCDC >
        <TD VALIGN=TOP align=center>19</TD>
<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP align=LEFT>ANNISA NURUL HIKMAH</TD>
<TD VALIGN=TOP align=LEFT>HR Supervisor</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>1,500,000</TD>
<TD VALIGN=TOP align=right>750,000</TD>
<TD VALIGN=TOP align=right>357,955</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>357,955</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>19,200</TD>
<TD VALIGN=TOP align=right>45,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>45,000</TD>
<TD VALIGN=TOP align=right>2,920,910</TD>
</TR>
     <TR bgcolor= #DDE4F9 >
        <TD VALIGN=TOP align=center>20</TD>
<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP align=LEFT>HUSAINI</TD>
<TD VALIGN=TOP align=LEFT>Contractor</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>5,000,000</TD>
<TD VALIGN=TOP align=right>2,500,000</TD>
<TD VALIGN=TOP align=right>1,250,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>1,250,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>675,900</TD>
<TD VALIGN=TOP align=right>150,000</TD>
<TD VALIGN=TOP align=right>23,625</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>173,625</TD>
<TD VALIGN=TOP align=right>9,826,375</TD>
</TR>
     <TR bgcolor=#BDCCDC >
        <TD VALIGN=TOP align=center>21</TD>
<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP align=LEFT>FILYO RONDONUWU</TD>
<TD VALIGN=TOP align=LEFT>Business Unit Director</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>5,000,000</TD>
<TD VALIGN=TOP align=right>2,500,000</TD>
<TD VALIGN=TOP align=right>1,250,000</TD>
<TD VALIGN=TOP align=right>4,285,715</TD>
<TD VALIGN=TOP align=right>1,250,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>675,900</TD>
<TD VALIGN=TOP align=right>150,000</TD>
<TD VALIGN=TOP align=right>23,625</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>173,625</TD>
<TD VALIGN=TOP align=right>14,112,090</TD>
</TR>
     <TR bgcolor= #DDE4F9 >
        <TD VALIGN=TOP align=center>22</TD>
<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP align=LEFT>SUPARMAN</TD>
<TD VALIGN=TOP align=LEFT>Contractor</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>4,000,000</TD>
<TD VALIGN=TOP align=right>2,000,000</TD>
<TD VALIGN=TOP align=right>1,000,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>1,000,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>372,400</TD>
<TD VALIGN=TOP align=right>120,000</TD>
<TD VALIGN=TOP align=right>23,625</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>143,625</TD>
<TD VALIGN=TOP align=right>7,856,375</TD>
</TR>
     <TR bgcolor=#BDCCDC >
        <TD VALIGN=TOP align=center>23</TD>
<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP align=LEFT>SAMSUDIN</TD>
<TD VALIGN=TOP align=LEFT>Contractor</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>4,000,000</TD>
<TD VALIGN=TOP align=right>2,000,000</TD>
<TD VALIGN=TOP align=right>1,000,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>1,000,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>372,400</TD>
<TD VALIGN=TOP align=right>120,000</TD>
<TD VALIGN=TOP align=right>23,625</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>143,625</TD>
<TD VALIGN=TOP align=right>7,856,375</TD>
</TR>
     <TR bgcolor= #DDE4F9 >
        <TD VALIGN=TOP align=center>24</TD>
<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP align=LEFT>MUH GULUH</TD>
<TD VALIGN=TOP align=LEFT>Contractor</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>4,000,000</TD>
<TD VALIGN=TOP align=right>2,000,000</TD>
<TD VALIGN=TOP align=right>1,000,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>1,000,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>372,400</TD>
<TD VALIGN=TOP align=right>120,000</TD>
<TD VALIGN=TOP align=right>23,625</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>143,625</TD>
<TD VALIGN=TOP align=right>7,856,375</TD>
</TR>
     <TR bgcolor=#BDCCDC >
        <TD VALIGN=TOP align=center>25</TD>
<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP align=LEFT>SUGIANTO</TD>
<TD VALIGN=TOP align=LEFT>Contractor</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>4,000,000</TD>
<TD VALIGN=TOP align=right>2,000,000</TD>
<TD VALIGN=TOP align=right>1,000,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>1,000,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>372,400</TD>
<TD VALIGN=TOP align=right>120,000</TD>
<TD VALIGN=TOP align=right>23,625</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>143,625</TD>
<TD VALIGN=TOP align=right>7,856,375</TD>
</TR>
     <TR bgcolor= #DDE4F9 >
        <TD VALIGN=TOP align=center>26</TD>
<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP align=LEFT>WAHYU SAPUTRO</TD>
<TD VALIGN=TOP align=LEFT>Advisor</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>1,750,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>1,750,000</TD>
</TR>
     <TR bgcolor=#BDCCDC >
        <TD VALIGN=TOP align=center>27</TD>
<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP align=LEFT>JYALITA NITI HANDIPANI</TD>
<TD VALIGN=TOP align=LEFT>Administration - Staff</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>1,500,000</TD>
<TD VALIGN=TOP align=right>750,000</TD>
<TD VALIGN=TOP align=right>375,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>375,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>19,200</TD>
<TD VALIGN=TOP align=right>45,000</TD>
<TD VALIGN=TOP align=right>15,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>60,000</TD>
<TD VALIGN=TOP align=right>2,940,000</TD>
</TR>
     <TR bgcolor= #DDE4F9 >
        <TD VALIGN=TOP align=center>28</TD>
<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP align=LEFT>VEICKY DELFIANDRI TAUFIK</TD>
<TD VALIGN=TOP align=LEFT>Project Manager</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>8,125,000</TD>
<TD VALIGN=TOP align=right>4,062,500</TD>
<TD VALIGN=TOP align=right>2,031,250</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>2,031,250</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>162,500</TD>
<TD VALIGN=TOP align=right>30,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>192,500</TD>
<TD VALIGN=TOP align=right>16,057,500</TD>
</TR>
     <TR bgcolor=#BDCCDC >
        <TD VALIGN=TOP align=center>29</TD>
<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP align=LEFT>AGUSTINA MAYAWATI </TD>
<TD VALIGN=TOP align=LEFT>Accounting Supervisor</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
</TR>
     <TR bgcolor= #DDE4F9 >
        <TD VALIGN=TOP align=center>30</TD>
<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP align=LEFT>AHMAD JAENAL ARIFIN</TD>
<TD VALIGN=TOP align=LEFT>Office Boy</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>800,000</TD>
<TD VALIGN=TOP align=right>400,000</TD>
<TD VALIGN=TOP align=right>227,273</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>227,273</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>24,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>24,000</TD>
<TD VALIGN=TOP align=right>1,630,546</TD>
</TR>
     <TR bgcolor=#BDCCDC >
        <TD VALIGN=TOP align=center>31</TD>
<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP align=LEFT>ANANG BUDI SETYAWAN</TD>
<TD VALIGN=TOP align=LEFT>Contractor</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>4,000,000</TD>
<TD VALIGN=TOP align=right>2,000,000</TD>
<TD VALIGN=TOP align=right>1,000,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>1,000,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>372,400</TD>
<TD VALIGN=TOP align=right>120,000</TD>
<TD VALIGN=TOP align=right>23,625</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>143,625</TD>
<TD VALIGN=TOP align=right>7,856,375</TD>
</TR>
     <TR bgcolor= #DDE4F9 >
        <TD VALIGN=TOP align=center>32</TD>
<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP align=LEFT>CERAH SRI IRNANTI</TD>
<TD VALIGN=TOP align=LEFT>Cashier - Staff</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
</TR>
     <TR bgcolor=#BDCCDC >
        <TD VALIGN=TOP align=center>33</TD>
<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP align=LEFT>DICKY SUHARTO </TD>
<TD VALIGN=TOP align=LEFT>CEO</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>15,675,000</TD>
<TD VALIGN=TOP align=right>7,162,500</TD>
<TD VALIGN=TOP align=right>3,581,250</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>3,581,250</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>2,971,600</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>30,000,000</TD>
</TR>
     <TR bgcolor= #DDE4F9 >
        <TD VALIGN=TOP align=center>34</TD>
<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP align=LEFT>IHSANUL HAKIM</TD>
<TD VALIGN=TOP align=LEFT>Staff</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>3,477,273</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>3,477,273</TD>
</TR>
     <TR bgcolor=#BDCCDC >
        <TD VALIGN=TOP align=center>35</TD>
<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP align=LEFT>INDAH DWI ARIANI</TD>
<TD VALIGN=TOP align=LEFT>Secretary</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>2,704,545</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>19,200</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>23,625</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>23,625</TD>
<TD VALIGN=TOP align=right>2,680,920</TD>
</TR>
     <TR bgcolor= #DDE4F9 >
        <TD VALIGN=TOP align=center>36</TD>
<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP align=LEFT>KARTIKA LEONI DWIJAYANTI</TD>
<TD VALIGN=TOP align=LEFT>Secretary</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
</TR>
     <TR bgcolor=#BDCCDC >
        <TD VALIGN=TOP align=center>37</TD>
<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP align=LEFT>MARIANA </TD>
<TD VALIGN=TOP align=LEFT>Finance Supervisor</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>3,863,636</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>3,863,636</TD>
</TR>
     <TR bgcolor= #DDE4F9 >
        <TD VALIGN=TOP align=center>38</TD>
<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP align=LEFT>MUHAMMAD IQBAL IBRAHIM</TD>
<TD VALIGN=TOP align=LEFT>QHSE Officer</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>1,600,000</TD>
<TD VALIGN=TOP align=right>800,000</TD>
<TD VALIGN=TOP align=right>400,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>400,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>19,200</TD>
<TD VALIGN=TOP align=right>48,000</TD>
<TD VALIGN=TOP align=right>23,625</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>71,625</TD>
<TD VALIGN=TOP align=right>3,128,375</TD>
</TR>
     <TR bgcolor=#BDCCDC >
        <TD VALIGN=TOP align=center>39</TD>
<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP align=LEFT>SITI MAWADATURROHMAH</TD>
<TD VALIGN=TOP align=LEFT>Staff</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
</TR>
     <TR bgcolor= #DDE4F9 >
        <TD VALIGN=TOP align=center>40</TD>
<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP align=LEFT>PANDUJATI</TD>
<TD VALIGN=TOP align=LEFT>Vice President Support</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>2,500,000</TD>
<TD VALIGN=TOP align=right>1,250,000</TD>
<TD VALIGN=TOP align=right>625,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>625,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>146,700</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>5,000,000</TD>
</TR>
     <TR bgcolor=#BDCCDC >
        <TD VALIGN=TOP align=center>41</TD>
<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP align=LEFT>CHANDRA CAHYADI</TD>
<TD VALIGN=TOP align=LEFT>Contractor</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>4,000,000</TD>
<TD VALIGN=TOP align=right>2,000,000</TD>
<TD VALIGN=TOP align=right>1,000,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>1,000,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>372,400</TD>
<TD VALIGN=TOP align=right>120,000</TD>
<TD VALIGN=TOP align=right>23,625</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>143,625</TD>
<TD VALIGN=TOP align=right>7,856,375</TD>
</TR>
     <TR bgcolor= #DDE4F9 >
        <TD VALIGN=TOP align=center>42</TD>
<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP align=LEFT>MUGHIRA SUBHAN</TD>
<TD VALIGN=TOP align=LEFT>Marketing Manager</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
</TR>
     <TR bgcolor=#BDCCDC >
        <TD VALIGN=TOP align=center>43</TD>
<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP align=LEFT>PENDI YANI </TD>
<TD VALIGN=TOP align=LEFT>General Affair Supervisor</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
</TR>
     <TR bgcolor= #DDE4F9 >
        <TD VALIGN=TOP align=center>44</TD>
<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP align=LEFT>DANIEL AZIS</TD>
<TD VALIGN=TOP align=LEFT>Contractor</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>5,000,000</TD>
<TD VALIGN=TOP align=right>2,500,000</TD>
<TD VALIGN=TOP align=right>1,250,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>1,250,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>372,400</TD>
<TD VALIGN=TOP align=right>150,000</TD>
<TD VALIGN=TOP align=right>23,625</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>173,625</TD>
<TD VALIGN=TOP align=right>9,826,375</TD>
</TR>
     <TR bgcolor=#BDCCDC >
        <TD VALIGN=TOP align=center>45</TD>
<TD VALIGN=TOP align=center>042015</TD>
        <TD VALIGN=TOP align=LEFT>TAUCHID ROELIANTO</TD>
<TD VALIGN=TOP align=LEFT>Vice President Operational</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>5,000,000</TD>
<TD VALIGN=TOP align=right>2,500,000</TD>
<TD VALIGN=TOP align=right>1,250,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>1,250,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>777,200</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>10,000,000</TD>
</TR>
     <TR bgcolor= #DDE4F9 >
        <TD VALIGN=TOP align=center>46</TD>
<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP align=LEFT>RIKA RAHIMDY</TD>
<TD VALIGN=TOP align=LEFT>Administration - Staff</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>1,567,912</TD>
<TD VALIGN=TOP align=right>783,957</TD>
<TD VALIGN=TOP align=right>391,979</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>391,979</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>49,600</TD>
<TD VALIGN=TOP align=right>47,037</TD>
<TD VALIGN=TOP align=right>14,511</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>61,548</TD>
<TD VALIGN=TOP align=right>3,074,279</TD>
</TR>
     <TR bgcolor=#BDCCDC >
        <TD VALIGN=TOP align=center>47</TD>
<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP align=LEFT>AMRIYANTO</TD>
<TD VALIGN=TOP align=LEFT>Messenger</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>1,060,657</TD>
<TD VALIGN=TOP align=right>530,328</TD>
<TD VALIGN=TOP align=right>265,164</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>252,538</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>31,820</TD>
<TD VALIGN=TOP align=right>13,500</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>45,320</TD>
<TD VALIGN=TOP align=right>2,063,367</TD>
</TR>
     <TR bgcolor= #DDE4F9 >
        <TD VALIGN=TOP align=center>48</TD>
<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP align=LEFT>POETRI ERWANDA SEPTIYANTI</TD>
<TD VALIGN=TOP align=LEFT>Staff</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>2,255,951</TD>
<TD VALIGN=TOP align=right>1,127,976</TD>
<TD VALIGN=TOP align=right>563,988</TD>
<TD VALIGN=TOP align=right>1,000,000</TD>
<TD VALIGN=TOP align=right>563,988</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>114,900</TD>
<TD VALIGN=TOP align=right>67,679</TD>
<TD VALIGN=TOP align=right>14,734</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>82,413</TD>
<TD VALIGN=TOP align=right>5,429,490</TD>
</TR>
     <TR bgcolor=#BDCCDC >
        <TD VALIGN=TOP align=center>49</TD>
<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP align=LEFT>SUTEJO</TD>
<TD VALIGN=TOP align=LEFT>Administration Supervisor</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>1,873,725</TD>
<TD VALIGN=TOP align=right>936,863</TD>
<TD VALIGN=TOP align=right>468,432</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>468,432</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>69,400</TD>
<TD VALIGN=TOP align=right>56,212</TD>
<TD VALIGN=TOP align=right>16,820</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>73,032</TD>
<TD VALIGN=TOP align=right>3,674,420</TD>
</TR>
     <TR bgcolor= #DDE4F9 >
        <TD VALIGN=TOP align=center>50</TD>
<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP align=LEFT>SADI </TD>
<TD VALIGN=TOP align=LEFT>Staff</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>1,333,763</TD>
<TD VALIGN=TOP align=right>666,882</TD>
<TD VALIGN=TOP align=right>333,441</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>333,441</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>23,900</TD>
<TD VALIGN=TOP align=right>40,013</TD>
<TD VALIGN=TOP align=right>13,500</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>53,513</TD>
<TD VALIGN=TOP align=right>2,614,014</TD>
</TR>
     <TR bgcolor=#BDCCDC >
        <TD VALIGN=TOP align=center>51</TD>
<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP align=LEFT>YULYANTO ADI PRABOWO</TD>
<TD VALIGN=TOP align=LEFT>Staff</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>2,119,373</TD>
<TD VALIGN=TOP align=right>1,059,687</TD>
<TD VALIGN=TOP align=right>529,844</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>529,844</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>96,600</TD>
<TD VALIGN=TOP align=right>63,581</TD>
<TD VALIGN=TOP align=right>23,625</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>87,206</TD>
<TD VALIGN=TOP align=right>4,151,542</TD>
</TR>
     <TR bgcolor= #DDE4F9 >
        <TD VALIGN=TOP align=center>52</TD>
<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP align=LEFT>ALI USMAN</TD>
<TD VALIGN=TOP align=LEFT>Office Boy</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>1,187,875</TD>
<TD VALIGN=TOP align=right>593,937</TD>
<TD VALIGN=TOP align=right>296,968</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>296,968</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>35,636</TD>
<TD VALIGN=TOP align=right>13,500</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>49,136</TD>
<TD VALIGN=TOP align=right>2,326,612</TD>
</TR>
     <TR bgcolor=#BDCCDC >
        <TD VALIGN=TOP align=center>53</TD>
<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP align=LEFT>WINDA</TD>
<TD VALIGN=TOP align=LEFT>Administration - Staff</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>1,402,875</TD>
<TD VALIGN=TOP align=right>701,437</TD>
<TD VALIGN=TOP align=right>350,719</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>350,719</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>42,086</TD>
<TD VALIGN=TOP align=right>13,500</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>55,586</TD>
<TD VALIGN=TOP align=right>2,750,164</TD>
</TR>
     <TR bgcolor= #DDE4F9 >
        <TD VALIGN=TOP align=center>54</TD>
<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP align=LEFT>BANGUN PURWANTO</TD>
<TD VALIGN=TOP align=LEFT>Administration - Staff</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>1,269,307</TD>
<TD VALIGN=TOP align=right>634,653</TD>
<TD VALIGN=TOP align=right>317,327</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>317,327</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>17,100</TD>
<TD VALIGN=TOP align=right>38,079</TD>
<TD VALIGN=TOP align=right>13,500</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>51,579</TD>
<TD VALIGN=TOP align=right>2,487,035</TD>
</TR>
     <TR bgcolor=#BDCCDC >
        <TD VALIGN=TOP align=center>55</TD>
<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP align=LEFT>KIKI ANUGRAH MAHARANI</TD>
<TD VALIGN=TOP align=LEFT>Marketing Staff</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>2,118,645</TD>
<TD VALIGN=TOP align=right>1,059,323</TD>
<TD VALIGN=TOP align=right>563,988</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>563,988</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>103,100</TD>
<TD VALIGN=TOP align=right>63,559</TD>
<TD VALIGN=TOP align=right>23,625</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>87,184</TD>
<TD VALIGN=TOP align=right>4,218,760</TD>
</TR>
     <TR bgcolor= #DDE4F9 >
        <TD VALIGN=TOP align=center>56</TD>
<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP align=LEFT>MOCH. ANWAR JULISUSANTO</TD>
<TD VALIGN=TOP align=LEFT>Sales Engineer</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>2,750,000</TD>
<TD VALIGN=TOP align=right>1,375,000</TD>
<TD VALIGN=TOP align=right>687,500</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>687,500</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>146,700</TD>
<TD VALIGN=TOP align=right>82,500</TD>
<TD VALIGN=TOP align=right>20,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>102,500</TD>
<TD VALIGN=TOP align=right>5,397,500</TD>
</TR>
     <TR bgcolor=#BDCCDC >
        <TD VALIGN=TOP align=center>57</TD>
<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP align=LEFT>IVAN SADDAM ARDINGHI SIREGAR</TD>
<TD VALIGN=TOP align=LEFT>Staff</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>2,642,377</TD>
<TD VALIGN=TOP align=right>1,321,189</TD>
<TD VALIGN=TOP align=right>630,568</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>630,568</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>147,500</TD>
<TD VALIGN=TOP align=right>79,271</TD>
<TD VALIGN=TOP align=right>20,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>99,271</TD>
<TD VALIGN=TOP align=right>5,125,431</TD>
</TR>
     <TR bgcolor= #DDE4F9 >
        <TD VALIGN=TOP align=center>58</TD>
<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP align=LEFT>DAMARJATI SAPTO ARIOYUDHO</TD>
<TD VALIGN=TOP align=LEFT>Administration Supervisor</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>2,625,000</TD>
<TD VALIGN=TOP align=right>1,312,500</TD>
<TD VALIGN=TOP align=right>656,250</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>656,250</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>139,000</TD>
<TD VALIGN=TOP align=right>78,750</TD>
<TD VALIGN=TOP align=right>23,625</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>102,375</TD>
<TD VALIGN=TOP align=right>5,147,625</TD>
</TR>
     <TR bgcolor=#BDCCDC >
        <TD VALIGN=TOP align=center>59</TD>
<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP align=LEFT>EMILDA SITARA</TD>
<TD VALIGN=TOP align=LEFT>Marketing Staff</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>2,068,000</TD>
<TD VALIGN=TOP align=right>1,034,000</TD>
<TD VALIGN=TOP align=right>517,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>517,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>97,700</TD>
<TD VALIGN=TOP align=right>62,040</TD>
<TD VALIGN=TOP align=right>23,625</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>85,665</TD>
<TD VALIGN=TOP align=right>4,050,335</TD>
</TR>
     <TR bgcolor= #DDE4F9 >
        <TD VALIGN=TOP align=center>60</TD>
<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP align=LEFT>ASRI MAULIA RAHMA</TD>
<TD VALIGN=TOP align=LEFT>Staff</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>1,350,000</TD>
<TD VALIGN=TOP align=right>675,000</TD>
<TD VALIGN=TOP align=right>337,500</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>337,500</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>19,200</TD>
<TD VALIGN=TOP align=right>40,500</TD>
<TD VALIGN=TOP align=right>23,625</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>64,125</TD>
<TD VALIGN=TOP align=right>2,635,875</TD>
</TR>
     <TR bgcolor=#BDCCDC >
        <TD VALIGN=TOP align=center>61</TD>
<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP align=LEFT>TOMMY ALAMANDA GULTOM</TD>
<TD VALIGN=TOP align=LEFT>Business Unit Director</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>2,969,820</TD>
<TD VALIGN=TOP align=right>1,484,910</TD>
<TD VALIGN=TOP align=right>742,455</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>742,455</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>146,100</TD>
<TD VALIGN=TOP align=right>89,095</TD>
<TD VALIGN=TOP align=right>23,625</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>112,720</TD>
<TD VALIGN=TOP align=right>5,826,920</TD>
</TR>
     <TR bgcolor= #DDE4F9 >
        <TD VALIGN=TOP align=center>62</TD>
<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP align=LEFT>USMARYONO</TD>
<TD VALIGN=TOP align=LEFT>Business Unit Director</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>7,875,000</TD>
<TD VALIGN=TOP align=right>3,937,500</TD>
<TD VALIGN=TOP align=right>1,968,750</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>1,968,750</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>1,466,000</TD>
<TD VALIGN=TOP align=right>157,500</TD>
<TD VALIGN=TOP align=right>23,625</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>181,125</TD>
<TD VALIGN=TOP align=right>15,568,875</TD>
</TR>
     <TR bgcolor=#BDCCDC >
        <TD VALIGN=TOP align=center>63</TD>
<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP align=LEFT>MUNAWAR ZEGA</TD>
<TD VALIGN=TOP align=LEFT>Support Manager</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>7,250,000</TD>
<TD VALIGN=TOP align=right>3,625,000</TD>
<TD VALIGN=TOP align=right>1,812,500</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>1,812,500</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>1,226,700</TD>
<TD VALIGN=TOP align=right>145,000</TD>
<TD VALIGN=TOP align=right>23,625</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>168,625</TD>
<TD VALIGN=TOP align=right>14,331,375</TD>
</TR>
     <TR bgcolor= #DDE4F9 >
        <TD VALIGN=TOP align=center>64</TD>
<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP align=LEFT>ANNISA NURUL HIKMAH</TD>
<TD VALIGN=TOP align=LEFT>HR Supervisor</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>1,750,000</TD>
<TD VALIGN=TOP align=right>875,000</TD>
<TD VALIGN=TOP align=right>437,500</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>437,500</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>19,200</TD>
<TD VALIGN=TOP align=right>52,500</TD>
<TD VALIGN=TOP align=right>23,625</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>76,125</TD>
<TD VALIGN=TOP align=right>3,423,875</TD>
</TR>
     <TR bgcolor=#BDCCDC >
        <TD VALIGN=TOP align=center>65</TD>
<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP align=LEFT>HUSAINI</TD>
<TD VALIGN=TOP align=LEFT>Contractor</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>5,000,000</TD>
<TD VALIGN=TOP align=right>2,500,000</TD>
<TD VALIGN=TOP align=right>1,250,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>1,250,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>675,900</TD>
<TD VALIGN=TOP align=right>150,000</TD>
<TD VALIGN=TOP align=right>23,625</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>173,625</TD>
<TD VALIGN=TOP align=right>9,826,375</TD>
</TR>
     <TR bgcolor= #DDE4F9 >
        <TD VALIGN=TOP align=center>66</TD>
<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP align=LEFT>FILYO RONDONUWU</TD>
<TD VALIGN=TOP align=LEFT>Business Unit Director</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>6,500,000</TD>
<TD VALIGN=TOP align=right>3,500,000</TD>
<TD VALIGN=TOP align=right>1,250,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>1,250,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>675,900</TD>
<TD VALIGN=TOP align=right>200,000</TD>
<TD VALIGN=TOP align=right>23,625</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>223,625</TD>
<TD VALIGN=TOP align=right>12,276,375</TD>
</TR>
     <TR bgcolor=#BDCCDC >
        <TD VALIGN=TOP align=center>67</TD>
<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP align=LEFT>SUPARMAN</TD>
<TD VALIGN=TOP align=LEFT>Contractor</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>4,000,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>372,400</TD>
<TD VALIGN=TOP align=right>80,000</TD>
<TD VALIGN=TOP align=right>23,625</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>103,625</TD>
<TD VALIGN=TOP align=right>3,896,375</TD>
</TR>
     <TR bgcolor= #DDE4F9 >
        <TD VALIGN=TOP align=center>68</TD>
<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP align=LEFT>SAMSUDIN</TD>
<TD VALIGN=TOP align=LEFT>Contractor</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>4,000,000</TD>
<TD VALIGN=TOP align=right>2,000,000</TD>
<TD VALIGN=TOP align=right>1,000,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>1,000,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>372,400</TD>
<TD VALIGN=TOP align=right>120,000</TD>
<TD VALIGN=TOP align=right>23,625</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>143,625</TD>
<TD VALIGN=TOP align=right>7,856,375</TD>
</TR>
     <TR bgcolor=#BDCCDC >
        <TD VALIGN=TOP align=center>69</TD>
<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP align=LEFT>MUH GULUH</TD>
<TD VALIGN=TOP align=LEFT>Contractor</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>4,000,000</TD>
<TD VALIGN=TOP align=right>2,000,000</TD>
<TD VALIGN=TOP align=right>1,000,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>1,000,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>372,400</TD>
<TD VALIGN=TOP align=right>120,000</TD>
<TD VALIGN=TOP align=right>23,625</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>143,625</TD>
<TD VALIGN=TOP align=right>7,856,375</TD>
</TR>
     <TR bgcolor= #DDE4F9 >
        <TD VALIGN=TOP align=center>70</TD>
<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP align=LEFT>SUGIANTO</TD>
<TD VALIGN=TOP align=LEFT>Contractor</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>4,000,000</TD>
<TD VALIGN=TOP align=right>2,000,000</TD>
<TD VALIGN=TOP align=right>1,000,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>1,000,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>372,400</TD>
<TD VALIGN=TOP align=right>120,000</TD>
<TD VALIGN=TOP align=right>23,625</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>143,625</TD>
<TD VALIGN=TOP align=right>7,856,375</TD>
</TR>
     <TR bgcolor=#BDCCDC >
        <TD VALIGN=TOP align=center>71</TD>
<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP align=LEFT>WAHYU SAPUTRO</TD>
<TD VALIGN=TOP align=LEFT>Advisor</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>1,750,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>1,750,000</TD>
</TR>
     <TR bgcolor= #DDE4F9 >
        <TD VALIGN=TOP align=center>72</TD>
<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP align=LEFT>JYALITA NITI HANDIPANI</TD>
<TD VALIGN=TOP align=LEFT>Administration - Staff</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>1,500,000</TD>
<TD VALIGN=TOP align=right>750,000</TD>
<TD VALIGN=TOP align=right>375,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>375,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>19,200</TD>
<TD VALIGN=TOP align=right>45,000</TD>
<TD VALIGN=TOP align=right>15,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>60,000</TD>
<TD VALIGN=TOP align=right>2,940,000</TD>
</TR>
     <TR bgcolor=#BDCCDC >
        <TD VALIGN=TOP align=center>73</TD>
<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP align=LEFT>VEICKY DELFIANDRI TAUFIK</TD>
<TD VALIGN=TOP align=LEFT>Project Manager</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>8,125,000</TD>
<TD VALIGN=TOP align=right>4,062,500</TD>
<TD VALIGN=TOP align=right>1,938,920</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>1,938,920</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>162,500</TD>
<TD VALIGN=TOP align=right>30,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>192,500</TD>
<TD VALIGN=TOP align=right>15,872,840</TD>
</TR>
     <TR bgcolor= #DDE4F9 >
        <TD VALIGN=TOP align=center>74</TD>
<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP align=LEFT>AGUSTINA MAYAWATI </TD>
<TD VALIGN=TOP align=LEFT>Accounting Supervisor</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
</TR>
     <TR bgcolor=#BDCCDC >
        <TD VALIGN=TOP align=center>75</TD>
<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP align=LEFT>AHMAD JAENAL ARIFIN</TD>
<TD VALIGN=TOP align=LEFT>Office Boy</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>800,000</TD>
<TD VALIGN=TOP align=right>400,000</TD>
<TD VALIGN=TOP align=right>200,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>200,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>24,000</TD>
<TD VALIGN=TOP align=right>23,625</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>47,625</TD>
<TD VALIGN=TOP align=right>1,552,375</TD>
</TR>
     <TR bgcolor= #DDE4F9 >
        <TD VALIGN=TOP align=center>76</TD>
<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP align=LEFT>ANANG BUDI SETYAWAN</TD>
<TD VALIGN=TOP align=LEFT>Contractor</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>4,000,000</TD>
<TD VALIGN=TOP align=right>2,000,000</TD>
<TD VALIGN=TOP align=right>1,000,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>1,000,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>372,400</TD>
<TD VALIGN=TOP align=right>120,000</TD>
<TD VALIGN=TOP align=right>23,625</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>143,625</TD>
<TD VALIGN=TOP align=right>7,856,375</TD>
</TR>
     <TR bgcolor=#BDCCDC >
        <TD VALIGN=TOP align=center>77</TD>
<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP align=LEFT>CERAH SRI IRNANTI</TD>
<TD VALIGN=TOP align=LEFT>Cashier - Staff</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>859,091</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>17,182</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>17,182</TD>
<TD VALIGN=TOP align=right>841,909</TD>
</TR>
     <TR bgcolor= #DDE4F9 >
        <TD VALIGN=TOP align=center>78</TD>
<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP align=LEFT>DICKY SUHARTO </TD>
<TD VALIGN=TOP align=LEFT>CEO</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>15,675,000</TD>
<TD VALIGN=TOP align=right>7,162,500</TD>
<TD VALIGN=TOP align=right>3,581,250</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>3,581,250</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>2,971,600</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>30,000,000</TD>
</TR>
     <TR bgcolor=#BDCCDC >
        <TD VALIGN=TOP align=center>79</TD>
<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP align=LEFT>IHSANUL HAKIM</TD>
<TD VALIGN=TOP align=LEFT>Staff</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>2,250,000</TD>
<TD VALIGN=TOP align=right>1,125,000</TD>
<TD VALIGN=TOP align=right>562,500</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>562,500</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>19,200</TD>
<TD VALIGN=TOP align=right>67,500</TD>
<TD VALIGN=TOP align=right>23,625</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>91,125</TD>
<TD VALIGN=TOP align=right>4,408,875</TD>
</TR>
     <TR bgcolor= #DDE4F9 >
        <TD VALIGN=TOP align=center>80</TD>
<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP align=LEFT>INDAH DWI ARIANI</TD>
<TD VALIGN=TOP align=LEFT>Secretary</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>1,750,000</TD>
<TD VALIGN=TOP align=right>875,000</TD>
<TD VALIGN=TOP align=right>437,500</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>437,500</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>19,200</TD>
<TD VALIGN=TOP align=right>52,500</TD>
<TD VALIGN=TOP align=right>23,625</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>76,125</TD>
<TD VALIGN=TOP align=right>3,423,875</TD>
</TR>
     <TR bgcolor=#BDCCDC >
        <TD VALIGN=TOP align=center>81</TD>
<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP align=LEFT>KARTIKA LEONI DWIJAYANTI</TD>
<TD VALIGN=TOP align=LEFT>Secretary</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
</TR>
     <TR bgcolor= #DDE4F9 >
        <TD VALIGN=TOP align=center>82</TD>
<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP align=LEFT>MARIANA </TD>
<TD VALIGN=TOP align=LEFT>Finance Supervisor</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>2,500,000</TD>
<TD VALIGN=TOP align=right>1,250,000</TD>
<TD VALIGN=TOP align=right>625,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>625,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>588,700</TD>
<TD VALIGN=TOP align=right>75,000</TD>
<TD VALIGN=TOP align=right>23,625</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>98,625</TD>
<TD VALIGN=TOP align=right>4,901,375</TD>
</TR>
     <TR bgcolor=#BDCCDC >
        <TD VALIGN=TOP align=center>83</TD>
<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP align=LEFT>MUHAMMAD IQBAL IBRAHIM</TD>
<TD VALIGN=TOP align=LEFT>QHSE Officer</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>1,600,000</TD>
<TD VALIGN=TOP align=right>800,000</TD>
<TD VALIGN=TOP align=right>400,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>400,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>19,200</TD>
<TD VALIGN=TOP align=right>48,000</TD>
<TD VALIGN=TOP align=right>23,625</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>71,625</TD>
<TD VALIGN=TOP align=right>3,128,375</TD>
</TR>
     <TR bgcolor= #DDE4F9 >
        <TD VALIGN=TOP align=center>84</TD>
<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP align=LEFT>SITI MAWADATURROHMAH</TD>
<TD VALIGN=TOP align=LEFT>Staff</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
</TR>
     <TR bgcolor=#BDCCDC >
        <TD VALIGN=TOP align=center>85</TD>
<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP align=LEFT>PANDUJATI</TD>
<TD VALIGN=TOP align=LEFT>Vice President Support</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
</TR>
     <TR bgcolor= #DDE4F9 >
        <TD VALIGN=TOP align=center>86</TD>
<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP align=LEFT>CHANDRA CAHYADI</TD>
<TD VALIGN=TOP align=LEFT>Contractor</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>4,000,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>372,400</TD>
<TD VALIGN=TOP align=right>80,000</TD>
<TD VALIGN=TOP align=right>23,625</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>103,625</TD>
<TD VALIGN=TOP align=right>3,896,375</TD>
</TR>
     <TR bgcolor=#BDCCDC >
        <TD VALIGN=TOP align=center>87</TD>
<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP align=LEFT>MUGHIRA SUBHAN</TD>
<TD VALIGN=TOP align=LEFT>Marketing Manager</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
</TR>
     <TR bgcolor= #DDE4F9 >
        <TD VALIGN=TOP align=center>88</TD>
<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP align=LEFT>PENDI YANI </TD>
<TD VALIGN=TOP align=LEFT>General Affair Supervisor</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
</TR>
     <TR bgcolor=#BDCCDC >
        <TD VALIGN=TOP align=center>89</TD>
<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP align=LEFT>DANIEL AZIS</TD>
<TD VALIGN=TOP align=LEFT>Contractor</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>5,000,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>372,400</TD>
<TD VALIGN=TOP align=right>100,000</TD>
<TD VALIGN=TOP align=right>23,625</TD>
<TD VALIGN=TOP align=right>1,000,000</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>1,123,625</TD>
<TD VALIGN=TOP align=right>3,876,375</TD>
</TR>
     <TR bgcolor= #DDE4F9 >
        <TD VALIGN=TOP align=center>90</TD>
<TD VALIGN=TOP align=center>052015</TD>
        <TD VALIGN=TOP align=LEFT>TAUCHID ROELIANTO</TD>
<TD VALIGN=TOP align=LEFT>Vice President Operational</TD>
<!--<TD VALIGN=TOP align=right><br />
<b>Notice</b>:  Undefined index: poslevel in <b>C:\xampp\htdocs\sip\templates_c\d19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a_0.file.payroll.tpl.cache.php</b> on line <b>196</b><br />
</TD>-->
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
<TD VALIGN=TOP align=right>0</TD>
</TR>
 	</tbody></table>
				        </div>
						
	
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