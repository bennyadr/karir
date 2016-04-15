<?php /* Smarty version 3.1.27, created on 2016-02-18 04:59:49
         compiled from "C:\xampp\htdocs\sip\templates\list_upload.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1118856c541b52ac9d6_10786076%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2b2681f33a05f2ef8de9ea9e9504e7ea5d0294e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\list_upload.tpl',
      1 => 1455762851,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1118856c541b52ac9d6_10786076',
  'variables' => 
  array (
    'unite' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56c541b54a32a4_05708395',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56c541b54a32a4_05708395')) {
function content_56c541b54a32a4_05708395 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1118856c541b52ac9d6_10786076';
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
					<h3>Database Pegawai<small>Informasi Data Pegawai</small></h3>
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

			               
							<div class="table-controls">
							<p style="text-align:left;">
							<div class="form-actions text-left">
              				<INPUT TYPE="BUTTON" VALUE="Back" ONCLICK="history.go(-1)" class="btn btn-primary">
          </div>
					</TD>
    </TR>
</TABLE>

				            </p>
							</div>
							<!-- Striped datatable inside panel -->
			            <div class="panel panel-success">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Pegawai</h6></div>
			                <table id="example" class="table table-striped table-bordered table-hover" style="width:100%; ">
			                <input type="hidden" name="id" value="$id">
              <thead>
              <TR>
              	  <th style="width:1%;text-align:center;">No</th>
				  <th style="width:2%;text-align:center;">NIK</th>
				  <th style="width:3%;text-align:center;">Nama</th>
				  <th style="width:2%;text-align:center;">KTP</th>
				  <th style="width:2%;text-align:center;">NPWP</th>
				  <th style="width:2%;text-align:center;">BPJS Naker</th>
				  <th style="width:2%;text-align:center;">BPJS Sehat</th>
				  <th style="width:2%;text-align:center;">Buku Nikah</th>
				  <th style="width:2%;text-align:center;">KK</th>
				  <th style="width:2%;text-align:center;">Buku Rekening</th>

	    
    </TR>
             </thead>
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['name'] = 'detail';
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['unite']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total']);
?>
   

    <TR>
    <TD VALIGN=TOP align=center><?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['no'];?>
</TD>
    	<TD VALIGN=TOP><?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['nik'];?>
</TD>
    	<TD VALIGN=TOP><?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['name'];?>
</TD>
<?php if ($_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['ktp'] != '' || $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['ktp'] != NULL) {?>
	<TD style="text-align:center;"><a class="icon-file-pdf" title='upload' href="<?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['ktp'];?>
"></a> | <a class="icon-file7" title='Ganti File Upload' href="uploaddokumen.php?action=ktp&idEmp=<?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
&kode=<?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['nik'];?>
"></a></TD>
	<?php } else { ?>
	<TD style="text-align:center;">
		<a class="btn btn-default" title='upload' href="uploaddokumen.php?action=ktp&idEmp=<?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
&kode=<?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['nik'];?>
">upload</a>
		</TD>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['npwp'] != '' || $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['npwp'] != NULL) {?>
	<TD style="text-align:center;"><a class="icon-file-pdf" title='upload' href="<?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['npwp'];?>
"></a> | <a class="icon-file7" title='Ganti File Upload' href="uploaddokumen.php?action=npwp&idEmp=<?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
&kode=<?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['nik'];?>
"></a></TD>
	<?php } else { ?>
	<TD style="text-align:center;">
		<a class="btn btn-default" title='upload' href="uploaddokumen.php?action=npwp&idEmp=<?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
&kode=<?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['nik'];?>
">upload</a>
		</TD>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['bpjs'] != '' || $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['bpjs'] != NULL) {?>
	<TD style="text-align:center;"><a class="icon-file-pdf" title='upload' href="<?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['bpjs'];?>
"></a> | <a class="icon-file7" title='Ganti File Upload' href="uploaddokumen.php?action=bpjs&idEmp=<?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
&kode=<?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['nik'];?>
"></a></TD>
	<?php } else { ?>
	<TD style="text-align:center;">
		<a class="btn btn-default" title='upload' href="uploaddokumen.php?action=bpjs&idEmp=<?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
&kode=<?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['nik'];?>
">upload</a>
		</TD>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['bpjssehat'] != '' || $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['bpjssehat'] != NULL) {?>
	<TD style="text-align:center;"><a class="icon-file-pdf" title='upload' href="<?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['bpjssehat'];?>
"></a> | <a class="icon-file7" title='Ganti File Upload' href="uploaddokumen.php?action=bpjssehat&idEmp=<?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
&kode=<?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['nik'];?>
"></a></TD>
	<?php } else { ?>
	<TD style="text-align:center;">
		<a class="btn btn-default" title='upload' href="uploaddokumen.php?action=bpjssehat&idEmp=<?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
&kode=<?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['nik'];?>
">upload</a>
		</TD>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['nikah'] != '' || $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['nikah'] != NULL) {?>
	<TD style="text-align:center;"><a class="icon-file-pdf" title='upload' href="<?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['nikah'];?>
"></a> | <a class="icon-file7" title='Ganti File Upload' href="uploaddokumen.php?action=nikah&idEmp=<?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
&kode=<?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['nik'];?>
"></a></TD>
	<?php } else { ?>
	<TD style="text-align:center;">
		<a class="btn btn-default" title='upload' href="uploaddokumen.php?action=nikah&idEmp=<?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
&kode=<?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['nik'];?>
">upload</a>
		</TD>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['kk'] != '' || $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['kk'] != NULL) {?>
	<TD VALIGN=CENTER ALIGN=CENTER><a class="icon-file-pdf" title='upload' href="<?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['kk'];?>
"></a> | <a class="icon-file7" title='Ganti File Upload' href="uploaddokumen.php?action=kk&idEmp=<?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
&kode=<?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['nik'];?>
"></a></TD>
	<?php } else { ?>
	<TD style="text-align:center;">
		<a class="btn btn-default" title='upload' href="uploaddokumen.php?action=kk&idEmp=<?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
&kode=<?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['nik'];?>
">upload</a>
		</TD>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['reke'] != '' || $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['reke'] != NULL) {?>
	<TD style="text-align:center;"><a class="icon-file-pdf" title='upload' href="<?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['reke'];?>
"></a> | <a class="icon-file7" title='Ganti File Upload' href="uploaddokumen.php?action=reke&idEmp=<?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
&kode=<?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['nik'];?>
"></a></TD>
	<?php } else { ?>
	<TD style="text-align:center;">
		<a class="btn btn-default" title='upload' href="uploaddokumen.php?action=reke&idEmp=<?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
&kode=<?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['nik'];?>
">upload</a>
		</TD>
		<?php }?>

		
    </TR>
    <?php endfor; endif; ?>
</TABLE>
				        </div>
						


				        <!-- /striped datatable inside panel -->
	
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