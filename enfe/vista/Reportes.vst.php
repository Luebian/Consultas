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
<table width="300" align="center" class="tabla">
<tr>
	<td class="tdatos" colspan="10" align="center"><h3>DATOS DEL INCIDENTE</h3></td>
</tr>
</table>
</form>
<form name="trata" action="Expedientes.mdl.php" method="post" enctype="multipart/form-data">
<table width="700" align="center" class="tabla">
<tr>
	
	<td class="tdatos"><input type ="text" name="accidente">accidente</input></td>
	<td class="dtabla"><input type ="text" name="situacion">Situacion</input></td>
	<td class="tdatos"><input type ="text" name="lugar">lugar</input></td>
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
	<table width="300" align="center" class="tabla">
<tr>
<br>
<br>
	<td class="tdatos" colspan="10" align="center"><h3>NIVEL DE CONCIENCIA DEL PACIENTE</h3></td>
</tr>
</table>
</form>
<form name="trata" action="Expedientes.mdl.php" method="post" enctype="multipart/form-data">
<table width="700" align="center" class="tabla">
<tr>
	
	<td class="tdatos"><input type ="text" name="accidente">ANTES DE LA CAIDA</input></td>
	<td class="dtabla"><input type ="text" name="situacion">DESPUES DE LA CAIDA</input></td>

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
	<tr>
	
</table>
</form>
    
