<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <p>
    <label for="nu">Número Inicial</label>
    <input name="nu" type="text" id="nu" value="<?php echo @$_POST['nu'];?>" />
    <br />
    <label for="nu2"><br />
    Número Final</label>
    <input type="text" name="nu2" id="nu2"value="<?php echo @$_POST['nu2'];?>" />
  </p>
  <p>
    <input type="submit" name="bot" id="bot" value="Enumerar" />
    <br />
  <br />
  </p>
  <p>&nbsp;</p>
</form>
</body>
<?php
$nu=@$_POST['nu'];
$nu2=@$_POST['nu2'];
for ($i=$nu;$i>=$nu2;$i++){
	echo $i."<br>";
};
?>
</html>