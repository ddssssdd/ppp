<?php
$pdf="D:/xampp/htdocs/PPP/files/2/Apress.Pro.PHP.Programming.Aug.2011.pdf";
$imagick = new Imagick();
$imagick->setresolution(120, 120);
$imagick->setcompressionquality(100);
$imagick->readimage($pdf."[0]");
foreach($imagick as $key=>$val){
	$val->setImageFormat("png");
	$filename=md5($key.time()).'.png';
	$val->writeImage($filename);
}
?>