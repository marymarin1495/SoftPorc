<?php 
class examenController{

	public function  registrarExamen(){
					if (isset($_POST["porcino"])&&isset($_POST["examen"])&&isset($_POST["fecha"])
					&&isset($_POST["resultado"])) {
 					$respuesta = examenModel::registrarExamen($_POST["porcino"],$_POST["examen"],$_POST["fecha"],$_POST["resultado"]);
				    if($respuesta=='ok'){
				    	echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Examen agregado!.</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

				    }else{
				    	echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> el examen no pudo ser agregado al reproductor!.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
				    }
				}
		}
	
public function  registrarExamenes(){
					if (isset($_POST["nombre"])&&isset($_POST["descripcion"])) {
 					$respuesta = examenModel::registrarExamenes($_POST["nombre"],$_POST["descripcion"]);
				    if($respuesta=='ok'){
				    	echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Examen agregado!.</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

				    }else{
				    	echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> el examen no pudo ser agregado!.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
				    }
				}
		}
	
	public function  listarexamen(){
           $respuesta=examenModel::listarexamenes();
		foreach ($respuesta as $row => $item) {
			echo '<tr id="'.$item["Nombre"].'"> <td>'.$item["Nombre"]. '</td><td>'.$item["Descripcion"].'</td></tr>';
		}
	}

	public function listarTipo(){
	$respuesta=examenModel::listarexamenes();
	foreach ($respuesta as $row => $item){
		echo '<option value="'.$item["Nombre"].'">'.$item["Nombre"].'</option>';
	}
	}

public function  listarexamenes(){
           $respuesta=examenModel::examenReproductor();
		foreach ($respuesta as $row => $item) {
			echo '<tr id="'.$item["Id_Reproductor"].'"> <td>'.$item["Nombre"]. '</td><td>'.$item["Fecha"].'</td><td>'.$item["Resultado"].'</td></tr>';
		}
	}


}

   



 ?>