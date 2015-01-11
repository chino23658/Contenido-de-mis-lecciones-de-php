<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<p>Bienvenido(a) SR (A) : <?php echo @ $_POST['nom'];?></p>
<p>Por ser <?php echo @$_POST['nac'];?>, sele ha otorgado una membresia especial.</p>
<p>Su usurio y contraseña,le fueron enviados a la cuenta de correo electrónico <?php echo @$_POST['corp'];?></p>
<p>Gracias por su preferencia.</p>
</body>
</html>