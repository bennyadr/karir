<?php
	require_once "clscalpemegangjab.php";
	
	$karir = new Karir();
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

switch ($action)
{
	case "idposjbtkosong":
			   $karir -> showkarirsubmit();
    	break;

	default :
			   $karir -> showKarir();
    	break;
	}
	
?>