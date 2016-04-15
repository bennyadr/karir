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
    $('#tglahir2').datepicker({
          changeMonth: true,
          changeYear: true
          });
    $('#tgl_masuk').datepicker({
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
        $("#tglahir2").datepicker($.datepicker.regional['id']);
    $("#tgl_masuk").datepicker($.datepicker.regional['id']);
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
      <br />
				<div class="page-title">
				</div>
			</div>	

      <div class="form-actions text-left">

                          			
				<!-- Simple registration form -->
			<form name="myForm" class="" action="?action=update" method="POST" ENCTYPE="multipart/form-data">
      <input type="hidden" name="id" value="{$id}">
			    <div class="panel panel-default">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-menu"></i>Update Data Pegawai</h6></div>
   <div class="panel-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>NIK :</label>
                <input type="text" name="nik" placeholder="NIK" class="form-control" value="{$nik}" >
              </div>

              <div class="form-group">
                <label>Nama Lengkap :</label> 
                <input type="text" name="name" placeholder="Nama Lengkap" class="form-control" value="{$name}" >
              </div>
                        
              <div class="form-group">
                <label>Jabatan :</label> </td>
                <select name="jabatan" class="form-control" >
                <option value='{$jabatan_opt[detail].id}' selected="selected">--Pilih--</option>
                {section name=detail loop=$jabatan_opt}
                <option value="{$jabatan_opt[detail].id}" {$jabatan_opt[detail].selected}>{$jabatan_opt[detail].nama}</option>
                {/section}
                </select>
              </div>

               <div class="form-group">
                  <label>Departemen :</label>
                  <select name=divisi class="form-control" required>
                  <option value='{$divisi_opt[detail].id}' selected="selected">--Pilih--</option>
                  {section name=detail loop=$divisi_opt}
                  <option value="{$divisi_opt[detail].id}" {$divisi_opt[detail].selected}>{$divisi_opt[detail].nama}</option>
                   {/section}
                  </select>
              </div>
              <div class="form-group">
                            <div class="row">
                              <div class="col-xs-6"> 
                            <label>Pendidikan :</label> </td>
                            <select name=pend_darat class="form-control">
                              <option value='{$penddarat_opt[detail].selected}' selected="selected">--Pilih--</option>
                              {section name=detail loop=$penddarat_opt}
                              <option value="{$penddarat_opt[detail].id}" {$penddarat_opt[detail].selected}>{$penddarat_opt[detail].nama}</option>
                              {/section}
                                </select>
                                </div>
                                 <div class="col-xs-6">
                                  <label>Jenis Kelamin :</label> 
                            <select name="sex" class="form-control" >
                                                <option value="" selected="selected"> --Pilih-- </option>
                                                <option value="L" > Pria </option>
                                                <option value="P" > Wanita </option>
                                                </select>
                                                </div>
                                              </div>
                                            </div>

                      <div class="form-group">
                            <div class="row">
                              <div class="col-xs-6"> 
                            <label>Tempat Lahir :</label>
                            <input type="text" name="tlahir" placeholder="Tempat Lahir" class="form-control" value="{$tlahir}" >
                          </div>
                            <div class="col-xs-6">
                              <label>Tanggal Lahir :</label>
                                <input type="text" name="tglahir2" class="form-control input-sm" id="tglahir2" placeholder="dd/mm/yyyy" >
                                    </div>
                                    </div>
                                    </div>

                            <div class="form-group">
                              <label>Agama :</label>
                            <select name=agama class="form-control">
                                <option value=''>--Pilih--</option>
                                {section name=detail loop=$agama_opt}
                                <option value="{$agama_opt[detail].id}" {$agama_opt[detail].selected}>{$agama_opt[detail].nama}</option>
                                {/section}
                                </select>
                                 </div>
                                 <div class="form-group">
                                 <label>Nama Bank :</label>
                                    <input type="text" name="bank" placeholder="Nama Bank" class="form-control" >
                                 </div>
                                  <div class="form-group">
                           <label>No Rekening :</label>
                            <input type="text" name="no_rek" placeholder="No Rekening" class="form-control" value="{$no_rek}" >
                            </div>
                          
                          <div class="form-group">
                          <label>Gaji Pokok :</label>
                          <input type="text" id="gaji" name="gaji" placeholder="Gaji Pokok" class="form-control" value="{$gaji}">
                          </div>
                      <div class="form-group"><label>NPWP :</label>
                            <input type="text" name="npwp" placeholder="NPWP" class="form-control" value="{$npwp}">
                              </div>
                              <div class="form-group">
                         <label>Biaya Asuransi:</label>
                            <input type="text" name="by_asuransi" placeholder="Biaya Asuransi" class="form-control" value="{$by_asuransi}">
                          </div>

                          <div class="form-group">
                              <label>Status Perusahaan :</label> 
                              <select name=perusahaan class="form-control" >
                                 <option value=''>Pilih</option>
                             {section name=detail loop=$perusahaan_opt}
                            <option value="{$perusahaan_opt[detail].id}" {$perusahaan_opt[detail].selected}>{$perusahaan_opt[detail].nama}</option>
                                {/section}
                                    </select>
                               </div>
                                <div class="form-group">
                            <label>Email Company :</label>
                            <input type="email" name="email" placeholder="Email" class="form-control" value="{$email}" >
                            </div>

                          <div class="form-group">
                           <label>Email Alternatif :</label>
                            <input type="email" name="emailal" placeholder="Email Alternatif" class="form-control" value="{$emailal}" >
                            </div>

                               </div>



                  <div class="col-md-6">
                      <div class="form-group">
                          <label>Alamat Tetap :</label>
                          <input type="text" name="address" placeholder="Alamat Tetap" class="form-control" value="{$address}">
                      </div>
                                  <div class="form-group">
                                    <label>Alamat Sementara :</label>
                                      <input type="text" name="alamat_sementara" placeholder="Alamat Sementara" class="form-control" value="{$alamat_sementara}">
                                  </div>
                                    <div class="form-group">
                                      <label>Photo :</label>
                                        <input type="file" name="pathfoto" id="pathfoto" class="form-control" value="{$pathfoto}" required> Maks 100 KB
                                    </div>
                                    <div class="form-group">
                                    <label>Status Kawin :</label>
                                      <select name=stskawin class="form-control">
                                      <option value=''>--Pilih--</option>
                                      {section name=detail loop=$stskawin_opt}
                                      <option value="{$stskawin_opt[detail].id}" {$stskawin_opt[detail].selected}>{$stskawin_opt[detail].nama}</option>
                                      {/section}
                                      </select>
                                    </div>
                                    <div class="form-group">
                                    <label>Telfon Kantor :</label> 
                                    <input type="text" name="telpon_kantor" placeholder="Telfon Kantor" class="form-control" value="{$telpon_kantor}">
                                    </div>
                                    <div class="form-group"><label>Telfon Rumah :</label>
                                    <input type="text" name="telpon_rumah" placeholder="Telfon Rumah" class="form-control" value="{$telpon_rumah}"></div>
                                    <div class="form-group"><label>Handphone :</label>
                                    <input type="text" id="hp" name="hp" placeholder="Handphone" class="form-control" value="{$hp}"></div>
                                    <div class="form-group"><label>Tanggal Masuk :</label>
                                      <input type="text" name="tgl_masuk" class="form-control input-sm" id="tgl_masuk" placeholder="dd/mm/yyyy">
                                    </div>
                                    <div class="form-group">
                                    <label>No. BPJS Ketenagakerjaan :</label>
                            <input type="text" name="jamsostek" placeholder="No. BPJS Ketenagakerjaan" class="form-control" value="{$jamsostek}">
                            </div>
                                    <div class="form-group"><label>No. BPJS Kesehatan :</label>
                                    <input type="text" name="no_askes" placeholder="No. BPJS Kesehatan" class="form-control" value="{$no_askes}">
                                    </div>
                                                            

                           <div class="form-group">
                            <div class="row">
                              <div class="col-xs-6"> <label>Status Karyawan :</label> 
                            <select name="status_p" class="form-control" >
                                                <option value="" selected="selected">{$status_p} </option>
                                                <option value="A" > Aktif </option>
                                                <option value="T" > Tidak Aktif </option>
                                                </select>
                                                </div>
                              <div class="col-xs-6">
                                  <label>Tanggal Tidak Aktif :</label>
                            <input class="form-control" TYPE=TEXT ID="tgl_tidakaktif" NAME="tgl_tidakaktif" size=10 placeholder="dd/mm/yyyy">
                              </div></div>
                              </div>

                          <div class="form-group">
                            <label>Keterangan :</label>
                            <input type="text" name="keterangan" placeholder="Keterangan" class="form-control" >
                            </div>
                       
                            
                            <div class="form-group">
                           <label>Bisnis Unit :</label> </td>
                            <td><select name=bisnisunit class="form-control">
                              <option value='{$bisnisunit_opt[detail].id}' selected="selected">Pilih</option>
                                  {section name=detail loop=$bisnisunit_opt}
                              <option value="{$bisnisunit_opt[detail].id}" {$bisnisunit_opt[detail].selected}>{$bisnisunit_opt[detail].nama}</option>
                             {/section}
                            </div>

                            <tr>
                             <td width="200"> <label>  Kontrak :</label> </td>
                            <td><input type="text" NAME="tgl_kontrak_dari" id="tgl_kontrak_dari" placeholder="Mulai" class="form-control"> <br/></td>
                            <td width="50" align="center">s/d <br /></td>
                            <td width="200"><input type="text" NAME="tgl_kontrak_sampai" id="tgl_kontrak_sampai" placeholder="Terakhir" class="form-control"><br /> </td>
                             </tr>

                             
                        </table>
                      </div>
                    </div> 
                  </div>

  <p style="text-align:left;">
    <a href="?action=PendidikanAdd" class="btn btn-primary btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>
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
                  <a title='Edit' href="employee.php?action=PendidikanEdit&id={$pendidikan_list[detail].id}">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='employee.php?action=PendidikanDeleteProses&id={$pendidikan_list[detail].id}'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    {/section}
</TABLE>

</div>
            
   <p style="text-align:left;">
    <a href="?action=KursusAdd" class="btn btn-primary btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>
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
                  <a title='Edit' href="employee.php?action=KursusEdit&id={$kursus_list[detail].id}">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='employee.php?action=KursusDeleteProses&id={$kursus_list[detail].id}'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    {/section}
    </table>
    </div>

<p style="text-align:left;">
    <a href="?action=PekerjaanAdd" class="btn btn-primary btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>
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
                  <a title='Edit' href="employee.php?action=PekerjaanEdit&id={$pekerjaan_list[detail].id}">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='employee.php?action=PekerjaanDeleteProses&id={$pekerjaan_list[detail].id}'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    {/section}

</table>
</div>

<p style="text-align:left;">
    <a href="?action=OrganisasiAdd" class="btn btn-primary btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>
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
                  <a title='Edit' href="employee.php?action=OrganisasiEdit&id={$organisasi_list[detail].id}">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='employee.php?action=OrganisasiDeleteProses&id={$organisasi_list[detail].id}'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    {/section}

</table>
</div>
            
<p style="text-align:left;">
    <a href="?action=KeluargaAdd" class="btn btn-primary btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>
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
                  <a title='Edit' href="employee.php?action=KeluargaEdit&id={$keluarga_list[detail].id}">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='employee.php?action=KeluargaDeleteProses&id={$keluarga_list[detail].id}'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    {/section}

</table>
</div>


<p style="text-align:left;">
    <a href="?action=KesehatanAdd" class="btn btn-primary btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>
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
                  <a title='Edit' href="employee.php?action=KesehatanEdit&id={$kesehatan_list[detail].id}">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='employee.php?action=KesehatanDeleteProses&id={$kesehatan_list[detail].id}'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    {/section}

</table>
</div>

<p style="text-align:left;">
    <a href="?action=PenghargaanAdd" class="btn btn-primary btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>
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
                  <a title='Edit' href="employee.php?action=PenghargaanEdit&id={$penghargaan_list[detail].id}">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='employee.php?action=PenghargaanDeleteProses&id={$penghargaan_list[detail].id}'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    {/section}

</table>
</div>

<p style="text-align:left;">
    <a href="?action=HukumanAdd" class="btn btn-primary btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>
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
                  <a title='Edit' href="employee.php?action=HukumanEdit&id={$hukuman_list[detail].id}">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='employee.php?action=HukumanDeleteProses&id={$hukuman_list[detail].id}'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    {/section}

</table>
</div>

<p style="text-align:left;">
    <a href="?action=MCUAdd" class="btn btn-primary btn-icon btn-xs tip" title="Add"><i class="icon-plus"></i></a>
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
                  <a title='Edit' href="employee.php?action=MCUEdit&id={$mcu_list[detail].id}">
                  <img src=img/page.gif height="16" width="16" border="0"></a>|
                <a title='Delete' href="javascript: if(confirm('Anda yakin akan menghapus data ini?')) location.href ='employee.php?action=MCuDeleteProses&id={$mcu_list[detail].id}'"><img src=img/trash.gif height="16" width="16" border="0"></a>
              </TD>
        </TR>
    {/section}

</table>
</div>
<div class="form-actions text-left">
                          <input type="submit" data-toggle="modal" role="button"  value="Update" class="btn btn-success">
                          <INPUT TYPE="BUTTON" VALUE="Back" ONCLICK="history.go(-1)" class="btn btn-primary">
                        </div>
            </div>
        </div>
      </form>
<a href="#" class="back-to-top">Back to Top</a>
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

