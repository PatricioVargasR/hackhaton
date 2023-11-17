<?php
    
    include('includes/config.php');


    $page_title = "Página de Acerca";

    include('includes/header.php');
    include('includes/navbar.php');
?>


    <section class="nosotros" id="nosotros">
        <h2>Acerca de Nosotros</h2>
        <p>
            Descubre nuestra historia de como llevamos el arte a tu hogar.
        </p>
        <div class="fila compañia-info">
            <h3>¿Quiénes somos?</h3>
            <div class="underline"></div>
            <p>
            El Museo del Santo es un museo honorífico, en memoria del luchador profesional y actor mexicano conocido como El Santo. Se encuentra localizado en el municipio de Tulancingo de Bravo, Hidalgo, México
            </p>
        </div>
        <div class="fila mision-vision">
            <h3>¿El Santo?</h3>
            <div class="underline"></div>
            <p>
                El Santo fue el nombre artístico de Rodolfo Guzmán Huerta, un luchador profesional entre 1942 y 1982, y llegó a participar hasta en 52 películas.​ Nació en Tulacingo el 23 de septiembre de 1917 y falleció en Ciudad de México el 5 de febrero de 1984.
                ​Bajo el sobrenombre de El enmascarado de plata, El Santo se convirtió en uno de los iconos culturales mexicanos más relevantes del siglo xx.
                El museo fue inaugurado el 23 de septiembre de 2009,​ por Jorge Cesáreo Márquez Alvarado, presidente municipal de Tulancingo, y por el El Hijo del Santo.
            </p>
            <h3>¿Qué exhibimos?</h3>
            <div class="underline"></div>
            <p>
                En la entrada se exhibe una estatua del personaje, que simula aplicar el castigo que inmortalizó a lo largo de su carrera: la de a caballo.​ En el sitio hay reseñas del luchador, desde sus inicios en los cuadriláteros, su paso por el cine, pósteres de sus películas, fotografías en solitario y con luchadores, máscaras, imágenes de recortes e impresiones.
                ​Hay también una televisión en la que se proyectan las películas del Santo.​ Es una exhibición de más de 200 piezas entre las que se encuentran objetos personales en las cuales se cuentan fragmentos de su vida.
            </p>
        </div>
        <div class="fila equipo">
            <!-- <p>"&nbsp;"</p> -->
            <h3>
            <!-- <div class="underline" style="transform: rotate(100deg);"></div>     -->
                Nuestro Equipo
            </h3>
            
            <ul>
                <li> Janneth Santos Molina - Diseñador y Desarrollador</li>
                <li>Desarrollador - Fundador y Dirigente</li>
                <li>Desarrollador - Fundador y Dirigente</li>
                <li>Desarrollador - Fundador y Dirigente</li>
            </ul>
        </div>
        <br>
    </section>

    <section class="contacto" id="contacto">
        <h2>Visitanos</h2>
        <p>
            Revisa cada una de nuestras redes y ven a darte una vuelta
        </p>
        <div class="fila">
            <div class="columna informacion">
                <div class="detalle-contacto">
                    <p><i class="fas fa-map-marker-alt"></i>Rodolfo Guzmán Huerta Santo El Enmascarado de Plata, Ferrocarrilera 2da Secc, 43640 Tulancingo de Bravo, Hgo.</p>
                    <p><i class="fas fa-globe"></i> www.museodelsanto.gob.mx</p>
                    <p><i class="fas fa-phone"></i> (775) 755 84 50 ext. 1127</p>
                    <p><i class="fas fa-clock"></i> Lunes - Cerrado</p>
                    <p><i class="fas fa-clock"></i> Martes a Sábado: 09:00 AM - 7:00 PM</p>
                    <p><i class="fas fa-clock"></i> Domingo: 10:00 - 8:00 PM</p>
                    <p><i class="fas fa-envelope"></i> museos@tulancingo.gob.mx</p>
                    <p><i class="fas fa-envelope"></i> museos.tulancingo@gmail.com </p>
                  </div>          
            </div>
            <div class="columna formulario">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3747.1385314397935!2d-98.37646432635661!3d20.086495119476997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d0565fdab4a801%3A0xfe90a04115504465!2sMuseo%20del%20Santo!5e0!3m2!1ses-419!2smx!4v1688583312432!5m2!1ses-419!2smx" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <center>

    </center>
    <br>

<?php

    include('includes/footer.php');
?>