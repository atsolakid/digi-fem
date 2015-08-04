<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: ..");
}
/* if(isset($_SESSION['login_user1'])){
header("location: prof1.php");
} */
?>

<script type="text/javascript">

function check(){
	
	if (location.href.indexOf("change")  !=-1  ) {
		alert("Δώστε τον καινούριο σας κωδικό!!!");
	}
}

function redirect1() {
		location.href='../';
	}

</script>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Ηλεκτρονική Συμπλήρωση Εντύπων</title>
<link href="../css/login.css" rel="stylesheet" type="text/css">
</head>
<body onload="check();">
<div id="main">
<h1>Ηλεκτρονική Συμπλήρωση Εντύπων</h1>
<div id="login">
<h2>Φόρμα Εισόδου</h2>
<form action="" method="post">
<label>Όνομα χρήστη:</label>
<input id="username" name="username" placeholder="username" type="text">
<label>Κωδικός:</label>
<input id="password" name="password" placeholder="**********" type="password">
<a href="forgot.php">Ξεχάσατε Κωδικό</a>
<input name="submit" type="submit" value=" Eίσοδος ">
<input name="submit1" type="button" onclick="redirect1()" value=" Επιστροφή ">
<span><?php echo $error; ?></span>
</form>
</div>
</div>
</body>
</html>