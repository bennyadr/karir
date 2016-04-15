<?php /* Smarty version 3.1.27, created on 2016-03-04 08:10:37
         compiled from "C:\xampp\htdocs\sip\templates\profile.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:206056d934ed51c777_04518417%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52519c3c79f5e456089ea773dd4684f1e4d15495' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\profile.tpl',
      1 => 1456988896,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206056d934ed51c777_04518417',
  'variables' => 
  array (
    'idperiode' => 0,
    'gambar' => 0,
    'nik' => 0,
    'sex' => 0,
    'nama' => 0,
    'agama' => 0,
    'jabatan' => 0,
    'stskawin' => 0,
    'divisi' => 0,
    'telp' => 0,
    'hp' => 0,
    'pendidikan' => 0,
    'ktp' => 0,
    'tempat' => 0,
    'tanggal' => 0,
    'alamatktp' => 0,
    'alamatsmr' => 0,
    'bank' => 0,
    'norek' => 0,
    'email' => 0,
    'npwp' => 0,
    'pathktp' => 0,
    'pathnpwp' => 0,
    'pathbpjs' => 0,
    'pathbpjssehat' => 0,
    'pathnikah' => 0,
    'pathkk' => 0,
    'pendidikan_list' => 0,
    'kursus_list' => 0,
    'keluarga_list' => 0,
    'organisasi_list' => 0,
    'pekerjaan_list' => 0,
    'kesehatan_list' => 0,
    'penghargaan_list' => 0,
    'hukuman_list' => 0,
    'mcu_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56d934edc86589_97416034',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56d934edc86589_97416034')) {
function content_56d934edc86589_97416034 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '206056d934ed51c777_04518417';
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
					<h3>Profile<small>Informasi Data Diri</small></h3>
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
           <div style="text-align:right;">
      <div class="form-actions text-right">
            

            <form action="profile.php?action=print" method="post">
            <a href="profile.php?action=edit" title="Edit" class="btn btn-info">Edit</a>
            <input type="hidden" name="idperiode" value="<?php echo $_smarty_tpl->tpl_vars['idperiode']->value;?>
">
              <input type="submit" data-toggle="modal" role="button" value="View PDF" class="btn btn-danger"></div>

            </form> 
              <!--<a href="profile.php?action=print" title="View PDF"><i class="icon-file-pdf"></i></div></a> -->
              </div>
        </div>




<div class="tabbable" id="tabs">

        <div class="tab-content">         
        </div>
      </div>


    <div class="tabbable" id="tabs-79220">
                <ul class="nav nav-tabs">
                  <li class="active">
                    <a href="#biodata" data-toggle="tab">Biodata Diri</a>
                  </li>
                  <li>
                    <a href="#pendidikan" data-toggle="tab">Pendidikan</a>
                  </li>
                  <li>
                    <a href="#kursus" data-toggle="tab">Kursus</a>
                  </li>
                  <li>
                    <a href="#keluarga" data-toggle="tab">Keluarga</a>
                  </li>
                  <li>
                    <a href="#organisasi" data-toggle="tab">Organisasi</a>
                  </li>
                  <li>
                    <a href="#pekerjaan" data-toggle="tab">Pekerjaan</a>
                  </li>
                  <li>
                    <a href="#kesehatan" data-toggle="tab">Kesehatan</a>
                  </li>
                   <li>
                    <a href="#penghargaan" data-toggle="tab">Penghargaan</a>
                  </li>
                   <li>
                    <a href="#hukuman" data-toggle="tab">Hukuman</a>
                  </li>
                   <li>
                    <a href="#mcu" data-toggle="tab">MCU</a>
                  </li>
                </ul>
        
        <div class="tab-content">
          <div class="tab-pane active" id="biodata">
            <table class="table table-bordered">
                      <tr>
                      <?php if ($_smarty_tpl->tpl_vars['gambar']->value != null) {?>
                        <td rowspan="6" style="text-align:left;"><img width=120 src="<?php echo $_smarty_tpl->tpl_vars['gambar']->value;?>
" ></td>
                       <?php } else { ?> 
                       <td rowspan="6" style="text-align:left;"><img width=120 src="img/no_photo.jpg" ></td>
                       <?php }?>
                    <td style="width:10%;text-align:left;">NIK</td>
                      <td style="width:1%;text-align:center;">:</td>
                      <td style="width:30%;text-align:left;"><?php echo $_smarty_tpl->tpl_vars['nik']->value;?>
</td>
                      <td >Jenis Kelamin</td>
                      <td >:</td>
                      <td ><?php echo $_smarty_tpl->tpl_vars['sex']->value;?>
</td>
                      </tr>
                      <tr>
                        <td style="width:10%;text-align:left;">Nama</td>
                      <td style="width:1%;text-align:center;">:</td>
                      <td><b><?php echo $_smarty_tpl->tpl_vars['nama']->value;?>
</b></td>
                      <td >Agama</td>
                      <td >:</td>
                      <td ><?php echo $_smarty_tpl->tpl_vars['agama']->value;?>
</td>
                      </tr>
                      <tr>
                        <td style="width:10%;text-align:left;">Jabatan</td>
                      <td style="width:1%;text-align:center;">:</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['jabatan']->value;?>
</td>
                      <td >Status Kawin</td>
                      <td >:</td>
                      <td ><?php echo $_smarty_tpl->tpl_vars['stskawin']->value;?>
</td>
                      </tr>
                      <tr>
                        <td style="width:10%;text-align:left;">Depatemen</td>
                      <td style="width:1%;text-align:center;">:</td>
                      <td ><?php echo $_smarty_tpl->tpl_vars['divisi']->value;?>
</td>
                      <td >Telp/HP</td>
                      <td >:</td>
                      <td ><?php echo $_smarty_tpl->tpl_vars['telp']->value;?>
&nbsp;/&nbsp;<?php echo $_smarty_tpl->tpl_vars['hp']->value;?>
</td>
                      </tr>
                      <tr>
                        <td style="width:10%;text-align:left;">Pendidikan</td>
                      <td style="width:1%;text-align:center;">:</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['pendidikan']->value;?>
</td>
                      <td>No KTP</td>
                      <td>:</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['ktp']->value;?>
</td>
                      </tr>
                      <tr>
                        <td style="width:10%;text-align:left;">Tempat Lahir</td>
                      <td style="width:1%;text-align:center;">:</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['tempat']->value;?>
</td>
                      <td style="width:12%;text-align:left;">Tanggal Lahir</td>
                      <td style="width:1%;text-align:center;">:</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['tanggal']->value;?>
</td>
                      </tr>
                      <tr>
                        <td rowspan="3" style="width:12%;text-align:left;">&nbsp;</td>
                        <td style="width:10%;text-align:left;">Alamat KTP</td>
                        <td style="width:1%;text-align:center;">:</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['alamatktp']->value;?>
</td>
                        <td style="width:12%;text-align:left;">Alamat Sementara</td>
                        <td style="width:1%;text-align:center;">:</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['alamatsmr']->value;?>
</td>
                      </tr>
                      <tr>
                      <td style="width:10%;text-align:left;">Nama Bank</td>
                      <td style="width:1%;text-align:center;">:</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['bank']->value;?>
</td>
                      <td style="width:12%;text-align:left;">No Rekening</td>
                      <td style="width:1%;text-align:center;">:</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['norek']->value;?>
</td>
                      </tr>
                      <tr>
                        <td style="width:10%;text-align:left;">Email</td>
                      <td style="width:1%;text-align:center;">:</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</td>
                      <td style="width:12%;text-align:left;">No NPWP</td>
                      <td style="width:1%;text-align:center;">:</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['npwp']->value;?>
</td>
                      </tr>
                      </table>

                  <p></p>
                  <div class="info-buttons block row">
                       <div class="col-sm-2">
                    <?php if ($_smarty_tpl->tpl_vars['pathktp']->value != "kosong" || $_smarty_tpl->tpl_vars['pathktp']->value != "NULL" || $_smarty_tpl->tpl_vars['pathktp']->value != '') {?>
                      <a href="<?php echo $_smarty_tpl->tpl_vars['pathktp']->value;?>
" >
                    <?php } else { ?>
                    <a href="#" >
                    <?php }?> 
                               <i class="icon-disk"></i>
                                   <span> KTP </span>           
                            </div></a>

                  <div class="col-sm-2">
                      <?php if ($_smarty_tpl->tpl_vars['pathnpwp']->value != "kosong" || $_smarty_tpl->tpl_vars['pathnpwp']->value != "NULL" || $_smarty_tpl->tpl_vars['pathnpwp']->value != '') {?>
                      <a href="<?php echo $_smarty_tpl->tpl_vars['pathnpwp']->value;?>
">
                    <?php } else { ?>
                    <a href="#" >
                    <?php }?>            
                               <i class="icon-disk"></i>
                                   <span>NPWP</span>
                                   </div></a>

                  <div class="col-sm-2">
                    <?php if ($_smarty_tpl->tpl_vars['pathbpjs']->value != "kosong" || $_smarty_tpl->tpl_vars['pathbpjs']->value != "NULL" || $_smarty_tpl->tpl_vars['pathbpjs']->value != '') {?>
                      <a href="<?php echo $_smarty_tpl->tpl_vars['pathbpjs']->value;?>
">
                    <?php } else { ?>
                    <a href="#">
                    <?php }?>            
                               <i class="icon-disk"></i>
                                   <span>BPJS NAKER</span>
                         </div></a>

                  <div class="col-sm-2">
                    <?php if ($_smarty_tpl->tpl_vars['pathbpjssehat']->value != "kosong" || $_smarty_tpl->tpl_vars['pathbpjssehat']->value != "NULL" || $_smarty_tpl->tpl_vars['pathbpjssehat']->value != '') {?>
                      <a href="<?php echo $_smarty_tpl->tpl_vars['pathbpjssehat']->value;?>
">
                    <?php } else { ?>
                    <a href="#">
                    <?php }?>
                               <i class="icon-disk"></i>
                                   <span>BPJS SEHAT</span>
                            </div></a>

                  <div class="col-sm-2">
                    <?php if ($_smarty_tpl->tpl_vars['pathnikah']->value != "kosong" || $_smarty_tpl->tpl_vars['pathnikah']->value != "NULL" || $_smarty_tpl->tpl_vars['pathnikah']->value != '') {?>
                      <a href="<?php echo $_smarty_tpl->tpl_vars['pathnikah']->value;?>
">
                    <?php } else { ?>
                    <a href="#">
                    <?php }?>            
                               <i class="icon-disk"></i>
                                   <span>Buku Nikah</span>
                            </div></a>

                  <div class="col-sm-2">
                    <?php if ($_smarty_tpl->tpl_vars['pathkk']->value != "kosong" || $_smarty_tpl->tpl_vars['pathkk']->value != "NULL" || $_smarty_tpl->tpl_vars['pathkk']->value != '') {?>
                      <a href="<?php echo $_smarty_tpl->tpl_vars['pathkk']->value;?>
">
                    <?php } else { ?>
                    <a href="#">
                    <?php }?>            
                               <i class="icon-disk"></i>
                                   <span>Kartu Keluarga</span>
                            </div></a>

                          </div>

                          </div>


                      <div class="tab-pane active" id="pendidikan">
            <div class="panel panel-primary">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Pendidikan</h6></div>
                      <table id="example" class="table table-striped table-bordered table-hover" style="width:100%;">
          <thead>
            <TR>
                <th style="width:1%;text-align:center;">No</th>
          <th style="width:4%;text-align:center;">Tingkat</th>
          <th style="width:4%;text-align:center;">Sekolah/Universitas</th>
          <th style="width:6%;text-align:center;">Jurusan</th>
          <th style="width:3%;text-align:center;">IPK/Nilai</th>
          <th style="width:3%;text-align:center;">Gelar</th>
          <th style="width:6%;text-align:center;">Tempat</th>
          <!--<th style="width:6%;text-align:center;">Option</th>-->

      
            </TR>
          </thead>
          <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['name'] = 'detail';
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pendidikan_list']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
      <TD VALIGN=TOP align=center><?php echo $_smarty_tpl->tpl_vars['pendidikan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['no'];?>
</TD>
        <TD VALIGN=TOP style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['pendidikan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['tingkat'];?>
</TD>
    <TD VALIGN=TOP><?php echo $_smarty_tpl->tpl_vars['pendidikan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['sekolah'];?>
</TD>
    <TD VALIGN=TOP><?php echo $_smarty_tpl->tpl_vars['pendidikan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['jurusan'];?>
</TD>
    <TD VALIGN=TOP align=center><?php echo $_smarty_tpl->tpl_vars['pendidikan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['ipk'];?>
</TD>
    <TD VALIGN=TOP align=center><?php echo $_smarty_tpl->tpl_vars['pendidikan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['gelar'];?>
</TD>
    <TD VALIGN=TOP align=center><?php echo $_smarty_tpl->tpl_vars['pendidikan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['tempat'];?>
</TD>
 
    <?php endfor; endif; ?>

</tr>

</table>
</div>
</div>
          <div class="tab-pane active" id="kursus">
            <div class="panel panel-primary">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Kursus</h6></div>
                      <table id="example" class="table table-striped table-bordered table-hover" style="width:100%;">
          <thead>
            <TR>
              <th style="width:1%;text-align:center;">No</th>
          <th style="width:6%;text-align:center;">Kursus</th>
          <th style="width:6%;text-align:center;">Instansi/Perusahaan</th>
          <th style="width:5%;text-align:center;">Kota</th>
          <th style="width:3%;text-align:center;">Tahun</th>
          <th style="width:3%;text-align:center;">Sertifikat</th>
          <th style="width:6%;text-align:center;">No Sertifikat</th>

      
            </TR>
          </thead>
          <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['name'] = 'detail';
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['kursus_list']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
    <TR>
        <TD VALIGN=TOP align=center><?php echo $_smarty_tpl->tpl_vars['kursus_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['no'];?>
</TD>
        <TD VALIGN=TOP><?php echo $_smarty_tpl->tpl_vars['kursus_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['kursus'];?>
</TD>
    <TD VALIGN=TOP><?php echo $_smarty_tpl->tpl_vars['kursus_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['instansi'];?>
</TD>
         <TD VALIGN=TOP align=CENTER><?php echo $_smarty_tpl->tpl_vars['kursus_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['kota'];?>
</TD>
    <TD VALIGN=TOP align=CENTER><?php echo $_smarty_tpl->tpl_vars['kursus_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['tahun'];?>
</TD>
    <TD VALIGN=TOP align=CENTER><?php echo $_smarty_tpl->tpl_vars['kursus_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['sertifikat'];?>
</TD>
    <TD VALIGN=TOP align=CENTER><?php echo $_smarty_tpl->tpl_vars['kursus_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['no_sertifikat'];?>
</TD>
   <?php endfor; endif; ?>
   </TR>
</table>
</div>
</div>

          <div class="tab-pane active" id="keluarga">
           <div class="panel panel-primary">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Keluarga</h6></div>
                      <table id="example" class="table table-striped table-bordered table-hover" style="width:100%;">
          <thead>
            <TR>
              <th style="width:3%;text-align:center;">No</th>
              <th style="width:20%;text-align:center;">Tanggal Lahir</th>
              <th style="width:20%;text-align:center;">Nama Anggota Keluarga</th>
              <th style="width:20%;text-align:center;">Status Anggota Keluarga</th>
    
            </TR>
          </thead>
          <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['name'] = 'detail';
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['keluarga_list']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
          <TR>
                  <TD VALIGN=TOP align=center><?php echo $_smarty_tpl->tpl_vars['keluarga_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['no'];?>
</TD>
                  <TD VALIGN=TOP align=CENTER><?php echo $_smarty_tpl->tpl_vars['keluarga_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['tgl_lahir'];?>
</TD>
                  <TD VALIGN=TOP align=LEFT><?php echo $_smarty_tpl->tpl_vars['keluarga_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['nama'];?>
</TD>
                  <TD VALIGN=TOP align=CENTER><?php echo $_smarty_tpl->tpl_vars['keluarga_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['status'];?>
</TD>

        </TR>
    <?php endfor; endif; ?>

</table>
</div>
          </div>
          <div class="tab-pane active" id="organisasi">
            <p>
             
 <div class="panel panel-primary">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Organisasi</h6></div>
                      <table id="example" class="table table-striped table-bordered table-hover" style="width:100%;">
          <thead>
            <TR>
              <th style="width:3%;text-align:center;">No</th>
              <th style="width:20%;text-align:center;">Nama Organisasi</th>
              <th style="width:20%;text-align:center;">Jabatan</th>
              <th style="width:10%;text-align:center;">Tahun</th>  

            </TR>
          </thead>
          <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['name'] = 'detail';
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['organisasi_list']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
          <TR>
              <TD VALIGN=TOP align=center><?php echo $_smarty_tpl->tpl_vars['organisasi_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['no'];?>
</TD>
              <TD VALIGN=TOP ><?php echo $_smarty_tpl->tpl_vars['organisasi_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['organisasi'];?>
</TD>
              <TD VALIGN=TOP><?php echo $_smarty_tpl->tpl_vars['organisasi_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['jabatan'];?>
</TD>
              <TD VALIGN=TOP><?php echo $_smarty_tpl->tpl_vars['organisasi_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['tahun'];?>
</TD>

        </TR>
    <?php endfor; endif; ?>

</table>
</div>
          </div>

                    <div class="tab-pane active" id="pekerjaan">
            <div class="panel panel-primary">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Pekerjaan</h6></div>
                      <table id="example" class="table table-striped table-bordered table-hover" style="width:100%;">
          <thead>
            <TR>
              <th style="width:3%;text-align:center;">No</th>
              <th style="width:15%;text-align:center;">Perusahaan</th>
              <th style="width:10%;text-align:center;">Jabatan</th>
              <th style="width:20%;text-align:center;">Deskripsi Pekerjaan</th>
              <th style="width:15%;text-align:center;">Alamat</th>
              <th style="width:7%;text-align:center;">Tanggal Mulai</th>
              <th style="width:10%;text-align:center;">Tanggal Akhir</th>

      
            </TR>
          </thead>
          <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['name'] = 'detail';
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pekerjaan_list']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
          <TR>
              <TD VALIGN=TOP align=center><?php echo $_smarty_tpl->tpl_vars['pekerjaan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['no'];?>
</TD>
              <TD VALIGN=TOP ><?php echo $_smarty_tpl->tpl_vars['pekerjaan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['perusahaan'];?>
</TD>
              <TD VALIGN=TOP><?php echo $_smarty_tpl->tpl_vars['pekerjaan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['jabatan'];?>
</TD>
              <TD VALIGN=TOP><?php echo $_smarty_tpl->tpl_vars['pekerjaan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['deskripsi'];?>
</TD>
              <TD VALIGN=TOP><?php echo $_smarty_tpl->tpl_vars['pekerjaan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['alamat'];?>
</TD>
              <TD VALIGN=TOP align=center><?php echo $_smarty_tpl->tpl_vars['pekerjaan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['tgl_mulai'];?>
</TD>
              <TD VALIGN=TOP align=center><?php echo $_smarty_tpl->tpl_vars['pekerjaan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['tgl_akhir'];?>
</TD>

        </TR>
    <?php endfor; endif; ?>

                </table>
                </div>
                    </div>

          <div class="tab-pane active" id="kesehatan">
            <div class="panel panel-primary">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Kesehatan</h6></div>
                      <table id="example" class="table table-striped table-bordered table-hover" style="width:100%;">
          <thead>
            <TR>
                  <TH style="width:3%;text-align:center;">No</th>
                  <TH style="width:20%;text-align:center;">Penyakit</TH>
                  <TH style="width:6%;text-align:center;">Tahun Sakit</TH>
                  <TH style="width:15%;text-align:center;">Keterangan</TH>

            </TR>
          </thead>
          <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['name'] = 'detail';
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['kesehatan_list']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
          <TR>
                      <TD VALIGN=TOP align=center><?php echo $_smarty_tpl->tpl_vars['kesehatan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['no'];?>
</TD>
                      <TD VALIGN=TOP align=LEFT><?php echo $_smarty_tpl->tpl_vars['kesehatan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['penyakit'];?>
</TD>
                      <TD VALIGN=TOP align=CENTER><?php echo $_smarty_tpl->tpl_vars['kesehatan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['tahun'];?>
</TD>
                      <TD VALIGN=TOP align=LEFT><?php echo $_smarty_tpl->tpl_vars['kesehatan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['ket'];?>
</TD>

        </TR>
    <?php endfor; endif; ?>

</table>
</div>
          </div>
          <div class="tab-pane active" id="penghargaan">
           <div class="panel panel-primary">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Penghargaan</h6></div>
                      <table id="example" class="table table-striped table-bordered table-hover" style="width:100%;">
          <thead>
            <TR>
                  <TH style="width:3%;text-align:center;">No</TH>
                  <TH style="width:15%;text-align:center;">Penghargaan</TH>
                  <TH style="width:15%;text-align:center;">Pemberi Penghargaan</TH>
                  <TH style="width:15%;text-align:center;">Tanggal Pemberian</TH>
                  <TH style="width:15%;text-align:center;">Keterangan</TH>

            </TR>
          </thead>
          <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['name'] = 'detail';
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['penghargaan_list']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
          <TR>
                 <TD VALIGN=TOP align=center><?php echo $_smarty_tpl->tpl_vars['penghargaan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['no'];?>
</TD>
                 <TD VALIGN=TOP align=LEFT><?php echo $_smarty_tpl->tpl_vars['penghargaan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['penghargaan'];?>
</TD>
                 <TD VALIGN=TOP align=LEFT><?php echo $_smarty_tpl->tpl_vars['penghargaan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['pemberi_penghargaan'];?>
</TD>
                 <TD VALIGN=TOP align=CENTER><?php echo $_smarty_tpl->tpl_vars['penghargaan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['tgl_penghargaan'];?>
</TD>
                 <TD VALIGN=TOP align=LEFT><?php echo $_smarty_tpl->tpl_vars['penghargaan_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['ket'];?>
</TD>

        </TR>
    <?php endfor; endif; ?>

</table>
</div>

          </div>
          <div class="tab-pane active" id="hukuman">
            <div class="panel panel-primary">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Hukuman</h6></div>
                      <table id="example" class="table table-striped table-bordered table-hover" style="width:100%;">
          <thead>
            <TR>
              <TH ALIGN=CENTER width=4<?php echo '/*%%SmartyNocache:206056d934ed51c777_04518417%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:206056d934ed51c777_04518417%%*/';?>
