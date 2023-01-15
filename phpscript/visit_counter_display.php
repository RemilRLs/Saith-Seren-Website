<?php 
    $host = 'localhost';
    $dbName = 'saith';
    $username = 'root';
    $password = '';

    $db = mysqli_connect($host, $username, "", $dbName);

    // We select by month and we count the number of record in that month.
    // So we count every visits that have the same month.

    $query = "SELECT MONTHNAME(date) as month, COUNT(*) as visits FROM visits GROUP BY MONTH(date)";
    $result = mysqli_query($db, $query);

    
    if ($result === FALSE){
        printf("Error: %s\n", mysqli_error($db));
    }
    else{
        

        // Success of the query.
    }



?>