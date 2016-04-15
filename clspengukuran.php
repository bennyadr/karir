<?php
require ('libs/Smarty.class.php');
require ('config.php');
//require ('user_cek.php');
class clsobjek {
	
	    function showdata() {
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
		$smarty->assign("samping","32");
/*
		$sqlUser	= "SELECT a.nik,a.nm_pegawai,jabatan_name,dirisendiri,bawahan,atasan,
case when dirisendiri is null then 'Belum' else 'Sudah' end p1,
case when bawahan is null then 'Belum' else 'Sudah' end p2,
case when atasan is null then 'Belum' else 'Sudah' end p3 FROM vwkompegok a
left join tab_pegawai b on a.nik = b.nik
left join tbl_jabatan c on a.nik = c.id";
			
			$rs = $db->Execute($sqlUser);
			
	        if (!$rs->RecordCount())
			{
			     $kosong = 'kosong';
	             $unite_list[] = array(

	                        'no'=>$kosong,
	                        'id'=>$kosong,
	                        'pegawai'=>$kosong,
	                        'jabatan'=>$kosong,
	                        'sendiri'=>$kosong,
	                        'atasan'=>$kosong,
	                        'bawahan'=>$kosong,
	                                );
	        }
	        else
	        { 
				//$rs=mysql_query($sql);
	            $no = 0; 
				while ($ru_list = $rs->FetchRow()){
				      ++$no;

                		//$sql = "select * from tbl_employee where id = ".$ru_list['id_emp'];
                       // $result = $db->Execute($sql);
                       // $rs_employee = $result->FetchRow();

	                  $ulist[] = array(
	                                    'no'=>$no,
	                                    'id'=>$ru_list['id_kompetensijbt'],
										'pegawai'=>$ru_list['nm_pegawai'],
				                        'jabatan'=>$ru_list['jabatan_name'],
				                        'sendiri'=>$ru_list['p1'],
				                        'atasan'=>$ru_list['p2'],
				                        'bawahan'=>$ru_list['p3'],
	                                    );
	            }
	        }

	        $smarty->assign("pos", $ulist);
	        */
			$smarty->display("pengukuran.tpl");
        }

    }
    ?>