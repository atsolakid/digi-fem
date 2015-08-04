<!DOCTYPE html>

<?php
include('../session/sessionall2.php');
echo "<div style='margin:0 0 0 500px;display:absolute;'>Welcome <span style = 'color: #000; font-weight:bold; '>" .$login_session."</span> <a href='../login/logout.php' style = \"color: #ffcb00; font-weight:bold; margin:0 0 0 30px;\"> Log out </a></div>";

?>

<html lang="en">
<head>
<meta charset="UTF-8">
<title>Example of Bootstrap 3 Dynamic Tabs</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="css/default.css"/>
<link href="css/tasos.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/script.js"></script> 
<script type="text/javascript">

$(document).ready(function(){ 
    $("#myTab a").click(function(e){
    	e.preventDefault();
    	$(this).tab('show');
    });
});

function next1(){

	var d = document.getElementById("sectionB");
	d.className = d.className + " in active";
	document.getElementById("sectionA").classList.remove("active");
	document.getElementById("secta").classList.remove("active");
	document.getElementById("sectb").classList.add("active");
//	document.getElementById("dropdown11").classList.add("active");
//	document.getElementById("dropdown11a").classList.add("active");

}

function addRow1(tableID) {
	
	if (location.href.indexOf("sectb")  !=-1 ) {
		next1();
	}

	<?php
	if ($number!=""){
	?>
	n= <?php echo $number; ?>;
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
		for(var t=0; t<n-1; t++) 	{
		var rowCount = table.rows.length;		// limit the user from creating fields more than your limits
//		var row = table.insertRow(rowCount);
		var colCount = table.rows[0].cells.length;
		for(var j=0; j<5; j++) {
			var row = table.insertRow(rowCount+j);
		for(var i=0; i<colCount; i++) {
			var colCount = table.rows[j].cells.length;
			var newcell = row.insertCell(i);
			newcell.innerHTML = table.rows[j].cells[i].innerHTML;
			
		}}}
		for(var t=0; t<n; t++) 	{
		m=1;
		if (t==0){
			m= <?php echo $katagatho1; ?>;
			document.getElementsByName("BX_NAME[]")[t].value="<?php echo $agatho1; ?>";
			document.getElementsByName("BX_gender[]")[t].getElementsByTagName('option')[m].selected = 'selected';
			document.getElementsByName("BX_ESYEAR1[]")[t].value="<?php echo $ag1yeares1; ?>";
			document.getElementsByName("BX_ESYEAR2[]")[t].value="<?php echo $ag1yeares2; ?>";
			document.getElementsByName("BX_ESYEAR3[]")[t].value="<?php echo $ag1yeares3; ?>";
			document.getElementsByName("BX_EKSYEAR1[]")[t].value="<?php echo $ag1yeareks1; ?>";
			document.getElementsByName("BX_EKSYEAR2[]")[t].value="<?php echo $ag1yeareks2; ?>";
			document.getElementsByName("BX_EKSYEAR3[]")[t].value="<?php echo $ag1yeareks3; ?>";
			}
			if (t==1){
			m= <?php echo $katagatho2; ?>;
			document.getElementsByName("BX_NAME[]")[t].value="<?php echo $agatho2; ?>";
			document.getElementsByName("BX_gender[]")[t].getElementsByTagName('option')[m].selected = 'selected';
			document.getElementsByName("BX_ESYEAR1[]")[t].value="<?php echo $ag2yeares1; ?>";
			document.getElementsByName("BX_ESYEAR2[]")[t].value="<?php echo $ag2yeares2; ?>";
			document.getElementsByName("BX_ESYEAR3[]")[t].value="<?php echo $ag2yeares3; ?>";
			document.getElementsByName("BX_EKSYEAR1[]")[t].value="<?php echo $ag2yeareks1; ?>";
			document.getElementsByName("BX_EKSYEAR2[]")[t].value="<?php echo $ag2yeareks2; ?>";
			document.getElementsByName("BX_EKSYEAR3[]")[t].value="<?php echo $ag2yeareks3; ?>";
			document.getElementsByName("BX_EKSYEAR3[]")[t].value="<?php echo $ag1yeareks3; ?>";
			}
			if (t==2){
			m= <?php echo $katagatho3; ?>;
			document.getElementsByName("BX_NAME[]")[t].value="<?php echo $agatho3; ?>";
			document.getElementsByName("BX_gender[]")[t].getElementsByTagName('option')[m].selected = 'selected';
			document.getElementsByName("BX_ESYEAR1[]")[t].value="<?php echo $ag3yeares1; ?>";
			document.getElementsByName("BX_ESYEAR2[]")[t].value="<?php echo $ag3yeares2; ?>";
			document.getElementsByName("BX_ESYEAR3[]")[t].value="<?php echo $ag3yeares3; ?>";
			document.getElementsByName("BX_EKSYEAR1[]")[t].value="<?php echo $ag3yeareks1; ?>";
			document.getElementsByName("BX_EKSYEAR2[]")[t].value="<?php echo $ag3yeareks2; ?>";
			document.getElementsByName("BX_EKSYEAR3[]")[t].value="<?php echo $ag3yeareks3; ?>";
			}
			if (t==3){
			m= <?php echo $katagatho4; ?>;
			document.getElementsByName("BX_NAME[]")[t].value="<?php echo $agatho4; ?>";
			document.getElementsByName("BX_gender[]")[t].getElementsByTagName('option')[m].selected = 'selected';
			document.getElementsByName("BX_ESYEAR1[]")[t].value="<?php echo $ag4yeares1; ?>";
			document.getElementsByName("BX_ESYEAR2[]")[t].value="<?php echo $ag4yeares2; ?>";
			document.getElementsByName("BX_ESYEAR3[]")[t].value="<?php echo $ag4yeares3; ?>";
			document.getElementsByName("BX_EKSYEAR1[]")[t].value="<?php echo $ag4yeareks1; ?>";
			document.getElementsByName("BX_EKSYEAR2[]")[t].value="<?php echo $ag4yeareks2; ?>";
			document.getElementsByName("BX_EKSYEAR3[]")[t].value="<?php echo $ag4yeareks3; ?>";
			}
			if (t==4){
			m= <?php echo $katagatho5; ?>;
			document.getElementsByName("BX_NAME[]")[t].value="<?php echo $agatho5; ?>";
			document.getElementsByName("BX_gender[]")[t].getElementsByTagName('option')[m].selected = 'selected';
			document.getElementsByName("BX_ESYEAR1[]")[t].value="<?php echo $ag5yeares1; ?>";
			document.getElementsByName("BX_ESYEAR2[]")[t].value="<?php echo $ag5yeares2; ?>";
			document.getElementsByName("BX_ESYEAR3[]")[t].value="<?php echo $ag5yeares3; ?>";
			document.getElementsByName("BX_EKSYEAR1[]")[t].value="<?php echo $ag5yeareks1; ?>";
			document.getElementsByName("BX_EKSYEAR2[]")[t].value="<?php echo $ag5yeareks2; ?>";
			document.getElementsByName("BX_EKSYEAR3[]")[t].value="<?php echo $ag5yeareks3; ?>";
			}
			
			
		}
		for(var t1=0; t1<3; t1++) 	{
			
			if (t1==0){
				document.getElementsByName("BX_IKA1[]")[t1].value="<?php echo $ika1; ?>";
				document.getElementsByName("BX_IKA2[]")[t1].value="<?php echo $ika2; ?>";
				document.getElementsByName("BX_IKA3[]")[t1].value="<?php echo $ika3; ?>";
			}
			if (t1==1){
				document.getElementsByName("BX_IKA1[]")[t1].value="<?php echo $deh1; ?>";
				document.getElementsByName("BX_IKA2[]")[t1].value="<?php echo $deh2; ?>";
				document.getElementsByName("BX_IKA3[]")[t1].value="<?php echo $deh3; ?>";
			}
			if (t1==2){
				document.getElementsByName("BX_IKA1[]")[t1].value="<?php echo $thl1; ?>";
				document.getElementsByName("BX_IKA2[]")[t1].value="<?php echo $thl2; ?>";
				document.getElementsByName("BX_IKA3[]")[t1].value="<?php echo $thl3; ?>";
			}
		}
	<?php
	}
	?>
	
//document.getElementsByName("BX_NAME[]")[0].value="5";
//document.getElementsByName("BX_NAME[]")[1].value="6";

}

