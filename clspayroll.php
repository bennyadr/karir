<?php
require ('libs/Smarty.class.php');
require ('config.php');
require_once "excel_reader2.php";
//require ('user_cek.php');
class payroll {
	 function showAddjabatan()
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
		$smarty->assign("samping","35");
			
			//level user option
			
		$sql = "select cast(max(kode_kantor) + 1 as char) as Makkdktr from tab_kantor";
		//echo $sql;
		$parent = $db -> GetRow($sql);
		$parent_name = $parent['Makkdktr'];

		$sql = "SELECT id_kabkota, nama_kabkota FROM `tab_kabkota` ";
		$result = $db->Execute($sql);
	
	        if ($result->RecordCount()){
				$kabkota_option = "";
				while ($rslevel = $result->FetchRow()){
					if ($rslevel['id_kabkota'] == $_GET['id_kabkota']){
						$selected = "selected";
					}else{
						$selected = "";
					}
					$kabkota_option .= "<option value='$rslevel[id_kabkota]' $selected>$rslevel[nama_kabkota]</option>";
		        }
			}

		//$sql = "SELECT 'Cabang' as jenktr union all SELECT 'Dealer' union all SELECT 'AHASS'";
		$sql = "SELECT 'Dealer' as jenktr union all SELECT 'AHASS'";
		$result = $db->Execute($sql);
	
	        if ($result->RecordCount()){
				$jenktr_option = "";
				while ($rslevel = $result->FetchRow()){
					if ($rslevel['jenktr'] == $_GET['jenktr']){
						$selected = "selected";
					}else{
						$selected = "";
					}
					$jenktr_option .= "<option value='$rslevel[jenktr]' $selected>$rslevel[jenktr]</option>";
		        }
			}

		//$sql = "SELECT 'Cabang' as jenktr union all SELECT 'Dealer' union all SELECT 'AHASS'";
		$sql = "SELECT kodestatus, concat(kodestatus, '(', namastatus, ')') as namastatus from tab_status";
		$result = $db->Execute($sql);
	
	        if ($result->RecordCount()){
				$stsktr_option = "";
				while ($rslevel = $result->FetchRow()){
					if ($rslevel['kodestatus'] == $_GET['kodestatus']){
						$selected = "selected";
					}else{
						$selected = "";
					}
					$stsktr_option .= "<option value='$rslevel[kodestatus]' $selected>$rslevel[namastatus]</option>";
		        }
			}

