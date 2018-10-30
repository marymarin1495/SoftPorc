<?php 
 class articulosModel{
  
  public function registrarArticulos($nombre,$tipo,$cantidad,$idProveedor,$instalacion){
				 $stmt=Conexion::conectar()->prepare(" INSERT INTO articulo (Nombre, Tipo, Cantidad, Id_Proveedor,Id_Instalacion) 
		 		 VALUES (:nombre,:tipo,:cantidad,:idProveedor,:instalacion)");
	
			     $stmt -> bindParam(":nombre", $nombre, PDO::PARAM_STR);
				 $stmt -> bindParam(":tipo", $tipo, PDO::PARAM_STR);
				 $stmt -> bindParam(":cantidad", $cantidad, PDO::PARAM_INT);
				 $stmt -> bindParam(":idProveedor",$idProveedor, PDO::PARAM_INT);
				 $stmt -> bindParam(":instalacion", $instalacion, PDO::PARAM_INT);
 
				  if($stmt->execute()){

					   return "ok";
						              }

			      else{

					   return "error";
					  };
					   $stmt->close();
	 }

public function listarArticulos(){ 
     	$stmt=Conexion::conectar()->prepare("SELECT * FROM articulo");
        $stmt->execute();
        return $stmt->fetchAll();

     }

public function getNumeroArticulos(){
$stms = Conexion::conectar()->prepare("SELECT * from articulo");
	$stms->execute();
	return $stms->rowCount(); 
}

public function proveedor($id){
	$resultado = Conexion::conectar()->prepare("SELECT Id_Proveedor FROM articulo WHERE Id_Proveedor = '".$id."'");
	$resultado->execute();
	$fila = $resultado->fetch();
	return $fila["Id_Proveedor"];
	}


public function nombreProveedor($id){
	$resultado = Conexion::conectar()->prepare("SELECT Nombre FROM proveedor WHERE Id_Proveedor = '".$id."'");
	$resultado->execute();
	$fila = $resultado->fetch();
	return $fila["Nombre"];
	}

public function listarProveedores(){
		$stmt=Conexion::conectar()->prepare("SELECT * from proveedor");
		$stmt->execute();
		return $stmt->fetchAll();
		 
	}

public function listarTipoArticulos(){
		$stmt=Conexion::conectar()->prepare("SELECT * from articulo");
		$stmt->execute();
		return $stmt->fetchAll();
		 
	}

public function obtenerdatos($nombre){
     		$stmt=Conexion::conectar()->prepare("SELECT * FROM articulo where Nombre='".$nombre["Nombre"]."'");
        $stmt->execute();
        return $stmt->fetch();
 

}          
public function actualizardatos($datos){
$stmt = Conexion::conectar()->prepare("UPDATE articulo SET nombre = :nombre, tipo=:tipo,
    cantidad=:cantidad, idproveedor=:idproveedor,instalacion=:instalacion WHERE nombre = :nombre");	

		$stmt -> bindParam(":nombre", $datos["Nombre"], PDO::PARAM_STR);
		$stmt -> bindParam(":tipo", $datos["Tipo"], PDO::PARAM_STR);
		$stmt -> bindParam(":cantidad", $datos["Cantidad"], PDO::PARAM_STR);
		$stmt -> bindParam(":idproveedor", $datos["Id_Proveedor"], PDO::PARAM_STR);
		$stmt -> bindParam(":idinstalacion", $datos["Id_Instalacion"], PDO::PARAM_STR);
		if($stmt->execute()){

			return "ok";
		}

		else{

			return "error";
		}

		$stmt->close();
	}
	public function eliminarM($datos){
       $stmt = Conexion::conectar()->prepare("DELETE FROM articulo WHERE nombre = :nombre");
		$stmt -> bindParam(":nombre", $datos["Nombre"], PDO::PARAM_STR);
		
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