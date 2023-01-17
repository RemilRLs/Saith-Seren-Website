

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Saith Seren / Calendar</title> 
    <link rel="shortcut icon" type="image/png" href="ressources/logo/Saith Seren Logo.png"/>
    
    <link rel="stylesheet" type="text/css" href="css/navbar.css"/>
    <link rel="stylesheet" type="text/css" href="css/calendar.css"/>


    <script src="js/navbar.js" defer></script>
    <script src="js/calendar.js " defer></script>

    <?php include 'phpscript/calendar_event.php'; ?>

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
                            <li><a class="navbar-element" href="index.php">Home</a></li>
                            <li><a class="navbar-element margin" href="#calendar">Calendar</a></li>
                            <li><a class="navbar-element" href="index.php#pictures">Pictures</a></li>
                            <li><a class="navbar-element margin" href="thecentre.php">The Centre</a></li>
                            <li><a class="navbar-element" href="index.php#contact">Contact</a></li>
                        </div>

                        <div  class="menu-navigation-right">
                            <li><a class="navbar-element-right subscribe" href="#">Subscribe</a></li>

                            <!-- Section for choosing a language. -->

                            <div class="logo">

                            </div>

                            <div class="lang-menu">
                                <div class="selected-lang">
                                    <img src="ressources/logo/united-kingdom.png">
                                    <a>Welsh</a>
                                </div>

                                <ul>
                                    <li><a class="wl"><img src="ressources/logo/united-kingdom.png">Welsh</a></li>
                                    <li><a class="en"><img src="ressources/logo/united-kingdom.png">English</a></li>

                                </ul>   
                            </div>
    
                        </div>
                    


                </ul>
            </div>
        </nav>

    </header>


    <!-- Calendar Section -->

    <section class="calendar" id="calendar">
        <div class="triangle-1">

        </div>

        <div class="triangle-2">

        </div>
        <div class="max-width">


            <div class="calendar-content">
                <div class="calendar-title">
                    <h1>Event <br>Calendar</h1>
                </div>


                <div class="calendar-event">
                    <div class="month-event"> 
                        <h1 class="month">January</h1>
                    </div> 

                    <div class="line"></div>

                    <div class="list-event">
                        <div class="event">
                            <div class="date-event">
                                <h3 class="date">29<br>Jan</h3>
                            </div>
                            <div class="desc-event">
                                <div class="title-event">
                                    <h3>Noson Jam Night</h3>
                                </div>
                                <div class="description-event">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sollicitudin arcu sit amet dui ultricies sodales. </p>
                                </div>
                                <div class="hour-event">
                                    <img src="ressources/icons/hour icon.png" alt="hour icon" class="hour-icon">
                                    <p>10 AM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>