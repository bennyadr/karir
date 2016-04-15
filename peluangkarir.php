<?php
	require_once "clspeluangkarir.php";
	
	$karir = new karir();
	$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';
    	switch ($action) {


	case "idpeluangkarir":
			   $karir -> showkarirsubmit();
    	break;

	default : 
			   $karir -> showKarir();
    	break;
	}
	
?>