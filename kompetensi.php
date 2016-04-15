 <?php
require 'clskompetensi.php';

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

	 case "idpenilaian" : 
			$sql_cek = "SELECT * FROM administrator where id=$_SESSION[userid]";
			$result_cek = $db -> Execute($sql_cek);
			$rs_cek = $result_cek -> FetchRow();
			if($rs_cek[2]=="admin"){
				echo "<script language=javascript>
	                    alert('Anda tidak berhak mengakses halaman ini.');
	                    history.go(-1);
	            </script>";
			}else{
		  		 $mobjek -> showIdPenilaian();
			}
           break;

	   case "jabatan" : // Pemetaan gap kompetensi
		   $mobjek -> showIdPenilaian();
           break;
	
  default :
	$mobjek -> showdata();
	break;
}
?>