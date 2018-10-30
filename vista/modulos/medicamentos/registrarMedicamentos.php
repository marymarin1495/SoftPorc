<?php include 'menu.php'; ?>

  <!-- container section start -->
 
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-medkit"></i> Medicamentos</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Inicio</a></li>
              <li><i class="fa fa-medkit"></i>Registrar Medicamentos</li>
            </ol>
          </div>
        </div>

        
        <!--/.row-->
         <!--/.Empiez el formulario de registro-->
       <div class="alert alert-primary alert-dismissible fade show" role="alert">
  <strong>Bienvenido!</strong> Registra los medicamentos de tu granja.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div id="respuesta">  </div>

               <div class="panel-body container">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post">
                                    <?php $emple= new medicamentoController();
                                     $emple->registrarMedicamento();
                                       ?>
                      <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Tipo Medicamento<span class="required">*</span></label>
                       <div class="col-lg-6">
                       <select class="form-control" name="tipo" id="size-select">
                        <option value="-1">Seleciona el tipo de medicamento</option>
                        <?php
                        $tipo= new medicamentoController();
                        $tipo->listarTipos();
                        ?>
                        </select>
                      </div>
                      
                    </div>
                     <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Nombre<span class="required">*</span></label>
                      <div class="col-lg-6">
                        <input class="form-control" id="name" name="nombre" minlength="5" type="text" required />
                      </div>
                    </div>
                     <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Dosis<span class="required">*</span></label>
                      <div class="col-lg-6">
                        <input class="form-control" id="name" name="dosis" minlength="1" type="number" required />
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
           url: "../controlador/medicamentoController.php",                     
           cache: false,
              contentType: false,
           processData: false,
           data: $("#feedback_form").serialize(), 
           success: function(data)             
           {
            var html="<h1>" + data + "</h1>";
             $('#respuesta').html(data); 
             

       });
    });
</script>
