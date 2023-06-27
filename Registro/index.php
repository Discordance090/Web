<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
    <!-- Agrega los enlaces a los archivos CSS de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/site.css/stile.css">
</head>
<style>
    

 </style>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">9 X</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  </header>
<body>
    <div class="container p">
        <h1>Registro</h1>
            <form class="form-group" action="../php/server.php" method="post" >
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="nombre">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email"class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="usuario">usuario</label>
                <input type="text" name="usuario"class="form-control" id="usuario">
            </div>
            <div class="form-group">
                <label for="clave">contraseña</label>
                <input type="text" name="clave"class="form-control" id="clave">
            </div>
           

            <button type="submit" class="btn btn-secondary" value="GuardarUsuario" name="accion" >Enviar</button>
        </form>
    </div>

    <!-- Agrega el enlace al archivo JS de Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
<footer class="bg-dark text-light footer py-3 mt-4">
    <div class="container text-center">
      <p>Derechos de autor © 2023 Mi Página de Música. Todos los derechos reservados. daga mamalo</p>
    </div>
  </footer>
</html>