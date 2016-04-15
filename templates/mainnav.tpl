<!-- Main navigation -->
{if $statuslogin == "0"}
				<ul class="navigation">				
					<li {if $samping == "1" } class="active" {/if}><a href="index.php?action=home"><span>Dashboard</span> <i class="icon-screen2"></i></a></li>
					<li {if $samping == "2" } class="active" {/if}><a href="profile.php"><span>Profile</span> <i class="icon-profile"></i></a></li>
					<li {if $samping == "3" } class="active" {/if}><a href="ukur.php"><span>Pengukuran Kompetensi</span> <i class="icon-clipboard"></i></a></li>
					<li {if $samping == "4" } class="active" {/if}><a href="seepayroll.php"><span>Payroll</span> <i class="icon-accessibility"></i></a></li>
					<li {if $samping == "5" } class="active" {/if}><a href="password.php"><span>Change Password</span> <i class="icon-users"></i></a></li>
					<li><a href="index.php?action=logout"><span>Logout</span> <i class="icon-exit"></i></a></li>
				</ul>
{else}
				<ul class="navigation">				
					<li {if $samping == "1" } class="active" {/if}><a href="index.php?action=showmenu"><span>Dashboard</span> <i class="icon-screen2"></i></a></li>
					<li><a href="#"><span>Master</span> <i class="icon-accessibility"></i></a>
					<ul>
							<li {if $samping == "21" } class="active" {/if}><a href="employee.php">Database Pegawai</a></li>
							<li {if $samping == "22" } class="active" {/if}><a href="pendidikan.php">Pendidikan</a></li>
							<li {if $samping == "23" } class="active" {/if}><a href="eselon.php">Eselon</a></li>
							<li {if $samping == "24" } class="active" {/if}><a href="unitkerja.php">Unit Kerja</a></li>
							<li {if $samping == "25" } class="active" {/if}><a href="jabatan.php">Jabatan</a></li>
							<li {if $samping == "26" } class="active" {/if}><a href="kelompok.php">Kelompok Jabatan</a></li>
							<li {if $samping == "27" } class="active" {/if}><a href="tingkat.php">Tingkat Jabatan</a></li>
							<li {if $samping == "28" } class="active" {/if}><a href="kamus.php">Kamus Kompetensi</a></li>
							<li {if $samping == "29" } class="active" {/if}><a href="matrik.php">Matrik Kompetensi</a></li>
							<li {if $samping == "30" } class="active" {/if}><a href="arah.php">Arah Karir</a></li>
					</ul>
					</li>
					<li><a href="#"><span>Karir</span> <i class="icon-clipboard"></i></a>
					<ul>
							<li {if $samping == "31" } class="active" {/if}><a href="kompetensi.php">Kompetensi Jabatan</a></li>
							<li {if $samping == "32" } class="active" {/if}><a href="ukur.php">Pengukuran Kompetensi Pegawai</a></li>
							<li {if $samping == "33" } class="active" {/if}><a href="hasilkompetensi.php">Hasil Pengukuran Kompetensi</a></li>
							<li {if $samping == "34" } class="active" {/if}><a href="kinerja.php">Kinerja Pegawai</a></li>
							<li {if $samping == "35" } class="active" {/if}><a href="peluangkarir.php">Peluang Karir (Jabatan)</a></li>
							<li {if $samping == "36" } class="active" {/if}><a href="posjbtkosong.php">Posisi Jabatan Kosong</a></li>
							<li {if $samping == "37" } class="active" {/if}><a href="peljabpeg.php">Peluang Karir Pegawai</a></li>
							<li {if $samping == "38" } class="active" {/if}><a href="calpemegangjab.php">Calon Pemegang Jabatan</a></li>
					</ul>
					</li>
					
					<li><a href="index.php?action=logout"><span>Logout</span> <i class="icon-exit"></i></a></li>
				</ul>				
{/if}
				<!-- /main navigation -->