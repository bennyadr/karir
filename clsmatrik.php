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
		$smarty->assign("samping","29");
		$sqlUser	= "SELECT a.id_kelompoktingkatjbt,kelompokjbt,tingkatjbt,nm_keltingkatjbt FROM tab_kelompoktingkatjbt a
						INNER JOIN tab_kelompokjbt ON a.id_kelompokjbt = tab_kelompokjbt.id_kelompokjbt
						INNER JOIN tab_tingkatjbt ON a.id_tingkatjbt = tab_tingkatjbt.id_tingkatjbt";
			
			$rs = $db->Execute($sqlUser);
			
	        if (!$rs->RecordCount())
			{
			     $kosong = 'kosong';
	             $unite_list[] = array(

	                        'no'=>$kosong,
	                        'id'=>$kosong,
	                        'kelompokjbt'=>$kosong,
	                        'tingkatjbt'=>$kosong,
	                        'Nama_KelompokTingkatJbt'=>$kosong,
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
	                                    'id'=>$ru_list['id_kelompoktingkatjbt'],
										'kelompokjbt'=>$ru_list['kelompokjbt'],
										'tingkatjbt'=>$ru_list['tingkatjbt'],
										'Nama_KelompokTingkatJbt'=>$ru_list['nm_keltingkatjbt']
	                                    );
	            }
	        }

	        $smarty->assign("pos", $ulist);
			$smarty->display("matrik.tpl");
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
		$smarty->assign("samping","29");

		$kelompokjbt = $this->kelompokjbt_opt_generate();
		$smarty->assign("kelompokjbt_opt",$kelompokjbt);
		$tingkatjbt= $this->tingkatjbt_opt_generate();
		$smarty->assign("tingkatjbt_opt",$tingkatjbt);

		
		$smarty->display('matrik_add.tpl');
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
			
			$kelompokjbt = $_POST['kelompokjbt'];
			$tingkatjbt = $_POST['tingkatjbt'];
			$Nama_KelompokTingkatJbt = $_POST['Nama_KelompokTingkatJbt'];

			
	      $sql="INSERT INTO tab_kelompoktingkatjbt (id_kelompoktingkatjbt, id_kelompokJbt, id_tingkatjbt, nm_keltingkatjbt) 
	      VALUES (null,'$kelompokjbt','$tingkatjbt','$Nama_KelompokTingkatJbt')";
			
			  $rs = $db->Execute($sql);
			
			if($rs)
			{
				  echo "<script language=javascript>
							alert('Simpan Berhasil');
		                    window.location='matrik.php';
		                 </script>";
				}else{
				  echo "<script language=javascript>
		                    alert('Simpan Gagal');
		                    window.location='matrik.php';
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
		$smarty->assign("samping","29");
		
		$id = $_GET['id'];


		
		// photo kepala
		
		$sqlc = "SELECT a.id_kelompoktingkatjbt,a.id_kelompokjbt,kelompokjbt,a.id_tingkatjbt,tingkatjbt,nm_keltingkatjbt FROM tab_kelompoktingkatjbt a
						INNER JOIN tab_kelompokjbt ON a.id_kelompokjbt = tab_kelompokjbt.id_kelompokjbt
						INNER JOIN tab_tingkatjbt ON a.id_tingkatjbt = tab_tingkatjbt.id_tingkatjbt where a.id_kelompoktingkatjbt='$id'";
	$resultc = $db->Execute($sqlc);
		$rsc = $resultc->FetchRow();
		
			$Nama_KelompokTingkatJbt = $rsc['nm_keltingkatjbt'];
			$kelompokjbtx = $rsc['id_kelompokjbt'];
			$tingkatjbtx = $rsc['id_tingkatjbt'];

			$smarty->assign("Nama_KelompokTingkatJbt", $Nama_KelompokTingkatJbt);
	       	
	       	$kelompokjbt = $this -> kelompokjbt_opt_generate($kelompokjbtx);
			$smarty->assign("kelompokjbt_opt", $kelompokjbt);

		 	$tingkatjbt = $this -> tingkatjbt_opt_generate($tingkatjbtx);
			$smarty->assign("tingkatjbt_opt", $tingkatjbt);

			$smarty->display('matrik_edit.tpl');
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
			
			$id_kelompoktingkatjbt = $_POST['id_kelompoktingkatjbt'];
			$kelompokjbt = $_POST['kelompokjbt'];
			$tingkatjbt = $_POST['tingkatjbt'];
			$Nama_KelompokTingkatJbt = $_POST['nm_keltingkatjbt'];
			
	        $sql = "UPDATE tab_kelompoktingkatjbt SET 
							kelompokjbt = '$kelompokjbt',
							tingkatjbt='$tingkatjbt',
							nm_keltingkatjbt='$Nama_KelompokTingkatJbt'
							where id_kelompoktingkatjbt='$id_kelompoktingkatjbt'";
			 //echo $sql;echo exit;
            $rs = $db->Execute($sql);
			
			if($rs)
			{
				  echo "<script language=javascript>
							alert('Perbaikan Berhasil');
		                    window.location='matrik.php';
		                 </script>";
				}else{
				  echo "<script language=javascript>
		                    alert('Perbaikan Gagal');
		                    window.location='matrik.php';
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
			
	        $sql = "delete from tab_kelompoktingkatjbt where id_kelompoktingkatjbt ='$id'";
			// echo $sql;echo exit;
            $rs = $db->Execute($sql);
			
			if($rs)
			{
				  echo "<script language=javascript>
							alert('Menghapus Berhasil');
		                    window.location='matrik.php';
		                 </script>";
				}else{
				  echo "<script language=javascript>
		                    alert('Menghapus Gagal');
		                    window.location='matrik.php';
		                 </script>";
					}
					
			}
		
		function tingkatjbt_opt_generate($selected = '')
		{
		 	global $db; 
			
			$sqlBidang     = "SELECT * FROM tab_tingkatjbt";
			$rsw = $db->Execute($sqlBidang);
	        if (!$rsw->RecordCount())
	        {
	             $kosong = 'kosong';
	             $tingkatjbt_id[] = $kosong;
	             $tingkatjbt_list[] = $kosong;
	        }
	        else
	        {

	            while ($row = $rsw->FetchRow()){

						$selected_opt = '';
						if ($row['id_tingkatjbt'] == $selected)
						{
							$selected_opt = 'selected=selected';
						}
							
						$tingkatjbt[] = array('id' => $row['id_tingkatjbt'], 
											'selected'	=> $selected_opt,
											'nama' => $row['tingkatjbt']);
	            }
	        }
	        
	        return $tingkatjbt;
		}	

		function kelompokjbt_opt_generate($selected = '')
		{
		 	global $db; 
			
			$sqlBidang     = "SELECT * FROM tab_kelompokjbt";
			$rsw = $db->Execute($sqlBidang);
	        if (!$rsw->RecordCount())
	        {
	             $kosong = 'kosong';
	             $kelompokjbt_id[] = $kosong;
	             $kelompokjbt_list[] = $kosong;
	        }
	        else
	        {

	            while ($row = $rsw->FetchRow()){

						$selected_opt = '';
						if ($row['id_kelompokjbt'] == $selected)
						{
							$selected_opt = 'selected=selected';
						}
							
						$kelompokjbt[] = array('id' => $row['id_kelompokjbt'], 
											'selected'	=> $selected_opt,
											'nama' => $row['kelompokjbt']);
	            }
	        }
	        
	        return $kelompokjbt;
		}
	}
?>