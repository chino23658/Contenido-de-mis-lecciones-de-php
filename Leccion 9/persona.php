<?php
class persona{
	var $nombre;
	var $edad;
	var $idioma="español"; 
	var $nacionalidad;
	var $genero;
	
	function mostra_contenido(){
		echo"Nombre: ".$this->nombre."<br/>";
		echo"Edad: ".$this->edad."<br/>";
		echo"Genero: ".$this->genero."<br/>";
		echo"Idioma: ".$this->idioma."<br/>";
		echo"Nacionalidad: ".$this->nacionalidad."<br/>";		
	}
	function nacer($pais){
		$pais=strtolower($pais);
		switch($pais){
			case 'costa rica':
				$this->nacionalidad="costarrricense";
				$this->idioma="Español";
				break;
			case "hungria":
				$this->nacionalidad="Hungaro";
				$this->idioma="Aleman";
				break;
			case "egipto":
				$this->nacionalidad="Egipto";
				$this->idioma="Arabe";	
				break;
			
			}
		
		}
		
	
	
	}

?>