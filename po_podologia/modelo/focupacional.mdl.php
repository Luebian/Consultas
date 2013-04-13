<br />
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

<div class="titulo">Monitoreo General</div><br>
<form name="trata" action="focupacional.mdl.php" method="post" enctype="multipart/form-data">

  
  </span>
  <table width="700" align="center" class="tabla">
    <tr>
      <td width="165" class="tdatos">Fecha De Emision:</td>
      <td width="129" class="dtabla"><input type="text" name="dia1" value="<?php echo $_REQUEST["dia1"]; ?>" size="1" />
        /
        <input type="text" name="mes1" value="<?php echo $_REQUEST["mes1"]; ?>" size="1" />
        /
        <input type="text" name="ano1" value="<?php echo $_REQUEST["ano1"]; ?>" size="2" />
        d&iacute;a/mes/a&ntilde;o</td>
    </tr>
    <tr>
      <td class="tdatos">Fecha De Revision:</td>
      <td class="dtabla"><input type="text" name="dia1" value="<?php echo $_REQUEST["dia1"]; ?>" size="1" />
        /
        <input type="text" name="mes1" value="<?php echo $_REQUEST["mes1"]; ?>" size="1" />
        /
        <input type="text" name="ano1" value="<?php echo $_REQUEST["ano1"]; ?>" size="2" />
        d&iacute;a/mes/a&ntilde;o</td>
    </tr>
    <tr>
      <td class="tdatos">Edad:</td>
      <td class="dtabla"><input type="text" name="edad" value="<?php echo $_REQUEST["edad"]; ?>" size="15" /></td>
    </tr>
 
   
 
  </table>
</form>
