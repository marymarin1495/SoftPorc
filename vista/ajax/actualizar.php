<?php
require_once '../../modelo/empleadoModel.php'; 
 require_once '../../controlador/datos.php';

 class Ajax2{

public $nombre;
public $apellido;
public $documento;
public $codigo;
public $email;
public $telefono;

public function actualizar(){
	$datos=array("documento"=>$this->documento,
                   "nombre"=>$this->nombre,
                   "apellido"=>$this->apellido,
                   "codigo"=>$this->codigo,
                   "email"=>$this->email,"telefono"=>$this->telefono);
	$respuesta = datosController::actualizarController($datos);
	echo $respuesta;
}

 }
 if (isset($_POST["documento"])||isset($_POST["apellido"])||isset($_POST["nombre"])||isset($_POST["email"])
||isset($_POST["telefono"])||isset($_POST["codigo"])) {
 	$b= new Ajax2();
 	$b->documento=$_POST["documento"];
 	 $b->nombre=$_POST["nombre"];
 	  	$b->apellido=$_POST["apellido"];
 	  	 	$b->email=$_POST["email"];
 	  	 	 	$b->telefono=$_POST["telefono"];
 	  	 	 	 	$b->codigo=$_POST["codigo"];
 	$b->actualizar();
 }





 ?>