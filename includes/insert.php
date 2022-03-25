<?php

    include_once 'dbConn.php';
    include_once 'warningsMess.php';

    $sku = $_POST['sku'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $productType = $_POST['productType'];
    $size = $_POST['size'];
    $height = $_POST['height'];
    $width = $_POST['width'];
    $length = $_POST['length'];
    $weight = $_POST['weight'];
    
    $sql = "INSERT INTO products2 (sku, name, price, productType, size, height, width, length, weight) 
        VALUES ('$sku', '$name', '$price', '$productType', '$size', '$height', '$width', '$length', '$weight');";


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
        else if($productType != "DVD" && $productType != "Furniture" && $productType != "Book") {
                header("Location: ../src/add-products.php?productType=empty");
                exit();
        }
        else if($productType == "DVD" && empty($size)) {
                header("Location: ../src/add-products.php?size=empty");
                exit();
        } 
        else if($productType == "Furniture" && (empty($height) || empty($width) || empty($length))) {
                header("Location: ../src/add-products.php?dimensions=empty");
                exit(); 
        } 
        else if($productType == "Book" && empty($weight)) {
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


    


    

    

    