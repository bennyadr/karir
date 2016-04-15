<?php
require ('libs/Smarty.class.php');
require ('config.php');
//require ('user_cek.php');
	class User 
	{
function showUser()
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
		$smarty->assign("samping","5");
			
	
	    if ($usrflag !=1)
		{
/*
		$sqlUser     = "SELECT tab_user.id as NomID, username, 
case when issupervisor='1' then 'Main Dealer' else nama_kantor end as nama_kantor, 
case when issupervisor='1' then 'Super User' else 'User' end as level FROM tab_user
		left JOIN tab_kantor ON tab_kantor.noreg = tab_user.noreg";
*/
$sqlUser     = "SELECT tab_user.id as NomID, username, 
'kopkar' as nama_kantor,
case when issupervisor='1' then 'Super User' else 'User' end as level FROM tab_user";
		
		}
	    else
		{
			//$sqlUser     = "SELECT * FROM tab_user inner join tab_kantor on tab_kantor.kode_kantor=tab_user.kode_kantor";
/*
		$sqlUser     = "SELECT tab_user.id as NomID, username, 
case when issupervisor='1' then 'Main Dealer' else nama_kantor end as nama_kantor, 
case when issupervisor='1' then 'Super User' else 'User' end as level FROM tab_user
		left JOIN tab_kantor ON tab_kantor.noreg = tab_user.noreg";
*/
$sqlUser     = "SELECT tab_user.id as NomID, username, 
'kopkar' as nama_kantor,
case when issupervisor='1' then 'Super User' else 'User' end as level FROM tab_user";
		}
            		//$sqlUser     = "SELECT * FROM dat_transferfile where kode_kantor='$_SESSION[kodektr]'";
			
			//print ($_SESSION["kodektr"]);
			$Nstart = $start + $numrows;
			//$sqlNextPage = $sqlUser . " LIMIT $Nstart,1";
			$sqlNextPage = $sqlUser . " LIMIT 5";
			$sql_list_next = $db->Execute($sqlNextPage);
			$jumnext = $sql_list_next->RecordCount();
			
			if ($jumnext > 0){
			    $linknext = "user.php?awal=$Nstart&jumrow=$numrows&orderby=$orderby";
				//$linknext = "hasilujian.php?";
			}else{
			    $linknext = "#";
			}
			$prev = $start-$numrows;
			if ($prev >= 0){
			    $linkprev = "user.php?awal=$prev&jumrow=$numrows&orderby=$orderby";
				//$linkprev = "hasilujian.php?";
			}else{
			    $linkprev = "#";
			}
			
			$this->assign("awal", $awal);
			$this->assign("jumrow", $numrows);
			$this->assign("linknext", $linknext);
			$this->assign("linkprev", $linkprev);
			
			$sqlUser .= " LIMIT $start,$numrows";
			//$sqlUser .= " LIMIT 5";
		//print ($sqlUser);
	        $rs = $db->Execute($sqlUser);

	        if (!$rs->RecordCount())
	        {
	             $kosong = 'kosong';
	             $pos_list[] = array(
	                                'no'=>$kosong,
	                                'id'=>$kosong,
					'posName'=>$kosong,
					'posKdktr'=>$kosong,
	                                'poslev'=>$kosong	
	                                );
	        }
	        else
	        { 

	            $no = $awal;
	            while ($rowPos_list = $rs->FetchRow()){
	                  if($_SESSION["usernamesession"]!='admin' && $rowuser_list['username']=='admin')
	                       continue;

	                  ++$no;

	                  $pos_list[] = array(
	                                    //'no'=>$no,
					    'no'=>$rowPos_list['NomID'],
	                                    'id'=>$rowPos_list['NomID'],
						'posName'=>$rowPos_list['username'],
						'posKdktr'=>$rowPos_list['nama_kantor'],
						'poslev'=>$rowPos_list['level']
	                                    );
	            }
	        }

	        $smarty->assign("pos", $pos_list);
			
			//$valid = Util::doCheckAuth(POS_PAGES);
			$valid =1;
			if($_SESSION["userflag"] == 0){
			//if($valid == 0){
				echo "<script language=javascript>
	                    alert('Anda tidak berhak mengakses halaman ini.');
	                    history.go(-1);
	                 </script>";
			} else {
				$smarty->assign("authenticated", $valid);			
			}
            
			$smarty->display("user.tpl");
        }

