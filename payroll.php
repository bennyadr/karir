<?php
require_once "clspayroll.php";

$mjabatan = new payroll();
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';


switch ($action)
{

  case "edit":
	$mjabatan -> showEditjbtForm();
	break;

  case "saveEditPos":
	$mjabatan -> showjbtSaveEdit();
	break;

  case "savePos":
	$mjabatan -> showjabatanSave();
	break;

  case "del":
	$mjabatan -> deljabatan();
	break;

  case "addPos":
	$mjabatan -> showAddjabatan();
	break;

  case "downex":
        header("Content-Type: application/msexcel");
        header("Content-Disposition: attachment; filename=daftargaji.xls");
	$mjabatan -> showjabatanD();
	//$emp -> showEmployeedownL();
	break;

  case "gengaji":
	$mjabatan -> Gengaji();
	break;

  case "ctkgaji":
	$mjabatan -> showjabatanctk();
	break;

  default :
	$mjabatan -> showPayroll();
	break;
}
?>