function addRow2(tableID) {

<?php
	if ($number!=""){
	?>
	n= <?php echo $number; ?>;
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
		for(var t=0; t<n-1; t++) 	{
		var rowCount = table.rows.length;		// limit the user from creating fields more than your limits
//		var row = table.insertRow(rowCount);
		var colCount = table.rows[0].cells.length;
		for(var j=0; j<5; j++) {
			var row = table.insertRow(rowCount+j);
		for(var i=0; i<colCount; i++) {
			var colCount = table.rows[j].cells.length;
			var newcell = row.insertCell(i);
			newcell.innerHTML = table.rows[j].cells[i].innerHTML;
			
		}}}
		for(var t=0; t<n; t++) 	{
		m=1;
		if (t==0){
			m= <?php echo $katagatho1; ?>;
			document.getElementsByName("BX_NAME1[]")[t].value="<?php echo $agatho1; ?>";
			document.getElementsByName("BX_gender1[]")[t].getElementsByTagName('option')[m].selected = 'selected';
			document.getElementsByName("BX_ESYEAR11[]")[t].value="<?php echo $ag1yeares1; ?>";
			document.getElementsByName("BX_ESYEAR21[]")[t].value="<?php echo $ag1yeares2; ?>";
			document.getElementsByName("BX_ESYEAR31[]")[t].value="<?php echo $ag1yeares3; ?>";
			document.getElementsByName("BX_EKSYEAR11[]")[t].value="<?php echo $ag1yeareks1; ?>";
			document.getElementsByName("BX_EKSYEAR21[]")[t].value="<?php echo $ag1yeareks2; ?>";
			document.getElementsByName("BX_EKSYEAR31[]")[t].value="<?php echo $ag1yeareks3; ?>";
			}
			if (t==1){
			m= <?php echo $katagatho2; ?>;
			document.getElementsByName("BX_NAME1[]")[t].value="<?php echo $agatho2; ?>";
			document.getElementsByName("BX_gender1[]")[t].getElementsByTagName('option')[m].selected = 'selected';
			document.getElementsByName("BX_ESYEAR11[]")[t].value="<?php echo $ag2yeares1; ?>";
			document.getElementsByName("BX_ESYEAR21[]")[t].value="<?php echo $ag2yeares2; ?>";
			document.getElementsByName("BX_ESYEAR31[]")[t].value="<?php echo $ag2yeares3; ?>";
			document.getElementsByName("BX_EKSYEAR11[]")[t].value="<?php echo $ag2yeareks1; ?>";
			document.getElementsByName("BX_EKSYEAR21[]")[t].value="<?php echo $ag2yeareks2; ?>";
			document.getElementsByName("BX_EKSYEAR31[]")[t].value="<?php echo $ag2yeareks3; ?>";
			}
			if (t==2){
			m= <?php echo $katagatho3; ?>;
			document.getElementsByName("BX_NAME1[]")[t].value="<?php echo $agatho3; ?>";
			document.getElementsByName("BX_gender1[]")[t].getElementsByTagName('option')[m].selected = 'selected';
			document.getElementsByName("BX_ESYEAR11[]")[t].value="<?php echo $ag3yeares1; ?>";
			document.getElementsByName("BX_ESYEAR21[]")[t].value="<?php echo $ag3yeares2; ?>";
			document.getElementsByName("BX_ESYEAR31[]")[t].value="<?php echo $ag3yeares3; ?>";
			document.getElementsByName("BX_EKSYEAR11[]")[t].value="<?php echo $ag3yeareks1; ?>";
			document.getElementsByName("BX_EKSYEAR21[]")[t].value="<?php echo $ag3yeareks2; ?>";
			document.getElementsByName("BX_EKSYEAR31[]")[t].value="<?php echo $ag3yeareks3; ?>";
			}
			if (t==3){
			m= <?php echo $katagatho4; ?>;
			document.getElementsByName("BX_NAME1[]")[t].value="<?php echo $agatho4; ?>";
			document.getElementsByName("BX_gender1[]")[t].getElementsByTagName('option')[m].selected = 'selected';
			document.getElementsByName("BX_ESYEAR11[]")[t].value="<?php echo $ag4yeares1; ?>";
			document.getElementsByName("BX_ESYEAR21[]")[t].value="<?php echo $ag4yeares2; ?>";
			document.getElementsByName("BX_ESYEAR31[]")[t].value="<?php echo $ag4yeares3; ?>";
			document.getElementsByName("BX_EKSYEAR11[]")[t].value="<?php echo $ag4yeareks1; ?>";
			document.getElementsByName("BX_EKSYEAR21[]")[t].value="<?php echo $ag4yeareks2; ?>";
			document.getElementsByName("BX_EKSYEAR31[]")[t].value="<?php echo $ag4yeareks3; ?>";
			}
			if (t==4){
			m= <?php echo $katagatho5; ?>;
			document.getElementsByName("BX_NAME1[]")[t].value="<?php echo $agatho5; ?>";
			document.getElementsByName("BX_gender1[]")[t].getElementsByTagName('option')[m].selected = 'selected';
			document.getElementsByName("BX_ESYEAR11[]")[t].value="<?php echo $ag5yeares1; ?>";
			document.getElementsByName("BX_ESYEAR21[]")[t].value="<?php echo $ag5yeares2; ?>";
			document.getElementsByName("BX_ESYEAR31[]")[t].value="<?php echo $ag5yeares3; ?>";
			document.getElementsByName("BX_EKSYEAR11[]")[t].value="<?php echo $ag5yeareks1; ?>";
			document.getElementsByName("BX_EKSYEAR21[]")[t].value="<?php echo $ag5yeareks2; ?>";
			document.getElementsByName("BX_EKSYEAR31[]")[t].value="<?php echo $ag5yeareks3; ?>";
			}
		}
	<?php
	}
	?>

}

