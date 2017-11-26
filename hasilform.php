<?php 



include('php/head.php'); 

echo"<head>";

include('php/navbar-landing.php');

echo"</head>";



/*



CASANOVA ONLINE REGISTRATION SCRIPT BY: ADAM JUAN POGA (CC'17) - COMPILED FROM VARIOUS SOURCES AND MODIFIED



MODIFIED FOR USAGE FOR CANISIUS COLLEGE CUP 2018 BY : ARYO PRADHANA P. (CC'17)



*/

error_reporting(1); // Matiin Ego biar ga ngedump :v

$a = 1;

$x = (int)(isset($_POST['x']) ? $_POST['x'] : null);

$max = (int)(isset($_POST['max']) ? $_POST['max'] : null);



$link = mysqli_connect("localhost", "u4158364_fairway", "ndasway01", "u4158364_cccup"); //lama

// $link = mysqli_connect("localhost", "root", "", "canisiu1_canisiuscup"); // localhost

// $link = mysqli_connect("localhost", "canisiu1_fairview", "ndasway01", "canisiu1_canisiuscup"); //canisiuscup.com

if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}



$table = mysqli_real_escape_string($link, $_POST['table']);



$nama_sekolah = mysqli_real_escape_string($link, $_POST['nama_sekolah']);

$cabang_lomba = mysqli_real_escape_string($link, $_POST['cabang_lomba']);

$kontak_pendaftar = mysqli_real_escape_string($link, $_POST['kontak_pendaftar']);



// UNTUK BIDANG YANG PERLU ATENSI KHUSUS, MIS. TAEKWONDO YANG ADA PEMBAGIAN KELAS, BUAT QUERY SENDIRI DENGAN <IF> !!! //

