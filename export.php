<?php
 header("Content-Type: application/force-download"); 
 header("Cache-Control: no-cache, must-revalidate"); 
 header("Expires: Sat, 26 Jul 2010 05:00:00 GMT"); 
 header("content-disposition: attachment;filename=reporting_data_employee".date('dmY').".xls");
?> 
<table border="1" cellpadding="3" cellspacing="0">
	<tr><h2>Report Data Pegawai</h2></tr>
	<tr></tr>
	<tr style="background-color:#096;">
		<td> No </td>
		<td> N.I.K </td>
		<td> Nama Lengkap </td>
		<td> Jabatan </td>
		<td> Departemen </td>
		<td> Pendidikan </td>
		<td> Tempat Lahir </td>
		<td> Tanggal Lahir </td>
		<td> Status Kawin </td>
		<td> Jenis Kelamin </td>
		<td> Agama </td>
		<td> Alamat Tetap </td>
		<td> Alamat Sementara </td>
		<td> Telfon Kantor </td>
		<td> Telfon Rumah </td>
		<td> HP </td>
		<td> Tanggal Masuk </td>
		<td> NPWP </td>
		<td> Nama Bank </td>
		<td> No. Rekening </td>
		<td> Email </td>

	</tr>
	<?php
	include "config.php";
$sql = mysql_query ("SELECT a.id,NIK,nama,nama_jabatan,divisi,no_rek,bank,npwp,email,telpon_rumah,keterangan,pathfoto,telpon_kantor,no_asuransi_kesehatan,case when status_p = 'A' then 'Aktif' when sex = 'T' then 'Tidak Aktif' else 'Belum Ada Status' end as status_p,
	case when sex = 'P' then 'Perempuan' when sex = 'L' then 'Laki-laki' end as sex,agama,nama_pendidikan,hp,stskawin,address,alamat_sementara,tlahir,date_format(tglahir2, '%d %M %Y') as tglahir2,
	date_format(tgl_masuk, '%d %M %Y') as tgl_masuk2 from tab_employee a
	left join tab_jabatan b on a.id_jbt = b.id_jbt
	left join tab_divisi c on a.id_divisi = c.id
	left join tab_agama d on a.id_agama = d.id
	left join tab_pendidikan e on a.pend_darat = e.id_pen");
	$no=1;
	while($data = mysql_fetch_array($sql)){
	?>
	<tr>
		<td> <?php echo $no; ?> </td>
		<td> <?php echo $data['NIK']; ?> </td>
		<td> <?php echo $data['nama']; ?> </td>
		<td> <?php echo $data['nama_jabatan']; ?> </td>
		<td> <?php echo $data['divisi']; ?> </td>
		<td> <?php echo $data['nama_pendidikan']; ?> </td>
		<td> <?php echo $data['tlahir']; ?> </td>
		<td> <?php echo $data['tglahir2']; ?> </td>
		<td> <?php echo $data['stskawin']; ?> </td>
		<td> <?php echo $data['sex']; ?> </td>
		<td> <?php echo $data['agama']; ?> </td>
		<td> <?php echo $data['address']; ?> </td>
		<td> <?php echo $data['alamat_sementara']; ?> </td>
		<td> <?php echo $data['telpon_kantor']; ?> </td>
		<td> <?php echo $data['telpon_rumah']; ?> </td>
		<td> <?php echo $data['hp']; ?> </td>
		<td> <?php echo $data['tgl_masuk2']; ?> </td>
		<td> <?php echo $data['npwp']; ?> </td>
		<td> <?php echo $data['bank']; ?> </td>
		<td> <?php echo $data['no_rek']; ?> </td>
		<td> <?php echo $data['email']; ?> </td>

	</tr>
	<?php
			$no++;
		}
	?>
</table>