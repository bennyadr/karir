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
			
			$smarty->display("profile_kesehatan_add.tpl");
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
			$penyakit = $_POST['penyakit'];
			$tahun = $_POST['tahun'];
			$ket = $_POST['ket'];
			
            
		$sql = "INSERT INTO dat_kesehatan
						(id, id_peg, penyakit, tahun, keterangan, Userinsert, tglinsert) 
						VALUES (null,'$idpeg','$penyakit','$tahun','$ket','$_SESSION[username]',now())";

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
			
			$sql_kesehatan="SELECT id, id_peg, penyakit, tahun, keterangan FROM dat_kesehatan where id='$id'";
			$result_kesehatan = $db -> Execute($sql_kesehatan);
			$rs_kesehatan = $result_kesehatan->FetchRow();
			
			//echo $sertifikat;
			
			$smarty->assign("penyakit",$rs_kesehatan['penyakit']);//
			$smarty->assign("tahun",$rs_kesehatan['tahun']);//
			$smarty->assign("ket",$rs_kesehatan['keterangan']);//
			$smarty->assign("id",$id);//
			$smarty->assign("idpeg",$idpeg);
			
			$smarty->display("profile_kesehatan_edit.tpl");
        }
		
		function Update()
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


			$id = $_POST['id'];
			$idpeg = $_POST['idpeg'];
			$penyakit = $_POST['penyakit'];
			$tahun = $_POST['tahun'];
			$ket = $_POST['ket'];

			$smarty->assign("id", $id);
			$smarty->assign("idpeg", $idpeg);
			$smarty->assign("penyakit", $penyakit);
			$smarty->assign("tahun", $tahun);
			$smarty->assign("ket", $ket);
			
			$sql="UPDATE dat_kesehatan set 
						penyakit='$penyakit',
						tahun='$tahun', 
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
			
            
			$sql = "delete from dat_kesehatan where id='$id'";	

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
