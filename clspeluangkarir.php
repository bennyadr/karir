<?php
require ('libs/Smarty.class.php');
require ('config.php');
require ('clsUtil.php');
//require ('user_cek.php');
class karir
	{

		  function showKarir()
        {
        	error_reporting(0);
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
			$smarty->assign("samping","35");
        	
        	$idkompetensix = isset($_REQUEST['idkompetensi']) ? $_REQUEST['idkompetensi'] : '';
        	$jabatanx = isset($_REQUEST['jabatan']) ? $_REQUEST['jabatan'] : '';
        	$jabatan = $this -> jabatan_opt_generate($jabatanx);
			$smarty->assign("jabatan_opt", $jabatan);

        	
		
	       // Filter Jabatan
			if(!empty($jabatanx))
			{
				$sql_kompetensi .= " and (";
				$sql_kompetensi .= " jabatan_name = '".$jabatanx."'";
				$sql_kompetensi .= ")";
			}
			

			$sql_kompetensi = "select id, jabatan_name, kelompokjbt, Nama_KelompokTingkatJbt from tbl_jabatan a 
				inner join tbl_kelompoktingkatjbt b on a.id_kelompoktingkatjbt=b.id_kelompoktingkatjbt
				inner join tbl_kelompokjbt c on b.id_kelompokjbt=c.id_kelompokjbt";
			$rs = $db->Execute($sql_kompetensi);
			
	        if (!$rs->RecordCount())
			{
			     $kosong = 'kosong';
	             $pos_list[] = array(
	                'no'=>$kosong,
	                'kelompok'=>$kosong,
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
					    'kelompok'=>$row['kelompokjbt'],
						'jabatan'=>$row['jabatan_name']
	                                    );
						//echo $pos_list;
	            }
				$nomor = $no;
	        }
				//$smarty->assign("jmlrcd", $nomor);
	        	$smarty->assign("pos", $pos_list);

            $smarty->display("peluangkarir.tpl");
        }
    

    function showkarirsubmit()
        {

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