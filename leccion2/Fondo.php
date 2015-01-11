<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body bgcolor="<?php echo @$_GET["color"];?>">
<p>la variable digitada fue : <?php echo @$_GET['color'];?></p>
<p>selecciones el color de fondo deseado:</p>
<p><a href="http://localhost/Fondo.php?color=yellow">Amarillo</a> -<a href="http://localhost/Fondo.php?color=blue">Azul</a>- <a href="http://localhost/Fondo.php?color=grey">Gris</a>- <a href="http://localhost/Fondo.php?color=orange">Naranja </a>-<a href="http://localhost/Fondo.php?color=pink">Rosado</a> -<a href="http://localhost/Fondo.php?color=magenta">Magenta </a></p>
</body>
</html>