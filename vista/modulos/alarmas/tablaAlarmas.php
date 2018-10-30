<?php include 'menu.php'; ?>
<script src="vista/js/scripts.js"></script>
  <!-- container section start -->
      
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Alarmas</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php?action=index">Inicio</a></li>
              <li><i class="fa fa-laptop"></i>Listado de alarmas programadas</li>
            </ol>
          </div>
          </div>

       <div class="row">
         <div class="col-lg-12">
           <table class="table table-hover table-condensed table-striped" id="datatable">
            <thead>
              <tr>
                <td>Id Porcino</td>
                <td>Fecha</td>
                <td>Hora</td>
                <td>Asunto</td>
                <td>Eliminar</td>
              </tr>
            </thead>
             <tbody>
              <?php 
                             $datos= new alarmaController();
                             $datos->listarAlarma();
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
      </div>
    </section>
    <!--main content end-->
  </section>

  <!-- container section start -->

  <!-- javascripts -->



