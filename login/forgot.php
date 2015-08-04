<?php 
error_reporting(0);
if($_POST['submit']=='Αποστολή')
{
//keep it inside
$email=$_POST['email'];
$code = $_GET['activation_code'];
session_start();
include('../connection/connection.php');
$query = mysql_query("select * from users where mail='$email'",$con)
or die(mysql_error($con)); 
$row = mysql_fetch_assoc($query);
$user=$row['username'];

 if (mysql_num_rows ($query)==1) 
 {
$code=uniqid(rand());

$subject = "Επαναφορά κωδικού";

$message = "
<html>
<head>
<title>Επαναφορά κωδικού</title>
</head>
<body>
<p>Καλώς ήρθατε χρήστη $user</p>
<table>
<tr>

</tr>
<tr>
<td>Επιλέξτε το link για να αλλάξετε τον κωδικό σας</td>
<td>http://localhost/diloseis/login/resetpass.php?email=$email&code=$code</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webminingr@gmail.com' . "\r\n";

mail($email,$subject,$message,$headers);


$query2 = mysql_query("update users set mailcode='$code' where mail='$email' ",$con)
or die(mysql_error($con)); 

header("location: ../index.php?mailsent");
mysql_close($con);
}
else
{
echo "<script type='text/javascript'>alert('Το mail που δώσατε,δεν υπάρχει!!!');</script>";
mysql_close($con);
}}

?>

<script type="text/javascript">
   
   function validateForm()
    {
	var a=document.getElementById("name").value;
   check=0;
   if(!a.match(/\S+@\S+\.\S+/)){ // Jaymon's / Squirtle's solution
        alert("Λάθος mail");
        check=1;
    } 
	
	if (check!=1)
	  {  
    if( a.indexOf(' ')!=-1 || a.indexOf('..')!=-1){
        // Do something
		alert("Λάθος mail");
        check=1;
		} 
	  }
	  if (check==1)
	  {  return false;}else return true;
	  
	  
   }
   
   </script>
   <html>
<head>
<title>Login Form in PHP with Session</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="../css/login.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
<!-- <h1>Δώστε mail</h1> -->
<div id="login">
<h2>Ξεχάσατε κωδικό</h2>
   <form onsubmit="return validateForm()" action="forgot.php" method="post">
Δώστε mail: <input id="name" type="text" name="email">
<input type="submit" name="submit" value="Αποστολή">

</form>
</div>
</div>
</body>
</html>