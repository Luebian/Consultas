
<form "method="post" enctype="multipart/form-data">
<div class="titulo">Informacion Economica</div>
	
	<table class="titulo" width="700" align="center">
	<tr>
	<?php
if (isset($_POST))
{
    $decono->registro();
    //if ($tsocial->error == 0) {
      //  print 'No se pudieron insertar datos. Revise la informacion';
    //}
}
?>

		<td class="tdatos" colspan="2" align="center"><b>Ingreso Mensual</b></td>
		<td class="tdatos" colspan="2" align="center"><b>Egreso Mensual</b></td>
	</tr>
	
	<tr>
		<td class="tdatos">Concepto $</td>
		<td class="dtabla"><input type="text" name="concepto" value="" size="14"></td>
		<td class="tdatos">Concepto $</td>
		<td class="dtabla"><input type="text" name="concepto" value="" size="14"></td>
	</tr>
	<tr>
		
		<td class="tdatos">Salario Mensual $</td>
		<td class="dtabla"><input type="text" name="mensual" value="" size="14"></td>
		<td class="tdatos">Renta de Hipoteca $</td>
		<td class="dtabla"> <input type="text" name="rthipote" value="" size="14"></td>
		
	</tr>
	<tr>
		
		<td class="tdatos">Bono de Despensa $</td>
		<td class="dtabla"> <input type="text" name="bnodesp" value="" size="14"></td>
		<td class="tdatos">Creditos $</td>
		<td class="dtabla"> <input type="text" name="credito" value="" size="14"></td>
	
	</tr>
	<tr>
		
		<td class="tdatos">Prima $</td>
		<td class="dtabla"> <input type="text" name="prima" value="" size="14"></td>
		<td class="tdatos">Servicios de Agua $</td>
		<td class="dtabla"> <input type="text" name="agua" value="" size="14"></td>
	</tr>
	<tr>
		<td class="tdatos">Vacaciones $</td>
		<td class="dtabla"> <input type="text" name="vacas" value="" size="14" />
		<td class="tdatos">Servicios de Luz $</td>
		<td class="dtabla"> <input type="text" name="luz" value="" size="14" />
		
	</table>
</table>


    
<table border="0" cellpadding="2" width="700" align="center" class="tabla">
	<tr>
	<td class="tdatos" colspan="2" align="center"><h3>Inmuebles</h3></td>
	</tr>
		<td class="tdatos">Modelo </td>
		<td class="dtabla"> <input type="text" name="mdl" value="<?php echo $_REQUEST["modelo"]; ?>" size="40" /></td>
	</tr>
	<tr>
		<td class="tdatos"> Año</td>
		<td class="dtabla"> <input type="text" name="ano" value="<?php echo $_REQUEST["ano"]; ?>" size="40" /></td>
	</tr>
	<tr>
		<td class="tdatos">Valor $ </td>
		<td class="dtabla">  <input type="text" name="valor" value="<?php echo $_REQUEST["valor"]; ?>" size="40" /></td>
	</tr>
	<tr>
		<td class="tdatos">Propio</td>
		<td class="dtabla">
		<input type="radio" name="s" value="si">si
		<input type="radio" name="n" value="<?php echo $_REQUEST["modelo"]; ?>">No</td>
	</tr>
	<tr>
		<td class="tdatos">Empresa </td>
		<td class="dtabla">
		<input type="text" name="emp" value="<?php echo $_REQUEST["empre"]; ?>" size="40" /></td>
	</tr>
	</table>

    
	<table border="0" cellpadding="2" width="700" align="center" class="tabla">
	<tr>
	<td class="tdatos" colspan="2" align="center"><h3>Patrimonios</h3></td>
	</tr>
		<td class="tdatos">Ubicacion </td>
		<td class="dtabla"> <input type="text" name="ubi" value="<?php echo $_REQUEST["ubicacion"]; ?>" size="40" /></td>
	</tr>
	<tr>
		<td class="tdatos"> Metros de Construccion</td>
		<td class="dtabla"> <input type="text" name="mconstruc" value="<?php echo $_REQUEST["mtsconstruccion"]; ?>" size="40" /></td>
	</tr>
	<tr>
		<td class="tdatos">Metros del Terreno $ </td>
		<td class="dtabla">  <input type="text" name="mterreno" value="<?php echo $_REQUEST["mtsterreno"]; ?>" size="40" /></td>
	</tr>
	<tr>
		<td class="tdatos">Tipo de Construccion </td>
		<td class="dtabla"> <input type="text" name="constr" value="<?php echo $_REQUEST["ticonstruccion"]; ?>" size="40" /></td>
	</tr>
	<tr>
		 <td class="tdatos">Costo </td>
		<td class="dtabla"> <input type="text" name="cost" value="<?php echo $_REQUEST["costo"]; ?>" size="40" /></td>
	</tr>
	</table>
<table bgcolor="white" border="0" cellpadding="4" width="700" align="center" class="tabla">
	<tr>
		<td colspan="2" align="center">
		<input type="submit" name="reg" value="Registrar">
                <input name="Reset" type="reset" value="Limpiar Datos"/></td>
             
	</tr>
</table>
</table>
