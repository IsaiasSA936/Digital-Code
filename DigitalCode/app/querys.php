<?php 
    include 'conexion.php';
    // consulta para extraer datos de los cursos aleatorios limite 3
    $MCursos = "SELECT * FROM Cursos ORDER BY RAND() LIMIT 3";
    $EMCursos = $connect->query($MCursos);
    $connect->close();

?>