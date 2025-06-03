<?php
    $conn = new mysqli("db", "root", "admin1234", "TestDeploy");

    if ($conn->connect_error) {
        echo "Connection failed: " . $conn->connect_error;
        exit();
    }
    
    echo "Connected to MySQL successfully!";
