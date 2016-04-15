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
			
			$smarty->display("profile_pengalaman_add.tpl");
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
			$perusahaan = $_POST['perusahaan'];
			$jabatan = $_POST['jabatan'];
			$deskripsi = $_POST['deskripsi'];
			$alamat = $_POST['alamat'];
			$tgl_mulai = $_POST['tgl_mulai'];
			$tgl_akhir = $_POST['tgl_akhir'];
            
		$sql="INSERT INTO dat_mutasi_jabatan 
						(id,id_peg,perusahaan,jabatan,deskripsi,alamat,tgl_mulai,tgl_akhir,Userinsert,tglinsert) 
						VALUES (null,'$idpeg','$perusahaan','$jabatan','$deskripsi','$alamat',STR_TO_DATE('$tgl_mulai','%d/%m/%Y'),STR_TO_DATE('$tgl_akhir','%d/%m/%Y'),'$_SESSION[username]',now())";
					
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
			$smarty->assign("idpeg",$idpeg);//
			
			$smarty->display("profile_pengalaman_edit.tpl");
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
			$perusahaan = $_POST['perusahaan'];
			$jabatan = $_POST['jabatan'];
			$deskripsi = $_POST['deskripsi'];
			$alamat = $_POST['alamat'];
			$tgl_mulai = $_POST['tgl_mulai'];
			$tgl_akhir = $_POST['tgl_akhir'];
			
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
			
            
			$sql = "delete from dat_mutasi_jabatan where id='$id'";	

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
