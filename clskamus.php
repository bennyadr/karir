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
		$smarty->assign("samping","28");
		$sqlUser	= "SELECT * FROM db_karir.tab_kompetensi";
			
			$rs = $db->Execute($sqlUser);
			
	        if (!$rs->RecordCount())
			{
			     $kosong = 'kosong';
	             $unite_list[] = array(

	                        'no'=>$kosong,
	                        'id'=>$kosong,
	                        'kode'=>$kosong,
	                        'kompetensi'=>$kosong,
	                        'jenis'=>$kosong,
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
										'kode'=>$ru_list['kode'],
										'kompetensi'=>$ru_list['kompetensi'],
										'jenis'=>$ru_list['jenis']
	                                    );
	            }
	        }

	        $smarty->assign("pos", $ulist);
			$smarty->display("kamus.tpl");
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
		$smarty->assign("samping","28");
		
		$smarty->display('kamus_add.tpl');
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
			
			$kode = $_POST['kode'];
			$kompetensi = $_POST['kompetensi'];
			$jenis  = $_POST['jenis'];
			$definisikompetensi = $_POST['definisikompetensi'];
			$question_ybs = $_POST['question_ybs'];
			$question_noybs = $_POST['question_noybs'];
			$question2_ybs = $_POST['question2_ybs'];
			$question2_noybs = $_POST['question2_noybs'];
			$question3_ybs = $_POST['question3_ybs'];
			$question3_noybs = $_POST['question3_noybs'];

			
	        $sql = "INSERT into tab_kompetensi (id, kode, kompetensi, jenis, definisikompetensi, 
	        									question_ybs, question_noybs, question2_ybs, question2_noybs, 
	        									question3_ybs, question3_noybs, Userinsert, tglinsert) 
			values (null,'$kompetensi','$jenis','$definisikompetensi','$question_ybs','$question_noybs',
			'$question2_ybs','$question2_noybs','$question3_ybs',$question3_noybs,'$_SESSION[username]', now())";
			// echo $sql;echo exit;
            $rs = $db->Execute($sql);
			
			if($rs)
			{
				  echo "<script language=javascript>
							alert('Simpan Berhasil');
		                    window.location='kamus.php';
		                 </script>";
				}else{
				  echo "<script language=javascript>
		                    alert('Simpan Gagal');
		                    window.location='kamus.php';
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
		$smarty->assign("samping","28");
		
		$id = $_GET['id'];
		
		// photo kepala
		
		$sqlc = "select * from tab_kompetensi where id = '$id'";
		$resultc = $db->Execute($sqlc);
		$rsc = $resultc->FetchRow();
		$kode = $rsc['kode'];
			$kompetensi = $rsc['kompetensi'];
			$jenis  = $rsc['jenis'];
			$definisikompetensi = $rsc['definisikompetensi'];
			$question_ybs = $rsc['question_ybs'];
			$question_noybs = $rsc['question_noybs'];
			$question2_ybs = $rsc['question2_ybs'];
			$question2_noybs = $rsc['question2_noybs'];
			$question3_ybs = $rsc['question3_ybs'];
			$question3_noybs = $rsc['question3_noybs'];
		
		$smarty->assign("kode",$kode);
		$smarty->assign("kompetensi",$kompetensi);
		$smarty->assign("jenis",$jenis);
		$smarty->assign("definisikompetensi",$definisikompetensi);
		$smarty->assign("question_ybs",$question_ybs);
		$smarty->assign("question_noybs",$question_noybs);
		$smarty->assign("question2_ybs",$question2_ybs);
		$smarty->assign("question2_noybs",$question2_noybs);
		$smarty->assign("question3_ybs",$question3_ybs);
		$smarty->assign("question3_noybs",$question3_noybs);
		$smarty->assign("id",$id);
		
		$smarty->display('kamus_edit.tpl');
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
			$kode = $_POST['kode'];
			$kompetensi = $_POST['kompetensi'];
			$jenis  = $_POST['jenis'];
			$definisikompetensi = $_POST['definisikompetensi'];
			$question_ybs = $_POST['question_ybs'];
			$question_noybs = $_POST['question_noybs'];
			$question2_ybs = $_POST['question2_ybs'];
			$question2_noybs = $_POST['question2_noybs'];
			$question3_ybs = $_POST['question3_ybs'];
			$question3_noybs = $_POST['question3_noybs'];
			
	        $sql = "UPDATE tab_kompetensi SET 
							kode ='$kode',
							kompetensi='$kompetensi',
							jenis='$jenis', 
							definisikompetensi='$definisikompetensi', 
	        				question_ybs='$question_ybs', 
	        				question_noybs='$question_noybs', 
	        				question2_ybs='$question2_ybs', 
	        				question2_noybs='$question2_noybs', 
	        				question3_ybs='$question3_ybs', 
	        				question3_noybs='$question3_noybs',
							Useredit='$_SESSION[username]',
							tgledit=now()
							where id='$id'";
			 //echo $sql;echo exit;
            $rs = $db->Execute($sql);
			
			if($rs)
			{
				  echo "<script language=javascript>
							alert('Perbaikan Berhasil');
		                    window.location='kamus.php';
		                 </script>";
				}else{
				  echo "<script language=javascript>
		                    alert('Perbaikan Gagal');
		                    window.location='kamus.php';
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
			
	        $sql = "delete from tab_kompetensi where id ='$id'";
			// echo $sql;echo exit;
            $rs = $db->Execute($sql);
			
			if($rs)
			{
				  echo "<script language=javascript>
							alert('Menghapus Berhasil');
		                    window.location='kamus.php';
		                 </script>";
				}else{
				  echo "<script language=javascript>
		                    alert('Menghapus Gagal');
		                    window.location='kamus.php';
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