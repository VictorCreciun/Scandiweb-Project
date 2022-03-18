<?php

    $dbServerName = "localhost";
    $dbUsername = "victor";
    $dbPassword = "admin123";
    $dbName = "products";
    $conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);

    if (!$conn) {
        echo "Database connection error: " . mysqli_connect_error();
    }