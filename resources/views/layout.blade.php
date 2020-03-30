<html>
    <head>
        <title>Biblioteca Laravel - @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <meta name="description" content="Biblioteca en Laravel">
        <meta name="keywords" content="curso de laravel">
        <meta name="author" content="Brian Walls">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>

        @section('navbar')
            <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
                <!-- Brand -->
                <a class="navbar-brand" href="#">Biblioteca en Laravel</a>

                <!-- Links -->
                <ul class="navbar-nav">
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">Catálogo de libros</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Servicios</a>
                    </li>

                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Usuarios 
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Iniciar sesión</a>
                            <a class="dropdown-item" href="#">Registrarse</a>
                        </div>
                    </li>
                
                </ul>
            </nav>

        @show

        <div class="container">
            @yield('content')
        </div>

        
    </body>
</html>