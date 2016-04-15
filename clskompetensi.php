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
		$smarty->assign("samping","31");
		$sqlUser	= "SELECT a.id_kompetensijbt,nm_keltingkatjbt,kompetensi, a.level FROM tab_kompetensijbt a 
				LEFT JOIN tab_kelompoktingkatjbt ON a.id_kelompoktingkatjbt = tab_kelompoktingkatjbt.id_kelompoktingkatjbt
				LEFT JOIN tab_kompetensi ON a.id_kompetensijbt = tab_kompetensi.id";
			
			$rs = $db->Execute($sqlUser);
			
	        if (!$rs->RecordCount())
			{
			     $kosong = 'kosong';
	             $unite_list[] = array(

	                        'no'=>$kosong,
	                        'id'=>$kosong,
	                        'kelompok'=>$kosong,
	                        'kompetensi'=>$kosong,
	                        'level'=>$kosong,
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
	                                    'id'=>$ru_list['id_kompetensijbt'],
										'kelompok'=>$ru_list['nm_keltingkatjbt'],
				                        'kompetensi'=>$ru_list['kompetensi'],
				                        'level'=>$ru_list['level']
	                                    );
	            }
	        }

	        $smarty->assign("pos", $ulist);
			$smarty->display("kompetensi.tpl");
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
		$smarty->assign("samping","31");


		$kelompoktingkatjbt = $this->kelompoktingkatjbt_opt_generate();
		$smarty->assign("kelompoktingkatjbt_opt",$kelompoktingkatjbt);
		$kompetensi= $this->kompetensi_opt_generate();
		$smarty->assign("kompetensi_opt",$kompetensi);

		
		$smarty->display('kompetensi_add.tpl');
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
			
			//jumlah count kompetensi
			$sql_count="SELECT count(id_kompetensijbt) FROM tbl_kompetensijbt";
			$result_count = $db -> Execute($sql_count);
			$rs_count = $result_count->FetchRow();
			$idkeltktjbt = $_POST['idkeltktjbt'];
			$idkompetensi = $_POST['idkompetensi'];
			$level = $_POST['level'];
			$id_kompetensijbt = $rs_count[0] + 1;
			
			//melakukan pengecekan
			$sql_cekdata="SELECT * FROM tbl_kompetensijbt where id_kelompoktingkatjbt='$idkeltktjbt' and id_kompetensi='$idkompetensi'";
			$result_cekdata = $db -> Execute($sql_cekdata);
			$rsdata = $result_cekdata->RecordCount();
			if($rsdata != 0){
				 echo "<script language=javascript>
	                    alert('Data sudah pernah dientry');
	                    window.location='kompetensi.php';
	                 </script>";
			}
						
			//echo $id_kompetensijbt." ".$idkeltktjbt." ".$idkompetensi." ".$level;
			$sql="INSERT INTO tbl_kompetensijbt (id_kompetensijbt,id_kelompoktingkatjbt,id_kompetensi,level) 
			VALUES ('$id_kompetensijbt','$idkeltktjbt','$idkompetensi','$level')";
			$result = $db->Execute($sql);
			
			if($rs)
			{
				  echo "<script language=javascript>
							alert('Simpan Berhasil');
		                    window.location='kompetensi.php';
		                 </script>";
				}else{
				  echo "<script language=javascript>
		                    alert('Simpan Gagal');
		                    window.location='kompetensi.php';
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
		$smarty->assign("samping","31");
		
		$id = $_GET['id'];
		
		// photo kepala
		
		$sqlc = "select * from tab_kompetensijbt where id_kompetensijbt = '$id'";
		$resultc = $db->Execute($sqlc);
		$rsc = $resultc->FetchRow();
		$level = $rsc['level'];	

		$kelompoktingkatjbt = $this->kelompoktingkatjbt_opt_generate();
		$smarty->assign("kelompoktingkatjbt_opt",$kelompoktingkatjbt);
		
		$kompetensi= $this->kompetensi_opt_generate();
		$smarty->assign("kompetensi_opt",$kompetensi);
		$smarty->assign("level",$level);
		$smarty->assign("id_kompetensijbt",$id);
		
		$smarty->display('kompetensi_edit.tpl');
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
			
			$id_kompetensijbt = $_POST['id_kompetensijbt'];
			$kelompoktingkatjbt = $_POST['kelompoktingkatjbt'];
			$kompetensi = $_POST['kompetensi'];
			$level = $_POST['level'];
			
	        $sql = "UPDATE tab_kompetensijbt SET 
							kelompoktingkatjbt = '$kelompoktingkatjbt',
							kompetensi='$kompetensi',
							level='$level'
							where id_kompetensijbt='$id_kompetensijbt'";
			 //echo $sql;echo exit;
            $rs = $db->Execute($sql);
			
			if($rs)
			{
				  echo "<script language=javascript>
							alert('Perbaikan Berhasil');
		                    window.location='kompetensi.php';
		                 </script>";
				}else{
				  echo "<script language=javascript>
		                    alert('Perbaikan Gagal');
		                    window.location='kompetensi.php';
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
			
	        $sql = "delete from tab_kompetensijbt where id_kompetensijbt ='$id'";
			// echo $sql;echo exit;
            $rs = $db->Execute($sql);
			
			if($rs)
			{
				  echo "<script language=javascript>
							alert('Menghapus Berhasil');
		                    window.location='kompetensi.php';
		                 </script>";
				}else{
				  echo "<script language=javascript>
		                    alert('Menghapus Gagal');
		                    window.location='kompetensi.php';
		                 </script>";
					}
					
			}
	


				function kompetensi_opt_generate($selected = '')
		{
		 	global $db; 
			
			$sqlBidang     = "SELECT * FROM tab_kompetensi";
			$rsw = $db->Execute($sqlBidang);
	        if (!$rsw->RecordCount())
	        {
	             $kosong = 'kosong';
	             $kompetensi_id[] = $kosong;
	             $kompetensi_list[] = $kosong;
	        }
	        else
	        {

	            while ($row = $rsw->FetchRow()){

						$selected_opt = '';
						if ($row['id'] == $selected)
						{
							$selected_opt = 'selected=selected';
						}
							
						$kompetensi[] = array('id' => $row['id'], 
											'selected'	=> $selected_opt,
											'nama' => $row['kompetensi']);
	            }
	        }
	        
	        return $kompetensi;
		}	

function kelompoktingkatjbt_opt_generate($selected = '')
		{
		 	global $db; 
			
			$sqlBidang     = "SELECT * FROM tab_kelompoktingkatjbt";
			$rsw = $db->Execute($sqlBidang);
	        if (!$rsw->RecordCount())
	        {
	             $kosong = 'kosong';
	             $kelompoktingkatjbt_id[] = $kosong;
	             $kelompoktingkatjbt_list[] = $kosong;
	        }
	        else
	        {

	            while ($row = $rsw->FetchRow()){

						$selected_opt = '';
						if ($row['id_kelompoktingkatjbt'] == $selected)
						{
							$selected_opt = 'selected=selected';
						}
							
						$kelompoktingkatjbt[] = array('id' => $row['id_kelompoktingkatjbt'], 
											'selected'	=> $selected_opt,
											'nama' => $row['nm_keltingkatjbt']);
	            }
	        }
	        
	        return $kelompoktingkatjbt;
		}	

	}

?>