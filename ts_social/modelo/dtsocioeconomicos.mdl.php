<?php

class deconomicos {
        var $error = 0;
        function registro(){
                      $sql="INSERT INTO ts_infoecono VALUES('{mysql_real_escape_string($_POST["conce"])}',
                                                         '{mysql_real_escape_string($_POST["mensual"])}',
                                                         '{mysql_real_escape_string($_POST["bnosdesp"])}',
                                                         '{mysql_real_escape_string($_POST["prima"])}',
                                                         '{mysql_real_escape_string($_POST["vacas"])}',
                                                         '{mysql_real_escape_string($_POST["conce2"])}',
                                                         '{mysql_real_escape_string($_POST["rthipote"])}',
                                                         '{mysql_real_escape_string($_POST["crede"])}',
                                                         '{mysql_real_escape_string($_POST["servi"])}',
                                                         '{mysql_real_escape_string($_POST["mdl"])}',
                                                         '{mysql_real_escape_string($_POST["ano"])}',
                                                         '{mysql_real_escape_string($_POST["valor"])}',
                                                         '{mysql_real_escape_string($_POST["pro"])}',
                                                         '{mysql_real_escape_string($_POST["emp"])}',
                                                         '{mysql_real_escape_string($_POST["ubi"])}',
                                                         '{mysql_real_escape_string($_POST["mconstruc"])}',
                                                         '{mysql_real_escape_string($_POST["mterreno"])}',
                                                         '{mysql_real_escape_string($_POST["constr"])}',        
                                                        '{mysql_real_escape_string($_POST["cost"])}')";
                                                        
                 //echo $sql;
                    //if ($error == 0) {
                        $reg=mysql_query($sql);
                    //}
        }
         
        
    }   
    $decono=new deconomicos();


?>
