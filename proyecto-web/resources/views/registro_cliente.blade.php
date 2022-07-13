<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">

    <title>Registro de Cliente</title>
  </head>
  <body>
    <header>
            <nav class="navbar navbar-expand-lg navbar-light BarraMenuPrincipal">
        <div class="container-fluid">
            <a class="logo" href="#"><img src="{{asset('img/logosyb.png')}}" class="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="color-letra-menu active" aria-current="page" href="index.php">Inicio</a>
                <a class="color-letra-menu" href="{{route('registro_cliente')}}">Registrar Clientes</a>
                <a class="color-letra-menu" href="{{route('ver_clientes')}}">Clientes</a>
                <a class="color-letra-menu" href="#">Stock Productos</a>


            </div>
            </div>
        </div>
        </nav>
    </header>
    <main class="container-fluid">
        <div class="row mt-5">
            <div class="col-12 col-md-8 col-lg-5 mx-auto">
                <div class="card">
                    <div class="card-header bg-warning">
                        <span>Ingresar Cliente</span>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="nombre-txt" class="form-label">Nombre</label>
                            <input type="text" id="nombre-txt" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="apellido-txt" class="form-label">Apellido</label>
                            <input type="text" id="apellido-txt" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="rut-txt" class="form-label">RUT</label>
                            <input type="text" id="rut-txt" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="fono-txt" class="form-label">Telefono</label>
                            <input type="text" id="fonos-txt" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="direccion-txt" class="form-label">Dirección</label>
                            <input type="text" id="direccion-txt" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="correo-txt" class="form-label">Correo</label>
                            <input type="text" id="correo-txt" class="form-control">
                        </div>
                    </div>
                    <div class="card-footer d-grid gap-1">
                        <button type="button" class="btn btn-primary">Registrar</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    -->
  </body>
</html>
