<?php 
class empleadoController{

	public function  registrarEmpleado(){
					if (isset($_POST["nombre"])&&isset($_POST["apellido"])
					&&isset($_POST["documento"])
					&&isset($_POST["email"])&&isset($_POST["telefono"])&&isset($_POST["instalacion"])) {
						
				 			$rol=2;
							$codigo = empleadoModel::listarUltimoEmpleado();
							$codigo = $codigo+1;
 					$respuesta = empleadoModel::registrarEmpleado($_POST["documento"],$_POST["nombre"],$_POST["apellido"],$_POST["email"],$_POST["telefono"],$codigo,$rol,isset($_POST["instalacion"]));
				    if($respuesta=='ok'){
				    	echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
 							 <strong>El(La) Emplead@ '.$_POST["nombre"]." ".$_POST["apellido"].' ha sido agregad@ con exito.</strong>
  								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
   							 <span aria-hidden="true">&times;</span>
  						</button>
						</div>';

				    }else{
				    	echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  El empleado ya se encuentra registrado en la granja.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
				    }
				}
		}
	
				public function  contarEmpleado(){
					$respuesta= empleadoModel::contarempleado();
					echo  $respuesta;
				}
	
		public function listarPersonas(){//Se comunica con la BD y despliega todos los empleados
           $respuesta=empleadoModel::listar();
			foreach ($respuesta as $row => $item) {
		echo '<tr id="'.$item["Documento"].'">
				 <td>'.$item["Nombre"]. '</td>
				 <td>'.$item["Apellido"].'</td>
				 <td>'.$item["Documento"].'</td>
				 <td>'.$item["Codigo"].' </td>
				 <td>'.$item["Email"].'</td>
				 <td>'.$item["Telefono"].'</td>
			<td> <span class="btn btn-warning btn-sm editarempleado" data-toggle="modal" data-target="#modaleditar"
			id='.$item["Documento"] .'><span class="fa fa-pencil-square-o"></span></span></td>
			
			<td><span class="btn btn-danger btn-sm eliminar" id='.$item["Documento"] .'><span class="fa fa-trash"></span></span></td></tr>';
		}
	}

	public function obtenerDatos($id){
		 $respuesta=empleadoModel::obtenerDatos($id);
		var_dump( $respuesta);
	}


public function listarDocumentos(){
	$respuesta=empleadoModel::listar();
	foreach ($respuesta as $row => $item){
		echo '<option value="'.$item["Documento"].'">'.$item["Documento"].'</option>';
	}
	}


public function validarEmail(){//Se comunica con la BD para validar el Email y envia el correo en caso de exito
if (isset($_POST["email"])) {
	# code...

		$respuesta = empleadoModel::validarEmail($_POST["email"]); //valida que exista en la bd
		if(!$respuesta){ //si no existe que arroje una aviso
			echo '<div class="alert alert-danger" role="alert">
  				<strong>Oh rayos!</strong> Los datos son invalidos!!!
				</div>';
		}else{//existe, entonces envia el correo
		
			foreach ($respuesta as $row => $item) {
			$asunto = "Envio de Contraseña Actual";
			$cuerpo = "Hola se ha solicitado un envio de la contraseña en la plataforma SoftPorn <br> Su contraseña es ".$item["Clave"]."";
			$destinatario = $_POST["email"];
			if(Recuperadora::enviarEmail($asunto,$cuerpo,$destinatario)){
					echo "Hemos enviado un coreo electronico a la direccion ".$_POST["email"]." para restablecer tu password.<br>";
					echo "<a href ='index.php' >Iniciar Sesion </a>";
					exit;
			}
		}
		}}
			

		}

	}



 ?>