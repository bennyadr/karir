<?php
	require_once "clsHasilKompetensi.php";
	
	$komptensi = new Kompetensi();
	$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';


switch ($action)
{
       case "input" : // Pemetaan gap kompetensi
          //echo "hai GUYS"; 
		   $komptensi -> showPetjunjukPengisiian();
           break;
	   case "idpenilaian" : 
			$sql_cek = "SELECT * FROM administrator where id=$_SESSION[useridsession]";
			$result_cek = $db -> Execute($sql_cek);
			$rs_cek = $result_cek -> FetchRow();
			if($rs_cek[2]=="admin"){
				echo "<script language=javascript>
	                    alert('Anda tidak berhak mengakses halaman ini.');
	                    history.go(-1);
	            </script>";
			}else{
		  		 $komptensi -> showIdPenilaian();
			}
           break;
	   case "jabatan" : // Pemetaan gap kompetensi
		   $komptensi -> showIdPenilaian();
           break;
	   case "pertanyaanKuesioner" : // Pemetaan gap kompetensi
		   	   $komptensi -> soalKompetensi();
           break;
	   case "kompklusterjbt" : // Pemetaan gap kompetensi
		   $komptensi -> showKompetensiKlusterJabatan();
           break;
	   case "addkompklusterjbt" : // Pemetaan gap kompetensi
		   $komptensi -> addKompetensiKlusterJabatan();
           break;
	   case "savekompklusterjbt" : // Pemetaan gap kompetensi
		   $komptensi -> saveKompetensiKlusterJabatan();
           break;
	   case "editkompklusterjbt" : // Pemetaan gap kompetensi
		   $komptensi -> editKompetensiKlusterJabatan();
           break;
	   case "updatekompklusterjbt" : // Pemetaan gap kompetensi
		   $komptensi -> updateKompetensiKlusterJabatan();
           break;
	   case "deletekompklusterjbt" : // Pemetaan gap kompetensi
		   $komptensi -> deleteKompetensiKlusterJabatan();
           break;
           default :
	   case "kompetensiPegawai" : // Pemetaan gap kompetensi
			   $komptensi -> showKompetensiPegawai2();
  			break;
	
     }
	
?>