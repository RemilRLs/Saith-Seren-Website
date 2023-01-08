<?php

    // Database information.

    $host = 'localhost';
    $dbName = 'saith';
    $username = 'root';
    $password = '';

    $db = mysqli_connect($host, $username, "", $dbName);

    $query = "SELECT * FROM calendar_events";
    $result = mysqli_query($db, $query);

    // We read every titles and id.

    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $title = $row['event_title'];


        echo($title);
        echo($id);
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Saith Seren / Admin Page</title> 
    <link rel="shortcut icon" type="image/png" href="ressources/logo/Saith Seren Logo.png"/>
    
    <link rel="stylesheet" type="text/css" href="css/admin.css"/>




</head>


<body>
    <section class="admin" id="admin">
        <div class="max-width">
            <div class="admin-content">
                <div class="dashboard-square">
                    <div class="title-dashboard">
                        <h3>Saith Seren</h3>
                        <p>Dashboard</p>
                    </div>

                    <div class="line"></div>

                    <div class="overview">
                        <p> test </p>
                    </div>
                    <div class="line"></div>
                </div>

                <div class="other-square">
                    <div class="list-event">

                            <div class="event"> 

                            </div>
                        <?php endwhile; ?>
                    </div>
                    
                </div>
                </div>
            </div>
        </div>

    </section>
</body>