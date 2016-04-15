<?php /* Smarty version 3.1.27, created on 2016-03-29 14:35:51
         compiled from "C:\xampp\htdocs\karir\templates\kamus_edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3038756fa76a7046e40_30968544%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68d6f3bcc86111c885ac285af6408e7d2ff10569' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karir\\templates\\kamus_edit.tpl',
      1 => 1459254949,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3038756fa76a7046e40_30968544',
  'variables' => 
  array (
    'id' => 0,
    'kode' => 0,
    'kompetensi' => 0,
    'definisikompetensi' => 0,
    'question_ybs' => 0,
    'question_noybs' => 0,
    'question2_ybs' => 0,
    'question2_noybs' => 0,
    'question3_ybs' => 0,
    'question3_noybs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56fa76a71a0c57_67851319',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56fa76a71a0c57_67851319')) {
function content_56fa76a71a0c57_67851319 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3038756fa76a7046e40_30968544';
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
					<h3>Edit Kamus Kompetensi<small>Informasi Kamus Kompetensi</small></h3>
				</div>
			</div>	
			
				<!-- Simple registration form -->
			<form class="" action="?action=update" method="POST" ENCTYPE="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
			    <div class="panel panel-default">
	                <div class="panel-body">
	                	<div class="row">
	                		<div class="col-md-10">
	                			<div class="form-group">
									<label>Kode Kompetensi :</label>
                                    <input type="text" name="kode" placeholder="Kode Kompetensi" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['kode']->value;?>
" required>
	                			</div>
	                		</div>
							<div class="col-md-10">
	                			<div class="form-group">
									<label>Nama Kompetensi :</label>
                                    <input type="text" name="kompetensi" placeholder="Nama Kompetensi" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['kompetensi']->value;?>
" required>
	                			</div>
	                		</div>
	                		<div class="col-md-10">
	                			<div class="form-group">
									<label>Jenis Kompetensi :</label>
                                     <select name="jenis" class="form-control" >
                                                <option value="" selected="selected"> --Pilih-- </option>
                                                <option value="Dasar" > Dasar </option>
                                                <option value="Umum" > Umum </option>
                                                <option value="Spesifik" > Spesifik </option>
                                                </select>
	                			</div>
	                		</div>
	                		<div class="col-md-12">
	                			<div class="form-group">
									<label>Defenisi Kompetensi :</label>
                                    <input type="text" name="definisikompetensi" placeholder="Defenisi Kompetensi" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['definisikompetensi']->value;?>
" required>
	                			</div>
	                		</div>
	                		
	                		<div class="col-md-12">
	                			<div class="form-group">
									<label>Pertanyaan ybs :</label>
                                    <input type="text" name="question_ybs" placeholder="Pertanyaan Yang Bersangkutan" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['question_ybs']->value;?>
">
	                			</div>
	                		</div>
	                		<div class="col-md-12">
	                			<div class="form-group">
									<label>Pertanyaan noybs :</label>
                                    <input type="text" name="question_noybs" placeholder="Pertanyaan Yang Bersangkutan" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['question_noybs']->value;?>
">
	                			</div>
	                		</div>
	                		
	                			<div class="col-md-12">
	                			<div class="form-group">
									<label>Pertanyaan ke-2 ybs :</label>
                                    <input type="text" name="question2_ybs" placeholder="Pertanyaan Yang Bersangkutan" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['question2_ybs']->value;?>
">
	                			</div>
	                		</div>
	                		<div class="col-md-12">
	                			<div class="form-group">
									<label>Pertanyaan ke-2 noybs :</label>
                                    <input type="text" name="question2_noybs" placeholder="Pertanyaan Yang Bersangkutan" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['question2_noybs']->value;?>
">
	                			</div>
	                		</div>

	                		<div class="col-md-12">
	                			<div class="form-group">
									<label>Pertanyaan ke-3 ybs :</label>
                                    <input type="text" name="question3_ybs" placeholder="Pertanyaan Yang Bersangkutan" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['question3_ybs']->value;?>
" >
	                			</div>
	                		</div>
	                		<div class="col-md-12">
	                			<div class="form-group">
									<label>Pertanyaan ke-3 noybs :</label>
                                    <input type="text" name="question3_noybs" placeholder="Pertanyaan Yang Bersangkutan" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['question3_noybs']->value;?>
">
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