



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

  $privatekey = "6LedzAoTAAAAAJkwUJ3lXGOFhF8aq4QHztpxdyEr";

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

    include('../connection/connection.php');

    

	$checkmail=0;

	$checkuser=0;

	$checkval=0;

	$checkval1=0;

	

	$mail = $_POST['mail'];

	$mail1 = $_POST['mail1'];

	$password = $_POST['password'];

	$cpassword = $_POST['cpassword'];

	$mail = stripslashes($mail);

	$mail1 = stripslashes($mail1);

	$password = stripslashes($password);

	$cpassword = stripslashes($cpassword);

	$mail=mysql_real_escape_string($mail);

	$mail1=mysql_real_escape_string($mail1);

	$password=mysql_real_escape_string($password);

	$cpassword=mysql_real_escape_string($cpassword);

	

	

		

	$username = $_POST['username'];

	$validate = $_POST['validate'];

	

	$username = stripslashes($username);

    $validate = stripslashes($validate);

	

    $username=mysql_real_escape_string($username);

	$validate= mysql_real_escape_string($validate);

	

	$captcha;

	if(isset($_POST['g-recaptcha-response'])){

          $captcha=$_POST['g-recaptcha-response'];

        }

        if(!$captcha){

		 header("location: index.php?cap1&mail=$mail&validate=$validate&username=$username");

        mysql_close($con);

		exit;

        }

        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=YOUR SECRET KEY&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);

        if($response.success==false)

        {

         header("location: index.php?cap1&mail=$mail&validate=$validate&username=$username");

		 mysql_close($con);

		exit;

        }



	

	$sqlu = "select * from users where username='$username'";

	$sqlm = "select * from users where mail='$mail'";

	

	$resultu = mysql_query($sqlu, $con);

	$resultm = mysql_query($sqlm, $con);

	$row = mysql_fetch_assoc($result);

	

	if (mysql_num_rows($resultm) > 0) { 

		$checkmail=1;

		

		}

		if (mysql_num_rows($resultu) > 0) {

		$checkuser=1;

		}

	

	

	if ($checkuser==0 && $checkmail==0 ) {

		$salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));

		$saltedPW =  $password . $salt;

		$password = hash('sha256', $saltedPW);

		$role=user ;

		$entupa=$row['entupa'];

		$esoda=$row['esoda'];

		mysql_query("INSERT INTO users (username, password, role, mail,entupa,esoda,salt) VALUES ('$username', '$password', '$role', '$mail','$entupa','$esoda','$salt')") or die(mysql_error());

		header("location: ../index.php?success");

		mysql_close($con);

		exit;

	}	

	

	

		if ($checkuser==1 && $checkmail==0) {

				header("location: index.php?user1&mail=$mail");

				mysql_close($con);

				exit();

			}

					

		if ($checkuser==0 && $checkmail==1) {

				header("location: index.php?mail1&username=$username");

				mysql_close($con);

				exit();

			}

				

		if ($checkuser==1 && $checkmail==1) {

				header("location: index.php?val3");

				mysql_close($con);

				exit();

			}

	

    ?>