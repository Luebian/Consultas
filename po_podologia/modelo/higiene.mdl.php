<form name="busqueda" action="busqueda.mdl.php" method="post" enctype="multipart/form-data">
<table width="700" align="center" class="tabla">
<tr>
	<td class="tdatos" colspan="2" align="center"><h3>DATOS DEL PACIENTE</h3></td>
</tr>
<tr>
	<td class="tdatos">Num_Paciente:</td>
	<td class="dtabla"><input type="text" name="num_paciente" value="<?php echo $_REQUEST["num_paciente"]; ?>" size="20" /></td>
</tr>

<tr>
	<td class="tdatos">Nombre:</td>
	<td class="dtabla"><input type="text" name="nombre" value="<?php echo $_REQUEST["nombre"]; ?>" size="40" /></td>
</tr>
</table>
</form>
<table width="700" align="center" class="tabla">
    <tr>
        <td class="tdatos"><font size="2">0 = NO LO HACE</font></td>
        <td class="tdatos"><font size="2">1 = LO HACE CON MUCHA FACILIDAD</font></td>
        <td class="tdatos"><font size="2">2 = LO HACE CON POCA DIFICULTAD</font></td>
        <td class="tdatos"><font size="2">3 = LO HACE FACILMENTE</font></td>
    </tr>
</table>

<div class="titulo">ADVH</div><br>
<form name="advh" action="advh.mdl.php" method="post" enctype="multipart/form-data">
<table width="700" align="center" class="tabla">
    <tr>
        <td class="tdatos"><font size="4" align="center">HIGIENE</font></td>
        <td class="tdatos">0</td>
        <td class="tdatos">1</td>
        <td class="tdatos">2</td>
        <td class="tdatos">3</td>
        <td class="tdatos">Si</td>
        <td class="tdatos">No</td>
   <tr>
	<td class="tdatos">Se lava las manos</td>
	<td class="dtabla"><input type="checkbox" name="check1"></td>
        <td class="dtabla"><input type="checkbox" name="check2"></td>
	<td class="dtabla"><input type="checkbox" name="check3"></td>
	<td class="dtabla"><input type="checkbox" name="check4"></td>
	<td class="dtabla"><input type="checkbox" name="check5"></td>
	<td class="dtabla"><input type="checkbox" name="check6"></td>
    </tr>
    </tr>
    <tr>
	<td class="tdatos">Se lava la cara</td>
	<td class="dtabla"><input type="checkbox" name="check1"></td>
        <td class="dtabla"><input type="checkbox" name="check2"></td>
	<td class="dtabla"><input type="checkbox" name="check3"></td>
	<td class="dtabla"><input type="checkbox" name="check4"></td>
	<td class="dtabla"><input type="checkbox" name="check5"></td>
	<td class="dtabla"><input type="checkbox" name="check6">
	</td>
</tr>
    
    <tr>
	<td class="tdatos">Secarse despues del baño</td>
	<td class="dtabla"><input type="checkbox" name="check1"></td>
        <td class="dtabla"><input type="checkbox" name="check2"></td>
	<td class="dtabla"><input type="checkbox" name="check3"></td>
	<td class="dtabla"><input type="checkbox" name="check4"></td>
	<td class="dtabla"><input type="checkbox" name="check5"></td>
	<td class="dtabla"><input type="checkbox" name="check6">
	</td>
</tr>
</table>
</form>
