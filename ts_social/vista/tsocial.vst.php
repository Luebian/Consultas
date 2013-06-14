<script>
$().ready(function() {
	

	// validate signup form on keyup and submit
	$(".form").validate({
		rules: {
			firstname: "required",
			nomb: {
				required: true,
				minlength: 2
			},
			ape_p: {
				required: true,
				minlength: 2
			},
			ape_m: {
				required: true,
				minlength: 2
			},
			dia: {
				required: true,
				minlength: 2
			},
			mes: {
				required: true,
				minlength: 2
			},
			ano: {
				required: true,
				minlength: 4
			},
			lu_nac: {
				required: true,
				minlength: 4
			},
			dire: {
				required: true,
				minlength: 4
			},
			tel_cas: {
				required: true,
				minlength: 8
			},
			nomperso: {
				required: true,
				minlength: 2
			},
			tel2: {
				required: true,
				minlength: 8
			},
			sex: {
				required: true
			},
			email: {
				required: true,
				email: true
			},

			
		},
		messages: {
			firstname: "Please enter your firstname",
			nomb: {
				required: "Ingrese un nombre",
				minlength: "Debe ser mayor a 2 caracteres"
			},
			ape_p: {
				required: "Ingrese apellido paterno",
				minlength: "Debe ser mayor a 2 caracteres"
			},
			ape_m: {
				required: "Ingrese apellido materno",
				minlength: "Debe ser mayor a 2 caracteres"
			},
			dia: {
				required: "Ingrese el dia",
				minlength: "Debe tener 2 (00) digitos"
			},
			mes: {
				required: "Ingrese el mes",
				minlength: "Debe tener  2 (00) digitos"
			},
			ano: {
				required: "Ingrese el año",
				minlength: "Debe tener 4 (2000) digitos"
			},			
			lu_nac: {
				required: "Ingrese su lugar de nacimiento",
				minlength: "Debe tener 2 caracteres"
			},			
			dire: {
				required: "Ingrese su direccion",
				minlength: "Debe tener 2 caracteres"
			},			
			tel_cas: {
				required: "Ingrese su telefono",
				minlength: "Debe tener 8 digitos"
			},			
			nomperso: {
				required: "Ingrese el nombre de la persona",
				minlength: "Debe tener 2 caracteres"
			},			
			tel2: {
				required: "Ingrese el telefono de la persona",
				minlength: "Debe tener 2 caracteres"
			},			
			sex: {
				required: "Seleccione una opcion"
			},			
			email: "Please enter a valid email address"
		}
	});

	
});
</script>

<form class="form" method="post" enctype="multipart/form-data">
<table bgcolor="white" border="0" cellpadding="4" width="700" align="center" class="tabla">
<tr>
	<td class="titulo" colspan="2" align="center" ><h3>Datos Personales del Beneficiario</h3></td>
</tr>
<?php
	
if (!empty($_POST))
{//print_r($_POST);
    $tsocial->registro();
    if ($tsocial->error == 0) {
        print 'No se pudieron insertar datos. Revise la informacion';
    }
}
	$id=$tsocial->getID();

?>

<tr>
	<td class="tdatos">Número de Beneficiario</td>
	<td class="dtabla">
     <input type="text" name="num_bene" id="num_bene" value="<?php echo $id; ?>" size="40" readonly/>
        </td></tr>
<tr>
	<td class="tdatos">Foto</td>
	<td class="dtabla"><input name="userfile" type="file" id="file"/></td>
</tr>
<tr >
	<td class="tdatos">Nombre<em>*</em></td>
	<td class="dtabla"><input type="text" name="nomb" value="" size="40" /></td>
</tr>
<tr>
	<td class="tdatos">Segundo Nombre</td>
	<td class="dtabla"><input type="text" name="nomb2" value="" size="40" /></td>
</tr>
<tr>
	<td class="tdatos">Apellido Paterno<em>*</em></td>
	<td class="dtabla"><input type="text" name="ape_p" value="" size="40" /></td>
</tr>
<tr>
	<td class="tdatos">Apellido Materno<em>*</em></td>
	<td class="dtabla"><input type="text" name="ape_m" value="" size="40" /></td>
</tr>
<tr>
	<td class="tdatos">Fecha de Nacimiento<em>*</em></td>
	<td class="dtabla">
<input type="text" name="dia" value="" size="1" />/
<input type="text" name="mes" value="" size="1" />/
<input type="text" name="ano" value="" size="2" />
d&iacute;a/mes/a&ntilde;o</td>
</tr>
<tr>
	<td class="tdatos">Lugar de Nacimiento<em>*</em></td>
	<td class="dtabla"><input type="text" name="lu_nac" value="" size="40" /></td>
</tr>
<tr>
	<td class="tdatos">Como le gusta que le digan?</td>
	<td class="dtabla"><input type="text" name="comgusdig" value="" size="40" /></td>
</tr>
<tr>

<tr>
	<td class="tdatos">Sexo<em>*</em></td>
	<td class="dtabla">
            <input type="radio" name="sex" value="M">Masculino
<input type="radio" name="sex" value="F">Femenino	
	</td>
</tr>
<tr>
	<td class="tdatos">Dirección<em>*</em></td>
	<td class="dtabla"><input type="text" name="dire" value="" size="40" /></td>
</tr>
<tr>
	<td class="tdatos">Telefono de casa<em>*</em></td>
	<td class="dtabla"><input type="text" name="tel_cas" value="" size="40" /></td>
</tr>
<tr>
	<td class="tdatos">Nombre de la persona con quien dirigirse en caso de aciidente<em>*</em></td>
	<td class="dtabla"><input type="text" name="nomperso" value="" size="40" /></td>
</tr>
<tr>
	<td class="tdatos">Telefono<em>*</em></td>
	<td class="dtabla"><input type="text" name="tel2" value="" size="40" /></td>
</tr>
<tr>
	<td class="tdatos">Miedos, Fobias o Angustias</td>
	<td class="dtabla"><input type="text" name="miedos" value="" size="40" /></td>
</tr>
<tr>
	<td class="tdatos">Gustos o Preferencias</td>
	<td class="dtabla"><input type="text" name="gus_pref" value="" size="40" /></td>
</tr>
<tr>
	<td class="tdatos">Lo que lo Hace Enojar</td>
	<td class="dtabla"><input type="text" name="enojar" value="" size="40" /></td>
</tr>
<tr>
	<td class="tdatos">Habilidades</td>
	<td class="dtabla"><input type="text" name="habili" value="" size="40" /></td>
</tr>
<tr>
	<td class="tdatos">Aspectos a Mejorar</td>
	<td class="dtabla"><input type="text" name="aspec" value="" size="40" /></td>
</tr>
<tr>
	<td colspan="2" align="center">
        <input type="submit" name="reg" value="Registrar">     
	<input name="Reset" type="reset" value="Limpiar Registro"/></td>
         
</tr>

</table>
</form>
