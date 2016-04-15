<?php
require ('libs/Smarty.class.php');
require ('config.php');
require_once "excel_reader2.php";
//require ('user_cek.php');
class potongan {
	function showpotongan() {
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

			 $sqlUser     = "SELECT a.id, b.NIK, periode, nama,nama_jabatan,pph21,jht,potlain,pinjaman,ketpotlain FROM dat_potongan a
				inner join tab_employee b on b.NIK=a.nik
				left join tab_jabatan c on c.id_jbt=b.id_jbt
				WHERE status_p <> 'T'  ";
		//echo $sqlUser;
		//echo exit;
			$rs = $db -> execute($sqlUser);

	        //$rs = $db->Execute($sqlUser);

	        if (!$rs->RecordCount())
	        {
	             $kosong = 'kosong';
	             $pos_list[] = array(
	                                'no'=>$kosong,
	                                'id'=>$kosong,
					'periode'=>$kosong,
					'name'=>$kosong,
					'jabatan'=>$kosong,
					'pph21'=>$kosong,
					'jht'=>$kosong,
					'potlain'=>$kosong,
					'pinjaman'=>$kosong,
					'ketpotlain'=>$kosong
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
					    'pph21'=>number_format($rowPos_list['pph21'],0),
						'jht'=>number_format($rowPos_list['jht'],0),
					    'potlain'=>number_format($rowPos_list['potlain'],0),
					    'pinjaman'=>number_format($rowPos_list['pinjaman'],0),
						'ketpotlain'=>$rowPos_list['ketpotlain']
	                                    );
	            }
	        }
	        	$smarty->assign("unite", $pos_list);
			
			$smarty->display("potongan.tpl");
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

			$smarty->display("potongan_add.tpl");
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
		$pph21 = clean_string_num($_POST['pph21']);
		$jht = clean_string_num($_POST['jht']);
		$potlain = clean_string_num($_POST['potlain']);
		$pinjaman = clean_string_num($_POST['pinjaman']);
		$ketpotlain = $_POST['ketpotlain'];


			
			$sqlBidang     = "SELECT * FROM dat_potongan where periode='$idperiode' and nik='$pegawai'";
			$rsw = $db->Execute($sqlBidang);
			if ($rsw->RecordCount())
			{
 				echo "<script language=javascript>
	                    	alert('Gagal menyimpan data, Data Duplikat');
	                   	 window.location='potongan.php';
	                 </script>";
			}
			else
			{

				$sql = "INSERT INTO dat_potongan (id, nik, pph21, jht, potlain, pinjaman, ketpotlain, periode, Userinsert, tglinsert) VALUES
				(0, '$pegawai', '$pph21', '$jht', '$potlain', '$pinjaman', '$ketpotlain','$idperiode', '$_SESSION[username]', now())";
										
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
					alert('Terima Kasih, berhasil memperbaiki data');
					window.location='potongan.php';
					</script>";
		
				}
				else
				echo "<script language=javascript>
					alert('Gagal menyimpan data');
					window.location='potongan.php';
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
		$smarty->assign("samping","33");
		$id = $_GET['id'];
	        $smarty->assign("id",$id);
		$sql     = "SELECT * FROM dat_potongan WHERE id = '$id'";


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
	        	$smarty->assign("pph21", $rowuser_list['pph21']);
	        	$smarty->assign("jht", $rowuser_list['jht']);
	        	$smarty->assign("pinjaman", $rowuser_list['pinjaman']);
	        	$smarty->assign("potlain", $rowuser_list['potlain']);
	        	$smarty->assign("ketpotlain", $rowuser_list['ketpotlain']);

	        }
	        	

	
			$smarty->display("potongan_edit.tpl");
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
		$pph21 = clean_string_num($_POST['pph21']);
		$jht = clean_string_num($_POST['jht']);
		$pinjaman = clean_string_num($_POST['pinjaman']);
		$potlain = clean_string_num($_POST['potlain']);
		$ketpotlain = $_POST['ketpotlain'];

			$this->valid = 1;

			if($this->valid != 1){
				echo "<script language=javascript>
	                    alert('Anda tidak berhak mengakses halaman ini.');
	                    history.go(-1);
	                 </script>";
				exit();
			}
			/*
			$sqlBidang     = "SELECT * FROM dat_potongan where periode='$idperiode' and id_peg='$bidang'";
			$rsw = $db->Execute($sqlBidang);
			if ($rsw->RecordCount())
			{
 				echo "<script language=javascript>
	                    	alert('Gagal menyimpan data, Data Duplikat');
	                   	 window.location='potongan.php';
	                 </script>";
			}
			else
			{*/
				$sql = "UPDATE dat_potongan SET    
							nik = '$pegawai',
							periode = '$idperiode',
							pph21 = '$pph21',
							jht = '$jht',
							pinjaman = '$pinjaman',
							potlain = '$potlain',
							ketpotlain = '$ketpotlain',
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
					window.location='potongan.php';
					</script>";
				}
				else
				{
					echo "<script language=javascript>
					alert('Gagal memperbaiki data');
					window.location='potongan.php';
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

           
           
            	$sql = "delete from dat_potongan where id='$id'";	
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
		                    window.location='potongan.php';
		                 </script>";
			
			
	        }
	        else
		{
	            echo "<script language=javascript>
	                    alert('Gagal menghapus data');
	                    window.location='potongan.php';
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