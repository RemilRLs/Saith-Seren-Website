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

    $query = "SELECT id, email FROM newsletter";
    $result = mysqli_query($db, $query);


    $formNewsletter = "<form method='post' action=''>";

    // We want to retrieve information like email and a button delete to delete it if the admin want.

    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $email = $row['email'];

        $formNewsletter .= "<form method='post' action=''>";
        $formNewsletter .= "<div class='info-name'>";
        $formNewsletter .= "<p> $email </p>";
        $formNewsletter .= "<p> #$id </p>";
        $formNewsletter .= "</div>";
        

        $formNewsletter .= "<input class='delete-email' type='submit' name='delete$id' value='Delete'>";

        $formNewsletter .= "</form>";
    }

    foreach($_POST as $key => $value) {
        if (strpos($key, 'delete') !== false) {

            // We extract the id without the "delete".

            $id = substr($key, 6);
            $query = "DELETE FROM newsletter WHERE id=$id";
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
    <link rel="stylesheet" type="text/css" href="css/newsletter_list.css"/>

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
                            <img src="ressources/icons/graph bar icon.png" alt="stat icon" class="stat-icon icon-more">
                            <p>Statistic</p>
                        </a>
                        <a class="notification block text-decoration " href="#">
                            <img src="ressources/icons/download icon.png" alt="notification icon" class="notification-icon icon-more">
                            <p>Notification</p>
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
                                <p>Subscriber</p>
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
                                <p>Add Event</p>
                            </a>

                            <a class="calendar block text-decoration" href="admincalendar.php">
                                <img src="ressources/icons/event.png" alt="event icon" class="event-icon icon-more">
                                <p>List Event</p>
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
                                <p>Add User</p>
                            </a>

                            <a class="user block text-decoration" href="listuser.php">
                                <img src="ressources/icons/add-user.png" alt="add user icon" class="add-user-icon icon-more">
                                <p>List User</p>
                            </a>
 
                    </div>

                    <div class="line"></div>

                    <div class="image overview white">
                        <button class="button-image text-decoration">
                            <img src="ressources/icons/add image icon.png" alt="image icon" class="image-icon">
                            <h3>Image</h3>
                            <img src="ressources/icons/arrow bottom 2.png" alt="arrow bottom icon" class="arrow-bottom-icon">
                        </button>
                    </div>

                    <div class="image-more display-none" data-visible="false">
                            
                            <a class="image block text-decoration" href="image.php">
                                <img src="ressources/icons/add-user.png" alt="add image icon" class="add-image-icon icon-more">
                                <p>List Image</p>
                            </a>

                            <a class="user block text-decoration" href="addimage.php">
                                <img src="ressources/icons/add-user.png" alt="add user icon" class="add-image-icon icon-more">
                                <p>Add Image</p>
                            </a>
 
                    </div>

                    <div class="line"></div>

                    <div class="bottom-dashboard">

                            <form method="post" action="phpscript/logout.php">
                                <div class="logout">
                                    <button class="logout-button"><img src="ressources/icons/house icon.png" alt="house icon" class="house-icon"><p>Logout</p></button>
                                </div>
                            </form>

                    </div>
                </div>
                    

                <div class="other-square">
                    <div class="newsletter">
                        <div class="title-section"> 
                                <h4>Email</h4>
                                <h4>Manage </h4>

                        </div>

                        <div class="line-2"></div>

                    
                        <?php echo $formNewsletter; ?> 
                        
                    <form action="phpscript/export_emails.php" method="post">
                        <input class="export" type="submit" value="Export Emails" name="export_emails_btn">
                    </form>

                    </div>
                </div>
            </div>
        </div>

    </section>
</body>