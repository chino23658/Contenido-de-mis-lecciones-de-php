<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
$nombre="Jose Andres Hernandez"; 
$dia_nac=1;
$dias_mes_nac=31;
$total=$dias_mes_nac-$dia_nac;
$decimal=$dia_nac/0.007;
$mayor=$dia_nac>$dias_mes_nac;
$edad;
?>
Bienvenido,&quot;<?php echo $nombre;?>&quot;,esta es mi primera variable.
<?php
echo'<br>Yo naci el d&iacute;a'.$dia_nac;
echo'<br>';
echo'De un mes que tine '.$dias_mes_nac.' d&iacute;as';
echo'es decir '.$total.' d&iacute;as antes de terminar el mes';
echo'<hr>';
var_dump($nombre);
echo'<br>';
var_dump($dia_nac);
echo'<br>';
var_dump($total);
echo'<br>';
var_dump($decimal);
echo'<br>';
var_dump($mayor );
echo'<br>';
var_dump($edad);

?>

</body>

</html>
