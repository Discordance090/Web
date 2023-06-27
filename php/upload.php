<?php
$nombreCancion = $_POST['nombre_cancion'];
$genero = $_POST['genero'];
var_dump($_FILES);
$archivo = file_get_contents($_FILES['archivo']['tmp_name']);

echo $genero;
echo $nombreCancion;
echo $archivo;


?>