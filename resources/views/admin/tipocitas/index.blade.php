<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Dashboard Admin </title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
</head>

<body class="bg-dark">
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-1 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 mx-3 px-2 text-warning" href="#">Zapateria ISA</a>
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="#">Cerrar Sesion</a>
            </div>
        </div>
    </header>

    <div class="container-fluid bg-dark text-white">
        <div class="row">
            <main class="col-md-10 ms-sm-auto col-lg-12 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2 text-warning">Dashboard</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Reportes en PDF</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Reportes en Excel</button>
                        </div>
                    </div>
                </div>
                <div class="row px-md-4 text-dark">
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-center">Tipos de Roles</h5>
                                <p class="card-text text-center">With supporting text below as a natural lead-in to
                                    additional content.</p>
                                <div class="text-center">
                                    <a href="{{ route('tiporoles') }}" class="btn btn-primary">Visualizar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-center">Tipos de Citas</h5>
                                <p class="card-text text-center">With supporting text below as a natural lead-in to
                                    additional content.</p>
                                <div class="text-center">
                                    <a href="{{ route('tipocitas') }}" class="btn btn-primary">Visualizar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-center">Productos</h5>
                                <p class="card-text text-center">With supporting text below as a natural lead-in to
                                    additional content.</p>
                                <div class="text-center">
                                    <a href="{{route('producto')}}" class="btn btn-primary">Visualizar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row px-md-4 py-2 text-dark">
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-center">Citas</h5>
                                <p class="card-text text-center">With supporting text below as a natural lead-in to
                                    additional content.</p>
                                <div class="text-center">
                                    <a href="{{route('citas')}}" class="btn btn-primary">Visualizar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-center">Carrito</h5>
                                <p class="card-text text-center">With supporting text below as a natural lead-in to
                                    additional content.</p>
                                <div class="text-center">
                                    <a href="{{route('carrito')}}" class="btn btn-primary">Visualizar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-center">Usuarios</h5>
                                <p class="card-text text-center">With supporting text below as a natural lead-in to
                                    additional content.</p>
                                <div class="text-center">
                                    <a href="{{ route('usuarios') }}" class="btn btn-primary">Visualizar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="py-2 text-warning">
                        <form class="row g-1 border border-warning border-3 rounded-top" action="{{ route('agregarTC') }}"
                            method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="col-sm-6 offset-sm-3 text-center">
                                <!-- Utiliza offset-sm-3 para centrar en pantallas grandes -->
                                <label for="inputEmail4" class="form-label">Descripcion de la Cita</label>
                                <input type="text" class="form-control" name="Descripcion">
                            </div>
                            <div class="col-sm-12 py-2">
                                <button type="submit" class="btn btn-success">Crear Tipo de Citas</button>
                            </div>
                        </form>
                    </div>
                </div>
                <h1 class="text-warning">Visualización de Tipos de Citas</h1>
                <div class="table-responsive py-3">
                    <table class="table table-striped table-sm text-white">
                        <thead class="text-center">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tipo de Cita</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tbody>
                            @foreach ($TipoCitas as $TC)
                                <tr class="text-white text-center">
                                    <td>{{ $TC->ID_TipoCitas }}</td>
                                    <td>{{ $TC->Descripcion }}</td>
                                    <td>
                                        <div class="btn-group" role="group"
                                            aria-label="Basic mixed styles example">
                                            <a href="{{ route('eliminarTC', ['id' => $TC->ID_TipoCitas]) }}"><button
                                                    type="button" class="btn btn-danger">Eliminar</button>
                                                <a href="{{ route('editarTC', ['id' => $TC->ID_TipoCitas]) }}"><button
                                                        type="button" class="btn btn-success">Editar</button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script>
    <script src="dashboard.js"></script>
</body>

</html>
