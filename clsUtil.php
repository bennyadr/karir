<?php

//require_once 'user_cek.php';
require_once 'config.php';
//require_once 'user_admin_cek.php';

class Util
{
    var $date_option;
    var $month_option;
    var $year_option;
    var $gender_option;
    var $uv;
    var $nomer;
    var $tpl = null;
	function __construct() {
	// instantiate the template object
	//$this->tpl = new Guestbook_Smarty;
	}

    function Util()
    {
		//require_once("koneksi.php");

    }

    function generate_page($sql){
        global $db,$rs,$offset,$p_sel,$page;
       	//extract($_REQUEST, EXTR_PREFIX_SAME, "pre");      
        
        /***** generate paging 
        Previously on template file should be provided combo element like this:
        <SELECT onchange=submit() name="p_sel">
            {html_options values=$page selected=$p_sel output=$page}
        </SELECT>
        end of combo page ****/
        
        //echo $sql;

        $rs_report = $db->Execute($sql);
        if(!$rs_report){
			$num_report = 0;
		}else{
			$num_report = $rs_report -> RecordCount();
		}
        //$num_report = $rs_report -> RecordCount();
        //echo $num_report;
        $page_num = ceil($num_report / ROW_PER_PAGE);
        //  echo $page_num;

        for($i=1; $i<=$page_num; $i++)
            $page[] = $i;


        $p_sel = empty ($_REQUEST['p_sel']) ? 1 : $_REQUEST['p_sel'];
        $this -> assign("page",$page);
        $this -> assign("p_sel",$p_sel);
        $this -> assign("page_num",$page_num);

        //ROW_PER_PAGE has been defined on config.php
        $offset = ($p_sel-1) * ROW_PER_PAGE;
		$rs = $db -> SelectLimit($sql,ROW_PER_PAGE,$offset);

		return $rs;

    }

    function gender_option($row,$field_fetched)
	{
        switch ($row[$field_fetched]) {
          case 'w':
            $w_selected = "selected";
            break;
          default:
            $p_selected = "selected";
            break;
        }

        $gender_option = "  <option value=p $p_selected>Pria</option>
                             <option value=w $w_selected>Wanita</option>";
	    return $gender_option;
	}

    function date_option($row,$field_fetched)
	{

	    for($i=1; $i<=31; $i++)
	    {
        	$bday = explode("-",$row[$field_fetched]);
            //print_r($bday);

            if(!empty($bday[2]))
            {
	            if($i==$bday[2])
	                $selected = "selected";
	            else
	                $selected = "";
            }
            else
            {
	            if($i==date(d))
	                $selected = "selected";
	            else
	                $selected = "";
            }

	        $date_option .= "<option value=$i $selected>$i</option>";
	    }

	    return $date_option;
	}

	function month_option($row,$field_fetched)
	{
	    for($i=1; $i<=12; $i++)
	    {
        	$bmonth = explode("-",$row[$field_fetched]);
            //print_r($bday);

            if(!empty($bmonth[1]))
            {
	            if($i==$bmonth[1])
	                $selected = "selected";
	            else
	                $selected = "";
            }
            else
            {
	            if($i==date(m))
	                $selected = "selected";
	            else
	                $selected = "";
			}

	        switch($i)
	        {
	            case '1':   $month_name = "Jan";
	                        break;
	            case '2':   $month_name = "Peb";
	                        break;
	            case '3':   $month_name = "Mar";
	                        break;
	            case '4':   $month_name = "Apr";
	                        break;
	            case '5':   $month_name = "Mei";
	                        break;
	            case '6':   $month_name = "Juni";
	                        break;
	            case '7':   $month_name = "Jul";
	                        break;
	            case '8':   $month_name = "Agt";
	                        break;
	            case '9':   $month_name = "Sep";
	                        break;
	            case '10':  $month_name = "Okt";
	                        break;
	            case '11':  $month_name = "Nop";
	                        break;
	            case '12':  $month_name = "Des";
	                        break;
	        }

	        $month_option .= "<option value=$i $selected>$month_name</option>";
	    }

	    return $month_option;
	}

