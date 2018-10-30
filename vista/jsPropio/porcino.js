$(".eliminarporcino").click(function(){
 idporcino=$(this).attr('id');

  
  var eliminar= new FormData();
  eliminar.append("ideliminar",idporcino);
 
  $.ajax({
    url:"vista/ajax/porcino.php",
    method: "POST",
    data:eliminar,
    cache:false,
    contentType:false,
    processData:false,
    
    success: function(respuesta){
 
  
   var a ="#"+ idporcino;
  $(a).remove();
   alertify.dialog('alert').set({transition:'flipx',message: 'Porcino eliminado'}).show(); 

    }

  }); 
});

$('.editarporcino').click(function(){
   idporcino=$(this).attr('id');
 $("#idporcino").val(idporcino);
});

$('#guardarporcino').click(function(){
alert("asdas");
$.ajax({
    url:"vista/ajax/porcino.php",
    method: "POST",
    data:$("#feedback_form").serialize(),
    cache:false,
    contentType:false,
    processData:false,
    
    success: function(respuesta){
 
  
 alert(respuesta);
}
  });

});
$('.medicamento').click(function(){
	idreproductor=$(this).attr('id');
   var mostrarDatos= new FormData();
  mostrarDatos.append("id",idreproductor);
  //console.log(mostrarDatos);
  $.ajax({
    url:"vista/ajax/porcino.php",
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

