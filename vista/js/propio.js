
$('.editarempleado').click(function(){
   idpersona=$(this).attr('id');

  
  
  var mostrarDatos= new FormData();
  mostrarDatos.append("enviarid",idpersona);
  //console.log(mostrarDatos);
  $.ajax({
    url:"vista/ajax/datos.php",
    method: "POST",
    data:mostrarDatos,
    cache:false,
    contentType:false,
    processData:false,
    dataType:"json",
    success: function(respuesta){
      $('#nombre').val(respuesta["nombre"]);
      $('#apellido').val(respuesta["apellido"]);
      $('#documento').val(respuesta["documento"]);
      $('#codigo').val(respuesta["codigo"]);
      $('#telefono').val(respuesta["telefono"]);
      $('#email').val(respuesta["email"]);

    }

  });  


});
//Actualizar empleado
$("#actualizar").click(function () {

$.ajax({
          type: "POST",                 
           url: "vista/ajax/actualizar.php",                     
          data: $("#feedback_form").serialize(), 
           success: function(data)             
           {
          alertify.alert('Alert Title', 'Empleado actualizado!', function(){ alertify.success(';Ok')
           });


         
             }});
});

$('.eliminar').click(function(){
   idpersona=$(this).attr('id');

  
  console.log(idpersona);
  var eliminar= new FormData();
  eliminar.append("id",idpersona);
 
  console.log(eliminar);
  $.ajax({
    url:"vista/ajax/datos.php",
    method: "POST",
    data:eliminar,
    cache:false,
    contentType:false,
    processData:false,
    
    success: function(respuesta){
 
   console.log('#'+idpersona);
   var a ="#"+ idpersona;
  $(a).remove();
   alertify.dialog('alert').set({transition:'flipx',message: 'Transition effect: flipx'}).show(); 

    }

  });  


});

//Chikenzilla de aqui salen las instalaciones


$('.editarinstalacion').click(function(){
   idinstalacion=$(this).attr('id');

 
 console.log( idinstalacion);
  
  var mostrarDatos= new FormData();
  mostrarDatos.append("puta",idinstalacion);
  //console.log(mostrarDatos);
  $.ajax({
    url:"vista/ajax/datosInsta.php",
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
       $('#idinstalacion').val(respuesta["id"]);
         
       
    }

  });  
 

});

//-------------------------------------------------------------------------------
$("#actualizarinsta").click(function () {
  
$.ajax({
          type: "POST",                 
           url: "vista/ajax/actualizarInstalacion.php",                     
          data: $("#feedback_form").serialize(), 
           success: function(data)             
           {
        if (data) {
            alertify.alert('Alert Title', 'Instalacion actualizada!', function(){ alertify.success('Actualizada')
           });

          } else{
            alert("error");
          }

         
             }});
});

//---------------------------------------------------------------------------------




$('.eliminarinsta').click(function(){
   idpersona=$(this).attr('id');

  
  console.log(idpersona);
  var eliminar= new FormData();
  eliminar.append("id",idpersona);
 
  console.log(eliminar);
  $.ajax({
    url:"vista/ajax/datosInsta.php",
    method: "POST",
    data:eliminar,
    cache:false,
    contentType:false,
    processData:false,
    
    success: function(respuesta){
 
   console.log('#'+idpersona);
   var a ="#"+ idpersona;
  $(a).remove();
  alertify.alert('Alert Title', 'Instalacion eliminada!', function(){}); 

    }

  });  


});

//---------------------------------------------------------------------------------


