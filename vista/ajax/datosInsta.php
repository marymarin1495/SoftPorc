<?php
require_once '../../modelo/instalacionModel.php'; 
 require_once '../../controlador/instalacionController.php';

 class AjaxI{
 
public $id;
public function mostrar(){
	$datos=array("id"=>$this->id);
	$respuesta = instalacionController::mostrarController($datos);

 echo $respuesta;
}
public function eliminar(){
	$datos=array("id"=>$this->id);
	$respuesta= instalacionController::eliminarinsta($datos);
	echo $respuesta;
}

 }

 if (isset($_POST["puta"])) {
 	 
 	$b= new AjaxI();
 	$b->id=$_POST["puta"];
 	$b->mostrar();
 } if (isset($_POST["id"])) {
 	$b= new AjaxI();
 	$b->id=$_POST["id"];
 	$b->eliminar();
 }
 ?>