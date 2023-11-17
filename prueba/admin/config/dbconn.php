<?php

    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'productos';

    
    $conn = mysqli_connect("$server", "$username", "$password", "$database");

    if (!$conn) {
        
        header('Location: ../errors/dberror.php');
        die();
    }

?>