<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@ViewData["Title"] - Evaluacion3</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/site.css" asp-append-version="true" />
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
       

        <div class="container mt-4">
            <h2>Login</h2>
            <form action="./php/server.php" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-secondary" value="ValidarUsuario" name="accion" >Enviar</button>
                  <a class="btn btn-primary" href="./Registro" role="button">Create Account</a>
                </div>
            </form>
        </div>
    </main>

    <footer class="bg-dark text-light footer py-3 mt-4">
        <div class="container text-center">
            <p>Derechos de autor © 2023 Mi Página de Música. Todos los derechos reservados. daga mamalo</p>
        </div>
    </footer>

   
</body>

</html>
