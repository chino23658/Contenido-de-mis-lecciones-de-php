<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <p>
    <label for="fras">Frase Celebre</label>
    <input name="fras" type="text" id="fras" value="<?php echo @$_POST["fras"]?>" />
  </p>
  <p>
    <label for="auto">Nombre del Autor</label>
    <input name="auto" type="text" id="auto" value="<?php echo @$_POST["auto"]?>" />
  </p>
  <p>
    <input type="submit" name="bot" id="bot" value="Mostrar nombre y Autor" />
  </p>
</form>
<?php
$bot= @$_POST['bot'];
if (isset($bot)){
$fras=@$_POST['fras'];
$auto=@$_POST['auto'];
echo ucfirst($fras).'<br>';
echo ucwords($auto);

}?>
</body>
</html>