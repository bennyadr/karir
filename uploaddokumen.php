<?php
require 'clsuploaddokumen.php';

$main = new Upload();
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';


switch($action){

	case "list":
	$main -> showUpload();
	break;

	case "list1":
	$main -> showUploadOff();
	break;

	 case "ktp":
	$main -> showUploadKTPForm();
	break;

  case "KTPProses":
	$main -> KTPProses();
	break;
	
  case "npwp":
	$main -> NPWPForm();
	break;

  case "NPWPProses":
	$main -> NPWPProses();
	break;
	
  case "bpjs":
	$main -> showUploadBPJSForm();
	break;

  case "BPJSProses":
	$main -> BPJSProses();
	break;
	
  case "bpjssehat":
	$main -> showUploadBPJSSehatForm();
	break;

  case "BPJSSehatProses":
	$main -> BPJSSehatProses();
	break;	
  
  case "nikah":
	$main -> showUploadNikahForm();
	break;

  case "NikahProses":
	$main -> NikahProses();
	break;	
	
  case "kk":
	$main -> showUploadKKForm();
	break;

  case "KKProses":
	$main -> KKProses();
	break;
	
  case "reke":
	$main -> showUploadRekeForm();
	break;

  case "RekeProses":
	$main -> RekeProses();
	break;
}

?>