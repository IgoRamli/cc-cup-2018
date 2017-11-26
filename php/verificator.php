<?php
error_reporting(0);
////
$bidang 		= $_POST['bidang'];
$jum_pes 		= $_POST['jum_pes'];
$customdisable = 'disabled';
////
if($bidang =='band') {
	$max_pes 		= '10';
	$disabled		= 'disabled';
	$jum_pes_sel 	= 
		"
			<option value=''></option>
			<option value='2'>2 pemain</option>
			<option value='3'>3 pemain</option>
			<option value='4'>4 pemain</option>
			<option value='5'>5 pemain</option>
			<option value='6'>6 pemain</option>
			<option value='7'>7 pemain</option>
			<option value='8'>8 pemain</option>
			<option value='9'>9 pemain </option>
			<option value='10'>10 pemain</option>
		";
	$max_tim 		= '5';
	$cabang_lomba = 'Band';
} // Band End

//Billiard Start
 elseif ($bidang == 'billiard') {
	$max_pes 		= '1';
	$disabled		= 'disabled';
	$jum_pes_sel 	= 
		"
			<option value=''></option>
			<option value='1'>1 pemain</option>
		";
	$max_tim 		= '1';
	$cabang_lomba = 'Billiard';	
} 
//End Biliard

//Start Bola Basket
elseif($bidang =='bolabasket_pa') {
	$max_pes 		= '12';
	$disabled		= 'disabled';
	$jum_pes_sel 	= 
		"
			<option value=''></option>
			<option value='5'>5 pemain</option>
			<option value='6'>6 pemain</option>
			<option value='7'>7 pemain</option>
			<option value='8'>8 pemain</option>
			<option value='9'>9 pemain</option>
			<option value='10'>10 pemain</option>
			<option value='11'>11 pemain</option>
			<option value='12'>12 pemain</option>
		";
	$max_tim 		= '1';
	$cabang_lomba = 'Bola Basket Putra';
} elseif($bidang =='bolabasket_pi') {
	$max_pes 		= '12';
	$disabled		= 'disabled';
	$jum_pes_sel 	= 
		"
			<option value=''></option>
			<option value='5'>5 pemain</option>
			<option value='6'>6 pemain</option>
			<option value='7'>7 pemain</option>
			<option value='8'>8 pemain</option>
			<option value='9'>9 pemain</option>
			<option value='10'>10 pemain</option>
			<option value='11'>11 pemain</option>
			<option value='12'>12 pemain</option>
		";
	$max_tim 		= '1';
	$cabang_lomba = 'Bola Basket Putri';
} // Bola Basket End

//Start Bola Voli
elseif ($bidang =='bolavoli_pa') {
	$max_pes 		= '12';
	$disabled		= 'disabled';
	$jum_pes_sel 	= 
		"
			<option value=''></option>
			<option value='6'>6 pemain</option>
			<option value='7'>7 pemain</option>
			<option value='8'>8 pemain</option>
			<option value='9'>9 pemain</option>
			<option value='10'>10 pemain</option>
			<option value='11'>11 pemain</option>
			<option value='12'>12 pemain</option>
		";
	$max_tim 		= '1';
	$cabang_lomba = 'Bola Voli Putra';
} elseif ($bidang =='bolavoli_pi') {
	$max_pes 		= '12';
	$disabled		= 'disabled';
	$jum_pes_sel 	= 
		"
			<option value=''></option>
			<option value='6'>6 pemain</option>
			<option value='7'>7 pemain</option>
			<option value='8'>8 pemain</option>
			<option value='9'>9 pemain</option>
			<option value='10'>10 pemain</option>
			<option value='11'>11 pemain</option>
			<option value='12'>12 pemain</option>
		";
	$max_tim 		= '1';
	$cabang_lomba = 'Bola Voli Putri';
} //End Bola Voli 

//Start Bulu Tangkis
elseif ($bidang =='bulutangkis_pa') {
	$max_pes 		= '5';
	$disabled		= 'disabled';
	$jum_pes_sel 	= 
		"
			<option value=''></option>
			<option value='4'>4 pemain</option>
			<option value='5'>5 pemain</option>
		";
	$max_tim 		= '2';
	$cabang_lomba = 'Bulu Tangkis Putra';
} elseif ($bidang =='bulutangkis_pi') {
	$max_pes 		= '5';
	$disabled		= 'disabled';
	$jum_pes_sel 	= 
		"
			<option value=''></option>
			<option value='3'>3 pemain</option>
			<option value='4'>4 pemain</option>
			<option value='5'>5 pemain</option>
		";
	$max_tim 		= '2';
	$cabang_lomba = 'Bulu Tangkis Putri';
} //End Bola Voli 

//Start Catur
elseif ($bidang == 'catur') {
	$max_pes 		= '4';
	$disabled		= 'disabled';
	$jum_pes_sel 	= 
		"
			<option value=''></option>
			<option value='3'>3 pemain</option>
			<option value='4'>4 pemain</option>
		";
	$max_tim 		= '2';
	$cabang_lomba = 'Catur';	
}//End Catur

