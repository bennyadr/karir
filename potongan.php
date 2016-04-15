<?php
require_once "clspotongan.php";
$mpotongan = new potongan();
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';


switch ($action)
{
  case "edit":
	$mpotongan -> showEditEmployeeForm();
	break;

  case "saveEmployee":
	$mpotongan -> saveEmployee();
	break;

  case "showAddMenu":
	$mpotongan -> showAddEmployeeForm();
	break;

  case "editProcess":
	$mpotongan -> editEmployee();
	break;

  case "del":
	$mpotongan -> deleteEmployee();
	break;

  default :
	$mpotongan -> showPotongan();
	break;
}
?>