<?php
session_start();
$_SESSION["username"] = '';
$_SESSION["accesslevel"] = '';
session_commit();
header("Location: index.php");
?>
