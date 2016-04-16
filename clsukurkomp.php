<?php
require ('libs/Smarty.class.php');
require ('config.php');
//require ('user_cek.php');
class ukurkomp {
	
	    function showPetjunjukPengisianhard()	
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
		$smarty->assign("samping","32");

			$smarty->assign("awal", "PETUNJUK PENGISIAN");
			$smarty->assign("subtitle", "Bapak/Ibu/Saudara yang terhormat,");		
			$smarty->display("cara_isi_kompetensi.tpl");
		}
		

	function showIdPenilaianhard() {	
		
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
		
		$selpen = isset($_REQUEST['idjabatan']) ? $_REQUEST['idjabatan'] : '';
		$idkompetensi = isset($_REQUEST['idkompetensi']) ? $_REQUEST['idkompetensi'] : '';
		$kembali = isset($_REQUEST['kembali']) ? $_REQUEST['kembali'] : '';
		$nikRelasiselpen = isset($_REQUEST['nikRelasiJabatan']) ? $_REQUEST['nikRelasiJabatan'] : '';
		$nik = isset($_REQUEST['nik']) ? $_REQUEST['nik'] : '';
		
 				  
		//option 
		$option = '<option value="Yang Bersangkutan" selected="selected">Yang Bersangkutan</option>
               	  <option value="Atasan">Atasan</option>
               	  <option value="Bawahan">Bawahan</option>';
		
		
		//BELUM DIPILIH
 				  
		//ambil data pengguna-------------------------------------------------------------
<<<<<<< HEAD
			//ini untuk mengisi data view nipp view
			echo $sql = "SELECT a.id,a.nik,a.nm_pegawai,jabatan_name,nik_atasan,nik_bawahan FROM tab_pegawai a 
=======
			$sqluser = "SELECT a.id,a.nik,a.nm_pegawai,jabatan_name,nik_atasan,nik_bawahan FROM tab_pegawai a 
>>>>>>> cd2ebe2955a0e01d8f93df93cba4e6efc5155b7c
		LEFT JOIN tab_user ON a.id = tab_user.id 
		LEFT JOIN tbl_jabatan ON a.id = tbl_jabatan.id WHERE tab_user.username ='$_SESSION[username]'";
			

<<<<<<< HEAD
            while($rs_jumjabatan = $result_jumjabatan->FetchRow()){		
				//fetch data untuk Bawahan ke 1
				if(!empty($rs_jumjabatan['nik_bawahan'])){
					$rsBawahan[] = $rs_jumjabatan['nik_bawahan'];
						$sql_name = "SELECT * FROM tab_pegawai where nik='$rs_jumjabatan[nik_bawahan]'";
						$result_name = $db -> Execute($sql_name);
						$rs_name = $result_name->FetchRow();
						$rsBawahanName[] = $rs_name['nm_pegawai'];
				}			
				
				//fetch data untuk atasan ke 1
				if(!empty($rs_jumjabatan['nik_atasan'])){
					$rsAtasan[] = $rs_jumjabatan['nik_atasan'];
						$sql_name = "SELECT * FROM tab_pegawai where nik='$rs_jumjabatan[nik_atasan]'";
						$result_name = $db -> Execute($sql_name);
						$rs_name = $result_name->FetchRow();
						$rsAtasanName[] = $rs_name['nm_pegawai'];
				}			
			}

			
		    //fetch data untuk Bawahan ke 2
			 $sql_jumjabatan = "SELECT * FROM tab_pegawai where nik_atasan='$nik'";
			$result_jumjabatan = $db -> Execute($sql_jumjabatan);
			while($rs_jumjabatan = $result_jumjabatan->FetchRow()){
				if($rs_jumjabatan['nik_atasan'] == $nik && $rs_jumjabatan['nik']!=$rsBawahanName[0]){
					$rsBawahan[] = $rs_jumjabatan['nik'];
					$rsBawahanName[] = $rs_jumjabatan['nm_pegawai'];
				}
				
			}
			
			//fetch data untuk atasan ke 2
			$sql_jumjabatan = "SELECT * FROM tab_pegawai where nik_bawahan='$nik'";
			$result_jumjabatan = $db -> Execute($sql_jumjabatan);
			while($rs_jumjabatan = $result_jumjabatan->FetchRow()){
				if($rs_jumjabatan['nik_bawahan'] == $nik && $rs_jumjabatan['nik']!=$rsAtasan[0]){
					$rsAtasan[] = $rs_jumjabatan['nik'];
					$rsAtasanName[] = $rs_jumjabatan['nm_pegawai'];
				}		
			}
=======
			$exsqluser = $db->Execute($sqluser);
		$datauser = $exsqluser->FetchRow();
		
		$nikdinilai = $datauser['nik'];
		$namadinilai = $datauser['nm_pegawai'];
		$jabatandinilai = $datauser['jabatan_name'];
		$nikatasandinilai = $datauser['nik_atasan'];
		$nikbawahandinilai = $datauser['nik_bawahan'];
		$pilihan = $nikdinilai;
 
		
 		//ambil atasan --------------------------------------------------------
		$sqlatasan = "SELECT a.id,a.nik,a.nm_pegawai,jabatan_name,nik_atasan,nik_bawahan FROM tab_pegawai a 
		LEFT JOIN tab_user ON a.id = tab_user.id 
		LEFT JOIN tbl_jabatan ON a.id = tbl_jabatan.id WHERE a.nik = '$nikatasandinilai'";
>>>>>>> cd2ebe2955a0e01d8f93df93cba4e6efc5155b7c

		$exsqlatasan = $db->Execute($sqlatasan);
		$dataatasan = $exsqlatasan->FetchRow();
 
		$nik_ats = $dataatasan['nik'];
		$nm_ats = $dataatasan['nm_pegawai'];
		$jab_ats = $dataatasan['jabatan_name'];
 		
		$smarty->assign("nikdinilai",$nikdinilai);
		$smarty->assign("namadinilai",$namadinilai);
		$smarty->assign("jabatandinilai",$jabatandinilai);

		
		$smarty->assign("nikpenilai",$nik_ats);
		$smarty->assign("namapenilai",$nm_ats);
		$smarty->assign("jabatanpenilai",$jab_ats);
		 
		
		//ambil bawahan --------------------------------------------------------
		$sqlbawahan = "SELECT a.id,a.nik,a.nm_pegawai,jabatan_name,nik_atasan,nik_bawahan FROM tab_pegawai a 
		LEFT JOIN tab_user ON a.id = tab_user.id 
		LEFT JOIN tbl_jabatan ON a.id = tbl_jabatan.id WHERE a.nik = '$nikbawahandinilai'";

		$exsqlbawahan = $db->Execute($sqlbawahan);
		$databawahan = $exsqlbawahan->FetchRow();
 
		$nik_bwh = $databawahan['nik'];
		$nm_bwh = $databawahan['nm_pegawai'];
		$jab_bwh = $databawahan['jabatan_name'];
 		
		$smarty->assign("nikdinilai",$nikdinilai);
		$smarty->assign("namadinilai",$namadinilai);
		$smarty->assign("jabatandinilai",$jabatandinilai);

		
		$smarty->assign("nikpenilai",$nik_bwh);
		$smarty->assign("namapenilai",$nm_bwh);
		$smarty->assign("jabatanpenilai",$jab_bwh);
		
		//OPSI PEMILIHAN
		$selpen = isset($_REQUEST['selpen']) ? $_REQUEST['selpen'] : '';
			
		if($selpen == ''){
			$mark = 0;
		$option = '<option value="Yang Bersangkutan" selected="selected">Yang Bersangkutan</option>
					<option value="Atasan">Atasan</option>
            	   <option value="Bawahan">Bawahan</option>';
		$info = "";

		 //ambil data pengguna-------------------------------------------------------------
		$sqluser = "SELECT a.id,a.nik,a.nm_pegawai,jabatan_name,nik_atasan,nik_bawahan FROM tab_pegawai a 
		LEFT JOIN tab_user ON a.id = tab_user.id 
		LEFT JOIN tbl_jabatan ON a.id = tbl_jabatan.id WHERE tab_user.username ='$_SESSION[username]'";
		$exsqluser = $db->Execute($sqluser);
		$datauser = $exsqluser->FetchRow();
		
		$nikdinilai = $datauser['nik'];
		$namadinilai = $datauser['nm_pegawai'];
		$jabatandinilai = $datauser['jabatan_name'];
		$nikatasandinilai = $datauser['nik_atasan'];

		 		//--------------------------------------------------------------------------------
 
		//ambil atasan --------------------------------------------------------
		
 		$sqlatasan = "SELECT a.id,a.nik,a.nm_pegawai,jabatan_name,nik_atasan,nik_bawahan FROM tab_pegawai a 
		LEFT JOIN tab_user ON a.id = tab_user.id 
		LEFT JOIN tbl_jabatan ON a.id = tbl_jabatan.id WHERE a.nik = '$nikatasandinilai'";
		$exsqlatasan = $db->Execute($sqlatasan);
		$dataatasan = $exsqlatasan->FetchRow();
 
		$nik_ats = $dataatasan['nik'];
		$nm_ats = $dataatasan['nm_pegawai'];
		$jab_ats = $dataatasan['jabatan_name'];

		$smarty->assign("nikdinilai",$nikdinilai);
		$smarty->assign("namadinilai",$namadinilai);
		$smarty->assign("jabatandinilai",$jabatandinilai);

		
		$smarty->assign("nikpenilai",$nik_ats);
		$smarty->assign("namapenilai",$nm_ats);
		$smarty->assign("jabatanpenilai",$jab_ats);


	//ambil bawahan --------------------------------------------------------
		
 		$sqlbawahan = "SELECT a.id,a.nik,a.nm_pegawai,jabatan_name,nik_atasan,nik_bawahan FROM tab_pegawai a 
		LEFT JOIN tab_user ON a.id = tab_user.id 
		LEFT JOIN tbl_jabatan ON a.id = tbl_jabatan.id WHERE a.nik = '$nikbawahandinilai'";
		$exsqlatasan = $db->Execute($sqlatasan);
		$dataatasan = $exsqlatasan->FetchRow();
 
		$nik_bwh = $databawahan['nik'];
		$nm_bwh = $databawahan['nm_pegawai'];
		$jab_bwh = $databawahan['jabatan_name'];

		$smarty->assign("nikdinilai",$nikdinilai);
		$smarty->assign("namadinilai",$namadinilai);
		$smarty->assign("jabatandinilai",$jabatandinilai);

		
		$smarty->assign("nikpenilai",$nik_bwh);
		$smarty->assign("namapenilai",$nm_bwh);
		$smarty->assign("jabatanpenilai",$jab_bwh);


		//ambil target yang bersagkutan 
		
		$option = '<option value="Yang Bersangkutan" selected="selected">Yang Bersangkutan</option>
					<option value="Atasan">Atasan</option>
             	   <option value="Bawahan">Bawahan</option>';
		
		  		
		$data_bawah = "select * from tab_pegawai where nik_atasan = '$pilihan' and nik_bawahan = '$pilihan'";
		$exdata_bawah = $db->Execute($data_bawah);
		$nobawah = 0;
		$jmlbawah = $exdata_bawah->RecordCount();
		
		if($jmlbawah < 1){
			$rsbawah[] = array("nobawah"=>'',"id"=>'',"nik"=>'',"nm_pegawai"=>'');	
			$info = "Anda Tidak Memiliki Bawahan Sama Sekali";
			$sign = 0;
		}else{
				while ($rowbawah = $exdata_bawah->FetchRow()){
		$nobawah++;
			$rsbawah[] = array("nobawah"=>$nobawah,"id"=>$rowbawah['id'],"nik_karyawan"=>$rowbawah['nik'],"nm_pegawai"=>$rowbawah['nm_pegawai']);
			}
			$info = "";
			$sign = 1;
		}
		$smarty -> assign("keterangan_menilai","$selpen");
		$smarty->assign("sign",$sign);
		$smarty->assign("selpen",$selpen);
		$smarty->assign("info",$info);
		$smarty->assign("option",$option);
		$smarty->display("isi_kompetensi.tpl");
	}			
		}
			
	

	function soalKompetensi()
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
		$smarty->assign("samping","32");



		$name = isset($_REQUEST['name']) ;
		$idkompetensi = isset($_REQUEST['idkompetensi']);
		$nikPenilai = isset($_REQUEST['nikPenilai']);
		$nikDinilai = isset($_REQUEST['nikDinilai']);
		$posisi = isset($_REQUEST['posisi']);
		$soal = isset($_REQUEST['soal']);
		$kembali = isset($_REQUEST['kembali']);

		$sql_cek="select * from tab_soal_temp where VNRKMENILAI='$nikPenilai' and VNRKDINILAI='$nikDinilai' and VPOSISI='$posisi'";
			$result_cek = $db -> Execute($sql_cek);
			$rs_cek = $result_cek->FetchRow();
				
			if($kembali==""&&$soal==0&&empty($rs_cek[0])){
			//sql tabel kompetensi
			$sql_kompetensi="select * from tab_kompetensi a order by rand()";
			$result_kompetensi = $db->Execute($sql_kompetensi);
			$i = 1;
			while($rs_kompetensi = $result_kompetensi->FetchRow()){
			if($i==1){
				$idkompetensi .="".$rs_kompetensi['id']."";
				$i++;
			}else{
				$idkompetensi .=",".$rs_kompetensi['id']."";
			}
			}
			$idkompetensinew = explode(",", $idkompetensi);
			
			//mengosongkan tabel soal temporary
			$sql_delete_soal="DELETE FROM tab_soal_temp";
			$result_delete = $db->Execute($sql_delete_soal);
			$inc=1;
			$nourut=0;
			for($i=0;$i<count($idkompetensinew);$i++){
			$sql_soal = "select * from tab_kompetensi a,tab_soal b where a.id=b.id_kompetensi and b.id_kompetensi='$idkompetensinew[$i]' order by rand()";
			//echo $sql_soal;echo exit;
			////////////////// putaran pertama
			$result_soal = $db -> Execute($sql_soal);
			$nourut++;
			while($rs_soal = $result_soal->FetchRow()){
			if($nikPenilai==$nikDinilai){
			//echo "sama";echo exit;	
			   $sql_insert_soal="INSERT INTO tab_soal_temp (NNOURUT,VIDKOMPETENSI,VDESKSOAL,VIDOPSIJAWABAN,VDESKOPSIJAWABAN,VJAWABAN,VNRKMENILAI,VNRKDINILAI,VPOSISI,NNO) VALUES 
	                ($nourut,$idkompetensinew[$i],'$rs_soal[5]','$rs_soal[17]','$rs_soal[18]','','$nikPenilai','$nikDinilai','$posisi',$inc)";
			}else{
			//echo "tdk sama";echo exit;	
			   $sql_insert_soal="INSERT INTO tab_soal_temp (NNOURUT,VIDKOMPETENSI,VDESKSOAL,VIDOPSIJAWABAN,VDESKOPSIJAWABAN,VJAWABAN,VNRKMENILAI,VNRKDINILAI,VPOSISI,NNO) VALUES 
	                ($nourut,$idkompetensinew[$i],'$rs_soal[6]','$rs_soal[17]','$rs_soal[19]','','$nikPenilai','$nikDinilai','$posisi',$inc)";
			}
			   $result = $db->Execute($sql_insert_soal);
		    	$inc++;
			}
			//echo $sql_insert_soal;
			//echo "<br>";
			////////////////// putaran kedua
			$result_soal2 = $db -> Execute($sql_soal);
			$nourut++;
			while($rs_soal2 = $result_soal2->FetchRow()){
			if($nikPenilai==$nikDinilai){
			//echo "sama";echo exit;	
			   $sql_insert_soal2="INSERT INTO tab_soal_temp (NNOURUT,VIDKOMPETENSI,VDESKSOAL,VIDOPSIJAWABAN,VDESKOPSIJAWABAN,VJAWABAN,VNRKMENILAI,VNRKDINILAI,VPOSISI,NNO) VALUES 
	                ($nourut,$idkompetensinew[$i],'$rs_soal2[7]','$rs_soal2[17]','$rs_soal2[18]','','$nikPenilai','$nikDinilai','$posisi',$inc)";
			}else{
			//echo "tdk sama";echo exit;	
			   $sql_insert_soal2="INSERT INTO tab_soal_temp (NNOURUT,VIDKOMPETENSI,VDESKSOAL,VIDOPSIJAWABAN,VDESKOPSIJAWABAN,VJAWABAN,VNRKMENILAI,VNRKDINILAI,VPOSISI,NNO) VALUES 
	                ($nourut,$idkompetensinew[$i],'$rs_soal2[8]','$rs_soal2[17]','$rs_soal2[19]','','$nikPenilai','$nikDinilai','$posisi',$inc)";
			}
			   $result = $db->Execute($sql_insert_soal2);
		    	$inc++;
			}
			////////////////// putaran ketiga
			$result_soal3 = $db -> Execute($sql_soal);
			$nourut++;
			while($rs_soal3 = $result_soal3->FetchRow()){
			if($nikPenilai==$nikDinilai){
			//echo "sama";echo exit;	
			   $sql_insert_soal3="INSERT INTO tab_soal_temp (NNOURUT,VIDKOMPETENSI,VDESKSOAL,VIDOPSIJAWABAN,VDESKOPSIJAWABAN,VJAWABAN,VNRKMENILAI,VNRKDINILAI,VPOSISI,NNO) VALUES 
	                ($nourut,$idkompetensinew[$i],'$rs_soal3[9]','$rs_soal3[17]','$rs_soal3[18]','','$nikPenilai','$nikDinilai','$posisi',$inc)";
			}else{
			//echo "tdk sama";echo exit;	
			   $sql_insert_soal3="INSERT INTO tab_soal_temp (NNOURUT,VIDKOMPETENSI,VDESKSOAL,VIDOPSIJAWABAN,VDESKOPSIJAWABAN,VJAWABAN,VNRKMENILAI,VNRKDINILAI,VPOSISI,NNO) VALUES 
	                ($nourut,$idkompetensinew[$i],'$rs_soal3[10]','$rs_soal3[17]','$rs_soal3[19]','','$nikPenilai','$nikDinilai','$posisi',$inc)";
			}
			   $result = $db->Execute($sql_insert_soal3);
		    	$inc++;
			}
			//echo exit;
			    $inc++;
			}
		    }
				
		    //update tabel temporary tbl_soal_temp
			$jawaban = isset($_REQUEST['jawaban']);
			$rangenya = isset($_REQUEST['rangenya']);
				if($jawaban!="" && $kembali!="kembali" && $rangenya!="" ){
					$sql_update_soal="UPDATE tab_soal_temp SET VJAWABAN = '$jawaban',RANGE_JWB = '$rangenya' WHERE NNOURUT = '$soal' AND VIDOPSIJAWABAN = '$jawaban'";
					//echo $sql_update_soal;echo exit;
					$result = $db->Execute($sql_update_soal);
			}
