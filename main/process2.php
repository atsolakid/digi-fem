			<?php 
				session_start();
				include('../connection/connection.php');
				$_SESSION['POSTDATA'] = $_POST;
				$login_session = $_SESSION['login_user'];
				
//				header('Location: ' . $uri);
	
				$BX_IKA1=$_POST['BX_IKA1'];
				$BX_IKA2=$_POST['BX_IKA2'];
				$BX_IKA3=$_POST['BX_IKA3'];					
				
			
				foreach($BX_IKA1 as $a => $b){ 
					$a = $a+1;
					}
					
				$sqlu = "select * from users where username='$login_session'";
				$resultu = mysql_query($sqlu, $con);
				$row = mysql_fetch_assoc($resultu);
				$userid = $row['id'];
				$userid = intval($userid);
				$number=$row['number'];
				$sqly = "select * from yphresies where user_id='$userid'";
				$resulty = mysql_query($sqly, $con);
				$rowy = mysql_fetch_assoc($resulty);
				if (isset($rowy['user_id']) )
				{
				$query = mysql_query("update yphresies set ika1='$BX_IKA1[0]',ika2='$BX_IKA2[0]',ika3='$BX_IKA3[0]',deh1='$BX_IKA1[1]',deh2='$BX_IKA2[1]',deh3='$BX_IKA3[1]',thl1='$BX_IKA1[2]',thl2='$BX_IKA2[2]',thl3='$BX_IKA3[2]' where user_id='$userid'",$con) or die(mysql_error($con)); 
				header("location: index.php?sectbsuccess1");
				mysql_close($con);
				exit;

				}else 
				{
				
					//			mysql_query("INSERT INTO proion (user_id, agatho1, agatho2, agatho3, agatho4, agatho5, katagatho1, katagatho2, katagatho3, katagatho4, katagatho5, ag1yeares1, ag1yeares2, ag1yeares3, ag1yeareks1, ag1yeareks2 , ag1yeareks3, ag2yeares1, ag2yeares2, ag2yeares3, ag2yeareks1, ag2yeareks2 , ag2yeareks3, ag3yeares1, ag3yeares2, ag3yeares3, ag3yeareks1, ag3yeareks2 , ag3yeareks3, ag4yeares1, ag4yeares2, ag4yeares3, ag4yeareks1, ag4yeareks2 , ag4yeareks3, ag5yeares1, ag5yeares2, ag5yeares3, ag5yeareks1, ag5yeareks2 , ag5yeareks3) VALUES ('$userid', '$BX_NAME[0]', '$BX_NAME[1]', '$BX_NAME[2]','$BX_NAME[3]','$BX_NAME[4]', '$BX_gender[0]', '$BX_gender[1]', '$BX_gender[2]','$BX_gender[3]','$BX_gender[4]', '$BX_ESYEAR1[0]', '$BX_ESYEAR2[0]', '$BX_ESYEAR3[0]', '$BX_EKSYEAR1[0]', '$BX_EKSYEAR2[0]', '$BX_EKSYEAR3[0]', '$BX_ESYEAR1[1]', '$BX_ESYEAR2[1]', '$BX_ESYEAR3[1]', '$BX_EKSYEAR1[1]', '$BX_EKSYEAR2[1]', '$BX_EKSYEAR3[1]', '$BX_ESYEAR1[2]', '$BX_ESYEAR2[2]', '$BX_ESYEAR3[2]', '$BX_EKSYEAR1[2]', '$BX_EKSYEAR2[2]', '$BX_EKSYEAR3[2]', '$BX_ESYEAR1[3]', '$BX_ESYEAR2[3]', '$BX_ESYEAR3[3]', '$BX_EKSYEAR1[3]', '$BX_EKSYEAR2[3]', '$BX_EKSYEAR3[3]', '$BX_ESYEAR1[4]', '$BX_ESYEAR2[4]', '$BX_ESYEAR3[4]', '$BX_EKSYEAR1[4]', '$BX_EKSYEAR2[4]', '$BX_EKSYEAR3[4]', '$BX_ESYEAR1[5]', '$BX_ESYEAR2[5]', '$BX_ESYEAR3[5]', '$BX_EKSYEAR1[5]', '$BX_EKSYEAR2[5]', '$BX_EKSYEAR3[5]')") or die(mysql_error());
				mysql_query("INSERT INTO yphresies (user_id, ika1, ika2, ika3, deh1, deh2, deh3, thl1, thl2, thl3) VALUES ('$userid', '$BX_IKA1[0]', '$BX_IKA2[0]', '$BX_IKA3[0]', '$BX_IKA1[1]', '$BX_IKA2[1]', '$BX_IKA3[1]', '$BX_IKA1[2]', '$BX_IKA2[2]', '$BX_IKA3[2]')") or die(mysql_error());
				header("location: index.php?sectbsuccess");
				mysql_close($con);
				exit;
				}
?>
					
					




