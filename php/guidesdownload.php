<?php
$bid		= $_POST['bid'];
$file 		= "../downloads/guides/$bid-cccup-18.pdf";
$preview	= $_POST['view'];

if($preview=="DOWNLOAD") {
	if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
	}
}
elseif($preview=="PREVIEW") {
	header ('Content-type: application/pdf');
	header ('Content-Disposition: inline; filename="'.$file.'"');
	header ('Content-Transfer-Encoding: binary');
	header ('Accept-Ranges: bytes');
	@readfile($file);
};
?>