/* <?php
if ($number!=0  || $number!=""){
echo "addRow1('dataTable,$number');";
}
?> */


function mhden(){

		document.getElementById("nu1").value="";
		document.getElementById("nu2").value="";
		document.getElementById("nu3").value="";
		document.getElementById("nu4").value="";
		document.getElementById("nu5").value="";
		document.getElementById("nu6").value="";
		document.getElementById("nu7").value="";
		document.getElementById("nu8").value="";
		document.getElementById("nu9").value="";
		document.getElementById("nu10").value="";
		document.getElementById("nu11").value="";
		document.getElementById("nu12").value="";
		document.getElementById("nu13").value="";
		document.getElementById("nu14").value="";
		document.getElementById("nu15").value="";
		document.getElementById("nu16").value="";
		document.getElementById("nu17").value="";
		document.getElementById("nu18").value="";
		document.getElementById("nu19").value="";
		document.getElementById("nu20").value="";	
}

function myFunction1(){
	document.getElementById("pro1").style.display="none";
	document.getElementById("pro2").style.display="none";
	document.getElementById("pro3").style.display="none";
	document.getElementById("pro4").style.display="none";
	document.getElementById("pro5").style.display="none";
	document.getElementById("pro6").style.display="none";
	document.getElementById("pro7").style.display="none";
	document.getElementById("pro8").style.display="none";
	document.getElementById("pro9").style.display="none";
	document.getElementById("pro10").style.display="none";
	document.getElementById("pro11").style.display="none";
	document.getElementById("pro12").style.display="none";
	document.getElementById("pro13").style.display="none";
	document.getElementById("pro14").style.display="none";
	document.getElementById("pro15").style.display="none";
	document.getElementById("pro16").style.display="none";
	document.getElementById("pro17").style.display="none";
	document.getElementById("pro18").style.display="none";
	document.getElementById("pro19").style.display="none";
	document.getElementById("pro20").style.display="none";
}

