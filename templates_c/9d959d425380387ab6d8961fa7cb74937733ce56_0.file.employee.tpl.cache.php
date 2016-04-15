<?php /* Smarty version 3.1.27, created on 2016-03-17 05:09:49
         compiled from "C:\xampp\htdocs\sip\templates\employee.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2959756ea2e0d6dfdf9_73946943%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d959d425380387ab6d8961fa7cb74937733ce56' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\employee.tpl',
      1 => 1456293966,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2959756ea2e0d6dfdf9_73946943',
  'variables' => 
  array (
    'unite' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56ea2e0d7c6777_08996753',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ea2e0d7c6777_08996753')) {
function content_56ea2e0d7c6777_08996753 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2959756ea2e0d6dfdf9_73946943';
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
						<a href="?action=add" class="btn btn-success btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>
							<input class="btn btn-default" type=button value="Export to Excel " onClick="javascript:window.location='export.php'" class=Button1>
							<input class="btn btn-primary" type=button value="View Karyawan Tidak Aktif " onClick="javascript:window.location='employee.php?action=tidakaktif'" class=Button1>
				    </p>
				</div>
							<!-- Striped datatable inside panel -->
			    <div class="panel panel-success">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Pegawai</h6></div>
			                <table id="example" class="table table-striped table-bordered table-hover" style="width:100%; ">
              <thead>
              <tr>
	  			  <th style="width:1%;text-align:center;">No</th>
				  <th style="width:2%;text-align:center;">NIK</th>
				  <th style="width:3%;text-align:center;">Nama</th>
				  <th style="width:6%;text-align:center;">Jabatan</th>
				  <th style="width:3%;text-align:center;">Departemen</th>
				  <th style="width:3%;text-align:center;">File Upload</th>
				  <th style="width:4%;text-align:center;">Foto</th>
				  <th style="width:4%;text-align:center;">OPTION</th>
	 </tr>
              </thead>
              <tbody>
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
	   <tr>
    	<TD VALIGN=TOP align=center><?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['no'];?>
</TD>
    	<TD VALIGN=TOP><?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['nik'];?>
</TD>
    	<TD VALIGN=TOP><?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['name'];?>
</TD>
    	<TD VALIGN=TOP><?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['jabatan'];?>
</TD>
		<TD VALIGN=TOP><?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['dept'];?>
</TD>
		<TD VALIGN=TOP style="text-align:center;"><a class="btn btn-default" title='upload' href="uploaddokumen.php?action=list&id=<?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
">Lihat Upload</a></TD>

	<?php if ($_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['smap'] != "upload") {?>
	<TD style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['smap'];?>
</TD>
	<!--a title='upload foto' href=upload.php?action=<?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['datflp'];?>
&kodeEmp=<?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['no'];?>
><?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['datflp'];?>
</a-->
	<?php } else { ?>
		<TD style="text-align:center;">
		<a class="btn btn-default" title='upload foto' href="upload_foto.php?action=<?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['smap'];?>
&idEmp=<?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['smap'];?>
</a>
		</TD>
	<?php }?>
			
	<TD VALIGN=TOP style="text-align:center;">
		<a href="?action=edit&id=<?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
" class="btn btn-primary btn-icon btn-xs tip" title="" data-original-title="Edit"><i class="icon-pencil"></i></a>
		<a href="?action=del&id=<?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
" onclick="return confirm('Anda Yakin?');" class="btn btn-danger btn-icon btn-xs tip" title="" data-original-title="Delete"><i class="icon-remove2"></i></a>
		<a href="printemployee.php?id=<?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
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