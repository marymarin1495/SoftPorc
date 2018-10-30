<?php 
class reproductoraController{

	public function  registrarReproductora(){
					if (isset($_POST["porcina"])&&isset($_POST["nulipara"])
					&&isset($_POST["porcino"])) {
						
 	$respuesta = reproductoraModel::registrarReproductora($_POST["porcina"],$_POST["nulipara"],$_POST["porcino"]);
				   if($respuesta=='ok'){
				    	echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Reproductora agregada!.</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

				    }else{
				    	echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> la reproductora no pudo ser agregada!.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
				    }
				}
		}
	
public function nulipra($id){
		$respuesta=reproductoraModel::nulipara($id);
		return $respuesta;
	} 

public function reproductoras(){
	$respuesta=reproductoraModel::listarreproductoras();
	foreach ($respuesta as $row => $item){
		echo '<option value="'.$item["IdReproductora"].'">'.$item["IdReproductora"].'</option>';
	}
	}

	
	public function  listarreproductoras(){
           $respuesta=reproductoraModel::listarreproductoras();
		foreach ($respuesta as $row => $item) {

			$nuli=reproductoraModel::nulipara($item["Nulipara"]);
			echo '<tr id="'.$item["IdReproductora"].'"> <td>'.$item["IdReproductora"]. '</td><td>'.$nuli.'</td><td>'.$item["Id_reproductor"].'</td>
<td>
			     <a href="index.php?action=tablaParto"><span class="btn btn-success btn-sm" id='.$item["IdReproductora"] .'><span class="glyphicon glyphicon-piggy-bank"></span></span></a>
             </td>
              <td>
               <a href="index.php?action=tablaCelo"><span class="btn btn-danger btn-sm" id='.$item["IdReproductora"] .'><span class="fa fa-heart"></span></span></a>
             </td>
             
              <td>
               <a href="index.php?action=tablaGestacion"><span class="btn btn-warning btn-sm" id='.$item["IdReproductora"] .'><span class="fa fa-clock-o"></span></span></a>
             </td>
			       <td>
			       <span class="btn btn-warning btn-sm editarempleado" data-toggle="modal" data-target="#modaleditar"
                         id='.$item["IdReproductora"] .'><span class="fa fa-pencil-square-o"></span></span></td>
			       <td><span class="btn btn-danger btn-sm eliminar" id='.$item["IdReproductora"] .'><span class="fa fa-trash"></span></span></td></tr>';
		}
	}

	public function obtenerDatos($id){
		 $respuesta=empleadoModel::obtenerDatos($id);
		var_dump( $respuesta);
	}

}

   



 ?>