<?php
require ('libs/Smarty.class.php');
require ('config.php');
require ('clsUtil.php');
//require ('user_cek.php');
class employee {
	
	    function Show() {

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
		$smarty->assign("samping","21");
		
		$sqlUser     = "SELECT a.id, a.NIK as nip, nama as name, divisi,pathktp,pathnikah,pathnpwp,pathbpjs,pathbpjssehat,pathreke,pathkk, tlahir, date_format( tglahir2, '%d/%m/%Y' ) AS tglahir, date_format( tgl_masuk, '%d/%m/%Y' ) AS tgl_masuk2, case when tgl_tidakaktif ='0000-00-00' then null else date_format( tgl_tidakaktif, '%d/%m/%Y' ) end AS tgl_keluar2,tab_stskawin.stskawin,telpon_kantor, jamsostek, npwp, bank, no_rek, case when status_p='T' then 'Tidak Aktif' else '' end as status_p, keterangan, telpon_rumah,a.sex, agama, address, alamat_sementara, hp, nama_jabatan, round(datediff(now(), a.tglahir2)/365,0) as usia, round(datediff(now(), a.tgl_masuk)/365,0) as MasaKerja, a.pathfoto,a.gaji_lumpsum,nama_pendidikan FROM tab_employee a
			LEFT JOIN tab_jabatan ON a.id_jbt = tab_jabatan.id_jbt
			LEFT JOIN tab_agama ON a.id_agama = tab_agama.id 
			LEFT JOIN tab_stskawin ON a.id_stskawin = tab_stskawin.id
			LEFT JOIN tab_divisi ON a.id_divisi = tab_divisi.id
			LEFT JOIN tab_pendidikan on a.pend_darat= tab_pendidikan.id_pen";
//echo $sqlUser;
			$rs = $db->Execute($sqlUser);
			
	        if (!$rs->RecordCount())
			{
			     $kosong = 'kosong';
	             $unite_list[] = array(
	                'no'=>$kosong,
	               	'id'=>$kosong,
	               	'nik'=>$kosong,
					'dept'=>$kosong,
					'jabatan'=>$kosong,
					'position'=>$kosong,
					'tglmasuk'=>$kosong
		                        );
	        }
	        else
	        { 
				//$rs=mysql_query($sql);
	            $no = 0; 
				while ($row = $rs->FetchRow()){
				      ++$no;

				      if ($row['pathfoto']=="")
					  {
						$linkflp = "upload";
						}
					  else
					  {
						//$linkflp ="<a href=" . $rowuser_list['pathfoto'] . "><img src='" . $rowuser_list['pathfoto'] ."' border=0 width=80px height=100px></a>";
						$linkflp ="<a href=upload_foto.php?action=edit&idpeg=" . $row['id'] ."><img src='" . $row['pathfoto'] ."' border=0 width=80px height=100px></a>";
						}
		
	                  $unite_list[] = array(
	                    'no'=>$no,
	                    'id'=>$row['id'],
					    'nik'=>$row['nip'],
						'name'=>strtoupper($row['name']),
						'dept'=>$row['divisi'],
						'jabatan'=>$row['nama_jabatan'],
										'tlahir'=>$row['tlahir'],
										'born_date'=>$row['tglahir'],
										'sex'=>$row['sex'],
										'hp'=>$row['hp'],
										'telpon_kantor'=>$row['telpon_kantor'],
										'telpon_rumah'=>$row['telpon_rumah'],
										'address'=>$row['address'],
										'pendidikan'=>$row['nama_pendidikan'],
										'usia'=>$row['usia'],
										'mk'=>$row['MasaKerja'],
										'agama'=>$row['agama'],
										'jamsostek'=>$row['jamsostek'],
										'bank'=>$row['bank'],
										'ktp'=>$row['pathktp'],
										'npwp'=>$row['pathnpwp'],
										'bpjs'=>$row['pathbpjs'],
										'bpjssehat'=>$row['pathbpjssehat'],
										'nikah'=>$row['pathnikah'],
										'kk'=>$row['pathkk'],
										'reke'=>$row['pathreke'],
										'no_rek'=>$row['no_rek'],
										'gaji'=>$row['gaji_lumpsum'],
										'stskawin'=>$row['stskawin'],
										'tgl_masuk'=>$row['tgl_masuk2'],
										'tgl_keluar'=>$row['tgl_keluar2'],
										'status_p'=>$row['status_p'],
										'keterangan'=>$row['keterangan'],
										'smap'=>$linkflp

					         );
						//echo $pos_list;
	            }
				$nomor = $no;
	        }
				
	        	$smarty->assign("unite", $unite_list);
		
		$smarty->display('employee.tpl');
		
		}


		function ShowTidakAktif()
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
		$smarty->assign("samping","21");
	
	    $smarty->assign("self_url", "employee.php?mod=tidakaktif");

		$sql           = "SELECT a.id, a.NIK as nip, nama as name, divisi,pathktp,pathnikah,pathnpwp,pathbpjs,pathbpjssehat,pathreke,pathkk, tlahir, date_format( tglahir2, '%d/%m/%Y' ) AS tglahir, date_format( tgl_masuk, '%d/%m/%Y' ) AS tgl_masuk2, case when tgl_tidakaktif ='0000-00-00' then null else date_format( tgl_tidakaktif, '%d/%m/%Y' ) end AS tgl_keluar2,tab_stskawin.stskawin,telpon_kantor, jamsostek, npwp, bank, no_rek, case when status_p='T' then 'Tidak Aktif' else '' end as status_p, keterangan, telpon_rumah,a.sex, agama, address, alamat_sementara, hp, nama_jabatan, round(datediff(now(), a.tglahir2)/365,0) as usia, round(datediff(now(), a.tgl_masuk)/365,0) as MasaKerja, a.pathfoto,a.gaji_lumpsum,nama_pendidikan FROM tab_employee a 
			LEFT JOIN tab_jabatan ON a.id_jbt = tab_jabatan.id_jbt 
			LEFT JOIN tab_agama ON a.id_agama = tab_agama.id 
			LEFT JOIN tab_stskawin ON a.id_stskawin = tab_stskawin.id
			LEFT JOIN tab_divisi ON a.id_divisi = tab_divisi.id
			LEFT JOIN tab_pendidikan on a.pend_darat= tab_pendidikan.id_pen
			where nama<>'admin' and status_p = 'T'";
				//					}
//echo $_SESSION[userflag];
			
            if(!empty($division))
			{
				$and_clause .= " and (";
				$and_clause .= " a.id_jbt = '".$division."'";
				$and_clause .= ")";
			}

            
            $order_clause   = " ORDER BY nama ASC";
            $sql .= $order_clause;
            //echo $sql;
            $rs = $db->Execute($sql);
			//echo $sql; echo exit;
			$kosong = 'kosong';
	        if (!$rs->RecordCount())
	        {

	             $unite_list[] = array(
	                                    'id'=>$kosong,
	                                    'nik'=>$kosong,
	                                    'dept'=>$kosong,
	                                    'jabatan'=>$kosong,
	                                    'position'=>$kosong,
					    'tglmasuk'=>$kosong
	                                );
	        }
	        else
	        {

	            $no = 0;

				while ($rowuser_list = $rs->FetchRow()){


					  ++$no;

					  if ($rowuser_list['pathfoto']=="")
					  {
						$linkflp = "upload";
						}
					  else
					  {
						//$linkflp ="<a href=" . $rowuser_list['pathfoto'] . "><img src='" . $rowuser_list['pathfoto'] ."' border=0 width=80px height=100px></a>";
						$linkflp ="<a href=upload_foto.php?mod=edit&idpeg=" . $rowuser_list['id'] ."><img src='" . $rowuser_list['pathfoto'] ."' border=0 width=80px height=100px></a>";
						}
	                  		  $unite_list[] = array(
	                                    'no'=>$no,
	                                    'id'=>trim(str_replace("'","",$rowuser_list['id'])),
	                                    'nik'=>$rowuser_list['nip'],
										'name'=>strtoupper($rowuser_list['name']),
										'dept'=>$rowuser_list['divisi'],
										'jabatan'=>$rowuser_list['nama_jabatan'],
										'tlahir'=>$rowuser_list['tlahir'],
										'born_date'=>$rowuser_list['tglahir'],
										'sex'=>$rowuser_list['sex'],
										'hp'=>$rowuser_list['hp'],
										'telpon_kantor'=>$rowuser_list['telpon_kantor'],
										'telpon_rumah'=>$rowuser_list['telpon_rumah'],
										'address'=>$rowuser_list['address'],
										'pendidikan'=>$rowuser_list['nama_pendidikan'],
										'usia'=>$rowuser_list['usia'],
										'mk'=>$rowuser_list['MasaKerja'],
										'agama'=>$rowuser_list['agama'],
										'jamsostek'=>$rowuser_list['jamsostek'],
										'bank'=>$rowuser_list['bank'],
										'ktp'=>$rowuser_list['pathktp'],
										'npwp'=>$rowuser_list['pathnpwp'],
										'bpjs'=>$rowuser_list['pathbpjs'],
										'bpjssehat'=>$rowuser_list['pathbpjssehat'],
										'nikah'=>$rowuser_list['pathnikah'],
										'kk'=>$rowuser_list['pathkk'],
										'reke'=>$rowuser_list['pathreke'],
										'no_rek'=>$rowuser_list['no_rek'],
										'gaji'=>$rowuser_list['gaji_lumpsum'],
										'stskawin'=>$rowuser_list['stskawin'],
										'tgl_masuk'=>$rowuser_list['tgl_masuk2'],
										'tgl_keluar'=>$rowuser_list['tgl_keluar2'],
										'status_p'=>$rowuser_list['status_p'],
										'keterangan'=>$rowuser_list['keterangan'],			    
					    				'smap'=>$linkflp );
	            }
	        }
	       // $this->assign("tglmasuk",$tglmsk);
	       // $this->assign("tglkeluar",$tglklr);
	        //return $unite_list;
	    $smarty->assign("unite", $unite_list);
		
		
		$smarty->display("employee_notactive.tpl");    
		
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
		$smarty->assign("samping","21");

					$sql="SELECT * FROM tab_employee order by id desc limit 1";
					$result = $db -> Execute($sql);
					$rs = $result->FetchRow();
					$rs_count = $result->RecordCount();
					$data = $rs['id'];
					$data++;
					$newID = sprintf("%03s", $data);
			/*
			if($rs_count > 0){
					//$jumString = strlen($newID);
					//$jumString = 5 - $jumString; 
					for ($i = 0; $i < $newID; $i++) {
						$newID.="0";
					}
					$kode = "$newID";
				}else{ 
					$kode="$newID";
				}
			*/
			$_SESSION['kode'] = $newID;	
			//echo $_SESSION['kode'];
				
				$sql2="SELECT * FROM tab_employee where id='$_SESSION[kode]'";
				$result2 = $db -> Execute($sql2);
				$rs_count2 = $result2->RecordCount();
				
				if($rs_count2 == 0){
					//melakukan delete pada pendidikan
					$sqlPendidikan="DELETE FROM dat_pendidikan where id_peg = '$_SESSION[kode]' ";
					$result = $db->Execute($sqlPendidikan);
					//melakukan delete pada Kursus
					$sqlKursus="DELETE FROM dat_kursus where id_peg = '$_SESSION[kode]' ";
					$result = $db->Execute($sqlKursus);
					//melakukan delete pada Pelatihan Kelautan
					$sqlPelatihan="DELETE FROM dat_pelatihan where id_peg = '$_SESSION[kode]' ";
					$result = $db->Execute($sqlPelatihan);
					//melakukan delete pada Pekerjaan
					$sqlPekerjaan="DELETE FROM dat_mutasi_jabatan where id_peg = '$_SESSION[kode]' ";
					$result = $db->Execute($sqlPekerjaan);
					//melakukan delete pada Keluarga
					$sqlKeluarga="DELETE FROM dat_keluarga where id_peg = '$_SESSION[kode]' ";
					$result = $db->Execute($sqlKeluarga);
					//melakukan delete pada Kesehatan
					$sqlKesehatan="DELETE FROM dat_kesehatan where id_peg = '$_SESSION[kode]' ";
					$result = $db->Execute($sqlKesehatan);
					//melakukan delete pada Penghargaan
					$sqlPenghargaan="DELETE FROM dat_penghargaan where id_peg = '$_SESSION[kode]' ";
					$result = $db->Execute($sqlPenghargaan);
					//melakukan delete pada Hukuman
					$sqlHukuman="DELETE FROM dat_sanksi where id_peg = '$_SESSION[kode]' ";
					$result = $db->Execute($sqlHukuman);
					//melakukan delete pada Endorsment
					$sqlEndorsment="DELETE FROM dat_organisasi where id_peg = '$_SESSION[kode]' ";
					$result = $db->Execute($sqlEndorsment);
					//melakukan delete pada MCU
					$sqlMCU="DELETE FROM dat_mcu where id_peg = '$_SESSION[kode]' ";
					$result = $db->Execute($sqlMCU);
				}
			
		$stskawin_opt = $this->stskawin_opt();
		$smarty->assign("stskawin_opt",$stskawin_opt);

		$penddarat_opt = $this->penddarat_opt();
		$smarty->assign("penddarat_opt",$penddarat_opt);

		$agama_opt = $this->agama_opt();
		$smarty->assign("agama_opt",$agama_opt);

		$jabatan_opt = $this->jabatan_opt();
		$smarty->assign("jabatan_opt",$jabatan_opt);

		$divisi_opt = $this->divisi_opt();
		$smarty->assign("divisi_opt",$divisi_opt);

		$perusahaan_opt = $this->perusahaan_opt();
		$smarty->assign("perusahaan_opt",$perusahaan_opt);

