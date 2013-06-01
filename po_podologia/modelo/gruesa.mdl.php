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
<table width="700" align="center" class="tabla">
    <tr>
        <td class="tdatos">&nbsp;</td>
        <td class="tdatos">&nbsp;</td>
        <td class="tdatos">&nbsp;</td>
        <td class="tdatos">&nbsp;</td>
    </tr>
</table>

<div class="titulo">
  <div align="center"><strong>TERAPIA</strong></div>
</div>
<br>
<form name="advh" action="advh.mdl.php" method="post" enctype="multipart/form-data">
<table width="700" align="center" class="tabla">
    <tr>
        <td class="tdatos"><strong><font size="4">Descripcion</font></strong></td>
        <td class="tdatos">1</td>
        <td class="tdatos">2</td>
        <td class="tdatos">3</td>
    <tr>
	<td class="tdatos">PIE</td>
	<td class="dtabla"><p>
	  <input type="checkbox" name="check1">
	</p>
	  <p>Plano </p></td>
        <td class="dtabla"><p>
          <input type="checkbox" name="check2">
        </p>
        <p>Normal</p></td>
	<td class="dtabla"><p>
	  <input type="checkbox" name="check3">
	</p>
	  <p>Cavo </p></td>
	</tr>
    </tr>
    <tr>
	<td class="tdatos">PIEL</td>
	<td class="dtabla"><p>
	  <input type="checkbox" name="check1">
	</p>
	  <p>Aspera</p></td>
        <td class="dtabla"><p>
          <input type="checkbox" name="check2">
        </p>
        <p>Normal </p></td>
	<td class="dtabla"><p>
	  <input type="checkbox" name="check3">
	</p>
	  <p>Suave </p></td>
	</tr>
    
    <tr>
	<td class="tdatos">FORMA U&Ntilde;AS </td>
	<td class="dtabla"><p>
	  <input type="checkbox" name="check1">
	</p>
	  <p>Normal</p></td>
        <td class="dtabla"><p>
          <input type="checkbox" name="check2">
        </p>
        <p>Curvas </p></td>
	<td class="dtabla"><p>
	  <input type="checkbox" name="check3">
	</p>
	  <p>En grapa  </p></td>
	</tr>
    
    <tr>
	<td class="tdatos">LLENADO CAPILAR </td>
	<td class="dtabla"><p>
	  <input type="checkbox" name="check1">
	</p>
	  <p>Lento </p></td>
        <td class="dtabla"><p>
          <input type="checkbox" name="check2">
        </p>
        <p>Regular </p></td>
	<td class="dtabla"><p>
	  <input type="checkbox" name="check3">
	</p>
	  <p>Normal </p></td>
	</tr>
    
    <tr>
	<td class="tdatos">PULSO PEDIDO </td>
	<td class="dtabla"><p>
	  <input type="checkbox" name="check1">
	</p>
	  <p>40/60 </p></td>
        <td class="dtabla"><p>
          <input type="checkbox" name="check2">
        </p>
        <p>60/80 Normal  </p></td>
	<td class="dtabla"><p>
	  <input type="checkbox" name="check3">
	</p>
	  <p>&lt; 80 x min  </p></td>
	</tr>
    
    <tr>
	<td class="tdatos">PULSO TIBIAL </td>
	<td class="dtabla"><p>
	  <input type="checkbox" name="check1">
	</p>
	  <p>40/60 </p></td>
        <td class="dtabla"><p>
          <input type="checkbox" name="check2">
        </p>
        <p>60/80 Normal </p></td>
	<td class="dtabla"><p>
	  <input type="checkbox" name="check3">
	</p>
	  <p>&lt; 80 x min </p></td>
	</tr>
    
    <tr>
	<td class="tdatos">SENSIBILIDAD</td>
	<td class="dtabla"><p>
	  <input type="checkbox" name="check1">
	</p>
	  <p>SI </p></td>
        <td class="dtabla">&nbsp;</td>
	<td class="dtabla"><p>
	  <input type="checkbox" name="check3">
	</p>
	  <p>NO </p></td>
	</tr>
    
    <tr>
	<td class="tdatos">HIDRATACION </td>
	<td class="dtabla"><p>
	  <input type="checkbox" name="check1">
	</p>
	  <p>Seco </p></td>
        <td class="dtabla"><p>
          <input type="checkbox" name="check2">
        </p>
        <p>Normal </p></td>
	<td class="dtabla"><p>
	  <input type="checkbox" name="check3">
	</p>
	  <p>Hiperhidrosis </p></td>
	</tr>
    
    <tr>
	<td class="tdatos">TEMPERATURA</td>
	<td class="dtabla"><p>
	  <input type="checkbox" name="check1">
	</p>
	  <p>Frio </p></td>
        <td class="dtabla"><p>
          <input type="checkbox" name="check2">
        </p>
        <p>Temp. Ambiente  </p></td>
	<td class="dtabla"><p>
	  <input type="checkbox" name="check3">
	</p>
	  <p>Caliente </p></td>
	</tr>
    <tr>
	<td class="tdatos">OLOR</td>
	<td class="dtabla"><p>
	  <input type="checkbox" name="check1">
	</p>
	  <p>No presenta  </p></td>
        <td class="dtabla"><p>
          <input type="checkbox" name="check2">
        </p>
        <p>Moderado </p></td>
	<td class="dtabla"><p>
	  <input type="checkbox" name="check3">
	</p>
	  <p>Fuerte </p></td>
	</tr>
    
    <tr>
	<td class="tdatos">LESIONES</td>
	<td colspan="3" class="dtabla"><p>&nbsp;</p>
	  <p>&nbsp; </p></td>
    </tr>
    
    <tr>
	<td class="tdatos"><strong>AREA CLINICA </strong></td>
	<td colspan="3" class="dtabla">&nbsp;</td>
    </tr>
    
    <tr>
	<td class="tdatos">Onicomicosis(hongo en u&ntilde;a) </td>
	<td class="dtabla"><p>
	  <input type="checkbox" name="check1">
	</p>
	  <p>Distal </p></td>
        <td class="dtabla"><p>
          <input type="checkbox" name="check2">
        </p>
        <p>Media/Distal </p></td>
	<td class="dtabla"><p>
	  <input type="checkbox" name="check3">
	</p>
	  <p>Distrofia Total  </p></td>
	</tr>
    
    <tr>
	<td class="tdatos">Onicocriptosis(u&ntilde;a encarnada) </td>
	<td class="dtabla"><p>
	  <input type="checkbox" name="check1">
	</p>
	  <p>Leve </p></td>
        <td class="dtabla"><p>
          <input type="checkbox" name="check2">
        </p>
        <p>Moderada </p></td>
	<td class="dtabla"><p>
	  <input type="checkbox" name="check3">
	</p>
	  <p>Severa </p></td>
	</tr>
    <tr>
	<td class="tdatos">Mueve objetos grandes</td>
	<td class="dtabla"><p>
	  <input type="checkbox" name="check1">
	</p>
	  <p>&nbsp; </p></td>
        <td class="dtabla"><input type="checkbox" name="check2"></td>
	<td class="dtabla"><input type="checkbox" name="check3"></td>
	</tr>
    <tr>
	<td class="tdatos">Dermatomicosis(hongo region plantar o interdigital) </td>
	<td class="dtabla"><p>
	  <input type="checkbox" name="check1">
	</p>
	  <p>Dorso </p></td>
        <td class="dtabla"><p>
          <input type="checkbox" name="check2">
        </p>
        <p>Interdigital </p></td>
	<td class="dtabla"><p>
	  <input type="checkbox" name="check3">
	</p>
	  <p>Plantar </p></td>
	</tr>
    <tr>
	<td class="tdatos">Ulceras</td>
	<td class="dtabla"><p>
	  <input type="checkbox" name="check1">
	</p>
	  <p>No tiene  </p></td>
        <td class="dtabla"><p>
          <input type="checkbox" name="check2">
        </p>
        <p>Superficial </p></td>
	<td class="dtabla"><p>
	  <input type="checkbox" name="check3">
	</p>
	  <p>Profunda </p></td>
	</tr>
    <tr>
	<td class="tdatos">Isquemia</td>
	<td class="dtabla"><p>
	  <input type="checkbox" name="check1">
	</p>
	  <p>Si</p></td>
        <td class="dtabla">&nbsp;</td>
	<td class="dtabla"><p>
	  <input type="checkbox" name="check3">
	</p>
	  <p>No </p></td>
	</tr>
</table>
</form>
