<?php
	//Indica que el contenido del archivo es una imagen.
	header("content-type: image/jpeg");
	$tres=$_GET["tres"];
	$flan=$_GET["flan"];
	$mayor=0;
	if($tres>$mayor){
		$mayor=$tres;
	}
	if($flan>$mayor){
		$mayor=$flan;
	}
	if($mayor==0){
		$ptl=0;
		$pfc=0;
	}
	else{
		$ptl=$tres/$mayor;
		$pfc=$flan/$mayor;
	}
	$ctl=$ptl*200;
	$cfc=$pfc*200;
	$tres=250-$ctl;
	$flan=250-$cfc;
	$im = imagecreate(600,300);
	$fondo = imagecolorallocate($im,185,185,185);
	$colorRojo = imagecolorallocate($im,255,0,0);
	$colorAzul = imagecolorallocate($im,0,0,255);
	imagefilledrectangle($im,50,250,100,$tres,$colorRojo);
	imagestring($im,8,115,265,$flan,$colorAzul);
	imagefilledrectangle($im,102,250,152,$flan,$colorAzul);
	imagestring($im,8,65,265,$tres,$colorRojo);
	imagejpeg($im);
	imagedestroy($im);
?>