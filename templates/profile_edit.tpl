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



<script type="text/javascript">
  $(document).ready(function(){
    $('#gaji').mask('000.000.000.000.000', {reverse: true});
  });
  
</script>


<script type="text/javascript">
  $(function() {
    $('#tanggal').datepicker({
          changeMonth: true,
          changeYear: true
          });
    $('#tgllahir').datepicker({
          changeMonth: true,
          changeYear: true
          }); 
    $('#tgl_tidakaktif').datepicker({
          changeMonth: true,
          changeYear: true
          }); 
    $('#tgl_kontrak_dari').datepicker({
          changeMonth: true,
          changeYear: true
          });
    $('#tgl_kontrak_sampai').datepicker({
          changeMonth: true,
          changeYear: true
          });
  
  });
    $(function(){
        $("#tanggal").datepicker($.datepicker.regional['id']);
    $("#tgl_lahir").datepicker($.datepicker.regional['id']);
    $("#tgl_tidakaktif").datepicker($.datepicker.regional['id']);
    $("#tgl_kontrak_dari").datepicker($.datepicker.regional['id']);
    $("#tgl_kontrak_sampai").datepicker($.datepicker.regional['id']);
    });
  $(function() {
    $('.month-picker').datepicker( {
        changeMonth: true,
        changeYear: true,
        showButtonPanel: true,
        dateFormat: 'mm/dd/yy',
        onClose: function(dateText, inst) { 
            var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
            var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
            $(this).datepicker('setDate', new Date(year, month, 1));
        }
    });
    //$('.date-picker').datepicker();
    $('.month-picker').focus(function () {
        $('.ui-datepicker-calendar').addClass('hideDates');
    });
});
  </script>
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
				<div class="page-title">
					<h3>Profile<small>Informasi Data Diri</small></h3>
				</div>

				<div id="reportrange" class="range">
					<div class="visible-xs header-element-toggle">
						<a class="btn btn-primary btn-icon"><i class="icon-calendar"></i></a>
					</div>
					<!--<div class="date-range"></div>-->
					<!--<span class="label label-danger">9</span>-->
				</div>
			</div>
			<!-- /page header -->
			<!-- Breadcrumbs line -->
			{include file="breadcrumb.tpl"}
			<!-- /breadcrumbs line -->
			<!-- Table inside panel body -->
			          <h3>Edit Profile</h3>

