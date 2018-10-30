<?php include 'menu.php'; ?>
<script src="vista/js/scripts.js"></script>

  <!-- container section start -->
      
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-folder-open-o"></i> Examenes</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Inicio</a></li>
              <li><i class="fa fa-folder-open-o"></i>Listado de examenes</li>
              <li><a href="index.php?action=registroExamen"><span class="fa fa-plus"> Agrega los examenes<span></span></span></a></li>
            </ol> 
          </div>
          </div>
      
       <div class="row">
         <div class="col-lg-12">
           <table class="table table-hover table-condensed table-striped" id="datatable">
            <thead>
              <tr>
                <td>Nombre</td>
                <td>Fecha</td>
                <td>Resultado</td>
              </tr>
            </thead>
             <tbody>
              <?php 
                  $datos= new examenController();
                  $datos->listarexamenes();
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