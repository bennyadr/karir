<?php
//   $db = new mysqli('localhost', 'root' ,'gadis71', 'hardisc_trimitra8');
	include "config.php";
	if(!$link) {
		echo 'Could not connect to the database.';
	} else {
	
		if(isset($_POST['queryString'])) {
			$queryString = $link->real_escape_string($_POST['queryString']);
			
			if(strlen($queryString) >0) {

				$query = $link->query("SELECT id,nama FROM tab_employee WHERE nama LIKE '%$queryString%'");
				$hasil = $query->fetch_object();
				$query1 = $link->query("SELECT id,nama FROM tab_employee WHERE nama LIKE '%$queryString%'");				
				
				if($query) {
				echo '<ul>';
					if ($hasil) {
					while ($result = $query1->fetch_object()) {
	         			echo '<li onClick="fill(\''.addslashes($result->nama).'\'); fill2(\''.addslashes($result->id).'\');">'.$result->id.'&nbsp;&nbsp;'.$result->nama.'</li>';			
					} 
					}else {
					 echo '&nbsp;&nbsp;&nbsp;&nbsp;"Maaf, Data Yang di Cari Tidak Ada"';
					}					
				echo '</ul>';
					
				} else{
					echo 'OOPS we had a problem :(';
				}
			} else {
				// do nothing
			}
		} else {
			echo 'There should be no direct access to this script!';
		}
	}
?>