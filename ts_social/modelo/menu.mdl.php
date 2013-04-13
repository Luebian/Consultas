<?php

class Tsmenu {
        var $error = 0;
       function registro(){
            
            //echo "beneficiarios/".($_FILES['userfile']['type']);
                      $sql="INSERT INTO ts_agregarfamilia VALUES('{$_POST["num_bene"]}',
                                                    '{$_POST["nomb"]}',
                                                     '{$_POST["ed"]}',
                                                      '{$_POST["ocup"]}')";
                 //echo $sql;
                 
                       $reg=mysql_query($sql);
                
               
               
         return $reg;
         
        }
}
        $tmenu=new Tsmenu();


?>