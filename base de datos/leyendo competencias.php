<?php
$conection=mysql_connect("localhost","estudiate","php");
	mysql_select_db("competencias");



?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>


<?php
	$consulta="select*from com_eventos";
	$respuesta=mysql_query($consulta,$conection);#conetion se coloca para ver si tiene permiso a todas las funciones de las bases de datos 
	if ($respuesta){
		//0echo"si coneto";
		while ($registro=mysql_fetch_array($respuesta)) {
			print_r($registro);
			echo"<br>";
			
			}
		
		
		
		
	}
	else{
		//echo"no conecto";
		}
		
			
	

?>
</body>
</html>