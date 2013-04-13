<html>
<head>
    
	<script language="javascript" type="text/javascript" src="../js/funciones.js"></script>
<link rel="stylesheet" type="text/css" href="../css/estilos.css">
<title>Enfermeria</title>
</head>
<body>
    <div id="web">
        
        
        <div id="cabecera">
            
        </div>
        
        <div id="barra">
            <ul class="menubarra">
                <li><a href="?pagina=fichamedica">Ficha Medica</a></li>
                <li><a href="?pagina=Expedientes">Expedientes</a>
                <li><a href="?pagina=RIncidentes">Informe de Incidentes</a>
                <li><a href="?pagina=CaractIncidentes">Caracteristicas de incidencias</a></li>
			     <li><a href="?pagina=Reportes">Reportes</a>
                    <ul class="menubarra">
                        <li><a href="#">formato1</a></li>
                        <li><a href="#">formato2</a></li>
                        <li><a href="#">formato3</a></li>
                        <li><a href="#">formato4</a></li>
                    </ul>
                </li>
                <li><a href="?pagina=Busqueda">Busqueda</a></li>
				
				
                
                </li>
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
        </div>
             
    </div>

</body>
</html>