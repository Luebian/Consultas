<br />
<table width="700" align="center" class="tabla">
<tr>
	<td class="tdatos" colspan="8" align="center"><h3>Reporte Diario</h3></td>
</tr>
</table>
</form>
<form name="trata" action="RDiario.mdl.php" method="post" enctype="multipart/form-data">
<table width="700" align="center" class="tabla">
<tr>

	<td class="tdatos">Id_Paciente:</td>
	<td class="dtabla"><input type="text" name="num_paciente" value="<?php echo $_REQUEST["Id_paciente"]; ?>" size="40" /></td>
</tr>

<tr>
	<td class="tdatos">Nombre:</td>
	<td class="dtabla"><input type="text" name="nombre" value="<?php echo $_REQUEST["nombre"]; ?>" size="40" /></td>
</tr>
</table>
</form>


<form name="trata" action="RDiario.mdl.php" method="post" enctype="multipart/form-data">
<table width="700" align="center" class="tabla">
<tr>
	<td class="tdatos" colspan="2" align="center"><h3>Presion Arterial</h3></td>
	<td class="tdatos" colspan="2" align="center"><h3>Glicemias</h3></td>
</tr>
<tr>
	<td class="tdatos">T/A</td>
	<td class="dtabla"><input type="text" name="num_paciente" value="<?php echo $_REQUEST["T/A"]; ?>" size="20" /></td>
	<td class="tdatos">Mg/dl</td>
	<td class="dtabla"><input type="text" name="nombre" value="<?php echo $_REQUEST["Mg/dl"]; ?>" size="20" /></td>
</tr>
<tr>
	<td class="tdatos">Observaciones:</td>
	<td class="dtabla"><input type="text" name="num_paciente" value="<?php echo $_REQUEST["Observaciones"]; ?>" size="20" /></td>
	<td class="tdatos">Observaciones:</td>
	<td class="dtabla"><input type="text" name="nombre" value="<?php echo $_REQUEST["Observaciones"]; ?>" size="20" /></td>
</tr>
<form name="trata" action="RDiario.mdl.php" method="post" enctype="multipart/form-data">
<table width="700" align="center" class="tabla">
<tr>
<br>
	<table width="700" align="center" class="tabla">
</tr>
<td class="tdatos" colspan="8" align="center"><h3></h3></td>
<tr>
	<td class="tdatos">CAMBIO DE PAÑAL</td>
	<td class="dtabla"><center><input type="radio" name="SI" value="SI">SI</input><input type="radio" name="NO" value="NO">NO</input></td><center></td>
	<td class="tdatos">Hora</td>
	<td class="dtabla"><input type="text" name="nombre" value="<?php echo $_REQUEST["Hora"]; ?>" size="20" /></td>
<td class="tdatos">Observaciones</td>
	<td class="dtabla"><input type="text" name="nombre" value="<?php echo $_REQUEST["Observaciones"]; ?>" size="20" /></td>
	</tr>

<tr>
	<td class="tdatos">HIGIENE PERSONAL</td>
	<td class="dtabla"><center><input type="radio" name="SI" value="SI">SI</input><input type="radio" name="NO" value="NO">NO</input></td><center></td>
	<td class="tdatos">Hora</td>
	<td class="dtabla"><input type="text" name="nombre" value="<?php echo $_REQUEST["Hora"]; ?>" size="20" /></td>
	<td class="tdatos">Observaciones</td>
	<td class="dtabla"><input type="text" name="nombre" value="<?php echo $_REQUEST["Observaciones"]; ?>" size="20" /></td>
</tr>

<tr>
	<td class="tdatos">VISITA AL DENTISTA</td>
	<td class="dtabla"><center><input type="radio" name="SI" value="SI">SI</input><input type="radio" name="NO" value="NO">NO</input></td><center></td>
	<br><td class="tdatos">Medicamento</td>
	<td class="dtabla"><input type="text" name="nombre" value="<?php echo $_REQUEST["Medicameto"]; ?>" size="20" /></td>
<td class="tdatos">Hora</td>
	<td class="dtabla"><input type="text" name="nombre" value="<?php echo $_REQUEST["Hora"]; ?>" size="20" /></td>
	
	</tr>
	</tr>
<tr>

</table>
</form>
