<?php

    $eventDate_err = $eventTitle_err = $eventDescription_err = $eventHour_err = "";

    // Database information.

    $host = 'localhost';
    $dbName = 'saith';
    $username = 'root';
    $password = '';


    // Start the session
    session_start();

    // Check if the user is logged in
    if (!isset($_SESSION['authenticated'])) {
        header('Location: login.php');
        exit;
    }



    // If there is a POST Method and everything is fine.


    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        if(empty(trim($_POST['eventDate']))){
            $eventDate_err = "The event need a date.";
        }
    
        if(empty(trim($_POST['eventTitle']))){
            $eventTitle_err = "The event need a title.";
        }
        if(empty(trim($_POST['eventDescription']))){
            $eventDescription_err = "The event need a description.";
        }
        if(empty(trim($_POST['eventHour']))){
            $eventHour_err = "The event need a hour.";
        }

        $db = mysqli_connect($host, $username, "", $dbName);

        if(empty($eventDate_err) && empty($eventTitle_err) && empty($eventDescription_err) && empty($eventHour_err)){

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

                    <div class="line"></div>
                    <div class="overview">
                        <a class="register-href" href="register.php">Register</a>
                    </div>
                </div>

                <div class="other-square">
                    <div class="calendar"> 
                        <div class="title-add-event"> 
                            <h3>Add Event</h3>
                        </div>
                        <form class="event-add-form"  method="post" action="admin.php">

                            <div class="flex"> 
                            <label class=space-between" for="event-date" style="margin-right: 135px;">Date: </label><br>
                            <input type="text" id="eventDate" name="eventDate"><br>
                            </div>  

                            <div class="line-2"> </div>

                            <div class="flex"> 
                            <label class=space-between" for="event-title" style="margin-right: 135px;"> Title: </label><br>
                            <input type="text" id="eventTitle" name="eventTitle"><br>
                            </div>

                            <div class="line-2"> </div>

                            <div class="flex"> 
                            <label class=space-between" for="event-description" style="margin-right: 90px;">Description: </label>
                            <textarea id="eventDescription" name="eventDescription"></textarea><br>
                            </div>

                            <div class="line-2"> </div>

                            <div class="flex"> 
                            <label class=space-between" for="event-hour" style="margin-right: 135px; ">Hour: </label><br>
                            <input type="text" id="eventHour" name="eventHour"><br>
                            </div>

                            <div class="line-2"> </div>

                            <div class="square-button"> 
                                <button type="submit">Add Event</button>
                            </div>
                        </form>
                    
                    </div>
                </div>
            </div>
        </div>

    </section>
</body>