<?php
    session_start();
    include('admin/config/dbconn.php');

    if (isset($_POST['register_btn'])) {

        # Se utiliza mysqli_real_escape_string para evitar inyecciones

        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $lname = mysqli_real_escape_string($conn, $_POST['lname']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']); 
        // $password = md5($password);
        $confirm_password = mysqli_real_escape_string($conn, $_POST['cpassword']);
        // $confirm_password = md5($confirm_password);

        if ($password == $confirm_password ) {

            // Verificamos el correo
            $checkemail = "SELECT correo FROM users WHERE correo='$email'";
            $checkemail_run = mysqli_query($conn, $checkemail);

            if (mysqli_num_rows($checkemail_run) > 0 ) {

                $_SESSION['message'] = " Ya existe una cuenca con ese correo ";
                header('Location: register.php');
                exit(0);

            } else {


                $password = md5($password); // Encriptamos la contraseña

                $user_query = "INSERT INTO users (first_name, last_name, username, passwd, correo) VALUES ('$fname', '$lname', '$username',  '$password', '$email')";
                $user_query_run = mysqli_query($conn, $user_query);

                if($user_query_run) {

                    $_SESSION['message'] = " Registro con exito ";
                    header('Location: login.php');
                    exit(0);

                } else {

                    $_SESSION['message'] = " Algo ha salido mal ";
                    header('Location: register.php');
                    exit(0);
                }
            }
        

        } else {

            $_SESSION['message'] = "Las contraseñas no coinciden";
            header("Location: register.php");
            exit(0);
        }


    } else {

        header('Location: register.php');
        exit(0);

    }


?>