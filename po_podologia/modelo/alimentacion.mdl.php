<?php
session_start();
mysql_connect("localhost","root","moon");
mysql_select_db("retos");
print_r($_POST);
$sql = "SELECT * FROM alimentacion";
$rec = mysql_query($sql);
echo $sql;
?>
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
<table width="500" align="center" class="tabla">
    <tr>
        <th class="tdatos"><font size="4">ALIMENTACION</font></th>
	<th class="tdatos">0</th>
	<td class="tdatos">1</td>
	<td class="tdatos">2</td>
	<td class="tdatos">3</td>
	<td class="tdatos">Si</td>
	<td class="tdatos">No</td>
    </tr>
    <tr>
<?php
if(mysql_num_rows($rec)==0){
	//echo "<tr> <td colspan	
}
else {
	while($datos = mysql_fetch_assoc($rec)){
		echo "<tr>
		<td>".$datos["caracteristica"]."</td>
		<tr>"
		;
		
	}
}

?>
    </tr>
<tr>
	<td colspan="2" align="left"><input type="submit" name="mas" value="Agregar">
	</td>
</tr>
</table>
</form>