if($table == 'taekwondo' OR $table == 'pencaksilat') {

	$weight = mysqli_real_escape_string($link, $_POST['weight']);

	if($table == 'taekwondo') {

		if($weight<=63) {

			$class = 'Under 63kg';

		} elseif($weight>=63.01 AND $weight<=74){

			$class='Under 74kg';

		} elseif($weight>=74){

			$class='Above 74kg';

		}  

	} elseif($table =='pencaksilat') {

		if($weight>=72 AND $weight<=80){

			$class='E';

		} elseif($weight>=66 AND $weight<=69.9){

			$class='D';

		} elseif($weight>=60 AND $weight<=63.9){

			$class='C';

		} elseif($weight>=54 AND $weight<=57.9){

			$class='B';

		} elseif($weight>=48 AND $weight<=51.9){

			$class='A';

		}      

	}

	$tim = 1;

	if($max==0)

	{

		$directory = "image/$table";

	} else {

		$directory = "image/$table/$nama_sekolah-$tim-$class";

		if($max>=1){

		if(mkdir($directory))

		{

			echo "";

		} else {

			$tim++;

			$directory = "image/$table/$nama_sekolah-$tim-$class";

			if($max>=2){

			if(mkdir($directory))

			{

				echo "";

			} else {

				if($max>=3){

				if(mkdir($directory)){

					$tim++;

					$directory = "image/$table/$nama_sekolah-$tim-$class";

					mkdir($directory);

				} else {

					$directory = "";

				}}

			}}

		}}

	}



	while($a <= $x){

		${"nama_pendaftar" . $a} = mysqli_real_escape_string($link, $_POST["nama_pendaftar" . $a]);

		if(${"nama_pendaftar" . $a} ==! "") {

			if($a == 1){



				$fileName1 = $_FILES["pasfoto" . $a]['name']; 

				$fileSize1 = $_FILES["pasfoto" . $a]['size']; 

				$fileError1 = $_FILES["pasfoto" . $a]['error'];

				$imageFileType1 = pathinfo($fileName1,PATHINFO_EXTENSION);

				$fn1 = ${"nama_pendaftar" . $a}."_pasfoto.".$imageFileType1;

				//

				$fileName2 = $_FILES["ktp" . $a]['name']; 

				$fileSize2 = $_FILES["ktp" . $a]['size']; 

				$fileError2 = $_FILES["ktp" . $a]['error'];

				$imageFileType2 = pathinfo($fileName2,PATHINFO_EXTENSION);

				$fn2 = ${"nama_pendaftar" . $a}."_ktp.".$imageFileType2;

				//

				$fileName3 = $_FILES["akte_lahir"]['name']; 

				$fileSize3 = $_FILES["akte_lahir"]['size']; 

				$fileError3 = $_FILES["akte_lahir"]['error'];

				$imageFileType3 = pathinfo($fileName3,PATHINFO_EXTENSION);

				$fn3 = ${"nama_pendaftar" . $a}."_akte_lahir.".$imageFileType3;

				//

				$fileName4 = $_FILES["sertifikat_tkw"]['name']; 

				$fileSize4 = $_FILES["sertifikat_tkw"]['size']; 

				$fileError4 = $_FILES["sertifikat_tkw"]['error'];

				$imageFileType4 = pathinfo($fileName4,PATHINFO_EXTENSION);

				$fn4 = ${"nama_pendaftar" . $a}."_sertifikat_tkw.".$imageFileType4;

				//

				$fileName5 = $_FILES["sks"]['name']; 

				$fileSize5 = $_FILES["sks"]['size']; 

				$fileError5 = $_FILES["sks"]['error'];

				$imageFileType5 = pathinfo($fileName5,PATHINFO_EXTENSION);

				$fn5 = ${"nama_pendaftar" . $a}."_sks.".$imageFileType5;

				//

				if($fileSize1 >! 0 || $fileError1 ==! 0 || $imageFileType1 ==! "jpg" || $imageFileType1 ==! "png" || $imageFileType1 ==! "jpeg" || $imageFileType1 ==! "gif" ||

				$fileSize2 >! 0 || $fileError2 ==! 0 || $imageFileType2 ==! "jpg" || $imageFileType2 ==! "png" || $imageFileType2 ==! "jpeg" || $imageFileType2 ==! "gif" ||

				$fileSize3 >! 0 || $fileError3 ==! 0 || $imageFileType3 ==! "jpg" || $imageFileType3 ==! "png" || $imageFileType3 ==! "jpeg" || $imageFileType3 ==! "gif" ||

				$fileSize4 >! 0 || $fileError4 ==! 0 || $imageFileType4 ==! "jpg" || $imageFileType4 ==! "png" || $imageFileType4 ==! "jpeg" || $imageFileType4 ==! "gif" ||

				$fileSize5 >! 0 || $fileError5 ==! 0 || $imageFileType5 ==! "jpg" || $imageFileType5 ==! "png" || $imageFileType5 ==! "jpeg" || $imageFileType5 ==! "gif"){

					echo "Failed to Upload : ".$fileError;

				} else {

					$move = move_uploaded_file($_FILES["pasfoto" . $a]['tmp_name'], $directory."/".$fn1);

					$move2 = move_uploaded_file($_FILES["ktp" . $a]['tmp_name'], $directory."/".$fn2); 

					$move3 = move_uploaded_file($_FILES["akte_lahir"]['tmp_name'], $directory."/".$fn3); 

					$move4 = move_uploaded_file($_FILES["sertifikat_tkw"]['tmp_name'], $directory."/".$fn4); 

					$move5 = move_uploaded_file($_FILES["sks"]['tmp_name'], $directory."/".$fn5); 

					if($move && $move2){

						echo "<body><br><div class='container-fluid my-5'><div class='col-md-12 text-left alert alert-success'><h1>Success!</h1></div></div>";

						${"test" . $a} = "INSERT INTO $table (nama_sekolah, cabang_lomba, nama_pendaftar, kontak_pendaftar, weight, directory, class, filename, location, id2, filename2, location2, location3, location4, location5)

							VALUES ('$nama_sekolah', '$cabang_lomba', '${"nama_pendaftar" . $a}', '$kontak_pendaftar', '$weight', '$directory', '$class', '$fileName1', '$fn1' , '', '$fileName2', '$fn2', '$fn3', '$fn4', '$fn5')"; 

					} else {

						echo "<h1>Failed! </h1>";

					}

				}



			} else {



				

				$fileName1 = $_FILES["pasfoto" . $a]['name']; 

				$fileSize1 = $_FILES["pasfoto" . $a]['size']; 

				$fileError1 = $_FILES["pasfoto" . $a]['error'];

				$imageFileType1 = pathinfo($fileName1,PATHINFO_EXTENSION);

				$fn1 = ${"nama_pendaftar" . $a}."_pasfoto.".$imageFileType1;

				$fileName2 = $_FILES["ktp" . $a]['name']; 

				$fileSize2 = $_FILES["ktp" . $a]['size']; 

				$fileError2 = $_FILES["ktp" . $a]['error'];

				$imageFileType2 = pathinfo($fileName2,PATHINFO_EXTENSION);

				$fn2 = ${"nama_pendaftar" . $a}."_ktp.".$imageFileType2;

				if($fileSize1 >! 0 || $fileError1 ==! 0 || $imageFileType1 ==! "jpg" || $imageFileType1 ==! "png" || $imageFileType1 ==! "jpeg" || $imageFileType1 ==! "gif" ||

				$fileSize2 >! 0 || $fileError2 ==! 0 || $imageFileType2 ==! "jpg" || $imageFileType2 ==! "png" || $imageFileType2 ==! "jpeg" || $imageFileType2 ==! "gif"){

					echo "Failed to Upload : ".$fileError;

				} else {

					$move = move_uploaded_file($_FILES["pasfoto" . $a]['tmp_name'], $directory."/".$fn1);

					$move2 = move_uploaded_file($_FILES["ktp" . $a]['tmp_name'], $directory."/".$fn2); 

					if($move && $move2){

						echo "";

						${"test" . $a} = "INSERT INTO $table (nama_sekolah, cabang_lomba, nama_pendaftar, kontak_pendaftar, weight, class, filename, location, id2, filename2, location2)

							VALUES ('$nama_sekolah', '$cabang_lomba', '${"nama_pendaftar" . $a}', '$kontak_pendaftar', '$weight', '$class', '$fileName1', '$fn1' , '', '$fileName2', '$fn2')"; 

					} else {

						echo "<h3>Failed! </h3>";

					}

				}

			}

			if(mysqli_query($link, ${'test' . $a}))

			{

			} else {

	   			mysqli_error($link);

			}

		}

		$a++;

	}



		echo"

		<body>

		<div class='col-md-12 align-content-md-center text-justify'>	

			<table class='table table-fluid align-content-md-center table-bordered'>

					<tr>

								<th colspan='2' class='text-center'>Hasil Input Pendaftaran</th>

							</tr>



							<tr>

								<th style='width: 20%'>Nama Sekolah</th>

								<td>'$nama_sekolah'</td>

							</tr>

							<tr>

								<th>Cabang Lomba</th>

								<td>'$cabang_lomba'</td>

							</tr>

							<tr>

								<th>Kontak Pendaftar:</th>

								<td>'$kontak_pendaftar'</td>

							</tr>

							<tr>

								<th>Nama:</th><td> <ol>";

								$a = 1;

							while($a <= $x){

								if(${"nama_pendaftar" . $a} ==! "")

									{

										echo "

										<li>'${"nama_pendaftar" . $a}'</li>";

									}

								$a++;

							}

							echo"</ul></td></tr>

							<tr><th>Berat:</th><td>$weight kg</td></tr>

							<tr><th>Class:</th><td>$class</td></tr>

						</table>

						<div class='col-md-12 alert alert-warning'><b>

						Bukti pembayaran uang WO harap dikirim ke: <u>cccup2018@gmail.com</u><br>

						Jika tidak mengirim bukti pembayaran, peserta tidak dapat menarik uang WO kembali.<br>

						Format Pengiriman: NamaKontak(Pendaftar Pertama)_asalsekolah_cabanglomba<br>

						Data sudah dimasukkan ke dalam database<br></b>

						</div>

					</div>";

					include('php/03A.footer.php');

} //* End for Regist Script for TaeKwo



