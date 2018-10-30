<?php 

require_once "conexion.php";
 class alarmaModel{
    
	public function registraralarma($idporcino,$fecha,$hora,$asunto){
				 $stmt=Conexion::conectar()->prepare(" INSERT INTO alarma (DocumentoEmpleado, Fecha, Hora, Asunto) 
		 		 VALUES (:idporcino,:fecha,:hora,:asunto)");
		
				 $stmt -> bindParam(":idporcino", $idporcino, PDO::PARAM_STR);
			     $stmt -> bindParam(":fecha", $fecha, PDO::PARAM_STR);
				 $stmt -> bindParam(":hora", $hora, PDO::PARAM_STR);
				 $stmt -> bindParam(":asunto", $asunto, PDO::PARAM_STR);

 
				if($stmt->execute()){
					return "ok";

					}else{
						return "error";

}

					   $stmt->close();
	 }
     

     public function listarAlarma()
     { 

     	$stmt=Conexion::conectar()->prepare("SELECT * FROM alarma");
        $stmt->execute();
        return $stmt->fetchAll();

     }

     public function obtenerdatos($id){
     		$stmt=Conexion::conectar()->prepare("SELECT * FROM alarma where DocumentoEmpleado='".$id."'");
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