/*
				if($range!=""){
					$sql_update_soalx="UPDATE tab_soal_temp SET RANGE = '$rangenya' WHERE NNOURUT = '$soal' AND VIDOPSIJAWABAN = '$jawaban'";
					echo $sql_update_soalx;echo exit;
					$resultx = $db->Execute($sql_update_soalx);
			}
*/
			//pengecekan jawaban kalo kosong
			if($soal != 0 && $jawaban==""&&$kembali==""){
				$soal = $soal - 1;
				echo "<script language=javascript>
					 alert('Anda Belum Memilih Jawaban.');
					  </script>";		 
				}
			if($soal != 0 && $rangenya==""){
				$soal = $soal - 1;
				echo "<script language=javascript>
					 alert('Anda Belum Memilih Range Jawaban.');
					  </script>";		 
				}
	
			$sql_soal = "select * from tab_soal_temp where nnourut=$soal+1";
			$result_soal = $db -> Execute($sql_soal);

			$sql_max_soal = "SELECT max(nnourut) FROM tab_soal_temp";
			$result_sql_max_soal = $db -> Execute($sql_max_soal);
			$rs_sql_max_soal = $result_sql_max_soal->FetchRow();
			//echo $soal;
			//echo "<br>";
			//echo $rs_sql_max_soal[0];
			if($soal < $rs_sql_max_soal[0]){
				while($rs_soal = $result_soal->FetchRow()){
					$pertanyaan =$rs_soal[2];
					if(!empty($rs_soal[5])){
						$opsiJawaban="<tr><td align='left' valign='top'><label>
									   <input type='radio' name='jawaban' value='$rs_soal[3]' id='RadioGroup1_0' checked='checked'/></label></td><td align='left' valign='top'><label>$rs_soal[4]</label>
									   </td></tr>";
					}else{
						$opsiJawaban ="<tr><td align='left' valign='top'><label>
									   <input type='radio' name='jawaban' value='$rs_soal[3]' id='RadioGroup1_0'/></label></td><td align='left' valign='top'><label>$rs_soal[4]</label>
									   </td></tr>";
					}
					

		    }
				$opsiJawaban2="<input type='radio' name='rangenya' value='1'> 1 (sangat tidak sering)
											<input type='radio' name='rangenya' value='2'> 2 (Tidak Sering)
											<input type='radio' name='rangenya' value='3'> 3 (Ragu-ragu)
											<input type='radio' name='rangenya' value='4'> 4 (Sering)
											<input type='radio' name='rangenya' value='5'> 5 (Sangat sering) <br>";

				$smarty->assign("idkompetensi", $idkompetensi);
				$smarty->assign("soal", $soal+1);
				$smarty->assign("name", $name);	
				$smarty->assign("pertanyaan", $pertanyaan);
				$smarty->assign("opsiJawaban", $opsiJawaban);
				$smarty->assign("opsiJawaban2", $opsiJawaban2);
				$smarty->assign("nikPenilai", $nikPenilai);
				$smarty->assign("nikDinilai", $nikDinilai);
				$smarty->assign("posisi", $posisi);
				$smarty->display("soal_kompetensi.tpl");			
			}else{
				$sql_jawaban = "SELECT * FROM `tab_soal_temp` where vjawaban <> ''";
				$result_jawaban = $db->Execute($sql_jawaban);
				$tanggal = date("Y-m-d H:i:s");
				$tahun = date('Y'); 
				$i=1;
				while($rs_jawaban = $result_jawaban->FetchRow()){
				
				$sql_pegawai = "select * from tab_pegawai where nik=$rs_jawaban[7]";
				$result_pegawai = $db->Execute($sql_pegawai);
				$rs_pegawai = $result_pegawai->FetchRow();
				$idkompt = $idkompetensinew[$soal-1];
				$idpegawai = $rs_pegawai['id'];
					
				//select maksimum id_jawaban
                		$sql_jawabanMax = "select max(jawaban_id) from dat_jawabancore where nik=$nikPenilai";
				$result_jawabanMax = $db -> Execute($sql_jawabanMax);
				$rs_jawabanMax = $result_jawabanMax->FetchRow();
				$id_jawaban = $rs_jawabanMax[0]+1;
					
				$sql = "INSERT INTO dat_jawabancore (jawaban_id,id_pegawai,tahun,nik,tgl_quiz,no_urut,id_kompetensi,jawabanDT_id,range_jwban, menilai,NRKmenilai) VALUES 
			    ($id_jawaban,$idpegawai,'$tahun','$rs_jawaban[7]','$tanggal',$rs_jawaban[0],$rs_jawaban[1],'$rs_jawaban[3]','$rs_jawaban[6]','$rs_jawaban[9]','$rs_jawaban[8]')";
				//echo $sql;echo exit;
	        		$result = $db->Execute($sql);
				$i++;
				}
				$result_soal = $db -> Execute($sql_soal);
				//mengosongkan tabel soal temporary
				$sql_delete_soal="DELETE FROM tab_soal_temp";
				$result_delete = $db->Execute($sql_delete_soal);
				$smarty->display("terimakasih.tpl");	
				}
		}
		

}
		?>