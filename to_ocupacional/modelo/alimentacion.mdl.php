<?php
class Alimentacion {
	function altas(){
		$sql= "SELECT id_evaluacion, nom_evaluacion FROM to_evaluaciones where id_modulo=2";
		$reg= mysql_query($sql);
		return $reg;
	}
	
}
$alimentacion= new Alimentacion();
?>