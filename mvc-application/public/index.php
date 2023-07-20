<?php
    require_once "../app/init.php";
    
    $host = DB_HOST;
    $username = DB_USER;
    $password = DB_PASS;
    $databaseName = DB_NAME;
    
    try {
        $pdo = new PDO("mysql:host=$host;", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        // Use the information_schema database to check if the database exists
        $query = "SELECT SCHEMA_NAME 
                  FROM information_schema.SCHEMATA 
                  WHERE SCHEMA_NAME = :databaseName";
        $statement = $pdo->prepare($query);
        $statement->bindParam(':databaseName', $databaseName);
        $statement->execute();
    
        $result = $statement->fetch(PDO::FETCH_ASSOC);
    
        if (!$result) {
            try {
            // Create the database
            $pdo->exec("CREATE DATABASE IF NOT EXISTS $databaseName;");
            echo "Database '$databaseName' created successfully.\n";
        
            // Switch to the new database
            $pdo->exec("USE $databaseName;");
        
            // Create the table "talent"
            $pdo->exec("CREATE TABLE IF NOT EXISTS talent (
                id INT(10) PRIMARY KEY,
                name_ VARCHAR(50) NOT NULL,
                birthdate_ DATE NOT NULL,
                birthplace_ VARCHAR(30) NOT NULL,
                occupation_ VARCHAR(50) NOT NULL,
                nationality_ VARCHAR(30) NOT NULL
            );");
            echo "Table 'talent' created successfully.\n";
            
            } catch (PDOException $e) {
                die("Error: " . $e->getMessage());
            }
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $app = new App;
?>