<?php
class Trabajo 
{

   private $dbh;
   
   //********************************************************
   //Funcion para crear el arreglo a las variables 
   public function __construct()
   {

   $this->dbh= new PDO ("mysql:host=localhost;dbname=SIEB","root","prograweb");
   }
   
   public function agregar_fucha_medica()
   {
   $domocilio=strip_tags($_POST["domocilio"]);
$sex=strip_tags($_POST["sexo"]);
$edad=strip_tags($_POST["edad"]);
$dia=strip_tags($_POST["dia"]);
$mes=strip_tags($_POST["mes"]);
$ano=strip_tags($_POST["ano"]);
$sangre=strip_tags($_POST["sangre"]);
$diagnostico=strip_tags($_POST["diagnostico"]);
$toma=strip_tags($_POST["toma"]);
$horario=strip_tags($_POST["horario"]);
$dosis=strip_tags($_POST["dosis"]);
$nombre=strip_tags($_POST["nombre"]);
$parentesco=strip_tags($_POST["parentesco"]);
$casa=strip_tags($_POST["casa"]);
$trabajo=strip_tags($_POST["trabajo"]);
$celular=strip_tags($_POST["celular"]);
$traslado=strip_tags($_POST["traslado"]);
   $sql="insert into ficha_medica "
         ." values "
		 ." (null,'$domocilio','$sex','$edad','$dia','$mes','$ano','$sangre','$diagnostico','$toma','$horario','$dosis','$nombre','$parentesco','$casa','$trabajo','$celular','$traslado')";
//echo $sql;
$this->dbh->query($sql);
		 $this->dbh=null;
		 }
   }
   ?>