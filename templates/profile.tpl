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
      <div class="table-controls">
           <div style="text-align:right;">
      <div class="form-actions text-right">
            

            <form action="profile.php?action=print" method="post">
            <a href="profile.php?action=edit" title="Edit" class="btn btn-info">Edit</a>
            <input type="hidden" name="idperiode" value="{$idperiode}">
              <input type="submit" data-toggle="modal" role="button" value="View PDF" class="btn btn-danger"></div>

            </form> 
              <!--<a href="profile.php?action=print" title="View PDF"><i class="icon-file-pdf"></i></div></a> -->
              </div>
        </div>




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
            <table class="table table-bordered">
                      <tr>
                      {if $gambar != null}
                        <td rowspan="6" style="text-align:left;"><img width=120 src="{$gambar}" ></td>
                       {else} 
                       <td rowspan="6" style="text-align:left;"><img width=120 src="img/no_photo.jpg" ></td>
                       {/if}
                    <td style="width:10%;text-align:left;">NIK</td>
                      <td style="width:1%;text-align:center;">:</td>
                      <td style="width:30%;text-align:left;">{$nik}</td>
                      <td >Jenis Kelamin</td>
                      <td >:</td>
                      <td >{$sex}</td>
                      </tr>
                      <tr>
                        <td style="width:10%;text-align:left;">Nama</td>
                      <td style="width:1%;text-align:center;">:</td>
                      <td><b>{$nama}</b></td>
                      <td >Agama</td>
                      <td >:</td>
                      <td >{$agama}</td>
                      </tr>
                      <tr>
                        <td style="width:10%;text-align:left;">Jabatan</td>
                      <td style="width:1%;text-align:center;">:</td>
                      <td>{$jabatan}</td>
                      <td >Status Kawin</td>
                      <td >:</td>
                      <td >{$stskawin}</td>
                      </tr>
                      <tr>
                        <td style="width:10%;text-align:left;">Depatemen</td>
                      <td style="width:1%;text-align:center;">:</td>
                      <td >{$divisi}</td>
                      <td >Telp/HP</td>
                      <td >:</td>
                      <td >{$telp}&nbsp;/&nbsp;{$hp}</td>
                      </tr>
                      <tr>
                        <td style="width:10%;text-align:left;">Pendidikan</td>
                      <td style="width:1%;text-align:center;">:</td>
                      <td>{$pendidikan}</td>
                      <td>No KTP</td>
                      <td>:</td>
                      <td>{$ktp}</td>
                      </tr>
                      <tr>
                        <td style="width:10%;text-align:left;">Tempat Lahir</td>
                      <td style="width:1%;text-align:center;">:</td>
                      <td>{$tempat}</td>
                      <td style="width:12%;text-align:left;">Tanggal Lahir</td>
                      <td style="width:1%;text-align:center;">:</td>
                      <td>{$tanggal}</td>
                      </tr>
                      <tr>
                        <td rowspan="3" style="width:12%;text-align:left;">&nbsp;</td>
                        <td style="width:10%;text-align:left;">Alamat KTP</td>
                        <td style="width:1%;text-align:center;">:</td>
                        <td>{$alamatktp}</td>
                        <td style="width:12%;text-align:left;">Alamat Sementara</td>
                        <td style="width:1%;text-align:center;">:</td>
                        <td>{$alamatsmr}</td>
                      </tr>
                      <tr>
                      <td style="width:10%;text-align:left;">Nama Bank</td>
                      <td style="width:1%;text-align:center;">:</td>
                      <td>{$bank}</td>
                      <td style="width:12%;text-align:left;">No Rekening</td>
                      <td style="width:1%;text-align:center;">:</td>
                      <td>{$norek}</td>
                      </tr>
                      <tr>
                        <td style="width:10%;text-align:left;">Email</td>
                      <td style="width:1%;text-align:center;">:</td>
                      <td>{$email}</td>
                      <td style="width:12%;text-align:left;">No NPWP</td>
                      <td style="width:1%;text-align:center;">:</td>
                      <td>{$npwp}</td>
                      </tr>
                      </table>

                  <p></p>
                  <div class="info-buttons block row">
                       <div class="col-sm-2">
                    {if $pathktp != "kosong" or $pathktp != "NULL" or $pathktp != ""}
                      <a href="{$pathktp}" >
                    {else}
                    <a href="#" >
                    {/if} 
                               <i class="icon-disk"></i>
                                   <span> KTP </span>           
                            </div></a>

                  <div class="col-sm-2">
                      {if $pathnpwp != "kosong" or $pathnpwp != "NULL" or $pathnpwp != ""}
                      <a href="{$pathnpwp}">
                    {else}
                    <a href="#" >
                    {/if}            
                               <i class="icon-disk"></i>
                                   <span>NPWP</span>
                                   </div></a>

                  <div class="col-sm-2">
                    {if $pathbpjs != "kosong" or $pathbpjs != "NULL" or $pathbpjs != ""}
                      <a href="{$pathbpjs}">
                    {else}
                    <a href="#">
                    {/if}            
                               <i class="icon-disk"></i>
                                   <span>BPJS NAKER</span>
                         </div></a>

                  <div class="col-sm-2">
                    {if $pathbpjssehat != "kosong" or $pathbpjssehat != "NULL" or $pathbpjssehat != ""}
                      <a href="{$pathbpjssehat}">
                    {else}
                    <a href="#">
                    {/if}
                               <i class="icon-disk"></i>
                                   <span>BPJS SEHAT</span>
                            </div></a>

                  <div class="col-sm-2">
                    {if $pathnikah != "kosong" or $pathnikah != "NULL" or $pathnikah != ""}
                      <a href="{$pathnikah}">
                    {else}
                    <a href="#">
                    {/if}            
                               <i class="icon-disk"></i>
                                   <span>Buku Nikah</span>
                            </div></a>

                  <div class="col-sm-2">
                    {if $pathkk != "kosong" or $pathkk != "NULL" or $pathkk != ""}
                      <a href="{$pathkk}">
                    {else}
                    <a href="#">
                    {/if}            
                               <i class="icon-disk"></i>
                                   <span>Kartu Keluarga</span>
                            </div></a>

                          </div>

                          </div>


                      <div class="tab-pane active" id="pendidikan">
            <div class="panel panel-primary">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Pendidikan</h6></div>
                      <table id="example" class="table table-striped table-bordered table-hover" style="width:100%;">
          <thead>
            <TR>
                <th style="width:1%;text-align:center;">No</th>
          <th style="width:4%;text-align:center;">Tingkat</th>
          <th style="width:4%;text-align:center;">Sekolah/Universitas</th>
          <th style="width:6%;text-align:center;">Jurusan</th>
          <th style="width:3%;text-align:center;">IPK/Nilai</th>
          <th style="width:3%;text-align:center;">Gelar</th>
          <th style="width:6%;text-align:center;">Tempat</th>
          <!--<th style="width:6%;text-align:center;">Option</th>-->

      
            </TR>
          </thead>
          {section name=detail loop=$pendidikan_list}
  <tr>
      <TD VALIGN=TOP align=center>{$pendidikan_list[detail].no}</TD>
        <TD VALIGN=TOP style="text-align:center;">{$pendidikan_list[detail].tingkat}</TD>
    <TD VALIGN=TOP>{$pendidikan_list[detail].sekolah}</TD>
    <TD VALIGN=TOP>{$pendidikan_list[detail].jurusan}</TD>
    <TD VALIGN=TOP align=center>{$pendidikan_list[detail].ipk}</TD>
    <TD VALIGN=TOP align=center>{$pendidikan_list[detail].gelar}</TD>
    <TD VALIGN=TOP align=center>{$pendidikan_list[detail].tempat}</TD>
 
    {/section}

