<?php
class Evaluacion {
	function modulos($id_modulo){
        $sql= "SELECT id_modulo, nom_modulo FROM to_modulos WHERE id_modulo='$id_modulo'";
        
		$reg= mysql_query($sql);
                return $reg;
            
        }
	function altas($id_modulo){
		$sql= "SELECT `id_modulo`, `nom_evaluacion` FROM to_caracteristicas where id_modulo='$id_modulo'";
		
		$reg= mysql_query($sql);
		return $reg;
	}
	
}
$evaluacion= new Evaluacion();
?>