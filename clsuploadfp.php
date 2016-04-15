<?php
require ('libs/Smarty.class.php');
require ('config.php');
require_once "excel_reader2.php";
//require ('user_cek.php');
class uploadfp {
	
	    function showUploadFP() {
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
		$smarty->assign("samping","32");

		$sql = "SELECT *,date_format(str_to_date(tanggal, '%d-%M-%Y'), '%Y-%m-%d') as tanggal2 FROM temp_absen";       
			
		    $rs = $db -> execute($sql);
	  
	        if (!$rs->RecordCount())
	        {
	             $kosong = 'kosong';
	             $pos_list[] = array(
	                                'no'=>$kosong,
	                                'tglbuka'=>$kosong,
									'tgltutup'=>$kosong,
									'idabsensi'=>$kosong,
									'nama'=>$kosong,
									'tanggal'=>$kosong,
									'jammasuk'=>$kosong,
									'jampulang'=>$kosong
	                                );
	        }
	        else
	        {
	            $no = 0;
	            while ($row = $rs->FetchRow()){
	             ++$no;
	             $pos_list[] = array(
	                                'no'=>$no,
	                                'tglbuka'=>$row['tglbuka'],
									'tgltutup'=>$row['tgltutup'],
									'idabsensi'=>$row['idabsensi'],
									'nama'=>$row['nama'],
									'tanggal'=>$row['tanggal2'],
									'jammasuk'=>$row['jam_masuk'],
									'jampulang'=>$row['jam_pulang']
	                                );
	            }
				$nomor = $no;
				$i = $no;
	        }

	        $smarty->assign("pos", $pos_list);
			
			$smarty->display("uploadfp.tpl");
        }

		function Proses()
		{
			 global $title,$db;
			require ('user_cek.php');
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
			$tglbuka=$_POST[tglbuka];
			$tgltutup=$_POST[tgltutup];

			if(!empty($lokasi_file)){
				
				if($xls != 'xls')
				{
				echo "<script language=javascript>
						alert('File yang Anda masukkan bukan XLS');
						window.location='uploadfp.php';
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
			// membaca data id absensi (kolom ke-1)
			$idabsensi = $data->val($i, 1);
			$nama = mysql_real_escape_string($data->val($i, 2));
			$tanggal = mysql_real_escape_string($data->val($i, 3));
			$jammasuk = mysql_real_escape_string($data->val($i, 4));
			$jampulang = mysql_real_escape_string($data->val($i, 5));
			
			// setelah data dibaca, sisipkan ke dalam tabel temp absen
			$query = "insert into temp_absen (id,tglbuka,tgltutup,idabsensi,nama,tanggal,jam_masuk,jam_pulang,timein) 
			values (null,STR_TO_DATE('$tglbuka','%d/%m/%Y'),STR_TO_DATE('$tgltutup','%d/%m/%Y'),'$idabsensi','$nama','$tanggal','$jammasuk','$jampulang',now())";
			//echo $query;exit;
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
						window.location='uploadfp.php?pesan=$pesan';
					 </script>";
			}
			else{
				echo "<script language=javascript>
						//alert('Gagal menyimpan data');
						window.location='uploadfp.php?pesan=$pesan';
					 </script>";
			}
			}
			}else{
				echo "<script language=javascript>
						alert('Anda belum memasukkan file');
						window.location='uploadfp.php';
					 </script>";
			}
}	
	//************************************************************************************************************************************************
		function SendToDataSoft(){
			global $title,$db;
			require ('user_cek.php');
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);
			$idabsensi = $_POST['idabsensi'];  
			$tglbuka = $_POST['tglbuka']; 
			$tgltutup = $_POST['tgltutup']; 
			$tanggal = $_POST['tanggal']; 
			$jumabn = count($idabsensi);
			
			if($jumabn>0)  
     		{    
				 for($i=0;$i<$jumabn;$i++)  
				 {         
						//MELAKUKAN PENGECEKAN DATA ABSENSI //alert('Data Sudah Pernah Di Proses');
						$sql_soft="SELECT idabsensi FROM dat_absen where idabsensi='$idabsensi[$i]' and tglbuka = '$tglbuka[$i]' and tgltutup = '$tgltutup[$i]'
						and date_format(str_to_date(tanggal, '%d-%M-%Y'), '%Y-%m-%d') = '$tanggal[$i]'";
						$result_soft = $db -> Execute($sql_soft);
						$rs_soft = $result_soft->RecordCount();
						if($rs_soft > 0){
						echo "<script language=javascript>
							window.location='uploadfp.php';
						 </script>";
						}else{
						
						$sqlc = "SELECT idabsensi,nama,tglbuka,tgltutup,date_format(str_to_date(tanggal, '%d-%M-%Y'), '%Y-%m-%d') as tanggal,timein,
						jam_masuk,jam_pulang,timediff(jam_pulang,jam_masuk) as jmljam FROM temp_absen 
						where idabsensi='$idabsensi[$i]' and tglbuka = '$tglbuka[$i]' and tgltutup = '$tgltutup[$i]' 
						and date_format(str_to_date(tanggal, '%d-%M-%Y'), '%Y-%m-%d') = '$tanggal[$i]'";       
						//echo $sqlc;exit;
						$rsc = $db->Execute($sqlc);						
						$row = $rsc->FetchRow();
						$tglbukain = $row['tglbuka'];
						$tgltutupin = $row['tgltutup'];
						$idabsensiin = $row['idabsensi'];
						$namain = $row['nama'];
						$tanggalin = $row['tanggal'];
						$jammasukin = $row['jam_masuk'];
						$jampulangin = $row['jam_pulang'];
						$timein = $row['timein'];
						
						$sql_softx = "insert into dat_absen (id,tglbuka,tgltutup,idabsensi,nama,tanggal,jam_masuk,jam_pulang,timein) 
						values (null,'$tglbukain','$tgltutupin','$idabsensiin','$namain','$tanggalin','$jammasukin','$jampulangin','$timein')";
						//echo $sql_softx;exit;
				        $result_softx = $db->Execute($sql_softx);
						}
						
						
						
						//delete temp absensi
						$sql = "DELETE FROM temp_absen where idabsensi='$idabsensi[$i]' and tglbuka = '$tglbuka[$i]' and tgltutup = '$tgltutup[$i]' 
						and date_format(str_to_date(tanggal, '%d-%M-%Y'), '%Y-%m-%d') = '$tanggal[$i]'";
				        $result = $db->Execute($sql);
						//echo $sql;
						$pesan = "Data Berhasil di export";
						
						if($result)
						{
						//alert('Berhasil menghapus data calon mahasiswa');
							echo "<script language=javascript>
									
									window.location='uploadfp.php?pesan2=$pesan';
								 </script>";
						}
						else
						{
						//alert('Gagal menghapus data calon mahasiswa');
							echo "<script language=javascript>
									
									window.location='uploadfp.php?pesan2=$pesan';
								 </script>";
						}

				 }  
     		}else{
			echo "<script language=javascript>
							alert('Data kosong');
							window.location='uploadfp.php';
						 </script>";
			}
		}
		
    }


?>
