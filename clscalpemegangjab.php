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
		$smarty->assign("samping","38");
		$jabatanx = isset($_REQUEST['jabatan_name']) ? $_REQUEST['jabatan_name'] : '';
		$idkompetensi = isset($_REQUEST['idkompetensi']) ? $_REQUEST['idkompetensi'] : '';
		$keltingkatjbt = isset($_REQUEST['keltingkatjbt']) ? $_REQUEST['keltingkatjbt'] : '';
		$syarat = $_POST['syarat'];
		$jabatan = $this -> jabatan_opt_generate($jabatanx);
		$smarty->assign("jabatan_opt", $jabatan);

		$sqlUser = "SELECT a.id, a.name, a.work_unit, a.isdiklat, a.gap, b.jabatan_name FROM calon_pejabat a inner join tbl_jabatan b on a.work_unit=b.id where gap>'$syarat'";
//echo $sqlUser;
			// Filter Kota
			if(!empty($jabatanx))
			{
				$sqlUser .= " and (";
				$sqlUser .= " jabatan_name = '".$jabatanx."'";
				$sqlUser .= ")";
			}
			

         
			$sql .= $sqlUser;
			//echo $sql;exit;
			$rs = $db->Execute($sql);

	        if (!$rs->RecordCount())
			{
			     $kosong = 'kosong';
	             $pos_list[] = array(
	                'no'=>$kosong,
					'name'=>$kosong,
					'jabatan'=>$kosong
		                        );
	        }
	        else
	        { 
				//$rs=mysql_query($sql);
	            $no = 0; 
				while ($row = $rs->FetchRow()){
				      ++$no;
	                  $pos_list[] = array(
	                    'no'=>$no,
						'name'=>$row['name'],
					    'jabatan'=>$row['jabatan_name']					
	                                    );
						//echo $pos_list;
	            }
				$nomor = $no;
	        }
				$smarty->assign("pos", $pos_list);
				
		$smarty->display('calpemegangjab.tpl');
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