$("#graficos").click(function(){

   $('#titulo').html('<h4>Cantidad de porcinos por etapa</h4>');

              var a = parseInt($('#lechon').val()) +parseInt($('#marrano').val())+parseInt($('#primal').val())+parseInt($('#gordo').val());

            var lechon= parseInt($('#lechon').val())/a;
            var marrano= parseInt($('#marrano').val())/a;
            var primal= parseInt($('#primal').val())/a;
            var gordo= parseInt($('#gordo').val())/a;
          
             var a1='<table class="table">'+
                '<thead>    <tr> <th>ETAPA</th><th scope="col">Lechon</th> <th scope="col">Marrano</th>'+
                '<th scope="col">Primal</th><th scope="col">Gordo</th> </tr> </thead><tbody> <tr>'+
                '<td></td><td>'+ $('#lechon').val() +'</td>'+
                ' <td>'+ $('#marrano').val() +'</td>'+
                ' <td>'+ $('#primal').val() +'</td>'+
                ' <td>'+ $('#gordo').val() +'</td>'+
                '</tr>'+'<tr> <td> promedio'+'</td>'+' <td> '+ (lechon*100).toFixed(2) +'%</td>'+' <td> '+ (marrano*100).toFixed(2)  +'%</td>'+' <td> '+ (primal*100).toFixed(2)  +'%</td>'+' <td> '+ (gordo*100).toFixed(2) +'%</td></tr>'
                '</tbody></table>';


              $("#tabla").html(a1);
              var a = parseInt($('#lechon').val()) +parseInt($('#marrano').val())+parseInt($('#primal').val())+parseInt($('#gordo').val());
              var promedio

               var datos = {
              type: "pie",
              data : {
                datasets :[{
                  data : [
                   $('#lechon').val(),
                  $('#marrano').val(),
                    $('#primal').val(),
                   $('#gordo').val(),
                   
                  ],
                  backgroundColor: [
                    "#F7464A",
                    "#46BFBD",
                    "#FDB45C",
                    "#949FB1",
                    
                  ],
                }],
                labels : [
                  "lechon",
                  "marrano",
                  "primal",
                  "gordo",
                  
                ]
              },
              options : {
                responsive : true,
              }
            }; 

        var canvas = document.getElementById('chart').getContext('2d');

           window.pie = new Chart(canvas, datos);
             $('#titulito').html('<h4>Cantidad de porcinos por razas</h4>');
              var a = parseInt($('#duroc').val()) +parseInt($('#durochampshire').val())+parseInt($('#hampshire').val())+
                parseInt($('#landrace').val())+parseInt($('#pietrain').val())
               + parseInt($('#yorkshire').val())+parseInt($('#hampshire').val()) ;

            var duroc= parseInt($('#duroc').val())/a;
            var durochampshire= parseInt($('#durochampshire').val())/a;
            var landrace=  parseInt($('#landrace').val())/a;
            var pietrain= parseInt($('#pietrain').val())/a;
            var yorkshire= parseInt($('#yorkshire').val())/a;
            var hampshire= parseInt($('#hampshire').val())/a;
            
               var a1='<table class="table">'+
            '<thead>    <tr> <th>RAZAS</th><th scope="col">duroc</th> <th scope="col">duro,champshire</th>'+
                '<th scope="col">landrace</th><th scope="col">pietrain</th><th scope="col">yorkshire</th><th scope="col">hampshire</th> </tr> </thead><tbody> <tr>'+
              '<td></td><td>'+ $('#duroc').val() +'</td>'+
             ' <td>'+ $('#durochampshire').val() +'</td>'+
             ' <td>'+ $('#landrace').val() +'</td>'+
             ' <td>'+ $('#pietrain').val() +'</td>'+
             ' <td>'+ $('#yorkshire').val() +'</td>'+
             ' <td>'+ $('#hampshire').val() +'</td>'+
            '</tr>'+
            '<tr> <td> promedio'+'</td>'+' <td> '+ (duroc*100).toFixed(2) +'%</td>'+
            ' <td> '+ (durochampshire*100).toFixed(2)  +'%</td>'+
            ' <td> '+ (landrace*100).toFixed(2)  +'%</td>'+
            ' <td> '+  (pietrain*100).toFixed(2) + '%</td>'+
            ' <td> '+  (yorkshire*100).toFixed(2) +'%</td>'+ 
            ' <td> '+  (hampshire*100).toFixed(2) +'%</td></tr>'+
            '</tbody></table>';



          $("#tabla2").html(a1);

          
          
               var datos = {
              type: "pie",
              data : {
                datasets :[{
                  data : [
                  $('#duroc').val(),
                  $('#durochampshire').val(),
                   $('#landrace').val(),
                   $('#pietrain').val(),
                    $('#yorkshire').val(),
                    $('#hampshire').val(),

                   
                  ],
                  backgroundColor: [
                    "#F7464A",
                    "#46BFBD",
                    "#FDB45C",
                    "#949FB1",
                    "#81DAF5",
                     "#0B615E",
                    
                  ],
                }],
                labels : [
                  "duroc",
                  "duro,champshire",
                  "landrace",
                  "pietrain",
                  "yorkshire",
                  "hampshire",

                  
                ]
              },
              options : {
                responsive : true,
              }
            }; 
        var canvas2 = document.getElementById('chart2').getContext('2d');

           window.pie = new Chart(canvas2, datos);

             $('#titulote').html('<h4>Cantidad de porcinos por fase de crecimiento</h4>');
              var a = parseInt($('#gestacion').val()) +parseInt($('#lactancia').val())+parseInt($('#destete').val())+
              parseInt($('#levante').val())+parseInt($('#engorde').val());

          var gestacion= parseInt($('#gestacion').val())/a;
          var lactancia= parseInt($('#lactancia').val())/a;
          var destete=  parseInt($('#destete').val())/a;
          var levante= parseInt($('#levante').val())/a;
          var engorde= parseInt($('#engorde').val())/a;
          
          
             var a1='<table class="table">'+
          '<thead>    <tr> <th>FASE DE CRECIMIENTO</th><th scope="col">gestacion</th> <th scope="col">lactancia</th>'+
              '<th scope="col">destete</th><th scope="col">levante</th><th scope="col">engorde</th> </tr> </thead><tbody> <tr>'+
              '<td></td><td>'+ $('#gestacion').val() +'</td>'+
             ' <td>'+ $('#lactancia').val() +'</td>'+
             ' <td>'+ $('#destete').val() +'</td>'+
             ' <td>'+ $('#levante').val() +'</td>'+
             ' <td>'+ $('#engorde').val() +'</td>'+
           
            '</tr>'+
            '<tr> <td> promedio'+'</td>'+' <td> '+ (gestacion*100).toFixed(2) +'%</td>'+
            ' <td> '+ (lactancia*100).toFixed(2)  +'%</td>'+
            ' <td> '+ (destete*100).toFixed(2)  +'%</td>'+
            ' <td> '+  (levante*100).toFixed(2) + '%</td>'+
            ' <td> '+  (engorde*100).toFixed(2) +'%</td>'+ 
           '</tr>'+
            '</tbody></table>';
          $("#tabla3").html(a1);

          


               var datos = {
              type: "pie",
              data : {
                datasets :[{
                  data : [
                  $('#gestacion').val(),
                  $('#lactancia').val(),
                   $('#destete').val(),
                   $('#levante').val(),
                    $('#engorde').val(),
                    

                   
                  ],
                  backgroundColor: [
                    "#F7464A",
                    "#46BFBD",
                    "#FDB45C",
                    "#949FB1",
                    "#81DAF5",
                     
                    
                  ],
                }],
                labels : [
                  "gestacion",
                  "lactancia",
                  "destete",
                  "levante",
                  "engorde",
                  

                  
                ]
              },
              options : {
                responsive : true,
              }
            }; 
        var canvas3= document.getElementById('chart3').getContext('2d');
            window.pie = new Chart(canvas3, datos);

});



















