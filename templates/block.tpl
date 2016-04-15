<!-- Info Block -->
{if $statuslogin == "0"}
<ul class="info-blocks">
				<li class="bg-primary">
					<div class="top-info">
						<a href="profile.php">Profile</a>
						<small>Data LPK Swasta</small>
					</div>
					<a href="profile.php"><i class="icon-profile"></i></a>
					<span class="bottom-info bg-danger">{$namalpk}</span>
				</li>
				<li class="bg-success">
					<div class="top-info">
						<a href="kejuruan.php">Kejuruan</a>
						<small>Kejuruan dan TUK</small>
					</div>
					<a href="kejuruan.php"><i class="icon-clipboard"></i></a>
					<span class="bottom-info bg-primary">{$namalpk}</span>
				</li>
				<li class="bg-danger">
					<div class="top-info">
						<a href="pegawai.php">Pegawai</a>
						<small>Instruktur dan Tenaga</small>
					</div>
					<a href="pegawai.php"><i class="icon-accessibility"></i></a>
					<span class="bottom-info bg-primary">{$namalpk}</span>
				</li>
				<li class="bg-info">
					<div class="top-info">
						<a href="uploadfoto.php">Upload Photo</a>
						<small>Tampilan LPK Swasta</small>
					</div>
					<a href="uploadfoto.php"><i class="icon-camera"></i></a>
					<span class="bottom-info bg-primary">{$namalpk}</span>
				</li>
				<li class="bg-warning">
					<div class="top-info">
						<a href="peserta.php">Peserta</a>
						<small>Data Peserta Uji</small>
					</div>
					<a href="peserta.php"><i class="icon-users"></i></a>
					<span class="bottom-info bg-primary">{$namalpk}</span>
				</li>
				<li class="bg-primary">
					<div class="top-info">
						<a href="printout.php?username={$username}">Print Out</a>
						<small>Cetak Profile Lembaga</small>
					</div>
					<a href="printout.php?username={$username}"><i class="icon-print"></i></a>
					<span class="bottom-info bg-danger">{$namalpk}</span>
				</li>
			</ul>
{/if}
				<!-- /main navigation -->