 <?php
require ('libs/Smarty.class.php');
require ('config.php');
//require ('user_cek.php');
class permohonan {

 function showForm()
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
		$smarty->assign("samping","3");


			$tahun = date('Y');
			
			$sqlc = "SELECT a.id,NIK,nama,nama_jabatan,divisi FROM tab_employee a
			left join tab_jabatan b on a.id_jbt = b.id_jbt
			left join tab_divisi c on a.id_divisi = c.id
      		where a.id = '$_SESSION[sessionnik]'";       
		    $rsc = $db -> execute($sqlc);
			$data = $rsc->FetchRow();
			//$id=$data['id'];
			$nik = $data['NIK'];
			$nama = $data['nama'];
            $jabatan = $data['nama_jabatan'];
			$divisi = $data['divisi'];
			
			$sql = "SELECT a.id,b.nik,no_izin,date_format(tgl_pembuatan, '%d/%m/%Y') as tanggal,id_jeniscuti,nama_jeniscuti,jumlah_hari,alasan,no_telp,isstatus FROM dat_formulir_izin a
			left join tab_employee b on b.id=a.id_peg
			left join tab_jeniscuti c on c.id=a.id_jeniscuti
				where b.nik = '$nik' and tahun = '$tahun' order by no_izin desc";       
		
			
		    $rs = $db -> execute($sql);
	  
	        if (!$rs->RecordCount())
	        {
	             $kosong = 'kosong';
	             $pos_list[] = array(
	                                'no'=>$kosong,
									'nodu'=>$kosong,
	                                'tanggal'=>$kosong,
									'jenis'=>$kosong,
									'jmlhari'=>$kosong,
									'alasan'=>$kosong,
									'notelp'=>$kosong,
									'status'=>$kosong
	                                );
	        }
	        else
	        {
	            $no = 0;
	            while ($row = $rs->FetchRow()){
	             ++$no;
				 $sumjmlcuti = 0;
				 $sumjmlizin = 0;
				 $sumjmlsakit = 0;
				 $sumjmldinas = 0;
				 if($row['id_jeniscuti'] == 1){
				 $sumjmlcuti += $row['jumlah_hari'];
				 }elseif($row['id_jeniscuti'] == 2){
				 $sumjmlizin += $row['jumlah_hari'];
				 }elseif($row['id_jeniscuti'] == 3){
				 $sumjmlsakit += $row['jumlah_hari'];
				 }elseif($row['id_jeniscuti'] == 4){
				 $sumjmldinas += $row['jumlah_hari'];
				 }
	             $pos_list[] = array(
	                                'no'=>$no,
									'id'=>$row['id'],
									'nodu'=>$row['no_izin'],
									'tanggal'=>$row['tanggal'],
	                                'jenis'=>$row['nama_jeniscuti'],
									'jmlhari'=>$row['jumlah_hari'],
									'alasan'=>$row['alasan'],
									'notelp'=>$row['no_telp'],
									'status'=>$row['isstatus']
	                                );
	            }
				$nomor = $no;
				$i = $no;
	        }
			//echo $sumjmlcuti;exit;
			// jml cuti
			$sqlj = "SELECT * FROM tab_jeniscuti where id = '1'";       
			$rsj = $db -> execute($sqlj);
			$dataj = $rsj->FetchRow();
			$jmlcuti = $dataj['jml_hari'];
			// jml izin
			$sqlci = "SELECT * FROM tab_jeniscuti where id = '2'";       
			$rsci = $db -> execute($sqlci);
			$dataci = $rsci->FetchRow();
			$jmlizin = $dataci['jml_hari'];
			
			// mencari saldo cuti
			$sisacuti = $jmlcuti - $sumjmlcuti;
			// mencari saldo izin
			$sisaizin = $jmlizin - $sumjmlizin;
			
