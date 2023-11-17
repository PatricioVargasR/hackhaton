<?php

    include('includes/config.php');

    if(isset($_GET['title'])){

        $slug = mysqli_real_escape_string($conn, $_GET['title']);

        $meta_posts = "SELECT slug,meta_title,meta_description,meta_keyword FROM posts WHERE slug='$slug' LIMIT 1";
        $meta_posts_run = mysqli_query($conn, $meta_posts);

        if(mysqli_num_rows($meta_posts_run) > 0){

            $metaPostItem = mysqli_fetch_array($meta_posts_run);

            $page_title = $metaPostItem['meta_title'];
            $meta_description = $metaPostItem['meta_description'];
            $meta_keywords = $metaPostItem['meta_keyword'];

        } else {

            $page_title = "Página de Post";
            $meta_description = "Página de post del museo del santo";
            $meta_keywords = "El santo, Tulancingo, Hidalgo, Cultura";
        }

    } else {

        $page_title = "Página de Post";
        $meta_description = "Página de post del museo del santo";
        $meta_keywords = "El santo, Tulancingo, Hidalgo, Cultura";

    }

    include('includes/header.php');
    include('includes/navbar.php');
?>




<div class="py-5">
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <?php

                    if(isset($_GET['title'])){
                        
                        $slug = mysqli_real_escape_string($conn, $_GET['title']);

                        $posts = "SELECT * FROM posts WHERE slug='$slug' LIMIT 1";
                        $posts_run = mysqli_query($conn, $posts);

                        if(mysqli_num_rows($posts_run) > 0){
                               
                            foreach ($posts_run as $postItems) {
                                ?>
                                    <div class="card shadow-sm mb-4">
                                        <div class="card-header"> 
                                            <h5><?= $postItems['name']; ?></h5>
                                        </div>
                                        
                                        <div class="card-body">
                                            <label class="text-dark me-2"><?= date('d-M-Y', strtotime($postItems['created'])); ?> </label>  
                                            <hr/>
                                            <?php

                                                if($postItems['image'] != null):
                                                    
                                                    ?>
                                                        <img src="<?= base_url('uploads/posts/'.$postItems['image']);?>" alt="<?=$postItems['name'];?>" class="w-25">
                                                    <?php endif; ?>
                                            
                                            <div>
                                                <?= $postItems['description']; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                            }


                        } else {
                            
                            ?>
                                <h4>No se encontró el post</h4>
                            <?php

                        }

                    } else {
                        ?>
                            <h4>No se encontró la URL</h4>
                        <?php
                    }

                ?>

            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Area de anuncios</h4>
                    </div>
                    <div class="card-body">
                        El anuncio
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php

    include('includes/footer.php');
?>