<div class="tabbable" id="tabs">

        <div class="tab-content">         
        </div>
      </div>


    <div class="tabbable" id="tabs-79220">
                <ul class="nav nav-tabs">
                  <li class="active">
                    <a href="#biodata" data-toggle="tab">Biodata Diri</a>
                  </li>
                  <li>
                    <a href="#pendidikan" data-toggle="tab">Pendidikan</a>
                  </li>
                  <li>
                    <a href="#kursus" data-toggle="tab">Kursus</a>
                  </li>
                  <li>
                    <a href="#keluarga" data-toggle="tab">Keluarga</a>
                  </li>
                  <li>
                    <a href="#organisasi" data-toggle="tab">Organisasi</a>
                  </li>
                  <li>
                    <a href="#pekerjaan" data-toggle="tab">Pekerjaan</a>
                  </li>
                  <li>
                    <a href="#kesehatan" data-toggle="tab">Kesehatan</a>
                  </li>
                   <li>
                    <a href="#penghargaan" data-toggle="tab">Penghargaan</a>
                  </li>
                   <li>
                    <a href="#hukuman" data-toggle="tab">Hukuman</a>
                  </li>
                   <li>
                    <a href="#mcu" data-toggle="tab">MCU</a>
                  </li>
                </ul>
        
        <div class="tab-content">
          <div class="tab-pane active" id="biodata">
			<form action="profile.php?action=update" method=post>
	  <INPUT type="hidden" NAME=nik value="{$nik}">
		  <div style="text-align:right;">
		  <div class="form-actions text-right">
                          <input type="submit" data-toggle="modal" role="button"  value="Update" class="btn btn-success">
                          <INPUT TYPE="BUTTON" VALUE="Back" ONCLICK="history.go(-1)" class="btn btn-primary">
                        </div>
		  <!--<a class="btn btn-mini" href="profile.php?mod=edit" title="Edit"><img src="assets/img/edit.png" ></a>
		  <a class="btn btn-mini" href="profile.php?mod=print" title="View PDF"><img src="assets/img/pdf.png" ></a>-->
		  </div>
		  <div class="row-fluid">
		<div class="block span12">
        <div id="widget1container" class="block-body collapse in">
        <table class="table table-bordered">
		<tr>
		{if $gambar != null}
		  <td rowspan="6" style="width:8%;text-align:left;"><img src="{$gambar}" ><p style="margin-top:5px;text-align:center;"><a href="profile.php?action=uppphoto" class="btn btn-small" >CHANGE PHOTO</a></p></td>
		 {else} 
		 <td rowspan="6" style="width:8%;text-align:left;"><img src="img/no_photo.jpg" ><p style="margin-top:5px;text-align:center;"><a href="profile.php?action=uppphoto" class="btn btn-small" >UPLOAD PHOTO</a></p></td>
		 {/if}
		<td style="width:10%;text-align:left;">NIK</td>
		<td style="width:1%;text-align:center;">:</td>
		<td style="width:30%;text-align:left;">{$nik}</td>
		<td >Jenis Kelamin</td>
		<td >:</td>
		<td > <select name="sex" class="form-control" >
                                                <option value="" selected="selected"> {$sex} </option>
                                                <option value="L" > Pria </option>
                                                <option value="P" > Wanita </option>
                                                </select>
		</tr>
		<tr>
		  <td style="width:10%;text-align:left;">Nama</td>
		<td style="width:1%;text-align:center;">:</td>
		<td><INPUT type=TEXT NAME=name value="{$nama}" class="form-control"></td>
		<td >Agama</td>
		<td >:</td>
		<td ><select name=agama class="form-control">
						<option value=''>Pilih</option>
						{section name=detail loop=$agama_opt}
							<option value="{$agama_opt[detail].id}" {$agama_opt[detail].selected}>{$agama_opt[detail].nama}</option>
						{/section}
						</select></td>
		</tr>
		<tr>
		  <td style="width:10%;text-align:left;">Jabatan</td>
		<td style="width:1%;text-align:center;">:</td>
		<td><select name=jabatan class="form-control">
						<option value=''>Pilih</option>
						{section name=detail loop=$jabatan_opt}
							<option value="{$jabatan_opt[detail].id}" {$jabatan_opt[detail].selected}>{$jabatan_opt[detail].nama}</option>
						{/section}
						</select></td>
		<td >Status Kawin</td>
		<td >:</td>
		<td ><select name=stskawin class="form-control">
						<option value=''>Pilih</option>
						{section name=detail loop=$stskawin_opt}
							<option value="{$stskawin_opt[detail].id}" {$stskawin_opt[detail].selected}>{$stskawin_opt[detail].nama}</option>
						{/section}
						</select></td>
		</tr>
		<tr>
		  <td style="width:10%;text-align:left;">Depatemen</td>
		<td style="width:1%;text-align:center;">:</td>
		<td ><select name=divisi class="form-control">
						<option value=''>Pilih</option>
						{section name=detail loop=$divisi_opt}
							<option value="{$divisi_opt[detail].id}" {$divisi_opt[detail].selected}>{$divisi_opt[detail].nama}</option>
						{/section}
						</select></td>
		<td >Telp Rumah/HP</td>
		<td >:</td>
		<td ><INPUT TYPE=TEXT NAME=telpon_rumah class="form-control" value="{$telp}">&nbsp;<span valign=middle>&nbsp;/&nbsp;</span>&nbsp;<INPUT TYPE=TEXT NAME=hp class="form-control" value="{$hp}"></td>
		</tr>
		<tr>
		  <td style="width:10%;text-align:left;">Pendidikan</td>
		<td style="width:1%;text-align:center;">:</td>
		<td><select name=pendidikan class="form-control">
						<option value=''>Pilih</option>
						{section name=detail loop=$penddarat_opt}
							<option value="{$penddarat_opt[detail].id}" {$penddarat_opt[detail].selected}>{$penddarat_opt[detail].nama}</option>
						{/section}
						</select></td>
		<td>No KTP</td>
		<td>:</td>
		<td><INPUT TYPE=TEXT NAME=ktp value="{$ktp}" class="form-control"></td>
		</tr>
		<tr>
		  <td style="width:10%;text-align:left;">Tempat Lahir</td>
		<td style="width:1%;text-align:center;">:</td>
		<td><INPUT TYPE=TEXT NAME=tempat value="{$tempat}" class="form-control"></td>
		<td style="width:12%;text-align:left;">Tanggal Lahir</td>
		<td style="width:1%;text-align:center;">:</td>
		<td><INPUT class="form-control" TYPE=TEXT NAME=tgllahir id="tgllahir" value="{$tanggal}"><span valign=middle>&nbsp;dd/mm/yyyy</span></td>
		</tr>
		<tr>
		  <td rowspan="3" style="width:12%;text-align:left;">&nbsp;</td>
		  <td style="width:10%;text-align:left;">Alamat KTP</td>
		  <td style="width:1%;text-align:center;">:</td>
		  <td><TEXTAREA NAME="alamatktp" cols=30 rows=3 class="form-control">{$alamatktp}</TEXTAREA></td>
		  <td style="width:12%;text-align:left;">Alamat Sementara</td>
		  <td style="width:1%;text-align:center;">:</td>
		  <td><TEXTAREA NAME="alamatsmr" cols=30 rows=3 class="form-control">{$alamatsmr}</TEXTAREA></td>
		</tr>
		<tr>
		<td style="width:10%;text-align:left;">Nama Bank</td>
		<td style="width:1%;text-align:center;">:</td>
		<td><INPUT TYPE=TEXT NAME=bank value="{$bank}" class="form-control"></td>
		<td style="width:12%;text-align:left;">No Rekening</td>
		<td style="width:1%;text-align:center;">:</td>
		<td><INPUT TYPE=TEXT NAME=norek value="{$norek}" class="form-control"></td>
		</tr>
		<tr>
		  <td style="width:10%;text-align:left;">Email</td>
		<td style="width:1%;text-align:center;">:</td>
		<td><INPUT TYPE=TEXT NAME=email value="{$email}" class="form-control"></td>
		<td style="width:12%;text-align:left;">No NPWP</td>
		<td style="width:1%;text-align:center;">:</td>
		<td><INPUT TYPE=TEXT NAME=npwp value="{$npwp}" class="form-control"></td>
		</tr>
		</table>
		
		</div>
    </div>
	</div>
