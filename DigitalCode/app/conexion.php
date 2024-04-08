<?php
$servername = "localhost";  // Nombre del servidor MySQL
$username = "root";       // Nombre de usuario de la base de datos
$password = "";    // Contraseña de la base de datos
$dbname = "Linkify";     // Nombre de la base de datos
// Crear la conexión
$connect = new mysqli($servername, $username, $password, $dbname);
// Verificar la conexión
if ($connect->connect_error) {
    die("Conexión fallida: " .$conn->connect_error);
}   
?>