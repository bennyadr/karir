<?php
require ('libs/Smarty.class.php');
require ('config.php');
require ('clsUtil.php');
//require ('user_cek.php');
class Upload
	{
        function Upload()
		{
			require_once "user_cek.php";
			$valid = 1;
			//$valid = Util::doCheckAuth(USR_PAGES);
			if($valid == 0){
				echo "<script language=javascript>
	                    alert('Anda tidak berhak mengakses halaman ini.');
	                    history.go(-1);
	                 </script>";
			}
		}

		function showUpload()
		{
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
		$id=$_GET['id'];
			
			$smarty->assign("id", $id);

		$sqlUser     = "SELECT a.id, a.NIK as nip, nama as name, divisi,pathktp,pathnikah,pathnpwp,pathbpjs,pathbpjssehat,pathreke,pathkk, tlahir, date_format( tglahir2, '%d/%m/%Y' ) AS tglahir, date_format( tgl_masuk, '%d/%m/%Y' ) AS tgl_masuk2, case when tgl_tidakaktif ='0000-00-00' then null else date_format( tgl_tidakaktif, '%d/%m/%Y' ) end AS tgl_keluar2,tab_stskawin.stskawin,telpon_kantor, jamsostek, npwp, bank, no_rek, case when status_p='T' then 'Tidak Aktif' else '' end as status_p, keterangan, telpon_rumah,a.sex, agama, address, alamat_sementara, hp, nama_jabatan, round(datediff(now(), a.tglahir2)/365,0) as usia, round(datediff(now(), a.tgl_masuk)/365,0) as MasaKerja, a.pathfoto,a.gaji_lumpsum,nama_pendidikan FROM tab_employee a
			LEFT JOIN tab_jabatan ON a.id_jbt = tab_jabatan.id_jbt
			LEFT JOIN tab_agama ON a.id_agama = tab_agama.id 
			LEFT JOIN tab_stskawin ON a.id_stskawin = tab_stskawin.id
			LEFT JOIN tab_divisi ON a.id_divisi = tab_divisi.id
			LEFT JOIN tab_pendidikan on a.pend_darat= tab_pendidikan.id_pen where a.id='$id'";
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
					    'name'=>$row['name'],
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
			
			$smarty->display("list_upload.tpl");
        }

        function showUploadOff()
		{
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
		$id=$_GET['id'];
			
			$smarty->assign("id", $id);
		$sql           = "SELECT a.id, a.NIK as nip, nama as name, divisi,pathktp,pathnikah,pathnpwp,pathbpjs,pathbpjssehat,pathreke,pathkk, tlahir, date_format( tglahir2, '%d/%m/%Y' ) AS tglahir, date_format( tgl_masuk, '%d/%m/%Y' ) AS tgl_masuk2, case when tgl_tidakaktif ='0000-00-00' then null else date_format( tgl_tidakaktif, '%d/%m/%Y' ) end AS tgl_keluar2,tab_stskawin.stskawin,telpon_kantor, jamsostek, npwp, bank, no_rek, case when status_p='T' then 'Tidak Aktif' else '' end as status_p, keterangan, telpon_rumah,a.sex, agama, address, alamat_sementara, hp, nama_jabatan, round(datediff(now(), a.tglahir2)/365,0) as usia, round(datediff(now(), a.tgl_masuk)/365,0) as MasaKerja, a.pathfoto,a.gaji_lumpsum,nama_pendidikan FROM tab_employee a 
			LEFT JOIN tab_jabatan ON a.id_jbt = tab_jabatan.id_jbt 
			LEFT JOIN tab_agama ON a.id_agama = tab_agama.id 
			LEFT JOIN tab_stskawin ON a.id_stskawin = tab_stskawin.id
			LEFT JOIN tab_divisi ON a.id_divisi = tab_divisi.id
			LEFT JOIN tab_pendidikan on a.pend_darat= tab_pendidikan.id_pen
			where nama<>'admin' and status_p = 'T' and a.id='$id'";
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
			
			$smarty->display("list_upload.tpl");
        }


        function showUploadKTPForm()
		{
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


			$id=$_GET['idEmp'];
			$kode=$_GET['kode'];
			
			$smarty->assign("id", $id);
			$smarty->assign("kode", $kode);
			
			$smarty->display("upload_ktp.tpl");
        }

        function KTPProses()
		{

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
			
			$pathfilename =$_FILES['pathktp']['name']; 
			$pathfiletype =$_FILES['pathktp']['type']; 
			$pathfilesize =$_FILES['pathktp']['size']; 
			
			if(!empty($pathfilename)){
				//echo 1;
				//melakukan delete image
				$sqlc="SELECT pathktp FROM tab_employee where NIK = '$kode'";
				$resultc = $db -> Execute($sqlc);
				$rsc = $resultc->FetchRow();
				if(!empty($rsc[0])){
				unlink("$rsc[0]");
				}
				}
			
			if(!empty($pathfilename)){
			$pathfilelink ='dokumen'.'/'.$kode.'_KTP_'.$pathfilename;
			}
					//melakukan proses update
					if($pathfilesize > 500000){
					echo "<script language=javascript>
	                    alert('Gagal memperbaiki data, File Upload > 500 KB');
	                    </script>";
					 $smarty->display("upload_ktp.tpl");
					}else{
					//window.location='employee.php?mod=edit&id=$kode';
					//**************************melakukan aksi upload gambar
					move_uploaded_file($_FILES['pathktp']['tmp_name'],$pathfilelink);
				
				$sql = "UPDATE tab_employee SET pathktp = '$pathfilelink' where nik ='$kode'";
				//echo $sql;
				$result = $db->Execute($sql);


	        if($result)
	        {
	            echo "<script language=javascript>
	                    alert('Terima Kasih, berhasil mengupload data');
	                    window.location='employee.php';
	                 </script>";
	        }
	        else{
	            echo "<script language=javascript>
	                    alert('Gagal mengupload data');
	                    history.go(-1);
	                 </script>";
			}
			}
			//$this->display("user_edit.html");
        }
    

		function NPWPForm()
		{
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

	        $id=$_GET['idEmp'];
			$kode=$_GET['kode'];
			
			$smarty->assign("id", $id);
			$smarty->assign("kode", $kode);
			
			$smarty->display("upload_npwp.tpl");
        }

        function NPWPProses()
		{

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
			
			
			$pathfilename =$_FILES['pathnpwp']['name']; 
			$pathfiletype =$_FILES['pathnpwp']['type']; 
			$pathfilesize =$_FILES['pathnpwp']['size']; 
			
			if(!empty($pathfilename)){
				//echo 1;
				//melakukan delete image
				$sqlc="SELECT pathnpwp FROM tab_employee where NIK = '$kode'";
				$resultc = $db -> Execute($sqlc);
				$rsc = $resultc->FetchRow();
				if(!empty($rsc[0])){
				unlink("$rsc[0]");
				}
				}
			
			if(!empty($pathfilename)){
			$pathfilelink ='dokumen'.'/'.$kode.'_NPWP_'.$pathfilename;
			}
					//melakukan proses update
					if($pathfilesize > 500000){
					echo "<script language=javascript>
	                    alert('Gagal memperbaiki data, File Upload > 500 KB');
	                    </script>";
					 $smarty->display("upload_npwp.tpl");
					}else{
					//window.location='employee.php?mod=edit&id=$kode';
					//**************************melakukan aksi upload gambar
					move_uploaded_file($_FILES['pathnpwp']['tmp_name'],$pathfilelink);
				
				$sql = "UPDATE tab_employee SET pathnpwp = '$pathfilelink' where nik ='$kode'";
				//echo $sql;
				$result = $db->Execute($sql);


	        if($result)
	        {
	            echo "<script language=javascript>
	                    alert('Terima Kasih, berhasil mengupload data');
	                    window.location='employee.php';
	                 </script>";
	        }
	        else{
	            echo "<script language=javascript>
	                    alert('Gagal mengupload data');
	                    history.go(-1);
	                 </script>";
			}
			}
			//$this->display("user_edit.html");
        }

        function showUploadBPJSForm()
		{
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

	        $id=$_GET['idEmp'];
			$kode=$_GET['kode'];
			
			$smarty->assign("id", $id);
			$smarty->assign("kode", $kode);
			
			$smarty->display("upload_bpjs.tpl");
        }

		function BPJSProses()
		{

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
			
			$pathfilename =$_FILES['pathbpjs']['name']; 
			$pathfiletype =$_FILES['pathbpjs']['type']; 
			$pathfilesize =$_FILES['pathbpjs']['size']; 
			
			if(!empty($pathfilename)){
				//echo 1;
				//melakukan delete image
				$sqlc="SELECT pathbpjs FROM tab_employee where NIK = '$kode'";
				$resultc = $db -> Execute($sqlc);
				$rsc = $resultc->FetchRow();
				if(!empty($rsc[0])){
				unlink("$rsc[0]");
				}
				}
			
			if(!empty($pathfilename)){
			$pathfilelink ='dokumen'.'/'.$kode.'_BPJS_'.$pathfilename;
			}
					//melakukan proses update
					if($pathfilesize > 500000){
					echo "<script language=javascript>
	                    alert('Gagal memperbaiki data, File Upload > 500 KB');
	                    </script>";
					 $smarty->display("upload_bpjs.tpl");
					}else{
					//window.location='employee.php?mod=edit&id=$kode';
					//**************************melakukan aksi upload gambar
					move_uploaded_file($_FILES['pathbpjs']['tmp_name'],$pathfilelink);
				
				$sql = "UPDATE tab_employee SET pathbpjs = '$pathfilelink' where nik ='$kode'";
				//echo $sql;
				$result = $db->Execute($sql);


	        if($result)
	        {
	            echo "<script language=javascript>
	                    alert('Terima Kasih, berhasil mengupload data');
	                    window.location='employee.php';
	                 </script>";
	        }
	        else{
	            echo "<script language=javascript>
	                    alert('Gagal mengupload data');
	                    history.go(-1);
	                 </script>";
			}
			}
			//$this->display("user_edit.html");
        }
		// end BPJS NAKER

		function showUploadBPJSSehatForm()
		{

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
	        $id=$_GET['idEmp'];
			$kode=$_GET['kode'];
			
			$smarty->assign("id", $id);
			$smarty->assign("kode", $kode);
			
			$smarty->display("upload_bpjssehat.tpl");
        }

		function BPJSSehatProses()
		{

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
			

			$pathfilename =$_FILES['pathbpjssehat']['name']; 
			$pathfiletype =$_FILES['pathbpjssehat']['type']; 
			$pathfilesize =$_FILES['pathbpjssehat']['size']; 
			
			if(!empty($pathfilename)){
				//echo 1;
				//melakukan delete image
				$sqlc="SELECT pathbpjssehat FROM tab_employee where NIK = '$kode'";
				$resultc = $db -> Execute($sqlc);
				$rsc = $resultc->FetchRow();
				if(!empty($rsc[0])){
				unlink("$rsc[0]");
				}
				}
			
			if(!empty($pathfilename)){
			$pathfilelink ='dokumen'.'/'.$kode.'_BPJS_SEHAT_'.$pathfilename;
			}
					//melakukan proses update
					if($pathfilesize > 500000){
					echo "<script language=javascript>
	                    alert('Gagal memperbaiki data, File Upload > 500 KB');
	                    </script>";
					 $smarty->display("uploadbpjssehat.tpl");
					}else{
					//window.location='employee.php?mod=edit&id=$kode';
					//**************************melakukan aksi upload gambar
					move_uploaded_file($_FILES['pathbpjssehat']['tmp_name'],$pathfilelink);
				
				$sql = "UPDATE tab_employee SET pathbpjssehat = '$pathfilelink' where nik ='$kode'";
				//echo $sql;
				$result = $db->Execute($sql);


	        if($result)
	        {
	            echo "<script language=javascript>
	                    alert('Terima Kasih, berhasil mengupload data');
	                    window.location='employee.php';
	                 </script>";
	        }
	        else{
	            echo "<script language=javascript>
	                    alert('Gagal mengupload data');
	                    history.go(-1);
	                 </script>";
			}
			}
			//$this->display("user_edit.html");
        }
		// end BPJS SEHAT
		// dokumen NIKAH
		function showUploadNikahForm()
		{

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

	        $id=$_GET['idEmp'];
			$kode=$_GET['kode'];
			
			$smarty->assign("id", $id);
			$smarty->assign("kode", $kode);
			
			$smarty->display("upload_nikah.tpl");
        }

		function NikahProses()
		{

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
				
			$pathfilename =$_FILES['pathnikah']['name']; 
			$pathfiletype =$_FILES['pathnikah']['type']; 
			$pathfilesize =$_FILES['pathnikah']['size']; 
			
			if(!empty($pathfilename)){
				//echo 1;
				//melakukan delete image
				$sqlc="SELECT pathnikah FROM tab_employee where NIK = '$kode'";
				$resultc = $db -> Execute($sqlc);
				$rsc = $resultc->FetchRow();
				if(!empty($rsc[0])){
				unlink("$rsc[0]");
				}
				}
			
			if(!empty($pathfilename)){
			$pathfilelink ='dokumen'.'/'.$kode.'_NIKAH_'.$pathfilename;
			}
					//melakukan proses update
					if($pathfilesize > 500000){
					echo "<script language=javascript>
	                    alert('Gagal memperbaiki data, File Upload > 500 KB');
	                    </script>";
					 $smarty->display("upload_nikah.tpl");
					}else{
					//window.location='employee.php?mod=edit&id=$kode';
					//**************************melakukan aksi upload gambar
					move_uploaded_file($_FILES['pathnikah']['tmp_name'],$pathfilelink);
				
				$sql = "UPDATE tab_employee SET pathnikah = '$pathfilelink' where nik ='$kode'";
				//echo $sql;
				$result = $db->Execute($sql);


	        if($result)
	        {
	            echo "<script language=javascript>
	                    alert('Terima Kasih, berhasil mengupload data');
	                    window.location='employee.php';
	                 </script>";
	        }
	        else{
	            echo "<script language=javascript>
	                    alert('Gagal mengupload data');
	                    history.go(-1);
	                 </script>";
			}
			}
			//$this->display("user_edit.html");
        }
		// end NIKAH
		
		// dokumen KK
		function showUploadKKForm()
		{

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

	        $id=$_GET['idEmp'];
			$kode=$_GET['kode'];
			
			$smarty->assign("id", $id);
			$smarty->assign("kode", $kode);
			
			$smarty->display("upload_kk.tpl");
        }

		function KKProses()
		{

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
			
			
			$pathfilename =$_FILES['pathkk']['name']; 
			$pathfiletype =$_FILES['pathkk']['type']; 
			$pathfilesize =$_FILES['pathkk']['size']; 
			
			if(!empty($pathfilename)){
				//echo 1;
				//melakukan delete image
				$sqlc="SELECT pathkk FROM tab_employee where NIK = '$kode'";
				$resultc = $db -> Execute($sqlc);
				$rsc = $resultc->FetchRow();
				if(!empty($rsc[0])){
				unlink("$rsc[0]");
				}
				}
			
			if(!empty($pathfilename)){
			$pathfilelink ='dokumen'.'/'.$kode.'_KK_'.$pathfilename;
			}
					//melakukan proses update
					if($pathfilesize > 500000){
					echo "<script language=javascript>
	                    alert('Gagal memperbaiki data, File Upload > 500 KB');
	                    </script>";
					 $smarty->display("upload_kk.tpl");
					}else{
					//window.location='employee.php?mod=edit&id=$kode';
					//**************************melakukan aksi upload gambar
					move_uploaded_file($_FILES['pathkk']['tmp_name'],$pathfilelink);
				
				$sql = "UPDATE tab_employee SET pathkk = '$pathfilelink' where nik ='$kode'";
				//echo $sql;
				$result = $db->Execute($sql);


	        if($result)
	        {
	            echo "<script language=javascript>
	                    alert('Terima Kasih, berhasil mengupload data');
	                    window.location='employee.php';
	                 </script>";
	        }
	        else{
	            echo "<script language=javascript>
	                    alert('Gagal mengupload data');
	                    history.go(-1);
	                 </script>";
			}
			}
			//$this->display("user_edit.html");
        }
		// end KK
		
		// dokumen Rekening
		function showUploadRekeForm()
		{
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
	        $id=$_GET['idEmp'];
			$kode=$_GET['kode'];
			
			$smarty->assign("id", $id);
			$smarty->assign("kode", $kode);
			
			$smarty->display("upload_rekening.tpl");
        }

		function RekeProses()
		{

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

			
			$pathfilename =$_FILES['pathreke']['name']; 
			$pathfiletype =$_FILES['pathreke']['type']; 
			$pathfilesize =$_FILES['pathreke']['size']; 
			
			if(!empty($pathfilename)){
				//echo 1;
				//melakukan delete image
				$sqlc="SELECT pathreke FROM tab_employee where NIK = '$kode'";
				$resultc = $db -> Execute($sqlc);
				$rsc = $resultc->FetchRow();
				if(!empty($rsc[0])){
				unlink("$rsc[0]");
				}
				}
			
			if(!empty($pathfilename)){
			$pathfilelink ='dokumen'.'/'.$kode.'_REKE_'.$pathfilename;
			}
					//melakukan proses update
					if($pathfilesize > 500000){
					echo "<script language=javascript>
	                    alert('Gagal memperbaiki data, File Upload > 500 KB');
	                    </script>";
					 $smarty->display("upload_rekening.tpl");
					}else{
					//window.location='employee.php?mod=edit&id=$kode';
					//**************************melakukan aksi upload gambar
					move_uploaded_file($_FILES['pathreke']['tmp_name'],$pathfilelink);
				
				$sql = "UPDATE tab_employee SET pathreke = '$pathfilelink' where nik ='$kode'";
				//echo $sql;
				$result = $db->Execute($sql);


	        if($result)
	        {
	            echo "<script language=javascript>
	                    alert('Terima Kasih, berhasil mengupload data');
	                    window.location='employee.php';
	                 </script>";
	        }
	        else{
	            echo "<script language=javascript>
	                    alert('Gagal mengupload data');
	                    history.go(-1);
	                 </script>";
			}
			}
			//$this->display("user_edit.html");
        }
		// end Rekening
}
?>