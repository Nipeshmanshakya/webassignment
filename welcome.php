<?php
include 'LoginController.php';
?>
<html>
<head>
    <title>Welcome to Secure Bank</title>
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
                <li class="topmenu"><a href="welcome.php">Home</a></li>
                <li class="topmenu"><a href="welcome.php">Home</a></li>
                <li class="topmenu"><a href="#services">Services</a></li>
                <li class="topmenu"><a href="#privacy">Privacy</a></li>
                <li class="topmenu"><a href="#message">Message</a></li>
                <li class="topmenu"><a href="#aboutus">About us</a></li>
                 </ul>
</div>
</header>

<div>
            <ul class="sidemenu">
                <li class="sidemenu"><a href="login.php">Staff Login</a></li>
                <li class="sidemenu"><a href="login.php">Client Login</a></li>
                <li class="sidemenu"><a href="register.php">Register</a></li>
            </ul>
        </div>
        <div>
                <p class="text"><strong>SecureBank Pty. Ltd.</strong> has started its bank services and is in early stage of their business.<br>
                Being in 21stcentury, ease of access and user friendly are the two most important factors<br> in any service offered by the banks.To increase their business and attract more customers<br> they have decided to develop a web site where customers would be able to perform all the<br> banking activities without any hassle.</p>
        </div>
<h1>
    <?php
        if (isset($_SESSION['message'])){
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        }
    ?>
</h1>
</body>
</html>