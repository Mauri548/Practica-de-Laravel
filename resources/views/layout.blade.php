<!DOCTYPE html>
<html>
    <head>
        <title>Prueba</title>
        <style>
            .active {
                color: red;
                text-decoration: none;
                background: #198754;
            }
            .nav-link:hover {
                background: #198754; 
            }
            /* .detalle {
                background: #198754;
                margin-top: 25px;
            } */
        </style>

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-dark ">
            <div class="container-fluid">
                <a class="navbar-brand text-success" href="#">GestionCliente</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-white {{ setActive('home') }}" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white {{ setActive('cliente.index') }}" href="{{ route('cliente.index') }}">Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white {{ setActive('pago.index') }}" href="{{ route('pago.index') }}">Pagos</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        {{-- <nav class="nav">
            <a class="nav-link {{ setActive('home') }}" aria-current="page" href="{{ route('home') }}">Home</a>
            <a class="nav-link {{ setActive('cliente.index') }}" href="{{ route('cliente.index') }}">Clientes</a>
            <a class="nav-link {{ setActive('portafolio') }}" href="/portafolio">Pagos</a>
        </nav> --}}

        @yield('content')
    </body>
</html>