<?php /* Smarty version 3.1.27, created on 2016-03-07 04:39:02
         compiled from "C:\xampp\htdocs\sip\templates\uploaddata.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1010656dcf7d64a4dd0_50742066%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02e147aa7bf7491c083f3cab811d009dba0485a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\uploaddata.tpl',
      1 => 1455867634,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1010656dcf7d64a4dd0_50742066',
  'variables' => 
  array (
    'pos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56dcf7d66a42f7_31475587',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56dcf7d66a42f7_31475587')) {
function content_56dcf7d66a42f7_31475587 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1010656dcf7d64a4dd0_50742066';
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
					<h3>Upload Data Pendukung<small>Upload Data Pendukung</small></h3>
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
						    <div class="panel panel-default">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-upload2"></i>Upload Data</h6></div>
			                <form method=post name="Form" action=uploaddata.php?action=Process ENCTYPE="multipart/form-data">
			                
						<div class="panel-body">
				          <div class="row">
				            <div class="col-md-6">
				              <div class="form-group">
				              <a href="data/template_penpot.xls" class="btn btn-default btn-icon btn-xs tip" title="Download">Download Template Excel</a> 
				              </div>
				              <div class="form-group">
                              <label>Browse : </label>
                            <input type="file" name="smap" >
                          </div>
                          </div>
                          </div>
			                <div class="form-actions text-left">
           					<input type="submit" data-toggle="modal" role="button"  value="Import" class="btn btn-primary">
           					</div>
           					</div>
			                </div>
			                </form>

			<!-- Table inside panel body -->
			            <div class="table-controls">
			            <form method=post action="uploaddata.php?action=SendToDataSoft" name="multicheckbox">
						<div class="form-actions text-left">
           					<input type="submit" data-toggle="modal" role="button"  value="Proses" class="btn btn-success">
				    </p>
				</div>
							<!-- Striped datatable inside panel -->
			    <div class="panel panel-success">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Gaji</h6></div>
			                <table id="example" class="table table-striped table-bordered table-hover" style="width:100%; ">
              <thead>
              <tr>
              		<th width=1<?php echo '/*%%SmartyNocache:1010656dcf7d64a4dd0_50742066%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:1010656dcf7d64a4dd0_50742066%%*/';?>
<input type="checkbox" name="act" value="" id="d"></th>
	  			  <th style="width:1%;text-align:center;">No</th>
				  <th style="width:2%;text-align:center;">Periode</th>
				  <th style="width:2%;text-align:center;">NIK</th>
				  <th style="width:2%;text-align:center;">Jum lah Hadir</th>
				  <th style="width:3%;text-align:center;">Gapok</th>
				  <th style="width:3%;text-align:center;">Kehadir an</th>
				  <th style="width:4%;text-align:center;">Jabat an</th>
				  <th style="width:3%;text-align:center;">Trans. Meal</th>
				  <th style="width:4%;text-align:center;">Lain</th>
				  <th style="width:3%;text-align:center;">PPH 21</th>
				  <th style="width:4%;text-align:center;">BPJS Naker (2%)</th>
				  <th style="width:4%;text-align:center;">BPJS Sehat (0,5%)</th>
				  <th style="width:2%;text-align:center;">Pin jam an</th>
				  <th style="width:2%;text-align:center;">Po tong an</th>
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
	<TD VALIGN=TOP><input type="checkbox" name="nik[]" value="<?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['nik'];?>
"></TD>
        <TD VALIGN=TOP align=LEFT><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['no'];?>
</a></TD>
		<TD VALIGN=TOP ><input type=hidden name="periode[]" value="<?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['periode'];?>
"><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['periode'];?>
</a></TD>
		<TD VALIGN=TOP ><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['nik'];?>
</a></TD>
		<TD VALIGN=TOP ><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['jhadir'];?>
</a></TD>
		<TD VALIGN=TOP style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['gapok'];?>
</a></TD>
		<TD VALIGN=TOP style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['thadir'];?>
</a></TD>
		<TD VALIGN=TOP style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['tjabatan'];?>
</a></TD>
		<TD VALIGN=TOP style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['transmeal'];?>
</a></TD>
		<TD VALIGN=TOP style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['tlain'];?>
</a></TD>
		<TD VALIGN=TOP style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['pph21'];?>
</a></TD>
		<TD VALIGN=TOP style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['jht'];?>
</a></TD>
		<TD VALIGN=TOP style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['bpjs'];?>
</a></TD>
		<TD VALIGN=TOP style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['pinjaman'];?>
</a></TD>
		<TD VALIGN=TOP style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['potlain'];?>
</a></TD>
			
	 <?php endfor; endif; ?>
	</tbody></table>
	</form>

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