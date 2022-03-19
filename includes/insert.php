<?php

    include_once 'dbConn.php';
    include_once 'warningsMess.php';

    $sku = $_POST['sku'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $product_type = $_POST['product_type'];
    $size = $_POST['size'];
    $height = $_POST['height'];
    $width = $_POST['width'];
    $length = $_POST['length'];
    $weight = $_POST['weight'];
    
    $sql = "INSERT INTO products (sku, name, price, product_type, size, height, width, length, weight) 
        VALUES ('$sku', '$name', '$price', '$product_type', '$size', '$height', '$width', '$length', '$weight');";


    if(isset($_POST['save'])) {

        if(empty($sku)) {
            header("Location: ../src/add-products.php?sku=empty");
            exit();
        } 
        else if(empty($name)) {
            header("Location: ../src/add-products.php?name=empty");
            exit();
        } 
        else if(empty($price)) {
            header("Location: ../src/add-products.php?price=empty");
            exit();
        } 
        else if($product_type != "DVD" && $product_type != "Furniture" && $product_type != "Book") {
                header("Location: ../src/add-products.php?product_type=empty");
                exit();
        }
        else if($product_type == "DVD" && empty($size)) {
                header("Location: ../src/add-products.php?size=empty");
                exit();
        } 
        else if($product_type == "Furniture" && (empty($height) || empty($width) || empty($length))) {
                header("Location: ../src/add-products.php?dimensions=empty");
                exit(); 
        } 
        else if($product_type == "Book" && empty($weight)) {
                header("Location: ../src/add-products.php?weight=empty");
                exit();
        } 
        else {

            mysqli_query($conn, $sql);
            header("Location: ../index.php");
        }
    }

    if(isset($_POST['cancel'])) {
        header("Location: ../index.php");
    }


    


    

    

    