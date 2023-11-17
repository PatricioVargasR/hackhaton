<?php

    include('includes/config.php');

    
    $page_title = "Página de Noticias";

    include('includes/navbar.php');
    include('includes/header.php');

?>

<div class="py-5 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-white" >Categorias</h3>
                <div class="underline"></div>
            </div>
        

            <?php 
                $homeCategory = "SELECT * FROM categorias WHERE navbar_status = '0' AND status = '0' LIMIT 12";
                $homeCategory_run = mysqli_query($conn, $homeCategory);

                if(mysqli_num_rows($homeCategory_run) > 0){

                    foreach ($homeCategory_run as $cateItem) {
                        
                        ?>  
                        <div class="col-md-3 mb-4">
                            <a href="<?= base_url('category/'.$cateItem['slug']); ?>" class="text-decoration-none">
                                <div class="card card-body">
                                    <?= $cateItem['nombre']; ?>
                                </div>
                            </a>
                        </div>
                        <?php
                    }
                }

            ?>
        </div>
    </div>
</div>

<div class="py-5 b-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-dark">Tejiendo Raices</h3>
                <div class="underline"></div>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus necessitatibus officia dolore quidem rerum quasi consectetur praesentium ullam quam incidunt perferendis, nesciunt neque iure reprehenderit officiis quia ipsam voluptate placeat?</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus necessitatibus officia dolore quidem rerum quasi consectetur praesentium ullam quam incidunt perferendis, nesciunt neque iure reprehenderit officiis quia ipsam voluptate placeat?</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus necessitatibus officia dolore quidem rerum quasi consectetur praesentium ullam quam incidunt perferendis, nesciunt neque iure reprehenderit officiis quia ipsam voluptate placeat?</p>
            </div>

        </div>
    </div>
</div>

<section class="portafolio">
        <h2>Productos</h2>
        <p>
            Toma una vista de algo de nuestras memorables obras
        </p>
        <ul class="cartas">
        <?php
            $homePosts = "SELECT * FROM productos WHERE stock !='0' ORDER BY id_productos DESC LIMIT 3";
            $homePosts_run = mysqli_query($conn, $homePosts);

            if(mysqli_num_rows($homePosts_run) > 0){

                foreach ($homePosts_run as $postItem) {

                    ?>

                            <li class="carta">
                                <?php

                                    if($postItem['imagen'] != null):

                                        ?>
                                            <img src="<?= base_url('uploads/posts/'.$postItem['imagen']);?>" alt="<?=$postItem['nombre_producto'];?>">
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


<?php

    include('includes/footer.php')


?>