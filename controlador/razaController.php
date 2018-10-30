<?php 
class razaController{

	public function  registrarRaza(){
					if (isset($_POST["nombre"])&&isset($_POST["descripcion"])) {
 					$respuesta = razaModel::registrarRaza($_POST["nombre"],$_POST["descripcion"]);
				    if($respuesta=='ok'){
				    	echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Raza agregada!.</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

				    }else{
				    	echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> la raza no pudo ser agregada!.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
				    }
			
		}
	}

public function  listarRazas(){
           $respuesta=razaModel::listarRaza();
		foreach ($respuesta as $row => $item) {
			echo '<tr id="'.$item["Nombre"].'"> <td>'.$item["Nombre"]. '</td>
			<td>'.htmlentities($item["Descripcion"], ENT_QUOTES,'UTF-8').'</td>
			       <td>
			       <span class="btn btn-warning btn-sm editarempleado" data-toggle="modal" data-target="#modaleditar"
                         id='.$item["Nombre"] .'><span class="fa fa-pencil-square-o"></span></span></td>
			       <td><span class="btn btn-danger btn-sm eliminar" id='.$item["Nombre"] .'><span class="fa fa-trash"></span></span></td></tr>';
		}
	}

	public function  listarRaza(){
           $respuesta=razaModel::listarRaza();
		foreach ($respuesta as $row => $item) {
			       echo'<option value="'.$item["Nombre"].'" >'.$item["Nombre"].'</option>';
		}
	}


	public function obtenerDatos($id){
		 $respuesta=razaModel::obtenerDatos($id);
		var_dump( $respuesta);
	}

}