<a href="?pagina=agregar_caracteristica&id_modulo=<?php echo $_GET["id_modulo"];?>">Agregar</a> 
<form name="advh" action="" method="post">
 <table width="700" align="center" class="tabla">
<tr>
	<td class="tdatos" colspan="2" align="center"><h3>DATOS DEL PACIENTE</h3></td>
</tr>
<tr>
	<td class="tdatos">Num_Paciente:</td>
	<td class="dtabla"><input type="text" name="num_paciente" value="<?php echo $_REQUEST["num_paciente"]; ?>" size="20" /></td>
</tr>

<tr>
	<td class="tdatos">Nombre:</td>
	<td class="dtabla"><input type="text" name="nombre" value="<?php echo $_REQUEST["nombre"]; ?>" size="40" /></td>
</tr>
</table>
 <table width="700" align="center" class="tabla">
    <tr>
        <td class="tdatos"><font size="2">0 = NO LO HACE</font></td>
        <td class="tdatos"><font size="2">1 = LO HACE CON MUCHA FACILIDAD</font></td>
        <td class="tdatos"><font size="2">2 = LO HACE CON POCA DIFICULTAD</font></td>
        <td class="tdatos"><font size="2">3 = LO HACE FACILMENTE</font></td>
    </tr>
</table>

<div class="titulo">ADVH</div><br>


<table width="700" align="center" class="tabla">
    <tr>
        <th class="tdatos"><font size="4">B.ALIMENTACION</font></th>
	<th class="tdatos">0</th>
	<td class="tdatos">1</td>
	<td class="tdatos">2</td>
	<td class="tdatos">3</td>
    </tr>
 <?php
 $registros=$alimentacion->altas();
while($to_evaluaciones=mysql_fetch_assoc($registros)) {
   
?>
 <tr>
        <th><?php
	echo $to_evaluaciones["nom_evaluacion"];
	echo $to_evaluaciones["id_modulo"];
	?>
	</th>
	<th class="dtabla"><input type="radio" name="evaluacion" value="0"></th>
	<td class="dtabla"><input type="radio" name="evaluacion" value="1"></td>
	<td class="dtabla"><input type="radio" name="evaluacion" value="2"></td>
	<td class="dtabla"><input type="radio" name="evaluacion" value="3"></td>
</tr>

<?php
}
?>


</table>
</form>
