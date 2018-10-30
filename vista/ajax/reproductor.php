<?php
require_once '../../modelo/reproductorModel.php'; 
 require_once '../../controlador/reproductorController.php';

 class Ajax{
 
public $id;
public function examen(){
	$datos=array("id"=>$this->id);
	$respuesta=reproductorController::listarExamenes($datos);
	echo  $respuesta;
}
public function mostrar(){
	$datos=array("id"=>$this->id);
	$respuesta = reproductorController::mostrar($datos);
	echo $respuesta;
}
public function eliminar(){
	$datos=array("id"=>$this->id);
	$respuesta= reproductorController::eliminar($datos);
	echo $respuesta;
}

 }

 if (isset($_POST["id"])) {
 	$b= new Ajax();
 	$b->id=$_POST["id"]; 
 	$b->examen();
 } else 
 if (isset($_POST["ideliminar"])) {
 	$b= new Ajax();
 	$b->id=$_POST["ideliminar"]; 
 	$b->eliminar();
 }
   // $b= new Ajax();
 	//$b->id=$_POST["puta"]; 
// 	$b->mostrar();
 
 ?>