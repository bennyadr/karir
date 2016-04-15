<?php /* Smarty version 3.1.27, created on 2016-02-17 08:35:05
         compiled from "C:\xampp\htdocs\sip\templates\frmpendidikan_edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1225856c422a9504ff4_88335176%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7640f84b0c4bc7c606bef341e01e1c1f1d0d4538' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\frmpendidikan_edit.tpl',
      1 => 1455641622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1225856c422a9504ff4_88335176',
  'variables' => 
  array (
    'id' => 0,
    'tingkat_opt' => 0,
    'sekolah' => 0,
    'tahun_awal' => 0,
    'tahun_akhir' => 0,
    'tempat' => 0,
    'jurusan' => 0,
    'gelar' => 0,
    'ipk' => 0,
    'ket' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56c422a95c46b2_39526481',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56c422a95c46b2_39526481')) {
function content_56c422a95c46b2_39526481 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1225856c422a9504ff4_88335176';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/jquery.min2.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-1.8.0.min.js"><?php echo '</script'; ?>
>
  <link type="text/css" href="development-bundle/themes/base/jquery.ui.all.css" rel="stylesheet" />
	<?php echo '<script'; ?>
 type="text/javascript" src="development-bundle/ui/jquery.ui.core.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="development-bundle/ui/jquery.ui.datepicker.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="development-bundle/ui/i18n/jquery.ui.datepicker-id.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="js/autoNumeric.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/jQuery-Mask-Plugin_js_jquery.mask.min.js"> <?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="development-bundle/ui/jquery.ui.widget.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="development-bundle/ui/jquery.ui.position.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="development-bundle/ui/jquery.ui.autocomplete.js"><?php echo '</script'; ?>
>



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
      <br />
				<div class="page-title">
				</div>
			</div>	
			
				<!-- Simple registration form -->
			<form name="myForm" class="" action="?action=PendidikanEditProses" method="POST" ENCTYPE="multipart/form-data">
      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
			    <div class="panel panel-default">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-menu"></i>Edit Data Pendidikan</h6></div>
                  <div class="panel-body">
	                	<div class="row">
	                		<div class="col-md-6">
	                			<div class="form-group">
	                			<table width="1000">
	                				
                          <tr>
                            <td width="200"> <label>Pendidikan :</label> </td>
                            <td><select name=tingkat class="form-control">
                                <option value="<?php echo $_smarty_tpl->tpl_vars['tingkat_opt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['nama'];?>
" selected="selected">Pilih</option>
                                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['name'] = 'detail';
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tingkat_opt']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                                <option value="<?php echo $_smarty_tpl->tpl_vars['tingkat_opt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['nama'];?>
" <?php echo $_smarty_tpl->tpl_vars['tingkat_opt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['tingkat_opt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['nama'];?>
</option>
                                  <?php endfor; endif; ?>
                                </select>
                               <br /> </td>
                                        <td><br /></td>
                          </tr>

                          <tr>
                          <td width="200"> <label>Sekolah/Universitas :</label> </td>
                            <td><input type="text" name="sekolah" placeholder="Sekolah/Universitas" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['sekolah']->value;?>
"><br /> </td>
                            </tr>

                             <tr>
                             <td width="200"> <label>Tahun Masuk :</label> </td>
                            <td><input type="text" NAME="tahun_awal" id="thn_awal" placeholder="yyyy" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tahun_awal']->value;?>
"> <br/></td>
                            <td width="50" align="center">s/d <br /></td>
                            <td width="200"><input type="text" NAME="tahun_akhir" id="thn_akhir" placeholder="yyyy" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tahun_akhir']->value;?>
"><br /> </td>
                             </tr>

                            <tr>
                          <td width="200"> <label>Tempat :</label> </td>
                            <td><input type="text" name="tempat" placeholder="Tempat" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tempat']->value;?>
"><br /> </td>
                            </tr>

                            <tr>
                          <td width="200"> <label>Jurusan :</label> </td>
                            <td><input type="text" name="jurusan" placeholder="Jurusan" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['jurusan']->value;?>
"><br /> </td>
                            </tr>
                             <tr>
                          <td width="200"> <label>Gelar :</label> </td>
                            <td><input type="text" name="gelar" placeholder="Gelar" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['gelar']->value;?>
"><br /> </td>
                            </tr>
                            <tr>
                          <td width="200"> <label>IPK/Nilai :</label> </td>
                            <td><input type="text" name="ipk" placeholder="IPK/Nilai" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['ipk']->value;?>
"><br /> </td>
                            </tr>
                            <tr>
                          <td width="200"> <label>Keterangan :</label> </td>
                            <td><input type="text" name="ket" placeholder="Keterangan" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['ket']->value;?>
"><br /> </td>
                            </tr>
                        </table>
                      </div>
                    </div> 
                  </div>
          <div class="form-actions text-left">
           <input type="submit" data-toggle="modal" role="button"  value="Update" class="btn btn-success">
              <INPUT TYPE="BUTTON" VALUE="Back" ONCLICK="history.go(-1)" class="btn btn-primary">
          </div>
      </div>
      </div>
      </form>
                  <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>