<?php 
class celoController{

	public function  registrarCelo(){
					if (isset($_POST["monta"])&&isset($_POST["fecha"])&&isset($_POST["sincronia"])) {
 					$respuesta = celoModel::registrarCelo($_POST["monta"],$_POST["fecha"],$_POST["sincronia"]);
				    if($respuesta=='ok'){
				    	echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Periodo celo agregado!.</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

				    }else{
				    	echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> el periodo no pudo ser agregado a reproductora!.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
				    }
				}
		}
	
	public function  listarCelos(){
           $respuesta=celoModel::listarCelos();
		foreach ($respuesta as $row => $item) {
		$monta=celoModel::monta($item["Id_TipoMonta"]);
        $sincronia=celoModel::sincronia($item["Sincronia"]);
			echo '<tr id="'.$item["IdPeriodo"].'"> <td>'.$item["IdPeriodo"]. '</td><td>'.$monta.'</td><td>'.$item["Fecha_Inicio"].'</td><td>'.$sincronia.'</td></tr>';
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