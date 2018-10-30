
  
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <?php if($_SESSION["rol"]==1){
        echo '<a href="index.php?action=index"  class="logo">SOFT <span class="lite">PORC</span></a>';
      }else{
         echo '<a href="index.php?action=indexEmpleado"  class="logo">SOFT <span class="lite">PORC</span></a>';
      }
      ?>
      
      
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Buscar" type="text">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">
          <!-- inbox notificatoin end -->
          <!-- alert notification start-->
          <li id="alert_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-bell-l"></i>
                            <?php $datos= new alarmaController();
                            $num = $datos->getNumeroAlarmas();
                            echo'<span class="badge bg-important"> '.$num.'</span>';
                              ?>
                             
                              
                 
                        </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-blue"></div>
              <!--
              <li>//AQUI SE LISTAN LAS ALARMAS DE ESTE EMPLEADO
                <a href="#">
                                   <span class="label label-primary"><i class="icon_profile"></i></span>
                                    Friend Request
                                    <span class="small italic pull-right">5 mins</span>
                                </a>
              </li>
            -->
              <li>
                <a href="index.php?action=tablaAlarmas">Ver mas alarmas programadas</a>
              </li>
            </ul>
          </li>
          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="https://i1.wp.com/www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png?fit=256%2C256&quality=100" src="">
                            </span>
                            <span class="username"><?php 
                            echo $_SESSION["nombre"]." ".$_SESSION["apellido"]; ?></span>
                            
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> Mi perfil</a>
              </li>
                <a href="index.php?action=cerrar"><i class="icon_key_alt"></i> Cerrar sesion</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">

            <?php if($_SESSION["rol"]==1){
        echo '<a class="" href="index.php?action=index">
                          <i class="icon_house_alt"></i>
                          <span>Menu</span>
                      </a>';
      }else{
         echo '<a class="" href="index.php?action=indexEmpleado">
                          <i class="icon_house_alt"></i>
                          <span>Menu</span>
                      </a>';
      }
      ?>

           
          </li>
          <!-- <?php if ($_SESSION["rol"] ==1) {
                      ?>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="fa fa-group"></i>
                          <span>Empleados</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                     
                     
            <ul class="sub">
              <li><a class="" href="index.php?action=registrarempleado">Registrar Empleados</a></li>
              <li><a class="" href="index.php?action=tablaempleado">Listar Empleados</a></li>
            </ul>
          </li>
          <?php } ?>-->
           <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="glyphicon glyphicon-piggy-bank"></i>
                          <span>Porcinos</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <?php if ($_SESSION["rol"] ==1) {
               ?>
              <li><a class="" href="index.php?action=registroPorcino">Registrar Porcino</a></li>
              <?php } ?>
              <li><a class="" href="index.php?action=tablaPorcino">Listar Porcinos</a></li>
            </ul>
          </li>

          <!--<?php if ($_SESSION["rol"] ==1) { ?>
            <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="glyphicon glyphicon-option-horizontal""></i>
                          <span>Razas</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="index.php?action=registroRazas">Registrar Razas</a></li>
              <li><a class="" href="index.php?action=tablaRazas">Listar Razas</a></li>
            </ul>
          </li><?php } ?>
        -->
        <!--
          <?php if ($_SESSION["rol"] ==1) { ?>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="glyphicon glyphicon-map-marker"></i>
                          <span>Instalaciones</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="index.php?action=registrarInstalacion">Registrar Instalacion</a></li>
              <li><a class="" href="index.php?action=tablaInstalacion">Listar Instalacion</a></li>
            </ul>
          </li><?php } ?>
        -->
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="glyphicon glyphicon-time"></i>
                          <span>Alarmas</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="index.php?action=registroAlarma">Registrar Alarmas</a></li>
              <li><a class="" href="index.php?action=tablaAlarmas">Listar alarmas</a></li>
            </ul>
          </li>
         <!-- <?php if ($_SESSION["rol"] ==2) { ?>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="fa fa-mars"></i>
                          <span>Reproductores</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>

            <ul class="sub">
              <li><a class="" href="index.php?action=registroreproductor">Registrar Reproductor</a></li>
              <li><a class="" href="index.php?action=tablareproductor">Listar Reproductores</a></li>
            </ul>
          </li>
          <?php } ?>
          <?php if ($_SESSION["rol"] ==2) { ?>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="fa fa-venus"></i>
                          <span>Reproductoras</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="index.php?action=registroreproductora">Registrar Reproductora</a></li>
              <li><a class="" href="index.php?action=tablareproductoras">Listar Reproductoras</a></li>
            </ul>
          </li><?php } ?>
        -->
         
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="fa fa-plus-square"></i>
                          <span>Artículos</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
               <?php if ($_SESSION["rol"] ==1) { ?>
              <li><a class="" href="index.php?action=registroArticulos">Registrar Artículos</a></li>
              <?php } ?>
              <li><a class="" href="index.php?action=tablaArticulos">Listar Artículos</a></li>
            </ul>
          </li>
          <!--
          <?php if ($_SESSION["rol"] ==1) { ?>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="fa fa-medkit"></i>
                          <span>Medicamentos</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="index.php?action=registrarMedicamentos">Registrar medicamentos</a></li>
              <li><a class="" href="index.php?action=tablaMedicamentos">Listar medicamentos</a></li>
            </ul>
          </li>
          <?php } ?>

        -->
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>