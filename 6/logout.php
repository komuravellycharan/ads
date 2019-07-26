<?php 
session_start();
$user=$_SESSION["name"];
$stime=$_SESSION["stime"];
$usedtime=time()-$stime;
echo "Thank You ".$user."<br />";
echo "Usage Time : ".$usedtime." secs";
session_destroy();

?>