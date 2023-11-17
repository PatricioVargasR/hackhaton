<?php

    include('includes/config.php');

    $page_title = "Página de Registro";
    
    include('includes/header.php');

    if(isset($_SESSION['auth'])){

        $_SESSION['message'] = "Actualmente ya has iniciado sesión";
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
                        <h4>Registrarte</h4>
                    </div>
                    <div class="card-body">

                    <form action="registercode.php" method="POST">

                        <div class="form-group mb-3">
                            <label for="">Primer Nombre</label>
                            <input type="text" name="fname" placeholder="Ingresa tu primer nombre" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Segundo Nombre</label>
                            <input type="text"  name="lname" placeholder="Ingresa tu segundo nombre" class="form-control" >
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Nombre de Usuario</label>
                            <input type="text" name="username" placeholder="Ingresa un nombre de usuario" class="form-control" required>
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
                            <label for="">Confirma tu contraseña</label>
                            <input type="password" name="cpassword" placeholder="Confirma tu contraseña" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" name="register_btn" class="btn btn-primary">Enviar</button>
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