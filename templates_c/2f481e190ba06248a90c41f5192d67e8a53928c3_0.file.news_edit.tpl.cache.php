<?php /* Smarty version 3.1.27, created on 2016-02-19 03:53:23
         compiled from "C:\xampp\htdocs\sip\templates\news_edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2672256c683a3865b25_09686581%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f481e190ba06248a90c41f5192d67e8a53928c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\news_edit.tpl',
      1 => 1455850383,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2672256c683a3865b25_09686581',
  'variables' => 
  array (
    'id' => 0,
    'posName' => 0,
    'berita' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56c683a39a4041_22071561',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56c683a39a4041_22071561')) {
function content_56c683a39a4041_22071561 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2672256c683a3865b25_09686581';
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
      <br />
				<div class="page-title">
				</div>
			</div>	
			
				<!-- Simple registration form -->
<form name="myForm" class="" action="?action=saveEditPos" method="POST" ENCTYPE="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
	<div class="panel panel-default">
    <div class="panel-heading"><h6 class="panel-title"><i class="icon-menu"></i>Edit Pengumuman/News</h6></div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-11">
            <div class="form-group">
                <label>Judul :</label>
                <input type="text" name="posName" id="posName" class="form-control" placeholder="Judul" value="<?php echo $_smarty_tpl->tpl_vars['posName']->value;?>
" />
                </div>
                <div class="form-group">
                <label>Isi Berita :</label> 
                <textarea type="text" name="berita" class="editor" required><?php echo $_smarty_tpl->tpl_vars['berita']->value;?>
</textarea>
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
 type="text/javascript" src="js/plugins/forms/wysihtml5/wysihtml5.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/forms/wysihtml5/toolbar.js"><?php echo '</script'; ?>
>

      
            <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>