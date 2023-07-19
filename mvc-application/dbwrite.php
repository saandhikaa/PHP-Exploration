<?php
    try {
        $host = "127.0.0.1:3306"; // Replace with your database host (e.g., "localhost" or IP address)
        $username = "root"; // Replace with your database username
        $password = ""; // Replace with your database password
        $dbname = "astronaut_symphony";
        
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
        // Prepare the SQL INSERT statement with placeholders
        $sql = "INSERT INTO talent (id, name_, birthday_, birthplace_, occupation_, nationality_) 
                VALUES (:id, :name_, :birthday_, :birthplace_, :occupation_, :nationality_)";
    
        // Generate the ID using time()
        $id = time();
    
        // Example data for insertion
        $name = "Roseanne Park";
        $birthDate = "1997-02-11";
        $birthplace = "Auckland";
        $occupation = "Singer - Dancer";
        $nationality = "South Korea";
    
        // Prepare the statement
        $statement = $pdo->prepare($sql);
    
        // Bind parameters and execute the statement
        $statement->bindParam(':id', $id);
        $statement->bindParam(':name_', $name);
        $statement->bindParam(':birthday_', $birthDate);
        $statement->bindParam(':birthplace_', $birthplace);
        $statement->bindParam(':occupation_', $occupation);
        $statement->bindParam(':nationality_', $nationality);
        
        $statement->execute();
    
        echo "Data inserted successfully!";
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
?>
