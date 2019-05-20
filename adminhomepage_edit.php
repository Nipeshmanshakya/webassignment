<?php
require_once ('db_conn.php');
$user_id = $_GET['user_id'];
$query = "select * from user_details where user_id = '$user_id' ";
die($query);
$result = mysqli_query( $conn, $query );
$row = mysqli_fetch_assoc( $result )
?>


<html>
<head>
    <title>Secure Bank admin page</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 80%;
margin-left: 10%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 21px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
    
</head>
<body>
<header>
    <span class="right"><img src="image/sblogo.png" alt="sb logog" style="width:10%; height:10%;"></span>
<div class="menu">
            <ul class="topmenu">
                <li class="topmenu"><a class="active" href="home.php">Home</a></li>
                <li class="topmenu"><a href="#accounts">View accounts</a></li>
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
<div class="container" style="margin-top:3%;">
            <form action="update.php?id=<?php echo $user_id;?>" class="form" method="post" onsubmit="return validate(this);">
                <div class="form-group">
                    <label for="">Username</label><br>
                    <input type="tel" name="username"  value="<?php echo $row['username']; ?>">
                </div>
                <div class="form-group">
                    <label for="">BSB</label><br>
                    <input type="tel" name="bsb" value="<?php echo $bsb ;?>">
                </div>
                <div class="form-group">
                    <label for=""> Account Number</label><br>
                    <input type="tel" name="account_number" value="<?php echo $account_number ;?>">
                </div>
                <div class="form-group">
                    <label for="">Account Balance</label><br>
                    <input type="password" name="available_balance" value="<?php echo $account_balance ;?>">
                </div>
                <div class="form-group">
                    <label for="">Available Funds</label><br>
                    <input type="password" name="available_funds" value="<?php echo $available_funds ;?>">
                </div>
                <div class="form-group">
                    <button name="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

