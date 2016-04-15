 <?php
require 'clsnews.php';

$mbu = new news();
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';


switch($action){
	 case "edit":
	$mbu -> showEditjbtForm();
	break;

  case "saveEditPos":
	$mbu -> showjbtSaveEdit();
	break;

  case "savePos":
	$mbu -> showjabatanSave();
	break;

  case "del":
	$mbu -> deljabatan();
	break;

  case "addPos":
	$mbu -> showAddjabatan();
	break;
	
  case "proses":
	$mbu -> ProsesStatus();
	break;
	
  default :
	$mbu -> shownews();
	break;
}
?>