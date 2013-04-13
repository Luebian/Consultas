<?php

class Tsocial {
        var $error = 0;
        function registro(){
            $Destino = "fotopaciente/";
            if ($_FILES['userfile']['name'] != "") {
                $filename = $_FILES['userfile']['name'];
                //echo $filename;
            } else { $error = 1;}
                    
            //Bloque de código, obtiene el último registro
            //YY48######
            //12480000001
            $year=date("y");

            $num_bene =$year."48";
            $sql = "select count(*) from ts_dpersonales where id_beneficiario like '".$num_bene."%';";
            $total = mysql_query($sql);
            $total = mysql_fetch_array($total);
            echo $sql;
            if ($total[0] == 0)
                $max=1;
            
            $sql="select max(id_beneficiario) from ts_dpersonales where id_beneficiario like '".$num_bene."%'";
            $max=mysql_query($sql);
            $max=mysql_fetch_array($max);
            $max=substr($max[0], -6);
            $max=intval($max)+1;
            $max=str_pad("0",6-strlen($max),STR_PAD_LEFT).$max;
            echo $sql;
            $num_bene=$num_bene.$max;
            $sql = "select count(*) from ts_dpersonales where id_beneficiario=".$max.";";
            $total = mysql_query($sql);
            $total = mysql_fetch_array($total);
            
               if (($_POST["ano"] > date("Y")) || ($_POST['ano']<1900))
                $error = 1;
                
            // if ($_POST["mes"] =>0 || $_POST['mes']<=12)
                //$error = 1;

            if ($_POST["dia"] >31 || $_POST['dia']<1)
                $error = 1;
                
            if ($total[0] == 0){
            
            //echo "beneficiarios/".($_FILES['userfile']['type']);
                      $sql="INSERT INTO ts_dpersonales VALUES('{$_POST["num_bene"]}',
                                                            '{$filename}',
                                                         '{$_POST["nomb"]}',
                                                         '{$_POST["nomb2"]}',
                                                         '{$_POST["ape_p"]}',
                                                         '{$_POST["ape_m"]}',
                                                         '{$_POST["dia"]}/{$_POST["mes"]}/{$_POST["ano"]}',
                                                         '{$_POST["lu_naci"]}',
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
                 //echo $sql;
                 echo $sql;
                 if ($error == 0) {
                    if(!is_writable($Destino))
                       die('No se puede escribir en el directorio.');
                    if(!move_uploaded_file($_FILES['userfile']['tmp_name'],$Destino.$filename))
                       $error=1;
                    //if ($error == 0) {
                        $reg=mysql_query($sql);
                    //}
               
                 }
               }  
        }
         
        }
        
        $tsocial=new Tsocial();


?>