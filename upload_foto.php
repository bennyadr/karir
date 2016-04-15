<?php
require_once "clsuploadfoto.php";

$emp = new uploadfoto();
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';


switch ($action)
{

  case "edit":
	$emp -> showEditUserForm();
	break;

  case "addProcess":
	$emp -> saveUser();
	break;

  default :
	$emp -> showUser();
	break;
}

?>