<?php

class Tsficha {
        var $error = 0;
        function registro(){
            
            //echo "beneficiarios/".($_FILES['userfile']['type']);
                      $sql="INSERT INTO ts_fichamedica VALUES('{$_POST["diag_medi"]}',
                                                         '{$_POST["dca"]}',
                                                         '{$_POST["motin"]}',
                                                         '{$_POST["descespecifica"]}',
                                                         '{$_POST["in"]}',
                                                         '{$_POST["medicatoma"]}',
                                                         '{$_POST["dosis"]}',
                                                         '{$_POST["hmedica"]}',
                                                         '{$_POST["es"]}',
                                                         '{$_POST["cmedica"]}',
                                                         '{$_POST["alergias"]}',
                                                         '{$_POST["ti_sangre"]}',
                                                         '{$_POST["numafilia"]}',
                                                         '{$_POST["nom_medico"]}',
                                                         '{$_POST["hatiende"]}',        
                                                        '{$_POST["casotraslado"]}')";
                                                        
                 //echo $sql;
                    //if ($error == 0) {
                        $reg=mysql_query($sql);
                    //}
        }
         
        
    }   
    $ficha=new Tsficha();


?>