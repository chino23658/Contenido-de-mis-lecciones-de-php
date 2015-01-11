<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <p>
    <label for="nom">Digite un nombre</label>
    <input type="text" name="nom" id="nom" />
  </p>
  <p>
    <input type="submit" name="ag" id="ag" value="Agregar" />
    <input type="submit" name="bot" id="bot" value="ver personas" />
  </p>
</form>
<?php
$ag=@$_POST['ag'];
	if (isset($ag)){
		$nom=@$_POST["nom"];
		if(strlen(trim($nom))>0){
			$nom=strtolower($nom);
			//echo'Digito un digito';
			if (file_exists('personas.txt')){
				//echo'si existe';
				$apun=fopen('personas.txt','a');
				$nom='/'.$nom;
				fwrite($apun,$nom);
				fclose($apun);			}
			else{
				//echo  //'no existe';
				$apun=fopen('personas.txt','w+');
				fwrite($apun,$nom);
				fclose($apun);
			}
		}
		else {
			echo 'No digito';
			}
			//echo'ps';
	}
	
$bot=@$_POST['bot'];
if (isset($bot)){
	if (file_exists('personas.txt')){
		$apun=fopen('personas.txt','r');
		$personas=fgets($apun);
		fclose($apun);
		$gente =explode('/',$personas);
		foreach($gente as $gen)
		echo $gen.'<br>';
		
		echo $personas;
	}
	else{
		echo 'no existe';}}

	?>

</body>
</html>  