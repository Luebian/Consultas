
<div class="titulo">Caracteristicas</div><br>
<form name="caract" action="agregar_caracteristica.mdl.php" method="post" enctype="multipart/form-data">
<table width="700" align="center" class="tabla">
    <tr>
        <th class="tdatos"><font size="4">Caracteristicas</font></th>
    </tr>
<?php

if(isset($_POST)){
    $alimentacion->guardar();
}
$registros=$alimentacion->altas();

while($to_evaluaciones=mysql_fetch_assoc($registros)) {
   
?>
    <tr>
        <th><?php
	echo $to_evaluaciones["nom_evaluacion"];
        echo $to_evaluaciones["id_evaluacion"];
	?>
	</th>
    </tr>
<?php
}
?>
</table>
</form>

<br />
<form name="agregar" action="#guardar" method="post">
<table width="700" align="center" class="tabla">
<tr>
	<td class="tdatos" colspan="2" align="center"><h3>Agregar Nueva Caracteristica</h3></td>
</tr>
<tr>
	<td class="tdatos">Modulo:</td>
	<td class="dtabla"><input type="text" name="modulo" size="20" value="<?php echo $_GET["id_modulo"]; ?>"/></td>
</tr>
<tr>
        <td class="tdatos">Caracteristica nueva:</td>
        <td class="dtabla"><input type="text" name="nueva" size="20" value="<?php echo $_GET["nom_evaluacion"]; ?>"/></td>
</tr>

<input type="submit" name="mas" value="Guardar" title="Guardar">

</table>
</form>
