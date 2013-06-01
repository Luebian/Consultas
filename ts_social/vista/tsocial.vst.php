
<form method="post" enctype="multipart/form-data">
<table bgcolor="white" border="0" cellpadding="4" width="700" align="center" class="tabla">
<tr>
	<td class="titulo" colspan="2" align="center" ><h3>Datos Personales del Beneficiario</h3></td>
</tr>
<?php
	
if (!empty($_POST))
{print_r($_POST);
   // $tsocial->registro();
    if ($tsocial->error == 0) {
        print 'No se pudieron insertar datos. Revise la informacion';
    }
}
	$id=$tsocial->getID();

?>

<tr>
	<td class="tdatos">Número de Beneficiario</td>
	<td class="dtabla">
     <input type="text" name="num_bene" value="<?php echo $id; ?>" size="40" />
        </td></tr>
<tr>
	<td class="tdatos">Foto</td>
	<td class="dtabla"><input name="userfile" type="file" id="file"/></td>
</tr>
<tr >
	<td class="tdatos">Nombre</td>
	<td class="dtabla"><input type="text" name="nomb" value="<?php echo $_POST["nombre"]; ?>" size="40" /></td>
</tr>
<tr>
	<td class="tdatos">Segundo Nombre</td>
	<td class="dtabla"><input type="text" name="nomb2" value="<?php echo $_POST["nombre2"]; ?>" size="40" /></td>
</tr>
<tr>
	<td class="tdatos">Apellido Paterno</td>
	<td class="dtabla"><input type="text" name="ape_p" value="<?php echo $_POST["apellido_p"]; ?>" size="40" /></td>
</tr>
<tr>
	<td class="tdatos">Apellido Materno</td>
	<td class="dtabla"><input type="text" name="ape_m" value="<?php echo $_POST["apellido_m"]; ?>" size="40" /></td>
</tr>
<tr>
	<td class="tdatos">Fecha de Nacimiento</td>
	<td class="dtabla">
<input type="text" name="dia" value="<?php echo $_POST["fecha_naci"]; ?>" size="1" />/
<input type="text" name="mes" value="<?php echo $_POST["fecha_naci"]; ?>" size="1" />/
<input type="text" name="ano" value="<?php echo $_POST["fecha_naci"]; ?>" size="2" />
d&iacute;a/mes/a&ntilde;o</td>
</tr>
<tr>
	<td class="tdatos">Lugar de Nacimiento</td>
	<td class="dtabla"><input type="text" name="lu_nac" value="<?php echo $_POST["lugar_naci"]; ?>" size="40" /></td>
</tr>
<tr>
	<td class="tdatos">Como le gusta que le digan?</td>
	<td class="dtabla"><input type="text" name="comgusdig" value="<?php echo $_POST["co_gus_dig"]; ?>" size="40" /></td>
</tr>
<tr>

<tr>
	<td class="tdatos">Sexo</td>
	<td class="dtabla">
            <input type="radio" name="sex" value="masculino">Masculino
<input type="radio" name="sex" value="femenino">Femenino	
	</td>
</tr>
<tr>
	<td class="tdatos">Dirección</td>
	<td class="dtabla"><input type="text" name="dire" value="<?php echo $_POST["direcc"]; ?>" size="40" /></td>
</tr>
<tr>
	<td class="tdatos">Telefono de casa</td>
	<td class="dtabla"><input type="text" name="tel_cas" value="<?php echo $_POST["telef_cas"]; ?>" size="40" /></td>
</tr>
<tr>
	<td class="tdatos">Nombre de la persona con quien dirigirse en caso de aciidente</td>
	<td class="dtabla"><input type="text" name="nomperso" value="<?php echo $_POST["nom_per_diri"]; ?>" size="40" /></td>
</tr>
<tr>
	<td class="tdatos">Telefono</td>
	<td class="dtabla"><input type="text" name="tel2" value="<?php echo $_POST["telef2"]; ?>" size="40" /></td>
</tr>
<tr>
	<td class="tdatos">Miedos, Fobias o Angustias</td>
	<td class="dtabla"><input type="text" name="miedos" value="<?php echo $_POST["mfa"]; ?>" size="40" /></td>
</tr>
<tr>
	<td class="tdatos">Gustos o Preferencias</td>
	<td class="dtabla"><input type="text" name="gus_pref" value="<?php echo $_POST["gus_prefe"]; ?>" size="40" /></td>
</tr>
<tr>
	<td class="tdatos">Lo que lo Hace Enojar</td>
	<td class="dtabla"><input type="text" name="enojar" value="<?php echo $_POST["lo_q_hac_eno"]; ?>" size="40" /></td>
</tr>
<tr>
	<td class="tdatos">Habilidades</td>
	<td class="dtabla"><input type="text" name="habili" value="<?php echo $_POST["habilidades"]; ?>" size="40" /></td>
</tr>
<tr>
	<td class="tdatos">Aspectos a Mejorar</td>
	<td class="dtabla"><input type="text" name="aspec" value="<?php echo $_POST["aspec_mejo"]; ?>" size="40" /></td>
</tr>
<tr>
	<td colspan="2" align="center">
        <input type="submit" name="reg" value="Registrar">     
	<input name="Reset" type="reset" value="Limpiar Registro"/></td>
         
</tr>

</table>
</form>