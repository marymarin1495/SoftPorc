<?php 
class articulosController{

	public function  registrarArticulos(){
					if (isset($_POST["nombre"])&&isset($_POST["tipoarticulo"])
					&&isset($_POST["cantidad"])
					&&isset($_POST["proveedores"])&&isset($_POST["instalacion"])) {
						
				 			
 					$respuesta = articulosModel::registrarArticulos($_POST["nombre"],$_POST["tipoarticulo"],$_POST["cantidad"],$_POST["proveedores"],$_POST["instalacion"]);
				    if($respuesta=='ok'){
				    	echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Artículo agregado!.</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

				    }else{
				    	echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> el artículo no pudo ser agregado!.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
				    }
				}
		}
	
public function  listarArticulos(){
            $respuesta=articulosModel::listarArticulos();
		foreach ($respuesta as $row => $item) {
			$proveedor=articulosModel::nombreProveedor($item["Id_Proveedor"]);
			$instalacion=instalacionModel::listarTipo($item["Id_Instalacion"]);
			echo '<tr id="'.$item["Nombre"].'"> 
			<td>'.$item["Nombre"]. '</td>
			<td>'.$item["Tipo"].'</td>
			<td>'.$item["Cantidad"].'</td>
			<td>'.$proveedor.' </td>
			<td>'.$instalacion.'</td>
			       <td>
			       <span class="btn btn-warning btn-sm editarempleado" data-toggle="modal" data-target="#modaleditar"
                         id='.$item["Nombre"] .'><span class="fa fa-pencil-square-o"></span></span></td>
			       <td><span class="btn btn-danger btn-sm eliminar" id='.$item["Nombre"] .'><span class="fa fa-trash"></span></span></td></tr>';
		}
	}

public function getNumeroArticulos(){
	$respuesta= articulosModel::getNumeroArticulos();
	echo  $respuesta;
				
		
	}


public function  listarProveedores(){
        $respuesta=articulosModel::listarProveedores();
		foreach ($respuesta as $row => $item) {
			       echo'<option value="'.$item["Id_Proveedor"].'" >'.$item["Nombre"].'</option>';
		}
}

public function  listarTipoArticulos(){
        $respuesta=articulosModel::listarTipoArticulos();
		foreach ($respuesta as $row => $item) {
			       echo'<option value="'.$item["Tipo"].'" >'.$item["Tipo"].'</option>';
		}
}

	public function obtenerDatos($id){
		 $respuesta=empleadoModel::obtenerDatos($id);
		var_dump( $respuesta);
	}

}

   



 ?>