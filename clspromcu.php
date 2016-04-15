<?php
require ('libs/Smarty.class.php');
require ('config.php');

//require ('user_cek.php');
class profile {

	    function Add() {
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

		$sqlc = "SELECT a.id,NIK,nama,nama_jabatan FROM tab_employee a
			left join tab_jabatan b on a.id_jbt = b.id_jbt
			WHERE a.id = '$_SESSION[sessionnik]'";       
		    $rsc = $db ->Execute($sqlc);
			//$data = $rsc->FetchRow();
			$data = $rsc->FetchRow();
			$idpeg = $data['id'];
			$nik = $data['NIK'];
			$nama = $data['nama'];
			$jabatan = $data['nama_jabatan'];
			
			$smarty->assign("idpeg", $idpeg);
			$smarty->assign("nik", $nik);
			$smarty->assign("nama", $nama);
			$smarty->assign("jabatan", $jabatan);
			
			//$this -> status_opt_generate();
			
			$smarty->display("profile_mcu_add.tpl");
        }
		
		function Save()
		{
           // $valid = Util::doCheckAuth(DT5_PAGES);
			global $title,$db;
			require ('user_cek.php');
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);

			$idpeg = $_POST['idpeg'];
			$tgl_pemeriksaan = $_POST['tgl_pemeriksaan'];
			$hasil = $_POST['hasil'];
			$sertifikat = $_POST['sertifikat'];
			$no_sertifikat = $_POST['no_sertifikat'];
			$tenaga_medis = $_POST['tenaga_medis'];
			$catatan = $_POST['catatan'];
			$tgl_dari = $_POST['tgl_dari'];
			$tgl_sampai = $_POST['tgl_sampai'];
			$ket = $_POST['ket'];
			
            
		$sql = "INSERT INTO dat_mcu
						(id, id_peg, tgl_pemeriksaan, hasil_pemeriksaan, sertifikat, no_sertifikat, tenaga_medis, catatan, tgl_dari, tgl_sampai, keterangan, Userinsert, tglinsert) 
						VALUES (null,'$idpeg',STR_TO_DATE('$tgl_pemeriksaan','%d/%m/%Y'), '$hasil', '$sertifikat', '$no_sertifikat', '$tenaga_medis', '$catatan', STR_TO_DATE('$tgl_dari','%d/%m/%Y'),STR_TO_DATE('$tgl_sampai','%d/%m/%Y'),'$ket','$_SESSION[username]',now())";
					

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
			
			$sqlc = "SELECT a.id,NIK,nama,nama_jabatan FROM tab_employee a
			left join tab_jabatan b on a.id_jbt = b.id_jbt
			WHERE a.id = '$_SESSION[sessionnik]'";       
		    $rsc = $db ->Execute($sqlc);
			//$data = $rsc->FetchRow();
			$data = $rsc->FetchRow();
			$idpeg = $data['id'];
			$nik = $data['NIK'];
			$nama = $data['nama'];
			$jabatan = $data['nama_jabatan'];
			
			$sql = "SELECT id, id_peg, date_format(tgl_pemeriksaan, '%d/%m/%Y') as tgl_pemeriksaan2, hasil_pemeriksaan, sertifikat, no_sertifikat, tenaga_medis, 
			catatan, date_format(tgl_dari, '%d/%m/%Y') as tgl_dari2, date_format(tgl_sampai, '%d/%m/%Y') as tgl_sampai2, keterangan FROM dat_mcu where id='$id'";
			       
			$rs = $db ->Execute($sql);
			$datan = $rs->FetchRow();
			//
			$hasil = $datan['hasil_pemeriksaan'];
			$tmedis = $datan['tenaga_medis'];
			$catatan = $datan['catatan'];

			$smarty->assign("id", $id);
			$smarty->assign("idpeg", $idpeg);
			if ($datan['tgl_pemeriksaan2'] == '00/00/0000')
			{$tgl_pemeriksaan = '';}	
			else
			{$tgl_pemeriksaan = $datan['tgl_pemeriksaan2'];}

			$smarty->assign("tgl_pemeriksaan",$tgl_pemeriksaan);
			
			if ($datan['tgl_dari2'] == '00/00/0000')
			{$tgl_dari = '';}	
			else
			{$tgl_dari = $datan['tgl_dari2'];}

			$smarty->assign("tgl_dari",$tgl_dari);
			
			if ($datan['tgl_sampai2'] == '00/00/0000')
			{$tgl_sampai = '';}	
			else
			{$tgl_sampai = $datan['tgl_sampai2'];}


			$smarty->assign("tgl_sampai",$tgl_sampai);
			$smarty->assign("sertifikat",$datan['sertifikat']);//
			$smarty->assign("no_sertifikat",$datan['no_sertifikat']);//
			$smarty->assign("hasil",$datan['hasil_pemeriksaan']);//
			$smarty->assign("tenaga_medis",$datan['tenaga_medis']);//
			$smarty->assign("catatan",$datan['catatan']);//
			$smarty->assign("ket",$datan['keterangan']);//
			
			//$this -> status_opt_generate($status);
			
			$smarty->display("profile_mcu_edit.tpl");
        }
		
		function Update()
		{
           // $valid = Util::doCheckAuth(DT5_PAGES);
			$valid = 1;
			if($valid == 0){
				echo "<script language=javascript>
	                    alert('Anda tidak berhak mengakses halaman ini.');
	                    history.go(-1);
	                 </script>";
	            exit();
			}
			
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
			$smarty->assign("idpeg", $idpeg);
			$smarty->assign("tgl_pemeriksaan", $tgl_pemeriksaan);
			$smarty->assign("hasil", $hasil);
			$smarty->assign("sertifikat", $sertifikat);
			$smarty->assign("no_sertifikat", $no_sertifikat);
			$smarty->assign("tenaga_medis", $tenaga_medis);
			$smarty->assign("catatan", $catatan);
			$smarty->assign("tgl_dari", $tgl_dari);
			$smarty->assign("tgl_sampai", $tgl_sampai);
			$smarty->assign("ket", $ket);

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

			//echo $sql;exit;
               
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
           // $valid = Util::doCheckAuth(DT5_PAGES);
			require ('user_cek.php');
          global $title,$db;
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);
			$id = $_GET['id'];

			$sqlc = "SELECT * FROM tab_employee WHERE NIK = '$_SESSION[sessionnik]'";       
		    $rsc = $db ->Execute($sqlc);
			$data = $rsc->FetchRow();
			$idpeg = $data['id'];
			
            
			$sql = "delete from dat_mcu where id='$id'";	

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
		
				
    }


?>
