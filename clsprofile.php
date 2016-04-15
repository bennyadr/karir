<?php
require ('libs/Smarty.class.php');
require ('config.php');

//require ('user_cek.php');
class profile {

	    function showProfile() {
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
		//echo $_SESSION[sessionnik];exit;
		
		$sqlc = "SELECT a.id, a.NIK, nama, a.id_jbt,id_divisi,pend_darat,id_stskawin,id_agama,status_p,divisi,pathktp,pathnikah,pathnpwp,pathbpjs,pathbpjssehat,pathreke,pathkk, tlahir,
date_format( tglahir2, '%d/%m/%Y' ) AS tglahir, date_format( tgl_masuk, '%d/%m/%Y' ) AS tgl_masuk2,
case when tgl_tidakaktif ='0000-00-00' then null else date_format( tgl_tidakaktif, '%d/%m/%Y' ) end AS tgl_keluar2,
tab_stskawin.stskawin,tab_stskawin.ket,telpon_kantor, jamsostek, npwp, bank, no_rek,email,
case when status_p='A' then 'Aktif' else '' end as status_k, keterangan, telpon_rumah,a.sex, agama, address, alamat_sementara, hp,ktp,
nama_jabatan, round(datediff(now(), a.tglahir2)/365,0) as usia, round(datediff(now(), a.tgl_masuk)/365,0) as MasaKerja,
a.pathfoto,a.gaji_lumpsum,nama_pendidikan FROM tab_employee a
			LEFT JOIN tab_jabatan ON a.id_jbt = tab_jabatan.id_jbt
			LEFT JOIN tab_agama ON a.id_agama = tab_agama.id
			LEFT JOIN tab_stskawin ON a.id_stskawin = tab_stskawin.id
			LEFT JOIN tab_divisi ON a.id_divisi = tab_divisi.id
			LEFT JOIN tab_pendidikan on a.pend_darat= tab_pendidikan.id_pen
			WHERE a.id='$_SESSION[sessionnik]'";       
		    
		    $rsc = $db -> execute($sqlc);
			$data = $rsc->FetchRow();
			$gambar = $data['pathfoto'];
			$idpeg = $data['id'];
			$nik = $data['NIK'];
			$nama = $data['nama'];
            $jabatan = $data['nama_jabatan'];
			$divisi = $data['divisi'];
			$tlahir = $data['tlahir'];
			$tglahir = $data['tglahir'];
			$sex = $data['sex'];
			$hp = $data['hp'];
			$email = $data['email'];
			$ktp = $data['ktp'];
			$norek = $data['no_rek'];
			$npwp = $data['npwp'];
			$telp = $data['telpon_rumah'];					
			$pendidikan = $data['nama_pendidikan'];
			$alamatktp = $data['address'];
			$alamatsmr = $data['alamat_sementara'];
			$agama = $data['agama'];			
			$jamsostek = $data['jamsostek'];
			$bank = $data['bank'];
			$status = $data['status_k'];
			$stskawin = $data['stskawin'].' - '.$data['ket'];
			$pathktp = $data['pathktp'];
			$pathnikah = $data['pathnikah'];
			$pathnpwp = $data['pathnpwp'];
			$pathbpjs = $data['pathbpjs'];
			$pathbpjssehat = $data['pathbpjssehat'];
			$pathreke = $data['pathreke'];
			$pathkk = $data['pathkk'];
			
						$sql_pendidikan="SELECT a.id,id_peg,sekolah_univ,tahun_awal,tahun_akhir,ipk,gelar,tempat,jurusan,nama_pendidikan,keterangan FROM dat_pendidikan a 
			left join tab_pendidikan b on a.id_tingkat = b.id_pen
			where id_peg = '$nik' order by a.id asc";
			//echo $sql_pendidikan;
			$result_pendidikan = $db->Execute($sql_pendidikan);
			//echo $result_pendidikan;
			$no=0;
			$kosong = 'n/a';
			if (!$result_pendidikan->RecordCount())
	        {
	         // echo 1;   
	             $pendidikan_list[] = array(
				 'no'=>$kosong,
	             'id'=>$kosong,
				 'id_peg'=>$kosong,
				 'sekolah'=>$kosong,
				 'tempat'=>$kosong,
				 'jurusan'=>$kosong,
				 'ipk'=>$kosong,
				 'gelar'=>$kosong,
				 'tingkat'=>$kosong,
				 'path'=>$kosong,
				 'update_user'=>$kosong,
				 'tanggal_update'=>$kosong
				 );
	        }else{
				//echo 2;
			while($rs_pendidikan = $result_pendidikan->FetchRow()){
				 ++$no;
				 $pendidikan_list[] = array(
										'no'=>$no,
										'id'=>$rs_pendidikan['id'],
										'id_peg'=>$rs_pendidikan['id_peg'],
	                                    'tahun_awal'=>$rs_pendidikan['tahun_awal'],
										'tahun_akhir'=>$rs_pendidikan['tahun_akhir'],
										'sekolah'=>$rs_pendidikan['sekolah_univ'],
										'tempat'=>$rs_pendidikan['tempat'],
										'jurusan'=>$rs_pendidikan['jurusan'],
										'ipk'=>$rs_pendidikan['ipk'],
										'gelar'=>$rs_pendidikan['gelar'],
										'ket'=>$rs_pendidikan['keterangan']
	                                    );
			}
			}
			$smarty->assign("pendidikan_list",$pendidikan_list);
			
			// untuk mendapatkan data kursus
			$sql_kursus="SELECT * FROM dat_kursus where id_peg = '$idpeg' order by id asc";
			$result_kursus = $db -> Execute($sql_kursus);
			$no=0;
			$kosong = 'n/a';
			if (!$result_kursus->RecordCount())
	        {
	             
	             $kursus_list[] = array(
				 'no'=>$kosong,
	             'id'=>$kosong,
				 'id_peg'=>$kosong,
				 'kursus'=>$kosong,
				 'instansi'=>$kosong,
				 'kota'=>$kosong,
				 'tahun'=>$kosong,
				 'sertifikat'=>$kosong,
				 'no_sertifikat'=>$kosong,
				 'ket'=>$kosong,
				 'update_user'=>$kosong,
				 'tanggal_update'=>$kosong
				 );
	        }else{
			while($rs_kursus = $result_kursus->FetchRow()){
				 ++$no;
				 $kursus_list[] = array(
										'no'=>$no,
										'id'=>$rs_kursus['id'],
										'id_peg'=>$rs_kursus['id_peg'],
	                                    'kursus'=>$rs_kursus['kursus'],
										'instansi'=>$rs_kursus['instansi'],
										'kota'=>$rs_kursus['kota'],
										'tahun'=>$rs_kursus['tahun'],
										'sertifikat'=>$rs_kursus['sertifikat'],
										'no_sertifikat'=>$rs_kursus['no_sertifikat'],
										'path'=>$rs_kursus['pathsertifikat'],
										'ket'=>$rs_kursus['keterangan'],
										'update_user'=>$rs_kursus['Userinsert'],
										'tanggal_update'=>$rs_kursus['tglinsert']
	                                    );
			}
			}
			$smarty->assign("kursus_list",$kursus_list);
			
			
			$sql_pekerjaan="SELECT id, id_peg, perusahaan, jabatan, deskripsi, alamat, 
			date_format(tgl_mulai, '%d/%m/%Y') as tgl_mulai2,date_format(tgl_akhir, '%d/%m/%Y') as tgl_akhir2, Userinsert, tglinsert FROM dat_mutasi_jabatan
			where id_peg = '$idpeg' order by id asc";
			$result_pekerjaan = $db -> Execute($sql_pekerjaan);
			$no=0;
			$kosong = 'n/a';
			if (!$result_pekerjaan->RecordCount())
	        {
	             
	             $pekerjaan_list[] = array(
				 'no'=>$kosong,
	             'id'=>$kosong,
				 'id_peg'=>$kosong,
				 'perusahaan'=>$kosong,
				 'jabatan'=>$kosong,
				 'deskripsi'=>$kosong,
				 'alamat'=>$kosong,
				 'tgl_mulai'=>$kosong,
				 'tgl_akhir'=>$kosong,
				 'update_user'=>$kosong,
				 'tanggal_update'=>$kosong
				 );
	        }else{
			while($rs_pekerjaan = $result_pekerjaan->FetchRow()){
				 ++$no;
				 $pekerjaan_list[] = array(
										'no'=>$no,
										'id'=>$rs_pekerjaan['id'],
										'id_peg'=>$rs_pekerjaan['id_peg'],
	                                    'perusahaan'=>$rs_pekerjaan['perusahaan'],
										'jabatan'=>$rs_pekerjaan['jabatan'],
										'deskripsi'=>$rs_pekerjaan['deskripsi'],
										'alamat'=>$rs_pekerjaan['alamat'],
										'tgl_mulai'=>$rs_pekerjaan['tgl_mulai2'],
										'tgl_akhir'=>$rs_pekerjaan['tgl_akhir2'],
										'update_user'=>$rs_pekerjaan['Userinsert'],
										'tanggal_update'=>$rs_pekerjaan['tglinsert']
	                                    );
			}
			}
			$smarty->assign("pekerjaan_list",$pekerjaan_list);
			
			// untuk mendapatkan data organisasi
			$sql_organisasi="SELECT * FROM dat_organisasi where id_peg = '$idpeg' order by id asc";
			$result_organisasi = $db -> Execute($sql_organisasi);
			$no=0;
			$kosong = 'n/a';
			if (!$result_organisasi->RecordCount())
	        {
	             
	             $organisasi_list[] = array(
				 'no'=>$kosong,
	             'id'=>$kosong,
				 'id_peg'=>$kosong,
				 'organisasi'=>$kosong,
				 'jabatan'=>$kosong,
				 'tahun'=>$kosong,
				 'update_user'=>$kosong,
				 'tanggal_user'=>$kosong
				 );
	        }else{
			while($rs_organisasi = $result_organisasi->FetchRow()){
				 ++$no;
				 $organisasi_list[] = array(
										'no'=>$no,
										'id'=>$rs_organisasi['id'],
										'id_peg'=>$rs_organisasi['id_peg'],
	                                    'organisasi'=>$rs_organisasi['nm_organisasi'],
										'jabatan'=>$rs_organisasi['jabatan'],
										'tahun'=>$rs_organisasi['tahun'],
										'update_user'=>$rs_organisasi['Userinsert'],
										'tanggal_user'=>$rs_organisasi['tglinsert']
	                                    );
			}
			}
			$smarty->assign("organisasi_list",$organisasi_list);
			
			// untuk mendapatkan data keluarga
			$sql_keluarga="SELECT *, date_format(tgl_lahir, '%d/%m/%Y') as tgl_lahir2 FROM dat_keluarga where id_peg = '$idpeg' order by id asc";
			$result_keluarga = $db -> Execute($sql_keluarga);
			$no=0;
			$kosong = 'n/a';
			if (!$result_keluarga->RecordCount())
	        {
	             
	             $keluarga_list[] = array(
				 'no'=>$kosong,
	             'id'=>$kosong,
				 'id_peg'=>$kosong,
				 'tgl_lahir'=>$kosong,
				 'nama'=>$kosong,
				 'status'=>$kosong,
				 'update_user'=>$kosong,
				 'tanggal_user'=>$kosong
				 );
	        }else{
			while($rs_keluarga = $result_keluarga->FetchRow()){
				 ++$no;
				 $keluarga_list[] = array(
										'no'=>$no,
										'id'=>$rs_keluarga['id'],
										'id_peg'=>$rs_keluarga['id_peg'],
	                                    'tgl_lahir'=>$rs_keluarga['tgl_lahir2'],
										'nama'=>$rs_keluarga['nama'],
										'status'=>$rs_keluarga['status'],
										'update_user'=>$rs_keluarga['Userinsert'],
										'tanggal_user'=>$rs_keluarga['tglinsert']
	                                    );
			}
			}
			$smarty->assign("keluarga_list",$keluarga_list);
			
			// untuk mendapatkan data kesehatan
			$sql_kesehatan="SELECT * FROM dat_kesehatan where id_peg = '$idpeg' order by id asc";
			$result_kesehatan = $db -> Execute($sql_kesehatan);
			$no=0;
			$kosong = 'n/a';
			if (!$result_kesehatan->RecordCount())
	        {
	             
	             $kesehatan_list[] = array(
				 'no'=>$kosong,
	             'id'=>$kosong,
				 'id_peg'=>$kosong,
				 'penyakit'=>$kosong,
				 'tahun'=>$kosong,
				 'ket'=>$kosong,
				 'update_user'=>$kosong,
				 'tanggal_user'=>$kosong
				 );
	        }else{
			while($rs_kesehatan = $result_kesehatan->FetchRow()){
				 ++$no;
				 $kesehatan_list[] = array(
										'no'=>$no,
										'id'=>$rs_kesehatan['id'],
										'id_peg'=>$rs_kesehatan['id_peg'],
	                                    'penyakit'=>$rs_kesehatan['penyakit'],
										'tahun'=>$rs_kesehatan['tahun'],
										'ket'=>$rs_kesehatan['keterangan'],
										'update_user'=>$rs_kesehatan['Userinsert'],
										'tanggal_user'=>$rs_kesehatan['tglinsert']
	                                    );
			}
			}
			$smarty->assign("kesehatan_list",$kesehatan_list);
			
			// untuk mendapatkan data penghargaan
			$sql_penghargaan="SELECT *, date_format(tgl_penghargaan, '%d/%m/%Y') as tgl_penghargaan2 FROM dat_penghargaan 
			where id_peg = '$idpeg' order by id desc";
			$result_penghargaan = $db -> Execute($sql_penghargaan);
			$no=0;
			$kosong = 'n/a';
			if (!$result_penghargaan->RecordCount())
	        {
	             
	             $penghargaan_list[] = array(
				 'no'=>$kosong,
	             'id'=>$kosong,
				 'id_peg'=>$kosong,
				 'penghargaan'=>$kosong,
				 'tgl_penghargaan'=>$kosong,
				 'pemberi_penghargaan'=>$kosong,
				 'ket'=>$kosong,
				 'update_user'=>$kosong,
				 'tanggal_user'=>$kosong
				 );
	        }else{
			while($rs_penghargaan = $result_penghargaan->FetchRow()){
				 ++$no;
				 $penghargaan_list[] = array(
										'no'=>$no,
										'id'=>$rs_penghargaan['id'],
										'id_peg'=>$rs_penghargaan['id_peg'],
	                                    'penghargaan'=>$rs_penghargaan['penghargaan'],
										'tgl_penghargaan'=>$rs_penghargaan['tgl_penghargaan2'],
										'pemberi_penghargaan'=>$rs_penghargaan['pemberi_penghargaan'],
										'ket'=>$rs_penghargaan['keterangan'],
										'update_user'=>$rs_penghargaan['Userinsert'],
										'tanggal_user'=>$rs_penghargaan['tglinsert']
	                                    );
			}
			}
			$smarty->assign("penghargaan_list",$penghargaan_list);
			
			// untuk mendapatkan data hukuman
			$sql_hukuman="SELECT *, date_format(tgl_sanksi, '%d/%m/%Y') as tglsanksi FROM dat_sanksi 
			where id_peg = '$idpeg' order by id asc";
			$result_hukuman = $db -> Execute($sql_hukuman);
			$no=0;
			$kosong = 'n/a';
			if (!$result_hukuman->RecordCount())
	        {
	             
	             $hukuman_list[] = array(
				 'no'=>$kosong,
	             'id'=>$kosong,
				 'id_peg'=>$kosong,
				 'tgl_sanksi'=>$kosong,
				 'no_sanksi'=>$kosong,
				 'hukuman'=>$kosong,
				 'pemberi_hukuman'=>$kosong,
				 'ket'=>$kosong,
				 'update_user'=>$kosong,
				 'tanggal_user'=>$kosong
				 );
	        }else{
			while($rs_hukuman = $result_hukuman->FetchRow()){
				 ++$no;
				 $hukuman_list[] = array(
										'no'=>$no,
										'id'=>$rs_hukuman['id'],
										'id_peg'=>$rs_hukuman['id_peg'],
										'hukuman'=>$rs_hukuman['hukuman'],
										'tgl_sanksi'=>$rs_hukuman['tglsanksi'],
										'no_sanksi'=>$rs_hukuman['no_sanksi'],
										'pemberi_hukuman'=>$rs_hukuman['pemberi_hukuman'],
										'ket'=>$rs_hukuman['keterangan'],
										'update_user'=>$rs_hukuman['Userinsert'],
										'tanggal_user'=>$rs_hukuman['tglinsert']
	                                    );
			}
			}
			$smarty->assign("hukuman_list",$hukuman_list);
			
			// untuk mendapatkan data mcu
			$sql_mcu="SELECT *, date_format(tgl_pemeriksaan, '%d/%m/%Y') as tgl_pemeriksaan2, date_format(tgl_dari, '%d/%m/%Y') as tgl_dari2, date_format(tgl_sampai, '%d/%m/%Y') as tgl_sampai2 FROM dat_mcu where id_peg = '$idpeg' order by id asc";
			$result_mcu = $db->Execute($sql_mcu);
			$no=0;
			$kosong = 'n/a';
			if (!$result_mcu->RecordCount())
	        {
	             
	             $mcu_list[] = array(
				 'no'=>$kosong,
	             'id'=>$kosong,
				 'id_peg'=>$kosong,
				 'tgl_pemeriksaan'=>$kosong,
				 'hasil'=>$kosong,
				 'tenaga'=>$kosong,
				 'catatan'=>$kosong,
				 'tgl_dari'=>$kosong,
				 'tgl_sampai'=>$kosong,
				 'ket'=>$kosong,
				 'update_user'=>$kosong,
				 'tanggal_user'=>$kosong
				 );
	        }else{
			while($rs_mcu = $result_mcu->FetchRow()){
				 ++$no;
				 $mcu_list[] = array(
										'no'=>$no,
										'id'=>$rs_mcu['id'],
										'id_peg'=>$rs_mcu['id_peg'],
	                                    'tgl_pemeriksaan'=>$rs_mcu['tgl_pemeriksaan2'],
										'hasil'=>$rs_mcu['hasil_pemeriksaan'],
										'tenaga'=>$rs_mcu['tenaga_medis'],
										'catatan'=>$rs_mcu['catatan'],
										'tgl_dari'=>$rs_mcu['tgl_dari2'],
										'tgl_sampai'=>$rs_mcu['tgl_sampai2'],
										'ket'=>$rs_mcu['keterangan'],
										'update_user'=>$rs_mcu['Userinsert'],
										'tanggal_user'=>$rs_mcu['tglinsert']
	                                    );
			}
			}
			$smarty->assign("mcu_list",$mcu_list);
			
	        			

			$smarty->assign("nik", $nik);
			$smarty->assign("nama", $nama);
			$smarty->assign("jabatan", $jabatan);
			$smarty->assign("gambar", $gambar);
			$smarty->assign("divisi", $divisi);
			$smarty->assign("tempat", $tlahir);
			$smarty->assign("tanggal", $tglahir);
			$smarty->assign("sex", $sex);
			$smarty->assign("hp", $hp);
			$smarty->assign("ktp", $ktp);
			$smarty->assign("email", $email);
			$smarty->assign("telp", $telp);
			$smarty->assign("status", $status);
			$smarty->assign("pendidikan", $pendidikan);
			$smarty->assign("alamatktp", $alamatktp);
			$smarty->assign("alamatsmr", $alamatsmr);
			$smarty->assign("agama", $agama);
			$smarty->assign("jamsostek", $jamsostek);
			$smarty->assign("npwp", $npwp);
			$smarty->assign("bank", $bank);
			$smarty->assign("norek", $norek);
			$smarty->assign("stskawin", $stskawin);
			$smarty->assign("pathktp", $pathktp);
			$smarty->assign("pathnikah", $pathnikah);
			$smarty->assign("pathnpwp", $pathnpwp);
			$smarty->assign("pathbpjs", $pathbpjs);
			$smarty->assign("pathbpjssehat", $pathbpjssehat);
			$smarty->assign("pathreke", $pathreke);
			$smarty->assign("pathkk", $pathkk);
			$smarty->assign("idpeg", $_SESSION['sessionnik']);
			//echo ;exit;	
			$smarty->display("profile.tpl");
        }


