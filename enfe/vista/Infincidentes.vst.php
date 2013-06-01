<br />
<table width="700" align="center" class="tabla">
<tr>
	<td class="tdatos" colspan="8" align="center"><h3>INFORME DE INCIDENTES</h3></td>
</tr>
</table>
</form>
<form name="trata" action=Infincidentes.mdl.php" method="post" enctype="multipart/form-data">
<table width="700" align="center" class="tabla">
<tr>

	<td class="tdatos">Paciente:</td>
	<td class="dtabla"><input type="text" name="num_paciente" value="<?php echo $_REQUEST["paciente"]; ?>" size="40" /></td>
</tr>

<tr>
	<td class="tdatos">Folio:</td>
	<td class="dtabla"><input type="text" name="nombre" value="<?php echo $_REQUEST["folio"]; ?>" size="40" /></td>
</tr>
</table>
</form>
<br />
<table width="700" align="center" class="tabla">
<tr>
	<td class="tdatos" colspan="8" align="center"><h3>DATOS DEL INCIDENTE</h3></td>
</tr>
</table>
</form>
<form name="trata" action="Expedientes.mdl.php" method="post" enctype="multipart/form-data">
<table width="700" align="center" class="tabla">
<tr>
	<td class="tdatos" colspan="" align="center"><h3>Accidente</h3></td>
	<td class="tdatos" colspan="" align="center"><h3>Situacion</h3></td>
		<td class="tdatos" colspan="" align="center"><h3>Lugar</h3></td>
</tr>

	<tr>
	
	<td class="tdatos"><input type ="radio" name="accidente" value="caida">Caída</input></td>
	<td class="dtabla"><input type ="radio" name="situacion" value="solo">Solo</input></td>
	<td class="tdatos"><input type ="radio" name="lugar" value="camilla">Camilla</input></td>
	</tr>
	<tr>
	
	<td class="tdatos"><input type ="radio" name="accidente" value="caida">Golpe</input></td>
	<td class="dtabla"><input type ="radio" name="situacion" value="solo">Acompañado por</input></td>
	<td class="tdatos"><input type ="radio" name="lugar" value="camilla">Silla de ruedas</input></td>
	</tr>
	<tr>
	
	<td class="tdatos"><input type ="radio" name="accidente" value="caida">Pelea</input></td>
	<td class="dtabla"><input type ="radio" name="situacion" value="solo">Personal</input></td>
	<td class="tdatos"><input type ="radio" name="lugar" value="camilla">Actividad Fisica</input></td>
	</tr>
	<tr>
	
	<td class="tdatos"><input type ="radio" name="accidente" value="caida">Convulsivo</input></td>
	<td class="dtabla"><input type ="radio" name="situacion" value="solo">Compañero</input></td>
	<td class="tdatos"><input type ="radio" name="lugar" value="camilla">Cuarto de Baño</input></td>
	</tr>
	<tr>
	
	<td class="tdatos"><input type ="radio" name="accidente" value="caida">Otros</input></td>
	<td class="dtabla"><input type ="radio" name="situacion" value="solo"></input></td>
	<td class="tdatos"><input type ="radio" name="lugar" value="camilla">Otras Actividades</input></td>
	</tr>
	<table width="700" align="center" class="tabla">
<tr>
<br>
<br>
	<td class="tdatos" colspan="8" align="center"><h3>NIVEL DE CONCIENCIA DEL PACIENTE</h3></td>
</tr>
</table>
</form>
<form name="trata" action="Expedientes.mdl.php" method="post" enctype="multipart/form-data">
<table width="700" align="center" class="tabla">
<tr>
	<td class="tdatos" colspan="" align="center"><h3>ANTES DE LA CAIDA</h3></td>
	<td class="tdatos" colspan="" align="center"><h3>DESPUES DE LA CAIDA</h3></td>
		
</tr>
		<tr>
	
	<td class="tdatos"><input type ="radio" name="accidente" value="caida">Orientada </input></td>
	<td class="dtabla"><input type ="radio" name="situacion" value="solo">Orientado</input></td>
	</tr>

	<tr>
	
	<td class="tdatos"><input type ="radio" name="accidente" value="caida">Confuso</input></td>
	<td class="dtabla"><input type ="radio" name="situacion" value="solo">Confuso</input></td>
	</tr>
	<tr>
	
	<td class="tdatos"><input type ="radio" name="accidente" value="caida">Inconsciente</input></td>
	<td class="dtabla"><input type ="radio" name="situacion" value="solo">Inconsciente</input></td>
	</tr>
	<tr>
	
	<td class="tdatos"><input type ="radio" name="accidente" value="caida">Agitado</input></td>
	<td class="dtabla"><input type ="radio" name="situacion" value="solo">Agitado</input></td>
	</tr>
</table>
</form>
	<table width="700" align="center" class="tabla">
<tr>
<br>
<br>
	<td class="tdatos" colspan="8" align="center"><h3>FARMACOS ADMINISTRADOS</h3></td>
</tr>
</table>
</form>
<form name="trata" action="Expedientes.mdl.php" method="post" enctype="multipart/form-data">
<table width="700" align="center" class="tabla">
<tr>
	<td class="tdatos"><input type ="radio" name="" value="Psicofarmacos">Psicofarmacos</input></td>
	<td class="dtabla"><input type ="radio" name="" value="Hipotensotes">Hipotensotes</input></td>
	<td class="tdatos"><input type ="radio" name="" value="Diureticos">Diureticos</input></td>
	<td class="dtabla"><input type ="radio" name="" value="Hipogluceminantes">Hipogluceminantes</input></td>
	<td class="dtabla"><input type ="radio" name="" value="Otros">Otros</input></td>
	</tr>

	<tr>
	<form name="trata" action="Expedientes.mdl.php" method="post" enctype="multipart/form-data">
<table width="700" align="center" class="tabla">
<tr>
<br>
<br>
	<td class="tdatos" colspan="8" align="center"><h3>SITUACION POSTERIOR AL ACCIDENTE</h3></td>
</tr>
<tr>
<br>
	<td class="tdatos" colspan="" align="center"><h3>ANTES DE LA CAIDA</h3></td>
	<td class="tdatos" colspan="" align="center"><h3>DESPUES DE LA CAIDA</h3></td>
		
</tr>
		<tr>
	
	<td class="tdatos"><input type ="radio" name="accidente" value="Yeso">Yeso</input></td>
	<td class="dtabla"><input type ="radio" name="situacion" value="Herida que requiere satura">Herida que requiere satura</input></td>
	</tr>

	<tr>
	
	<td class="tdatos"><input type ="radio" name="accidente" value="caida">Fractura</input></td>
	<td class="dtabla"><input type ="radio" name="situacion" value="solo">Herida que no requiere satura</input></td>
	</tr>
	<tr>
	
	<td class="tdatos"><input type ="radio" name="accidente" value="caida">Erosion</input></td>
	<td class="dtabla"><input type ="radio" name="situacion" value="solo">Perdida de Consciencia</input></td>
	</tr>
	<tr>
	
	<td class="tdatos"><input type ="radio" name="accidente" value="Hematoma">Hematoma</input></td>
	<td class="dtabla"><input type ="radio" name="situacion" value="Otros">Otros</input></td>
	</tr>
</table>
</form>
	
</table>
</form>