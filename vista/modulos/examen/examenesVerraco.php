<?php include 'menu.php'; ?>

  <!-- container section start -->
 
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-folder-open-o"></i> Examen</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Inicio</a></li>
              <li><i class="fa fa-folder-open-o"></i>Registro de examenes</li>
            </ol>
          </div>
        </div>

        
        <!--/.row-->
         <!--/.Empiez el formulario de registro-->
       <div class="alert alert-primary alert-dismissible fade show" role="alert">
  <strong>Bienvenido!</strong> Aqui puedes registrar los examenes del verraco.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div id="respuesta">  </div>
                <?php $emple= new examenController();
                    $emple->registrarExamen();
                 ?>
               <div class="panel-body container">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post">
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Id Porcino<span class="required">*</span></label>
                      <div class="col-lg-6">
                        <select class="form-control " id="size-select" name="porcino"><option value="-1">Seleciona el porcino</option>
                           <?php
                          $inst= new porcinoController();
                             $inst->porcinos();
                             ?>
                        </select> 
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Nombre<span class="required">*</span></label>
                      <div class="col-lg-6">
                        <select class="form-control " id="size-select" name="examen"><option value="-1">Seleciona nombre de examen</option>
                           <?php
                          $inst= new examenController();
                             $inst->listarTipo();
                             ?>
                        </select>
                        <a href="index.php?action=examenesVerraco">Agregar nuevo tipo de examen</a> 
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Fecha <span class="required">*</span></label>
                      <div class="col-lg-6">
                        <?php
                          $dia=date("d");
                          $mes=date("m");
                          $anio=date("Y");
                        echo '<input class="form-control" type="date" name="fecha" step="1" max="'.$anio.'-'.$mes.'-'.$dia.'" value="'.$anio.'-'.$mes.'-'.$dia.'">';
                        ?>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Resultado<span class="required">*</span></label>
                      <div class="col-lg-6">
                        <input class="form-control" id="cname" name="resultado" maxlength="100" type="text" required />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit" id="guardar">Guardar</button>
                        <button class="btn btn-default" type="button">Cancelar</button>
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
           url: "../controlador/examenController",                     
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

