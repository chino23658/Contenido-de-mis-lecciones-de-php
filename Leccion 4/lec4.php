<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <p>
    <label for="fi">Filas</label>
    <input name="fi" type="text" id="fi" value="<?php echo @$_POST['fi'];?>" />
  </p>
  <p>
    <label for="c">Columnas </label>
    <input name="c" type="text" id="c" value="<?php echo @$_POST['c'];?>" />
  </p>
  <p>
    <input type="submit" name="bot" id="bot" value="Generar" />
  </p>
</form>
<p>&nbsp;</p>
<?php $bot=@$_POST['bot'];
if (isset($bot)){
	$fi=@$_POST['fi'];
	$c=@$_POST['c'];
?>
<table width="<?php echo(80*$c);?>" border="1">

<?php for($i=0;$i<$fi;$i++){?>
  <tr>
  <?php for($e=0;$e<$c;$e++){?>
  <td><?php echo"fila".($i+1)."-columna".($e+1)?>
  <?php }?>
  </tr>
  <?php }?>
  
</table>
<?php } ?>
<p>&nbsp;</p>
</body>
</html>