<?php
    session_start();
?>
<html>
<head>
    <title>Secure bank Register page</title>
    <link rel="stylesheet" type="text/css" href="style.css">

        	<script type = "text/javascript">
function validate(form){
		if (form.fullname.value == ""){
			alert("Error: Please enter full name");
			form.fullname.focus();
			return false;
			}
		if (form.username.value == ""){
			alert("Error: Username cannot be blank");
			form.username.focus();
			return false;
			}
		if (form.password.value == ""){
			alert("Error: Please enter password");
			form.password.focus();
			return false;
			}
		
		if (form.confirm_password.value == ""){
			alert("Error: Please re-enter password");
			form.confirm_password.focus();
			return false;
			}
		
		if (form.email.value == ""){
			alert("Error: Please enter email");
			form.email.focus();
			return false;
			}		
        	if (form.phone.value == ""){
			alert("Error: Please enter phone");
			form.phone.focus();
			return false;
			}
		if (form.gender1.checked == false &form.gender2.checked == false &form.gender3.checked == false){
			alert("Error: Please enter gender");
			form.gender.focus();
			return false;
			}

            var checkpass = /^(?=.*?[a-z])(?=.*?[A-Z])(?=.*?\d)(?=.*?[~!#$]).*$/;;

            if(form.password.value.length < 8 || form.password.value.length > 12){
            alert("Error: password length");
            return false;
            }

            if(!checkpass.test(form.password.value)){
	alert("Error: Use atleaset one uppercase letter, one number, one special character.");
            return false;
            }
		}
	</script>

</head>
<body>
<header>
    <span class="right"><img src="image/sblogo.png" alt="sb logo" style="width:10%; height:10%;"></span>
<div class="menu">
            <ul class="topmenu">
                <li class="topmenu"><a class="active" href="welcome.php">Home</a></li>
                <li class="topmenu"><a href="#accounts">Accounts</a></li>
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
                <li class="sidemenu"><a href="login.php">Staff Login</a></li>
                <li class="sidemenu"><a href="login.php">Client Login</a></li>
                <li class="sidemenu"><a href="register.php">Register</a></li>
            </ul>
        </div>


    <div class="container">
    <h1 align="center">Create your New Account</h1>

            <form action="RegisterController.php" class="form" method="post" onsubmit="return validate(this);">
                <div class="form-group">
                    <label for="">Full name</label><br>
                    <input type="tel" name="fullname" placeholder="Enter your Fullname">
                </div>
                <div class="form-group">
                    <label for="">Username</label><br>
                    <input type="tel" name="username" placeholder="Enter your Username">
                </div>
                <div class="form-group">
                    <label for=""> Email</label><br>
                    <input type="tel" name="email" placeholder="@gmail.com">
                </div>
                <div class="form-group">
                    <label for="">Create a password</label><br>
                    <input type="password" name="password" placeholder="Enter your Password">
                </div>
                <div class="form-group">
                    <label for="">Confirm password</label><br>
                    <input type="password" name="confirm_password" placeholder="Re-type your password">
                </div>

                <div class="form-group">
                    <label for="">Mobile</label><br>
                    <input type="number" name="phone" placeholder="Enter your phone number">
                </div>
          	<div class="form-group">
                	<label for=""> Gender </label><br>
                	<input type="radio" id="gender1" value="male" name="gender">Male
                	<input type="radio" id="gender2" value="female" name="gender">Female
                	<input type="radio" id="gender3" value="other" name="gender">Other
            	</div> 
                <div class="form-group">
                    <button name="register">Register</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>