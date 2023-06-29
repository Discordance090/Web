<?php

$id=$_POST['id_archivo'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@ViewData["Title"] - Evaluacion3</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/site.css" asp-append-version="true" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">9 X</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </header>
   <main>
   <div class="container">
        <h1>Editar Cancion</h1>

        <form action="../php/server.php" method="POST" enctype="multipart/form-data">
            <input type="text" hidden name="id_archivo" id="id_archivo" value="<?php echo $id ?>" class="form-control">
            <div class="mb-3">
                <label for="nombre_cancion" class="form-label">Nombre de la canción:</label>
                <input type="text" name="nombre_cancion" id="nombre_cancion" class="form-control">
            </div>

            <div class="mb-3">
                <label for="genero" class="form-label">Género:</label>
                <input type="text" name="genero" id="genero" class="form-control">
            </div>

            <button type="submit" class="btn btn-secondary" value="editar" name="accion" >Enviar</button>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>

   </main>
    <footer class="bg-dark text-light footer py-3 mt-4">
        <div class="container text-center">
            <p>Derechos de autor © 2023 Mi Página de Música. Todos los derechos reservados. daga mamalo</p>
        </div>
    </footer>

    <script src="~/lib/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="~/js/site.js" asp-append-version="true"></script>
</body>

</html>
