<?php 
include 'app/conexion.php';

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/code.css">
    <link rel="stylesheet" href="css/dark.css">
    <script src="js/Jquery.js"></script>
    <title>Inicio de sesion | Linkify</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <h1 class="text-center fs-1 display-2 mt-3">
                <span>
                    <span style="color:#f52b14">L&nbsp;</span>
                    <span style="color:#f52b14">i&nbsp;</span>
                    <span style="color:#f52b14">n&nbsp;</span>
                    <span style="color:#f52b14">k&nbsp;</span>
                    <span style="color:#f52b14">i&nbsp;</span>
                    <span style="color:#f52b14">f&nbsp;y</span>
                    <span style="color:#f52b14; font-size:100px">.</span>
                </span>
            </h1>
        </div>
        <div class="row mt-3 text-center">
            <div class="alert alert-dismissible fade show text-light" role="alert" style="background-color:rgba(13,204,207,0.8);">
                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
        <div class="row mt-2">
            <div class="d-flex justify-content-center mt-2">
                
            
            
                <div class="col-sm-10 col-md-8 col-lg-6">
                    <div class="card shadow bg-light">
                        <div class="row mt-2">
                            <div class="row mt-2 mb-2">
                                <span class="text-center">Inicio de Sesion</span>
                            </div>
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                <div class="container">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <svg class="bi" width="25" height="25" fill="currentColor" style="color:#0DCCCF">
                                                <use xlink:href="library/icons/bootstrap-icons.svg#person-lock" />
                                            </svg>
                                        </span>
                                        <input type="text" class="form-control" name="usuario" placeholder="Usuario" aria-label="Usuario" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <svg class="bi" width="25" height="25" fill="currentColor" style="color:#0DCCCF">
                                                <use xlink:href="library/icons/bootstrap-icons.svg#lock-fill" />
                                            </svg>
                                        </span>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                                        <button class="btn btn-outline-secondary" type="button" id="togglePassword">Mostrar</button>
                                    </div>
                                    <div class="row mt-3 mb-3 d-flex justify-content-center">
                                        <button type="submit" class="btnRegistro" name="btnIngresar">
                                            Ingresar 
                                            <svg class="bi" width="25" height="25" fill="currentColor">
                                                <use xlink:href="library/icons/bootstrap-icons.svg#arrow-bar-right" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="container">
                            <div class="row mt-2 mb-2 d-flex justify-content-center">
                                <div class="col-sm-8 col-md-8 col-lg-8 d-flex justify-content-start">
                                            <svg class="bi" width="25" height="25" fill="currentColor" style="color:#0DCCCF">
                                                <use xlink:href="library/icons/bootstrap-icons.svg#key-fill"/>
                                            </svg>&nbsp; Perdiste tu cuenta | &nbsp;
                                            <svg class="bi" width="25" height="25" fill="currentColor" style="color:#0DCCCF">
                                                <use xlink:href="library/icons/bootstrap-icons.svg#person-add"/>
                                            </svg>&nbsp; Registrate
                                    </div>
                                <div class="col-sm-4 col-md-4 col-lg-4 text-end">
                                    <div class="row">
                                        <div class="col d-flex justify-content-end">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="darkSwitch">
                                            <div>
                                        </div>
                                        <div class="col d-flex justify-content-end">
                                            <svg class="bi" width="20" height="20" fill="currentColor">
                                                <use xlink:href="library/icons/bootstrap-icons.svg#sun-fill"/>
                                            </svg> |  
                                            <svg class="bi" width="16" height="16" fill="currentColor">
                                                <use xlink:href="library/icons/bootstrap-icons.svg#moon-stars-fill"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 text-center">
        <div class="row mt-2 d-flex justify-content-center">
            <div class="col-sm-6 col-md-6 col-lg-6">
                <a href="index" class="text-decoration-none text-secondary">
                <svg class="bi" width="25" height="25" fill="currentColor" style="color:#f52b14">
                    <use xlink:href="library/icons/bootstrap-icons.svg#arrow-bar-left" />
                </svg> &nbsp; Regresar
                </a>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
            <svg class="bi" width="25" height="25" fill="currentColor" style="color:#f52b14">
                    <use xlink:href="library/icons/bootstrap-icons.svg#exclamation-circle-fill" />
                </svg> &nbsp; Ayuda
            </div>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/dark-mode.js"></script>
    <script src="js/code.js"></script>
</body>

</html>