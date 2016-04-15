<?php /* Smarty version 3.1.27, created on 2016-04-14 07:10:24
         compiled from "C:\xampp\htdocs\karir\templates\hasilkinerja.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20594570f26403c32c6_17963020%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3056bcaad7d1da3c7f893ae6bf1496c81e8e4645' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karir\\templates\\hasilkinerja.tpl',
      1 => 1460610620,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20594570f26403c32c6_17963020',
  'variables' => 
  array (
    'unite' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_570f2640582249_07582185',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_570f2640582249_07582185')) {
function content_570f2640582249_07582185 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20594570f26403c32c6_17963020';
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
					<h3>Hasil Kompetensi Pegawai<small>Informasi Hasil Kompetensi Pegawair</small></h3>
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
<form class="" role="form">	           
	<div class="row">
					<div class="col-md-12" >
		            	<div class="panel panel-default">
		                    <div class="panel-heading"><h6 class="panel-title" ><i class="icon-user"></i> Indentitas Pegawai</h6></div>
		                	<div class="panel-body">
			    <TABLE cellSpacing=0 cellPadding=0 border=0 width=100<?php echo '/*%%SmartyNocache:20594570f26403c32c6_17963020%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:20594570f26403c32c6_17963020%%*/';?>
   
			        <TR>
                    <TD width="18%" height="30"></TD>
			          <TD width="28%"><B> N I P</B> </TD>          			              
			          <TD width="3%" Align=left> : </TD>
			          <TD width="51%" Align=left> {} </TD>
		          </TR>
                    <TR>
                      <TD width="18%" height="30"></TD>
			          <TD width="28%" ><B>Nama Pegawai</B> </TD>          			              
			          <TD width="3%" Align=left > : </TD>
			          <TD width="51%" Align=left > {} </TD>
			        </TR>
                    <TR>
                      <TD width="18%" height="30"></TD>
			          <TD width="28%" > <B>Jabatan</B> </TD>          			              
			          <TD width="3%" Align=left> : </TD>
			          <TD width="51%" Align=left> {} </TD>
			        </TR>
			        </TABLE>
			      </TABLE>
		                	</div>
		                	</div>
		                	</div>
		               </div>
		               </form>
		      

		      <table class="table table-bordered">
	            <tbody>
	            	<TR bgcolor=#237EA0>
        				<TD ALIGN=CENTER width=5<?php echo '/*%%SmartyNocache:20594570f26403c32c6_17963020%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:20594570f26403c32c6_17963020%%*/';?>
<font color=#FFFFFF><b>A</b></font></TD>
        				<TD ALIGN=CENTER colspan=3 width=15<?php echo '/*%%SmartyNocache:20594570f26403c32c6_17963020%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:20594570f26403c32c6_17963020%%*/';?>
<font color=#FFFFFF><b>Nilai SKP = Hasil SKP x 60%</b></font></TD>
						<TD ALIGN=CENTER width=6<?php echo '/*%%SmartyNocache:20594570f26403c32c6_17963020%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:20594570f26403c32c6_17963020%%*/';?>
<font color=#FFFFFF><b>Total Nilai SKP</b></font></TD>
  					</TR>

   					<TR bgcolor=#237EA0>
						<TD ALIGN=LEFT width=5<?php echo '/*%%SmartyNocache:20594570f26403c32c6_17963020%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:20594570f26403c32c6_17963020%%*/';?>
<font color=#FFFFFF size=5><b>SKP</b></font></TD>
				        <TD ALIGN=CENTER width=5% height=40><font color=#FFFFFF size=17><b>nilainya</b></font></TD>
				        <TD ALIGN=CENTER width=1<?php echo '/*%%SmartyNocache:20594570f26403c32c6_17963020%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:20594570f26403c32c6_17963020%%*/';?>
<font color=#FFFFFF size=17><b>x</b></font></TD>
				        <TD ALIGN=CENTER width=6<?php echo '/*%%SmartyNocache:20594570f26403c32c6_17963020%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:20594570f26403c32c6_17963020%%*/';?>
<font color=#FFFFFF size=17><b>60%</b></font></TD>
						<TD ALIGN=CENTER width=6<?php echo '/*%%SmartyNocache:20594570f26403c32c6_17963020%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:20594570f26403c32c6_17963020%%*/';?>
<font color=#FFFFFF size=17><b>totnilainya</b></font></TD>
 					</TR>

 					 <TR bgcolor=#237EA0>
				        <TD ALIGN=CENTER width=5<?php echo '/*%%SmartyNocache:20594570f26403c32c6_17963020%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:20594570f26403c32c6_17963020%%*/';?>
<font color=#FFFFFF><b>B</b></font></TD>
				        <TD ALIGN=CENTER colspan=3 width=15<?php echo '/*%%SmartyNocache:20594570f26403c32c6_17963020%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:20594570f26403c32c6_17963020%%*/';?>
