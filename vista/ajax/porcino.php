<?php 
require_once '../../controlador/porcinoController.php';
require_once '../../modelo/porcinoModel.php';
class Ajaxpor{
	public $id;
	public $peso;
	public $etapa;
	public $fase;
	public $salud;
	public $instalacion;

public function eliminar(){
    $respuesta= porcinoController::eliminar($this->id);

    echo  $respuesta;
}
public function medicamento(){

	$respuesta=porcinoController::listarMedi($this->id);
	echo  $respuesta;
}
 public function editar(){
 	$datos=array("id"=>$this->id,"fase"=>$this->fase,"peso"=>$this->peso,"etapa"=>$this->etapa,"instalacion"=>$this->instalacion,"salud"=>$this->salud);
 	$respuesta= porcinoController::editar($datos);
 	echo  $respuesta;
 }
}
if (isset($_POST["ideliminar"])) {
	# code...

$porcino = new Ajaxpor();
$porcino->id=$_POST["ideliminar"];
$porcino->eliminar();
} 
 
if (isset($_POST["id"])) {
	$porcino= new Ajaxpor();
	$porcino->id=$_POST["id"];
	$porcino->medicamento();
}









 ?>