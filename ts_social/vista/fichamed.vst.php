
<form method="post" enctype="multipart/form-data">
<table bgcolor="white" border="0" cellpadding="4" width="700" align="center" class="tabla">
<tr>
	<td colspan="2" align="center" ><h3>Ficha Medica</h3><p>Antecedentes de la Discapacidad</p></td>
</tr>
<?php
if (isset($_POST))
{
    $ficha->registro();
    //if ($tsocial->error == 0) {
      //  print 'No se pudieron insertar datos. Revise la informacion';
    //}
}
?>

<tr>
	<td class="tdatos">Diagnostico Medico</td>
	<td class="dtabla"><input type="text" name="diagmedico" value="<?php echo $_GET["diag_medi"]; ?>" size="40" /></td>
</tr>
<tr>
	<td class="tdatos">Discapacidad Congenita o Adquirida</td>
	<td class="dtabla"><input type="text" name="dca" value="<?php echo $_GET["disc_congenita"]; ?>" size="40" /></td>
</tr>
<tr>
	<td class="tdatos">Motivo de Ingreso</td>
	<td  class="dtabla"><input type="text" name="motin" value="<?php echo $_GET["mot_ingre"]; ?>" size="40" /></td>
</tr>
<tr>
	<td class="tdatos">Descripcion Especifica de la Discapaciad</td>
	<td class="dtabla"><input type="text" name="descespecifica" value="<?php echo $_GET["desc_espe_disc"]; ?>" size="40" /></td>
</tr>
<tr>
	<td class="tdatos">Ingiere algun Medicamento Actualmente</td>
	<td class="dtabla">
<input type="radio" name="in" value="s"<?php if ($_GET["ingie_medi"]=="SI") echo "selected" ?>>si
<input type="radio" name="in" value="n"<?php if ($_GET["ingie_medi"]=="NO") echo "selected" ?>>no</td>
		
</tr>
<tr>
	<td  class="tdatos">Que Medicamneto Toma</td>
	<td class="dtabla"><input type="text" name="medicatoma" value="<?php echo $_GET["qmedi_tom"]; ?>" size="40" /></td>
</tr>
<tr>
    <tr>
	<td class="tdatos">Dosis</td>
	<td class="dtabla"><input type="text" name="dosis" value="<?php echo $_GET["dosis"]; ?>" size="40" /></td>
</tr>
<tr >
	<td class="tdatos">Horario del Medicamento</td>
	<td class="dtabla"><input type="text" name="hmedica" value="<?php echo $_GET["h_medica"]; ?>" size="40" /></td>
</tr>
	<td class="tdatos">Es alergico Algun Medicamento</td>
    <td class="dtabla">
<input type="radio" name="es" value="s">si
<input type="radio" name="es" value="n">no</td>
</tr>
<tr>
	<td class="tdatos"bgcolor="#ADD8E6">A cual Medicamento</td>
	<td class="dtabla"><input type="text" name="cmedica" value="<?php echo $_GET["aler_medi"]; ?>" size="40" /></td>
</tr>
<tr>
	<td class="tdatos">Alergias que padece</td>
	<td class="dtabla"><input type="text" name="alergias" value="<?php echo $_GET["aler_pade"]; ?>" size="40" /></td>
</tr>
<tr>
	<td class="tdatos">Tipo de Sangre</td>
	<td class="dtabla">
		<select name="tipsang">
			<option value="">Seleccione</option>
			<option value="AME" <?php if ($_GET["ti_sangre"]=="AME") echo "selected" ?>>A RH-</option>
			<option value="AMA" <?php if ($_GET["ti_sangre"]=="AMA") echo "selected" ?>>A RH+</option>
			<option value="ABME" <?php if ($_GET["ti_sangre"]=="ABME") echo "selected" ?>>AB RH-</option>
			<option value="ABMA" <?php if ($_GET["ti_sangre"]=="ABMA") echo "selected" ?>>AB RH+</option>
			<option value="BME" <?php if ($_GET["ti_sangre"]=="BME") echo "selected" ?>>B RH-</option>
			<option value="BMA" <?php if ($_GET["ti_sangre"]=="BMA") echo "selected" ?>>B RH+</option>
			<option value="OME" <?php if ($_GET["ti_sangre"]=="OME") echo "selected" ?>>O RH-</option>
			<option value="OMA" <?php if ($_GET["ti_sangre"]=="OMA") echo "selected" ?>>O RH+</option>		
		
		</select>
	</td>
</tr>
<tr>
	<td class="tdatos">N° de Afiliacion IMSS O ISSTE</td>
	<td class="dtabla"><input type="text" name="numafilia" value="<?php echo $_GET["num_afilia"]; ?>" size="40" /></td>
</tr>
<tr>
	<td class="tdatos">Nombre del Medico Familiar</td>
	<td class="dtabla"><input type="text" name="nom_medi" value="<?php echo $_GET["nom_medico"]; ?>" size="40" /></td>
</tr>
<tr>
	<td class="tdatos">Hospital donde se atiende</td>
	<td class="dtabla"><input type="text" name="hatiende" value="<?php echo $_GET["hospi_atiende"]; ?>" size="40" /></td>
</tr>
<tr>
	<td class="tdatos">En caso de trasladarlo, en que institucion medica seria?</td>
	<td class="dtabla"><input type="text" name="casotraslado" value="<?php echo $_GET["traslado"]; ?>" size="40" /></td>
</tr>

<tr>
	<td colspan="2" align="center">
            
            <input type="submit" name="reg" value="Registrar">
                
	<input name="Reset" type="reset" value="Limpiar Datos"/></td>
             
</tr>
</table>
</form>