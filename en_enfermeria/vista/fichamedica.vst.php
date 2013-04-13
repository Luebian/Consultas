
<script language="javascript" type="text/javascript" src="../js/funciones.js">
</script>
<?php 
require_once("class/class.php");
if(isset($_POST["grabar"]) and $_POST["grabar"]=="si")
{
$obj=new Trabajo();
$obj->agregar_fucha_medica();
}
?>

<br />
<table width="700" align="center" class="tabla">
<tr>
	<td class="tdatos" colspan="2" align="center"><h3><br>Ficha Medica</br></h3></td>
</tr>
</table>
<form name="form"  method="post" enctype="multipart/form-data">
<table width="700" align="center" class="tabla">

	<tr>
	<td class="tdatos"><input type ="radio" name="accidente" value="Caída">Caída</input></td>
	<td class="dtabla"><input type ="radio" name="accidente" value="Solo">Solo</input></td>
	<td class="tdatos"><input type ="radio" name="accidente" value="Camilla">Camilla</input></td>
	</tr>
	<tr><td class="tdatos">Domicilio:</td>
	<td class="dtabla"><input type="text" name="domocilio" value="<?php echo $_REQUEST["domicilio"]; ?>" size="20" /></td>
    </tr>
</tr>
   </tr>
	<tr>
			<td class="tdatos">Sexo:</td>
	<td class="dtabla">
	<input type ="radio" name="sexo" value="hombre">Hombre</input>
	<input type ="radio" name="sexo" value="mujer">Mujer</input>
	</td>
		  		</tr><tr><td class="tdatos">Edad:</td>
	<td class="dtabla"><input type="text" name="edad" value="<?php echo $_REQUEST["domicilio"]; ?>" size="20" /></td>
	 		</tr><tr><td class="tdatos">Fecha de Nacimiento:</td>
        <td class="dtabla"><input type="text" name="dia" value="<?php echo $_REQUEST["Dia1"]; ?>" size="1" />/
        <input type="text" name="mes" value="<?php echo $_REQUEST["Mes1"]; ?>" size="1" />/
        <input type="text" name="ano" value="<?php echo $_REQUEST["Año1"]; ?>" size="2" />d&iacute;a/mes/a&ntilde;o</td>
    </tr>
		<tr>
			<td class="tdatos">Tipo de Sangre:</td>
	<td class="dtabla"><input type="text" name="sangre" value="<?php echo $_REQUEST["nombre"]; ?>" size="20" /></td>
	     
		  		</tr><tr><td class="tdatos">Diagnostico:</td>
	<td class="dtabla"><input type="text" name="diagnostico" value="<?php echo $_REQUEST["domicilio"]; ?>" size="20" /></td>
    </tr>
		<tr>
			<td class="tdatos">Medicamento que toma:</td>
	<td class="dtabla"><input type="text" name="toma" value="<?php echo $_REQUEST["nombre"]; ?>" size="20" /></td>
		  		</tr><tr><td class="tdatos">Horario de medicamento:</td>
	<td class="dtabla"><input type="text" name="horario" value="<?php echo $_REQUEST["domicilio"]; ?>" size="20" /></td>
			</tr><tr><td class="tdatos">Dosis:</td>
	<td class="dtabla"><input type="text" name="dosis" value="<?php echo $_REQUEST["domicilio"]; ?>" size="20" /></td>
    </tr>
	

</table>

<br>
<center>En caso de presentarse alguna eventualidad(accidente,fallecimiento,internamiento,<br>
etc) debemos comunicarnos con:</center>
<br>
<br>

<table width="700" align="center" class="tabla">
		<tr>
	<td class="tdatos">Nombre:</td>
	<td class="dtabla"><input type="text" name="nombre" value="<?php echo $_REQUEST["nombre"]; ?>" size="20" /></td>
		    </tr><tr><td class="tdatos">Parentesco:</td>
	<td class="dtabla"><input type="text" name="parentesco" value="<?php echo $_REQUEST["parentesco"]; ?>" size="20" /></td>
	  </tr><tr><td class="tdatos">Tel de casa:</td>
	<td class="dtabla"><input type="text" name="casa" value="<?php echo $_REQUEST["tel de casa"]; ?>" size="20" /></td>
    </tr>
		<tr>
	<td class="tdatos">Tel de Trabajo:</td>
	<td class="dtabla"><input type="text" name="trabajo" value="<?php echo $_REQUEST["tel del trabajo"]; ?>" size="20" /></td>
		   </tr><tr> <td class="tdatos">Celular:</td>
	<td class="dtabla"><input type="text" name="celular" value="<?php echo $_REQUEST["celular"]; ?>" size="20" /></td>
	</tr><tr><td class="tdatos">En caso de Necesidad de traslado ¿a que institucion se le canaliza?</td>
	<td class="dtabla"><input type="text" name="traslado" value="<?php echo $_REQUEST[""]; ?>" size="20" /></td>
    </tr>
</tr>

</table>
<center>
<input type="hidden" name="grabar" value="si"/>
<input type="button" onclick="valida_registro();" value="Registrar" title="Registrar"/>
</center>
</form>
    
