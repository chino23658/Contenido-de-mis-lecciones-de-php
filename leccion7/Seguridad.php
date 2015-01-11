<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <p>
    <label for="nom">Nombre</label>
    <input type="text" name="nom" id="nom" />
    <br />
    <br />
    Email
    <label for="c"></label>
    <input type="text" name="c" id="c" />
  </p>
  <p>Edad
    <label for="ed"></label>
    <input type="text" name="ed" id="ed" />
  </p>
  <p>
    <input type="submit" name="bot" id="bot" value="Enviar" />
  </p>
</form>
<?php
$bot=@$_POST['bot'];
if(isset($bot)){
	echo'preciono boton';
	$nom=@$_POST['nom'];
	$nom=strip_tags($nom);
	$sim=array('<','>','¿','?','¡','Ç','.','&','=',',','@',' and ',' or ','%','+','-','!','#');
	$nom=trim($nom);
	while(strpos($nom ,"  ")){
		$nom=str_replace("  "," ",$nom);
		$nom=str_replace($sim," ");
		}
	var_dump($nom);
	echo'<hr>';
	$c=$_POST['c'];
	
	if (strpos($c,'@')){
		#echo"es valido";
		$pos_ar=strpos($c,'@');
		if (strpos($c,'.',$pos_ar+2)){
		#echo"si es valido";
		if (strlen(trim($c))>5){
			echo"correcto";}
		
		else{
			echo"correo invalido";	}	
		}
	
	else{ echo'no es valido';
			}
	}

$ed=$_POST['ed'];
if ($ed>0){
	echo'correcto';}
else{
	echo'incorrecto';
if ($ed)=(int)$ed	
	}

		
		
		
		
		}
	
?>
</body>
</html>