//Start Fotografi
elseif ($bidang == 'fotografi') {
	$max_pes 		= '1';
	$disabled		= 'disabled';
	$jum_pes_sel 	= 
		"
			<option value=''></option>
			<option value='1'>1 pemain</option>
		";
	$max_tim 		= '999';
	$cabang_lomba = 'Fotografi';	
}//End Fotografi

//Start Futsal Putri
elseif ($bidang == 'futsalputri') {
	$max_pes 		= '12';
	$disabled		= 'disabled';
	$jum_pes_sel 	= 
		"
			<option value=''></option>
			<option value='5'>5 pemain</option>
			<option value='6'>6 pemain</option>
			<option value='7'>7 pemain</option>
			<option value='8'>8 pemain</option>
			<option value='9'>9 pemain</option>
			<option value='10'>10 pemain</option>
			<option value='11'>11 pemain</option>
			<option value='12'>12 pemain</option>
		";
	$max_tim 		= '1';
	$cabang_lomba = 'Futsal Putri';	
} 
//End Futsal Putri

//Start MD
elseif ($bidang =='moderndance') {
	$max_pes 		= '10';
	$disabled		= 'disabled';
	$jum_pes_sel 	= 
		"
			<option value=''></option>
			<option value='3'>3 pemain</option>
			<option value='4'>4 pemain</option>
			<option value='5'>5 pemain</option>
			<option value='6'>6 pemain</option>
			<option value='7'>7 pemain</option>
			<option value='8'>8 pemain</option>
			<option value='9'>9 pemain</option>
			<option value='10'>10 pemain</option>
		";
	$max_tim 		= '2';
	$cabang_lomba = 'Modern Dance';
} //End MD

//Start Paskibra
elseif ($bidang == 'paskibra') {
	$max_pes 		= '18';
	$disabled		= 'disabled';
	$jum_pes_sel 	= 
		"
			<option value=''></option>
			<option value='18'>18 pemain</option>
		";
	$max_tim 		= '1';
	$cabang_lomba = 'Paskibra';	
}  //End Paskibra

//Start Pencak Silat
elseif ($bidang =='pencaksilat') {
	$max_pes 		= '2';
	$disabled		= 'disabled';
	$jum_pes_sel 	= 
		"
			<option value=''></option>
			<option value='1'>1 pemain</option>
			<option value='2'>2 pemain</option>
		";
	$max_tim 		= '2';
	$cabang_lomba = 'Pencak Silat';
} //End pencak Silat

//Start Sepak Bola
elseif ($bidang == 'sepakbola') {
	$max_pes 		= '15';
	$disabled		= 'disabled';
	$jum_pes_sel 	= 
		"
			<option value=''></option>
			<option value='7'>7 pemain</option>
			<option value='8'>8 pemain</option>
			<option value='9'>9 pemain</option>
			<option value='10'>10 pemain</option>
			<option value='11'>11 pemain</option>
			<option value='12'>12 pemain</option>
			<option value='13'>13 pemain</option>
			<option value='14'>14 pemain</option>
			<option value='15'>15 pemain</option>
			
		";
	$max_tim 		= '1';
	$cabang_lomba = 'Sepak Bola (Putra)';	
} 

//Start Short Movie
elseif ($bidang == 'shortmovie') {
	$max_pes 		= '10';
	$disabled		= 'disabled';
	$jum_pes_sel 	= 
		"
			<option value=''></option>
			<option value='5'>5 pemain</option>
			<option value='6'>6 pemain</option>
			<option value='7'>7 pemain</option>
			<option value='8'>8 pemain</option>
			<option value='9'>9 pemain</option>
			<option value='10'>10 pemain</option>
			
		";
	$max_tim 		= '2';
	$cabang_lomba = 'Short Movie';	
}  


//Start Taekwondo
elseif ($bidang =='taekwondo') {
	$max_pes 		= '1';
	$disabled		= 'disabled';
	$jum_pes_sel 	= 
		"
			<option value=''></option>
			<option value='1'>1 pemain</option>
		";
	$max_tim 		= '1';
	$cabang_lomba = 'Tae Kwon Do';
} //End Taekwondo

//Start Tenis Meja
elseif ($bidang =='tenismeja') {
	$max_pes 		= '5';
	$disabled		= 'disabled';
	$jum_pes_sel 	= 
		"
			<option value=''></option>
			<option value='3'>3 pemain</option>
			<option value='4'>4 pemain</option>
			<option value='5'>5 pemain</option>
		";
	$max_tim 		= '1';
	$cabang_lomba = 'Tenis Meja (Khusus Putra)';
} //End Taekwondo

//Start WallClimbing
elseif($bidang =='wallclimbing_pa') {
	$max_pes 		= '1';
	$disabled		= 'disabled';
	$jum_pes_sel 	= 
		"
			<option value=''></option>
			<option value='1'>1 pemain</option>
		";
	$max_tim 		= '5';
	$cabang_lomba = 'Wall Climbing Putra';
}  elseif($bidang =='wallclimbing_pi') {
	$max_pes 		= '1';
	$disabled		= 'disabled';
	$jum_pes_sel 	= 
		"
			<option value=''></option>
			<option value='1'>1 pemain</option>
		";
	$max_tim 		= '5';
	$cabang_lomba = 'Wall Climbing Putri';
}
if(isset($_POST['jum_pes'])){
	$customdisable = 'required';
};
error_reporting(0);
?>