<?php /* Smarty version 3.1.27, created on 2016-04-15 19:40:05
         compiled from "C:\xampp\htdocs\karir\templates\cara_isi_kompetensi.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:152415711277529a2b6_19903323%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae59b9bf5659b9a4a55fd76e70ae2506c8bc5040' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karir\\templates\\cara_isi_kompetensi.tpl',
      1 => 1459925277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152415711277529a2b6_19903323',
  'variables' => 
  array (
    'awal' => 0,
    'subtitle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_571127753d65e0_33479398',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571127753d65e0_33479398')) {
function content_571127753d65e0_33479398 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '152415711277529a2b6_19903323';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<!-- Page container -->
 	<div class="page-container">

		<!-- Sidebar -->
		<div class="sidebar">
			<div class="sidebar-content">

				<?php echo $_smarty_tpl->getSubTemplate ("pengelola.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>


				<?php echo $_smarty_tpl->getSubTemplate ("mainnav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>

				
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
			<?php echo $_smarty_tpl->getSubTemplate ("breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>

			<!-- /breadcrumbs line -->
			<!-- Table inside panel body -->

<h3 align=CENTER><font size=5><?php echo $_smarty_tpl->tpl_vars['awal']->value;?>
</font> </h3>
<br />

          <h4 align=CENTER><strong><?php echo $_smarty_tpl->tpl_vars['subtitle']->value;?>
</strong><h4 align=CENTER>
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





	<?php echo '<script'; ?>
 src="js/jquery.dataTables.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 language="javascript" type="text/javascript">  
	$(document).ready(function() {
		$('#example').dataTable( {
			"pagingType": "full_numbers"
		} );
	} );
	<?php echo '</script'; ?>
>
			
	       <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>