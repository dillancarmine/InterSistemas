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
                                <a href="" class="dropdown-item">Cerrar Sesión</a>
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
                            <a href="inicio.php" class="nav-item nav-link active">Inicio</a>
                            <a href="#nosotros" class="nav-item nav-link">Nosotros</a>
                            <a href="#categorias" class="nav-item nav-link d-lg-none">Categorías</a>
                            <a href="#info" class="nav-item nav-link">Información</a>
                            <a href="contacto.php" class="nav-item nav-link">Contacto</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-flex">
                        	<div class="d-inline-flex align-items-center">
                </div>
                <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"> Bienvenido
                                     
                                    <i class="fa fa-angle-down mt-1"></i></a>
                                <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                    <a href="" class="dropdown-item">Cerrar Sesión</a>
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


    <!-- Carrusel INICIO -->
    <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#header-carousel" data-slide-to="1"></li>
                        <li data-target="#header-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item position-relative active" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/procesadores.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Procesadores</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">¡Los procesadores de AMD e Intel en un solo lugar!</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="tienda/procesadores.php">¡Compra Ahora!</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/ram.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">RAM's</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">¿Equipo lento? No te preocupes, da más velocidad con un par de RAM's nuevas</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="tienda/ram.php">Consíguelo</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/almacenamiento.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Almacenamiento</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">No te preocupes por el espacio, con nuestros SSD's tendrás velocidad y capacidad.</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="tienda/almacenamiento.php">Ver</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="img/vr.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Descuento del 20%</h6>
                        <h3 class="text-white mb-3">Artículos de VR</h3>
                        <a href="" class="btn btn-primary">Visítalos</a>
                    </div>
                </div>
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="img/perifericos.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Los Mejores</h6>
                        <h3 class="text-white mb-3">Periféricos</h3>
                        <a href="" class="btn btn-info">Ir al Sitio</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carrusel FIN -->


    <!-- Nosotros INICIO -->
    <div class="container-fluid pt-5" id="nosotros">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-warning pr-3">¿Quienes Somos?</span></h2>
        <div class="container-fluid pt-5 pb-3">
            <div class="row px-xl-5">
                <div class="col-md-6">
                    <div class="product-offer mb-30" style="height: 400px;">
                        <img class="img-fluid" src="img/mision.jpg" alt="">
                        <div class="offer-text">
                            <h3 class="text-white mb-3">Misión</h3>
                            <p class="text-white text-center">Ofrecer una amplia gama de productos de hardware a precios accesibles y dar al cliente un servicio de calidad.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-offer mb-30" style="height: 400px;">
                        <img class="img-fluid" src="img/vision.jpg" alt="">
                        <div class="offer-text">
                            <h3 class="text-white mb-3">Visión</h3>
                            <p class="text-white text-center">Ser la empresa líder en la venta de componentes de hardware a nivel Estatal trabajando con estándares de calidad, y cumplir con las necesidades de nuestros clientes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Nosotros FIN -->

    <!-- Categorias INICIO -->
    <div class="container-fluid pt-5 d-lg-none" id="categorias">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Categorías</span></h2>
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="tienda/procesadores.php">
                    <div class="cat-item d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/p-1.png" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Procesadores</h6>
                            <small class="text-body">Ver Productos</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="tienda/t_madre.php">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/p-2.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Tarjetas Madre</h6>
                            <small class="text-body">Ver Productos</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="tienda/t_grafica.php">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/p-3.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Tarjetas Graficas</h6>
                            <small class="text-body">Ver Productos</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="tienda/ram.php">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/p-4.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Memoria RAM</h6>
                            <small class="text-body">Ver Productos</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="tienda/almacenamiento.php">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/p-1.png" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Almacenamiento</h6>
                            <small class="text-body">Ver Productos</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="tienda/fuentes.php">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/p-2.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Fuentes de Poder</h6>
                            <small class="text-body">Ver Productos</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="tienda/refrigeracion.php">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/p-3.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Refrigeración Liquida</h6>
                            <small class="text-body">Ver Productos</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="tienda/ventiladores.php">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/p-2.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Ventiladores</h6>
                            <small class="text-body">Ver Productos</small>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Categorias FIN -->

    <!-- Productos INICIO -->
    <div class="container-fluid pt-5 pb-3" id="info">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Productos Recientes</span></h2>
        <div class="row px-xl-5">
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden d-flex align-items-center" style="height: 330px;">
                        <img class="img-fluid w-100" src="img/p-1.png" alt="">
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="detalle.php">Nombre</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden d-flex align-items-center" style="height: 330px;">
                        <img class="img-fluid w-100" src="img/p-2.jpg" alt="">
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="detalle.php">Nombre</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star-half-alt text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden d-flex align-items-center" style="height: 330px;">
                        <img class="img-fluid w-100" src="img/p-3.jpg" alt="">
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="detalle.php">Nombre</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star-half-alt text-primary mr-1"></small>
                            <small class="far fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden d-flex align-items-center" style="height: 330px;">
                        <img class="img-fluid w-100" src="img/p-4.jpg">
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="detalle.php">Nombre</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="far fa-star text-primary mr-1"></small>
                            <small class="far fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Productos FIN -->


    <!-- Carrusel de Marcas INICIO -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel vendor-carousel">
                    <div class="bg-light p-4 d-flex align-items-center" style="height: 210px;">
                        <img src="img/logos/adata.png" alt="">
                    </div>
                    <div class="bg-light p-4 d-flex align-items-center" style="height: 210px;">
                        <img src="img/logos/ocelot.png" alt="">
                    </div>
                    <div class="bg-light p-4 d-flex align-items-center" style="height: 210px;">
                        <img src="img/logos/amd.png" alt="">
                    </div>
                    <div class="bg-light p-4 d-flex align-items-center" style="height: 210px;">
                        <img src="img/logos/kingston.png" alt="">
                    </div>
                    <div class="bg-light p-4 d-flex align-items-center" style="height: 210px;">
                        <img src="img/logos/asrock.png" alt="">
                    </div>
                    <div class="bg-light p-4 d-flex align-items-center" style="height: 210px;" >
                        <img src="img/logos/intel.png" alt="">
                    </div>
                    <div class="bg-light p-4 d-flex align-items-center" style="height: 210px;">
                        <img src="img/logos/asus.png" alt="">
                    </div>
                    <div class="bg-light p-4 d-flex align-items-center" style="height: 210px;">
                        <img src="img/logos/gigabyte.png" alt="">
                    </div>
                    <div class="bg-light p-4 d-flex align-items-center" style="height: 210px;">
                        <img src="img/logos/corsair.png" alt="">
                    </div>
                    <div class="bg-light p-4 d-flex align-items-center" style="height: 210px;">
                        <img src="img/logos/evga.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carrusel de Marcas FIN -->


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
                            <a class="text-secondary mb-2" href="#nosotros"><i class="fa fa-angle-right mr-2"></i>Nosotros</a>
                            <a class="text-secondary mb-2" href="tyc.php"><i class="fa fa-angle-right mr-2"></i>Términos y Condiciones</a>
                            <a class="text-secondary mb-2" href="ap.php"><i class="fa fa-angle-right mr-2"></i>Aviso de Privacidad</a>
                            <a class="text-secondary mb-2 d-lg-none" href="#categorias"><i class="fa fa-angle-right mr-2"></i>Categorías</a>
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