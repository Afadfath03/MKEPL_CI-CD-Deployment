<?php
    host = "db";
    user = "root";
    password = "admin1234";
    database = "TestDeploy";
    
    $conn = new mysqli($host, $user, $password, $database);

    if ($conn->connect_error) {
        echo "Connection failed: " . $conn->connect_error;
        exit();
    }
    
    echo "Connected to MySQL successfully!";
