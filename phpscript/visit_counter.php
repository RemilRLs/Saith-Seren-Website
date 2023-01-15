<?php

    $host = 'localhost';
    $dbName = 'saith';
    $username = 'root';
    $password = '';

    $db = mysqli_connect($host, $username, "", $dbName);

    // We insert the current date of the visit.

    $query = "INSERT INTO visits (date) VALUES (CURRENT_TIMESTAMP)";
    $result = mysqli_query($db, $query);

    if ($result === FALSE){
        printf("Error: %s\n", mysqli_error($db));
    }
    else{
    
        // Success of the query.
    }
    


?>