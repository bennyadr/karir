<?php
require ('libs/Smarty.class.php');
require ('config.php');

//require ('user_cek.php');
class Hasil {
function showHasilKinerja(){
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
		$smarty->assign("samping","34");
		// Mencari Nilai Kinerja	
		$sqlUser     = "SELECT * FROM vw_spk";
		//echo $sqlUser;echo exit;

	        $rsx = $db->Execute($sqlUser);

	        if (!$rsx->RecordCount())
	        {
	             $kosong = 'kosong';
	             $pos_list[] = array(
	                'no'=>$kosong,
	                'id'=>$kosong,
					'kegiatan'=>$kosong,
					'angkakredit'=>$kosong,
					'kuant1'=>$kosong,
					'kuant2'=>$kosong,
					'mutu'=>$kosong,
					'waktu1'=>$kosong,
					'waktu2'=>$kosong,
					'biaya1'=>$kosong,
					'biaya2'=>$kosong,
                        );
	        }
	        else
	        { 

	            $no = $awal;
		    $nilaiskp = 0;
	            while ($rowPos_listx = $rsx->FetchRow()){
	                  //if($_SESSION["usernamesession"]!='admin' && $rowuser_list['username']=='admin')
	                  //     continue;

	                  ++$no;
	
	                  $pos_listx[] = array(
	                                    //'no'=>$no,
					    'no'=>$no,
	                                    'id'=>$rowPos_listx['id_spk'],
					    'kegiatan'=>$rowPos_listx['kpi_nama'],
					    'angkakredit'=>$rowPos_listx['ak'],
					    'kuant1'=>$rowPos_listx['r_qty'],
					    'kuant2'=>$rowPos_listx['r_satuan'],
					    'mutu'=>$rowPos_listx['r_mutu'],
					    'waktu1'=>$rowPos_listx['r_waktu'],
			    		    'waktu2'=>$rowPos_listx['r_satuan_waktu'],
					    'biaya1'=>$rowPos_listx['r_biaya'],
					    'biaya2'=>$rowPos_listx['r_satuan_biaya'],
					    'perhitungan'=>number_format($rowPos_listx['perhitungan'],2),
					    'nilai'=>number_format($rowPos_listx['nilai'],2)
	                                    );
			 $nilaiskp=$nilaiskp+$rowPos_listx['nilai'];
	            }
		    $nilaiskp=$nilaiskp/$no;
			$totnilaiskp = $nilaiskp * 0.60;
	        }
			
			$smarty->display("hasilkinerja.tpl");
		}


		}
		?>