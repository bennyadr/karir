<!-- Info Block -->
{if $statuslogin == "0"}
<div class="breadcrumb-line">
				<ul class="breadcrumb">
					<li><a href="index.php?action=home">Home</a></li>
					 {if $samping == "1" }<li class="active">Dashboard</li>{/if}
					 {if $samping == "2" }<li class="active">Profile</li>{/if}
					 {if $samping == "3" }<li class="active">Pengukuran Kompetensi</li>{/if}
					 {if $samping == "4" }<li class="active">Karir</li>{/if}
					 {if $samping == "5" }<li class="active">Change PAssword</li>{/if}
				</ul>
				<div class="visible-xs breadcrumb-toggle">
					<a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
				</div>
			</div>
{elseif $statuslogin == "1"}			
<div class="breadcrumb-line">
				<ul class="breadcrumb">
					<li><a href="index.php?action=showmenu">Home</a></li>
					 {if $samping == "21" }<li class="active">Data Pegawai</li>{/if}
					 {if $samping == "22" }<li class="active">Pendidikan</li>{/if}
					 {if $samping == "23" }<li class="active">Eselon</li>{/if}
					 {if $samping == "24" }<li class="active">Unit Kerja</li>{/if}
					 {if $samping == "25" }<li class="active">Jabatan</li>{/if}
					 {if $samping == "26" }<li class="active">Kelompok Jabatan</li>{/if}
					 {if $samping == "27" }<li class="active">Tingkat Jabatan</li>{/if}
					 {if $samping == "28" }<li class="active">Kamus Kompetensi</li>{/if}
					 {if $samping == "29" }<li class="active">Matrik Kompetensi</li>{/if}
					 {if $samping == "30" }<li class="active">Arah Karir</li>{/if}
					 {if $samping == "31" }<li class="active">Kompetensi Jabatan</li>{/if}
					 {if $samping == "32" }<li class="active">Pengukuran Kompetensi Pegawai</li>{/if}
					 {if $samping == "33" }<li class="active">Hasil Pengukuran Kompetensi</li>{/if}
					 {if $samping == "34" }<li class="active">Kinerja Pegawai</li>{/if}
					 {if $samping == "35" }<li class="active">Peluang Karir (Jabatan)</li>{/if}
					 {if $samping == "36" }<li class="active">Posisi Jabatan Kosong</li>{/if}
					 {if $samping == "37" }<li class="active">Peluang Karir Pegawai</li>{/if}
					 {if $samping == "38" }<li class="active">Calon Pemegang Jabatan</li>{/if}
				</ul>
				<div class="visible-xs breadcrumb-toggle">
					<a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
				</div>
			</div>

{/if}
				<!-- /main navigation -->