			$smarty->assign("i", $i);
			$smarty->assign("jmlrcd", $nomor);
	        $smarty->assign("pos", $pos_list);
			$smarty->assign("nik", $nik);
			$smarty->assign("nama", $nama);
			$smarty->assign("jabatan", $jabatan);
			$smarty->assign("divisi", $divisi);
			$smarty->assign("tahun", $tahun);
			$smarty->assign("cuti", $sumjmlcuti);
			$smarty->assign("izin", $sumjmlizin);
			$smarty->assign("sakit", $sumjmlsakit);
			$smarty->assign("dinas", $sumjmldinas);
			$smarty->assign("sisacuti", $sisacuti);
			$smarty->assign("sisaizin", $sisaizin);
			
		
			$smarty->display("permohonan.tpl");
        }

	function addForm() 
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
		$smarty->assign("samping","3");

			$datenow = date('d M Y');
			$year = date("y");
			$month = date("m");
			$sqle = "SELECT a.id,NIK,nama,nama_jabatan,divisi FROM tab_employee a
			left join tab_jabatan b on a.id_jbt = b.id_jbt
			left join tab_divisi c on a.id_divisi = c.id where a.id = '$_SESSION[sessionnik]'";
			$rse = $db->Execute($sqle);
			$datae  = $rse->FetchRow();
			$nik = $datae['NIK'];
			$nama = $datae['nama'];
			$jabatan = $datae['nama_jabatan'];
			$divisi = $datae['divisi'];
			
			$sqlcek = "SELECT no_izin FROM dat_formulir_izin order by no_izin desc limit 1";
			$rscek = $db->Execute($sqlcek);
			$data  = $rscek->FetchRow();
			$idMax = $data['no_izin']."<br>";
			$noUrut = (int) substr($idMax, 15, 2);
			$noUrut++;
			$newID = sprintf("%02s", $noUrut);
			$in = "BDR/HRD";		
			$kode = "$in/$month/$year/$newID";		
			$smarty->assign("kode", $kode);
			$smarty->assign("no_izin", $kode);
			$smarty->assign("datenow", $datenow);
			$smarty->assign("nik", $nik);
			$smarty->assign("nama", $nama);
			$smarty->assign("jabatan", $jabatan);
			$smarty->assign("divisi", $divisi);
			
		$jenis_cuti = $this->jenis_cuti();
		$smarty->assign("jenis_cuti",$jenis_cuti);
		$smarty->display('permohonan_add.tpl');
		}

	
		function saveForm()
		{
			global $title,$db;
			require ('user_cek.php');
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);

			$noizin = $_POST['no_izin'];
			$idpegats = $_POST['nama2'];
			$jeniscuti = $_POST['jenis_cuti'];
			$tglbuat = date('d/m/Y');
			$tglmulai = $_POST['tgl_mulai']; // dd/mm/yyyy
			$resultx = explode("/", $tglmulai);
			$tgl1 = $resultx[0];
			$tgl2 = $resultx[1];
			$tgl3 = $resultx[2];
			$tglmul = "$tgl3-$tgl2-$tgl1";	
			$jmlhari = $_POST['jmlhari'];
			$alasan = $_POST['alasan'];
			$alamat = $_POST['alamat'];
			$notelp = $_POST['no_telp'];
			$tahun = date('Y');
			
			$sqle = "SELECT * FROM tab_employee where id = '$_SESSION[sessionnik]'";
			$rse = $db->Execute($sqle);
			$datae  = $rse->FetchRow();
			$idpeg = $datae['id'];
			
			$sqlc   = "select * from dat_formulir_izin where id_peg = '$idpeg' and id_jeniscuti = '$jeniscuti' and tahun = '$tahun' and tgl_mulai = '$tglmul'";
			//echo $sqlc;exit;
			$rsc = $db->Execute($sqlc);
			
			if ($rsc->RecordCount())
	        {
	            echo "<script language=javascript>
	                    alert('Data Permohonan Anda sudah pernah diinput, silakan kembali dicek');
	                    history.go(-1);
	                 </script>";
	            exit();
	        }else{
	        
            // Data Atasan
			$sqla="select NIK,nama,nama_jabatan,divisi,hp,email,email_alternatif from tab_employee a
			left join tab_jabatan b on a.id_jbt = b.id_jbt
			left join tab_divisi c on a.id_divisi = c.id
			where status_p = 'A' and a.id = '$idpegats'";
			//echo $sqla;
			$resulta = $db->Execute($sqla);
			while ($dataa = $resulta->FetchRow()){
                		
	        $nikats = $dataa['NIK'];
			$namaats = $dataa['nama'];
			$jabatanats = $dataa['nama_jabatan'];
			$departemenats = $dataa['divisi'];
			$emailpats = $dataa['email'];    
			$emailsats = $dataa['email_alternatif'];
			}
			// Data YBS
			$sqlp="select NIK,nama,nama_jabatan,divisi,hp,email,email_alternatif from tab_employee a
			left join tab_jabatan b on a.id_jbt = b.id_jbt
			left join tab_divisi c on a.id_divisi = c.id
			where status_p = 'A' and a.id = '$idpeg'";
			$resultp = $db->Execute($sqlp);
			while ($datap = $resultp->FetchRow()){
                		
	        $nikybs = $datap['NIK'];
			$namaybs = $datap['nama'];
			$jabatanybs = $datap['nama_jabatan'];
			$departemenybs = $datap['divisi'];
			$emailpybs = $datap['email'];    
			$emailsybs = $datap['email_alternatif'];
			 }
			 
			// View Data Jenis Cuti
			$sqlf="select * from tab_jeniscuti where id = '$jeniscuti'";
			$resultf = $db->Execute($sqlf);
			while ($dataf = $resultf->FetchRow()){
                		
	        $nmjeniscuti = $dataf['nama_jeniscuti'];
			 
			}
			// Kirim Email ********************************************************************************
			if(!empty($emailpats) and !empty($emailpybs)){
			$emailfrom = "hrgl@bdrindonesia.co.id";
			// send e-mail to ...
			$to = $emailpats;
			// Your subject
			$subject="Pengajuan Formulir ".$nmjeniscuti." oleh ".$namaybs."!";
			$subject2="Anda mengajukan Formulir ".$nmjeniscuti."!";
			// From
			$from = "From: $emailfrom"; 
			
			// Your message to Atasan
			$message="Hi, ".$namaats.". \r\n\n";
			//$message.="Dengan ini saya : \r\n";
			$message.="NIK : ".$nikybs." \r\n";
			$message.="Nama : ".$namaybs." \r\n";
			$message.="Jabatan : ".$jabatanybs." \r\n";
			$message.="Departemen : ".$departemenybs." \r\n\n";
			$message.="Mengajukan Formulir ".$nmjeniscuti.", No Dokumen : ".$noizin." selama ".$jmlhari." hari, dimulai dari tanggal ".$tglmulai." dengan alasan : ".$alasan." \r\n\n";
			$message.="Dan bisa dihubungi : \r\n\n";
			$message.="Alamat : ".$alamat." \r\n";
			$message.="No Telp/HP : ".$notelp." \r\n";
			$message.="Demikianlah pengajuan Formulir ".$nmjeniscuti." saya, terima kasih atas perhatiannya \r\n\n\n";
			$message.="Regard's \r\n";
			$message.="".$namaybs."";
			
			// Your message to YBS
			$message2="Hi, ".$namaybs.". \r\n\n";
			$message2.="Dengan ini Anda telah mengajukan Formulir ".$nmjeniscuti." kepada atasan Anda : ".$namaats." \r\n\n";
			$message2.="Dibawah ini adalah informasi Anda : \r\n";
			$message2.="NIK : ".$nikybs." \r\n";
			$message2.="Nama : ".$namaybs." \r\n";
			$message2.="Jabatan : ".$jabatanybs." \r\n";
			$message2.="Departemen : ".$departemenybs." \r\n\n";
			$message2.="Mengajukan Formulir ".$nmjeniscuti.", No Dokumen : ".$noizin." selama ".$jmlhari." hari, dimulai dari tanggal ".$tglmulai." dengan alasan : ".$alasan." \r\n\n";
			$message2.="Dan bisa dihubungi : \r\n\n";
			$message2.="Alamat : ".$alamat." \r\n";
			$message2.="No Telp/HP : ".$notelp." \r\n";
			$message2.="Demikianlah pengajuan Formulir ".$nmjeniscuti." saya, terima kasih atas perhatiannya \r\n\n\n";
			$message2.="Regard's \r\n";
			$message2.="".$namaybs."";
			
			// send email
			//$sentmail = @mail($to,$subject,$message,$from);
			mail($to,$subject,$message,$from);
			mail($emailpybs,$subject2,$message2,$from);
			
			
			}elseif(!empty($emailsats) and !empty($emailsybs)){
			$emailfrom = "hrgl@bdrindonesia.co.id";
			// send e-mail to ...
			$to = $emailsats;
			// Your subject
			$subject="Pengajuan Formulir ".$nmjeniscuti." oleh ".$namaybs."!";
			$subject2="Anda mengajukan Formulir ".$nmjeniscuti."!";

			// From
			$from = "From: $emailfrom"; 
			
			// Your message to Atasan
			$message="Hi, ".$namaats.". \r\n\n";
			$message.="Dengan ini saya : \r\n";
			$message.="NIK : ".$nikybs." \r\n";
			$message.="Nama : ".$namaybs." \r\n";
			$message.="Jabatan : ".$jabatanybs." \r\n";
			$message.="Departemen : ".$departemenybs." \r\n\n";
			$message.="Mengajukan Formulir ".$nmjeniscuti.", No Dokumen : ".$noizin." selama ".$jmlhari." hari, dimulai dari tanggal ".$tglmulai." dengan alasan : ".$alasan." \r\n\n";
			$message.="Dan bisa dihubungi : \r\n\n";
			$message.="Alamat : ".$alamat." \r\n";
			$message.="No Telp/HP : ".$notelp." \r\n";
			$message.="Demikianlah pengajuan Formulir ".$nmjeniscuti." saya, terima kasih atas perhatiannya \r\n\n\n";
			$message.="Regard's \r\n";
			$message.="".$namaybs."";
			
			// Your message to YBS
			$message2="Hi, ".$namaybs.". \r\n\n";
			$message2.="Dengan ini Anda telah mengajukan formulir ".$nmjeniscuti." kepada atasan Anda : ".$namaats." \r\n\n";
			$message2.="Dibawah ini adalah informasi Anda : \r\n";
			$message2.="NIK : ".$nikybs." \r\n";
			$message2.="Nama : ".$namaybs." \r\n";
			$message2.="Jabatan : ".$jabatanybs." \r\n";
			$message2.="Departemen : ".$departemenybs." \r\n\n";
			$message2.="Mengajukan Formulir ".$nmjeniscuti.", No Dokumen : ".$noizin." selama ".$jmlhari." hari, dimulai dari tanggal ".$tglmulai." dengan alasan : ".$alasan." \r\n\n";
			$message2.="Dan bisa dihubungi : \r\n\n";
			$message2.="Alamat : ".$alamat." \r\n";
			$message2.="No Telp/HP : ".$notelp." \r\n";
			$message2.="Demikianlah pengajuan Formulir ".$nmjeniscuti." saya, terima kasih atas perhatiannya \r\n\n\n";
			$message2.="Regard's \r\n";
			$message2.="".$namaybs."";
			
			// send email
			//$sentmail = @mail($to,$subject,$message,$from);
			mail($to,$subject,$message,$from);
			mail($emailsybs,$subject2,$message2,$from);
			
			}
			// End Kirim Email **********************************************************************************************
		$sql = "INSERT INTO dat_formulir_izin
			(
				id,id_peg,id_pegats,id_jeniscuti,no_izin,tgl_pembuatan,tgl_mulai,
				jumlah_hari,alasan,alamat,no_telp,tahun,Userinsert,tglinsert
			)
			VALUES
			(
				null,'$idpeg','$idpegats','$jeniscuti','$noizin',STR_TO_DATE('$tglbuat', '%d/%m/%Y'),STR_TO_DATE('$tglmulai', '%d/%m/%Y'),
				'$jmlhari','$alasan','$alamat','$notelp','$tahun','$_SESSION[username]',now()
			)";

				//echo $sql;exit;
               
		 $result = $db->Execute($sql);

                if($result)
                	$inserted = 1;
                else
                	$inserted = 0;


	        if($inserted)
	        {
	            echo "<script language=javascript>
	                    alert('Terima Kasih, berhasil menyimpan data');
	                    window.location='permohonan.php';
	                 </script>";
	        }
	        else{
	            echo "<script language=javascript>
	                    alert('Gagal menyimpan data');
	                    window.location='permohonan.php';
	                 </script>";
			}
            //$this->assign("authenticated",$this->$auth_mode);
			}
        }
		function editForm()
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
		$smarty->assign("samping","3");

		$id = $_GET['id'];
			if(empty($id)){
				$smarty->display("404.html");
			}else{
			$sql_Emp = "SELECT a.id,id_peg as idpeg,id_pegats as idpeg2,id_jeniscuti,no_izin,c.NIK,c.nama,f.nama as namaats,d.nama_jabatan as jabatan,g.nama_jabatan as jabatanats,divisi,nama_jeniscuti,alamat,no_telp,jumlah_hari,alasan,date_format(tgl_mulai,'%d/%m/%Y') as tgl_mulai,date_format(tgl_pembuatan,'%d %M %Y') as tgl_buat from dat_formulir_izin a
			left join tab_jeniscuti b on a.id_jeniscuti = b.id
			left join tab_employee c on a.id_peg = c.id
			left join tab_employee f on a.id_pegats = f.id
			left join tab_jabatan d on c.id_jbt = d.id_jbt
			left join tab_jabatan g on f.id_jbt = g.id_jbt
			left join tab_divisi e on c.id_divisi= e.id where a.id='$id'";
            $rs_Emp = $db->Execute($sql_Emp);
            $rsEmp = $rs_Emp->FetchRow();
			
			$jenis_cuti = $this->jenis_cuti();
			$smarty->assign("jenis_cuti",$jenis_cuti);
			//$this -> kelasposisi_opt_generate($kelasposisi);
			//$this -> u_makan_opt_generate($u_makan);
		
			$smarty->assign("id", $id);
			$smarty->assign("kode", $rsEmp['no_izin']);
			$smarty->assign("idpeg", $rsEmp['idpeg']);
			$smarty->assign("idpegats", $rsEmp['idpeg2']);
			$smarty->assign("nama", $rsEmp['nama']);
			$smarty->assign("namaats", $rsEmp['namaats']);
			$smarty->assign("nik", $rsEmp['NIK']);
			$smarty->assign("jabatan", $rsEmp['jabatan']);
			$smarty->assign("divisi", $rsEmp['divisi']);
			$smarty->assign("jabatanats", $rsEmp['jabatanats']);
			$smarty->assign("tglmulai", $rsEmp['tgl_mulai']);
			$smarty->assign("alamat", $rsEmp['alamat']);
			$smarty->assign("alasan", $rsEmp['alasan']);
			$smarty->assign("notelp", $rsEmp['no_telp']);
			$smarty->assign("datenow", $rsEmp['tgl_buat']);
			$smarty->assign("jmlhari", $rsEmp['jumlah_hari']);
			
			$smarty->display('permohonan_edit.tpl');
			}
		}
		function updateForm()
		{
				require ('user_cek.php');
			global $title,$db;
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);

			$idpeg = $_POST['id'];
			$idpegats=$_POST['idpegats'];
			$noizin = $_POST['kode'];
			$jeniscuti = $_POST['jenis_cuti'];
			$tglbuat = date('d/m/Y');
			$tglmulai = $_POST['tglmulai']; // dd/mm/yyyy
			$resultx = explode("/", $tglmulai);
			$tgl1 = $resultx[0];
			$tgl2 = $resultx[1];
			$tgl3 = $resultx[2];
			$tglmul = "$tgl3-$tgl2-$tgl1";	
			$jmlhari = $_POST['jmlhari'];
			$alasan = $_POST['alasan'];
			$alamat = $_POST['alamat'];
			$notelp = $_POST['no_telp'];
			$tahun = date('Y');
			
            
		$sql = "UPDATE dat_formulir_izin
			set id_pegats='$idpegats', 
			id_jeniscuti = '$jeniscuti',
			tgl_mulai=STR_TO_DATE('$tglmulai', '%d/%m/%Y'),
			jumlah_hari='$jmlhari',
			alamat = '$alamat',
			alasan = '$alasan',
			no_telp='$notelp',
			Useredit='$_SESSION[username]', 
			tgledit=now()
			where id='$idpeg'";

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
	                    window.location='permohonan.php';
	                 </script>";
	        }
	        else{
	            echo "<script language=javascript>
	                    alert('Gagal memperbaiki data');
	                    window.location='permohonan.php';
	                 </script>";
			}
            //$this->assign("authenticated",$this->$auth_mode);
			
        }
