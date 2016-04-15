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
		$smarty->assign("samping","27");
		$sqlUser	= "SELECT * FROM db_karir.tab_tingkatjbt";
			
			$rs = $db->Execute($sqlUser);
			
	        if (!$rs->RecordCount())
			{
			     $kosong = 'kosong';
	             $unite_list[] = array(

	                        'no'=>$kosong,
	                        'id'=>$kosong,
	                        'tingkatjbt'=>$kosong,
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
	                                    'id'=>$ru_list['id_tingkatjbt'],
										'tingkatjbt'=>$ru_list['tingkatjbt']
	                                    );
	            }
	        }

	        $smarty->assign("pos", $ulist);
			$smarty->display("tingkat.tpl");
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
		$smarty->assign("samping","27");
		
		$smarty->display('tingkat_add.tpl');
		}
		
		function SaveProcess() 
		{
			global $title,$db;
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);
			//$smarty->assign("username",$_SESSION['username']);

			$tingkatjbt = $_POST['tingkatjbt'];
			
	        $sql = "INSERT into tab_tingkatjbt (id_tingkatjbt, tingkatjbt) 
			values (null,'$tingkatjbt') ORDER BY id_tingkatjbt DESC";
			//echo $sql;echo exit;
            $rs = $db->Execute($sql);
			
			if($rs)
			{
				  echo "<script language=javascript>
							alert('Simpan Berhasil');
		                    window.location='tingkat.php';
		                 </script>";
				}else{
				  echo "<script language=javascript>
		                    alert('Simpan Gagal');
		                    window.location='tingkat.php';
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
		$smarty->assign("samping","27");
		
		$id = $_GET['id'];
		
		// photo kepala
		
		$sqlc = "select * from tab_tingkatjbt where id_tingkatjbt = '$id'";
		$resultc = $db->Execute($sqlc);
		$rsc = $resultc->FetchRow();
		$tingkatjbt = $rsc['tingkatjbt'];
		
		$smarty->assign("tingkatjbt",$tingkatjbt);
		$smarty->assign("id",$id);
		
		$smarty->display('tingkat_edit.tpl');
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
			$tingkatjbt = $_POST['tingkatjbt'];
			
	        $sql = "UPDATE tab_tingkatjbt SET 
							tingkatjbt = '$tingkatjbt'
							where id_tingkatjbt='$id'";
			 //echo $sql;echo exit;
            $rs = $db->Execute($sql);
			
			if($rs)
			{
				  echo "<script language=javascript>
							alert('Perbaikan Berhasil');
		                    window.location='tingkat.php';
		                 </script>";
				}else{
				  echo "<script language=javascript>
		                    alert('Perbaikan Gagal');
		                    window.location='tingkat.php';
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
			
	        $sql = "delete from tab_tingkatjbt where id_tingkatjbt ='$id'";
			// echo $sql;echo exit;
            $rs = $db->Execute($sql);
			
			if($rs)
			{
				  echo "<script language=javascript>
							alert('Menghapus Berhasil');
		                    window.location='tingkat.php';
		                 </script>";
				}else{
				  echo "<script language=javascript>
		                    alert('Menghapus Gagal');
		                    window.location='tingkat.php';
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