<?php
session_start();
if(!isset($_SESSION["dusername"])){
header("Location:  http://localhost/food/pages/examples/deliverylogin.php");
exit(); }
?>