		$smarty->display('employee_add.tpl');
		}


		function SaveProcess() 
		{
			global $title,$db;
			include "fn/fn_str.php";
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);
			//$smarty->assign("username",$_SESSION['username']);

				
		session_start();
		$kode = $_SESSION['kode'];
		
		//$id = $_POST['id'];
		$nik = $_POST['nik'];
		$name = $_POST['name'];
		$tlahir = $_POST['tlahir']; 
		$tglahir2 = $_POST['tglahir2']; 
		$sex = $_POST['sex']; 
		$agama = $_POST['agama'];
		$address = $_POST['address'];		
		$stskawin = $_POST['stskawin']; 
		$telpon_kantor = $_POST['telpon_kantor']; 
		$telpon_rumah = $_POST['telpon_rumah'];
		$hp = $_POST['hp'];
		$tgl_masuk = $_POST['tgl_masuk'];
		$pend_darat = $_POST['pend_darat'];
		$jamsostek = $_POST['jamsostek'];
		$npwp = $_POST['npwp'];
		$status_p = $_POST['status_p'];
		$keterangan = $_POST['keterangan'];
		$jabatan = $_POST['jabatan'];
		$divisi = $_POST['divisi'];
		$alamat_sementara = $_POST['alamat_sementara'];
		$tgl_tidakaktif = $_POST['tgl_tidakaktif'];
		$bank = $_POST['bank'];
		$no_rek = $_POST['no_rek'];
		$gaji = clean_string_num($_POST['gaji']);
		$no_askes = $_POST['no_askes'];
		$perusahaan = $_POST['perusahaan'];
		

			$smarty->assign("nik", $nik);
			$smarty->assign("name", $name);
			$smarty->assign("tlahir", $tlahir);
			$smarty->assign("tglahir2", $tglahir2);
			$smarty->assign("sex", $sex);
			$smarty->assign("agama", $agama);
			$smarty->assign("address", $address);
			$smarty->assign("stskawin", $stskawin);
			$smarty->assign("telpon_kantor", $telpon_kantor);
			$smarty->assign("telpon_rumah", $telpon_rumah);
			$smarty->assign("hp", $hp);
			$smarty->assign("tgl_masuk", $tgl_masuk);
			$smarty->assign("pend_darat", $pend_darat);
			$smarty->assign("jamsostek", $jamsostek);
			$smarty->assign("npwp", $npwp);
			$smarty->assign("status_p", $status_p);
			$smarty->assign("keterangan", $keterangan);
			$smarty->assign("jabatan", $jabatan);

			$smarty->assign("divisi", $divisi);

			$smarty->assign("alamat_sementara", $alamat_sementara);
			$smarty->assign("tgl_tidakaktif", $tgl_tidakaktif);
			$smarty->assign("bank", $bank);
			$smarty->assign("no_rek", $no_rek);
			$smarty->assign("gaji", $gaji);
			$smarty->assign("no_askes", $no_askes);

			
		$stskawin_opt = $this->stskawin_opt();
		$smarty->assign("stskawin_opt",$stskawin_opt);

		$penddarat_opt = $this->penddarat_opt();
		$smarty->assign("penddarat_opt",$penddarat_opt);

		$agama_opt = $this->agama_opt();
		$smarty->assign("agama_opt",$agama_opt);

		$jabatan_opt = $this->jabatan_opt();
		$smarty->assign("jabatan_opt",$jabatan_opt);

		$divisi_opt = $this->divisi_opt();
		$smarty->assign("divisi_opt",$divisi_opt);

		$perusahaan_opt = $this->perusahaan_opt();
		$smarty->assign("perusahaan_opt",$perusahaan_opt);
			
			if(empty($statusNik) && empty($statusName) && empty($statusJabatan) && empty($statusDivisi) && empty($statusBorn)){
				//melakukan pengecekan existing data
				    $sql_employee="SELECT * FROM tab_employee where NIK='$nik'";
					$result_employee = $db -> Execute($sql_employee);
					$rs_employee = $result_employee->RecordCount();
					if($rs_employee > 0){
					echo "<script language=javascript>
							alert('NIK sudah terdaftar');
						 </script>";
						$smarty->display("employee_add.html");
					}else{
					
					//ini untuk Foto
					$pathfotoname =$_FILES['pathfoto']['name']; 
					$pathfototype =$_FILES['pathfoto']['type']; 
					$pathfotosize =$_FILES['pathfoto']['size']; 
					
					if(!empty($pathfotoname)){
					$pathfotolink ='gambar'.'/'.$_POST['nik'].'_'.$pathfotoname;
					}
					//melakukan proses update
					if($pathfotosize > 100000){
					echo "<script language=javascript>
	                    alert('Gagal memperbaiki data, Photo Upload > 100 KB');
	                    window.location='employee.php';
	                 </script>";
					}else{
					//window.location='employee.php?mod=edit&id=$kode';
					
					$sql_employees="SELECT max(id)+1 as maxid FROM tab_employee";
					$result_employees = $db -> Execute($sql_employees);
					$rs_employees = $result_employees->FetchRow();
					
					$maxid = $rs_employees['maxid'];
					
					//**************************melakukan aksi upload gambar
					move_uploaded_file($_FILES['pathfoto']['tmp_name'],$pathfotolink);
				
						$sql_employee = "INSERT INTO tab_employee ( id, NIK, nama, id_jbt, id_divisi, id_stskawin, status_p, tgl_masuk, tgl_tidakaktif, 
						address, alamat_sementara, tlahir, tglahir2, sex, id_agama, telpon_kantor, telpon_rumah, hp, pend_darat,  pathfoto,
						npwp, bank, no_rek, gaji_lumpsum, no_asuransi_kesehatan,  jamsostek, idperusahaan,keterangan) VALUES

						('$maxid', '$nik', '$name', '$jabatan',  '$divisi',  '$stskawin', '$status_p', STR_TO_DATE('$tgl_masuk', '%d/%m/%Y'), STR_TO_DATE('$tgl_tidakaktif', '%d/%m/%Y'),
						'$address', '$alamat_sementara', '$tlahir', STR_TO_DATE('$tglahir2', '%d/%m/%Y'), '$sex', '$agama', '$telpon_kantor', '$telpon_rumah', '$hp', '$pend_darat',  '$pathfotolink',
						'$npwp', '$bank', '$no_rek', '$gaji',  '$no_askes',  '$jamsostek', '$perusahaan','$keterangan')";		
						
						$result_employee = $db->Execute($sql_employee);
						
			//echo $sql_employee;
			//echo exit;
			
	                //$result = $db->Execute($sql);
	        if($result_employee)
	        {
	            echo "<script language=javascript>
	                    alert('Terima Kasih, berhasil memperbaiki data');
	                    window.location='employee.php';
	                 </script>";

	        }
	        else{
	            echo "<script language=javascript>
	                    alert('Gagal menyimpan data');
	                    window.location='employee.php';
	                 </script>";
			
						}
					}
				}
			}
			
        }

        function ShowEdit() {
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
		$smarty->assign("samping","21");
		$id = $_GET['id'];
	    $smarty->assign("id",$id);

			$kode = $_REQUEST['id'];
			if(empty($kode)){
				$kode = $_SESSION['kode'];
			}
			$_SESSION['kode']=$kode;
/*
	        $sql_Emp = "select * from tab_employee
                            where id=$id";
            $rs_Emp = $db->Execute($sql_Emp);
            $rsEmp = $rs_Emp->FetchRow();
*/

	        $sql     = "SELECT *, date_format(tglahir2, '%d/%m/%Y') as tglahir2,
date_format(tgl_masuk, '%d/%m/%Y') as tgl_masuk2,date_format(tgl_tidakaktif, '%d/%m/%Y') as tgl_tidakaktif2,
date_format(tgl_kontrak_dari, '%d/%m/%Y') as tgl_kontrak,date_format(tgl_kontrak_sampai, '%d/%m/%Y') as tgl_kontrak2
FROM tab_employee WHERE id = '$id'";
           // echo $sql;

	        $rs = $db->Execute($sql);

	        if ($rs->RecordCount())
	        {
       		$rowuser_list = $rs->FetchRow();

		  	$smarty->assign("nik", $rowuser_list['NIK']);
	        $smarty->assign("name", $rowuser_list['nama']);

	        $jabatan_opt = $this->jabatan_opt($rowuser_list['id_jbt']);
			$smarty->assign("jabatan_opt",$jabatan_opt);
			
			$stskawin_opt = $this->stskawin_opt($rowuser_list['id_stskawin']);
			$smarty->assign("stskawin_opt",$stskawin_opt);

			$penddarat_opt = $this->penddarat_opt($rowuser_list['pend_darat']);
			$smarty->assign("penddarat_opt",$penddarat_opt);

			$agama_opt = $this->agama_opt($rowuser_list['id_agama']);
			$smarty->assign("agama_opt",$agama_opt);

			$bisnisunit_opt = $this->bisnisunit_opt($rowuser_list['idbisnisunit']);
			$smarty->assign("bisnisunit_opt",$bisnisunit_opt);

			$divisi_opt = $this->divisi_opt($rowuser_list['id_divisi']);
			$smarty->assign("divisi_opt",$divisi_opt);

			$perusahaan_opt = $this->perusahaan_opt($rowuser_list['idperusahaan']);
			$smarty->assign("perusahaan_opt",$perusahaan_opt);
			$smarty->assign("tgl_masuk", $rowuser_list['tgl_masuk']);
			$smarty->assign("tlahir", $rowuser_list['tlahir']);
	        $smarty->assign("email", $rowuser_list['email']);
			$smarty->assign("emailal", $rowuser_list['email_alternatif']);
			$smarty->assign("tglahir2", $rowuser_list['tglahir2']);
	        $smarty->assign("telpon_kantor", $rowuser_list['telpon_kantor']);
	       	$smarty->assign("telpon_rumah", $rowuser_list['telpon_rumah']);
	        $smarty->assign("hp", $rowuser_list['hp']);
	        $smarty->assign("address", $rowuser_list['address']);
			$smarty->assign("alamat_sementara", $rowuser_list['alamat_sementara']);
			$smarty->assign("bank",$rowuser_list['bank']);
			$smarty->assign("no_rek",$rowuser_list['no_rek']);
			$smarty->assign("gaji",$rowuser_list['gaji_lumpsum']);
			$smarty->assign("by_asuransi",$rowuser_list['asuransi']);
			$smarty->assign("no_askes",$rowuser_list['no_asuransi_kesehatan']);
			$smarty->assign("no_aspen",$rowuser_list['no_asuransi_pensiun']);
			$smarty->assign("jamsostek",$rowuser_list['jamsostek']);
			$smarty->assign("npwp",$rowuser_list['npwp']);
			$smarty->assign("keterangan",$rowuser_list['keterangan']);
			//$smarty->assign("smap",$linkflp);
			$smarty->assign("tgl_kontrak_dari", $rowuser_list['tgl_kontrak']);
			$smarty->assign("tgl_kontrak_sampai", $rowuser_list['tgl_kontrak2']);
			$smarty->assign("status_p", $rowuser_list['status_p']);
			// untuk mendapatkan data pendidikan
			$sql_pendidikan ="SELECT * FROM dat_pendidikan where id_peg = '$_SESSION[kode]' order by id asc";
			$result_pendidikan = $db -> Execute($sql_pendidikan);
			$no=0;
			$kosong = 'n/a';
			if (!$result_pendidikan->RecordCount())
	        {
	             
	             $pendidikan_list[] = array(
				 'no'=>$kosong,
	             'id'=>$kosong,
				 'id_peg'=>$kosong,
				 'sekolah'=>$kosong,
				 'tempat'=>$kosong,
				 'jurusan'=>$kosong,
				 'ipk'=>$kosong,
				 'gelar'=>$kosong,
				 'tingkat'=>$kosong,
				 'path'=>$kosong
				 );
	        }else{
			while($rs_pendidikan = $result_pendidikan->FetchRow()){
				 ++$no;
				 $pendidikan_list[] = array(
										'no'=>$no,
										'id'=>$rs_pendidikan['id'],
										'id_peg'=>$rs_pendidikan['id_peg'],
	                                    'tahun_awal'=>$rs_pendidikan['tahun_awal'],
										'tahun_akhir'=>$rs_pendidikan['tahun_akhir'],
										'sekolah'=>$rs_pendidikan['sekolah_univ'],
										'tempat'=>$rs_pendidikan['tempat'],
										'jurusan'=>$rs_pendidikan['jurusan'],
										'ipk'=>$rs_pendidikan['ipk'],
										'fakultas'=>$rs_pendidikan['fakultas'],
										'tingkat'=>$rs_pendidikan['id_tingkat'],
										'gelar'=>$rs_pendidikan['gelar'],
										'path'=>$rs_pendidikan['pathijazah'],
										'sertifikat'=>$rs_pendidikan['sertifikat'],
										'ket'=>$rs_pendidikan['keterangan']
	                                    );
			}
			}
			$smarty->assign("pendidikan_list",$pendidikan_list);
			
			// untuk mendapatkan data kursus
			$sql_kursus="SELECT * FROM dat_kursus where id_peg = '$_SESSION[kode]' order by id asc";
			$result_kursus = $db -> Execute($sql_kursus);
			$no=0;
			$kosong = 'n/a';
			if (!$result_kursus->RecordCount())
	        {
	             
	             $kursus_list[] = array(
				 'no'=>$kosong,
	             'id'=>$kosong,
				 'id_peg'=>$kosong,
				 'kursus'=>$kosong,
				 'instansi'=>$kosong,
				 'kota'=>$kosong,
				 'tahun'=>$kosong,
				 'sertifikat'=>$kosong,
				 'no_sertifikat'=>$kosong,
				 'ket'=>$kosong,
				 'update_user'=>$kosong,
				 'tanggal_update'=>$kosong
				 );
	        }else{
			while($rs_kursus = $result_kursus->FetchRow()){
				 ++$no;
				 $kursus_list[] = array(
										'no'=>$no,
										'id'=>$rs_kursus['id'],
										'id_peg'=>$rs_kursus['id_peg'],
	                                    'kursus'=>$rs_kursus['kursus'],
										'instansi'=>$rs_kursus['instansi'],
										'kota'=>$rs_kursus['kota'],
										'tahun'=>$rs_kursus['tahun'],
										'sertifikat'=>$rs_kursus['sertifikat'],
										'no_sertifikat'=>$rs_kursus['no_sertifikat'],
										'path'=>$rs_kursus['pathsertifikat'],
										'ket'=>$rs_kursus['keterangan'],
										'update_user'=>$rs_kursus['Userinsert'],
										'tanggal_update'=>$rs_kursus['tglinsert']
	                                    );
			}
			}
			$smarty->assign("kursus_list",$kursus_list);
			
			
			// untuk mendapatkan data pekerjaan
			$sql_pekerjaan="SELECT id, id_peg, perusahaan, jabatan, deskripsi, alamat, 
			date_format(tgl_mulai, '%d/%m/%Y') as tgl_mulai2,date_format(tgl_akhir, '%d/%m/%Y') as tgl_akhir2, Userinsert, tglinsert FROM dat_mutasi_jabatan
			where id_peg = '$_SESSION[kode]' order by id asc";
			$result_pekerjaan = $db -> Execute($sql_pekerjaan);
			$no=0;
			$kosong = 'n/a';
			if (!$result_pekerjaan->RecordCount())
	        {
	             
	             $pekerjaan_list[] = array(
				 'no'=>$kosong,
	             'id'=>$kosong,
				 'id_peg'=>$kosong,
				 'perusahaan'=>$kosong,
				 'jabatan'=>$kosong,
				 'deskripsi'=>$kosong,
				 'alamat'=>$kosong,
				 'tgl_mulai'=>$kosong,
				 'tgl_akhir'=>$kosong,
				 'update_user'=>$kosong,
				 'tanggal_update'=>$kosong
				 );
	        }else{
			while($rs_pekerjaan = $result_pekerjaan->FetchRow()){
				 ++$no;
				 $pekerjaan_list[] = array(
										'no'=>$no,
										'id'=>$rs_pekerjaan['id'],
										'id_peg'=>$rs_pekerjaan['id_peg'],
	                                    'perusahaan'=>$rs_pekerjaan['perusahaan'],
										'jabatan'=>$rs_pekerjaan['jabatan'],
										'deskripsi'=>$rs_pekerjaan['deskripsi'],
										'alamat'=>$rs_pekerjaan['alamat'],
										'tgl_mulai'=>$rs_pekerjaan['tgl_mulai2'],
										'tgl_akhir'=>$rs_pekerjaan['tgl_akhir2'],
										'update_user'=>$rs_pekerjaan['Userinsert'],
										'tanggal_update'=>$rs_pekerjaan['tglinsert']
	                                    );
			}
			}
			$smarty->assign("pekerjaan_list",$pekerjaan_list);
			
			// untuk mendapatkan data keluarga
			$sql_keluarga="SELECT *, date_format(tgl_lahir, '%d/%m/%Y') as tgl_lahir2 FROM dat_keluarga where id_peg = '$_SESSION[kode]' order by id asc";
			$result_keluarga = $db -> Execute($sql_keluarga);
			$no=0;
			$kosong = 'n/a';
			if (!$result_keluarga->RecordCount())
	        {
	             
	             $keluarga_list[] = array(
				 'no'=>$kosong,
	             'id'=>$kosong,
				 'id_peg'=>$kosong,
				 'tgl_lahir'=>$kosong,
				 'nama'=>$kosong,
				 'status'=>$kosong,
				 'update_user'=>$kosong,
				 'tanggal_user'=>$kosong
				 );
	        }else{
			while($rs_keluarga = $result_keluarga->FetchRow()){
				 ++$no;
				 $keluarga_list[] = array(
										'no'=>$no,
										'id'=>$rs_keluarga['id'],
										'id_peg'=>$rs_keluarga['id_peg'],
	                                    'tgl_lahir'=>$rs_keluarga['tgl_lahir2'],
										'nama'=>$rs_keluarga['nama'],
										'status'=>$rs_keluarga['status'],
										'update_user'=>$rs_keluarga['Userinsert'],
										'tanggal_user'=>$rs_keluarga['tglinsert']
	                                    );
			}
			}
			$smarty->assign("keluarga_list",$keluarga_list);
			
			// untuk mendapatkan data kesehatan
			$sql_kesehatan="SELECT * FROM dat_kesehatan where id_peg = '$_SESSION[kode]' order by id asc";
			$result_kesehatan = $db -> Execute($sql_kesehatan);
			$no=0;
			$kosong = 'n/a';
			if (!$result_kesehatan->RecordCount())
	        {
	             
	             $kesehatan_list[] = array(
				 'no'=>$kosong,
	             'id'=>$kosong,
				 'id_peg'=>$kosong,
				 'penyakit'=>$kosong,
				 'tahun'=>$kosong,
				 'ket'=>$kosong,
				 'update_user'=>$kosong,
				 'tanggal_user'=>$kosong
				 );
	        }else{
			while($rs_kesehatan = $result_kesehatan->FetchRow()){
				 ++$no;
				 $kesehatan_list[] = array(
										'no'=>$no,
										'id'=>$rs_kesehatan['id'],
										'id_peg'=>$rs_kesehatan['id_peg'],
	                                    'penyakit'=>$rs_kesehatan['penyakit'],
										'tahun'=>$rs_kesehatan['tahun'],
										'ket'=>$rs_kesehatan['keterangan'],
										'update_user'=>$rs_kesehatan['Userinsert'],
										'tanggal_user'=>$rs_kesehatan['tglinsert']
	                                    );
			}
			}
			$smarty->assign("kesehatan_list",$kesehatan_list);
			
			// untuk mendapatkan data penghargaan
			$sql_penghargaan="SELECT *, date_format(tgl_penghargaan, '%d/%m/%Y') as tgl_penghargaan2 FROM dat_penghargaan where id_peg = '$_SESSION[kode]' order by id asc";
			$result_penghargaan = $db -> Execute($sql_penghargaan);
			$no=0;
			$kosong = 'n/a';
			if (!$result_penghargaan->RecordCount())
	        {
	             
	             $penghargaan_list[] = array(
				 'no'=>$kosong,
	             'id'=>$kosong,
				 'id_peg'=>$kosong,
				 'penghargaan'=>$kosong,
				 'tgl_penghargaan'=>$kosong,
				 'pemberi_penghargaan'=>$kosong,
				 'ket'=>$kosong,
				 'update_user'=>$kosong,
				 'tanggal_user'=>$kosong
				 );
	        }else{
			while($rs_penghargaan = $result_penghargaan->FetchRow()){
				 ++$no;
				 $penghargaan_list[] = array(
										'no'=>$no,
										'id'=>$rs_penghargaan['id'],
										'id_peg'=>$rs_penghargaan['id_peg'],
	                                    'penghargaan'=>$rs_penghargaan['penghargaan'],
										'tgl_penghargaan'=>$rs_penghargaan['tgl_penghargaan2'],
										'pemberi_penghargaan'=>$rs_penghargaan['pemberi_penghargaan'],
										'ket'=>$rs_penghargaan['keterangan'],
										'update_user'=>$rs_penghargaan['Userinsert'],
										'tanggal_user'=>$rs_penghargaan['tglinsert']
	                                    );
			}
			}
			$smarty->assign("penghargaan_list",$penghargaan_list);
			
			// untuk mendapatkan data hukuman
			$sql_hukuman="SELECT *, date_format(tgl_sanksi, '%d/%m/%Y') as tgl_sanksi2 FROM dat_sanksi where id_peg = '$_SESSION[kode]' order by id asc";
			$result_hukuman = $db -> Execute($sql_hukuman);
			$no=0;
			$kosong = 'n/a';
			if (!$result_hukuman->RecordCount())
	        {
	             
	             $hukuman_list[] = array(
				 'no'=>$kosong,
	             'id'=>$kosong,
				 'id_peg'=>$kosong,
				 'hukuman'=>$kosong,
				 'tgl_sanksi'=>$kosong,
				 'no_sanksi'=>$kosong,
				 'pemberi_hukuman'=>$kosong,
				 'ket'=>$kosong,
				 'update_user'=>$kosong,
				 'tanggal_user'=>$kosong
				 );
	        }else{
			while($rs_hukuman = $result_hukuman->FetchRow()){
				 ++$no;
				 $hukuman_list[] = array(
										'no'=>$no,
										'id'=>$rs_hukuman['id'],
										'id_peg'=>$rs_hukuman['id_peg'],
	                                    'hukuman'=>$rs_hukuman['hukuman'],
										'tgl_sanksi'=>$rs_hukuman['tgl_sanksi2'],
										'no_sanksi'=>$rs_hukuman['no_sanksi'],
										'pemberi_hukuman'=>$rs_hukuman['pemberi_hukuman'],
										'ket'=>$rs_hukuman['keterangan'],
										'update_user'=>$rs_hukuman['Userinsert'],
										'tanggal_user'=>$rs_hukuman['tglinsert']
	                                    );
			}
			}
			$smarty->assign("hukuman_list",$hukuman_list);
			

			// untuk mendapatkan data organisasi
			$sql_organisasi="SELECT * FROM dat_organisasi where id_peg = '$_SESSION[kode]' order by id asc";
			$result_organisasi = $db -> Execute($sql_organisasi);
			$no=0;
			$kosong = 'n/a';
			if (!$result_organisasi->RecordCount())
	        {
	             
	             $organisasi_list[] = array(
				 'no'=>$kosong,
	             'id'=>$kosong,
				 'id_peg'=>$kosong,
				 'organisasi'=>$kosong,
				 'jabatan'=>$kosong,
				 'tahun'=>$kosong,
				 'update_user'=>$kosong,
				 'tanggal_user'=>$kosong
				 );
	        }else{
			while($rs_organisasi = $result_organisasi->FetchRow()){
				 ++$no;
				 $organisasi_list[] = array(
										'no'=>$no,
										'id'=>$rs_organisasi['id'],
										'id_peg'=>$rs_organisasi['id_peg'],
	                                    'organisasi'=>$rs_organisasi['nm_organisasi'],
										'jabatan'=>$rs_organisasi['jabatan'],
										'tahun'=>$rs_organisasi['tahun'],
										'update_user'=>$rs_organisasi['Userinsert'],
										'tanggal_user'=>$rs_organisasi['tglinsert']
	                                    );
			}
			}
			$smarty->assign("organisasi_list",$organisasi_list);
			
			// untuk mendapatkan data mcu
			$sql_mcu="SELECT *, date_format(tgl_pemeriksaan, '%d/%m/%Y') as tgl_pemeriksaan2, date_format(tgl_dari, '%d/%m/%Y') as tgl_dari2, date_format(tgl_sampai, '%d/%m/%Y') as tgl_sampai2 FROM dat_mcu where id_peg = '$_SESSION[kode]' order by id asc";
			$result_mcu = $db -> Execute($sql_mcu);
			$no=0;
			$kosong = 'n/a';
			if (!$result_mcu->RecordCount())
	        {
	             
	             $mcu_list[] = array(
				 'no'=>$kosong,
	             'id'=>$kosong,
				 'id_peg'=>$kosong,
				 'tgl_pemeriksaan'=>$kosong,
				 'hasil'=>$kosong,
				 'tenaga'=>$kosong,
				 'catatan'=>$kosong,
				 'tgl_dari'=>$kosong,
				 'tgl_sampai'=>$kosong,
				 'ket'=>$kosong,
				 'update_user'=>$kosong,
				 'tanggal_user'=>$kosong
				 );
	        }else{
			while($rs_mcu = $result_mcu->FetchRow()){
				 ++$no;
				 $mcu_list[] = array(
										'no'=>$no,
										'id'=>$rs_mcu['id'],
										'id_peg'=>$rs_mcu['id_peg'],
	                                    'tgl_pemeriksaan'=>$rs_mcu['tgl_pemeriksaan2'],
										'hasil'=>$rs_mcu['hasil_pemeriksaan'],
										'tenaga'=>$rs_mcu['tenaga_medis'],
										'catatan'=>$rs_mcu['catatan'],
										'tgl_dari'=>$rs_mcu['tgl_dari2'],
										'tgl_sampai'=>$rs_mcu['tgl_sampai2'],
										'ket'=>$rs_mcu['keterangan'],
										'update_user'=>$rs_mcu['Userinsert'],
										'tanggal_user'=>$rs_mcu['tglinsert']
	                                    );
			}
			}
			$smarty->assign("mcu_list",$mcu_list);
			
	        			$smarty->display("employee_edit.tpl");
        }

	}


