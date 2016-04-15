 <?php
require 'clsuploadfp.php';

$fp = new uploadfp();
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';


switch ($action)

{
	case "SendToDataSoft":
	$fp -> SendToDataSoft();
	break;
	
  case "Process":
	$fp -> Proses();
	break;	
	
  default :
	$fp -> showUploadFP();
	break;
}
?>