<?php 

require_once "conexion.php";
 class examenModel{
    
public function registrarExamen($porcino,$nombre,$fecha,$resultado){
				 $stmt=Conexion::conectar()->prepare(" INSERT INTO examen_reproductor (Id_Reproductor, Nombre, Fecha, Resultado) 
		 	VALUES (:porcino,:nombre,:fecha,:resultado)");

				 $stmt -> bindParam(":porcino", $porcino, PDO::PARAM_STR);
				 $stmt -> bindParam(":nombre", $nombre, PDO::PARAM_STR);
			     $stmt -> bindParam(":fecha", $fecha, PDO::PARAM_STR);
			     $stmt -> bindParam(":resultado", $resultado, PDO::PARAM_STR);
				if($stmt->execute()){
					   return "ok";
					
				}else{

					   return "error";
					  }

					   $stmt->close();
	 }

public function registrarExamenes($nombre,$descripcion){
				 $stmt=Conexion::conectar()->prepare(" INSERT INTO examen (Nombre, Descripcion) 
		 	VALUES (:nombre,:descripcion)");

				 $stmt -> bindParam(":nombre", $nombre, PDO::PARAM_STR);
			     $stmt -> bindParam(":descripcion", $descripcion, PDO::PARAM_STR);
				if($stmt->execute()){
					   return "ok";
					
				}else{

					   return "error";
					  }

					   $stmt->close();
	 }
     

     public function listarexamenes(){ 
     	$stmt=Conexion::conectar()->prepare("SELECT * FROM examen");
        $stmt->execute();
        return $stmt->fetchAll();

     }

 public function examenReproductor(){ 
     	$stmt=Conexion::conectar()->prepare("SELECT * FROM examen_reproductor");
        $stmt->execute();
        return $stmt->fetchAll();

     }
public function examenesReproductor($id){ 
     	$stmt=Conexion::conectar()->prepare("SELECT * FROM examen_reproductor where Id_Reproductor='".$id."'");
        $stmt->execute();
        return $stmt->fetchAll();

     }


	}


 ?>