function UpdateProcess()
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
			//$smarty->assign("username",$_SESSION['username']);
;
		$kode = $_SESSION['kode'];
		$id = $_POST['id'];
		$nik = $_POST['nik'];
		$name = $_POST['name'];
		$jabatan = $_POST['jabatan'];
		$email = $_POST['email'];
		$emailal = $_POST['emailal'];
		$perusahaan = $_POST['perusahaan'];
		$bisnisunit = $_POST['bisnisunit'];
		$divisi = $_POST['divisi'];
		$status_p = $_POST['status_p'];
		$tgl_masuk = $_POST['tgl_masuk'];
		$tgl_tidakaktif = $_POST['tgl_tidakaktif'];
		$address = $_POST['address'];		
		$alamat_sementara = $_POST['alamat_sementara'];
		$tlahir = $_POST['tlahir']; 
		$tglahir2 = $_POST['tglahir2']; 
		$sex = $_POST['sex']; 
		$agama = $_POST['agama'];
		$telpon_kantor = $_POST['telpon_kantor']; 
		$telpon_rumah = $_POST['telpon_rumah'];
		$hp = $_POST['hp'];
		$stskawin = $_POST['stskawin']; 
		$pend_darat = $_POST['pend_darat'];
		$npwp = $_POST['npwp'];
		$bank = $_POST['bank'];
		$no_rek = $_POST['no_rek'];
		$gaji = clean_string_num($_POST['gaji']);
		$tgl_kontrak_dari = $_POST['tgl_kontrak_dari'];
		$tgl_kontrak_sampai = $_POST['tgl_kontrak_sampai'];
		$by_asuransi =$_POST['by_asuransi'];
		$no_askes = $_POST['no_askes'];
		$jamsostek = $_POST['jamsostek'];
		$keterangan = $_POST['keterangan'];
		$sql_x="SELECT stskawin FROM tab_stskawin where id='$stskawin'";
		$result_x = $db -> Execute($sql_x);
		$rsx = $result_x->FetchRow();
		$stskawinnya = $rsx['stskawin'];
		
	        $smarty->assign("id", $id);
			$smarty->assign("nik", $nik);
			$smarty->assign("name", $name);
			$smarty->assign("tlahir", $tlahir);
			$smarty->assign("tglahir2", $tglahir2);
			$smarty->assign("sex", $sex);
			$smarty->assign("email", $email);
			$smarty->assign("emailal", $emailal);
			$smarty->assign("agama", $agama);
			$smarty->assign("address", $address);

			$smarty->assign("stskawin", $stskawin);
			$smarty->assign("telpon_kantor", $telpon_kantor);
			$smarty->assign("telpon_rumah", $telpon_rumah);
			$smarty->assign("hp", $hp);
			$smarty->assign("tgl_masuk", $tgl_masuk);
			$smarty->assign("pend_darat", $pend_darat);
			$smarty->assign("jamsostek", $jamsostek);
			$smarty->assign("npwp", $npwp);
			$smarty->assign("status_p", $status_p);
			$smarty->assign("keterangan", $keterangan);
			$smarty->assign("jabatan", $jabatan);
			//$this->assign("wilayah", $wilayah);
			$smarty->assign("perusahaan", $perusahaan);
			$smarty->assign("divisi", $divisi);
			//$this->assign("subdivisi", $subdivisi);
			$smarty->assign("alamat_sementara", $alamat_sementara);
			$smarty->assign("tgl_tidakaktif", $tgl_tidakaktif);
			$smarty->assign("bank", $bank);
			$smarty->assign("no_rek", $no_rek);
			$smarty->assign("gaji", $gaji);
			$smarty->assign("no_askes", $no_askes);
			$smarty->assign("by_asuransi", $by_asuransi);
			
			// Option
	        			/*
				if(empty($statusNik) && empty($statusName) && empty($statusJabatan) && empty($statusDivisi) && empty($statusBorn)){
				//melakukan pengecekan existing data
				    $sql_employee="SELECT * FROM tab_employee where NIK='$nik'";
					$result_employee = $db -> Execute($sql_employee);
					$rs_employee = $result_employee->RecordCount();
					if($rs_employee > 0){
					$statusNik = "NIK sudah terdaftar";
					$this->assign("statusNik", $statusNik);
					$this->display("employee_edit.html");
					}else{
		*/
					$pathfotoname =$_FILES['pathfoto']['name']; 
					$pathfototype =$_FILES['pathfoto']['type']; 
					$pathfotosize =$_FILES['pathfoto']['size']; 
					
					if(!empty($pathfotoname)){
					$pathfotolink ='gambar'.'/'.$_POST['nik'].'_'.$pathfotoname;
					}
					//echo $pathfotosize;
					//melakukan proses update
					if($pathfotosize > 100000){
					echo "<script language=javascript>
	                    alert('Gagal memperbaiki data, Photo Upload > 100 KB');
	                    window.location='employee.php?mod=edit&id=$kode';
	                 </script>";
					}else{
					//window.location='employee.php?mod=edit&id=$kode';
					//**************************melakukan aksi upload gambar
					move_uploaded_file($_FILES['pathfoto']['tmp_name'],$pathfotolink);
					
					$sql_employee="SELECT * FROM tab_employee where NIK='$nik'";
					$result_employee = $db -> Execute($sql_employee);
					$rs_employee = $result_employee->RecordCount();
					
		if ($pathfotosize > 0 or $rs_employee < 1){
			$sql = "UPDATE tab_employee SET    
						NIK = '$nik',
						nama = '$name',
						email = '$email',
						email_alternatif = '$emailal',
						id_jbt = '$jabatan',
						id_divisi = '$divisi',
						idbisnisunit = '$bisnisunit',
						id_stskawin = '$stskawin',
						stskawin='$stskawinnya',
						id_agama = '$agama',
						status_p = '$status_p',
						tgl_masuk = STR_TO_DATE('$tgl_masuk', '%d/%m/%Y'),
						address = '$address',
						alamat_sementara = '$alamat_sementara',
						tlahir = '$tlahir',
                        tglahir2 = STR_TO_DATE('$tglahir2', '%d/%m/%Y'),
						tgl_tidakaktif = STR_TO_DATE('$tgl_tidakaktif', '%d/%m/%Y'),
						tgl_kontrak_dari = STR_TO_DATE('$tgl_kontrak_dari', '%d/%m/%Y'),
						tgl_kontrak_sampai = STR_TO_DATE('$tgl_kontrak_sampai', '%d/%m/%Y'),
                        sex = '$sex',
						telpon_kantor = '$telpon_kantor',
						telpon_rumah = '$telpon_rumah',
						hp = '$hp',
						npwp = '$npwp',
						bank = '$bank',
						no_rek = '$no_rek',
						gaji_lumpsum = '$gaji',
						asuransi = '$by_asuransi',
						no_asuransi_kesehatan = '$no_askes',
						jamsostek = '$jamsostek',
						idperusahaan = '$perusahaan',
						keterangan = '$keterangan',
						pend_darat = '$pend_darat',
						pathfoto = '$pathfotolink',
						Useredit = '$_SESSION[username]',
						tgledit = now()
            					WHERE id = '$id'";
						}else{
						$sql = "UPDATE tab_employee SET    
						nama = '$name',
						email = '$email',
						email_alternatif = '$emailal',
						id_jbt = '$jabatan',
						id_divisi = '$divisi',
						idbisnisunit = '$bisnisunit',
						id_stskawin = '$stskawin',
						stskawin='$stskawinnya',
						id_agama = '$agama',
						status_p = '$status_p',
						tgl_masuk = STR_TO_DATE('$tgl_masuk', '%d/%m/%Y'),
						address = '$address',
						alamat_sementara = '$alamat_sementara',
						tlahir = '$tlahir',
                        tglahir2 = STR_TO_DATE('$tglahir2', '%d/%m/%Y'),
						tgl_tidakaktif = STR_TO_DATE('$tgl_tidakaktif', '%d/%m/%Y'),
						tgl_kontrak_dari = STR_TO_DATE('$tgl_kontrak_dari', '%d/%m/%Y'),
						tgl_kontrak_sampai = STR_TO_DATE('$tgl_kontrak_sampai', '%d/%m/%Y'),
                        sex = '$sex',
						telpon_kantor = '$telpon_kantor',
						telpon_rumah = '$telpon_rumah',
						hp = '$hp',
						npwp = '$npwp',
						bank = '$bank',
						no_rek = '$no_rek',
						gaji_lumpsum = '$gaji',
						asuransi = '$by_asuransi',
						no_asuransi_kesehatan = '$no_askes',
						jamsostek = '$jamsostek',
						idperusahaan = '$perusahaan',
						keterangan = '$keterangan',
						pend_darat = '$pend_darat',
						Useredit = '$_SESSION[username]',
						tgledit = now()
            			WHERE id = '$id'";
						}
						
	        $result = $db->Execute($sql);
	        
	      //  echo $sql;exit;
	       // exit();

	        if($result)
	        {
		       echo "<script language=javascript>
	                    alert('Terima Kasih, berhasil memperbaiki data');
	                    window.location='employee.php';
	                 </script>";
	        }
	        else
		{
			echo "<script language=javascript>
	                    alert('Gagal memperbaiki data');
	                    window.location='employee.php';
	                 </script>";
		}
        }
		
		/*
	}else{
				$this->display("employee_edit.html");
			}
			*/
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
			$id = $_GET['id'];

				$sql = "insert into tab_employee_cad select * from tab_employee where id='$id'";
				
				//echo $sql;echo exit;
		            	$result = $db->Execute($sql);
				
				$sql = "delete from tab_employee where id='$id'";
	
            			$result = $db->Execute($sql);


	        if($result)
			{
				  echo "<script language=javascript>
							alert('Menghapus Berhasil');
		                    window.location='employee.php';
		                 </script>";
				}else{
				  echo "<script language=javascript>
		                    alert('Menghapus Gagal');
		                    window.location='employee.php';
		                 </script>";
					}
					
			}

			function saveFoto()
		{

			global $db, $empId;
            		global $smap_name,$smap_size,$smap_type,$smap,$smap_tmp_name;
			global $smaprmh_name,$smaprmh_size,$smaprmh_type,$smaprmh,$smaprmh_tmp_name;
            

            $smap_name = str_replace(" ","",trim($smap_name));
			$fileHandle = fopen($smap, "rb");
			$fileContent = fread($fileHandle, filesize($smap));
			$fileContent = addslashes($fileContent);
			$fileUpload_type = $_FILES[smap]["type"];
			// foto for rumah

            		$smaprmh_name = str_replace(" ","",trim($smaprmh_name));
			echo $smaprmh_name;

			if ($smaprmh_name == "")
			{
				$fileContentrmh="";
				$fileUpload_typermh="";
			}
			else
			{
				$fileHandlermh = fopen($smaprmh, "rb");
				$fileContentrmh = fread($fileHandlermh, filesize($smaprmh));
				$fileContentrmh = addslashes($fileContentrmh);
				$fileUpload_typermh = $_FILES[smaprmh]["type"];
			}

			$sQuery = "UPDATE tab_employee
						SET fotodiri = '$fileContent', fotodiriType='$fileUpload_type',
						    fotormh = '$fileContentrmh', fotormhType='$fileUpload_typermh'
						WHERE id = '$empId'";
			//echo $sQuery; 
			
			$result = $db->Execute($sQuery);	
			//
            //$result = $db->Execute($sql);

	        if($result)
	        {
	            echo "<script language=javascript>
	                    alert('Terima Kasih, berhasil memperbaiki data');
	                    window.location='employee.php?';
	                 </script>";
	        }
	        else
	            echo "<script language=javascript>
	                    alert('Gagal memperbaiki data');
	                    window.location='employee.php?';
	                 </script>";

			
        }

        //************************************************************************************************************************************************
