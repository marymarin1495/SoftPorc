<?php 

require_once "conexion.php";
 class celoModel{
    
	public function registrarCelo($id,$tipoMonta,$fecha,$sincronia){
				 $stmt=Conexion::conectar()->prepare(" INSERT INTO periodo_celo (IdPeriodo, Id_TipoMonta, Fecha_Inicio, Sincronia) 
		 		 VALUES (:idporcino,:fecha,:hora,:asunto)");
		
				 $stmt -> bindParam(":id", $id, PDO::PARAM_STR);
			     $stmt -> bindParam(":tipoMonta", $tipoMomta, PDO::PARAM_STR);
				 $stmt -> bindParam(":fecha", $fecha, PDO::PARAM_STR);
				 $stmt -> bindParam(":sincronia", $sincronia, PDO::PARAM_STR);

 
				if($stmt->execute()){
					return "ok";

					}else{
						return "error";

}

					   $stmt->close();
	 }
     

     public function listarCelos()
     { 

     	$stmt=Conexion::conectar()->prepare("SELECT * FROM periodo_celo");
        $stmt->execute();
        return $stmt->fetchAll();

     }
     
public function monta($monta){
		if($monta==1){
			return "Natural";
		}else{
			return "Inseminacion";
		}
	}

public function sincronia($sincronia){
		if($sincronia==0){
			return "Si";
		}else{
			return "No";
		}
	}
     
     public function listarUltimo(){
         $stms = Conexion::conectar()->prepare("SELECT * from periodo_celo order by IdPeriodo desc limit 1");
	 	$stms->execute();
	 	$codigo = $stms->fetch();
	 	return $codigo["IdPeriodo"];
     }

     public function obtenerdatos($id){
     		$stmt=Conexion::conectar()->prepare("SELECT IdPorcino,Fecha,Hora,Asunto FROM alarma where idPorcino='".$id."'");
        $stmt->execute();
       $ver= $stmt->fetch();
      
     return $ver;

}


public function getNumeroAlarmas(){
	$stmt = new alarmaModel();
	return count($stmt->listarAlarma());


}
	}


 ?>