<!doctype html>
<html lang="en">

<head>
  <title>Inciar Sesión</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- CSS -->
  <link rel="stylesheet" href="<?php echo base_url('css/stylesLogin.css'); ?>">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
  <section class="login container form-group d-flex justify-content-center mt-5">
    <div class="card text-center">

      <section class="logocontainer card-header">
        <img class="logocontainer__img  img-fluid" src="<?php echo base_url('img/Logo_mms1.png'); ?>" alt="Logo">
      </section>

      <section class="card-body">
        <form class="fomr" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="login">
          <div class="form-group mb-5 mt-3">
            <input type="text" name="username" class="form-control" id="inputUserName" placeholder="Nombre de usuario" required>
          </div>
          <div class="form-group mb-3">
            <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Contraseña" required>
          </div>
        </form>
        <section class="sectioncheck  mb-3">
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="check">
            <label class="sectioncheck__label form-check-label" for="checkBox">Recordar Email</label>
          </div>
          <div class="sectionbuttom"> <!-- section__body__LogIn -->
            <button type="submit" class="sectionbuttom__buttom" onclick="login.submit()"> <!-- body__logIn--button -->
              <p class="sectionbuttom__text">Iniciar Sesión</p> <!-- button__paragraph -->
            </button>
          </div>
        </section>
        <section class="sectionpass">
          <div class="sectionpasscontainer mb-3">
            <a class="sectionpasscontainer__link" href="<?php echo base_url() ?>index.php/Register">¿Aún no tienes cuenta?</a>
          </div>
          <div class="sectionpasscontainer">
            <a class="sectionpasscontainer__link" href="<?php echo base_url() ?>index.php/IndexPage"><i class="fas fa-arrow-left mr-2"></i>Regresar</a>
          </div>
        </section>
      </section>

    </div>
  </section>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <!--  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script> -->
</body>

</html>