function PendidikanAddForm()
        {
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
		$smarty->assign("samping","21");
		$kode = $_SESSION['kode'];

		$tingkat_opt = $this->tingkat_opt();
		$smarty->assign("tingkat_opt",$tingkat_opt);
			
			$smarty->display("frmpendidikan_add.tpl");
        }

        function PendidikanAddProses()
        {
  	    	global $title,$db;
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);
			//$smarty->assign("username",$_SESSION['username']);
							
			session_start();
			$kode = $_SESSION['kode'];
			$tingkat = $_POST['tingkat'];
			$tempat = $_POST['tempat'];
			$jurusan = $_POST['jurusan'];
			$tahun_awal = $_POST['tahun_awal'];
			$tahun_akhir = $_POST['tahun_akhir'];
			$sekolah = $_POST['sekolah'];
			$gelar = $_POST['gelar'];
			$ipk = $_POST['ipk'];
			$ket = $_POST['ket'];


			if(empty($statusSekolah) && empty($statusTempat) && empty($statusTingkat) && empty($statusNegara)){
				//melakukan pengecekan existing data
				    $sql_kursus="SELECT * FROM dat_pendidikan where sekolah_univ='$sekolah' and tempat='$tempat' and id_tingkat='$tingkat' and id_peg='$kode'";
					$result_kursus = $db -> Execute($sql_kursus);
					$rs_kursus = $result_kursus->RecordCount();
					if($rs_kursus > 0){
					echo "<script language=javascript>
							alert('Data Sudah Pernah Di entry');
						 </script>";
						$smarty->display("frmkursus_add.tpl");
					}else{
								
					$sql_kursus = "INSERT INTO dat_pendidikan 
						(id,id_peg,tahun_awal,tahun_akhir,sekolah_univ,tempat,id_tingkat,ipk,jurusan,keterangan,Userinsert,tglinsert) 
						VALUES (null,'$kode','$tahun_awal','$tahun_akhir','$sekolah','$tempat','$tingkat','$ipk','$jurusan','$ket','$_SESSION[username]',now())";$resultKursus= $db->Execute($sql_kursus);
						if($resultKursus){
					    //echo $sql_kursus;
						//Query data 
							$sql_employee="SELECT * FROM tab_employee where id='$kode'";
							$result_employee = $db -> Execute($sql_employee);
							$rs_employee = $result_employee->RecordCount();
							//echo $rs_employee;
						//melakukan proses pengecekan data 
							if($rs_employee > 0){
				                echo "<script language=javascript>
										alert('Proses Entry Data Berhasil');
										window.location='employee.php?action=edit&id=$kode';
									 </script>";
								
							}else{
								echo "<script language=javascript>
										alert('Proses Entry Data Berhasil');
										window.location='employee.php?action=showAddMenu';
									</script>";
							}
						}else{
							echo "<script language=javascript>
								alert('Proses Entry Data Gagal');
							 </script>";
							 $smarty->display("frmpendidikan_add.tpl");
						}
					}
				
			}else{
				$smarty->display("frmpendidikan_add.tpl");
			}
        }



 function PendidikanEditForm()
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
		$smarty->assign("samping","21");
		$id = $_GET['id'];

			$sql_pendidikan="SELECT * FROM dat_pendidikan where id='$id'";
			$result_pendidikan = $db -> Execute($sql_pendidikan);
			$rs_pendidikan = $result_pendidikan->FetchRow();
			//$sertifikat = $rs_pendidikan['sertifikat'];
			$tingkat = $rs_pendidikan['id_tingkat'];
			$idpeg = $rs_pendidikan['id_peg'];
			//Proses pengambilan data pegawai
			$sqlp ="SELECT * FROM tab_employee where NIK='$idpeg'";
			$resultp = $db -> Execute($sqlp);
			$rsp = $resultp->FetchRow();
			$kode = $rsp['id'];

			//echo $sertifikat;
			$smarty->assign("kode",$kode);//
			$smarty->assign("id_peg",$rs_pendidikan['id_peg']);//
			$smarty->assign("id_tingkat",$rs_pendidikan['id_tingkat']);//
			$smarty->assign("sekolah",$rs_pendidikan['sekolah_univ']);//
			$smarty->assign("tahun_awal",$rs_pendidikan['tahun_awal']);//
	        $smarty->assign("tahun_akhir",$rs_pendidikan['tahun_akhir']);//
			$smarty->assign("jurusan",$rs_pendidikan['jurusan']);//
			$smarty->assign("ipk",$rs_pendidikan['ipk']);//
			$smarty->assign("gelar",$rs_pendidikan['gelar']);//
			$smarty->assign("tempat",$rs_pendidikan['tempat']);//
			$smarty->assign("ket",$rs_pendidikan['keterangan']);//
			$smarty->assign("id",$id);//
			
			$tingkat_opt = $this->tingkat_opt($rs_pendidikan['id_tingkat']);
			$smarty->assign("tingkat_opt",$tingkat_opt);
			
			$smarty->display("frmpendidikan_edit.tpl");
        }



function PendidikanEditProses()
        {
        	global $title,$db;
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);
			$id = $_POST['id'];

        	session_start();
			$kode = $_SESSION['kode'];
			
			$tingkat = $_POST['tingkat'];
			$tempat = $_POST['tempat'];
			$jurusan = $_POST['jurusan'];
			$tahun_awal = $_POST['tahun_awal'];
			$tahun_akhir = $_POST['tahun_akhir'];
			$sekolah = $_POST['sekolah'];
			$ipk = $_POST['ipk'];
			$gelar = $_POST['gelar'];
			$ket = $_POST['ket'];

			$smarty->assign("id", $id);
			$smarty->assign("tahun_awal", $tahun_awal);
			$smarty->assign("tahun_akhir", $tahun_akhir);
			$smarty->assign("ipk", $ipk);
			$smarty->assign("tempat", $tempat);
			$smarty->assign("tingkat", $tingkat);
			$smarty->assign("jurusan", $jurusan);
			$smarty->assign("gelar", $gelar);
			$smarty->assign("ket", $ket);
			$smarty->assign("sekolah", $sekolah);

	if(empty($statusSekolah) && empty($statusTempat) && empty($statusTingkat) && empty($statusNegara)){
				//melakukan proses update
						$sql="UPDATE dat_pendidikan set 
						tahun_awal='$tahun_awal', 
						tahun_akhir='$tahun_akhir', 
						sekolah_univ='$sekolah',
						jurusan='$jurusan',
						ipk='$ipk',
						gelar='$gelar',
						tempat='$tempat',
						id_tingkat='$tingkat',
						keterangan='$ket',
						Userinsert='$_SESSION[username]',
						tglinsert=now()
						where id = '$id'";
						//echo $sql;
			$result = $db->Execute($sql);

					if($result){
						//cek data 
						//Query data Pendidikan
							$sql_pendidikan="SELECT * FROM dat_pendidikan where id_peg='$kode'";
							$result_pendidikan = $db -> Execute($sql_pendidikan);
							$rs_pendidikan = $result_pendidikan->RecordCount();
				
				        //melakukan proses pengecekan data pendidikan
							if($rs_pendidikan > 0){
									echo "<script language=javascript>
									alert('Terima Kasih, berhasil memperbaiki data');
									window.location='employee.php?action=edit&id=$kode';
								 </script>";
							}else{
								echo "<script language=javascript>
										alert('Proses Entry Data Berhasil');
										window.location='employee.php?action=showAddMenu';
									 </script>";
							}
						
					}else{
						echo "<script language=javascript>
								alert('Maaf, gagal memperbaiki data');
					    </script>";
						$smarty->display("frmpendidikan_edit.tpl");
					}
			}else{
				$smarty->display("frmpendidikan_edit.tpl");
			}
        }


 function PendidikanDeleteProses(){

  	    global $title,$db;
		$smarty = new Smarty;
 		$smarty->force_compile = true;
		//$smarty->debugging = true;
		$smarty->caching = true;
		$smarty->cache_lifetime = 120;
		$smarty->assign("title",$title);
		$smarty->assign("samping","21");
		$id = $_GET['id'];

		session_start();
			$kode = $_SESSION['kode'];
			
			$sqlk="SELECT pathijazah FROM dat_pendidikan where id='$id'";
			$resultk = $db -> Execute($sqlk);
			$rsk = $resultk->FetchRow();
			if(!empty($rsk[0])){
				unlink("$rsk[0]");
			}
			$sql="DELETE FROM dat_pendidikan where id='$id'";
			//echo $sql;
			$result = $db->Execute($sql);

	        if($result)
	        {
	         echo "<script language=javascript>
					alert('Terima Kasih, berhasil menghapus data');
	                window.location='employee.php?action=edit&id=$kode';
	               </script>";
			}else{
			echo "<script language=javascript>
					alert('gagal menghapus data');
					window.location='employee.php?action=edit&id=$kode';
				  </script>";
			}
		}



//************************************************************************************************************************************************
function KursusAddForm()
        {
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
		$smarty->assign("samping","21");
			
			$kode = $_SESSION['kode'];
			// view data pegawai
			$sql="SELECT * FROM tab_employee where id = '$kode'";
			$result = $db -> Execute($sql);
			$rs = $result->FetchRow();
			$nik = $rs['NIK'];
			$nama = $rs['nama'];		
			$smarty->assign("kode", $kode);
			$smarty->assign("nik", $nik);
			$smarty->assign("nama", $nama);
			
			$smarty->display("frmkursus_add.tpl");
        }

        function KursusAddProses()
        {
       		global $title,$db;
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);
			//$smarty->assign("username",$_SESSION['username']);
							
			session_start();
			$kode = $_SESSION['kode'];
			$kursus = $_POST['kursus'];
			$instansi = $_POST['instansi'];
			$kota = $_POST['kota'];
			$tahun = $_POST['tahun'];
			$sertifikat = $_POST['sertifikat'];
			$no_sertifikat = $_POST['no_sertifikat'];
			$ket = $_POST['ket'];
			
					
		    //melakukan proses pengecekan status
			if(empty($statusKursus) && empty($statusInstansi) && empty($statusKota) && empty($statusTahun)){
				//melakukan pengecekan existing data
				    $sql_kursus="SELECT * FROM dat_kursus where kursus ='$kursus' and instansi = '$instansi' and kota='$kota' and tahun='$tahun' and id_peg='$kode'";
					$result_kursus = $db -> Execute($sql_kursus);
					$rs_kursus = $result_kursus->RecordCount();
					if($rs_kursus > 0){
					echo "<script language=javascript>
							alert('Data Sudah Pernah Di entry');
						 </script>";
						$smarty->display("frmkursus_add.tpl");
					}else{
								
					$sql_kursus = "INSERT INTO dat_kursus 
					(id,id_peg,kursus,instansi,kota,tahun,sertifikat,no_sertifikat,keterangan,Userinsert,tglinsert) 
					VALUES (null,'$kode','$kursus','$instansi','$kota','$tahun','$sertifikat','$no_sertifikat','$ket','$_SESSION[username]',now())";
					$resultKursus= $db->Execute($sql_kursus);
						if($resultKursus){
					    //echo $sql_kursus;
						//Query data 
							$sql_employee="SELECT * FROM tab_employee where id='$kode'";
							$result_employee = $db -> Execute($sql_employee);
							$rs_employee = $result_employee->RecordCount();
							//echo $rs_employee;
						//melakukan proses pengecekan data 
							if($rs_employee > 0){
				                echo "<script language=javascript>
										alert('Proses Entry Data Berhasil');
										window.location='employee.php?action=edit&id=$kode';
									 </script>";
								
							}else{
								echo "<script language=javascript>
										alert('Proses Entry Data Berhasil');
										window.location='employee.php?action=showAddMenu';
									</script>";
							}
						}else{
							echo "<script language=javascript>
								alert('Proses Entry Data Gagal');
							 </script>";
							 $smarty->display("frmkursus_add.tpl");
						}
					}
				
			}else{
				$smarty->display("frmkursus_add.tpl");
			}
        }

 function KursusEditForm()
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
		$smarty->assign("samping","21");
		$id = $_GET['id'];

			$sql_kursus="SELECT * FROM dat_kursus where id='$id'";
			$result_kursus = $db -> Execute($sql_kursus);
			$rs_kursus = $result_kursus->FetchRow();
			$sertifikat = $rs_kursus['sertifikat'];
			
			//echo $sertifikat;
			
			$smarty->assign("kursus",$rs_kursus['kursus']);//
			$smarty->assign("instansi",$rs_kursus['instansi']);//
			$smarty->assign("kota",$rs_kursus['kota']);//
	        $smarty->assign("tahun",$rs_kursus['tahun']);//
			$smarty->assign("sertifikat",$rs_kursus['sertifikat']);//
			$smarty->assign("no_sertifikat",$rs_kursus['no_sertifikat']);//
			$smarty->assign("ket",$rs_kursus['keterangan']);//
			$smarty->assign("id",$id);//
			
			
			$smarty->display("frmkursus_edit.tpl");
        }



