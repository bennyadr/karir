 <?php
require ('libs/Smarty.class.php');
require ('config.php');
//require ('user_cek.php');
class Karir {
	
 function showKarir()
        {
			//$valid = Util::doCheckAuth(MK_PAGES);
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
		$smarty->assign("samping","36");

		$sql_kompetensi = "select * from tbl_jabatan order by jabatan_name asc";
		$result_kompetensi = $db -> Execute($sql_kompetensi);
		while($rs_kompetensi = $result_kompetensi->FetchRow()){
			$kompetensi_option = "<option value='$rs_kompetensi[0]'>$rs_kompetensi[3]</option>"; 
		}

		$smarty->assign("kompetensi_option", $kompetensi_option);
					$kosong = 'kosong';
	             $unite_list[] = array(
	                                    'no'=>$kosong,
	                                    'kelompok'=>$kosong,
					    			'jabatan'=>$kosong
	                                );
			$smarty->assign("unite", $unite_list);
            $smarty->display("posjbtkosong.tpl");
        }

	function showkarirsubmit()
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
		$smarty->assign("samping","36");

	    $idkompetensi= isset($_REQUEST['idkompetensi']);


		$sql_kompetensi = "select id, jabatan_name, kelompokjbt, Nama_KelompokTingkatJbt from tbl_jabatan a 
				left join tbl_kelompoktingkatjbt b on a.id_kelompoktingkatjbt=b.id_kelompoktingkatjbt
				left join tbl_kelompokjbt c on b.id_kelompokjbt=c.id_kelompokjbt
				order by jabatan_name asc";
		$result_kompetensi = $db -> Execute($sql_kompetensi);
		while($rs_kompetensi = $result_kompetensi->FetchRow()){
			//$kompetensi_option .= "<option value='$rs_kompetensi[0]'>$rs_kompetensi[3]</option>"; 
// 			echo $idkompetensi;
// 			echo "<br>";
// 			echo exit;
			if($idkompetensi == $rs_kompetensi[0]){
				$kompetensi_option = "<option value='$rs_kompetensi[0]' selected>$rs_kompetensi[1]</option>";
			}else{
				$kompetensi_option = "<option value='$rs_kompetensi[0]'>$rs_kompetensi[1]</option>";
			}
		}
		$smarty->assign("kompetensi_option", $kompetensi_option);


		$sql = "select id, jabatan_name, kelompokjbt, Nama_KelompokTingkatJbt from tbl_jabatan a 
				inner join tbl_kelompoktingkatjbt b on a.id_kelompoktingkatjbt=b.id_kelompoktingkatjbt
				inner join tbl_kelompokjbt c on b.id_kelompokjbt=c.id_kelompokjbt
				where id='$idkompetensi'";
		$result = $db -> Execute($sql);
		while($rs_jbt = $result->FetchRow()){
			$keltingkatjbt=$rs_jbt[3];
			$smarty->assign("kelompok", $rs_jbt[2]);
			$smarty->assign("level", $rs_jbt[3]);
		}


	        $sql = "SELECT Nama_KelompokTingkatJbt2 as kelompok, jabatan_name as jabatan FROM quejalur_karir where nama_KelompokTingkatJbt='$keltingkatjbt' and Flag='IN'";
            	$sql_paging = $sql;
		//echo $sql;echo exit;

			$sql_list_next = $db->Execute($sql_paging);
			$sql_next = $sql_list_next->RecordCount();

			if ($sql_next > 0){
			    $linknext = "karir.php?index=$next&tampil=$tampil&orderby=$orderby";
			}else{
			    $linknext = "#";
			}
			$prev = $index-$tampil;
			if ($prev >= 0){
			    $linkprev = "karir.php?index=$prev&tampil=$tampil&orderby=$orderby";
			}else{
			    $linkprev = "#";
			}

			$smarty->assign("index", $index);
			$smarty->assign("tampil", $tampil);
			$smarty->assign("linknext", $linknext);
			$smarty->assign("linkprev", $linkprev);
			//end of paging stuff

            $sql_content = $sql." LIMIT $index,$tampil";
            

	        $rs = $db->Execute($sql_content);
		$kosong = 'kosong';
	        if (!$rs->RecordCount())
	        {

	             $unite_list[] = array(
	                                    'no'=>$kosong,
	                                    'kelompok'=>$kosong,
					    			'jabatan'=>$kosong
	                                );
	        }
	        else
	        {
	            $no = $index;
				while ($rs_list = $rs->FetchRow()){
					  ++$no;
	                  $unite_list[] = array(
	                                    'no'=>$no,
	                                    'kelompok'=>$rs_list[0],
	              			    		'jabatan'=>$rs_list[1]
	                                    );
	            }
	        }

	        $smarty->assign("unite", $unite_list);

            $smarty->display("posjbtkosong.tpl");
        }

}
?>
