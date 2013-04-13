<?php

class Tsfamilia {
        var $error = 0;
        function registro(){
            
                    $sql="INSERT INTO ts_dfamilia VALUES('{$_POST[""]}',
                                                         '{$_POST[""]}',
                                                         '{$_POST[""]}',
                                                         '{$_POST[""]}',
                                                         '{$_POST[""]}',
                                                         '{$_POST[""]}',
                                                         '{$_POST[""]}',
                                                         '{$_POST[""]}',
                                                         '{$_POST[""]}',
                                                         '{$_POST[""]}',
                                                         '{$_POST[""]}',
                                                         '{$_POST[""]}',
                                                         '{$_POST[""]}',
                                                         '{$_POST[""]}',
                                                         '{$_POST[""]}',        
                                                        '{$_POST[""]}')";
                                                        
                 //echo $sql;
                    //if ($error == 0) {
                        $reg=mysql_query($sql);
                    //}
                           
         return $reg;
        }
         
        
    }   
    $familia=new Tsfamilia();


?>