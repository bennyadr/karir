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
					<h3>Pengukuran Kompetensi<small> Pengukuran Kompetensi</small></h3>
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



<form method="post" action="ukur.php?action=pertanyaan" ENCTYPE="multipart/form-data">

<div class="row">
        		<div class="col-md-6">
		            <div class="panel panel-success">
		                <div class="panel-heading">
	                    	<h3 class="panel-title"><i class="icon-accessibility"></i> PENILAI</h3>
                    	</div>
                    	<div class="panel-body">
	                    	<table class="table table-striped table-bordered table-hover" width="100%">
              <tr >
                  <td style="width:20%"> NIK </td>
                    <td style="width:5%"> : </td>
                    <td>{$nikdinilai}   </td>
                </tr>
                <tr>
                  <td> Nama </td>
                    <td> : </td>
                    <td>{$namadinilai}   </td>
                </tr>
                <tr>
                  <td> Jabatan </td>
                    <td> : </td>
                    <td>{$jabatandinilai}   </td>
                </tr>
                <tr>
                  <td>Menilai</td>
                  <td>:</td>
                  <td> 
                   
                                <form name="selpen" method="post" id="form" action="ukur.php">
                                   
                  <select name="selpen" id="selpen" class="form-control" onchange="javascript:document.selpen.submit();">
                                   {$option}
                                  </select>
                                   
                                </form>
                              </td>
                </tr>
             </table>
            </div>
          </div>
          
          
          </div>
      


        		<div class="col-md-6">
		            <div class="panel panel-info">
		                <div class="panel-heading">
	                    	<h3 class="panel-title"><i class="icon-accessibility"></i>MENILAI :
	                    	{if $selpen != ''}
                      {$selpen}
                      {else}
                      {$keterangan_menilai}
                      {/if}
                      </h3>
                    	</div>
                    	<div class="panel-body">
                    	
	                    	{if $selpen == 'Bawahan'}
              
              {if $sign == '1'}
               <table class="table table-striped table-bordered table-hover" width="100%">
                 {section name = bawah loop = $rsbawah}
                <tr >
                  <td style="width:20%"> <a href="kinerja.php?action=kinerjabawah&id={$rsbawah[bawah].id_karyawan}">{$rsbawah[bawah].nik_karyawan} - {$rsbawah[bawah].nama_karyawan} </a>  </td>
                 </tr>
                   {/section}
                 </table>
              {else}
               <div class="alert alert-danger">
              {$info}
              </div>
              {/if}
              
             
            
              
           
      
            {else}
              <table class="table table-striped table-bordered table-hover" width="100%">
                <tr >
                  <td style="width:20%"> NIK </td>
                  <td style="width:5%"> : </td>
                  <td>{$nikpenilai}</td>
                </tr>
                <tr>
                  <td> Nama </td>
                  <td> : </td>
                  <td>{$namapenilai}</td>
                </tr>
                <tr>
                  <td> Jabatan </td>
                  <td> : </td>
                  <td>{$jabatanpenilai}</td>
                </tr>
              {/if}
          </table>
              </div>

           <div class="form-actions text-left">                    
&nbsp;&nbsp;&nbsp;&nbsp;
                       <input type=submit value="MASUK KE PERTANYAAN" class="btn btn-primary" />
                        <input name="" type="hidden" value="Rekap" v/>
                   <INPUT TYPE="BUTTON" VALUE="Back" ONCLICK="history.go(-1)" class="btn btn-default">

          </div>
          <br />
           </div>
