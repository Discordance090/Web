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
        
        function ValidarUsuario(){   
            include 'conexion.php';
           
            
                $username = $_POST['username'];
                $password = $_POST['password'];
                
                $query = "SELECT * FROM user WHERE usuario = '$username' AND clave = '$password'";
               
                $stm = $bd->query($query);
                $result = $stm->fetchAll();
               
              
              
                
                foreach($result as $row) {
                    session_start();
                    $_SESSION['id_user'] = $row['id_user']; // Almacena el ID del usuario en una variable de sesión
                    echo "<script>alert('Inicio de sesión exitoso');</script>";
                    echo $row['id_user'];
                }
        
              

               
                
               
        }
        
        /*¨
        function Upload(){
            include 'conexion.php';
            $nombreCancion = $_POST['nombre_cancion'];
            $genero = $_POST['genero'];
            $idUsuario = $_POST['id_usuario'];
            
        }
        */
        
        
        ?>