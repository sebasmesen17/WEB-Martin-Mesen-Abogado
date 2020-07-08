<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/normalize.css'); ?>">
    <script src="https://kit.fontawesome.com/4de1525fe5.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo base_url('css/stylesUser.css'); ?>">
</head>
<body>
    <header class="header">
        <div class="header__menu">
            <div class="logocontainer">
                <img class="logoconatiner__image" src="<?php echo base_url('img/Logo_mms1.png'); ?>" alt="Logo">
            </div>

            <nav class="nav">
                <ul class="nav__list">
                    <li class="nav__item"><a class="nav__link" href="<?php echo base_url() ?>index.php/IndexPage">INICIO</a></li>
                    <li class="nav__item"><a class="nav__link" href="<?php echo base_url() ?>index.php/Areas">ÁREAS DE PRÁCTICA</a></li>
                    <li class="nav__item"><a class="nav__link" href="<?php echo base_url() ?>index.php/About">NUESTRA FIRMA</a></li>
                    <li class="nav__item"><a class="nav__link" href="<?php echo base_url() ?>index.php/Cerrar">CERRAR SESIÓN</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="main">
        <section class="main__user">
            <div class="main__headline">
                <h3 class="main__title">INFORMACIÓN DE USUARIO</h3>
            </div>

            <div class="maincontainer">
                <section class="form-group d-flex justify-content-center">
                        <section class="containerform">
                            <form class="containerform__form" action="<?php echo site_url('User/update') ?>/<?php echo $row->id; ?>" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control mb-4" name="username" value="<?php echo $row->username; ?>" id="inputUserName"
                                        placeholder="Nombre de usuario">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control mb-4" name="email" value="<?php echo $row->email; ?>" id="inputEmail"
                                        placeholder="Correo Electrónico">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control mb-4" name="password" value="<?php echo $row->pass; ?>" id="inputPassword"
                                        placeholder="Contraseña">
                                </div>

                                <section class="buttons mb-5">
                                    <div class="containerbutton">
                                        <button type="submit" class="containerbutton__button">
                                            <p class="containerbutton__text">Modificar</p>
                                        </button>
                                    </div>
                                    <!-- <div class="containerbutton">
                                        <button type="submit" class="containerbutton__button">
                                            <p class="containerbutton__text">Eliminar</p>
                                        </button>
                                    </div> -->
                                </section>
                            </form>
                        </section>
                </section>

            </div>
        </section>
    </section>

    <footer class="footer">
        <section class="footer__logo">
            <img class="footer__img" src="<?php echo base_url('img/Logo_mms1.png'); ?>" alt="">
        </section>

        <section class="footer__contact">
            <ul class="footer__list">
                <li class="footer__item"><i class="fas fa-mobile"></i> 8710-0161</li>
                <li class="footer__item"><i class="fa fa-phone" aria-hidden="true"></i> 2636-2439</li>
                <li class="footer__item"><i class="fa fa-envelope" aria-hidden="true"></i> mmesens@gmail.com</li>
            </ul>
        </section>

        <section class="footer__socialnetworks">
                <a class="footer__link footer__link--facebook" href="#" ><i class="fa fa-facebook"></i></a>
                <a class="footer__link footer__link--twitter" href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a class="footer__link footer__link--linkedin" href="#" class="linkedin"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
        </section>

        <section class="footer__copyright">
            <p class="footer__text"><i class="fa fa-copyright" aria-hidden="true"></i>2020 TODOS LOS DERECHOS RESERVADOS POR MMS ABOGADO <br>
                POLITICAS Y RESTRICCIONES 
            </p>
        </section>
    </footer>
</body>
</html>