        function EditProfile()
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

		$sqlc = "SELECT a.id, a.NIK, nama, a.id_jbt,id_divisi,pend_darat,id_stskawin,id_agama,status_p,divisi,pathktp,pathnikah,pathnpwp,pathbpjs,pathbpjssehat,pathreke,pathkk, tlahir,
date_format( tglahir2, '%d/%m/%Y' ) AS tglahir, date_format( tgl_masuk, '%d/%m/%Y' ) AS tgl_masuk2,
case when tgl_tidakaktif ='0000-00-00' then null else date_format( tgl_tidakaktif, '%d/%m/%Y' ) end AS tgl_keluar2,
tab_stskawin.stskawin,tab_stskawin.ket,telpon_kantor, jamsostek, npwp, bank, no_rek,email,
case when status_p='A' then 'Aktif' else '' end as status_k, keterangan, telpon_rumah,a.sex, agama, address, alamat_sementara, hp,ktp,
nama_jabatan, round(datediff(now(), a.tglahir2)/365,0) as usia, round(datediff(now(), a.tgl_masuk)/365,0) as MasaKerja,
a.pathfoto,a.gaji_lumpsum,nama_pendidikan FROM tab_employee a
			LEFT JOIN tab_jabatan ON a.id_jbt = tab_jabatan.id_jbt
			LEFT JOIN tab_agama ON a.id_agama = tab_agama.id
			LEFT JOIN tab_stskawin ON a.id_stskawin = tab_stskawin.id
			LEFT JOIN tab_divisi ON a.id_divisi = tab_divisi.id
			LEFT JOIN tab_pendidikan on a.pend_darat= tab_pendidikan.id_pen
			where a.id = '$_SESSION[sessionnik]'";       
		    $rsc = $db -> execute($sqlc);
			$data = $rsc->FetchRow();

