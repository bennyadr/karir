<?php /* Smarty version 3.1.27, created on 2016-04-15 19:40:14
         compiled from "C:\xampp\htdocs\karir\templates\header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:299745711277ec19de7_10699819%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c35f576cdadeaf749e52d9c4f71f8b8e386d3203' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karir\\templates\\header.tpl',
      1 => 1460354985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '299745711277ec19de7_10699819',
  'variables' => 
  array (
    'title' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5711277ec5e657_99866213',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5711277ec5e657_99866213')) {
function content_5711277ec5e657_99866213 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '299745711277ec19de7_10699819';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/londinium-theme.css" rel="stylesheet" type="text/css">
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link href="css/icons.css" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">

<?php echo '<script'; ?>
 type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/charts/sparkline.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/forms/uniform.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/forms/select2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/forms/inputmask.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/forms/autosize.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/forms/inputlimit.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/forms/listbox.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/forms/multiselect.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/forms/validate.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/forms/tags.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/forms/switch.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/forms/uploader/plupload.full.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/forms/uploader/plupload.queue.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/forms/wysihtml5/wysihtml5.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/forms/wysihtml5/toolbar.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/interface/daterangepicker.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/interface/fancybox.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/interface/moment.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/interface/jgrowl.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/interface/datatables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/interface/tabletools.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/interface/colorpicker.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/interface/fullcalendar.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/interface/timepicker.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/application.js"><?php echo '</script'; ?>
>

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
		<?php if ($_smarty_tpl->tpl_vars['username']->value == "admin") {?>
		
		<?php } else { ?>
			
			<?php }?>

			<li class="user dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown">
					<!--<img src="http://placehold.it/300">-->
					<span><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span>
					<i class="caret"></i>
				</a>
				<ul class="dropdown-menu dropdown-menu-right icons-right">
					<li><a href="password.php"><i class="icon-key"></i> Change Password</a></li>
					<li><a href="index.php?action=logout"><i class="icon-exit"></i> Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<!-- /navbar --><?php }
}
?>