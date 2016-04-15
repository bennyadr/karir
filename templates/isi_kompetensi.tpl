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
	                    	<table>
	                    		<tr>
	                    		<td width="12%" valign="top"><b>NIK</b></td>
                                <td width="4%" valign="top">:</td>
                                <td width="64%"><input type="text" name="textfield" id="textfield" size="40" value="{$nik}" disabled="disabled" class="form-control input-sm"> <br /></td>
	                    		</tr>
	                    		<tr>
	                    		<td width="12%" valign="top"><b>Nama</b></td>
                                <td width="4%" valign="top">:</td>
                                <td width="64%"><input type="text" name="textfield" id="textfield" size="40" value="{$name}" disabled="disabled" class="form-control input-sm"><br /></td>
	                    		</tr>
	                    		<tr>
	                    		<td width="12%" valign="top"><b>Jabatan</b></td>
                                <td width="4%" valign="top">:</td>
                                <td width="64%"><input type="text" name="textfield" id="textfield" size="40" value="{$jabatan}" disabled="disabled" class="form-control input-sm"><br /></td>
	                    		</tr>
	                    		<tr>
	                    		<td width="12%" valign="top"><b>Menilai</b></td>
                                <td width="4%" valign="top">:</td>
                                <td width="64%"> <form name="jabatanform" method="post" id="form"  action="ukurkomp.php?action=jabatan">
                                  <input type="hidden" name="idkompetensi" id="textfield" size="40" value="{$idkompetensi}"/>
                                  <select name="idjabatan" id="jumpMenu"onchange="javascript:document.jabatanform.submit ();" class="form-control input-sm">
                                    <option value="Yang Bersangkutan" selected="selected">Yang Bersangkutan</option>
                                      {$jabatan_option}
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
	                    	{if $jabatan_onchange != ''}
                      {$jabatan_onchange}
                      {else}
                      {$keterangan_menilai}
                      {/if}
                      </h3>
                    	</div>
                    	<div class="panel-body">
                    	
	                    	<table>

	                    		<tr>
	                    		<td width="12%" height="10" valign=top><b>NIK</b></td>
                                <td width="4%" valign=top>:</td>
                                <td width="64%" valign=top>{if $jabatan_onchange eq 'Bawahan'}
                                   {if $bawahan >1}
                                   <form name="jabatanBawahanform" method="post" id="form"  action="ukurkomp.php?action=jabatan">
                                       <input type="hidden" name="idkompetensi" id="textfield" size="40" value="{$idkompetensi}"/>
                                       <input name="idjabatan" type="hidden" value="{$jabatan_onchange}"/>
                                       <select  class="form-control input-sm" name="nikRelasiJabatan" id="jumpMenu"onchange="javascript:document.jabatanBawahanform.submit ();">                                               
											{$bawahan_option}                                          
									   </select>
                                   </form>
                                   {else}
                                   		{$bawahan_option}
                                   {/if}
                               {elseif $jabatan_onchange eq 'Atasan'}
                                   {if $atasan >1}
                                   <form name="jabatanAtasanform" method="post" id="form"  action="ukurkomp.php?action=jabatan">
                                   	   <input type="hidden" name="idkompetensi" id="textfield" size="40" value="{$idkompetensi}"/>
                                   	   <input name="idjabatan" type="hidden" value="{$jabatan_onchange}"/>
                                       <select class="form-control input-sm" name="nikRelasiJabatan" id="jumpMenu"onchange="javascript:document.jabatanAtasanform.submit ();" >
                                           	{$atasan_option}
                                       </select>
                                   </form>
                                   {else}
                                   		{$atasan_option}
                                   {/if}
                               {elseif $jabatan_onchange eq 'Rekan'}
                                   {if $rekan >1}
                                   <form name="jabatanRekanform" method="post" id="form"  action="ukurkomp.php?action=jabatan">
                                       <input type="hidden" name="idkompetensi" id="textfield" size="40" value="{$idkompetensi}"/>
                                       <input name="idjabatan" type="hidden" value="{$jabatan_onchange}"/>
                                       <select name="nikRelasiJabatan" id="jumpMenu"onchange="javascript:document.jabatanRekanform.submit ();" class="form-control input-sm">
                                           	{$rekan_option}
                                       </select>
                                   </form>
                                  {else}
                                      {$rekan_option}
                                   {/if}
                               {elseif $jabatan_onchange eq 'Yang Bersangkutan'}
                                  {$nip_dinilai}
                               {else}
                                  <input type="text" class="form-control input-sm" {$nip_dinilai}
                               {/if}
                               </td>
	                    		</tr>
	                    		<tr>
	                    		<td width="12%" height="100"><b>Nama</b></td>
                                <td width="4%">:</td>
                                <td width="64%">{if $name_dinilai != ''}
                                     	    {if $jumlah >= 1}
                                            	<input type="text" name="textfield2" id="textfield2" size="40" value="{$name_dinilai}" disabled="disabled" class="form-control input-sm" />				
                                            {else}
                                            	<input type="text" name="textfield2" id="textfield2" size="40" disabled="disabled" class="form-control input-sm" />
                                            {/if}    
                                     	{elseif $jabatan_onchange eq 'Bawahan' or $jabatan_onchange eq 'Atasan' or $jabatan_onchange eq 'Rekan'}
                                        	<input type="text" name="textfield2" id="textfield2" size="40" disabled="disabled" class="form-control input-sm" />
                                        {else }
                                        	<input type="text" name="textfield2" id="textfield2" size="40" value="{$name}" disabled="disabled" class="form-control input-sm" />	
                                        {/if}
									</td>
	                    		</tr>
	                    		
	                    		<tr>
	                    		<td width="12%"><b>Jabatan</b></td>
                                <td width="4%">:</td>
                                <td width="64%">{if $name_dinilai != ''}
                                     {if $jumlah >= 1}
                                          <input type="text" name="textfield2" id="textfield2" size="40" value="{$jabatan_dinilai}" disabled="disabled" class="form-control input-sm" />				
                                     {else}
                                          <input type="text" name="textfield2" id="textfield2" size="40" disabled="disabled" class="form-control input-sm" />
                                     {/if}    
                                {elseif $jabatan_onchange eq 'Bawahan' or $jabatan_onchange eq 'Atasan' or $jabatan_onchange eq 'Rekan'}
                                   	<input type="text" name="textfield2" id="textfield2" size="40" disabled="disabled" class="form-control input-sm" />
                                {else }
                                   	<input type="text" name="textfield2" id="textfield2" size="40" value="{$jabatan}" disabled="disabled" class="form-control input-sm" />	
                                {/if}</td>
	                    		</tr>
	                    		<br />
	                    	</table>
                    	</div>
                    	</div>
                    	</div>


                    <table width="100%">       
              <tr>
                  <td align="center">
                    <form method="post" action="ukur.php?action=pertanyaan">
                        <input type="hidden" name="nikPenilai" id="textfield" size="40" value="{$nik}" />
                        
                        {if $jabatan_onchange != ''}
                            <input type="hidden" name="posisi" id="textfield" size="40" value="{$jabatan_onchange}"/>
                        {else}
                            <input type="hidden" name="posisi" id="textfield" size="40" value="Yang Bersangkutan" />
                        {/if}
                        
                        {if $nikRelasiJabatan_onchange != ''}
                            <input type="hidden" name="nikDinilai" id="textfield" size="40" value="{$nikRelasiJabatan_onchange}" />
                        {elseif $nikdinilai != ''}
                            <input type="hidden" name="nikDinilai" id="textfield" size="40" value="{$nikdinilai}" />
                        {else}
                            <input type="hidden" name="nikDinilai" id="textfield" size="40" value="{$nik}" />
                        {/if}  
                        <input type="hidden" name="idkompetensi" id="textfield" size="40" value="{$idkompetensi}"/>
            <input type="hidden" name="name" id="textfield" size="40" value="{$name}"/>
                        <input type="hidden" name="soal" id="textfield" size="40" value="{$soal}"/>
                        <input type="hidden" name="kembali" id="textfield" size="40" value="{$kembali}"/>
                        <input name="" type="button" onClick="javascript:window.location='ukur.php?action=petunjukhard'" class="btn btn-primary" value="Cancel"/>&nbsp;&nbsp;
                       <input type=submit value="MASUK KE PERTANYAAN" class="btn btn-primary" />
                        <input name="" type="hidden" value="Rekap" v/>
                    </form>
                    </td>
                </tr>
            </table>
        </TD>
    </TR>

</TABLE>


                	</div>
</div>
