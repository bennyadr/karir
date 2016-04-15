<?php /* Smarty version 3.1.27, created on 2016-02-23 03:52:22
         compiled from "C:\xampp\htdocs\sip\templates\form_cuti.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:168056cbc966d2ecb7_38880931%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f66498a8a103acc3c46b49d6a303d0523e0a5a97' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\form_cuti.tpl',
      1 => 1455812884,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168056cbc966d2ecb7_38880931',
  'variables' => 
  array (
    'pos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56cbc96702d922_49859196',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56cbc96702d922_49859196')) {
function content_56cbc96702d922_49859196 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '168056cbc966d2ecb7_38880931';
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
					<h3>Daftar Cuti Pegawai<small>Informasi Cuti/Sakit/Izin/Dinas Pegawai</small></h3>
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
						<a href="?action=addPos" class="btn btn-success btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>
						</p>
				</div>
							<!-- Striped datatable inside panel -->
			    <div class="panel panel-success">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Cuti/Sakit/Izin/Dinas</h6></div>
			                <table id="example" class="table table-striped table-bordered table-hover" style="width:100%; ">
              <thead>
              <tr>
	  			  <th style="width:1%;text-align:center;">No</th>
				  <th style="width:2%;text-align:center;">NIK</th>
				  <th style="width:3%;text-align:center;">Nama</th>
				  <th style="width:4%;text-align:center;">Jabatan</th>
				  <th style="width:3%;text-align:center;">Jenis</th>
				  <th style="width:3%;text-align:center;">Jumlah Hari</th>
				  <th style="width:4%;text-align:center;">Tanggal Mulai</th>
				  <th style="width:4%;text-align:center;">Alasan</th>
				  <th style="width:4%;text-align:center;">No. Telp</th>
				  <th style="width:3%;text-align:center;">Approve Atasan</th>
				  <th style="width:5%;text-align:center;">OPTION</th>
	 </tr>
              </thead>
              <tbody>
              <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['name'] = 'detail';
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pos']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
    <TR align="center">
        <TD VALIGN=TOP align=center><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['no'];?>
</TD>
        <TD VALIGN=TOP align=LEFT><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['NIK'];?>
</TD>
		<TD VALIGN=TOP align=LEFT><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['nama'];?>
</TD>
		<TD VALIGN=TOP align=LEFT><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['nama_jabatan'];?>
</TD>
		<!--<TD VALIGN=TOP width=10% align=LEFT><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['divisi'];?>
</TD>-->
		<TD VALIGN=TOP><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['nama_jeniscuti'];?>
</TD>
		<TD VALIGN=TOP><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['jmlhari'];?>
</TD>
		<TD VALIGN=TOP align=CENTER><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['tgl_mulai'];?>
</TD>
		<TD align=center><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['alasan'];?>
</TD>
		<TD align=center><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['notelp'];?>
</TD>
		<?php if ($_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['status'] == 1) {?>
		<TD style="text-align:center;" width=15<?php echo '/*%%SmartyNocache:168056cbc966d2ecb7_38880931%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:168056cbc966d2ecb7_38880931%%*/';
echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['namaats'];?>
 - <!--<a href="form_cuti.php?mod=proses&id=<?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
&status=0">--><i class="icon-checkmark-circle2"></i></a></TD>
		<?php } elseif ($_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['status'] == 0) {?>
		<TD style="text-align:center;" width=15<?php echo '/*%%SmartyNocache:168056cbc966d2ecb7_38880931%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:168056cbc966d2ecb7_38880931%%*/';
echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['namaats'];?>
 - <!--<a href="form_cuti.php?mod=proses&id=<?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
&status=1">--><i class="icon-cancel"></a></TD>
		<?php }?>
		<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=<?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
" class="btn btn-primary btn-icon btn-xs tip" title="Edit" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=<?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="Delete" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printcuti.php?id=<?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>
		</TD>
    <?php endfor; endif; ?>
	</tbody></table>
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