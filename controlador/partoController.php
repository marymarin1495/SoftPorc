<?php 
class partoController{

	public function  registrarParto(){
					if (isset($_POST["porcina"])&&isset($_POST["fecha"])
					&&isset($_POST["momias"])&&isset($_POST["muertos"])&&isset($_POST["hijos"])) {
						
 	$respuesta = reproductoraModel::registrarReproductora($_POST["porcina"],$_POST["fecha"],$_POST["momias"],$_POST["muertos"],$_POST["hijos"]);
				   if($respuesta=='ok'){
				    	echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Parto agregado!, Felicidades.</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

				    }else{
				    	echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> parto no pudo ser agregado!.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
				    }
				}
		}
	
	public function  listarPartos(){
           $respuesta=partoModel::listarParto();
		foreach ($respuesta as $row => $item) {
			echo '<tr id="'.$item["IdReproductora"].'"> <td>'.$item["Fecha"]. '</td><td>'.$item["Numero_Momias"].'</td><td>'.$item["Numero_Muertos"].'</td><td>'.$item["Numero_Hijos"].'</td></tr>';
		}
	}

/*
<td>
			       <span class="btn btn-success btn-sm editarempleado" data-toggle="modal" data-target="#modalpartos"
                         id='.$item["IdReproductora"] .'><span class="glyphicon glyphicon-piggy-bank"></span></span>
             </td>
              <td>
			       <span class="btn btn-danger btn-sm editarempleado" data-toggle="modal" data-target="#modalcelos"
                         id='.$item["IdReproductora"] .'><span class="fa fa-heart"></span></span>
             </td>
              <td>
			       <span class="btn btn-warning btn-sm editarempleado" data-toggle="modal" data-target="#modalcelos"
                         id='.$item["IdReproductora"] .'><span class="fa fa-clock-o"></span></span>
             </td>*/

}

   



 ?>