function myFunction2(x){
if (x==1){
	document.getElementById("pro1").style.display="block";
	}
if (x==2){
	document.getElementById("pro1").style.display="block";
	document.getElementById("pro2").style.display="block";
	}
if (x==3){
	document.getElementById("pro1").style.display="block";
	document.getElementById("pro2").style.display="block";
	document.getElementById("pro3").style.display="block";
	}
	
if (x==4){	
	document.getElementById("pro1").style.display="block";
	document.getElementById("pro2").style.display="block";
	document.getElementById("pro3").style.display="block";
	document.getElementById("pro4").style.display="block";
	}

if (x==5){	
	document.getElementById("pro1").style.display="block";
	document.getElementById("pro2").style.display="block";
	document.getElementById("pro3").style.display="block";
	document.getElementById("pro4").style.display="block";
	document.getElementById("pro5").style.display="block";
}

if (x==6){	
	document.getElementById("pro1").style.display="block";
	document.getElementById("pro2").style.display="block";
	document.getElementById("pro3").style.display="block";
	document.getElementById("pro4").style.display="block";
	document.getElementById("pro5").style.display="block";
	document.getElementById("pro6").style.display="block";
	}

if (x==7){	
	document.getElementById("pro1").style.display="block";
	document.getElementById("pro2").style.display="block";
	document.getElementById("pro3").style.display="block";
	document.getElementById("pro4").style.display="block";
	document.getElementById("pro5").style.display="block";
	document.getElementById("pro6").style.display="block";
	document.getElementById("pro7").style.display="block";
	}

if (x==8){	
	document.getElementById("pro1").style.display="block";
	document.getElementById("pro2").style.display="block";
	document.getElementById("pro3").style.display="block";
	document.getElementById("pro4").style.display="block";
	document.getElementById("pro5").style.display="block";
	document.getElementById("pro6").style.display="block";
	document.getElementById("pro7").style.display="block";
	document.getElementById("pro8").style.display="block";
	}

if (x==9){	
	document.getElementById("pro1").style.display="block";
	document.getElementById("pro2").style.display="block";
	document.getElementById("pro3").style.display="block";
	document.getElementById("pro4").style.display="block";
	document.getElementById("pro5").style.display="block";
	document.getElementById("pro6").style.display="block";
	document.getElementById("pro7").style.display="block";
	document.getElementById("pro8").style.display="block";
	document.getElementById("pro9").style.display="block";
	}	
	
if (x==10){	
	document.getElementById("pro1").style.display="block";
	document.getElementById("pro2").style.display="block";
	document.getElementById("pro3").style.display="block";
	document.getElementById("pro4").style.display="block";
	document.getElementById("pro5").style.display="block";
	document.getElementById("pro6").style.display="block";
	document.getElementById("pro7").style.display="block";
	document.getElementById("pro8").style.display="block";
	document.getElementById("pro9").style.display="block";
	document.getElementById("pro10").style.display="block";
	}	
	
if (x==11){	
	document.getElementById("pro1").style.display="block";
	document.getElementById("pro2").style.display="block";
	document.getElementById("pro3").style.display="block";
	document.getElementById("pro4").style.display="block";
	document.getElementById("pro5").style.display="block";
	document.getElementById("pro6").style.display="block";
	document.getElementById("pro7").style.display="block";
	document.getElementById("pro8").style.display="block";
	document.getElementById("pro9").style.display="block";
	document.getElementById("pro10").style.display="block";
	document.getElementById("pro11").style.display="block";
	}		
	
if (x==12){	
	document.getElementById("pro1").style.display="block";
	document.getElementById("pro2").style.display="block";
	document.getElementById("pro3").style.display="block";
	document.getElementById("pro4").style.display="block";
	document.getElementById("pro5").style.display="block";
	document.getElementById("pro6").style.display="block";
	document.getElementById("pro7").style.display="block";
	document.getElementById("pro8").style.display="block";
	document.getElementById("pro9").style.display="block";
	document.getElementById("pro10").style.display="block";
	document.getElementById("pro11").style.display="block";
	document.getElementById("pro12").style.display="block";
	}		
	
if (x==13){	
	document.getElementById("pro1").style.display="block";
	document.getElementById("pro2").style.display="block";
	document.getElementById("pro3").style.display="block";
	document.getElementById("pro4").style.display="block";
	document.getElementById("pro5").style.display="block";
	document.getElementById("pro6").style.display="block";
	document.getElementById("pro7").style.display="block";
	document.getElementById("pro8").style.display="block";
	document.getElementById("pro9").style.display="block";
	document.getElementById("pro10").style.display="block";
	document.getElementById("pro11").style.display="block";
	document.getElementById("pro12").style.display="block";
	document.getElementById("pro13").style.display="block";
	}	
	
if (x==14){	
	document.getElementById("pro1").style.display="block";
	document.getElementById("pro2").style.display="block";
	document.getElementById("pro3").style.display="block";
	document.getElementById("pro4").style.display="block";
	document.getElementById("pro5").style.display="block";
	document.getElementById("pro6").style.display="block";
	document.getElementById("pro7").style.display="block";
	document.getElementById("pro8").style.display="block";
	document.getElementById("pro9").style.display="block";
	document.getElementById("pro10").style.display="block";
	document.getElementById("pro11").style.display="block";
	document.getElementById("pro12").style.display="block";
	document.getElementById("pro13").style.display="block";
	document.getElementById("pro14").style.display="block";
	}		
	
if (x==15){	
	document.getElementById("pro1").style.display="block";
	document.getElementById("pro2").style.display="block";
	document.getElementById("pro3").style.display="block";
	document.getElementById("pro4").style.display="block";
	document.getElementById("pro5").style.display="block";
	document.getElementById("pro6").style.display="block";
	document.getElementById("pro7").style.display="block";
	document.getElementById("pro8").style.display="block";
	document.getElementById("pro9").style.display="block";
	document.getElementById("pro10").style.display="block";
	document.getElementById("pro11").style.display="block";
	document.getElementById("pro12").style.display="block";
	document.getElementById("pro13").style.display="block";
	document.getElementById("pro14").style.display="block";
	document.getElementById("pro15").style.display="block";
	}		
	
if (x==16){	
	document.getElementById("pro1").style.display="block";
	document.getElementById("pro2").style.display="block";
	document.getElementById("pro3").style.display="block";
	document.getElementById("pro4").style.display="block";
	document.getElementById("pro5").style.display="block";
	document.getElementById("pro6").style.display="block";
	document.getElementById("pro7").style.display="block";
	document.getElementById("pro8").style.display="block";
	document.getElementById("pro9").style.display="block";
	document.getElementById("pro10").style.display="block";
	document.getElementById("pro11").style.display="block";
	document.getElementById("pro12").style.display="block";
	document.getElementById("pro13").style.display="block";
	document.getElementById("pro14").style.display="block";
	document.getElementById("pro15").style.display="block";
	document.getElementById("pro16").style.display="block";
	}	
	
if (x==17){	
	document.getElementById("pro1").style.display="block";
	document.getElementById("pro2").style.display="block";
	document.getElementById("pro3").style.display="block";
	document.getElementById("pro4").style.display="block";
	document.getElementById("pro5").style.display="block";
	document.getElementById("pro6").style.display="block";
	document.getElementById("pro7").style.display="block";
	document.getElementById("pro8").style.display="block";
	document.getElementById("pro9").style.display="block";
	document.getElementById("pro10").style.display="block";
	document.getElementById("pro11").style.display="block";
	document.getElementById("pro12").style.display="block";
	document.getElementById("pro13").style.display="block";
	document.getElementById("pro14").style.display="block";
	document.getElementById("pro15").style.display="block";
	document.getElementById("pro16").style.display="block";
	document.getElementById("pro17").style.display="block";
	}	
	
if (x==18){	
	document.getElementById("pro1").style.display="block";
	document.getElementById("pro2").style.display="block";
	document.getElementById("pro3").style.display="block";
	document.getElementById("pro4").style.display="block";
	document.getElementById("pro5").style.display="block";
	document.getElementById("pro6").style.display="block";
	document.getElementById("pro7").style.display="block";
	document.getElementById("pro8").style.display="block";
	document.getElementById("pro9").style.display="block";
	document.getElementById("pro10").style.display="block";
	document.getElementById("pro11").style.display="block";
	document.getElementById("pro12").style.display="block";
	document.getElementById("pro13").style.display="block";
	document.getElementById("pro14").style.display="block";
	document.getElementById("pro15").style.display="block";
	document.getElementById("pro16").style.display="block";
	document.getElementById("pro17").style.display="block";
	document.getElementById("pro18").style.display="block";
	}
	
if (x==19){	
	document.getElementById("pro1").style.display="block";
	document.getElementById("pro2").style.display="block";
	document.getElementById("pro3").style.display="block";
	document.getElementById("pro4").style.display="block";
	document.getElementById("pro5").style.display="block";
	document.getElementById("pro6").style.display="block";
	document.getElementById("pro7").style.display="block";
	document.getElementById("pro8").style.display="block";
	document.getElementById("pro9").style.display="block";
	document.getElementById("pro10").style.display="block";
	document.getElementById("pro11").style.display="block";
	document.getElementById("pro12").style.display="block";
	document.getElementById("pro13").style.display="block";
	document.getElementById("pro14").style.display="block";
	document.getElementById("pro15").style.display="block";
	document.getElementById("pro16").style.display="block";
	document.getElementById("pro17").style.display="block";
	document.getElementById("pro18").style.display="block";
	document.getElementById("pro19").style.display="block";
	}	
	
if (x==20){	
	document.getElementById("pro1").style.display="block";
	document.getElementById("pro2").style.display="block";
	document.getElementById("pro3").style.display="block";
	document.getElementById("pro4").style.display="block";
	document.getElementById("pro5").style.display="block";
	document.getElementById("pro6").style.display="block";
	document.getElementById("pro7").style.display="block";
	document.getElementById("pro8").style.display="block";
	document.getElementById("pro9").style.display="block";
	document.getElementById("pro10").style.display="block";
	document.getElementById("pro11").style.display="block";
	document.getElementById("pro12").style.display="block";
	document.getElementById("pro13").style.display="block";
	document.getElementById("pro14").style.display="block";
	document.getElementById("pro15").style.display="block";
	document.getElementById("pro16").style.display="block";
	document.getElementById("pro17").style.display="block";
	document.getElementById("pro18").style.display="block";
	document.getElementById("pro19").style.display="block";
	document.getElementById("pro20").style.display="block";
	}
}

