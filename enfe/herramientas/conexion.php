<?php
$servidor="localhost";
$usuario="root";
$contrasenha="moon";
$BD = "retos";

$conexion = mysql_connect($servidor,$usuario,$contrasenha);
if (!$conexion) {
    die('<strong>No pudo conectarse:</strong> ' . mysql_error());
}else{
//La siguiente linea no es necesaria al momento de programar, simplemente la pondremos ahora para poder observar que la conexión ha sido realizada
//echo 'Conectado  satisfactoriamente al servidor <br />';
}
/*En la siguiente linea seleccionaremos la BD con la que trabajaremos y le pasaremos como referencia la conexión al servidor
Para saber si se conecto o no a la BD podríamos utilizar el IF de la misma forma que la utilizamos al momento de conectar al servidor,
pero les muestro otra forma de comprobar eso, es un poco mas corto el código.
*/
mysql_select_db($BD, $conexion) or die(mysql_error($conexion));
 
//Luego de abrir y utilizar una conexión en MySql siempre hay que cerrarla luego de terminar de trabajar con ella
?>
