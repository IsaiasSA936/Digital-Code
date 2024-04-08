<?php 
include 'conexion.php';
// accion para registrar email en el newslatter 
if(isset($_POST['btnNewslatter'])){
    // recuperar el valor de formulario newslatter
    $EmailNew = $connect->real_escape_string($_POST['News']);
    // consulata para verificar si el email ya se encuentra dentro de la base de datos
    $VerificarEmail = "SELECT * FROM Newsllater WHERE EmailNews = '$EmailNew'";
    $ResultadoV = $connect->query($VerificarEmail);
    // verificar si existe el email mandar alerta indicando la opcion dada
    if ($ResultadoV->num_rows > 0) {
        $Mensaje.="<div class='alert alert-danger text-center alert-dismissible fade show' role='alert'>
                        <strong>Lo sentimos!</strong> el email ya se encuentra resgistrado en el Newsletter.
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
    } else {
       // de lo contrario se realiza la consulta para insertar el email dentro de la base de datos
        $InsertEmail ="INSERT INTO Newsllater(Id_Newsllater,EmailNews)VALUES(NULL,'$EmailNew')";
        $ResultadoInsert = $connect->query($InsertEmail);
        if($ResultadoInsert  > 0){
            $Mensaje.="<div class='alert alert-success text-center alert-dismissible fade show' role='alert'>
                        <strong>Excelente!</strong> Tu email se resgistro en nuestro Newsletter. Recibiras noticias de nosotros gracias.
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
        }
        else{
            $Mensaje.="<div class='alert alert-danger text-center alert-dismissible fade show' role='alert'>
                        <strong>Error !</strong> Tu email no se resgistro en nuestro Newsletter. Existe un error por favor intenta mas tarde gracias.
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
        }

    }
    
    $connect->close();
}
?>