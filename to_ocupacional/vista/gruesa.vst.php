<a href="?pagina=agregar_caracteristica&id_modulo=<?php echo $_GET["id_modulo"];?>">Agregar</a>

<br />
<form name="busqueda" action="busqueda.mdl.php" method="post" enctype="multipart/form-data">
<table width="700" align="center" class="tabla">
<tr>
	<td class="tdatos" colspan="2" align="center"><h3>DATOS DEL PACIENTE</h3></td>
</tr>
<tr>
	<td class="tdatos">Num_Paciente:</td>
	<td class="dtabla"><input type="text" name="num_paciente" size="20" /></td>
</tr>

<tr>
	<td class="tdatos">Nombre:</td>
	<td class="dtabla"><input type="text" name="nombre" size="40" /></td>
</tr>
</table>
</form>
<table width="700" align="center" class="tabla">
    <tr>
        <td class="tdatos"><font size="2">0 = NO LO HACE</font></td>
        <td class="tdatos"><font size="2">1 = LO HACE CON MUCHA FACILIDAD</font></td>
        <td class="tdatos"><font size="2">2 = LO HACE CON POCA DIFICULTAD</font></td>
        <td class="tdatos"><font size="2">3 = LO HACE FACILMENTE</font></td>
    </tr>
</table>

<div class="titulo">ADVH</div><br>

<form name="advh" action="advh.mdl.php" method="post" enctype="multipart/form-data">
<table width="700" align="center" class="tabla">
    <tr>
        <td class="tdatos"><font size="4" align="center">A.MOTRICIDAD GRUESA</font></td>
        <td class="tdatos">0</td>
        <td class="tdatos">1</td>
        <td class="tdatos">2</td>
        <td class="tdatos">3</td>
    </tr>
    
<?php
 $registros=$motrosidad->altas();
while($to_evaluaciones=mysql_fetch_assoc($registros)) {
	echo sql;
   
?>
 <tr>
        <th><?php
	echo $to_evaluaciones["nom_evaluacion"];
	?>
	</th>
	<th class="dtabla"><input type="radio" name="evaluacion<?php echo $to_evaluaciones["nom_evaluacion"]; ?>"></th>
	<td class="dtabla"><input type="radio" name="evaluacion<?php echo $to_evaluaciones["nom_evaluacion"]; ?>"></td>
	<td class="dtabla"><input type="radio" name="evaluacion<?php echo $to_evaluaciones["nom_evaluacion"]; ?>"></td>
	<td class="dtabla"><input type="radio" name="evaluacion<?php echo $to_evaluaciones["nom_evaluacion"]; ?>"></td>
</tr>

<?php
}
?>


</table>
</form>
