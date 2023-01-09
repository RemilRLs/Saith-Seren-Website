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
    
            $formEdit .= "<input type='submit' name='confirm' value='Confirm'>";
        }
    }




    if(isset($_POST['confirm'])){
        $id = $_POST['id'];
        $title = $_POST['eventTitle'];


        $query = "UPDATE calendar_events SET event_title='$title' WHERE id='$id'";
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