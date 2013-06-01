<html>
<head>
    <title>Enfermeria</title>
<link rel="stylesheet" type="text/css" href="../css/estilos.css">
<body>
    <div id="web">
        
        
        <div id="cabecera">
            
        </div>
        
        <div id="barra">
            <ul class="menubarra">
                <li><a href="?pagina=Ctrlmedicamentos">Control de Medicamentos</a></li>
                <li><a href="?pagina=RDiario">Reporte Diario</a></li>
		<li><a href="?pagina=Infincidentes">Informe de Incidentes</a></li>
                <li><a href="?pagina=Busqueda">Busqueda</a></li>
			    
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