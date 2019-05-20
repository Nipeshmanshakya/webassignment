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

$query = "select * from user_details where user_id = '$user_id' ";
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
                <li class="topmenu">
                    <a href="#manage">Offers</a></li>
                <li class="topmenu"><a href="#message">Inbox</a></li>
                <li class="topmenu"><a href="#aboutus">About us</a></li>
            </ul>
     <div class="top-bottom"><a href="logout.php">Logout</a></div>
</div>
</header>
    <div>
<!--
        <table>
            <tr>
                <th>BSB</th>
                <th>Account number</th>
                <th>Amount</th>
                <th>Purpose</th>
            </tr>
                <?php foreach( $queries as $query ){ ?>
            <tr>
              
                <td><?php echo $query['bsb']; ?></td>
                <td><?php echo $query['account_number']; ?></td>
                <td><?php echo $query['account_balance']; ?></td>
                <td><?php echo $query['available_funds']; ?></td>
            </tr>
            <?php } ?>
        </table>
-->
        
            
    <form action="" method="post" >
<table>
<tr>
<th class="text-left">*From:</th>
<th ><input type="text" id="" name="BSB" value="<?php echo $_SESSION['bsb']; ?>" disabled>
    <input type="text" id="" name="account_number" value="<?php echo $_SESSION["account_number"]; ?>"  disabled>
    </th>
</tr>

<tr>
<td class="text-left">*TO:</td>
<td ><input type="text" id="" name="BSB" placeholder="BSB">
    <input type="text" id="" name="account_number" placeholder="Account number"></td>
    </tr>
    
    
    <tr>
<td class="text-left">$Amount:</td>       
        
<td ><input type="number" id="" name="balance" placeholder=""></td>
    </tr>
    
       <tr>  
           <td class="text-left">*Purpose:</td>
  <td><select name="purpose" id="" >
             <option value="Family support">Family support</option>
              <option value="loan payment">loan payment</option>
              <option value="School tuition fee">School tuition fee</option>
              <option value="Others">Others</option>
      </select>
      </td>
        </tr>

</table>
        <br><br>
       <center><input class= "lin-submit-button" type="submit" value="submit" name="submit"></center>

        </form>

    </div>
</body>
</html>