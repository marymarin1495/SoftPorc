<?php 
require_once "conexion.php";
class IngresoModels{

	public function ingresoModel($datosModel){
   $stmt=Conexion::conectar()->prepare("SELECT codigo,clave,nombre,apellido,IdTipo FROM persona WHERE codigo = :codigo AND clave= :password");
   $stmt->bindParam(":codigo",  $datosModel["codigo"]);
    $stmt->bindParam(":password",  $datosModel["password"]);

   $stmt->execute();
 

   return $stmt ->fetch();
    $stmst->close();
 
	}
}




 ?>