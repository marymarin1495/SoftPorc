<?php include 'menu.php'; ?>

  <!-- container section start -->
 
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-venus"></i> Reproductoras</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index">Inicio</a></li>
              <li><i class="fa fa-venus"></i>Registrar Reproductora</li>
            </ol>
          </div>
        </div>

        
        <!--/.row-->
         <!--/.Empiez el formulario de registro-->
       <div class="alert alert-primary alert-dismissible fade show" role="alert">
  <strong>Bienvenido!</strong> Aqui puedes registrar a las reproductoras de la granja.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div id="respuesta">  </div>
                <?php $emple= new reproductoraController();
                    $emple->registrarReproductora();
                 ?>
               <div class="panel-body container">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post">
                    
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Id reproductora<span class="required">*</span></label>
                      <div class="col-lg-6">
                        <select class="form-control " id="size-select" name="porcina"><option value="-1">Seleciona el porcino</option>
                           <?php
                          $inst= new porcinoController();
                             $inst->hembras();
                             ?>
                        </select>
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Nulipara<span class="required">*</span></label>
                      <div class="col-lg-6">
                         <select class="form-control " id="size-select" name="nulipara"><option value="-1">¿Nulipara?</option>
                          <option value="0">Si</option>
                          <option value="1">No</option>
                        </select>
                      </div>
                    </div>
                      <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Reproductor <span class="required">*</span></label>
                      <div class="col-lg-6">
                        <select class="form-control " id="size-select" name="porcino"><option value="-1">Seleciona el porcino</option>
                           <?php
                          $inst= new porcinoController();
                             $inst->machos();
                             ?>
                        </select>
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
           url: "../controlador/reproductorController",                     
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

