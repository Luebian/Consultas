<?php
$pagina=(isset($_GET['pagina']))?$_GET['pagina']:'';
$pagina='controlador/'.$pagina.'.ctrl.php';
if(!file_exists($pagina)){//si existe la ruta   
    $pagina='controlador/informegnrl.ctrl.php';//retorna si la ruta es real
}
require($pagina);
?>
