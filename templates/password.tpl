{include file="header.tpl"}
{literal}
<script src="js/jquery.js"></script>
<script src="js/jquery.min2.js"></script>
<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
  <link type="text/css" href="development-bundle/themes/base/jquery.ui.all.css" rel="stylesheet" />
	<script type="text/javascript" src="development-bundle/ui/jquery.ui.core.js"></script>
	<script type="text/javascript" src="development-bundle/ui/jquery.ui.datepicker.js"></script>
	<script type="text/javascript" src="development-bundle/ui/i18n/jquery.ui.datepicker-id.js"></script>
  <script type="text/javascript" src="js/autoNumeric.js"></script>
  <script src="js/jQuery-Mask-Plugin_js_jquery.mask.min.js"> </script>
  <script src="development-bundle/ui/jquery.ui.widget.js"></script>
  <script src="development-bundle/ui/jquery.ui.position.js"></script>
  <script src="development-bundle/ui/jquery.ui.autocomplete.js"></script>

{/literal}

	<!-- Page container -->
 	<div class="page-container">


		<!-- Sidebar -->
		<div class="sidebar">
			<div class="sidebar-content">

				
				{include file="pengelola.tpl"}
				
				{include file="mainnav.tpl"}
				
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
			<form name="loginForm" class="" action="password.php" method="POST" ENCTYPE="multipart/form-data">
     <input type="hidden" name="action" value="changePassword">
			    <div class="panel panel-default">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-menu"></i>Add Data Organisasi</h6></div>
                  <div class="panel-body">
	                	<div class="row">
	                		<div class="col-md-6">
	                			<div class="form-group">
	                			<table width="1000">
	                				<tr>
	                					
               <label>Password Lama</label><br />
            <input name="oldpass" type="password" size="15"><br /><br />
            <label>Password Baru</label><br />
            <input name="nupass" type="password" size="15"><br /><br />
            <label>Ulangi Password Baru</label><br />
          <input name="retype" type="password" size="15" ><br /><br />
            <br>
                  
                    <input type="submit" name="submit" class="button" value="Simpan" />&nbsp;&nbsp;&nbsp;
                    <input type="reset" name="reset" class="button" value="Reset" />&nbsp;&nbsp;&nbsp;
                    <input type="button" name="cancel" class="button" value="Batal" onClick="javascript:history.go(-1);"/>
                  
 
      </tr>
      </table>
      </form>
      </div>
                       {include file="footer.tpl"}