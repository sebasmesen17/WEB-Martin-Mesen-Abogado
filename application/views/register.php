<!doctype html>
<html lang="en">
  <head>
    <title>Registrar</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url('css/stylesLogin.css'); ?>">

    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>

  <body>
      
    <section class="login container form-group d-flex justify-content-center mt-5">
        <div class="card text-center">
    
          <section class="logocontainer card-header">
            <img class="logocontainer__img  img-fluid" src="<?php echo base_url('img/Logo_mms1.png'); ?>" alt="Logo">
          </section>
    
          <section class="card-body">
            <form class="fomr" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="register">
              <div class="form-group">
                <input type="text" name="username" class="form-control" id="inputUserName" placeholder="Nombre de usuario">
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Correo Electrónico">
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Contraseña">
              </div>
              <div class="form-group">
                <input type="password" name="password2" class="form-control" id="inputConfirmPassword" placeholder="Repetir Contraseña">
              </div>
              
            </form>
            <section class="sectioncheck mb-3">
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="check">
                <label class="sectioncheck__label form-check-label" for="checkBox">Mostrar Contraseñas</label>
              </div>
              <div class="sectionbuttom">
                <button type="submit" class="sectionbuttom__buttom" onclick="register.submit()">Registrar</button>
              </div>
            </section>
            <section class="sectionpass">
              <div class="sectionpasscontainer">
                <a class="sectionpasscontainer__link" href="<?php echo base_url() ?>index.php/Login"><i class="fas fa-arrow-left mr-2"></i>Regresar</a>
              </div>
            </section>
          </section>
    
        </div>
      </section>
  </body>
</html>