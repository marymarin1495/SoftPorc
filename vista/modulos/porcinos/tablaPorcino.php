
 <?php include 'menu.php'; ?>

<script src="vista/js/scripts.js"></script>
 <?include ("modelo/examenModel.php"); ?>

 

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
              <li><i class="fa fa-paw"></i>Listado de porcinos</li>
            </ol>
          </div>
          </div>
          <div>
            <h1 class="pipa"></h1>
          </div>
         <div class="row">
<div class="modal fade col-lg-8" id="modaleditarporcino" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog col-lg-12" role="document" onscroll="false">
    
    <div class="modal-content col-lg-12">
      <div class="modal-header col-lg-12">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar datos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body "  onscroll="false">
         <div class="panel-body container " >
                <div class="form ">
                 <form class="form-validate form-horizontal " id="feedback_form" method="post">
                    <input type="text" name="idporcino" id="idporcino" hidden="">
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-1">Peso<span class="required">*</span></label>
                      <div class="col-lg-3">
                        <input type="text" class="form-control"   id="peso" name="peso" placeholder="peso" required maxlength="3" pattern="[0-9]{1,3}" >
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-1">Etapa<span class="required">*</span></label>
                      <div class="col-lg-3">
                        <select class="form-control" name="etapa" id="size-select etapa">
                        <option value="-1">Seleciona la etapa porcino</option>
                        <?php
                        $tipo= new porcinoController();
                        $tipo->listaretapas();
                        ?>
                        </select>
                      </div>
                    </div>
                      <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-1">Fase Crecimiento <span class="required">*</span></label>
                      <div class="col-lg-3">
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
                      <label for="cemail" class="control-label col-lg-1">Estado Salud<span class="required">*</span></label>
                      <div class="col-lg-3">
                        <select class="form-control " name="estadosalud" id="size-select"><option value="0">Sano</option><option value="1">Enfermo</option></select>
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-1">Instalacion<span class="required">*</span></label>
                      <div class="col-lg-3">
                        <select class="form-control" id="size-select" name="instalacion"  ><option value="-1">Seleccionar instalacion</option>
                          <?php
                          $inst= new instalacionController();
                             $inst->listarInstalacion();
                             ?>
                        </select> 
                      </div>
                    </div>
                   <div class="form-group ">
                    <a href="index.php?action=medicamentoPorcino" class="logo">Agregar medicamento</a>
                    </div>
                  </form>
                </div>

              </div>
      </div>
      <center>
      <div class=" modal-footer col-lg-7">
        <button type="button" class="btn btn-secondary " data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary " id="guardarporcino">Guardar</button>
      </div></center>
    </div>
  </div>
</div>
</div>

       <div class="row">
         <div class="col-lg-12">
           <table class="table table-hover table-condensed table-striped" id="datatable">
            <thead>
              <tr>
                <td>Id Porcino</td>
                <td>Sexo</td>
                <td>Peso</td>
                <td>Etapa</td>
                <td>Fecha Nacimiento</td>
                <td>Fecha Aduisicion</td>
                <td>Fase Crecimiento</td>
                <td>Estado Salud</td>
                <td>Instalacion</td>
                <td>Medicamentos</td>
                <td>editar</td>
                <td>eliminar</td>
              </tr>
            </thead>
             <tbody>
              <?php 
                  $datos= new porcinoController();
                  $datos->listarporcinos();
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
  <div class="row">
<div class="modal fade col-lg-8" id="modaleditarporcino" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog col-lg-12" role="document" onscroll="false">
    
    <div class="modal-content col-lg-12">
      <div class="modal-header col-lg-12">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar datos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body "  onscroll="false">
         <div class="panel-body container " >
                <div class="form ">
                 <form class="form-validate form-horizontal " id="feedback_form" method="post">
                    <input type="text" name="idporcino" id="idporcino" hidden="">
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-1">Peso<span class="required">*</span></label>
                      <div class="col-lg-3">
                        <input type="text" class="form-control"   id="peso" name="peso" placeholder="peso" required maxlength="3" pattern="[0-9]{1,3}" >
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-1">Etapa<span class="required">*</span></label>
                      <div class="col-lg-3">
                        <select class="form-control" name="etapa" id="size-select etapa">
                        <option value="-1">Seleciona la etapa porcino</option>
                        <?php
                        $tipo= new porcinoController();
                        $tipo->listaretapas();
                        ?>
                        </select>
                      </div>
                    </div>
                      <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-1">Fase Crecimiento <span class="required">*</span></label>
                      <div class="col-lg-3">
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
                      <label for="cemail" class="control-label col-lg-1">Estado Salud<span class="required">*</span></label>
                      <div class="col-lg-3">
                        <select class="form-control " name="estadosalud" id="size-select"><option value="0">Sano</option><option value="1">Enfermo</option></select>
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-1">Instalacion<span class="required">*</span></label>
                      <div class="col-lg-3">
                        <select class="form-control" id="size-select" name="instalacion"  ><option value="-1">Seleccionar instalacion</option>
                          <?php
                          $inst= new instalacionController();
                             $inst->listarInstalacion();
                             ?>
                        </select> 
                      </div>
                    </div>
                  
                   <div class="form-group ">
                      <?php if ($_SESSION["rol"]==1) { ?>
                    <a href="index.php?action=medicamentoPorcino" class="logo">Agregar medicamento</a>
                     <?php } ?>
                    </div>
                   
                  </form>
                </div>

              </div>
      </div>
      <center>
      <div class=" modal-footer col-lg-7">
        <button type="button" class="btn btn-secondary " data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary " id="guardarporcino">Guardar</button>
      </div></center>
    </div>
  </div>
</div>
</div>

         <div class="row">
<div class="modal fade col-lg-10" id="modalmedicamento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog col-lg-12" role="document" onscroll="false">
    <div class="modal-content " id="acasito"> 
      <div class="modal-header ">
        <h5 class="modal-title" id="exampleModalLabel">Listado de medicamentos aplicados</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body " id="m"  onscroll="false">
         <div class="panel-body  " onscroll="false">
         <div class="">
           <table class="table table-hover table-condensed table-striped" id="datatable">
            <thead>
              <tr>
                <td>Nombre</td>
                <td>Fecha</td>
                
                <td>Dosis</td>
              </tr>
            </thead>
             <tbody id="examenes" >
                     
             </tbody>
           </table>
         </div>      
       </div>
      </div>
    </div>
  </div>
</div>
</div>