<div class="info-buttons block row">
     <div class="col-sm-2">
	{if $pathktp != "kosong" and $pathktp != "Null" and $pathktp != ""}
	<a href="{$pathktp}" title="View Document"><i class="icon-disk"></i>
	<a href="profile.php?action=upktp" title="Upload KTP"><i class="icon-upload4"></i>
	{else}
	<a href="profile.php?action=upktp" title="Upload KTP"><i class="icon-upload4"></i>
	{/if}
	  <span> KTP </span>           
          </a></a></a></div>	

	<div class="col-sm-2">
  	{if $pathnpwp != "kosong" and $pathnpwp != "Null" and $pathnpwp != ""}
	<a href="{$pathnpwp}" title="View Document"><i class="icon-disk"></i>
	<a href="profile.php?action=upnpwp" title="Upload NPWP"><i class="icon-upload4"></i>
	{else}
	<a href="profile.php?action=upnpwp" title="Upload NPWP"><i class="icon-upload4"></i>
	{/if}
    				    <span>NPWP</span>
                 </a></a></a></div>

	<div class="col-sm-2">
	{if $pathbpjs != "kosong" and $pathbpjs != "Null" and $pathbpjs != ""}
	<a href="{$pathbpjs}" title="View Document"><i class="icon-disk"></i>
	<a href="profile.php?action=upbpjs" title="Upload BPJS NAKER"><i class="icon-upload4"></i>
	{else}
	<a href="profile.php?action=upbpjs" title="Upload BPJS NAKER"><i class="icon-upload4"></i>
	{/if}
	  <span>BPJS NAKER</span>
       </a></a></a></div>
						 
    				
   	<div class="col-sm-2">
	{if $pathbpjssehat != "kosong" and $pathbpjssehat != "Null" and $pathbpjssehat != ""}
  	<a href="{$pathbpjssehat}" title="View Document"><i class="icon-disk"></i>
	<a href="profile.php?action=upbpjssehat" title="Upload BPJS SEHAT"><i class="icon-upload4"></i>
	{else}
	<a href="profile.php?action=upbpjssehat" title="Upload BPJS SEHAT"><i class="icon-upload4"></i>
	{/if}
						 <span>BPJS SEHAT</span>
         </a></a></a></div>

	<div class="col-sm-2">
	{if $pathnikah != "kosong" and $pathnikah != "Null" and $pathnikah != ""}
  	<a href="{$pathnikah}" title="View Document"><i class="icon-disk"></i>
	<a href="profile.php?action=upbukunikah" title="Upload Buku Nikah"><i class="icon-upload4"></i>
	{else}
	<a href="profile.php?action=upbukunikah" title="Upload Buku Nikah"><i class="icon-upload4"></i>
	{/if}						 
    				      <span>Buku Nikah</span>
            </a></a></a></div>
	<div class="col-sm-2">
	{if $pathkk != "kosong" and $pathkk != "Null" and $pathkk != ""}
  	<div class="thumbnail"><a href="{$pathkk}" title="View Document"><i class="icon-disk"></i>
	<a href="profile.php?action=upkk" title="Upload Kartu Keluarga"><i class="icon-upload4"></i>
	{else}
	<div class="thumbnail"><a href="profile.php?action=upkk" title="Upload Kartu Keluarga"><i class="icon-upload4"></i>
	{/if}
						  <span>Kartu Keluarga</span>
          </a></a></a></div>
