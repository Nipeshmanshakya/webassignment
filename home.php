<?php
include 'LoginController.php';
include 'db_conn.php';

session_start();
$username = $_SESSION['username'];
//$access = $_SESSION['access'];

$username = $_SESSION['username'];
if ($username == true ){

}else{
	header('location:login.php');
}


$user_id = $_POST['user_id'];
$username = $_GET['username'];


$query = "select * from user_details where username='$username' ";
die($query);
$result = mysqli_query($conn, $query);

$queries = array();
while ( $row = mysqli_fetch_assoc( $result )) {
    $queries[] = $row;
}

?>

<html>
<head>
    <title>Secure Bank Home</title>
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
</div>
</header>
 <div class="top-bottom"><a href="logout.php">Logout</a></div>
<h1 style="margin-left:10%;">
    <?php
        if (isset($_SESSION['message'])){
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        }
    ?>
</h1>
    <div>
        <table>
            <tr>
                <th>Accounts</th>
                <th>Portfolio</th>
            </tr>
            <tr>
                <th>Nickname</th>
                <th>BSB/Details</th>
                <th>Account number</th>
                <th>Account balance</th>
                <th>Available funds</th>
            </tr
                <?php foreach( $queries as $query ){ ?>
            <tr>
                <td><?php echo $query['nickname']; ?></td>
                <td><?php echo $query['bsb']; ?></td>
                <td><?php echo $query['account_number']; ?></td>
                <td><?php echo $query['account_balance']; ?></td>
                <td><?php echo $query['available_funds']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>