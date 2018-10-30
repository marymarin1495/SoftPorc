<?php include 'menu.php'; ?>

<script src="vista/js/scripts.js"></script>

 

  <!-- container section start -->
      
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="icon fa-inbox"></i> Artículos</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php?action=index">Inicio</a></li>
              <li><i class="icon fa-inbox"></i>Listado de artículos</li>
              <li><a href="index.php?action=registroArticulos"><span class="fa fa-plus"> Agrega los articulos de tu granja<span></span></span></a></li>
            </ol>
          </div>
          </div>
          <div>
            <h1 class="pipa"></h1>
          </div>
         
         <div class="row">
<div class="modal fade col-lg-10" id="modaleditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog col-lg-7 " role="document" onscroll="false">
    <div class="modal-content ">
      <div class="modal-header ">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar datos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"  onscroll="false">
         <div class="panel-body container " onscroll="false">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post">
                    <input type="text" name="idpersona" id="idpersona" hidden="">
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Nombre<span class="required">*</span></label>
                      <div class="col-lg-6">
                        <input class="form-control" id="nombre" name="nombre" maxlength="50" type="text" required />
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
                        <input class="form-control" id="documento" name="cantidad" minlength="8" maxlength="10" type="number" required />
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
                   
                  </form>
                </div>

              </div>
      </div>
      <div class=" modal-footer ">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="actualizar">Guardar</button>
      </div>
    </div>
  </div>
</div>
</div>

       <div class="row">
         <div class="col-lg-12">
           <table class="table table-hover table-condensed table-striped" id="datatable">
            <thead>
              <tr>
                <td>Nombre</td>
                <td>Tipo</td>
                <td>Cantidad</td>
                <td>Proveedor</td>
                <td>Instalacion</td>
                <td>editar</td>
                <td>eliminar</td>
              </tr>
            </thead>
             <tbody>
              <?php 
                  $datos= new articulosController();
                  $datos->listarArticulos();
               ?>
                
             </tbody>
           </table>
         </div>

       </div>

        <!-- Today status end -->




       <style type="text/css">
     html { overflow-y:hidden; }
       </style>



        <!-- statics end -->




        <!-- project team & activity start -->
        <br><br>

        
        <!-- project team & activity end -->

      </section>
    </section>
    <!--main content end-->
  </section>