</div></div>
<hr>

</a>
</a>
</div>
<div class="tab-pane active" id="pendidikan">
<p style="text-align:left;">
    <a href="propendidikan.php?action=add" class="btn btn-primary btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>
         </p>
 <div class="panel panel-primary">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Pendidikan</h6></div>
                      <table id="example" class="table table-striped table-bordered table-hover" style="width:100%;">
          <thead>
            <TR>
              <th style="width:3%;text-align:center;">No</th>
              <th style="width:30%;text-align:center;">Sekolah/Universitas</th>
              <th style="width:20%;text-align:center;">Jurusan</th>
              <th style="width:7%;text-align:center;">IPK</th>
              <th style="width:7%;text-align:center;">Gelar</th>
              <th style="width:10%;text-align:center;">Tempat</th>
              <th style="width:20%;text-align:center;">OPTION</th>
      
            </TR>
          </thead>
          {section name=detail loop=$pendidikan_list}
          <TR>
              <TD VALIGN=TOP align=center>{$pendidikan_list[detail].no}</TD>
              <TD VALIGN=TOP>{$pendidikan_list[detail].sekolah}</TD>
              <TD VALIGN=TOP>{$pendidikan_list[detail].jurusan}</TD>
              <TD VALIGN=TOP align=center>{$pendidikan_list[detail].ipk}</TD>
              <TD VALIGN=TOP align=center>{$pendidikan_list[detail].gelar}</TD>
              <TD VALIGN=TOP align=center>{$pendidikan_list[detail].tempat}</TD>
              <TD align=center>
                  <a title='Edit' href="propendidikan.php?action=edit&id={$pendidikan_list[detail].id}">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='propendidikan.php?action=edit&id={$pendidikan_list[detail].id}'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    {/section}
</TABLE>
</div>
</div>

<div class="tab-pane active" id="kursus">            
   <p style="text-align:left;">
    <a href="prokursus.php?action=add" class="btn btn-primary btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>
         </p>
 <div class="panel panel-primary">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Kursus</h6></div>
                      <table id="example" class="table table-striped table-bordered table-hover" style="width:100%;">
          <thead>
            <TR>
              <th style="width:3%;text-align:center;">No</th>
              <th style="width:10%;text-align:center;">Kursus</th>
              <th style="width:30%;text-align:center;">Instansi</th>
              <th style="width:20%;text-align:center;">Kota</th>
              <th style="width:7%;text-align:center;">Tahun</th>
              <th style="width:7%;text-align:center;">Sertifikat</th>
              <th style="width:10%;text-align:center;">No. Sertifikat</th>
              <th style="width:10%;text-align:center;">Keterangan</th>
              <th style="width:20%;text-align:center;">OPTION</th>
      
            </TR>
          </thead>
          {section name=detail loop=$kursus_list}
          <TR>
              <TD VALIGN=TOP align=center>{$kursus_list[detail].no}</TD>
              <TD VALIGN=TOP >{$kursus_list[detail].kursus}</TD>
              <TD VALIGN=TOP>{$kursus_list[detail].instansi}</TD>
              <TD VALIGN=TOP align=center>{$kursus_list[detail].kota}</TD>
              <TD VALIGN=TOP align=center>{$kursus_list[detail].tahun}</TD>
              <TD VALIGN=TOP align=center>{$kursus_list[detail].sertifikat}</TD>
              <TD VALIGN=TOP align=center>{$kursus_list[detail].no_sertifikat}</TD>
              <TD VALIGN=TOP align=center>{$kursus_list[detail].ket}</TD>
              <TD align=center>
                  <a title='Edit' href="prokursus.php?action=edit&id={$kursus_list[detail].id}">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='prokursus.php?action=del&id={$kursus_list[detail].id}'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    {/section}
    </table>
    </div>
    </div>

