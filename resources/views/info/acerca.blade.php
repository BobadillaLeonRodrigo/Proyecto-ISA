<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            background-color: #f8f9fa;
            color: #000;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            margin-top: 50px;
        }

        h1,
        h2 {
            text-align: center;
            color: #000;
            font-weight: bold;
        }

        .list-group-item {
            background-color: rgba(196, 155, 99, 0.2);
            border-color: #c49b63;
            color: #c49b63;
        }

        .value {
            color: #000;
            font-weight: bold;
        }
    </style>
</head>

<body>
    @include('partials.header')
    <div class="container mb-5">
        <h1 class="display-4">Somos Zapateria ISA</h1>
        <h2 class="mt-4">Valores:</h2>
        <ul class="list-group">
            <li class="list-group-item"><span class="value">Honestidad:</span> La honestidad es el valor más importante
                de nuestra empresa, ya que es el pilar de la creación y asimilación para nuestros clientes.</li>
            <li class="list-group-item"><span class="value">Transparencia:</span> La transparencia es muy importante,
                ya que siempre brindaremos la información que nos soliciten los usuarios de nuestra empresa y tendremos
                presente y claro los precios que damos en nuestros productos.</li>
            <li class="list-group-item"><span class="value">Pasión:</span> Siempre trabajaremos con pasión así nuestro
                trabajo y hacia nuestros clientes, los cuales recibiremos siempre con los brazos abiertos y una buena
                sonrisa.</li>
            <li class="list-group-item"><span class="value">Diferencia:</span> Nuestra empresa siempre mostrará una
                diferencia a las que tenemos en el mismo mercado de competencia, nos diferenciaremos por la calidad de
                los productos y los mejores precios que hay en el mercado.</li>
            <li class="list-group-item"><span class="value">Calidad:</span> Para ofrecer la mejor calidad a los
                clientes, siempre trabajaremos con los mejores productos del mercado.</li>
            <li class="list-group-item"><span class="value">Responsabilidad Social:</span> Ser parte de los temas
                sociales es muy importante por lo cual estaremos muy cerca de ser responsables sociales y poder ser
                empáticos con el medio ambiente y la sociedad.</li>
        </ul>
        <h2 class="mt-3">Metas:</h2>
        <ul class="list-group">
            <li class="list-group-item"><span class="value">Objetivo económico:</span> La empresa busca un desarrollo
                económico satisfactorio.</li>
            <li class="list-group-item"><span class="value">Corto plazo:</span> Esperan que sus productos sean bien
                acogidos a corto plazo en la sociedad.</li>
            <li class="list-group-item"><span class="value">Expansión:</span> Planifican sostener y expandir sucursales
                para abastecer ciudades y crecer a nivel nacional.</li>
            <li class="list-group-item"><span class="value">Enfoque en calidad:</span> Destacan la importancia de tener
                productos con diseño y calidad excelentes.</li>
            <li class="list-group-item"><span class="value">Satisfacción del cliente:</span> La meta principal es la
                satisfacción total del cliente.</li>
            <li class="list-group-item"><span class="value">Calidad en productos y servicios:</span> Utilizan
                materiales de alta calidad y ofrecen servicios de excelencia.</li>
            <li class="list-group-item"><span class="value">Zapatos:</span> Especial énfasis en la fina terminación
                para lograr la mejor exposición de zapatos.</li>
            <li class="list-group-item"><span class="value">Invitación al cliente:</span> Invitan a poner a prueba su
                capacidad de servicio.</li>
        </ul>
    </div>
    @include('partials.footer')
</body>

</html>
