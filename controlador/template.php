<?php 
class TemplateController{
	public function template(){
		include "vista/template.php";
	}
	public function enlacesPaginasController(){
		
		if (isset($_GET["action"])) {
			//si el link tiene un enlace lo direcciona a ese enlace siempre y cuando exista
		$enlaces=$_GET["action"];
		  $respuesta=EnlacesPaginas::enlacesPaginasModel($enlaces);
		
		  include $respuesta;
}else{
	//si ese enlace no existe lo manda al login o inicio 
	include 'vista/modulos/login.php';
	}
}
}



 ?>




