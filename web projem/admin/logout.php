<?php
session_start();
unset($_SESSION["kullanıcı_adı"]);
session_unset();
$_SESSION=array();
session_destroy();
header("location:login.php");
?>