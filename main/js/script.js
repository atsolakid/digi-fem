/**
 * Projet Name : Dynamic Form Processing with PHP
 * URL: http://techstream.org/Web-Development/PHP/Dynamic-Form-Processing-with-PHP
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2013, Tech Stream
 * http://techstream.org
 */
function ch1(){
 document.getElementById("ch1").disabled=true;
 }
 
function addRow(tableID) {
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
	if(rowCount < 100){							// limit the user from creating fields more than your limits
//		var row = table.insertRow(rowCount);
		var colCount = table.rows[0].cells.length;
		for(var j=0; j<5; j++) {
			var row = table.insertRow(rowCount+j);
		for(var i=0; i<colCount; i++) {
			var colCount = table.rows[j].cells.length;
			var newcell = row.insertCell(i);
			newcell.innerHTML = table.rows[j].cells[i].innerHTML;
		}}
	}else{
		 alert("Maximum Agatha are 20.");
			   
	}
}

function deleteRow(tableID) {
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
	for(var i=0; i<rowCount; i++) {
		var row = table.rows[i];
		var chkbox = row.cells[0].childNodes[0];
		if(null != chkbox && true == chkbox.checked) {
			if(rowCount/5 <= 1) { 						// limit the user from removing all the fields
				alert("Cannot Remove all the Passenger.");
				break;
			}
			for(var j=0; j<5; j++) {
			table.deleteRow(i);
			
		}
		rowCount=rowCount-5;
			
			i=i-5;
			}
	}
}