

<form method="post" enctype="multipart/form-data">
	<table bgcolor="white" border="0" cellpadding="4" width="700" align="center" class="tabla">
<tr>
	<td class="titulo"colspan="3" align="center" >
        <h3>Miembros que Componene a la Familia</h3></td>
</tr>
<?php
if (isset($_POST))

{
	
  $tmenu->registro();
      //  print 'No se pudieron insertar datos. Revise la informacion';
    //}
}
?>

<tr>
<td class="tdatos">Nombre</td>
<td class="dtabla"> <input type="text" name="nomb" value="<?php echo $_GET["nombre"]; ?>" size="30" />
        </td></tr>
	
       <tr> <td class="tdatos">Edad</td>
	<td class="dtabla"> <input type="text" name="ed" value="<?php echo $_GET["edad"]; ?>" size="30" />
        </td></tr>
	
      <tr><td class="tdatos">Ocupacion</td>	
<td class="dtabla"><input type="text" name="ocup" value="<?php echo $_GET["ocupacion"]; ?>" size="30" />
        </td></tr>
<tr>
	<td colspan="2" align="center">
            
            <input type="submit" name="gu" value="Guardar">
                
	<input name="Reset" type="reset" value="Limpiar Registro"/></td>
             
</tr>
        </table>
	</form>