<div class="tab-pane active" id="keluarga">            
<p style="text-align:left;">
    <a href="prokeluarga.php?action=add" class="btn btn-primary btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>
         </p>
 <div class="panel panel-primary">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Keluarga</h6></div>
                      <table id="example" class="table table-striped table-bordered table-hover" style="width:100%;">
          <thead>
            <TR>
              <th style="width:3%;text-align:center;">No</th>
              <th style="width:20%;text-align:center;">Tanggal Lahir</th>
              <th style="width:20%;text-align:center;">Nama Anggota Keluarga</th>
              <th style="width:20%;text-align:center;">Status Anggota Keluarga</th>
              <th style="width:20%;text-align:center;">OPTION</th>      
            </TR>
          </thead>
          {section name=detail loop=$keluarga_list}
          <TR>
                  <TD VALIGN=TOP align=center>{$keluarga_list[detail].no}</TD>
                  <TD VALIGN=TOP align=CENTER>{$keluarga_list[detail].tgl_lahir}</TD>
                  <TD VALIGN=TOP align=LEFT>{$keluarga_list[detail].nama}</TD>
                  <TD VALIGN=TOP align=CENTER>{$keluarga_list[detail].status}</TD>
              <TD align=center>
                  <a title='Edit' href="prokeluarga.php?action=edit&id={$keluarga_list[detail].id}">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='prokeluarga.php?action=del&id={$keluarga_list[detail].id}'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    {/section}

</table>
</div>
</div>

<div class="tab-pane active" id="organisasi">
<p style="text-align:left;">
    <a href="proorganisasi.php?action=add" class="btn btn-primary btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>
         </p>
 <div class="panel panel-primary">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Organisasi</h6></div>
                      <table id="example" class="table table-striped table-bordered table-hover" style="width:100%;">
          <thead>
            <TR>
              <th style="width:3%;text-align:center;">No</th>
              <th style="width:20%;text-align:center;">Nama Organisasi</th>
              <th style="width:20%;text-align:center;">Jabatan</th>
              <th style="width:10%;text-align:center;">Tahun</th>  
              <th style="width:20%;text-align:center;">OPTION</th>   
            </TR>
          </thead>
          {section name=detail loop=$organisasi_list}
          <TR>
              <TD VALIGN=TOP align=center>{$organisasi_list[detail].no}</TD>
              <TD VALIGN=TOP >{$organisasi_list[detail].organisasi}</TD>
              <TD VALIGN=TOP>{$organisasi_list[detail].jabatan}</TD>
              <TD VALIGN=TOP>{$organisasi_list[detail].tahun}</TD>
              <TD align=center>
                  <a title='Edit' href="proorganisasi.php?action=edit&id={$organisasi_list[detail].id}">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='proorganisasi.php?action=del&id={$organisasi_list[detail].id}'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    {/section}

</table>
</div>
</div>


