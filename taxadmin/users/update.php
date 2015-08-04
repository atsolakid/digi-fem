

    <?php
    


/*	 
	// if the agent is said spider
	if(strstr(strtolower($_SERVER['HTTP_USER_AGENT']), "googlebot"))
{
    header("location: signup.php?cap");
}



<?php
echo "<pre> _POST: =========\n";
print_r($_POST);
echo "\n=========\n</pre>";
?>
  require_once('recaptchalib.php');
  $privatekey = "6LfPRQkTAAAAAGkyjMZBCiEo14o-1hEtqaV8zOsb";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");
  } else {
    header("location: signup.php?cap");
  } */
  
	session_start();
    include('../../connection/connection.php');
    
	$username = $_POST['username'];
	$mail = $_POST['mail'];
	$password = $_POST['password'];
	$exp_date = $_POST['exp_date1'];
	$entupa = $_POST['entupa']; 
	$esoda = $_POST['esoda'];
	$mailcheck = $_POST['mailcheck'];
	
	$username = stripslashes($username);
	$mail = stripslashes($mail);
	$password = stripslashes($password);
	$exp_date = stripslashes($exp_date);
	$entupa = stripslashes($entupa);
	$esoda = stripslashes($esoda);
	$mailcheck = stripslashes($mailcheck);
	
	$username=mysql_real_escape_string($username);
	$mail=mysql_real_escape_string($mail);
	$password=mysql_real_escape_string($password);
	$exp_date=mysql_real_escape_string($exp_date);
	$entupa=mysql_real_escape_string($entupa);
	$esoda=mysql_real_escape_string($esoda);
	$mailcheck=mysql_real_escape_string($mailcheck);
		

	if ($password!='')
		{
		$salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
		$saltedPW =  $password . $salt;
		$password = hash('sha256', $saltedPW);
	mysql_query("UPDATE users SET username='$username' , password='$password' , mail='$mail' , exp_date='$exp_date', entupa='$entupa' ,esoda='$esoda' ,salt='$salt' where mail='$mailcheck' ") or die(mysql_error());
	$query = mysql_query("select * from users where username='$username'",$con)
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
		

		
		}else 
		{
		mysql_query("UPDATE users SET username='$username' , mail='$mail' , exp_date='$exp_date', entupa='$entupa' ,esoda='$esoda'  where mail='$mailcheck' ") or die(mysql_error());
		$query = mysql_query("select * from users where username='$username'",$con)
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
	}
	
    ?>