<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">

    <title>Registro de Cliente</title>
  </head>
  <body>
    <header>
            <nav class="navbar navbar-expand-lg navbar-light BarraMenuPrincipal">
        <div class="container-fluid">
            <a class="logo" href="{{route('registro_cliente')}}"><img src="{{asset('img/logosyb.png')}}" class="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="letra-menu" href="{{route('registro_cliente')}}">Registrar Clientes</a>
                <a class="letra-menu" href="{{route('ver_clientes')}}">Clientes</a>
                <a class="letra-menu" href="#">Stock Productos</a>
                <a id="navbar-login " href="#"><button type="button" class="boton-cerrar-sesion">cerrar session</button></a>


            </div>
            </div>
        </div>
        </nav>
    </header>
    <main class="container-fluid">
        @yield("contenido")
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="{{asset('js/axios_config.js')}}"></script>

    @yield("javascript")

  </body>
</html>
