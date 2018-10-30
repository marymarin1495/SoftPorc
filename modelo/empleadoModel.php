<?php 

require_once "conexion.php";
 class empleadoModel{
    
	public function registrarEmpleado($documento,$nombre,$apellido,$email,$telefono,$codigo,$rol,$instalacion){
				 $stmt=Conexion::conectar()->prepare(" INSERT INTO persona (Documento, Nombre, Apellido, Email, Telefono,Codigo,Clave, id_tipo, id_instalacion) 
		 		 VALUES (:documento,:nombre,:apellido,:email,:telefono,:codigo,:clave,:rol,:instalacion)");
		
				 $stmt -> bindParam(":documento", $documento, PDO::PARAM_STR);
			     $stmt -> bindParam(":nombre", $nombre, PDO::PARAM_STR);
				 $stmt -> bindParam(":apellido", $apellido, PDO::PARAM_STR);
				 $stmt -> bindParam(":email", $email, PDO::PARAM_STR);
				 $stmt -> bindParam(":telefono",$telefono, PDO::PARAM_STR);
				 $stmt -> bindParam(":codigo",$codigo, PDO::PARAM_STR);
				 $stmt -> bindParam(":clave",$codigo, PDO::PARAM_STR);
				 $stmt -> bindParam(":rol", $rol, PDO::PARAM_INT);
		  		 $stmt -> bindParam(":instalacion", $instalacion, PDO::PARAM_INT);
		 		


 
				  if($stmt->execute()){

					   return "ok";
						              }

			      else{

					   return "error";
					  };
					   $stmt->close();
	 }
	 public function contarempleado(){
	 	$stms = Conexion::conectar()->prepare("SELECT * from persona where  idtipo = 2 ");
	 	$stms->execute();
	 	 return $stms->rowCount(); 
	 }
     
	 public function listarUltimoEmpleado(){

	 	$stms = Conexion::conectar()->prepare("SELECT codigo from persona order by Codigo desc limit 1");
	 	$stms->execute();
	 	$codigo = $stms->fetch();
	 	return $codigo["codigo"];
	 }
	 
     public function listar()
     { 

     	$stmt=Conexion::conectar()->prepare("SELECT * FROM persona");
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

	public function validarEmail($email){ //Validar email para el cambio de contraseña.

		$stmt = Conexion::conectar()->prepare("SELECT Clave from persona where Email = :email");
		$stmt-> bindParam(":email", $email, PDO::PARAM_STR);
	 	$stmt->execute();
	 	$num = $stmt->rowCount();
		

	 	if($num > 0){
	 		
	 		return $stmt->fetchAll();
	 	}

	 	
	 	return false;	 	
	}
	
	}



 ?>