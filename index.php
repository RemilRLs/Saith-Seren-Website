<?php

    include 'phpscript/visit_counter.php'; // Counter of visit.

  // Start the session.

  session_start();

  $email_err = $subscribe_confirmation = "";

  // Check if the form was submitted.

  if (isset($_POST['email'])) {

    // Information of the database.

    $db = mysqli_connect("localhost", "root", "", "saith");

    // We check if the email input is empty.

    if(empty(trim($_POST['email']))){
        $email_err = "Please enter an email.";  
    }


    if(empty($email_err)){
        // Escape the email and password to prevent SQL injection attacks.

        $email = mysqli_real_escape_string($db, $_POST['email']);

        $query = "SELECT * FROM newsletter WHERE email = '$email'";
        $result = mysqli_query($db, $query);
        // If there is already an email.

        if (mysqli_num_rows($result) == 1) {
            $email_err = "You are already subscribe.";
        } else {
            // If everything is ok.

            $query = "INSERT INTO newsletter (email) VALUES ('$email')";
            $result = mysqli_query($db, $query);

            $subscribe_confirmation = "You are now subscribe to the newsletter.";
        }
    }

  }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Saith Seren / Home</title> 
    <link rel="shortcut icon" type="image/png" href="ressources/logo/Saith Seren Logo.png"/>
    
    <link rel="stylesheet" type="text/css" href="css/navbar.css"/>
    <link rel="stylesheet" type="text/css" href="css/about.css"/>
    <link rel="stylesheet" type="text/css" href="css/newsletter.css"/>
    <link rel="stylesheet" type="text/css" href="css/pictures.css"/>
    <link rel="stylesheet" type="text/css" href="css/contact.css"/>


    <script src="js/navbar.js" defer></script>
    <script src="js/pictures.js" defer></script>
    <script src="js/about.js" defer></script>

    <?php include 'phpscript/picture_element.php'; ?>

</head>


