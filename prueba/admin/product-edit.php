<?php

    include('authentication.php');
    include('includes/header.php');

?>

<div class="container-fluid px-4">
    <div class="row mt-4">
        <div class="col-md-12">

            <?php include('message.php') ?>

            <div class="card">
                <div class="card-header">
                    <h4> Modificar Posts
                        <a href="post-view.php" class="btn btn-danger float-end">Regresar</a>
                    </h4>
                    
                </div>
                <div class="card-body">

                <?php 

                    if(isset($_GET['id'])){

                        $product_id = $_GET['id'];

                        $product_edit = "SELECT * FROM productos WHERE id_productos= '$product_id' LIMIT 1";
                        $product_run = mysqli_query($conn, $product_edit);

                        if(mysqli_num_rows($product_run) > 0){

                            $product_row = mysqli_fetch_array($product_run)

                            //foreach($post_run as $post){

                ?>
                    <form action="code.php" method="POST" enctype="multipart/form-data">

                        <input type="hidden" name="product_id" value="<?= $product_row['id_productos']?>">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="">Categorias</label>

                                <?php

                                    if(isset($_GET['id'])){

                                        $category_id = $_GET['id'];

                                        $category = "SELECT * FROM categorias WHERE status ='0'";
                                        $category_run = mysqli_query($conn, $category);

                                        if(mysqli_num_rows($category_run) > 0 ){

                                        ?>

                                        <select name="category_id" class="form-control" required>
                                            <option value="">--Selecciona una categoria--</option>
                                            <?php 

                                                foreach($category_run as $categoryitem){
                                                    ?>
                                                        <option value="<?=$categoryitem['id'] ?>" <?=$categoryitem['id'] == $product_row['id_categoria'] ? 'selected':'' ?>>
                                                            <?= $categoryitem['nombre']?>
                                                        
                                                        </option>
                                                    <?php
                                                }
                                            
                                            ?>
                                        </select>

                                        <?php

                                    } else {

                                        ?>
                                            <h5>Ninguna categoria disponible</h5>

                                        <?php
                                    }
                                ?>


                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Nombre</label>
                                <input type="text" name="name" value="<?= $product_row['nombre_producto']; ?>" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Precio Unitario</label>
                                <input type="number" name="precio" value="<?= $product_row['precio_unitario']; ?>" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Slug (URL) </label>
                                <input type="text" name="slug" value="<?= $product_row['slug']; ?>" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">SKU </label>
                                <input type="text" name="sku" value="<?= $product_row['sku']; ?>" class="form-control">
                            </div>



                            <div class="col-md-6 mb-3">
                                <label for="">Autor</label>
                                <input type="text" name="autor" value="<?= $product_row['autor']; ?>" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Stock</label>
                                <input type="number" name="stock" value="<?= $product_row['stock']; ?>" class="form-control">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="">Descripción</label>
                                <textarea name="description" id="summernote" class="form-control" rows="4"><?= $product_row['descripcion']; ?></textarea>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Imagen </label>
                                <input type="hidden" name="old_image" value="<?= $product_row['imagen']; ?>">
                                <input type="file" name="image" class="form-control">
                            </div>


                            <div class="col-md-12 mb-3">
                                <button type="submit" name="product_update"class="btn btn-primary">Actualizar</button>
                            </div>
                        </div>
                    </form>

                    <?php
                        }

                        } else {

                            ?>

                                <h4>No se encontró información</h4>

                            <?php
                        }
                            
                    }
                        
                ?>

                </div>
            </div>
        </div>
    </div>
</div>


<?php

    include('includes/footer.php');
    include('includes/scripts.php');

?>
