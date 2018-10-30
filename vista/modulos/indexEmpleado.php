
 
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
                  <a href="index.php?action=indexEmpleado" class="logo"><strong>Bienvenido</strong> <?php 
                            echo $_SESSION["nombre"]; ?></a>
                  <ul class="icons">
                    <li><a href="index.php?action=tablareproductor" class="icon fa-mars" title = "Listar Reproductores"><span class="label">Reproductores</span></a></li>
                    <li><a href="index.php?action=tablareproductoras" class="icon fa-venus" title = "Listar Reproductoras"><span class="label">Reproductoras</span></a></li>
                  </ul>
                </header>

              <!-- Section -->
               <section>
                  <div class="posts">
                    <article>
                      <a href="#" class="image"><img src="vista/img/pic01.jpg" alt="" /></a>
                      <h3>Articulos</h3>
                      <p>Modificar la disponibilidad de los articulos que estan en la granja.</p>
                      <ul class="actions">
                        <li><a href="index.php?action=tablaArticulos" class="button">Articulos</a></li>
                      </ul>
                    </article>
                    <article>
                      <a href="#" class="image"><img src="vista/img/pic02.jpg" alt="" /></a>
                      <h3>Alarmas</h3>
                      <p>Administra tus alarmas.</p>
                      <ul class="actions">
                        <li><a href="index.php?action=tablaAlarmas" class="button">Alarmas</a></li>
                      </ul>
                    </article>
                    <article>
                      <a href="#" class="image"><img src="vista/img/pic03.jpg" alt="" /></a>
                      <h3>Reproductores</h3>
                      <p>Mira como estan los reproductores.</p>
                      <ul class="actions">
                        <li><a href="index.php?action=tablareproductor" class="button">Reproductores</a></li>
                      </ul>
                    </article>
                    <article>
                      <a href="#" class="image"><img src="vista/img/pic04.jpg" alt="" /></a>
                      <h3>Reproductoras</h3>
                      <p>Haz seguimiento a las reproductoras.</p>
                      <ul class="actions">
                        <li><a href="index.php?action=tablareproductoras" class="button">Reproductoras</a></li>
                      </ul>
                    </article>
                  </div>
                </section>
            </div>
          </div>

      </div>
</section>
    <!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/browser.min.js"></script>
      <script src="assets/js/breakpoints.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>