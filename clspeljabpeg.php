<?php
require ('libs/Smarty.class.php');
require ('config.php');
//require ('user_cek.php');
class Karir {
	
	    function showKarir() {
		require ('user_cek.php');
  	    global $title,$db;
		$smarty = new Smarty;
 		$smarty->force_compile = true;
		//$smarty->debugging = true;
		$smarty->caching = true;
		$smarty->cache_lifetime = 120;
		$smarty->assign("title",$title);
		$smarty->assign("username",$_SESSION['username']);
		$smarty->assign("statuslogin",$_SESSION['statuslogin']);
		$smarty->assign("samping","37");
		$jabatanx = isset($_REQUEST['jabatan_name']) ? $_REQUEST['jabatan_name'] : '';
		$idkompetensi = isset($_REQUEST['idkompetensi']) ? $_REQUEST['idkompetensi'] : '';
		$keltingkatjbt = isset($_REQUEST['keltingkatjbt']) ? $_REQUEST['keltingkatjbt'] : '';
		
		$jabatan = $this -> jabatan_opt_generate($jabatanx);
		$smarty->assign("jabatan_opt", $jabatan);

		$smarty->display('peljabpeg.tpl');
		}

function jabatan_opt_generate($selected = '')
		{
		 	global $db; 
			
			$sqlBidang     = "SELECT distinct(jabatan_name) as jabatan FROM tbl_jabatan";
			$rsw = $db->Execute($sqlBidang);
	        if (!$rsw->RecordCount())
	        {
	             $kosong = 'kosong';
	             $agama_id[] = $kosong;
	             $agama_list[] = $kosong;
	        }
	        else
	        {

	            while ($row = $rsw->FetchRow()){

						$selected_opt = '';
						if ($row['jabatan'] == $selected)
						{
							$selected_opt = 'selected=selected';
						}
							
						$jabatan[] = array('id' => $row['jabatan'], 
											'selected'	=> $selected_opt,
											'nama' => $row['jabatan']);
	            }
	        }
	        
	        return $jabatan;
		}	

}
?>