<?php
session_start();// Starting Session
if ($_SESSION['check'] != md5($_SERVER['HTTP_USER_AGENT'] . PHRASE . $_SERVER['REMOTE_ADDR'])) {       
    session_destroy();
    header('Location: ../index.php?forbidden');
    exit();     
}

include('../connection/connection.php');

$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select * from users where username='$user_check' AND entupa='1'", $con);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['username'];

if(!isset($login_session) ){
header('Location: ../index.php?forbidden ' ); // Redirecting To Home Page
}
mysql_close($con); // Closing Connection

?>