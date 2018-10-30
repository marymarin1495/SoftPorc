<?php 

require_once "conexion.php";
 class partoModel{
    
	public function registrarParto($porcina,$fecha,$momias,$muertos,$hijos){
	$stmt=Conexion::conectar()->prepare(" INSERT INTO  parto (IdReproductora, Fecha, Numero_Momias,Numero_Muertos,Numero_Hijos) 
		 		 VALUES (:porcina,:fecha,:momias,:muertos,:hijos)");
		
				 $stmt -> bindParam(":porcina", $porcina, PDO::PARAM_STR);
			     $stmt -> bindParam(":fecha", $fecha, PDO::PARAM_STR);
				 $stmt -> bindParam(":momias", $momias, PDO::PARAM_INT);
				 $stmt -> bindParam(":muertos", $muertos, PDO::PARAM_STR);
				 $stmt -> bindParam(":hijos", $hijos, PDO::PARAM_STR);
 
				  if($stmt->execute()){

					   return "ok";
						              }

			      else{

					   return "error";
					  }
					   $stmt->close();
	 }
	 
public function listarParto(){ 
     	$stmt=Conexion::conectar()->prepare("SELECT * FROM parto WHERE IdReproductora= ''");
        $stmt->execute();
        return $stmt->fetchAll();


     }

public function nulipara($id){
	$resultado = Conexion::conectar()->prepare("SELECT Nulipara FROM reproductora WHERE Nulipara = '".$id."'");
	$resultado->execute();
	$fila = $resultado->fetch();
	if($fila["Nulipara"]==0){
		return 'Si';
	}else {
		return 'No';
	}
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
	}


 ?>