	function month_option2($nilai)
	{
	      switch($nilai)
	        {
	            case '1':   $month_name = "Januari";
	                        break;
	            case '2':   $month_name = "Pebruari";
	                        break;
	            case '3':   $month_name = "Maret";
	                        break;
	            case '4':   $month_name = "April";
	                        break;
	            case '5':   $month_name = "Mei";
	                        break;
	            case '6':   $month_name = "Juni";
	                        break;
	            case '7':   $month_name = "Juli";
	                        break;
	            case '8':   $month_name = "Agustus";
	                        break;
	            case '9':   $month_name = "September";
	                        break;
	            case '10':  $month_name = "Oktober";
	                        break;
	            case '11':  $month_name = "Nopember";
	                        break;
	            case '12':  $month_name = "Desember";
	                        break;
	        }

	        //$month_option2 .= $month_name;
	    return $month_name;
	}

	function year_option($row,$field_fetched)
	{
	    $tahun = date('Y');
	    for($i=$tahun; $i>=1900; $i--)
	    {
        	$byear = explode("-",$row[$field_fetched]);
            //print_r($bday);

            if(!empty($byear[0]))
            {
	            if($i==$byear[0])
	                $selected = "selected";
	            else
	                $selected = "";
            }
            else
            {
	            if($i==date(Y))
	                $selected = "selected";
	            else
	                $selected = "";
			}

	        $year_option .= "<option value=$i $selected>$i</option>";
	    }
	    return $year_option;
	}

	//EDIT BY KIP
	//START doCheckAuth Function



	// -- ADMIN --
	// vms.php                 : Visi & Misi Perusahaan = 0
	// work_unite.php          : Daftar Unit Kerja      = 1
	// jabatan.php             : Posisi / Jabatan       = 2
	// employee.php            : Daftar Pegawai         = 3
	// supervise.php           : Daftar Supervisi       = 4
	// master_kko.php          : Master KKO             = 5
	// user.php                : Daftar User            = 6
	// master_comp.php         : Master Assesment       = 7

	// -- KKO --
	// kko.php?mod=input       : Input KKO              = 8
	// kko.php                 : Monitoring             = 9
	// message.php             : Couching & Counseling  = 10

	// -- ASSESSMENT --
	// quiz.php                : Assessment             = 11
	// comp.php                : Monitoring             = 12
	// comp.php?mod=showResult : Rekapitulasi           = 13

	// -- WINDOW --
	// #                       : Tentang MSDM Manager   = 14
	// #                       : Halaman Bantuan        = 15
	// index.php?mod=logout    : Logout                 = 16


	/*
	0 = read & write (valid)
	1 = block (invalid)
	2 = read-only
	*/

	function doCheckAuth($pa)
	{
		global $db;

		$sqlCheckAuth     = "SELECT * FROM tab_user WHERE id = $_SESSION[useridsession]";
		//echo $sqlCheckAuth;
		$rs = $db->Execute($sqlCheckAuth);

		if ($rs->RecordCount() < 1 ){

			header("location:index.php?mod=logout&err=2&pesan=Username%20Tidak%20Terdaftar&tmk_id=$tmk_id");
			exit();

		} else {

			$row = $rs->FetchRow();

			$uv = substr($row['authority_payroll'], $pa, 1);


			//Util::checkEmployeeNum(MAX_EMP_NUM);
			//Util::checkKPINum(MAX_KPI_NUM);
			//Util::checkExpDate();

		}

		return $uv;
	}


	//encription code
	function keyED($txt,$encrypt_key) 
	{ 
		$encrypt_key = md5($encrypt_key); 
		$ctr=0; 
		$tmp = ""; 
		for ($i=0;$i<strlen($txt);$i++) 
		{ 
			if ($ctr==strlen($encrypt_key)) $ctr=0; 
			$tmp.= substr($txt,$i,1) ^ substr($encrypt_key,$ctr,1); 
			$ctr++; 
		} 
		return $tmp; 
	} 

	function decrypt($txt,$key) 
	{ 
		$txt = Util::keyED($txt,$key); 
		$tmp = ""; 
		for ($i=0;$i<strlen($txt);$i++) 
		{ 
			$md5 = substr($txt,$i,1); 
			$i++; 
			$tmp.= (substr($txt,$i,1) ^ $md5); 
		} 
		return $tmp; 
	} 
	//end of encription code



