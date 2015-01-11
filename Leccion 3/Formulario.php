<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <p>
    <label for="es">Estudiante</label>
    <input name="es" type="text" id="es" value="<?php echo @$_POST['es']; ?>" size="50" maxlength="25" />
  </p>
  <p>
    <label for="di">Direccion </label>
    <input name="di" type="text" id="di" size="100" />
  </p>
  <p>
    <label for="car">Carnet </label>
    <input type="password" name="car" id="car" />
  </p>
  <p>Selecione los cursos de intereses:</p>
  <p>
    <input type="checkbox" name="auto" id="auto" />
    <label for="auto">Autocad</label>
    <br />
<input type="checkbox" name="disg" id="disg" />
    <label for="disg">Diseño Grafico</label>
    <br />
<input type="checkbox" name="man" id="man" />
    <label for="man">Mantenimiento de Micros</label>
    <br />
<input type="checkbox" name="red" id="red" />
    <label for="red">Redes Lan y WAN</label>
  </p>
  <p>Seleccion de formas de pago:</p>
  <p>
    <input name="pago" type="radio" id="sem" value="sem" checked="checked" />
    <label for="sem">Semanal</label>
    <input name="pago" type="radio" id="qui" value="quin" />
    <label for="qui">Quincenal</label>
    <input name="pago" type="radio" id="men" value="men" />
    <label for="men">Mensual</label>
  </p>
  <p>
    <label for="hora">Horario Matricular</label>
    <select name="hora" id="hora">
      <option value="m">Tarde</option>
      <option value="n">Noche</option>
      <option value="t">Mañana</option>
    </select>
  </p>
  <p>
    <input type="submit" name="boton" id="boton" value="Enviar" />
  </p>
</form>
<?php
$boton=@$_POST['boton'];
if (isset($boton)){
	//echo"Presiono Boton";
	$hora=@$_POST['hora'];
	echo 'Horario='.$hora;
	$pago=@$_POST['pago'];
	echo'<br>Pago:'.$pago;
    $auto=@$_POST['auto'];
	if($auto){
	echo'<br> Autocad'; }
	 $disg=@$_POST['disg'];
	if($auto){
	echo'<br> Diseño Grafico'; }
	$man=@$_POST['man'];
	if($man){
	echo'<br> Mantenimiento de micros '; }
	$red=@$_POST['red'];
	if($red){
	echo'<br> Redes Lan y WAN'; }
	}
?>
</body>
</html>