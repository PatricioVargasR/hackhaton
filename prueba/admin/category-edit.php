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
                    <h4> Modificar Categoria
                        <a href="category-view.php" class="btn btn-danger float-end">Regresar</a>
                    </h4>
                    
                </div>
                <div class="card-body">
                <?php 

                    if(isset($_GET['id'])){

                        $category_id = $_GET['id'];

                        $category_edit = "SELECT * FROM categorias WHERE id= '$category_id'";
                        $category_run = mysqli_query($conn, $category_edit);

                        if(mysqli_num_rows($category_run) > 0){

                            //$category = mysqli_fetch_array($category_run)

                            foreach($category_run as $category){

                ?>
                    <form action="code.php" method="POST">

                        <input type="hidden" name="category_id" value="<?= $category['id']; ?>">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="">Nombre</label>
                                <input type="text" name="name" value="<?= $category['nombre']; ?>" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Slug (URL) </label>
                                <input type="text" name="slug" value="<?= $category['slug']; ?>" class="form-control">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="">Descripción</label>
                                <textarea name="description" class="form-control" rows="4"><?= $category['descripcion']; ?></textarea>
                            </div>


                            <div class="col-md-6 mb-3">
                                <label for="">Navbar Status</label> <br/>
                                <!-- <input type="checkbox" name="status" width="70px" height="70px" /> -->
                                <input type="checkbox" name="navbar_status" <?= $category['navbar_status'] == '1' ? 'checked' : '' ?> class="form-check-input">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Estado</label> </br>
                                <!-- <input type="checkbox" name="status" width="70px" height="70px" /> -->
                                <input type="checkbox" name="status"  <?= $category['status'] == '1' ? 'checked' : '' ?>  class="form-check-input">
                            </div>

                            <div class="col-md-12 mb-3">
                                <button type="submit" name="category_update"class="btn btn-primary">Actualizar</button>
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
