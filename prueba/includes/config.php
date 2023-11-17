<?php
    session_start();
    include('admin/config/dbconn.php');

    function base_url($slug){
        echo 'http://localhost/prueba/'.$slug;
    }
?>
