<!DOCTYPE html>
<html lang="en">
<!--Prerequirements of CSS and JS scripts. ALWAYS COMES FIRST! -->
<?php 
	include("php/01A.prereq.php"); 
	include("session.php");
	error_reporting(1);
?>
<!--Header and Footer -->

<!--Tags-->
<!--Tags-->
<title>Invitasi OSIS CC</title>
<!-- Standart META -->
   
</head>
<style>
th {
font-size: 0.9em;
}
</style>
<body>
<div class='container-fluid'>
	<h3 class='text-center'>Administrator Canisius College Cup 2018</h3>
	<h5 class='text-center'>Sequor Ergo Sum.</h5>
	<small> Korbid <?php echo $cabang_lomba;?> | <a href='logout' class=''>Logout |</a></small>
	<small class='float-md-right'> Script by: Hardy Valenthio (in collaboration with Aryo Pradhana)</small>
	<hr></hr>
</div>
<div class='container-fluid'>
	<div class='row'>
		<div class='col-md-2'>
			<?php include('php/adminsidebar.php'); ?>
		</div>
		<div class='col-md-10'>
			<div class='col-md-12'>
				<div class='container-fluid'>
					<div class='alert alert-info'><h5>Lihat Pendaftaran</h5></div>
					<table class='table table-bordered table-responsive'>
						<tr>
							<th>Nama Sekolah</th>
							<th>Nama Pendaftar</th>
							<th>Kontak Pendaftar</th>
							<th>Pas Foto</th>
							<th>KTP</th>
							<th>Dimasukkan pada</th>
						</tr>
					<?php
						$link = mysqli_connect("localhost", "u4158364_fairway", "ndasway01", "u4158364_cccup");
						//$link = mysqli_connect("localhost", "u4158364_fairway", "ndasway01", "u4158364_master");
						$tampil="SELECT * FROM $bidang ";
						$nampung=mysqli_query($link, $tampil); #INGAT! Kalau pakai mysqli_query, harus diawali koneksi ke db. 
						$rows = mysqli_num_rows($nampung);
						$verpasfoto = '';
						$verktp = '';
						if($rows == '0') {
							echo "<tr><td colspan='6'>Tidak Ada Data.</td></tr>
						"; } elseif($rows >= '1') { while($data=mysqli_fetch_array($nampung)) {
								$namasekolah 	= $data['nama_sekolah'];
								$namapendaftar 	= $data['nama_pendaftar'];
								$kontak			= $data['kontak_pendaftar'];
								$dir			= $data['directory'];
								$pasfoto		= $data['location'];
								$ktp 			= $data['location2'];
								$timestamp		= $data['timestamp'];
							echo "
							<tr>
								<td>$namasekolah</td>
								<td>$namapendaftar</td>
								<td>$kontak</td>
								<td>$pasfoto</td>
								<td>$ktp</td>
								<td>$timestamp</td>

							";

							}
						}	

					?>
					</table>
				</div>
			</div>
		</div>
	</div>
<!--Navbar End--> 
<!--Loading Wraper Screen -->
</body>
</html>