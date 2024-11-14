<?php
session_start();
if(!isset($_SESSION["cusername"])){
header("Location: chefflogin.php");
exit(); }
?>