	function encrypt($txt,$key)
	{
	srand((double)microtime()*1000000);
	$encrypt_key = md5(rand(0,32000));
	$ctr=0;
	$tmp = "";
	for ($i=0;$i<strlen($txt);$i++)
	{
	if ($ctr==strlen($encrypt_key)) $ctr=0;
	$tmp.= substr($encrypt_key,$ctr,1) .
	(substr($txt,$i,1) ^ substr($encrypt_key,$ctr,1));
	$ctr++;
	}
	return Util::keyED($tmp,$key);
	}

	function checkExpDate()
	{

		$key = "Subhanallaah"; 
		//$enc_text = "S1ejfxfV:{70";
		//$enc_text = "U7U4`U0~Q2U0{5W`";
		//$enc_text = "T6U4c_:P+aexWf2";
		//$exp_date = Util::decrypt($enc_text,$key);
		//echo "<br/>".$exp_date;
		
		$exp_date = "2006-12-12";

		$dateinfo = explode("-",$exp_date);
		$year = $dateinfo[0];
		$month = $dateinfo[1];
		$day = $dateinfo[2];
		$exp = mktime(0,0,0,$month,$day,$year);

		$today = date("Y-m-d");
		$todayinfo = explode("-",$today);
		$yeartoday = $todayinfo[0];
		$monthtoday = $todayinfo[1];
		$daytoday = $todayinfo[2];
		$tday = mktime(0,0,0,$monthtoday,$daytoday,$yeartoday);


		if ( $exp <= $tday )
		{	
			echo "<script language=javascript>
					alert('Maaf Masa Percobaan telah habis. Silahkan hubungi supplier software ini untuk memperpanjang masa aktif.');
					window.location = 'index.php?mod=logout';
				</script>";
		}

	}

	
	function checkKPINum($KPI_NUM)
	{
      global $db;

      $sql = "select * from msdm_kpi";
      $result = $db->Execute($sql);
      $rs_num = $result->RecordCount();

      $gap = $rs_num - $KPI_NUM;
      if($rs_num > $KPI_NUM)
      {

        $sql = "select max(id) as id from msdm_kpi";
        $result = $db->Execute($sql);
        $rs = $result->FetchRow();

        $sql_del = "delete from msdm_kpi where id = ".$rs['id'];
		$db->Execute($sql_del);

		Util::checkKPINum(MAX_KPI_NUM);

      }
	}

	function checkEmployeeNum($EMP_NUM)
	{
      global $db;

      $sql = "select * from msdm_employee";
      $result = $db->Execute($sql);
      $rs_num = $result->RecordCount();

      $gap = $rs_num - $EMP_NUM;
      if($rs_num > $EMP_NUM)
      {

        $sql = "select max(id) as id from msdm_employee";
        $result = $db->Execute($sql);
        $rs = $result->FetchRow();

        $sql_del = "delete from msdm_employee where id = ".$rs['id'];
		$db->Execute($sql_del);

		Util::checkEmployeeNum(MAX_EMP_NUM);

/*
        $i=0;
        while($rs = $result->FetchRow())
        {
          if($i<($gap))
          {
            if(!stristr($rs['name'],'admin'))
            {
                $sql_del = "delete from msdm_employee where id=".$rs['id'];
                $db->Execute($sql_del);
            }
          }
          $i++;
        }

*/
      }

      $sqlUser = "select * from administrator";
      $resultUser = $db->Execute($sqlUser);
      $rs_User = $resultUser->RecordCount();

      if($rs_User > $EMP_NUM)
      {

        $sqlLUser = "select max(id) as id from administrator";
        $resultLUser = $db->Execute($sqlLUser);
        $rsLUser = $resultLUser->FetchRow();

        $sql_delLUser = "delete from administrator where id = ".$rsLUser['id'];
		$db->Execute($sql_delLUser);

		Util::checkEmployeeNum(MAX_EMP_NUM);

      }


    }


	function getEmp($cols, $op, $is)
	{
		global $db;

		if($op == "" || empty($op)){
			$op = "=";
		}

		$sql     = "SELECT * FROM msdm_employee WHERE ". $cols ." ". $op ." ". $is .";";

		$rs = $db->Execute($sql);

		if ($rs->RecordCount() < 1 ){

			header("location:index.php?mod=logout&err=2&pesan=Username%20Tidak%20Terdaftar&tmk_id=$tmk_id");
			exit();

		} else {

			$row = $rs->FetchRow();

		}

		return $row;
	}


