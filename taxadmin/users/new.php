

    <?php

	session_start();
    include('../../connection/connection.php');
   
	$checkmail=0;
	$checkuser=0;
   
    $username = $_POST['username2'];
	$mail = $_POST['mail2'];
	$password = $_POST['password2'];
	$exp_date = $_POST['exp_date2'];
	$entupa = $_POST['entupa2']; 
	$esoda = $_POST['esoda2'];
	
	$username = stripslashes($username);
	$mail = stripslashes($mail);
	$password = stripslashes($password);
	$exp_date = stripslashes($exp_date);
	$entupa = stripslashes($entupa);
	$esoda = stripslashes($esoda);
	
	$username=mysql_real_escape_string($username);
	$mail=mysql_real_escape_string($mail);
	$password=mysql_real_escape_string($password);
	$exp_date=mysql_real_escape_string($exp_date);
	$entupa=mysql_real_escape_string($entupa);
	$esoda=mysql_real_escape_string($esoda);

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
	
	
	if ($checkuser==0 && $checkmail==0) {
		$salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
		$saltedPW =  $password . $salt;
		$password = hash('sha256', $saltedPW);
		$role=user ;
		mysql_query("INSERT INTO users (username, password, role, mail,exp_date,entupa,esoda,salt) VALUES ('$username', '$password', '$role', '$mail','$oDateTime','$entupa','$esoda','$salt')") or die(mysql_error());
		mysql_query("UPDATE users SET exp_date='$exp_date' where mail='$mail' ") or die(mysql_error());
		header("location: ../index.php?eggrafisuccessnew");
		mysql_close($con);
		exit;
	}	
	
	
	
		
		if ($checkuser==1 && $checkmail==0) {
			
				header("location: ../index.php?eggrafiuser1&mail2=$mail&exp_date2=$exp_date");
				mysql_close($con);
				exit();
				}  
					
		if ($checkuser==0 && $checkmail==1) {
			
				header("location: ../index.php?eggrafimail1&username2=$username&exp_date2=$exp_date");
				mysql_close($con);
				exit();
				} 
				
		if ($checkuser==1 && $checkmail==1) {
			
				header("location: ../index.php?eggrafival3&exp_date2=$exp_date");
				mysql_close($con);
				exit();
				} 
		
	
    ?>