<?php
require ('libs/Smarty.class.php');
require ('config.php');
require_once "excel_reader2.php";
//require ('user_cek.php');
class pendapatan {
	function showpendapatan() {
	    	require ('user_cek.php');
	    	include "fn/fn_str.php";
  	    global $title,$db;
		$smarty = new Smarty;
 		$smarty->force_compile = true;
		//$smarty->debugging = true;
		$smarty->caching = true;
		$smarty->cache_lifetime = 120;
		$smarty->assign("title",$title);
		$smarty->assign("username",$_SESSION['username']);
		$smarty->assign("statuslogin",$_SESSION['statuslogin']);
		$smarty->assign("samping","34");

			 $sqlUser     = "SELECT a.id, periode, b.NIK, nama, nama_jabatan, gapok, tunj_hadir, tunj_lain, tunj_jabatan, tunj_trans,ket_lain FROM dat_pendapatan a
inner join tab_employee b on b.NIK=a.nik
left join tab_jabatan c on c.id_jbt=b.id_jbt where status_p <> 'T'";
		//echo $sqlUser;
		//echo exit;
		$rs = $db -> execute($sqlUser);
	        if (!$rs->RecordCount())
	        {
	             $kosong = 'kosong';
	             $pos_list[] = array(
	                                'no'=>$kosong,
	                                'id'=>$kosong,
					'periode'=>$kosong,
					'name'=>$kosong,
					'jabatan'=>$kosong,
					'gapok'=>$kosong,
					'thadir'=>$kosong,
					'tlain'=>$kosong,
					'tjabatan'=>$kosong,
					'transport'=>$kosong,
					'ket_lain'=>$kosong
					
                        );
	        }
	        else
	        { 

	            //$no = $awal;
				$no = 0;
	            while ($rowPos_list = $rs->FetchRow()){
	                  if($_SESSION["username"]!='admin' && $rowuser_list['username']=='admin')
	                       continue;

	                  ++$no;

	                  $pos_list[] = array(
	                                    //'no'=>$no,
					    'no'=>$no,
	                                    'id'=>$rowPos_list['id'],
					    'periode'=>$rowPos_list['periode'],
					    'name'=>strtoupper($rowPos_list['nama']),
						'jabatan'=>$rowPos_list['nama_jabatan'],
					    'gapok'=>number_format($rowPos_list['gapok'],0),
						'thadir'=>number_format($rowPos_list['tunj_hadir'],0),
					    'tlain'=>number_format($rowPos_list['tunj_lain'],0),
					    'tjabatan'=>number_format($rowPos_list['tunj_jabatan'],0),
					    'transport'=>number_format($rowPos_list['tunj_trans'],0),
						'ket_lain'=>$rowPos_list['ket_lain']
	                                    );
	            }
	        }
	        	$smarty->assign("unite", $pos_list);
			
			//$valid = Util::doCheckAuth(HR5_PAGES);
			
            
			$smarty->display("pendapatan.tpl");
        }
			

function showAddEmployeeForm()
		{
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
		$smarty->assign("samping","34");

		 	$periode_opt = $this->periode_opt();
			$smarty->assign("periode_opt",$periode_opt);
			 $deahass_opt = $this->deahass_opt();
			$smarty->assign("deahass_opt",$deahass_opt);

			$smarty->display("pendapatan_add.tpl");
        }



