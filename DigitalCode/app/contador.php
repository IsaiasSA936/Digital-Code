<?php 
// Ruta al archivo de texto que almacenará el contador
$archivo_contador = 'contador.rtf';
// Leer el valor actual del contador
$contador = (file_exists($archivo_contador)) ? intval(file_get_contents($archivo_contador)) : 0;
// Incrementar el contador en uno
$contador++;
// Guardar el nuevo valor del contador en el archivo
file_put_contents($archivo_contador, $contador);
?>