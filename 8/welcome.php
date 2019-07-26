<?php 
session_start();
$fullname=$_SESSION["fullname"];
echo "<h2 style='color:green;'>WELCOME : ".$fullname."</h2>";
?>