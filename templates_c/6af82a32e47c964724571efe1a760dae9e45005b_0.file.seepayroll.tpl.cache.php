<?php /* Smarty version 3.1.27, created on 2016-03-08 15:59:02
         compiled from "C:\xampp\htdocs\sip\templates\seepayroll.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3084056dee8b6d227b0_05256648%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6af82a32e47c964724571efe1a760dae9e45005b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\seepayroll.tpl',
      1 => 1456989105,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3084056dee8b6d227b0_05256648',
  'variables' => 
  array (
    'nik' => 0,
    'nama' => 0,
    'jabatan' => 0,
    'pos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56dee8b6e8ef12_34765456',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56dee8b6e8ef12_34765456')) {
function content_56dee8b6e8ef12_34765456 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3084056dee8b6d227b0_05256648';
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
			               			                
						<div class="panel-body">
				          <div class="row">
				            <div class="col-md-6">
				              <div class="form-group">
				              <label>NIK 		: <?php echo $_smarty_tpl->tpl_vars['nik']->value;?>
</label>
				              </div>
				              <div class="form-group">
				              <label>Nama		: <?php echo $_smarty_tpl->tpl_vars['nama']->value;?>
</label>
				              </div>
				              <div class="form-group">
				              <label>Jabatan	: <?php echo $_smarty_tpl->tpl_vars['jabatan']->value;?>
</label>
				              </div>
				              
                          </div>
                          </div>
			            	</div>
			                </div>
<div class="table-controls">
			            <form method=post action="pdfpayroll.php" >
						
							<!-- Striped datatable inside panel -->
			    <div class="panel panel-success">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Gaji</h6></div>
			                <table id="example" class="table table-striped table-bordered table-hover" style="width:100%; ">
              <thead>
              <tr>
              	  <th style="width:1%;text-align:center;">No</th>
				  <th style="width:4%;text-align:center;">Bulan</th>
				  <th style="width:4%;text-align:center;">Periode</th>
				  <th style="width:6%;text-align:center;">Take Home Pay</th>
                  <th style="width:2%;text-align:center;">View</th>
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
		<TD VALIGN=TOP style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['bulan'];?>
</a></TD>
		<TD VALIGN=TOP style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['periode'];?>
</a></TD>
		<TD VALIGN=TOP style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['thp'];?>
</a></TD>
		<TD VALIGN=TOP style="text-align:center;">
		<a class="btn btn-warning btn-icon btn-xs tip" href="pdfpayroll.php?periode=<?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['periode'];?>
">Print</a>
			
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