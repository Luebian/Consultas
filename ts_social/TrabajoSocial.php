<?php
require("herramientas/conexion.php")
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
  <title>Trabajo Social</title>
  <link href="../css/estilos.css" type="text/css" rel="stylesheet"/></head>
  
 <body>
  <div id="web">
     <div id="cabecera">
	 </div> 
	 <div id="barra">
	    <ul class="menubarra">
	  <li><a href="#">Trabajo Social</a>
	    <ul class="menubarra">
	        <li><a href="#">Registrar</a>
		    <ul class="menubarra">
		      <li><a href="?pagina=tsocial">Registrar Beneficiario</a></li>
		      <li><a href="?pagina=dfamilia">Registrar Datos de Familia</a></li>
		      <li><a href="?pagina=dtsocioeconomicos">Registrar Datos Socioeconomicos</a></li>
		      <li><a href="?pagina=fichamed">Registrar Ficha Medica</a></li>
		   </ul></li>
		<li><a href="?pagina=reportes">Reportes</a></li>
		 <li><a href="?pagina=bitacora">Bitacora</a></li>
		<li><a href="?pagina=expedientes">Expedientes</a></li>
		</ul></li>
	   <li><a href="../tf_fisica/index">Terapia Fisica</a></li>
	   <li><a href="../to_ocupacional/index">Terapia Ocupacional</a></li>
	   <li><a href="?pagina=#">Psicologia</a></li>
	   <li><a href="../en_enfermeria/Enfermeria.php">Enfermeria</a></li>
	   <li><a href="../po_podologia/index">Podologia</a></li>
	   </ul>
	    </div>
	   <div id="contenido">
		   <div id="centro">
                 <?php                
                require('herramientas/paginas.php');
		?>
		</div>
      </div>
       </div>
	   
	   <div id="pie">
	   <p>Sistema Integral de Expedientes al Beneficiario. RETOS, A.B.P</p>
       </div>
  </div>
  
  </body>
  </html>
  