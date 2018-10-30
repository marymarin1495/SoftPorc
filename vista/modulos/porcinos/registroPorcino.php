 <?php include 'menu.php'; ?>

  <!-- container section start -->
 
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-paw"></i> Porcinos</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php?action=index">Inicio</a></li>
              <li><i class="fa fa-paw"></i>Registrar Porcino</li>
            </ol>
          </div>
        </div>

        
        <!--/.row-->
         <!--/.Empieza el formulario de registro-->
       <div class="alert alert-primary alert-dismissible fade show" role="alert">
  <strong>Bienvenido!</strong> Aqui puedes registrar a los porcinos de tu granja.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div id="respuesta">  </div>
                <?php $emple= new porcinoController();
                    $emple->registrarPorcino();
                 ?>
               <div class="panel-body container">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post">
                     <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Sexo<span class="required">*</span></label>
                      <div class="col-lg-6">
                        <select class="form-control " name="sexo" id="size-select"><option value="M">M</option><option value="F">F</option></select>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Peso<span class="required">*</span></label>
                      <div class="col-lg-6">
                        <input type="number" class="form-control"  name="peso" placeholder="peso" required maxlength="3"  >
                      </div>
                    </div>
                      <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Etapa<span class="required">*</span></label>
                      <div class="col-lg-6">
                        <select class="form-control" name="etapa" id="size-select">
                        <option value="-1">Seleciona la etapa porcino</option>
                        <?php
                        $tipo= new porcinoController();
                        $tipo->listaretapas();
                        ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Fecha nacimiento<span class="required">*</span></label>
                      <div class="col-lg-6">
                        <input class="form-control" type="date" name="fechanacimiento" max="10">
                      </div>
                    </div>
                     <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Fecha adquisicion<span class="required">*</span></label>
                      <div class="col-lg-6">
                        <input class="form-control" type="date" name="fechaadquisicion" max="10" required>
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Fase Crecimiento <span class="required">*</span></label>
                      <div class="col-lg-6">
                        <select class="form-control" name="fasecrecimiento" id="size-select">
                        <option value="-1">Seleciona fase de crecimiento</option>
                        <?php
                        $tipo= new porcinoController();
                        $tipo->listarfases();
                        ?>
                        </select>
                      </div>
                    </div>
                     <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Estado Salud<span class="required">*</span></label>
                      <div class="col-lg-6">
                        <select class="form-control " name="estadosalud" id="size-select"><option value="0">Sano</option><option value="1">Enfermo</option></select>
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Instalacion<span class="required">*</span></label>
                      <div class="col-lg-6">
                        <select class="form-control" id="size-select" name="instalacion"  ><option value="-1">Seleccionar instalacion</option>
                          <?php
                          $inst= new instalacionController();
                             $inst->listarInstalacion();
                             ?>
                        </select> 
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Raza<span class="required">*</span></label>
                      <div class="col-lg-6">
                        <select class="form-control" name="raza" id="size-select">
                        <option value="-1">Seleciona la raza del porcino</option>
                        <?php
                        $tipo= new razaController();
                        $tipo->listarRaza();
                        ?>
                        </select>
                        <a href="index.php?action=registroRazas">Agregar nueva raza</a>
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
        <!-- Today status end -->



       



        <!-- statics end -->




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
           url: "../controlador/porcinoController",                     
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