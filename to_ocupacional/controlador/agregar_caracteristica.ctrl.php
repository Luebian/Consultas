<?php
if(!isset($_GET["id_modulo"]))
{
    echo '<meta http-equiv="Refresh" content="0;url=?pagina=busqueda">';
}
require("modelo/agregar_caracteristica.mdl.php"); 
require("vista/agregar_caracteristica.vst.php");


?>
