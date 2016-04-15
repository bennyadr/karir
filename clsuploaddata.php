<?php
require ('libs/Smarty.class.php');
require ('config.php');
require_once "excel_reader2.php";
//require ('user_cek.php');
class uploaddata {
	
	    function showUpload() {
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
		$smarty->assign("samping","31");

          
			$sql = "SELECT * FROM temp_pendpot";       
			
		    $rs = $db -> execute($sql);
	  
	        if (!$rs->RecordCount())
	        {
	             $kosong = 'kosong';
	             $pos_list[] = array(
	                                'no'=>$kosong,
	                                'id'=>$kosong,
									'nik'=>$kosong,
									'gapok'=>$kosong,
									'periode'=>$kosong,
									'jhadir'=>$kosong,
									'thadir'=>$kosong,
									'tjabatan'=>$kosong,
									'transmeal'=>$kosong,
									'tlain'=>$kosong,
									'pph21'=>$kosong,
									'jht'=>$kosong,
									'bpjs'=>$kosong,
									'pinjaman'=>$kosong,
									'potlain'=>$kosong
	                                );
	        }
	        else
	        {
	            $no = 0;
	            while ($row = $rs->FetchRow()){
	             ++$no;
	             $pos_list[] = array(
	                                'no'=>$no,
	                                'id'=>$row['id'],
									'periode'=>$row['periode'],
									'nik'=>$row['nik'],
									'jhadir'=>$row['jhadir'],
									'gapok'=>round($row['gapok']),
									'thadir'=>round($row['tunj_hadir']),
									'tjabatan'=>round($row['tunj_jabatan']),
									'transmeal'=>round($row['trans_meal']),
									'tlain'=>round($row['tunj_lain']),
									'pph21'=>round($row['pph21']),
									'jht'=>round($row['bpjs_naker']),
									'bpjs'=>round($row['bpjs_sehat']),
									'pinjaman'=>round($row['pinjaman']),
									'potlain'=>round($row['pot_lain'])
	                                );
	            }
				$nomor = $no;
				$i = $no;
	        }

	        $smarty->assign("pos", $pos_list);
			
			$smarty->display("uploaddata.tpl");
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
			$gapok = $data->val($i, 5);
			$thadir = $data->val($i, 6);
			$tjabatan = $data->val($i, 7);
			$transmeal = $data->val($i, 8);
			$tlain = $data->val($i, 9);
			$kettunjlain = $data->val($i, 10);
			$pph21 = $data->val($i, 11);
			$jht = $data->val($i, 12);
			$bpjs = $data->val($i, 13);
			$pinjaman = $data->val($i, 14);
			$potlain = $data->val($i, 15);
			$ketpotlain = $data->val($i, 16);
			$bbpjsnaker = $data->val($i, 17);
			$bbpjssehat = $data->val($i, 18);
  
			// setelah data dibaca, sisipkan ke dalam tabel temp soft kompetensi  \\  \\ 
			$query = "insert into temp_pendpot (id,periode,nik,jhadir,gapok,tunj_hadir,tunj_jabatan,trans_meal,tunj_lain,ket_tunjlain,pph21,bpjs_naker,bpjs_sehat,pinjaman,pot_lain,ket_potlain,bbpjsnaker,bbpjssehat,timein) 
			values (null,'$periode','$nik','$jhadir','$gapok','$thadir','$tjabatan','$transmeal','$tlain','$kettunjlain','$pph21','$jht','$bpjs','$pinjaman','$potlain','$ketpotlain','$bbpjsnaker','$bbpjssehat',now())";
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


function SendToDataSoft(){
	 global $title,$db;
			require ('user_cek.php');
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);
						
			//jumlah count kompetensi
			//$idlowongan = $_REQUEST[idlowongan];
			//echo $id_kompetensijbt." ".$idkeltktjbt." ".$idkompetensi." ".$level;
			
			$nik = $_POST['nik'];  
			$periode = $_POST['periode']; 
			$jumnip = count($nik);
			
			if($jumnip>0)  
     		{    
				 for($i=0;$i<$jumnip;$i++)  
				 {         
						//MELAKUKAN PENGECEKAN PENDAPATAN //alert('Data Sudah Pernah Di Proses');
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
						$gapok = round($row['gapok']);
						$jhadir = $row['jhadir'];
						$thadir = round($row['tunj_hadir']);
						$tjabatan = round($row['tunj_jabatan']);
						$transmeal = round($row['trans_meal']);
						$tlain = round($row['tunj_lain']);
						$timein = $row['timein'];
						
						$sql_softx = "insert into dat_pendapatan (id,nik,periode,jhadir,gapok,tunj_hadir,tunj_lain,tunj_jabatan,tunj_trans,ket_lain,tglinsert) 
						values (null,'$nip','$periode','$jhadir','$gapok','$thadir','$tlain','$tjabatan','$transmeal','$kettunjlain','$timein')";
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
						$pph21 = round($rowp['pph21']);
						$jht = round($rowp['bpjs_naker']);
						$bpjs = round($rowp['bpjs_sehat']);
						$pinjaman = round($rowp['pinjaman']);
						$potlain = round($rowp['pot_lain']);
						$bbpjsnaker = round($rowp['bbpjsnaker']);
						$bbpjssehat = round($rowp['bbpjssehat']);
						$timein = $rowp['timein'];
						
						$masukuserp = "insert into dat_potongan (id,periode,nik,pph21,jht,bpjs_sehat,potlain,pinjaman,ketpotlain,bbpjsnaker,bbpjssehat,tglinsert) 
						values (null,'$periode','$nip','$pph21','$jht','$bpjs','$potlain','$pinjaman','$ketpotlain','$bbpjsnaker','$bbpjssehat','$timein')";
						$actmasukp = $db->Execute($masukuserp);
						}
						
						
						
						//delete temp pendpot
						//$sql = "DELETE FROM temp_pendpot where nik='$nik[$i]' and periode = '$periode[$i]' ";
						$sql = "DELETE FROM temp_pendpot where nik='$nik[$i]' and periode = '$periode' ";
				        $result = $db->Execute($sql);
						//echo $sql;
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
