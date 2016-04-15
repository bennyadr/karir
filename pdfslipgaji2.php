<?php
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
require('fpdf/fpdf.php');
require ("clsUser.php");
require_once "config.php";
	
class PDF extends FPDF
{
//Load data
	function LoadData($file)
	{
	//Read file lines
	$lines=file($file);
	$data=array();
	foreach($lines as $line)
		$data[]=explode(';',chop($line));
	return $data;
	}

        function Convkestr($nilai)
	{
		if ($nilai == 0)
			{return '-';}
		else
			{return $nilai;}
        }

	function getNmunit($idunit)
	{
	 	global $db;
	   	$sqlUser = "SELECT kode_kantor as id, nama_kantor as name FROM tab_kantor where kode_kantor='$idunit' order by nama_kantor";
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
				return $rowpos_list['name'];

			}
		}
		//return $pos_list_unit;
		
	}


function terbilang($bilangan) {
	
	$angka = array('0','0','0','0','0','0','0','0','0','0',
			'0','0','0','0','0','0');
	$kata = array('','satu','dua','tiga','empat','lima',
			'enam','tujuh','delapan','sembilan');
	$tingkat = array('','ribu','juta','milyar','triliun');
	
	$panjang_bilangan = strlen($bilangan);
	
	/* pengujian panjang bilangan */
	if ($panjang_bilangan > 15) {
	$kalimat = "Diluar Batas";
	return $kalimat;
	}
	
	/* mengambil angka-angka yang ada dalam bilangan,
	dimasukkan ke dalam array */
	for ($i = 1; $i <= $panjang_bilangan; $i++) {
	$angka[$i] = substr($bilangan,-($i),1);
	}
	
	$i = 1;
	$j = 0;
	$kalimat = "";
	
	
	/* mulai proses iterasi terhadap array angka */
	while ($i <= $panjang_bilangan) {
	
	$subkalimat = "";
	$kata1 = "";
	$kata2 = "";
	$kata3 = "";
	
	/* untuk ratusan */
	if ($angka[$i+2] != "0") {
	if ($angka[$i+2] == "1") {
		$kata1 = "seratus";
	} else {
		$kata1 = $kata[$angka[$i+2]] . " ratus";
	}
	}
	
	/* untuk puluhan atau belasan */
	if ($angka[$i+1] != "0") {
	if ($angka[$i+1] == "1") {
		if ($angka[$i] == "0") {
		$kata2 = "sepuluh";
		} elseif ($angka[$i] == "1") {
		$kata2 = "sebelas";
		} else {
		$kata2 = $kata[$angka[$i]] . " belas";
		}
	} else {
		$kata2 = $kata[$angka[$i+1]] . " puluh";
	}
	}
	
	/* untuk satuan */
	if ($angka[$i] != "0") {
	if ($angka[$i+1] != "1") {
		$kata3 = $kata[$angka[$i]];
	}
	}
	
	/* pengujian angka apakah tidak nol semua,
	lalu ditambahkan tingkat */
	if (($angka[$i] != "0") OR ($angka[$i+1] != "0") OR
		($angka[$i+2] != "0")) {
	$subkalimat = "$kata1 $kata2 $kata3 " . $tingkat[$j] . " ";
	}
	
	/* gabungkan variabe sub kalimat (untuk satu blok 3 angka)
	ke variabel kalimat */
	$kalimat = $subkalimat . $kalimat;
	$i = $i + 3;
	$j = $j + 1;
	
	}
	
	/* mengganti satu ribu jadi seribu jika diperlukan */
	if (($angka[5] == "0") AND ($angka[6] == "0")) {
	$kalimat = str_replace("satu ribu","seribu",$kalimat);
	}
	
	return trim($kalimat);
	
	}