		function saveEmployee()
		{
		global $title,$db;
			require ('user_cek.php');
			include "fn/fn_str.php";
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);
		$pegawai = $_POST['pegawai'];
		$idperiode = $_POST['idperiode'];
		$transport = clean_string_num($_POST['transport']);
		$thadir = clean_string_num($_POST['thadir']);
		$tjabatan = clean_string_num($_POST['tjabatan']);
		$tlain = clean_string_num($_POST['tlain']);
		$ket_lain = $_POST['ket_lain'];
		$sqlBidang     = "SELECT * FROM dat_pendapatan where periode='$idperiode' and nik='$pegawai'";
			$rsw = $db->Execute($sqlBidang);
			if ($rsw->RecordCount())
			{
 				echo "<script language=javascript>
	                    	alert('Gagal menyimpan data, Data Duplikat');
	                   	 window.location='pendapatan.php';
	                 </script>";
			}
			else
			{

				$sql = "INSERT INTO dat_pendapatan (id, NIK, periode, tunj_hadir, tunj_lain, tunj_jabatan, tunj_trans,ket_lain, Userinsert, tglinsert) VALUES
				(0, '$pegawai', '$idperiode', '$thadir', '$tlain', '$tjabatan', '$transport', '$ket_lain', '$_SESSION[username]', now())";
										
				//echo $sql;
				//exit();
	
	/*			
				$sQuery = "UPDATE administrator
							SET Datablob = '$fileContent', TipeDatablob='$fileUpload_type',
							alamat = '$alamat', telepon = '$telepon'
							WHERE username = '$_SESSION[usernamesession]'";
				echo $sQuery; 			
				$result = $db->Execute($sQuery);
	*/
			$result = $db->Execute($sql);
	
			if($result)
			{
			echo "<script language=javascript>
				alert('Terima Kasih, berhasil menyimpan data');
				window.location='pendapatan.php';
				</script>";
	
			}
			else
			echo "<script language=javascript>
				alert('Gagal menyimpan data');
				window.location='pendapatan.php';
				</script>";
		}

        }

        function showEditEmployeeForm()
        {
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
		$smarty->assign("samping","34");

		$id = $_GET['id'];
	        $smarty->assign("id",$id);

	         $sql     = "SELECT * FROM dat_pendapatan WHERE id = $id";
//echo $sql;

	        $rs = $db->Execute($sql);

	        if ($rs->RecordCount())
	        {
			$rowuser_list = $rs->FetchRow();
			$bidang = $rowuser_list['nik']; //gender option selected 

			$periode_opt = $this->periode_opt($rowuser_list['periode']);
			$smarty->assign("periode_opt",$periode_opt);
			 $deahass_opt = $this->deahass_opt($bidang);
			$smarty->assign("deahass_opt",$deahass_opt);

			//$this->assign("nama", $nama);
			
			//$this -> deahass_opt_generate($bidang);
			
	        	//$this->assign("id", $rowuser_list['id']);
	        	$smarty->assign("thadir", $rowuser_list['tunj_hadir']);
	        	$smarty->assign("tlain", $rowuser_list['tunj_lain']);
				$smarty->assign("tjabatan", $rowuser_list['tunj_jabatan']);
	        	$smarty->assign("transport", $rowuser_list['tunj_trans']);
				$smarty->assign("ket_lain", $rowuser_list['ket_lain']);
	        	
	        }
			
	
			$smarty->display("pendapatan_edit.tpl");
        }

function editEmployee()
        {

        	require ('user_cek.php');
			include "fn/fn_str.php";
			global $title,$db;
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);

			$id = $_POST['id'];
		$pegawai = $_POST['pegawai'];
		$idperiode = $_POST['idperiode'];
		$transport = clean_string_num($_POST['transport']);
		$thadir = clean_string_num($_POST['thadir']);
		$tjabatan = clean_string_num($_POST['tjabatan']);
		$tlain = clean_string_num($_POST['tlain']);
		$ket_lain = $_POST['ket_lain'];
		//$this->valid = 1;
/*
			if($this->valid != 1){
				echo "<script language=javascript>
	                    alert('Anda tidak berhak mengakses halaman ini.');
	                    history.go(-1);
	                 </script>";
				exit();
			}*/
