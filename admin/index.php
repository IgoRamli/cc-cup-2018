<?php
include('verif.php'); // Includes Login Script

if(isset($_SESSION['nis'])){
header("location: masterkey"); //akan langsung masuk ke profile.php
}
/*if(!isset($login_session)){
	$kosong = '';
	$login_session = $kosong;
}*/
?>

<!DOCTYPE html>
<html lang="en">
<!--Prerequirements of CSS and JS scripts. ALWAYS COMES FIRST! -->
<?php include("php/01A.prereq.php"); ?>
<!--Header and Footer -->
<!--End of Navbar-->
<!--heading habis-->
<!--Tags-->
<title>Login | OSIS CC</title>
<meta content="Official Website for Canisius High Student Council" name="description"/>
<meta content="osis,2017,kolese,kanisius,menteng,raya,64,lomba,college,canisius,lomba, let,us,dare,web,website,situs,laman,90 tahun kanisius, 90 tahun cc, 90th cc, 90cc,gocc" name="keywords"/>

<!--Facebook Tags-->
<meta content="OSIS SMA Kolese Kanisius" property="og:title"/>
<meta content="The Office of Canisius Senior High Student Council" property="og:description"/>
<meta content="" property="og:url"/>
<meta content="http://osiskanisius.org/sosmedlogo.png" property="og:image"/>
<meta content="1024652052" property="fb:admins"/>
<!--Navbar-->
<!--End of Navbar-->
<br>
<Br>
<div class="col-md-12">
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
			<div class="card">
				<div class="card-header text-center">
					Login
				</div>
				<div class="card-body">
					<div class="container">
					<?php echo $error?>
						<form method="POST" action="">
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-2 col-md-5 col-form-label">Username</label>
								<div class="col-sm-7">
									<input name="nis" class='form-control' placeholder="nis" type="text">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword3" class="col-sm-2 col-md-5 col-form-label">Password</label>
								<div class="col-sm-7">
									<input id="password" class='form-control' name="password" placeholder="**********" type="password">
								</div>
							</div>
							<div class="form-group row">
								<div class="offset-sm-2 col-sm-10">
					<input name="submit" type="submit" class="btn btn-primary" value=" Login ">
					<input name='Reset' type='Reset' class="btn btn-danger" value='Reset'>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
	  </div>
	</div>
</div>
<!--<div class="container-fluid text-center putih duapuluh bg-dark-grey">-->
<BR><BR>
</body>
	




</html>