	function getEmpById($idemp)
	{
		global $db;

		$sql     = "SELECT * FROM msdm_employee WHERE id_emp = $idemp";

		$rs = $db->Execute($sql);

		if ($rs->RecordCount() < 1 ){

			header("location:index.php?mod=logout&err=2&pesan=Username%20Tidak%20Terdaftar&tmk_id=$tmk_id");
			exit();

		} else {

			$row = $rs->FetchRow();

		}

		return $row;
	}

	function getEmpByLevel($pa)
	{
		global $db;

		$sql     = "SELECT * FROM msdm_employee WHERE level = $idemp";

		$rs = $db->Execute($sql);

		if ($rs->RecordCount() < 1 ){

			header("location:index.php?mod=logout&err=2&pesan=Username%20Tidak%20Terdaftar&tmk_id=$tmk_id");
			exit();

		} else {

			$row = $rs->FetchRow();

		}

		return $row;
	}

	function getEmpByUnit($unemp)
	{
		global $db;

		$sql     = "SELECT * FROM msdm_employee WHERE work_unit = $unemp";

		$rs = $db->Execute($sql);

		if ($rs->RecordCount() < 1 ){

			header("location:index.php?mod=logout&err=2&pesan=Username%20Tidak%20Terdaftar&tmk_id=$tmk_id");
			exit();

		} else {

			$row = $rs->FetchRow();

		}

		return $row;
	}

	function showTrainOption($id)
	{
	 	global $db;
	   	//$sqlUser = "SELECT noreg as id, nama_kantor as name FROM tab_kantor order by nama_kantor";
		$sqlUser ="select nama_training as id, nama_training as name from dat_training group by nama_training";
		//echo $sqlUser;
		//echo exit;
		$rs = $db->Execute($sqlUser);
        if (!$rs->RecordCount())
        {
             $kosong = 'kosong';
             $pos_list[] = array('id'=>$kosong,'nama_unit'=>$kosong);
        }
        else
        {
            $no = $index;
            while ($rowpos_list = $rs->FetchRow()){

	            ++$no;
				if($rowpos_list['id'] == $id)
				{
					$sel = "selected"; 
				} 
				  else 	  
				{
					$sel = "";
				}
				
				$pos_list_unit[] = array('id'=>$rowpos_list['id'],'nama_unit'=>$rowpos_list['name'],'selected'=>$sel);

			}
		}
		return $pos_list_unit;
		
	}

	function showUnitOption($idbidang,$idunit)
	{
	 	global $db;
	   	$sqlUser = "SELECT noreg as id, nama_kantor as name FROM tab_kantor order by nama_kantor";
		$rs = $db->Execute($sqlUser);
        if (!$rs->RecordCount())
        {
             $kosong = 'kosong';
             $pos_list[] = array('id'=>$kosong,'nama_unit'=>$kosong);
        }
        else
        {
            $no = $index;
            while ($rowpos_list = $rs->FetchRow()){

	            ++$no;
				if($rowpos_list['id'] == $idunit)
				{
					$sel = "selected"; 
				} 
				  else 	  
				{
					$sel = "";
				}
				
				$pos_list_unit[] = array('id'=>$rowpos_list['id'],'nama_unit'=>$rowpos_list['name'],'selected'=>$sel);

			}
		}
		return $pos_list_unit;
		
	}


        function showTrainOpt($division)
	{
	 	global $db;
	
        $sql_div = "select nama_training as id, nama_training as name from tab_training group by nama_training"; 
        //echo $sql_div;
        $result_sql_div = $db -> Execute($sql_div);

        while($rs_sql_div = $result_sql_div->FetchRow())
        {
			if($rs_sql_div['id']==$division)
				$selected = "selected";
			else
				$selected = "";


			$div_option .= "<option value='".$rs_sql_div['id']."'
							$selected>".$rs_sql_div['name']."</option>";

		}
		
		return $div_option;
	}

	function showTrainOpt2($division)
	{
	 	global $db;
	
        $sql_div = "select id as id, nama as name from tab_employee where id='$division'"; 
        //echo $sql_div;
        $result_sql_div = $db -> Execute($sql_div);

        while($rs_sql_div = $result_sql_div->FetchRow())
        {
			if($rs_sql_div['id']==$division)
				$selected = "selected";
			else
				$selected = "";


			$div_option .= "<option value='".$rs_sql_div['id']."'
							$selected>".$rs_sql_div['name']."</option>";

		}
		
		return $div_option;
	}

