

  <div class="container">

    <form class="login-form" method="post">
      <?php 
                     $valido = new empleadoController();
                     $valido->validarEmail();

         ?>
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <label for="cemail" class="control-label col-lg-12">Digite E-mail de su registro. <span class="required">*</span></label>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="email" class="form-control" placeholder="Correo Electronico" name="email" autofocus>
        </div>
        
       
        <button class="btn btn-primary btn-lg btn-block" type="submit">Enviar E-mail</button>
      
      </div>
    </form>
    <div class="text-right">
      <div class="credits">
  
          
        </div>
    </div>
  </div>

