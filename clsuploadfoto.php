<?php
require ('libs/Smarty.class.php');
require ('config.php');
require ('clsUtil.php');
//require ('user_cek.php');
class uploadfoto
	{
function showUser()
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
		$smarty->assign("samping","21");
		$id= $_GET['idEmp'];
	        $smarty->assign("id", $id);
	        $smarty->display("upload_foto.tpl");
        }

        	function saveUser()
		{
           
			global $title,$db;
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);
			//$smarty->assign("username",$_SESSION['username']);
			
            $lokasi_file = $_FILES['smap']['tmp_name'];
			$nama_file   = $_FILES['smap']['name'];
			move_uploaded_file($lokasi_file,"gambar/$nama_file");
			$id=$_POST['id'];

			$file_path = "gambar/$nama_file";
			
		  	if (!empty($lokasi_file))
			{$sql = "UPDATE tab_employee set pathfoto='$file_path' where id='$id' ";}


	    //echo $sql;
	    //echo exit;
            //move_uploaded_file($smap, $file_path);
            $result = $db->Execute($sql);

            if($result) {
                $inserted = 1;
            } else {
                $inserted = 0;
            }
	    //$this-> saveVMS();

			if($inserted)
			{
				echo "<script language=javascript>
						alert('Terima Kasih, berhasil menyimpan data');
						window.location='employee.php';
					 </script>";
			}
			else
				echo "<script language=javascript>
						alert('Gagal menyimpan data');
						window.location='employee.php';
					 </script>";

        }


			function showEditUserForm()
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
		$smarty->assign("samping","21");

		$id=$_GET['idpeg'];
			$smarty->assign("id", $id);
			$sqlEmp = "SELECT pathfoto FROM tab_employee where id='$id'";
			//echo $sqlEmp;
			//echo exit;
		        $rse = $db->Execute($sqlEmp);

			if ($rse->RecordCount())
			{
				$rowEmp_list = $rse->FetchRow();
				$smarty->assign("smap","<img src='".$rowEmp_list['pathfoto']."' border=0");
				}
			$smarty->display("edit_foto.tpl");
        		}
}
?>