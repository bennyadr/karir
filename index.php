<?php
require 'clsmain.php';

$main = new MAIN();
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'login';

switch($action){
	case 'login';
	$main->ShowLogin();
	break;
	
	case 'logout';
	$main->DoLogout();
	break;
	
	case 'keluar';
	$main->Keluar();
	break;
	
	case 'dologin';
	$main->DoLogin();
	break;
  
	case 'showmenu';
 	$main->ShowMenu();	
	break;	
	
	case 'home';
 	$main->ShowHome();	
	break;	
 	 
	default:
	session_start();
	if(isset($_SESSION['username'])){
	$main->ShowHome();
	}else{
		$main->ShowLogin();
		}
	break;
}
	 
 
 ?>