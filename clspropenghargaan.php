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
			
			$smarty->display("profile_penghargaan_add.tpl");
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
			$penghargaan = $_POST['penghargaan'];
			$pemberi_penghargaan = $_POST['pemberi_penghargaan'];
			$tgl_penghargaan = $_POST['tgl_penghargaan'];
			$ket = $_POST['ket'];
			
            
		$sql = "INSERT INTO dat_penghargaan
						(id, id_peg, penghargaan, tgl_penghargaan, pemberi_penghargaan, keterangan, Userinsert, tglinsert) 
						VALUES (null,'$idpeg','$penghargaan',STR_TO_DATE('$tgl_penghargaan','%d/%m/%Y'),'$pemberi_penghargaan','$ket','$_SESSION[username]',now())";
					
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
			
			$sql_penghargaan="SELECT id, id_peg, penghargaan, pemberi_penghargaan, date_format(tgl_penghargaan, '%d/%m/%Y') as tgl_penghargaan2, keterangan FROM dat_penghargaan where id='$id'";
			$result_penghargaan = $db -> Execute($sql_penghargaan);
			$rs_penghargaan = $result_penghargaan->FetchRow();
			$penghargaan = $rs_penghargaan['penghargaan'];
			
			//echo $sertifikat;
			$smarty->assign("penghargaan",$rs_penghargaan['penghargaan']);//
			$smarty->assign("pemberi_penghargaan",$rs_penghargaan['pemberi_penghargaan']);//
			$smarty->assign("tgl_penghargaan",$rs_penghargaan['tgl_penghargaan2']);//
			$smarty->assign("ket",$rs_penghargaan['keterangan']);//
			$smarty->assign("id",$id);//
			
			
			//$this -> status_opt_generate($status);
			
			$smarty->display("profile_penghargaan_edit.tpl");
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
			$penghargaan = $_POST['penghargaan'];
			$tgl_penghargaan = $_POST['tgl_penghargaan'];
			$pemberi_penghargaan = $_POST['pemberi_penghargaan'];
			$ket = $_POST['ket'];

			$smarty->assign("id", $id);
			$smarty->assign("idpeg", $idpeg);
			$smarty->assign("penghargaan", $penghargaan);
			$smarty->assign("tgl_penghargaan", $tgl_penghargaan);
			$smarty->assign("pemberi_penghargaan", $pemberi_penghargaan);
			$smarty->assign("ket", $ket);
			
			$sql = "UPDATE dat_penghargaan set 
						penghargaan='$penghargaan',
						tgl_penghargaan=STR_TO_DATE('$tgl_penghargaan', '%d/%m/%Y'),
						pemberi_penghargaan='$pemberi_penghargaan',
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
			
            
			$sql = "delete from dat_penghargaan where id='$id'";	

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
