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

    // .= is for append an element into a variable.

    $formEvent = "<form method='post' action=''>";

    $formEdit = "<form method='post' action=''>";

    // We read every titles and id.
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $title = $row['event_title'];
    
        $formEvent .= "<p> $title </p>";
    
        // Give each delete button a unique name.
        $formEvent .= "<form method='post' action=''>";
        $formEvent .= "<input type='submit' name='delete$id' value='Delete'>";
        
        $formEvent .= "<input type='hidden' name='id' value='$id'>";
        $formEvent .= "<input type='submit' name='edit$id' value='Edit'>";
        
        $formEvent .= "</form>";
    }
    
    // If the delete button for a specific row is clicked, delete that row from the table.
    
    foreach($_POST as $key => $value) {
        if (strpos($key, 'delete') !== false) {

            // We extract the id withouth the "delete".

            $id = substr($key, 6);
            $query = "DELETE FROM calendar_events WHERE id=$id";
            mysqli_query($db, $query);
        }

        if(strpos($key, 'edit') !== false){

            // We extract the id withouth the "edit".
            $id = substr($key, 4);

            $formEdit .= "<label class='space-between' for='event-title' style='margin-right: 135px;'> Title: </label><br>";
            $formEdit .= "<input type='hidden' name='id' value='$id'>";
            $formEdit .= "<input type='text' id='eventTitle' name='eventTitle'><br>";

            $formEdit .= "<label class='space-between' for='event-date' style='margin-right: 135px;'> Date: </label><br>";
            $formEdit .= "<input type='text' id='eventDate' name='eventDate'><br>";

            $formEdit .= "<label class='space-between' for='event-desc' style='margin-right: 135px;'> Description: </label><br>";
            $formEdit .= "<textarea id='eventDesc' name='eventDesc'></textarea><br>";

            $formEdit .= "<label class='space-between' for='event-hour' style='margin-hour: 135px;'> Hour: </label><br>";
            $formEdit .= "<input type='input' id='eventHour' name='eventHour'><br>";
    
            $formEdit .= "<input type='submit' name='confirm' value='Confirm'>";
        }
    }




    if(isset($_POST['confirm'])){
        $id = $_POST['id'];
        $title = $_POST['eventTitle'];
        $date = $_POST['eventDate'];


        $query = "UPDATE calendar_events SET event_title='$title', event_date='$date' WHERE id='$id'";
        mysqli_query($db, $query);
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

    <script src="js/dashboard.js" defer></script>




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

                    <div class="white overview">
                        <button class="button-overview">
                            <img src="ressources/icons/diag icon.png" alt="diag icon" class="diag-icon">
                            <h3>Overview</h3>
                            <img src="ressources/icons/arrow bottom 2.png" alt="arrow bottom icon" class="arrow-bottom-icon">
                        </button>

                    </div>

                    <div class="overview-more display-none" data-visible="false">
                            
                        <a class="statistic block text-decoration "  href="#">
                            <img src="ressources/icons/stat icon.png" alt="stat icon" class="stat-icon icon-more">
                            Statistic
                        </a>
                        <a class="notification block text-decoration " href="#">
                            <img src="ressources/icons/notification icon.png" alt="notification icon" class="notification-icon icon-more">
                            Notification
                        </a>
                    </div>
                    
                    <div class="line"></div>

                    <div class="newsletter overview white">
                        <button class="button-newsletter text-decoration">
                            <img src="ressources/icons/newsletter icon.png" alt="newsletter icon" class="newsletter-icon">
                            <h3>Newsletter</h3>
                            <img src="ressources/icons/arrow bottom 2.png" alt="arrow bottom icon" class="arrow-bottom-icon">
                        </button>

                    </div>

                    <div class="newsletter-more display-none" data-visible="false">
                            
                            <a class="subscriber block text-decoration" href="#">
                                <img src="ressources/icons/user icon.png" alt="user icon" class="user-icon icon-more">
                                Subscriber
                            </a>
 
                    </div>

                    <div class="line"></div>



                    <div class="calendar overview white">
                        <button class="button-calendar text-decoration">
                            <img src="ressources/icons/calendar icon.png" alt="calendar icon" class="calendar-icon">
                            <h3>Calendar</h3>
                            <img src="ressources/icons/arrow bottom 2.png" alt="arrow bottom icon" class="arrow-bottom-icon">
                        </button>
                    </div>

                    <div class="calendar-more display-none" data-visible="false">
                            
                            <a class="calendar block text-decoration" href="admin.php">
                                <img src="ressources/icons/add event icon.png" alt="add event icon" class="add-event-icon icon-more">
                                Add Event
                            </a>

                            <a class="calendar block text-decoration" href="admincalendar.php">
                                <img src="ressources/icons/event.png" alt="event icon" class="event-icon icon-more">
                                List Event
                            </a>
 
                    </div>

                    <div class="line"></div>

                    <div class="user overview white">
                        <button class="button-user text-decoration">
                            <img src="ressources/icons/user icon 2.png" alt="user icon" class="user2-icon">
                            <h3>User</h3>
                            <img src="ressources/icons/arrow bottom 2.png" alt="arrow bottom icon" class="arrow-bottom-icon">
                        </button>
                    </div>

                    <div class="user-more display-none" data-visible="false">
                            
                            <a class="user block text-decoration" href="register.php">
                                <img src="ressources/icons/add-user.png" alt="add user icon" class="add-user-icon icon-more">
                                Add User
                            </a>

                            <a class="user block text-decoration" href="listuser.php">
                                <img src="ressources/icons/add-user.png" alt="add user icon" class="add-user-icon icon-more">
                                List User
                            </a>
 
                    </div>

                    <div class="line"></div>
                </div>

                <div class="other-square">
                    <div class="list-event">

                            <div class="event"> 
                                <?php echo $formEvent; ?>
                            </div>

                            <div class="event-edit"> 
                                <?php echo $formEdit; ?>
                            </div>
                    </div>
                    
                </div>
                </div>
            </div>
        </div>

    </section>
</body>