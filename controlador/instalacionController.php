 <?php 
class instalacionController{

	public function  registrarInstalacion(){
					if (isset($_POST["nombre"])&&isset($_POST["capacidad"])
					&&isset($_POST["tipoinstalacion"])) {
 					$respuesta = instalacionModel::registrarInstalacion($_POST["nombre"],$_POST["capacidad"],$_POST["tipoinstalacion"]);
				    echo $respuesta;
			
		}
	}

	public function eliminarinsta($datos){
		$respuesta=instalacionModel::eliminarInsta($datos);
	}
	
	public function  listarInstalacion(){
           $respuesta=instalacionModel::listarInstalacion();

		foreach ($respuesta as $row => $item) {
			       echo'<option value="'.$item["Id_Instalacion"].'" >'.$item["Nombre"].'</option>';
		}
	}
	public function  contarinstalaciones(){
					$respuesta= instalacionModel::contarinstalaciones();
					echo  $respuesta;
				}
	

	public function listarTipos(){
	$respuesta=instalacionModel::listarTipos();
	foreach ($respuesta as $row => $item){
		echo '<option value="'.$item["Id_Tipo"].'">'.$item["Tipo"].'</option>';
	}
	}

	public function listarTipo($id){
		$respuesta=instalacionModel::listarTipo($id);
		return $respuesta;
	} 

	public function  listarInstalaciones(){
           $respuesta=instalacionModel::listarInstalacion();
		foreach ($respuesta as $row => $item) {
			$tipos=instalacionModel::listarTipo($item["Id_Tipo"]);
			echo '<tr id="'.$item["Id_Instalacion"].'"> <td>'.$item["Nombre"]. '</td><td>'.$item["Capacidad"].'</td><td>'.$tipos.'</td><td>
			       <span class="btn btn-warning btn-sm editarinstalacion" data-toggle="modal" data-target="#modaleditar"
                          id="'.$item["Id_Instalacion"].'"><span class="fa fa-pencil-square-o"></span></span></td>
			       <td><span class="btn btn-danger btn-sm eliminarinsta" id="'.$item["Id_Instalacion"].'" ><span class="fa fa-trash"></span></span></td></tr>';
			//}
		}
	}


   	public function mostrarController($datos)
   	{
   		$respuesta=instalacionModel::obtenerdatos($datos);
   		$enviardatos=array(   "id"=>$respuesta["Id_Instalacion"],
   	                        "nombre"=>$respuesta["Nombre"],
   	                        "capacidad"=>$respuesta["Capacidad"],
   	                         "tipo"=>$respuesta["Id_Tipo"]
   	                           );
   		echo json_encode($enviardatos);
   	}
   	   public function actualizar($datos){
   	   	  $respuesta= instalacionModel::actualizardatos($datos);
   	   	  echo $respuesta;
   	   }

}




   



 ?>