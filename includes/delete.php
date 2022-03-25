<?php
    include_once 'dbConn.php';

    if(isset($_POST['delete'])) {
        $checkboxes = $_POST['checkbox'];
        $extract = implode(',', $checkboxes);

        $query = "DELETE FROM products2 WHERE productId IN ($extract)";
        $query_run = mysqli_query($conn, $query);

        header("Location: ../index.php?delete=succes");
        exit();

        if(!$checkboxes) {
            echo "Please select products to delete";
        }
    }

    if(isset($_POST['ADD'])) {
        header("Location: ../src/add-products.php");
    }
