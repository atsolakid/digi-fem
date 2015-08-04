<?php
session_start();

if ($_SESSION['check'] != md5($_SERVER['HTTP_USER_AGENT'] . PHRASE . $_SERVER['REMOTE_ADDR'])) {       
    session_destroy();
    header('Location: ../index.php?forbidden');
    exit();     
}

include('../connection/connection.php');
$login_session = $_SESSION['login_user'];

$sqlu = "select * from users where username='$login_session'";
$resultu = mysql_query($sqlu, $con);
$row = mysql_fetch_assoc($resultu);
$number=$row['number'];
$id=$row['id'];
$sqlp = "select * from proion where user_id='$id'";
$resultp = mysql_query($sqlp, $con);
$row1 = mysql_fetch_assoc($resultp);
$agatho1 = $row1['agatho1'];
$agatho2 = $row1['agatho2'];
$agatho3 = $row1['agatho3'];
$agatho4 = $row1['agatho4'];
$agatho5 = $row1['agatho5'];
$katagatho1 = $row1['katagatho1'];
$katagatho2 = $row1['katagatho2'];
$katagatho3 = $row1['katagatho3'];
$katagatho4 = $row1['katagatho4'];
$katagatho5 = $row1['katagatho5'];
$ag1yeares1 = $row1['ag1yeares1'];
$ag1yeares2 = $row1['ag1yeares2'];
$ag1yeares3 = $row1['ag1yeares3'];
$ag1yeareks1 = $row1['ag1yeareks1'];
$ag1yeareks2 = $row1['ag1yeareks2'];
$ag1yeareks3 = $row1['ag1yeareks3'];
$ag2yeares1 = $row1['ag2yeares1'];
$ag2yeares2 = $row1['ag2yeares2'];
$ag2yeares3 = $row1['ag2yeares3'];
$ag2yeareks1 = $row1['ag2yeareks1'];
$ag2yeareks2 = $row1['ag2yeareks2'];
$ag2yeareks3 = $row1['ag2yeareks3'];
$ag3yeares1 = $row1['ag3yeares1'];
$ag3yeares2 = $row1['ag3yeares2'];
$ag3yeares3 = $row1['ag3yeares3'];
$ag3yeareks1 = $row1['ag3yeareks1'];
$ag3yeareks2 = $row1['ag3yeareks2'];
$ag3yeareks3 = $row1['ag3yeareks3'];
$ag4yeares1 = $row1['ag4yeares1'];
$ag4yeares2 = $row1['ag4yeares2'];
$ag4yeares3 = $row1['ag4yeares3'];
$ag4yeareks1 = $row1['ag4yeareks1'];
$ag4yeareks2 = $row1['ag4yeareks2'];
$ag4yeareks3 = $row1['ag4yeareks3'];
$ag5yeares1 = $row1['ag5yeares1'];
$ag5yeares2 = $row1['ag5yeares2'];
$ag5yeares3 = $row1['ag5yeares3'];
$ag5yeareks1 = $row1['ag5yeareks1'];
$ag5yeareks2 = $row1['ag5yeareks2'];
$ag5yeareks3 = $row1['ag5yeareks3'];

$sqly = "select * from yphresies where user_id='$id'";
$resulty = mysql_query($sqly, $con);
$rowy = mysql_fetch_assoc($resulty);
$ika1 = $rowy['ika1'];
$ika2 = $rowy['ika2'];
$ika3 = $rowy['ika3'];
$deh1 = $rowy['deh1'];
$deh2 = $rowy['deh2'];
$deh3 = $rowy['deh3'];
$thl1 = $rowy['thl1'];
$thl2 = $rowy['thl2'];
$thl3 = $rowy['thl3'];
?>