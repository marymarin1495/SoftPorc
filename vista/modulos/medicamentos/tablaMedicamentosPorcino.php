<?php include 'menu.php'; ?>
<script src="vista/js/scripts.js"></script>

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
              <li><i class="fa fa-laptop"></i>Listado de medicamentos</li>
            </ol> 
          </div>
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
                    
                    <input type="text" name="idinstalacion" id="idinstalacion" hidden="">
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
                <td>Medicamento</td>
                <td>Fecha</td>
                <td>Estado</td>
                <td>Editar</td>
              </tr>
            </thead>
             <tbody>
              <?php 
                  $datos= new medicamentoController();
                  $datos->medicamentoPorcino();
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