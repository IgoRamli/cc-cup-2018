<!DOCTYPE html>
<html lang="en">
<!--Prerequirements of CSS and JS scripts. ALWAYS COMES FIRST! -->
<?php 
	include("php/01A.prereq.php"); 
	include("session.php");
	include("php/verificator.php");
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
	<small> <?php echo $cabang_lomba;?> | <a href='logout' class=''>Logout |</a></small>
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
					<div class='alert alert-info'><h5> Mengubah Skor Pertandingan</h5></div>
					<table class='table table-bordered table-responsive'>
						<tr>
							<th>ID</th>
							<th>Sekolah 1</th>
							<th>Sekolah 2</th>
							<th>Skor S-1</th>
							<th>Skor S-2</th>
							<th>Jadwal Pertandingan</th>
							<th>Waktu Mulai</th>
							<th>Tempat Pertandingan</th>
							<th>Hasil Pertandingan</th>
							<th>Edit</th>
						</tr>
					<?php
						$link = mysqli_connect("localhost", "u4158364_fairway", "ndasway01", "u4158364_cccup_score");
						//$link = mysqli_connect("localhost", "u4158364_fairway", "ndasway01", "u4158364_master");
						$tampil="select * from $bidang";
						$nampung=mysqli_query($link, $tampil); #INGAT! Kalau pakai mysqli_query, harus diawali koneksi ke db. 
						$rows = mysqli_num_rows($nampung);
						if($rows == 0) {
							echo "
						"; } else { while($data=mysqli_fetch_array($nampung)) {
							$id 		= $data['id'];
							$sekolah1 	= $data['sekolah1'];
							$sekolah2 	= $data['sekolah2'];
							$skor1		= $data['skor1'];
							$skor2		= $data['skor2'];
							$jadwal 	= $data['date'];
							$mulai 		= $data['jadwal_start'];
							$tempat 	= $data['tempat'];
							$hasil 		= $data['hasil'];
							echo "
							<tr>
								<td>$id</td>
								<td>$sekolah1</td>
								<td>$sekolah2</td>
								<td>$skor1</td>
								<td>$skor2</td>
								<td>$jadwal</td>
								<td>$mulai</td>
								<td>$tempat</td>
								<td>$hasil</td>
								<td><a href='edit_jadwal?id=$id'>Edit</td>

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