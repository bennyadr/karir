<?php
/**
 * HTML2PDF Librairy - example
 *
 * HTML => PDF convertor
 * distributed under the LGPL License
 *
 * @author      Laurent MINGUET <webmaster@html2pdf.fr>
 *
 * isset($_GET['vuehtml']) is not mandatory
 * it allow to display the result in the HTML format
 */
    require_once('html2pdf.class.php');

    // get the HTML
    ob_start();
    //echo $id;exit;
    //session_start();
    //echo $id = $_SESSION['sessionnik'];exit;
        $id = $_POST['idpeg'];
    include "config.php";
    include('printcetakempid.php');
    $content = ob_get_clean();
    
    
    try
    {
        // init HTML2PDF
        $html2pdf = new HTML2PDF('P', 'A4', 'fr', true, 'UTF-8', array(0, 0, 0, 0));

        // display the full page
        $html2pdf->pdf->SetDisplayMode('fullpage');

        // convert
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));

        // add the automatic index
       // $html2pdf->createIndex('Sommaire', 30, 12, false, true, 2);

        // send the PDF
        $html2pdf->Output($id.'_profile_.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
