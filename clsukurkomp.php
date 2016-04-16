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
		
		$jabatan_onchange = isset($_REQUEST['idjabatan']) ? $_REQUEST['idjabatan'] : '';
		$idkompetensi = isset($_REQUEST['idkompetensi']) ? $_REQUEST['idkompetensi'] : '';
		$kembali = isset($_REQUEST['kembali']) ? $_REQUEST['kembali'] : '';
		$nikRelasiJabatan_onchange = isset($_REQUEST['nikRelasiJabatan']) ? $_REQUEST['nikRelasiJabatan'] : '';
		$nik = isset($_REQUEST['nik']) ? $_REQUEST['nik'] : '';
		
 				  
		//ambil data pengguna-------------------------------------------------------------
			//ini untuk mengisi data view nipp view
			echo $sql = "SELECT a.id,a.nik,a.nm_pegawai,jabatan_name,nik_atasan,nik_bawahan FROM tab_pegawai a 
		LEFT JOIN tab_user ON a.id = tab_user.id 
		LEFT JOIN tbl_jabatan ON a.id = tbl_jabatan.id WHERE tab_user.username ='$_SESSION[username]'";
			$result_pegawai = $db->Execute($sql);
			$pos_list = $result_pegawai->FetchRow();
			$smarty -> assign("nik", $pos_list['nik']);
            $smarty -> assign("name",	$pos_list['nm_pegawai']);
			$smarty -> assign("jabatan", $pos_list['jabatan_name']);
			
			$nik = $pos_list['nik'];
			
			// ini untuk menetukan count jumlah bawahan 1
			$sql_jumjabatan = "SELECT * FROM tab_pegawai where nik='$nik'";
			$result_jumjabatan = $db -> Execute($sql_jumjabatan);

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

			// Melakukan Proses Pengecekan
			//******* ATASAN *******//
			$bawahan = count($rsBawahan);
			$atasan = count($rsAtasan);
			//$rekan = count($rsRekan);
			$name_dinilai = '';
			$jabatan_dinilai = '';
			
			if($atasan!=0){
		        if($jabatan_onchange=='Atasan'){
					$jabatan_option .= "<option value='Atasan' selected>Atasan</option>";
				}else{	
					$jabatan_option .= "<option value='Atasan'>Atasan</option>";
				}
				
				//ini untuk mendapatkan NIP Atasan
				if($jabatan_onchange=='Atasan'){
					
					if(!empty($nikRelasiJabatan_onchange)){
						$sql_atasan="SELECT * FROM tab_pegawai a,tab_jabatan b where nik=$nikRelasiJabatan_onchange and a.id_jabatan = b.id";
					}else{
						$sql_atasan="SELECT * FROM tab_pegawai a,tab_jabatan b where nik=$rsAtasan[0] and a.id_jabatan = b.id";
					}
					$result_sql_atasan = $db -> Execute($sql_atasan);
					$rs_sql_atasan = $result_sql_atasan->FetchRow();
					$name_dinilai = $rs_sql_atasan['nm_pegawai'];
					$jabatan_dinilai = $rs_sql_atasan['nm_jabatan'];
					$nikdinilai = $rs_sql_atasan['nik'];
						
					if($atasan>1){
						for ($i = 0; $i < $atasan; $i++) {
							if(!empty($nikRelasiJabatan_onchange)){
								$nppmenilai = $nikRelasiJabatan_onchange;
							}else{
								$nppmenilai = $rsAtasan[0];
							}
							
							if($nikRelasiJabatan_onchange==$rsAtasan[$i]){
								$atasan_option .= "<option value='$rsAtasan[$i]' selected>$rsAtasan[$i] - $rsAtasanName[$i]</option>"; 
								
							}else{
								$atasan_option .= "<option value='$rsAtasan[$i]'>$rsAtasan[$i] - $rsAtasanName[$i]</option>"; 
								
							}
						}					
					}else{
						$atasan_option .= "<input type='text' size='40' value='$rsAtasan[0]' disabled/>";
						$nppmenilai = $rsAtasan[0];
						
					}
				}
			}
			
			//******* BAWAHAN *******//
			if($bawahan!=0){
				if($jabatan_onchange=='Bawahan'){
					$jabatan_option .= "<option value='Bawahan' selected>Bawahan</option>";
				}else{
					$jabatan_option .= "<option value='Bawahan'>Bawahan</option>";
				}
				
				//ini untuk mendapatkan NIP Bawahan
				if($jabatan_onchange=='Bawahan'){
					
					if(!empty($nikRelasiJabatan_onchange)){
						$sql_bawahan="SELECT * FROM tab_pegawai a,tab_jabatan b where nik=$nikRelasiJabatan_onchange and a.id_jabatan = b.id";
					}else{
						$sql_bawahan="SELECT * FROM tab_pegawai a,tab_jabatan b where nik=$rsBawahan[0] and a.id_jabatan = b.id";
					}
					$result_sql_bawahan = $db -> Execute($sql_bawahan);
					$rs_sql_bawahan = $result_sql_bawahan->FetchRow();
					$name_dinilai = $rs_sql_bawahan['nm_pegawai'];
					$jabatan_dinilai = $rs_sql_bawahan['nm_jabatan'];
					$nikdinilai = $rs_sql_bawahan['nik'];
					
					if($bawahan>1){
						for ($i = 0; $i < $bawahan; $i++) {
							if(!empty($nikRelasiJabatan_onchange)){
								$nppmenilai = $nikRelasiJabatan_onchange;
							}else{
								$nppmenilai = $rsBawahan[0];
							}
							
							if($nikRelasiJabatan_onchange==$rsBawahan[$i]){
								$bawahan_option .= "<option value='$rsBawahan[$i]' selected>$rsBawahan[$i] - $rsBawahanName[$i]</option>"; 
								
							}else{
								$bawahan_option .= "<option value='$rsBawahan[$i]'>$rsBawahan[$i] - $rsBawahanName[$i]</option>";
								
							}
						}					
					}else{
						$bawahan_option .= "<input type='text' size='40' value='$rsBawahan[0]' disabled/>";
						$nppmenilai =$rsBawahan[0];
					}
				}
			}

				$nip_dinilai = "<input type='text' size='40' value='$nik' disabled/>";
				$smarty -> assign("atasan",$atasan);
				$smarty -> assign("bawahan",$bawahan);
				//$smarty -> assign("rekan",$rekan);
				//$smarty -> assign("rekan_option",$rekan_option);
				$smarty -> assign("atasan_option",$atasan_option);
				$smarty -> assign("jabatan_onchange",$jabatan_onchange);
				$smarty -> assign("jabatan_option",$jabatan_option);
				$smarty -> assign("nip_dinilai",$nip_dinilai);
				$smarty -> assign("keterangan_menilai","Yang Bersangkutan");
				$smarty -> assign("bawahan_option",$bawahan_option);
				$smarty -> assign("name_dinilai",$name_dinilai);
				$smarty -> assign("jabatan_dinilai",$jabatan_dinilai);
				$smarty -> assign("nikRelasiJabatan_onchange",$nikRelasiJabatan_onchange);
				$smarty -> assign("nikdinilai",$nikdinilai);
				
				
				if( $jabatan_onchange == 'Atasan'){
					$jumlah = $atasan;
				}elseif($jabatan_onchange == 'Bawahan'){
					$jumlah = $bawahan;
				}elseif($jabatan_onchange == 'Rekan'){
					$jumlah = $rekan;
				}
				$smarty -> assign("jumlah",$jumlah);
					
				
				if($kembali=="kembali"){
					$smarty -> assign("soal",2);
				}else{
					$smarty -> assign("soal",0);
				}
				
				$smarty -> assign("kembali",$kembali);
				$smarty -> assign("idkompetensi",$idkompetensi);
				
				//pengecekan untuk tombol isi keusioner
				if($nppmenilai==""){
					$sql_quiz_answer="select * from dat_jawabancore where nik ='$nik' and NRKmenilai='$nik' LIMIT 1";
				}else{
					$sql_quiz_answer="select * from dat_jawabancore where nik ='$nik' and NRKmenilai='$nppmenilai' LIMIT 1";
				}
				//echo $sql_quiz_answer;echo exit;
				$result_quiz_answer = $db -> Execute($sql_quiz_answer);
				$rs_quiz_answer = $result_quiz_answer->FetchRow();
				$tahun = date('Y'); 
				
				if(!empty($rs_quiz_answer['id_pegawai']) && $rs_quiz_answer['tahun']==$tahun){
					$kuis="disabled";
					//$button="";
				//echo $button;echo exit;
				}
				//echo $rs_quiz_answer['tahun'];echo exit;
				//echo $rs_quiz_answer['id_pegawai'];echo "--";echo $rs_quiz_answer['tahun'];echo "-";echo $tahun;echo exit;
				//$smarty -> assign("kuis",$kuis);
				$smarty->display("isi_kompetensi.tpl");
				
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