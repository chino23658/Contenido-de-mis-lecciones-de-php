<?php
include('persona.php')

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
$Luis =new persona ();
$Luis ->nombre="Luis Gutierrez Rodríguez";
$Luis-> edad="23";
$Luis->genero="Maculino";
$Luis->mostra_contenido();
echo"<br/>";
$ana=new persona ();
$ana->nombre="Ana Salazar Vega";
$ana-> edad="23";
$ana->genero="Femenino";
$ana->nacionalidad="Brasileña";
$ana-> idioma="portugues";
		
$ana->mostra_contenido();

echo"<br/>";

$Carlos =new persona();
$Carlos->nombre="Carlos Fernandez";
$Carlos-> edad="23";
$Carlos->genero="Masculino";
$Carlos->nacer("egipto");
$Carlos->mostra_contenido()



?>




</body>
</html>