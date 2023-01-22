<?php 
    include 'phpscript/visit_counter_display.php';


    session_start();

    if (!isset($_SESSION['authenticated'])) {
        header('Location: login.php');
        exit;
    }

    $host = 'localhost';
    $dbName = 'saith';
    $username = 'root';
    $password = '';

    // Global counter of the visit of the website in the entire year.

    $db = mysqli_connect($host, $username, "", $dbName);
    $query = "SELECT COUNT(date) as numberVisits FROM visits";

    $result = mysqli_query($db, $query);

    if ($row = mysqli_fetch_assoc($result)){

        // Success of the query.

        $counterVisit = "<p> $row[numberVisits] </p>";
    }
    else{

        printf("Error: %s\n", mysqli_error($db));

    }


    $query = "SELECT COUNT(email) as numberEmail FROM newsletter";
    $result = mysqli_query($db, $query);

    if($row = mysqli_fetch_assoc($result)){
        $counterEmail = "<p> $row[numberEmail] </p>";
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
    <link rel="stylesheet" type="text/css" href="css/statistic.css"/>

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
                            <p>Statistic</p>
                        </a>
                        <a class="notification block text-decoration " href="#">
                            <img src="ressources/icons/notification icon.png" alt="notification icon" class="notification-icon icon-more">
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
                    <div class="title-page-statistic">
                        <h3>Website Statistics</h3>
                    </div>
                    <div class="statistic"> 

                        <div class="element-statistic-square">
                            <div class="static">
                                <div class="statistic-icon">
                                    <img src="ressources/icons/validation icon.png" alt="validation icon" class="validation-icon">
                                </div>
                                
                                <div class="statistic-global">
                                    <div class="statistic-title">
                                        <h3>Website views</h3>
                                    </div>

                                    <div class="statistic-number">
                                        <?php echo $counterVisit; ?>
                                    </div>
                                </div>

                            </div>
                            <div class="static">
                                <div class="statistic-icon">
                                    <img src="ressources/icons/paper icon.png" alt="paper icon" class="paper-icon">
                                </div>
                                
                                <div class="statistic-global">
                                    <div class="statistic-title">
                                        <h3>Registration news</h3>
                                    </div>

                                    <div class="statistic-number">
                                        <?php echo $counterEmail; ?>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="static">
                                <div class="statistic-icon">
                                    <img src="ressources/icons/personnage icon.png" alt="personnage icon" class="personnage-icon">
                                </div>
                                
                                <div class="statistic-global">
                                    <div class="statistic-title">
                                        <h3>Number of subscribers</h3>
                                    </div>

                                    <div class="statistic-number">
                                        <p>0</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <div class="square-statistic-advanced">
                            
                        </div>
                        
                    
                    </div>
                </div>
            </div>
        </div>

    </section>
</body>