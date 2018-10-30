<?php 

require_once "conexion.php";
 class razaModel{
    
	public function registrarRaza($nombre,$descripcion){
				 $stmt=Conexion::conectar()->prepare(" INSERT INTO raza (Nombre, Descripcion) 
		 		 VALUES (:nombre,:descripcion)");
		
			     $stmt -> bindParam(":nombre", $nombre, PDO::PARAM_STR);
				 $stmt -> bindParam(":descripcion", $descripcion, PDO::PARAM_STR);
				  if($stmt->execute()){

					   return "ok";
						              }

			      else{

					   return "error";
					  }

					   $stmt->close();
	 }
     

     public function listarRaza(){ 
     	$stmt=Conexion::conectar()->prepare("SELECT Nombre,Descripcion FROM raza");
        $stmt->execute();
        return $stmt->fetchAll();

     }


     public function obtenerdatos($id){
     		$stmt=Conexion::conectar()->prepare("SELECT Nombre,Descripcion FROM raza where Nombre='".$id."'");
        $stmt->execute();
       $ver= $stmt->fetch();
      
     return $ver;

}
	}


 ?>