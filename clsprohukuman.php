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
			
			$smarty->display("profile_hukuman_add.tpl");
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
			$hukuman = $_POST['hukuman'];
			$pemberi_hukuman = $_POST['pemberi_hukuman'];
			$tgl_sanksi = $_POST['tgl_sanksi'];
			$no_sanksi = $_POST['no_sanksi'];
			$ket = $_POST['ket'];
			
            
		$sql = "INSERT INTO dat_sanksi
						(id,id_peg,hukuman, tgl_sanksi, no_sanksi, pemberi_hukuman, keterangan, Userinsert, tglinsert) 
						VALUES (null,'$idpeg','$hukuman',STR_TO_DATE('$tgl_sanksi','%d/%m/%Y'),'$no_sanksi','$pemberi_hukuman','$ket','$_SESSION[username]',now())";
					

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
			WHERE NIK = '$_SESSION[sessionnik]'";       
		    $rsc = $db ->Execute($sqlc);
			//$data = $rsc->FetchRow();
			$data = $rsc->FetchRow();
			$idpeg = $data['id'];
			$nik = $data['NIK'];
			$nama = $data['nama'];
			$jabatan = $data['nama_jabatan'];
			
			$sql_hukuman = "SELECT *,date_format(tgl_sanksi,'%d/%m/%Y') as tglsanksi FROM dat_sanksi WHERE id = '$id'";       
			$result_hukuman = $db -> Execute($sql_hukuman);
			$rs_hukuman = $result_hukuman->FetchRow();
			$hukuman = $rs_hukuman['hukuman'];

			$smarty->assign("hukuman",$rs_hukuman['hukuman']);//
			$smarty->assign("pemberi_hukuman",$rs_hukuman['pemberi_hukuman']);//
			$smarty->assign("tgl_sanksi",$rs_hukuman['tgl_sanksi']);//
			$smarty->assign("no_sanksi",$rs_hukuman['no_sanksi']);//
			$smarty->assign("ket",$rs_hukuman['keterangan']);//
			$smarty->assign("id",$id);//
			$smarty->assign("idpeg",$idpeg);//
			
			//$this -> status_opt_generate($status);
			
			$smarty->display("profile_hukuman_edit.tpl");
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

			global $db;
			$idpeg = $_POST['idpeg'];
			$id = $_POST['id'];
			$hukuman = $_POST['hukuman'];
			$tgl_sanksi = $_POST['tgl_sanksi'];
			$no_sanksi = $_POST['no_sanksi'];
			$pemberi_hukuman = $_POST['pemberi_hukuman'];
			$ket = $_POST['ket'];

			$smarty->assign("idpeg", $idpeg);
			$smarty->assign("id", $id);
			$smarty->assign("hukuman", $hukuman);
			$smarty->assign("tgl_sanksi", $tgl_sanksi);
			$smarty->assign("no_sanksi", $no_sanksi);
			$smarty->assign("pemberi_hukuman", $pemberi_hukuman);
			$smarty->assign("ket", $ket);
			
			$sql = "UPDATE dat_mcu set 
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
			require ('user_cek.php');
          global $title,$db;
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);
			$id = $_GET['id'];
			$sqlc = "SELECT * FROM tab_employee WHERE id = '$id";       
		    $rsc = $db ->Execute($sqlc);
			$data = $rsc->FetchRow();
			$idpeg = $data['id'];
			
            
			$sql = "delete from dat_sanksi where id='$id'";	

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

