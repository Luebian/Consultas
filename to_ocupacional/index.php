 <?php                
                require('herramientas/conexion.php');?>
<html>
<head>
    <title>Terapia Ocupacional</title>
<link rel="stylesheet" type="text/css" href="../css/estilos.css">
<body>
    <div id="web">
        
        
        <div id="cabecera">
            
        </div>
        
        <div id="barra">
           <?php
            require("controlador/menu.ctrl.php");
           ?>
        </div>
        
        <div id="contenido">
            <div id="centro">
                <?php                
                require('herramientas/paginas.php');?>
            </div>
            

        </div>
        
        <div id="pie">
            RETOS A.B.P<br>
            SIEB
            Instituto Tecnologico de Nuevo León
        </div>
             
    </div>

</body>
</html>