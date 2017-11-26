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
<head>



</head>

<body>

	<div class='container-fluid'>
		<h3 class='text-center'>Administrator Canisius College Cup 2018</h3>
		<h5 class='text-center'>Sequor Ergo Sum.</h5>
		<small> <?php echo "Koorbid $cabang_lomba";?> | <a href='logout' class=''>Logout |</a></small>
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
						<div class='alert alert-info'><h1> Selamat Datang</h1></div>
						<div class='card'>
							<div class='card-header'><h4>Pengunguman untuk Korbid Hari</h4></div>
							<?php
								$link = mysqli_connect("localhost", "u4158364_fairway", "ndasway01", "u4158364_cccup_score");
								//$link = mysqli_connect("localhost", "u4158364_fairway", "ndasway01", "u4158364_master");
								$tampil="select * from pengungumankorbid";
								$nampung=mysqli_query($link, $tampil); #INGAT! Kalau pakai mysqli_query, harus diawali koneksi ke db. 
								$rows = mysqli_num_rows($nampung);
								if($rows == 0) {
									echo "
										 <div class='card-body'>
											<h4 class='card-title'>Tidak terdapat pengunguman.</h4>
										</div>
								"; } else {
								while($data=mysqli_fetch_array($nampung)) {
									$title=$data['title_1'];
									$news=$data['news_1'];
									$pic = $data['pic'];
									$input = $data['inputtime'];
									if ($data['lastmodified'] == 0 ) {
									$modif = 'News has not been updated'; } else {
									$modif = $data['lastmodified']; }

										echo "
										  <div class='card-body'>
											<h4 class='card-title'>$title</h4>
											<p class='card-text'>$news</p>
											<hr>
											<small>Written by: $pic | Submitted at: $input | Last Edited: $modif</small>
										  </div>
										";
									}			
								}
							?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Navbar End--> 
<!--Loading Wraper Screen -->
</body>
</html>
		<script type='text/javascript'>
		$("#modal").iziModal();

		$(document).on('click', '.trigger', function (event) {
    event.preventDefault();
    $('#modal').iziModal('open');
});
	</script>