</tr>

</table>
</div>
</div>
          <div class="tab-pane active" id="kursus">
            <div class="panel panel-primary">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Kursus</h6></div>
                      <table id="example" class="table table-striped table-bordered table-hover" style="width:100%;">
          <thead>
            <TR>
              <th style="width:1%;text-align:center;">No</th>
          <th style="width:6%;text-align:center;">Kursus</th>
          <th style="width:6%;text-align:center;">Instansi/Perusahaan</th>
          <th style="width:5%;text-align:center;">Kota</th>
          <th style="width:3%;text-align:center;">Tahun</th>
          <th style="width:3%;text-align:center;">Sertifikat</th>
          <th style="width:6%;text-align:center;">No Sertifikat</th>

      
            </TR>
          </thead>
          {section name=detail loop=$kursus_list}
    <TR>
        <TD VALIGN=TOP align=center>{$kursus_list[detail].no}</TD>
        <TD VALIGN=TOP>{$kursus_list[detail].kursus}</TD>
    <TD VALIGN=TOP>{$kursus_list[detail].instansi}</TD>
         <TD VALIGN=TOP align=CENTER>{$kursus_list[detail].kota}</TD>
    <TD VALIGN=TOP align=CENTER>{$kursus_list[detail].tahun}</TD>
    <TD VALIGN=TOP align=CENTER>{$kursus_list[detail].sertifikat}</TD>
    <TD VALIGN=TOP align=CENTER>{$kursus_list[detail].no_sertifikat}</TD>
   {/section}
   </TR>
