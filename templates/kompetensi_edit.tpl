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
					<h3>Add Kompetensi Jabatan<small>Informasi Kompetensi Jabatan</small></h3>
				</div>
			</div>	
			
				<!-- Simple registration form -->
			<form class="" action="?action=update" method="POST" ENCTYPE="multipart/form-data">
			<input type="hidden" name="id" value="{$id}">
			    <div class="panel panel-default">
	                <div class="panel-body">
	                	<div class="row">
	                 		<div class="col-md-8">
	                			<div class="form-group">
									<label>Nama Matriks Kompetensi :</label>
                                     <select name="kelompoktingkatjbt" class="form-control">
                                <option value=''>--Pilih--</option>
                                {section name=detail loop=$kelompoktingkatjbt_opt}
                                <option value="{$kelompoktingkatjbt_opt[detail].id}" {$kelompoktingkatjbt_opt[detail].selected}>{$kelompoktingkatjbt_opt[detail].nama}</option>
                                {/section}
                                </select>
	                			</div>
	                		</div>
	                		<div class="col-md-8">
	                			<div class="form-group">
									<label>Kompetensi Jabatan :</label>
                                     <select name=kompetensi class="form-control">
                                <option value=''>--Pilih--</option>
                                {section name=detail loop=$kompetensi_opt}
                                <option value="{$kompetensi_opt[detail].id}" {$kompetensi_opt[detail].selected}>{$kompetensi_opt[detail].nama}</option>
                                {/section}
                                </select>
	                			</div>
	                		</div>
	                		<div class="col-md-8">
	                			<div class="form-group">
									<label>Level  :</label>
                                    <input type="number" name="level" placeholder="Level" class="form-control" value="{$level}" required>
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