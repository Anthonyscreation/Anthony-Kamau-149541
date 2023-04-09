<?php
    $servername = "localhost";
    $username = "UserAdmin";
    $password = "123456789";
    $db = "userDB";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);

    // Check connection
    // if ($conn->connect_error) {
    //   die("Connection failed: " . $conn->connect_error);
    // }
    // echo "Connected successfully";

    // $sql= "CREATE TABLE users (
    //     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     username VARCHAR(255) NOT NULL,
    //     firstname VARCHAR(255) NOT NULL,
    //     lastname VARCHAR(255) NOT NULL,
    //     email VARCHAR(255) NOT NULL,
    //     bio VARCHAR(1000),
    //     password VARCHAR(255)
    // )";
    
    // if ($conn->query($sql) === TRUE) {
    //   echo "Table users created successfully";
    // } else {
    //   echo "Error creating table: " . $conn->error;
    // }
    
    return $conn;
    ?>
?>