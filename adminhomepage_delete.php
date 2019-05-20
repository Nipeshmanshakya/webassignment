<?php
require_once( 'db_conn.php' );
$user_id = $_GET['user_id'];
$query = "delete from user_details where user_id = '$user_id'";
die($query);
mysqli_query( $conn, $query );
$_SESSION['message'] = "<div class='alert alert-success'> Successfully deleted</div>";
header('location:adminhomepage.php');

