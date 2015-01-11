<?php
session_start();
$usuario="";
if (isset($_SESSION["valido"])){
	$usuario=$_SESSION["valido"]
	}

?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="Bienvenidos seciones.php">
  <p>
    <label for="us">Usuario</label>
    <input type="text" name="us" id="us" />
  </p>
  <p>
    <label for="con">Contraseña</label>
    <input type="text" name="con" id="con" />
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Enviar" />
  </p>
</form>
</body>
</html>