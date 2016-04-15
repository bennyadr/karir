<?php /* Smarty version 3.1.27, created on 2016-04-15 19:40:14
         compiled from "C:\xampp\htdocs\karir\templates\isi_kompetensi.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:26095711277e374b37_01774759%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4afba6e57c15c43a973582204f15b7976084b11e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karir\\templates\\isi_kompetensi.tpl',
      1 => 1460521114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26095711277e374b37_01774759',
  'variables' => 
  array (
    'nik' => 0,
    'name' => 0,
    'jabatan' => 0,
    'idkompetensi' => 0,
    'jabatan_option' => 0,
    'jabatan_onchange' => 0,
    'keterangan_menilai' => 0,
    'bawahan' => 0,
    'bawahan_option' => 0,
    'atasan' => 0,
    'atasan_option' => 0,
    'rekan' => 0,
    'rekan_option' => 0,
    'nip_dinilai' => 0,
    'name_dinilai' => 0,
    'jumlah' => 0,
    'jabatan_dinilai' => 0,
    'nikRelasiJabatan_onchange' => 0,
    'nikdinilai' => 0,
    'soal' => 0,
    'kembali' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5711277e63b325_27516092',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5711277e63b325_27516092')) {
function content_5711277e63b325_27516092 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '26095711277e374b37_01774759';
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
	                    	<table>
	                    		<tr>
	                    		<td width="12%" valign="top"><b>NIK</b></td>
                                <td width="4%" valign="top">:</td>
                                <td width="64%"><input type="text" name="textfield" id="textfield" size="40" value="<?php echo $_smarty_tpl->tpl_vars['nik']->value;?>
" disabled="disabled" class="form-control input-sm"> <br /></td>
	                    		</tr>
	                    		<tr>
	                    		<td width="12%" valign="top"><b>Nama</b></td>
                                <td width="4%" valign="top">:</td>
                                <td width="64%"><input type="text" name="textfield" id="textfield" size="40" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" disabled="disabled" class="form-control input-sm"><br /></td>
	                    		</tr>
	                    		<tr>
	                    		<td width="12%" valign="top"><b>Jabatan</b></td>
                                <td width="4%" valign="top">:</td>
                                <td width="64%"><input type="text" name="textfield" id="textfield" size="40" value="<?php echo $_smarty_tpl->tpl_vars['jabatan']->value;?>
" disabled="disabled" class="form-control input-sm"><br /></td>
	                    		</tr>
	                    		<tr>
	                    		<td width="12%" valign="top"><b>Menilai</b></td>
                                <td width="4%" valign="top">:</td>
                                <td width="64%"> <form name="jabatanform" method="post" id="form"  action="ukurkomp.php?action=jabatan">
                                  <input type="hidden" name="idkompetensi" id="textfield" size="40" value="<?php echo $_smarty_tpl->tpl_vars['idkompetensi']->value;?>
"/>
                                  <select name="idjabatan" id="jumpMenu"onchange="javascript:document.jabatanform.submit ();" class="form-control input-sm">
                                    <option value="Yang Bersangkutan" selected="selected">Yang Bersangkutan</option>
                                      <?php echo $_smarty_tpl->tpl_vars['jabatan_option']->value;?>

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
	                    	<?php if ($_smarty_tpl->tpl_vars['jabatan_onchange']->value != '') {?>
                      <?php echo $_smarty_tpl->tpl_vars['jabatan_onchange']->value;?>

                      <?php } else { ?>
                      <?php echo $_smarty_tpl->tpl_vars['keterangan_menilai']->value;?>

                      <?php }?>
                      </h3>
                    	</div>
                    	<div class="panel-body">
                    	
	                    	<table>

	                    		<tr>
	                    		<td width="12%" height="10" valign=top><b>NIK</b></td>
                                <td width="4%" valign=top>:</td>
                                <td width="64%" valign=top><?php if ($_smarty_tpl->tpl_vars['jabatan_onchange']->value == 'Bawahan') {?>
                                   <?php if ($_smarty_tpl->tpl_vars['bawahan']->value > 1) {?>
                                   <form name="jabatanBawahanform" method="post" id="form"  action="ukurkomp.php?action=jabatan">
                                       <input type="hidden" name="idkompetensi" id="textfield" size="40" value="<?php echo $_smarty_tpl->tpl_vars['idkompetensi']->value;?>
"/>
                                       <input name="idjabatan" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['jabatan_onchange']->value;?>
"/>
                                       <select  class="form-control input-sm" name="nikRelasiJabatan" id="jumpMenu"onchange="javascript:document.jabatanBawahanform.submit ();">                                               
											<?php echo $_smarty_tpl->tpl_vars['bawahan_option']->value;?>
                                          
									   </select>
                                   </form>
                                   <?php } else { ?>
                                   		<?php echo $_smarty_tpl->tpl_vars['bawahan_option']->value;?>

                                   <?php }?>
                               <?php } elseif ($_smarty_tpl->tpl_vars['jabatan_onchange']->value == 'Atasan') {?>
                                   <?php if ($_smarty_tpl->tpl_vars['atasan']->value > 1) {?>
                                   <form name="jabatanAtasanform" method="post" id="form"  action="ukurkomp.php?action=jabatan">
                                   	   <input type="hidden" name="idkompetensi" id="textfield" size="40" value="<?php echo $_smarty_tpl->tpl_vars['idkompetensi']->value;?>
"/>
                                   	   <input name="idjabatan" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['jabatan_onchange']->value;?>
"/>
                                       <select class="form-control input-sm" name="nikRelasiJabatan" id="jumpMenu"onchange="javascript:document.jabatanAtasanform.submit ();" >
                                           	<?php echo $_smarty_tpl->tpl_vars['atasan_option']->value;?>

                                       </select>
                                   </form>
                                   <?php } else { ?>
                                   		<?php echo $_smarty_tpl->tpl_vars['atasan_option']->value;?>

                                   <?php }?>
                               <?php } elseif ($_smarty_tpl->tpl_vars['jabatan_onchange']->value == 'Rekan') {?>
                                   <?php if ($_smarty_tpl->tpl_vars['rekan']->value > 1) {?>
                                   <form name="jabatanRekanform" method="post" id="form"  action="ukurkomp.php?action=jabatan">
                                       <input type="hidden" name="idkompetensi" id="textfield" size="40" value="<?php echo $_smarty_tpl->tpl_vars['idkompetensi']->value;?>
"/>
                                       <input name="idjabatan" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['jabatan_onchange']->value;?>
"/>
                                       <select name="nikRelasiJabatan" id="jumpMenu"onchange="javascript:document.jabatanRekanform.submit ();" class="form-control input-sm">
                                           	<?php echo $_smarty_tpl->tpl_vars['rekan_option']->value;?>

                                       </select>
                                   </form>
                                  <?php } else { ?>
                                      <?php echo $_smarty_tpl->tpl_vars['rekan_option']->value;?>

                                   <?php }?>
                               <?php } elseif ($_smarty_tpl->tpl_vars['jabatan_onchange']->value == 'Yang Bersangkutan') {?>
                                  <?php echo $_smarty_tpl->tpl_vars['nip_dinilai']->value;?>

                               <?php } else { ?>
                                  <input type="text" class="form-control input-sm" <?php echo $_smarty_tpl->tpl_vars['nip_dinilai']->value;?>

                               <?php }?>
                               </td>
	                    		</tr>
	                    		<tr>
	                    		<td width="12%" height="100"><b>Nama</b></td>
                                <td width="4%">:</td>
                                <td width="64%"><?php if ($_smarty_tpl->tpl_vars['name_dinilai']->value != '') {?>
                                     	    <?php if ($_smarty_tpl->tpl_vars['jumlah']->value >= 1) {?>
                                            	<input type="text" name="textfield2" id="textfield2" size="40" value="<?php echo $_smarty_tpl->tpl_vars['name_dinilai']->value;?>
" disabled="disabled" class="form-control input-sm" />				
                                            <?php } else { ?>
                                            	<input type="text" name="textfield2" id="textfield2" size="40" disabled="disabled" class="form-control input-sm" />
                                            <?php }?>    
                                     	<?php } elseif ($_smarty_tpl->tpl_vars['jabatan_onchange']->value == 'Bawahan' || $_smarty_tpl->tpl_vars['jabatan_onchange']->value == 'Atasan' || $_smarty_tpl->tpl_vars['jabatan_onchange']->value == 'Rekan') {?>
                                        	<input type="text" name="textfield2" id="textfield2" size="40" disabled="disabled" class="form-control input-sm" />
                                        <?php } else { ?>
                                        	<input type="text" name="textfield2" id="textfield2" size="40" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" disabled="disabled" class="form-control input-sm" />	
                                        <?php }?>
									</td>
	                    		</tr>
	                    		
	                    		<tr>
	                    		<td width="12%"><b>Jabatan</b></td>
                                <td width="4%">:</td>
                                <td width="64%"><?php if ($_smarty_tpl->tpl_vars['name_dinilai']->value != '') {?>
                                     <?php if ($_smarty_tpl->tpl_vars['jumlah']->value >= 1) {?>
                                          <input type="text" name="textfield2" id="textfield2" size="40" value="<?php echo $_smarty_tpl->tpl_vars['jabatan_dinilai']->value;?>
" disabled="disabled" class="form-control input-sm" />				
                                     <?php } else { ?>
                                          <input type="text" name="textfield2" id="textfield2" size="40" disabled="disabled" class="form-control input-sm" />
                                     <?php }?>    
                                <?php } elseif ($_smarty_tpl->tpl_vars['jabatan_onchange']->value == 'Bawahan' || $_smarty_tpl->tpl_vars['jabatan_onchange']->value == 'Atasan' || $_smarty_tpl->tpl_vars['jabatan_onchange']->value == 'Rekan') {?>
                                   	<input type="text" name="textfield2" id="textfield2" size="40" disabled="disabled" class="form-control input-sm" />
                                <?php } else { ?>
                                   	<input type="text" name="textfield2" id="textfield2" size="40" value="<?php echo $_smarty_tpl->tpl_vars['jabatan']->value;?>
" disabled="disabled" class="form-control input-sm" />	
                                <?php }?></td>
	                    		</tr>
	                    		<br />
	                    	</table>
                    	</div>
                    	</div>
                    	</div>


                    <table width="100%">       
              <tr>
                  <td align="center">
                    <form method="post" action="ukur.php?action=pertanyaan">
                        <input type="hidden" name="nikPenilai" id="textfield" size="40" value="<?php echo $_smarty_tpl->tpl_vars['nik']->value;?>
" />
                        
                        <?php if ($_smarty_tpl->tpl_vars['jabatan_onchange']->value != '') {?>
                            <input type="hidden" name="posisi" id="textfield" size="40" value="<?php echo $_smarty_tpl->tpl_vars['jabatan_onchange']->value;?>
"/>
                        <?php } else { ?>
                            <input type="hidden" name="posisi" id="textfield" size="40" value="Yang Bersangkutan" />
                        <?php }?>
                        
                        <?php if ($_smarty_tpl->tpl_vars['nikRelasiJabatan_onchange']->value != '') {?>
                            <input type="hidden" name="nikDinilai" id="textfield" size="40" value="<?php echo $_smarty_tpl->tpl_vars['nikRelasiJabatan_onchange']->value;?>
" />
                        <?php } elseif ($_smarty_tpl->tpl_vars['nikdinilai']->value != '') {?>
                            <input type="hidden" name="nikDinilai" id="textfield" size="40" value="<?php echo $_smarty_tpl->tpl_vars['nikdinilai']->value;?>
" />
                        <?php } else { ?>
                            <input type="hidden" name="nikDinilai" id="textfield" size="40" value="<?php echo $_smarty_tpl->tpl_vars['nik']->value;?>
" />
                        <?php }?>  
                        <input type="hidden" name="idkompetensi" id="textfield" size="40" value="<?php echo $_smarty_tpl->tpl_vars['idkompetensi']->value;?>
"/>
            <input type="hidden" name="name" id="textfield" size="40" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"/>
                        <input type="hidden" name="soal" id="textfield" size="40" value="<?php echo $_smarty_tpl->tpl_vars['soal']->value;?>
"/>
                        <input type="hidden" name="kembali" id="textfield" size="40" value="<?php echo $_smarty_tpl->tpl_vars['kembali']->value;?>
"/>
                        <input name="" type="button" onClick="javascript:window.location='ukur.php?action=petunjukhard'" class="btn btn-primary" value="Cancel"/>&nbsp;&nbsp;
                       <input type=submit value="MASUK KE PERTANYAAN" class="btn btn-primary" />
                        <input name="" type="hidden" value="Rekap" v/>
                    </form>
                    </td>
                </tr>
            </table>
        </TD>
    </TR>

</TABLE>


                	</div>
</div>
<?php }
}
?>