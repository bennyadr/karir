<?php
// Mengambil Data Karyawan

	$sqlc = "SELECT nama,nama_jabatan FROM tab_jabatan a
left join tab_employee b on a.id_jbt = b.id_jbt
where a.id_jbt = 178 limit 1";
    $resultc = $db->Execute($sqlc);
    $rsc = $resultc->FetchRow();
	$namac = $rsc['nama'];
	$jabatanc = $rsc['nama_jabatan'];


	$sql = "SELECT no_izin,b.NIK,b.nama,f.nama as namaats,e.nama_jabatan as jabatan,g.nama_jabatan as jabatanats,divisi,nama_jeniscuti,jumlah_hari,alasan,no_telp,alamat,date_format(tgl_pembuatan,'%d/%m/%Y') as tglbuat,date_format(tgl_mulai,'%d/%m/%Y') as tanggal,date_format(tgl_mulai,'%d %M %Y') as tanggalak,tglapproved,isstatus FROM dat_formulir_izin a
left join tab_employee b on a.id_peg = b.id
left join tab_jeniscuti c on a.id_jeniscuti = c.id 
left join tab_divisi d on b.id_divisi = d.id
left join tab_jabatan e on b.id_jbt = e.id_jbt
left join tab_employee f on a.id_pegats = f.id
left join tab_jabatan g on f.id_jbt = g.id_jbt
where no_izin = '$nodu'";
//echo $sql;exit;
    $result = $db->Execute($sql);
    $rs = $result->FetchRow();
	$nik = $rs['NIK'];
	$nama = $rs['nama'];
	$divisi = $rs['divisi'];
	$jabatan = $rs['jabatan'];
	$namaats = $rs['namaats'];
	$jabatanats = $rs['jabatanats'];
	$jeniscuti = strtoupper($rs['nama_jeniscuti']);
	$jmlhari = $rs['jumlah_hari'];
	$notelp = $rs['no_telp'];
	$tanggal = $rs['tanggal'];
	$tanggalak = $rs['tanggalak'];
	$tglbuat = $rs['tglbuat'];
    $status = $rs['isstatus'];
	$noizin = strtoupper($rs['no_izin']);
	$alasan = strtoupper($rs['alasan']);
	$alamat = strtoupper($rs['alamat']);
	$tglapproved = $rs['tglapproved'];
	$tahun = date('Y');

	if($status == 0){
		$scek = "<label style='color:red;'>Not Approved</label>";
	}else{
		$scek = "<label style='color:green;'>Approved</label> - ".$tglapproved;
	}
	?>
<style type="text/css">

<!--
    table.page_header {width: 100%; border: none; background-color: #DDDDFF; border-bottom: solid 1mm #AAAADD; padding: 2mm }
    table.page_footer {width: 100%; border: none; background-color: #DDDDFF; border-top: solid 1mm #AAAADD; padding: 2mm}
    div.note {border: solid 1mm #DDDDDD;background-color: #EEEEEE; padding: 2mm; border-radius: 2mm; width: 100%; }
    ul.main { width: 95%; list-style-type: square; }
    ul.main li { padding-bottom: 2mm; }
    h1 { text-align: center; font-size: 20mm}
    h3 { text-align: center; font-size: 14mm}
-->
</style>
<page backtop="14mm" backbottom="14mm" backleft="10mm" backright="10mm" style="font-size: 12pt">
    <page_header>
        <table class="page_header">
            <tr>
                <td style="width: 50%; text-align: left">
                   FORM PERMOHONAN KARYAWAN
                </td>
                <td style="width: 50%; text-align: right">
                    <!--Formulir Permohonan--> <?php //echo $jeniscuti; ?>
                </td>
            </tr>
        </table>
    </page_header>
    <page_footer>
        <table class="page_footer">
            <tr>
                <td style="width: 50%; text-align: left;">
                    <!--Halaman [[page_cu]] dari [[page_nb]]-->
                </td>
                <!--<td style="width: 34%; text-align: center">
                    page [[page_cu]]/[[page_nb]]
                </td>-->
                <td style="width: 50%; text-align: right">
                    &copy; PT BDR Indonesia <?php echo $tahun; ?>
                </td>
            </tr>
        </table>
    </page_footer>
    <bookmark title="Présentation" level="0" ></bookmark>
<table width="100%" border="0" >
  <tr>
    <th width="51%" rowspan="3" scope="col"><img src="img/logo.png" alt="Logo" width="250" height="90"></th>
    <th width="51%" rowspan="3" scope="col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</th>
    <th colspan="2" scope="col" style="font-size:24px;">FORM PERMOHONAN <?php echo $jeniscuti;?></th>
  </tr>
  <tr>
    <td width="16%">No Dokumen </td>
    <td width="33%">: <?php echo $noizin;?></td>
  </tr>
  <tr>
    <td>Tanggal Berlaku </td>
    <td> : <?php echo $tanggalak;?></td>
  </tr>
</table>
<br><br><br><br>
    <table>
  <tr>
    <td>NIK</td>
    <td>:</td>
    <td><?php echo $nik;?></td>
  </tr>
  <tr>
    <td>Nama Karyawan</td>
    <td>:</td>
    <td><?php echo $nama;?></td>
  </tr>
  <tr>
    <td>Departemen</td>
    <td>:</td>
    <td><?php echo $divisi;?></td>
  </tr>
  <tr>
    <td>Tanggal Hari</td>
    <td>:</td>
    <td><?php echo $tglbuat;?></td>
  </tr>
  <tr>
    <td>Status</td>
    <td>:</td>
    <td><?php echo $scek;?></td>
  </tr>
</table>
    <br><br>
  <p align="justify">Form Permohonan <?php echo $jeniscuti; ?> tersebut saya ambil selama <?php echo $jmlhari;?> Hari Kerja, terhitung mulai Tgl : <?php echo $tanggal;?> Alasan : <?php echo $alasan;?>
  jika selama masa <?php echo $jeniscuti;?> tenaga saya dibutuhkan oleh Perusahaan, maka dapat menghubungi saya pada alamat : <?php echo $alamat;?>, No Telpon/HP : <?php echo $notelp;?></p>  
  <p>Demikianlah permohonan <?php echo $jeniscuti;?> ini saya sampaikan, Atas kebijakannya saya ucapkan Terima Kasih</p>
  <br><br>
  <table width="100%" border="0">
  <tr>
    <th scope="col">Hormat Saya</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">Mengetahui</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">Menyetujui</th>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><p>&nbsp;</p><p>&nbsp;</p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><u><?php echo $nama;?></u></td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td><u><?php echo $namaats;?></u></td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td><u><?php echo $namac;?></u></td>
  </tr>
  <tr>
    <td><?php echo $jabatan;?></td>
    <td>&nbsp;</td>
    <td><?php echo $jabatanats;?></td>
    <td>&nbsp;</td>
    <td><?php echo $jabatanc;?></td>
  </tr>
</table>

</page>

