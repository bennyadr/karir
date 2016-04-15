{include file="header.tpl"}
    <!-- Page container -->
    <div class="page-container">    

        <!-- Page content -->
        <div class="page-content">


            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h3>Soal Kompetensi</h3>
                </div>

                
            </div>

<br/>
<form id="form1" name="form1" method="post" action="ukur.php?action=pertanyaan">
<TABLE align=center CELLSPACING=1 CELLPADDING=2 width=100%>
    <TR>
        <TD colspan="2" align="right">
	    <input name="name" type="hidden" value="{$name}"/>
            <input name="soal" type="hidden" value="{$soal}"/>
            <input name="idkompetensi" type="hidden" value="{$idkompetensi}"/>
            <input name="nikPenilai" type="hidden" value="{$nikPenilai}"/>
            <input name="nikDinilai" type="hidden" value="{$nikDinilai}"/>
	       <input name="posisi" type="hidden" value="{$posisi}"/>
            <input name="kembali" type="hidden" value="{$kembali}"/>
            
            <!--{if $soal != 1}
            	<input name="" type="button" onclick="javascript: window.location='ukurkomp.php?mod=pertanyaan&soal={$soal}&idkompetensi={$idkompetensi}&soal={$soal}&kembali=kembali&nikDinilai={$nikDinilai}&nikPenilai={$nikPenilai}&name={$name}'" value="Back"/>
 			{else}
        		<input name="" type="button" onClick="javascript: window.location='ukurkomp.php?mod=idpenilaian&nipRelasiJabatan={$nikDinilai}&nip={$nikPenilai}&idkompetensi={$idkompetensi}&kembali=kembali'" value="Back"/>
            {/if}-->
        </TD>     
    </TR>

<table width="50%">
    <tr>
        <td><span class="label label-block label-danger text-left"><h6>Nama Penilai : {$name}</h6></span></td><br />
    </tr>
 </table><br />
 
<table>
    <tr>
   <td align="left" valign="top" style="font-size:17px;"><b>{$soal}. &nbsp; &nbsp; &nbsp; </b></td>
   <td align="left" valign="top" style="font-size:17px;"><b>{$pertanyaan}</b></td>
    </tr>
    
    <tr>
    <td align="left" valign="top" style="font-size:17px;"></td>
    <td align="left" valign="top" style="font-size:17px;"><b>{$opsiJawaban}</b></td> <br />
    </tr>
  
  <tr>
  <td align="left" valign="top" style="font-size:17px;"></td>
    <td align="left" valign="top" style="font-size:17px;"><b> {$opsiJawaban2}</b></td>
    </tr>
</table>
    
 <div class="form-actions text-left">
           <input type="submit" data-toggle="modal" role="button"  value="Next" class="btn btn-success">
              </div>
</form>


