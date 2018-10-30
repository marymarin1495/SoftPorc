<?php
require_once '../../modelo/empleadoModel.php'; 
 require_once '../../controlador/datos.php';

 class Ajax{
 
public $id;
public function mostrar(){
	$datos=array("id"=>$this->id);
	$respuesta = datosController::mostrarController($datos);
	echo $respuesta;
}
public function eliminar(){
	$datos=array("id"=>$this->id);
	$respuesta= datosController::eliminarController($datos);
	echo $respuesta;
}

 }

 if (isset($_POST["enviarid"])) {
 	$b= new Ajax();
 	$b->id=$_POST["enviarid"]; 
 	$b->mostrar();
 } if (isset($_POST["id"])) {
 	$b= new Ajax();
 	$b->id=$_POST["id"];
 	$b->eliminar();
 }
 ?>