function showHint(str)
	{
	   if(!str.length<1)
		
		if(isNaN(str)==true )
			{
				alert("Δώστε αριθμό!");
				document.getElementById("numm").value="";
			}
		else  if( str<1  || str>20)
			{
				alert("Δώστε αριθμό μεγαλύτερο του 0 και μικρότερο ή ίσο του 20!");
				document.getElementById("numm").value="";
			}
			if(isNaN(str)==false && str>0  && str<=25)
			{
			}
	}	
</script>
<style type="text/css">
	.bs-example{
		margin: 20px;
	}
</style>
</head>
<body onload="addRow1('dataTable'); ">
<div class="bs-example">
    <ul class="nav nav-tabs" id="myTab">
        <li id="secta" class="active"><a href="#sectionA">Section A</a></li>
        <li id="sectb"><a href="#sectionB">Section B</a></li>
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="#dropdown1">Dropdown1</a></li>
                <li><a href="#dropdown2">Dropdown2</a></li>
            </ul>
        </li>
    </ul>
    <div class="tab-content">
        <div id="sectionA" class="tab-pane fade in active">
   <!--         <p id="ppr1" style="display:inline; margin:40px 0 0 80px;">Δώστε εύρος προϊόντων:</p>
			<input id="numm" style="display:inline; width: 30px;"  onkeyup="showHint(this.value)" onchange="mhden(); myFunction1(); myFunction2(this.value);" type="text" /></br></br>
			<button style="margin:-45px 0 0 360px; position:absolute; " id="mhden" onclick="mhden()" >Μηδενισμός τιμών</button>
			<button style="margin:-45px 0 0 520px; position:absolute; " id="save" onclick="save()" >Αποθήκευση</button>
			
			<div id="pro1">
				<p style="display:inline;">Δώστε όνομα προϊόντων:</p> 
				<input id="nu1" value="" style="display:inline; width: 280px; margin-top:0px;"    type="text" />
				<select style="height:25px" name="proion">
					<option value="pro">Προϊόν</option>
					<option value="yphr">Υπηρεσία</option>
				</select>
			</div>
			<div id="pro2">
				<p style="display:inline;">Δώστε όνομα προϊόντων:</p> 
				<input id="nu2" value="" style="display:inline; width: 280px; margin-top:0px;"    type="text" />
				<select style="height:25px" name="proion">
					<option value="pro">Προϊόν</option>
					<option value="yphr">Υπηρεσία</option>
				</select>
			</div>
			<div id="pro3">
				<p style="display:inline;">Δώστε όνομα προϊόντων:</p> 
				<input id="nu3" value="" style="display:inline; width: 280px; margin-top:0px;"    type="text" />
				<select style="height:25px" name="proion">
					<option value="pro">Προϊόν</option>
					<option value="yphr">Υπηρεσία</option>
				</select>
			</div>
			<div id="pro4">
				<p style="display:inline;">Δώστε όνομα προϊόντων:</p> 
				<input id="nu4" value="" style="display:inline; width: 280px; margin-top:0px;"    type="text" />
				<select style="height:25px" name="proion">
					<option value="pro">Προϊόν</option>
					<option value="yphr">Υπηρεσία</option>
				</select>
			</div>
			<div id="pro5">
				<p style="display:inline;">Δώστε όνομα προϊόντων:</p> 
				<input id="nu5" value="" style="display:inline; width: 280px; margin-top:0px;"    type="text" />
				<select style="height:25px" name="proion">
					<option value="pro">Προϊόν</option>
					<option value="yphr">Υπηρεσία</option>
				</select>
			</div>
			<div id="pro6">
				<p style="display:inline;">Δώστε όνομα προϊόντων:</p> 
				<input id="nu6" value="" style="display:inline; width: 280px; margin-top:0px;"    type="text" />
				<select style="height:25px" name="proion">
					<option value="pro">Προϊόν</option>
					<option value="yphr">Υπηρεσία</option>
				</select>
			</div>
			<div id="pro7">
				<p style="display:inline;">Δώστε όνομα προϊόντων:</p> 
				<input id="nu7" value="" style="display:inline; width: 280px; margin-top:0px;"    type="text" />
				<select style="height:25px" name="proion">
					<option value="pro">Προϊόν</option>
					<option value="yphr">Υπηρεσία</option>
				</select>
			</div>
			<div id="pro8">
				<p style="display:inline;">Δώστε όνομα προϊόντων:</p> 
				<input id="nu8" value="" style="display:inline; width: 280px; margin-top:0px;"    type="text" />
				<select style="height:25px" name="proion">
					<option value="pro">Προϊόν</option>
					<option value="yphr">Υπηρεσία</option>
				</select>
			</div>
			<div id="pro9">
				<p style="display:inline;">Δώστε όνομα προϊόντων:</p> 
				<input id="nu9" value="" style="display:inline; width: 280px; margin-top:0px;"    type="text" />
				<select style="height:25px" name="proion">
					<option value="pro">Προϊόν</option>
					<option value="yphr">Υπηρεσία</option>
				</select>
			</div>
			<div id="pro10">
				<p style="display:inline;">Δώστε όνομα προϊόντων:</p> 
				<input id="nu10" value="" style="display:inline; width: 280px; margin-top:0px;"    type="text" />
				<select style="height:25px" name="proion">
					<option value="pro">Προϊόν</option>
					<option value="yphr">Υπηρεσία</option>
				</select>
			</div>
			<div id="pro11">
				<p style="display:inline;">Δώστε όνομα προϊόντων:</p> 
				<input id="nu11" value="" style="display:inline; width: 280px; margin-top:0px;"    type="text" />
				<select style="height:25px" name="proion">
					<option value="pro">Προϊόν</option>
					<option value="yphr">Υπηρεσία</option>
				</select>
			</div>
			<div id="pro12">
				<p style="display:inline;">Δώστε όνομα προϊόντων:</p> 
				<input id="nu12" value="" style="display:inline; width: 280px; margin-top:0px;"    type="text" />
				<select style="height:25px" name="proion">
					<option value="pro">Προϊόν</option>
					<option value="yphr">Υπηρεσία</option>
				</select>
			</div>
			<div id="pro13">
				<p style="display:inline;">Δώστε όνομα προϊόντων:</p> 
				<input id="nu13" value="" style="display:inline; width: 280px; margin-top:0px;"    type="text" />
				<select style="height:25px" name="proion">
					<option value="pro">Προϊόν</option>
					<option value="yphr">Υπηρεσία</option>
				</select>
			</div>
			<div id="pro14">
				<p style="display:inline;">Δώστε όνομα προϊόντων:</p> 
				<input id="nu14" value="" style="display:inline; width: 280px; margin-top:0px;"    type="text" />
				<select style="height:25px" name="proion">
					<option value="pro">Προϊόν</option>
					<option value="yphr">Υπηρεσία</option>
				</select>
			</div>
			<div id="pro15">
				<p style="display:inline;">Δώστε όνομα προϊόντων:</p> 
				<input id="nu15" value="" style="display:inline; width: 280px; margin-top:0px;"    type="text" />
				<select style="height:25px" name="proion">
					<option value="pro">Προϊόν</option>
					<option value="yphr">Υπηρεσία</option>
				</select>
			</div>
			<div id="pro16">
				<p style="display:inline;">Δώστε όνομα προϊόντων:</p> 
				<input id="nu16" value="" style="display:inline; width: 280px; margin-top:0px;"    type="text" />
				<select style="height:25px" name="proion">
					<option value="pro">Προϊόν</option>
					<option value="yphr">Υπηρεσία</option>
				</select>
			</div>
			<div id="pro17">
				<p style="display:inline;">Δώστε όνομα προϊόντων:</p> 
				<input id="nu17" value="" style="display:inline; width: 280px; margin-top:0px;"    type="text" />
				<select style="height:25px" name="proion">
					<option value="pro">Προϊόν</option>
					<option value="yphr">Υπηρεσία</option>
				</select>
			</div>
			<div id="pro18">
				<p style="display:inline;">Δώστε όνομα προϊόντων:</p> 
				<input id="nu18" value="" style="display:inline; width: 280px; margin-top:0px;"    type="text" />
				<select style="height:25px" name="proion">
					<option value="pro">Προϊόν</option>
					<option value="yphr">Υπηρεσία</option>
				</select>
			</div>
			<div id="pro19">
				<p style="display:inline;">Δώστε όνομα προϊόντων:</p> 
				<input id="nu19" value="" style="display:inline; width: 280px; margin-top:0px;"    type="text" />
				<select style="height:25px" name="proion">
					<option value="pro">Προϊόν</option>
					<option value="yphr">Υπηρεσία</option>
				</select>
			</div>
			<div id="pro20">
				<p style="display:inline;">Δώστε όνομα προϊόντων:</p> 
				<input id="nu20" value="" style="display:inline; width: 280px; margin-top:0px;"    type="text" />
				<select style="height:25px" name="proion">
					<option value="pro">Προϊόν</option>
					<option value="yphr">Υπηρεσία</option>
				</select>
			</div> -->
	
		<form action="process1.php" class="register" method="POST">
            
            <fieldset class="row2">
				<legend>Passenger Details</legend>
				<p> 
					<input type="button" value="Προσθήκη Αγαθού" onClick="addRow('dataTable')" /> 
					<input type="button" value="Διαγραφή Αγαθού" onClick="deleteRow('dataTable')"  /> 
					<p>(All acions apply only to entries with check marked check boxes only.)</p>
				</p>
               <table id="dataTable" class="form" border="1">
                  <tbody>
                    <tr>
                      <p>
						<td><input  type="checkbox"  name="chk[]"  /></td>
						<td>
							<label>Όνομα Αγαθού</label>
							<input type="text" required="required" name="BX_NAME[]" value="<?php echo $number;?>">
						 </td>
						 
						 <td>
							<label >Κατηγορία</label>
							<select  name="BX_gender[]" required="required">
								<option>Proion</option>
								<option>Yphresia</option>
							</select>
						 </td>
						 
							</p>
                    </tr>
					<tr>
                      <p>
						<td><label></label></td>
						<td>
							<label>Esoda</label>
						 </td>
						 
						 <td>
							<label >Eksoda</label>
							
						 </td>
						 
							</p>
                    </tr>
					<tr>
                      <p>
					
						<td>
							<label>Year1</label>
						 </td>
						 
						 <td>
							<input type="text" required="required" name="BX_ESYEAR1[]">
							
						 </td>
						  <td>
							<input type="text" required="required" name="BX_EKSYEAR1[]">
							
						 </td>
							</p>
                    </tr>
					<tr>
                      <p>
					
						<td>
							<label>Year2</label>
						 </td>
						 
						 <td>
							<input type="text" required="required" name="BX_ESYEAR2[]">
							
						 </td>
						  <td>
							<input type="text" required="required" name="BX_EKSYEAR2[]">
							
						 </td>
							</p>
                    </tr>
					<tr>
                      <p>
					
						<td>
							<label>Year3</label>
						 </td>
						 
						 <td>
							<input type="text" required="required" name="BX_ESYEAR3[]">
							
						 </td>
						  <td>
							<input type="text" required="required" name="BX_EKSYEAR3[]">
							
						 </td>
							</p>
                    </tr>
					
					
                    </tbody>
                </table>
				<div class="clear"></div>
            </fieldset>
            
			<input class="submit" type="submit" value="Confirm &raquo;" />
			<a class="submit" onclick="next1()"/>Next</a>
			
			<div class="clear"></div>
        </form>
	
	
        </div>
        <div id="sectionB" class="tab-pane fade">
            <h3>Section B</h3>

	<!--			<form action="process2.php" class="register" method="POST">
            
            <fieldset class="row2">
				<legend>Passenger Details</legend>
				<p> 
					<input type="button" value="Προσθήκη Αγαθού" onClick="addRow('dataTable')" /> 
					<input type="button" value="Διαγραφή Αγαθού" onClick="deleteRow('dataTable')"  /> 
					<p>(All acions apply only to entries with check marked check boxes only.)</p>
				</p>
               <table id="dataTable1" class="form" border="1">
                  <tbody>
                    <tr>
                      <p>
						<td><input  type="checkbox"  name="chk[]"  /></td>
						<td>
							<label>Όνομα Αγαθού</label>
							<input type="text" required="required" name="BX_NAME1[]" value="<?php echo $number;?>">
						 </td>
						 
						 <td>
							<label >Κατηγορία</label>
							<select  name="BX_gender1[]" required="required">
								<option>Proion</option>
								<option>Yphresia</option>
							</select>
						 </td>
						 
							</p>
                    </tr>
					<tr>
                      <p>
						<td><label></label></td>
						<td>
							<label>Esoda</label>
						 </td>
						 
						 <td>
							<label >Eksoda</label>
							
						 </td>
						 
							</p>
                    </tr>
					<tr>
                      <p>
					
						<td>
							<label>Year1</label>
						 </td>
						 
						 <td>
							<input type="text" required="required" name="BX_ESYEAR11[]">
							
						 </td>
						  <td>
							<input type="text" required="required" name="BX_EKSYEAR11[]">
							
						 </td>
							</p>
                    </tr>
					<tr>
                      <p>
					
						<td>
							<label>Year2</label>
						 </td>
						 
						 <td>
							<input type="text" required="required" name="BX_ESYEAR21[]">
							
						 </td>
						  <td>
							<input type="text" required="required" name="BX_EKSYEAR21[]">
							
						 </td>
							</p>
                    </tr>
					<tr>
                      <p>
					
						<td>
							<label>Year3</label>
						 </td>
						 
						 <td>
							<input type="text" required="required" name="BX_ESYEAR31[]">
							
						 </td>
						  <td>
							<input type="text" required="required" name="BX_EKSYEAR31[]">
							
						 </td>
							</p>
                    </tr>
					
					
                    </tbody>
                </table>
				<div class="clear"></div>
            </fieldset>
            
			<input class="submit" type="submit" value="Confirm &raquo;" />
			<a class="submit" onclick="next2()"/>Next</a>
			
			<div class="clear"></div>
        </form>  -->
				
				<form action="process2.php" class="register" method="POST">
            
            <fieldset class="row2">
				<legend>Passenger Details</legend>
				<p> 
					<input type="button" value="Προσθήκη Αγαθού" onClick="addRow('dataTable')" /> 
					<input type="button" value="Διαγραφή Αγαθού" onClick="deleteRow('dataTable')"  /> 
					<p>(All acions apply only to entries with check marked check boxes only.)</p>
				</p>
               <table id="dataTable1" class="form" border="1">
                  <tbody>
                    
					<tr>
                      <p>
						<td><label></label></td>
						<td>
							<label>Year1</label>
						 </td>
						 
						 <td>
							<label >Year2</label>
							
						 </td>
						 <td>
							<label >Year3</label>
							
						 </td>
						 
							</p>
                    </tr>
					<tr>
                      <p>
					
						<td>
							<label>Ικα</label>
						 </td>
						 
						 <td>
							<input type="text" name="BX_IKA1[]">
							
						 </td>
						  <td>
							<input type="text"  name="BX_IKA2[]">
							
						 </td>
						 <td>
							<input type="text"  name="BX_IKA3[]">
							
						 </td>
							</p>
                    </tr>
					<tr>
                      <p>
					
						<td>
							<label>Δεή</label>
						 </td>
						 
						 <td>
							<input type="text"  name="BX_IKA1[]">
							
						 </td>
						  <td>
							<input type="text"  name="BX_IKA2[]">
							
						 </td>
						 <td>
							<input type="text"  name="BX_IKA3[]">
							
						 </td>
							</p>
                    </tr>
					<tr>
                      <p>
					
						<td>
							<label>Τηλεφωνία</label>
						 </td>
						 
						 <td>
							<input type="text"  name="BX_IKA1[]">
							
						 </td>
						  <td>
							<input type="text"  name="BX_IKA2[]">
							
						 </td>
						 <td>
							<input type="text"  name="BX_IKA3[]">
							
						 </td>
							</p>
                    </tr>
					
					
					
                    </tbody>
                </table>
				<div class="clear"></div>
            </fieldset>
            
			<input class="submit" type="submit" value="Confirm &raquo;" />
			<a class="submit" onclick="next2()"/>Next</a>
			
			<div class="clear"></div>
        </form> 
				
				
			</div>
        <div id="dropdown1" class="tab-pane fade">
            <h3>Dropdown 1</h3>
            <p>WInteger convallis, nulla in sollicitudin placerat, ligula enim auctor lectus, in mollis diam dolor at lorem. Sed bibendum nibh sit amet dictum feugiat. Vivamus arcu sem, cursus a feugiat ut, iaculis at erat. Donec vehicula at ligula vitae venenatis. Sed nunc nulla, vehicula non porttitor in, pharetra et dolor. Fusce nec velit velit. Pellentesque consectetur eros.</p>
        </div>
        <div id="dropdown2" class="tab-pane fade">
            <h3>Dropdown 2</h3>
            <p>Donec vel placerat quam, ut euismod risus. Sed a mi suscipit, elementum sem a, hendrerit velit. Donec at erat magna. Sed dignissim orci nec eleifend egestas. Donec eget mi consequat massa vestibulum laoreet. Mauris et ultrices nulla, malesuada volutpat ante. Fusce ut orci lorem. Donec molestie libero in tempus imperdiet. Cum sociis natoque penatibus et magnis.</p>
        </div>
    </div>
</div>
</body>
</html>                                		