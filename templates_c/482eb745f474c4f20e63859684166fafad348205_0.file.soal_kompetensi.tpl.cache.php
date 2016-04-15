<?php /* Smarty version 3.1.27, created on 2016-04-13 06:18:40
         compiled from "C:\xampp\htdocs\karir\templates\soal_kompetensi.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8103570dc8a042eeb0_73698171%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '482eb745f474c4f20e63859684166fafad348205' => 
    array (
      0 => 'C:\\xampp\\htdocs\\karir\\templates\\soal_kompetensi.tpl',
      1 => 1460368465,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8103570dc8a042eeb0_73698171',
  'variables' => 
  array (
    'name' => 0,
    'soal' => 0,
    'idkompetensi' => 0,
    'nikPenilai' => 0,
    'nikDinilai' => 0,
    'posisi' => 0,
    'kembali' => 0,
    'pertanyaan' => 0,
    'opsiJawaban' => 0,
    'opsiJawaban2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_570dc8a0596ef8_44779344',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_570dc8a0596ef8_44779344')) {
function content_570dc8a0596ef8_44779344 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8103570dc8a042eeb0_73698171';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <!-- Page container -->
    <div class="page-container">    

        <!-- Page content -->
        <div class="page-content">


            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h3>Soal Kompetensi</h3>
                </div>

                
            </div>

<br/>
<form id="form1" name="form1" method="post" action="ukur.php?action=pertanyaan">
<TABLE align=center CELLSPACING=1 CELLPADDING=2 width=100<?php echo '/*%%SmartyNocache:8103570dc8a042eeb0_73698171%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:8103570dc8a042eeb0_73698171%%*/';?>

    <TR>
        <TD colspan="2" align="right">
	    <input name="name" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"/>
            <input name="soal" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['soal']->value;?>
"/>
            <input name="idkompetensi" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['idkompetensi']->value;?>
"/>
            <input name="nikPenilai" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['nikPenilai']->value;?>
"/>
            <input name="nikDinilai" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['nikDinilai']->value;?>
"/>
	       <input name="posisi" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['posisi']->value;?>
"/>
            <input name="kembali" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['kembali']->value;?>
"/>
            
            <!--<?php if ($_smarty_tpl->tpl_vars['soal']->value != 1) {?>
            	<input name="" type="button" onclick="javascript: window.location='ukurkomp.php?mod=pertanyaan&soal=<?php echo $_smarty_tpl->tpl_vars['soal']->value;?>
&idkompetensi=<?php echo $_smarty_tpl->tpl_vars['idkompetensi']->value;?>
&soal=<?php echo $_smarty_tpl->tpl_vars['soal']->value;?>
&kembali=kembali&nikDinilai=<?php echo $_smarty_tpl->tpl_vars['nikDinilai']->value;?>
&nikPenilai=<?php echo $_smarty_tpl->tpl_vars['nikPenilai']->value;?>
&name=<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
'" value="Back"/>
 			<?php } else { ?>
        		<input name="" type="button" onClick="javascript: window.location='ukurkomp.php?mod=idpenilaian&nipRelasiJabatan=<?php echo $_smarty_tpl->tpl_vars['nikDinilai']->value;?>
&nip=<?php echo $_smarty_tpl->tpl_vars['nikPenilai']->value;?>
&idkompetensi=<?php echo $_smarty_tpl->tpl_vars['idkompetensi']->value;?>
&kembali=kembali'" value="Back"/>
            <?php }?>-->
        </TD>     
    </TR>

<table width="50%">
    <tr>
        <td><span class="label label-block label-danger text-left"><h6>Nama Penilai : <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h6></span></td><br />
    </tr>
 </table><br />
 
<table>
    <tr>
   <td align="left" valign="top" style="font-size:17px;"><b><?php echo $_smarty_tpl->tpl_vars['soal']->value;?>
. &nbsp; &nbsp; &nbsp; </b></td>
   <td align="left" valign="top" style="font-size:17px;"><b><?php echo $_smarty_tpl->tpl_vars['pertanyaan']->value;?>
</b></td>
    </tr>
    
    <tr>
    <td align="left" valign="top" style="font-size:17px;"></td>
    <td align="left" valign="top" style="font-size:17px;"><b><?php echo $_smarty_tpl->tpl_vars['opsiJawaban']->value;?>
</b></td> <br />
    </tr>
  
  <tr>
  <td align="left" valign="top" style="font-size:17px;"></td>
    <td align="left" valign="top" style="font-size:17px;"><b> <?php echo $_smarty_tpl->tpl_vars['opsiJawaban2']->value;?>
</b></td>
    </tr>
</table>
    
 <div class="form-actions text-left">
           <input type="submit" data-toggle="modal" role="button"  value="Next" class="btn btn-success">
              </div>
</form>


<?php }
}
?>