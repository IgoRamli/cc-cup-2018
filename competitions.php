<!DOCTYPE HTML>
<html lang="en-US">
<head>
<title>Competitions - CC CUP 2018</title>
<!--META-->
<meta content="CC Cup 2018" property="og:title"/>
<meta content="osis,2017,kolese,kanisius,menteng,raya,64,lomba,college,canisius,lomba, sequor ergo sum,web,website,situs,laman,90 tahun kanisius, 90 tahun cc,90cc,kompetisi,cccup,cc cup 2018" name="keywords"/>
<meta content="Wadah ekspresi perkembangan talenta jiwa-jiwa muda dalam bidang olahraga dan seni. Ikuti Kompetisinya di SMA Kolese Kanisius Jakarta!" property="og:description"/>
<meta content="Wadah ekspresi perkembangan talenta jiwa-jiwa muda dalam bidang olahraga dan seni. Ikuti Kompetisinya di SMA Kolese Kanisius Jakarta!" name="description"/>
<meta content="" property="og:url"/>
<meta content="http://cccup.osiskanisius.org/images/logo.png" property="og:image"/>
<meta content="1024652052" property="fb:admins"/>
<!--META-->
<?php include 'php/head.php';?>
<link rel="stylesheet" href="css/landing.css" type="text/css">
<link rel="stylesheet" href="css/navbar-landing.css" type="text/css">
</head>

<body>
<?php include('php/navbar-landing.php');?>
  <section class='intro'>
		<div class='content container-fluid'>
			<h1 class="title dark-ministry loose2">COMPETITIONS</h1><br>
		</div>
  </section>

<?php 
include('php/cccup-variables.php');

$lomba = array($badminton, $band, $basket, $billiard, $chess, $moderndance, $paskibra, $pencaksilat, $photography, $shortmovie, $soccer, $tabletennis,  $taekwondo, $volley,  $wallclimbing, $womenfutsal);

foreach ($lomba as $value) {
  echo "
  <section class='intro'>
		<div class='content container-fluid' id='$value[0]' name='$value[0]'>
			<h1 class='text-center xperia'><b>$value[1]</b></h1>
			<div class='row justify-content-sm-center'>
				<div class='col-md-6 col-sm-8 col-xs-10 text-center'>$value[2]</div>
			</div>
			<div class='row justify-content-sm-center'>
				<div class='col-md-6 col-sm-8 col-xs-10 text-center'>
					<h3 class='oranienbaum'><span class='fa fa-user-circle-o'></span><b class='small-caps'>  Contacts</b> : $value[3]</h3>
					<h3 class='oranienbaum'><img src='images/01_logo/line.png' width=24 height=24><b class='small-caps'> Line ID</b> : $value[4]</h3>
					<h3 class='oranienbaum'><span class='fa fa-phone-square'></span><b class='small-caps'>  Phone</b> : $value[5]</h3>
				</div>
			</div>
			<div class='row justify-content-sm-center'>
				<div class='col-md-6 col-sm-8 col-xs-10 text-center'>
					<h2 class='oswald small-caps'>$value[1]'s rules</h2>
					<form method='POST' action='php/guidesdownload' target='_blank'>
					<input type='hidden' value='$value[0]' name='bid'>
					<div class='btn-group' role='group'>
					<input type='submit' class='btn button btn-red hvr-wobble-skew roboto-condensed' value='DOWNLOAD' name='view'>
					<input type='submit' class='btn button btn-red2 hvr-wobble-skew roboto-condensed' value='PREVIEW' name='view'>
				</form>
				</div>
			</div>
		</div>
  </section>";
}
?>  

</body>

</html>