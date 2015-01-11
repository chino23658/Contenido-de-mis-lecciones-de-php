<?php 
include_once("persona.php");
class turista extends persona{
	var $fecha_arribo;
	var $fecha_estancia;
function contenido(){
	$this->mostra_contenido();
	echo"Fecha de Arribo: ".$this->fecha_arribo."<br/>";
	echo"Fecha de estancia: ".$this->fecha_estancia."<br/>";
	
	}


}
?>