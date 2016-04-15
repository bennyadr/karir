<?php /* Smarty version 3.1.27, created on 2016-03-07 04:39:18
         compiled from "C:\xampp\htdocs\sip\templates\payroll.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:462756dcf7e679a184_10951976%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd19b54d77ee0ce1b3ffdc2fed251eaa18a75ed0a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\payroll.tpl',
      1 => 1457320904,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '462756dcf7e679a184_10951976',
  'variables' => 
  array (
    'periode' => 0,
    'idperiode' => 0,
    'pos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56dcf7e69e6679_96137127',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56dcf7e69e6679_96137127')) {
function content_56dcf7e69e6679_96137127 ($_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once 'C:\\xampp\\htdocs\\sip\\libs\\plugins\\function.cycle.php';

$_smarty_tpl->properties['nocache_hash'] = '462756dcf7e679a184_10951976';
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
					<h3>Payroll<small>Informasi Payroll</small></h3>
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
			    <table> 
			          <TD class=txt_form vAlign=center height=30>
			            <B>&nbsp;&nbsp;Periode [mm/yyyy] </B>
			            </TD>
			          <TD class=txt_form vAlign=center height=30>
			              &nbsp;
			              : 
			
						<select name="idperiode" onChange=submit()>
					          <option value=''>-- Pilih --</option>
					        
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail_periode'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail_periode']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail_periode']['name'] = 'detail_periode';
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail_periode']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['periode']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail_periode']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail_periode']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail_periode']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail_periode']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail_periode']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail_periode']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['detail_periode']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail_periode']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['detail_periode']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail_periode']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail_periode']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['detail_periode']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['detail_periode']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail_periode']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail_periode']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail_periode']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['detail_periode']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['detail_periode']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['detail_periode']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['detail_periode']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['detail_periode']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['detail_periode']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail_periode']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail_periode']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail_periode']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail_periode']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['detail_periode']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail_periode']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail_periode']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['detail_periode']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail_periode']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail_periode']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail_periode']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail_periode']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['detail_periode']['total']);
?>
					              
					        <option value=<?php echo $_smarty_tpl->tpl_vars['periode']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail_periode']['index']]['id'];?>
 <?php echo $_smarty_tpl->tpl_vars['periode']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail_periode']['index']]['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['periode']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail_periode']['index']]['nama'];?>
</option>
					        
					            <?php endfor; endif; ?>
				            </select>
			</TD>
			            
			        	<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			        	<td>	         
				<div class="table-controls">
					<p style="text-align:left;">
						<a href="pdfslipgaji2.php?idprd=<?php echo $_smarty_tpl->tpl_vars['idperiode']->value;?>
" class="btn btn-info btn-icon btn-xs tip" title="" data-original-title="Print"><i class="icon-print"></i></a>

				    </p>
				</div></td></table>	
							<!-- Striped datatable inside panel -->
			    <div class="panel panel-success">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Payroll</h6></div>
			                <table id="example" class="table table-striped table-bordered table-hover" style="width:100%; ">
                          <thead>
              <tr>
	  			  <th style="width:1%;text-align:center;">No</th>
				  <th style="width:2%;text-align:center;">Periode</th>
				  <th style="width:2%;text-align:center;">Nama</th>
				  <th style="width:3%;text-align:center;">Jabatan</th>
				  <th style="width:3%;text-align:center;">Upah</th>
				  <th style="width:3%;text-align:center;">T. Jabatan</th>
				  <th style="width:4%;text-align:center;">Trans & Meal</th>
				  <th style="width:3%;text-align:center;">T. Lain</th>
				  <th style="width:3%;text-align:center;">T. Hadir</th>
				  <th style="width:3%;text-align:center;">Pend. Lain</th>
				  <th style="width:3%;text-align:center;">PPH 21</th>
				  <th style="width:4%;text-align:center;">BPJS Naker (2%)</th>
				  <th style="width:4%;text-align:center;">BPJS Sehat (0,5%)</th>
				  <th style="width:2%;text-align:center;">Pin jam an</th>
				  <th style="width:2%;text-align:center;">Po tong an</th>
				  <th style="width:3%;text-align:center;">Pengu ra ngan</th>
				  <th style="width:3%;text-align:center;">THP</th>
	 </tr>
             </thead>
<tbody >
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
    <TR bgcolor=<?php echo smarty_function_cycle(array('name'=>'cyclerincian','values'=>"#BDCCDC, #DDE4F9"),$_smarty_tpl);?>
 >
        <TD VALIGN=TOP align=center><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['no'];?>
</TD>
<TD VALIGN=TOP align=center><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['posprd'];?>
</TD>
        <TD VALIGN=TOP align=LEFT><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['posName'];?>
</TD>
<TD VALIGN=TOP align=LEFT><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['posjbt'];?>
</TD>
<!--<TD VALIGN=TOP align=right><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['poslevel'];?>
</TD>-->
<TD VALIGN=TOP align=right><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['posgaji'];?>
</TD>
<TD VALIGN=TOP align=right><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['posjabatan'];?>
</TD>
<TD VALIGN=TOP align=right><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['posmeal'];?>
</TD>
<TD VALIGN=TOP align=right><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['postlain'];?>
</TD>
<TD VALIGN=TOP align=right><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['poshadir'];?>
</TD>
<TD VALIGN=TOP align=right><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['pospendlain'];?>
</TD>
<TD VALIGN=TOP align=right><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['pospph'];?>
</TD>
<TD VALIGN=TOP align=right><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['pospotjht'];?>
</TD>
<TD VALIGN=TOP align=right><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['pospotsehat'];?>
</TD>
<TD VALIGN=TOP align=right><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['pospotlain'];?>
</TD>
<TD VALIGN=TOP align=right><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['pospotpinjaman'];?>
</TD>
<TD VALIGN=TOP align=right><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['pospotbro'];?>
</TD>
<TD VALIGN=TOP align=right><?php echo $_smarty_tpl->tpl_vars['pos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['posupahterima'];?>
</TD>
</TR>
 <?php endfor; endif; ?>
	</tbody></table>
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