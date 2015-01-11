<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <p>
    <label for="num1">Numero 1</label>
    <input name="num1" type="text" id="num1" value="<?php echo @$_POST['num1'];?>" />
  </p>
  <p>
    <label for="num2">Número 2</label>
    <input name="num2" type="text" id="num2" value="<?php echo @$_POST['num2'];?>" />
  </p>
  <p>
    <input type="submit" name="boton" id="boton" value="cacular" />
    <br />
  </p>
</form>
<?php
$boton=@$_POST['boton'];
if (isset($boton)){
	//echo"Presiono Boton";
	$num1=@$_POST['num1'];
	$num2=@$_POST['num2'];
	echo'<br>suma = '. ($num1+$num2);
	echo'<br>resta = '. ($num1-$num2);
	echo'<br>multiplicación = '. ($num1*$num2);
	echo'<br>división = '. ($num1/$num2);
	echo'<br>residuo =  '. ($num1%$num2);
	echo'<br>raíz cuadrada del primer número = '.sqrt ($num1);
	echo'<br>raíz cuadrada del segundo número = '.sqrt ($num2);
	//$num1++;
	//$num2--;
	echo'<br> Número 1: '.$num1;
	echo'<br> Número 2:'.$num2.'<br>' ;
	if ($num1>$num2){
		echo' El número 1 es mayor al número 2';
		}
	else if($num1==$num2){
		echo'El numero 1 es igual al 2';
		}
	else if($num1<$num2){
		echo'El numero 2 es mayor al 1';
	}
	
	


}   
?>

</body>
</html>