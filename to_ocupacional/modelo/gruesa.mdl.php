<?php
class Motrosidad {
	function altas(){
		$sql= "SELECT id_evaluacion, nom_evaluacion FROM to_evaluaciones where id_modulo=1";
		$reg= mysql_query($sql);
		return $reg;
	}
	
}
$motrosidad= new Motrosidad();
?>

