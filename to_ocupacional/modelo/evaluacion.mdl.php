<?php
class Evaluacion {
	function modulos($id_modulo){
        $sql= "SELECT id_modulo, nom_modulo FROM to_modulos WHERE id_modulo='$id_modulo'";
        
		return mysql_query($sql);
            
        }
	function altas($id_modulo){
		$sql= "SELECT id_modulo, nom_evaluacion FROM to_evaluaciones where id_modulo='$id_modulo'";
		
		return mysql_query($sql);
	}
	
}
$evaluacion= new Evaluacion();
?>