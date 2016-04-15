 <?php
require 'clsuploaddata.php';

$main = new uploaddata();
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';


switch ($action)
{
	case "SendToDataSoft":
	$main -> SendToDataSoft();
	break;
	
  case "Process":
	$main -> Proses();
	break;	
	
  default :
	$main -> showUpload();
	break;
}
?>