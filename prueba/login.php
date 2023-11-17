<?php

    include('includes/config.php');


    $page_title = "Página de Login";


    include('includes/header.php');

    if(isset($_SESSION['auth'])){


        if(!isset($_SESSION['message'])){

            $_SESSION['message'] = "Actualmente ya has iniciado sesión";
        }

        header("Location: index.php");
        exit(0);

    }
    include('includes/navbar.php');
?>



<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">

                <?php include('message.php'); ?>

                <div class="card">
                    <div class="card-header">
                        <h4>Iniciar Sesión</h4>
                    </div>
                    <div class="card-body">
                        <form action="logincode.php" method="POST">
                            <div class="form-group mb-3">
                                <label for="">Nombre de Usuario</label>
                                <input type="text" name="username" placeholder="Ingresa tu nombre de usuario" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Correo Electronico</label>
                                <input type="email" name="email" placeholder="Ingresa tu correo electronico" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Contraseña</label>
                                <input type="password" name="password" placeholder="Ingresa tu contraseña" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" name="login_btn" class="btn btn-primary">Iniciar Sesión</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php

    include('includes/footer.php');
?>