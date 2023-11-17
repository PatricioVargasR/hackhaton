<?php

    include('includes/config.php');


    $page_title = "Página de Inicio";

    include('includes/navbar.php');

    include('includes/header.php');
?>

<style>

    .paginainicio{
        /**background-image: url("assets/img/65054.jpg"); **/
    }

    .carta p{
        text-align: justify;
    }

</style>

<section class="paginainicio" id="inicio">
        <div class="contenido">
            <div class="texto">
                <center>
                <h1>Tierra Tejida</h1>
                <p>
                    Tejiendo tradiciones, transformando Futuros
                </p>
            </div>
            <a href="<?= base_url('/'); ?>">Iniciar</a>
            </center>
        </div>
    </section>

    <section class="portafolio">
        <h3>Productos</h3>
        <div class="underline"></div>
        <!-- <p>
            Toma una vista de algo de nuestras memorables obras
        </p> -->
        <ul class="cartas">
        <?php
            $homePosts = "SELECT * FROM productos WHERE stock != '0' ORDER BY id_productos DESC LIMIT 3";
            $homePosts_run = mysqli_query($conn, $homePosts);

            if(mysqli_num_rows($homePosts_run) > 0){

                foreach ($homePosts_run as $postItem) {

                    ?>

                            <li class="carta">
                                <?php

                                    if($postItem['imagen'] != null):
                                        ?>
                                            <img src="<?= base_url('uploads/posts/'.$postItem['imagen']);?>" alt="<?=$postItem['nombre_producto'];?>" style="width:100%">
                                <?php endif; ?>

                                <h3><?=$postItem['nombre_producto'];?></h3>
                                <p>
                                     <?=$postItem['descripcion'];?><br/><p>
                                     <a href="<?= base_url('posts/'.$postItem['slug']); ?>" class="btn btn-primary">Leer más</a>
                                </p>
                            </li>
                    <?php

                }
            }
        ?>

    </section>

    <br><br><br>
        </div>
    </div>
</div>

<?php

    include('includes/footer.php');
?>