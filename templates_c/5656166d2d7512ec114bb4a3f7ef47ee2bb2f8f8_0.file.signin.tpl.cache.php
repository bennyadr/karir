<?php /* Smarty version 3.1.27, created on 2016-03-17 05:09:27
         compiled from "C:\xampp\htdocs\sip\templates\signin.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1644256ea2df718d4a3_70904529%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5656166d2d7512ec114bb4a3f7ef47ee2bb2f8f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\signin.tpl',
      1 => 1456129356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1644256ea2df718d4a3_70904529',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56ea2df72fa197_35536553',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ea2df72fa197_35536553')) {
function content_56ea2df72fa197_35536553 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1644256ea2df718d4a3_70904529';
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

</head>

<body class="full-width page-condensed">

	<!-- Navbar -->
	<div class="navbar navbar-inverse" role="navigation">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-right">
				<span class="sr-only">Toggle navbar</span>
				<i class="icon-grid3"></i>
			</button>
			<a class="navbar-brand" style="margin-top:-4px;" href="#"><alt="S.I.P">Sistem Informasi Pegawai</a>
		</div>

		<ul class="nav navbar-nav navbar-right collapse">
			
			
		</ul>
	</div>
	<!-- /navbar -->

	<!-- Login wrapper -->
	<div class="login-wrapper">
    	<form action="?action=dologin" role="form" method="POST">
			<div class="popup-header">
				<a href="#" class="pull-left"><i class="icon-user-plus"></i></a>
				<span class="text-semibold">User Login</span>
				<div class="btn-group pull-right">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cogs"></i></a>
                    <ul class="dropdown-menu icons-right dropdown-menu-right">
						<!--<li><a href="#"><i class="icon-people"></i> Change user</a></li>-->
						<li><a href="#"><i class="icon-info"></i> Forgot password?</a></li>
						<li><a href="#"><i class="icon-support"></i> Contact admin</a></li>
						<!--<li><a href="#"><i class="icon-wrench"></i> Settings</a></li>-->
                    </ul>
				</div>
			</div>
			<div class="well">
				<div class="form-group has-feedback">
					<label>Username</label>
					<input type="text" class="form-control" placeholder="Username" name="username" required>
					<i class="icon-users form-control-feedback"></i>
				</div>

				<div class="form-group has-feedback">
					<label>Password</label>
					<input type="password" class="form-control" placeholder="Password" name="password" required>
					<i class="icon-lock form-control-feedback"></i>
				</div>

				<div class="row form-actions">
					<div class="col-xs-6">
						<div class="checkbox checkbox-success">
						<label>
							<input type="checkbox" class="styled">
							Remember me
						</label>
						</div>
					</div>

					<div class="col-xs-6">
						<button type="submit" class="btn btn-warning pull-right"><i class="icon-menu2"></i> Sign in</button>
					</div>
				</div>
			</div>
    	</form>
	</div>  
	<!-- /login wrapper -->
	
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>