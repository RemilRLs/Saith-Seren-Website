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
        $emails = '';
        
        while($row = mysqli_fetch_assoc($result)){
            $emails .= $row['email'] . "\n";
        }

        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=emails_list.txt');

        echo $emails;

        exit;
    }

    header("Location: ../newsletter_list.php");


?>