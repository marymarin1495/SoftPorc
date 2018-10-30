<?php
require_once '../../modelo/reproductorModel.php'; 
 require_once '../../controlador/reproductorController.php';

 class Ajax{
 
public $id;
public function mostrar(){
	$datos=array("id"=>$this->id);
	$respuesta = reproductorController::mostrar($datos);
	echo $respuesta;
}


 }

 if (isset($_POST["enviarid"])) {
 	$b= new Ajax();
 	$b->id=$_POST["enviarid"]; 
 	$b->mostrar();
 } 
 ?>