			$smarty->assign("posKode",$parent_name);
            		$smarty->assign("kabkota_option",$kabkota_option);
			$smarty->assign("jenktr_option",$jenktr_option);
			$smarty->assign("stsktr_option",$stsktr_option);
			$smarty->display("jabatan_add.tpl");
        }

	function showjabatanSave()
		{
            global $db;
		global $kabkota, $posTelpon, $posReg, $jenktr, $posName;

            //$posName = $_POST['posName'];
            //$posKode = $_POST['posKode'];
	    //$address = $_POST['address'];
			//$valid = Util::doCheckAuth(POS_PAGES);
	    $valid =1;
			
			if($valid != 1){
				echo "<script language=javascript>
	                    alert('Anda tidak berhak mengakses halaman ini.');
	                    history.go(-1);
	                 </script>";
			}
		/*	
		$sql = "select cast(max(kode_kantor) + 1 as char) as Makkdktr from tab_kantor";
		//echo $sql;
		$parent = $db -> GetRow($sql);
		$parent_name = $parent['Makkdktr'];
		*/	
		$sql = "INSERT INTO tab_jabatan
			(
				id_jbt,
				nama_jabatan
			)
			VALUES
			(
				0,
				'".$posName."'
			)";

				//echo $sql;
               
		 $result = $db->Execute($sql);

                if($result)
                	$inserted = 1;
                else
                	$inserted = 0;


	        if($inserted)
	        {
	            echo "<script language=javascript>
	                    alert('Terima Kasih, berhasil menyimpan data');
	                    window.location='jabatan.php';
	                 </script>";
	        }
	        else
	            echo "<script language=javascript>
	                    alert('Gagal menyimpan data');
	                    window.location='jabatan.php';
	                 </script>";

            $smarty->assign("authenticated",$this->$auth_mode);
        }

		function showEditjbtForm()
		{
			$valid = 1;
			//$valid = Util::doCheckAuth(USR_PAGES);

			if($valid == 0 || $valid == 2){
				echo "<script language=javascript>
	                    alert('Anda tidak berhak mengakses halaman ini.');
	                    history.go(-1);
	                 </script>";
	            exit();
			}

		global $id,$db;
            	global $FOOTER_NOTES,$HEADER_NOTES,$TITLE;

            	$this->assign("HEADER_NOTES", $HEADER_NOTES);
            	$this->assign("FOOTER_NOTES", $FOOTER_NOTES);
	        $this->assign("title", $TITLE);

	        $sql     = "SELECT * FROM tab_jabatan WHERE id_jbt = '$id'";
		//print ($sql);
	        $rs = $db->Execute($sql);

		//$auth[] = array();

	        if ($rs->RecordCount())
	        {
                $pos_list = $rs->FetchRow();
		/*
                $sql = "select name from msdm_employee
                        where id = ".$pos_list['id_emp'];

                $result = $db->Execute($sql);
                $rsEmp  = $result->FetchRow();
		*/
		$this->assign("id", $id);
		$this->assign("idx", $id);
		$this->assign("posName", $pos_list['nama_jabatan']);

	        }

		$this->display("jabatan_edit.html");
        }

	function showjbtSaveEdit()
		{
            	global $db;
		global $kabkota, $posTelpon, $posReg, $posSTS, $jenktr, $stsktr, $posName, $id, $idx;
		//$id= $_POST['id'];
		//$valid = Util::doCheckAuth(POS_PAGES);
	    	$valid =1;
			
			if($valid != 1){
				echo "<script language=javascript>
	                    alert('Anda tidak berhak mengakses halaman ini.');
	                    history.go(-1);
	                 </script>";
			}
			
		$usernamex = $_SESSION['usernamesession'];
		$sql = "UPDATE tab_jabatan
			set nama_jabatan='".$posName."', Useredit='$usernamex', tgledit=now()
				where id_jbt='$id'";

		//echo $sql;

                $result = $db->Execute($sql);

                if($result)
                	$inserted = 1;
                else
                	$inserted = 0;


	        if($inserted)
	        {
	            echo "<script language=javascript>
	                    alert('Terima Kasih, berhasil menyimpan data');
	                    window.location='jabatan.php';
	                 </script>";
	        }
	        else
	            echo "<script language=javascript>
	                    alert('Gagal menyimpan data');
	                    window.location='jabatan.php';
	                 </script>";

            $this->assign("authenticated",$this->$auth_mode);
        }

	function Gengaji()
        {
			global $title,$db;
			require ('user_cek.php');
			include "fn/fn_str.php";
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);

	    $idperiode= $_GET['idprd'];
	    if ($idperiode =='')
		{
			$idperiode =  $_SESSION["bulansys"] . '/' . $_SESSION["tahunsys"];
			//echo $tahun;
			//echo exit;
			//$this->showPeriodeOption($tahun);
			//$periode  = $this->showPrdGaji($tahun);
			//$this->assign("periode", $periode);
			//$this->assign("idperiode", $idperiode);
			//$this -> tahun_opt_generate($tahun);
		}
		else
		{
			$idperiode= $_GET['idprd'];
			//$tahun = $idperiode;
			//$periode  = $this->showPrdGaji($idperiode);
			//$this->assign("periode", $periode);
			//$this->assign("idperiode", $idperiode);
		}
	    $thnbln = substr($idperiode,0,2) . substr($idperiode,3,4);
		// cek periode islocked = ada record
		
		$sqlx="select * from `tab_periode_locked` where blntahun='$thnbln'";
		//$islocked = $db -> GetRow($sqlx);
		$rs = $db->Execute($sqlx);

		if (!$rs->RecordCount())
		{
			$sqlx="insert into tab_periode_locked(blntahun, islocked) values ('$thnbln','')";
			$resultx = $db->Execute($sqlx);
			//echo $sqlx;
		}
		else
		{
		//echo "ada peg ";
		// cek periode islocked ?
		$sqlx="select * from `tab_periode_locked` where blntahun='$thnbln' and islocked='1'";
		$rs = $db->Execute($sqlx);
		if ($rs->RecordCount())
		{echo "<script language=javascript>
					alert('Periode ini sudah dilocked!');
					window.location='index.php';
					</script>";}
		else
		{
	    //echo $thnbln;
	    //echo exit;	
	    //$employee_id = $_POST['employee_id'];
	    $id = $_GET[idata];
	    $sql = "delete from data_gaji where periode='$thnbln'";
            $del_result = $db->Execute($sql);
/* belon ada pph
	    $sql = "insert into dat_gaji (id, id_peg, gaji, EWHC, lembur, cdo, pot_pinjaman, pot_jamsostek, pot_tdkhadir, pot_lain1, pot_lain2, pot_lain3, gaji_terima, periode, userinsert, tglinsert)
select 0, a.id, upah, b.EWHC, (select lembur from dat_pendapatan where periode = '012010' and id_peg=a.id) as lembur, (select cdo from dat_pendapatan where periode = '012010' and id_peg=a.id) as cdo, (select jml_potongan from dat_cash where prd_awal_pot <= '201001' and prd_akhir_pot >= '201001' and id_peg=a.id) as pinjaman_bank, (2/100)*upah as pot_jamsostek, (select ketidakhadiran from dat_potongan where periode = '012010' and id_peg=a.id) as pot_tdkhadir, (select lain1 from dat_potongan where periode = '012010' and id_peg=a.id) as pot_lain1, (select lain2 from dat_potongan where periode = '012010' and id_peg=a.id) as pot_lain2, (select lain3 from dat_potongan where periode = '012010' and id_peg=a.id) as pot_lain3,
((upah + b.EWHC + coalesce((select lembur from dat_pendapatan where periode = '012010' and id_peg=a.id),0) + coalesce((select cdo from dat_pendapatan where periode = '012010' and id_peg=a.id),0))- (coalesce((select jml_potongan from dat_cash where prd_awal_pot <= '201001' and prd_akhir_pot >= '201001' and id_peg=a.id),0)+((2/100)*upah) + coalesce((select ketidakhadiran from dat_potongan where periode = '012010' and id_peg=a.id),0) + coalesce((select lain1 from dat_potongan where periode = '012010' and id_peg=a.id),0) + coalesce((select lain2 from dat_potongan where periode = '012010' and id_peg=a.id),0) + coalesce((select lain3 from dat_potongan where periode = '012010' and id_peg=a.id),0))) as gaji_terima,'012010','admin',now() from tab_employee a inner join vw_EWHC b on
a.id=b.id";
*/
/*
    global $dbhost;
    global $dbuser;
    global $dbpassword;
    global $dbname;
    mysql_connect($dbhost, $dbuser, $dbpassword) or
    die("Could not connect: " . mysql_error());
    mysql_select_db($dbname);
*/
/*
$sql = "insert into dat_gaji (id, id_peg, gaji, EWHC, lembur, cdo, pot_pinjaman, pot_jamsostek, pot_tdkhadir, pot_lain1, pot_lain2, pot_lain3, gaji_terima, PPh, periode, userinsert, tglinsert)
select 0, a.id, upah, b.EWHC, coalesce((select lembur from dat_pendapatan where periode = '012010' and id_peg=a.id),0) as lembur, coalesce((select cdo from dat_pendapatan where periode = '012010' and id_peg=a.id),0) as cdo, coalesce((select jml_potongan from dat_cash where prd_awal_pot <= '201001' and prd_akhir_pot >= '201001' and id_peg=a.id),0) as pinjaman_bank, (2/100)*upah as pot_jamsostek, coalesce((select ketidakhadiran from dat_potongan where periode = '012010' and id_peg=a.id),0) as pot_tdkhadir, coalesce((select lain1 from dat_potongan where periode = '012010' and id_peg=a.id),0) as pot_lain1, coalesce((select lain2 from dat_potongan where periode = '012010' and id_peg=a.id),0) as pot_lain2, coalesce((select lain3 from dat_potongan where periode = '012010' and id_peg=a.id),0) as pot_lain3, ((upah + b.EWHC + coalesce((select lembur from dat_pendapatan where periode = '012010' and id_peg=a.id),0) + coalesce((select cdo from dat_pendapatan where periode = '012010' and id_peg=a.id),0))- (coalesce((select jml_potongan from dat_cash where prd_awal_pot <= '201001' and prd_akhir_pot >= '201001' and id_peg=a.id),0)+((2/100)*upah) + coalesce((select ketidakhadiran from dat_potongan where periode = '012010' and id_peg=a.id),0) + coalesce((select lain1 from dat_potongan where periode = '012010' and id_peg=a.id),0) + coalesce((select lain2 from dat_potongan where periode = '012010' and id_peg=a.id),0) + coalesce((select lain3 from dat_potongan where periode = '012010' and id_peg=a.id),0))) as gaji_terima, (SELECT case when ((gajithn_thr - by_jbt_gaji - by_jbt_bns - JHT)-PTKP) < 0 then 0 else fn_progresif(round(((gajithn_thr - by_jbt_gaji - by_jbt_bns - JHT)-PTKP),0))/12 end PPh21_bln
 FROM vw_Pajak_Lengkap where id= a.id) ,'012010','admin',now() from tab_employee a inner join vw_EWHC b on
a.id=b.id";
*/

	global $link;
	/*
	$sql="call sp_gen_pph('$thnbln','$_SESSION[usernamesession]');";
        //echo $sql;echo exit;


	if ($result = mysqli_query($link, $sql))
	{
//////////
	            echo "<script language=javascript>
	                    alert('Terima Kasih, berhasil mengenerate data PPH');
	                    window.location='payroll.php';
	                 </script>";
///////////
	}
	else
	{
            echo "<script language=javascript>
	                    alert('Gagal mengenerate data pph');
	                    window.location='payroll.php';
	                 </script>";
	}
*/
/* ini jalan
$sql = "insert into dat_gaji (id, id_peg, gaji, EWHC, lembur, cdo, pot_pinjaman, pot_jamsostek, pot_tdkhadir, pot_lain1, pot_lain2, pot_lain3, gaji_terima, PPh, periode, userinsert, tglinsert)
select 0, a.id, upah, b.EWHC, coalesce((select lembur from dat_pendapatan where periode = '012010' and id_peg=a.id),0) as lembur, coalesce((select cdo from dat_pendapatan where periode = '012010' and id_peg=a.id),0) as cdo, coalesce((select jml_potongan from dat_cash where prd_awal_pot <= '201001' and prd_akhir_pot >= '201001' and id_peg=a.id),0) as pinjaman_bank, (2/100)*upah as pot_jamsostek, coalesce((select ketidakhadiran from dat_potongan where periode = '012010' and id_peg=a.id),0) as pot_tdkhadir, coalesce((select lain1 from dat_potongan where periode = '012010' and id_peg=a.id),0) as pot_lain1, coalesce((select lain2 from dat_potongan where periode = '012010' and id_peg=a.id),0) as pot_lain2, coalesce((select lain3 from dat_potongan where periode = '012010' and id_peg=a.id),0) as pot_lain3, ((upah + b.EWHC + coalesce((select lembur from dat_pendapatan where periode = '012010' and id_peg=a.id),0) + coalesce((select cdo from dat_pendapatan where periode = '012010' and id_peg=a.id),0))- (coalesce((select jml_potongan from dat_cash where prd_awal_pot <= '201001' and prd_akhir_pot >= '201001' and id_peg=a.id),0)+((2/100)*upah) + coalesce((select ketidakhadiran from dat_potongan where periode = '012010' and id_peg=a.id),0) + coalesce((select lain1 from dat_potongan where periode = '012010' and id_peg=a.id),0) + coalesce((select lain2 from dat_potongan where periode = '012010' and id_peg=a.id),0) + coalesce((select lain3 from dat_potongan where periode = '012010' and id_peg=a.id),0))) as gaji_terima, coalesce((select PPh21 from dat_PPh where periode = '012010' and id_peg=a.id),0) as PPh,'012010','admin',now() from tab_employee a inner join vw_EWHC b on a.id=b.id";	
		
            $result = $db->Execute($sql);
*/
            //echo $sql;
	    //echo exit;
	//global $link;
	//$sql="call sp_gen_upah('$thnbln','$thnbln','$_SESSION[usernamesession]');";
	$sql="call sp_gen_gaji('$thnbln','$thnbln','$_SESSION[username]');";
	//echo $sql;echo exit;

	if ($result = mysqli_query($link, $sql))
	{
	            echo "<script language=javascript>
	                    alert('Terima Kasih, berhasil mengenerate data upah');
	                    window.location='payroll.php';
	                 </script>";
	}
	else
	{
            echo "<script language=javascript>
	                    alert('Gagal mengenerate data');
	                    window.location='payroll.php';
	                 </script>";
	}

			}
		}
		//echo '====';

/*
	        if($result)
	        {
	            echo "<script language=javascript>
	                    alert('Terima Kasih, berhasil mengenerate data');
	                    window.location='payroll.php';
	                 </script>";
	        }
	        else
	            echo "<script language=javascript>
	                    alert('Gagal mengenerate data');
	                    window.location='payroll.php';
	                 </script>";
*/

        }

	function deljabatan()
        {
			//$this->valid = Util::doCheckAuth(DEV_PAGES);
			$this->valid = 1;
			if($this->valid <> 1){
				echo "<script language=javascript>
	                    alert('Anda tidak berhak mengakses halaman ini.');
	                    window.location='cabdealer.php';
	                 </script>";
                	exit();
			} else {
				$this->assign("authenticated", $this->valid);
			}
            global $db;
            global $TITLE;
	    $this->assign("title", $TITLE);

	    //$employee_id = $_POST['employee_id'];
	    $id = $_GET[idata];

	    $sql = "delete from dat_gaji where id = $id";
            $del_result = $db->Execute($sql);
            //echo $sql;
	        if($del_result)
	        {
	            echo "<script language=javascript>
	                    alert('Terima Kasih, berhasil menghapus data');
	                    window.location='payroll.php';
	                 </script>";
	        }
	        else
	            echo "<script language=javascript>
	                    alert('Gagal menghapus data');
	                    window.location='payroll.php';
	                 </script>";
        }

        function showPayroll()
	{
            
       	require ('user_cek.php');
	    include "fn/fn_str.php";
  	    global $title,$db;
		$smarty = new Smarty;
 		$smarty->force_compile = true;
		//$smarty->debugging = true;
		$smarty->caching = true;
		$smarty->cache_lifetime = 120;
		$smarty->assign("title",$title);
		$smarty->assign("username",$_SESSION['username']);
		$smarty->assign("statuslogin",$_SESSION['statuslogin']);
		$smarty->assign("samping","35");
			

		//echo $thnbln;
			//pph21+
				$sqlUser     = "select a.id, periode,a.NIK, a.nama as name, nama_jabatan,gaji,lhadir,jhadir,pendlain,uhadir,thadir,tlain,tjabatan,transport,
case when b.status = 'P' then round(gaji/lhadir*jhadir)
else round(gaji) end as gajiok,
case when b.status = 'P' then round(((gaji/lhadir*jhadir)+thadir+tlain+tjabatan+transport))
else round(gaji+thadir+tlain+tjabatan+transport) end as gross,
grossup,pph21,bpjs_naker,bpjs_sehat,potlain,pinjaman,(bpjs_naker+bpjs_sehat+potlain+pinjaman) as pot_bro,
case when b.status = 'P' then round(((gaji/lhadir*jhadir)+thadir+tlain+tjabatan+transport)+pendlain-(bpjs_naker+bpjs_sehat+potlain+pinjaman))
else round((gaji+thadir+tlain+tjabatan+transport)+pendlain-(bpjs_naker+bpjs_sehat+potlain+pinjaman)) end as thpok from tab_employee a
inner join data_gaji b on a.NIK=b.nik
left join tab_jabatan c on a.id_jbt=c.id_jbt";
//echo $sqlUser;
//echo exit;
// status_p = 'A' and
   
	        $rs = $db->Execute($sqlUser);

	        if (!$rs->RecordCount())
	        {
	             $kosong = 'kosong';
	             $pos_list[] = array(
	                                'no'=>$kosong,
	                                'id'=>$kosong,
					'posprd'=>$kosong,
					'posName'=>$kosong,
					'posjbt'=>$kosong,
					'poshadir'=>$kosong,
					'pospph'=>$kosong,
					'pospotlain'=>$kosong,
					'posupahterima'=>$kosong,
                        );
	        }
	        else
	        { 

	            //$no = $awal;
				$no = 0;
	            while ($rowPos_list = $rs->FetchRow()){
	                  if($_SESSION["username"]!='admin' && $rowuser_list['username']=='admin')
	                       continue;

	                  ++$no;

	                  $pos_list[] = array(

					    'no'=>$no,
	                                    'id'=>$no,
					    'posprd'=>$rowPos_list['periode'],
					    'posName'=>strtoupper($rowPos_list['name']),
					    'posjbt'=>$rowPos_list['nama_jabatan'],
				    	//'poslevel'=>$rowPos_list['sl'],
					    'posgaji'=>number_format($rowPos_list['gajiok'],0),
					    'poshadir'=>number_format($rowPos_list['thadir'],0),
					    'postlain'=>number_format($rowPos_list['tlain'],0),
					    'posjabatan'=>number_format($rowPos_list['tjabatan'],0),
					    'posmeal'=>number_format($rowPos_list['transport'],0),
						'pospendlain'=>number_format($rowPos_list['pendlain'],0),
 					    'posgross'=>number_format($rowPos_list['gross'],0),
 					    'pospph'=>number_format($rowPos_list['pph21'],0),
					    'pospotjht'=>number_format($rowPos_list['bpjs_naker'],0),
						'pospotsehat'=>number_format($rowPos_list['bpjs_sehat'],0),
			    		'pospotlain'=>number_format($rowPos_list['potlain'],0),
					    'pospotpinjaman'=>number_format($rowPos_list['pinjaman'],0),
					    'pospotbro'=>number_format($rowPos_list['pot_bro'],0),
					    'posupahterima'=>number_format($rowPos_list['thpok'],0)
	                                    );
	            }
	        }

	        	$smarty->assign("pos", $pos_list);

			$smarty->display("payroll.tpl");
        }

        function showjabatanctk()
	{
            
            global $db;
            global $FOOTER_NOTES,$HEADER_NOTES,$TITLE,$PHP_SELF;
			global $awal,$jumrow;
			if ($awal) {
				$start=$awal;
			}else{
				$start=0;
			}
			if ($jumrow) {
				$numrows=$jumrow;
			}else{
				$numrows=ITEM_PER_PAGE;
			}

            $smarty->assign("HEADER_NOTES", $HEADER_NOTES);
            $smarty->assign("FOOTER_NOTES", $FOOTER_NOTES);
	    $smarty->assign("title", $TITLE);
	    $smarty->assign("self_url", 'payroll.php');
			
	    $keyword = empty($_POST['keyword']) ? $_REQUEST['keyword'] : $_POST['keyword'];
            $keyword = str_replace("'","",stripslashes($keyword));
            $to_search = str_replace("\"","",urlencode($keyword));
            $smarty -> assign("keyword",$keyword);
            $smarty -> assign("to_search",$to_search);
//
 $idperiode = $_REQUEST['idperiode'];

		if ($idperiode =='')
		{
			$tahun =  $_SESSION["bulansys"] . '/' . $_SESSION["tahunsys"];
			$idperiode=$_SESSION["bulansys"] . '/' . $_SESSION["tahunsys"];
			//echo $tahun;
			//echo exit;
			//$this->showPeriodeOption($tahun);
			$periode  = $smarty->showPrdGaji($tahun);
			$smarty->assign("periode", $periode);
			$smarty->assign("idperiode", $idperiode);
			//$this -> tahun_opt_generate($tahun);
		}
		else
		{
			$tahun = $idperiode;
			$periode  = $smarty->showPrdGaji($idperiode);
			$smarty->assign("periode", $periode);
			$smarty->assign("idperiode", $idperiode);
		}

		echo $thnbln = substr($idperiode,0,2) . substr($idperiode,3,4);
//
/*
	    $idperiode = $_REQUEST['idperiode'];

		if ($idperiode =='')
		{
			$tahun =  $_SESSION["bulansys"] . '/' . $_SESSION["tahunsys"];
			//echo $tahun;
			//echo exit;
			//$this->showPeriodeOption($tahun);
			$periode  = $this->showPrdGaji($tahun);
			$this->assign("periode", $periode);
			$this->assign("idperiode", $idperiode);
			//$this -> tahun_opt_generate($tahun);
		}
		else
		{
			$tahun = $idperiode;
			$periode  = $this->showPrdGaji($idperiode);
			$this->assign("periode", $periode);
			$this->assign("idperiode", $idperiode);
		}

		$thnbln = substr($idperiode,0,2) . substr($idperiode,3,4);
*/
			//$sqlUser     = "SELECT * FROM Tab_User inner join tab_kantor on tab_kantor.kode_kantor=Tab_User.kode_kantor";
				$sqlUser     = "select a.id, NIK, nama as name, nama_jabatan, a.sl, b.EWHC, b.cdo, gaji, b.lembur, b.pot_pinjaman, b.pot_jamsostek, b.pot_tdkhadir, b.pot_lain1, b.gaji_terima, periode, PPh from tab_employee a inner join dat_gaji b on a.id=b.id_peg
inner join tab_jabatan c on a.id_jbt=c.id_jbt where b.periode='$thnbln'";
//echo $sqlUser;
//echo exit;
            		//$sqlUser     = "SELECT * FROM dat_transferfile where kode_kantor='$_SESSION[kodektr]'";
/*			
			//print ($_SESSION["kodektr"]);
			$Nstart = $start + $numrows;
			//$sqlNextPage = $sqlUser . " LIMIT $Nstart,1";
			$sqlNextPage = $sqlUser . " LIMIT 5";
			$sql_list_next = $db->Execute($sqlNextPage);

			$jumnext = $sql_list_next->RecordCount();
			
			if ($jumnext > 0){
			    $linknext = "payroll.php?awal=$Nstart&jumrow=$numrows&orderby=$orderby";
				
			}else{
			    $linknext = "#";
			}
			$prev = $start-$numrows;
			if ($prev >= 0){
			    $linkprev = "payroll.php?awal=$prev&jumrow=$numrows&orderby=$orderby";
				
			}else{
			    $linkprev = "#";
			}
			
			$this->assign("awal", $awal);
			$this->assign("jumrow", $numrows);
			$this->assign("linknext", $linknext);
			$this->assign("linkprev", $linkprev);
			
			$sqlUser .= " LIMIT $start,$numrows";
			//$sqlUser .= " LIMIT 5";
		//print ($sqlUser);
*/
	        $rs = $db->Execute($sqlUser);

	        if (!$rs->RecordCount())
	        {
	             $kosong = 'kosong';
	             $pos_list[] = array(
	                                'no'=>$kosong,
	                                'id'=>$kosong,
					'posprd'=>$kosong,
					'posName'=>$kosong,
					'posjbt'=>$kosong,
					'postdkhadir'=>$kosong,
					'postrmlain1'=>$kosong,
					'pospotlain2'=>$kosong,
					'posupahterima'=>$kosong,
                        );
	        }
	        else
	        { 

	            $no = $awal;
	            while ($rowPos_list = $rs->FetchRow()){
	                  if($_SESSION["usernamesession"]!='admin' && $rowuser_list['username']=='admin')
	                       continue;

	                  ++$no;

	                  $pos_list[] = array(

					    'no'=>$no,
	                                    'id'=>$no,
					    'posprd'=>$rowPos_list['periode'],
					    'posName'=>$rowPos_list['name'],
					    'posjbt'=>$rowPos_list['nama_jabatan'],
				    	    'poslevel'=>$rowPos_list['sl'],
					    'posgaji'=>number_format($rowPos_list['gaji'],0),
					    'posewhc'=>number_format($rowPos_list['EWHC'],0),
					    'poscdo'=>number_format($rowPos_list['cdo'],0),
					    'poslembur'=>number_format($rowPos_list['lembur'],0),
 					    'pospph'=>number_format($rowPos_list['PPh'],0),
					    'pospot_bank'=>number_format($rowPos_list['pot_pinjaman'],0),
			    		    'pospot_jamsostek'=>number_format($rowPos_list['pot_jamsostek'],0),
					    'postdkhadir'=>number_format($rowPos_list['pot_tdkhadir'],0),
					    'pospotlain1'=>number_format($rowPos_list['pot_lain1'],0),
					    'pospotlain2'=>number_format($rowPos_list['pot_lain2'],0),
					    'posupahterima'=>number_format($rowPos_list['gaji_terima'],0)
	                                    );
	            }
	        }

	        	$smarty->assign("pos", $pos_list);
			
			//$valid = Util::doCheckAuth(POS_PAGES);
			$valid =1;
			if($_SESSION["userflag"] == 0){
			//if($valid == 0){
				echo "<script language=javascript>
				alert('Anda tidak berhak mengakses halaman ini.');
				history.go(-1);
				</script>";
			} else {
				$smarty->assign("authenticated", $valid);			
			}
            
			$smarty->display("payroll_cetak.html");
        }

	function showjabatanD()
	{
            
            global $db;
            global $FOOTER_NOTES,$HEADER_NOTES,$TITLE,$PHP_SELF;
			global $awal,$jumrow;
			if ($awal) {
				$start=$awal;
			}else{
				$start=0;
			}
			if ($jumrow) {
				$numrows=$jumrow;
			}else{
				$numrows=ITEM_PER_PAGE;
			}

            $this->assign("HEADER_NOTES", $HEADER_NOTES);
            $this->assign("FOOTER_NOTES", $FOOTER_NOTES);
	    $this->assign("title", $TITLE);
	    $this->assign("self_url", 'payroll.php');
			
	    $keyword = empty($_POST['keyword']) ? $_REQUEST['keyword'] : $_POST['keyword'];
            $keyword = str_replace("'","",stripslashes($keyword));
            $to_search = str_replace("\"","",urlencode($keyword));
            $this -> assign("keyword",$keyword);
            $this -> assign("to_search",$to_search);
	    $idperiode = $_GET['idprd'];

	    $thnbln = substr($idperiode,0,2) . substr($idperiode,3,4);

			//$sqlUser     = "SELECT * FROM Tab_User inner join tab_kantor on tab_kantor.kode_kantor=Tab_User.kode_kantor";
				$sqlUser     = "select a.id, NIK, nama as name, nama_jabatan, a.sl, b.EWHC, b.cdo, gaji, b.lembur, b.PPh, b.pot_pinjaman, b.pend_lain2a,b.pot_jamsostek, b.pot_tdkhadir, b.pot_lain1, b.pot_lain2,  b.pot_lain3, b.gaji_terima, periode, a.nama_bank, a.nama_pemilik, concat('''',a.no_rek_bank) as no_rek_bank, b.pend_lain2 from tab_employee a inner join dat_gaji b on a.id=b.id_peg
inner join tab_jabatan c on a.id_jbt=c.id_jbt where b.periode='$thnbln'";
	
	        $rs = $db->Execute($sqlUser);

	        if (!$rs->RecordCount())
	        {
	             $kosong = 'kosong';
	             $pos_list[] = array(
	                                'no'=>$kosong,
	                                'id'=>$kosong,
					'posprd'=>$kosong,
					'posName'=>$kosong,
					'posjbt'=>$kosong,
					'postdkhadir'=>$kosong,
					'postrmlain1'=>$kosong,
					'pospotlain2'=>$kosong,
					'posupahterima'=>$kosong,
                        );
	        }
	        else
	        { 

	            $no = $awal;
	            while ($rowPos_list = $rs->FetchRow()){
	                  if($_SESSION["usernamesession"]!='admin' && $rowuser_list['username']=='admin')
	                       continue;

	                  ++$no;

	                  $pos_list[] = array(
					    'no'=>$no,
	                                    'id'=>$no,
					    'posprd'=>$rowPos_list['periode'],
					    'posName'=>$rowPos_list['name'],
					    'posjbt'=>$rowPos_list['nama_jabatan'],
				    	    'poslevel'=>$rowPos_list['sl'],
					    'posbank'=>$rowPos_list['nama_bank'],
					    'pospemilik'=>$rowPos_list['nama_pemilik'],
					    'posnorek'=>$rowPos_list['no_rek_bank'],
					    'posgaji'=>$rowPos_list['gaji'],
					    'posewhc'=>$rowPos_list['EWHC'],
					    'poscdo'=>$rowPos_list['cdo'],
					    'poslembur'=>$rowPos_list['lembur'],
					    'posmeal'=>$rowPos_list['pend_lain2'],
						'poslain2'=>$rowPos_list['pend_lain2a'],
				    	    'pospph21'=>$rowPos_list['PPh'],
					    'pospot_bank'=>$rowPos_list['pot_pinjaman'],
			    		    'pospot_jamsostek'=>$rowPos_list['pot_jamsostek'],
					    'postdkhadir'=>$rowPos_list['pot_tdkhadir'],
					    'pospotlain1'=>$rowPos_list['pot_lain1'],
					    'pospotlain2'=>$rowPos_list['pot_lain2'],
					    'pospotlain3'=>$rowPos_list['pot_lain3'],
					    'posupahterima'=>$rowPos_list['gaji_terima']
	                                    );
	            }
	        }

	        	$smarty->assign("pos", $pos_list);
			
			//$valid = Util::doCheckAuth(POS_PAGES);
			$valid =1;
			if($_SESSION["userflag"] == 0){
			//if($valid == 0){
				echo "<script language=javascript>
				alert('Anda tidak berhak mengakses halaman ini.');
				history.go(-1);
				</script>";
			} else {
				$this->assign("authenticated", $valid);			
			}
            
			$this->display("payroll_download.html");
        }
    }


?>