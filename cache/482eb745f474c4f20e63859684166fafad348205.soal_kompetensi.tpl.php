<?php
/*%%SmartyHeaderCode:259255711ab008c2ef3_12489296%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '482eb745f474c4f20e63859684166fafad348205' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karir\\templates\\soal_kompetensi.tpl',
      1 => 1460368465,
      2 => 'file',
    ),
    'c35f576cdadeaf749e52d9c4f71f8b8e386d3203' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karir\\templates\\header.tpl',
      1 => 1460354985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '259255711ab008c2ef3_12489296',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'soal' => 0,
    'idkompetensi' => 0,
    'nikPenilai' => 0,
    'nikDinilai' => 0,
    'posisi' => 0,
    'kembali' => 0,
    'pertanyaan' => 0,
    'opsiJawaban' => 0,
    'opsiJawaban2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5711ab0103c7a0_58478398',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5711ab0103c7a0_58478398')) {
function content_5711ab0103c7a0_58478398 ($_smarty_tpl) {
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

        <!-- Page content -->
        <div class="page-content">


            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h3>Soal Kompetensi</h3>
                </div>

                
            </div>

<br/>
<form id="form1" name="form1" method="post" action="ukur.php?action=pertanyaan">
<TABLE align=center CELLSPACING=1 CELLPADDING=2 width=100<?php echo '%>';?>
    <TR>
        <TD colspan="2" align="right">
	    <input name="name" type="hidden" value=""/>
            <input name="soal" type="hidden" value="1"/>
            <input name="idkompetensi" type="hidden" value=""/>
            <input name="nikPenilai" type="hidden" value=""/>
            <input name="nikDinilai" type="hidden" value=""/>
	       <input name="posisi" type="hidden" value=""/>
            <input name="kembali" type="hidden" value="<br />
<b>Notice</b>:  Undefined index: kembali in <b>C:\xampp\htdocs\karir\templates_c\482eb745f474c4f20e63859684166fafad348205_0.file.soal_kompetensi.tpl.cache.php</b> on line <b>76</b><br />
<br />
<b>Notice</b>:  Trying to get property of non-object in <b>C:\xampp\htdocs\karir\templates_c\482eb745f474c4f20e63859684166fafad348205_0.file.soal_kompetensi.tpl.cache.php</b> on line <b>76</b><br />
"/>
            
            <!--        		<input name="" type="button" onClick="javascript: window.location='ukurkomp.php?mod=idpenilaian&nipRelasiJabatan=&nip=&idkompetensi=&kembali=kembali'" value="Back"/>
            -->
        </TD>     
    </TR>

<table width="50%">
    <tr>
        <td><span class="label label-block label-danger text-left"><h6>Nama Penilai : </h6></span></td><br />
    </tr>
 </table><br />
 
<table>
    <tr>
   <td align="left" valign="top" style="font-size:17px;"><b>1. &nbsp; &nbsp; &nbsp; </b></td>
   <td align="left" valign="top" style="font-size:17px;"><b></b></td>
    </tr>
    
    <tr>
    <td align="left" valign="top" style="font-size:17px;"></td>
    <td align="left" valign="top" style="font-size:17px;"><b></b></td> <br />
    </tr>
  
  <tr>
  <td align="left" valign="top" style="font-size:17px;"></td>
    <td align="left" valign="top" style="font-size:17px;"><b> <input type='radio' name='rangenya' value='1'> 1 (sangat tidak sering)
											<input type='radio' name='rangenya' value='2'> 2 (Tidak Sering)
											<input type='radio' name='rangenya' value='3'> 3 (Ragu-ragu)
											<input type='radio' name='rangenya' value='4'> 4 (Sering)
											<input type='radio' name='rangenya' value='5'> 5 (Sangat sering) <br></b></td>
    </tr>
</table>
    
 <div class="form-actions text-left">
           <input type="submit" data-toggle="modal" role="button"  value="Next" class="btn btn-success">
              </div>
</form>


<?php }
}
?>