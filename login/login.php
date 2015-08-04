<?php
// session_set_cookie_params(180 );
session_start(); // Starting Session
include('../connection/connection.php');
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Το όνομα χρήστη ή ο κωδικός δεν είναι σωστά";
mysql_close($con);
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
//$connection = mysql_connect("web-app.astbooks.gr:3306", "astbooksand", "@stB00ks2015");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$saltQuery = "select salt from users where username = '$username';";
$result = mysql_query($saltQuery);
$row = mysql_fetch_assoc($result);
$salt = $row['salt'];
$saltedPW =  $password . $salt;
$password = hash('sha256', $saltedPW);
// Selecting Database
$oDateTime = date("Y-m-d");

/* date_default_timezone_set('Europe/Athens'); // CDT

$info = getdate();
$date = $info['mday'];
$month = $info['mon'];
$year = $info['year'];
$hour = $info['hours'];
$min = $info['minutes'];
$sec = $info['seconds'];

$current_date = "$year-$month-$date == $hour:$min:$sec";
 echo $oDateTime;  */
// echo $oDateTime;
//$db = mysql_select_db("admin_web-app", $connection);
// SQL query to fetch information of registerd users and finds user match.
//$query = mysql_query("select * from login where password='$password' AND username='$username' AND role='user'", $connection);
$query = mysql_query("select * from users where password='$password' AND username='$username' ", $con);
/* $sql = "select * from login where password='$password' AND username='$username' AND role='user1' AND exp_date >=2017-02-02  ";
$result = mysql_query($sql, $connection);
if (mysql_num_rows($result) > 0) {
    // output data of each row
     while($row = mysql_fetch_assoc($result)) {
        echo "id: " . $row["exp_date"]. "<br>";
    }}else {
    echo "0 results";
} */
$rows = mysql_num_rows($query);
//$rows1 = mysql_num_rows($query1);
  if ($rows == 1) {

$_SESSION['login_user']=$username;
$_SESSION['check']=md5($_SERVER['HTTP_USER_AGENT'] . PHRASE . $_SERVER['REMOTE_ADDR']); // Initializing Session
header("location: .."); // Redirecting To Other Page
} else {
$error = "Το όνομα χρήστη ή ο κωδικός δεν είναι σωστά";
}
mysql_close($con); // Closing Connection
}
}
?>