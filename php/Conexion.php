
<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bd_musica";


    try{
        $bd = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
        echo "Conexión exitosa";
    }catch(Exception $mensaje){
        echo "Error de conexión".$mensaje->getMessage();
    }

?>