function KursusEditProses()
        {
        	global $title,$db;
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);
			$id = $_POST['id'];
			//echo $id;
			session_start();
			$kode = $_SESSION['kode'];
			
			$kursus = $_POST['kursus'];
			$instansi = $_POST['instansi'];
			$kota = $_POST['kota'];
			$tahun = $_POST['tahun'];
			$sertifikat = $_POST['sertifikat'];
			$no_sertifikat = $_POST['no_sertifikat'];
			$ket = $_POST['ket'];
			
			$smarty->assign("kursus", $kursus);
			$smarty->assign("instansi", $instansi);
			$smarty->assign("kota", $kota);
			$smarty->assign("tahun", $tahun);
			$smarty->assign("sertifikat", $sertifikat);
			$smarty->assign("no_sertifikat", $no_sertifikat);
			$smarty->assign("ket", $ket);
			$smarty->assign("id", $id);

		   if(empty($statusKursus) && empty($statusInstansi) && empty($statusKota) && empty($statusTahun)){
				
				//melakukan proses update
						$sql="UPDATE dat_kursus set 
						kursus='$kursus', 
						instansi='$instansi', 
						kota='$kota',
						tahun='$tahun',
						keterangan='$ket',
						sertifikat='$sertifikat',
						no_sertifikat='$no_sertifikat',
						Userinsert='$_SESSION[username]',
						tglinsert=now()
						where id = '$id'";
						$result = $db->Execute($sql);

					if($result){
						//cek data 
						//Query data Pendidikan
							$sql_kursus="SELECT * FROM dat_kursus where id_peg='$kode'";
							$result_kursus = $db -> Execute($sql_kursus);
							$rs_kursus = $result_kursus->RecordCount();
				
				        //melakukan proses pengecekan data pendidikan
							if($rs_kursus > 0){
									echo "<script language=javascript>
									alert('Terima Kasih, berhasil memperbaiki data');
									window.location='employee.php?action=edit&id=$kode';
								 </script>";
							}else{
								echo "<script language=javascript>
										alert('Proses Entry Data Berhasil');
										window.location='employee.php?action=showAddMenu';
									 </script>";
							}
						
					}else{
						echo "<script language=javascript>
								alert('Maaf, gagal memperbaiki data');
					    </script>";
						$smarty->display("frmkursus_edit.tpl");
					}
			}else{
				$smarty->display("frmkursus_edit.tpl");
			}
        }

 function KursusDeleteProses(){

  	    global $title,$db;
		$smarty = new Smarty;
 		$smarty->force_compile = true;
		//$smarty->debugging = true;
		$smarty->caching = true;
		$smarty->cache_lifetime = 120;
		$smarty->assign("title",$title);
		$smarty->assign("samping","21");
		$id = $_GET['id'];
			//echo $id;
			session_start();
			$kode = $_SESSION['kode'];
			
			//melakukan delete dokumen
			$sqlk="SELECT pathsertifikat FROM dat_kursus where id_peg='$kode' and id='$id' ";
			$resultk = $db -> Execute($sqlk);
			$rsk = $resultk->FetchRow();
			if(!empty($rsk[0])){
				unlink("$rsk[0]");
			}
							
			$sql="DELETE FROM dat_kursus where id='$id'";
			//echo $sql;
			$result = $db->Execute($sql);

	        if($result)
	        {
	            //cek data 
						//Query data Kursus
							$sql_kursus="SELECT * FROM dat_kursus where id_peg='$kode'";
							$result_kursus = $db -> Execute($sql_kursus);
							$rs_kursus = $result_kursus->RecordCount();
				
				        //melakukan proses pengecekan data kursus
							if($rs_kursus > 0){
									echo "<script language=javascript>
										alert('Terima Kasih, berhasil menghapus data');
										window.location='employee.php?action=edit&id=$kode';
										</script>";
							}else{
								echo "<script language=javascript>
										alert('Terima Kasih, berhasil menghapus data');
										window.location='employee.php?action=edit&id=$kode';
									 </script>";
							}
	        }
	        else
	            echo "<script language=javascript>
	                    alert('Gagal menghapus data');
	                   window.location='employee.php?action=edit&id=$kode';
	                 </script>";
		}
//**************************************************************************************************** End Data MCU
function PekerjaanAddForm()
        {
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
		$smarty->assign("samping","21");
		$kode = $_SESSION['kode'];
			
			$smarty->display("frmmutasi_jabatan_add.tpl");
        }

function PekerjaanAddProses()
        {
       		global $title,$db;
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);
			//$smarty->assign("username",$_SESSION['username']);
							
			session_start();
			$kode = $_SESSION['kode'];
			$perusahaan = $_POST['perusahaan'];
			$jabatan = $_POST['jabatan'];
			$deskripsi = $_POST['deskripsi'];
			$alamat = $_POST['alamat'];
			$tgl_mulai = $_POST['tgl_mulai'];
			$tgl_akhir = $_POST['tgl_akhir'];

			if(empty($statusPerusahaan) && empty($statusJabatan) && empty($statusDes)){
				//melakukan pengecekan existing data
				    $sql_pekerjaan="SELECT * FROM dat_mutasi_jabatan where perusahaan ='$perusahaan' and jabatan = '$jabatan' and deskripsi='$deskripsi' and id_peg='$kode'";
					$result_pekerjaan = $db -> Execute($sql_pekerjaan);
					$rs_pekerjaan = $result_pekerjaan->RecordCount();
					if($rs_pekerjaan > 0){
					echo "<script language=javascript>
							alert('Data Sudah Pernah Di entry');
						 </script>";
						$smarty->display("frmmutasi_jabatan_add.tpl");
					}else{
						$sql_pekerjaan = "INSERT INTO dat_mutasi_jabatan 
						(id,id_peg,perusahaan,jabatan,deskripsi,alamat,tgl_mulai,tgl_akhir,Userinsert,tglinsert) 
						VALUES (null,'$kode','$perusahaan','$jabatan','$deskripsi','$alamat',STR_TO_DATE('$tgl_mulai','%d/%m/%Y'),STR_TO_DATE('$tgl_akhir','%d/%m/%Y'),'$_SESSION[username]',now())";
					$resultPekerjaan= $db->Execute($sql_pekerjaan);
						if($resultPekerjaan){
					    //cek data 
						//Query data 
							$sql_employee="SELECT * FROM tab_employee where id='$kode'";
							$result_employee = $db -> Execute($sql_employee);
							$rs_employee = $result_employee->RecordCount();
							//echo $rs_employee;
						//melakukan proses pengecekan data 
							if($rs_employee > 0){
				                echo "<script language=javascript>
										alert('Proses Entry Data Berhasil');
										window.location='employee.php?action=edit&id=$kode';
									 </script>";
								
							}else{
								echo "<script language=javascript>
										alert('Proses Entry Data Berhasil');
										window.location='employee.php?action=showAddMenu';
									</script>";
							}
						}else{
							echo "<script language=javascript>
								alert('Proses Entry Data Gagal');
							 </script>";
							 $this->display("frmmutasi_jabatan_add.tpl");
						}
					}
				
			}else{
				$this->display("frmmutasi_jabatan_add.tpl");
			}
        }

 function PekerjaanEditForm()
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
		$smarty->assign("samping","21");
		$id = $_GET['id'];

		$sql_pekerjaan="SELECT id, perusahaan, jabatan, deskripsi, alamat, date_format(tgl_mulai, '%d/%m/%Y') as tgl_mulai2, 
			date_format(tgl_akhir, '%d/%m/%Y') as tgl_akhir2, Userinsert, tglinsert FROM dat_mutasi_jabatan 
			where id='$id'";
			$result_pekerjaan = $db -> Execute($sql_pekerjaan);
			$rs_pekerjaan = $result_pekerjaan->FetchRow();
			
			//echo $pelatihan;
			
			if ($rs_pekerjaan['tgl_mulai2'] == '00/00/0000')
			{$tgl_mulai = '';}	
			else
			{$tgl_mulai = $rs_pekerjaan['tgl_mulai2'];}

			$smarty->assign("tgl_mulai",$tgl_mulai);
			
			if ($rs_pekerjaan['tgl_akhir2'] == '00/00/0000')
			{$tgl_akhir = '';}	
			else
			{$tgl_akhir = $rs_pekerjaan['tgl_akhir2'];}

			$smarty->assign("tgl_akhir",$tgl_akhir);
			
			$smarty->assign("perusahaan",$rs_pekerjaan['perusahaan']);//
			$smarty->assign("jabatan",$rs_pekerjaan['jabatan']);//
			$smarty->assign("deskripsi",$rs_pekerjaan['deskripsi']);//
	        $smarty->assign("alamat",$rs_pekerjaan['alamat']);//
			$smarty->assign("id",$id);//
			
			
			$smarty->display("frmmutasi_jabatan_edit.tpl");
        }



function PekerjaanEditProses()
        {
        	global $title,$db;
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);
			$id = $_POST['id'];

        	session_start();
			$kode = $_SESSION['kode'];
			
			$perusahaan = $_POST['perusahaan'];
			$jabatan = $_POST['jabatan'];
			$deskripsi = $_POST['deskripsi'];
			$alamat = $_POST['alamat'];
			$tgl_mulai = $_POST['tgl_mulai'];
			$tgl_akhir = $_POST['tgl_akhir'];

			$smarty->assign("id", $id);
			$smarty->assign("perusahaan", $perusahaan);
			$smarty->assign("jabatan", $jabatan);
			$smarty->assign("deskripsi", $deskripsi);
			$smarty->assign("alamat", $alamat);

			if(empty($statusPerusahaan) && empty($statusJabatan) && empty($statusDes)){
				//melakukan proses update
						$sql="UPDATE dat_mutasi_jabatan set 
						perusahaan='$perusahaan', 
						jabatan='$jabatan',
						deskripsi='$deskripsi',
						alamat='$alamat',  						
						tgl_mulai=STR_TO_DATE('$tgl_mulai', '%d/%m/%Y'),
						tgl_akhir=STR_TO_DATE('$tgl_akhir', '%d/%m/%Y'),
						Userinsert='$_SESSION[username]',
						tglinsert=now()
						where id = '$id'";
						//echo $sql;
			$result = $db->Execute($sql);

					if($result){
						//cek data 
						//Query data 
							$sql_pekerjaan="SELECT * FROM dat_mutasi_jabatan where id_peg='$kode'";
							$result_pekerjaan = $db -> Execute($sql_pekerjaan);
							$rs_pekerjaan = $result_pekerjaan->RecordCount();
				
				        //melakukan proses pengecekan data 
							if($rs_pekerjaan > 0){
									echo "<script language=javascript>
									alert('Terima Kasih, berhasil memperbaiki data');
									window.location='employee.php?action=edit&id=$kode';
								 </script>";
							}else{
								echo "<script language=javascript>
										alert('Proses Entry Data Berhasil');
										window.location='employee.php?action=showAddMenu';
									 </script>";
							}
						
					}else{
						echo "<script language=javascript>
								alert('Maaf, gagal memperbaiki data');
					    </script>";
						$smarty->display("frmmutasi_jabatan_edit.tpl");
					}
			}else{
				$smarty->display("frmmutasi_jabatan_edit.tpl");
			}
        }


 function PekerjaanDeleteProses(){

  	    global $title,$db;
		$smarty = new Smarty;
 		$smarty->force_compile = true;
		//$smarty->debugging = true;
		$smarty->caching = true;
		$smarty->cache_lifetime = 120;
		$smarty->assign("title",$title);
		$smarty->assign("samping","21");
		$id = $_GET['id'];

		session_start();
			$kode = $_SESSION['kode'];
			
			$sql="DELETE FROM dat_mutasi_jabatan where id='$id'";
			//echo $sql;
			$result = $db->Execute($sql);

	        if($result)
	        {
	            //cek data 
						//Query data 
							$sql_pekerjaan="SELECT * FROM dat_mutasi_jabatan where id_peg='$kode'";
							$result_pekerjaan = $db -> Execute($sql_pekerjaan);
							$rs_pekerjaan = $result_pekerjaan->RecordCount();
				
				        //melakukan proses pengecekan data 
							if($rs_pekerjaan > 0){
									echo "<script language=javascript>
	                    alert('Terima Kasih, berhasil menghapus data');
	                   window.location='employee.php?action=edit&id=$kode';
	                 </script>";
							}else{
								echo "<script language=javascript>
										alert('Terima Kasih, berhasil menghapus data');
										window.location='employee.php?action=edit&id=$kode';
									 </script>";
							}
				
				
	        }
	        else
	            echo "<script language=javascript>
	                    alert('Gagal menghapus data');
	                   window.location='employee.php?action=edit&id=$kode';
	                 </script>";
		}
//**************************************************************************************************** End Data MCU
	function KeluargaAddForm()
        {
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
		$smarty->assign("samping","21");
		$kode = $_SESSION['kode'];

			
			$smarty->display("frmkeluarga_add.tpl");
        }

        function KeluargaAddProses()
        {
       		global $title,$db;
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);
			//$smarty->assign("username",$_SESSION['username']);
							
			session_start();
			$kode = $_SESSION['kode'];
			$tgl_lahir = $_POST['tgl_lahir'];
			$nama = $_POST['nama'];
			$status = $_POST['status'];

			if(empty($statusTglLahir) && empty($statusNama) && empty($statusStatus)){
				//melakukan pengecekan existing data
				    $sql_keluarga ="SELECT * FROM dat_keluarga where tgl_lahir =STR_TO_DATE('$tgl_lahir', '%d/%m/%Y') and nama = '$nama' and status ='$status' and id_peg='$kode'";
					$result_keluarga = $db -> Execute($sql_keluarga);
					$rs_keluarga = $result_keluarga->RecordCount();
					if($rs_keluarga > 0){
					echo "<script language=javascript>
							alert('Data Sudah Pernah Di entry');
						 </script>";
						$this->display("frmkeluarga_add.html");
					}else{
			$sql_keluarga = "INSERT INTO dat_keluarga (id,id_peg,tgl_lahir,nama,status,Userinsert,tglinsert)
					VALUES (null,'$kode',STR_TO_DATE('$tgl_lahir', '%d/%m/%Y'),'$nama','$status','$_SESSION[username]',now())"; 
				$resultKeluarga= $db->Execute($sql_keluarga);
						if($resultKeluarga){
					    //cek data 
						//Query data 
							$sql_employee="SELECT * FROM tab_employee where id='$kode'";
							$result_employee = $db -> Execute($sql_employee);
							$rs_employee = $result_employee->RecordCount();
							//echo $rs_employee;
						//melakukan proses pengecekan data
							if($rs_employee > 0){
				  echo "<script language=javascript>
							alert('Simpan Berhasil');
		                    window.location='employee.php?action=edit&id=$kode';
		                 </script>";
				}else{
				  echo "<script language=javascript>
		                    alert('Simpan Gagal');
		                    window.location='employee.php?action=KeluargaAdd';
		                 </script>";
					}
				}
			}
		}
}

function KeluargaEditForm()
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
		$smarty->assign("samping","21");
		$id = $_GET['id'];

		$sql_keluarga="SELECT id, id_peg, date_format(tgl_lahir, '%d/%m/%Y') as tgl_lahir2,nama,status FROM dat_keluarga where id='$id'";
			$result_keluarga = $db -> Execute($sql_keluarga);
			$rs_keluarga = $result_keluarga->FetchRow();
			$status = $rs_keluarga['status'];

			if ($rs_keluarga['tgl_lahir2'] == '00/00/0000')
			{$tgl_lahir = '';}	
			else
			{$tgl_lahir = $rs_keluarga['tgl_lahir2'];}
			$smarty->assign("tgl_lahir",$tgl_lahir);
			
			$smarty->assign("nama",$rs_keluarga['nama']);//
			$smarty->assign("status",$rs_keluarga['status']);//
			$smarty->assign("id",$id);//
			
			$smarty->display("frmkeluarga_edit.tpl");
        }


