<?php

  $sql = "SELECT a.id,a.NIK,nama,nama_jabatan,divisi,no_rek,keterangan,bank,npwp,email,telpon_rumah,pathfoto,telpon_kantor,no_asuransi_kesehatan,case when status_p = 'A' then 'Aktif' when sex = 'T' then 'Tidak Aktif' else 'Belum Ada Status' end as status_p,
  case when sex = 'P' then 'Perempuan' when sex = 'L' then 'Laki-laki' end as sex,agama,nama_pendidikan,hp,stskawin,address,alamat_sementara,tlahir,date_format(tglahir2, '%d %M %Y') as tglahir2,
  date_format(tgl_masuk, '%d %M %Y') as tgl_masuk2 from tab_employee a
  left join tab_jabatan b on a.id_jbt = b.id_jbt
  left join tab_divisi c on a.id_divisi = c.id
  left join tab_agama d on a.id_agama = d.id
  left join tab_pendidikan e on a.pend_darat = e.id_pen
  where a.id='$id'";
    $result = $db->Execute($sql);
    $rs = $result->FetchRow();
  $id = $rs['id'];
  $nik = $rs['NIK'];
  $nama = $rs['nama'];
  $jabatan = $rs['nama_jabatan'];
  $divisi = $rs['divisi'];
  $kawin = $rs['stskawin'];
  $hp = $rs['hp'];
  $agama = $rs['agama'];
  $pendidikan = $rs['nama_pendidikan'];
  $sex = $rs['sex'];
  $nonpwp = $rs['npwp'];
  $keterangan = $rs['keterangan'];
  $bank = $rs['bank'];
  $noasuransi = $rs['no_asuransi_kesehatan'];
  $telpkantor = $rs['telpon_kantor'];
  $telprumah = $rs['telpon_rumah'];
  $email = $rs['email'];
  $norek = $rs['no_rek'];
  $status = $rs['status_p'];
  $alamatt = $rs['address'];
  $alamats = $rs['alamat_sementara'];
  $tempat = $rs['tlahir'];
  $tgllahir = $rs['tglahir2'];
  $tglmasuk = $rs['tgl_masuk2'];
  $foto = $rs['pathfoto'];
  if(!empty($foto)){
  $gambar = $foto;
  }else{
  $gambar = "img/no_photo.jpg";
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
                   PT Langit Infotama
                </td>
                <td style="width: 50%; text-align: right">
                    Biodata Karyawan<?php //echo __CLASS_HTML2PDF__; ?>
                </td>
            </tr>
        </table>
    </page_header>
    <page_footer>
        <table class="page_footer">
            <tr>
                <td style="width: 50%; text-align: left;">
                    Halaman [[page_cu]] dari [[page_nb]]
                </td>
                <!--<td style="width: 34%; text-align: center">
                    page [[page_cu]]/[[page_nb]]
                </td>-->
                <td style="width: 50%; text-align: right">
                    &copy; PT Langit Infotama 2016
                </td>
            </tr>
        </table>
    </page_footer>
    <bookmark title="Présentation" level="0" ></bookmark>
    <br><br><br><br><br><br><br><br>
  <div style="text-align: center; width: 100%;">
        <br>
        <img src="img/logo-langit.jpg" alt="Logo" style="width: 100mm">
        <br>
    </div>
    <h3 align=center>BIODATA</h3>
  <div style="text-align: center;">
  <img src="<?php echo $gambar; ?>" width=110 height=150>
  </div><br>
    <table align=center>
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
    <td>Jabatan</td>
    <td>:</td>
    <td><?php echo $jabatan;?></td>
  </tr>
  <tr>
    <td>Departemen</td>
    <td>:</td>
    <td><?php echo $divisi;?></td>
  </tr>
</table>
    <br><br><br><br><br>
    
</page>
<page pageset="old">
<div class="note">
        IDENTITAS KARYAWAN<br>
    </div><br>
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
    <td>Jabatan</td>
    <td>:</td>
    <td><?php echo $jabatan;?></td>
  </tr>
  <tr>
    <td>Departemen</td>
    <td>:</td>
    <td><?php echo $divisi;?></td>
  </tr>
  <tr>
    <td>Pendidikan</td>
    <td>:</td>
    <td><?php echo $pendidikan;?></td>
  </tr>
  <tr>
    <td>Tempat Lahir</td>
    <td>:</td>
    <td><?php echo $tempat;?></td>
  </tr>
  <tr>
    <td>Tanggal Lahir</td>
    <td>:</td>
    <td><?php echo $tgllahir;?></td>
  </tr>
  <tr>
    <td>Status Kawin</td>
    <td>:</td>
    <td><?php echo $kawin;?></td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td><?php echo $sex;?></td>
  </tr>
  <tr>
    <td>Agama</td>
    <td>:</td>
    <td><?php echo $agama;?></td>
  </tr>
  <tr>
    <td>Alamat Tetap/KTP</td>
    <td>:</td>
    <td><?php echo $alamatt;?></td>
  </tr>
  <tr>
    <td>Alamat Sementara</td>
    <td>:</td>
    <td><?php echo $alamats;?></td>
  </tr>
  <tr>
    <td>Telpon Kantor</td>
    <td>:</td>
    <td><?php echo $telpkantor;?></td>
  </tr>
  <tr>
    <td>Telpon Rumah</td>
    <td>:</td>
    <td><?php echo $telprumah;?></td>
  </tr>
  <tr>
    <td>No HP</td>
    <td>:</td>
    <td><?php echo $hp;?></td>
  </tr>
  <tr>
    <td>Tanggal Masuk</td>
    <td>:</td>
    <td><?php echo $tglmasuk;?></td>
  </tr>
  <tr>
    <td>No Asuransi Kesehatan</td>
    <td>:</td>
    <td><?php echo $noasuransi;?></td>
  </tr>
  <tr>
    <td>No NPWP</td>
    <td>:</td>
    <td><?php echo $nonpwp;?></td>
  </tr>
  <tr>
    <td>Nama Bank</td>
    <td>:</td>
    <td><?php echo $bank;?></td>
  </tr>
  <tr>
    <td>No Rekening</td>
    <td>:</td>
    <td><?php echo $norek;?></td>
  </tr>
  <tr>
    <td>Email</td>
    <td>:</td>
    <td><?php echo $email;?></td>
  </tr>
  <tr>
    <td>Status Karyawan</td>
    <td>:</td>
    <td><?php echo $status;?></td>
  </tr>
  <tr>
    <td>Keterangan</td>
    <td>:</td>
    <td><?php echo $keterangan;?></td>
  </tr>
</table>
<br><br>
</page>
<page pageset="old">
 <div class="note">
        Data Pendidikan
    </div><br>
  <TABLE cellspacing=0 style="width: 100%; font-size: 10pt; border-collapse: collapse">
  <thead>
  <TR style="background: #E7E7E7;" > 
        <TD style="width: 4%; text-align: center;border: solid 1px silver;"><b>No</b></TD>
        <TD style="width: 8%; text-align: center;border: solid 1px silver;"><b>Tingkat</b></TD>
    <TD style="width: 30%; text-align: center;border: solid 1px silver;"><b>Sekolah/Universitas</b></TD>
        <TD style="width: 28%; text-align: center;border: solid 1px silver;"><b>Jurusan</b></TD>
    <TD style="width: 7%; text-align: center;border: solid 1px silver;"><b>IPK</b></TD>
    <TD style="width: 8%; text-align: center;border: solid 1px silver;"><b>Gelar</b></TD>
    <TD style="width: 15%; text-align: center;border: solid 1px silver;"><b>Tempat</b></TD>
    </TR>
  </thead>
<?php // untuk mendapatkan data pendidikan
      $sql_pendidikan="SELECT a.id,id_peg,sekolah_univ,ipk,gelar,tempat,jurusan,nama_pendidikan FROM dat_pendidikan a 
      left join tab_pendidikan b on a.id_tingkat = b.id_pen where id_peg = '$nik' order by a.id asc";
      $result_pendidikan = $db -> Execute($sql_pendidikan);
      $no=0;
      $kosong = 'n/a';
      if (!$result_pendidikan->RecordCount())
          { ?>
              <TR>
        <TD VALIGN=TOP align=center style="border: solid 1px silver;"><?php echo $kosong;?></TD>
        <TD VALIGN=TOP align=center style="border: solid 1px silver;"><?php echo $kosong;?> </TD>
    <TD VALIGN=TOP style="border: solid 1px silver;"><?php echo $kosong; ?></TD>
    <TD VALIGN=TOP style="border: solid 1px silver;"><?php echo $kosong; ?></TD>
    <TD VALIGN=TOP align=center style="border: solid 1px silver;"><?php echo $kosong; ?></TD>
    <TD VALIGN=TOP align=center style="border: solid 1px silver;"><?php echo $kosong; ?></TD>
    <TD VALIGN=TOP align=center style="border: solid 1px silver;"><?php echo $kosong; ?></TD>
    </TR>
         <?php }else{ 
      while($rs_pendidikan = $result_pendidikan->FetchRow()){
         ++$no;
      ?>
    <TR>
        <TD VALIGN=TOP align=center style="width: 4%; border: solid 1px silver;"><?php echo $no;?></TD>
        <TD VALIGN=TOP align=center style="width: 8%; border: solid 1px silver;"><?php echo $rs_pendidikan['nama_pendidikan'];?> </TD>
    <TD VALIGN=TOP align=justify style="width: 30%; border: solid 1px silver; text-align:justify;"><? echo $rs_pendidikan['sekolah_univ']; ?></TD>
    <TD VALIGN=TOP style="width: 28%; border: solid 1px silver;"><?php echo $rs_pendidikan['jurusan']; ?></TD>
    <TD VALIGN=TOP align=center style="width: 7%; border: solid 1px silver;"><?php echo $rs_pendidikan['ipk']; ?></TD>
    <TD VALIGN=TOP align=center style="border: solid 1px silver;"><?php echo $rs_pendidikan['gelar']; ?></TD>
    <TD VALIGN=TOP align=center style="border: solid 1px silver;"><?php echo $rs_pendidikan['tempat']; ?></TD>
    </TR>
    <?php 
  }
  } ?>
</TABLE>
<br><br>
 <div class="note">
        Data Kursus
    </div><br>
  <TABLE cellspacing=0 style="width: 100%; font-size: 10pt; border-collapse: collapse">
  <thead>
    <TR style="background: #E7E7E7;" > 
        <TD style="width: 4%; text-align: center;border: solid 1px silver;"><b>No</b></TD>
        <TD style="width: 30%; text-align: center;border: solid 1px silver;"><b>Nama Kursus</b></TD>
    <TD style="width: 30%; text-align: center;border: solid 1px silver;"><b>Instansi/Penyelenggara</b></TD>
        <TD style="width: 26%; text-align: center;border: solid 1px silver;"><b>Kota</b></TD>
    <TD style="width: 10%; text-align: center;border: solid 1px silver;"><b>Tahun</b></TD>
    </TR>
  </thead>
<?php // untuk mendapatkan data kursus
      $sql_kursus="SELECT * FROM dat_kursus where id_peg = '$id' order by id asc";
      $result_kursus = $db -> Execute($sql_kursus);
      $no=0;
      $kosong = 'n/a';
      if (!$result_kursus->RecordCount())
          { ?>
              <TR>
        <TD VALIGN=TOP align=center style="width: 4%; border: solid 1px silver;"><?php echo $kosong;?></TD>
    <TD VALIGN=TOP style="width: 30%; border: solid 1px silver;"><?php echo $kosong; ?></TD>
    <TD VALIGN=TOP style="width: 30%; border: solid 1px silver;"><?php echo $kosong; ?></TD>
    <TD VALIGN=TOP align=center style="width: 26%; border: solid 1px silver;"><?phpphp echo $kosong; ?></TD>
    <TD VALIGN=TOP align=center style="width: 10%; border: solid 1px silver;"><?php echo $kosong; ?></TD>
    </TR>
         <?php }else{ 
      while($rs_kursus = $result_kursus->FetchRow()){
         ++$no;
      ?>
    <TR>
        <TD VALIGN=TOP align=center style="width: 4%; border: solid 1px silver;"><?php echo $no;?></TD>
        <TD VALIGN=TOP align=justify style="width: 30%; border: solid 1px silver;"><?php echo $rs_kursus['kursus']; ?></TD>
    <TD VALIGN=TOP style="width: 30%; border: solid 1px silver;"><?php echo $rs_kursus['instansi']; ?></TD>
    <TD VALIGN=TOP align=center style="width: 26%; border: solid 1px silver;"><?php echo $rs_kursus['kota']; ?></TD>
    <TD VALIGN=TOP align=center style="width: 10%; border: solid 1px silver;"><?php echo $rs_kursus['tahun']; ?></TD>
    </TR>
    <?php 
  }
  } ?>
</TABLE>
<br><br>
 <div class="note">
        Data Pekerjaan
    </div><br>
  <TABLE cellspacing=0 style="width: 100%; font-size: 10pt; border-collapse: collapse">
  <thead>
    <TR style="background: #E7E7E7;" > 
        <TD style="width: 4%; text-align: center;border: solid 1px silver;"><b>No</b></TD>
        <TD style="width: 26%; text-align: center;border: solid 1px silver;"><b>Perusahaan</b></TD>
    <TD style="width: 25%; text-align: center;border: solid 1px silver;"><b>Jabatan</b></TD>
        <TD style="width: 45%; text-align: center;border: solid 1px silver;"><b>Deskripsi Pekerjaan</b></TD>
    </TR>
  </thead>
<?php // untuk mendapatkan data pekerjaan
      $sql_pekerjaan="SELECT * FROM dat_mutasi_jabatan where id_peg = '$id' order by id asc";
      $result_pekerjaan = $db -> Execute($sql_pekerjaan);
      $no=0;
      $kosong = 'n/a';
      if (!$result_pekerjaan->RecordCount())
          { ?>
              <TR>
        <TD VALIGN=TOP align=center style="width: 4%; border: solid 1px silver;"><?php echo $kosong;?></TD>
    <TD VALIGN=TOP style="width: 26%; border: solid 1px silver;"><?php echo $kosong; ?></TD>
    <TD VALIGN=TOP style="width: 25%; border: solid 1px silver;"><?php echo $kosong; ?></TD>
    <TD VALIGN=TOP style="width: 45%; border: solid 1px silver;"><?php echo $kosong; ?></TD>
    
    </TR>
         <?php }else{ 
      while($rs_pekerjaan = $result_pekerjaan->FetchRow()){
         ++$no;
      ?>
    <TR>
        <TD VALIGN=TOP align=center style="width: 4%; border: solid 1px silver;"><?php echo $no;?></TD>
        <TD VALIGN=TOP style="width: 26%; border: solid 1px silver;"><?php echo $rs_pekerjaan['perusahaan']; ?></TD>
    <TD VALIGN=TOP style="width: 25%; border: solid 1px silver;"><?php echo $rs_pekerjaan['jabatan']; ?></TD>
    <TD VALIGN=TOP align=justify style="width: 45%; border: solid 1px silver;"><?php echo $rs_pekerjaan['deskripsi']; ?></TD>
    </TR>
    <?php 
  }
  } ?>
</TABLE>
<br><br>
 <div class="note">
        Data Organisasi
    </div><br>
  <TABLE cellspacing=0 style="width: 100%; font-size: 10pt; border-collapse: collapse;">

  <thead>
  <TR style="background: #E7E7E7;" > 
  <td style="width: 4%; text-align: center;border: solid 1px silver;"><b>No</b></td>
    <td style="width: 50%; text-align: center;border: solid 1px silver;"><b>Nama Organisasi</b></td>
    <td style="width: 36%; text-align: center;border: solid 1px silver;"><b>Jabatan</b></td>
  <td style="width: 10%; text-align: center;border: solid 1px silver;"><b>Tahun</b></td>
  </TR>
  </thead>
<?php // untuk mendapatkan data organisasi
      $sql_orga="SELECT * FROM dat_organisasi where id_peg = '$id' order by id asc";
      $result_orga = $db -> Execute($sql_orga);
      $no=0;
      $kosong = 'n/a';
      if (!$result_orga->RecordCount())
          { ?>
              <TR>
        <TD VALIGN=TOP align=center style="width: 4%; border: solid 1px silver;"><?php echo $kosong;?></TD>
    <TD VALIGN=TOP style="width: 50%; border: solid 1px silver;"><?php echo $kosong; ?></TD>
    <TD VALIGN=TOP style="width: 36%; border: solid 1px silver;"><?php echo $kosong; ?></TD>
    <TD VALIGN=TOP align=center style="width: 10%; border: solid 1px silver;"><?php echo $kosong; ?></TD>
    </TR>
         <?php }else{ 
      while($rs_orga = $result_orga->FetchRow()){
         ++$no;
      ?>
    <TR>
        <TD VALIGN=TOP align=center style="width: 4%; border: solid 1px silver;"><?php echo $no;?></TD>
        <TD VALIGN=TOP align=justify style="width: 50%; border: solid 1px silver;"><?php echo $rs_orga['nm_organisasi']; ?></TD>
    <TD VALIGN=TOP style="width: 36%; border: solid 1px silver;"><?php echo $rs_orga['jabatan']; ?></TD>
    <TD VALIGN=TOP align=center style="width: 10%; border: solid 1px silver;"><?php echo $rs_orga['tahun']; ?></TD>
    </TR>
    <?php 
  }
  } ?>
</TABLE>
<br><br>
 <div class="note">
        Data Keluarga
    </div><br>
  <TABLE cellspacing=0 style="width: 100%; font-size: 10pt; border-collapse: collapse;">

  <thead>
  <TR style="background: #E7E7E7;" > 
  <td style="width: 4%; text-align: center;border: solid 1px silver;"><b>No</b></td>
    <td style="width: 20%; text-align: center;border: solid 1px silver;"><b>Tanggal Lahir</b></td>
    <td style="width: 61%; text-align: center;border: solid 1px silver;"><b>Nama Anggota Keluarga</b></td>
  <td style="width: 15%; text-align: center;border: solid 1px silver;"><b>Status</b></td>
  </TR>
  </thead>
<?php // untuk mendapatkan data keluarga
      $sql_keluarga="SELECT *,date_format(tgl_lahir,'%d %M %Y') as tgllahir FROM dat_keluarga where id_peg = '$id' order by id asc";
      $result_kaluarga = $db -> Execute($sql_keluarga);
      $no=0;
      $kosong = 'n/a';
      if (!$result_kaluarga->RecordCount())
          { ?>
              <TR>
        <TD VALIGN=TOP align=center style="width: 4%; border: solid 1px silver;"><?php echo $kosong;?></TD>
    <TD VALIGN=TOP align=center style="width: 20%; border: solid 1px silver;"><?php echo $kosong; ?></TD>
    <TD VALIGN=TOP align=center style="width: 61%; border: solid 1px silver;"><?php echo $kosong; ?></TD>
    <TD VALIGN=TOP align=center style="width: 15%; border: solid 1px silver;"><?php echo $kosong; ?></TD>
    </TR>
         <?php }else{ 
      while($rs_keluarga = $result_kaluarga->FetchRow()){
         ++$no;
      ?>
    <TR>
        <TD VALIGN=TOP align=center style="width: 4%; border: solid 1px silver;"><?php echo $no;?></TD>
        <TD VALIGN=TOP align=center style="width: 20%; border: solid 1px silver;"><?php echo $rs_keluarga['tgllahir']; ?></TD>
    <TD VALIGN=TOP align=justify style="width: 61%; border: solid 1px silver;"><?php echo $rs_keluarga['nama']; ?></TD>
    <TD VALIGN=TOP align=center style="width: 15%; border: solid 1px silver;"><?php echo $rs_keluarga['status']; ?></TD>
    </TR>
    <?php 
  }
  } ?>
</TABLE>
<br><br>
 <div class="note">
        Data Kesehatan
    </div><br>
  <TABLE cellspacing=0 style="width: 100%; font-size: 10pt; border-collapse: collapse;">

  <thead>
  <TR style="background: #E7E7E7;" > 
  <td style="width: 4%; text-align: center;border: solid 1px silver;"><b>No</b></td>
    <td style="width: 40%; text-align: center;border: solid 1px silver;"><b>Penyakit</b></td>
    <td style="width: 10%; text-align: center;border: solid 1px silver;"><b>Tahun Sakit</b></td>
  <td style="width: 46%; text-align: center;border: solid 1px silver;"><b>Katerangan</b></td>
  </TR>
  </thead>
<?php // untuk mendapatkan data kesehatan
      $sql_kesehatan="SELECT * FROM dat_kesehatan where id_peg = '$id' order by id asc";
      $result_kesehatan = $db -> Execute($sql_kesehatan);
      $no=0;
      $kosong = 'n/a';
      if (!$result_kesehatan->RecordCount())
          { ?>
              <TR>
        <TD VALIGN=TOP align=center style="width: 4%; border: solid 1px silver;"><?php echo $kosong;?></TD>
    <TD VALIGN=TOP align=center style="width: 40%; border: solid 1px silver;"><?php echo $kosong; ?></TD>
    <TD VALIGN=TOP align=center style="width: 10%; border: solid 1px silver;"><?php echo $kosong; ?></TD>
    <TD VALIGN=TOP align=center style="width: 46%; border: solid 1px silver;"><?php echo $kosong; ?></TD>
    </TR>
         <?php }else{ 
      while($rs_kesehatan = $result_kesehatan->FetchRow()){
         ++$no;
      ?>
    <TR>
        <TD VALIGN=TOP align=center style="width: 4%; border: solid 1px silver;"><?php echo $no;?></TD>
        <TD VALIGN=TOP align=justify style="width: 40%; border: solid 1px silver;"><?php echo $rs_kesehatan['penyakit']; ?></TD>
    <TD VALIGN=TOP align=center style="width: 10%; border: solid 1px silver;"><?php echo $rs_kesehatan['tahun']; ?></TD>
    <TD VALIGN=TOP align=justify style="width: 46%; border: solid 1px silver;"><?php echo $rs_kesehatan['keterangan']; ?></TD>
    </TR>
    <?php 
  }
  } ?>
</TABLE>
<br><br>
 <div class="note">
        Data Penghargaan
    </div><br>
  <TABLE cellspacing=0 style="width: 100%; font-size: 10pt; border-collapse: collapse;">

  <thead>
  <TR style="background: #E7E7E7;" > 
  <td style="width: 4%; text-align: center;border: solid 1px silver;"><b>No</b></td>
    <td style="width: 30%; text-align: center;border: solid 1px silver;"><b>Penghargaan</b></td>
    <td style="width: 30%; text-align: center;border: solid 1px silver;"><b>Pemberi Penghargaan</b></td>
  <td style="width: 16%; text-align: center;border: solid 1px silver;"><b>Tanggal Pemberian</b></td>
  <td style="width: 20%; text-align: center;border: solid 1px silver;"><b>Katerangan</b></td>
  </TR>
  </thead>
<?php // untuk mendapatkan data penghargaan
      $sql_peng="SELECT *,date_format(tgl_penghargaan,'%d %M %Y') as tglpenghargaan FROM dat_penghargaan where id_peg = '$id' order by id asc";
      $result_peng = $db -> Execute($sql_peng);
      $no=0;
      $kosong = 'n/a';
      if (!$result_peng->RecordCount())
          { ?>
              <TR>
        <TD VALIGN=TOP align=center style="width: 4%; border: solid 1px silver;"><?php echo $kosong;?></TD>
    <TD VALIGN=TOP align=center style="width: 30%; border: solid 1px silver;"><?php echo $kosong; ?></TD>
    <TD VALIGN=TOP align=center style="width: 30%; border: solid 1px silver;"><?php echo $kosong; ?></TD>
    <TD VALIGN=TOP align=center style="width: 16%; border: solid 1px silver;"><?php echo $kosong; ?></TD>
    <TD VALIGN=TOP align=center style="width: 20%; border: solid 1px silver;"><?php echo $kosong; ?></TD>
    </TR>
         <?php }else{ 
      while($rs_peng = $result_peng->FetchRow()){
         ++$no;
      ?>
    <TR>
        <TD VALIGN=TOP align=center style="width: 4%; border: solid 1px silver;"><?php echo $no;?></TD>
        <TD VALIGN=TOP style="width: 30%; border: solid 1px silver;"><?php echo $rs_peng['penghargaan']; ?></TD>
    <TD VALIGN=TOP style="width: 30%; border: solid 1px silver;"><?php echo $rs_peng['pemberi_penghargaan']; ?></TD>
    <TD VALIGN=TOP align=center style="width: 16%; border: solid 1px silver;"><?php echo $rs_peng['tglpenghargaan']; ?></TD>
    <TD VALIGN=TOP align=justify style="width: 20%; border: solid 1px silver;"><?php echo $rs_peng['keterangan']; ?></TD>
    </TR>
    <?php 
  }
  } ?>
</TABLE>
<br><br>
 <div class="note">
        Data Hukuman
    </div><br>
  <TABLE cellspacing=0 style="width: 100%; font-size: 10pt; border-collapse: collapse;">

  <thead>
  <TR style="background: #E7E7E7;" > 
  <td style="width: 4%; text-align: center;border: solid 1px silver;"><b>No</b></td>
    <td style="width: 25%; text-align: center;border: solid 1px silver;"><b>Kategori</b></td>
    <td style="width: 30%; text-align: center;border: solid 1px silver;"><b>Pemberi Hukuman</b></td>
  <td style="width: 16%; text-align: center;border: solid 1px silver;"><b>Tanggal Pemberian</b></td>
  <td style="width: 25%; text-align: center;border: solid 1px silver;"><b>No Surat/SK</b></td>
  </TR>
  </thead>
<?php // untuk mendapatkan data hukuman
      $sql_sanksi="SELECT *, date_format(tgl_sanksi,'%d %M %Y') as tglsanksi FROM dat_sanksi where id_peg = '$id' order by id asc";
      $result_sanksi = $db -> Execute($sql_sanksi);
      $no=0;
      $kosong = 'n/a';
      if (!$result_sanksi->RecordCount())
          { ?>
              <TR>
        <TD VALIGN=TOP align=center style="width: 4%; border: solid 1px silver;"><?php echo $kosong;?></TD>
    <TD VALIGN=TOP align=center style="width: 25%; border: solid 1px silver;"><?php echo $kosong; ?></TD>
    <TD VALIGN=TOP align=center style="width: 30%; border: solid 1px silver;"><?php echo $kosong; ?></TD>
    <TD VALIGN=TOP align=center style="width: 16%; border: solid 1px silver;"><?php echo $kosong; ?></TD>
    <TD VALIGN=TOP align=center style="width: 25%; border: solid 1px silver;"><?php echo $kosong; ?></TD>
    </TR>
         <?php }else{ 
      while($rs_sanksi = $result_sanksi->FetchRow()){
         ++$no;
      ?>
    <TR>
        <TD VALIGN=TOP align=center style="width: 4%; border: solid 1px silver;"><?php echo $no;?></TD>
        <TD VALIGN=TOP align=center style="width: 25%; border: solid 1px silver;"><?php echo $rs_sanksi['hukuman']; ?></TD>
    <TD VALIGN=TOP style="width: 30%; border: solid 1px silver;"><?php echo $rs_sanksi['pemberi_hukuman']; ?></TD>
    <TD VALIGN=TOP align=center style="width: 16%; border: solid 1px silver;"><?php echo $rs_sanksi['tglsanksi']; ?></TD>
    <TD VALIGN=TOP align=center style="width: 25%; border: solid 1px silver;"><?php echo $rs_sanksi['no_sanksi']; ?></TD>
    </TR>
    <?php 
  }
  } ?>
</TABLE>
<br><br>
 <div class="note">
        Data MCU (Medical Check Up)
    </div><br>
  <TABLE cellspacing=0 style="width: 100%; font-size: 10pt; border-collapse: collapse;">

  <thead>
  <TR style="background: #E7E7E7;" > 
  <td style="width: 4%; text-align: center;border: solid 1px silver;"><b>No</b></td>
    <td style="width: 15%; text-align: center;border: solid 1px silver;"><b>Tanggal Pemeriksaan</b></td>
    <td style="width: 30%; text-align: center;border: solid 1px silver;"><b>Hasil Pemeriksaan</b></td>
  <td style="width: 26%; text-align: center;border: solid 1px silver;"><b>Tenaga Medis</b></td>
  <td style="width: 25%; text-align: center;border: solid 1px silver;"><b>Catatan Kesehatan</b></td>
  </TR>
  </thead>
<?php // untuk mendapatkan data mcu
      $sql_mcu="SELECT *,date_format(tgl_pemeriksaan,'%d %M %Y') as tglpemeriksaan FROM dat_mcu where id_peg = '$id' order by id asc";
      $result_mcu = $db -> Execute($sql_mcu);
      $no=0;
      $kosong = 'n/a';
      if (!$result_mcu->RecordCount())
          { ?>
              <TR>
        <TD VALIGN=TOP align=center style="width: 4%; border: solid 1px silver;"><?php echo $kosong;?></TD>
    <TD VALIGN=TOP align=center style="width: 15%; border: solid 1px silver;"><?php echo $kosong; ?></TD>
    <TD VALIGN=TOP align=center style="width: 30%; border: solid 1px silver;"><?php echo $kosong; ?></TD>
    <TD VALIGN=TOP align=center style="width: 26%; border: solid 1px silver;"><?php echo $kosong; ?></TD>
    <TD VALIGN=TOP align=center style="width: 25%; border: solid 1px silver;"><?php echo $kosong; ?></TD>
    </TR>
         <?php }else{ 
      while($rs_mcu = $result_mcu->FetchRow()){
         ++$no;
      ?>
    <TR>
        <TD VALIGN=TOP align=center style="width: 4%; border: solid 1px silver;"><?php echo $no;?></TD>
        <TD VALIGN=TOP align=center style="width: 15%; border: solid 1px silver;"><?php echo $rs_mcu['tglpemeriksaan']; ?></TD>
    <TD VALIGN=TOP style="width: 30%; border: solid 1px silver;"><?php echo $rs_mcu['hasil_pemeriksaan']; ?></TD>
    <TD VALIGN=TOP align=center style="width: 26%; border: solid 1px silver;"><?php echo $rs_mcu['tenaga_medis']; ?></TD>
    <TD VALIGN=TOP style="width: 25%; border: solid 1px silver;"><?php echo $rs_mcu['catatan']; ?></TD>
    </TR>
    <?php 
  }
  } ?>
</TABLE>
</page>
