<?php 

require_once "conexion.php";
 class porcinoModel{
    
	public function registrarPorcino($sexo,$peso,$etapa,$fechaNacimiento,$fechaAdquisicion,$faseCrecimiento,$estadoSalud,$idInstalacion,$raza){
				 $stmt=Conexion::conectar()->prepare(" INSERT INTO porcino (IdPorcino,Sexo, Peso, Etapa,Fecha_Nacimiento, Fecha_Adquisicion, Fase_Crecimiento, Estado_salud,Id_Instalacion,Raza) 
		 		 VALUES (null,:sexo,:peso,:etapa,:fechaNacimiento,:fechaAdquisicion,:faseCrecimiento,:estadoSalud,:idInstalacion,:raza)");

				 $stmt -> bindParam(":sexo", $sexo, PDO::PARAM_STR);
			     $stmt -> bindParam(":peso", $peso, PDO::PARAM_STR);
			     $stmt -> bindParam(":etapa", $etapa, PDO::PARAM_STR);
				 $stmt -> bindParam(":fechaNacimiento", $fechaNacimiento);
				 $stmt -> bindParam(":fechaAdquisicion", $fechaAdquisicion);
				 $stmt -> bindParam(":faseCrecimiento",$faseCrecimiento, PDO::PARAM_STR);
		  		 $stmt -> bindParam(":estadoSalud", $estadoSalud, PDO::PARAM_STR);
		 		 $stmt -> bindParam(":idInstalacion", $idInstalacion, PDO::PARAM_STR);
		 		 $stmt -> bindParam(":raza", $raza, PDO::PARAM_STR);

 
				  if($stmt->execute()){

					   return "ok";
						              }

			      else{

					   return "error";
					  }

					   $stmt->close();
	 }

public function gestacion(){
	 	$stmt=Conexion::conectar()->prepare("SELECT * FROM porcino where Fase_Crecimiento= 1");
	 	$stmt->execute();
	 	 return $stmt->rowCount(); 

	 }
	 public function lactancia(){
	 	$stmt=Conexion::conectar()->prepare("SELECT * FROM porcino where Fase_Crecimiento= 2");
	 	$stmt->execute();
	 	 return $stmt->rowCount(); 

	 }
	 public function destete(){
	 	$stmt=Conexion::conectar()->prepare("SELECT * FROM porcino where Fase_Crecimiento= 3");
	 	$stmt->execute();
	 	 return $stmt->rowCount(); 

	 }
	 public function levante(){
	 	$stmt=Conexion::conectar()->prepare("SELECT * FROM porcino where Fase_Crecimiento= 4");
	 	$stmt->execute();
	 	 return $stmt->rowCount(); 

	 }
	 public function engorde(){
	 	$stmt=Conexion::conectar()->prepare("SELECT * FROM porcino where Fase_Crecimiento= 5");
	 	$stmt->execute();
	 	 return $stmt->rowCount(); 

	 }



	 public function razaDuroc(){
	 	$stmt=Conexion::conectar()->prepare("SELECT * FROM porcino where raza= 'Duroc'");
	 	$stmt->execute();
	 	 return $stmt->rowCount(); 

	 }
	  public function razaDurocHampshire(){
	 	$stmt=Conexion::conectar()->prepare("SELECT * FROM porcino where raza= 'Duroc,Hampshire'");
	 	$stmt->execute();
	 	 return $stmt->rowCount(); 

	 }
	  public function razaHampshire(){
	 	$stmt=Conexion::conectar()->prepare("SELECT * FROM porcino where raza= 'Hampshire'");
	 	$stmt->execute();
	 	 return $stmt->rowCount(); 

	 }
	  public function razaLandrace(){
	 	$stmt=Conexion::conectar()->prepare("SELECT * FROM porcino where raza= 'Landrace'");
	 	$stmt->execute();
	 	 return $stmt->rowCount(); 

	 }
	  public function razaPietrain(){
	 	$stmt=Conexion::conectar()->prepare("SELECT * FROM porcino where raza= 'Pietrain'");
	 	$stmt->execute();
	 	 return $stmt->rowCount(); 

	 }public function razaYorkshire(){
	 	$stmt=Conexion::conectar()->prepare("SELECT * FROM porcino where raza= 'Yorkshire'");
	 	$stmt->execute();
	 	 return $stmt->rowCount(); 

	 }
	 public  function eliminar($id){
	 	$stmt=Conexion::conectar()->prepare("DELETE FROM porcino where IdPorcino=:id");
	 	$stmt -> bindParam(":id", $id);

				  if($stmt->execute()){

					   return "ok";
						              }

			      else{

					   return "error";
					  }

					   $stmt->close();
	 }

   public function  medicamentoporcerdo($id){
   	//
   	$stmt=Conexion::conectar()->prepare("SELECT  porcino.IdPorcino , medicamento_porcino.Fecha, medicamento.Nombre , medicamento.Dosis from porcino INNER JOIN medicamento_porcino on medicamento_porcino.IdPorcino=porcino.IdPorcino inner JOIN medicamento on medicamento.Codigo=medicamento_porcino.CodigoMedicamento WHERE porcino.IdPorcino=:id ");
	 	$stmt -> bindParam(":id", $id);
	 	$stmt->execute();
	 	return $stmt->fetchAll();

   }

	 public function editar($datos){
$stmt = Conexion::conectar()->prepare("UPDATE porcino SET Peso = :peso, Etapa = :etapa, Fase_Crecimiento=:fasedecrecimiento,
                                        Estado_salud=:salud,Id_Instalacion=:instalacion WHERE IdPorcino = :id");	

		$stmt -> bindParam(":peso", $datos["peso"]);
		$stmt -> bindParam(":etapa", $datos["etapa"]);
		$stmt -> bindParam(":fasedecrecimiento", $datos["fasecrecimiento"]);
		$stmt -> bindParam(":salud", $datos["estadosalud"]);
		$stmt -> bindParam(":instalacion", $datos["instalacion"]);
		$stmt -> bindParam(":id", $datos["idporcino"]);
		
		if($stmt->execute()){

			return "ok";
		}

		else{

			return "error";
		}

		$stmt->close();
	}
	 public function contarLechon(){
	 		$stms = Conexion::conectar()->prepare("SELECT * from porcino where etapa= 1 ");
	 	$stms->execute();
	 	 return $stms->rowCount(); 
	 }
	  public function contarmarrano(){
	 		$stms = Conexion::conectar()->prepare("SELECT * from porcino where etapa= 2 ");
	 	$stms->execute();
	 	 return $stms->rowCount(); 
	 }
	  public function contarprimal(){
	 		$stms = Conexion::conectar()->prepare("SELECT * from porcino where etapa= 3 ");
	 	$stms->execute();
	 	 return $stms->rowCount(); 
	 }
	  public function contargordo(){
	 		$stms = Conexion::conectar()->prepare("SELECT * from porcino where etapa= 4");
	 	$stms->execute();
	 	 return $stms->rowCount(); 
	 }
     
    public function contarPorcinos(){
	 	$stms = Conexion::conectar()->prepare("SELECT * from porcino  ");
	 	$stms->execute();
	 	 return $stms->rowCount(); 
	 }
    public function listaretapas(){
		$stmt=Conexion::conectar()->prepare("SELECT * from etapaporcino");
		$stmt->execute();
		return $stmt->fetchAll();
		}
 
 	 public function listarmachos(){
		$stmt=Conexion::conectar()->prepare("SELECT * from porcino where Sexo ='M'");
		$stmt->execute();
		return $stmt->fetchAll();
		}

public function listarhembras(){
		$stmt=Conexion::conectar()->prepare("SELECT * from porcino where Sexo ='F'");
		$stmt->execute();
		return $stmt->fetchAll();
		}

	public function listarfases(){
		$stmt=Conexion::conectar()->prepare("SELECT * from fasecrecimiento");
		$stmt->execute();
		return $stmt->fetchAll();
	}

     public function listarporcinos(){ 
     	$stmt=Conexion::conectar()->prepare("SELECT * FROM porcino");
        $stmt->execute();
        return $stmt->fetchAll();

     }

	public function etapa($id){
	$resultado = Conexion::conectar()->prepare("SELECT Etapa FROM etapaporcino WHERE Id_Etapa = '".$id."'");
	$resultado->execute();
	$fila = $resultado->fetch();
	return $fila["Etapa"];
	}

	public function fase($id){
	$resultado = Conexion::conectar()->prepare("SELECT Fase FROM fasecrecimiento WHERE Id_fase = '".$id."'");
	$resultado->execute();
	$fila = $resultado->fetch();
	return $fila["Fase"];
	}

	public function salud($estado){
		if($estado==0){
			return "Sano";
		}else{
			return "Enfermo";
		}
	}

	public function instalacion($id){
	$resultado = Conexion::conectar()->prepare("SELECT Nombre FROM instalacion WHERE Id_Instalacion = '".$id."'");
	$resultado->execute();
	$fila = $resultado->fetch();
	return $fila["Nombre"];
	}

     public function obtenerdatos($id){
     		$stmt=Conexion::conectar()->prepare("SELECT IdPorcino,Sexo,Peso,Etapa,Fase_Crecimiento,Estado_Salud,Id_Instalacion FROM persona where IdPorcino='".$id."'");
        $stmt->execute();
       $ver= $stmt->fetch();
      
     return $ver;

}
	}


 ?>