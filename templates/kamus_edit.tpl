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
					<h3>Edit Kamus Kompetensi<small>Informasi Kamus Kompetensi</small></h3>
				</div>
			</div>	
			
				<!-- Simple registration form -->
			<form class="" action="?action=update" method="POST" ENCTYPE="multipart/form-data">
			<input type="hidden" name="id" value="{$id}">
			    <div class="panel panel-default">
	                <div class="panel-body">
	                	<div class="row">
	                		<div class="col-md-10">
	                			<div class="form-group">
									<label>Kode Kompetensi :</label>
                                    <input type="text" name="kode" placeholder="Kode Kompetensi" class="form-control" value="{$kode}" required>
	                			</div>
	                		</div>
							<div class="col-md-10">
	                			<div class="form-group">
									<label>Nama Kompetensi :</label>
                                    <input type="text" name="kompetensi" placeholder="Nama Kompetensi" class="form-control" value="{$kompetensi}" required>
	                			</div>
	                		</div>
	                		<div class="col-md-10">
	                			<div class="form-group">
									<label>Jenis Kompetensi :</label>
                                     <select name="jenis" class="form-control" >
                                                <option value="" selected="selected"> --Pilih-- </option>
                                                <option value="Dasar" > Dasar </option>
                                                <option value="Umum" > Umum </option>
                                                <option value="Spesifik" > Spesifik </option>
                                                </select>
	                			</div>
	                		</div>
	                		<div class="col-md-12">
	                			<div class="form-group">
									<label>Defenisi Kompetensi :</label>
                                    <input type="text" name="definisikompetensi" placeholder="Defenisi Kompetensi" class="form-control"  value="{$definisikompetensi}" required>
	                			</div>
	                		</div>
	                		
	                		<div class="col-md-12">
	                			<div class="form-group">
									<label>Pertanyaan ybs :</label>
                                    <input type="text" name="question_ybs" placeholder="Pertanyaan Yang Bersangkutan" class="form-control" value="{$question_ybs}">
	                			</div>
	                		</div>
	                		<div class="col-md-12">
	                			<div class="form-group">
									<label>Pertanyaan noybs :</label>
                                    <input type="text" name="question_noybs" placeholder="Pertanyaan Yang Bersangkutan" class="form-control" value="{$question_noybs}">
	                			</div>
	                		</div>
	                		
	                			<div class="col-md-12">
	                			<div class="form-group">
									<label>Pertanyaan ke-2 ybs :</label>
                                    <input type="text" name="question2_ybs" placeholder="Pertanyaan Yang Bersangkutan" class="form-control"  value="{$question2_ybs}">
	                			</div>
	                		</div>
	                		<div class="col-md-12">
	                			<div class="form-group">
									<label>Pertanyaan ke-2 noybs :</label>
                                    <input type="text" name="question2_noybs" placeholder="Pertanyaan Yang Bersangkutan" class="form-control"  value="{$question2_noybs}">
	                			</div>
	                		</div>

	                		<div class="col-md-12">
	                			<div class="form-group">
									<label>Pertanyaan ke-3 ybs :</label>
                                    <input type="text" name="question3_ybs" placeholder="Pertanyaan Yang Bersangkutan" class="form-control" value="{$question3_ybs}" >
	                			</div>
	                		</div>
	                		<div class="col-md-12">
	                			<div class="form-group">
									<label>Pertanyaan ke-3 noybs :</label>
                                    <input type="text" name="question3_noybs" placeholder="Pertanyaan Yang Bersangkutan" class="form-control" value="{$question3_noybs}">
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