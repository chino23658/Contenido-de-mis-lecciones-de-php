<?php
	$usuarios=array('jose'=>'php','ana'=>'cnc');//para hacer cookies verificando usuarios
	$us=@$_POST['us'];
	$con =@$_POST['con'];
	$bandera=0;
	foreach($usuarios as $usua=>$clave) {
		if ($usua==$us and $clave==$con){
			$bandera=1;} }
if ($bandera){
	setcookie('valido',$us,time()+3600);//cuanto  dura el cookie
	}
else{
	setcookie('valido','no',time()+3600);//cuanto  dura el cookie
	header("location:ingreso.php");
	die();}
	
	#echo "es invalido";}


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
Bienvenid(@) Sr(a):<?php $us=@ $_POST['us'];echo $us; ?>
</body>
</html>