	function showTrainOpt2k($division)
	{
	 	global $db;
	
        $sql_div = "select id as id, nama as name from tab_employee_kopsci where id='$division'"; 
        //echo $sql_div;
        $result_sql_div = $db -> Execute($sql_div);

        while($rs_sql_div = $result_sql_div->FetchRow())
        {
			if($rs_sql_div['id']==$division)
				$selected = "selected";
			else
				$selected = "";


			$div_option .= "<option value='".$rs_sql_div['id']."'
							$selected>".$rs_sql_div['name']."</option>";

		}
		
		return $div_option;
	}

	function showPosisiOpt($division)
	{
	 	global $db;
	
        $sql_div = "select id_jbt as id, nama_jabatan as name from tab_jabatan order by nama_jabatan"; 
        //echo $sql_div;
        $result_sql_div = $db -> Execute($sql_div);

        while($rs_sql_div = $result_sql_div->FetchRow())
        {
			if($rs_sql_div['id']==$division)
				$selected = "selected";
			else
				$selected = "";


			$div_option .= "<option value='".$rs_sql_div['id']."'
							$selected>".$rs_sql_div['name']."</option>";

		}
		
		return $div_option;
	}

	function showPosisiOptk($division)
	{
	 	global $db;
	
        $sql_div = "select id_jbt as id, nama_jabatan as name from tab_jabatan_kopsci order by nama_jabatan"; 
        //echo $sql_div;
        $result_sql_div = $db -> Execute($sql_div);

        while($rs_sql_div = $result_sql_div->FetchRow())
        {
			if($rs_sql_div['id']==$division)
				$selected = "selected";
			else
				$selected = "";


			$div_option .= "<option value='".$rs_sql_div['id']."'
							$selected>".$rs_sql_div['name']."</option>";

		}
		
		return $div_option;
	}

	function showSalesOpt($sales)
	{
	 	global $db;
	
        $sql_div = "select id, name from tab_employee order by name"; 
        //echo $sql_div;
        $result_sql_div = $db -> Execute($sql_div);

        while($rs_sql_div = $result_sql_div->FetchRow())
        {
			if($rs_sql_div['id']==$sales)
				$selected = "selected";
			else
				$selected = "";


			$div_option .= "<option value='".$rs_sql_div['id']."'
							$selected>".$rs_sql_div['name']."</option>";

		}
		
		return $div_option;
	}

	function showBulanOpt($bulan)
	{
	 	global $db;
	
		$sql_div     = "SELECT '01' as kode, 'Januari' as name UNION ALL 
					SELECT '02', 'Februari' UNION ALL
					SELECT '03', 'Maret' UNION ALL 
					SELECT '04', 'April' UNION ALL 
					SELECT '05', 'Mei' UNION ALL 
					SELECT '06', 'Juni' UNION ALL 
					SELECT '07', 'Juli' UNION ALL 
					SELECT '08', 'Agustus' UNION ALL 
					SELECT '09', 'September' UNION ALL 
					SELECT '10', 'Oktober' UNION ALL 
					SELECT '11', 'Nopember' UNION ALL 
					SELECT '12', 'Desember'";
        //echo $sql_div;
        $result_sql_div = $db -> Execute($sql_div);

        while($rs_sql_div = $result_sql_div->FetchRow())
        {
			if($rs_sql_div['kode']==$bulan)
				$selected = "selected";
			else
				$selected = "";

			$bln_option .= "<option value='".$rs_sql_div['kode']."'
							$selected>".$rs_sql_div['name']."</option>";
	}
		
		return $bln_option;
	}

	function showTahunOpt($tahun)
	{
	 	global $db;
	
        $sql_div = "SELECT tahun from tab_tahun"; 
        //echo $sql_div;
        $result_sql_div = $db -> Execute($sql_div);

        while($rs_sql_div = $result_sql_div->FetchRow())
        {
			if($rs_sql_div['tahun']==$tahun)
				$selected = "selected";
			else
				$selected = "";


			$div_option .= "<option value='".$rs_sql_div['tahun']."'
							$selected>".$rs_sql_div['tahun']."</option>";

		}
		
		return $div_option;
	}

