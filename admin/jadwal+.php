<!DOCTYPE html>
<html lang="en">
<!--Prerequirements of CSS and JS scripts. ALWAYS COMES FIRST! -->
<?php 
	include("php/01A.prereq.php"); 
	$bidangsession = 'band';
	error_reporting(0);
?>
<!--Header and Footer -->
<script src="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.js"></script>
<link href="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet"/>
<!--Tags-->
<!--Tags-->
<title>Invitasi OSIS CC</title>
<!-- Standart META -->
       
</head>
<style>
th {
	font-size: 1em;
}
</style>
<body>
	<div class='container-fluid'>
		<h3 class='text-center'>Administrator Canisius College Cup 2018</h3>
		<h5 class='text-center'>Sequor Ergo Sum.</h5>
		<small> <?php echo $login_session;?> | <a href='logout' class=''>Logout |</a></small>
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
						<div class='alert alert-info'><h5> Tambah Jadwal</h5></div>
						<div class='alert alert-danger'><h5> JANGAN UBAH YANG TIDAK PERLU!</h5></div>
						<table class='table table-bordered table-responsive'>
							<tr> <form method='POST' action='input_submit.php'>
								<th>Sekolah 1</th>
								<td>
									<input type='hidden' name='bidang' value='<?php echo $bidangsession ?>'>
									<input class='form-control' name='sekolah1' type='' value='' required>
								</td>
							</tr>	
							<tr>							
								<th>Sekolah 2</th>
								<td>
									<input class='form-control' name='sekolah2' type='' value='' required>
								</td>
							</tr>
							<tr>
								<th>Skor S-1</th>
								<td>
									<input class='form-control' name='skor1' type='' value='' required>
								</td>
							</tr>
							<tr>
								<th>Skor S-2</th>
								<td>
									<input class='form-control' name='skor2' type='' value='' required>
								</td>
							</tr>
							<tr>
								<th>Jadwal Pertandingan</th>
								<td><input type='date' class='form-control' name='date' value='' required></td>
							</tr>
							<tr>
								<th>Waktu Mulai</th>
								<td><input type='time' class='form-control' id='x' name='mulai' value='' required></td>
							</tr> 
							<tr>
								<th>Tempat Pertandingan</th>
								<td>
									<select type='' class='form-control' name='tempat' value='' required>
										<option value=''>-</option>
										<option value='sporthall'>Sport Hall</option>
										<option value='lapanganbola'>Lapangan Bola</option>
										<option value='lapanganbasket'>Lapangan Basket</option>
										<option value='lapanganvoli_a'>Lapangan Voli A</option>
										<option value='lapanganvoli_b'>Lapangan Voli B</option>
										<option value='aula_lt4'>Aula Lt.4</option>
										<option value='aulta_lt2'>Aula Lt.2</option>
								</td>
							</tr>
							<tr>
								<th>Hasil Pertandingan</th>
								<td><input type='' class='form-control' name='hasil' value='' required></td>
							</tr>
							<tr>
								<th>Submit</th>
								<td>
									<input type='submit' value='submit' class='btn btn-primary' onclick="return confirm('Confirm Submission?')">
								</td>
							</tr>
							<tr>
								<th>Reset</th>
								<td>
									<input type='reset' value='reset' class='btn btn-danger'>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
<!--Navbar End--> 
<script>
	var timepicker = new TimePicker(['time'], {	
  lang: 'en',
  theme: 'dark'
});
timepicker.on('change', function(evt) {
  
  var value = (evt.hour || '00') + ':' + (evt.minute || '00');
  evt.element.value = value;

});
</script>
<!--Loading Wraper Screen -->
</body>
</html>
