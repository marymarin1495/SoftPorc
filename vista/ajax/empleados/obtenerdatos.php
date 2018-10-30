<?php 
class Ajax2{

public function obtenerdatos(){
  $a= new empleadoController();
  var_dump($a->obtenerDatos($_POST["idpersona"]));
 
}

}
 ?>
