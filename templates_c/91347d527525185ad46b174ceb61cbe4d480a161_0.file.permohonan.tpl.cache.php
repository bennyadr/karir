<?php /* Smarty version 3.1.27, created on 2016-03-04 05:18:24
         compiled from "C:\xampp\htdocs\sip\templates\permohonan.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2285056d90c90003ae2_87539492%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91347d527525185ad46b174ceb61cbe4d480a161' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\permohonan.tpl',
      1 => 1456806016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2285056d90c90003ae2_87539492',
  'variables' => 
  array (
    'nik' => 0,
    'nama' => 0,
    'jabatan' => 0,
    'divisi' => 0,
    'cuti' => 0,
    'sisacuti' => 0,
    'izin' => 0,
    'sisaizin' => 0,
    'sakit' => 0,
    'dinas' => 0,
    'pos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56d90c901f6855_70151576',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56d90c901f6855_70151576')) {
function content_56d90c901f6855_70151576 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2285056d90c90003ae2_87539492';
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
					<h3>Data Cuti Pegawai<small>Informasi Permohonan Cuti/Sakit/Izin/Dinas Pegawai</small></h3>
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
			<h3>Form Permohonan Cuti/Izin/Sakit/Dinas</h3>

							<!-- Striped datatable inside panel -->
 <div class="container">
          

          <form class="form-horizontal" action="#" role="form">
				<div class="row">
					<div class="col-md-5">
		            	<div class="panel panel-default">
		                    <div class="panel-heading"><h6 class="panel-title"><i class="icon-user"></i> Identitas Karyawan</h6></div>
		                	<div class="panel-body">
									<br>
							        <p>NIK : <b><?php echo $_smarty_tpl->tpl_vars['nik']->value;?>
</b></p>
									<p>Nama : <b><?php echo $_smarty_tpl->tpl_vars['nama']->value;?>
</b></p>
									<p>Jabatan : <b><?php echo $_smarty_tpl->tpl_vars['jabatan']->value;?>
</b></p>
									<p>Departemen : <b><?php echo $_smarty_tpl->tpl_vars['divisi']->value;?>
</b></p>								
							</div>
						</div>
					</div>

					<div class="col-md-5">
						<div class="panel panel-default">
		                    <div class="panel-heading"><h6 class="panel-title"><i class="icon-menu5"></i> Selects</h6></div>
							<div class="panel-body">
							 <p>Cuti ( Terpakai : <b><?php echo $_smarty_tpl->tpl_vars['cuti']->value;?>
</b> Sisa : <b><?php echo $_smarty_tpl->tpl_vars['sisacuti']->value;?>
</b>)</p>
		<p>Izin ( Terpakai : <b><?php echo $_smarty_tpl->tpl_vars['izin']->value;?>
</b> Sisa : <b><?php echo $_smarty_tpl->tpl_vars['sisaizin']->value;?>
</b>)</p>
		<p>Sakit ( Terpakai : <b><?php echo $_smarty_tpl->tpl_vars['sakit']->value;?>
</b> )</p>
		<p>Dinas ( Terpakai : <b><?php echo $_smarty_tpl->tpl_vars['dinas']->value;?>
</b> )</p>
		</div>
    </div>
	</div>
	</div>
	</form>
</div>
		<div class="table-controls">
					<p style="text-align:left;">
						<a href="?action=add" class="btn btn-success btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>
						</p>
				</div>
	 <div class="panel panel-success">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Cuti/Sakit/Izin/Dinas</h6></div>
			                <table id="example" class="table table-striped table-bordered table-hover" style="width:100%; ">
              <thead>
              <tr>
              <th style="width:1%;text-align:center;">No</th>
				  <th style="width:1%;text-align:center;">No Dokumen</th>
				  <th style="width:3%;text-align:center;">Tanggal Pengajuan</th>
				  <th style="width:2%;text-align:center;">Jenis</th>
				  <th style="width:3%;text-align:center;">Jumlah Hari</th>
				  <th style="width:3%;text-align:center;">Alasan</th>
				  <th style="width:3%;text-align:center;">No Telp/HP</th>
				  <th style="width:3%;text-align:center;">OPTION</th>
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
	<tr>
	    <TD VALIGN=TOP ><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['no'];?>
</a></TD>
		<TD VALIGN=TOP style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['nodu'];?>
</a></TD>
		<TD VALIGN=TOP style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['tanggal'];?>
</a></TD>
		<TD VALIGN=TOP style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['jenis'];?>
</a></TD>
		<TD VALIGN=TOP style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['jmlhari'];?>
</a></TD>
		<TD VALIGN=TOP style="text-align:left;"><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['alasan'];?>
</a></TD>
		<TD VALIGN=TOP style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['notelp'];?>
</a></TD>
<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=<?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=<?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printformpermohonan.php?action=cetak&nodu=<?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['nodu'];?>
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