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
                    <h4> Ver Productos
                        <a href="product-add.php" class="btn btn-primary float-end">Agregar producto</a>
                    </h4>
                    
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <th>SKU</th>
                            <th>Nombre</th>
                            <th>Categoria</th>
                            <th>Precio Unitario</th>
                            <th>Imagen</th>
                            <th>Autor</th>
                            <th>Stock</th>
                            <th>Editar</th>
                            <th>Eliminar</th>

                        </thead>
                        <tbody>
                        <!-- Extraemos los datos de la base de datos  -->
                            <?php

                                // $posts = "SELECT * FROM posts WHERE status != '2'"

                                $productos = "SELECT p.*, c.nombre AS cnombre FROM productos p, categorias c WHERE c.id = p.id_categoria";
                                $productos_run = mysqli_query($conn, $productos);

                                if (mysqli_num_rows($productos_run) > 0) {

                                    foreach($productos_run as $productos){
                                        ?>

                                            <tr>
                                                <td><?= $productos['sku']; ?></td>
                                                <td><?= $productos['nombre_producto']; ?></td>
                                                <td><?= $productos['cnombre']; ?></td>
                                                <td><?= $productos['precio_unitario']; ?></td>
                                                <td><img src="../uploads/posts/<?= $productos['imagen']; ?>" width="60px" height="60px" alt="" /></td>
                                                <td><?= $productos['autor']; ?></td>
                                                <td><?= $productos['stock']; ?> </td>
                                                <td><a href="product-edit.php?id=<?= $productos['id_productos']; ?>" class="btn btn-success">Editar</a></td>
                                                <td>
                                                    <form action="code.php" method="POST">
                                                        <button type="submit" name="productos_delete_btn" value="<?=$productos['id_productos'];?>" class="btn btn-danger">Eliminar</button>
                                                    </form>

                                                </td>
                                            </tr>

                                        <?php
                                    }

                                
                                } else {

                                    ?>
                                        <tr>
                                            <td colspan="9">Información no encontrada</td>
                                        </tr>
                                    <?php
                                }


                            ?>

                        </tbody>
                    </table>                   

                </div>
            </div>
        </div>
    </div>
</div>


<?php

    include('includes/footer.php');
    include('includes/scripts.php');

?>
