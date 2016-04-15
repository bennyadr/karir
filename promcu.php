<?php
require_once "clspromcu.php";

$profile = new profile();

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';


switch ($action)
{
	// Data Hukuman
	case "add":
	$profile -> Add();
	break;
	case "save":
	$profile -> Save();
	break;
	case "edit":
	$profile -> Edit();
	break;
	case "update":
	$profile -> Update();
	break;
	case "del":
	$profile -> Delete();
	break;
	
}
?>