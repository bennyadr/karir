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
		$smarty->assign("samping","25");
		$sqlUser	= "SELECT * FROM db_karir.tbl_jabatan";
			
			$rs = $db->Execute($sqlUser);
			
	        if (!$rs->RecordCount())
			{
			     $kosong = 'kosong';
	             $unite_list[] = array(

	                        'no'=>$kosong,
	                        'id'=>$kosong,
	                        'kode_jabatan'=>$kosong,
	                        'nama_jabatan'=>$kosong,
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
	                                    'kode_jabatan'=>$ru_list['jabatan_code'],
										'nama_jabatan'=>$ru_list['jabatan_name']
	                                    );
	            }
	        }

	        $smarty->assign("pos", $ulist);
			$smarty->display("jabatan.tpl");
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
		$smarty->assign("samping","25");
		
		$smarty->display('jabatan_add.tpl');
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
			
			$jabatan_code = $_POST['jabatan_code'];
			$jabatan_name = $_POST['jabatan_name'];
			
	        $sql = "INSERT into tbl_jabatan (id,jabatan_code,jabatan_name) 
			values (null,'$jabatan_code','$jabatan_name')";
			// echo $sql;echo exit;
            $rs = $db->Execute($sql);
			
			if($rs)
			{
				  echo "<script language=javascript>
							alert('Simpan Berhasil');
		                    window.location='jabatan.php';
		                 </script>";
				}else{
				  echo "<script language=javascript>
		                    alert('Simpan Gagal');
		                    window.location='jabatan.php';
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
		$smarty->assign("samping","25");
		
		$id = $_GET['id'];
		
		// photo kepala
		
		$sqlc = "select * from tbl_jabatan where id = '$id'";
		$resultc = $db->Execute($sqlc);
		$rsc = $resultc->FetchRow();
		$jabatan_code = $rsc['jabatan_code'];
		$jabatan_name = $rsc['jabatan_name'];
		
		$smarty->assign("jabatan_code",$jabatan_code);
		$smarty->assign("jabatan_name",$jabatan_name);
		$smarty->assign("id",$id);
		
		$smarty->display('jabatan_edit.tpl');
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
			$jabatan_code = $_POST['jabatan_code'];
			$jabatan_name = $_POST['jabatan_name'];
			
	        $sql = "UPDATE tbl_jabatan SET 
							jabatan_code = '$jabatan_code',
							jabatan_name='$jabatan_name'
							where id='$id'";
			 //echo $sql;echo exit;
            $rs = $db->Execute($sql);
			
			if($rs)
			{
				  echo "<script language=javascript>
							alert('Perbaikan Berhasil');
		                    window.location='jabatan.php';
		                 </script>";
				}else{
				  echo "<script language=javascript>
		                    alert('Perbaikan Gagal');
		                    window.location='jabatan.php';
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
			
	        $sql = "delete from tbl_jabatan where id ='$id'";
			// echo $sql;echo exit;
            $rs = $db->Execute($sql);
			
			if($rs)
			{
				  echo "<script language=javascript>
							alert('Menghapus Berhasil');
		                    window.location='jabatan.php';
		                 </script>";
				}else{
				  echo "<script language=javascript>
		                    alert('Menghapus Gagal');
		                    window.location='jabatan.php';
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