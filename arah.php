 <?php
require 'clsarah.php';

$mobjek = new clsobjek();
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';


switch($action){
	case 'add';
	$mobjek->ShowAdd();
	break;
	
	case 'save';
	$mobjek->SaveProcess();
	break;
	
	case 'edit';
	$mobjek->ShowEdit();
	break;
	
	case 'update';
	$mobjek->UpdateProcess();
	break;
	
	case 'del';
	$mobjek->DeleteProcess();
	break;
	
  default :
	$mobjek -> showdata();
	break;
}
?>