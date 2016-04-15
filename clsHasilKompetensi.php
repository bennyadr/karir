<?php
require ('libs/Smarty.class.php');
require ('config.php');

//require ('user_cek.php');
class Kompetensi {
function showKompetensiPegawai2(){
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
		$smarty->assign("samping","33");
			$sql = "select nm_pegawai, nm_jabatan, jenis, kompetensi, a.*, round(a.lvl/3) as lvl_ats, round(b.lvl/3) as lvl_ybs, round((round(a.lvl/3)+round(b.lvl/3))/2) as BST from (SELECT id_pegawai, tahun, nik, id_kompetensi, menilai, NRKmenilai, sum(level) as lvl FROM vw_kompeg where menilai='Atasan' group by id_pegawai, tahun, nik, id_kompetensi, menilai, NRKmenilai) a inner join 
			(SELECT id_pegawai, tahun, nik, id_kompetensi, menilai, NRKmenilai, sum(level) as lvl FROM vw_kompeg where menilai='Yang bersangkutan' group by id_pegawai, tahun, nik, id_kompetensi, menilai, NRKmenilai) b on a.id_pegawai=b.id_pegawai and a.tahun=b.tahun and a.id_kompetensi=b.id_kompetensi inner join 
			tab_kompetensi c on a.id_kompetensi=c.id inner join
			tab_pegawai d on a.id_pegawai=d.id inner join 
			tab_jabatan e on d.id_jabatan=e.id";
	
	    	
			$smarty->display("hasilkompetensi.tpl");
		}


		}
		?>