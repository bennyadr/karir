{include file="header.tpl"}
<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
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
				<div class="page-title">
					<h3>Edit Arah Karir<small>Informasi Arah Karir</small></h3>
				</div>
			</div>	
			
				<!-- Simple registration form -->
			<form class="" action="?action=save" method="POST" ENCTYPE="multipart/form-data">
			    <div class="panel panel-default">
	                <div class="panel-body">
	                	<div class="row">
	                		<div class="col-md-6">
	                			<div class="form-group">
									<label>Nama Kelompok 1 :</label>
                                    <input type="text" name="Nama_KelompokTingkatJbt" placeholder="Nama Kelompk" class="form-control" value="{$Nama_KelompokTingkatJbt}" required>
	                			</div>
	                		</div>
	                		<div class="col-md-6">
	                		<div class="form-group">
									<label>Nama Kelompok 2 :</label>
                                    <input type="text" name="Nama_KelompokTingkatJbt2" placeholder="Nama Kelompok" class="form-control" value="{$Nama_KelompokTingkatJbt2}" required>
	                			</div>
	                		</div>
	                		<div class="col-md-6">
	                		<div class="form-group">
									<label>Flag :</label>
                                    <select name="Flag" class="form-control">
                                                <option value="{$Flag}" selected="selected"> --Pilih-- </option>
                                                <option value="IN" > IN </option>
                                                <option value="OUT" > OUT </option>
                                                </select>
	                			</div>
	                		</div>

	                		
	                	</div>
                        <div class="form-actions text-left">
                        	<input type="submit" data-toggle="modal" role="button"  value="Simpan" class="btn btn-primary">
                        </div>
				    </div>
				</div>
			</form>
			<!-- /simple registration form -->
			
	       {include file="footer.tpl"}