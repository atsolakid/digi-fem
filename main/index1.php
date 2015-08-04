<?php
include('../session/sessionall.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="../css/login.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<div id="profile">
<b id="welcome" style="background:red;">Welcomehello  : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="../login/logout.php">Log Out</a></b>
</div>
</body>
</html>