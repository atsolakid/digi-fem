<!DOCTYPE html>

	<?php
include('session/sessionadminmain.php');
echo "<div style='margin:0 0 0 500px;display:absolute;'>Welcome <span style = 'color: #000; font-weight:bold; '>" .$_SESSION['login_user']."</span> <a href='../login/logout.php' style = \"color: #ffcb00; font-weight:bold; margin:0 0 0 30px;\"> Log out </a></div>";

?>

<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Example of Bootstrap 3 Dynamic Tabs</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<link href="css/signup.css" rel="stylesheet" type="text/css">
<link href="css/admin.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript">


$(document).ready(function(){ 
    $("#myTab a").click(function(e){
    	e.preventDefault();
    	$(this).tab('show');
    });
});


	function validateForm()
    {
	
	if (location.href.indexOf("esoda")  !=-1 ) {
		return true;
	}else {return false;}
	
    var check=0;
    var a=document.forms["reg"]["mail"].value;
    var b=document.forms["reg"]["username"].value;
	var c=document.forms["reg"]["password"].value;
    var d=document.forms["reg"]["cpassword"].value;
    if ((a==null || a=="") && (b==null || b==""))
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
	
	function validateForm2()
    {
    var check=0;
    var a=document.forms["reg1"]["mail2"].value;
    var b=document.forms["reg1"]["username2"].value;
    var c=document.forms["reg1"]["password2"].value;
	var d=document.forms["reg1"]["cpassword2"].value;
	var e=document.forms["reg1"]["exp_date2"].value;
	
    if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="")  && (e==null || e=="") )
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
      alert("Expiration date must be filled out");
      return false;
      }
	  
	 
	  
	  if(!a.match(/\S+@\S+\.\S+/)){ // Jaymon's / Squirtle's solution
        alert("Λαθος mail");
		document.forms["reg1"]["mail2"].style.border="medium solid red";
        check=1;
    } else {
		document.forms["reg1"]["mail2"].style.border="";
	}
	
	if (check!=1)
	  {  
    if( a.indexOf(' ')!=-1 || a.indexOf('..')!=-1){
        // Do something
		alert("Λαθος mail");
		document.forms["reg1"]["mail2"].style.border="medium solid red";
        check=1;
    } else {
		document.forms["reg1"]["mail2"].style.border="";
			}  
	  }
	
	  
	  if (c!=d){
	    alert ("Δεν ταιτιάζουν οι κωδικοι.Ξαναδώστε");
		document.forms["reg1"]["password2"].value = "";
		document.forms["reg1"]["cpassword2"].value = "";
		document.forms["reg1"]["password2"].style.border="medium solid red";
		document.forms["reg1"]["cpassword2"].style.border="medium solid red";
		check=1;
	  }else{
		document.forms["reg1"]["password2"].style.border="";
		document.forms["reg1"]["cpassword2"].style.border="";
	  }
	  
	  
	  
	  if (check==1)
	  {  return false;}
    }
	
	function validateForm3()
    {
	var answer = confirm ("Είστε σίγουροι ότι θέλετε να διαγράψετε τον χρήστη;")
	if (answer)
	return true;
	else
	return false;
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
	
	function valp2(val)
    {
		if ( document.forms["reg1"]["password2"].value != val) {
		document.forms["reg1"]["password2"].value = "";
		document.forms["reg1"]["cpassword2"].value = "";
	   alert ("Δεν ταιτιάζουν τα password2");
		} else{
		document.forms["reg1"]["password2"].style.border="";
		document.forms["reg1"]["cpassword2"].style.border="";
	  }
		
	}
	

	function check(){
	
	if (location.href.indexOf("euresh")  !=-1 ) {
	var d = document.getElementById("dropdown1");
	d.className = d.className + " in active";
	document.getElementById("secta").classList.remove("active");
	document.getElementById("dropdown11").classList.add("active");
	document.getElementById("dropdown11a").classList.add("active");
	}
	if (location.href.indexOf("diagrafi")  !=-1 ) {
	
	var d = document.getElementById("dropdown3");
	d.className = d.className + " in active";
	document.getElementById("secta").classList.remove("active");
	document.getElementById("dropdown11").classList.add("active");
	document.getElementById("dropdown11c").classList.add("active");
	}
	
	if (location.href.indexOf("eggrafi")  !=-1 ) {
	var d = document.getElementById("dropdown2");
	d.className = d.className + " in active";
	document.getElementById("secta").classList.remove("active");
	document.getElementById("dropdown11").classList.add("active");
	document.getElementById("dropdown11b").classList.add("active");
	}
	
	if (location.href.indexOf("successupdate")  !=-1 ) {
		alert("Eπιτυχής Επεξεργασία!!!");
	}
	if (location.href.indexOf("notfoundmail")  !=-1 ) {
		alert("Δεν βρέθηκε mail ή user!!!");
	}
	if (location.href.indexOf("successdelete")  !=-1 ) {
		alert("Eπιτυχής Διαγραφή!!!");
	}
	if (location.href.indexOf("successnew")  !=-1 ) {
		alert("Eπιτυχής Εγγραφή!!!");
	}
	if (location.href.indexOf("val3") !=-1  ) {
		alert("To username και τo mail  χρησιμοποιούνται!!!");
	}
	if (location.href.indexOf("mail1")  !=-1 ) {
		alert("To mail χρησιμοποιείται!!!");
	}
	
	if (location.href.indexOf("user1")  !=-1 ) {
		alert("To username χρησιμοποιείται!!!");
	}
	
	}
	
	function redirect1() {
		location.href='../';
	}
	
	function redir() {
		location.href='../taxadmin';
	}

	
</script>
<style type="text/css">
	.bs-example{
		margin: 20px;
	}
</style>
</head>
<body>
<div class="bs-example">
    <ul class="nav nav-tabs" id="myTab">
        <li id="secta" class="active"><a href="#sectionA" onclick="redir()">Αρχική</a></li>
        <li><a href="#sectionB">Section B</a></li>
        <li id="dropdown11" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">Χρήστες <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li id="dropdown11a"><a href="#dropdown1">Επεξεργασία</a></li>
                <li id="dropdown11b"><a href="#dropdown2">Δημιουργία</a></li>
				<li id="dropdown11c"><a href="#dropdown3">Διαγραφή</a></li>
            </ul>
        </li>
    </ul>
    <div class="tab-content">
        <div id="sectionA" class="tab-pane fade in active">
            
	
        </div>
        <div id="sectionB" class="tab-pane fade">
            <h3>Χρήστες</h3>
		<?php
echo "<div style='margin:0 0 0 30px;'>Welcome <span style = 'color: #000; font-weight:bold; '>" .$_SESSION['login_user']."</span> <a href='../../login/logout.php' style = \"color: #ffcb00; font-weight:bold; margin:0 0 0 30px;\"> Log out </a></div>";

?>

			
        </div>
        <div id="dropdown1" class="tab-pane fade">
		<h3>Χρήστες</h3>
            <div id="anaz">
			<form onsubmit="return validateForm1()" action="users/search.php" method="post">
			<p style="display:inline;">Δώστε mail ή username:</p> <input id="name" type="text" name="usermail" value="<?php echo $_GET['mail'];?>">
			<input type="submit" name="submit" value="Εύρεση">
			</form>
			</div>
			
			<body id="body-color" onload="check();" >
<div id="Sign-Up">
<fieldset style="width:30%; height:700px;"><legend>Επεξεργασία χρήστη</legend>

    <form name="reg" action="users/update.php" onsubmit="return validateForm()" method="post">
    <table width="500" border="0" align="center" cellpadding="2" cellspacing="0">
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
        <td><div align="right">Ημερομηνία λήξης(yyyy-mm-dd)</div></td>
        <td><input type="text" value="<?php echo $_GET['exp_date'];?>"  name="exp_date1"  /></td>
      </tr>
	  <tr>
        <td><div align="right">Πρόσβαση έντυπα(αν ναι:1):</div></td>
        <td><input type="text" value="<?php echo $_GET['entupa'];?>"  name="entupa"  /></td>
      </tr>
     <tr>
	   <tr>
        <td><div align="right">Πρόσβαση έσοδα(αν ναι:1)</div></td>
        <td><input type="text" name="esoda" value="<?php echo $_GET['esoda'];?>"/></td>
      </tr >
	   <tr>
        <td><div align="right"></div></td>
        <td><input type="hidden" value="<?php echo $_GET['mail'];?>"  name="mailcheck" /></td>
      </tr>
	  <tr style="height:20px;">
	  </tr>
      <tr>
	  <td></td>
        <td><input name="submit" type="submit" value="Αποθήκευση" /></td>
<!--		<td><input name="submit" type="button" onclick="redirect1()" value="Επιστροφή" /></td> -->
      </tr>
    </table>
	

    </form>
	

</fieldset>
</div>
</body>	
		</div>
        <div id="dropdown2" class="tab-pane fade">
		
		<h3>Χρήστες</h3>
			
			<body id="body-color" onload="check();" >
<div id="Sign-Up">
<fieldset style="width:30%; height:700px;"><legend>Δημιουργία χρήστη</legend>

    <form name="reg1" action="users/new.php" onsubmit="return validateForm2()" method="post">
    <table width="500" border="0" align="center" cellpadding="2" cellspacing="0">
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
        <td><input type="text" name="mail2" value="<?php echo $_GET['mail2'];?>" /></td>
      </tr>
        <td><div align="right">Όνομα χρήστη:</div></td>
        <td><input type="text" name="username2" value="<?php echo $_GET['username2'];?>" /></td>
      </tr>
     <tr>
        <td><div align="right">Κωδικός:</div></td>
        <td><input type="password" name="password2" /></td>
      </tr>
	  <tr>
        <td><div align="right">Επιβεβαίωση κωδικού</div></td>
        <td><input type="password" onchange="valp2(this.value)" name="cpassword2" /></td>
      </tr>
	   <tr>
        <td><div align="right">Ημερομηνία λήξης(yyyy-mm-dd)</div></td>
        <td><input type="text" value="<?php echo $_GET['exp_date2'];?>"  name="exp_date2"  /></td>
      </tr>
	  <tr>
        <td><div align="right">Πρόσβαση έντυπα(αν ναι:1):</div></td>
        <td><input type="text" value="<?php echo $_GET['entupa2'];?>"  name="entupa2"  /></td>
      </tr>
     <tr>
	   <tr>
        <td><div align="right">Πρόσβαση έσοδα(αν ναι:1)</div></td>
        <td><input type="text" name="esoda2" value="<?php echo $_GET['esoda2'];?>"/></td>
      </tr >
	   
	  <tr style="height:20px;">
	  </tr>
      <tr>
	  <td></td>
        <td><input name="submit" type="submit" value="Εγγραφή" /></td>
<!--		<td><input name="submit" type="button" onclick="redirect1()" value="Επιστροφή" /></td> -->
      </tr>
    </table>
	

    </form>
	

</fieldset>
</div>
</body>	

		</div>
		<div id="dropdown3" class="tab-pane fade">
		
		<h3>Χρήστες</h3>
            <div id="anaz">
			<form onsubmit="return validateForm3()" action="users/delete.php" method="post">
			<p style="display:inline;">Δώστε mail ή username:</p> <input id="name" type="text" name="usermail">
			<input type="submit" name="submit" value="Διαγραφή">
			</form>
			</div>
        </div>
    </div>
</div>
</body>
</html>                                		