	function getEmpByPos($posemp)
	{
		global $db;

		$sql     = "SELECT * FROM msdm_employee WHERE position = $posemp";

		$rs = $db->Execute($sql);

		if ($rs->RecordCount() < 1 ){

			header("location:index.php?mod=logout&err=2&pesan=Username%20Tidak%20Terdaftar&tmk_id=$tmk_id");
			exit();

		} else {

			$row = $rs->FetchRow();

		}

		return $row;
	}

	function showKdUnitOption($idunit)
	{
	 	global $db;
	   	$sqlUser = "SELECT noreg as id, nama_kantor as name FROM tab_kantor where noreg='$idunit' order by nama_kantor";
		$rs = $db->Execute($sqlUser);
        if (!$rs->RecordCount())
        {
             $kosong = 'kosong';
             $pos_list[] = array('id'=>$kosong,'nama_unit'=>$kosong);
        }
        else
        {
            $no = $index;
            while ($rowpos_list = $rs->FetchRow()){

	            ++$no;
				if($rowpos_list['id'] == $idunit)
				{
					$sel = "selected"; 
				} 
				  else 	  
				{
					$sel = "";
				}
				
				$pos_list_unit[] = array('id'=>$rowpos_list['id'],'nama_unit'=>$rowpos_list['name'],'selected'=>$sel);

			}
		}
		return $pos_list_unit;
		
	}

	function showKdUnitOptionk($idunit)
	{
	 	global $db;
	   	$sqlUser = "SELECT noreg as id, nama_kantor as name FROM tab_kantor_kopsci where noreg='$idunit' order by nama_kantor";
		$rs = $db->Execute($sqlUser);
        if (!$rs->RecordCount())
        {
             $kosong = 'kosong';
             $pos_list[] = array('id'=>$kosong,'nama_unit'=>$kosong);
        }
        else
        {
            $no = $index;
            while ($rowpos_list = $rs->FetchRow()){

	            ++$no;
				if($rowpos_list['id'] == $idunit)
				{
					$sel = "selected"; 
				} 
				  else 	  
				{
					$sel = "";
				}
				
				$pos_list_unit[] = array('id'=>$rowpos_list['id'],'nama_unit'=>$rowpos_list['name'],'selected'=>$sel);

			}
		}
		return $pos_list_unit;
		
	}

