<?php include 'menu.php'; ?>
<script src="vista/js/scripts.js"></script>

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
              <li><i class="fa fa-medkit"></i>Listado de medicamentos</li>
              <li><a href="index.php?action=registrarMedicamentos"><span class="fa fa-plus"> Agrega los medicamentos de tu granja <span></span></span></a></li>
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
                <td>Tipo medicamento</td>
                <td>Nombre</td>
                <td>Dosis</td>
                <td>editar</td>
                <td>eliminar</td>
              </tr>
            </thead>
             <tbody>
              <?php 
                  $datos= new medicamentoController();
                  $datos->listarTiposMedicamentos();
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