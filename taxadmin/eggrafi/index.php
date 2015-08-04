<!DOCTYPE HTML>

<?php
include('../../session/sessionadmin.php');
echo "<div style='margin:0 0 0 30px;'>Welcome <span style = 'color: #000; font-weight:bold; '>" .$_SESSION['login_user']."</span> <a href='../../login/logout.php' style = \"color: #ffcb00; font-weight:bold; margin:0 0 0 30px;\"> Log out </a></div>";

?>

<html>


    <script type="text/javascript" charset="UTF-8">
    function validateForm()
    {
    var check=0;
    var a=document.forms["reg"]["mail"].value;
    var b=document.forms["reg"]["username"].value;
    var c=document.forms["reg"]["password"].value;
	var d=document.forms["reg"]["cpassword"].value;
	var e=document.forms["reg"]["mail1"].value;
	var f=document.forms["reg"]["validate"].value;
    if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="")  && (e==null || e=="") && (f==null || f==""))
      {
      alert("All Field must be filled out");
      return false;
      }
    if (a==null || a=="")
      {
      alert("Mail must be filled out");
      return false;
      }
    if (b==null || b=="")
      {
      alert("username must be filled out");
      return false;
      }
    if (c==null || c=="")
      {
      alert("password must be filled out");
      return false;
      }
    if (d==null || d=="")
      {
      alert("confirm password must be filled out");
      return false;
      }
	  if (e==null || e=="")
      {
      alert("Confirm mail must be filled out");
      return false;
      }
	  
	   if (f==null || f=="")
      {
      alert("Validate must be filled out");
      return false;
      }
	  
	  if(!a.match(/\S+@\S+\.\S+/)){ // Jaymon's / Squirtle's solution
        alert("Λαθος mail");
		document.forms["reg"]["mail"].style.border="medium solid red";
        check=1;
    } else {
		document.forms["reg"]["mail"].style.border="";
	}
	
	if (check!=1)
	  {  
    if( a.indexOf(' ')!=-1 || a.indexOf('..')!=-1){
        // Do something
		alert("Λαθος mail");
		document.forms["reg"]["mail"].style.border="medium solid red";
        check=1;
    } else {
		document.forms["reg"]["mail"].style.border="";
			}  
	  }
	if (check!=1)
	  {  
	if (a!=e){
		alert ("Δεν ταιτιάζουν τα mail");
		document.forms["reg"]["mail1"].style.border="medium solid red";
		document.forms["reg"]["mail1"].style.border="medium solid red";
		check=1;
	  } else{
	  document.forms["reg"]["mail1"].style.border="";
		document.forms["reg"]["mail1"].style.border="";

	 }}
	  
	  
	  if (c!=d){
	    alert ("Δεν ταιτιάζουν οι κωδικοι.Ξαναδώστε");
		document.forms["reg"]["password"].value = "";
		document.forms["reg"]["cpassword"].value = "";
		document.forms["reg"]["password"].style.border="medium solid red";
		document.forms["reg"]["cpassword"].style.border="medium solid red";
		check=1;
	  }else{
		document.forms["reg"]["password"].style.border="";
		document.forms["reg"]["cpassword"].style.border="";
	  }
	  
	  
	  
	  if (check==1)
	  {  return false;}
    }
	
	function valm(val)
    {
	if ( document.forms["reg"]["mail"].value != val)
	   alert ("Δεν ταιτιάζουν τα mail");
	
	}
	
	function valp(val)
    {
		if ( document.forms["reg"]["password"].value != val) {
		document.forms["reg"]["password"].value = "";
		document.forms["reg"]["cpassword"].value = "";
	   alert ("Δεν ταιτιάζουν τα password");
		} else{
		document.forms["reg"]["password"].style.border="";
		document.forms["reg"]["cpassword"].style.border="";
	  }
		
	}
	
	function check(){
	
	if (location.href.indexOf("mail1")  !=-1 ) {
		alert("To mail χρησιμοποιείται!!!");
	}
	
	if (location.href.indexOf("user1")  !=-1 ) {
		alert("To username χρησιμοποιείται!!!");
	}
	
	if (location.href.indexOf("val01")  !=-1 ) {
		alert("Tο validation που δώσατε δεν υπάρχει!!!");		
	}
	
	if (location.href.indexOf("val1")  !=-1 ) {
		alert("To username χρησιμοποιείται και το validation δεν υπάρχει!!!");
	}
	
	if (location.href.indexOf("val2") !=-1 ) {
		alert("To mail χρησιμοποιείται και το validation δεν υπάρχει!!!");
	}
	
	if (location.href.indexOf("val3") !=-1  ) {
		alert("To username και τo mail  χρησιμοποιούνται!!!");
	}
	
	if (location.href.indexOf("val4") !=-1  ) {
		alert("To username,τo mail  χρησιμοποιούνται και το validation δεν υπάρχει!!!");
	}
	
	if (location.href.indexOf("cap1") !=-1 ) {
		alert("Eπιλέξτε ότι δεν είστε robot!!!");
	}
	
	
	}
	
	function redirect1() {
		location.href='../../';
	}

	
    </script>
	
	<script src='https://www.google.com/recaptcha/api.js'></script>

	
<head>
<title>Εγγραφή</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="../../css/signup.css" rel="stylesheet" type="text/css">
</head>
<body id="body-color" onload="check();" >
<div id="Sign-Up">
<fieldset style="width:30%; height:410px;"><legend>Φόρμα Εγγραφής</legend>




    <form name="reg" action="code_exec.php" onsubmit="return validateForm()" method="post">
    <table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
      <tr>
        <td colspan="2">
    		<div align="center">
    		  <?php 
    		$remarks=$_GET['remarks'];
    		if ($remarks==null and $remarks=="")
    		{
    		echo 'Εγγραφή εδώ';
    		}
    		if ($remarks=='success')
    		{
    		echo 'Registration Success';
    		}
    		?>	
    	    </div></td>
      </tr>
      <tr>
        <td><div align="right">Mail:</div></td>
        <td><input type="text" name="mail" value="<?php echo $_GET['mail'];?>" /></td>
      </tr>
	  <tr>
        <td><div align="right">Επιβεβαίωση Mail:</div></td>
        <td><input type="text" value="<?php echo $_GET['mail'];?>"  name="mail1" onchange="valm(this.value)" /></td>
      </tr>
     <tr>
        <td><div align="right">Όνομα χρήστη:</div></td>
        <td><input type="text" name="username" value="<?php echo $_GET['username'];?>" /></td>
      </tr>
     <tr>
        <td><div align="right">Κωδικός:</div></td>
        <td><input type="password" name="password" /></td>
      </tr>
	  <tr>
        <td><div align="right">Επιβεβαίωση κωδικού</div></td>
        <td><input type="password" onchange="valp(this.value)" name="cpassword" /></td>
      </tr>
	   <tr>
        <td><div align="right">Κωδικός πελάτη:</div></td>
        <td><input type="text" name="validate" value="<?php echo $_GET['validate'];?>"/></td>
      </tr >
	  <tr style="height:120px;">
	  </tr>
      <tr>
        <td><input name="submit" type="submit" value="Επιβεβαίωση" /></td>
		<td><input name="submit" type="button" onclick="redirect1()" value="Επιστροφή" /></td>
      </tr>
    </table>
	<div class="g-recaptcha" data-sitekey="6LfyDgoTAAAAANivOYnQvBelrHWoDL7FBhu-0GBJ"></div>

    </form>
	

</fieldset>
</div>
</body>
</html>


