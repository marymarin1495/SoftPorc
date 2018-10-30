<?php
require_once '../../modelo/instalacionModel.php'; 
 require_once '../../controlador/instalacionController.php';

 class Ajax3{

public $nombre;
public $capacidad;
public $tipo;

public $idinstalacion;

public function actualizar(){
	$datos=array("idinstalacion"=>$this->idinstalacion,  
					"nombre"=>$this->nombre,
                    "capacidad"=>$this->capacidad,
                    "tipo"=>$this->tipo);
	$respuesta = instalacionController::actualizar($datos);
	echo $respuesta;
}

 }
 if (isset($_POST["idinstalacion"])&&isset($_POST["nombre"])&&isset($_POST["capacidad"])&&isset($_POST["tipoinstalacion"])) {
 	$b= new Ajax3();
 
    $b->idinstalacion=$_POST["idinstalacion"];
 	 $b->nombre=$_POST["nombre"];
	 $b->capacidad=$_POST["capacidad"];
 	 $b->tipo=$_POST["tipoinstalacion"];
 	$b->actualizar();
      }



 ?>