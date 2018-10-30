
<?php 
if ($_SESSION["rol"] ==2) {
 echo '<script language="javascript">
window.location.href="index.php?action=index";
</script>';
}

 ?>

<?php include 'menu.php'; ?>

  <!-- container section start -->
 
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Medicamentos</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Inicio</a></li>
              <li><i class="fa fa-laptop"></i>Medicamento porcino</li>
            </ol>
          </div>
        </div>

        
        <!--/.row-->
         <!--/.Empiez el formulario de registro-->
       <div class="alert alert-primary alert-dismissible fade show" role="alert">
  <strong>Bienvenido!</strong> Registra los medicamentos de tus porcinos.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div id="respuesta">  </div>

               <div class="panel-body container">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post">
                                    <?php $emple= new medicamentoController();
                                     $emple->registrarMedicamentoPorcino();
                                       ?>
                      <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Id porcino<span class="required">*</span></label>
                       <div class="col-lg-6">
                       <select class="form-control" name="porcino" id="size-select">
                        <option value="-1">Seleciona porcino</option>
                        <?php
                        $tipo= new porcinoController();
                        $tipo->porcinos();
                        ?>
                        </select>
                      </div>
                      
                    </div>
                      <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Medicamento<span class="required">*</span></label>
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
                      <label for="cname" class="control-label col-lg-2">Fecha <span class="required">*</span></label>
                      <div class="col-lg-6">
                        <?php
                          $dia=date("d");
                          $mes=date("m");
                          $anio=date("Y");
                        echo '<input class="form-control" type="date" name="fecha" step="1" min="'.$anio.'-'.$mes.'-'.$dia.'" value="'.$anio.'-'.$mes.'-'.$dia.'">';
                        ?>
                      </div>
                    </div>
                      <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Estado<span class="required">*</span></label>
                       <div class="col-lg-6">
                       <select class="form-control" name="estado" id="size-select">
                        <option value="-1">¿Aplicada?</option>
                        <option value="0">Si</option>
                        <option value="1">No</option>
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
