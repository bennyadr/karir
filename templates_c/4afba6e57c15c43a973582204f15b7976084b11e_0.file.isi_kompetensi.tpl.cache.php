<?php /* Smarty version 3.1.27, created on 2016-04-16 05:37:30
         compiled from "C:\xampp\htdocs\karir\templates\isi_kompetensi.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:306855711b37abe3b47_84794327%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4afba6e57c15c43a973582204f15b7976084b11e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karir\\templates\\isi_kompetensi.tpl',
      1 => 1460777841,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '306855711b37abe3b47_84794327',
  'variables' => 
  array (
    'nikdinilai' => 0,
    'namadinilai' => 0,
    'jabatandinilai' => 0,
    'option' => 0,
    'selpen' => 0,
    'keterangan_menilai' => 0,
    'sign' => 0,
    'rsbawah' => 0,
    'info' => 0,
    'nikpenilai' => 0,
    'namapenilai' => 0,
    'jabatanpenilai' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5711b37adcc3b3_44667070',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5711b37adcc3b3_44667070')) {
function content_5711b37adcc3b3_44667070 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '306855711b37abe3b47_84794327';
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
					<h3>Pengukuran Kompetensi<small> Pengukuran Kompetensi</small></h3>
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



<form method="post" action="ukur.php?action=pertanyaan" ENCTYPE="multipart/form-data">

<div class="row">
        		<div class="col-md-6">
		            <div class="panel panel-success">
		                <div class="panel-heading">
	                    	<h3 class="panel-title"><i class="icon-accessibility"></i> PENILAI</h3>
                    	</div>
                    	<div class="panel-body">
	                    	<table class="table table-striped table-bordered table-hover" width="100%">
              <tr >
                  <td style="width:20%"> NIK </td>
                    <td style="width:5%"> : </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['nikdinilai']->value;?>
   </td>
                </tr>
                <tr>
                  <td> Nama </td>
                    <td> : </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['namadinilai']->value;?>
   </td>
                </tr>
                <tr>
                  <td> Jabatan </td>
                    <td> : </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['jabatandinilai']->value;?>
   </td>
                </tr>
                <tr>
                  <td>Menilai</td>
                  <td>:</td>
                  <td> 
                   
                                <form name="selpen" method="post" id="form" action="ukur.php">
                                   
                  <select name="selpen" id="selpen" class="form-control" onchange="javascript:document.selpen.submit();">
                                   <?php echo $_smarty_tpl->tpl_vars['option']->value;?>

                                  </select>
                                   
                                </form>
                              </td>
                </tr>
             </table>
            </div>
          </div>
          
          
          </div>
      


        		<div class="col-md-6">
		            <div class="panel panel-info">
		                <div class="panel-heading">
	                    	<h3 class="panel-title"><i class="icon-accessibility"></i>MENILAI :
	                    	<?php if ($_smarty_tpl->tpl_vars['selpen']->value != '') {?>
                      <?php echo $_smarty_tpl->tpl_vars['selpen']->value;?>

                      <?php } else { ?>
                      <?php echo $_smarty_tpl->tpl_vars['keterangan_menilai']->value;?>

                      <?php }?>
                      </h3>
                    	</div>
                    	<div class="panel-body">
                    	
	                    	<?php if ($_smarty_tpl->tpl_vars['selpen']->value == 'Bawahan') {?>
              
              <?php if ($_smarty_tpl->tpl_vars['sign']->value == '1') {?>
               <table class="table table-striped table-bordered table-hover" width="100%">
                 <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['bawah'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['bawah']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['bawah']['name'] = 'bawah';
$_smarty_tpl->tpl_vars['smarty']->value['section']['bawah']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['rsbawah']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['bawah']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['bawah']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['bawah']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['bawah']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['bawah']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['bawah']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['bawah']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['bawah']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['bawah']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['bawah']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['bawah']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['bawah']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['bawah']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['bawah']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['bawah']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['bawah']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['bawah']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['bawah']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['bawah']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['bawah']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['bawah']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['bawah']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['bawah']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['bawah']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['bawah']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['bawah']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['bawah']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['bawah']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['bawah']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['bawah']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['bawah']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['bawah']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['bawah']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['bawah']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['bawah']['total']);
?>
                <tr >
                  <td style="width:20%"> <a href="kinerja.php?action=kinerjabawah&id=<?php echo $_smarty_tpl->tpl_vars['rsbawah']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bawah']['index']]['id_karyawan'];?>
"><?php echo $_smarty_tpl->tpl_vars['rsbawah']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bawah']['index']]['nik_karyawan'];?>
 - <?php echo $_smarty_tpl->tpl_vars['rsbawah']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bawah']['index']]['nama_karyawan'];?>
 </a>  </td>
                 </tr>
                   <?php endfor; endif; ?>
                 </table>
              <?php } else { ?>
               <div class="alert alert-danger">
              <?php echo $_smarty_tpl->tpl_vars['info']->value;?>

              </div>
              <?php }?>
              
             
            
              
           
      
            <?php } else { ?>
              <table class="table table-striped table-bordered table-hover" width="100%">
                <tr >
                  <td style="width:20%"> NIK </td>
                  <td style="width:5%"> : </td>
                  <td><?php echo $_smarty_tpl->tpl_vars['nikpenilai']->value;?>
</td>
                </tr>
                <tr>
                  <td> Nama </td>
                  <td> : </td>
                  <td><?php echo $_smarty_tpl->tpl_vars['namapenilai']->value;?>
</td>
                </tr>
                <tr>
                  <td> Jabatan </td>
                  <td> : </td>
                  <td><?php echo $_smarty_tpl->tpl_vars['jabatanpenilai']->value;?>
</td>
                </tr>
              <?php }?>
          </table>
              </div>

           <div class="form-actions text-left">                    
&nbsp;&nbsp;&nbsp;&nbsp;
                       <input type=submit value="MASUK KE PERTANYAAN" class="btn btn-primary" />
                        <input name="" type="hidden" value="Rekap" v/>
                   <INPUT TYPE="BUTTON" VALUE="Back" ONCLICK="history.go(-1)" class="btn btn-default">

          </div>
          <br />
           </div>
<?php }
}
?>