<?php 
class alarmaController{

	public function  registrarAlarma(){
					if (isset($_POST["porcino"])&&isset($_POST["fecha"])
					&&isset($_POST["hora"])&&isset($_POST["asunto"])) {
 					$respuesta = alarmaModel::registraralarma($_POST["porcino"],$_POST["fecha"],$_POST["hora"],$_POST["asunto"]);
				    if($respuesta=='ok'){
				    	echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Alarma agregada!.</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

				    }else{
				    	echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> la alarma no pudo ser agregada!.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
				    }
			
		}
	}

	public function  listarAlarma(){
           $respuesta=alarmaModel::listarAlarma();
		foreach ($respuesta as $row => $item) {
			echo '<tr id="'.$item["DocumentoEmpleado"].'"> <td>'.$item["DocumentoEmpleado"]. '</td> <td>'.$item["Fecha"]. '</td><td>'.$item["Hora"].'</td><td>'.
			       $item["Asunto"].'</td>
			       <td><span class="btn btn-danger btn-sm"><span class="fa fa-trash"></span></span></td></tr>';
		}
	}

	public function obtenerDatos($id){
		 $respuesta=alarmaModel::obtenerDatos($id);
		var_dump( $respuesta);
	}

	public function getNumeroAlarmas(){
		$respuesta = alarmaModel::getNumeroAlarmas();
		return $respuesta;
		
	}

}

   



 ?>