No</TH>
              <TH ALIGN=CENTER width=10<?php echo '/*%%SmartyNocache:206056d934ed51c777_04518417%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:206056d934ed51c777_04518417%%*/';?>
Hukuman</TH>
              <TH ALIGN=CENTER width=15<?php echo '/*%%SmartyNocache:206056d934ed51c777_04518417%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:206056d934ed51c777_04518417%%*/';?>
Pemberi Hukuman</TH>
              <TH ALIGN=CENTER width=10<?php echo '/*%%SmartyNocache:206056d934ed51c777_04518417%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:206056d934ed51c777_04518417%%*/';?>
Tanggal Hukuman</TH>
              <TH ALIGN=CENTER width=10<?php echo '/*%%SmartyNocache:206056d934ed51c777_04518417%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:206056d934ed51c777_04518417%%*/';?>
No Surat/SK</TH>
              <TH ALIGN=CENTER width=10<?php echo '/*%%SmartyNocache:206056d934ed51c777_04518417%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:206056d934ed51c777_04518417%%*/';?>
Keterangan</TH>
            </TR>
          </thead>
          <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['name'] = 'detail';
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['hukuman_list']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
          <TR>
              <TD VALIGN=TOP align=center><?php echo $_smarty_tpl->tpl_vars['hukuman_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['no'];?>
</TD>
              <TD VALIGN=TOP align=CENTER><?php echo $_smarty_tpl->tpl_vars['hukuman_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['hukuman'];?>
</TD>
              <TD VALIGN=TOP align=LEFT><?php echo $_smarty_tpl->tpl_vars['hukuman_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['pemberi_hukuman'];?>
</TD>
              <TD VALIGN=TOP align=CENTER><?php echo $_smarty_tpl->tpl_vars['hukuman_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['tgl_sanksi'];?>
</TD>
              <TD VALIGN=TOP align=CENTER><?php echo $_smarty_tpl->tpl_vars['hukuman_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['no_sanksi'];?>
</TD>
              <TD VALIGN=TOP align=LEFT><?php echo $_smarty_tpl->tpl_vars['hukuman_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['ket'];?>
</TD>

        </TR>
    <?php endfor; endif; ?>

</table>
</div>


          </div>
          <div class="tab-pane" id="mcu">
            <div class="panel panel-primary">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel MCU</h6></div>
                      <table id="example" class="table table-striped table-bordered table-hover" style="width:100%;">
          <thead>
            <TR>
                <TH ALIGN=CENTER width=4<?php echo '/*%%SmartyNocache:206056d934ed51c777_04518417%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:206056d934ed51c777_04518417%%*/';?>
No</TH>
                <TH ALIGN=CENTER width=10<?php echo '/*%%SmartyNocache:206056d934ed51c777_04518417%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:206056d934ed51c777_04518417%%*/';?>
Tanggal Pemeriksaan</TH>
                <TH ALIGN=CENTER width=10<?php echo '/*%%SmartyNocache:206056d934ed51c777_04518417%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:206056d934ed51c777_04518417%%*/';?>
Hasil Pemeriksaan</TH>
                <TH ALIGN=CENTER width=10<?php echo '/*%%SmartyNocache:206056d934ed51c777_04518417%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:206056d934ed51c777_04518417%%*/';?>
Tenaga Medis</TH>
                <TH ALIGN=CENTER width=15<?php echo '/*%%SmartyNocache:206056d934ed51c777_04518417%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:206056d934ed51c777_04518417%%*/';?>
Catatan Kesehatan</TH>
                <TH ALIGN=CENTER width=10<?php echo '/*%%SmartyNocache:206056d934ed51c777_04518417%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:206056d934ed51c777_04518417%%*/';?>
Tanggal dari</TH>
                <TH ALIGN=CENTER width=10<?php echo '/*%%SmartyNocache:206056d934ed51c777_04518417%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:206056d934ed51c777_04518417%%*/';?>
Tanggal sampai</TH>
            </TR>
          </thead>
          <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['name'] = 'detail';
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['mcu_list']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
          <TR>
              <TD VALIGN=TOP align=center><?php echo $_smarty_tpl->tpl_vars['mcu_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['no'];?>
</TD>
              <TD VALIGN=TOP align=CENTER><?php echo $_smarty_tpl->tpl_vars['mcu_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['tgl_pemeriksaan'];?>
</TD>
              <TD VALIGN=TOP align=LEFT><?php echo $_smarty_tpl->tpl_vars['mcu_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['hasil'];?>
</TD>
              <TD VALIGN=TOP align=LEFT><?php echo $_smarty_tpl->tpl_vars['mcu_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['tenaga'];?>
</TD>
              <TD VALIGN=TOP align=LEFT><?php echo $_smarty_tpl->tpl_vars['mcu_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['catatan'];?>
</TD>
              <TD VALIGN=TOP align=CENTER><?php echo $_smarty_tpl->tpl_vars['mcu_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['tgl_dari'];?>
</TD>
              <TD VALIGN=TOP align=CENTER><?php echo $_smarty_tpl->tpl_vars['mcu_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['tgl_sampai'];?>
</TD>

        </TR>
    <?php endfor; endif; ?>

</table>
</div>
          </div>

        </div> </div>

      </form>
<a href="#" class="back-to-top">Back to Top</a>
      
      
        
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