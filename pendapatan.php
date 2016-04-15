<?php
require_once "clspendapatan.php";
$mpendapatan = new pendapatan();
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';


switch ($action)
{
  case "edit":
	$mpendapatan -> showEditEmployeeForm();
	break;

  case "saveEmployee":
	$mpendapatan -> saveEmployee();
	break;

  case "showAddMenu":
	$mpendapatan -> showAddEmployeeForm();
	break;

  case "editProcess":
	$mpendapatan -> editEmployee();
	break;

  case "del":
	$mpendapatan -> deleteEmployee();
	break;

  default :
	$mpendapatan -> showpendapatan();
	break;
}
?>