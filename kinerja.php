<?php
	require_once "clsHasilKinerja.php";
	
	$hasil = new Hasil();
	$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

    switch ($action) {
	   default :
           $hasil -> showHasilKinerja();
           break;
     }
	
?>