<?php /* Smarty version 3.1.27, created on 2016-02-19 03:53:43
         compiled from "C:\xampp\htdocs\sip\templates\news_add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1711756c683b74cfca4_41078874%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ad258b00fb0beefb49540d2d9899f6adfe65876' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sip\\templates\\news_add.tpl',
      1 => 1455849302,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1711756c683b74cfca4_41078874',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56c683b75fda86_29959626',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56c683b75fda86_29959626')) {
function content_56c683b75fda86_29959626 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1711756c683b74cfca4_41078874';
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
<form name="myForm" class="" action="?action=savePos" method="POST" ENCTYPE="multipart/form-data">
	<div class="panel panel-default">
    <div class="panel-heading"><h6 class="panel-title"><i class="icon-menu"></i>Add Pengumuman/News</h6></div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-11">
            <div class="form-group">
                <label>Judul :</label>
                <input type="text" name="posName" id="posName" class="form-control" placeholder="Judul" />
                </div>
                <div class="form-group">
                <label>Isi Berita :</label> 
                <textarea type="text" name="berita" class="editor" required></textarea>
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