<body>

    <!-- Navbar Section. -->

    <header class="primary-header flex">
        <nav data-visible="false" class="navbar">
            <div class="max-width">
                <div class="logo">
                    <img src="ressources/logo/Saith Seren Logo.png">
                </div>
                
                <!-- Element of the navbar. -->
                <button class="mobile-nav-toggle" aria-controls="menu-navigation" aria-expanded="false"><span class="sr-only" ></span></button>
                <ul data-visible="false" class="menu-navigation flex">

                        
                        <div class="menu-navigation-left">
                            <li><a class="navbar-element home" href="#about">Home</a></li>
                            <li><a class="navbar-element margin calendar"  href="calendar.php">Calendar</a></li>
                            <li><a class="navbar-element picture"  href="#pictures">Pictures</a></li>
                            <li><a class="navbar-element margin centre" href="thecentre.php">The Centre</a></li>
                            <li><a class="navbar-element contact"  href="#contact">Contact</a></li>
                        </div>

                        <div  class="menu-navigation-right">
                            <li><a class="navbar-element-right subscribe subscribeText" href="https://pay.gocardless.com/billing/static/collect-customer-details?id=BRF0008R8HK5T6FCJQQ8B61HREPGP8JE&initial=%2Fcollect-customer-details" target="_blank">Subscribe</a></li>

                            <!-- Section for choosing a language. -->

                            <div class="logo">

                            </div>

                            <div class="lang-menu">
                                <div class="selected-lang">
                                    <img src="ressources/logo/united-kingdom.png">
                                    <a>Welsh</a>
                                </div>

                                <ul  class="langWrap">
                                    <li><a  href="#" class="translate " language='welsh'><img src="ressources/logo/united-kingdom.png">Welsh</a></li>
                                    <li><a  href="#" class="translate active" language='english'><img src="ressources/logo/united-kingdom.png">English</a></li>

                                </ul>     
                            </div>
    
                        </div>
                    


                </ul>
            </div>
        </nav>

    </header>

    <!-- About Section -->

    <section class="about" id="about">
        <div class="max-width">
            <div class="about-content">
                <div class="image-saith-seren">
                    <img src="ressources/images/FUOvqN-WIAEhfu5.jpg">
                </div>
                <div class="title-saith-seren">
                    <h1>Saith Seren</h1>
                </div>
                <div class="square-about">
                    <div class="welsh-culture">
                        <div class="square-information-welsh">
                            <h3 class="welsh-title title">Welsh Culture</h3>

                            <p class="welshDescrip welsh-description">You are proud or interested in Welsh culture then you have come to the right place! Here<br> you will find all the information you need.</p>


                            <button class="read-more readmore"> <img src="ressources/icons/arrow bottom.png" alt="arrow bottom icon" class="read-more-icon"> Read More</button>
                        </div>
                    </div>
                    <div class="subscribe">

                        <div class="subscribe-title-box">
                            <div class="circle-heart">
                                <img src="ressources/icons/heart subscribe.png" alt="heart icon" class="heart-icon">
                            </div>

                            <h3 class="subscribeSupport subscribe-title">Support Us</h3>
                        </div>

                        <p class="descriptionSubscribe description-subscribe"> Become a member of Saith Seren for £10 a month, support us in our aim to promote Welsh language and culture</p>
                        <div class="box-subscribe-button">
                            <button class="subscribeText subscribe-button" onclick="window.open('https://pay.gocardless.com/billing/static/flow?id=BRF0008R8KQ1C459KNRPTWDAYJ5M59B4', '_blank')">Subscribe</button>
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Subscribe Newsletter Section -->

    <section class="newsletter" id="newsletter">
        <div class="max-width">
            <div class="newsletter-content"> 
                <div class="newsletter-square"> 
                    <div class="icon-newsletter">
                        <img src="ressources/images/newsletter.png" alt="newsletter image" class="newsletter-image">
                    </div>

                    <div class="newsletter-square-information">
                        <h3 class="subscribeNewsLetter">Subscribe to our <br>Newsletter !</h3>

                        <p class="descriptionSubscribeNewsLetter">Subscribe to our newsletter to stay informed about news related to Welsh culture.</p>
                        <div class="message-newsletter"> 
                            <?= (isset($email_err) && !empty($email_err)) ?  '<p class="error-message">'.$email_err.'</p>':''; ?>
                            <?= (isset($subscribe_confirmation) && !empty($subscribe_confirmation)) ?  '<p class="confirmation-message">'.$subscribe_confirmation.'</p>':''; ?>
                        </div>
                        <div class="email-prompt">

                            <form class="newsletter-form" id="newsletter-form" method="post" action="index.php">

                                <div class="newsletter-message"> 
                                    

                                </div>


                                <input type="email" id="email" name="email" placeholder="Your email"><br>
                                <img src="ressources/icons/email.png" alt="email icon" class="email-icon">
                                <input type="submit" value="Send">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!-- Picture Saith Seren Presentation Section -->

    <section class="pictures" id="pictures">
        <div class="max-width">
            <div class="pictures-content">
                <div class="pictures-square">
                    <div class="description-picture">
                        <h1 class="title-picture">The Centre</h1>

                        <p class="title-description">Here is a view from the front of the center. We are waiting for you there!</p>
                    </div>

                    <div class="pictures-scroll">
                        <div class="picture-choose">
                            <button> <img src="ressources/icons/arrow left.png" alt="arrow left" class="arrow-left"></button>

                            <button>01</button>
                            <button>02</button>
                            <button>03</button>

                            <button><img src="ressources/icons/arrow right.png" alt="arrow right" class="arrow-right"> </button>
                        </div>

                        <div class="picture-scroll">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Part -->

    <footer>
        <!-- Contact Section -->

        <section class="contact" id="contact">
            <div class="max-width">
                <div class="contact-content">
                    <div class="contact-square">
                        <div class="contact-address-information-square">
                            <h1>Contact Us</h1>

                            <div class="contact-address">
                                <div class="address">
                                    <h3> Saith Seren</h3>

                                    <p>Canolfan Gymraeg Wrexham<br>
                                        18 Chester Street<br>
                                        LL13 8BG</p>
                                </div>
                                <div class="number-email">

                                    <div class="number">
                                        <img src="ressources/icons/phone.png" alt="number icon" class="number   -icon">
                                        <p>01978 447006<br>
                                            Chair 07885567512
                                            </p>
                                    </div>

                                    <div class="email">
                                        <img src="ressources/icons/email.png" alt="email icon" class="email-icon">
                                        <p>7seren@gmail.com</p>
                                    </div>

                                </div>
                                <div class="icon-localisation">
                                    <img src="ressources/icons/localization.png" alt="localization icon" class="localization-icon">
                                </div>
                            </div>
                        </div>
    
                        <div class="contact-other-information">
                            <div class="opening-time-information">

                                <div class="opening-time">
                                    <h2>Opening Time</h2>

                                    <p>
                                        Open Monday through Friday<br>
                                        
                                        4:30 - 11:00<br>
                                        
                                        Saturday until midnight
                                        </p>
                                </div>

                                <div class="contact-social-media">

                                    <div class="twitter-image">
                                    <a class="link-facebook" href="https://www.facebook.com/saithseren1" target="_blank"><img src="ressources/images/facebook.png" alt="facebook image" class="s-facebook-image"></a>
                                    </div>

                                    <div class="facebook-image">
                                    <a class="link-twitter" href="https://twitter.com/saithseren" target="_blank"><img src="ressources/images/twitter.png" alt="twitter image" class="s-twitter-image"></a> 
                                    </div>

                                </div>
                            </div>

                            <div class="map-interaction">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9594.063619977964!2d-2.9918844!3d53.0470371!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3fc094f30db4bbaa!2sSaith%20Seren!5e0!3m2!1sfr!2suk!4v1673925586807!5m2!1sfr!2suk" width="100%" height="100%" style="border-radius: 20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>


</body>


</html>