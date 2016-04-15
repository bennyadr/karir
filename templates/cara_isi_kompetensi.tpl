{include file="header.tpl"}
	<!-- Page container -->
 	<div class="page-container">

		<!-- Sidebar -->
		<div class="sidebar">
			<div class="sidebar-content">

				{include file="pengelola.tpl"}

				{include file="mainnav.tpl"}
				
			</div>
		</div>
		<!-- /sidebar -->


		<!-- Page content -->
	 	<div class="page-content">


			<!-- Page header -->
			<div class="page-header">
				<div class="page-title">
					<h3>Pengukur Kompetensi<small>Informasi Pengukur Kompetensi</small></h3>
				</div>

				<div id="reportrange" class="range">
					<div class="visible-xs header-element-toggle">
						<a class="btn btn-primary btn-icon"><i class="icon-calendar"></i></a>
					</div>
					<!--<div class="date-range"></div>-->
					<!--<span class="label label-danger">9</span>-->
				</div>
			</div>
			<!-- /page header -->
			<!-- Breadcrumbs line -->
			{include file="breadcrumb.tpl"}
			<!-- /breadcrumbs line -->
			<!-- Table inside panel body -->

<h3 align=CENTER><font size=5>{$awal}</font> </h3>
<br />

          <h4 align=CENTER><strong>{$subtitle}</strong><h4 align=CENTER>
     <font size=2>
          Setelah ini Bapak/Ibu/Saudara akan dihadapkan pada beberapa pernyataan sebagai jawaban atas 18 pertanyaan. Bapak/Ibu/Saudara harus memilih satu jawaban yang paling sesuai dengan situasi dan kondisi Bapak/Ibu/Saudara yang sesungguhnya selama ini dengan cara klik jawaban yang paling sesuai.
Usahakan untuk menjawab semua pertanyaan karena halaman selanjutnya baru akan dapat terbuka setelah Bapak/Ibu/Saudara menjawab pertanyaan yang tampil.
Aplikasi ini tidak akan pernah selesai sebelum Bapak/Ibu/Saudara menjawab semua pertanyaan yang ada. Sebaliknya jika semua pertanyaan sudah dijawab maka aplikasi ini tidak akan dapat digunakan lagi.

Terima kasih, sukses selalu dan selamat bekerja.......
        </font>
   <br />
   <br />
   <br />

           <div style="float:center; "></div>

          <a href="ukur.php?action=idpenilaianhard" class="btn btn-primary"> Masuk Ke Pilihan Penilai</a>
 <br />
 <br />





	<script src="js/jquery.dataTables.js" type="text/javascript"></script>
	<script language="javascript" type="text/javascript">  
	$(document).ready(function() {
		$('#example').dataTable( {
			"pagingType": "full_numbers"
		} );
	} );
	</script>
			
	       {include file="footer.tpl"}