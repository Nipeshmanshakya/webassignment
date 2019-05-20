<?php

include 'db_conn.php';
session_start();

$username = $_SESSION['username'] && $_SESSION['account_type'] == 'saving';
if ($username == true){

}else{
	header('location:login.php');
}

?>

<html>
<head>
    <title>Secure Bank Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">

<style>
	        body{
                background-image: url("image/img1.jpg");
                background-repeat: no-repeat;
                background-size: cover;
            }
</style>
    
</head>
<body>
<header>
    <span class="right"><img src="image/sblogo.png" alt="sb logog" style="width:10%; height:10%;"></span>
<div class="menu">
            <ul class="topmenu">
                <li class="topmenu"><a class="active" href="home.php">Home</a></li>
                <li class="topmenu"><a href="account.php">Accounts</a></li>
                <li class="topmenu"><a href="#transactions">Transactions</a></li>
                <li class="topmenu"><a href="#estatements">Estatements</a></li>
                <li class="topmenu"><a href="transfer.php">Transfers & BPAY</a></li>
                <li class="topmenu"><a href="#manage">Offers</a></li>
                <li class="topmenu"><a href="#message">Inbox</a></li>
                <li class="topmenu"><a href="#aboutus">About us</a></li>
            </ul>
    <div class="top-bottom"><a href="logout.php">Logout</a></div>
</div>
</header>
>
<h1 style="margin-left:10%;">
    <?php
        if (isset($_SESSION['message'])){
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        }
    ?>
</h1>

</body>
</html>