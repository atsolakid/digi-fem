



    <?php

    $mysql_hostname = "";

    $mysql_user = "";

    $mysql_password = "";

    $mysql_database = "admin_web-app";

    $prefix = "";

    $con = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");

    $bd = mysql_select_db($mysql_database, $con) or die("Could not select database");

	

    ?>
