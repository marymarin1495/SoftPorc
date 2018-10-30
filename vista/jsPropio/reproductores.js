$('.editarreproductor').click(function(){
	idreproductor=$(this).attr('id');
   var mostrarDatos= new FormData();
  mostrarDatos.append("id",idreproductor);
  //console.log(mostrarDatos);
  $.ajax({
    url:"vista/ajax/reproductor.php",
    method: "POST",
    data:mostrarDatos,
    cache:false,
    contentType:false,
    processData:false,
    
    success: function(respuesta){
   $("#examenes").html(respuesta);
             
    }

  });  
});


$(".mofidicarreproductor").click(function(){
idreproductor=$(this).attr('id');

 
  
  var traer= new FormData();
  traer.append("enviarId",idreproductor);
  
  $.ajax({
  	method: "POST",
    url:"vista/ajax/reproductor.php",
    
    data:traer,
    cache:false,
    contentType:false,
    processData:false,
    dataType:"json",
    success: function(respuesta){
    alert(respuesta);
         
       
    }

  });  


});
$('.eliminarreproductor').click(function(){
   idpersona=$(this).attr('id');

  
  console.log(idpersona);
  var eliminar= new FormData();
  eliminar.append("ideliminar",idpersona);
 
  
  $.ajax({
    url:"vista/ajax/reproductor.php",
    method: "POST",
    data:eliminar,
    cache:false,
    contentType:false,
    processData:false,
    
    success: function(respuesta){
 
   console.log('#'+respuesta);
   var a ="#"+ idpersona;
  $(a).remove();


    }

  });  


});

