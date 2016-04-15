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
			
			$smarty->display("profile_kursus_add.tpl");
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
			$kursus = $_POST['kursus'];
			$instansi = $_POST['instansi'];
			$kota = $_POST['kota'];
			$tahun = $_POST['tahun'];
			$sertifikat = $_POST['sertifikat'];
			$no_sertifikat = $_POST['no_sertifikat'];
			$ket = $_POST['ket'];
            
		$sql = "INSERT INTO dat_kursus 
					(id,id_peg,kursus,instansi,kota,tahun,sertifikat,no_sertifikat,keterangan,Userinsert,tglinsert) 
					VALUES (null,'$idpeg','$kursus','$instansi','$kota','$tahun','$sertifikat','$no_sertifikat','$ket','$_SESSION[username]',now())";
					
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
			$smarty->assign("idpeg",$idpeg);//
			
			$smarty->display("profile_kursus_edit.tpl");
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
			$kursus = $_POST['kursus'];
			$instansi = $_POST['instansi'];
			$kota = $_POST['kota'];
			$tahun = $_POST['tahun'];
			$sertifikat = $_POST['sertifikat'];
			$no_sertifikat = $_POST['no_sertifikat'];
			$ket = $_POST['ket'];
			
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
			
            
			$sql = "delete from dat_kursus where id='$id'";	

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