function KeluargaEditProses()
        {
        	global $title,$db;
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);

        	session_start();
			$kode = $_SESSION['kode'];
			$id = $_POST['id'];
			$tgl_lahir = $_POST['tgl_lahir'];
			$nama = $_POST['nama'];
			$status = $_POST['status'];

			$smarty->assign("id", $id);
			$smarty->assign("tgl_lahir", $tgl_lahir);
			$smarty->assign("nama", $nama);
			$smarty->assign("status", $status);

			if(empty($statusTglLahir) && empty($statusNama) && empty($statusStatus)){
				//melakukan proses update
						$sql="UPDATE dat_keluarga set 
						tgl_lahir=STR_TO_DATE('$tgl_lahir', '%d/%m/%Y'),
						nama='$nama', 
						status='$status',
						Userinsert='$_SESSION[username]',
						tglinsert=now()
						where id = '$id'";
						//echo $sql;
			$result = $db->Execute($sql);

					if($result){
						//cek data 
						//Query data 
							$sql_keluarga="SELECT * FROM dat_keluarga where id_peg='$kode'";
							$result_keluarga = $db -> Execute($sql_keluarga);
							$rs_keluarga = $result_keluarga->RecordCount();
				
				        //melakukan proses pengecekan data 
							if($rs_keluarga > 0){
									echo "<script language=javascript>
									alert('Terima Kasih, berhasil memperbaiki data');
									window.location='employee.php?action=edit&id=$kode';
								 </script>";
							}else{
								echo "<script language=javascript>
										alert('Proses Entry Data Berhasil');
										window.location='employee.php?action=showAddMenu';
									 </script>";
							}
						
					}else{
						echo "<script language=javascript>
								alert('Maaf, gagal memperbaiki data');
					    </script>";
						$this->display("frmkeluarga_edit.html");
					}
			}else{
				$this->display("frmkeluarga_edit.html");
			}
        }


 function KeluargaDeleteProses(){
  	    global $title,$db;
		$smarty = new Smarty;
 		$smarty->force_compile = true;
		//$smarty->debugging = true;
		$smarty->caching = true;
		$smarty->cache_lifetime = 120;
		$smarty->assign("title",$title);
		$smarty->assign("username",$_SESSION['username']);
		$smarty->assign("statuslogin",$_SESSION['statuslogin']);
		$smarty->assign("samping","21");
		$id = $_GET['id'];

		session_start();
			$kode = $_SESSION['kode'];
			
			$sql="DELETE FROM dat_keluarga where id='$id'";
			//echo $sql;
			$result = $db->Execute($sql);

	        if($result)
	        {
	            //cek data 
						//Query data 
							$sql_keluarga="SELECT * FROM dat_keluarga where id_peg='$kode'";
							$result_keluarga = $db -> Execute($sql_keluarga);
							$rs_keluarga = $result_keluarga->RecordCount();
				
				        //melakukan proses pengecekan data 
							if($rs_keluarga > 0){
									echo "<script language=javascript>
	                    alert('Terima Kasih, berhasil menghapus data');
	                   window.location='employee.php?action=edit&id=$kode';
	                 </script>";
							}else{
								echo "<script language=javascript>
										alert('Terima Kasih, berhasil menghapus data');
										window.location='employee.php?action=edit&id=$kode';
									 </script>";
							}
				
				
	        }
	        else
	            echo "<script language=javascript>
	                    alert('Gagal menghapus data');
	                   window.location='employee.php?action=edit&id=$kode';
	                 </script>";
		}       
//**************************************************************************************************** End Data MCU
  /************ Organisasi **********/
function OrganisasiAddForm()
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
		$smarty->assign("samping","21");
		$kode = $_SESSION['kode'];

			
			$smarty->display("frmorganisasi_add.tpl");
        }

        function OrganisasiAddProses()
        {
       		global $title,$db;
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);
			//$smarty->assign("username",$_SESSION['username']);
							
			session_start();
			$kode = $_SESSION['kode'];
			$organisasi = $_POST['organisasi'];
			$jabatan = $_POST['jabatan'];
			$tahun = $_POST['tahun'];

			 //melakukan proses pengecekan status
			if(empty($statusOrganisasi) && empty($statusJabatan) && empty($statusTahun)){
				//melakukan pengecekan existing data
				    $sql_organisasi ="SELECT * FROM dat_organisasi where nm_organisasi ='$organisasi' and tahun = '$tahun' and jabatan = '$jabatan' and id_peg ='$kode'";
					$result_organisasi = $db -> Execute($sql_organisasi);
					$rs_organisasi = $result_organisasi->RecordCount();
					if($rs_organisasi > 0){
					echo "<script language=javascript>
							alert('Data Sudah Pernah Di entry');
						 </script>";
						$this->display("frmorganisasi_add.tpl");
					}else{
						$sql_organisasi = "INSERT INTO dat_organisasi
						(id, id_peg, nm_organisasi, jabatan, tahun, Userinsert, tglinsert) 
						VALUES (null,'$kode','$organisasi','$jabatan','$tahun','$_SESSION[username]',now())";
					$resultOrganisasi = $db->Execute($sql_organisasi);
						if($resultOrganisasi){
					    //cek data 
						//Query data 
							$sql_employee="SELECT * FROM tab_employee where id='$kode'";
							$result_employee = $db -> Execute($sql_employee);
							$rs_employee = $result_employee->RecordCount();
							//echo $rs_employee;
						//melakukan proses pengecekan data
							if($rs_employee > 0){
				                echo "<script language=javascript>
										alert('Proses Entry Data Berhasil');
										window.location='employee.php?action=edit&id=$kode';
									 </script>";
								
							}else{
								echo "<script language=javascript>
										alert('Proses Entry Data Berhasil');
										window.location='employee.php?actio=edit&id=$kode';
									</script>";
							}
						}else{
							echo "<script language=javascript>
								alert('Proses Entry Data Gagal');
							 </script>";
							 $smarty->display("frmorganisasi_add.tpl");
						}
					}
				
			}else{
				$smarty->display("frmorganisasi_add.tpl");
			}
        }

function OrganisasiEditForm()
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
		$smarty->assign("samping","21");
		$id = $_GET['id'];

			$sql_organisasi="SELECT id, id_peg, nm_organisasi, jabatan, tahun FROM dat_organisasi where id='$id'";
			$result_organisasi = $db -> Execute($sql_organisasi);
			$rs_organisasi = $result_organisasi->FetchRow();
			
			
			$smarty->assign("organisasi",$rs_organisasi['nm_organisasi']);//
			$smarty->assign("jabatan",$rs_organisasi['jabatan']);//
			$smarty->assign("tahun",$rs_organisasi['tahun']);//
			$smarty->assign("id",$id);//
			
			$smarty->display("frmorganisasi_edit.tpl");
        }



function OrganisasiEditProses()
        {
        	global $title,$db;
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);

        	session_start();
			$kode = $_SESSION['kode'];
			$id = $_POST['id'];
			$organisasi = $_POST['organisasi'];
			$jabatan = $_POST['jabatan'];
			$tahun = $_POST['tahun'];
			

			$smarty->assign("id", $id);
			$smarty->assign("organisasi", $organisasi);
			$smarty->assign("jabatan", $jabatan);
			$smarty->assign("tahun", $tahun);

			if(empty($statusOrganisasi) && empty($statusJabatan) && empty($statusTahun)){
				//melakukan proses update
						$sql="UPDATE dat_organisasi set 
						nm_organisasi='$organisasi',
						jabatan='$jabatan',
						tahun='$tahun',
						Userinsert='$_SESSION[username]',
						tglinsert=now()
						where id = '$id'";
						//echo $sql;
			$result = $db->Execute($sql);

					if($result){
						//cek data 
						//Query data 
							$sql_organisasi ="SELECT * FROM dat_organisasi where id_peg='$kode'";
							$result_organisasi = $db -> Execute($sql_organisasi);
							$rs_organisasi = $result_organisasi->RecordCount();
				
				        //melakukan proses pengecekan data 
							if($rs_organisasi > 0){
									echo "<script language=javascript>
									alert('Terima Kasih, berhasil memperbaiki data');
									window.location='employee.php?action=edit&id=$kode';
								 </script>";
							}else{
								echo "<script language=javascript>
										alert('Proses Entry Data Berhasil');
										window.location='employee.php?action=edit&id=$kode';
									 </script>";
							}
						
					}else{
						echo "<script language=javascript>
								alert('Maaf, gagal memperbaiki data');
					    </script>";
						$smarty->display("frmorganisasi_edit.tpl");
					}
					
			}else{
				$smarty->display("frmorganisasi_edit.tpl");
			}
			
        }


 function OrganisasiDeleteProses(){
  	    global $title,$db;
		$smarty = new Smarty;
 		$smarty->force_compile = true;
		//$smarty->debugging = true;
		$smarty->caching = true;
		$smarty->cache_lifetime = 120;
		$smarty->assign("title",$title);
		$smarty->assign("username",$_SESSION['username']);
		$smarty->assign("statuslogin",$_SESSION['statuslogin']);
		$smarty->assign("samping","21");
		$id = $_GET['id'];

		session_start();
			$kode = $_SESSION['kode'];
			$sql="DELETE FROM dat_organisasi where id='$id'";
			//echo $sql;
			$result = $db->Execute($sql);

	        if($result)
	        {
	            //cek data 
						//Query data 
							$sql_organisasi ="SELECT * FROM dat_organisasi where id_peg='$kode'";
							$result_organisasi = $db -> Execute($sql_organisasi);
							$rs_organisasi = $result_organisasi->RecordCount();
				
				        //melakukan proses pengecekan data 
							if($rs_organisasi > 0){
									echo "<script language=javascript>
	                    alert('Terima Kasih, berhasil menghapus data');
	                   window.location='employee.php?action=edit&id=$kode';
	                 </script>";
							}else{
								echo "<script language=javascript>
										alert('Terima Kasih, berhasil menghapus data');
										window.location='employee.php?action=edit&id=$kode';
									 </script>";
							}
				
				
	        }
	        else
	            echo "<script language=javascript>
	                    alert('Gagal menghapus data');
	                   window.location='employee.php?action=edit&id=$kode';
	                 </script>";
		}

//**************************************************************************************************** End Data MCU
/************ Kesehatan **********/
function KesehatanAddForm()

        {
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
		$smarty->assign("samping","21");
		$kode = $_SESSION['kode'];

			
			$smarty->display("frmkesehatan_add.tpl");
        }

        function KesehatanAddProses()
        {
       		global $title,$db;
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);
			//$smarty->assign("username",$_SESSION['username']);
							
			session_start();
			$kode = $_SESSION['kode'];
			$penyakit = $_POST['penyakit'];
			$tahun = $_POST['tahun'];
			$ket = $_POST['ket'];

			if(empty($statusPenyakit) && empty($statusTahun)){
				//melakukan pengecekan existing data
				    $sql_kesehatan ="SELECT * FROM dat_kesehatan where penyakit ='$penyakit' and tahun = '$tahun' and id_peg='$kode'";
					$result_kesehatan = $db -> Execute($sql_kesehatan);
					$rs_kesehatan = $result_kesehatan->RecordCount();
					if($rs_kesehatan > 0){
					echo "<script language=javascript>
							alert('Data Sudah Pernah Di entry');	
						 </script>";
						$smarty->display("frmkesehatan_add.tpl");
					}else{
						$sql_kesehatan = "INSERT INTO dat_kesehatan
						(id, id_peg, penyakit, tahun, keterangan, Userinsert, tglinsert) 
						VALUES (null,'$kode','$penyakit','$tahun','$ket','$_SESSION[username]',now())";
					$resultKesehatan= $db->Execute($sql_kesehatan);
						if($resultKesehatan){
					    //cek data 
						//Query data 
							$sql_employee="SELECT * FROM tab_employee where id='$kode'";
							$result_employee = $db -> Execute($sql_employee);
							$rs_employee = $result_employee->RecordCount();
							//echo $rs_employee;
						//melakukan proses pengecekan data
							if($rs_employee > 0){
				                echo "<script language=javascript>
										alert('Proses Entry Data Berhasil');
										window.location='employee.php?action=edit&id=$kode';
									 </script>";
								
							}else{
								echo "<script language=javascript>
										alert('Proses Entry Data Berhasil');
										window.location='employee.php?action=showAddMenu';
									</script>";
							}
						}else{
							echo "<script language=javascript>
								alert('Proses Entry Data Gagal');
							 </script>";
							 $smarty->display("frmkesehatan_add.tpl");
						}
					}
				
			}else{
				$smarty->display("frmkesehatan_add.tpl");
			}
        }
		
		function KesehatanEditForm()
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
		$smarty->assign("samping","21");
		$id = $_GET['id'];

		$sql_kesehatan="SELECT id, id_peg, penyakit, tahun, keterangan FROM dat_kesehatan where id='$id'";
			$result_kesehatan = $db -> Execute($sql_kesehatan);
			$rs_kesehatan = $result_kesehatan->FetchRow();
			
			//echo $sertifikat;
			
			$smarty->assign("penyakit",$rs_kesehatan['penyakit']);//
			$smarty->assign("tahun",$rs_kesehatan['tahun']);//
			$smarty->assign("ket",$rs_kesehatan['keterangan']);//
			$smarty->assign("id",$id);//
			
			$smarty->display("frmkesehatan_edit.tpl");
        }


function KesehatanEditProses()
        {
        	global $title,$db;
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);

        	session_start();
			$kode = $_SESSION['kode'];
			$id = $_POST['id'];
			$penyakit = $_POST['penyakit'];
			$tahun = $_POST['tahun'];
			$ket = $_POST['ket'];

			$smarty->assign("id", $id);
			$smarty->assign("penyakit", $penyakit);
			$smarty->assign("tahun", $tahun);
			$smarty->assign("ket", $ket);

			if(empty($statusPenyakit) && empty($statusTahun)){
				//melakukan proses update
						$sql="UPDATE dat_kesehatan set 
						penyakit='$penyakit',
						tahun='$tahun', 
						keterangan='$ket',
						Userinsert='$_SESSION[username]',
						tglinsert=now()
						where id = '$id'";
						//echo $sql;
			$result = $db->Execute($sql);

					if($result){
						//cek data 
						//Query data 
							$sql_kesehatan="SELECT * FROM dat_kesehatan where id_peg='$kode'";
							$result_kesehatan = $db -> Execute($sql_kesehatan);
							$rs_kesehatan = $result_kesehatan->RecordCount();
				
				        //melakukan proses pengecekan data 
							if($rs_kesehatan > 0){
									echo "<script language=javascript>
									alert('Terima Kasih, berhasil memperbaiki data');
									window.location='employee.php?action=edit&id=$kode';
								 </script>";
							}else{
								echo "<script language=javascript>
										alert('Proses Entry Data Berhasil');
										window.location='employee.php?action=edit&id=$kode';
									 </script>";
							}
						
					}else{
						echo "<script language=javascript>
								alert('Maaf, gagal memperbaiki data');
					    </script>";
						$this->display("frmkesehatan_edit.tpl");
					}
					
			}else{
				$smarty->display("frmkesehatan_edit.tpl");
			}
			
        }
		
function KesehatanDeleteProses(){
			
  	    global $title,$db;
		$smarty = new Smarty;
 		$smarty->force_compile = true;
		//$smarty->debugging = true;
		$smarty->caching = true;
		$smarty->cache_lifetime = 120;
		$smarty->assign("title",$title);
		$smarty->assign("samping","21");
		$id = $_GET['id'];

		session_start();
		$kode = $_SESSION['kode'];
			
			$sql="DELETE FROM dat_kesehatan where id='$id'";
			//echo $sql;
			$result = $db->Execute($sql);

	        if($result)
	        {
	            //cek data 
						//Query data 
							$sql_kesehatan="SELECT * FROM dat_keluarga where id_peg='$kode'";
							$result_kesehatan = $db -> Execute($sql_kesehatan);
							$rs_kesehatan = $result_kesehatan->RecordCount();
				
				        //melakukan proses pengecekan data 
							if($rs_kesehatan > 0){
									echo "<script language=javascript>
	                    alert('Terima Kasih, berhasil menghapus data');
	                   window.location='employee.php?action=edit&id=$kode';
	                 </script>";
							}else{
								echo "<script language=javascript>
										alert('Terima Kasih, berhasil menghapus data');
										window.location='employee.php?action=edit&id=$kode';
									 </script>";
							}
				
				
	        }
	        else
	            echo "<script language=javascript>
	                    alert('Gagal menghapus data');
	                   window.location='employee.php?action=edit&id=$kode';
	                 </script>";
		}

