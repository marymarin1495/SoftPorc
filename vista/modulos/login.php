<?php if (isset($_SESSION["nombre"])){
     echo '<script language="javascript">
window.location.href="index.php?action=index";
</script>';
} ?>
  


  <div class="container">

    <form class="login-form" method="post">
      <?php 
                     $ingreso= new Ingreso();
                     $ingreso->ingresoController();
         ?>
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" class="form-control" placeholder="Usercodigo" name="codigo" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input   type="password" class="form-control" placeholder="Password" name="password">
        </div>
        <label class="checkbox">
                <input type="checkbox" value="remember-me">Recordarme
                <span class="pull-right"> <a class="" href="#"> ¿Olvido su contraseña?</a></span>
            </label>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Iniciar Sesión</button>
      
      </div>
    </form>
  </div>