/*
			$sqlBidang     = "SELECT * FROM dat_pendapatan where periode='$idperiode' and id_peg='$bidang'";
			$rsw = $db->Execute($sqlBidang);
			if ($rsw->RecordCount())
			{
 				echo "<script language=javascript>
	                    	alert('Gagal menyimpan data, Data Duplikat');
	                   	 window.location='pendapatan.php';
	                 </script>";
			}
			else
			{
			*/
				$sql = "UPDATE dat_pendapatan SET    
							nik = '$pegawai',
							periode = '$idperiode',
							tunj_hadir = '$thadir',
							tunj_lain = '$tlain',
							tunj_jabatan = '$tjabatan',
							tunj_trans = '$transport',
							ket_lain = '$ket_lain',
							Useredit='$_SESSION[username]',
							tgledit=now()
							WHERE id = '$id'";
				$result = $db->Execute($sql);
				
				//echo $sql;
				//exit();
		
				if($result)
				{
				echo "<script language=javascript>
					alert('Terima Kasih, berhasil memperbaiki data');
					window.location='pendapatan.php';
					</script>";
				}
				else
				{
					echo "<script language=javascript>
					alert('Gagal memperbaiki data');
					window.location='pendapatan.php';
					</script>";
				}
			//}
        }

function deleteEmployee()
		{
        		global $title,$db;
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);
			$id = $_GET['id'];

           
           
            	$sql = "delete from dat_pendapatan where id='$id'";	
 //echo $sql;
            	$result = $db->Execute($sql);
	    
	        if($result)
	        {
	         	/*
  				echo "<script language=javascript>
		                    alert('Fitur ini tidak dapat digunakan');
		                    window.location='employee.php?index=$index&tampil=$tampil';
		                 </script>";
	         */
		            echo "<script language=javascript>
		                    alert('Terima Kasih, berhasil menghapus data');
		                    window.location='pendapatan.php';
		                 </script>";
			
			
	        }
	        else
		{
	            echo "<script language=javascript>
	                    alert('Gagal menghapus data');
	                    window.location='pendapatan.php';
	                 </script>";
		}

        }


function periode_opt($selected = '')
		{
		 	global $db; 
			
			$sqlBidang     = "SELECT * FROM tab_periode_locked";
			$rsw = $db->Execute($sqlBidang);
	        if (!$rsw->RecordCount())
	        {
	             $kosong = 'kosong';
	             $bidang_id[] = $kosong;
	             $bidang_list[] = $kosong;
	        }
	        else
	        {

	            while ($row = $rsw->FetchRow()){
/**
* 	                  $bidang_id[] = $rowbidang_list['id'];
* 	                  $bidang_name[] = $rowbidang_list['name'];
*/
						$selected_opt = '';
						if ($row['blntahun'] == $selected)
						{
							$selected_opt = 'selected=selected';
						}
							
						$periode_opt[] = array('id' => $row['blntahun'], 
											'selected'	=> $selected_opt,
											'nama' => $row['blntahun']);
	            }
	        }
	        
	        //print_r($bidang);

 			return $periode_opt;

/**
* 			$this->assign("bidang", $selected);
* 			$this->assign("bidang_id", $bidang_id);
* 			$this->assign("bidang_name", $bidang_name);
*/
		}

	function deahass_opt($selected = '')
		{
		 	global $db; 

			$sqlBidang     = "SELECT * FROM tab_employee where status_p='A' ORDER BY nama";
			$rsw = $db->Execute($sqlBidang);
	        if (!$rsw->RecordCount())
	        {
	             $kosong = 'kosong';
	             $bidang_id[] = $kosong;
	             $bidang_list[] = $kosong;
	        }
	        else
	        {

	            while ($row = $rsw->FetchRow()){
/**
* 	                  $bidang_id[] = $rowbidang_list['id'];
* 	                  $bidang_name[] = $rowbidang_list['name'];
*/
						$selected_opt = '';
						if ($row['NIK'] == $selected)
						{
							$selected_opt = 'selected=selected';
						}
							
						$deahass_opt[] = array('id' => $row['NIK'], 
											'selected'	=> $selected_opt,
											'nama' => strtoupper($row['nama']));
	            }
	        }
	        
	        //print_r($bidang);

 			return $deahass_opt;

/**
* 			$this->assign("bidang", $selected);
* 			$this->assign("bidang_id", $bidang_id);
* 			$this->assign("bidang_name", $bidang_name);
*/
		}

}
?>