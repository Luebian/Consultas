
<?php
//Array ( [modulo] => a1 [nueva] => piki [mas] => Guardar )
class Alimentacion {
	function altas(){
		$sql= "SELECT id_evaluacion, nom_evaluacion FROM to_evaluaciones";
		$reg= mysql_query($sql);
		return $reg;
	}
        function guardar(){
            
                $sql= "INSERT INTO to_evaluaciones VALUES(NULL,'{$_POST["modulo"]}','{$_POST["nueva"]}',NULL,NULL)";

                $reg= mysql_query($sql);
		return $reg;
        }
}
$alimentacion= new Alimentacion();

?>
