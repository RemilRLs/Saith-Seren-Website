<?php

    // Database information.

    $host = 'localhost';
    $dbName = 'saith';
    $username = 'root';
    $password = '';



    // If there is a POST Method.


    if($_SERVER['REQUEST_METHOD'] === 'POST'){


        $db = mysqli_connect($host, $username, "", $dbName);


        $eventDate = mysqli_real_escape_string($db, $_POST['eventDate']);
        $eventTitle = mysqli_real_escape_string($db, $_POST['eventTitle']);
        $eventDescription = mysqli_real_escape_string($db, $_POST['eventDescription']);
        $eventHour = mysqli_real_escape_string($db, $_POST['eventHour']);


        // We create the SQL query.

        $query = "INSERT INTO calendar_events (event_date, event_title, event_description, event_hour) VALUES ('$eventDate', '$eventTitle', '$eventDescription', '$eventHour')";
        $result = mysqli_query($db, $query);

        if ($result === FALSE){
            printf("Error: %s\n", mysqli_error($db));
        }
        else{

            // Success of the query.
        }

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

                    <div class="calendar">
                    <a class="calendar-href" href="admincalendar.php">Calendar</a>
                    </div>
                </div>

                <div class="other-square">
                    <div class="calendar"> 
                        <form class="event-add-form"  method="post" action="admin.php">
                            <label for="event-date">Date of the event: </label><br>
                            <input type="text" id="eventDate" name="eventDate"><br>

                            <label for="event-title"> Title of the event: </label><br>
                            <input type="text" id="eventTitle" name="eventTitle"><br>

                            <label for="event-description">Description of the event</label>
                            <textarea id="eventDescription" name="eventDescription"></textarea><br>

                            <label for="event-hour">Hour of the event: </label><br>
                            <input type="text" id="eventHour" name="eventHour"><br>

                            <button type="submit">Add Event</button>
>                        </form>
                    
                    </div>
                </div>
            </div>
        </div>

    </section>
</body>