//**************************************************************************************************** End Data Kesehatan		
/************ Penghargaan **********/
function PenghargaanAddForm()
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
		$smarty->assign("samping","21");
		$kode = $_SESSION['kode'];
			
			
			$smarty->display("frmpenghargaan_add.tpl");
        }

        function PenghargaanAddProses()
        {
       		global $title,$db;
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);
			//$smarty->assign("username",$_SESSION['username']);
							
			session_start();
			$kode = $_SESSION['kode'];
			$penghargaan = $_POST['penghargaan'];
			$pemberi_penghargaan = $_POST['pemberi_penghargaan'];
			$tgl_penghargaan = $_POST['tgl_penghargaan'];
			$ket = $_POST['ket'];


			if(empty($statusPenghargaan) && empty($statusPemberi) && empty($statusTglPenghargaan)){
				//melakukan pengecekan existing data
				    $sql_penghargaan ="SELECT * FROM dat_penghargaan where penghargaan ='$penghargaan' and pemberi_penghargaan = '$pemberi_penghargaan' and tgl_penghargaan = STR_TO_DATE('$tgl_penghargaan', '%d/%m/%Y') and id_peg='$kode'";
					$result_penghargaan = $db -> Execute($sql_penghargaan);
					$rs_penghargaan = $result_penghargaan->RecordCount();
					if($rs_penghargaan > 0){
					echo "<script language=javascript>
							alert('Data Sudah Pernah Di entry');
						 </script>";
						$smarty->display("frmpenghargaan_add.tpl");
					}else{
						$sql_penghargaan = "INSERT INTO dat_penghargaan
						(id, id_peg, penghargaan, tgl_penghargaan, pemberi_penghargaan, keterangan, Userinsert, tglinsert) 
						VALUES (null,'$kode','$penghargaan',STR_TO_DATE('$tgl_penghargaan','%d/%m/%Y'),'$pemberi_penghargaan','$ket','$_SESSION[username]',now())";
					$resultPenghargaan= $db->Execute($sql_penghargaan);
						if($resultPenghargaan){
					    //cek data 
						//Query data 
							$sql_employee="SELECT * FROM tab_employee where id='$kode'";
							$result_employee = $db -> Execute($sql_employee);
							$rs_employee = $result_employee->RecordCount();
							//echo $rs_employee;
						//melakukan proses pengecekan data
							if($rs_employee > 0){
				                echo "<script language=javascript>
										alert('Proses Entry Data Berhasil');
										window.location='employee.php?action=edit&id=$kode';
									 </script>";
								
							}else{
								echo "<script language=javascript>
										alert('Proses Entry Data Berhasil');
										window.location='employee.php?action=showAddMenu';
									</script>";
							}
						}else{
							echo "<script language=javascript>
								alert('Proses Entry Data Gagal');
							 </script>";
							 $smarty->display("frmpenghargaan_add.tpl");
						}
					}
				
			}else{
				$smarty->display("frmpenghargaan_add.tpl");
			}
        }
		
		function PenghargaanEditForm()
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
		$smarty->assign("samping","21");
		$id = $_GET['id'];

		$sql_penghargaan="SELECT id, id_peg, penghargaan, pemberi_penghargaan, date_format(tgl_penghargaan, '%d/%m/%Y') as tgl_penghargaan2, keterangan FROM dat_penghargaan where id='$id'";
			$result_penghargaan = $db -> Execute($sql_penghargaan);
			$rs_penghargaan = $result_penghargaan->FetchRow();
			$penghargaan = $rs_penghargaan['penghargaan'];
			
			//echo $sertifikat;
			
			$smarty->assign("pemberi_penghargaan",$rs_penghargaan['pemberi_penghargaan']);//
			$smarty->assign("tgl_penghargaan",$rs_penghargaan['tgl_penghargaan2']);//
			$smarty->assign("ket",$rs_penghargaan['keterangan']);//
			$smarty->assign("id",$id);//
			
			
			$smarty->display("frmpenghargaan_edit.tpl");
        }


function PenghargaanEditProses()
        {
        	global $title,$db;
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);

        	session_start();
			$kode = $_SESSION['kode'];
			$id = $_POST['id'];
			$penghargaan = $_POST['penghargaan'];
			$tgl_penghargaan = $_POST['tgl_penghargaan'];
			$pemberi_penghargaan = $_POST['pemberi_penghargaan'];
			$ket = $_POST['ket'];

			$smarty->assign("id", $id);
			$smarty->assign("penghargaan", $penghargaan);
			$smarty->assign("tgl_penghargaan", $tgl_penghargaan);
			$smarty->assign("pemberi_penghargaan", $pemberi_penghargaan);
			$smarty->assign("ket", $ket);

			if(empty($statusPenghargaan) && empty($statusPemberi) && empty($statusTglPenghargaan)){
				//melakukan proses update
						$sql="UPDATE dat_penghargaan set 
						penghargaan='$penghargaan',
						tgl_penghargaan=STR_TO_DATE('$tgl_penghargaan', '%d/%m/%Y'),
						pemberi_penghargaan='$pemberi_penghargaan',
						keterangan='$ket',
						Userinsert='$_SESSION[username]',
						tglinsert=now()
						where id = '$id'";
						//echo $sql;
			$result = $db->Execute($sql);

					if($result){
						//cek data 
						//Query data 
							$sql_penghargaan="SELECT * FROM dat_penghargaan where id_peg='$kode'";
							$result_penghargaan = $db -> Execute($sql_penghargaan);
							$rs_penghargaan = $result_penghargaan->RecordCount();
				
				        //melakukan proses pengecekan data 
							if($rs_penghargaan > 0){
									echo "<script language=javascript>
									alert('Terima Kasih, berhasil memperbaiki data');
									window.location='employee.php?action=edit&id=$kode';
								 </script>";
							}else{
								echo "<script language=javascript>
										alert('Proses Entry Data Berhasil');
										window.location='employee.php?action=showAddMenu';
									 </script>";
							}
						
					}else{
						echo "<script language=javascript>
								alert('Maaf, gagal memperbaiki data');
					    </script>";
						$smarty->display("frmpenghargaan_edit.tpl");
					}
					
			}else{
				$smarty->display("frmpenghargaan_edit.tpl");
			}
			
        }
		
function PenghargaanDeleteProses(){
  	    global $title,$db;
		$smarty = new Smarty;
 		$smarty->force_compile = true;
		//$smarty->debugging = true;
		$smarty->caching = true;
		$smarty->cache_lifetime = 120;
		$smarty->assign("title",$title);
		$smarty->assign("samping","21");
		$id = $_GET['id'];

		session_start();
			$kode = $_SESSION['kode'];
			
			
			$sql="DELETE FROM dat_penghargaan where id='$id'";
			//echo $sql;
			$result = $db->Execute($sql);

	        if($result)
	        {
	            //cek data 
						//Query data 
							$sql_penghargaan="SELECT * FROM dat_penghargaan where id_peg='$kode'";
							$result_penghargaan = $db -> Execute($sql_penghargaan);
							$rs_penghargaan = $result_penghargaan->RecordCount();
				
				        //melakukan proses pengecekan data 
							if($rs_penghargaan > 0){
									echo "<script language=javascript>
	                    alert('Terima Kasih, berhasil menghapus data');
	                   window.location='employee.php?action=edit&id=$kode';
	                 </script>";
							}else{
								echo "<script language=javascript>
										alert('Terima Kasih, berhasil menghapus data');
										window.location='employee.php?action=edit&id=$kode';
									 </script>";
							}
				
				
	        }
	        else
	            echo "<script language=javascript>
	                    alert('Gagal menghapus data');
	                   window.location='employee.php?action=edit&id=$kode';
	                 </script>";
		}

		//**************************************************************************************************** End Data Kesehatan		
/************ Hukuman **********/
function HukumanAddForm()
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
		$smarty->assign("samping","21");
		$kode = $_SESSION['kode'];
			
			
			$smarty->display("frmhukuman_add.tpl");
        }

        function HukumanAddProses()
        {
       		global $title,$db;
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);
			//$smarty->assign("username",$_SESSION['username']);
							
			session_start();
			$kode = $_SESSION['kode'];
			$hukuman = $_POST['hukuman'];
			$pemberi_hukuman = $_POST['pemberi_hukuman'];
			$tgl_sanksi = $_POST['tgl_sanksi'];
			$no_sanksi = $_POST['no_sanksi'];
			$ket = $_POST['ket'];


			if(empty($statusHukuman) && empty($statusPemberi) && empty($statusTglSanksi) && empty($statusNoSanksi)){
				//melakukan pengecekan existing data
				    $sql_hukuman ="SELECT * FROM dat_sanksi where hukuman ='$hukuman' and pemberi_hukuman = '$pemberi_hukuman' and tgl_sanksi = STR_TO_DATE('$tgl_sanksi', '%d/%m/%Y') and no_sanksi ='$no_sanksi' and id_peg ='$kode'";
					$result_hukuman = $db -> Execute($sql_hukuman);
					$rs_hukuman = $result_hukuman->RecordCount();
					if($rs_hukuman > 0){
					echo "<script language=javascript>
							alert('Data Sudah Pernah Di entry');
						 </script>";
						$smarty->display("frmhukuman_add.tpl");
					}else{
						$sql_hukuman = "INSERT INTO dat_sanksi
						(id, id_peg, hukuman, tgl_sanksi, no_sanksi, pemberi_hukuman, keterangan, Userinsert, tglinsert) 
						VALUES (null,'$kode','$hukuman',STR_TO_DATE('$tgl_sanksi','%d/%m/%Y'),'$no_sanksi','$pemberi_hukuman','$ket','$_SESSION[username]',now())";
					$resultHukuman= $db->Execute($sql_hukuman);
						if($resultHukuman){
					    //cek data 
						//Query data 
							$sql_employee="SELECT * FROM tab_employee where id='$kode'";
							$result_employee = $db -> Execute($sql_employee);
							$rs_employee = $result_employee->RecordCount();
							//echo $rs_employee;
						//melakukan proses pengecekan data
							if($rs_employee > 0){
				                echo "<script language=javascript>
										alert('Proses Entry Data Berhasil');
										window.location='employee.php?mod=action&id=$kode';
									 </script>";
								
							}else{
								echo "<script language=javascript>
										alert('Proses Entry Data Berhasil');
										window.location='employee.php?action=showAddMenu';
									</script>";
							}
						}else{
							echo "<script language=javascript>
								alert('Proses Entry Data Gagal');
							 </script>";
							 $this->display("frmhukuman_add.tpl");
						}
					}
				
			}else{
				$smarty->display("frmhukuman_add.tpl");
			}
        }
		
		function HukumanEditForm()
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
		$smarty->assign("samping","21");
		$id = $_GET['id'];

		$sql_hukuman="SELECT id, id_peg, hukuman, pemberi_hukuman, date_format(tgl_sanksi, '%d/%m/%Y') as tgl_sanksi2, no_sanksi, keterangan FROM dat_sanksi where id='$id'";
			$result_hukuman = $db -> Execute($sql_hukuman);
			$rs_hukuman = $result_hukuman->FetchRow();
			$hukuman = $rs_hukuman['hukuman'];
			
			//echo $sertifikat;
			$smarty->assign("hukuman",$rs_hukuman['hukuman']);//
			$smarty->assign("pemberi_hukuman",$rs_hukuman['pemberi_hukuman']);//
			$smarty->assign("tgl_sanksi",$rs_hukuman['tgl_sanksi2']);//
			$smarty->assign("no_sanksi",$rs_hukuman['no_sanksi']);//
			$smarty->assign("ket",$rs_hukuman['keterangan']);//
			$smarty->assign("id",$id);//
			
			$smarty->display("frmhukuman_edit.tpl");
        }


function HukumanEditProses()
        {
        	global $title,$db;
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);

        	session_start();
			$kode = $_SESSION['kode'];
			$id = $_POST['id'];
			$hukuman = $_POST['hukuman'];
			$tgl_sanksi = $_POST['tgl_sanksi'];
			$no_sanksi = $_POST['no_sanksi'];
			$pemberi_hukuman = $_POST['pemberi_hukuman'];
			$ket = $_POST['ket'];

			$smarty->assign("id", $id);
			$smarty->assign("hukuman", $hukuman);
			$smarty->assign("tgl_sanksi", $tgl_sanksi);
			$smarty->assign("no_sanksi", $no_sanksi);
			$smarty->assign("pemberi_hukuman", $pemberi_hukuman);
			$smarty->assign("ket", $ket);

			if(empty($statusHukuman) && empty($statusTglSanksi) && empty($statusNoSanksi) && empty($statusPemberi)){
				//melakukan proses update
						$sql="UPDATE dat_sanksi set 
						hukuman='$hukuman',
						tgl_sanksi=STR_TO_DATE('$tgl_sanksi', '%d/%m/%Y'),
						no_sanksi='$no_sanksi',
						pemberi_hukuman='$pemberi_hukuman',
						keterangan='$ket',
						Userinsert='$_SESSION[username]',
						tglinsert=now()
						where id = '$id'";
						//echo $sql;
			$result = $db->Execute($sql);

					if($result){
						//cek data 
						//Query data 
							$sql_hukuman="SELECT * FROM dat_sanksi where id_peg='$kode'";
							$result_hukuman = $db -> Execute($sql_hukuman);
							$rs_hukuman = $result_hukuman->RecordCount();
				
				        //melakukan proses pengecekan data 
							if($rs_hukuman > 0){
									echo "<script language=javascript>
									alert('Terima Kasih, berhasil memperbaiki data');
									window.location='employee.php?action=edit&id=$kode';
								 </script>";
							}else{
								echo "<script language=javascript>
										alert('Proses Entry Data Berhasil');
										window.location='employee.php?action=showAddMenu';
									 </script>";
							}
						
					}else{
						echo "<script language=javascript>
								alert('Maaf, gagal memperbaiki data');
					    </script>";
						$smarty->display("frmhukuman_edit.tpl");
					}
					
			}else{
				$smarty->display("frmhukuman_edit.tpl");
			}
			
        }
		
function HukumanDeleteProses()
	{
  	    global $title,$db;
		$smarty = new Smarty;
 		$smarty->force_compile = true;
		//$smarty->debugging = true;
		$smarty->caching = true;
		$smarty->cache_lifetime = 120;
		$smarty->assign("title",$title);
		$smarty->assign("samping","21");
		$id = $_GET['id'];

		session_start();
			$kode = $_SESSION['kode'];
			
			
			$sql="DELETE FROM dat_sanksi where id='$id'";
			//echo $sql;
			$result = $db->Execute($sql);

	        if($result)
	        {
	            //cek data 
						//Query data 
							$sql_hukuman ="SELECT * FROM dat_sanksi where id_peg='$kode'";
							$result_hukuman = $db -> Execute($sql_hukuman);
							$rs_hukuman = $result_hukuman->RecordCount();
				
				        //melakukan proses pengecekan data 
							if($rs_hukuman > 0){
									echo "<script language=javascript>
	                    alert('Terima Kasih, berhasil menghapus data');
	                   window.location='employee.php?action=edit&id=$kode';
	                 </script>";
							}else{
								echo "<script language=javascript>
										alert('Terima Kasih, berhasil menghapus data');
										window.location='employee.php?action=edit&id=$kode';
									 </script>";
							}
				
				
	        }
	        else
	            echo "<script language=javascript>
	                    alert('Gagal menghapus data');
	                   window.location='employee.php?action=edit&id=$kode';
	                 </script>";
		}

			//**************************************************************************************************** End Data Kesehatan		
