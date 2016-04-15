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
			<form name="myForm" class="" action="propendidikan.php?action=update" method="POST" ENCTYPE="multipart/form-data">
    <input type="hidden" name="id" value="{$id}">
        <input type="hidden" name="idpeg" value="{$idpeg}">
			    <div class="panel panel-default">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-menu"></i>Edit Data Pendidikan</h6></div>
                  <div class="panel-body">
	                	<div class="row">
	                		<div class="col-md-6">
	                			<div class="form-group">
	                			<table width="1000">
	                				
                          <tr>
                            <td width="200"> <label>Pendidikan :</label> </td>
                            <td><select name=tingkat class="form-control">
                                <option value="{$tingkat_opt[detail].nama}" selected="selected">Pilih</option>
                                {section name=detail loop=$tingkat_opt}
                                <option value="{$tingkat_opt[detail].nama}" {$tingkat_opt[detail].selected}>{$tingkat_opt[detail].nama}</option>
                                  {/section}
                                </select>
                               <br /> </td>
                                        <td><br /></td>
                          </tr>

                          <tr>
                          <td width="200"> <label>Sekolah/Universitas :</label> </td>
                            <td><input type="text" name="sekolah" placeholder="Sekolah/Universitas" class="form-control" value="{$sekolah}"><br /> </td>
                            </tr>

                             <tr>
                             <td width="200"> <label>Tahun Masuk :</label> </td>
                            <td><input type="text" NAME="tahun_awal" id="thn_awal" placeholder="yyyy" class="form-control" value="{$tahun_awal}"> <br/></td>
                            <td width="50" align="center">s/d <br /></td>
                            <td width="200"><input type="text" NAME="tahun_akhir" id="thn_akhir" placeholder="yyyy" class="form-control" value="{$tahun_akhir}"><br /> </td>
                             </tr>

                            <tr>
                          <td width="200"> <label>Tempat :</label> </td>
                            <td><input type="text" name="tempat" placeholder="Tempat" class="form-control" value="{$tempat}"><br /> </td>
                            </tr>

                            <tr>
                          <td width="200"> <label>Jurusan :</label> </td>
                            <td><input type="text" name="jurusan" placeholder="Jurusan" class="form-control" value="{$jurusan}"><br /> </td>
                            </tr>
                             <tr>
                          <td width="200"> <label>Gelar :</label> </td>
                            <td><input type="text" name="gelar" placeholder="Gelar" class="form-control" value="{$gelar}"><br /> </td>
                            </tr>
                            <tr>
                          <td width="200"> <label>IPK/Nilai :</label> </td>
                            <td><input type="text" name="ipk" placeholder="IPK/Nilai" class="form-control" value="{$ipk}"><br /> </td>
                            </tr>
                            <tr>
                          <td width="200"> <label>Keterangan :</label> </td>
                            <td><input type="text" name="ket" placeholder="Keterangan" class="form-control" value="{$ket}"><br /> </td>
                            </tr>
                        </table>
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
                  {include file="footer.tpl"}