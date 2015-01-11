<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<form id="form2" name="form2" method="post" action="">
  <h3>Graficar resultado segun preferencias de postres.</h3>
  <p>
    <label for="tres">Tres Leches</label>
    <input name="tres" type="text" id="tres" value="<?php echo @$_POST["tres"]; ?>" />
  </p>
  <p>
    <label for="flan">Flan de Coco</label>
    <input type="text" name="flan" id="flan" value="<?php echo @$_POST["flan"]; ?>"/>
  </p>
  <p>
    <input type="submit" name="boton" id="boton" value="GRAFICAR" />
  </p>
</form>
<?php
	$boton=@$_POST["boton"];
	if(isset($boton)){
		$tres=$_POST["tres"];
		$flan=$_POST["flan"];
		echo "<img src='grafico.php?tres=".$tres."&flan=".$flan."'>";
	}
?>
</body>
</html>