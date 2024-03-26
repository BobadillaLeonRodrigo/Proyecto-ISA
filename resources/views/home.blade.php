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
    </style>
</head>

<body>
    @include('partials.header')

    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="{{ asset('img/Bota4.jpg') }}" class="d-block mx-auto img-fluid custom-img-size" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <figure class="text-center">
                        <blockquote class="blockquote">
                            <p>A well-known quote, contained in a blockquote element.</p>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            Someone famous in <cite title="Source Title">Source Title</cite>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="{{ asset('img/Bota2.jpg') }}" class="d-block mx-auto img-fluid custom-img-size" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="{{ asset('img/Bota3.jpg') }}" class="d-block mx-auto img-fluid custom-img-size" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/Bota4.jpg') }}" class="d-block mx-auto img-fluid custom-img-size" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    @include('partials.footer')
</body>

</html>