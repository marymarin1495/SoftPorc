<?php
require_once '../../modelo/porcinoModel.php'; 
 require_once '../../controlador/porcinoModel.php';

 class Ajax{
 

public function contador(){
	$respuesta=porcinoController::etapas();
	echo $respuesta;
}


 }

 	$b= new Ajax();
 	 
 	$b->contador();

 ?>