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
						<div class='alert alert-danger'><h5> JANGAN UBAH YANG TIDAK PERLU!</h5></div>
						<table class='table table-bordered table-responsive'>
							<tr>
								<th>Sekolah 1</th>
								<th>Sekolah 2</th>
								<th>Skor S-1</th>
								<th>Skor S-2</th>
								<th>Jadwal Pertandingan</th>
								<th>Waktu Mulai</th>
								<th>Tempat Pertandingan</th>
								<th>Hasil Pertandingan</th>
								<th>Submit</th>
								<th>Reset</th>
							</tr>
						<?php
							$date=date_create("2017-11-20");
							echo date_format($date,"l, d F Y");
							$id = $_GET['id'];
							$link = mysqli_connect("localhost", "u4158364_fairway", "ndasway01", "u4158364_cccup_score");
							//$link = mysqli_connect("localhost", "u4158364_fairway", "ndasway01", "u4158364_master");
							$tampil="select * from $bidang WHERE id = $id";
							$nampung=mysqli_query($link, $tampil); #INGAT! Kalau pakai mysqli_query, harus diawali koneksi ke db. 
							$rows = mysqli_num_rows($nampung);
							if($rows == 0) {
								echo "
							"; } else { while($data=mysqli_fetch_array($nampung)) {
								$sekolah1 	= $data['sekolah1'];
								$sekolah2 	= $data['sekolah2'];
								$skor1		= $data['skor1'];
								$skor2		= $data['skor2'];
								$date 		= $data['date'];
								$mulai 		= $data['jadwal_start'];
								$tempat 	= $data['tempat'];
								$hasil 		= $data['hasil'];
								//
								$date2 		= date('l, d F Y',strtotime($date));
								echo "
								<tr> <form method='POST' action='edit_submit' onsubmit=\"return validateForm()\">
									<td>
										<input type='hidden' name='bidang' value='$bidangsession'>
										<input type='hidden' name='id' value='$id'>
										<input class='form-control' name='sekolah1' type='hidden' value='$sekolah1'>
										$sekolah1
									</td>
									<td>
										<input class='form-control' name='sekolah2' type='hidden' value='$sekolah2'>
										$sekolah2
									</td>
									<td>
										<input class='form-control' name='skor1' type='hidden' value='$skor1'>
										$skor1
									</td>
									<td>
										<input class='form-control' name='skor2' type='hidden' value='$skor2'>
										$skor2
									</td>
									<td><input type='date' class='form-control' name='date' value='$date'> <small>$date2</small>
									</td>
									<td><input type='hidden' class='form-control' name='mulai' value='$mulai'>
									$mulai</td>
									<td>									
									<select type='' class='form-control' name='tempat' id='tempat'>
										<option value=''>-</option>
										<option value='sporthall'>Sport Hall</option>
										<option value='lapanganbola'>Lapangan Bola</option>
										<option value='lapanganbasket'>Lapangan Basket</option>
										<option value='lapanganvoli_a'>Lapangan Voli A</option>
										<option value='lapanganvoli_b'>Lapangan Voli B</option>
										<option value='aula_lt4'>Aula Lt.4</option>
										<option value='aulta_lt2'>Aula Lt.2</option>
									</select>
									awal: $tempat <div class='alert-danger'>HARUS DIPILIH ULANG!</div>
									</td>
									<td><input type='hidden' class='form-control' name='hasil' value='$hasil'> $hasil</td>
									<td>
										<input type='submit' value='submit' class='btn btn-primary' onclick=\"return confirm('Confirm Submission?')\">
										
										
									</td>
									<td>
										<input type='reset' value='reset' class='btn btn-danger'>
									</td>

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
<div class="alert alert-danger" id='alert'><a href='#' data-dismiss="alert" aria-label="close">&times;</a> Form anda tidak lengkap. Periksa lagi!</div>
<!--Loading Wraper Screen -->
</body>
<script>

	$("#alert").hide();
	function validateForm() {
	if( !$('#tempat').val() ) { 
		alert("Periksa Kembali!");
	 	$("#alert").show();  return false;
		}
	}

</script>
</html>