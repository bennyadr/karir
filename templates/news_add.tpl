{include file="header.tpl"}

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

{literal}
<script type="text/javascript" src="js/plugins/forms/wysihtml5/wysihtml5.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/wysihtml5/toolbar.js"></script>
{/literal}
      
            {include file="footer.tpl"}
