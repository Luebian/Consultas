						<br><br><br>
<form method="post" enctype="multipart/form-data">
	<table bgcolor="white" border="0" cellpadding="4" width="700" align="center" class="tabla">

<tr>
	<td class="titulo"colspan="3" align="center" >
        <h3>Miembros que Componene a la Familia</h3></td>
</tr>
<tr>
<td class="tdatos">Nombre</td>
<td class="dtabla"> <input type="text" name="nomb" value="<?php echo $_GET[""]; ?>" size="30" />
        </td></tr>
	
       <tr> <td class="tdatos">Edad</td>
	<td class="dtabla"> <input type="text" name="edad" value="<?php echo $_GET[""]; ?>" size="30" />
        </td></tr>
	
      <tr><td class="tdatos">Ocupacion</td>	
<td class="dtabla"><input type="text" name="ocup" value="<?php echo $_GET[""]; ?>" size="30" />
        </td></tr>
<tr>
	<td colspan="2" align="center">
            
            <input type="submit" name="reg" value="Guardar">
                
	<input name="Reset" type="reset" value="Limpiar Registro"/></td>
             
</tr></form>
        </table>
