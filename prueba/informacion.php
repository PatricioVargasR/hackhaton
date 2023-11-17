<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página de Información</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 30px;
        }
        nav ul li a {
            text-decoration: none;
            color: white;
        }
        main {
            padding: 20px;
        }
        section {
            margin-bottom: 30px;
        }
        h2 {
            border-bottom: 2px solid #333;
            padding-bottom: 45px;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .contenedor {
            width: 70%; /* Ancho del contenedor principal */
            margin: 0 auto; /* Centrar el contenedor */
        }
        .texto {
            float: left; /* Hacer que el texto esté a la izquierda */
            width: 50%; /* Ancho del texto */
        }
        .imagen {
            float: right; /* Hacer que la imagen esté a la derecha */
            width: 20%; /* Ancho de la imagen */
        }

    </style>
</head>
<body>
    <header>
        <h1>Tierra Tejida</h1>
        <nav>
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#nosotros">Nosotros</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="inicio">
            <h2>Origen del Bordado </h2>
            <p>El arte del bordado tiene sus raíces en el estado de Hidalgo, específicamente en la región de Tenango de Doria. Este estilo de bordado tiene sus orígenes en la tradición Otomí y sus patrones honran la identidad de su comunidad, capturando aspectos importantes de su herencia cultural y visión del mundo ancestral.
San Nicolás es una localidad otomí-tepehua situada a 8 kilómetros de Tenango de Doria, en las montañas de Hidalgo. Es reconocida como "la cuna de la artesanía del bordado", ya que una gran parte de su gente se dedica a crear los distintivos tenangos, originarios de la zona. "Tenango" tiene raíces en el náhuatl y significa "lugar de murallas". Los artesanos expresan a través de estos diseños y su consecuente bordado los elementos representativos de su cultura y entorno, desde festividades y danzas hasta la flora y fauna que los rodea. Estas obras suelen estar llenas de una amplia gama de colores, ya sea en pintura o bordado.
</p>
<div class="imagen">
            <img src="tenango.jpeg" alt="Descripción de la imagen" width="200">
        </div>
        </section>

        <section id="servicios">
            <h2>Servicios</h2>
            <p>Ofrecemos una amplia gama de servicios, incluyendo...</p>
            <ul>
                <li>Servicio 1</li>
                <li>Servicio 2</li>
                <li>Servicio 3</li>
                <!-- Agrega más servicios según sea necesario -->
            </ul>
        </section>

        <section id="nosotros">
            <h2>Nosotros</h2>
            <p>Somos una empresa comprometida con...</p>
            <p>Detalles sobre quiénes somos, nuestra misión, visión, valores, etc.</p>
        </section>

    </main>


</body>
</html>