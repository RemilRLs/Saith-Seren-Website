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




    if(isset($_POST['export_emails_btn'])){

        $db = mysqli_connect($host, $username, "", $dbName);
        $query = "SELECT email FROM newsletter";

        $result = mysqli_query($db, $query);

        // We create a new txt file.

        $file = fopen("../data/emails_list.txt", "w") or die("Unable to open file!");

        while($row = mysqli_fetch_assoc($result)){
            fwrite($file, $row['email'] . "\n");
        }

        header("Location: ../newsletter_list.php");
    }


?>