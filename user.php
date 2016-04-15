<?php
require 'clsuser.php';

$main = new muser();
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

switch($action){
	
	default:
	$main->Show();
	break;
	
	case 'add';
	$main->ShowAdd();
	break;
	
	case 'save';
	$main->SaveProcess();
	break;
	
	case 'edit';
	$main->ShowEdit();
	break;
	
	case 'update';
	$main->UpdateProcess();
	break;
	
	case 'del';
	$main->DeleteProcess();
	break;
}
	 
 
 ?>