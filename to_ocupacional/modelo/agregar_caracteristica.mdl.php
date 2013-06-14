
<?php
//Array ( [modulo] => a1 [nueva] => piki [mas] => Guardar )
class Alimentacion {
	function altas(){
		$sql= "SELECT id_modulo, nom_evaluacion FROM to_evaluaciones WHERE id_modulo='{$_GET['id_modulo']}'";
		$reg= mysql_query($sql);
		return $reg;
	}
	function modulos(){
		$sql= "SELECT `id_modulo`,`nom_modulo` FROM `to_modulos` WHERE 1";
		$reg= mysql_query($sql);
		return $reg;
	}
    function guardar(){
        
        $sql= "INSERT INTO to_evaluaciones VALUES(NULL,'{$_POST["modulo"]}',NULL,'{$_POST["nueva"]}')";
       //echo $sql;
        $reg= mysql_query($sql);
	return $reg;
    }
}
$alimentacion= new Alimentacion();

?>
