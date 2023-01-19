<?php
    session_start();
    if (!isset($_SESSION['authenticated'])) {
        header('Location: login.php');
        exit;
    }
    // Database information.

    $host = 'localhost';
    $dbName = 'saith';
    $username = 'root';
    $password = '';




    $db = mysqli_connect($host, $username, "", $dbName);

    $query = "SELECT id, email FROM login";
    $result = mysqli_query($db, $query);


    $formUser = "<form method='post' action=''>";

    // We want to retrieve information like email and a button delete to delete it if the admin want.

    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $email = $row['email'];

        $formUser .= "<form method='post' action=''>";
        $formUser .= "<p> $email </p>";

        $formUser .= "<input type='submit' name='delete$id' value='Delete'>";

        $formUser .= "</form>";
    }

    foreach($_POST as $key => $value) {
        if (strpos($key, 'delete') !== false) {

            // We extract the id withouth the "delete".

            $id = substr($key, 6);
            $query = "DELETE FROM login WHERE id=$id";
            mysqli_query($db, $query);
            header("Location: " . $_SERVER['REQUEST_URI']);
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
    <link rel="stylesheet" type="text/css" href="css/listuser.css"/>

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
                            
                        <a class="statistic block text-decoration "  href="statistic.php">
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
                            
                            <a class="subscriber block text-decoration" href="newsletter_list.php">
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

                            <a class="user block text-decoration" href="register.php">
                                <img src="ressources/icons/add-user.png" alt="add user icon" class="add-user-icon icon-more">
                                List User
                            </a>
 
                    </div>

                    <div class="line"></div>
                </div>
                    

                <div class="other-square">
                    <div class="user-square">
                        
                        <div class="title-user">
                            <h3>Manage User</h3>
                        </div>
                        <div class="information-user">
                        <?php echo $formUser; ?>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>

    </section>
</body>