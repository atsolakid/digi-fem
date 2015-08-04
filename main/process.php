<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Dynamic Form Processing with PHP | Tech Stream</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="css/default.css"/>
    </head>
    <body>    
        <form action="" class="register">
            <h1>YouAreBUS Ticket Reservation</h1>
			<?php 
				session_start();
				$_SESSION['POSTDATA'] = $_POST;
//				header('Location: ' . $uri);
				$chkbox = $_POST['chk'];
				$BX_NAME=$_POST['BX_NAME'];		
				$BX_gender=$_POST['BX_gender'];
				$BX_ESYEAR1=$_POST['BX_ESYEAR1'];
				$BX_ESYEAR2=$_POST['BX_ESYEAR2'];
				$BX_ESYEAR3=$_POST['BX_ESYEAR3'];
				$BX_EKSYEAR1=$_POST['BX_EKSYEAR1'];
				$BX_EKSYEAR2=$_POST['BX_EKSYEAR2'];
				$BX_EKSYEAR3=$_POST['BX_EKSYEAR3'];
			?>
			
            <fieldset class="row2">
                <legend>Passenger Details
                </legend>				
                <table id="dataTable" class="form" border="1">
					<tbody>
					<?php foreach($BX_NAME as $a => $b){ ?>
						<tr>
							<p>
								<td >
									<?php echo $a+1; ?>
								</td>
								<td>
									<label>Name</label>
									<input type="text" readonly="readonly" name="BX_NAME[$a]" value="<?php echo $BX_NAME[$a]; ?>">
								</td>
								
								<td>
									<label >Agatho</label>
									<input type="text" readonly="readonly" name="BX_gender[$a]" value="<?php echo $BX_gender[$a]; ?>">
								</td>
								<td>
									<label>Esoda:</label>
								</td>
								<td>
									
									<label >Year1</label>
									<input type="text" readonly="readonly" name="BX_ESYEAR1[$a]" value="<?php echo $BX_ESYEAR1[$a]; ?>">
								</td>
								<td>
									<label >Year2</label>
									<input type="text" readonly="readonly" name="BX_ESYEAR2[$a]" value="<?php echo $BX_ESYEAR2[$a]; ?>">
								</td>
								<td>
									<label>Year3</label>
									<input type="text" readonly="readonly" name="BX_ESYEAR3[$a]" value="<?php echo $BX_ESYEAR3[$a]; ?>">
								</td>
								<td>
									<label>Eksoda:</label>
								</td>
								<td>
									<label >Year1</label>
									<input type="text" readonly="readonly" name="BX_EKSYEAR1[$a]" value="<?php echo $BX_EKSYEAR1[$a]; ?>">
								</td>
								<td>
									<label >Year2</label>
									<input type="text" readonly="readonly" name="BX_EKSYEAR2[$a]" value="<?php echo $BX_EKSYEAR2[$a]; ?>">
								</td>
								<td>
									<label>Gender</label>
									<input type="text" readonly="readonly" name="BX_EKSYEAR3[$a]" value="<?php echo $BX_EKSYEAR3[$a]; ?>">
								</td>
							</p>
						</tr>
					<?php } ?>
					</tbody>
                </table>
				<div class="clear"></div>
            </fieldset>
            	
			<div class="clear"></div>
        </form>
    </body>
	<!-- Start of StatCounter Code for Default Guide -->
<script type="text/javascript">
var sc_project=9046834; 
var sc_invisible=1; 
var sc_security="ec55ba17"; 
var scJsHost = (("https:" == document.location.protocol) ?
"https://secure." : "http://www.");
document.write("<sc"+"ript type='text/javascript' src='" +
scJsHost+
"statcounter.com/counter/counter.js'></"+"script>");
</script>
<noscript><div class="statcounter"><a title="free hit
counter" href="http://statcounter.com/" target="_blank"><img
class="statcounter"
src="http://c.statcounter.com/9046834/0/ec55ba17/1/"
alt="free hit counter"></a></div></noscript>
<!-- End of StatCounter Code for Default Guide -->
</html>





