<?php
class Menu {
	function formatos(){
		$sql= "SELECT id_formato, nom_formato FROM to_formatos";
		$reg= mysql_query($sql);
		return ($reg);
	}
        function modulos($formato,$id_formato){
                $sql= "SELECT id_modulo, nom_modulo FROM to_modulos WHERE id_formato=".$id_formato;
		$reg= mysql_query($sql);
                $filas= mysql_num_rows($reg);
                
                if($filas>0)
                    return $this->listarmodulos($formato,$reg);
                else
                    return "";
            
        }
        function listarmodulos($formato,$reg){
          
            $lista='<ul><li class="arrow"></li>';
            while($get_modulos=mysql_fetch_assoc($reg)){
                $lista.='<li><a href="?pagina='.$formato.'&id_modulo='.$get_modulos["id_modulo"].'">'.$get_modulos["nom_modulo"].'</a></li>';
            }
            $lista.="</ul>";
            return $lista;
        }
        
}
$menu= new Menu();
?>
