<?php

class Tsocial {
        var $error = 0;
    
        function getID(){
                //Bloque de código, obtiene el último registro
            //YY48######
            //12480000001
            $year=date("y");

            $num_bene =$year."48";
            $sql = "select count(*) from ts_dpersonales where id_beneficiario like '".$num_bene."%';";
            $total = mysql_query($sql);
            $total = mysql_fetch_array($total);
           
            if ($total[0] == 0)
                $max=1;
            
            $sql="select max(id_beneficiario) from ts_dpersonales where id_beneficiario like '".$num_bene."%'";
            $max=mysql_query($sql);
            $max=mysql_fetch_array($max);
            $max=substr($max[0], -6);
            $max=intval($max)+1;
            $max=str_pad("0",6-strlen($max),STR_PAD_LEFT).$max;
            
            $num_bene=$num_bene.$max;
            $sql = "select count(*) from ts_dpersonales where id_beneficiario=".$max.";";
            $total = mysql_query($sql);
            $total = mysql_fetch_array($total);
            
            /* validaciones
               if (($_POST["ano"] > date("Y")) || ($_POST['ano']<1900))
                $error = 1;
                
            // if ($_POST["mes"] =>0 || $_POST['mes']<=12)
                //$error = 1;

            if ($_POST["dia"] >31 || $_POST['dia']<1)
                $error = 1;
            */    
                return $num_bene;
        }
        function registro(){
                $noerror = true;
            $Destino = "fotopaciente/";
            if ($_FILES['userfile']['name'] != "") {
                $filename = $_FILES['userfile']['name'];
                //echo $filename;
            } else { $noerror = false;}
                    
            $total=$this->getID();
            if ($noerror){
            //echo "beneficiarios/".($_FILES['userfile']['type']);
                      $sql="INSERT INTO ts_dpersonales 
                      (`id_beneficiario`, `filename`, `nombre`, `nombre2`, `apellido_p`, `apellido_m`, `fecha_nacimiento`, `lugar_nacimiento`, `sexo`, `direccion`, `telefono_casa`, `gusta_queledigan`, `nombre_persona_dirigirse`, `telefono2`, `miedos_fobias`, `gustos_preferencias`, `lo_hace_enojar`, `habilidades`, `aspectos_mejorar`)
                      VALUES('{$_POST["num_bene"]}',
                                                            '{$filename}',
                                                         '{$_POST["nomb"]}',
                                                         '{$_POST["nomb2"]}',
                                                         '{$_POST["ape_p"]}',
                                                         '{$_POST["ape_m"]}',
                                                         '{$_POST["ano"]}-{$_POST["mes"]}-{$_POST["dia"]}',
                                                         '{$_POST["lu_nac"]}',
                                                         '{$_POST["sex"]}',
                                                         '{$_POST["dire"]}',
                                                         '{$_POST["tel_cas"]}',
                                                         '{$_POST["comgusdig"]}',
                                                         '{$_POST["nomperso"]}',
                                                         '{$_POST["tel2"]}',
                                                         '{$_POST["miedos"]}',
                                                         '{$_POST["gus_pref"]}',
                                                         '{$_POST["enojar"]}',
                                                         '{$_POST["habili"]}',
                                                         '{$_POST["aspec"]}')";
                 echo $sql;
                 if ($this->error == 0) {
                    if(!is_writable($Destino))
                       die('No se puede escribir en el directorio.');
                    if(!move_uploaded_file($_FILES['userfile']['tmp_name'],$Destino.$filename))
                       $this->error=1;
                    if ($this->error == 0) {
                        $this->error=mysql_query($sql);
                    }
               
                 }
               }  
        }
         
        }
        
        $tsocial=new Tsocial();


?>