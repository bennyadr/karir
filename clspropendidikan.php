<?php
require ('libs/Smarty.class.php');
require ('config.php');

//require ('user_cek.php');
class profile {

		function Add()
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
		$smarty->assign("samping","2");



			$sqlc = "SELECT NIK,nama,nama_jabatan FROM tab_employee a
			left join tab_jabatan b on a.id_jbt = b.id_jbt
			WHERE a.id = '$_SESSION[sessionnik]'";       
		    $rsc = $db ->Execute($sqlc);
			//$data = $rsc->FetchRow();
			$data = $rsc->FetchRow();
			$nik = $data['NIK'];
			$nama = $data['nama'];
			$jabatan = $data['nama_jabatan'];
			
			$tingkat_opt = $this->tingkat_opt();
		$smarty->assign("tingkat_opt",$tingkat_opt);
			$smarty->assign("nik", $nik);
			$smarty->assign("nama", $nama);
			$smarty->assign("jabatan", $jabatan);
			
			$smarty->display("profile_pendidikan_add.tpl");
        }
		
		function Save()
		{
           global $title,$db;
			require ('user_cek.php');
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);

			$idpeg = $_POST['idpeg'];
			$tingkat = $_POST['tingkat'];
			$tempat = $_POST['tempat'];
			$jurusan = $_POST['jurusan'];
			$tahun_awal = $_POST['tahun_awal'];
			$tahun_akhir = $_POST['tahun_akhir'];
			$sekolah = $_POST['sekolah'];
			$gelar = $_POST['gelar'];
			$ipk = $_POST['ipk'];
			$ket = $_POST['ket'];
            
		$sql = "INSERT INTO dat_pendidikan (id,id_peg,tahun_awal,tahun_akhir,sekolah_univ,tempat,
			id_tingkat,ipk,jurusan,keterangan,Userinsert,tglinsert) 
				VALUES (null,'$idpeg','$tahun_awal','$tahun_akhir','$sekolah','$tempat','$tingkat',
					'$ipk','$jurusan','$ket','$_SESSION[username]',now())";
						

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
	                    window.location='profile.php?action=edit';
	                 </script>";
	        }
	        else
	            echo "<script language=javascript>
	                    alert('Gagal menyimpan data');
	                    window.location='profile.php?action=edit';
	                 </script>";
        }

		function Edit()
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
		$smarty->assign("samping","2");
			
			$id = $_GET['id'];
			
			$sqlc = "SELECT NIK,nama,nama_jabatan FROM tab_employee a
			left join tab_jabatan b on a.id_jbt = b.id_jbt
			WHERE a.id = '$_SESSION[sessionnik]'";       
		    $rsc = $db ->Execute($sqlc);
			//$data = $rsc->FetchRow();
			$data = $rsc->FetchRow();
			$nik = $data['NIK'];
			$nama = $data['nama'];
			$jabatan = $data['nama_jabatan'];
			
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
			$smarty->assign("idpeg",$idpeg);//
			
			$tingkat_opt = $this->tingkat_opt($rs_pendidikan['id_tingkat']);
			$smarty->assign("tingkat_opt",$tingkat_opt);
			
			$smarty->display("profile_pendidikan_edit.tpl");
        }
		
		function Update()
		{
            global $title,$db;
           require ('user_cek.php');
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);

			$id = $_POST['id'];
			$idpeg = $_POST['idpeg'];
			$tingkat = $_POST['tingkat'];
			$tempat = $_POST['tempat'];
			$jurusan = $_POST['jurusan'];
			$tahun_awal = $_POST['tahun_awal'];
			$tahun_akhir = $_POST['tahun_akhir'];
			$sekolah = $_POST['sekolah'];
			$ipk = $_POST['ipk'];
			$gelar = $_POST['gelar'];
			$ket = $_POST['ket'];
            
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

                if($result)
                	$inserted = 1;
                else
                	$inserted = 0;


	        if($inserted)
	        {
	            echo "<script language=javascript>
	                    alert('Terima Kasih, berhasil memperbaiki data');
	                    window.location='profile.php?action=edit';
	                 </script>";
	        }
	        else
	            echo "<script language=javascript>
	                    alert('Gagal memperbaiki data');
	                    window.location='profile.php?action=edit';
	                 </script>";
        }
		
		function Delete()
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
			//$nik = $_POST['nik'];
			
            
			$sql = "delete from dat_pendidikan where id='$id'";	

			//echo $sql;exit;
            $result = $db->Execute($sql);

                if($result)
                	$inserted = 1;
                else
                	$inserted = 0;


	        if($inserted)
	        {
	            echo "<script language=javascript>
	                    alert('Terima Kasih, berhasil menghapus data');
	                    window.location='profile.php?action=edit';
	                 </script>";
	        }
	        else
	            echo "<script language=javascript>
	                    alert('Gagal menghapus data');
	                    window.location='profile.php?action=edit';
	                 </script>";
        }
		
		
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
		
		
    }


?>
