<?php 
include '../php/modules/table/index.php';
include '../php/server.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Evaluacion3</title>
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
                <a class="btn btn-primary" href="../upload/index.php" data-bs-toggle="modal">Upload</a>
            </div>
        </nav>
    </header>

    <main>
    <?php

    echo generarTabla(GetSongs());

    ?>
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