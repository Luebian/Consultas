<?php
class Menu {
	function formatos(){
		$sql= "SELECT id_formato, nom_formato FROM to_formatos";
		$reg= mysql_query($sql);
		return ($reg);
	}
        function modulos($id_formato){
                $sql= "SELECT id_modulo, nom_modulo FROM to_modulos WHERE id_formato=".$id_formato;
		$reg= mysql_query($sql);
                $filas= mysql_num_rows($reg);
                
                if($filas>0)
                    return $this->listarmodulos($reg);
                else
                    return "";
            
        }
        function listarmodulos($reg){
          
            $lista='<ul class="menubarra">';
            while($get_modulos=mysql_fetch_assoc($reg)){
                $lista.='<li><a href="?pagina='.$get_modulos["nom_modulo"].'&id_modulo='.$get_modulos["id_modulo"].'">'.$get_modulos["nom_modulo"].'</a></li>';
            }
            $lista.="</ul>";
            return $lista;
        }
        
}
$menu= new Menu();
?>
