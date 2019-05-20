<?php
include_once 'LoginController.php';
?>
<html>
<head>
    <title>Secure bank Login page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
<style>
            body{
                background-image: url("image/img1.jpg");
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>
    	<script type = "text/javascript">
function validate(form){
	if (form.username.value == ""){
			alert("Error: Please enter username");
			form.username.focus();
			return false;
			}
        if(form.password.value == ""){
            alert("Error: Please enter your password");
            form.password.focus();
            return false;            
        }
}
        </script>
</head>
<body>
<header>
    <span class="right"><img src="image/sblogo.png" alt="sb logog" style="width:10%; height:10%;"></span>
<div class="menu">
            <ul class="topmenu">
                <li class="topmenu"><a class="active" href="home.php">Home</a></li>
                <li class="topmenu"><a href="#accounts">Accounts</a></li>
                    <ul>
                        <li class="topmenu"><a href="savingpage.php">Saving account</a></li>
                        <li class="topmenu"><a href="businesspage.php">Business account</a></li>
                        <li class="topmenu"><a href="adminpage.php">Admin</a></li>
                    </ul>
                <li class="topmenu"><a href="#transactions">Transactions</a></li>
                <li class="topmenu"><a href="#estatements">Estatements</a></li>
                <li class="topmenu"><a href="#transfers">Transfers & pay</a></li>
                <li class="topmenu">
                    <a href="#manage">Manage</a></li>
                <li class="topmenu"><a href="#message">Message</a></li>
                <li class="topmenu"><a href="#aboutus">About us</a></li>
                 </ul>
</div>
 
</header>

        <div>
            <ul class="sidemenu">
                <li class="sidemenu"><a href="businesspage.php">Business page</a></li>
                <li class="sidemenu"><a href="adminpage.php">Admin</a></li>
                <li class="sidemenu"><a href="register.php">Register</a></li>
            </ul>
        </div>

<h1 align="center" style="margin-top:-17%;">Login to your Secure Bank Account</h1>

<div class="Login-container">
    <?php
        if(isset($_SESSION['register'])){
            echo $_SESSION['register'];
            unset($_SESSION['register']);
        }
    ?>
    <?php
    if(isset($_SESSION['error'])){
        echo $_SESSION['error'];
        unset ($_SESSION['error']);
    }
    ?>

    <form action="login.php" class="form" method="post" onsubmit="return validate(this);">
        <div class="form-group">
            <label for="">Username</label><br>
            <input type="tel" name="username" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="">Password</label><br>
            <input type="password" name="password" placeholder="password">
        </div>    
        <div class="form-group">
            <label for="">Account type</label>
            <select name="account_type" value="account_type">
                <option value="saving" name="saving">Saving</option>
                <option value="business" name="business">Business</option>
                <option value="admin" name="admin">Admin</option>
            </select>
        </div>
        <div class="form-group">
            <button name="login">Login</button>
        </div>

        <div class="forgot_password">
            <a href="register.php">Forgot password</a>
        </div>
    </form>
</div>
</body>
</html>