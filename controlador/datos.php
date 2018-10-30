<?php 
   class datosController{

   	public function mostrarController($datos)
   	{
   		$respuesta=empleadoModel::obtenerdatos($datos);
   		$enviardatos=array("id"=>$respuesta["documento"],
   	                        "nombre"=>$respuesta["nombre"],
   	                        "apellido"=>$respuesta["apellido"],
   	                         "documento"=>$respuesta["documento"],
   	                           "codigo"=>$respuesta["codigo"],
   	                        "email"=>$respuesta["email"],
   	                          "telefono"=>$respuesta["telefono"]);
   		echo json_encode($enviardatos);
   	}
   	 public function actualizarController($datos){
   	 	$respuesta=empleadoModel::actualizardatos($datos);
   	 	echo $respuesta;
   	 }
       public function eliminarController($datos){
            $respuesta=empleadoModel::eliminarM($datos);
            echo $respuesta;
       }

      public function mostrarInstalacionController($datos){
         $respuesta = instalacionModel::obtenerdatos($datos);
         $enviardatos=array("id"=>$respuesta["id_instalacion"],
                              "nombre"=>$respuesta["nombre"],
                              "capacidad"=>$respuesta["capacidad"],
                              "tipoinstalacion"=>$respuesta["tipoinstalacion"]);
         echo json_encode($enviardatos);
      }

       public function actualizarInstalacionController($datos){
         $respuesta=instalacionModel::actualizardatos($datos);
         echo $respuesta;
       }  

        public function eliminarInstalacionController($datos){
            $respuesta=instalacionModel::eliminar($datos);
            echo $respuesta;
       }

   }

 ?>