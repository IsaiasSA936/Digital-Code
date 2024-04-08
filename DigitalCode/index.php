<?php 

include 'app/conexion.php';
include 'app/Action.php';
require('app/contador.php');
require('app/querys.php');

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/code.css">
    <link rel="stylesheet" href="css/dark.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="js/Jquery.js"></script>
    <title>Digital Code | Networking Linkify </title>
</head>

<body>
    <!-- inicia barra de navegacion  -->
    <?php include "include/navbarFront.php"; ?>
    <!-- termina barra de navegacion -->
    <section id="Inicio" class="InicioParallax">
        <div class="row ColorImg">
            <div class="col-sm-12 col-md-6 col-lg-6 mt-5"></div>
            <div class="col-sm-12 col-md-6 col-lg-6 mt-5">
                <div class="row mt-1">
                    <h3 class="text-center display-4 mt-2"><span style="color:#fff">L&nbsp;i&nbsp;n&nbsp;k&nbsp;i&nbsp;f&nbsp;y</span></h3>
                    <span class="text-light text-center display-6 mt-0">Que problema resuelve y en donde</span>
                    <p class="text-center mt-3 text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam odit exercitationem perspiciatis necessitatibus culpa,
                        nam, ipsam modi nesciunt, dolorem non ex ullam. Autem incidunt id doloribus veniam optio unde recusandae!</p>
                </div>
                <div class="row mt-2 py-4 text-center">
                    <div class="col pb-4">
                        <a href="#" class="btn btn-sm btnLink rounded-pill">Más Información</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="row">
        <?php echo $Mensaje; ?>
    </div>
    <section id="Logos">
        <div class="container aling-self-center">
            <div class="row mx-auto">
                <div class="col-sm-4 col-md-4 col-lg-4 text-center mt-3 border-bottom border-end" data-aos="fade-up">
                    <div class="row mt-2 mb-2">
                        <p class="py-2 fs-5">
                            <svg class="bi" width="35" height="35" fill="currentColor" style="color:#0FB3B5">
                                <use xlink:href="library/icons/bootstrap-icons.svg#gear-wide-connected" />
                            </svg>&nbsp;&nbsp;Conoce como funciona Linkify
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 text-center mt-3 border-bottom border-end" data-aos="fade-up">
                    <div class="row mt-2 mb-2">
                        <p class="py-2 fs-5">
                            <svg class="bi" width="35" height="35" fill="currentColor" style="color:#0FB3B5">
                                <use xlink:href="library/icons/bootstrap-icons.svg#diagram-3-fill" />
                            </svg>&nbsp;&nbsp;Se parte de la comunidad Linkify
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 text-center border-bottom mt-3" data-aos="fade-up">
                    <div class="row mt-2 mb-2">
                        <p class="py-2 fs-5">
                            <svg class="bi" width="35" height="35" fill="currentColor" style="color:#0FB3B5">
                                <use xlink:href="library/icons/bootstrap-icons.svg#trophy-fill" />
                            </svg>&nbsp;&nbsp;Disfruta de los beneficios de Linkify
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="Nosotros" class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-8" data-aos="fade-right">
                    <div class="row mt-3">
                        <h2 class="text-start fs-3">Nosotros <span style="color:#f52b14">Linkify</span></h2>
                        <h3 class="text-start fs-4 display-5">La historia</h3>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4" data-aos="fade-left">
                    <div class="row mx-auto justify-content-center">
                        <div class="col">
                            <img src="img/networking.png" alt="datos de empresas linkify" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="row d-flex mt-5 text-center">
        <div class="col-sm-12 col-md-6 col-lg-3 mt-5" data-aos="zoom-in">
            <div class="row">
                <svg class="bi" width="80" height="80" fill="currentColor" style="color:#0FB3B5">
                    <use xlink:href="library/icons/bootstrap-icons.svg#cash-coin" />
                </svg>
            </div>
            <div class="row mt-2">
                <h4 class="dispaly-6 text-secondary">Genera Ganancias</h4>
                <p>texto explicacion de icono</p>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 mt-5" data-aos="zoom-in">
            <div class="row">
                <svg class="bi" width="80" height="80" fill="currentColor" style="color:#0FB3B5">
                    <use xlink:href="library/icons/bootstrap-icons.svg#cup-hot-fill" />
                </svg>
            </div>
            <div class="row mt-2">
                <h4 class="dispaly-6 text-secondary">Comparte Recursos</h4>
                <p>texto explicacion de icono</p>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 mt-5" data-aos="zoom-in">
            <div class="row">
                <svg class="bi" width="80" height="80" fill="currentColor" style="color:#0FB3B5">
                    <use xlink:href="library/icons/bootstrap-icons.svg#unity" />
                </svg>
            </div>
            <div class="row mt-2">
                <h4 class="dispaly-6 text-secondary">Asegura Sinergias</h4>
                <p>texto explicacion de icono</p>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 mt-5" data-aos="zoom-in">
            <div class="row">
                <svg class="bi" width="80" height="80" fill="currentColor" style="color:#0FB3B5">
                    <use xlink:href="library/icons/bootstrap-icons.svg#puzzle-fill" />
                </svg>
            </div>
            <div class="row mt-2">
                <h4 class="dispaly-6 text-secondary">Titulo del icono</h4>
                <p>texto explicacion de icono</p>
            </div>
        </div>
    </div>
    <a class="ir-arriba" javascript:void(0) title="Volver arriba">
        <svg class="bi" width="20" height="20" fill="currentColor" style="color:#fff">
            <use xlink:href="library/icons/bootstrap-icons.svg#arrow-up" />
        </svg>
    </a>
    <section id="testimoniales">
        <div class="container mt-3">
            <div class="row py-2 mt-5" data-aos="zoom-in-up">
                <div id="carouselTestimonialControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="col-sm-12 col-md-12 col-lg-12 px-2 text-center">
                                <div class="card bg-light border-light">
                                    <div class="row mt-3">
                                        <h3 class="text-star py-2">
                                            <svg class="bi" width="60" height="60" fill="currentColor" style="color:#f52b14">
                                                <use xlink:href="library/icons/bootstrap-icons.svg#chat-right-text-fill" />
                                            </svg>
                                        </h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2 col-md-2 col-lg-2"></div>
                                        <div class="col-sm-8 col-md-8 col-lg-8">
                                            <p class="fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Hic corporis reiciendis pariatur exercitationem repudiandae laboriosam, dolore ad!
                                                Cupiditate repudiandae labore omnis ipsam veniam aspernatur impedit qui non laborum saepe!
                                                Consectetur!</p>
                                        </div>
                                        <div class="col-sm-2 col-md-2 col-lg-2"></div>
                                    </div>
                                    <div class="row mt-3 text-center">
                                        <div class="col py-3">imagen</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-sm-12 col-md-12 col-lg-12 px-2 text-center">
                                <div class="card bg-light border-light">
                                    <div class="row mt-3">
                                        <h3 class="text-star py-2">
                                            <svg class="bi" width="60" height="60" fill="currentColor" style="color:#f52b14">
                                                <use xlink:href="library/icons/bootstrap-icons.svg#chat-right-text-fill" />
                                            </svg>
                                        </h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2 col-md-2 col-lg-2"></div>
                                        <div class="col-sm-8 col-md-8 col-lg-8">
                                            <p class="fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Hic corporis reiciendis pariatur exercitationem repudiandae laboriosam, dolore ad!
                                                Cupiditate repudiandae labore omnis ipsam veniam aspernatur impedit qui non laborum saepe!
                                                Consectetur!</p>
                                        </div>
                                        <div class="col-sm-2 col-md-2 col-lg-2"></div>
                                    </div>
                                    <div class="row mt-3 text-center">
                                        <div class="col py-3">imagen</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-sm-12 col-md-12 col-lg-12 px-2 text-center">
                                <div class="card bg-light border-light">
                                    <div class="row mt-3">
                                        <h3 class="text-star py-2">
                                            <svg class="bi" width="60" height="60" fill="currentColor" style="color:#f52b14">
                                                <use xlink:href="library/icons/bootstrap-icons.svg#chat-right-text-fill" />
                                            </svg>
                                        </h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2 col-md-2 col-lg-2"></div>
                                        <div class="col-sm-8 col-md-8 col-lg-8">
                                            <p class="fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Hic corporis reiciendis pariatur exercitationem repudiandae laboriosam, dolore ad!
                                                Cupiditate repudiandae labore omnis ipsam veniam aspernatur impedit qui non laborum saepe!
                                                Consectetur!</p>
                                        </div>
                                        <div class="col-sm-2 col-md-2 col-lg-2"></div>
                                    </div>
                                    <div class="row mt-3 text-center">
                                        <div class="col py-3">imagen</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselTestimonialControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon botonSlider" aria-hidden="true"></span>
                        <span class="visually-hidden">Antes</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselTestimonialControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon botonSlider" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                    </button>
                </div>
            </div>
            <div class="row mt-3">
                <div class="mx-auto mt-4 aling-self-center text-center">
                    <div class="row mt-2">
                        <span class="text-secondary fs-6">Abajo</span>
                    </div>
                    <a href="#datos">
                        <svg class="bi" style="color:#0FB3B5" width="30" height="30" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#arrow-down-circle-fill" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="datos" class="mt-5 pb-2" style="background-color:#f52b14" data-aos="flip-up">
        <div class="container">
            <div class="row mt-3 text-center">
                <h3 class="text-light mt-5 display-6">Como impactamos en nuestra comunidad</h3>
                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Ea sint numquam esse earum libero? Reprehenderit iste facere quibusdam ipsum provident
                    velit quidem natus tempore aut, molestiae eligendi expedita nihil eos.</p>
            </div>
            <div class="row mt-5">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <h4 class="text-white">Titulo</h4>
                    <p class="text-white">text. texto , texto, texto</p>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <h4 class="text-white">Titulo</h4>
                    <p class="text-white">text. texto , texto, texto</p>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <h4 class="text-white">Titulo</h4>
                    <p class="text-white">text. texto , texto, texto</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-sm-6 col-md-3 col-lg-3 py-2 border-top border-end">
                    <h4 class="text-white fs-3 mt-3">10%</h4>
                    <p class="text-white mb-3">descripcion del texto</p>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 py-2 border-top border-end">
                    <h4 class="text-white fs-3 mt-3">10%</h4>
                    <p class="text-white mb-3">descripcion del texto</p>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 py-2 border-top border-end">
                    <h4 class="text-white fs-3 mt-3">10%</h4>
                    <p class="text-white mb-3">descripcion del texto</p>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 py-2 border-top">
                    <h4 class="text-white fs-3 mt-3">10%</h4>
                    <p class="text-white mb-3">descripcion del texto</p>
                </div>
                <div class="mt-4 mb-4"></div>
            </div>
        </div>
    </section>
    <section id="PasosRegistro" class="mt-4">
        <div class="container mt-5">
            <div class="row mt-4">
                <h4 class="text-center text-secondary display-6 mt-3" data-aos="zoom-in">Titulo <span style="color:#f52b14">del producto</span></h4>
                <p class="text-secondary">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus doloribus beatae modi nobis quis
                    est labore incidunt reprehenderit qui laborum? Assumenda molestias necessitatibus repellat sapiente quisquam maiores blanditiis
                    nam? Ad.</p>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12 col-md-4 col-lg-4" data-aos="fade-right">
                    <div class="card bg-light border-white py-2">
                        <div class="container">
                            <div class="row mt-3">
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="row align-items-start">
                                        <svg class="bi" width="40" height="40" fill="currentColor" style="color:#0FB3B5">
                                            <use xlink:href="library/icons/bootstrap-icons.svg#1-circle-fill" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="row align-items-end">
                                        <svg class="bi text-secondary" width="40" height="40" fill="currentColor">
                                            <use xlink:href="library/icons/bootstrap-icons.svg#arrow-right" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <h4 class="fs-5 display-5">Registrate con nosotros</h4>
                                <p class="mb-3">texto de registro</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-4" data-aos="fade-right">
                    <div class="card bg-light border-white py-2">
                        <div class="container">
                            <div class="row mt-3">
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="row align-items-start">
                                        <svg class="bi" width="40" height="40" fill="currentColor" style="color:#0FB3B5">
                                            <use xlink:href="library/icons/bootstrap-icons.svg#2-circle-fill" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="row align-items-end">
                                        <svg class="bi text-secondary" width="40" height="40" fill="currentColor">
                                            <use xlink:href="library/icons/bootstrap-icons.svg#arrow-right" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <h4 class="fs-5 display-5">Valida tu negocio o empresa</h4>
                                <p class="mb-3">texto de registro</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-4" data-aos="fade-right">
                    <div class="card bg-light border-white py-2">
                        <div class="container">
                            <div class="row mt-3">
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="row align-items-start">
                                        <svg class="bi" width="40" height="40" fill="currentColor" style="color:#0FB3B5">
                                            <use xlink:href="library/icons/bootstrap-icons.svg#3-circle-fill" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="row align-items-end">
                                        <svg class="bi text-secondary" width="40" height="40" fill="currentColor">
                                            <use xlink:href="library/icons/bootstrap-icons.svg#arrow-right" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <h4 class="fs-5 display-5">Comienza a hacer sinergias con nosotros</h4>
                                <p class="mb-3">texto de registro</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row mt-3" data-aos="fade-right">
                    <div class="card bg-light border-white py-2">
                        <div class="row align-items-start mt-2">
                            <svg class="bi" width="40" height="40" fill="currentColor" style="color:#0FB3B5">
                                <use xlink:href="library/icons/bootstrap-icons.svg#4-circle-fill" />
                            </svg>
                        </div>
                        <div class="row mt-3">
                            <h4 class="fs-5 display-5 text-center"> Comienza a hacer sinergias con nosotros</h4>
                            <p class="mb-3 text-center">texto de registro</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-2"  data-aos="fade-up">
                    <div class="container">
                        <div class="d-flex justify-content-center mt-3 mb-2">
                            <a href="#" class="btnRegistro">Registrate en Linkify</a>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="mx-auto mt-4 aling-self-center text-center">
                        <div class="row mt-2">
                            <span class="text-secondary fs-6">Abajo</span>
                        </div>
                        <a href="#sliderEmpresas">
                            <svg class="bi" width="30" height="30" fill="currentColor" style="color:#0FB3B5">
                                <use xlink:href="library/icons/bootstrap-icons.svg#arrow-down-circle-fill" />
                            </svg>
                        </a>

                    </div>
                </div>
            </div>
    </section>
    <section id="sliderEmpresas" class="mt-3">
        <div class="row mt-4">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/Slider_Linkify_2_blanco.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <a href="TalentGames">
                                <img src="img/Slider_TheTaletGames_01_blanco.png" class="d-block w-100" alt="...">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <img src="img/Slider_Linkify_1_blanco.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon botonSlider" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon botonSlider" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <section id="catalogosEmpresas" class=" mt-5">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="row mt-5">
                        <h4 class="fs-2 text-center display-4 mt-4">Catalogo de<span style="color:#f52b14"> Empresas</span></h4>
                        <p class="mt-2 ms-3 me-3 text-center fs-5">Ingresa al catalogo y conoce todas las empresas y negocios que pueden ayudarte con servicios,
                            materiales y todo lo necesario para potenciar a tu empresa o negocio.
                        </p>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-12 col-md-12 col-lg-6 text-center mx-auto mb-3 border-end">
                            <a href="#" class="text-secondary text-decoration-none fs-5">
                                <svg class="bi" width="30" height="30" fill="currentColor">
                                    <use xlink:href="library/icons/bootstrap-icons.svg#arrow-down" />
                                </svg> Desacarga el catalogo
                                <div class="row mt-2">
                                    <svg class="bi" width="30" height="30" fill="currentColor">
                                        <use xlink:href="library/icons/bootstrap-icons.svg#journal-arrow-down" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6 text-center mx-auto mb-3">
                            <a href="#" class="text-decoration-none fs-5 link-secondary">
                                <svg class="bi" width="30" height="30" fill="currentColor">
                                    <use xlink:href="library/icons/bootstrap-icons.svg#arrow-right" />
                                </svg> Ingresar al catalogo
                                <div class="row mt-2">
                                    <svg class="bi" width="30" height="30" fill="currentColor">
                                        <use xlink:href="library/icons/bootstrap-icons.svg#journals" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
        </div>
        <section id="BenefeciosNet">
            <div class="container mt-3">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button text-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="background-color:#0FB3B5">
                                Accordion Item #1
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show bg-light" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed text-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="background-color:#0FB3B5">
                                Accordion Item #2
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse bg-light" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed text-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="background-color:#0FB3B5">
                                Accordion Item #3
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse bg-light" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <div class="container mt-5">
        <div class="row mt-4">
            <h4 class="text-center fs-2  display-6 mt-3">Titulo <span style="color:#f52b14">del producto</span></h4>
            <p class="mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus doloribus beatae modi nobis quis
                est labore incidunt reprehenderit qui laborum? Assumenda molestias necessitatibus repellat sapiente quisquam maiores blanditiis
                nam? Ad.
            </p>
        </div>
        <section id="Cursos">
            <div class="container mt-5">
                <div class="row mt4 mb4">
                   <?php while($rowCursos = $EMCursos->fetch_assoc()){ ?>  
                    <div class="col-sm-12 col-md-4 col-lg-4 mt-2 aling-self-center">
                        <div class="card shadow rounded bg-white">
                            <img src="img/logo_digitalCode_parner2.png" alt="">
                            <div class="card-body">
                                <h5 class="fs-6 display-5 text-center" style="color:#f52b14">Categoria Curso</h5>
                                <h4 class="fs-5 display-4 text-center"><?php echo $rowCursos['NombreCurso']; ?></h4>
                                <p class="text-break"><?php echo wordwrap($rowCursos['DescripcionCurso'],15,TRUE) ?></p>
                            </div>
                            <div class="card-footer" style="background-color:#f52b14">
                                <div class="row mt-2">
                                    <div class="col col-sm-12 col-md-4 col-lg-4 text-center">
                                        <div class="row">
                                            <h5 class="text-white fs-6 display-4">
                                                <svg class="bi" width="18" height="18" fill="currentColor">
                                                    <use xlink:href="library/icons/bootstrap-icons.svg#folder-plus" />
                                                </svg>&nbsp; Capacidad
                                            </h5>
                                        </div>
                                        <div class="row">
                                            <div class="text-center text-light">
                                            <?php echo $rowCursos['NumeroPart']; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-sm-12 col-md-4 col-lg-4 text-center">
                                        <h5 class="text-white fs-6 display-4">
                                            <svg class="bi" width="18" height="18" fill="currentColor">
                                                <use xlink:href="library/icons/bootstrap-icons.svg#calendar3" />
                                            </svg>&nbsp; Inicio
                                        </h5>
                                    </div>
                                    <div class="col col-sm-12 col-md-4 col-lg-4 text-center">
                                        <h5 class="text-white fs-6 display-4">
                                            <svg class="bi" width="18" height="18" fill="currentColor">
                                                <use xlink:href="library/icons/bootstrap-icons.svg#link-45deg" />
                                            </svg>&nbsp; Link
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
            </div>
        </section id="logoEmpresa" class="mt-4">
        <div class="row mx-auto mt-5">
            <div class="col mt-5">
                <img src="img/logo_digitalCode_parner2.png" class="img-fluid imgParner" alt="Logo DigitalCode">
            </div>
            <div class="col mt-5">
                <img src="img/logo_iscjlchavezg_parner1.png" class="img-fluid imgParner" alt="Logo OscjlchavezG">
            </div>
            <div class="col mt-5">
                <img src="img/logo_digitalCherry_parner4.png" class="img-fluid imgParner" alt="Logo Digital Cherry">
            </div>
            <div class="col mt-5">
                <img src="img/logo_digitalC_parner5.png" class="img-fluid imgParner" alt="Logo Digital Cherry">
            </div>
        </div>
        <div class="row mx-auto mt-4">
            <div class="col">
                <img src="img/logo_digitalCode_parner2.png" class="img-fluid imgParner" alt="Logo DigitalCode">
            </div>
            <div class="col">
                <img src="img/logo_iscjlchavezg_parner1.png" class="img-fluid imgParner" alt="Logo OscjlchavezG">
            </div>
            <div class="col">
                <img src="img/logo_digitalCherry_parner4.png" class="img-fluid imgParner" alt="Logo Digital Cherry">
            </div>
            <div class="col">
                <img src="img/logo_digitalC_parner5.png" class="img-fluid imgParner" alt="Logo Digital Cherry">
            </div>
        </div>
        <div class="row mt-3 py-2">
            <h4 class="text-center fs-4 display-5">Empresas fundadoras en <span style="color:#f52b14">L i n k i f y</span></h4>
            <p class="text-center text-secondary">Iniciando historias de exito junto a hombres y mujeres emprededores de nuestra comunidad.</p>
        </div>
    </div>
    </section>
    <section id="bannerArman" class="Parallax3">
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 mt-5">
                    <h3 class="fs-3 display-2 text-white text-center mt-5">Acercate a Nosotros</h3>
                    <h4 class="text-center text-white fs-2 display-5 fw-bolder">L&nbsp i &nbsp n &nbsp k &nbsp i &nbsp f&nbsp y</h4>
                    <figcaption class="blockquote-footer text-center text-white mb-2">
                        Encuentra,Posaicionate y Distribuye.
                    </figcaption>
                    <div class="row mt-3 mb-5">
                        <a href="#" class="btnReg">Registrate con nosotros</a>

                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6"></div>
            </div>
        </div>
    </section>
    <section id="newsletter" class="mt-3 bg-white">
        <div class="container">
            <div class="row mt-4">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="row text-center mt-2">
                        <h4 class="fs-4 display-6 mt-4">
                            <svg class="bi" width="30" height="30" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#envelope-paper-fill" />
                            </svg> News<span style="color:#f52b14">letter</span>
                        </h4>
                        <p class="fs-5">Suscribete para que recibas noticias, publicaciones y mucha informacion sobre Linkify.</p>
                        <form name="newslatter" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                            <div class="row">
                                <div class="col-sm-3 col-md-3 col-lg-3"></div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="row mt-2 d-flex justify-content-center mb-3">
                                        <input type="email" name="News" placeholder="tucorreo@dominio.com" class="form-control" required>
                                    </div>
                                    <div class="row mt-3 d-flex justify-content-center">
                                        <input type="submit" name="btnNewslatter" value="Suscribirse" class="btn btn-sm btn-secondary mb-4">
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-3 col-lg-3"></div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="footer">
        <footer class="container mt-4 mb-4">
            <row class="row mt-2">
                <div class="col-sm-12 col-md-6 col-lg-6 text-center">
                    <p class="text-start color-secondary">
                        Copyright © 2024 Networking<span style="color:#f52b14"> Linkify </span> | Designed by <span style="color:#f52b14"> Iscjlchavezg </span> and <span style="color:#f52b14"> DigitalCode </span>.
                    </p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="row text-end">
                        <div class="col">
                            <svg class="bi" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#facebook" />
                            </svg>
                        </div>
                        <div class="col">
                            <svg class="bi" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#twitter" />
                            </svg>
                        </div>
                        <div class="col">
                            <svg class="bi" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#whatsapp" />
                            </svg>
                        </div>
                        <div class="col">
                            <svg class="bi" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#opencollective" />
                            </svg>
                        </div>
                    </div>
                </div>
            </row>

        </footer>
    </section>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/dark-mode.js"></script>
    <script src="js/btnArriba.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init();</script>
</body>

</html>