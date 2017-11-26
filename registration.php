<!DOCTYPE HTML>
<html lang="en-US">

<head>
<title>Registration - CC Cup 2018</title>
<?php 
	include ('php/head.php');
	include ('php/verificator.php');
	if(isset($bidang)) {
		header('location: registrationgo.php');
	}
	error_reporting(0);


?>
<!--META-->
<meta content="CC Cup 2018" property="og:title"/>
<meta content="osis,2017,kolese,kanisius,menteng,raya,64,lomba,college,canisius,lomba, sequor ergo sum,web,website,situs,laman,90 tahun kanisius, 90 tahun cc,90cc,kompetisi,cccup,cc cup 2018" name="keywords"/>
<meta content="Wadah ekspresi perkembangan talenta jiwa-jiwa muda dalam bidang olahraga dan seni. Ikuti Kompetisinya di SMA Kolese Kanisius Jakarta!" property="og:description"/>
<meta content="Wadah ekspresi perkembangan talenta jiwa-jiwa muda dalam bidang olahraga dan seni. Ikuti Kompetisinya di SMA Kolese Kanisius Jakarta!" name="description"/>
<meta content="" property="og:url"/>
<meta content="http://cccup.osiskanisius.org/images/logo.png" property="og:image"/>
<meta content="1024652052" property="fb:admins"/>
<!--META-->
<link rel="stylesheet" href="css/landing.css" type="text/css">
<link rel="stylesheet" href="css/navbar-landing.css" type="text/css">
</head>

<style>
html, body
</style>
<?php include('php/navbar-landing.php');?>
<body>
	<div class='intro bg-norepeat'>
	<div class="blunt-content2 text-white">
		<div style='background: rgba(255,255,255,0.3)'>
		<i class="fa fa-pencil-square-o fa-3x" aria-hidden="true"></i>
		<h1>YUK DAFTAR CC CUP 2018!</h1>
		<p>Pilih pertandingan yang ingin diikuti dibawah ini</p>
		<div class='col-md-5 mx-auto my-auto' style=''>
			<form class='form' method='POST' action='registrationgo'>
				<select name='bidang' class='form-control'>
					<option value='band'>Band</option>
					<option value='billiard'>Billiard</option>
					<option value='bolabasket_pa'>Basket Putra</option>
					<option value='bolavoli_pa'>Bola Voli Putra</option>
					<option value='bolavoli_pi'>Bola Voli Putri</option>
					<option value='bulutangkis_pa'>Bulu Tangkis Putra</option>
					<option value='bulutangkis_pi'>Bulu Tangkis Putri</option>
					<option value='catur'>Catur</option>
					<option value='fotografi'>Fotografi</option>
					<option value='futsalputri'>Futsal Putri</option>
					<option value='paskibra'>Paskibra</option>
					<option value='pencaksilat'>Pencak Silat</option>
					<option value='moderndance'>Modern Dance</option>
					<option value='sepakbola'>Sepak Bola (Putra)</option>
					<option value='shortmovie'>Short Movie</option>
					<option value='taekwondo'>Tae Kwon Do</option>
					<option value='tenismeja'>Tenis Meja (Putra)</option>
					<option value='wallclimbing_pa'>Wallclimbing Putra</option>
					<option value='wallclimbing_pi'>Wallclimbing Putri</option>
				</select>
				<input type='submit' class='btn btn-primary' value=' Submit '>
			</form>
		</div>
		</div>
		</div>
	</div>
	</div>
</body>
<?php include('php/03A.footer.php'); ?>
</html>





