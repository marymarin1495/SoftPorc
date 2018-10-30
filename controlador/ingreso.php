<?php 

 class Ingreso{
 	public function ingresoController(){
 	
 		if (isset($_POST["codigo"])&&isset($_POST["password"])) {
 			# code...
 	
    $datosController=array("codigo"=>$_POST["codigo"],
	"password"=>$_POST["password"]);
      $respuesta= IngresoModels::ingresoModel($datosController);

  if ($_POST["codigo"]==$respuesta["codigo"]&& $_POST["password"]==$respuesta["clave"]) {
  
    $_SESSION["codigo"]=$_POST["codigo"];
   	$_SESSION["nombre"]=$respuesta["nombre"];
    $_SESSION["apellido"] = $respuesta["apellido"];//
    $_SESSION["rol"] = $respuesta["IdTipo"];

    if($_SESSION["rol"] == 1){
      echo '<script language="javascript">
window.location.href="index.php?action=index";
</script>';
}else{

  echo '<script language="javascript">
window.location.href="index.php?action=indexEmpleado";
</script>';
}

     

  } else{
  	echo '<div class="alert alert-danger" role="alert">
  <strong>Oh rayos!</strong> Los datos son invalidos!!!
</div>';
  }
 	}	} 
 }
 ?>