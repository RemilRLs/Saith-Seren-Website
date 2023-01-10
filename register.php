<?php
    session_start();

    $email_err = $password_err = $password_confirm_err  = $password_not_err = $already_user_err = "";
    $success = "";


    $password = "";

    $host = 'localhost';
    $dbName = 'saith';
    $username = 'root';
    $password = '';
    
    
    if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_confirm'])){

        if(empty(trim($_POST['email']))){
            $email_err = "Please enter an email.";
        }
    
        if(empty(trim($_POST['password'])) || empty(trim($_POST['password_confirm']))){
            $password_err = "Please enter a password.";
        }
        elseif(strlen(trim($_POST['password'])) < 8){
            $password_err = "Password must have atleast 8 characters.";
        }
        else{
            $password = trim($_POST['password']);
        }

        if(empty($password_err) && ($password != trim($_POST['password_confirm']))){
            $password_not_err = "Password didn't match, please retry.";
        }

        $db = mysqli_connect($host, $username, "", $dbName);

        if(empty($email_err) && empty($password_err) && empty($password_confirm_err) && empty($password_not_err)){

            $email = mysqli_real_escape_string($db, $_POST['email']);
            $password = mysqli_real_escape_string($db, $_POST['password']);

            // We check if there is alaready an user with the same email.

            $query = "SELECT id FROM login WHERE email = '$email'";
            $result = mysqli_query($db, $query);

            if (mysqli_num_rows($result) >= 1) {
                $already_user_err = "This email is already taken.";
            }
            else{

                $query = "INSERT INTO login (email, password) VALUES ('$email', '$password')";
                $result = mysqli_query($db, $query);
    
                if ($result === FALSE){
                    printf("Error: %s\n", mysqli_error($db));
                }
                else{
                    $success = "Administrator have been created.";
                    // Success of the query.
                }
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
    <link rel="stylesheet" type="text/css" href="css/register.css"/>




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
                    <div class="register"> 
                        <div class="register-add-user"> 
                            <h3>Registration</h3>
                            <p>Register an admin.<p>
                        </div>

                        <form class="register-form" method="post" action="register.php">

                        <div class="register-message">

                                <?= (isset($email_err) && !empty($email_err)) ?  '<p class="error-message">'.$email_err.'</p>':''; ?>
                                <?= (isset($email_err) && !empty($email_err)) ?  '<p class="error-message">'.$already_user_err.'</p>':''; ?>
                                <?= (isset($password_err) && !empty($password_err)) ?  '<p class="error-message">'.$password_err.'</p>':''; ?>
                                <?= (isset($password_confirm_err) && !empty($password_confirm_err)) ?  '<p class="error-message">'.$password_confirm_err.'</p>':''; ?>
                                <?= (isset($success) && !empty($success)) ?  '<p class="confirm-message">'.$success.'</p>':''; ?>

                            </div>
                            <label class="label-form" for="email">Email<br></label>
                            <input type="email" id="email" name="email" placeholder="Your email"><br>

                            <label class="label-form" for="email">Password<br></label>
                            <input type="password" id="password" name="password" placeholder="Password"><br>

                            <label class="label-form" for="email">Confirm Password<br></label>
                            <input type="password" id="password_confirm" name="password_confirm" placeholder="Repeat your password"><br>

                            <div class="button-login">
                                <button type="submit">Submit</button>

                            </div>
                        </form>
                    
                    </div>
                </div>
            </div>
        </div>

    </section>
</body>