			$gambar = $data['pathfoto'];
			$idpeg = $data['id'];
			$nik = $data['NIK'];
			$nama = $data['nama'];
            $jabatan = $data['nama_jabatan'];
			$divisi = $data['divisi'];
			$tlahir = $data['tlahir'];
			$tglahir = $data['tglahir'];
			$sex = $data['sex'];
			$hp = $data['hp'];
			$email = $data['email'];
			$ktp = $data['ktp'];
			$norek = $data['no_rek'];
			$npwp = $data['npwp'];
			$telp = $data['telpon_rumah'];					
			$pendidikan = $data['nama_pendidikan'];
			$alamatktp = $data['address'];
			$alamatsmr = $data['alamat_sementara'];
			$agama = $data['agama'];			
			$jamsostek = $data['jamsostek'];
			$bank = $data['bank'];
			$status = $data['status_k'];
			$stskawin = $data['stskawin'].' - '.$data['ket'];
			$pathktp = $data['pathktp'];
			$pathnikah = $data['pathnikah'];
			$pathnpwp = $data['pathnpwp'];
			$pathbpjs = $data['pathbpjs'];
			$pathbpjssehat = $data['pathbpjssehat'];
			$pathreke = $data['pathreke'];
			$pathkk = $data['pathkk'];
			// OPTION DATA
			$idjabatan = $data['id_jbt']; 
			$iddivisi = $data['id_divisi']; 
			$idpend = $data['pend_darat'];
			$statusp = $data['status_p']; 			
			$idstskawin = $data['id_stskawin']; 
			$idagama = $data['id_agama']; 

		    $jabatan_opt = $this->jabatan_opt($data['id_jbt']);
			$smarty->assign("jabatan_opt",$jabatan_opt);
			
			$stskawin_opt = $this->stskawin_opt($data['id_stskawin']);
			$smarty->assign("stskawin_opt",$stskawin_opt);

			$penddarat_opt = $this->penddarat_opt($data['pend_darat']);
			$smarty->assign("penddarat_opt",$penddarat_opt);

			$agama_opt = $this->agama_opt($data['id_agama']);
			$smarty->assign("agama_opt",$agama_opt);



			$divisi_opt = $this->divisi_opt($data['id_divisi']);
			$smarty->assign("divisi_opt",$divisi_opt);
// untuk mendapatkan data pendidikan
			$sql_pendidikan="SELECT a.id,id_peg,tahun_awal,tahun_akhir,sekolah_univ,ipk,gelar,tempat,jurusan,nama_pendidikan,keterangan FROM dat_pendidikan a 
			left join tab_pendidikan b on a.id_tingkat = b.id_pen
			where id_peg = '$nik' order by a.id asc";
			//echo $sql_pendidikan;
			$result_pendidikan = $db->Execute($sql_pendidikan);
			//echo $result_pendidikan;
			$no=0;
			$kosong = 'n/a';
			if (!$result_pendidikan->RecordCount())
	        {
	         // echo 1;   
	             $pendidikan_list[] = array(
				 'no'=>$kosong,
	             'id'=>$kosong,
				 'id_peg'=>$kosong,
				 'sekolah'=>$kosong,
				 'tempat'=>$kosong,
				 'jurusan'=>$kosong,
				 'ipk'=>$kosong,
				 'gelar'=>$kosong,
				 'tingkat'=>$kosong,
				 'path'=>$kosong,
				 'update_user'=>$kosong,
				 'tanggal_update'=>$kosong
				 );
	        }else{
				//echo 2;
			while($rs_pendidikan = $result_pendidikan->FetchRow()){
				 ++$no;
				 $pendidikan_list[] = array(
										'no'=>$no,
										'id'=>$rs_pendidikan['id'],
										'id_peg'=>$rs_pendidikan['id_peg'],
	                                    'tahun_awal'=>$rs_pendidikan['tahun_awal'],
										'tahun_akhir'=>$rs_pendidikan['tahun_akhir'],
										'sekolah'=>$rs_pendidikan['sekolah_univ'],
										'tempat'=>$rs_pendidikan['tempat'],
										'jurusan'=>$rs_pendidikan['jurusan'],
										'ipk'=>$rs_pendidikan['ipk'],
										'tingkat'=>$rs_pendidikan['nama_pendidikan'],
										'gelar'=>$rs_pendidikan['gelar'],
										'ket'=>$rs_pendidikan['keterangan']
	                                    );
			}
			}
			$smarty->assign("pendidikan_list",$pendidikan_list);
			
