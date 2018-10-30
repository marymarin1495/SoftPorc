<?php include 'menu.php'; ?>
  <!-- container section start -->
 
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="icon fa-inbox"></i> Artículos</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index">Inicio</a></li>
              <li><i class="icon fa-inbox"></i>Registrar Artículos</li>
            </ol>
          </div>
        </div>

        
        <!--/.row-->
         <!--/.Empiez el formulario de registro-->
       <div class="alert alert-primary alert-dismissible fade show" role="alert">
  <strong>Bienvenido!</strong> Aqui puedes registrar los artículos de tu granja.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div id="respuesta">  </div>
                <?php $emple= new articulosController();
                    $emple->registrarArticulos();
                 ?>
               <div class="panel-body container">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post">
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2" >Nombre<span class="required">*</span></label>
                      <div class="col-lg-6">
                        <input class="form-control" id="cname" name="nombre" minlength="5" maxlength="50" type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Tipo<span class="required">*</span></label>
                      <div class="col-lg-6">
                        <select class="form-control" id="size-select" name="tipoarticulo"  ><option value="-1">Seleccionar tipo articulo</option>
                          <?php
                          $inst= new articulosController();
                             $inst->listarTipoArticulos();
                             ?>
                        </select> 
                      </div>
                    </div>
                      <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Cantidad<span class="required">*</span></label>
                      <div class="col-lg-6">
                        <input class="form-control" id="cname" name="cantidad" minlength="8" maxlength="10" type="number" required />
                      </div>
                    </div>
                   
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Proveedores<span class="required">*</span></label>
                      <div class="col-lg-6">
                       <select class="form-control" id="size-select" name="proveedores"  ><option value="-1">Seleccionar proveedores</option>
                          <?php
                          $inst= new articulosController();
                             $inst->listarProveedores();
                             ?>
                        </select> 
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
           url: "../controlador/articulosController",                     
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

