<?php /* Smarty version 3.1.27, created on 2016-03-29 14:33:43
         compiled from "C:\xampp\htdocs\karir\templates\kamus_add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3014256fa76278bca26_88318032%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36b636fbceced777bee08b5ebfdcd01d499944d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karir\\templates\\kamus_add.tpl',
      1 => 1459254760,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3014256fa76278bca26_88318032',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56fa7627a046e6_70949680',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56fa7627a046e6_70949680')) {
function content_56fa7627a046e6_70949680 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3014256fa76278bca26_88318032';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-1.8.0.min.js"><?php echo '</script'; ?>
>
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
					<h3>Add Kamus Kompetensi<small>Informasi Kamus Kompetensi</small></h3>
				</div>
			</div>	
			
				<!-- Simple registration form -->
			<form class="" action="?action=save" method="POST" ENCTYPE="multipart/form-data">
			    <div class="panel panel-default">
	                <div class="panel-body">
	                	<div class="row">
	                		<div class="col-md-10">
	                			<div class="form-group">
									<label>Kode Kompetensi :</label>
                                    <input type="text" name="kode" placeholder="Kode Kompetensi" class="form-control" required>
	                			</div>
	                		</div>
							<div class="col-md-10">
	                			<div class="form-group">
									<label>Nama Kompetensi :</label>
                                    <input type="text" name="kompetensi" placeholder="Nama Kompetensi" class="form-control" required>
	                			</div>
	                		</div>
	                		<div class="col-md-10">
	                			<div class="form-group">
									<label>Jenis Kompetensi :</label>
                                     <select name="jenis" class="form-control">
                                                <option value="" selected="selected"> --Pilih-- </option>
                                                <option value="Dasar" > Dasar </option>
                                                <option value="Umum" > Umum </option>
                                                <option value="Spesifik" > Spesifik </option>
                                                </select>
	                			</div>
	                		</div>
	                		<div class="col-md-10">
	                			<div class="form-group">
									<label>Defenisi Kompetensi :</label>
                                    <input type="text" name="definisikompetensi" placeholder="Defenisi Kompetensi" class="form-control" required>
	                			</div>
	                		</div>
	                		
	                		<div class="col-md-10">
	                			<div class="form-group">
									<label>Pertanyaan ybs :</label>
                                    <textarea name="question_ybs" placeholder="Pertanyaan Yang Bersangkutan" class="form-control" ></textarea>
	                			</div>
	                		</div>
	                		<div class="col-md-10">
	                			<div class="form-group">
									<label>Pertanyaan noybs :</label>
                                    <textarea name="question_noybs" placeholder="Pertanyaan Yang Bersangkutan" class="form-control" ></textarea>
	                			</div>
	                		</div>
	                		
	                			<div class="col-md-10">
	                			<div class="form-group">
									<label>Pertanyaan ke-2 ybs :</label>
                                    <textarea name="question2_ybs" placeholder="Pertanyaan Yang Bersangkutan" class="form-control" ></textarea>
	                			</div>
	                		</div>
	                		<div class="col-md-10">
	                			<div class="form-group">
									<label>Pertanyaan ke-2 noybs :</label>
                                    <textarea name="question2_noybs" placeholder="Pertanyaan Yang Bersangkutan" class="form-control" ></textarea>
	                			</div>
	                		</div>

	                		<div class="col-md-10">
	                			<div class="form-group">
									<label>Pertanyaan ke-3 ybs :</label>
                                    <textarea name="question3_ybs" placeholder="Pertanyaan Yang Bersangkutan" class="form-control" ></textarea>
	                			</div>
	                		</div>
	                		<div class="col-md-10">
	                			<div class="form-group">
									<label>Pertanyaan ke-3 noybs :</label>
                                    <textarea name="question3_noybs" placeholder="Pertanyaan Yang Bersangkutan" class="form-control" ></textarea>
	                			</div>
	                		</div>

	                	</div>
                        <div class="form-actions text-left">
                        	<input type="submit" data-toggle="modal" role="button"  value="Simpan" class="btn btn-primary">
                        </div>
				    </div>
				</div>
			</form>
			<!-- /simple registration form -->
			
	       <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>