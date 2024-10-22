<?php
session_start();

require "config.php";


// singup function
if(isset($_POST['signup'])){
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    //$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $password = md5($password);


    $checkEmail = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($checkEmail);
    
    if($result->num_rows > 0){
        echo "Email Address Already Exists !";
    }else{
        $insertQuery= "INSERT INTO users (first_name, last_name, email, password) VALUES ('$first_name', '$last_name', '$email', '$password')";

        if($conn->query($insertQuery)==TRUE){
            header("location: index.php");
            exit(0);
        }else{
            echo "Error:".$conn->error;
        }
    }
    
}

// signin function
if(isset($_POST['signin'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $query_run = $conn->query($query);

    if($query_run->num_rows > 0){        
        $row = $query_run->fetch_assoc();
        $_SESSION['email'] = $row['email'];
        header("location: home.php");
        exit(0);
    }else{
        echo "Not found, Incorrect email or password";
    }
}


?>
