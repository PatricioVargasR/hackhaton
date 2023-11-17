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
                    <h4> Agregar Productos
                        <a href="product-view.php" class="btn btn-danger float-end">Regresar</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="">Categorias</label>

                                <?php

                                    $category = "SELECT * FROM categorias WHERE status ='0'";
                                    $category_run = mysqli_query($conn, $category);

                                    if(mysqli_num_rows($category_run) > 0 ){

                                        ?>

                                        <select name="category_id" class="form-control" required>
                                            <option value="">--Selecciona una categoria--</option>
                                            <?php

                                                foreach($category_run as $categoryitem){
                                                    ?>
                                                        <option value="<?=$categoryitem['id'] ?>"> <?=$categoryitem['nombre'] ?> </option>
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
                                <input type="text" name="name" class="form-control">
                            </div>


                            <div class="col-md-12 mb-3">
                                <label for="">Precio Unitario</label>
                                <input type="number" name="precio" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">SKU</label>
                                <input type="text" name ="sku" class="form-control"></input>
                            </div>


                            <div class="col-md-6 mb-3">
                                <label for="">Imagen</label>
                                <input type="file" name="image" class="form-control">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="">Descripción</label>
                                <textarea name="description" id="summernote" class="form-control" rows="4"></textarea>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Autor </label>
                                <input type="text" name="autor" class="form-control">
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="">Stock</label> </br>
                                <!-- <input type="checkbox" name="status" width="70px" height="70px" /> -->
                                <input type="number" name="stock" class="form-control">
                            </div>


                            <div class="col-md-6 mb-3">
                                <label for="">Slug (URL) </label>
                                <input type="text" name="slug" class="form-control">
                            </div>

                            <div class="col-md-12 mb-3">
                                <button type="submit" name="product_add"class="btn btn-primary">Guardar Post</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php

    include('includes/footer.php');
    include('includes/scripts.php');

?>