</table>
</div>
</div>

          <div class="tab-pane active" id="keluarga">
           <div class="panel panel-primary">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Keluarga</h6></div>
                      <table id="example" class="table table-striped table-bordered table-hover" style="width:100%;">
          <thead>
            <TR>
              <th style="width:3%;text-align:center;">No</th>
              <th style="width:20%;text-align:center;">Tanggal Lahir</th>
              <th style="width:20%;text-align:center;">Nama Anggota Keluarga</th>
              <th style="width:20%;text-align:center;">Status Anggota Keluarga</th>
    
            </TR>
          </thead>
          {section name=detail loop=$keluarga_list}
          <TR>
                  <TD VALIGN=TOP align=center>{$keluarga_list[detail].no}</TD>
                  <TD VALIGN=TOP align=CENTER>{$keluarga_list[detail].tgl_lahir}</TD>
                  <TD VALIGN=TOP align=LEFT>{$keluarga_list[detail].nama}</TD>
                  <TD VALIGN=TOP align=CENTER>{$keluarga_list[detail].status}</TD>

        </TR>
    {/section}

</table>
</div>
          </div>
          <div class="tab-pane active" id="organisasi">
            <p>
             
 <div class="panel panel-primary">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Organisasi</h6></div>
                      <table id="example" class="table table-striped table-bordered table-hover" style="width:100%;">
          <thead>
            <TR>
              <th style="width:3%;text-align:center;">No</th>
              <th style="width:20%;text-align:center;">Nama Organisasi</th>
              <th style="width:20%;text-align:center;">Jabatan</th>
              <th style="width:10%;text-align:center;">Tahun</th>  

            </TR>
          </thead>
          {section name=detail loop=$organisasi_list}
          <TR>
              <TD VALIGN=TOP align=center>{$organisasi_list[detail].no}</TD>
              <TD VALIGN=TOP >{$organisasi_list[detail].organisasi}</TD>
              <TD VALIGN=TOP>{$organisasi_list[detail].jabatan}</TD>
              <TD VALIGN=TOP>{$organisasi_list[detail].tahun}</TD>

        </TR>
    {/section}

</table>
</div>
          </div>

                    <div class="tab-pane active" id="pekerjaan">
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

        </TR>
    {/section}

                </table>
                </div>
                    </div>

          <div class="tab-pane active" id="kesehatan">
            <div class="panel panel-primary">
                      <div class="panel-heading"><h6 class="panel-title"><i class="icon-table2"></i>Tabel Kesehatan</h6></div>
                      <table id="example" class="table table-striped table-bordered table-hover" style="width:100%;">
          <thead>
            <TR>
                  <TH style="width:3%;text-align:center;">No</th>
                  <TH style="width:20%;text-align:center;">Penyakit</TH>
                  <TH style="width:6%;text-align:center;">Tahun Sakit</TH>
                  <TH style="width:15%;text-align:center;">Keterangan</TH>

            </TR>
          </thead>
          {section name=detail loop=$kesehatan_list}
          <TR>
                      <TD VALIGN=TOP align=center>{$kesehatan_list[detail].no}</TD>
                      <TD VALIGN=TOP align=LEFT>{$kesehatan_list[detail].penyakit}</TD>
                      <TD VALIGN=TOP align=CENTER>{$kesehatan_list[detail].tahun}</TD>
                      <TD VALIGN=TOP align=LEFT>{$kesehatan_list[detail].ket}</TD>

        </TR>
    {/section}

</table>
</div>
          </div>
          <div class="tab-pane active" id="penghargaan">
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

            </TR>
          </thead>
          {section name=detail loop=$penghargaan_list}
          <TR>
                 <TD VALIGN=TOP align=center>{$penghargaan_list[detail].no}</TD>
                 <TD VALIGN=TOP align=LEFT>{$penghargaan_list[detail].penghargaan}</TD>
                 <TD VALIGN=TOP align=LEFT>{$penghargaan_list[detail].pemberi_penghargaan}</TD>
                 <TD VALIGN=TOP align=CENTER>{$penghargaan_list[detail].tgl_penghargaan}</TD>
                 <TD VALIGN=TOP align=LEFT>{$penghargaan_list[detail].ket}</TD>

        </TR>
    {/section}

</table>
</div>

          </div>
          <div class="tab-pane active" id="hukuman">
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

        </TR>
    {/section}

</table>
</div>


          </div>
          <div class="tab-pane" id="mcu">
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

        </TR>
    {/section}

</table>
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
      
         {include file="footer.tpl"}
