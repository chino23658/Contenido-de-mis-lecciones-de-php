<?php
session_start();
#session_register('valido');
$usuarios=array('jose'=>'php','ana'=>'cr');
$us=@$_POST['us'];
$con=@$_POST['con'];
$bandera=0;
foreach($usuarios as $user=>$clave){
	if ($user==$us and $clave==$con){
		$bandera=1;
		}
	}

if ($bandera){
	echo"si es valido";
	
	}
else{
	
	#echo"no es valido";
	$_SESSION["valido"]="no";
	header("location:secion.php");
	die();
	
	}




?>

















<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
Bienvenid@ Sr(a):
<?php
$us=@$_POST['us'];
echo $us;

?>
</body>
</html>