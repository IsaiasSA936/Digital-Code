<nav class="navbar navbar-expand-xl navbar-light fixed-top" style="background-color:#0FB3B5">
        <div class="container-fluid me-5 ms-5">
            <a class="navbar-brand text-white" href="#">L&nbsp;i&nbsp;n&nbsp;k&nbsp;i&nbsp;f&nbsp;y</a>
            <button class="navbar-toggler text-white bg-light btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mx-auto  mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#">
                            <svg class="bi" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#house-fill"/>
                            </svg> Inicio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#Nosotros">
                            <svg class="bi" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#people-fill"/>
                            </svg> Sobre Nosotros
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">
                            <svg class="bi" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#signpost-2-fill"/>
                            </svg> Networking
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">
                            <svg class="bi" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#journals"/>
                            </svg>  Catalogo de Empresas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">
                            <svg class="bi" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#hdd-fill"/>
                            </svg> Servicios
                        </a>
                    </li>
                </ul>
                <form class="d-flex">
                    <ul class="navbar-nav me-auto mx-auto  ms-5">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="./login"> 
                                <svg class="bi" width="20" height="20" fill="currentColor">
                                    <use xlink:href="library/icons/bootstrap-icons.svg#person-fill-lock"/>
                                </svg>  Iniciar Sesion
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg class="bi" width="20" height="20" fill="currentColor">
                                    <use xlink:href="library/icons/bootstrap-icons.svg#gear-wide-connected"/>
                                </svg>  Opciones
                            </a>
                            <ul class="dropdown-menu" style="background-color:rgba(13,204,207,0.8);" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item text-white" href="#">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="darkSwitch">
                                            <svg class="bi" width="20" height="20" fill="currentColor">
                                                <use xlink:href="library/icons/bootstrap-icons.svg#sun-fill"/>
                                            </svg> |  
                                            <svg class="bi" width="16" height="16" fill="currentColor">
                                                <use xlink:href="library/icons/bootstrap-icons.svg#moon-stars-fill"/>
                                            </svg>
                                        <div>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider text-white">
                                </li>
                                <li>
                                    <a class="dropdown-item text-white" href="#">
                                        Something else her
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">
                                <svg class="bi" width="20" height="20" fill="currentColor">
                                    <use xlink:href="library/icons/bootstrap-icons.svg#question-circle-fill"/>
                                </svg> Ayuda
                            </a>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
</nav>
<div class="row d-flex mx-auto mt-5 py-3" style="background-color:#f52b14">
    <div class="col-sm-12 col-md-2 col-lg-3 text-center mt-2">
    <span class="text-white">
        <svg class="bi" width="20" height="20" fill="currentColor">
            <use xlink:href="library/icons/bootstrap-icons.svg#envelope-paper-fill"/>
        </svg>  
        <a href="mailto:contacto@digitalcode.com" class="text-white text-decoration-none"> 
            contacto@digitalcode.com
        </a>
    </span>
    </div>
    <div class="col-sm-12 col-md-2 col-lg-3 text-center mt-2">
        <span class="text-white">
            <svg class="bi" width="20" height="20" fill="currentColor">
                <use xlink:href="library/icons/bootstrap-icons.svg#phone-vibrate-fill"/>
            </svg>
            <a href="tel:55-55-55-55-55" class="text-decoration-none text-white"> 
                55-55-55-55-55
            </a>
        </span>
    </div>
    <div class="col-sm-12 col-md-8 col-lg-6 text-center mt-2">
    <span class="text-white">
        <svg class="bi" width="20" height="20" fill="currentColor">
            <use xlink:href="library/icons/bootstrap-icons.svg#facebook"/>
        </svg>&nbsp&nbsp
        <svg class="bi" width="20" height="20" fill="currentColor">
            <use xlink:href="library/icons/bootstrap-icons.svg#twitter"/>
        </svg>&nbsp&nbsp
        <svg class="bi" width="20" height="20" fill="currentColor">
            <use xlink:href="library/icons/bootstrap-icons.svg#instagram"/>
        </svg>&nbsp;&nbsp;  Numero de Visitas: <?php echo $contador; ?>
    </span>
    </div>
</div>