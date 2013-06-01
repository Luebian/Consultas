<?php
class Higiene {
	function altas(){
		$sql= "SELECT `id_modulo`, `nom_evaluacion` FROM to_caracteristicas where id_modulo='c3'";
		$reg= mysql_query($sql);
		return $reg;
	}
	
}
$higiene= new Higiene();
?>
