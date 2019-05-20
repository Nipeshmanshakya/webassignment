<?php
session_start();
if(!isset($_SESSION['access']))
{
    $_SESSION['access']="";
    $_SESSION['session_user']="";
}

$session_access=$_SESSION['access'];
$session_user=$_SESSION['session_user'];
?>