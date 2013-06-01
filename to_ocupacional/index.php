 <?php                
                require('../conexion.php');?>
<html>
<head>
    <title>Terapia Ocupacional</title>
<link rel="stylesheet" type="text/css" href="../css/estilos.css">
<link href="../css/estilos.css" type="text/css" rel="stylesheet"/>
  <link href="../css/jMenu.jquery.css" type="text/css" rel="stylesheet"/>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript" src="../js/jMenu.jquery.js"></script>
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