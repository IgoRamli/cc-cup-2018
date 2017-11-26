<?php
	$bidang		= $_POST['bidang'];
	$id 		= $_POST['id'];
	$sekolah1 	= $_POST['sekolah1'];
	$sekolah2	= $_POST['sekolah2'];
	$skor1		= $_POST['skor1'];
	$skor2		= $_POST['skor2'];
	$mulai		= $_POST['mulai'];
	$tempat		= $_POST['tempat'];
	$hasil		= $_POST['hasil']; 
	//
	$date = $_POST['date'];
	//
	$query = "UPDATE `$bidang` SET `sekolah1`='$sekolah1',`sekolah2`='$sekolah2', `skor1` = '$skor1', `skor2` = '$skor2' ,`tempat`= '$tempat',`hasil`='$hasil',`bidang`='$bidang',`date`='$date',`jadwal_start`='$mulai' WHERE id = $id";
	//
	$link = mysqli_connect("localhost", "u4158364_fairway", "ndasway01", "u4158364_cccup_score");
	if(mysqli_query($link,$query)) {
		echo "Sukses";
	} else {echo "Gagal";}


?>