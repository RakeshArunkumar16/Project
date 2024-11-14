<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location:  http://localhost/food/pages/examples/userlogin.php");
exit(); }
?>