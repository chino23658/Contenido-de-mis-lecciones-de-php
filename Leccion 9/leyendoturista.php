<?php
include("turista.php");


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
$sonia = new turista();
$sonia->nombre="Sonia Arguedaz";
$sonia-> edad="27";
$sonia->genero="Femenino";
$sonia->nacer("hungria");
$sonia->fecha_arribo ="24/12/2012";
$sonia->fecha_estancia="7";
$sonia->contenido();
#echo $sonia-> nombre


?>

</body>
</html>