function showUserSave()
		{
            $valid = Util::doCheckAuth(AD51_PAGES);
			//$valid=1;
			if($valid == 0 || $valid == 2){
				echo "<script language=javascript>
	                    alert('Anda tidak berhak mengakses halaman ini.');
	                    history.go(-1);
	                 </script>";
	            exit();
			}
			
			global $db;

            $idemp = $_POST['idemp'];
            $kdktr_option = $_POST['kdktr'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$level = $_POST['level'];
			
			// ADMIN MODUL
			$ad11 = $_POST['ad11'];
			$ad12 = $_POST['ad12'];
			$ad13 = $_POST['ad13'];	    
			$ad14 = $_POST['ad14'];
			$ad15 = $_POST['ad15'];
			
			// HR MODUL
			$hr21 = $_POST['hr21'];
			$hr22 = $_POST['hr22'];
			$hr23 = $_POST['hr23'];	    
			$hr24 = $_POST['hr24'];
			$hr25 = $_POST['hr25'];
			$hr26 = $_POST['hr26'];
			$hr27 = $_POST['hr27'];						
			$hr28 = $_POST['hr28'];
			$hr29 = $_POST['hr29'];
			$hr210 = $_POST['hr210'];
			$hr211 = $_POST['hr211'];	    
			
			// REPORT MODUL
			$rp31 = $_POST['rp31'];
			$rp32 = $_POST['rp32'];
			$rp33 = $_POST['rp33'];
			$rp34 = $_POST['rp34'];								
			$rp35 = $_POST['rp35'];												
			$rp36 = $_POST['rp36'];
			$rp37 = $_POST['rp37'];
			$rp38 = $_POST['rp38'];
			$rp39 = $_POST['rp39'];								
			
			// WINDOW MODUL
			$wd41 = $_POST['wd41'];
			$wd42 = $_POST['wd42'];	
			$wd43 = $_POST['wd43'];	
			
			$sql1 = "SELECT nama FROM tab_employee WHERE id = '$idemp'";
	        $rs = $db->Execute($sql1);
			$row = $rs->FetchRow();
			$nama = $row['nama'];
			$auth = $ad11.$ad12.$ad13.$ad14.$ad15.$hr21.$hr22.$hr23.$hr24.$hr25.$hr26.$hr27.$hr28.$hr29.$hr210.$hr211.$rp31.$rp32.$rp33.$rp34.$rp35.$rp36.$rp37.$rp38.$rp39.$wd41.$wd42.$wd43;
			//echo $auth;
			$password = md5($password);
			$sqlEmp = "SELECT * FROM tab_user WHERE username = '$username'";
			$rse = $db->Execute($sqlEmp);

			if ($rse->RecordCount()){
				 echo "<script language=javascript>
	                    alert('Username Telah Terdaftar');
	                    history.go(-1);
	                 </script>";
			}
			
			$sql = "INSERT INTO `tab_user` (`id`, `id_emp`, `username`, `password`, `statuslogin`, `lastlogin`, `authority`, `email`, `Userinsert`, `tglinsert`, `Useredit`, `tgledit`, `issupervisor`, `alamat`, `telepon`, `TipeDatablob`, `jmlogin`) 
			VALUES (NULL, '$idemp', '$username', '$password', '0', '0000-00-00 00:00:00', '$auth', NULL, NULL, now(), NULL, '0000-00-00 00:00:00', '$level', NULL, NULL, NULL, '0')";

				//echo $sql;
                $result = $db->Execute($sql);

                if($result)
                	$inserted = 1;
                else
                	$inserted = 0;


	        if($inserted)
	        {
	            echo "<script language=javascript>
	                    alert('Terima Kasih, berhasil menyimpan data');
	                    window.location='user.php';
	                 </script>";
	        }
	        else
	            echo "<script language=javascript>
	                    alert('Gagal menyimpan data');
	                    window.location='user.php?mod=addPos';
	                 </script>";

            $smarty->assign("authenticated",$this->$auth_mode);
        }

	function showUserSavex()
		{
            global $db;

            $posName = $_POST['posName'];
            $kdktr_option = $_POST['kdktr'];
			//$valid = Util::doCheckAuth(POS_PAGES);
	    $valid =1;
			
			if($valid != 1){
				echo "<script language=javascript>
	                    alert('Anda tidak berhak mengakses halaman ini.');
	                    history.go(-1);
	                 </script>";
			}
			
			
			/*
            for ($i=0; $i<count($posName); $i++)
            {
                if(empty($posName[$i]))
                	continue;
*/
				//$sql = "insert into tab_user (THSMSTRNLM,KDPSTTRNLM,NIMHSTRNLM,KDKMKTRNLM,NODOSTBKMK,NILABSEN,NILQUIZ,NILUTS,NILUAS,Userinsert,tglinsert) 
				//values ('".$possem."','".$jurusan."','".$posNim."','".$mtkul_option."','".$dosen_option."','".$posabs."','".$postugas."','".$posuts."','".$posuas."','".$_SESSION["usernamesession"]."',now())";
				$sql = "INSERT INTO `tab_user` (`id`, `id_emp`,  `username`, `noreg`, `password`, `statuslogin`, `lastlogin`, `authority`, `email`, `Userinsert`, `tglinsert`, `Useredit`, `tgledit`, `issupervisor`, `alamat`, `telepon`, `TipeDatablob`, `jmlogin`) VALUES (NULL, '6', '".$posName."', '".$kdktr_option."', MD5('".$posName."'), '0', '0000-00-00 00:00:00', '', NULL, NULL, now(), NULL, '0000-00-00 00:00:00', '0', NULL, NULL, NULL, '0')";

				//echo $sql;
                $result = $db->Execute($sql);

                if($result)
                	$inserted = 1;
                else
                	$inserted = 0;


	        if($inserted)
	        {
	            echo "<script language=javascript>
	                    alert('Terima Kasih, berhasil menyimpan data');
	                    window.location='user.php?mod=addPos&sem=$possem&kdkmk=$mtkul_option&nodos=$dosen_option';
	                 </script>";
	        }
	        else
	            echo "<script language=javascript>
	                    alert('Gagal menyimpan data');
	                    window.location='user.php?mod=addPos';
	                 </script>";

            $smarty->assign("authenticated",$this->$auth_mode);
        }

function showUserAdd()
		{
			$valid = Util::doCheckAuth(AD51_PAGES);
			//$valid=1;
			if($valid == 0 || $valid == 2){
				echo "<script language=javascript>
	                    alert('Anda tidak berhak mengakses halaman ini.');
	                    history.go(-1);
	                 </script>";
	            exit();
			}
			
			global $db;
            global $FOOTER_NOTES,$HEADER_NOTES,$TITLE;

			/*
			//$valid = Util::doCheckAuth(POS_PAGES);
			$valid = 1;
			//if ($_SESSION["userflag"] == '1') // use supervisor
			if(($valid != 1) or ($_SESSION["userflag"] != '1'))
			
			{
				echo "<script language=javascript>
	                    alert('Anda tidak berhak mengakses halaman ini.');
	                    history.go(-1);
	                 </script>";
			}
*/
            $this->assign("HEADER_NOTES", $HEADER_NOTES);
            $this->assign("FOOTER_NOTES", $FOOTER_NOTES);
	        $this->assign("title", $TITLE);
			
			$sql = "select * from tab_user";
            $emp_result = $db->Execute($sql);
            $emp_num = $emp_result->RecordCount();
			
			$sqlEmp = "SELECT * FROM tab_employee ORDER BY id DESC";

	        $rse = $db->Execute($sqlEmp);

			if (!$rse->RecordCount())
	        {
	             $kosong = 'kosong';
	             $emp_list[] = array(
				 					'id'=>$kosong,
	                                'name'=>$kosong
	                                );
	        }
	        else
	        {	
				while ($rowEmp_list = $rse->FetchRow()){

                    //$sql  = "select * from administrator
                    //            where id_emp =".$rowEmp_list['id'];
                    //$result = $db -> Execute($sql);
					//if($rs_user = $result -> RecordCount()) {
                    //    continue;
                    //else
	                  $emp_list[] = array(
										'id'=>$rowEmp_list['id'],
										'name'=>$rowEmp_list['nama']
	            						);
					//}
	            }
	        }
			$this->assign("emp", $emp_list);
			
			
			
			switch($pos_list['issupervisor'])
            {
              case 0 : $manselected = "selected";
                        break;
              default: $womanselected = "selected";
            }

            $gender_option .= "<option value=0 $manselected>User</option>";
            $gender_option .= "<option value=1 $womanselected>Super User</option>";

            $this->assign("gender_option",$gender_option);
			
			
			//level user option
			
		$sql = "SELECT noreg as kode_kantor, nama_kantor FROM `tab_kantor` ";
		$result = $db->Execute($sql);
	
	        if ($result->RecordCount()){
				$kdktr_option = "";
				while ($rslevel = $result->FetchRow()){
					if ($rslevel['kode_kantor'] == $_GET['kdktr']){
						$selected = "selected";
					}else{
						$selected = "";
					}
					$kdktr_option .= "<option value='$rslevel[kode_kantor]' $selected>$rslevel[nama_kantor]</option>";
		        }
			}

            		$this->assign("kdktr_option",$kdktr_option);
			$this->display("user_add.html");
        }

		function showUserAddx()
		{
			global $db;
            		global $FOOTER_NOTES,$HEADER_NOTES,$TITLE;

			//$valid = Util::doCheckAuth(POS_PAGES);
			$valid = 1;
			//if ($_SESSION["userflag"] == '1') // use supervisor
			if(($valid != 1) or ($_SESSION["userflag"] != '1'))
			
			{
				echo "<script language=javascript>
	                    alert('Anda tidak berhak mengakses halaman ini.');
	                    history.go(-1);
	                 </script>";
			}

            $this->assign("HEADER_NOTES", $HEADER_NOTES);
            $this->assign("FOOTER_NOTES", $FOOTER_NOTES);
	        $this->assign("title", $TITLE);
			
			
			//level user option
			
		$sql = "SELECT noreg as kode_kantor, nama_kantor FROM `tab_kantor` ";
		$result = $db->Execute($sql);
	
	        if ($result->RecordCount()){
				$kdktr_option = "";
				while ($rslevel = $result->FetchRow()){
					if ($rslevel['kode_kantor'] == $_GET['kdktr']){
						$selected = "selected";
					}else{
						$selected = "";
					}
					$kdktr_option .= "<option value='$rslevel[kode_kantor]' $selected>$rslevel[nama_kantor]</option>";
		        }
			}

            		$smarty->assign("kdktr_option",$kdktr_option);
			$smarty->display("user_add.html");
        }

function showEditUserForm()
		{
			//echo AD5_PAGES;echo exit;
			$valid = Util::doCheckAuth(AD5_PAGES);
			//echo $valid;echo exit;
			//$valid=1;

			if($valid == 0 || $valid == 2){
				echo "<script language=javascript>
	                    alert('Anda tidak berhak mengakses halaman ini.');
	                    history.go(-1);
	                 </script>";
	            exit();
			}

			global $id,$db;
            global $FOOTER_NOTES,$HEADER_NOTES,$TITLE;

            $this->assign("HEADER_NOTES", $HEADER_NOTES);
            $this->assign("FOOTER_NOTES", $FOOTER_NOTES);
	        $this->assign("title", $TITLE);
			
			$id = $_GET['id'];
			
	        $sql     = "SELECT * FROM tab_user WHERE id = '$id'";
		//print ($sql);
	        
			$rs = $db->Execute($sql);

			$auth[] = array();

	        if ($rs->RecordCount())
	        {
                $pos_list = $rs->FetchRow();

                $sql = "select nama from tab_employee
                            where id = ".$pos_list['id_emp'];
				$issupervisor =$pos_list['issupervisor'];
                $result = $db->Execute($sql);
                $rsEmp  = $result->FetchRow();

				$this->assign("id", $pos_list['id']);
	        		$this->assign("idemp", $pos_list['id_emp']);
				$this->assign("nama", $rsEmp['nama']);
				
				$this->assign("username", $pos_list['username']);

				for($i = 0; $i < strlen($pos_list['authority']);$i++){

					$auth[$i] = substr($pos_list['authority'],$i,1);

				}

				$sel = "checked";
				
				// MODUL ADMIN
				
				if($auth[0] == 0){
					$this->assign("ad11_0", $sel);
				} else if ($auth[0] == 1){
					$this->assign("ad11_1", $sel);
				} else if ($auth[0] == 2){
					$this->assign("ad11_2", $sel);
				}

				if($auth[1] == 0){
					$this->assign("ad12_0", $sel);
				} else if ($auth[1] == 1){
					$this->assign("ad12_1", $sel);
				} else if ($auth[1] == 2){
					$this->assign("ad12_2", $sel);
				}

				if($auth[2] == 0){
					$this->assign("ad13_0", $sel);
				} else if ($auth[2] == 1){
					$this->assign("ad13_1", $sel);
				} else if ($auth[2] == 2){
					$this->assign("ad13_2", $sel);
				}

				if($auth[3] == 0){
					$this->assign("ad14_0", $sel);
				} else if ($auth[3] == 1){
					$this->assign("ad14_1", $sel);
				} else if ($auth[3] == 2){
					$this->assign("ad14_2", $sel);
				}

				if($auth[4] == 0){
					$this->assign("ad15_0", $sel);
				} else if ($auth[4] == 1){
					$this->assign("ad15_1", $sel);
				} else if ($auth[4] == 2){
					$this->assign("ad15_2", $sel);
				}

				// MODUL HR
				
				if($auth[5] == 0){
					$this->assign("hr21_0", $sel);
				} else if ($auth[5] == 1){
					$this->assign("hr21_1", $sel);
				} else if ($auth[5] == 2){
					$this->assign("hr21_2", $sel);
				}

				if($auth[6] == 0){
					$this->assign("hr22_0", $sel);
				} else if ($auth[6] == 1){
					$this->assign("hr22_1", $sel);
				} else if ($auth[6] == 2){
					$this->assign("hr22_2", $sel);
				}


				if($auth[7] == 0){
					$this->assign("hr23_0", $sel);
				} else if ($auth[7] == 1){
					$this->assign("hr23_1", $sel);
				} else if ($auth[7] == 2){
					$this->assign("hr23_2", $sel);
				}
				
				if($auth[8] == 0){
					$this->assign("hr24_0", $sel);
				} else if ($auth[8] == 1){
					$this->assign("hr24_1", $sel);
				} else if ($auth[8] == 2){
					$this->assign("hr24_2", $sel);
				}

				if($auth[9] == 0){
					$this->assign("hr25_0", $sel);
				} else if ($auth[9] == 1){
					$this->assign("hr25_1", $sel);
				} else if ($auth[9] == 2){
					$this->assign("hr25_2", $sel);
				}

				if($auth[10] == 0){
					$this->assign("hr26_0", $sel);
				} else if ($auth[10] == 1){
					$this->assign("hr26_1", $sel);
				} else if ($auth[10] == 2){
					$this->assign("hr26_2", $sel);
				}

				if($auth[11] == 0){
					$this->assign("hr27_0", $sel);
				} else if ($auth[11] == 1){
					$this->assign("hr27_1", $sel);
				} else if ($auth[11] == 2){
					$this->assign("hr27_2", $sel);
				}

				if($auth[12] == 0){
					$this->assign("hr28_0", $sel);
				} else if ($auth[12] == 1){
					$this->assign("hr28_1", $sel);
				} else if ($auth[12] == 2){
					$this->assign("hr28_2", $sel);
				}

				if($auth[13] == 0){
					$this->assign("hr29_0", $sel);
				} else if ($auth[13] == 1){
					$this->assign("hr29_1", $sel);
				} else if ($auth[13] == 2){
					$this->assign("hr29_2", $sel);
				}

				if($auth[14] == 0){
					$this->assign("hr210_0", $sel);
				} else if ($auth[14] == 1){
					$this->assign("hr210_1", $sel);
				} else if ($auth[14] == 2){
					$this->assign("hr210_2", $sel);
				}


				if($auth[15] == 0){
					$this->assign("hr211_0", $sel);
				} else if ($auth[15] == 1){
					$this->assign("hr211_1", $sel);
				} else if ($auth[15] == 2){
					$this->assign("hr211_2", $sel);
				}

				// MODUL REPORT
				
				if($auth[16] == 0){
					$this->assign("rp31_0", $sel);
				} else if ($auth[16] == 1){
					$this->assign("rp31_1", $sel);
				} else if ($auth[16] == 2){
					$this->assign("rp31_2", $sel);
				}

				if($auth[17] == 0){
					$this->assign("rp32_0", $sel);
				} else if ($auth[17] == 1){
					$this->assign("rp32_1", $sel);
				} else if ($auth[17] == 2){
					$this->assign("rp32_2", $sel);
				}

				if($auth[18] == 0){
					$this->assign("rp33_0", $sel);
				} else if ($auth[18] == 1){
					$this->assign("rp33_1", $sel);
				} else if ($auth[18] == 2){
					$this->assign("rp33_2", $sel);
				}

				if($auth[19] == 0){
					$this->assign("rp34_0", $sel);
				} else if ($auth[19] == 1){
					$this->assign("rp34_1", $sel);
				} else if ($auth[19] == 2){
					$this->assign("rp34_2", $sel);
				}

				if($auth[20] == 0){
					$this->assign("rp35_0", $sel);
				} else if ($auth[20] == 1){
					$this->assign("rp35_1", $sel);
				} else if ($auth[20] == 2){
					$this->assign("rp35_2", $sel);
				}

				if($auth[21] == 0){
					$this->assign("rp36_0", $sel);
				} else if ($auth[21] == 1){
					$this->assign("rp36_1", $sel);
				} else if ($auth[21] == 2){
					$this->assign("rp36_2", $sel);
				}

				if($auth[22] == 0){
					$this->assign("rp37_0", $sel);
				} else if ($auth[22] == 1){
					$this->assign("rp37_1", $sel);
				} else if ($auth[22] == 2){
					$this->assign("rp37_2", $sel);
				}

				if($auth[23] == 0){
					$this->assign("rp38_0", $sel);
				} else if ($auth[23] == 1){
					$this->assign("rp38_1", $sel);
				} else if ($auth[23] == 2){
					$this->assign("rp38_2", $sel);
				}
				
				if($auth[24] == 0){
					$this->assign("rp39_0", $sel);
				} else if ($auth[24] == 1){
					$this->assign("rp39_1", $sel);
				} else if ($auth[24] == 2){
					$this->assign("rp39_2", $sel);
				}

				// MODUL WINDOW
				
				if($auth[25] == 0){
					$this->assign("wd41_0", $sel);
				} else if ($auth[25] == 1){
					$this->assign("wd41_1", $sel);
				} else if ($auth[25] == 2){
					$this->assign("wd41_2", $sel);
				}
				
				if($auth[26] == 0){
					$this->assign("wd42_0", $sel);
				} else if ($auth[26] == 1){
					$this->assign("wd42_1", $sel);
				} else if ($auth[26] == 2){
					$this->assign("wd42_2", $sel);
				}
				
				if($auth[27] == 0){
					$this->assign("wd43_0", $sel);
				} else if ($auth[27] == 1){
					$this->assign("wd43_1", $sel);
				} else if ($auth[27] == 2){
					$this->assign("wd43_2", $sel);
				}
				
	        }

//gender option
            switch($pos_list['issupervisor'])
            {
              case 0 : $manselected = "selected";
                        break;
              default: $womanselected = "selected";
            }

            $gender_option .= "<option value=0 $manselected>User</option>";
            $gender_option .= "<option value=1 $womanselected>Super User</option>";

            $smarty->assign("gender_option",$gender_option);
/*
			
			$rs = $db->Execute($sql);

		//$auth[] = array();

	        if ($rs->RecordCount())
	        {
                $pos_list = $rs->FetchRow();
				*/
		/*
                $sql = "select name from msdm_employee
                        where id = ".$pos_list['id_emp'];

                $result = $db->Execute($sql);
                $rsEmp  = $result->FetchRow();
		*/
		/*
		$this->assign("userid", $pos_list['id']);
		$this->assign("usernm", $pos_list['username']);
		//$this->assign("kdktr", $pos_list['kode_kantor']);
		$sql = "SELECT noreg as kode_kantor, nama_kantor FROM `tab_kantor` ";
		$result = $db->Execute($sql);
	
	        if ($result->RecordCount()){
				$kdktr_option = "";
				while ($rslevel = $result->FetchRow()){
					if ($rslevel['kode_kantor'] == $pos_list['noreg']){
						$selected = "selected";
					}else{
						$selected = "";
					}
					$kdktr_option .= "<option value='$rslevel[kode_kantor]' $selected>$rslevel[nama_kantor]</option>";
		        }
			}

            	$this->assign("kdktr_option",$kdktr_option);

		//$this->assign("levusr", $pos_list['issupervisor']);
		$sql = "SELECT 0 as id, 'User Biasa' as levusr
			union all 
			select 1, 'Super User'";
		$result = $db->Execute($sql);
	
	        if ($result->RecordCount()){
				$levusr_option = "";
				while ($rslevel = $result->FetchRow()){
					if ($rslevel['id'] == $pos_list['issupervisor']){
						$selected = "selected";
					}else{
						$selected = "";
					}
					$levusr_option .= "<option value='$rslevel[id]' $selected>$rslevel[levusr]</option>";
		        }
			}

            		$this->assign("levusr_option",$levusr_option);	
				

				

	        }
*/
			$smarty->display("user_edit.tpl");
        }

		function showEditUserFormx()
		{
			$valid = 1;
			//$valid = Util::doCheckAuth(USR_PAGES);

			if($valid == 0 || $valid == 2){
				echo "<script language=javascript>
	                    alert('Anda tidak berhak mengakses halaman ini.');
	                    history.go(-1);
	                 </script>";
	            exit();
			}

			global $id,$db;
            global $FOOTER_NOTES,$HEADER_NOTES,$TITLE;

            $this->assign("HEADER_NOTES", $HEADER_NOTES);
            $this->assign("FOOTER_NOTES", $FOOTER_NOTES);
	        $this->assign("title", $TITLE);

	        $sql     = "SELECT * FROM tab_user WHERE id = '$id'";
		//print ($sql);
	        $rs = $db->Execute($sql);

		//$auth[] = array();

	        if ($rs->RecordCount())
	        {
                $pos_list = $rs->FetchRow();
		/*
                $sql = "select name from msdm_employee
                        where id = ".$pos_list['id_emp'];

                $result = $db->Execute($sql);
                $rsEmp  = $result->FetchRow();
		*/
		$smarty->assign("userid", $pos_list['id']);
		$smarty->assign("usernm", $pos_list['username']);
		//$this->assign("kdktr", $pos_list['kode_kantor']);
		$sql = "SELECT noreg as kode_kantor, nama_kantor FROM `tab_kantor` ";
		$result = $db->Execute($sql);
	
	        if ($result->RecordCount()){
				$kdktr_option = "";
				while ($rslevel = $result->FetchRow()){
					if ($rslevel['kode_kantor'] == $pos_list['noreg']){
						$selected = "selected";
					}else{
						$selected = "";
					}
					$kdktr_option .= "<option value='$rslevel[kode_kantor]' $selected>$rslevel[nama_kantor]</option>";
		        }
			}

            	$smarty->assign("kdktr_option",$kdktr_option);

		//$this->assign("levusr", $pos_list['issupervisor']);
		$sql = "SELECT 0 as id, 'User Biasa' as levusr
			union all 
			select 1, 'Super User'";
		$result = $db->Execute($sql);
	
	        if ($result->RecordCount()){
				$levusr_option = "";
				while ($rslevel = $result->FetchRow()){
					if ($rslevel['id'] == $pos_list['issupervisor']){
						$selected = "selected";
					}else{
						$selected = "";
					}
					$levusr_option .= "<option value='$rslevel[id]' $selected>$rslevel[levusr]</option>";
		        }
			}

            		$this->assign("levusr_option",$levusr_option);	
				

				

	        }

			$smarty->display("user_edit.tpl");
        }

		function editUser()
		{
			$valid = Util::doCheckAuth(AD5_PAGES);
			//$valid=1;
			if($valid == 0 || $valid == 2){
				echo "<script language=javascript>
	                    alert('Anda tidak berhak mengakses halaman ini.');
	                    history.go(-1);
	                 </script>";
	            exit();
			}

			global $db,$userid,$idemp,$name,$usernm,$passwd,$possem,$kdktr, $levusr, $passubah;
			global $vmsp,$wulp,$posp,$empp,$spvp,$mkop,$usrp,$masp,$bbtp,$kkop,
            		$komp,$cacp,$mesp,$konp,$assp,$cmpp,$cmmp,$empDev,$tmmp,$hlpp;
            		global $FOOTER_NOTES,$HEADER_NOTES,$TITLE;

			$this->assign("HEADER_NOTES", $HEADER_NOTES);
			$this->assign("FOOTER_NOTES", $FOOTER_NOTES);
			$this->assign("title", $TITLE);

			$id = $_POST['id'];
			$idemp = $_POST['idemp'];
            		$kdktr_option = $_POST['kdktr'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$level = $_POST['level'];
			//echo $idemp; echo exit;
			// ADMIN MODUL
			$ad11 = $_POST['ad11'];
			$ad12 = $_POST['ad12'];
			$ad13 = $_POST['ad13'];	    
			$ad14 = $_POST['ad14'];
			$ad15 = $_POST['ad15'];
			
			// HR MODUL
			$hr21 = $_POST['hr21'];
			$hr22 = $_POST['hr22'];
			$hr23 = $_POST['hr23'];	    
			$hr24 = $_POST['hr24'];
			$hr25 = $_POST['hr25'];
			$hr26 = $_POST['hr26'];
			$hr27 = $_POST['hr27'];						
			$hr28 = $_POST['hr28'];
			$hr29 = $_POST['hr29'];
			$hr210 = $_POST['hr210'];
			$hr211 = $_POST['hr211'];	    
			
			// REPORT MODUL
			$rp31 = $_POST['rp31'];
			$rp32 = $_POST['rp32'];
			$rp33 = $_POST['rp33'];
			$rp34 = $_POST['rp34'];								
			$rp35 = $_POST['rp35'];												
			$rp36 = $_POST['rp36'];
			$rp37 = $_POST['rp37'];
			$rp38 = $_POST['rp38'];
			$rp39 = $_POST['rp39'];								
			
			// WINDOW MODUL
			$wd41 = $_POST['wd41'];
			$wd42 = $_POST['wd42'];	
			$wd43 = $_POST['wd43'];	

            $this->assign("HEADER_NOTES", $HEADER_NOTES);
            $this->assign("FOOTER_NOTES", $FOOTER_NOTES);
	        $this->assign("title", $TITLE);

			$auth = $ad11.$ad12.$ad13.$ad14.$ad15.$hr21.$hr22.$hr23.$hr24.$hr25.$hr26.$hr27.$hr28.$hr29.$hr210.$hr211.$rp31.$rp32.$rp33.$rp34.$rp35.$rp36.$rp37.$rp38.$rp39.$wd41.$wd42.$wd43;
			
			if(!empty($password) && $password != ""){

				$password = md5($password);

				$sql = "UPDATE tab_user SET 
												username = '$username',
												password = '$password',
												issupervisor = '$level',
												authority = '$auth',
												lastlogin = now()
												WHERE id = '$id'";
			} else {

				$sql = "UPDATE tab_user SET 
												username = '$username',
												issupervisor = '$level',
												authority = '$auth',
												lastlogin = now()
												WHERE id = '$id'";
			}

	        $result = $db->Execute($sql);
	        //echo $sql;echo exit;

	        if($result)
	        {
	            echo "<script language=javascript>
	                    alert('Terima Kasih, berhasil memperbaiki data');
	                    window.location='user.php';
	                 </script>";
	        }
	        else
	            echo "<script language=javascript>
	                    alert('Gagal memperbaiki data');
	                    history.go(-1);
	                 </script>";

			$smarty->display("user_edit.tpl");
        }

		function editUserx()
		{
			$valid =1;
			//$valid = Util::doCheckAuth(USR_PAGES);

			if($valid == 0 || $valid == 2){
				echo "<script language=javascript>
				alert('Anda tidak berhak mengakses halaman ini.');
				history.go(-1);
				</script>";
				exit();
			}

			global $db,$userid,$idemp,$name,$usernm,$passwd,$possem,$kdktr, $levusr, $passubah;
			global $vmsp,$wulp,$posp,$empp,$spvp,$mkop,$usrp,$masp,$bbtp,$kkop,
            		$komp,$cacp,$mesp,$konp,$assp,$cmpp,$cmmp,$empDev,$tmmp,$hlpp;
            		global $FOOTER_NOTES,$HEADER_NOTES,$TITLE;

			$this->assign("HEADER_NOTES", $HEADER_NOTES);
			$this->assign("FOOTER_NOTES", $FOOTER_NOTES);
			$this->assign("title", $TITLE);

			$usernamex = $_SESSION['usernamesession'];
			if ($usernamex =='yeny' or $usernamex =='veri')
			{
				$sql = "UPDATE tab_user SET noreg = '$kdktr', username='$usernm', password=MD5('".$passubah."'), issupervisor='$levusr',
					useredit='$usernamex', tgledit=now() where id='$userid'";
				//echo $sql;
				$result = $db->Execute($sql);
			}

	        if($result)
	        {
	            echo "<script language=javascript>
	                    alert('Terima Kasih, berhasil memperbaiki data');
	                    window.location='user.php?index=$index&tampil=$tampil';
	                 </script>";
	        }
	        else
	            echo "<script language=javascript>
	                    alert('Gagal memperbaiki data');
	                    history.go(-1);
	                 </script>";

			$this->display("user_edit.html");
        }


		function showAddUserForm()
		{

			$valid = Util::doCheckAuth(USR_PAGES);

			if($valid == 0 || $valid == 2){
				echo "<script language=javascript>
	                    alert('Anda tidak berhak mengakses halaman ini.');
	                    history.go(-1);
	                 </script>";
	            exit();
			}

			global $db;
			global $FOOTER_NOTES,$HEADER_NOTES,$TITLE;

			$sql = "select * from administrator";
            $emp_result = $db->Execute($sql);
            $emp_num = $emp_result->RecordCount();

            /*
            $MAX_EMP_NUMBER = 6;
            if($emp_num >= $MAX_EMP_NUMBER)
            {
				echo "<script language=javascript>
	                    alert('Versi ini tidak memungkinkan anda untuk menambah user baru');
	                    history.go(-1);
	                 </script>";
                exit();
            }
            */

            $this->assign("HEADER_NOTES", $HEADER_NOTES);
            $this->assign("FOOTER_NOTES", $FOOTER_NOTES);
	        $this->assign("title", $TITLE);

			$sqlEmp = "SELECT * FROM msdm_employee ORDER BY id DESC";

	        $rse = $db->Execute($sqlEmp);

			if (!$rse->RecordCount())
	        {
	             $kosong = 'kosong';
	             $emp_list[] = array(
				 					'id'=>$kosong,
	                                'name'=>$kosong
	                                );
	        }
	        else
	        {	
				while ($rowEmp_list = $rse->FetchRow()){

                    //$sql  = "select * from administrator
                    //            where id_emp =".$rowEmp_list['id'];
                    //$result = $db -> Execute($sql);
					//if($rs_user = $result -> RecordCount()) {
                    //    continue;
                    //else
	                  $emp_list[] = array(
										'id'=>$rowEmp_list['id'],
										'name'=>$rowEmp_list['name']
	            						);
					//}
	            }
	        }
			$smarty->assign("emp", $emp_list);
			$smarty->display("user_add.html");
        }

		function saveUser()
		{

			$valid = Util::doCheckAuth(USR_PAGES);

			if($valid == 0 || $valid == 2){
				echo "<script language=javascript>
	                    alert('Anda tidak berhak mengakses halaman ini.');
	                    history.go(-1);
	                 </script>";
	            exit();
			}

			global $db;
            global $idemp,$username,$passwd;
			global $vmsp,$wulp,$posp,$empp,$spvp,$mkop,$usrp,$masp,$bbtp,$kkop,$komp,$cacp,$mesp,$konp,$assp,$cmpp,$cmmp,$empDev,$tmmp,$hlpp;

			$sql1 = "SELECT name FROM msdm_employee WHERE id = '$idemp'";

	        $rs = $db->Execute($sql1);

			$row = $rs->FetchRow();

			$nama = $row['name'];

			$auth = $vmsp.$wulp.$posp.$empp.$spvp.$mkop.$usrp.$masp.$bbtp.$kkop.$komp.$cacp.$mesp.$konp.$assp.$cmpp.$cmmp.$empDev.$tmmp.$hlpp;

			$passwd = md5($passwd);

			$sqlEmp = "SELECT * FROM administrator WHERE username = '$username'";

	        $rse = $db->Execute($sqlEmp);

			if ($rse->RecordCount()){
				 echo "<script language=javascript>
	                    alert('Username Telah Terdaftar');
	                    history.go(-1);
	                 </script>";
			}

            $sql = "insert into administrator (id_emp,username,password,authority)
					values ('".$idemp."','".$username."','".$passwd."','".$auth."')";
					//echo $sql;

            if ($idemp=='')
            {
                $inserted = 0;
                $err_message = "Silahkan menambah Data Pegawai terlebih dahulu";
            }
            else
                $result = $db->Execute($sql);

            if($result){
               	$inserted = 1;
			} else {
               	$inserted = 0;
			}

	        if($inserted)
	        {
	            echo "<script language=javascript>
	                    alert('Terima Kasih, berhasil menyimpan data');
	                    window.location='user.php?index=$index&tampil=$tampil';
	                 </script>";
	        }
	        else
	            echo "<script language=javascript>
	                    alert('Gagal menyimpan data. $err_message');
	                    history.go(-1);
	                 </script>";
        }

		function delUser()
		{

			$valid = Util::doCheckAuth(AD5_PAGES);

			if($valid == 0 || $valid == 2){
				echo "<script language=javascript>
	                    alert('Anda tidak berhak mengakses halaman ini.');
	                    history.go(-1);
	                 </script>";
	            exit();
			}

			global $db,$id,$index,$tampil;
	    $id=$_GET['idata'];	
            $sql = "delete from tab_user where id ='$id'";
	    //echo $sql;echo exit;
            $result = $db->Execute($sql);
		
	        if($result)
	        {
	            echo "<script language=javascript>
	                    alert('Terima Kasih, berhasil menghapus data');
	                    window.location='user.php?index=$index&tampil=$tampil';
	                 </script>";
	        }
	        else
	            echo "<script language=javascript>
	                    alert('Gagal menghapus data');
	                    window.location='user.php?index=$index&tampil=$tampil';
	                 </script>";
        }

        function changePassword()
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
		$smarty->assign("samping","5");

            $sql = "select * from tab_employee where id='$_SESSION[username]'";
            $result = $db->Execute($sql);
            $rs = $result->FetchRow();

            //check authorization
	    
		

	        if($rs['name'])
	            $this->assign("authed", 1);

	      
	        $username = $_SESSION['username'];
	        $process = $_POST['action'];

	        if ($process=='changePassword')
	        {

                $sql = "select * from tab_user where password = md5('$oldpass')
                										and username = '$username'";
                $rs = $db->Execute($sql);
                //echo $sql;

	            //password bener
	            if ($rs->RecordCount()== 1)
	            {
	              if ($nupass != $retype)
	                        echo "<script language=javascript>alert('Mohon ulangi password baru anda');</script>";
                  else
                  {

	                if(empty($nupass))
	                {
	                    echo "<script language=javascript>
	                            alert('Silahkan masukkan pasword baru anda');
	                         </script>";
	                }
                    else
					{
	                    $sql = "UPDATE tab_user SET password = md5('$nupass') where username = '$username'";
	                    $rs = $db->Execute($sql);
	                    if ($rs)
	                    {
	                        $_SESSION['passwordsession'] = md5($nupass);
	                        echo "<script language=javascript>alert('Password anda telah diganti');
	                                    history.go(-2);</script>";
	                    }
	                    else
	                        echo "<script language=javascript>alert('Gagal memasukkan password');</script>";
                    }
	              }
	            }
	            else
	                {
                        echo "<script language=javascript>alert('Password tidak valid');</script>";
	                }
	        }

	       
	        $smarty->display("password.tpl");
        }

		function showLog()
		{
		    
		global $id,$db;
		global $FOOTER_NOTES,$HEADER_NOTES,$TITLE;
				$valid =1;
				//$valid = Util::doCheckAuth(POS_PAGES);
	
				if($valid != 1){
					echo "<script language=javascript>
				alert('Anda tidak berhak mengakses halaman ini.');
				history.go(-1);
				</script>";
				}
	
		$this->assign("HEADER_NOTES", $HEADER_NOTES);
		$this->assign("FOOTER_NOTES", $FOOTER_NOTES);
		$this->assign("title", $TITLE);
	
			$sql     = "SELECT * FROM dat_transferfilelog";
			//print ($sql);
			$rs = $db->Execute($sql);
	
			if (!$rs->RecordCount())
			
				{echo "kosong";
				$kosong = 'kosong';
				$pos_list[] = array(
							'no'=>$kosong,
							'id'=>$kosong,
							'blobTitle'=>$kosong,
							'blobType'=>$kosong,
							'Userupload'=>$kosong,	
							'tglupload'=>$kosong,
							'Userdownload'=>$kosong,
							'tgldownload'=>$kosong
							);
				}
				else
			
				{ 
		
				$no = $awal;
				while ($rowPos_list = $rs->FetchRow()){
					//if($_SESSION["usernamesession"]!='admin' && $rowuser_list['username']=='admin')
					//continue;
					
					++$no;

					$pos_list[] = array(
							'no'=>$no,
							'blobId'=>$rowPos_list['blobId'],
							'blobTitle'=>$rowPos_list['blobTitle'],
							'blobType'=>$rowPos_list['blobType'],
							'Userupload'=>$rowPos_list['Userupload'],
							'tglupload'=>$rowPos_list['tglupload'],
							'Userdownload'=>$rowPos_list['Userdownload'],	
							'tgldownload'=>$rowPos_list['tgldownload']
							);
				}
				}

				$smarty->assign("pos", $pos_list);
				$smarty->display("listlog.html");
		}
    }


?>
