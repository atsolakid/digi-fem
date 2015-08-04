<!DOCTYPE html>
<html>

<!--  inside php check if logged in -->
<?php

 session_start();
if(isset($_SESSION['login_user'])){
// echo "Welcome <b> <font color='black' weight='bold'>" .$_SESSION['login_user']."</font> </b> <a href='login/logout.php' style = \"font-color: #ff0000; margin:0 0 0 30px;\"> Log out </a>";
echo "<div style='margin:0 0 0 30px;'>Welcome <span style = 'color: #000; font-weight:bold; '>" .$_SESSION['login_user']."</span> <a href='login/logout.php' style = \"color: #ffcb00; font-weight:bold; margin:0 0 0 30px;\"> Log out </a></div>";
/* header("location: login/prof1.php"); */
}else{
$_SESSION = array(); //destroy all of the session variables
  session_destroy();
} 
?>  

<script type="text/javascript">

function redirect2() {
  location.href='signup';
}

function redirect1() {
  location.href='login';
}
function redirect3() {
  location.href='main';
}
function redirect4() {
  location.href='main';
}

function check(){
	
	if (location.href.indexOf("success")  !=-1 ) {
		alert("Eπιτυχής Εγγραφή!!!");
	}
	if (location.href.indexOf("mailsent")  !=-1 ) {
		alert("Eλέξτε το mail σας κι επιλέξτε το link που σας παραπέμπει (μπορεί να είναι και στα ανεπιθύμητα)!!!");
	}
	if (location.href.indexOf("forbidden")  !=-1 ) {
		alert("Δεν έχετε πρόσβαση σε αυτήν την εφαρμογή!!!");
	}
}

</script>

<head>
<title>Astbooks</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body onload="check();">
<div id="main">
<h1>Καλώς ήρθατε στην Υπηρεσία μας</h1>
<div id="yphr">

<div id="but"  onclick="redirect3()" >Δωρεάν εφαρμογή</div>
</div>
<div id="yphr">

<div id="but"  onclick="redirect4()" >Συνδρομητές</div>
</div>


<div id="login">
<div id="sign_up">
<!--<h2></h2> -->

<div id="but"  onclick="redirect2()" >Εγγραφή</div>
</div>

<div id="sign_up">

<div id="but"  onclick="redirect1()" >Eίσοδος</div>
</div>

</div>
</div>
</body>
</html>