<div class="tab-pane active" id="pekerjaan">
<p style="text-align:left;">
    <a href="propengalaman.php?action=add" class="btn btn-primary btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>
         </p>
 <div class="panel panel-primary">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Pekerjaan</h6></div>
                      <table id="example" class="table table-striped table-bordered table-hover" style="width:100%;">
          <thead>
            <TR>
              <th style="width:3%;text-align:center;">No</th>
              <th style="width:15%;text-align:center;">Perusahaan</th>
              <th style="width:10%;text-align:center;">Jabatan</th>
              <th style="width:20%;text-align:center;">Deskripsi Pekerjaan</th>
              <th style="width:15%;text-align:center;">Alamat</th>
              <th style="width:7%;text-align:center;">Tanggal Mulai</th>
              <th style="width:10%;text-align:center;">Tanggal Akhir</th>
              <th style="width:20%;text-align:center;">OPTION</th>
      
            </TR>
          </thead>
          {section name=detail loop=$pekerjaan_list}
          <TR>
              <TD VALIGN=TOP align=center>{$pekerjaan_list[detail].no}</TD>
              <TD VALIGN=TOP >{$pekerjaan_list[detail].perusahaan}</TD>
              <TD VALIGN=TOP>{$pekerjaan_list[detail].jabatan}</TD>
              <TD VALIGN=TOP>{$pekerjaan_list[detail].deskripsi}</TD>
              <TD VALIGN=TOP>{$pekerjaan_list[detail].alamat}</TD>
              <TD VALIGN=TOP align=center>{$pekerjaan_list[detail].tgl_mulai}</TD>
              <TD VALIGN=TOP align=center>{$pekerjaan_list[detail].tgl_akhir}</TD>
              <TD align=center>
                  <a title='Edit' href="propengalaman.php?action=edit&id={$pekerjaan_list[detail].id}">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='propengalaman.php?action=del&id={$pekerjaan_list[detail].id}'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    {/section}

</table>
</div>
</div>

<div class="tab-pane active" id="kesehatan">
<p style="text-align:left;">
    <a href="prokesehatan.php?action=add" class="btn btn-primary btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>
         </p>
 <div class="panel panel-primary">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Kesehatan</h6></div>
                      <table id="example" class="table table-striped table-bordered table-hover" style="width:100%;">
          <thead>
            <TR>
                  <TH style="width:3%;text-align:center;">No</th>
                  <TH style="width:20%;text-align:center;">Penyakit</TH>
                  <TH style="width:6%;text-align:center;">Tahun Sakit</TH>
                  <TH style="width:15%;text-align:center;">Keterangan</TH>
                  <TH style="width:15%;text-align:center;">OPTION</TH>
            </TR>
          </thead>
          {section name=detail loop=$kesehatan_list}
          <TR>
                      <TD VALIGN=TOP align=center>{$kesehatan_list[detail].no}</TD>
                      <TD VALIGN=TOP align=LEFT>{$kesehatan_list[detail].penyakit}</TD>
                      <TD VALIGN=TOP align=CENTER>{$kesehatan_list[detail].tahun}</TD>
                      <TD VALIGN=TOP align=LEFT>{$kesehatan_list[detail].ket}</TD>
              <TD align=center>
                  <a title='Edit' href="prokesehatan.php?action=edit&id={$kesehatan_list[detail].id}">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='prokesehatan.php?action=del&id={$kesehatan_list[detail].id}'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    {/section}

</table>
</div>
</div>

<div class="tab-pane active" id="penghargaan">
<p style="text-align:left;">
    <a href="propenghargaan.php?action=add" class="btn btn-primary btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>
         </p>
 <div class="panel panel-primary">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Penghargaan</h6></div>
                      <table id="example" class="table table-striped table-bordered table-hover" style="width:100%;">
          <thead>
            <TR>
                  <TH style="width:3%;text-align:center;">No</TH>
                  <TH style="width:15%;text-align:center;">Penghargaan</TH>
                  <TH style="width:15%;text-align:center;">Pemberi Penghargaan</TH>
                  <TH style="width:15%;text-align:center;">Tanggal Pemberian</TH>
                  <TH style="width:15%;text-align:center;">Keterangan</TH>
                  <TH style="width:15%;text-align:center;">OPTION</TH>
            </TR>
          </thead>
          {section name=detail loop=$penghargaan_list}
          <TR>
                 <TD VALIGN=TOP align=center>{$penghargaan_list[detail].no}</TD>
                 <TD VALIGN=TOP align=LEFT>{$penghargaan_list[detail].penghargaan}</TD>
                 <TD VALIGN=TOP align=LEFT>{$penghargaan_list[detail].pemberi_penghargaan}</TD>
                 <TD VALIGN=TOP align=CENTER>{$penghargaan_list[detail].tgl_penghargaan}</TD>
                 <TD VALIGN=TOP align=LEFT>{$penghargaan_list[detail].ket}</TD>
              <TD align=center>
                  <a title='Edit' href="propenghargaan.php?action=edit&id={$penghargaan_list[detail].id}">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='propenghargaan.php?action=del&id={$penghargaan_list[detail].id}'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    {/section}

</table>
</div>
</div>

