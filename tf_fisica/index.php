 <?php                
                require('herramientas/conexion.php');?>
<html>
<head>
    <title>Terapia Fisica</title>
<link rel="stylesheet" type="text/css" href="../css/estilos.css">
<body>
    <div id="web">
        
        
        <div id="cabecera">
            
        </div>
        
        <div id="barra">
            <ul class="menubarra">
               <li><a href="?pagina=informegnrl">Informe General</a></li>
                <li><a href="?pagina=bitacora">Bitacora</a></li>
                <li><a href="?pagina=reportes">Reportes</a>
                <ul class="menubarra">
                        <li><a href="?pagina=tterapiaf">Tipo de Terapia Fisica</a></li>
                    </ul>
                </li>
                <li><a href="?pagina=busqueda">Busqueda</a></li>
                <li><a href="#">Salir</a></li>
            </ul>
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