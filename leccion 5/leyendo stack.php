<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
Usted es el visistante Numero <?php
$stack=@ fopen('Contador.txt','r+');
if ($stack){//echo'Encontro otro archivo';
$num=fgets($stack,6);
echo $num;
$num++;
rewind($stack);
fwrite($stack,$num);
fclose($stack);
}
else{ echo'el archivo no existe';}
?>
</body>
</html>