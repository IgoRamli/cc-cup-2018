<!DOCTYPE HTML>
<html lang="en-US">

<head>
	<?php 
	include ('php/head.php');
	include ('php/verificator.php');
	if(!isset($cabang_lomba) || !isset($bidang)) {
		header('location: registration');
	}
	error_reporting(0);


?>
<title><?php echo $cabang_lomba ?> Registration - CC Cup 2018</title>

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
<body class=''>
<div class='row my-5 mx-auto'>
	<div class='row my-5 mx-auto '>
		<table class="table table-responsive">
			<tr>
				<td colspan="5" align="center" class='text-white bg-primary tigapuluh yanone-kaffeesatz'>
					<h3>Pendaftaran Lomba <?php echo "$cabang_lomba"; ?></h3>
				</td>
			</tr>
			<tr>
				<td class='' style=''>
						<h5>Cabang Lomba</h5>
				</td>
				<td colspan='4'>
					<?php echo "$cabang_lomba (max. $max_tim tim / sekolah)"?>
				</td>
			</tr>
			<tr>
				<td>
					<h5>Jumlah Pemain</h5>
				</td>
				<td colspan='4'>
					<form action='' method="POST">
					<input type='hidden'  name='bidang' value="<?php echo $bidang ?>">
					<?php
					if(!isset($jum_pes)){
						echo"
							<select name='jum_pes' '$disabled' onchange='if(this.value != 0) { this.form.submit(); }'>
							$jum_pes_sel
							</select>
						"; } elseif (isset($jum_pes)) {
							echo "$jum_pes pemain (termasuk cadangan, jika ada bagi tim/permainan)"; 
						}
					?>
					</form>
				</td>
			</tr>
			<tr>
				<td>
					<h5>Nama Sekolah:</h5>
				</td>
				<form method=POST action=hasilform autocomplete=off enctype="multipart/form-data">
				<td colspan='4'>
					<input class='form-control' type=text name=nama_sekolah  <?php echo $customdisable ?>> 
					<input type="hidden" name="x" value="<?php echo $max_pes ?>"><!--peserta max-->
					<input type="hidden" name="max" value="<?php echo $max_tim ?>"><!--tim max-->
					<input type="hidden" name="cabang_lomba" value="<?php echo $cabang_lomba ?>"><!--cbg lomba-->
					<input type="hidden" name="table" value="<?php echo $bidang ?>"><!--table-->
				</td>
			</tr>
			<tr>
				<td colspan='4' class='alert-success text-center'><h3>Proses Pemasukkan Data</h3></td>
			</tr>
			<?php
				$i = 1;
				while($i <= $jum_pes) {
					echo "
						<tr>
							<td colspan='2'>
								<h5>Nama Pendaftar $i</h5>
							</td>
							<td>
								<h5>Pas Foto Pendaftar $i</h5>
							</td>
							<td>
								<h5>Kartu Tanda Pelajar Pendaftar $i</h5>
							</td>
						</tr>
						<tr>
							<td style='' colspan='2'>
								<input class='form-control' type=text name=nama_pendaftar$i required>
							</td>
							<td>Pas Foto:
								<input accept='image/*, .pdf' class='form-control' name=pasfoto$i type=file required/>
							</td>
							<td>Kartu Tanda Pelajar : 
								<input accept='image/*, .pdf' class='form-control' name=ktp$i type=file required/>
							</td>
						</tr>";
						$i++;
						}
						if($bidang == 'taekwondo' OR $bidang =='pencaksilat') { 
							if($bidang=='taekwondo') {$sertifikat_tkw = 'Sertifikat Tae Kwon Do';} elseif($bidang=='pencaksilat') {$sertifikat_tkw = 'Surat Izin Sekolah';} 
						echo "
						<tr>
							<th>Berat Peserta</th>
							<td colspan=''>
								<input type='' class='form-control' name='weight' $customdisable placeholder='berat peserta dalam kg'
							</td>
						</tr>
						<tr>
							<th>Dokumen Penting</th>
							<td>Akte Lahir:
								<input accept='image/*, .pdf' class='form-control' name=akte_lahir type=file $customdisable/>
							</td>
							<td>$sertifikat_tkw:
								<input accept='image/*, .pdf' class='form-control' name=sertifikat_tkw type=file $customdisable/>
							</td>
							<td>Surat Keterangan Sehat:
								<input accept='image/*, .pdf' class='form-control' name=sks type=file $customdisable/>
							</td>
						</tr>
						"; } ?> 
			<tr>
				<td><h5>Kontak Pendaftar</h5></td>
				<td colspan='4'>
					<input class='form-control' placeholder='Pendaftar Pertama.' type='text' <?php echo $customdisable ?> name=kontak_pendaftar>
				</td>
			</tr>
			<tr>
				<td colspan='4' class='text-center'>
					<input class='btn btn-primary' <?php echo $customdisable ?> type=submit value=DAFTAR>  
					<input <?php echo $customdisable ?> class='btn btn-danger' type=reset value=ULANG>
				</td>
			</tr>
			</table>
		</div>
	</div>
</body>
	<?php include('php/03A.footer.php'); ?>
</div>





