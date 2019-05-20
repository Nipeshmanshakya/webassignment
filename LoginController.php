<?php
session_start();
include('db_conn.php');
include('session.php');

    if(isset($_POST['login'])) {
        if (empty($_POST['username'] || empty($_POST['password']))) {
            $error = '';
        } else {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $account_type = $_POST['account_type'];

	
            $query = "select *from users where username='$username' AND password='$password' AND account_type='$account_type'";
//        die($query);
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);

            if ($row['account_type']== 'admin' ) {
                $session_account_type = $row['account_type'];
                $_SESSION['account_type'] = $session_account_type;
                header('location: adminhomepage.php');
                $_SESSION['username']= "$username";
                $_SESSION['message'] = "Welcome $username";
            } else if ($row['account_type']== 'saving' ) {
                 $session_account_type = $row['account_type'];
                $_SESSION['account_type'] = $session_account_type;
                header('location: savinghomepage.php');
                $_SESSION['username']= "$username";
                $_SESSION['message'] = "Welcome $username";
            } else if ($row['account_type']== 'business' ) {
                 $session_account_type = $row['account_type'];
                $_SESSION['account_type'] = $session_account_type;
                header('location: businesshomepage.php');
                $_SESSION['username']= "$username";
                $_SESSION['message'] = "Welcome $username";
            } else {
                $_SESSION['error'] = "<div style='color:red;' text-align='center;'> Username or password is incorrect</div>";
            }
        }
    }

?>