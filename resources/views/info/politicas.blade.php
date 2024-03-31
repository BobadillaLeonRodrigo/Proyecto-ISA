<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>

    </style>
</head>

<body>
    @include('partials.header')
    <div class="container py-2 mb-3">
        <h1 class="display-4 text-center py-2">Política de Calidad - Zapatería ISA</h1>
        <figcaption class="blockquote-footer text-center fs-4">
            ISO 9001:2015(es) <cite title="Source Title">Sistemas de gestión de la calidad</cite>
        </figcaption>
        <div class="accordion" id="accordionExample">
            <!-- Enfoque al cliente -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Enfoque al cliente (Sección 5.2)
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>Identificar y comprender las necesidades y expectativas de los clientes de la zapatería
                                con
                                respecto al catálogo de productos.</li>
                            <li>Asegurarse de que el software desarrollado satisfaga estas necesidades y expectativas
                                del
                                cliente.</li>
                            <li>Recopilar retroalimentación del cliente sobre la usabilidad y funcionalidad del
                                software.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Liderazgo y compromiso -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Liderazgo y compromiso (Sección 5.1)
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>Asegurar que la alta dirección de la zapatería esté comprometida con el desarrollo del
                                software y su conformidad con los requisitos de calidad.</li>
                            <li>Designar un equipo de proyecto responsable del desarrollo del software y garantizar su
                                capacitación y recursos adecuados.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Gestión de riesgos -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Gestión de riesgos (Sección 6.1)
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>Identificar y evaluar los riesgos asociados con el desarrollo del software y su
                                implementación en la zapatería.</li>
                            <li>Implementar medidas para mitigar los riesgos identificados y garantizar la continuidad
                                del
                                proyecto.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Proceso de desarrollo de software -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Proceso de desarrollo de software (Sección 8.1)
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>Establecer procesos documentados para el desarrollo, la prueba y la implementación del
                                software.</li>
                            <li>Seguir prácticas de desarrollo ágiles o tradicionales, dependiendo de las necesidades y
                                la
                                capacidad de la organización.</li>
                            <li>Asegurarse de que el software sea diseñado para ser fácilmente mantenible y escalable.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Control de cambios -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Control de cambios (Sección 6.3)
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>Establecer un proceso para gestionar y controlar los cambios en el software a lo largo
                                de su
                                ciclo de vida.</li>
                            <li>Documentar los cambios realizados, sus justificaciones y el impacto en el producto
                                final.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Mejora continua -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        Mejora continua (Sección 10)
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>Recopilar métricas de desempeño del software, como tiempos de carga, errores y
                                satisfacción
                                del usuario, y utilizarlas para identificar áreas de mejora.</li>
                            <li>Realizar revisiones periódicas del software y su implementación en la zapatería para
                                identificar oportunidades de mejora y optimización.</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>
