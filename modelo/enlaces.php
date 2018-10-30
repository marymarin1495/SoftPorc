<?php 
 class EnlacesPaginas{
 	public function enlacesPaginasModel($enlace){
  if($enlace == "recuperarpassword"){
        $module = "vista/modulos/".$enlace.".php";
        return $module;
  }else if ($enlace=="index"||$enlace=="login"||$enlace=="cerrar"||$enlace=="indexEmpleado") {
  	$module="vista/modulos/".$enlace.".php";
  	return $module;
  
  }else if($enlace=="registrarempleado"||$enlace=="tablaempleado"){
  	  	$module="vista/modulos/empleados/".$enlace.".php";
  	return $module;
  
  }else if($enlace == "registrarInstalacion" || $enlace == "tablaInstalacion"){
  	 return "vista/modulos/instalaciones/".$enlace.".php";

  }else if($enlace == "registroPorcino" || $enlace == "tablaPorcino"){
  	 return "vista/modulos/porcinos/".$enlace.".php";
 
  }else if ($enlace == "registroRazas" || $enlace == "tablaRazas") {
    return "vista/modulos/razas/".$enlace.".php";
  
  }else if ($enlace == "registroAlarma" || $enlace == "tablaAlarmas") {
    return "vista/modulos/alarmas/".$enlace.".php";
  
  }else if($enlace == "registroreproductor" || $enlace == "tablareproductor"){
    return "vista/modulos/reproductores/".$enlace.".php";
  
  }else if ($enlace == "registroreproductora" || $enlace == "tablareproductoras"){

    return "vista/modulos/reproductoras/".$enlace.".php";
  
  }else if($enlace == "registroArticulos" || $enlace == "tablaArticulos"){

    return "vista/modulos/articulos/".$enlace.".php";
  
  }else if ($enlace == "registroExamen" || $enlace == "tablaExamen"|| $enlace == "examenesVerraco"|| $enlace == "examenes") {
    
    return "vista/modulos/examen/".$enlace.".php";
  
  }else if ($enlace == "registrarMedicamentos" || $enlace == "tablaMedicamentos"|| $enlace == "medicamentoPorcino"|| $enlace == "tablaMedicamentosPorcino"){
    return "vista/modulos/medicamentos/".$enlace.".php";
  
  }else if($enlace == "registroParto"|| $enlace == "tablaParto"){
     return "vista/modulos/partos/".$enlace.".php";
  
  }else if($enlace == "registroCelo"|| $enlace == "tablaCelo"){
     return "vista/modulos/celos/".$enlace.".php";
  
  }else if($enlace == "registroGestacion"|| $enlace == "tablaGestacion"){
     return "vista/modulos/Gestacion/".$enlace.".php";
  
  }

 	}
 }

 ?>