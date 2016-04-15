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
			<form name="myForm" class="" action="?action=PendidikanAddProses" method="POST" ENCTYPE="multipart/form-data">
      <input type="hidden" name="kode" value="{$kode}">
      <input type="hidden" name="nik" value="{$nik}">
			    <div class="panel panel-default">
            <div class="panel-heading"><h6 class="panel-title"><i class="icon-menu"></i>Add Data Pendidikan</h6></div>
                  <div class="panel-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
	                			<label>Pendidikan :</label>
                        <div>
                            <select name=tingkat class="form-control">
                                <option value=''>Pilih</option>
                                {section name=detail loop=$tingkat_opt}
                                <option value="{$tingkat_opt[detail].nama}" {$tingkat_opt[detail].selected}>{$tingkat_opt[detail].nama}</option>
                                  {/section}
                                  </select>
                                  </div>


                          <div class="form-group">
                          <label>Sekolah/Universitas :</label>
                            <input type="text" name="sekolah" placeholder="Sekolah/Universitas" class="form-control" >
                            </div>


                        <div class="form-group">
                            <div class="row">
                              <div class="col-xs-6"> 
                          <label>Tahun Masuk :</label>
                             <input type="text" NAME="tahun_awal" id="tahun_awal" placeholder="Mulai (yyyy)" class="form-control" > </div>
                            <div class="col-xs-6">
                            <label></label>
                            <input type="text" NAME="tahun_akhir" id="tahun_akhir" placeholder="Sampai (yyyy)" class="form-control" ></div>
                                              </div>
                                            </div>
                

                           <div class="form-group">
                           <label>Tempat :</label> 
                            <input type="text" name="tempat" placeholder="Tempat" class="form-control" >
                            </div>
                            </div>
                            </div>


                            <div class="col-md-6">
                             <div class="form-group">
                           <label>Jurusan :</label>
                           <input type="text" name="jurusan" placeholder="Jurusan" class="form-control" >
                           </div>


                           <div class="form-group">
                           <label>Gelar :</label>
                           <input type="text" name="gelar" placeholder="Gelar" class="form-control" >
                           </div>



                           <div class="form-group">
                           <label>IPK/Nilai :</label>
                            <input type="text" name="ipk" placeholder="IPK/Nilai" class="form-control" >
                            </div>

                            <div class="form-group">
                           <label>Keterangan :</label>
                          <input type="text" name="ket" placeholder="Keterangan" class="form-control" >
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
                  {include file="footer.tpl"}