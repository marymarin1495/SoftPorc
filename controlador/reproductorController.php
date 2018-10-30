<?php 
class reproductorController{

	public function  registrarReproductor(){
					if (isset($_POST["porcino"])&&isset($_POST["conformacion"])
					&&isset($_POST["reproductoras"])) {
 					$respuesta = reproductorModel::registrarReproductor($_POST["porcino"],$_POST["conformacion"],$_POST["reproductoras"]);
				     if($respuesta=='ok'){
				    	echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Reproductor agregado!.</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

				    }else{
				    	echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> el reproductor no pudo ser agregado!.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
				    }
				}
		}
	

	
	public function  listarreproductores(){
           $respuesta=reproductorModel::listarreproductores();
		foreach ($respuesta as $row => $item) {
			echo '<tr id="'.$item["Id_Reproductor"].'"> <td>'.$item["Id_Reproductor"]. '</td><td>'.$item["Confomacion_Fisica"]. '</td><td>'.$item["Reproductoras_Montadas"].'</td>

			<td>
			       <span class="btn btn-sm btn-info editarreproductor" data-toggle="modal" data-target="#modaleditar"
                         id='.$item["Id_Reproductor"] .'><span class="glyphicon glyphicon-eye-open"></span></span></td>
                         <td>
			       <span class="btn btn-warning btn-sm mofidicarreproductor" data-toggle="modal" data-target="#modalmodificar"
                         id='.$item["Id_Reproductor"] .'><span class="fa fa-pencil-square-o"></span></span></td>
			       <td><span class="btn btn-danger btn-sm eliminarreproductor" id='.$item["Id_Reproductor"] .'><span class="fa fa-trash"></span></span></td></tr>';
		}
	}


    public function listarExamenes($id){
    	 $tablabody="";
    	 $respuesta=reproductorModel::listarexamenes($id["id"]);

		foreach ($respuesta as $row => $item) {
			$tablabody .= '<tr id="'.$item["Id_Reproductor"].'"> 
			<td>'.$item["Nombre"]. '</td>
			<td>'.$item["Fecha"].'</td>
			<td>'.$item["Resultado"].'</td>
			<td><span class="btn btn-danger btn-sm exam" id="'.$item["Id_Reproductor"].'"><span class="fa fa-trash"></span></span></td></tr>';
		}
		 echo $tablabody;
    }
         public function mostrar($id){
         	$respuesta=reproductorModel::mostrar($id["id"]);

              json_encode($respuesta);
         }
         public function eliminar($datos){
         	$respuesta=reproductorModel::eliminar($datos["id"]);
         	echo $respuesta;
         }

}

   



 ?>