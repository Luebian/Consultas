<?php
class Higiene {
	function altas(){
		$sql= "SELECT id_evaluacion, nom_evaluacion FROM to_evaluaciones where id_modulo=3";
		$reg= mysql_query($sql);
		return $reg;
	}
	
}
$higiene= new Higiene();
?>
