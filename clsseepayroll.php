<?php
require ('libs/Smarty.class.php');
require ('config.php');
//require ('user_cek.php');
	class seepay 
	{
       function showSeePay()
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
		$smarty->assign("samping","4");

			$sqlc = "SELECT a.id,NIK,nama,nama_jabatan FROM tab_employee a
			left join tab_jabatan b on a.id_jbt = b.id_jbt
			WHERE a.id = '$_SESSION[sessionnik]'";       
		    $rsc = $db -> execute($sqlc);
			$data = $rsc->FetchRow();
			$nik = $data['NIK'];
			$nama = $data['nama'];
            $jabatan = $data['nama_jabatan'];
			
			$sql = "SELECT case when left(a.periode,2)='01' then concat('Januari')
							when left(a.periode,2)='02' then concat('Februari')
							when left(a.periode,2)='03' then concat('Maret')
							when left(a.periode,2)='04' then concat('April')
							when left(a.periode,2)='05' then concat('Mei')
							when left(a.periode,2)='06' then concat('Juni')
							when left(a.periode,2)='07' then concat('Juli')
							when left(a.periode,2)='08' then concat('Agustus')
							when left(a.periode,2)='09' then concat('September')
							when left(a.periode,2)='10' then concat('Oktober')
							when left(a.periode,2)='11' then concat('Nopember')
							when left(a.periode,2)='12' then concat('Desember') end as bulan,
							b.id,b.NIK, b.nama, a.*, c.nama_jabatan FROM vw_gajiok a
							left join tab_employee b on b.NIK=a.NIK
							left join tab_jabatan c on b.id_jbt=c.id_jbt
								where b.id = '$_SESSION[sessionnik]' order by a.periode desc";       
			
		    $rs = $db -> execute($sql);
	  
	        if (!$rs->RecordCount())
	        {
	             $kosong = 'kosong';
	             $pos_list[] = array(
	                                'no'=>$kosong,
	                                'bulan'=>$kosong,
									'periode'=>$kosong,
									'thp'=>$kosong
	                                );
	        }
	        else
	        {
	            $no = 0;
	            while ($row = $rs->FetchRow()){
	             ++$no;
	             $pos_list[] = array(
	                                'no'=>$no,
									'nik'=>$row['NIK'],
	                                'bulan'=>$row['bulan'],
									'periode'=>$row['periode'],
									'thp'=>number_format($row['thpok'],0)
	                                );
	            }
				$nomor = $no;
				$i = $no;
	        }

	        $smarty->assign("pos", $pos_list);
			$smarty->assign("nik", $nik);
			$smarty->assign("nama", $nama);
			$smarty->assign("jabatan", $jabatan);
			
			$smarty->display("seepayroll.tpl");
        }

		function Proses()
		{
			global $title,$db;
			include "fn/fn_str.php";
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);

			$lokasi_file = $_FILES['smap']['tmp_name'];
			$nama_file   = $_FILES['smap']['name'];
			$xls = substr($nama_file, -3, 3);
			$id=$_POST[id];

			if(!empty($lokasi_file)){
				
				if($xls != 'xls')
				{
				echo "<script language=javascript>
						alert('File yang Anda masukkan bukan XLS');
						window.location='uploaddata.php';
					 </script>";
				}else{
				
			// membaca file excel yang diupload
			$data = new Spreadsheet_Excel_Reader($_FILES['smap']['tmp_name']);

			// membaca jumlah baris dari data excel
			$baris = $data->rowcount($sheet_index=0);

			// nilai awal counter untuk jumlah data yang sukses dan yang gagal diimport
			$sukses = 0;
			$gagal = 0;
			$sukses2 = 0;
			$gagal2 = 0;

			// import data excel mulai baris ke-2 (karena baris pertama adalah nama kolom)
			for ($i=2; $i<=$baris; $i++)
			{
			// membaca data nip (kolom ke-2)
			$periode = mysql_real_escape_string($data->val($i, 2));
			$nik = mysql_real_escape_string($data->val($i, 3));
			$jhadir = $data->val($i, 4);
			$thadir = $data->val($i, 5);
			$tjabatan = $data->val($i, 6);
			$transmeal = $data->val($i, 7);
			$tlain = $data->val($i, 8);
			$kettunjlain = $data->val($i, 9);
			$pph21 = $data->val($i, 10);
			$jht = $data->val($i, 11);
			$pinjaman = $data->val($i, 12);
			$potlain = $data->val($i, 13);
			$ketpotlain = $data->val($i, 14);
  
  
			// setelah data dibaca, sisipkan ke dalam tabel temp soft kompetensi  \\  \\ 
			$query = "insert into temp_pendpot (id,periode,nik,jhadir,tunj_hadir,tunj_jabatan,trans_meal,tunj_lain,ket_tunjlain,pph21,jht,pinjaman,pot_lain,ket_potlain,timein) 
			values (null,'$periode','$nik','$jhadir','$thadir','$tjabatan','$transmeal','$tlain','$kettunjlain','$pph21','$jht','$pinjaman','$potlain','$ketpotlain',now())";
			$hasil = mysql_query($query);
  
			$pesan = "import succesful";
  // jika proses insert data sukses, maka counter $sukses bertambah
  // jika gagal, maka counter $gagal yang bertambah
  //if ($hasil) $sukses++;
  //else $gagal++;
 // if ($hasil2) $sukses2++;
 // else $gagal2++;
	//	echo "Baris ss gagal diimport : ".$i."</p>";
}

// tampilan status sukses dan gagal
//echo "<h3>Proses import data selesai.</h3>";
//echo "<p>Jumlah data yang sukses diimport : ".$sukses."<br>";
//echo "Jumlah data yang gagal diimport : ".$gagal."</p>";
//echo "Baris gagal diimport : ".$i."</p>";exit;

		//	$smarty->display("upload_softkompetensi.html");

			if($hasil)
			{
				echo "<script language=javascript>
						//alert('Terima Kasih, berhasil mengimport data');
						window.location='uploaddata.php?pesan=$pesan';
					 </script>";
			}
			else{
				echo "<script language=javascript>
						//alert('Gagal menyimpan data');
						window.location='uploaddata.php?pesan=$pesan';
					 </script>";
			}
			}
			}else{
				echo "<script language=javascript>
						alert('Anda belum memasukkan file');
						window.location='uploaddata.php';
					 </script>";
			}
}
	
	//************************************************************************************************************************************************
		function SendToDataSoft(){

			global $title,$db;
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);
						$nik = $_POST['nik'];  
			$periode = $_POST['periode']; 
			$jumnip = count($nik);
			
			if($jumnip>0)  
     		{    
				 for($i=0;$i<$jumnip;$i++)  
				 {         
						//MELAKUKAN PENGECEKAN DATA //alert('Data Sudah Pernah Di Proses');
						$sql_soft="SELECT nik FROM dat_pendapatan where nik='$nik[$i]' and periode = '$periode[$i]'";
						$result_soft = $db -> Execute($sql_soft);
						$rs_soft = $result_soft->RecordCount();
						if($rs_soft > 0){
						echo "<script language=javascript>
							window.location='uploaddata.php';
						 </script>";
						}else{
						
						$sqlc = "SELECT * FROM temp_pendpot where nik='$nik[$i]'";       
						//echo $sqlc;exit;
						$rsc = $db->Execute($sqlc);						
						$row = $rsc->FetchRow();
						$nip = mysql_real_escape_string($row['nik']);
						$periode = mysql_real_escape_string($row['periode']);
						$kettunjlain = mysql_real_escape_string($row['ket_tunjlain']);
						$jhadir = $row['jhadir'];
						$thadir = $row['tunj_hadir'];
						$tjabatan = $row['tunj_jabatan'];
						$transmeal = $row['trans_meal'];
						$tlain = $row['tunj_lain'];
						$timein = $row['timein'];
						
						$sql_softx = "insert into dat_pendapatan (id,nik,periode,tunj_hadir,tunj_lain,tunj_jabatan,tunj_trans,ket_lain,tglinsert) 
						values (null,'$nip','$periode','$thadir','$tlain','$tjabatan','$transmeal','$kettunjlain','$timein')";
						//echo $sql_softx;exit;
				        $result_softx = $db->Execute($sql_softx);
						}
						
						//MELAKUKAN PENGECEKAN DATA POTONGAN
						$sql_softup="SELECT nik FROM dat_potongan where nik='$nik[$i]' and periode = '$periode[$i]'";
						$result_softup = $db -> Execute($sql_softup);
						$rs_softup = $result_softup->RecordCount();
						if($rs_softup > 0){
						
						}else{
						$sqlcp = "SELECT * FROM temp_pendpot where nik='$nik[$i]'";       
						//echo $sqlc;exit;
						$rscp = $db->Execute($sqlcp);						
						$rowp = $rscp->FetchRow();
						$nip = mysql_real_escape_string($rowp['nik']);
						$periode = mysql_real_escape_string($rowp['periode']);
						$ketpotlain = mysql_real_escape_string($rowp['ket_potlain']);
						$pph21 = $rowp['pph21'];
						$jht = $rowp['jht'];
						$pinjaman = $rowp['pinjaman'];
						$potlain = $rowp['pot_lain'];
						$timein = $rowp['timein'];
						
						$masukuserp = "insert into dat_potongan (id,periode,nik,pph21,jht,potlain,pinjaman,ketpotlain,tglinsert) 
						values (null,'$periode','$nip','$pph21','$jht','$potlain','$pinjaman','$ketpotlain','$timein')";
						$actmasukp = $db->Execute($masukuserp);
						}
						
						
						
						//delete temp pendpot
						$sql = "DELETE FROM temp_pendpot where nik='$nik[$i]' and periode = '$periode[$i]';";
				        $result = $db->Execute($sql);
						
						$pesan = "Data Berhasil di export";
						
						if($result)
						{
						//alert('Berhasil menghapus data calon mahasiswa');
							echo "<script language=javascript>
									
									window.location='uploaddata.php?pesan2=$pesan';
								 </script>";
						}
						else
						{
						//alert('Gagal menghapus data calon mahasiswa');
							echo "<script language=javascript>
									
									window.location='uploaddata.php?pesan2=$pesan';
								 </script>";
						}

				 }  
     		}else{
			echo "<script language=javascript>
							alert('Data kosong');
							window.location='uploaddata.php';
						 </script>";
			}
		}
		
    }


?>