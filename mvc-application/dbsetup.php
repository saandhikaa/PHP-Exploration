<?php
    try {
        $host = "127.0.0.1:3306"; // Replace with your database host (e.g., "localhost" or IP address)
        $username = "root"; // Replace with your database username
        $password = ""; // Replace with your database password
    
        // Connect to the MySQL server
        $pdo = new PDO("mysql:host=$host;", $username, $password);
    
        // Create the database "astronaut-symphony"
        $pdo->exec("CREATE DATABASE IF NOT EXISTS astronaut_symphony;");
        echo "Database 'astronaut_symphony' created successfully.\n";
    
        // Switch to the new database
        $pdo->exec("USE astronaut_symphony;");
    
        // Create the table "talent"
        $pdo->exec("CREATE TABLE IF NOT EXISTS talent (
            id INT(10) PRIMARY KEY,
            name_ VARCHAR(50) NOT NULL,
            birthday_ DATE NOT NULL,
            birthplace_ VARCHAR(30) NOT NULL,
            occupation_ VARCHAR(50) NOT NULL,
            nationality_ VARCHAR(30) NOT NULL
        );");
        echo "Table 'talent' created successfully.\n";
        
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
?>
