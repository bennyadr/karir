<?php /* Smarty version 3.1.27, created on 2016-04-06 07:46:48
         compiled from "C:\xampp\htdocs\karir\templates\pengukuran.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:219945704a2c8e8c1b2_32743937%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '127a96be1beac2ae4ae8c36b0501066f67bf75ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karir\\templates\\pengukuran.tpl',
      1 => 1459763885,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '219945704a2c8e8c1b2_32743937',
  'variables' => 
  array (
    'pos' => 0,
    'authenticated' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5704a2c9287776_43974042',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5704a2c9287776_43974042')) {
function content_5704a2c9287776_43974042 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '219945704a2c8e8c1b2_32743937';
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
					<h3>Pegukuran Kompetensi Jabatan<small>Informasi Pegukuran Kompetensi Jabatan</small></h3>
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
    <div class="panel panel-success">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Pengukuran Kompetensi Jabatan</h6></div>
			                <table id="example" class="table table-striped table-bordered table-hover" style="width:100%; ">
              <thead>
              <tr>
	  			  <th style="width:1%;text-align:center;">No</th>
				  <th style="width:5%;text-align:center;">Nama Pegawai</th>
				  <th style="width:5%;text-align:center;">Nama Jabatan</th>
				  <th style="width:5%;text-align:center;">Diri Sendiri</th>
				  <th style="width:5%;text-align:center;">Atasan</th>
				  <th style="width:5%;text-align:center;">Bawahan</th>
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
        <TD VALIGN=TOP align=LEFT><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['pegawai'];?>
</TD>
        <TD VALIGN=TOP align=LEFT><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['jabatan'];?>
</TD>
<?php if ($_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['p1'] == 'Sudah') {?>
        <TD VALIGN=TOP align=center style="background-color:green;color:white;">SUDAH</TD>
		<?php } else { ?>
		<TD VALIGN=TOP align=center style="background-color:red;color:white;">BELUM</TD>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['p2'] == 'Sudah') {?> 
        <TD VALIGN=TOP align=center style="background-color:green;color:white;">SUDAH - <?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['nipbwh'];?>
</TD>
		<?php } else { ?>
		<TD VALIGN=TOP align=center style="background-color:red;color:white;">BELUM</TD>
		<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['p3'] == 'Sudah') {?>
        <TD VALIGN=TOP align=center style="background-color:green;color:white;">SUDAH - <?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['niprekan'];?>
</TD>
		<?php } else { ?>
		<TD VALIGN=TOP align=center style="background-color:red;color:white;">BELUM</TD>
		<?php }?>
		<!--<?php if ($_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['p4'] == 'Sudah') {?>
        <TD VALIGN=TOP align=center style="background-color:green;color:white;">SUDAH</TD>
		<?php } else { ?>
		<TD VALIGN=TOP align=center style="background-color:red;color:white;">BELUM</TD>
		<?php }?>-->
        
	<!--<TD VALIGN=TOP align=LEFT><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['posKet'];?>
</TD>-->
        <?php if ($_smarty_tpl->tpl_vars['authenticated']->value == 1) {?>
		<!--<TD align=center>
            <a title='Edit' class=edit href=pegawai.php?mod=edit&id=<?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
></a> |
            <a title='Delete' class=delete onclick="return confirm('Anda Yakin?');" href=pegawai.php?mod=del&id=<?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
></a>
         </TD>-->
    </TR>
		<?php }?>            
    <?php endfor; endif; ?>
</TABLE>
</form>

				        </div>
						


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