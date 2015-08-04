<?php 

$usermail=$_POST['usermail'];
session_start();
include('../../connection/connection.php');
$query = mysql_query("select * from users where mail='$usermail' OR username='$usermail'",$con)
or die(mysql_error($con)); 
$row = mysql_fetch_assoc($query);


 if (mysql_num_rows ($query)==1) 
 {
	mysql_query("DELETE FROM users where mail='$usermail' OR username='$usermail'");
	header("location: ../index.php?diagrafisuccessdelete");
	mysql_close($con);
 }else
 {
 header("location: ../index.php?diagrafinotfoundmail");
 // echo "<script type='text/javascript'>alert('Το mail που δώσατε,δεν υπάρχει!!!');</script>";
mysql_close($con);
}
?>