<?php
require ('libs/Smarty.class.php');
require ('config.php');
require ('clsUtil.php');
//require ('user_cek.php');
class MAIN {
	
	    function ShowLogin() {
		//require ('user_cek.php');
  	    global $title,$db;
		$smarty = new Smarty;
 		//$smarty->force_compile = true;
		//$smarty->debugging = true;
		$smarty->caching = true;
		$smarty->cache_lifetime = 120;
		$smarty->assign("title",$title);
 
		$smarty->display('signin.tpl');
		}
		
		function ShowMenu() {
	    require ('user_cek.php');
  	    global $title,$db;
		$smarty = new Smarty;
 		//$smarty->force_compile = true;
		//$smarty->debugging = true;
		$smarty->caching = true;
		$smarty->cache_lifetime = 120;
		$smarty->assign("title",$title);
		$smarty->assign("username",$_SESSION['username']);
		$smarty->assign("statuslogin",$_SESSION['statuslogin']);
		$smarty->assign("samping","1");
		$smarty->display('home.tpl');
		}

		

		function DoLogin() {
	    	    global $title,$db;
		session_start();

		$tmk_id = session_id();
		$smarty = new Smarty;
 		$smarty->force_compile = true;
		//$smarty->debugging = true;
		$smarty->caching = true;
		$smarty->cache_lifetime = 0;
		$smarty->assign("title",$title);
		
		$replaced = array("&", "\"", "\'");
	    $replacer = array("dan", " ", " ");
	    $username = str_replace($replaced, $replacer, $_POST['username']);
		$password = md5(mysql_real_escape_string($_POST['password']));
		
		$waktusession    = date("U", strtotime(date("Y-m-d H:i:s")));
	    //$_SESSION["username"] = $username;
	    $_SESSION["passwordsession"] = $password;
	    $_SESSION["waktusession"] = $waktusession;
		$_SESSION["tmk_id"] = $tmk_id;
		$_SESSION["namasrvapl"] = $_SERVER['SERVER_NAME'];
			
	    $sql = "SELECT isadmin, username, noreg as kode_kantor, id_emp, NIK, password FROM tab_user a
			left join tab_employee b on a.id_emp = b.id
			WHERE username='$username'";
		//echo $sql; exit;
	 
		$execute = $db->Execute($sql);
		$data = $execute->FetchRow();
		$avail = $execute->RecordCount();
		
		if($avail > 0){
			$_SESSION['username'] = $data['username'];
			$_SESSION['statuslogin'] = $data['isadmin'];
			$_SESSION['sessionnik'] = $data['id_emp'];
			//header('location:index.php?action=showmenu');
			if($data['isadmin'] == '1'){
			header("location:index.php?action=showmenu&tmk_id=$tmk_id");
			}elseif($data['isadmin'] == '0'){
			header("location:index.php?action=home&tmk_id=$tmk_id");	
			}
			}else{
			echo "<script language=javascript>
	                    alert('Login Gagal! Periksa Kembali Akun Anda!');
	                    window.location='?';
	                 </script>";
			}
			 
		}

	    		function ShowHome() {
		//session_start();
		error_reporting(0);
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
		$smarty->assign("samping","1");
		$smarty->display('home.tpl');
		
		}


		
		
		function DoLogout() {
  	    global $title,$db;
		require ('user_cek.php');
		$smarty = new Smarty;
 		//$smarty->force_compile = true;
		$smarty->debugging = true;
		$smarty->caching = true;
		$smarty->cache_lifetime = 0;
		$smarty->assign("title",$title);
		
		session_destroy();
		session_unset();
		
	    echo "<script language=javascript>
	                    alert('Anda Telah Keluar!');
	                    window.location='?';
	                 </script>";
		
		}
		

		function Keluar() {
  	    global $title,$db;
		require ('user_cek.php');
		$smarty = new Smarty;
 		//$smarty->force_compile = true;
		//$smarty->debugging = true;
		$smarty->caching = true;
		$smarty->cache_lifetime = 0;
		$smarty->assign("title",$title);
		
		session_destroy();
		session_unset();
		
	    echo "<script language=javascript>
	                    window.location='index.php?action=showlogin';
	                 </script>";
		
		}
		
		
	
	}
?>
 