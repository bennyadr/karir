<?php /* Smarty version 3.1.27, created on 2016-04-14 10:53:40
         compiled from "C:\xampp\htdocs\karir\templates\posjbtkosong.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:24370570f5a940b50b5_94055904%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9c3a23ae69bd005bf04ad0304d4c99a9d169ae8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karir\\templates\\posjbtkosong.tpl',
      1 => 1460615905,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24370570f5a940b50b5_94055904',
  'variables' => 
  array (
    'orderby' => 0,
    'id' => 0,
    'jabatan_opt' => 0,
    'unite' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_570f5a941e3346_62111804',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_570f5a941e3346_62111804')) {
function content_570f5a941e3346_62111804 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '24370570f5a940b50b5_94055904';
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
					<h3>Posisi Jabatan Kosong<small>Informasi Posisi Jabatan Kosong</small></h3>
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
			          

         <form class="form-horizontal" ame="kompetensiform" method="post" id="form"  action="posjbtkosong.php?mod=idposjbtkosong" role="form">
         <input type="hidden" name="orderby" value="<?php echo $_smarty_tpl->tpl_vars['orderby']->value;?>
">
		<INPUT TYPE="hidden" NAME="id" VALUE="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
<div class="row">
					<div class="col-md-12" >
		            	<div class="panel panel-default">
		                	<div class="panel-body">
			    <TABLE cellSpacing=0 cellPadding=0 border=0 width=100<?php echo '/*%%SmartyNocache:24370570f5a940b50b5_94055904%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:24370570f5a940b50b5_94055904%%*/';?>
   
			        <TR>
                    <TD width="10%" height="30"></TD>
			          <TD width="20%"><B> Jabatan</B> </TD>          			              
			          <TD width="3%" Align=left> : </TD>
			          <TD width="40%" Align=left> <select name="jabatan" onChange=submit() class="form-control" tabindex="2">
									<option value=''>Semua</option>
									<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['name'] = 'detail';
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['jabatan_opt']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
									<option value="<?php echo $_smarty_tpl->tpl_vars['jabatan_opt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
" <?php echo $_smarty_tpl->tpl_vars['jabatan_opt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['jabatan_opt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['nama'];?>
</option>
									<?php endfor; endif; ?>
									</select> </TD>
                    <TD width="51%" Align=left></TD>
		          </TR>
                    <TR>
                      <TD width="10%" height="30"></TD>
			          <TD width="20%" ><B>Kelompok</B> </TD>          			              
			         <TD width="3%" Align=left> : </TD>
                     <TD width="40%" Align=left> {} </TD>
                     <TD width="51%" Align=left></TD>
			        </TR>
                    <TR>
                      <TD width="10%" height="30"></TD>
			          <TD width="20%" > <B>Level</B> </TD>          			              
			          <TD width="3%" Align=left> : </TD>
			          <TD width="40%" Align=left> {} </TD>
                      <TD width="51%" Align=left></TD>
			        </TR>
			        </TABLE>
			      </TABLE>
		                	</div>
		                	</div>
		                	</div>
		               </div>
		               </form>
		               


							<!-- Striped datatable inside panel -->
			    <div class="panel panel-info">
			                <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Posisi Jabatan Kosong</h6></div>
			                <table id="example" class="table table-striped table-bordered table-hover" style="width:100%; ">
              <thead>
              <tr>
	  			  <th style="width:1%;text-align:center;">No</th>
				  <th style="width:5%;text-align:center;">Kelompok</th>
				  <th style="width:5%;text-align:center;">Jabatan</th>
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
    <TR align="center">
        <TD VALIGN=TOP align=center><?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['no'];?>
</TD>
        <TD VALIGN=TOP align=center><?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['kelompok'];?>
</TD>
        <TD VALIGN=TOP align=center><?php echo $_smarty_tpl->tpl_vars['unite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['jabatan'];?>
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