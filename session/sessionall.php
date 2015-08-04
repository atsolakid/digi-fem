<?php
session_start();
if ($_SESSION['check'] != md5($_SERVER['HTTP_USER_AGENT'] . PHRASE . $_SERVER['REMOTE_ADDR'])) {       
    session_destroy();
    header('Location: ../index.php?forbidden');
    exit();     
}
$login_session = $_SESSION['login_user'];
?>