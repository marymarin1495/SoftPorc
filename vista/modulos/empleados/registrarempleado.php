
 <?php include 'menu.php'; ?>
 <?include ("modelo/empleadoModel.php"); ?>

  <!-- container section start -->
 
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-group"></i> Empleados</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index">Inicio</a></li>
              <li><i class="fa fa-group"></i>Registrar empleados</li>
            </ol>
          </div>
        </div>

        
        <!--/.row-->
         <!--/.Empiez el formulario de registro-->
       <div class="alert alert-primary alert-dismissible fade show" role="alert">
  <strong>Bienvenido!</strong> Aqui puedes registrar al empleado de tu granja.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div id="respuesta">  </div>
                <?php $emple= new empleadoController();
                    $emple->registrarEmpleado();
                 ?>
               <div class="panel-body container">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post">
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2" >Nombre<span class="required">*</span></label>
                      <div class="col-lg-6">
                        <input class="form-control" id="cname" name="nombre" minlength="3" maxlength="50" type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Apellido<span class="required">*</span></label>
                      <div class="col-lg-6">
                        <input class="form-control" id="cname" name="apellido" minlength="3" maxlength="50" type="text" required />
                      </div>
                    </div>
                      <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Documento<span class="required">*</span></label>
                      <div class="col-lg-6">
                        <input class="form-control" type="text" id="cname" name="documento" minlength="8" maxlength="10"   required />
                      </div>
                    </div>
                   
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">E-Mail <span class="required">*</span></label>
                      <div class="col-lg-6">
                        <input class="form-control " id="email" type="email" name="email" required />
                      </div>
                    </div>
                     <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Telefono<span class="required">*</span></label>
                      <div class="col-lg-6">
                        <input class="form-control" id="telefono" name="telefono" minlength="7" maxlength="10" type="tel" required />
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Instalacion<span class="required">*</span></label>
                      <div class="col-lg-6">
                        <select class="form-control" id="size-select" name="instalacion"  ><option value="-1">Seleccionar instalacion</option>
                          <?php
                          $inst= new instalacionController();
                             $inst->listarInstalacion();
                             ?>
                        </select> 
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit" id="guardar">Registrar</button>
                        <button class="btn btn-default" type="button" onclick="Limpiar();" >Limpiar Campos</button>
                      </div>
                    </div>
                  </form>
                </div>

              </div>
                  </div>
                </div>
              </div>
        <!-- project team & activity start -->
        <br><br>

        
        <!-- project team & activity end -->

      </section>
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
 
<script type="text/javascript">$('.alert').alert()</script>
<script type="text/javascript">
  
   $('#guardar').click(function(){
      
        $.ajax({                        
           type: "POST",                 
           url: "../controlador/empleadoController",                     
           cache: false,
              contentType: false,
           processData: false,
           data: $("#formulario").serialize(), 
           success: function(data)             
           {
            var html="<h1>" + data + "</h1>";
             $('#respuesta').html(data); 
             

       });
    });
</script>
<script type="text/javascript">
function Limpiar() {
var t = document.getElementById("feedback_form").getElementsByTagName("input");

for (var i=0; i<t.length; i++) {
    t[i].value = "";
    }

    $("#size-select").val('-1');
}



</script>

