<?php
$basename = basename($_SERVER['SCRIPT_NAME']);

?>
	<ul class="nav flex-column">
		<li class="nav-item nav-pills">
			<a class="nav-link <?php echo $indexactive; ?>" href="index"  >Home</a>
		</li>
		<li class='nav-item nav-pills'>
			<a class='nav-link' href="viewregist">Lihat Pendaftaran <?php echo $cabang_lomba ?></a>
		</li>
		<li class="nav-item nav-pills dropdown">
			<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Jadwal
			</a>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="jadwal">Ubah Jadwal Pertandingan</a>
				<a class="dropdown-item" href="jadwal+">Tambah Jadwal Pertandingan</a>
				<div class="dropdown-divider"></div>
		    </div>
		</li>
		<li class="nav-item nav-pills dropdown">
			<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Scoring
			</a>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="scoring">Ubah skor</a>
				<div class="dropdown-divider"></div>
		    </div>
		</li>
		<li class="nav-item nav-pills dropdown">
			<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Pengunguman
			</a>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="#">Pengunguman Peserta</a>
				<a class="dropdown-item" href="#">Pengunguman Korbid dan Panitia</a>
				<div class="dropdown-divider"></div>
		    </div>
		</li>

		<li class="nav-item">
			<hr>
		</li>
	</ul>