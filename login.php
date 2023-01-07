<?php
  // Start the session
  session_start();

  $email_err = $password_err = $login_err = "";
/*
  // Check if the user is already logged in
  if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {

    header("Location: admin.php");

    exit;
  }
  */

  // Check if the form was submitted
  if (isset($_POST['email']) && isset($_POST['password'])) {

    // Information of the database.

    $db = mysqli_connect("localhost", "root", "", "saith");

    // We check if the email input is empty.

    if(empty(trim($_POST['email']))){
        $email_err = "Please enter an email.";
    }
    if(empty(trim($_POST['password']))){
        $password_err = "Please enter a password.";
    }

    if(empty($email_err) && empty($password_err)){
        // Escape the email and password to prevent SQL injection attacks
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

        // Check if the email and password are correct
        $query = "SELECT * FROM login WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($db, $query);
        if (mysqli_num_rows($result) == 1) {
        // Login successful
        $_SESSION['logged_in'] = true;
        header("Location: dashboard.php");
        exit;
        } else {
        // Login have failed.
        $login_err = "Invalid email or password";
        }
    }

  }
?>


  
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Saith Seren / Access Admin Page</title> 
    <link rel="shortcut icon" type="image/png" href="ressources/logo/Saith Seren Logo.png"/>
    
    <link rel="stylesheet" type="text/css"  href="css/login.css"/>



</head>


<body>



    <section class="login" id="login">
        <div class="max-width">

            <div class="login-circle">
                <img src="ressources/icons/lock icon.png" alt="lock icon" class="lock-icon">
            </div>
            <div class="login-content">
                <div class="login-square">
                    <div class="saith-seren-image">
                        <img src="ressources/logo/Saith Seren Logo.png" alt="saith seren logo" class="saith-seren-logo">

                    </div>

                    <div class="login-detail">
                        <form class="login-form" id="login-form" method="post" action="login.php">

                                <!-- Login have failed. -->
                                <div class="login-message">

                                    <?php if (isset($login_err)) { ?>
                                    <p class="error-message"><?php echo $login_err; ?></p>
                                    <?php } ?>

                                    <?php if (isset($email_err)) { ?>
                                    <p class="error-message"><?php echo $email_err; ?></p>
                                    <?php } ?>

                                    <?php if (isset($password_err)) { ?>
                                    <p class="error-message"><?php echo $password_err; ?></p>
                                    <?php } ?>

                                </div>
                            <label class="label-form" for="email">Email<br></label>
                            <input type="email" id="email" name="email" placeholder="Your email"><br>

                            <label class="label-form" for="passeword">Password<br></label>
                            <input type="password" id="password" name="password" placeholder="Your password"><br>

                            <div class="button-login">
                                <p>Can’t login?</p>
                                <button type="submit">Login</button>

                            </div>
                        </form>
                    </div>

                </div>

                <div class="presentation-login-square">
                    <div class="circle-1"></div>
                    <div class="circle-2"></div>
                    <div class="circle-3"></div>
                    <div class="triangle-1"></div>

                    <div class="sentence-login-page">
                        <h3>Welcome to your admin page login</h3>
                        <p>Login to access your admin account</p>

                    </div>


                </div>
            </div>
        </div>

        

    </section>

</body>