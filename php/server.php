<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar qué acción se debe realizar según los datos recibidos

    if (isset($_POST['accion'])) {
        $accion = $_POST['accion'];

        switch ($accion) {
            case 'GuardarUsuario':
                GuardarUsuario();
                break;
            case 'ValidarUsuario':
                ValidarUsuario();
                break;
            case 'Upload':
                Upload();
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

function GuardarUsuario()
{
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
    } catch (PDOException $e) {
        // Manejar errores de conexión o consultas
        echo "Error: " . $e->getMessage();
    }

}

function ValidarUsuario()
{
    include 'conexion.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM user WHERE usuario = '$username' AND clave = '$password'";

    $stm = $bd->query($query);
    $result = $stm->fetchAll();
    foreach ($result as $row) {
        session_start();
        $_SESSION['id_user'] = $row['id_user']; // Almacena el ID del usuario en una variable de sesión
        echo "<script>alert('Inicio de sesión exitoso');</script>";
        echo $row['id_user'];
        header("Location: /app/home/");
    }
}
function GetSongs()
{
    include 'conexion.php';
    session_start();    
    $id_user = $_SESSION['id_user'];
    
    $query = "SELECT * FROM archivos WHERE id_user = '$id_user' ";

    $stm = $bd->query($query);
    $result = $stm->fetchAll();
    return $result;
    
}

function Upload()
{
    include 'conexion.php';

    // Obtener los datos del formulario
    $nombreCancion = $_POST['nombre_cancion'];
    $genero = $_POST['genero'];
    session_start();
    $id_user = $_SESSION['id_user'];

    // Obtener el contenido del archivo
    $archivo = file_get_contents($_FILES['archivo']['tmp_name']);

    try {
        // Preparar la consulta SQL con parámetros
        $sql = "INSERT INTO archivos (nombre_cancion, genero, archivo,id_user) VALUES (:nombreCancion, :genero, :archivo,:id_user)";

        // Preparar la sentencia
        $stmt = $bd->prepare($sql);

        // Asignar los valores de los parámetros
        $stmt->bindParam(':nombreCancion', $nombreCancion);
        $stmt->bindParam(':genero', $genero);
        $stmt->bindParam(':archivo', $archivo, PDO::PARAM_LOB);
        $stmt->bindParam(':id_user', $id_user);

        // Ejecutar la sentencia
        $stmt->execute();

        header("Location: /app/home/");
    } catch (PDOException $e) {
        echo "Error al guardar la canción: " . $e->getMessage();
    }
}



?>