<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <p>
    <label for="clav">Digite la clave de accseso</label>
    <input type="text" name="clav" id="clav" />
  </p>
  <p>
    <input type="submit" name="bot" id="bot" value="ingresar" />
  </p>
</form>
<?php
$bot=@$_POST['bot'];
if(@fopen("password.txt","r")==true){
		echo"Abierto";}
else{
	echo'se jodio';}
	
if (isset($bot)){
	$of=fopen("password.txt","r");	
	$c=fgets($of,10)	;
	$clav=@$_POST['clav'];
	if ($c==$clav){
		echo'Acceso permitido';}
	else{
		echo"Accseo denegado";
		fclose($of);}
	
}
?>
</body>
</html>