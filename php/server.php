<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Verificar qué acción se debe realizar según los datos recibidos
    
        if (isset($_POST['accion'])) {
            $accion = $_POST['accion'];
    
            switch ($accion) {
                case 'GuardarUsuario':
                    GuardarUsuario();
                    break;
                default:
                    // Acción no válida
                    echo "Acción no válida";
                    break;
            }
        } else {
            // No se proporcionó ninguna acción
            echo "No se proporcionó ninguna acción";
        }
    }
    
    function GuardarUsuario() {
        include 'conexion.php';
        try {
            // Obtener los datos del formulario
            $nombre = $_POST['nombre'];
            $usuario = $_POST['usuario'];
            $email = $_POST['email'];
            $contraseña = $_POST['clave'];
        
            // Preparar la consulta INSERT
            $query = "INSERT INTO `user` (`nombre`, `usuario`, `email`, `clave`) VALUES (?, ?, ?, ?)";
            $stmt = $bd->prepare($query);
            $stmt->execute([$nombre, $usuario, $email, $contraseña]);
        
            // Imprimir mensaje de éxito
            
            header("Location: /app/Index.php");
        } catch(PDOException $e) {
            // Manejar errores de conexión o consultas
            echo "Error: " . $e->getMessage();
        }
   }

   function UploadArchivo()
   {
        include 'conexion.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los datos del formulario
        $nombreCancion = $_POST["nombre_cancion"];
        $genero = $_POST["genero"];
        $archivoMusica = $_FILES["archivo_musica"]["tmp_name"];
    
        // Verificar si se ha seleccionado un archivo de música
        if ($archivoMusica) {
            // Leer el contenido del archivo de música
            $contenidoArchivo = file_get_contents($archivoMusica);
    
            try {
                
    
                // Preparar la consulta SQL para insertar los datos en la tabla
                $stmt = $db->prepare("INSERT INTO archivos (nombre_cancion, archivo, genero) VALUES (?, ?, ?)");
                $stmt->bindParam(1, $nombreCancion);
                $stmt->bindParam(2, $genero);
                $stmt->bindParam(3, $contenidoArchivo, PDO::PARAM_LOB);
    
                // Ejecutar la consulta
                $stmt->execute();
    
                echo "Los datos se han guardado correctamente.";
            } catch (PDOException $e) {
                echo "Error de conexión: " . $e->getMessage();
            }
        } else {
            echo "No se ha seleccionado un archivo de música.";
        }
    }

   }
    




   

 ?>