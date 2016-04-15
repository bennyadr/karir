<?php /* Smarty version 3.1.27, created on 2016-02-22 05:48:30
         compiled from "C:\xampp\htdocs\sip\templates\pendapatan_edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2754956ca931e13dbc0_48635430%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd51a7dc3adc916478725cea65f9d7bf72782601f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\pendapatan_edit.tpl',
      1 => 1456116487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2754956ca931e13dbc0_48635430',
  'variables' => 
  array (
    'id' => 0,
    'periode_opt' => 0,
    'deahass_opt' => 0,
    'transport' => 0,
    'thadir' => 0,
    'tjabatan' => 0,
    'tlain' => 0,
    'ket_lain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56ca931e318f87_16987466',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ca931e318f87_16987466')) {
function content_56ca931e318f87_16987466 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2754956ca931e13dbc0_48635430';
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



<?php echo '<script'; ?>
 type="text/javascript">
  $(document).ready(function(){
    $('#transport').mask('000.000.000.000.000', {reverse: true});
    $('#thadir').mask('000.000.000.000.000', {reverse: true});
    $('#tjabatan').mask('000.000.000.000.000', {reverse: true});
    $('#tlain').mask('000.000.000.000.000', {reverse: true});
  });
  
<?php echo '</script'; ?>
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
<form name="pendapatan_form" class="" action="?action=editProcess" method="POST" ENCTYPE="multipart/form-data"><input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
	<div class="panel panel-default">
    <div class="panel-heading"><h6 class="panel-title"><i class="icon-menu"></i>Add Pendapatan</h6></div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-11">
             <div class="form-group">
                <label>Periode :</label> </td>
                <select name="idperiode" required class="form-control">
					          <option value='<?php echo $_smarty_tpl->tpl_vars['periode_opt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail_periode']['index']]['id'];?>
' selected="selected">Pilih</option>
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail_periode'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail_periode']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail_periode']['name'] = 'detail_periode';
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail_periode']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['periode_opt']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
					        <option value="<?php echo $_smarty_tpl->tpl_vars['periode_opt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail_periode']['index']]['id'];?>
" <?php echo $_smarty_tpl->tpl_vars['periode_opt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail_periode']['index']]['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['periode_opt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail_periode']['index']]['nama'];?>
</option>
					        
					            <?php endfor; endif; ?>
                </select>
              </div>
              <div class="form-group">
                <label>Nama Karyawan :</label> </td>
                <select name="pegawai" required class="form-control">
						<option value='<?php echo $_smarty_tpl->tpl_vars['deahass_opt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
' selected="selected">Pilih</option>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['name'] = 'detail';
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['deahass_opt']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
							<option value="<?php echo $_smarty_tpl->tpl_vars['deahass_opt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['id'];?>
" <?php echo $_smarty_tpl->tpl_vars['deahass_opt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['deahass_opt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['nama'];?>
</option>
						<?php endfor; endif; ?>
						</select>
              </div>

             <div class="form-group">
                <label>Transport & Meal :</label>
                <input type="text" name="transport" id="transport" placeholder="Transport & Meal" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['transport']->value;?>
">
              </div>

              <div class="form-group">
                <label>Tunjangan Kehadiran :</label> 
                <input type="text" name="thadir" id="thadir" placeholder="Tunjangan Kehadiran" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['thadir']->value;?>
">
              </div>
              <div class="form-group">
                <label>Tunjangan Jabatan :</label>
                <input type="text" name="tjabatan" id="tjabatan" placeholder="Tunjangan Jabatan" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tjabatan']->value;?>
">
              </div>

              <div class="form-group">
                <label>Tunjangan Lain :</label> 
                <input type="text" name="tlain" id="tlain" placeholder="Tunjangan Lain" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tlain']->value;?>
">
              </div>
              <div class="form-group">
                <label>Ket. Pendapatan Lain :</label> 
                <input type="text" name="ket_lain" placeholder="Ket. Pendapatan Lain" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['ket_lain']->value;?>
">
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
  <?php echo '<script'; ?>
>
$(document).ready(function () {
  //called when key is pressed in textbox
  $("#transport").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
  $("#thadir").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
  $("#tjabatan").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
$("#tlain").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });

});

        <?php echo '</script'; ?>
>
            <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>