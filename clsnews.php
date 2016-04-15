<?php
require ('libs/Smarty.class.php');
require ('config.php');
//require ('user_cek.php');
class news {
	
	    function showAddjabatan() {
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
		$smarty->assign("samping","23");
				$smarty->display("news_add.tpl");
        }
	

		function showjabatanSave()
		{
        global $title,$db;
			require ('user_cek.php');
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);

			$posName = $_POST['posName'];
			$berita = $_POST['berita'];
			
		$sql = "INSERT INTO tab_news
			(
				id,
				judul,
				isi_berita,
				publish
			)
			VALUES
			(
				0,
				'$posName',
				'$berita',
				'0'
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
	                    window.location='news.php';
	                 </script>";
	        }
	        else{
	            echo "<script language=javascript>
	                    alert('Gagal menyimpan data');
	                    window.location='news.php';
	                 </script>";
			}
          //  $this->assign("authenticated",$this->$auth_mode);
        }

        function showEditjbtForm()
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
		$smarty->assign("samping","23");
			$id = $_GET['id'];


			
	        $sql     = "SELECT * FROM tab_news WHERE id = '$id'";
		    $rs = $db->Execute($sql);

		
	        if ($rs->RecordCount())
	        {
                $pos_list = $rs->FetchRow();
		
		$smarty->assign("id", $id);
		$smarty->assign("posName", $pos_list['judul']);
		$smarty->assign("berita", $pos_list['isi_berita']);
		    }

		$smarty->display("news_edit.tpl");
        }


        function showjbtSaveEdit()
		{
 		require ('user_cek.php');
			global $title,$db;
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);

		$id = $_POST['id'];
		$posName = $_POST['posName'];
		$berita = $_POST['berita'];
		
		//$usernamex = $_SESSION['usernamesession'];
		$sql = "UPDATE tab_news
				set judul='$posName',
				isi_berita='$berita'
				where id='$id'";

		//echo $sql;echo exit;

                $result = $db->Execute($sql);

                if($result)
                	$inserted = 1;
                else
                	$inserted = 0;


	        if($inserted)
	        {
	            echo "<script language=javascript>
	                    alert('Terima Kasih, berhasil memperbaiki data');
	                    window.location='news.php';
	                 </script>";
	        }
	        else{
	            echo "<script language=javascript>
	                    alert('Gagal memperbaiki data');
	                    window.location='news.php';
	                 </script>";
			}
            //$this->assign("authenticated",$this->$auth_mode);
        }

	

	function deljabatan()
        {
        	global $title,$db;
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);
        	$id = $_GET['id'];

	    $sql = "delete from tab_news where id = $id";
            $del_result = $db->Execute($sql);
            //echo $sql;
	        if($del_result)
	        {
	            echo "<script language=javascript>
	                    alert('Terima Kasih, berhasil menghapus data');
	                    window.location='news.php';
	                 </script>";
	        }
	        else
	            echo "<script language=javascript>
	                    alert('Gagal menghapus data');
	                    window.location='news.php';
	                 </script>";
        }
		
		function ProsesStatus()
        {
        	require ('user_cek.php');
			global $title,$db;
			$smarty = new Smarty;
	 		$smarty->force_compile = true;
			//$smarty->debugging = true;
			$smarty->caching = true;
			$smarty->cache_lifetime = 0;
			$smarty->assign("title",$title);

			$id = $_GET['id'];
		$status = $_GET['publish'];

	    $sql = "UPDATE tab_news set publish='$status' where id='$id'";
            $del_result = $db->Execute($sql);
            //echo $sql;exit;
	        if($del_result)
	        {
	         
			 echo "<script language=javascript>
	                    window.location='?';
	                 </script>";
	        }
	        else
	            echo "<script language=javascript>
	                    window.location='?';
	                 </script>";
        }
		


        function shownews()
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
		$smarty->assign("samping","23");
		$sqlUser	= "select * from tab_news order by judul";

		$rs = $db->Execute($sqlUser);
			
	        if (!$rs->RecordCount())
			{

	             $kosong = 'n/a';
	             $ulist[] = array(
	                                'no'=>$kosong,
	                                'id'=>$kosong,
	                                'judul'=>$kosong,
									'berita'=>$kosong,
									'publish'=>$kosong
	                                );
	        }
	        else
	        { 
				//$rs=mysql_query($sql);
	            $no = 0; 
				while ($ru_list = $rs->FetchRow()){
				      ++$no;

	                  $ulist[] = array(
	                                    'no'=>$no,
	                                    'id'=>$ru_list['id'],
										'judul'=>$ru_list['judul'],
										'berita'=>$ru_list['isi_berita'],
										'publish'=>$ru_list['publish']
	                                    );
	            }
	        }

	        $smarty->assign("pos", $ulist);
			$smarty->display("news.tpl");
        }

	
    }


?>