<?php include 'menu.php'; ?>
<script src="vista/js/scripts.js"></script>

  <!-- container section start -->
      
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Partos</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Inicio</a></li>
              <li><i class="fa fa-laptop"></i>Listado de partos</li>
              <li><a href="index.php?action=registroParto"><span class="fa fa-plus"> Agregar informacion de parto <span></span></span></a></li>
            </ol> 
          </div>
          </div>
      
       <div class="row">
         <div class="col-lg-12">
           <table class="table table-hover table-condensed table-striped" id="datatable">
            <thead>
              <tr>
                <td>Fecha</td>
                <td>Momias</td>
                <td>Muertos</td>
                <td>Hijos</td>
              </tr>
            </thead>
             <tbody>
              <?php 
                  $datos= new partoController();
                  $datos->listarPartos();
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