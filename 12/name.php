<?php
session_start();
date_default_timezone_set("asia/calcutta");
$_SESSION['start']=time();
$tm=$_SESSION['start'];
print "<align='right'>Session started at date".date("n.i.e",$tm)."<ur>";
print "<form action="logoutpage.php" method="POST">;
print"</form>";
print"Hello",$_SESSION[$user];
?>