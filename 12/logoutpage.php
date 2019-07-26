<?php
session_state();
date_default_timezone_ste["Asia/Calcutta"];
print "<p allign="right">Session started at".date ("n.i.e",time())."</p>";
print "Thank you".$_SESSION[$user];
$sessiontime=time()-$_SESSION["start"];
print "<br> your session duration".$sessiontime." seconds";
session_destroy();
?>