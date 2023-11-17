<?php
    session_start();

    if (isset($_POST['logout_btn'])) {

        unset($_SESSION['auth']);
        unset($_SESSION['auth_user']);
        unset($_SESSION['auth_role']);

        $_SESSION['message'] = 'Has cerrado con exito tu sesión';
        header('Location: login.php ');
        exit(0);
    }

    // die();
?>