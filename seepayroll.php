<?php
require_once "clsseepayroll.php";

$spay = new seepay();

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';


switch ($action)
{
	case "SendToDataSoft":
	$spay -> SendToDataSoft();
	break;
	
  case "Process":
	$spay -> Proses();
	break;	
	
  default :
	$spay -> showSeePay();
	break;
}
?>