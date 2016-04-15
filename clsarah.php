<?php
require ('libs/Smarty.class.php');
require ('config.php');
//require ('user_cek.php');
class clsobjek {
	
	    function showdata() {
		//session_start();
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
		$smarty->assign("samping","30");
		$sqlUser	= "SELECT * FROM db_karir.tbl_karir";
			
			$rs = $db->Execute($sqlUser);
			
	        if (!$rs->RecordCount())
			{
			     $kosong = 'kosong';
	             $unite_list[] = array(

	                        'no'=>$kosong,
	                        'id'=>$kosong,
	                        'kelompok1'=>$kosong,
	                        'kelompok2'=>$kosong,
	                        'flag'=>$kosong,
	                                );
	        }
	        else
	        { 
				//$rs=mysql_query($sql);
	            $no = 0; 
				while ($ru_list = $rs->FetchRow()){
				      ++$no;

                		//$sql = "select * from tbl_employee where id = ".$ru_list['id_emp'];
                       // $result = $db->Execute($sql);
                       // $rs_employee = $result->FetchRow();

	                  $ulist[] = array(
	                                    'no'=>$no,
	                                    'id'=>$ru_list['id'],
										'kelompok1'=>$ru_list['Nama_KelompokTingkatJbt'],
				                        'kelompok2'=>$ru_list['Nama_KelompokTingkatJbt2'],
				                        'flag'=>$ru_list['Flag']
	                                    );
	            }
	        }

	        $smarty->assign("pos", $ulist);
			$smarty->display("arah.tpl");
        }

function ShowAdd() {
		//session_start();
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
		$smarty->assign("samping","30");
		
		$smarty->display('arah_add.tpl');
		}
		
		function SaveProcess() 
		{
			require('user_cek.php');
			global $title,$db;
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);
			//$smarty->assign("username",$_SESSION['username']);
			
			$Nama_KelompokTingkatJbt = $_POST['Nama_KelompokTingkatJbt'];
			$Nama_KelompokTingkatJbt2 = $_POST['Nama_KelompokTingkatJbt2'];
			$Flag = $_POST['Flag'];
			
	        $sql = "INSERT into tbl_karir (id, Nama_KelompokTingkatJbt, Nama_KelompokTingkatJbt2, Flag) 
			values (null,'$Nama_KelompokTingkatJbt', '$Nama_KelompokTingkatJbt2', '$Flag')";
			// echo $sql;echo exit;
            $rs = $db->Execute($sql);
			
			if($rs)
			{
				  echo "<script language=javascript>
							alert('Simpan Berhasil');
		                    window.location='arah.php';
		                 </script>";
				}else{
				  echo "<script language=javascript>
		                    alert('Simpan Gagal');
		                    window.location='arah.php';
		                 </script>";
					}
				
			}
			
		function ShowEdit() {
		//session_start();
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
		$smarty->assign("samping","30");
		
		$id = $_GET['id'];
		
		// photo kepala
		
		$sqlc = "select * from tbl_karir where id = '$id'";
		$resultc = $db->Execute($sqlc);
		$rsc = $resultc->FetchRow();
		$Nama_KelompokTingkatJbt = $rsc['Nama_KelompokTingkatJbt'];
		$Nama_KelompokTingkatJbt2 = $rsc['Nama_KelompokTingkatJbt2'];
		$Flag = $rsc['Flag'];
		
		$smarty->assign("Nama_KelompokTingkatJbt",$Nama_KelompokTingkatJbt);
		$smarty->assign("Nama_KelompokTingkatJbt2",$Nama_KelompokTingkatJbt2);
		$smarty->assign("Flag",$Flag);
		$smarty->assign("id",$id);
		
		$smarty->display('arah_edit.tpl');
		}	
		
		function UpdateProcess() 
		{
			require('user_cek.php');
			global $title,$db;
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);
			//$smarty->assign("username",$_SESSION['username']);
			
			$id = $_POST['id'];
			$Nama_KelompokTingkatJbt = $_POST['Nama_KelompokTingkatJbt'];
			$Nama_KelompokTingkatJbt2 = $_POST['Nama_KelompokTingkatJbt2'];
			$Flag = $_POST['Flag'];
			
	        $sql = "UPDATE tab_arah SET 
							Nama_KelompokTingkatJbt = '$Nama_KelompokTingkatJbt',
							Nama_KelompokTingkatJbt2='Nama_KelompokTingkatJbt2',
							Flag='Flag'
							where id='$id'";
			 //echo $sql;echo exit;
            $rs = $db->Execute($sql);
			
			if($rs)
			{
				  echo "<script language=javascript>
							alert('Perbaikan Berhasil');
		                    window.location='arah.php';
		                 </script>";
				}else{
				  echo "<script language=javascript>
		                    alert('Perbaikan Gagal');
		                    window.location='arah.php';
		                 </script>";
					}
				
			}
			
		function DeleteProcess() 
		{
			global $title,$db;
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);
			//$smarty->assign("username",$_SESSION['username']);
			
			$id = $_GET['id'];
			
	        $sql = "delete from tbl_karir where id ='$id'";
			// echo $sql;echo exit;
            $rs = $db->Execute($sql);
			
			if($rs)
			{
				  echo "<script language=javascript>
							alert('Menghapus Berhasil');
		                    window.location='arah.php';
		                 </script>";
				}else{
				  echo "<script language=javascript>
		                    alert('Menghapus Gagal');
		                    window.location='arah.php';
		                 </script>";
					}
					
			}
		
		function sektor_opt_generate($selected = '')
		{
		 	global $db; 
			
			$sqlBidang     = "SELECT * FROM tab_sektor";
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
						if ($row['id'] == $selected)
						{
							$selected_opt = 'selected=selected';
						}
							
						$sektor[] = array('id' => $row['id'], 
											'selected'	=> $selected_opt,
											'nama' => $row['sektor']);
	            }
	        }
	        
	        return $sektor;
		}	
	}

?>