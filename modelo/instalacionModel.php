<?php 

require_once "conexion.php";
 class instalacionModel{
    
	public function registrarInstalacion($nombre,$capacidad,$tipo){
             
				 $stmt=Conexion::conectar()->prepare("INSERT INTO instalacion (Nombre, Capacidad, Id_Tipo) 
		 		 VALUES (:nombre,:capacidad,:tipo)");
		         
			     $stmt -> bindParam(":nombre", $nombre, PDO::PARAM_STR);
				 $stmt -> bindParam(":capacidad", $capacidad, PDO::PARAM_INT);
				 $stmt -> bindParam(":tipo", $tipo, PDO::PARAM_INT);
				  if($stmt->execute()){

					   return "ok";
						              }

			      else{

					   return "error";
					  }

					   $stmt->close();
	 }

    public function contarinstalaciones(){
	 	$stms = Conexion::conectar()->prepare("SELECT * from instalacion");
	 	$stms->execute();
	 	 return $stms->rowCount(); 
	 }
     
	public function listarTipos(){
		$stmt=Conexion::conectar()->prepare("SELECT Id_Tipo,Tipo from tipo_instalacion");
		$stmt->execute();
		return $stmt->fetchAll();
		 
	}

	public function listarTipo($id){
	$resultado = Conexion::conectar()->prepare("SELECT Tipo FROM tipo_instalacion WHERE Id_Tipo = '".$id."'");
	$resultado->execute();
	$fila = $resultado->fetch();
	return $fila["Tipo"];
	}
	
   public function buscarInstalacion($tipo){
   	$stmt=Conexion::conectar()->prepare("SELECT id_tipo from tipo_instalacion where  tipo=:tipo");
   	$stmt -> bindParam(":nombre", $tipo, PDO::PARAM_STR);
   	 $stmt->execute();
        return $stmt->fetchAll();

   }

    public function listarInstalacion(){ 
     	$stmt=Conexion::conectar()->prepare("SELECT Id_Instalacion,Nombre,Capacidad,Id_Tipo FROM instalacion");
        $stmt->execute();
        return $stmt->fetchAll();
     }



     public function obtenerdatos($id){

     		$stmt=Conexion::conectar()->prepare("SELECT Id_Instalacion,Nombre,Capacidad,Id_Tipo FROM instalacion where Id_Instalacion='".$id["id"]."'");
            $stmt->execute();
   
      
     return $stmt->fetch();

	}

	public function actualizardatos($datos){
	$stmt = Conexion::conectar()->prepare("UPDATE instalacion SET nombre = :nombre, Capacidad=:capacidad,
                                        Id_Tipo=:id_tipo WHERE  Id_Instalacion=:id_instalacion");	
		$stmt -> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt -> bindParam(":capacidad", $datos["capacidad"], PDO::PARAM_STR);
		$stmt -> bindParam(":id_tipo", $datos["tipo"], PDO::PARAM_STR);
		$stmt -> bindParam(":id_instalacion", $datos["idinstalacion"], PDO::PARAM_STR);
		if($stmt->execute()){

			return true;
		}

		else{

			return false;
		}

		$stmt->close();
	}

	public function eliminarinsta($datos){
       $stmt = Conexion::conectar()->prepare("DELETE FROM instalacion WHERE Id_Instalacion = :idinstalacion");
		$stmt -> bindParam(":idinstalacion", $datos["id"], PDO::PARAM_INT);
		
		if($stmt->execute()){

			return true;
		}

		else{

			return false;
		}

		$stmt->close();
	}

	}


 ?>