	function showPeriodeOption($idunit)
	{
	 	global $db;
	   	//$sqlUser = "SELECT kode_kantor as id, nama_kantor as name FROM tab_kantor where isincentive='1' order by nama_kantor";
/*
		$sqlUser = "SELECT concat('01',year(now())) as id, concat('01',year(now())) as nama
union all
SELECT concat('02',year(now())), concat('02',year(now()))
union all
SELECT concat('03',year(now())), concat('03',year(now())) 
union all
SELECT concat('04',year(now())), concat('04',year(now()))
union all
SELECT concat('05',year(now())), concat('05',year(now()))
union all
SELECT concat('06',year(now())), concat('06',year(now()))
";
*/
/*
		$sqlUser = "SELECT blntahun as id, blntahun as nama FROM tab_periode_locked 
		union all
		SELECT concat(lpad(month(now()),2,'0'),year(now())), concat(lpad(month(now()),2,'0'),year(now())) order by nama";
*/
		$sqlUser = "SELECT blntahun as id, blntahun as nama, substr(blntahun,1,2) as bln, substr(blntahun,3,4) as thn 
		            FROM tab_periode_locked order by thn, bln ASC";
		$rs = $db->Execute($sqlUser);
        if (!$rs->RecordCount())
        {
             $kosong = 'kosong';
             $pos_list[] = array('id'=>$kosong,'nama'=>$kosong);
        }
        else
        {
            $no = $index;
            while ($rowpos_list = $rs->FetchRow()){

	            ++$no;
				if($rowpos_list['id'] == $idunit)
				{
					$sel = "selected"; 
				} 
				  else 	  
				{
					$sel = "";
				}
				
				$pos_list_unit[] = array('id'=>$rowpos_list['id'],'nama'=>$rowpos_list['nama'],'selected'=>$sel);

			}
		}
		return $pos_list_unit;
		
	}

function showPrdGaji($idunit)
	{
	 	global $db;
		//$sqlUser = "select date_format(now(),'%m/%Y') as id, date_format(now(),'%m/%Y') as nama
//union all select distinct concat(left(periode,2),'/', right(periode,4)) as id, concat(left(periode,2),'/', right(periode,4)) as nama from dat_gaji";
/*
$sqlUser = "select distinct * from (
select date_format(now(),'%m/%Y') as id, date_format(now(),'%m/%Y') as nama
union all select distinct concat(left(periode,2),'/', right(periode,4)) as id, concat(left(periode,2),'/', right(periode,4)) as nama from dat_gaji) x";
*/
$sqlUser="SELECT concat(left(blntahun,2),'/', right(blntahun,4)) as id, concat(left(blntahun,2),'/', right(blntahun,4)) as nama,
          blntahun as nama, substr(blntahun,1,2) as bln, substr(blntahun,3,4) as thn FROM tab_periode_locked order by thn, bln ASC";
		$rs = $db->Execute($sqlUser);
        if (!$rs->RecordCount())
        {
             $kosong = 'kosong';
             $pos_list[] = array('id'=>$kosong,'nama'=>$kosong);
        }
        else
        {
            $no = $index;
            while ($rowpos_list = $rs->FetchRow()){

	            ++$no;
				if($rowpos_list['id'] == $idunit)
				{
					$sel = "selected"; 
				} 
				  else 	  
				{
					$sel = "";
				}
				
				$pos_list_unit[] = array('id'=>$rowpos_list['id'],'nama'=>$rowpos_list['nama'],'selected'=>$sel);

			}
		}
		return $pos_list_unit;
		
	}

function showPrdGaji_err($idunit)
	{
	 	global $db;
		//$sqlUser = "select date_format(now(),'%m/%Y') as id, date_format(now(),'%m/%Y') as nama
//union all select distinct concat(left(periode,2),'/', right(periode,4)) as id, concat(left(periode,2),'/', right(periode,4)) as nama from dat_gaji";
/*
$sqlUser = "select distinct * from (
select date_format(now(),'%m/%Y') as id, date_format(now(),'%m/%Y') as nama
union all select distinct concat(left(periode,2),'/', right(periode,4)) as id, concat(left(periode,2),'/', right(periode,4)) as nama from dat_gaji) x";
*/
$sqlUser="SELECT concat(left(blntahun,2),'/', right(blntahun,4)) as id, concat(left(blntahun,2),'/', right(blntahun,4)) as nama FROM tab_periode_locked order by thn, bln ASC";
		$rs = $db->Execute($sqlUser);
        if (!$rs->RecordCount())
        {
             $kosong = 'kosong';
             $pos_list[] = array('id'=>$kosong,'nama'=>$kosong);
        }
        else
        {
            $no = $index;
            while ($rowpos_list = $rs->FetchRow()){

	            ++$no;
				if($rowpos_list['id'] == $idunit)
				{
					$sel = "selected"; 
				} 
				  else 	  
				{
					$sel = "";
				}
				
				$pos_list_unit[] = array('id'=>$rowpos_list['id'],'nama'=>$rowpos_list['nama'],'selected'=>$sel);

			}
		}
		return $pos_list_unit;
		
	}
function showPeriodeOption2($idunit)
	{
	 	global $db;
	   	//$sqlUser = "SELECT kode_kantor as id, nama_kantor as name FROM tab_kantor where isincentive='1' order by nama_kantor";
		$sqlUser = "select date_format(tgl,'%m/%Y') as id, date_format(tgl,'%m/%Y') as nama from dat_schedule group by date_format(tgl,'%m/%Y') order by date_format(tgl,'%Y/%m')";
		$rs = $db->Execute($sqlUser);
        if (!$rs->RecordCount())
        {
             $kosong = 'kosong';
             $pos_list[] = array('id'=>$kosong,'nama'=>$kosong);
        }
        else
        {
            $no = $index;
            while ($rowpos_list = $rs->FetchRow()){

	            ++$no;
				if($rowpos_list['id'] == $idunit)
				{
					$sel = "selected"; 
				} 
				  else 	  
				{
					$sel = "";
				}
				
				$pos_list_unit[] = array('id'=>$rowpos_list['id'],'nama'=>$rowpos_list['nama'],'selected'=>$sel);

			}
		}
		return $pos_list_unit;
		
	}

function showKdUnitOption2($idunit)
	{
	 	global $db;
	   	$sqlUser = "SELECT noreg as id, nama_kantor as name FROM tab_kantor order by nama_kantor";
		$rs = $db->Execute($sqlUser);
        if (!$rs->RecordCount())
        {
             $kosong = 'kosong';
             $pos_list[] = array('id'=>$kosong,'nama_unit'=>$kosong);
        }
        else
        {
            $no = $index;
            while ($rowpos_list = $rs->FetchRow()){

	            ++$no;
				if($rowpos_list['id'] == $idunit)
				{
					$sel = "selected"; 
				} 
				  else 	  
				{
					$sel = "";
				}
				
				$pos_list_unit[] = array('id'=>$rowpos_list['id'],'nama_unit'=>$rowpos_list['name'],'selected'=>$sel);

			}
		}
		return $pos_list_unit;
		
	}

