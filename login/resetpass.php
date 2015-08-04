<?php

if(isset($_POST['pass'])){
$pass = $_POST['pass'];
$acode=$_POST['code'];
$email=$_POST['mail1'];

session_start();
include('../connection/connection.php');
$query = mysql_query("select * from users where mailcode='$acode' AND mail='$email'",$con)
or die(mysql_error($con)); 

if (mysql_num_rows ($query)==1) 
{
$password = stripslashes($pass);
$password=mysql_real_escape_string($password);
$salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
$saltedPW =  $password . $salt;
$password = hash('sha256', $saltedPW);
$query3 = mysql_query("update users set password='$password',salt='$salt' where mailcode='$acode' AND mail='$email'",$con)
or die(mysql_error($con)); 
header("location: ../login/index.php?change");
mysql_close($con); 
//echo 'Password Changed';
}
else
{
echo 'Λάθος Κωδικός.Δοκιμάστε ξανά το link που σας εστάλη.';
mysql_close($con); 
}
}
?>

<script type="text/javascript">
   
   function validateForm()
    {
	
	var a=document.getElementById("pass").value;
	var b=document.getElementById("pass1").value;
	
	if (a==null || a=="")
      {
      alert("Δώστε κωδικό");
      return false;
      }
    if (b==null || b=="")
      {
      alert("Δώστε κωδικό");
      return false;
      }
	  
	  if (a!=b){
		document.getElementById("pass").value = "";
		document.getElementById("pass1").value = "";
		alert ("Δεν ταιτιάζουν οι κωδικοι.Ξαναδώστε");
		return false;
	  }
	}
	
	function redirect1() {
		location.href='..';
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
<h2>Φόρμα Δημιουργίας κωδικού</h2>
<form onsubmit="return validateForm()" action="resetpass.php" method="POST">
<p>Nέος κωδικός</p><input id="pass" type="password" name="pass" />
<p>Επιβεβαίωση κωδικού:</p><input id="pass1" type="password" name="cpass" />
<input type="submit"  name="submit" value="Επιβεβαίωση" />
<input type="button"  name="submit1" onclick="redirect1()" value="Επιστροφή" />
<input type="hidden" name="code" value="<?php echo $_GET['code'];?>" />
<input type="hidden" name="mail1" value="<?php echo $_GET['email'];?>" />
</form>
</div>
</div>
</body>
</html>