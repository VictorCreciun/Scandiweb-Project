<?php

    // $dbServerName = "localhost";
    // $dbUsername = "victor";
    // $dbPassword = "admin123";
    // $dbName = "products";
    // $conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);

    // if (!$conn) {
    //     echo "Database connection error: " . mysqli_connect_error();
    // }

    //Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

if (!$conn) {
        echo "Database connection error: " . mysqli_connect_error();
    }