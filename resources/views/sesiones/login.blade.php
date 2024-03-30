<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login ISA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/sesiones.css') }}">
    <style>

    </style>
</head>

<body>
    @include('partials.headerlogin')
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center mt-4 mb-3"><!-- Añadido mt-5 para margen superior -->
            <div class="col-md-6"><!-- Columna para el formulario -->
                <div class="text-center"><!-- Div para centrar el contenido -->
                    <h2 class="fw-bold pb-3">Inicia Sesión</h2><!-- Encabezado del formulario -->
                    <form action="{{ route('valida') }}" method="POST"><!-- Formulario -->
                        @csrf
                        <div class="mb-4"><!-- Grupo de entrada de correo electrónico -->
                            <label for="email" class="form-label">&nbsp;<i class="fa-solid fa-envelope"></i> Correo
                                Electrónico:</label>
                            <input type="email" class="form-control" name="Email" placeholder="Correo" required>
                        </div>
                        <div class="mb-4"><!-- Grupo de entrada de contraseña -->
                            <label for="pass" class="form-label">&nbsp;<i class="fa-sharp fa-solid fa-key"></i>
                                Contraseña:</label>
                            <input type="password" class="form-control" name="Contraseña" placeholder="Contraseña"
                                required>
                        </div>
                        <div class="d-grid"><!-- Botón de enviar -->
                            <button type="submit" class="btn btn-outline">Iniciar Sesión</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
</body>

</html>
