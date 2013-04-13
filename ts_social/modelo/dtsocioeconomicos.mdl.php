<?php

class deconomicos {
        var $error = 0;
        function registro(){
                      $sql="INSERT INTO ts_infoecono VALUES('{$_POST["conce"]}',
                                                         '{$_POST["mensual"]}',
                                                         '{$_POST["bnosdesp"]}',
                                                         '{$_POST["prima"]}',
                                                         '{$_POST["vacas"]}',
                                                         '{$_POST["conce2"]}',
                                                         '{$_POST["rthipote"]}',
                                                         '{$_POST["crede"]}',
                                                         '{$_POST["servi"]}',
                                                         '{$_POST["mdl"]}',
                                                         '{$_POST["ano"]}',
                                                         '{$_POST["valor"]}',
                                                         '{$_POST["pro"]}',
                                                         '{$_POST["emp"]}',
                                                         '{$_POST["ubi"]}',
                                                         '{$_POST["mconstruc"]}',
                                                         '{$_POST["mterreno"]}',
                                                         '{$_POST["constr"]}',        
                                                        '{$_POST["cost"]}')";
                                                        
                 //echo $sql;
                    //if ($error == 0) {
                        $reg=mysql_query($sql);
                    //}
        }
         
        
    }   
    $decono=new deconomicos();


?>