/* Masuk Ke Script Registrasi Bidang Biasa (Ga Perlu Aneh-Aneh kayak Tae Kwon Do ato Pencak Silat) */

else {

$tim = 1;

if($max==0)

{

	$directory = "image/$table";

} else {

	$directory = "image/$table/$nama_sekolah-$tim";

	if($max>=1){

	if(mkdir($directory))

	{

		echo "";

	} else {

		$tim++;

		$directory = "image/$table/$nama_sekolah-$tim";

		if($max>=2){

		if(mkdir($directory))

		{

			echo "";

		} else {

			if($max>=3){

			if(mkdir($directory)){

				$tim++;

				$directory = "image/$table/$nama_sekolah-$tim";

				mkdir($directory);

			} else {

				$directory = "";

			}}

		}}

	}}

}



while($a <= $x){

	${"nama_pendaftar" . $a} = mysqli_real_escape_string($link, $_POST["nama_pendaftar" . $a]);

	if(${"nama_pendaftar" . $a} ==! "") {

		if($a == 1){



			$fileName1 = $_FILES["pasfoto" . $a]['name']; 

			$fileSize1 = $_FILES["pasfoto" . $a]['size']; 

			$fileError1 = $_FILES["pasfoto" . $a]['error'];

			$imageFileType1 = pathinfo($fileName1,PATHINFO_EXTENSION);

			$fn1 = ${"nama_pendaftar" . $a}."_pasfoto.".$imageFileType1;

			$fileName2 = $_FILES["ktp" . $a]['name']; 

			$fileSize2 = $_FILES["ktp" . $a]['size']; 

			$fileError2 = $_FILES["ktp" . $a]['error'];

			$imageFileType2 = pathinfo($fileName2,PATHINFO_EXTENSION);

			$fn2 = ${"nama_pendaftar" . $a}."_ktp.".$imageFileType2;

			if($fileSize1 >! 0 || $fileError1 ==! 0 || $imageFileType1 ==! "jpg" || $imageFileType1 ==! "png" || $imageFileType1 ==! "jpeg" || $imageFileType1 ==! "gif" ||

			$fileSize2 >! 0 || $fileError2 ==! 0 || $imageFileType2 ==! "jpg" || $imageFileType2 ==! "png" || $imageFileType2 ==! "jpeg" || $imageFileType2 ==! "gif"){

				echo "Failed to Upload : ".$fileError;

			} else {

				$move = move_uploaded_file($_FILES["pasfoto" . $a]['tmp_name'], $directory."/".$fn1);

				$move2 = move_uploaded_file($_FILES["ktp" . $a]['tmp_name'], $directory."/".$fn2); 

				if($move && $move2){

					echo "<div class='col-md-12 alert alert-success text-left my-5'><h1>Success!</h1></div>";

					${"test" . $a} = "INSERT INTO $table (nama_sekolah, cabang_lomba, nama_pendaftar, kontak_pendaftar, id,  directory, filename, location, id2, filename2, location2)

						VALUES ('$nama_sekolah', '$cabang_lomba', '${"nama_pendaftar" . $a}', '$kontak_pendaftar', '', '$directory', '$fileName1', '$fn1' , '', '$fileName2', '$fn2')"; 

				} else {

					echo "<h1>Failed! </h1>";

				}

			}



		} else {



			

			$fileName1 = $_FILES["pasfoto" . $a]['name']; 

			$fileSize1 = $_FILES["pasfoto" . $a]['size']; 

			$fileError1 = $_FILES["pasfoto" . $a]['error'];

			$imageFileType1 = pathinfo($fileName1,PATHINFO_EXTENSION);

			$fn1 = ${"nama_pendaftar" . $a}."_pasfoto.".$imageFileType1;

			$fileName2 = $_FILES["ktp" . $a]['name']; 

			$fileSize2 = $_FILES["ktp" . $a]['size']; 

			$fileError2 = $_FILES["ktp" . $a]['error'];

			$imageFileType2 = pathinfo($fileName2,PATHINFO_EXTENSION);

			$fn2 = ${"nama_pendaftar" . $a}."_ktp.".$imageFileType2;

			if($fileSize1 >! 0 || $fileError1 ==! 0 || $imageFileType1 ==! "jpg" || $imageFileType1 ==! "png" || $imageFileType1 ==! "jpeg" || $imageFileType1 ==! "gif" ||

			$fileSize2 >! 0 || $fileError2 ==! 0 || $imageFileType2 ==! "jpg" || $imageFileType2 ==! "png" || $imageFileType2 ==! "jpeg" || $imageFileType2 ==! "gif"){

				echo "Failed to Upload : ".$fileError;

			} else {

				$move = move_uploaded_file($_FILES["pasfoto" . $a]['tmp_name'], $directory."/".$fn1);

				$move2 = move_uploaded_file($_FILES["ktp" . $a]['tmp_name'], $directory."/".$fn2); 

				if($move && $move2){

					echo "";

					${"test" . $a} = "INSERT INTO $table (nama_sekolah, cabang_lomba, nama_pendaftar, id, directory, filename, location, id2, filename2, location2)

						VALUES ('$nama_sekolah', '$cabang_lomba', '${"nama_pendaftar" . $a}', '', '$directory', '$fileName1', '$fn1' , '', '$fileName2', '$fn2')"; 

				} else {

					echo "<h3>Failed! </h3>";

				}

			}

		}

		if(mysqli_query($link, ${'test' . $a}))

		{

		} else {

   			mysqli_error($link);

		}

	}

	$a++;

}



	echo"			<div class='container-fluid putih'>

					<div class='clearfix'> </div>

					<div class='clearfix'> </div>

				</div>

				<div class='col-md-1'></div>

				<div class='col-md-10  cnova_container3 text-justify' style='border-top-radius:6px;'>

				<div class='table-responsive'>

					<table class='table'>

						<tr>

							<td colspan='2' class='text-center'>Hasil Input Pendaftaran</td>

						</tr>



						<tr>

							<td>Nama Sekolah</td>

							<td>$nama_sekolah</td>

						</tr>

						<tr>

							<td>Cabang Lomba</td>

							<td>$cabang_lomba</td>

						</tr>

						<tr>

							<td>Kontak Pendaftar:</td>

							<td>$kontak_pendaftar</td>

						</tr>

						<tr>

							<td>Nama Pendaftar:</td><ol><td>";

							$a = 1;

						while($a <= $x){

							if(${"nama_pendaftar" . $a} ==! "")

								{

									echo "<li>${"nama_pendaftar" . $a}</li>";

								}

							$a++;

						}

						echo"</td></tr>



					</table>

					Bukti pembayaran uang WO harap dikirim ke: cccup2018@gmail.com<br>

					Jika tidak mengirim bukti pembayaran, peserta tidak dapat menarik uang WO kembali.<br>

					Format Pengiriman: NamaKontak(Pendaftar Pertama)_asalsekolah_cabanglomba<br>

					Data sudah dimasukkan ke dalam database<br>

				</div>";

}

mysqli_close($link);

?>