			// untuk mendapatkan data kursus
			$sql_kursus="SELECT * FROM dat_kursus where id_peg = '$idpeg' order by id asc";
			$result_kursus = $db -> Execute($sql_kursus);
			$no=0;
			$kosong = 'n/a';
			if (!$result_kursus->RecordCount())
	        {
	             
	             $kursus_list[] = array(
				 'no'=>$kosong,
	             'id'=>$kosong,
				 'id_peg'=>$kosong,
				 'kursus'=>$kosong,
				 'instansi'=>$kosong,
				 'kota'=>$kosong,
				 'tahun'=>$kosong,
				 'sertifikat'=>$kosong,
				 'no_sertifikat'=>$kosong,
				 'ket'=>$kosong,
				 'update_user'=>$kosong,
				 'tanggal_update'=>$kosong
				 );
	        }else{
			while($rs_kursus = $result_kursus->FetchRow()){
				 ++$no;
				 $kursus_list[] = array(
										'no'=>$no,
										'id'=>$rs_kursus['id'],
										'id_peg'=>$rs_kursus['id_peg'],
	                                    'kursus'=>$rs_kursus['kursus'],
										'instansi'=>$rs_kursus['instansi'],
										'kota'=>$rs_kursus['kota'],
										'tahun'=>$rs_kursus['tahun'],
										'sertifikat'=>$rs_kursus['sertifikat'],
										'no_sertifikat'=>$rs_kursus['no_sertifikat'],
										'path'=>$rs_kursus['pathsertifikat'],
										'ket'=>$rs_kursus['keterangan'],
										'update_user'=>$rs_kursus['Userinsert'],
										'tanggal_update'=>$rs_kursus['tglinsert']
	                                    );
			}
			}
			$smarty->assign("kursus_list",$kursus_list);
			
			// untuk mendapatkan data pekerjaan
			$sql_pekerjaan="SELECT id, id_peg, perusahaan, jabatan, deskripsi, alamat, 
			date_format(tgl_mulai, '%d/%m/%Y') as tgl_mulai2,date_format(tgl_akhir, '%d/%m/%Y') as tgl_akhir2, Userinsert, tglinsert FROM dat_mutasi_jabatan
			where id_peg = '$idpeg' order by id asc";
			$result_pekerjaan = $db -> Execute($sql_pekerjaan);
			$no=0;
			$kosong = 'n/a';
			if (!$result_pekerjaan->RecordCount())
	        {
	             
	             $pekerjaan_list[] = array(
				 'no'=>$kosong,
	             'id'=>$kosong,
				 'id_peg'=>$kosong,
				 'perusahaan'=>$kosong,
				 'jabatan'=>$kosong,
				 'deskripsi'=>$kosong,
				 'alamat'=>$kosong,
				 'tgl_mulai'=>$kosong,
				 'tgl_akhir'=>$kosong,
				 'update_user'=>$kosong,
				 'tanggal_update'=>$kosong
				 );
	        }else{
			while($rs_pekerjaan = $result_pekerjaan->FetchRow()){
				 ++$no;
				 $pekerjaan_list[] = array(
										'no'=>$no,
										'id'=>$rs_pekerjaan['id'],
										'id_peg'=>$rs_pekerjaan['id_peg'],
	                                    'perusahaan'=>$rs_pekerjaan['perusahaan'],
										'jabatan'=>$rs_pekerjaan['jabatan'],
										'deskripsi'=>$rs_pekerjaan['deskripsi'],
										'alamat'=>$rs_pekerjaan['alamat'],
										'tgl_mulai'=>$rs_pekerjaan['tgl_mulai2'],
										'tgl_akhir'=>$rs_pekerjaan['tgl_akhir2'],
										'update_user'=>$rs_pekerjaan['Userinsert'],
										'tanggal_update'=>$rs_pekerjaan['tglinsert']
	                                    );
			}
			}
			$smarty->assign("pekerjaan_list",$pekerjaan_list);
			
			// untuk mendapatkan data organisasi
			$sql_organisasi="SELECT * FROM dat_organisasi where id_peg = '$idpeg' order by id asc";
			$result_organisasi = $db -> Execute($sql_organisasi);
			$no=0;
			$kosong = 'n/a';
			if (!$result_organisasi->RecordCount())
	        {
	             
	             $organisasi_list[] = array(
				 'no'=>$kosong,
	             'id'=>$kosong,
				 'id_peg'=>$kosong,
				 'organisasi'=>$kosong,
				 'jabatan'=>$kosong,
				 'tahun'=>$kosong,
				 'update_user'=>$kosong,
				 'tanggal_user'=>$kosong
				 );
	        }else{
			while($rs_organisasi = $result_organisasi->FetchRow()){
				 ++$no;
				 $organisasi_list[] = array(
										'no'=>$no,
										'id'=>$rs_organisasi['id'],
										'id_peg'=>$rs_organisasi['id_peg'],
	                                    'organisasi'=>$rs_organisasi['nm_organisasi'],
										'jabatan'=>$rs_organisasi['jabatan'],
										'tahun'=>$rs_organisasi['tahun'],
										'update_user'=>$rs_organisasi['Userinsert'],
										'tanggal_user'=>$rs_organisasi['tglinsert']
	                                    );
			}
			}
			$smarty->assign("organisasi_list",$organisasi_list);
			
			// untuk mendapatkan data keluarga
			$sql_keluarga="SELECT *, date_format(tgl_lahir, '%d/%m/%Y') as tgl_lahir2 FROM dat_keluarga where id_peg = '$idpeg' order by id asc";
			$result_keluarga = $db -> Execute($sql_keluarga);
			$no=0;
			$kosong = 'n/a';
			if (!$result_keluarga->RecordCount())
	        {
	             
	             $keluarga_list[] = array(
				 'no'=>$kosong,
	             'id'=>$kosong,
				 'id_peg'=>$kosong,
				 'tgl_lahir'=>$kosong,
				 'nama'=>$kosong,
				 'status'=>$kosong,
				 'update_user'=>$kosong,
				 'tanggal_user'=>$kosong
				 );
	        }else{
			while($rs_keluarga = $result_keluarga->FetchRow()){
				 ++$no;
				 $keluarga_list[] = array(
										'no'=>$no,
										'id'=>$rs_keluarga['id'],
										'id_peg'=>$rs_keluarga['id_peg'],
	                                    'tgl_lahir'=>$rs_keluarga['tgl_lahir2'],
										'nama'=>$rs_keluarga['nama'],
										'status'=>$rs_keluarga['status'],
										'update_user'=>$rs_keluarga['Userinsert'],
										'tanggal_user'=>$rs_keluarga['tglinsert']
	                                    );
			}
			}
			$smarty->assign("keluarga_list",$keluarga_list);
			
			// untuk mendapatkan data kesehatan
			$sql_kesehatan="SELECT * FROM dat_kesehatan where id_peg = '$idpeg' order by id asc";
			$result_kesehatan = $db -> Execute($sql_kesehatan);
			$no=0;
			$kosong = 'n/a';
			if (!$result_kesehatan->RecordCount())
	        {
	             
	             $kesehatan_list[] = array(
				 'no'=>$kosong,
	             'id'=>$kosong,
				 'id_peg'=>$kosong,
				 'penyakit'=>$kosong,
				 'tahun'=>$kosong,
				 'ket'=>$kosong,
				 'update_user'=>$kosong,
				 'tanggal_user'=>$kosong
				 );
	        }else{
			while($rs_kesehatan = $result_kesehatan->FetchRow()){
				 ++$no;
				 $kesehatan_list[] = array(
										'no'=>$no,
										'id'=>$rs_kesehatan['id'],
										'id_peg'=>$rs_kesehatan['id_peg'],
	                                    'penyakit'=>$rs_kesehatan['penyakit'],
										'tahun'=>$rs_kesehatan['tahun'],
										'ket'=>$rs_kesehatan['keterangan'],
										'update_user'=>$rs_kesehatan['Userinsert'],
										'tanggal_user'=>$rs_kesehatan['tglinsert']
	                                    );
			}
			}
			$smarty->assign("kesehatan_list",$kesehatan_list);
			
