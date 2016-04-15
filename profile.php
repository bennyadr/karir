 <?php
require 'clsprofile.php';

$profile = new profile();
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

switch ($action)
{
	// Upload KTP
	case "upktp":
	$profile -> UploadKTP();
	break;
	
	case "upktpprocess":
	$profile -> UploadKTPProcess();
	break;
	//end Upload KTP
	
	// Upload NPWP
	case "upnpwp":
	$profile -> UploadNPWP();
	break;
	
	case "upnpwpprocess":
	$profile -> UploadNPWPProcess();
	break;
	//end Upload NPWP
	
	// Upload BPJS NAKER
	case "upbpjs":
	$profile -> UploadBPJS();
	break;
	
	case "upbpjsprocess":
	$profile -> UploadBPJSProcess();
	break;
	//end Upload BPJS NAKER
	
	// Upload BPJS SEHAT
	case "upbpjssehat":
	$profile -> UploadBPJSSehat();
	break;
	
	case "upbpjssehatprocess":
	$profile -> UploadBPJSSehatProcess();
	break;
	//end Upload BPJS NAKER
	
	// Upload Buku Nikah
	case "upbukunikah":
	$profile -> UploadBukuNikah();
	break;
	
	case "upbukunikahprocess":
	$profile -> UploadBukuNikahProcess();
	break;
	//end Upload Buku Nikah
	
	// Upload Kartu Keluarga
	case "upkk":
	$profile -> UploadKK();
	break;
	
	case "upkkprocess":
	$profile -> UploadKKProcess();
	break;
	//end Upload Kartu Keluarga
	
	// Upload Photo
	case "uppphoto":
	$profile -> UploadPhoto();
	break;
	
	case "upphotoprocess":
	$profile -> UploadPhotoProcess();
	break;
	//end Upload Photo
	
	case "print":
	include "cetakempind.php";
	break;
	
    case "edit":
	$profile -> EditProfile();
	break;
	
	case "update":
	$profile -> updateProfile();
	break;
	
	// Data Pendidikan
	case "addpendidikan":
	$profile -> AddPendidikan();
	break;
	case "savependidikan":
	$profile -> SavePendidikan();
	break;
	case "editpendidikan":
	$profile -> EditPendidikan();
	break;
	case "updatependidikan":
	$profile -> UpdatePendidikan();
	break;
	case "delpendidikan":
	$profile -> DeletePendidikan();
	break;
	
	// Data Kursus
	case "addkursus":
	$profile -> AddKursus();
	break;
	case "savekursus":
	$profile -> SaveKursus();
	break;
	case "editkursus":
	$profile -> EditKursus();
	break;
	case "updatekursus":
	$profile -> UpdateKursus();
	break;
	case "delkursus":
	$profile -> DeleteKursus();
	break;
	
	// Data Pengalaman
	case "addpengalaman":
	$profile -> AddPengalaman();
	break;
	case "savepengalaman":
	$profile -> SavePengalaman();
	break;
	case "editpengalaman":
	$profile -> EditPengalaman();
	break;
	case "updatepengalaman":
	$profile -> UpdatePengalaman();
	break;
	case "delpengalaman":
	$profile -> DeletePengalaman();
	break;
	
		// Data Organisasi
	case "addorganisasi":
	$profile -> AddOrganisasi();
	break;
	case "saveorganisasi":
	$profile -> SaveOrganisasi();
	break;
	case "editorganisasi":
	$profile -> EditOrganisasi();
	break;
	case "updateorganisasi":
	$profile -> UpdateOrganisasi();
	break;
	case "delorganisasi":
	$profile -> DeleteOrganisasi();
	break;
	
	default :
	$profile -> showProfile();
	break;
}
?>