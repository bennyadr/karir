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
					<h3>Add Matrik Kompetensi<small>Informasi Matrik Kompetensi</small></h3>
				</div>
			</div>	
			
				<!-- Simple registration form -->
			<form class="" action="?action=save" method="POST" ENCTYPE="multipart/form-data">
			<input type="hidden" name="id" value="{$id}">
			    <div class="panel panel-default">
	                <div class="panel-body">
	                	<div class="row">
	                		<div class="col-md-6">
	                			<div class="form-group">
									<label>Nama Kelompok  :</label>
                                    <input type="text" name="Nama_KelompokTingkatJbt" placeholder="Nama Kelompok" class="form-control" value="{$Nama_KelompokTingkatJbt}" required>
	                			</div>
	                		</div>

	                		<div class="col-md-6">
	                			<div class="form-group">
									<label>Kelompok Jabatan :</label>
                                     <select name=kelompokjbt class="form-control">
                                <option value=''>--Pilih--</option>
                                {section name=detail loop=$kelompokjbt_opt}
                                <option value="{$kelompokjbt_opt[detail].id}" {$kelompokjbt_opt[detail].selected}>{$kelompokjbt_opt[detail].nama}</option>
                                {/section}
                                </select>
	                			</div>
	                		</div>

	                		<div class="col-md-6">
	                			<div class="form-group">
									<label>Tingkat Jabatan :</label>
                                     <select name=tingkatjbt class="form-control">
                                <option value=''>--Pilih--</option>
                                {section name=detail loop=$tingkatjbt_opt}
                                <option value="{$tingkatjbt_opt[detail].id}" {$tingkatjbt_opt[detail].selected}>{$tingkatjbt_opt[detail].nama}</option>
                                {/section}
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