			// untuk mendapatkan data penghargaan
			$sql_penghargaan="SELECT *, date_format(tgl_penghargaan, '%d/%m/%Y') as tgl_penghargaan2 FROM dat_penghargaan 
			where id_peg = '$idpeg' order by id desc";
			$result_penghargaan = $db -> Execute($sql_penghargaan);
			$no=0;
			$kosong = 'n/a';
			if (!$result_penghargaan->RecordCount())
	        {
	             
	             $penghargaan_list[] = array(
				 'no'=>$kosong,
	             'id'=>$kosong,
				 'id_peg'=>$kosong,
				 'penghargaan'=>$kosong,
				 'tgl_penghargaan'=>$kosong,
				 'pemberi_penghargaan'=>$kosong,
				 'ket'=>$kosong,
				 'update_user'=>$kosong,
				 'tanggal_user'=>$kosong
				 );
	        }else{
			while($rs_penghargaan = $result_penghargaan->FetchRow()){
				 ++$no;
				 $penghargaan_list[] = array(
										'no'=>$no,
										'id'=>$rs_penghargaan['id'],
										'id_peg'=>$rs_penghargaan['id_peg'],
	                                    'penghargaan'=>$rs_penghargaan['penghargaan'],
										'tgl_penghargaan'=>$rs_penghargaan['tgl_penghargaan2'],
										'pemberi_penghargaan'=>$rs_penghargaan['pemberi_penghargaan'],
										'ket'=>$rs_penghargaan['keterangan'],
										'update_user'=>$rs_penghargaan['Userinsert'],
										'tanggal_user'=>$rs_penghargaan['tglinsert']
	                                    );
			}
			}
			$smarty->assign("penghargaan_list",$penghargaan_list);
			
			// untuk mendapatkan data hukuman
			$sql_hukuman="SELECT *, date_format(tgl_sanksi, '%d/%m/%Y') as tglsanksi FROM dat_sanksi 
			where id_peg = '$idpeg' order by id asc";
			$result_hukuman = $db -> Execute($sql_hukuman);
			$no=0;
			$kosong = 'n/a';
			if (!$result_hukuman->RecordCount())
	        {
	             
	             $hukuman_list[] = array(
				 'no'=>$kosong,
	             'id'=>$kosong,
				 'id_peg'=>$kosong,
				 'tgl_sanksi'=>$kosong,
				 'no_sanksi'=>$kosong,
				 'hukuman'=>$kosong,
				 'pemberi_hukuman'=>$kosong,
				 'ket'=>$kosong,
				 'update_user'=>$kosong,
				 'tanggal_user'=>$kosong
				 );
	        }else{
			while($rs_hukuman = $result_hukuman->FetchRow()){
				 ++$no;
				 $hukuman_list[] = array(
										'no'=>$no,
										'id'=>$rs_hukuman['id'],
										'id_peg'=>$rs_hukuman['id_peg'],
										'hukuman'=>$rs_hukuman['hukuman'],
										'tgl_sanksi'=>$rs_hukuman['tglsanksi'],
										'no_sanksi'=>$rs_hukuman['no_sanksi'],
										'pemberi_hukuman'=>$rs_hukuman['pemberi_hukuman'],
										'ket'=>$rs_hukuman['keterangan'],
										'update_user'=>$rs_hukuman['Userinsert'],
										'tanggal_user'=>$rs_hukuman['tglinsert']
	                                    );
			}
			}
			$smarty->assign("hukuman_list",$hukuman_list);
			
			// untuk mendapatkan data mcu
			$sql_mcu="SELECT *, date_format(tgl_pemeriksaan, '%d/%m/%Y') as tgl_pemeriksaan2, date_format(tgl_dari, '%d/%m/%Y') as tgl_dari2, date_format(tgl_sampai, '%d/%m/%Y') as tgl_sampai2 FROM dat_mcu where id_peg = '$idpeg' order by id asc";
			$result_mcu = $db->Execute($sql_mcu);
			$no=0;
			$kosong = 'n/a';
			if (!$result_mcu->RecordCount())
	        {
	             
	             $mcu_list[] = array(
				 'no'=>$kosong,
	             'id'=>$kosong,
				 'id_peg'=>$kosong,
				 'tgl_pemeriksaan'=>$kosong,
				 'hasil'=>$kosong,
				 'tenaga'=>$kosong,
				 'catatan'=>$kosong,
				 'tgl_dari'=>$kosong,
				 'tgl_sampai'=>$kosong,
				 'ket'=>$kosong,
				 'update_user'=>$kosong,
				 'tanggal_user'=>$kosong
				 );
	        }else{
			while($rs_mcu = $result_mcu->FetchRow()){
				 ++$no;
				 $mcu_list[] = array(
										'no'=>$no,
										'id'=>$rs_mcu['id'],
										'id_peg'=>$rs_mcu['id_peg'],
	                                    'tgl_pemeriksaan'=>$rs_mcu['tgl_pemeriksaan2'],
										'hasil'=>$rs_mcu['hasil_pemeriksaan'],
										'tenaga'=>$rs_mcu['tenaga_medis'],
										'catatan'=>$rs_mcu['catatan'],
										'tgl_dari'=>$rs_mcu['tgl_dari2'],
										'tgl_sampai'=>$rs_mcu['tgl_sampai2'],
										'ket'=>$rs_mcu['keterangan'],
										'update_user'=>$rs_mcu['Userinsert'],
										'tanggal_user'=>$rs_mcu['tglinsert']
	                                    );
			}
			}
			$smarty->assign("mcu_list",$mcu_list);

			$smarty->assign("nik", $nik);
			$smarty->assign("nama", $nama);
			$smarty->assign("jabatan", $jabatan);
			$smarty->assign("gambar", $gambar);
			$smarty->assign("divisi", $divisi);
			$smarty->assign("tempat", $tlahir);
			$smarty->assign("tanggal", $tglahir);
			$smarty->assign("sex", $sex);
			$smarty->assign("hp", $hp);
			$smarty->assign("ktp", $ktp);
			$smarty->assign("email", $email);
			$smarty->assign("telp", $telp);
			$smarty->assign("status", $status);
			$smarty->assign("pendidikan", $pendidikan);
			$smarty->assign("alamatktp", $alamatktp);
			$smarty->assign("alamatsmr", $alamatsmr);
			$smarty->assign("agama", $agama);
			$smarty->assign("jamsostek", $jamsostek);
			$smarty->assign("npwp", $npwp);
			$smarty->assign("bank", $bank);
			$smarty->assign("norek", $norek);
			$smarty->assign("stskawin", $stskawin);
			$smarty->assign("pathktp", $pathktp);
			$smarty->assign("pathnikah", $pathnikah);
			$smarty->assign("pathnpwp", $pathnpwp);
			$smarty->assign("pathbpjs", $pathbpjs);
			$smarty->assign("pathbpjssehat", $pathbpjssehat);
			$smarty->assign("pathreke", $pathreke);
			$smarty->assign("pathkk", $pathkk);
			
