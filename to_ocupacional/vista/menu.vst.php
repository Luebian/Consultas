
 <ul class="jMenu">
<?php
$formatos=$menu->formatos();

while($registros=mysql_fetch_assoc($formatos)){
?>
<li><a href="?pagina=<?php echo $registros["nom_formato"]."&id_formato=".$registros["id_formato"]; ?>">
<?php echo $registros["nom_formato"]; ?>
</a>
<?php echo $menu->modulos($registros["nom_formato"],$registros["id_formato"]);  ?>
</li>
<?php } ?>                      
     <li><a href="?pagina=bitacora">Bitacora</a></li>
    <li><a href="?pagina=busqueda">Busqueda</a></li>
    <li><a href="#">Salir</a></li>
</ul>
<script type="text/javascript">
            $(document).ready(function() {
                $(".jMenu").jMenu();
            });
        </script>
