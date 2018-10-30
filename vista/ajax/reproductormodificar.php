<?php
require_once '../../modelo/reproductoraModel.php'; 
 require_once '../../controlador/reproductorController.php';

 class AjaxI{
 
public $id;
public function mostrar(){
	$datos=array("id"=>$this->id);
	$respuesta = reproductorController::mostrar($datos);

    echo $respuesta;
}

 }

 if (isset($_POST["puta"])) {
 	 
 	$b= new AjaxI();
 	$b->id=$_POST["puta"];
 	$b->mostrar();
 } 
 ?>