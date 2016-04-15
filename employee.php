<?php
require 'clsEmployee.php';

$main = new employee();
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';


switch($action){

	// Data Pendidikan
	case "PendidikanAdd":
			$main -> PendidikanAddForm();
		break;
		case "PendidikanAddProses":
			$main -> PendidikanAddProses();
		break;
		case "PendidikanEdit":
			$main -> PendidikanEditForm();
		break;
		case "PendidikanEditProses":
			$main -> PendidikanEditProses();
		break;
		case "PendidikanDeleteProses":
			$main -> PendidikanDeleteProses();
		break;
	// end Data Pendidikan	
/********************************************************************************/
	// Data Kursus	
	case "KursusAdd":
			$main -> KursusAddForm();
		break;
		case "KursusAddProses":
			$main -> KursusAddProses();
		break;
		case "KursusEdit":
			$main -> KursusEditForm();
		break;
		case "KursusEditProses":
			$main -> KursusEditProses();
		break;
		case "KursusDeleteProses":
			$main -> KursusDeleteProses();
		break;
		// end Data Kursus

/********************************************************************************/
// Data Pekerjaan
	case "PekerjaanAdd":
			$main -> PekerjaanAddForm();
		break;
		case "PekerjaanAddProses":
			$main -> PekerjaanAddProses();
		break;
		case "PekerjaanEdit":
			$main -> PekerjaanEditForm();
		break;
		case "PekerjaanEditProses":
			$main -> PekerjaanEditProses();
		break;
		case "PekerjaanDeleteProses":
			$main -> PekerjaanDeleteProses();
		break;
		// end Data Pekerjaan
/********************************************************************************/
// Data Keluarga
	case "KeluargaAdd":
			$main -> KeluargaAddForm();
		break;
		case "KeluargaAddProses":
			$main -> KeluargaAddProses();
		break;
		case "KeluargaEdit":
			$main -> KeluargaEditForm();
		break;
		case "KeluargaEditProses":
			$main -> KeluargaEditProses();
		break;
		case "KeluargaDeleteProses":
			$main -> KeluargaDeleteProses();
		break;
		// end Data Keluarga
/********************************************************************************/
// Data Kesehatan
	case "KesehatanAdd":
			$main -> KesehatanAddForm();
		break;
		case "KesehatanAddProses":
			$main -> KesehatanAddProses();
		break;
		case "KesehatanEdit":
			$main -> KesehatanEditForm();
		break;
		case "KesehatanEditProses":
			$main -> KesehatanEditProses();
		break;
		case "KesehatanDeleteProses":
			$main -> KesehatanDeleteProses();
		break;
		// end Data Kesehatan
/********************************************************************************/
// Data Penghargaan
	case "PenghargaanAdd":
			$main -> PenghargaanAddForm();
		break;
		case "PenghargaanAddProses":
			$main -> PenghargaanAddProses();
		break;
		case "PenghargaanEdit":
			$main -> PenghargaanEditForm();
		break;
		case "PenghargaanEditProses":
			$main -> PenghargaanEditProses();
		break;
		case "PenghargaanDeleteProses":
			$main -> PenghargaanDeleteProses();
		break;
		// end Data Penghargaan
/********************************************************************************/
// Data Hukuman
	case "HukumanAdd":
			$main -> HukumanAddForm();
		break;
		case "HukumanAddProses":
			$main -> HukumanAddProses();
		break;
		case "HukumanEdit":
			$main -> HukumanEditForm();
		break;
		case "HukumanEditProses":
			$main -> HukumanEditProses();
		break;
		case "HukumanDeleteProses":
			$main -> HukumanDeleteProses();
		break;
		// end Data Hukuman

/********************************************************************************/
// Data Organisasi
	case "OrganisasiAdd":
			$main -> OrganisasiAddForm();
		break;
		case "OrganisasiAddProses":
			$main -> OrganisasiAddProses();
		break;
		case "OrganisasiEdit":
			$main -> OrganisasiEditForm();
		break;
		case "OrganisasiEditProses":
			$main -> OrganisasiEditProses();
		break;
		case "OrganisasiDeleteProses":
			$main -> OrganisasiDeleteProses();
		break;
		// end Data Organisasi
/********************************************************************************/
// Data MCU
	case "MCUAdd":
			$main -> MCUAddForm();
		break;
		case "MCUAddProses":
			$main -> MCUAddProses();
		break;
		case "MCUEdit":
			$main -> MCUEditForm();
		break;
		case "MCUEditProses":
			$main -> MCUEditProses();
		break;
		case "MCUDeleteProses":
			$main -> MCUDeleteProses();
		break;
		// end Data MCU
/********************************************************************************/

	default:
	$main->Show();
	break;

	case 'tidakaktif';
	$main->ShowTidakAktif();
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

	case "save":
	$main -> saveFoto();
	break;
}
	 
 
 ?>