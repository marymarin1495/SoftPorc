<?php 
class medicamentoController{

public function  registrarMedicamento(){
					if (isset($_POST["tipo"])&&isset($_POST["nombre"])
					&&isset($_POST["dosis"])) {
 					$respuesta = medicamentoModel::registrarMedicamento($_POST["tipo"],$_POST["nombre"],$_POST["dosis"]);
				    if($respuesta=='ok'){
				    	echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Medicamento agregado!.</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

				    }else{
				    	echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> el medicamento no pudo ser agregado!.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
				    }
			
		}
	}
public function  registrarMedicamentoPorcino(){
					if (isset($_POST["porcino"])&&isset($_POST["tipo"])
					&&isset($_POST["fecha"])&&isset($_POST["estado"])) {
 					$respuesta = medicamentoModel::registrarMedicamentoPorcino($_POST["porcino"],$_POST["tipo"],$_POST["fecha"],$_POST["estado"]);
				    if($respuesta=='ok'){
				    	echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Medicamento agregado!.</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

				    }else{
				    	echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> el medicamento no pudo ser agregado!.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
				    }
			
		}
	}


public function listarTipos(){
	$respuesta=medicamentoModel::listarTipos();
	foreach ($respuesta as $row => $item){
		echo '<option value="'.$item["Codigo_Tipo"].'">'.$item["Tipo"].'</option>';
	}
	}

public function listarTiposMedicamentos(){
		 $respuesta=medicamentoModel::listarTiposMedicamentos();
		foreach ($respuesta as $row => $item) {
			$tipos=medicamentoModel::listarTipo($item["Codigo_Tipo"]);
			echo '<tr id="'.$item["Codigo"].'"> <td>'.$tipos.'</td><td>'.$item["Nombre"]. '</td><td>'.$item["Dosis"]. '</td><td>
			       <span class="btn btn-warning btn-sm editarinstalacion" data-toggle="modal" data-target="#modaleditar"
                          id="'.$item["Codigo"].'"><span class="fa fa-pencil-square-o"></span></span></td>
			       <td><span class="btn btn-danger btn-sm eliminarinsta" id="'.$item["Codigo"].'" ><span class="fa fa-trash"></span></span></td></tr>';
		}
	}

public function medicamentoPorcino(){
		 $respuesta=medicamentoModel::medicamentoPorcino();
		foreach ($respuesta as $row => $item) {
			$tipos=medicamentoModel::medicamentoNombre($item["CodigoMedicamento"]);
			$estado=medicamentoModel::estado($item["Aplicada"]);
			echo '<tr id="'.$item["CodigoMedicamento"].'"> <td>'.$tipos.'</td><td>'.$item["Fecha"].'</td><td>'.$estado.'</td><td>
			       <span class="btn btn-warning btn-sm editarinstalacion" data-toggle="modal" data-target="#modaleditar"
                          id="'.$item["CodigoMedicamento"].'"><span class="fa fa-pencil-square-o"></span></span></td>
			       </tr>';
		}
	}


}




   



 ?>