<?php /* Smarty version 3.1.27, created on 2016-02-22 07:04:54
         compiled from "C:\xampp\htdocs\sip\templates\potongan_add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:744756caa506317c88_08876128%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c869eecd4d79dbd0f961b69a70e23dfd32cf86ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\potongan_add.tpl',
      1 => 1456121064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '744756caa506317c88_08876128',
  'variables' => 
  array (
    'periode_opt' => 0,
    'deahass_opt' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56caa5065480e0_83933737',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56caa5065480e0_83933737')) {
function content_56caa5065480e0_83933737 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '744756caa506317c88_08876128';
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
    $('#pph21').mask('000.000.000.000.000', {reverse: true});
    $('#jht').mask('000.000.000.000.000', {reverse: true});
    $('#pinjaman').mask('000.000.000.000.000', {reverse: true});
    $('#potlain').mask('000.000.000.000.000', {reverse: true});
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
<form name="potongan_form" class="" action="?action=saveEmployee" method="POST" ENCTYPE="multipart/form-data">
	<div class="panel panel-default">
    <div class="panel-heading"><h6 class="panel-title"><i class="icon-menu"></i>Add Potongan</h6></div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-11">
             <div class="form-group">
                <label>Periode :</label> </td>
                <select name="idperiode" required class="form-control">
					          <option value=''>Pilih</option>
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
						<option value=''>Pilih</option>
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
                <label>PPH 21 :</label>
                <input type="text" name="pph21" id="pph21" placeholder="PPH 21" class="form-control">
              </div>

              <div class="form-group">
                <label>BPJS Ketenagakerjaan :</label> 
                <input type="text" name="jht" id="jht" placeholder="BPJS Ketenagakerjaan" class="form-control">
              </div>
              <div class="form-group">
                <label>Pinjaman :</label>
                <input type="text" name="pinjaman" id="pinjaman" placeholder="Pinjaman" class="form-control">
              </div>

              <div class="form-group">
                <label>Potongan Lain :</label> 
                <input type="text" name="potlain" id="potlain" placeholder="Potongan Lain" class="form-control">
              </div>
              <div class="form-group">
                <label>Ket. Pendapatan Lain :</label> 
                <input type="text" name="ketpotlain" placeholder="Ket. Pendapatan Lain" class="form-control">
              </div>
                        
                         </div>
                    </div> 

          <div class="form-actions text-left">
           <input type="submit" data-toggle="modal" role="button"  value="Simpan" class="btn btn-success">
              <INPUT TYPE="BUTTON" VALUE="Back" ONCLICK="history.go(-1)" class="btn btn-primary">
              </div>
            </div>
        </div>
      </form>
  <?php echo '<script'; ?>
>
$(document).ready(function () {
  //called when key is pressed in textbox
  $("#pph21").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
  $("#jht").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
  $("#pinjaman").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
$("#potlain").keypress(function (e) {
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