	function showKdUnitOption2k($idunit)
	{
	 	global $db;
	   	$sqlUser = "SELECT noreg as id, nama_kantor as name FROM tab_kantor_kopsci order by nama_kantor";
		$rs = $db->Execute($sqlUser);
        if (!$rs->RecordCount())
        {
             $kosong = 'kosong';
             $pos_list[] = array('id'=>$kosong,'nama_unit'=>$kosong);
        }
        else
        {
            $no = $index;
            while ($rowpos_list = $rs->FetchRow()){

	            ++$no;
				if($rowpos_list['id'] == $idunit)
				{
					$sel = "selected"; 
				} 
				  else 	  
				{
					$sel = "";
				}
				
				$pos_list_unit[] = array('id'=>$rowpos_list['id'],'nama_unit'=>$rowpos_list['name'],'selected'=>$sel);

			}
		}
		return $pos_list_unit;
		
	}

function showTngMasuk($tglmasuk)
	{
	 	global $db;
	
        $sql_div = "select Distinct date_format( tgl_masuk, '%m%Y' ) AS tgl_masuk2,
date_format( tgl_masuk, '%m' ) AS bln,date_format( tgl_masuk, '%Y' ) AS thn
from tab_employee where date_format( tgl_masuk, '%m%Y' ) order by thn,bln ASC"; 
        //echo $sql_div;
        $result_sql_div = $db -> Execute($sql_div);

        while($rs_sql_div = $result_sql_div->FetchRow())
        {
			if($rs_sql_div['tgl_masuk2']==$tglmasuk)
				$selected = "selected";
			else
				$selected = "";


			$div_option1 .= "<option value='".$rs_sql_div['tgl_masuk2']."'
							$selected>".$rs_sql_div['tgl_masuk2']."</option>";

		}
		
		return $div_option1;
	}
	
	function showTngKeluar($tglkeluar)
	{
	 	global $db;
	
        $sql_div = "select Distinct date_format( tgl_tidakaktif, '%m%Y' ) AS tgl_keluar2,
date_format( tgl_tidakaktif, '%m' ) AS bln,date_format( tgl_tidakaktif, '%Y' ) AS thn
from tab_employee where date_format( tgl_tidakaktif, '%m%Y' ) order by thn,bln ASC"; 
        //echo $sql_div;
        $result_sql_div = $db -> Execute($sql_div);

        while($rs_sql_div = $result_sql_div->FetchRow())
        {
			if($rs_sql_div['tgl_keluar2']==$tglkeluar)
				$selected = "selected";
			else
				$selected = "";


			$div_option2 .= "<option value='".$rs_sql_div['tgl_keluar2']."'
							$selected>".$rs_sql_div['tgl_keluar2']."</option>";

		}
		
		return $div_option2;
	}
	
	function showperiodeoptionpdf($periode)
	{
	 	global $db;
	
        $sql_div = "SELECT blntahun as id, blntahun as nama, substr(blntahun,1,2) as bln, substr(blntahun,3,4) as thn 
		            FROM tab_periode_locked order by thn, bln ASC"; 
        //echo $sql_div;
        $result_sql_div = $db -> Execute($sql_div);

        while($rs_sql_div = $result_sql_div->FetchRow())
        {
			if($rs_sql_div['id']==$periode)
				$selected = "selected";
			else
				$selected = "";


			$div_periode .= "<option value='".$rs_sql_div['id']."'
							$selected>".$rs_sql_div['nama']."</option>";

		}
		
		return $div_periode;
	}




}

?>