//Colored table
function FancyTable($header,$data)
{
    global $db;
    //Colors, line width and bold font
    $this->SetFillColor(128,0,0);
    $this->SetTextColor(255);
    //$this->SetDrawColor(128,0,0);
    $this->SetLineWidth(.3);
    $this->SetFont('','B');

    //Header
    $w=array(7,15,30,30,25,25,20,20,20,20,20,20,20,20,20);
    for($i=0;$i<count($header);$i++)
	$this->Cell($w[$i],7,$header[$i],1,0,'C',true);
	$this->Ln();
        //$this->Cell($w[$i],7,$footer[$i],1,0,'C',true);
    	//$this->Ln();
    //Color and font restoration
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('');
    $idunit = $_REQUEST['idunit'];		
    $idjabatan = $_REQUEST['idjabatan'];		
   // $tgl1 = $_GET['tgl1'];
   // $tgl2 = $_GET['tgl2'];
	    $idperiode= $_GET['idprd'];
	    $thnbln = substr($idperiode,0,2) . substr($idperiode,3,4);
    //$sql     = "SELECT a.nik, a.nama, a.upah, b.nama_jabatan FROM `tab_employee` a inner join tab_jabatan b on a.id_jbt=b.id_jbt ";
	$sql     = "SELECT
	case when left(a.periode,2)='01' then concat('Januari ',right(a.periode,4))
	when left(a.periode,2)='02' then concat('Februari ',right(a.periode,4))
	when left(a.periode,2)='03' then concat('Maret ',right(a.periode,4))
	when left(a.periode,2)='04' then concat('April ',right(a.periode,4))
	when left(a.periode,2)='05' then concat('Mei ',right(a.periode,4))
	when left(a.periode,2)='06' then concat('Juni ',right(a.periode,4))
	when left(a.periode,2)='07' then concat('Juli ',right(a.periode,4))
	when left(a.periode,2)='08' then concat('Agustus ',right(a.periode,4))
	when left(a.periode,2)='09' then concat('September ',right(a.periode,4))
	when left(a.periode,2)='10' then concat('Oktober ',right(a.periode,4))
	when left(a.periode,2)='11' then concat('Nopember ',right(a.periode,4))
	when left(a.periode,2)='12' then concat('Desember ',right(a.periode,4)) end as periodenya,
	b.NIK, b.nama, a.*, c.nama_jabatan,divisi FROM vw_gajiok a
	left join tab_employee b on b.NIK=a.NIK
	left join tab_jabatan c on b.id_jbt=c.id_jbt
	left join tab_divisi d on b.id_divisi=d.id
	where a.periode='$thnbln' order by nama";
    $rs = $db->Execute($sql);
    $no = 1;
    if ($rs->RecordCount())
       {
	while ($rowuser_list = $rs->FetchRow())
	{
	$idpeg = $rowuser_list['NIK'];
		/*
		$ket1=($rowuser_list['ket_lain1']=='') ?'Lain 1' :$rowuser_list['ket_lain1'];
		$ket2=($rowuser_list['ket_lain2']=='') ?'Lain 2' :$rowuser_list['ket_lain2'];
		$ket3=($rowuser_list['ket_lain3']=='') ?'Lain 3' :$rowuser_list['ket_lain3'];
		$periodes = $rowuser_list['periode'];
		$id_peg = $rowuser_list['id_peg'];
		// Data Pendapatan
		$sql_pdt = "select * from dat_pendapatan where periode=$periodes and id_peg=$id_peg";
		$rs_pdt = $db->Execute($sql_pdt);
		$data_pdt = $rs_pdt->FetchRow();
		*/
		
		//$fill=false;
		$terbilang = $this -> terbilang($rowuser_list['thpok']);

		//if (($no % 2) == 0)
		//{
		//	$this->AddPage();
		//}
		//if ($no == 1)
		//{
		//	$this->AddPage();
		//}
		$this->AddPage('L');
		$this->Image('img/logo.png',105,12,30);
		$this->SetFont('Arial','B',11);
		$this->Cell(10,5,'SLIP UPAH',0,1,'L');
		$this->Cell(10,5,'PT Langit Infotama',0,1,'L');
		$this->Cell(15,5,'PERIODE : ',0,0,'L');
		//$this->Cell(20,5,':',0,'L');
		$this->Cell(45,5,$rowuser_list['periodenya'],0,1,'R');
		$this->Cell(130,0,'','T');
		$this->ln(1);
		$this->SetFont('Arial','',8);
		//$this->Cell(10,5,'',0,1);
		//$this->Cell(30,5,'Nomer',0,'L');
		//$this->Cell(10,5,':',0,'L');
		//$this->Cell(10,5,$no,0,1);
		$this->Cell(25,5,'NIK',0,'L');
		$this->Cell(4,5,':',0,'L');
		$this->Cell(10,5,$rowuser_list['NIK'],0,0);
		$this->Cell(30,5,'',0,0);
		$this->Cell(20,5,'Departemen',0,'L');
		$this->Cell(4,5,':',0,'L');
		$this->Cell(10,5,$rowuser_list['divisi'],0,1);
		$this->Cell(25,5,'Nama',0,'L');
		$this->Cell(4,5,':',0,'L');
		$this->Cell(10,5,$rowuser_list['nama'],0,0);
		$this->Cell(30,5,'',0,0);
		$this->Cell(20,5,'Lokasi',0,'L');
		$this->Cell(4,5,':',0,'L');
		$this->Cell(10,5,'Jakarta',0,'L',1);
		$this->ln();
		$this->Cell(25,5,'Jabatan',0,'L');
		$this->Cell(4,5,':',0,'L');
		$this->Cell(10,5,$rowuser_list['nama_jabatan'],0,0);
		$this->Cell(30,5,'',0,0);
		$this->Cell(20,5,'Jumlah Hadir',0,'L');
		$this->Cell(4,5,':',0,'L');
		$this->Cell(10,5,$rowuser_list['jhadir'],0,'L');
		//$this->Cell(30,5,'Unit Kerja',0,'L');
		//$this->Cell(5,5,'/',0,'C');
		$this->Cell(10,5,'',0,1);		
		$this->Cell(0,0,'','T');


		$this->ln();
		//$this->Cell(0,0,'',0,1);
		//$this->Line(50, 50, 100, 150);
		$this->setFont('Arial','B',8);
		$this->setFillColor(119,233,119);
		$this->Cell(70,5,'PENDAPATAN',1,0,'L',1);
		$this->setFillColor(233,119,119);
		$this->Cell(60,5,'POTONGAN',1,1,'L',1);
		$this->Line(10, 180, 10, 10); 
		$this->Line(140, 180, 140, 10); 
		$this->Line(80, 76, 80, 41);
		$this->Line(140, 10, 10, 10); 
		$this->Cell(0,0,'','T');
		$this->ln();
		$this->setFont('Arial','',8);
		$this->Cell(45,5,'Upah & Tunjangan Tetap',0,0,'L',0);
		$this->Cell(10,5,': Rp.',0,'L');
		$this->Cell(15,5,number_format($rowuser_list['gajiok'],0),0,0,'R');
		$this->Cell(1,5,'        ',0,'L');
		//$this->Cell(30,5,'PPH 21 *)',0,'L');
		//$this->Cell(10,5,': Rp.',0,'L');
		//$this->Cell(30,5,number_format($rowuser_list['pph21'],0),0,1,'R');
		
		$this->Cell(34,5,'BPJS NAKER (2%)',0,'L');
		$this->SetFont('Arial','',8);
		$this->Cell(10,5,': Rp.',0,'L');
		$this->Cell(15,5,number_format($rowuser_list['bpjs_naker'],0),0,1,'R');

		$this->Cell(45,5,'Tunjangan Hadir',0,'L');
		$this->Cell(10,5,': Rp.',0,'L');
		$this->Cell(15,5,number_format($rowuser_list['thadir'],0),0,0,'R');
		$this->Cell(1,5,'        ',0,'L');
		$this->SetFont('Arial','',8);
		$this->Cell(34,5,'BPJS SEHAT (0,5%)',0,'L');
		$this->SetFont('Arial','',8);
		$this->Cell(10,5,': Rp.',0,'L');
		$this->Cell(15,5,number_format($rowuser_list['bpjs_sehat'],0),0,1,'R');
		
		$this->SetFont('Arial','',8);
		$this->Cell(45,5,'Tunjangan Transport & Meal',0,'L');
		$this->Cell(10,5,': Rp.',0,'L');
		$this->Cell(15,5,number_format($rowuser_list['transport'],0),0,0,'R');
		$this->Cell(1,5,'        ',0,'L');
		$this->Cell(34,5,'Potongan Lain',0,'L');
		$this->Cell(10,5,': Rp.',0,'L');
		$this->Cell(15,5,number_format($rowuser_list['potlain'],0),0,1,'R');

		$this->SetFont('Arial','',8);
		$this->Cell(45,5,'Tunjangan Jabatan',0,'L');
		$this->Cell(10,5,': Rp.',0,'L');
		$this->Cell(15,5,number_format($rowuser_list['tjabatan'],0),0,0,'R');
		$this->Cell(1,5,'        ',0,'L');
		$this->Cell(34,5,'Pinjaman',0,'L');
		$this->Cell(10,5,': Rp.',0,'L');
		$this->Cell(15,5,number_format($rowuser_list['pinjaman'],0),0,1,'R');

		$this->Cell(45,5,'Tunjangan/Pendapatan Lain',0,'L');
		$this->Cell(10,5,': Rp.',0,'L');
		$this->Cell(15,5,number_format($rowuser_list['tlain'],0),0,0,'R');
		$this->Cell(15,5,'        ',0,'L');
		$this->Cell(34,5,'',0,'L');
		$this->Cell(10,5,'',0,'L');
		$this->Cell(15,5,'',0,1,'R');
			
		/*
		$this->Cell(30,5,'',0,'L');
		$this->Cell(10,5,'',0,'L');
		$this->Cell(30,5,'',0,'R');
		$this->Cell(30,5,'        ',0,'L');
		$this->Cell(30,5,'Total Deduction',0,'L');
		//$this->Cell(30,5,$ket2,0,'L');
		$this->Cell(10,5,': Rp.',0,'L');
		$this->Cell(30,5,number_format($rowuser_list['pot_bro'],0),0,1,'R');
*/

		$this->Cell(130,0,'','T');
		$this->ln();




/*
		$this->Cell(30,5,'Lain 3',0,'L');
		$this->Cell(10,5,': Rp.',0,'L');
		$this->Cell(30,5,number_format($rowuser_list['pot_lain3'],0),0,1,'R');
		$this->Cell(0,0,'','T');
		$this->ln();
*/ //$rowuser_list['thpok']
		//$this->Cell(0,0,'',0,1);
		//$this->Line(50, 50, 100, 150);
		$this->Cell(45,5,'Sub Total',0,'L');
		$this->Cell(10,5,': Rp.',0,'L');
		$this->Cell(15,5,number_format($rowuser_list['gajiok']+$rowuser_list['thadir']+$rowuser_list['transport']+$rowuser_list['tjabatan']+$rowuser_list['tlain'],0),0,0,'R');
		$this->Cell(1,5,'        ',0,'L');
		$this->Cell(34,5,'Sub Total',0,'L');
		$this->Cell(10,5,': Rp.',0,'L');
		$this->Cell(15,5,number_format($rowuser_list['pot_bro'],0),0,1,'R');
		$this->Cell(130,0,'','T');
		$this->ln();
		//$this->ln();
		//MELAKUKAN PENGECEKAN DATA POTONGAN
		$sql_softup="SELECT bbpjsnaker,bbpjssehat FROM dat_potongan where nik='$nik' and periode = '$thnbln'";
		$result_softup = $db -> Execute($sql_softup);
		$datapot = $result_softup->FetchRow();
		$this->setFont('Arial','B',8);
		//$this->Cell(3,5,'SUBSIDI PERUSAHAAN',0,'L');
		$this->setFillColor(240,174,47);
		$this->Cell(130,5,'SUBSIDI PERUSAHAAN',1,0,'L',1);
		$this->Cell(30,5,'',0,1,'L');
		$this->setFont('Arial','',8);
		$this->Cell(45,5,'PPH 21',0,'L');
		$this->Cell(10,5,': Rp.',0,'L');
		$this->Cell(15,5,number_format($rowuser_list['pph21'],0),0,1,'R');
		$this->Cell(45,5,'BPJS Ketenagakerjaan (4,24%)',0,'L');
		$this->Cell(10,5,': Rp.',0,'L');
		$this->Cell(15,5,number_format($datapot['bbpjsnaker'],0),0,1,'R');
		$this->Cell(45,5,'BPJS Kesehatan (4,5%)',0,'L');
		$this->Cell(10,5,': Rp.',0,'L');
		$this->Cell(15,5,number_format($datapot['bbpjssehat'],0),0,1,'R');
		$this->Cell(130,0,'','T');
		$this->ln();
		$this->Cell(45,5,'Sub Total',0,'L');
		$this->Cell(10,5,': Rp.',0,'L');
		$this->Cell(15,5,number_format($rowuser_list['pph21']+$datapot['bbpjsnaker']+$datapot['bbpjssehat'],0),0,1,'R');
		$this->Cell(130,0,'','T');
		$this->ln(1);
		$this->setFont('Arial','BI',8);
		$this->setFillColor(127,129,243);
		$this->Cell(45,5,'TOTAL TAKE HOME PAY',0,0,'L',1);
		$this->setFont('Arial','',8);
		$this->Cell(10,5,': Rp.',0,'L');
		$this->setFont('Arial','B',8);
		$this->Cell(15,5,number_format($rowuser_list['thpok'],0),0,0,'R');
		$this->ln(6);
		$this->Cell(130,0,'','T');
		$this->setFont('Arial','B',8);
		$this->ln();
		$this->Cell(30,5,'Terbilang',0,'C');
		$this->ln();
		$this->setFillColor(127,129,243);
		$this->setFont('Arial','',8);
		$this->Cell(130,10,'# ' . $terbilang . ' rupiah #',1,0,'C',1);
		$this->ln();
		$this->Cell(130,0,'','T');
		$this->ln(1);
		$this->Cell(30,5,'NOTE',0,'L');
		$this->ln(6);
		$this->Cell(130,0,'','T');
		$this->ln(2);
		$this->Cell(10,4,'1. Anda telah terdaftar sebagai peserta BPJS Ketenagakerjaan & BPJS Kesehatan',0,1,'L');
		$this->Cell(10,4,'2. Penggajian ini termasuk :',0,1,'L');
		$this->Cell(10,4,'    Other Income :',0,1,'L');
		$this->Cell(10,4,'    Ruimbesment :',0,1,'L');
		$this->Cell(10,4,'3. Kelebihan bayar :',0,1,'L');
		$this->ln(5);
		$this->Cell(130,0,'','T');
		$this->ln(3);
		$this->SetX(100);
		$this->Cell(15,3,'TTD',0,1,'C');
		$this->SetX(100);
		$this->Cell(15,3,'HR Supervisor',0,1,'C');
		$this->SetX(100);
		$this->Cell(15,5,'SUPPORT DIVISION,',0,1,'C');
		$this->ln(9);
		$this->Cell(130,0,'','T');
		
		//$this->MultiCell(125,5,$rowuser_list['ket_pend_lain2a']);
		//$this->ln();
		++$no;

		//if (($no % 2) != 0)
		//{
		//$this->Cell(200,0,'---------------------------------------------------------------------- potong disini -------------------------------------------------------------------------',0,0,'L');
		//$this->ln();
		//}
		//$this->Cell(100,5,' ',0,1,'L');
		//$this->Cell(100,5,'-',0,1,'L');
		//$this->ln();
/*
	        $this->Cell(10,10,$no,'LR',0,'R',$fill);
		$this->Cell(10,10,$rowuser_list['nik'],'LR',0,'L',$fill);
		$this->Cell(10,10,$rowuser_list['nama'],'LR',0,'L',$fill);
		$this->Cell(10,10,number_format($rowuser_list['upah'],0),'LR',0,'R',$fill);
		$this->Cell(10,10,$terbilang,'LR',0,'L',$fill);
		$this->Ln();
*/
		//$fill=!$fill;
	}
	}
    	//$this->Cell(array_sum($w),0,'','T');
	//$this->Ln();
	

	
}
}

$pdf=new PDF('P','mm','A4');
//Column titles
$header=array('No','NIK','Nama','Upah');
$footer=array('No','NIK','Nama','Upah');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(5,10,'SLIP GAJI KARYAWAN',0,1,'L');
//$pdf->Ln();
$pdf->Cell(5,10,"Periode : " . $tahun,0,0,'L');
//$pdf->Ln();
//$pdf->Ln();
$pdf->SetFont('Arial','',10);
//Data loading
//$data=$pdf->LoadData('countries.txt');
//$pdf->AddPage();
$pdf->FancyTable($header,"");
$pdf->Output();
/*
$pdf->line(50,100,100,100); // horizontal
$pdf->line(80,80,80,100); //vertikal
$pdf->rect(10,10,100,20,'D'); // persegi panjang
*/
?>
