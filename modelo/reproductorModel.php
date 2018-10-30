<?php 

require_once "conexion.php";

 class reproductorModel{
    
	public function registrarReproductor($idporcino,$conformacion,$reproductoras){
				 $stmt=Conexion::conectar()->prepare(" INSERT INTO `reproductor` (`Id_Reproductor`, `Confomacion_Fisica`, `Reproductoras_Montadas`) VALUES ('".$idporcino."', '". $conformacion."', '".$reproductoras."');");
		
				  if($stmt->execute()){

					   return "ok";
						              }

			      else{

					   return "error";
					  }
					   $stmt->close();
	 }
	 
     public function listarreproductores(){ 
     	$stmt=Conexion::conectar()->prepare("SELECT * FROM reproductor");
        $stmt->execute();
        return $stmt->fetchAll();

     }

     public function obtenerdatos($id){
     		$stmt=Conexion::conectar()->prepare("SELECT documento,nombre,apellido,email,telefono,codigo FROM persona where documento='".$id["id"]."'");
        $stmt->execute();
        return $stmt->fetch();
 


}          
public function actualizardatos($datos){
$stmt = Conexion::conectar()->prepare("UPDATE persona SET documento = :documento, nombre = :nombre, apellido=:apellido,
                                        email=:email,telefono=:telefono,codigo=:codigo WHERE documento = :documento");	

		$stmt -> bindParam(":documento", $datos["documento"], PDO::PARAM_STR);
		$stmt -> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt -> bindParam(":apellido", $datos["apellido"], PDO::PARAM_STR);
		$stmt -> bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt -> bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
		$stmt -> bindParam(":codigo", $datos["codigo"], PDO::PARAM_STR);
		if($stmt->execute()){

			return "ok";
		}

		else{

			return "error";
		}

		$stmt->close();
	}
	public function eliminarM($datos){
       $stmt = Conexion::conectar()->prepare("DELETE FROM persona WHERE documento = :documento");
		$stmt -> bindParam(":documento", $datos["id"], PDO::PARAM_STR);
		
		if($stmt->execute()){

			return "ok";
		}

		else{

			return "error";
		}

		$stmt->close();
	}

	public function  listarexamenes($id){
		 $stmt=Conexion::conectar()->prepare("SELECT * FROM examen_reproductor where Id_Reproductor='".$id."'");   
		       $stmt->execute();
		
		return $stmt->fetchAll();

		
	}
                public function mostrar($id){
                	 $stmt=Conexion::conectar()->prepare("SELECT Confomacion_Fisica, Reproductoras_Montadas FROM reproductor where Id_Reproductor='".$id."'");   
		       $stmt->execute();
		
		return $stmt->fetch();
                }
                  public function eliminar($id){
                  	 $stmt=Conexion::conectar()->prepare("DELETE FROM reproductor where  Id_Reproductor='".$id."'");   
		      
		if($stmt->execute()){

			return "ok";
		}

		else{

			return "error";
		}
                  }
}


 ?>