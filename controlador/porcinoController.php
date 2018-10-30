<?php 
class porcinoController{

public function  registrarPorcino(){
	if (isset($_POST["sexo"])&&isset($_POST["peso"])&&isset($_POST["etapa"])&& isset($_POST["fechanacimiento"]) && isset($_POST["fechaadquisicion"])&&isset($_POST["fasecrecimiento"])&&isset($_POST["estadosalud"])&&isset($_POST["instalacion"])&&isset($_POST["raza"])) {
		
$respuesta = porcinoModel::registrarPorcino($_POST["sexo"],
	$_POST["peso"],$_POST["etapa"],$_POST["fechanacimiento"],$_POST["fechaadquisicion"],$_POST["fasecrecimiento"],$_POST["estadosalud"],$_POST["instalacion"],$_POST["raza"]);
				     if($respuesta=='ok'){
				    	echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Porcino agregado!.</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

				    }else{
				    	echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> el porcino no pudo ser agregado!.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
				    }
			
		}
	}           public function eliminar($id){
		   $respuesta= porcinoModel::eliminar($id);
		   echo  $respuesta;
	}

				public function  contarPorcinos(){
					$respuesta= porcinoModel::contarPorcinos();
					echo  $respuesta;
				}
				public function etapas(){
					$lechon=  porcinoModel::contarLechon();
					$marrano= porcinoModel::contarmarrano();
					$primal= porcinoModel::contarprimal();
					$gordo= porcinoModel::contargordo();
						
						     echo '<input type="hidden" name="" id="lechon" value="'.$lechon.'"> '.
						     '<input type="hidden" name="" id="marrano" value="'.$marrano.'"> '.
						     '<input type="hidden" name="" id="primal" value="'.$primal.'"> '.
						     '<input type="hidden" name="" id="gordo" value="'.$gordo.'"> ';
   	
				}
	   public  function cerdosporrazas(){
	   	   $raza1=porcinoModel::razaDuroc();
	   	   $raza2=porcinoModel::razaHampshire();
	   	   $raza3=porcinoModel::razaDurocHampshire();
	   	   $raza4=porcinoModel::razaLandrace();
	   	   $raza5=porcinoModel::razaPietrain();
	   	   $raza6=porcinoModel::razaYorkshire();
	   	   echo '<input type="hidden" name="" id="duroc" value="'.$raza1.'"> '.
						     '<input type="hidden" name="" id="hampshire" value="'.$raza2.'"> '.
						     '<input type="hidden" name="" id="durochampshire" value="'.$raza3.'"> '.
						     '<input type="hidden" name="" id="landrace" value="'.$raza4.'"> '.
						     '<input type="hidden" name="" id="pietrain" value="'.$raza5.'"> '.
						     '<input type="hidden" name="" id="yorkshire" value="'.$raza6.'"> ';

	   }
public  function cerdosporcrecimiento(){
	   	   $gestacion=porcinoModel::destete();
	   	   $lactancia=porcinoModel::lactancia();
	   	   $destete=porcinoModel::destete();
	   	   $levante=porcinoModel::levante();
	   	   $engorde=porcinoModel::engorde();
	   	  
	   	   echo '<input type="hidden" name="" id="gestacion" value="'.$gestacion.'"> '.
						     '<input type="hidden" name="" id="lactancia" value="'.$lactancia.'"> '.
						     '<input type="hidden" name="" id="destete" value="'.$destete.'"> '.
						     '<input type="hidden" name="" id="levante" value="'.$levante.'"> '.
						     '<input type="hidden" name="" id="engorde" value="'.$engorde.'"> ';

	   }
    public function listarMedi($id){
    	 $tablabody="";
    	 $respuesta=porcinoModel::medicamentoporcerdo($id);

		foreach ($respuesta as $row => $item) {
			$tablabody .= '<tr> 
			<td>'.$item["Nombre"]. '</td>
			<td>'.$item["Fecha"].'</td>
			<td>'.$item["Dosis"].'</td>
			</tr>';
		}
		 echo $tablabody;
    }

public function  listarporcinos(){
           $respuesta=porcinoModel::listarporcinos();
		foreach ($respuesta as $row => $item) {
			$etapa=porcinoModel::etapa($item["Etapa"]);
			$fase=porcinoModel::fase($item["Fase_Crecimiento"]);
			$salud=porcinoModel::salud($item["Estado_salud"]);
			$instalacion=porcinoModel::instalacion($item["Id_Instalacion"]);
			echo '<tr id="'.$item["IdPorcino"].'"> <td>'.$item["IdPorcino"]. '</td><td>'.$item["Sexo"]. '</td><td>'.$item["Peso"].'</td><td>'.$etapa.'</td><td>'.$item["Fecha_Nacimiento"].' </td><td>'.$item["Fecha_Adquisicion"].' </td>
			<td>'.$fase.' </td><td>'.$salud.'</td><td>'.$instalacion.'</td>
			<td><span class="btn btn-warning btn-danger medicamento" data-toggle="modal" data-target="#modalmedicamento"
                         id='.$item["IdPorcino"] .'><span class="fa fa-heartbeat"></span></span></td>

			<td><span class="btn btn-warning btn-sm editarporcino" data-toggle="modal" data-target="#modaleditarporcino"
                         id='.$item["IdPorcino"] .'><span class="fa fa-pencil-square-o"></span></span></td>

			       <td><span class="btn btn-danger btn-sm eliminarporcino" id='.$item["IdPorcino"] .'><span class="fa fa-trash"></span></span></td></tr>';
		}
	}
  public function editar($datos){
  	     $respuesta=porcinoModel::editar($datos);
  	     echo  $respuesta;
  }
	public function porcinos(){
	$respuesta=porcinoModel::listarporcinos();
	foreach ($respuesta as $row => $item){
		echo '<option value="'.$item["IdPorcino"].'">'.$item["IdPorcino"].'</option>';
	}
	}

	public function machos (){
		$respuesta=porcinoModel::listarmachos();
	foreach ($respuesta as $row => $item){
		echo '<option value="'.$item["IdPorcino"].'">'.$item["IdPorcino"].'</option>';
	}
	}

	public function hembras (){
		$respuesta=porcinoModel::listarhembras();
	foreach ($respuesta as $row => $item){
		echo '<option value="'.$item["IdPorcino"].'">'.$item["IdPorcino"].'</option>';
	}
	}

	public function listaretapas(){
		$respuesta=porcinoModel::listaretapas();
		foreach ($respuesta as $key => $value) {	
			echo '<option value="'.$value["Id_Etapa"].'" >'.$value["Etapa"].'</option>';
			
		}
	}

	public function listarfases(){
		$respuesta=porcinoModel::listarfases();
		foreach ($respuesta as $key => $value) {	
			echo '<option value="'.$value["Id_fase"].'" >'.$value["Fase"].'</option>';
			
		}
	}

	public function obtenerDatos($id){
		 $respuesta=porcinoModel::obtenerDatos($id);
		var_dump( $respuesta);
	}

}

   



 ?>