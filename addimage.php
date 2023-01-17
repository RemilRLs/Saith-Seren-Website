<?php

    $titlePicture_err = $descPicture_err = $imagePicture_err = "";

    // Database information.

    $host = 'localhost';
    $dbName = 'saith';
    $username = 'root';
    $password = '';


    // If there is a post method.

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        if(isset($_FILES['image'])){
            $file = $_FILES['image'];

            // We check if the image have a binary of type "image" like "jpg, jpeg, png and more...).

            $file_type = exif_imagetype($file['tmp_name']);

            if ($file_type === false) {
                $imagePicture_err = "The file that you provide is not an image, please retry...";

                exit();
            }

    
        }
        else{
            $imagePicture_err = "The form need an image";
        }

        if(empty(trim($_POST['titlePicture']))){
            $titlePicture_err = "The form need a title.";
        }
        
        if(empty(trim($_POST['descPicture']))){
            $descPicture_err = "The form need a description.";
        }

        

        $db = mysqli_connect($host, $username, "", $dbName);

        if(empty($titlePicture_err) && empty($descPicture_err) && empty($imagePicture_err) && empty($descPicture_err)){

            $titlePicture = mysqli_real_escape_string($db, $_POST['titlePicture']);
            $descPicture = mysqli_real_escape_string($db, $_POST['descPicture']);
            $file_path = 'ressources/images/'.$file['name'];

            $query = "INSERT INTO images (title, description, image) VALUES ('$titlePicture', '$descPicture', '$file_path')";
            $result = mysqli_query($db, $query);

            if ($result === FALSE){
                printf("Error: %s\n", mysqli_error($db));
            }
            else{
    
                // Success of the query.
            }
            
        }
        else{

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
    <link rel="stylesheet" type="text/css" href="css/register.css"/>

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

                            <a class="user block text-decoration" href="listuser.php">
                                <img src="ressources/icons/add-user.png" alt="add user icon" class="add-user-icon icon-more">
                                List User
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
                                List Image
                            </a>

                            <a class="user block text-decoration" href="addimage.php">
                                <img src="ressources/icons/add-user.png" alt="add user icon" class="add-image-icon icon-more">
                                Add Image
                            </a>
 
                    </div>

                    <div class="line"></div>
                </div>

                <div class="other-square">
                    <div class="add-image"> 
                        
                    <div class="flex"> 
                        <form class="picture-add-form"  method="post" action="addimage.php" enctype="multipart/form-data">

                            <label class=space-between" for="title" style="margin-right: 135px;">Title: </label><br>
                            <input type="text" id="titlePicture" name="titlePicture"><br>



                            <label class=space-between" for="description" style="">Description: </label>
                            <textarea id="descPicture" name="descPicture"></textarea><br>

                            
                            <label class=space-between" for="picture" style="">Image: </label><br>
                            <input type="file" name="image" accept="image/*"><br>


                            <input type="submit" value="Add Image">
                        
                        </form>


                   </div>
                </div>
            </div>
        </div>

    </section>
</body>