<?php
	$file = '../downloads/Proposal Undangan CC Cup 2018.pdf';
	header ('Content-type: application/pdf');
	header ('Content-Disposition: inline; filename="'.$file.'"');
	header ('Content-Transfer-Encoding: binary');
	header ('Accept-Ranges: bytes');
	@readfile($file);
?>