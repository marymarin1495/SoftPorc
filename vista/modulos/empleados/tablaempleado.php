
 <?php include ("menu.php"); ?>

<script src="vista/js/scripts.js"></script>

 

  <!-- container section start -->
      
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-group"></i> Empleados</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php?action=index">Inicio</a></li>
              <li><i class="fa fa-group"></i>Listado de empleados</li>
              <li><a href="index.php?action=registrarempleado"><span class="fa fa-plus"> Agregar tus empleados <span></span></span></a></li>
            </ol>
          </div>
          </div>
          <div>
            <h1 class="pipa"></h1>
          </div>
         
         <div class="row">
<div class="modal fade col-lg-8" id="modaleditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <form class="form-validate form-horizontal" id="feedback_form" method="post">
                    <input type="text" name="idpersona" id="idpersona" hidden="">
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-1">Nombres<span class="required">*</span></label>
                      <div class="col-lg-2">
                        <input class="form-control" id="nombre" name="nombre" maxlength="50" type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-1">Apellidos<span class="required">*</span></label>
                      <div class="col-lg-2">
                        <input class="form-control" id="apellido" name="apellido" maxlength="50" type="text" required />
                      </div>
                    </div>
                      <div class="form-group ">
                      <label for="cname" class="control-label col-lg-1">Documento<span class="required">*</span></label>
                      <div class="col-lg-2">
                        <input class="form-control" id="documento" name="documento" minlength="8" maxlength="10" type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-1">E-Mail <span class="required">*</span></label>
                      <div class="col-lg-3">
                        <input class="form-control " id="email" type="email" name="email" maxlength="50"required />
                      </div>
                    </div>
                     <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-1">Telefono<span class="required">*</span></label>
                      <div class="col-lg-2">
                        <input class="form-control " id="telefono" type="text" name="telefono" maxlength="10" required />
                      </div>
                    </div>
                   
                  </form>
                </div>

              </div>
      </div>
      <center>
      <div class=" modal-footer col-lg-7">
        <button type="button" class="btn btn-secondary " data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary " id="actualizar">Guardar</button>
      </div></center>
    </div>
  </div>
</div></div>
       <div class="row">
         <div class="col-lg-12">
           <table class="table table-hover table-condensed table-striped" id="datatable">
            <thead>
              <tr>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Documento</td>
                <td>Codigo</td>
                <td>Email</td>
                <td>Telefono</td>
                <td>editar</td>
                <td>eliminar</td>
              </tr>
            </thead>
             <tbody>
              <?php 
                  $datos= new empleadoController();
                  $datos->listarpersonas();
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