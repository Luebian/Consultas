<div class="titulo">Caracteristicas</div>
<a href="?pagina=<?php echo $_GET["back"];?>&id_modulo=<?php echo $_GET["id_modulo"];?>">Volver</a> 
<form name="caract" action="" method="post">
<table width="700" align="center" class="tabla">
    <tr>
        <th class="tdatos"><font size="4">Caracteristicas</font></th>
    </tr>
<?php

if(!empty($_POST)){
    $alimentacion->guardar();
}
$registros=$alimentacion->altas();

while($to_evaluaciones=mysql_fetch_assoc($registros)) {
   
?>
    <tr>
        <th><?php
	echo $to_evaluaciones["nom_evaluacion"].' ';
        echo $to_evaluaciones["id_modulo"];
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
	<td class="dtabla">        
        <select name="modulo">
            <option value=""></option>
            <?php $registros=$alimentacion->modulos();
            while($to_evaluaciones=mysql_fetch_assoc($registros)) {
   
?>
            <option <?echo ($to_evaluaciones["id_modulo"]==$_GET['id_modulo'])?' selected ':'';?>value="<?php
    echo $to_evaluaciones["id_modulo"];?>"><?php echo $to_evaluaciones["nom_modulo"];?></option>
    
        
    
<?php
}
?>
        </select>
    </td>
</tr>
<tr>
        <td class="tdatos">Caracteristica nueva:</td>
        <td class="dtabla"><input type="text" name="nueva" size="20" value=""/></td>
</tr>

<input type="submit" name="mas" value="Guardar" title="Guardar">

</table>
</form>
