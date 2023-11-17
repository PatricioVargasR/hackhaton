<?php

session_start();
include('admin/config/dbconn.php');


 if (isset($_POST['login_btn'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $hashedPassword = md5($password); // Aplicar el hash MD5 a la contraseña ingresada

    // echo $hashedPassword;

    // $login_query = "SELECT * FROM users WHERE email='$email' AND password = MD5('$password') LIMIT 1";
    $login_query_user = "SELECT * FROM users WHERE correo='$email' AND passwd='$hashedPassword' AND username ='$username' LIMIT 1";

    $login_query_admin = "SELECT * FROM admins WHERE correo='$email' AND passwd='$hashedPassword' AND username ='$username' LIMIT 1";

    $login_query_run_user = mysqli_query($conn, $login_query_user);

    $login_query_run_admin = mysqli_query($conn, $login_query_admin);

    if(mysqli_num_rows($login_query_run_admin) > 0){
        foreach ($login_query_run_admin as $data) {

            $user_id = $data['id'];
            $user_name = $data['first_name'] . ' ' . $data['last_name'];
            //$user_name = $data['username'];
            $user_email = $data['correo'];
            $role = 1;
        }

        $_SESSION['auth'] = true;
        $_SESSION['auth_role'] = 1; // 1=admin
        $_SESSION['auth_user'] = [
            'user_id' => $user_id,
            'user_name' => $user_name,
            'user_email' => $user_email,
        ];

        if($_SESSION['auth_role'] == "1"){ // 1 = Admin

            $_SESSION['message'] = "Bienvenido a tu dashboard";
            header('Location: admin/index.php');
            exit(0);

        } else {

            $_SESSION['message'] = "Ya has iniciado sesión";
            header('Location: index.php');
            exit(0);

        }

    } else if(mysqli_num_rows($login_query_run_user) > 0 ){

        foreach ($login_query_run_user as $data) {

            $user_id = $data['id'];
            $user_name = $data['first_name'] . ' ' . $data['last_name'];
            //$user_name = $data['username'];
            $user_email = $data['correo'];

            $role = 0;
        }

        $_SESSION['auth'] = true;
        $_SESSION['auth_role'] = 0; //0=user
        $_SESSION['auth_user'] = [
            'user_id' => $user_id,
            'user_name' => $user_name,
            'user_email' => $user_email,
        ];

        if($_SESSION['auth_role'] == "0"){ // 0 = user
            $_SESSION['message'] = "Iniciaste sesión";
            header('Location: index.php');
            exit(0);

        } else {

            $_SESSION['message'] = "Ya has iniciado sesión";
            header('Location: index.php');
            exit(0);

        }

    } else {
        $_SESSION['message'] = "No tienes acceso";
        header('Location: login.php');
        exit(0);
    }

} else {
    $_SESSION['message'] = "No tienes acceso";
    header('Location: login.php');
    exit(0);
}

?>