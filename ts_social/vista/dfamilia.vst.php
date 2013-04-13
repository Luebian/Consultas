
<form "method="post" enctype="multipart/form-data">
<table bgcolor="white" border="0" cellpadding="4" width="700" align="center" class="tabla">



<tr>
	<td  class="titulo" colspan="2" align="center" >
        <h3>DATOS DE FAMILIA DEL BENEFICIARIO</h3></td>
</tr>
<?php
if (isset($_POST))
{
    $familia->registro();
    //if ($tsocial->error == 0) {
      //  print 'No se pudieron insertar datos. Revise la informacion';
    //}
}
?>


<tr>
	<td colspan="2" align="center" >
        <h3>Pdre o Tutor</h3></td>
</tr>
<tr>
	<td class="tdatos">Nombre del padre o tutor</td>
	<td class="dtabla">
     <input type="text" name="nompad" value="<?php echo $_GET["nombre"]; ?>" size="30" />
        </td></tr>
<tr>
	<td class="tdatos">Estado Civil</td>
	<td class="dtabla">
		<select  name="estciv">
			<option value="">Seleccione</option>
			<option value="C" <?php if ($_GET["edo_civil"]=="C") echo "selected" ?>>CASAD@</option>
			<option value="S" <?php if ($_GET["edo_civil"]=="S") echo "selected" ?>>SOLTER@</option>		
                        <option value="D" <?php if ($_GET["edo_civil"]=="D") echo "selected" ?>>DIVORCIAD@</option>
                        <option value="V" <?php if ($_GET["edo_civil"]=="V") echo "selected" ?>>VIUD@</option>
		</select>
	</td>
</tr>
<td class="tdatos">Domicilio</td>
	<td class="dtabla">
     <input type="text" name="num_paciente" value="<?php echo $_GET[""]; ?>" size="30" />
        </td></tr>
       <tr>
	<td class="tdatos">Estado</td>
	<td class="dtabla">
		<select name="edo">
			<option value="">Seleccione</option>
                        <option value="v" <?php if ($_GET[""]=="") echo "selected" ?>>Chihuahua</option>
			<option value="C" <?php if ($_GET[""]=="") echo "selected" ?>>Aguascalientes</option>
			<option value="S" <?php if ($_GET[""]=="") echo "selected" ?>>Guadalajara</option>
                        <option value="D" <?php if ($_GET[""]=="") echo "selected" ?>>Monterrey,Nuevo Leon</option>
		        
		</select>
	</td>
</tr>

<tr>
	<td class="tdatos">Municipio</td>
	<td class="dtabla">
		<select name="mpo">
			<option value="">Seleccione</option>
			<option value="C" <?php if ($_GET[""]=="") echo "selected" ?>>Apodaca</option>
			<option value="S" <?php if ($_GET[""]=="") echo "selected" ?>>Guadalupe</option>
                        <option value="D" <?php if ($_GET[""]=="") echo "selected" ?>>Monterrey</option>
		        <option value="v" <?php if ($_GET[""]=="") echo "selected" ?>>San Pedro</option>
		</select>
	</td>
</tr>
<tr>
	<td class="tdatos">Ocupacion</td>
	<td class="dtabla">
     <input type="text" name="num_paciente" value="<?php echo $_GET[""]; ?>" size="30" />
        </td></tr>
<td class="tdatos">Empresa</td>
	<td class="dtabla"><input type="text" name="num_paciente" value="<?php echo $_GET[""]; ?>" size="30" />
        </td></tr>
        <td class="tdatos">Ultimo Empleo</td>
	<td class="dtabla"><input type="text" name="num_paciente" value="<?php echo $_GET[""]; ?>" size="30" />
        </td></tr>
        <td  class="tdatos">Tiempo Desempleado</td>
	<td class="dtabla"> <input type="text" name="num_paciente" value="<?php echo $_GET[""]; ?>" size="30" />
        </td></tr>
        
<tr>
	<td colspan="2" align="center" >
        <h3>Madre o Tutora</h3></font></td>
</tr>
<tr>
	<td class="tdatos">Nombre de la Madre o tutora</td>
	<td class="dtabla"><input type="text" name="num_paciente" value="<?php echo $_GET[""]; ?>" size="30" />
        </td></tr>
<tr>
	<td class="tdatos">Estado Civil</td>
	<td class="dtabla"><select name="estciv">
			<option value="">Seleccione</option>
			<option value="C" <?php if ($_GET[""]=="C") echo "selected" ?>>CASAD@</option>
			<option value="S" <?php if ($_GET[""]=="S") echo "selected" ?>>SOLTER@</option>
                        <option value="D" <?php if ($_GET[""]=="D") echo "selected" ?>>DIVORCIAD@</option>
		        <option value="v" <?php if ($_GET[""]=="V") echo "selected" ?>>VIDU@</option>
		</select>
	</td>
</tr>
<td class="tdatos">Domicilio</td>
	<td class="dtabla"><input type="text" name="num_paciente" value="<?php echo $_GET[""]; ?>" size="30" />
        </td></tr>
<tr>
	<td class="tdatos">Estado</td>
	<td class="dtabla">	<select name="edo">
			<option value="">Seleccione</option>
                        <option value="v" <?php if ($_GET[""]=="") echo "selected" ?>>Chihuahua</option>
			<option value="C" <?php if ($_GET[""]=="") echo "selected" ?>>Aguascalientes</option>
			<option value="S" <?php if ($_GET[""]=="") echo "selected" ?>>Guadalajara</option>
                        <option value="D" <?php if ($_GET[""]=="") echo "selected" ?>>Monterrey,Nuevo Leon</option>
		        
		</select>
	</td>
</tr>
<tr>
	<td class="tdatos">Municipio</td>
	<td class="dtabla">		<select name="mpo">
			<option value="">Seleccione</option>
			<option value="C" <?php if ($_GET[""]=="") echo "selected" ?>>Apodaca</option>
			<option value="S" <?php if ($_GET[""]=="") echo "selected" ?>>Guadalupe</option>
                        <option value="D" <?php if ($_GET[""]=="") echo "selected" ?>>Monterrey</option>
		        <option value="v" <?php if ($_GET[""]=="") echo "selected" ?>>San Pedro</option>
		</select>
	</td>
</tr>
<tr>
	<td class="tdatos">Ocupacion</td>
	<td class="dtabla">  <input type="text" name="num_paciente" value="<?php echo $_GET[""]; ?>" size="30" />
        </td></tr>
<td class="tdatos">Empresa</td>
	<td class="dtabla"><input type="text" name="num_paciente" value="<?php echo $_GET[""]; ?>" size="30" />
        </td></tr>
        <td class="tdatos">Ultimo Empleo</td>
	<td class="dtabla">  <input type="text" name="num_paciente" value="<?php echo $_GET[""]; ?>" size="30" />
        </td></tr>
        <td class="tdatos">Tiempo Desempleado</td>
	<td class="dtabla"> <input type="text" name="num_paciente" value="<?php echo $_GET[""]; ?>" size="30" />
        </td></tr>
        
</table>
<table bgcolor="white" border="0" cellpadding="4" width="700" align="center" class="tabla">
<tr>
	<td colspan="3" align="center" >
        <h3>Miembros que Componene a la Familia</h3></td>
</tr>
<tr>
       
<td colspan="2" align="left"><a href="../ts_social/vista/menu.vst">Agregar Miembro de Familia"</a></td>
</tr>

        <tr>
	<td colspan="2" align="center">
	     <input type="submit" name="gu" value="Guardar">
	<input name="Restablecer" type="reset" value="Limpiar Datos" /></td>
</tr>
</table>
</form>

