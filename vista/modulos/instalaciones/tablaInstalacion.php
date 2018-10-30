<?php include 'menu.php'; ?>
<script src="vista/js/scripts.js"></script>

  <!-- container section start -->
      
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-map-marker"></i> Instalaciones</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Inicio</a></li>
              <li><i class="fa fa-map-marker"></i>Listado de instalaciones</li>
              <li><a href="index.php?action=registrarInstalacion"><span class="fa fa-plus"> Agrega tus instalaciones<span></span></span></a></li>
            </ol> 
          </div>
          </div>
         <div class="row">

<div class="modal fade col-lg-11" id="modaleditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog col-lg-5 " role="document" onscroll="false">
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
                    
                    <input type="text" name="idinstalacion" id="idinstalacion" hidden="">
                    <div class="form-group">
                      <label for="cname" class="control-label col-lg-1">Nombre<span class="required">*</span></label>
                      <div class="col-lg-3">
                        <input class="form-control" id="nombre" name="nombre" minlength="10" maxlength="50" type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-1">Capacidad<span class="required">*</span></label>
                      <div class="col-lg-3">
                        <input type="text" class="form-control" id="capacidad" name="capacidad" placeholder="Capacidad" required maxlength="3" pattern="[0-9]{1,3}" >
                      </div>
                    </div>
                      <div class="form-group  ">
                      <label for="cname" class="control-label col-lg-1">Tipo Instalacion<span class="required">*</span></label>
                      <div class="col-lg-3">

                        <select class="form-control" id="tipoinstalacion" name="tipoinstalacion" id="size-select" >
                        <option value="-1">Seleciona el tipo de instalacion</option>
                        <?php
                        $tipo= new instalacionController();
                        $tipo->listarTipos();
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
        <button type="button" class="btn btn-primary" id="actualizarinsta">Guardar</button>
      </div>
    </div>
  </div>
</div></div>
      
       <div class="row">
         <div class="col-lg-12">
           <table class="table table-hover table-condensed table-striped" id="datatable">
            <thead>
              <tr>
                <td>Nombre</td>
                <td>Capacidad</td>
                <td>Tipo instalacion</td>
                <td>editar</td>
                <td>eliminar</td>
              </tr>
            </thead>
             <tbody>
              <?php 
                  $datos= new instalacionController();
                  $datos->listarInstalaciones();
               ?>
                
             </tbody>
           </table>
         </div>
       </div>
       <style type="text/css">
     html { overflow-y:hidden; }
       </style>
        <br><br>
      </section>
    </section>
    <!--main content end-->
  </section> 