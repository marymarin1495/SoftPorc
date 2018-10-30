<?php 

require_once "conexion.php";
class medicamentoModel{
    
public function registrarMedicamento($tipo,$nombre,$dosis){
             
				 $stmt=Conexion::conectar()->prepare("INSERT INTO medicamento (Codigo, Codigo_Tipo, Nombre,Dosis) 
		 		 VALUES (null,:tipo,:nombre,:dosis)");
		         
			     $stmt -> bindParam(":tipo", $tipo, PDO::PARAM_STR);
				 $stmt -> bindParam(":nombre", $nombre, PDO::PARAM_INT);
				 $stmt -> bindParam(":dosis", $dosis, PDO::PARAM_INT);
				  if($stmt->execute()){

					   return "ok";
						              }

			      else{

					   return "error";
					  }

					   $stmt->close();
	 }

public function registrarMedicamentoPorcino($idporcino,$tipo,$fecha,$estado){
				 $stmt=Conexion::conectar()->prepare(" INSERT INTO medicamento_porcino (CodigoMedicamento, IdPorcino, Fecha, Aplicada) 
		 		 VALUES (:idporcino,:tipo,:fecha,:estado)");
		
				 $stmt -> bindParam(":idporcino", $idporcino, PDO::PARAM_STR);
			     $stmt -> bindParam(":tipo", $tipo, PDO::PARAM_STR);
				 $stmt -> bindParam(":fecha", $fecha, PDO::PARAM_STR);
				 $stmt -> bindParam(":estado", $estado, PDO::PARAM_STR);

 
				if($stmt->execute()){
					return "ok";

					}else{
						return "error";

}

					   $stmt->close();
	 }

public function listarTipos(){
		$stmt=Conexion::conectar()->prepare("SELECT * from tipo_medicamento");
		$stmt->execute();
		return $stmt->fetchAll();
		 
	}

public function listarTiposMedicamentos(){ 
     	$stmt=Conexion::conectar()->prepare("SELECT * FROM medicamento");
        $stmt->execute();
        return $stmt->fetchAll();
     }

public function medicamentoPorcino(){ 
     	$stmt=Conexion::conectar()->prepare("SELECT * FROM medicamento_porcino");
        $stmt->execute();
        return $stmt->fetchAll();
     }

public function listarTipo($id){
	$resultado = Conexion::conectar()->prepare("SELECT Tipo FROM tipo_medicamento WHERE Codigo_Tipo = '".$id."'");
	$resultado->execute();
	$fila = $resultado->fetch();
	return $fila["Tipo"];
	}

public function medicamentoNombre($id){
	$resultado = Conexion::conectar()->prepare("SELECT Nombre FROM medicamento WHERE Codigo = '".$id."'");
	$resultado->execute();
	$fila = $resultado->fetch();
	return $fila["Nombre"];
	}

public function estado($estado){
		if($estado==0){
			return "Aplicada";
		}else{
			return "No aplicada";
		}
	}


	}


 ?>