<div class="tab-pane active" id="hukuman">
<p style="text-align:left;">
    <a href="prohukuman.php?action=add" class="btn btn-primary btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>
         </p>
 <div class="panel panel-primary">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Hukuman</h6></div>
                      <table id="example" class="table table-striped table-bordered table-hover" style="width:100%;">
          <thead>
            <TR>
              <TH ALIGN=CENTER width=4%>No</TH>
              <TH ALIGN=CENTER width=10%>Hukuman</TH>
              <TH ALIGN=CENTER width=15%>Pemberi Hukuman</TH>
              <TH ALIGN=CENTER width=10%>Tanggal Hukuman</TH>
              <TH ALIGN=CENTER width=10%>No Surat/SK</TH>
              <TH ALIGN=CENTER width=10%>Keterangan</TH>
              <TH ALIGN=CENTER width=10%>OPTION</TH>
            </TR>
          </thead>
          {section name=detail loop=$hukuman_list}
          <TR>
              <TD VALIGN=TOP align=center>{$hukuman_list[detail].no}</TD>
              <TD VALIGN=TOP align=CENTER>{$hukuman_list[detail].hukuman}</TD>
              <TD VALIGN=TOP align=LEFT>{$hukuman_list[detail].pemberi_hukuman}</TD>
              <TD VALIGN=TOP align=CENTER>{$hukuman_list[detail].tgl_sanksi}</TD>
              <TD VALIGN=TOP align=CENTER>{$hukuman_list[detail].no_sanksi}</TD>
              <TD VALIGN=TOP align=LEFT>{$hukuman_list[detail].ket}</TD>
              <TD align=center>
                  <a title='Edit' href="prohukuman.php?action=edit&id={$hukuman_list[detail].id}">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='prohukuman.php?action=del&id={$hukuman_list[detail].id}'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    {/section}

</table>
</div>
</div>

<div class="tab-pane active" id="mcu">
<p style="text-align:left;">
    <a href="promcu.php?action=add" class="btn btn-primary btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>
         </p>
 <div class="panel panel-primary">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel MCU</h6></div>
                      <table id="example" class="table table-striped table-bordered table-hover" style="width:100%;">
          <thead>
            <TR>
                <TH ALIGN=CENTER width=4%>No</TH>
                <TH ALIGN=CENTER width=10%>Tanggal Pemeriksaan</TH>
                <TH ALIGN=CENTER width=10%>Hasil Pemeriksaan</TH>
                <TH ALIGN=CENTER width=10%>Tenaga Medis</TH>
                <TH ALIGN=CENTER width=15%>Catatan Kesehatan</TH>
                <TH ALIGN=CENTER width=10%>Tanggal dari</TH>
                <TH ALIGN=CENTER width=10%>Tanggal sampai</TH>
                <TH ALIGN=CENTER width=10%>OPTION</TH>
            </TR>
          </thead>
          {section name=detail loop=$mcu_list}
          <TR>
              <TD VALIGN=TOP align=center>{$mcu_list[detail].no}</TD>
              <TD VALIGN=TOP align=CENTER>{$mcu_list[detail].tgl_pemeriksaan}</TD>
              <TD VALIGN=TOP align=LEFT>{$mcu_list[detail].hasil}</TD>
              <TD VALIGN=TOP align=LEFT>{$mcu_list[detail].tenaga}</TD>
              <TD VALIGN=TOP align=LEFT>{$mcu_list[detail].catatan}</TD>
              <TD VALIGN=TOP align=CENTER>{$mcu_list[detail].tgl_dari}</TD>
              <TD VALIGN=TOP align=CENTER>{$mcu_list[detail].tgl_sampai}</TD>
              <TD align=center>
                  <a title='Edit' href="promcu.php?action=edit&id={$mcu_list[detail].id}">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='promcu.php?action=del&id={$mcu_list[detail].id}'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    {/section}
	</tbody></table>
</div>
          </div>

        </div> </div>

      </form>

<a href="#" class="back-to-top">Back to Top</a>

       
  <script src="js/jquery.dataTables.js" type="text/javascript"></script>
  <script language="javascript" type="text/javascript">  
  $(document).ready(function() {
    $('#example').dataTable( {
      "pagingType": "full_numbers"
    } );
  } );
  </script>
      <script>
$(document).ready(function () {
  //called when key is pressed in textbox
  $("#hp").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
$("#gaji").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });

});

        </script>
      
         {include file="footer.tpl"}


