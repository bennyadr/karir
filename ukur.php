<?php
	require_once "clsukurkomp.php";
	
	$ukur = new ukurkomp();
	$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

    switch ($action) 
	{
		default :
        case "petunjukhard" :
		   $ukur -> showPetjunjukPengisianhard();
        break;
		
		case "idpenilaian" :
		   $ukur -> showIdPenilaian();	
        break;
        
		
		case "idpenilaianhard" :
		   $ukur -> showIdPenilaianhard();	
        break;
		
		case "pertanyaan" :
		   $ukur -> soalKompetensi();
			break;
		//}
     }
?>