function deleteForm()
        {
				global $title,$db;
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);
			$id = $_GET['id'];

	    //$employee_id = $_POST['employee_id'];
	    $id = $_REQUEST['id'];

	    $sql = "delete from dat_formulir_izin where id = $id";
            $del_result = $db->Execute($sql);
            //echo $sql;
	        if($del_result)
	        {
	            echo "<script language=javascript>
	                    alert('Terima Kasih, berhasil menghapus data');
	                    window.location='permohonan.php';
	                 </script>";
	        }
	        else
	            echo "<script language=javascript>
	                    alert('Gagal menghapus data');
	                    window.location='permohonan.php';
	                 </script>";
        }		
		
		

	function jenis_cuti($selected = '')
		{
		 	global $db; 

			$sqlcuti    = "select * from tab_jeniscuti";
			$rsw = $db->Execute($sqlcuti);
	        if (!$rsw->RecordCount())
	        {
	             $kosong = 'kosong';
	             $kategori_id[] = $kosong;
	             $kategori_list[] = $kosong;
	        }
	        else
	        {
			
			while ($row = $rsw->FetchRow()){
						
						$selected_opt = '';
						if ($row['id'] == $selected)
						{
							$selected_opt = 'selected=selected';
						}
							
						$jenis_cuti[] = array( 'id' => $row['id'],
											'selected'	=> $selected_opt,
											'nama' => $row['nama_jeniscuti']);
	            }
	        }
	        
	        //print_r($bidang);

 			return $jenis_cuti;

		}

    }

?>
