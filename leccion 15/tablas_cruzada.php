<?php
include("tieda.php");

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
$consulta="select da_pedidos.num_ped,da_pedidos.cod_ropa,da_pedidos.cod_pro,da_pedidos.cant_ped,da_ropa.des_ropa,da_provedores.num_pro from da_pedidos,da_ropa,da_provedores where da_pedidos.cod_ropa=da_ropa.cod_ropa and da_pedidos.cod_pro=da_provedores.cod_pro"

;
$respuesta=mysql_query($consulta,$conexion);
if ($respuesta){
	//echo"si conecto";
	while($registro=mysql_fetch_array($respuesta)){
		echo "Numero de Pedido :  ".$registro{'num_ped'}.'<br>';
		echo "Codigo de Ropa : ".$registro{'cod_ropa'}.'<br>';
		echo "Codigo de Provedor: ".$registro{'cod_pro'}.'<br>';
		echo "Cantidad de ropa: ".$registro{'cant_ped'}.'<br>';
		echo "Tipo de prenda: ".$registro{'des_ropa'}.'<br>';
		echo "Nombre de Provedor:  ".$registro{'num_pro'}."<br>";
		echo "<hr>";
		}
	
	}
else{
	echo"no conecto";
	}	



?>


</body>
</html>