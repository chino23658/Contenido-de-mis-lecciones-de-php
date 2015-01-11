<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <p>
    <label for="num1">Numero1</label>
    <input type="text" name="num1" id="num1" />
  </p>
  <p>
    <label for="num2">Munero2</label>
    <input type="text" name="num2" id="num2" />
  </p>
  <p>
    <input type="submit" name="bot" id="bot" value="sumar" />
    <input type="submit" name="bot" id="bot" value="resta" />
    <input type="submit" name="bot" id="bot" value="multiplicar" />
    <input type="submit" name="bot" id="bot" value="dividir" />
  </p>
</form>
<?php
$bot=$_POST['bot'];
if (isset($bot)){
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	switch($bot){
		case "sumar":
			echo operar($num1,$num2,"+");
			break;
		case "resta":
			echo operar($num1,$num2,"-");
			break;
		case "multiplicar":
			echo operar($num1,$num2,"*");
		case "dividir":
			echo operar($num1,$num2,"/");
		
		}
		
	}


function  operar ($num1,$num2,$operando){
	switch($bot){
		case "+":
			return($num1+$num2);
			break;
		case "-":
			return($num1-$num2);
			break;
		case "*":
			return($num1*$num2);
			break;	
		case "/":
			return($num/$num2);
				break;
				if ($num2==0){
					return 0;
					}	
				else{
					return 0;}
		}
	
	
	
	
	}

?>
</body>
</html>