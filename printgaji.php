<?php


include "moneyFormat.php";

$moneyFormat = new moneyFormat();


echo $sql = "SELECT
case when left(a.periode,2)='01' then concat('Januari ',right(a.periode,4))
when left(a.periode,2)='02' then concat('Februari ',right(a.periode,4))
when left(a.periode,2)='03' then concat('Maret ',right(a.periode,4))
when left(a.periode,2)='04' then concat('April ',right(a.periode,4))
when left(a.periode,2)='05' then concat('Mei ',right(a.periode,4))
when left(a.periode,2)='06' then concat('Juni ',right(a.periode,4))
when left(a.periode,2)='07' then concat('Juli ',right(a.periode,4))
when left(a.periode,2)='08' then concat('Agustus ',right(a.periode,4))
when left(a.periode,2)='09' then concat('September ',right(a.periode,4))
when left(a.periode,2)='10' then concat('Oktober ',right(a.periode,4))
when left(a.periode,2)='11' then concat('Nopember ',right(a.periode,4))
when left(a.periode,2)='12' then concat('Desember ',right(a.periode,4)) end as periodenya,
b.NIK, b.nama, a.*, c.nama_jabatan,divisi FROM vw_gajiok a
left join tab_employee b on b.NIK=a.NIK
left join tab_jabatan c on b.id_jbt=c.id_jbt
left join tab_divisi d on b.id_divisi=d.id
where a.periode='$idperiode'";
    exit();
    $result = $db->Execute($sql);
    $rs = $result->FetchRow();


      $nama = $rs['nama'];
      $nik =$rs['NIK'];
    $jabatan = $rs['nama_jabatan'];
    $divisi = $rs['divisi'];
    $thnbln = $rs['periode'];
    $jhadir = $rs['jhadir'];

    $gajiok = number_format($rs['gajiok'],2);
    $bpjs_naker = number_format($rs['bpjs_naker'],2);
    $thadir = number_format($rs['thadir'],2);
    $bpjs_sehat = number_format($rs['bpjs_sehat'],2);
    $transport = number_format($rs['transport'],2);
    $potlain = number_format($rs['potlain'],2);
    $tjabatan = number_format($rs['tjabatan'],2);
    $pinjaman = number_format($rs['pinjaman'],2);
    $tlain = number_format($rs['tlain'],2);
    $pot_bro = number_format($rs['pot_bro'],2);
    $tp = $gajiok + $thadir + $transport + $tjabatan + $tlain;
   
?>
<table>
  <tr>
    <td width="650"><h3>APLIKASI PAYROLL 
    </h3>
      <h3>SLIP GAJI    </h3>
    <h3>PERIODE : <?php echo $periode; ?></h3></td>
    <td width="500"><img src="img/logo-langit.jpg" width="400" height="100"></td>
  </tr>
  
</table>
<hr>

<table>
  <tr>
    <td width="200" height="25">NIK</td>
    <td width="33" height="25">:</td>
    <td width="200" height="25"><?php echo $nik; ?></td>
    <td width="150" height="25"></td>
    <td width="200" height="25">Departemen</td>
    <td width="33" height="25">:</td>
    <td width="200" height="25"><?php echo $divisi; ?></td>
  </tr>

  <tr>
    <td width="200" height="25">Nama</td>
    <td width="33" height="25">:</td>
    <td width="200" height="25"><?php echo $nama; ?></td>
    <td width="150" height="25"></td>
    <td width="200" height="25">Lokasi</td>
    <td width="33" height="25">:</td>
    <td width="200" height="25">Jakarta</td>
  </tr>

  <tr>
    <td width="200" height="25">Jabatan</td>
    <td width="33" height="25">:</td>
    <td width="200" height="25"><?php echo $jabatan; ?></td>
    <td width="150" height="33"></td>
    <td width="200" height="25">Jumlah Hadir</td>
    <td width="33" height="25">:</td>
    <td width="200" height="25"><?php echo $jhadir; ?></td>
  </tr>
</table>

<hr>
<table>
<tr>
    <td width="600" height="25">Pendapatan</td>
    <td width="600" height="25">Potongan</td>

  </tr>
</table>
<hr>

