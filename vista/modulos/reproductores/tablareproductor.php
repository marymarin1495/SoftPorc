
 <?php include 'menu.php'; ?>

<script src="vista/js/scripts.js"></script>

 <style type="text/css">
   input{
    padding-left: 40px;
    margin-left: 90px;
   }
 </style>

  <!-- container section start -->
      
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-mars"></i> Reproductores</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php?action=index">Inicio</a></li>
              <li><i class="fa fa-mars"></i>Listado de reproductores</li>
               <li><a href="index.php?action=registroreproductor"><span class="fa fa-plus"> Agrega los reproductores<span></span></span></a></li>
            </ol>
          </div>
          </div>
          <div>
            <h1 class="pipa"></h1>
          </div>


         <div class="row">
<div class="modal fade col-lg-10" id="modaleditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog col-lg-12" role="document" onscroll="false">
    <div class="modal-content " id="acasito"> 
      <div class="modal-header ">
        <h5 class="modal-title" id="exampleModalLabel">Listado de examenes</h5>
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
                <td>Resultado</td>
                <td>Eliminar</td>
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


         <div class="row">
<div class="modal fade col-lg-10" id="modalmodificar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog col-lg-12" role="document" onscroll="false">
    <div class="modal-content " id="acasito"> 
      <div class="modal-header ">
        <h5 class="modal-title" id="exampleModalLabel">Modificar datos de reproductor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body " id="m"  onscroll="false">
         <div class="panel-body  " onscroll="false">
         <div class="">
          <form class="form-validate form-horizontal" id="feedback_form" method="post">
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Conformacion fisica<span class="required">*</span></label>
                      <div class="col-lg-6">
                        <input class="form-control" id="cname" name="conformacion" minlength="5" maxlength="50" type="text" required />
                      </div>
                    </div>
                      <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Reproductoras montadas<span class="required">*</span></label>
                      <div class="col-lg-6">
                        <input class="form-control" id="cname" name="reproductoras" maxlength="3" type="number" required />
                      </div>
                    </div>
                   
                  </form>
         </div>      
       </div>
      </div> <div class=" modal-footer ">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="guardar">Guardar</button>
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
                <td>Id reproductor</td>
                <td>Conformacion fisica</td>
                <td>Reproductoras montadas</td>
                <td>Examenes</td>
                <td>Editar</td>
                <td>eliminar</td>
              </tr>
            </thead>
             <tbody>
              <?php 
                  $datos= new reproductorController();
                  $datos->listarreproductores();
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