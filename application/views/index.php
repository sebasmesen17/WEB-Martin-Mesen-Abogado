<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/normalize.css'); ?>">
   <!--  <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>"> -->
   <script src="https://kit.fontawesome.com/4de1525fe5.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo base_url('css/stylesIndex.css'); ?>">
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
                    <li class="nav__item"><a class="nav__link" href="<?php echo base_url() ?>index.php/User">PERFIL</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="main">
        <section class="main__specialities">
            <div class="main__headline">
                <h3 class="main__title">PRINCIPALES ESPECIALIDADES</h3>
            </div>

            <div class="container">

                <div id="carouselExampleCaptions" class="carousel slide" class="carousel" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="<?php echo base_url('img/carousel/notary_law.jpg'); ?>" class="d-block w-100 " alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Derecho notarial</h5>
                            <p>Constitución de sociedades, registro de accionistas y beneficiarios finales, disolución de
                                sociedades, entre otros</p>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="<?php echo base_url('img/carousel/justice.jpg'); ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Derecho penal</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="<?php echo base_url('img/carousel/criminology.jpg'); ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Criminología</h5>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section>

        <section class="main__certificates">
            
            <div class="main__headline">
                <h3 class="main__title">ATESTADOS ACADÉMICOS</h3>
            </div>

            <div class="container">

                <div class="container__certificates">

                    <div class="certificate">
                        
                        <div class="certificateimage">
                            <img class="certificateimage__img" src="<?php echo base_url('img/certificates/uia.png'); ?>" alt="Especialidad en acciones civiles resarcitorias">
                        </div>
                        <div class="certificatedescription">
                            <p class="certificatedescription__text">ESPECIALIDAD EN ACCIONES CIVILES RESARCITORIAS</p>
                        </div>
                    </div>

                    <div class="certificate">
                        
                        <div class="certificateimage">
                            <img class="certificateimage__img" src="<?php echo base_url('img/certificates/u-science.png'); ?>" alt="Especialidad en acciones civiles resarcitorias">
                        </div>
                        <div class="certificatedescription">
                            <p class="certificatedescription__text">LICENCIATURA EN DERECHO CON DISTINCIONES</p>
                        </div>
                    </div>

                    <div class="certificate">
                        
                        <div class="certificateimage">
                            <img class="certificateimage__img" src="<?php echo base_url('img/certificates/ulicori.jpg') ?>" alt="Especialidad en acciones civiles resarcitorias">
                        </div>
                        <div class="certificatedescription">
                            <p class="certificatedescription__text">LICENCIATURA EN CRIMINOLOGÍA</p>
                        </div>
                    </div>

                    <div class="certificate">
                        
                        <div class="certificateimage">
                            <img class="certificateimage__img" src="<?php echo base_url('img/certificates/fidelitas.jpg'); ?>" alt="Especialidad en acciones civiles resarcitorias">
                        </div>
                        <div class="certificatedescription">
                            <p class="certificatedescription__text">ESPECIALIDAD EN DERECHO NOTARIAL Y REGISTRAL</p>
                        </div>
                    </div>

                    <div class="certificate">
                        
                        <div class="certificateimage">
                            <img class="certificateimage__img" src="<?php echo base_url('img/certificates/uci2.jpg');?>" alt="Especialidad en acciones civiles resarcitorias">
                        </div>
                        <div class="certificatedescription">
                            <p class="certificatedescription__text">MAESTRÍA EN CRIMINOLOGÍA CON ENFASIS EN SEGURIDAD HUMANA</p>
                        </div>
                    </div>

                    <div class="certificate">
                        
                        <div class="certificateimage">
                            <img class="certificateimage__img" src="<?php echo base_url('img/certificates/universitat.jpg'); ?>" alt="Especialidad en acciones civiles resarcitorias">
                        </div>
                        <div class="certificatedescription">
                            <p class="certificatedescription__text">MAESTRÍA EN SOCIOLOGÍA JURÍDICO PENAL CON ÉNFASIS EN DERECHOS HUMANOS. 2019</p>
                        </div>
                    </div>
                </div>
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