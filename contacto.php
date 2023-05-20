<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>InterSistemas</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/computadora.svg">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Barra De Inicio INICIO -->
    <div class="container-fluid">
        <div class="row bg-dark py-1 px-xl-5">
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center d-block d-lg-none">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Bienvenido
                            
                            </a>
                            <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                <a href="servidor/login/logout.php" class="dropdown-item">Cerrar Sesión</a>
                            </div>
                    </div>
                    <a href="carrito.php" class="btn px-0 ml-2">
                        <i class="fas fa-shopping-cart text-info"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a href="" class="text-decoration-none">
                    <img src="img/monitor.svg" class="w-25 h-25"> 
                    <span class="h1 text-capitalize text-warning bg-primary px-2">inter</span>
                    <span class="h1 text-capitalize text-info bg-warning px-2 ml-n1" style="color: #0d6efd;">sistemas</span>
                </a>
            </div>
            <div class="col-lg-4 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Buscar Productos">
                        <div class="input-group-append">
                            <button type="button" class="btn btn-outline-warning"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Barra de Inicio FIN -->

    <!-- Barra de Navegación INICIO -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                    <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categorías</h6>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                    <div class="navbar-nav w-100">
                        <a href="tienda/procesadores.php" class="nav-item nav-link">Procesadores</a>
                        <a href="tienda/t_madre.php" class="nav-item nav-link">Tarjetas Madre</a>
                        <a href="tienda/ram.php" class="nav-item nav-link">Memoria RAM</a>
                        <a href="tienda/t_grafica.php" class="nav-item nav-link">Tarjeta Grafica</a>
                        <a href="tienda/almacenamiento.php" class="nav-item nav-link">Almacenamiento</a>
                        <a href="tienda/fuentes.php" class="nav-item nav-link">Fuente de Poder</a>
                        <a href="tienda/refrigeracion.php" class="nav-item nav-link">Refrigeración Liquida</a>
                        <a href="tienda/ventiladores.php" class="nav-item nav-link">Ventiladores</a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-capitalize text-warning bg-info px-2">inter</span>
                        <span class="h1 text-capitalize text-info bg-warning px-2 ml-n1">sistemas</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="inicio.php" class="nav-item nav-link">Inicio</a>
                            <a href="#nosotros" class="nav-item nav-link">Nosotros</a>
                            <a href="#categorias" class="nav-item nav-link d-lg-none">Categorías</a>
                            <a href="#info" class="nav-item nav-link">Información</a>
                            <a href="contacto.php" class="nav-item nav-link active">Contacto</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-flex">
                            <div class="d-inline-flex align-items-center">
                </div>
                <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"> Bienvenido
                                     
                                    <i class="fa fa-angle-down mt-1"></i></a>
                                <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                    <a href="servidor/login/logout.php" class="dropdown-item">Cerrar Sesión</a>
                                </div>
                            </div>
                            <a href="carrito.php" class="btn px-0 ml-3">
                                <i class="fas fa-shopping-cart text-primary"></i>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Barra de Navegación FIN -->

    <!-- Barra Pagina INICIO -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="inicio.php">Inicio</a>
                    <span class="breadcrumb-item active">Contacto</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Barra Pagina FIN -->


    <!-- Contacto INICIO -->
    <div class="container-fluid">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Contáctanos</span></h2>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form bg-light p-30">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" placeholder="Tu Nombre"
                                required="required" data-validation-required-message="Por favor escribe tu nombre" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" id="email" placeholder="Tu Correo"
                                required="required" data-validation-required-message="Por favor escribe tu correo" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="subject" placeholder="Asunto"
                                required="required" data-validation-required-message="Por favor escribe un asunto" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="8" id="message" placeholder="Mensaje"
                                required="required"
                                data-validation-required-message="Por favor escribe tu mensaje"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 mb-5">
                <div class="bg-light p-30 mb-30">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3551.0910186349715!2d-99.19015562503155!3d19.690216181644967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f54156948569%3A0x9ef349d975d1150f!2sFES%20Cuautitl%C3%A1n%20UNAM%20Campus%20IV!5e1!3m2!1ses-419!2smx!4v1681969615234!5m2!1ses-419!2smx" width="500" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="bg-light p-30 mb-3">
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-info mr-3"></i>Carr. Cuautitlán-Teoloyucan Km. 2.5, San Sebastian Xhala, 54714 Cuautitlán Izcalli, Edo. de Méx.</p>
                <p class="mb-2"><i class="fa fa-envelope text-info mr-3"></i>intersistemas@cuautitlan.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-info mr-3"></i>+012 34-56-78-90-11</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Contacto FIN -->


    <!-- Pie de Pagina INICIO -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">Información</h5>
                <p class="mb-4">Te ofrecemos alguna información que te puede interesar, así como información de contacto.</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-info mr-3"></i>Carr. Cuautitlán-Teoloyucan Km. 2.5, San Sebastian Xhala, 54714 Cuautitlán Izcalli, Edo. de Méx.</p>
                <p class="mb-2"><i class="fa fa-envelope text-info mr-3"></i>intersistemas@cuautitlan.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-info mr-3"></i>+012 34-56-78-90-11</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="inicio.php"><i class="fa fa-angle-right mr-2"></i>Inicio</a>
                            <a class="text-secondary mb-2" href="inicio.php#nosotros"><i class="fa fa-angle-right mr-2"></i>Nosotros</a>
                            <a class="text-secondary mb-2" href="tyc.php"><i class="fa fa-angle-right mr-2"></i>Términos y Condiciones</a>
                            <a class="text-secondary mb-2" href="ap.php"><i class="fa fa-angle-right mr-2"></i>Aviso de Privacidad</a>
                            <a class="text-secondary mb-2 d-lg-none" href="inicio.php#categorias"><i class="fa fa-angle-right mr-2"></i>Categorías</a>
                            <a class="text-secondary" href="contacto.php"><i class="fa fa-angle-right mr-2"></i>Contáctanos</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h6 class="text-secondary text-uppercase mt-4 mb-3">Siguenos!</h6>
                        <div class="d-flex">
                            <a class="btn btn-light btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-info btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-danger btn-square mr-2" href="#"><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-success btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-warning">&copy; InterSistemas | FESC Informática</p>
                <p class="mb-md-0 text-center text-md-left text-secondary">
                    Todos los Derechos Reservados. 2023.
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- Pie de Pagina FIN -->


    <!-- Boton Regresar -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>