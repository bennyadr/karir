<?php
	include "config.php";
	
	if (isset($_GET['nama']))
	{
		$nama = $_GET['nama'];
		// 0 = NIK, 1 = nama pegawai, 2 = jabatan
		
		$query = mysql_query("SELECT id,NIK,nama,nama_jabatan,plafon FROM tab_employee a
		left join tab_jabatan b on a.id_jbt = b.id_jbt WHERE status_p = 'A' and nama LIKE '%$nama%' order by nama asc limit 10"); //query mencari hasil search
		$hasil = mysql_num_rows($query);
		if ($hasil > 0)
		{
			while ($data = mysql_fetch_row($query))
			{
			
			?>
				<a href="javascript:autoInsert('<?=$data[0]?>','<?=$data[1]?>','<?=$data[2]?>','<?=$data[3]?>','<?=$data[4]?>','<?=number_format($data[4],0)?>');"><?=$data[2]?><BR> <!-- hasil search -->
			<?php

			}
		}
		else
		{
			echo "Data tidak ditemukan";
		}
	
	}
	
	if (isset($_GET['idpeg']))
	{
		$idpeg=$_GET['idpeg'];
		//$jenis=$_GET['jenis'];

		$query = mysql_query("SELECT id,nama,nama_jabatan FROM tab_employee a
		left join tab_jabatan b on a.id_jbt = b.id_jbt WHERE status_p = 'A' and nama LIKE '%$idpeg%' order by nama asc limit 10"); //query mencari hasil search
		$hasil = mysql_num_rows($query);
		if ($hasil > 0)
		{
			while ($data = mysql_fetch_row($query))
			{
			
			?>
				<a href="javascript:autoInsert2('<?=$data[0]?>','<?=$data[1]?>','<?=$data[2]?>');"><?=$data[1]?><BR> <!-- hasil search -->
			<?php

			}
		}
		else
		{
			echo "Data tidak ditemukan";
		}
		
	}

?>