<table>
  <tr>
    <td width="200" height="25">Upah & Tunjangan Tetap</td>
    <td width="33" height="25">: Rp.</td>
    <td width="200" height="25" align="right"><?php echo $gajiok; ?></td>
    <td width="150" height="25"></td>
    <td width="200" height="25">BPJS NAKER (2%)</td>
    <td width="33" height="25">: Rp.</td>
    <td width="200" height="25" align="right"><?php echo $bpjs_naker; ?></td>
  </tr>

  <tr>
    <td width="200" height="25">Tunjangan Hadir </td>
    <td width="33" height="25">: Rp.</td>
    <td width="200" height="25" align="right"><?php echo $thadir; ?></td>
    <td width="150" height="25"></td>
    <td width="200" height="25"> BPJS SEHAT (0,5%)</td>
    <td width="33" height="25">: Rp.</td>
    <td width="200" height="25" align="right"><?php echo $bpjs_sehat; ?></td>
  </tr>

  <tr>
    <td width="200" height="33">Tunjangan Transport & Meal </td>
    <td width="33" height="33">: Rp.</td>
    <td width="200" height="33" align="right"><?php echo $transport; ?></td>
    <td width="150" height="33"></td>
    <td width="200" height="33">Potongan Lain</td>
    <td width="33" height="33">: Rp.</td>
    <td width="200" height="33" align="right"><?php echo $potlain; ?></td>
  </tr>

  <tr>
    <td width="200" height="33">Tunjangan Jabatan</td>
    <td width="33" height="33">: Rp.</td>
    <td width="200" height="33" align="right"><?php echo $tjabatan; ?></td>
    <td width="150" height="33"></td>
    <td width="200" height="33">Pinjaman</td>
    <td width="33" height="33">: Rp.</td>
    <td width="200" height="33" align="right"><?php echo $pinjaman; ?></td>
  </tr>

  <tr>
    <td width="200" height="33">Tunjangan/Pendapatan Lain</td>
    <td width="33" height="33">: Rp.</td>
    <td width="200" height="33" align="right"><?php echo $tlain; ?></td>
    <td width="150" height="33"></td>
    <td width="200" height="33"></td>
    <td width="33" height="33"></td>
    <td width="200" height="33" align="right"></td>
  </tr>

</table>


<hr> 
<table>
 <tr>
    <td width="200" height="33">Total Pendapatan</td>
    <td width="33" height="33">: Rp.</td>
    <td width="200" height="33" align="right"><?php echo $tp; ?></td>
    <td width="150" height="33"></td>
    <td width="200" height="33">Total Potongan</td>
    <td width="33" height="33">: Rp.</td>
    <td width="200" height="33" align="right"><?php echo $pot_bro; ?></td>
  </tr>
</table>
<hr>

<?php
$sql_softup="SELECT bbpjsnaker,bbpjssehat FROM dat_potongan where nik='$nik' and periode = '$thnbln'";
        $result_softup = $db -> Execute($sql_softup);
        $datapot = $result_softup->FetchRow();

        $pph21 = number_format($datapot['pph21'],2);
        $bbpjsnaker = number_format($datapot['bbpjsnaker'],2);
        $bbpjssehat = number_format($datapot['bbpjssehat'],2);
        $subsidi = $pph21 + $bbpjsnaker + $bbpjssehat;
        ?>
<table>
<tr>
    <td width="200" height="33"><h3>PPH 21  </h3></td>
    <td width="50" height="33"><h3>: Rp.</h3></td>
    <td width="180" height="33" align="right"><h3> <?php echo $pph21; ?> </h3> </td>
  </tr>
  <tr>
    <td width="200" height="33"><h3>BPJS Ketenagakerjaan (4,24%) </h3></td>
    <td width="50" height="33"><h3>: Rp.</h3></td>
    <td width="180" height="33" align="right"><h3> <?php echo $bbpjsnaker; ?> </h3> </td>
  </tr> 
   <tr>
    <td width="200" height="33"><h3>UBPJS Kesehatan (4,5%)  </h3></td>
    <td width="50" height="33"><h3>: Rp.</h3></td>
    <td width="180" height="33" align="right"><h3> <?php echo $bbpjssehat; ?> </h3> </td>
  </tr> 
 <tr>
    <td width="200" height="33"><h3>Total </h3></td>
    <td width="50" height="33"><h3>: Rp.</h3></td>
    <td width="180" height="33" align="right"><h3> <?php echo $Subsidi; ?> </h3> </td>
  </tr>
</table>
