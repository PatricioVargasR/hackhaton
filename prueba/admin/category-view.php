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
                    <h4> Ver Categoria
                        <a href="category-add.php" class="btn btn-primary float-end">Agregar Categoria</a>
                    </h4>
                    
                </div>
                <div class="card-body">
                    
                <div class="table-responsive">
                        <table class="table table-bordered table-stripe">
                            <thead>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Estado</th>
                                <th>Editar</th>
                                <!-- <th>Suspender</th> -->
                                <th>Eliminar</th>

                            </thead>
                            <tbody>
                            <!-- Extraemos los datos de la base de datos  -->
                                <?php

                                    $query = "SELECT * FROM categorias WHERE status != '1'";
                                    $query_run = mysqli_query($conn, $query);

                                    if (mysqli_num_rows($query_run) > 0) {
                                        
                                        foreach($query_run as $item){
                                            ?>  

                                                <tr>
                                                    <td><?= $item['id']; ?></td>
                                                    <td><?= $item['nombre']; ?></td>
                                                    <td>

                                                         <?= $item['status'] == '1' ? 'hidden':'Visible';
                                                            // if($item['status'] == '1') { echo 'Hidden'; } else { echo 'Visible'; }
                                                        ?>


                                                    </td>
                                                    <td><a href="category-edit.php?id=<?= $item['id']; ?>" class="btn btn-success">Editar</a></td>
                                                    <!-- <td>
                                                        <form action="code.php" method="POST">

                                                            <button type="submit" name="category_suspend" value="" onclick='return confirmacion()' class="btn btn-danger">Suspender</button>

                                                        </form>
                                                    </td> -->
                                                    <td>
                                                    
                                                        <form action="code.php" method="POST">

                                                            <button type="submit" name="category_delete" value="<?=$item['id'];?>" onclick='return confirmacion()' class="btn btn-danger">Eliminar</button>

                                                        </form>
                                                        
                                                    </td>
                                                </tr>

                                            <?php
                                        }

                                    
                                    } else {

                                        ?>
                                            <tr>
                                                <td colspan="6">Información no encontrada</td>
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