<font color=#FFFFFF><b>Nilai Kompetensi = Hasil Kompetensi x 40%</b></font></TD>
						<TD VALIGN=TOP></TD>
						<TR bgcolor=#237EA0>
						<TD VALIGN=TOP></TD>
				        <!--<TD ALIGN=CENTER width=5<?php echo '/*%%SmartyNocache:20594570f26403c32c6_17963020%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:20594570f26403c32c6_17963020%%*/';?>
<font color=#FFFFFF><b></b></font></TD>-->
				        <TD ALIGN=CENTER width=10% colspan=2><font color=#FFFFFF><b>KOMPETENSI</b></font></TD>
					<TD ALIGN=CENTER width=6<?php echo '/*%%SmartyNocache:20594570f26403c32c6_17963020%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:20594570f26403c32c6_17963020%%*/';?>
<font color=#FFFFFF><b>Nilai</b></font></TD>
					<TD VALIGN=TOP></TD>
				  </TR>
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
				    <TR bgcolor=#237EA0>
				        <TD VALIGN=TOP></TD>
						<TD VALIGN=TOP colspan=2><font color=#FFFFFF><?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['kompetensi'];?>
</font></TD>
				        <!--<TD VALIGN=TOP><font color=#FFFFFF><?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['kompetensi'];?>
</font></TD>-->
				        <TD VALIGN=TOP align="center"><font color=#FFFFFF><?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['nilai'];?>
</font></TD>
						<TD VALIGN=TOP></TD>
				    </TR>
				    <?php endfor; endif; ?>
				       <TR bgcolor=#237EA0>
					   <TD VALIGN=TOP></TD>
				        <!--<TD ALIGN=CENTER width=5<?php echo '/*%%SmartyNocache:20594570f26403c32c6_17963020%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:20594570f26403c32c6_17963020%%*/';?>
<font color=#FFFFFF><b></b></font></TD>-->
				        <TD ALIGN=CENTER width=10% colspan=2><font color=#FFFFFF><b>NILAI KOMPETENSI</b></font></TD>
					<TD ALIGN=CENTER width=6<?php echo '/*%%SmartyNocache:20594570f26403c32c6_17963020%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:20594570f26403c32c6_17963020%%*/';?>
<font color=#FFFFFF><b>nilai</b></font></TD>
					<TD VALIGN=TOP></TD>
				  <TR bgcolor=#237EA0>
						<TD ALIGN=LEFT width=5<?php echo '/*%%SmartyNocache:20594570f26403c32c6_17963020%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:20594570f26403c32c6_17963020%%*/';?>
<font color=#FFFFFF size=5><b>PERILAKU KERJA</b></font></TD>
				        <TD ALIGN=CENTER width=5% height=40><font color=#FFFFFF size=17><b>nilai</b></font></TD>
				        <TD ALIGN=CENTER width=1<?php echo '/*%%SmartyNocache:20594570f26403c32c6_17963020%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:20594570f26403c32c6_17963020%%*/';?>
<font color=#FFFFFF size=17><b>x</b></font></TD>
				        <TD ALIGN=CENTER width=6<?php echo '/*%%SmartyNocache:20594570f26403c32c6_17963020%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:20594570f26403c32c6_17963020%%*/';?>
<font color=#FFFFFF size=17><b>40%</b></font></TD>
						<TD ALIGN=CENTER width=6<?php echo '/*%%SmartyNocache:20594570f26403c32c6_17963020%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:20594570f26403c32c6_17963020%%*/';?>
<font color=#FFFFFF size=17><b>totnilai</b></font></TD>
				  </TR>
				  <TR bgcolor=#237EA0>
						<TD ALIGN=LEFT width=5<?php echo '/*%%SmartyNocache:20594570f26403c32c6_17963020%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:20594570f26403c32c6_17963020%%*/';?>
<font color=#FFFFFF size=5><b>NPK</b></font></TD>
				        <TD ALIGN=CENTER colspan=3 width=5% height=40><font color=#FFFFFF size=17><b>NILAI = A + B</b></font></TD>
				        <TD ALIGN=CENTER width=6<?php echo '/*%%SmartyNocache:20594570f26403c32c6_17963020%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:20594570f26403c32c6_17963020%%*/';?>
<font color=#FFFFFF size=17><b>totnilaikinerja</b></font></TD>
				  </TR>
				  <TR bgcolor=#237EA0>
						<TD ALIGN=LEFT width=5<?php echo '/*%%SmartyNocache:20594570f26403c32c6_17963020%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:20594570f26403c32c6_17963020%%*/';?>
<font color=#FFFFFF size=2>
						<b>91 - 100 &nbsp;= Sangat Baik</br>
						   76 - 90 &nbsp;&nbsp; = Baik</br>
						   61 - 76 &nbsp;&nbsp; = Cukup</br>
						   51 - 60 &nbsp;&nbsp;  = Kurang</br>
						   < 50    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = Buruk</b></font></TD>
				        <TD ALIGN=CENTER colspan=4 width=4% height=40><font color=#FFFFFF size=17><b>predikat</b></font></TD>
				  </TR>

  				</tbody>
 			</table>

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
?>


<?php }
}
?>