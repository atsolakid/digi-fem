<?php 

$usermail=$_POST['usermail'];
session_start();
include('../../connection/connection.php');
$query = mysql_query("select * from users where mail='$usermail' OR username='$usermail'",$con)
or die(mysql_error($con)); 
$row = mysql_fetch_assoc($query);


 if (mysql_num_rows ($query)==1) 
 {
	$user=$row['username'];
	$mail=$row['mail'];
	$entupa=$row['entupa'];
	$esoda=$row['esoda'];
	$exp_date=$row['exp_date'];
  header("location: ../index.php?euresh&username=$user&mail=$mail&entupa=$entupa&esoda=$esoda&exp_date=$exp_date");
  mysql_close($con);

 }else
 {
 header("location: ../index.php?eureshnotfoundmail");
 // echo "<script type='text/javascript'>alert('Το mail που δώσατε,δεν υπάρχει!!!');</script>";
mysql_close($con);
}
?>