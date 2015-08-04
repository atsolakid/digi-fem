			<?php 
				session_start();
				include('../connection/connection.php');
				$_SESSION['POSTDATA'] = $_POST;
				$login_session = $_SESSION['login_user'];
				
//				header('Location: ' . $uri);
	
				$BX_NAME=$_POST['BX_NAME'];		
				$BX_gender=$_POST['BX_gender'];
				$BX_ESYEAR1=$_POST['BX_ESYEAR1'];
				$BX_ESYEAR2=$_POST['BX_ESYEAR2'];
				$BX_ESYEAR3=$_POST['BX_ESYEAR3'];
				$BX_EKSYEAR1=$_POST['BX_EKSYEAR1'];
				$BX_EKSYEAR2=$_POST['BX_EKSYEAR2'];
				$BX_EKSYEAR3=$_POST['BX_EKSYEAR3'];
				
				for ($i = 0; $i <= 4; $i++){
				if ($BX_gender[$i]=="Proion") 
					{
						$BX_gender[$i] = 0;
					}else 
					{
					$BX_gender[$i] = 1;
					}
				
				}
			
				foreach($BX_NAME as $a => $b){ 
					$a = $a+1;
					}
					
				$sqlu = "select * from users where username='$login_session'";
				$resultu = mysql_query($sqlu, $con);
				$row = mysql_fetch_assoc($resultu);
				$userid = $row['id'];
				$userid = intval($userid);
				$number=$row['number'];
				if (($number!=""))
				{
				$query = mysql_query("update proion set agatho1='$BX_NAME[0]',agatho2='$BX_NAME[1]',agatho3='$BX_NAME[2]',agatho4='$BX_NAME[3]',agatho5='$BX_NAME[4]',katagatho1='$BX_gender[0]',katagatho2='$BX_gender[1]',katagatho3='$BX_gender[2]',katagatho4='$BX_gender[3]',katagatho5='$BX_gender[4]',ag1yeares1='$BX_ESYEAR1[0]',ag1yeares2='$BX_ESYEAR2[0]',ag1yeares3='$BX_ESYEAR3[0]',ag1yeareks1='$BX_EKSYEAR1[0]',ag1yeareks2='$BX_EKSYEAR2[0]',ag1yeareks3='$BX_EKSYEAR3[0]',ag2yeares1='$BX_ESYEAR1[1]',ag2yeares2='$BX_ESYEAR2[1]',ag2yeares3='$BX_ESYEAR3[1]',ag2yeareks1='$BX_EKSYEAR1[1]',ag2yeareks2='$BX_EKSYEAR2[1]',ag2yeareks3='$BX_EKSYEAR3[1]',ag3yeares1='$BX_ESYEAR1[2]',ag3yeares2='$BX_ESYEAR2[2]',ag3yeares3='$BX_ESYEAR3[2]',ag3yeareks1='$BX_EKSYEAR1[2]',ag3yeareks2='$BX_EKSYEAR2[2]',ag3yeareks3='$BX_EKSYEAR3[2]',ag4yeares1='$BX_ESYEAR1[3]',ag4yeares2='$BX_ESYEAR2[3]',ag4yeares3='$BX_ESYEAR3[3]',ag4yeareks1='$BX_EKSYEAR1[3]',ag4yeareks2='$BX_EKSYEAR2[3]',ag4yeareks3='$BX_EKSYEAR3[3]',ag5yeares1='$BX_ESYEAR1[4]',ag5yeares2='$BX_ESYEAR2[4]',ag5yeares3='$BX_ESYEAR3[4]',ag5yeareks1='$BX_EKSYEAR1[4]',ag5yeareks2='$BX_EKSYEAR2[4]',ag5yeareks3='$BX_EKSYEAR3[4]' where user_id='$userid'",$con) or die(mysql_error($con)); 
				$query1 = mysql_query("update users set number='$a' where id='$userid'",$con) or die(mysql_error($con)); 
				header("location: index.php?success1");
				mysql_close($con);
				exit;

				}else 
				{
				for ($i = 0; $i <= 4; $i++){
						if ($BX_gender[$i]=="")
						$BX_gender[$i] = 0;
				}
					//			mysql_query("INSERT INTO proion (user_id, agatho1, agatho2, agatho3, agatho4, agatho5, katagatho1, katagatho2, katagatho3, katagatho4, katagatho5, ag1yeares1, ag1yeares2, ag1yeares3, ag1yeareks1, ag1yeareks2 , ag1yeareks3, ag2yeares1, ag2yeares2, ag2yeares3, ag2yeareks1, ag2yeareks2 , ag2yeareks3, ag3yeares1, ag3yeares2, ag3yeares3, ag3yeareks1, ag3yeareks2 , ag3yeareks3, ag4yeares1, ag4yeares2, ag4yeares3, ag4yeareks1, ag4yeareks2 , ag4yeareks3, ag5yeares1, ag5yeares2, ag5yeares3, ag5yeareks1, ag5yeareks2 , ag5yeareks3) VALUES ('$userid', '$BX_NAME[0]', '$BX_NAME[1]', '$BX_NAME[2]','$BX_NAME[3]','$BX_NAME[4]', '$BX_gender[0]', '$BX_gender[1]', '$BX_gender[2]','$BX_gender[3]','$BX_gender[4]', '$BX_ESYEAR1[0]', '$BX_ESYEAR2[0]', '$BX_ESYEAR3[0]', '$BX_EKSYEAR1[0]', '$BX_EKSYEAR2[0]', '$BX_EKSYEAR3[0]', '$BX_ESYEAR1[1]', '$BX_ESYEAR2[1]', '$BX_ESYEAR3[1]', '$BX_EKSYEAR1[1]', '$BX_EKSYEAR2[1]', '$BX_EKSYEAR3[1]', '$BX_ESYEAR1[2]', '$BX_ESYEAR2[2]', '$BX_ESYEAR3[2]', '$BX_EKSYEAR1[2]', '$BX_EKSYEAR2[2]', '$BX_EKSYEAR3[2]', '$BX_ESYEAR1[3]', '$BX_ESYEAR2[3]', '$BX_ESYEAR3[3]', '$BX_EKSYEAR1[3]', '$BX_EKSYEAR2[3]', '$BX_EKSYEAR3[3]', '$BX_ESYEAR1[4]', '$BX_ESYEAR2[4]', '$BX_ESYEAR3[4]', '$BX_EKSYEAR1[4]', '$BX_EKSYEAR2[4]', '$BX_EKSYEAR3[4]', '$BX_ESYEAR1[5]', '$BX_ESYEAR2[5]', '$BX_ESYEAR3[5]', '$BX_EKSYEAR1[5]', '$BX_EKSYEAR2[5]', '$BX_EKSYEAR3[5]')") or die(mysql_error());
				mysql_query("INSERT INTO proion (user_id, agatho1, agatho2, agatho3, agatho4, agatho5, katagatho1, katagatho2, katagatho3, katagatho4, katagatho5, ag1yeares1, ag1yeares2, ag1yeares3, ag1yeareks1, ag1yeareks2 , ag1yeareks3, ag2yeares1, ag2yeares2, ag2yeares3, ag2yeareks1, ag2yeareks2 , ag2yeareks3, ag3yeares1, ag3yeares2, ag3yeares3, ag3yeareks1, ag3yeareks2 , ag3yeareks3, ag4yeares1, ag4yeares2, ag4yeares3, ag4yeareks1, ag4yeareks2 , ag4yeareks3, ag5yeares1, ag5yeares2, ag5yeares3, ag5yeareks1, ag5yeareks2 , ag5yeareks3) VALUES ('$userid', '$BX_NAME[0]', '$BX_NAME[1]', '$BX_NAME[2]','$BX_NAME[3]','$BX_NAME[4]', '$BX_gender[0]', '$BX_gender[1]', '$BX_gender[2]','$BX_gender[3]','$BX_gender[4]', '$BX_ESYEAR1[0]', '$BX_ESYEAR2[0]', '$BX_ESYEAR3[0]', '$BX_EKSYEAR1[0]', '$BX_EKSYEAR2[0]', '$BX_EKSYEAR3[0]', '$BX_ESYEAR1[1]', '$BX_ESYEAR2[1]', '$BX_ESYEAR3[1]', '$BX_EKSYEAR1[1]', '$BX_EKSYEAR2[1]', '$BX_EKSYEAR3[1]', '$BX_ESYEAR1[2]', '$BX_ESYEAR2[2]', '$BX_ESYEAR3[2]', '$BX_EKSYEAR1[2]', '$BX_EKSYEAR2[2]', '$BX_EKSYEAR3[2]', '$BX_ESYEAR1[3]', '$BX_ESYEAR2[3]', '$BX_ESYEAR3[3]', '$BX_EKSYEAR1[3]', '$BX_EKSYEAR2[3]', '$BX_EKSYEAR3[3]', '$BX_ESYEAR1[4]', '$BX_ESYEAR2[4]', '$BX_ESYEAR3[4]', '$BX_EKSYEAR1[4]', '$BX_EKSYEAR2[4]', '$BX_EKSYEAR3[4]')") or die(mysql_error());
				$query3 = mysql_query("update users set number='$a' where id='$userid'",$con) or die(mysql_error($con)); 
				header("location: index.php?success");
				mysql_close($con);
				exit;
				}
?>
					
					




