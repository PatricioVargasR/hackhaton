<?php

    include('authentication.php');

    if(isset($_POST['product_delete_btn'])){

        $post_id = $_POST['post_delete_btn'];

        $check_img_query = "SELECT * FROM productos WHERE id = '$post_id' LIMIT 1";
        $img_res = mysqli_query($conn, $check_img_query);
        $res_data = mysqli_fetch_array($img_res);

        $image = $res_data['image'];

        $query = "DELETE FROM posts WHERE id='$post_id' LIMIT 1";
        $query_run = mysqli_query($conn, $query);


        if($query_run){

            if(file_exists('../uploads/posts/'.$image)){
                unlink('../uploads/posts/'.$image);

        }
            
            $_SESSION['message'] = "Se ha borrado con exito";
            header('Location: post-view.php');
            exit(0);

        } else {

            $_SESSION['message'] = "Algo a salido mal";
            header('Location: post-view.php?');
            exit(0);

        }

    }

    if(isset($_POST['product_update'])){

        $post_id = $_POST['product_id'];
        $category_id = $_POST['category_id'];

        $name = mysqli_real_escape_string($conn, $_POST['name']);

        $precio = mysqli_real_escape_string($conn, $_POST['precio']);

        $autor = mysqli_real_escape_string($conn, $_POST['autor']);

        $stock = mysqli_real_escape_string($conn, $_POST['stock']);

        $string = preg_replace('/[^A-Za-z0-9\-]/', '-', $_POST['slug']); // Remover los caracteres especiales
        $final_string = preg_replace('/-+/', '-', $string);

        $sku = mysqli_real_escape_string($conn, $_POST['sku']);

        $slug = $final_string;


        $description = mysqli_real_escape_string($conn, $_POST['description']);


        $old_filename = mysqli_real_escape_string($conn, $_POST['old_image']);

        $image = $_FILES['image']['name'];

        $update_filename = "";


        if($image != NULL){

            //Renombramos la imagen
            $image_extension = pathinfo($image, PATHINFO_EXTENSION);

            $filename = time().'.'.$image_extension;

            $update_filename = $filename;


        } else {


            $update_filename = $old_filename;
        }


        $query = "UPDATE productos SET id_categoria='$category_id',  nombre_producto='$name', precio_unitario ='$precio', sku='$sku',  slug='$slug', descripcion='$description', imagen='$update_filename', autor='$autor', stock='$stock' WHERE id_productos = '$post_id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){

            if($image != NULL){
                if(file_exists('../uploads/posts/'.$old_filename)){
                    unlink('../uploads/posts/'.$old_filename);

                }
                move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/posts/'.$update_filename);
            }

            $_SESSION['message'] = "Se ha actualizado con exito";
            header('Location: product-edit.php?id='.$post_id);
            exit(0);

        } else {

            $_SESSION['message'] = "Algo a salido mal";
            header('Location: product-edit.php?id='.$post_id);
            exit(0);

        }

    }


    if(isset($_POST['product_add'])){
        
        $category_id = $_POST['category_id'];

        $name = mysqli_real_escape_string($conn, $_POST['name']);

        $precio = mysqli_real_escape_string($conn, $_POST['precio']);

        $SKU = mysqli_real_escape_string($conn, $_POST['sku']);

        $autor = mysqli_real_escape_string($conn, $_POST['autor']);


        $stock = mysqli_real_escape_string($conn, $_POST['stock']);


        $string = preg_replace('/[^A-Za-z0-9\-]/', '-', $_POST['slug']); // Remover los caracteres especiales
        $final_string = preg_replace('/-+/', '-', $string);

        $slug = $final_string;


        $description = mysqli_real_escape_string($conn, $_POST['description']);

        $image = $_FILES['image']['name'];

        //Renombramos la imagen
        $image_extension = pathinfo($image, PATHINFO_EXTENSION);

        $filename = time().'.'.$image_extension;


        $query = "INSERT INTO productos (id_categoria,nombre_producto,precio_unitario,sku,imagen,descripcion,autor,stock) VALUES
                    ('$category_id','$name','$precio','$SKU','$filename','$description','$autor','$stock')";

        $query_run = mysqli_query($conn, $query);

        if($query_run){

            //Movemos la imagen

            move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/posts/'.$filename); // Almacenamos la imagen

            $_SESSION['message'] = "Se ha agragado un nuevo producto";
            header('Location: product-add.php');
            exit(0);

        } else {

            $_SESSION['message'] = "Algo a salido mal";
            header('Location: product-add.php');
            exit(0);

        }

    }

    if(isset($_POST['category_delete'])){

        $category_id = $_POST['category_delete'];

        
        $query = "DELETE FROM categorias WHERE id='$category_id'";
        // 2 = delete
        // $query = "UPDATE categories SET status= '1' WHERE id='$category_id' LIMIT 1";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
        
            $_SESSION['message'] = "Se ha borrado con exito";
            header('Location: category-view.php');
            exit(0);

        } else {

            $_SESSION['message'] = "Algo a salido mal";
            header('Location: category-view.php');
            exit(0);

        }
    }


    if(isset($_POST['category_update'])){

        $category_id = $_POST['category_id'];

        $name = mysqli_real_escape_string($conn, $_POST['name']);

        $string = preg_replace('/[^A-Za-z0-9\-]/', '-', $_POST['slug']); // Remover los caracteres especiales
        $final_string = preg_replace('/-+/', '-', $string);

        $slug = $final_string;

        $description = mysqli_real_escape_string($conn, $_POST['description']);

        $navbar_status = mysqli_real_escape_string($conn, $_POST['navbar_status'] == true ? '1': '0');
        $status = mysqli_real_escape_string($conn, $_POST['status'] == true ? '1': '0');

        $query = "UPDATE categorias SET nombre='$name', slug='$slug', descripcion='$description', navbar_status='$navbar_status', status='$status' WHERE id='$category_id'";

        $query_run = mysqli_query($conn, $query);

        if($query_run){

            $_SESSION['message'] = "Actualizado con éxito";
            header('Location: category-edit.php?id='.$category_id);
            exit(0);

        } else {

            $_SESSION['message'] = "Ocurrió algún error";
            header('Location: category-edit.php?id='.$category_id);
            exit(0);

        }

    }


    if(isset($_POST['category_add'])){

        $name = mysqli_real_escape_string($conn, $_POST['name']);

        $string = preg_replace('/[^A-Za-z0-9\-]/', '-', $_POST['slug']); // Remover los caracteres especiales
        $final_string = preg_replace('/-+/', '-', $string);

        $slug = $final_string;
        
        $description = mysqli_real_escape_string($conn, $_POST['description']);

        $navbar_status = mysqli_real_escape_string($conn, $_POST['navbar_status'] == true ? '1': '0');
        $status = mysqli_real_escape_string($conn, $_POST['status'] == true ? '1': '0');

        $query = "INSERT INTO categorias (nombre,slug,descripcion,navbar_status,status) VALUES
                    ('$name','$slug','$description', '$navbar_status','$status')";
        $query_run = mysqli_query($conn, $query);

        if($query_run){

            $_SESSION['message'] = "Se ha agregado con exito";
            header('Location: category-add.php');
            exit(0);

        } else {

            $_SESSION['message'] = "Ocurrió algún error";
            header('Location: category-add.php');
            exit(0);

        }
    }

?>