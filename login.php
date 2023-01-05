<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Saith Seren / Access Admin Page</title> 
    <link rel="shortcut icon" type="image/png" href="ressources/logo/Saith Seren Logo.png"/>
    
    <link rel="stylesheet" type="text/css" href="css/login.css"/>



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
                        <form id="login-form" method="post" action="login.php">
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