/************ MCU **********/
function MCUAddForm()
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
		$smarty->assign("samping","21");
		$kode = $_SESSION['kode'];
			
			
			$smarty->display("frmmcu_add.tpl");
        }

         function MCUAddProses()
        {
       		global $title,$db;
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);
			//$smarty->assign("username",$_SESSION['username']);
							
			session_start();
			$kode = $_SESSION['kode'];
			$tgl_pemeriksaan = $_POST['tgl_pemeriksaan'];
			$hasil = $_POST['hasil'];
			$sertifikat = $_POST['sertifikat'];
			$no_sertifikat = $_POST['no_sertifikat'];
			$tenaga_medis = $_POST['tenaga_medis'];
			$catatan = $_POST['catatan'];
			$tgl_dari = $_POST['tgl_dari'];
			$tgl_sampai = $_POST['tgl_sampai'];
			$ket = $_POST['ket'];

			if(empty($statusTglPemeriksaan) && empty($statusHasil) && empty($statusTenaga) && empty($statusTglDari) && empty($statusTglSampai)){
				//melakukan pengecekan existing data
				    $sql_mcu ="SELECT * FROM dat_mcu where tgl_pemeriksaan = STR_TO_DATE('$tgl_pemeriksaan', '%d/%m/%Y') and hasil_pemeriksaan = '$hasil' and 
					tenaga_medis = '$tenaga_medis' and tgl_dari = STR_TO_DATE('$tgl_dari', '%d/%m/%Y') and tgl_sampai = STR_TO_DATE('$tgl_sampai', '%d/%m/%Y') and id_peg ='$kode'";
					$result_mcu = $db -> Execute($sql_mcu);
					$rs_mcu = $result_mcu->RecordCount();
					if($rs_mcu > 0){
					echo "<script language=javascript>
							alert('Data Sudah Pernah Di entry');
						 </script>";
						$smarty->display("frmmcu_add.tpl");
					}else{
						$sql_mcu = "INSERT INTO dat_mcu
						(id, id_peg, tgl_pemeriksaan, hasil_pemeriksaan, sertifikat, no_sertifikat, tenaga_medis, catatan, tgl_dari, tgl_sampai, keterangan, Userinsert, tglinsert) 
						VALUES (null,'$kode',STR_TO_DATE('$tgl_pemeriksaan','%d/%m/%Y'), '$hasil', '$sertifikat', '$no_sertifikat', '$tenaga_medis', '$catatan', STR_TO_DATE('$tgl_dari','%d/%m/%Y'),STR_TO_DATE('$tgl_sampai','%d/%m/%Y'),'$ket','$_SESSION[username]',now())";
					$resultMCU= $db->Execute($sql_mcu);
						if($resultMCU){
					    //cek data 
						//Query data 
							$sql_employee="SELECT * FROM tab_employee where id='$kode'";
							$result_employee = $db -> Execute($sql_employee);
							$rs_employee = $result_employee->RecordCount();
							//echo $rs_employee;
						//melakukan proses pengecekan data
							if($rs_employee > 0){
				                echo "<script language=javascript>
										alert('Proses Entry Data Berhasil');
										window.location='employee.php?mod=edit&id=$kode';
									 </script>";
								
							}else{
								echo "<script language=javascript>
										alert('Proses Entry Data Berhasil');
										window.location='employee.php?mod=showAddMenu';
									</script>";
							}
						}else{
							echo "<script language=javascript>
								alert('Proses Entry Data Gagal');
							 </script>";
							 $smarty->display("frmmcu_add.tpl");
						}
					}
				
			}else{
				$smarty->display("frmmcu_add.tpl");
			}
        }
		
		function MCUEditForm()
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
		$smarty->assign("samping","21");
		$id = $_GET['id'];

		$sql_mcu="SELECT id, id_peg, date_format(tgl_pemeriksaan, '%d/%m/%Y') as tgl_pemeriksaan2, hasil_pemeriksaan, sertifikat, no_sertifikat, tenaga_medis, 
			catatan, date_format(tgl_dari, '%d/%m/%Y') as tgl_dari2, date_format(tgl_sampai, '%d/%m/%Y') as tgl_sampai2, keterangan FROM dat_mcu where id='$id'";
			$result_mcu = $db -> Execute($sql_mcu);
			$rs_mcu = $result_mcu->FetchRow();
			$sertifikat = $rs_mcu['sertifikat'];
			
			if ($rs_mcu['tgl_pemeriksaan2'] == '00/00/0000')
			{$tgl_pemeriksaan = '';}	
			else
			{$tgl_pemeriksaan = $rs_mcu['tgl_pemeriksaan2'];}

			$smarty->assign("tgl_pemeriksaan",$tgl_pemeriksaan);
			
			if ($rs_mcu['tgl_dari2'] == '00/00/0000')
			{$tgl_dari = '';}	
			else
			{$tgl_dari = $rs_mcu['tgl_dari2'];}

			$smarty->assign("tgl_dari",$tgl_dari);
			
			if ($rs_mcu['tgl_sampai2'] == '00/00/0000')
			{$tgl_sampai = '';}	
			else
			{$tgl_sampai = $rs_mcu['tgl_sampai2'];}

			$smarty->assign("tgl_sampai",$tgl_sampai);
			$smarty->assign("sertifikat",$rs_mcu['sertifikat']);//
			$smarty->assign("no_sertifikat",$rs_mcu['no_sertifikat']);//
			$smarty->assign("hasil",$rs_mcu['hasil_pemeriksaan']);//
			$smarty->assign("tenaga_medis",$rs_mcu['tenaga_medis']);//
			$smarty->assign("catatan",$rs_mcu['catatan']);//
			$smarty->assign("ket",$rs_mcu['keterangan']);//
			$smarty->assign("id",$id);//

			
			$smarty->display("frmmcu_edit.tpl");
        }


function MCUEditProses()
        {
        	global $title,$db;
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);

        	session_start();
			$kode = $_SESSION['kode'];
			$id = $_POST['id'];
			$tgl_pemeriksaan = $_POST['tgl_pemeriksaan'];
			$hasil = $_POST['hasil'];
			$sertifikat = $_POST['sertifikat'];
			$no_sertifikat = $_POST['no_sertifikat'];
			$tenaga_medis = $_POST['tenaga_medis'];
			$catatan = $_POST['catatan'];
			$tgl_dari = $_POST['tgl_dari'];
			$tgl_sampai = $_POST['tgl_sampai'];
			$ket = $_POST['ket'];

			$smarty->assign("id", $id);
			$smarty->assign("tgl_pemeriksaan", $tgl_pemeriksaan);
			$smarty->assign("hasil", $hasil);
			$smarty->assign("sertifikat", $sertifikat);
			$smarty->assign("no_sertifikat", $no_sertifikat);
			$smarty->assign("tenaga_medis", $tenaga_medis);
			$smarty->assign("catatan", $catatan);
			$smarty->assign("tgl_dari", $tgl_dari);
			$smarty->assign("tgl_sampai", $tgl_sampai);
			$smarty->assign("ket", $ket);

			if(empty($statusTglPemeriksaan) && empty($statusHasil) && empty($statusTenaga) && empty($statusTglDari) && empty($statusTglSampai)){
				//melakukan proses update
						$sql="UPDATE dat_mcu set 
						tgl_pemeriksaan=STR_TO_DATE('$tgl_pemeriksaan', '%d/%m/%Y'),
						hasil_pemeriksaan='$hasil',
						sertifikat='$sertifikat',
						no_sertifikat='$no_sertifikat',
						tenaga_medis='$tenaga_medis',
						catatan='$catatan',
						tgl_dari=STR_TO_DATE('$tgl_dari', '%d/%m/%Y'),
						tgl_sampai=STR_TO_DATE('$tgl_sampai', '%d/%m/%Y'),
						keterangan='$ket',
						Userinsert='$_SESSION[username]',
						tglinsert=now()
						where id = '$id'";
						//echo $sql;
			$result = $db->Execute($sql);

					if($result){
						//cek data 
						//Query data 
							$sql_mcu ="SELECT * FROM dat_mcu where id_peg='$kode'";
							$result_mcu = $db -> Execute($sql_mcu);
							$rs_mcu = $result_mcu->RecordCount();
				
				        //melakukan proses pengecekan data 
							if($rs_mcu > 0){
									echo "<script language=javascript>
									alert('Terima Kasih, berhasil memperbaiki data');
									window.location='employee.php?action=edit&id=$kode';
								 </script>";
							}else{
								echo "<script language=javascript>
										alert('Proses Entry Data Berhasil');
										window.location='employee.php?action=showAddMenu';
									 </script>";
							}
						
					}else{
						echo "<script language=javascript>
								alert('Maaf, gagal memperbaiki data');
					    </script>";
						$smarty->display("frmmcu_edit.tpl");
					}
					
			}else{
				$smarty->display("frmmcu_edit.tpl");
			}
			
        }
		
function MCUDeleteProses(){
		
  	    global $title,$db;
		$smarty = new Smarty;
 		$smarty->force_compile = true;
		//$smarty->debugging = true;
		$smarty->caching = true;
		$smarty->cache_lifetime = 120;
		$smarty->assign("title",$title);
		$smarty->assign("username",$_SESSION['username']);
		$smarty->assign("statuslogin",$_SESSION['statuslogin']);
		$smarty->assign("samping","21");
		$id = $_GET['id'];

		session_start();
			$kode = $_SESSION['kode'];
			
			$sql="DELETE FROM dat_keluarga where id='$id'";
			//echo $sql;
			$result = $db->Execute($sql);

	        if($result)
	        {
	            //cek data 
						//Query data 
							$sql="DELETE FROM dat_mcu where id='$id'";
			//echo $sql;
			$result = $db->Execute($sql);

	        if($result)
	        {
	            //cek data 
						//Query data 
							$sql_mcu ="SELECT * FROM dat_mcu where id_peg='$kode'";
							$result_mcu = $db -> Execute($sql_mcu);
							$rs_mcu = $result_mcu->RecordCount();
				
				        //melakukan proses pengecekan data 
							if($rs_organisasi > 0){
									echo "<script language=javascript>
	                    alert('Terima Kasih, berhasil menghapus data');
	                   window.location='employee.php?action=edit&id=$kode';
	                 </script>";
							}else{
								echo "<script language=javascript>
										alert('Terima Kasih, berhasil menghapus data');
										window.location='employee.php?action=edit&id=$kode';
									 </script>";
							}
				
				
	        }
	        else
	            echo "<script language=javascript>
	                    alert('Gagal menghapus data');
	                   window.location='employee.php?action=edit&id=$kode';
	                 </script>";
		} 
		} 
//**************************************************************************************************** End Data MCU


		function tingkat_opt($selected = '')
		{
		 	global $db; 

			$sqlpend     = "SELECT * FROM tab_pendidikan order by id_pen";
			$rsw = $db->Execute($sqlpend);
	        if (!$rsw->RecordCount())
	        {
	            $kosong = 'kosong';
	             $pend_id[] = $kosong;
	             $pend_list[] = $kosong;
	        }
	        else
	        {

	            while ($row = $rsw->FetchRow()){

						$selected_opt = '';
						if ($row['id_pen'] == $selected)
						{
							$selected_opt = 'selected=selected';
						}
							
						$tingkat_opt[] = array('id' => $row['id_pen'], 
											'selected'	=> $selected_opt,
											'nama' => $row['nama_pendidikan']);
	            }
	        }
		return $tingkat_opt;
		}
		

		function stskawin_opt($selected ='')
		{
		 	global $db; 

			$sqlgol     = "SELECT * FROM tab_stskawin order by id";
			$rsw = $db->Execute($sqlgol);
	        if (!$rsw->RecordCount())
	        {
	             $kosong = 'kosong';
	             $stskawin_id[] = $kosong;
	             $stskawin_list[] = $kosong;	        }
	        else
	        {

	            while ($row = $rsw->FetchRow()){

						$selected_opt = '';
						if ($row['id'] == $selected)
						{
							$selected_opt = 'selected=selected';
						}
							
						$stskawin_opt[] = array('id' => $row['id'], 
											'selected'	=> $selected_opt,
											'nama' => $row['stskawin']);
	            }
	       			
		}
		return $stskawin_opt;
		}

		function penddarat_opt($selected = '')
		{
		 	global $db; 

			$sqlpend     = "SELECT * FROM tab_pendidikan order by id_pen";
			$rsw = $db->Execute($sqlpend);
	        if (!$rsw->RecordCount())
	        {
	            $kosong = 'kosong';
	             $pend_id[] = $kosong;
	             $pend_list[] = $kosong;
	        }
	        else
	        {

	            while ($row = $rsw->FetchRow()){

						$selected_opt = '';
						if ($row['id_pen'] == $selected)
						{
							$selected_opt = 'selected=selected';
						}
							
						$penddarat_opt[] = array('id' => $row['id_pen'], 
											'selected'	=> $selected_opt,
											'nama' => $row['nama_pendidikan']);
	            }
	        }
		return $penddarat_opt;
		}

		function agama_opt($selected = '')
		{
		 	global $db; 

			$sqlBidang     = "select id, agama as nm_agama from tab_agama";
			$rsw = $db->Execute($sqlBidang);
	        if (!$rsw->RecordCount())
	        {
	             $kosong = 'kosong';
	             $id[] = $kosong;
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
							
						$agama_opt[] = array('id' => $row['id'], 
											'selected'	=> $selected_opt,
											'nama' => $row['nm_agama']);
	            }
	        }
	        
	        //print_r($bidang);

 			return $agama_opt;

		}


		function jabatan_opt($selected = '')
		{
		 	global $db; 
			
			$sqlBidang     = "SELECT * FROM tab_jabatan order by nama_jabatan";
			$rsw = $db->Execute($sqlBidang);
	        if (!$rsw->RecordCount())
	        {
	             $kosong = 'kosong';
	             $jabatan_id[] = $kosong;
	             $jabatan_list[] = $kosong;
	        }
	        else
	        {

	            while ($row = $rsw->FetchRow()){

						$selected_opt = '';
						if ($row['id_jbt'] == $selected)
						{
							$selected_opt = 'selected=selected';
						}
							
						$jabatan_opt[] = array('id' => $row['id_jbt'], 
											'selected'	=> $selected_opt,
											'nama' => $row['nama_jabatan']);
						//$wilayah = $row['id_wilayah'];					
	            }
	        }
	        
	        //print_r($wilayah);

 			return $jabatan_opt;
			//$smarty->assign("wilayah_name", $wilayah);
		}

		function divisi_opt($selected = '')
		{
		 	global $db; 

			$sqlBidang     = "SELECT * FROM tab_divisi order by id";
			$rsw = $db->Execute($sqlBidang);
	        if (!$rsw->RecordCount())
	        {
	             $kosong = 'kosong';
	             $divisi_id[] = $kosong;
	             $divisi_list[] = $kosong;
	        }
	        else
	        {

	            while ($row = $rsw->FetchRow()){

						$selected_opt = '';
						if ($row['id'] == $selected)
						{
							$selected_opt = 'selected=selected';
						}
							
						$divisi_opt[] = array('id' => $row['id'], 
											'selected'	=> $selected_opt,
											'nama' => $row['divisi']);
	            }
	        }
	        
	        //print_r($bidang);

 			return $divisi_opt;

		}

		function w_status_opt($selected = '')
		{
		 	global $db; 

			$sqlBidang     = "SELECT Work_status FROM tab_employee group BY Work_status";
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
						if ($row['Work_status'] == $selected)
						{
							$selected_opt = 'selected=selected';
						}
							
						$w_status_opt[] = array('id' => $row['Work_status'], 
											'selected'	=> $selected_opt,
											'nama' => $row['Work_status']);
	            }
	        }
	            return $w_status_opt;
	        }



	        function perusahaan_opt($selected ='')
		{
		 	global $db; 

			$sqlgol     = "SELECT * FROM tab_pilihperusahaan order by id";
			$rsw = $db->Execute($sqlgol);
	        if (!$rsw->RecordCount())
	        {
	             $kosong = 'kosong';
	             $perusahaan_id[] = $kosong;
	             $perusahaan_list[] = $kosong;
	        }
	        else
	        {

	            while ($row = $rsw->FetchRow()){

						$selected_opt = '';
						if ($row['id'] == $selected)
						{
							$selected_opt = 'selected=selected';
						}
							
						$perusahaan_opt[] = array('id' => $row['id'], 
											'selected'	=> $selected_opt,
											'nama' => $row['perusahaan']);
	            }
	           }	        
			return $perusahaan_opt;

		}


			function bisnisunit_opt($selected ='')
		{
		 	global $db; 

			$sqlgol     = "SELECT * FROM tab_bisnisunit order by id";
			$rsw = $db->Execute($sqlgol);
	        if (!$rsw->RecordCount())
	        {
	             $kosong = 'kosong';
	             $bisnisunit_id[] = $kosong;
	             $bisnisunit_list[] = $kosong;
	        }
	        else
	        {

	            while ($row = $rsw->FetchRow()){

						$selected_opt = '';
						if ($row['id'] == $selected)
						{
							$selected_opt = 'selected=selected';
						}
							
						$bisnisunit_opt[] = array('id' => $row['id'], 
											'selected'	=> $selected_opt,
											'nama' => $row['bisnisunit']);
	            }
	        }
	        
	        //print_r($stskawin);

 			return $bisnisunit_opt;

		}

		

    }
?>
