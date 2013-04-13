<div class="titulo">ADVH</div><br>
<form name="advh" action=".mdl.php" method="post" enctype="multipart/form-data">
<table width="700" align="center" class="tabla">
    <tr>
        <th class="tdatos"><font size="4">ALIMENTACION</font></th>
	<th class="tdatos">0</th>
	<td class="tdatos">1</td>
	<td class="tdatos">2</td>
	<td class="tdatos">3</td>
	<td class="tdatos">Si</td>
	<td class="tdatos">No</td>
    </tr>
 <?php
 $registros=$alimentacion->altas();
while($caracteristicas=mysql_fetch_assoc($registros)) {
   
?>
 <tr>
        <th><?php
	echo $caracteristicas["caracteristica"];
	?>
	</th>
	<th class="dtabla"><input type="radio" name="evaluacion<?php echo $caracteristicas["id_caracteristica"]; ?>"></th>
	<td class="dtabla"><input type="radio" name="evaluacion<?php echo $caracteristicas["id_caracteristica"]; ?>"></td>
	<td class="dtabla"><input type="radio" name="evaluacion<?php echo $caracteristicas["id_caracteristica"]; ?>"></td>
	<td class="dtabla"><input type="radio" name="evaluacion<?php echo $caracteristicas["id_caracteristica"]; ?>"></td>
	<td class="dtabla"><input type="radio" name="evaluacion<?php echo $caracteristicas["id_caracteristica"]; ?>"></td>
	<td class="dtabla"><input type="radio" name="evaluacion<?php echo $caracteristicas["id_caracteristica"]; ?>"></td>
    </tr>

<?php
}
?>


</table>
</form>
<form action="?pagina=agregar_caracteristica" method="post"> 
<tr>
	<td colspan="2" align="left"><input type="submit" name="mas" value="Agregar" title="Agregar"></a>
	</td>
</tr>
</form>