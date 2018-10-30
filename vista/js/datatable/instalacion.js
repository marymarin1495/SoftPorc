
$('.editarinstalacion').click(function(){
   id=$(this).attr('id');

  
  
  var mostrarDatos= new FormData();
  mostrarDatos.append("enviarid",id);
  //console.log(mostrarDatos);
  $.ajax({
    url:"vista/ajax/datosInstalacion.php",
    method: "POST",
    data:mostrarDatos,
    cache:false,
    contentType:false,
    processData:false,
    dataType:"json",
    success: function(respuesta){
      $('#nombre').val(respuesta["nombre"]);
      $('#capacidad').val(respuesta["capacidad"]);
      $('#tipoinstalacion').val(respuesta["tipoinstalacion"]);
    }

  });  


});
//Actualizar instalacion
$("#actualizar").click(function () {

$.ajax({
          type: "POST",                 
           url: "vista/ajax/actualizarInstalacion.php",                     
          data: $("#feedback_form").serialize(), 
           success: function(data)             
           {
          alertify.alert('Alert Title', 'Instalacion actualizada con exito!', function(){ alertify.success(';Ok')
           });


         
             }});
});

$('.eliminar').click(function(){
   idpersona=$(this).attr('id');

  
  console.log(id);
  var eliminar= new FormData();
  eliminar.append("id",id);
 
  console.log(eliminar);
  $.ajax({
    url:"vista/ajax/datosInstalacion.php",
    method: "POST",
    data:eliminar,
    cache:false,
    contentType:false,
    processData:false,
    
    success: function(respuesta){
 
   console.log('#'+id);
   var a ="#"+ id;
  $(a).remove();
   alertify.dialog('alert').set({transition:'flipx',message: 'Transition effect: flipx'}).show(); 

    }

  });  


});