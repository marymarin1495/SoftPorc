
 <?php include 'menu.php'; ?>
    <!-- Wrapper -->
<section id="main-content">
 
 <br><br><br>
      <div id="wrapper">

        <!-- Main -->
          <div id="main">
            <div class="inner">

              <!-- Header -->
                <header id="header">
                  <a href="index.html" class="logo"><strong>Bienvenido </strong>Administrador </a>
                  <ul class="icons">
                    <li><a href="index.php?action=tablaempleado" class="icon fa-group" title ="Lista de empleados"><span class="label"  >Empleados</span></a></li>
                    <li><a href="index.php?action=tablaRazas" class="icon fa-adjust" title ="Lista de Razas"><span class="label">Razas</span></a></li>
                    <li><a href="index.php?action=tablaMedicamentos" class="icon fa-medkit" title = "Lista de medicamentos"><span class="label">Medicamentos</span></a></li>
                    <li><a href="index.php?action=tablaInstalacion" class="icon fa-map-marker" title = "Lista de Instalaciones"><span class="label">Instalaciones</span></a></li>
                    <li><a href="index.php?action=tablaExamen" class="icon fa-folder-open-o" title ="Lista de Examenes"><span class="label">Examenes</span></a></li>
                  </ul>
                </header>

              <!-- Section -->
                <section>
                  <div class="features">
                    <article>
                      <span class="icon fa-group"></span>
                      <div class="content">
                        <h3><?php $a= new empleadoController(); $a->contarEmpleado(); ?> Empleados </h3>
                        <a href="index.php?action=tablaempleado"><p>Administra todos los empledos de tu granja.</p></a>
                      </div>
                    </article>
                    <article>
                      <span class="icon fa-map-marker"></span>
                      <div class="content">
                        <h3><?php $a= new instalacionController(); $a->contarinstalaciones(); ?> Instalaciones</h3>
                        <a href="index.php?action=tablaInstalacion"><p>Administra las instalaciones de tu granja.</p></a>
                      </div>
                    </article>
                    <article>
                      <span class="icon fa-paw"></span>
                      <div class="content">
                        <h3><?php $a= new porcinoController(); $a->contarPorcinos(); ?> Porcinos</h3>
                        <a href="index.php?action=tablaPorcino">
                        <p>Administra el ganado porcino en tu granja.</p></a>
                      </div>
                    </article>
                    <article>
                      <span class="icon fa-inbox"></span>
                      <div class="content">
                        <h3><?php $a= new articulosController(); $a->getNumeroArticulos(); ?> Articulos</h3>
                        <a href="index.php?action=tablaArticulos"><p>Revisa la existencia de los articulos</p></a>
                      </div>
                    </article>
                  </div>
                </section>

              <!-- Section -->
                <section >
              <input type="submit" name="mostrar" value="Informes" id="graficos">
          
          <div class="row">
            <div class="col-lg-6" id="tabla">
               
            </div>
            <div class="col-lg-6">
<div id="canvas-container" style="width: 50%;">
  <div id="titulo">
    
  </div>
  <canvas id="chart" width="500" height="300">
    

  </canvas>
</div>            </div>
          </div>
         
           <div class="row">
            <div class="col-lg-6" id="tabla2">
               
            </div>
            <div class="col-lg-6">
<div id="canvas-container" style="width: 50%;">
  <div id="titulito">
   
  </div>
  <canvas id="chart2" width="500" height="300">
    

  </canvas>
</div>            </div>
          </div>
          <div class="row">
            <div class="col-lg-6" id="tabla3">
               
            </div>
            <div class="col-lg-6">
<div id="canvas-container" style="width: 50%;">
  <div id="titulote">
   
  </div>
  <canvas id="chart3" width="500" height="300">
    

  </canvas>
</div>            </div>
          </div>

          <?php 
          $a=new porcinoController();
            $a->etapas();
           ?>

          <?php 
          $a2=new porcinoController();
            $a2->cerdosporrazas();
           ?>

          <?php 
          $a3=new porcinoController();
            $a3->cerdosporcrecimiento();
           ?>
</section>
    <!-- Scripts -->
      <script src="vista/assets/js/jquery.min.js"></script>
      <script src="vista/assets/js/browser.min.js"></script>
      <script src="vista/assets/js/breakpoints.min.js"></script>
      <script src="vista/assets/js/util.js"></script>
      <script src="vista/assets/js/main.js"></script>