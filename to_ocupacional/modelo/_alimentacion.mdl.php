<?php
class Alimentacion {
	function altas(){
		$sql= "SELECT `id_modulo`, `nom_evaluacion` FROM to_caracteristicas where id_modulo='b2'";
		
		$reg= mysql_query($sql);
		return $reg;
	}
	
}
$alimentacion= new Alimentacion();
?>