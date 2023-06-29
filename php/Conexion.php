
<?php

    $host = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "musica";


    try{
        $bd = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);       
    }catch(Exception $mensaje){
        echo "Error de conexión".$mensaje->getMessage();
    }

?>