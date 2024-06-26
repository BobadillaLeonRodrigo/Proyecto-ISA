<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .carousel-item {
            width: 100%;
            /* Ancho completo para cada elemento del carrusel */
        }

        .custom-img-size {
            width: 100%;
            /* Ancho completo para la imagen dentro del carrusel */
            max-height: 500px;
            /* Establece la altura máxima en 300 píxeles */
            object-fit: cover;
            /* Ajusta el tamaño y la posición de la imagen */
        }

        .long-btn {
            width: 200px;
            /* Define el ancho deseado para el botón */
        }
    </style>
</head>

<body>
    @include('partials.header')

    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="{{ asset('img/Bota4.jpg') }}" class="d-block mx-auto img-fluid custom-img-size"
                    alt="Calazado ISA">
                <div class="carousel-caption d-none d-md-block">
                    <figure class="text-center">
                        <blockquote class="blockquote">
                            <p>¡Pisa con estilo, elige ISA para caminar con elegancia!</p>
                        </blockquote>
                        <figcaption class="blockquote-footer text-secondary">
                            <cite title="Source Title">Zapatería ISA</cite>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="{{ asset('img/Bota2.jpg') }}" class="d-block mx-auto img-fluid custom-img-size"
                    alt="Calazado ISA">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="{{ asset('img/Bota3.jpg') }}" class="d-block mx-auto img-fluid custom-img-size"
                    alt="Calazado ISA">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container-fluid">
        <div class="row py-4">
            <div class="col-12">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                    <!-- Card 1 -->
                    <div class="col-md-4 col-6">
                        <div class="card h-100">
                            <img src="{{ asset('img/Producto1.jpg') }}" class="card-img-top h-50 w-100 img-fluid"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Producto 1</h5>
                                <p class="card-text">Descripción breve del producto.</p>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="talla1" class="form-label">Talla:</label>
                                        <select class="form-select" id="talla1">
                                            <option selected disabled>Selecciona talla</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="color1" class="form-label">Color:</label>
                                        <select class="form-select" id="color1">
                                            <option selected disabled>Selecciona color</option>
                                            <option value="Negro">Negro</option>
                                            <option value="Azul">Azul</option>
                                            <option value="Rojo">Rojo</option>
                                            <!-- Agrega más opciones de color según sea necesario -->
                                        </select>
                                    </div>
                                </div>
                                <p class="card-text">
                                    Precio: <strong>$50.00</strong>
                                </p>
                                <div class="text-center">
                                    <a href="#" class="btn btn-primary">Ver detalles</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="col-md-4 col-6">
                        <div class="card h-100">
                            <img src="{{ asset('img/Producto2.jpg') }}" class="card-img-top h-50 w-100 img-fluid"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Producto 2</h5>
                                <p class="card-text">Descripción breve del producto.</p>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="talla1" class="form-label">Talla:</label>
                                        <select class="form-select" id="talla1">
                                            <option selected disabled>Selecciona talla</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="color1" class="form-label">Color:</label>
                                        <select class="form-select" id="color1">
                                            <option selected disabled>Selecciona color</option>
                                            <option value="Negro">Negro</option>
                                            <option value="Azul">Azul</option>
                                            <option value="Rojo">Rojo</option>
                                            <!-- Agrega más opciones de color según sea necesario -->
                                        </select>
                                    </div>
                                </div>
                                <p class="card-text">
                                    Precio: <strong>$50.00</strong>
                                </p>
                                <div class="text-center">
                                    <a href="#" class="btn btn-primary">Ver detalles</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="col-md-4 col-6">
                        <div class="card h-100">
                            <img src="{{ asset('img/Producto3.jpg') }}" class="card-img-top h-50 w-100 img-fluid"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Producto 3</h5>
                                <p class="card-text">Descripción breve del producto.</p>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="talla1" class="form-label">Talla:</label>
                                        <select class="form-select" id="talla1">
                                            <option selected disabled>Selecciona talla</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="color1" class="form-label">Color:</label>
                                        <select class="form-select" id="color1">
                                            <option selected disabled>Selecciona color</option>
                                            <option value="Negro">Negro</option>
                                            <option value="Azul">Azul</option>
                                            <option value="Rojo">Rojo</option>
                                            <!-- Agrega más opciones de color según sea necesario -->
                                        </select>
                                    </div>
                                </div>
                                <p class="card-text">
                                    Precio: <strong>$50.00</strong>
                                </p>
                                <div class="text-center">
                                    <a href="#" class="btn btn-primary">Ver detalles</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="col-md-4 col-6">
                        <div class="card h-100">
                            <img src="{{ asset('img/Producto4.jpg') }}" class="card-img-top h-50 w-100 img-fluid"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Producto 4</h5>
                                <p class="card-text">Descripción breve del producto.</p>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="talla1" class="form-label">Talla:</label>
                                        <select class="form-select" id="talla1">
                                            <option selected disabled>Selecciona talla</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="color1" class="form-label">Color:</label>
                                        <select class="form-select" id="color1">
                                            <option selected disabled>Selecciona color</option>
                                            <option value="Negro">Negro</option>
                                            <option value="Azul">Azul</option>
                                            <option value="Rojo">Rojo</option>
                                            <!-- Agrega más opciones de color según sea necesario -->
                                        </select>
                                    </div>
                                </div>
                                <p class="card-text">
                                    Precio: <strong>$50.00</strong>
                                </p>
                                <div class="text-center">
                                    <a href="#" class="btn btn-primary">Ver detalles</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card 5 -->
                    <div class="col-md-4 col-6">
                        <div class="card h-100">
                            <img src="{{ asset('img/Producto5.jpg') }}" class="card-img-top h-50 w-100 img-fluid"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Producto 5</h5>
                                <p class="card-text">Descripción breve del producto.</p>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="talla1" class="form-label">Talla:</label>
                                        <select class="form-select" id="talla1">
                                            <option selected disabled>Selecciona talla</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="color1" class="form-label">Color:</label>
                                        <select class="form-select" id="color1">
                                            <option selected disabled>Selecciona color</option>
                                            <option value="Negro">Negro</option>
                                            <option value="Azul">Azul</option>
                                            <option value="Rojo">Rojo</option>
                                            <!-- Agrega más opciones de color según sea necesario -->
                                        </select>
                                    </div>
                                </div>
                                <p class="card-text">
                                    Precio: <strong>$50.00</strong>
                                </p>
                                <div class="text-center">
                                    <a href="#" class="btn btn-primary">Ver detalles</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card 6 -->
                    <div class="col-md-4 col-6">
                        <div class="card h-100">
                            <img src="{{ asset('img/Producto6.jpg') }}" class="card-img-top h-50 w-100 img-fluid"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Producto 6</h5>
                                <p class="card-text">Descripción breve del producto.</p>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="talla1" class="form-label">Talla:</label>
                                        <select class="form-select" id="talla1">
                                            <option selected disabled>Selecciona talla</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="color1" class="form-label">Color:</label>
                                        <select class="form-select" id="color1">
                                            <option selected disabled>Selecciona color</option>
                                            <option value="Negro">Negro</option>
                                            <option value="Azul">Azul</option>
                                            <option value="Rojo">Rojo</option>
                                            <!-- Agrega más opciones de color según sea necesario -->
                                        </select>
                                    </div>
                                </div>
                                <p class="card-text">
                                    Precio: <strong>$50.00</strong>
                                </p>
                                <div class="text-center">
                                    <a href="#" class="btn btn-primary">Ver detalles</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Puedes agregar más tarjetas según sea necesario -->
                </div>
            </div>
            <div class="col-12 mb-4">
                <div class="container-fluid mt-5">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-6 text-center">
                            <h1 class="mb-4">¡Bienvenido a Zapatería ISA!</h1>
                            <p class="lead">Explora nuestra amplia selección de calzado de alta calidad.</p>
                        </div>
                        <div class="col-md-6">
                            <!-- Se cambia el tamaño de la columna a col-md-6 para que ocupe la mitad del ancho en pantallas medianas y grandes -->
                            <form action="{{ route('agregarCiInicio') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <h2 class="text-center mb-4">Genera Una Cita</h2>
                                <div class="mb-3">
                                    <label for="fecha" class="form-label">Fecha de la Cita</label>
                                    <input type="date" class="form-control" id="fecha" name="Fecha"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="hora" class="form-label">Hora de la Cita</label>
                                    <input type="time" class="form-control" id="hora" name="Hora"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="comentario" class="form-label">Comentario del Cliente</label>
                                    <textarea class="form-control" id="comentario" rows="3" name="Comentario" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="tipo-cita" class="form-label">Tipo de Cita</label>
                                    <select class="form-select" id="tipo-cita" name="ID_TipoCitas" required>
                                        <option value="" disabled selected>Selecciona el tipo de cita</option>
                                        <option value="1">Calzado Personalizado</option>
                                        <option value="2">Medicas del Pie</option>
                                    </select>
                                </div>
                                <!-- Agrega el input oculto -->
                                <input type="hidden" id="ID_Usuario" name="ID_Usuario" value="2">
                                <!-- Fin del input oculto -->
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-lg long-btn">
                                        Solicitar Cita</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('partials.footer')
</body>

</html>
