<?php 
session_start();

require "config.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Home Page</title>
    <link rel="stylesheet" href="assets/styles/style.css">


</head>
<body>
    <div style="text-align: center; padding: 15%;">
        <p style="font-size: 50px; font-weight:bold;">
        Hello <?php
    if(isset($_SESSION['email'])){
        $email = $_SESSION['email'];

        $query = "SELECT * FROM users WHERE email = '$email'";
        $query_run = mysqli_query($conn, $query);
        while($row = mysqli_fetch_array($query_run)){
            echo $row['first_name']. " ". $row['last_name'];
        }
    }?>
        </p>

    </div>
   


<a href="logout.php" class="btn">Logout</a>






</body>
</html>
