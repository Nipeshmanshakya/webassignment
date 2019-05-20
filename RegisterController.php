<?php
session_start();
include('db_conn.php');

    if(isset($_POST) && !empty($_POST)){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];


       
    $query = "insert into users( username, password, phone, email, gender ) 
	VALUES ('$username', '$password', '$phone', '$email', '$gender' )";

        mysqli_query($conn, $query);
        $_SESSION['register'] = "new user successfully registered";
        header('location:login.php');
    }
?>