			$smarty->display("profile_edit.tpl");
        }
		
		function updateProfile()
		{
			require ('user_cek.php');
			global $title,$db;
			include "fn/fn_str.php";
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);

			$nik = $_POST['nik'];
		$name = $_POST['name'];
		$agama = $_POST['agama'];
		$sex = $_POST['sex'];
		$jabatan = $_POST['jabatan'];
		$stskawin = $_POST['stskawin']; 
		$divisi = $_POST['divisi'];
		$telpon_rumah = $_POST['telpon_rumah'];
		$hp = $_POST['hp'];
		$ktp = $_POST['ktp'];
		$email = $_POST['email'];
		$pend_darat = $_POST['pendidikan'];
		$tlahir = $_POST['tempat']; 
		$tgllahir = $_POST['tgllahir']; 
		$alamatktp = $_POST['alamatktp'];		
		$alamatsmr = $_POST['alamatsmr'];
		$npwp = $_POST['npwp'];
		$bank = $_POST['bank'];
		$norek = $_POST['norek'];
		$sql_x="SELECT stskawin FROM tab_stskawin where id='$stskawin'";
		$result_x = $db -> Execute($sql_x);
		$rsx = $result_x->FetchRow();
		$stskawinnya = $rsx['stskawin'];
		if (strlen($stskawinnya)==0)
		{
			$stskawinnya="-";
		}
		//;echo exit;
			

			$smarty->assign("nik", $nik);
			$smarty->assign("name", $name);
			$smarty->assign("tlahir", $tlahir);
			$smarty->assign("tgllahir", $tgllahir);
			$smarty->assign("alamatktp", $alamatktp);
			$smarty->assign("telpon_rumah", $telpon_rumah);
			$smarty->assign("hp", $hp);
			$smarty->assign("ktp", $ktp);
			$smarty->assign("email", $email);
			$smarty->assign("npwp", $npwp);
			$smarty->assign("alamatsmr", $alamatsmr);
			$smarty->assign("bank", $bank);
			$smarty->assign("norek", $norek);
			$smarty->assign("agama", $agama);
			$smarty->assign("stskawin", $stskawin);
			$smarty->assign("sex", $sex);
			$smarty->assign("pend_darat", $pend_darat);
			$smarty->assign("divisi", $divisi);
			
						$sql = "UPDATE tab_employee SET    
						nama = '$name',
						id_jbt = '$jabatan',
						id_divisi = '$divisi',
						id_stskawin = '$stskawin',
						stskawin='$stskawinnya',
						id_agama = '$agama',
						address = '$alamatktp',
						alamat_sementara = '$alamatsmr',
						tlahir = '$tlahir',
                        tglahir2 = STR_TO_DATE('$tgllahir', '%d/%m/%Y'),
						sex = '$sex',
						telpon_rumah = '$telpon_rumah',
						hp = '$hp',
						npwp = '$npwp',
						bank = '$bank',
						ktp = '$ktp',						
						email = '$email',
						no_rek = '$norek',
						pend_darat = '$pend_darat',
						Useredit = '$_SESSION[username]',
						tgledit = now()
            			WHERE NIK = '$nik'";
						
						
	        $result = $db->Execute($sql);
	        
	        //echo $sql;exit;
	       // exit();

	        if($result)
	        {
		       echo "<script language=javascript>
	                    alert('Terima Kasih, berhasil memperbaiki data');
	                    window.location='profile.php';
	                 </script>";
	        }
	        else
		{
			echo "<script language=javascript>
	                    alert('Gagal memperbaiki data');
	                    window.location='profile.php';
	                 </script>";
		}
        
	}
		// UPLOAD KTP
		function UploadKTP()
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
			
			
			$sqlc = "SELECT a.id,NIK,nama,nama_jabatan FROM tab_employee a
			left join tab_jabatan b on a.id_jbt = b.id_jbt
			WHERE a.id = '$_SESSION[sessionnik]'";       
		    $rsc = $db -> execute($sqlc);
			$data = $rsc->FetchRow();
			$nik = $data['NIK'];
			$id = $data['id'];
			$smarty->assign("nik", $nik);
			$smarty->assign("id", $id);
			$smarty->display("uploadktp.tpl");
        }
		
		function UploadKTPProcess()
		{


			global $title,$db;
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);
			//$smarty->assign("username",$_SESSION['username']);
			
			$kode = $_POST['nik'];

			$pathfilename =$_FILES['pathktp']['name']; 
			$pathfiletype =$_FILES['pathktp']['type']; 
			$pathfilesize =$_FILES['pathktp']['size']; 
			
			if(!empty($pathfilename)){
				//echo 1;
				//melakukan delete image
				$sqlc="SELECT pathktp FROM tab_employee where NIK = '$kode'";
				$resultc = $db -> Execute($sqlc);
				$rsc = $resultc->FetchRow();
				if(!empty($rsc[0])){
				unlink("$rsc[0]");
				}
				}
			
			if(!empty($pathfilename)){
			$pathfilelink ='dokumen'.'/'.$kode.'_KTP_'.$pathfilename;
			}
					//melakukan proses update
					if($pathfilesize > 500000){
					echo "<script language=javascript>
	                    alert('Gagal memperbaiki data, File Upload > 500 KB');
	                    </script>";
					 $smarty->display("uploadktp.tpl");
					}else{
					//window.location='employee.php?action=edit&id=$kode';
					//**************************melakukan aksi upload gambar
					move_uploaded_file($_FILES['pathktp']['tmp_name'],$pathfilelink);
				
				$sql = "UPDATE tab_employee SET pathktp = '$pathfilelink' where nik ='$kode'";
				//echo $sql;
				$result = $db->Execute($sql);


	        if($result)
	        {
	            echo "<script language=javascript>
	                    alert('Terima Kasih, berhasil mengupload data');
	                    window.location='profile.php?action=edit';
	                 </script>";
	        }
	        else{
	            echo "<script language=javascript>
	                    alert('Gagal mengupload data');
	                    history.go(-1);
	                 </script>";
			}
			}
			//$this->display("user_edit.html");
        }
		// END UPLOAD KTP
		// UPLOAD NPWP
		function UploadNPWP()
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
			
			$sqlc = "SELECT a.id,NIK,nama,nama_jabatan FROM tab_employee a
			left join tab_jabatan b on a.id_jbt = b.id_jbt
			WHERE a.id = '$_SESSION[sessionnik]'";       
		    $rsc = $db -> execute($sqlc);
			$data = $rsc->FetchRow();
			$nik = $data['NIK'];
			$id = $data['id'];
			$smarty->assign("nik", $nik);
			$smarty->assign("id", $id);
			
			$smarty->display("uploadnpwp.tpl");
        }
		
		function UploadNPWPProcess()
		{

			global $title,$db;
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);
			//$smarty->assign("username",$_SESSION['username']);
			
			$kode = $_POST['nik'];
			
			if(!empty($pathfilename)){
				//echo 1;
				//melakukan delete image
				$sqlc="SELECT pathnpwp FROM tab_employee where NIK = '$kode'";
				$resultc = $db -> Execute($sqlc);
				$rsc = $resultc->FetchRow();
				if(!empty($rsc[0])){
				unlink("$rsc[0]");
				}
				}
			
			if(!empty($pathfilename)){
			$pathfilelink ='dokumen'.'/'.$kode.'_NPWP_'.$pathfilename;
			}
					//melakukan proses update
					if($pathfilesize > 500000){
					echo "<script language=javascript>
	                    alert('Gagal memperbaiki data, File Upload > 500 KB');
	                    </script>";
					 $smarty->display("uploadnpwp.tpl");
					}else{
					//window.location='employee.php?action=edit&id=$kode';
					//**************************melakukan aksi upload gambar
					move_uploaded_file($_FILES['pathnpwp']['tmp_name'],$pathfilelink);
				
				$sql = "UPDATE tab_employee SET pathnpwp = '$pathfilelink' where nik ='$kode'";
				//echo $sql;
				$result = $db->Execute($sql);


	        if($result)
	        {
	            echo "<script language=javascript>
	                    alert('Terima Kasih, berhasil mengupload data');
	                    window.location='profile.php?action=edit';
	                 </script>";
	        }
	        else{
	            echo "<script language=javascript>
	                    alert('Gagal mengupload data');
	                    history.go(-1);
	                 </script>";
			}
			}
			//$this->display("user_edit.html");
        }
		// END UPLOAD NPWP
		// UPLOAD BPJS NAKER
		function UploadBPJS()
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
			
			
			$sqlc = "SELECT a.id,NIK,nama,nama_jabatan FROM tab_employee a
			left join tab_jabatan b on a.id_jbt = b.id_jbt
			WHERE a.id = '$_SESSION[sessionnik]'";       
		    $rsc = $db -> execute($sqlc);
			$data = $rsc->FetchRow();
			$nik = $data['NIK'];
			$id = $data['id'];
			$smarty->assign("nik", $nik);
			$smarty->assign("id", $id);
			$smarty->display("uploadbpjs.tpl");
        }
		
		function UploadBPJSProcess()
		{

			global $title,$db;
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);
			//$smarty->assign("username",$_SESSION['username']);
			
			$kode = $_POST['nik'];
			
			$pathfilename =$_FILES['pathbpjs']['name']; 
			$pathfiletype =$_FILES['pathbpjs']['type']; 
			$pathfilesize =$_FILES['pathbpjs']['size']; 
			
			if(!empty($pathfilename)){
				//echo 1;
				//melakukan delete image
				$sqlc="SELECT pathbpjs FROM tab_employee where NIK = '$kode'";
				$resultc = $db -> Execute($sqlc);
				$rsc = $resultc->FetchRow();
				if(!empty($rsc[0])){
				unlink("$rsc[0]");
				}
				}
			
			if(!empty($pathfilename)){
			$pathfilelink ='dokumen'.'/'.$kode.'_BPJS_'.$pathfilename;
			}
					//melakukan proses update
					if($pathfilesize > 500000){
					echo "<script language=javascript>
	                    alert('Gagal memperbaiki data, File Upload > 500 KB');
	                    </script>";
					 $smarty->display("uploadbpjs.tpl");
					}else{
					//window.location='employee.php?action=edit&id=$kode';
					//**************************melakukan aksi upload gambar
					move_uploaded_file($_FILES['pathbpjs']['tmp_name'],$pathfilelink);
				
				$sql = "UPDATE tab_employee SET pathbpjs = '$pathfilelink' where nik ='$kode'";
				//echo $sql;
				$result = $db->Execute($sql);


	        if($result)
	        {
	            echo "<script language=javascript>
	                    alert('Terima Kasih, berhasil mengupload data');
	                    window.location='profile.php?action=edit';
	                 </script>";
	        }
	        else{
	            echo "<script language=javascript>
	                    alert('Gagal mengupload data');
	                    history.go(-1);
	                 </script>";
			}
			}
			//$this->display("user_edit.html");
        }
		// END UPLOAD BPJS NAKER
		// UPLOAD BPJS SEHAT
		function UploadBPJSSehat()
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
			
			$sqlc = "SELECT NIK,nama,nama_jabatan FROM tab_employee a
			left join tab_jabatan b on a.id_jbt = b.id_jbt
			WHERE a.id = '$_SESSION[sessionnik]'";       
		    $rsc = $db -> execute($sqlc);
			$data = $rsc->FetchRow();
			$id = $data['id'];
			$nik = $data['NIK'];
			$smarty->assign("id", $id);
			$smarty->assign("nik", $nik);
			$smarty->display("uploadbpjssehat.tpl");
        }
		function UploadBPJSSehatProcess()
		{
			global $title,$db;
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);
			//$smarty->assign("username",$_SESSION['username']);
			
			$kode = $_POST['nik'];
			
			$pathfilename =$_FILES['pathbpjssehat']['name']; 
			$pathfiletype =$_FILES['pathbpjssehat']['type']; 
			$pathfilesize =$_FILES['pathbpjssehat']['size']; 
			
			if(!empty($pathfilename)){
				//echo 1;
				//melakukan delete image
				$sqlc="SELECT pathbpjssehat FROM tab_employee where NIK = '$kode'";
				$resultc = $db -> Execute($sqlc);
				$rsc = $resultc->FetchRow();
				if(!empty($rsc[0])){
				unlink("$rsc[0]");
				}
				}
			
			if(!empty($pathfilename)){
			$pathfilelink ='dokumen'.'/'.$kode.'_BPJS_SEHAT_'.$pathfilename;
			}
					//melakukan proses update
					if($pathfilesize > 500000){
					echo "<script language=javascript>
	                    alert('Gagal memperbaiki data, File Upload > 500 KB');
	                    </script>";
					 $smarty->display("upload_bpjssehat.html");
					}else{
					//window.location='employee.php?action=edit&id=$kode';
					//**************************melakukan aksi upload gambar
					move_uploaded_file($_FILES['pathbpjssehat']['tmp_name'],$pathfilelink);
				
				$sql = "UPDATE tab_employee SET pathbpjssehat = '$pathfilelink' where nik ='$kode'";
				//echo $sql;
				$result = $db->Execute($sql);


	        if($result)
	        {
	            echo "<script language=javascript>
	                    alert('Terima Kasih, berhasil mengupload data');
	                    window.location='profile.php?action=edit';
	                 </script>";
	        }
	        else{
	            echo "<script language=javascript>
	                    alert('Gagal mengupload data');
	                    history.go(-1);
	                 </script>";
			}
			}
			//$this->display("user_edit.html");
        }
		// end BPJS SEHAT
		// UPLOAD Buku Nikah
		function UploadBukuNikah()
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
			
			
			$sqlc = "SELECT a.id,NIK,nama,nama_jabatan FROM tab_employee a
			left join tab_jabatan b on a.id_jbt = b.id_jbt
			WHERE a.id = '$_SESSION[sessionnik]'";       
		    $rsc = $db -> execute($sqlc);
			$data = $rsc->FetchRow();
			$id = $data['id'];
			$nik = $data['NIK'];
			$smarty->assign("id", $id);
			$smarty->assign("nik", $nik);
			$smarty->display("uploadbukunikah.tpl");
        }
		
		function UploadBukuNikahProcess()
		{
			global $title,$db;
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);
			//$smarty->assign("username",$_SESSION['username']);
			
			$kode = $_POST['nik'];
			
			$pathfilename =$_FILES['pathnikah']['name']; 
			$pathfiletype =$_FILES['pathnikah']['type']; 
			$pathfilesize =$_FILES['pathnikah']['size']; 
			
			if(!empty($pathfilename)){
				//echo 1;
				//melakukan delete image
				$sqlc="SELECT pathnikah FROM tab_employee where NIK = '$kode'";
				$resultc = $db -> Execute($sqlc);
				$rsc = $resultc->FetchRow();
				if(!empty($rsc[0])){
				unlink("$rsc[0]");
				}
				}
			
			if(!empty($pathfilename)){
			$pathfilelink ='dokumen'.'/'.$kode.'_NIKAH_'.$pathfilename;
			}
					//melakukan proses update
					if($pathfilesize > 500000){
					echo "<script language=javascript>
	                    alert('Gagal memperbaiki data, File Upload > 500 KB');
	                    </script>";
					 $smarty->display("uploadbukunikah.tpl");
					}else{
					//window.location='employee.php?action=edit&id=$kode';
					//**************************melakukan aksi upload gambar
					move_uploaded_file($_FILES['pathnikah']['tmp_name'],$pathfilelink);
				
				$sql = "UPDATE tab_employee SET pathnikah = '$pathfilelink' where nik ='$kode'";
				//echo $sql;
				$result = $db->Execute($sql);


	        if($result)
	        {
	            echo "<script language=javascript>
	                    alert('Terima Kasih, berhasil mengupload data');
	                    window.location='profile.php?action=edit';
	                 </script>";
	        }
	        else{
	            echo "<script language=javascript>
	                    alert('Gagal mengupload data');
	                    history.go(-1);
	                 </script>";
			}
			}
			//$this->display("user_edit.html");
        }
		// end NIKAH
		// UPLOAD Kartu Keluarga
		function UploadKK()
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
			
			
			$sqlc = "SELECT a.id,NIK,nama,nama_jabatan FROM tab_employee a
			left join tab_jabatan b on a.id_jbt = b.id_jbt
			WHERE a.id = '$_SESSION[sessionnik]'";       
		    $rsc = $db -> execute($sqlc);
			$data = $rsc->FetchRow();
			$nik = $data['NIK'];
			$id = $data['id'];
			$smarty->assign("nik", $nik);
			$smarty->assign("id", $id);
			$smarty->display("uploadkk.tpl");
        }
		function UploadKKProcess()
		{

			global $title,$db;
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);
			//$smarty->assign("username",$_SESSION['username']);
			
			$kode = $_POST['nik'];
			
			$pathfilename =$_FILES['pathkk']['name']; 
			$pathfiletype =$_FILES['pathkk']['type']; 
			$pathfilesize =$_FILES['pathkk']['size']; 
			
			if(!empty($pathfilename)){
				//echo 1;
				//melakukan delete image
				$sqlc="SELECT pathkk FROM tab_employee where NIK = '$kode'";
				$resultc = $db -> Execute($sqlc);
				$rsc = $resultc->FetchRow();
				if(!empty($rsc[0])){
				unlink("$rsc[0]");
				}
				}
			
			if(!empty($pathfilename)){
			$pathfilelink ='dokumen'.'/'.$kode.'_KK_'.$pathfilename;
			}
					//melakukan proses update
					if($pathfilesize > 500000){
					echo "<script language=javascript>
	                    alert('Gagal memperbaiki data, File Upload > 500 KB');
	                    </script>";
					 $smarty->display("uploadkk.tpl");
					}else{
					//window.location='employee.php?action=edit&id=$kode';
					//**************************melakukan aksi upload gambar
					move_uploaded_file($_FILES['pathkk']['tmp_name'],$pathfilelink);
				
				$sql = "UPDATE tab_employee SET pathkk = '$pathfilelink' where nik ='$kode'";
				//echo $sql;
				$result = $db->Execute($sql);


	        if($result)
	        {
	            echo "<script language=javascript>
	                    alert('Terima Kasih, berhasil mengupload data');
	                    window.location='profile.php?action=edit';
	                 </script>";
	        }
	        else{
	            echo "<script language=javascript>
	                    alert('Gagal mengupload data');
	                    history.go(-1);
	                 </script>";
			}
			}
			//$this->display("user_edit.html");
        }
		// end KK
		// UPLOAD Foto
		function UploadPhoto()
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
			
			$sqlc = "SELECT a.id,NIK,nama,nama_jabatan,pathfoto FROM tab_employee a
			left join tab_jabatan b on a.id_jbt = b.id_jbt
			WHERE a.id = '$_SESSION[sessionnik]'";       
		    $rsc = $db ->Execute($sqlc);
			//$data = $rsc->FetchRow();
			$data = $rsc->FetchRow();
			$nik = $data['NIK'];
			$id = $data['id'];
			if (!empty($data['pathfoto']))
			{
			//echo 1;
				$smarty->assign("smap","<img src='".$data['pathfoto']."' border=0 width=200 height=100>");
			}else{
			//echo 2;
				$flag = "kosong";
				$smarty->assign("smap2","<img src=img/no_photo.jpg width=200 height=100 border=0>");
				$smarty->assign("flag", $flag);
			}
			
			$smarty->assign("nik", $nik);
			$smarty->assign("id", $id);
			$smarty->display("uploadfoto.tpl");
        }
		function UploadPhotoProcess()
		{

			global $title,$db;
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);
			//$smarty->assign("username",$_SESSION['username']);
			
			$kode = $_POST['nik'];
			
			$pathfilename =$_FILES['smap']['name']; 
			$pathfiletype =$_FILES['smap']['type']; 
			$pathfilesize =$_FILES['smap']['size']; 
			
			if(!empty($pathfilename)){
				//echo 1;
				//melakukan delete image
				$sqlc="SELECT pathfoto FROM tab_employee where NIK = '$kode'";
				$resultc = $db -> Execute($sqlc);
				$rsc = $resultc->FetchRow();
				if(!empty($rsc[0])){
				unlink("$rsc[0]");
				}
				}
			
			if(!empty($pathfilename)){
			$pathfilelink ='gambar'.'/'.$kode.'_'.$pathfilename;
			}
					//melakukan proses update
					if($pathfilesize > 100000){
					echo "<script language=javascript>
	                    alert('Gagal memperbaiki data, File Upload > 100 KB');
	                    </script>";
					 $smarty->display("uploadphoto.tpl");
					}else{
					//window.location='employee.php?action=edit&id=$kode';
					//**************************melakukan aksi upload gambar
					move_uploaded_file($_FILES['smap']['tmp_name'],$pathfilelink);
				
				$sql = "UPDATE tab_employee SET pathfoto = '$pathfilelink' where nik ='$kode'";
				//echo $sql;
				$result = $db->Execute($sql);


	        if($result)
	        {
	            echo "<script language=javascript>
	                    alert('Terima Kasih, berhasil mengupload data');
	                    window.location='profile.php?action=edit';
	                 </script>";
	        }
	        else{
	            echo "<script language=javascript>
	                    alert('Gagal mengupload data');
	                    history.go(-1);
	                 </script>";
			}
			}
			//$this->display("user_edit.html");
        }
		// end Upload Photo
		

		
		function tingkat_opt($selected = '')
		{
		 	global $db; 

			$sqlpend     = "SELECT * FROM tab_pendidikan order by id_pen";
			$rsw = $db->Execute($sqlpend);
	        if (!$rsw->RecordCount())
	        {
	            $kosong = 'kosong';
	             $pend_id[] = $kosong;
	             $pend_list[] = $kosong;
	        }
	        else
	        {

	            while ($row = $rsw->FetchRow()){

						$selected_opt = '';
						if ($row['id_pen'] == $selected)
						{
							$selected_opt = 'selected=selected';
						}
							
						$tingkat_opt[] = array('id' => $row['id_pen'], 
											'selected'	=> $selected_opt,
											'nama' => $row['nama_pendidikan']);
	            }
	        }
		return $tingkat_opt;
		}
		

		function stskawin_opt($selected ='')
		{
		 	global $db; 

			$sqlgol     = "SELECT * FROM tab_stskawin order by id";
			$rsw = $db->Execute($sqlgol);
	        if (!$rsw->RecordCount())
	        {
	             $kosong = 'kosong';
	             $stskawin_id[] = $kosong;
	             $stskawin_list[] = $kosong;	        }
	        else
	        {

	            while ($row = $rsw->FetchRow()){

						$selected_opt = '';
						if ($row['id'] == $selected)
						{
							$selected_opt = 'selected=selected';
						}
							
						$stskawin_opt[] = array('id' => $row['id'], 
											'selected'	=> $selected_opt,
											'nama' => $row['stskawin']);
	            }
	       			
		}
		return $stskawin_opt;
		}

		function penddarat_opt($selected = '')
		{
		 	global $db; 

			$sqlpend     = "SELECT * FROM tab_pendidikan order by id_pen";
			$rsw = $db->Execute($sqlpend);
	        if (!$rsw->RecordCount())
	        {
	            $kosong = 'kosong';
	             $pend_id[] = $kosong;
	             $pend_list[] = $kosong;
	        }
	        else
	        {

	            while ($row = $rsw->FetchRow()){

						$selected_opt = '';
						if ($row['id_pen'] == $selected)
						{
							$selected_opt = 'selected=selected';
						}
							
						$penddarat_opt[] = array('id' => $row['id_pen'], 
											'selected'	=> $selected_opt,
											'nama' => $row['nama_pendidikan']);
	            }
	        }
		return $penddarat_opt;
		}

		function agama_opt($selected = '')
		{
		 	global $db; 

			$sqlBidang     = "select id, agama as nm_agama from tab_agama";
			$rsw = $db->Execute($sqlBidang);
	        if (!$rsw->RecordCount())
	        {
	             $kosong = 'kosong';
	             $id[] = $kosong;
	             $agama_list[] = $kosong;
	        }
	        else
	        {

	            while ($row = $rsw->FetchRow()){

						$selected_opt = '';
						if ($row['id'] == $selected)
						{
							$selected_opt = 'selected=selected';
						}
							
						$agama_opt[] = array('id' => $row['id'], 
											'selected'	=> $selected_opt,
											'nama' => $row['nm_agama']);
	            }
	        }
	        
	        //print_r($bidang);

 			return $agama_opt;

		}


		function jabatan_opt($selected = '')
		{
		 	global $db; 
			
			$sqlBidang     = "SELECT * FROM tab_jabatan order by nama_jabatan";
			$rsw = $db->Execute($sqlBidang);
	        if (!$rsw->RecordCount())
	        {
	             $kosong = 'kosong';
	             $jabatan_id[] = $kosong;
	             $jabatan_list[] = $kosong;
	        }
	        else
	        {

	            while ($row = $rsw->FetchRow()){

						$selected_opt = '';
						if ($row['id_jbt'] == $selected)
						{
							$selected_opt = 'selected=selected';
						}
							
						$jabatan_opt[] = array('id' => $row['id_jbt'], 
											'selected'	=> $selected_opt,
											'nama' => $row['nama_jabatan']);
						//$wilayah = $row['id_wilayah'];					
	            }
	        }
	        
	        //print_r($wilayah);

 			return $jabatan_opt;
			//$smarty->assign("wilayah_name", $wilayah);
		}

		function divisi_opt($selected = '')
		{
		 	global $db; 

			$sqlBidang     = "SELECT * FROM tab_divisi order by id";
			$rsw = $db->Execute($sqlBidang);
	        if (!$rsw->RecordCount())
	        {
	             $kosong = 'kosong';
	             $divisi_id[] = $kosong;
	             $divisi_list[] = $kosong;
	        }
	        else
	        {

	            while ($row = $rsw->FetchRow()){

						$selected_opt = '';
						if ($row['id'] == $selected)
						{
							$selected_opt = 'selected=selected';
						}
							
						$divisi_opt[] = array('id' => $row['id'], 
											'selected'	=> $selected_opt,
											'nama' => $row['divisi']);
	            }
	        }
	        
	        //print_r($bidang);

 			return $divisi_opt;

		}

		function w_status_opt($selected = '')
		{
		 	global $db; 

			$sqlBidang     = "SELECT Work_status FROM tab_employee group BY Work_status";
			$rsw = $db->Execute($sqlBidang);
	        if (!$rsw->RecordCount())
	        {
	             $kosong = 'kosong';
	             $bidang_id[] = $kosong;
	             $bidang_list[] = $kosong;
	        }
	        else
	        {

	            while ($row = $rsw->FetchRow()){
/**
* 	                  $bidang_id[] = $rowbidang_list['id'];
* 	                  $bidang_name[] = $rowbidang_list['name'];
*/
						$selected_opt = '';
						if ($row['Work_status'] == $selected)
						{
							$selected_opt = 'selected=selected';
						}
							
						$w_status_opt[] = array('id' => $row['Work_status'], 
											'selected'	=> $selected_opt,
											'nama' => $row['Work_status']);
	            }
	        }
	            return $w_status_opt;
	        }



	        function perusahaan_opt($selected ='')
		{
		 	global $db; 

			$sqlgol     = "SELECT * FROM tab_pilihperusahaan order by id";
			$rsw = $db->Execute($sqlgol);
	        if (!$rsw->RecordCount())
	        {
	             $kosong = 'kosong';
	             $perusahaan_id[] = $kosong;
	             $perusahaan_list[] = $kosong;
	        }
	        else
	        {

	            while ($row = $rsw->FetchRow()){

						$selected_opt = '';
						if ($row['id'] == $selected)
						{
							$selected_opt = 'selected=selected';
						}
							
						$perusahaan_opt[] = array('id' => $row['id'], 
											'selected'	=> $selected_opt,
											'nama' => $row['perusahaan']);
	            }
	           }	        
			return $perusahaan_opt;

		}


			function bisnisunit_opt($selected ='')
		{
		 	global $db; 

			$sqlgol     = "SELECT * FROM tab_bisnisunit order by id";
			$rsw = $db->Execute($sqlgol);
	        if (!$rsw->RecordCount())
	        {
	             $kosong = 'kosong';
	             $bisnisunit_id[] = $kosong;
	             $bisnisunit_list[] = $kosong;
	        }
	        else
	        {

	            while ($row = $rsw->FetchRow()){

						$selected_opt = '';
						if ($row['id'] == $selected)
						{
							$selected_opt = 'selected=selected';
						}
							
						$bisnisunit_opt[] = array('id' => $row['id'], 
											'selected'	=> $selected_opt,
											'nama' => $row['bisnisunit']);
	            }
	        }
	        
	        //print_r($stskawin);

 			return $bisnisunit_opt;

		}

		

    }
?>
