<?php 
session_start();
$_SESSION["name"]=$_POST["name"];
$_SESSION["stime"]=time();

$user=$_SESSION["name"];
$stime=$_SESSION["stime"];

echo "<h3>HELLO ".$user."</h3>";
echo "<p>START TIME :".date('H:i:s', time())."</p>";
?>
<?php

if(isset($_POST["logout"])){
	header("Location: logout.php");
}

?>
<html>
<head>
<style>
h3{
	color:red;
	margin:0px;
	padding:0px;
	display:inline;
}
p{
	display:inline;
	color:green;
	font-size:20px;
	margin:0px;
	padding:0px;
	font-weight:bolder;
	float:right;
}
#btn{
	width:150px;
	height:50px;
	background-color:bisque;
	color:black;
	border-radius:10px;
	margin:10px;
}
#btn:hover{
	background-color:black;
	color:bisque;
}
</style>
</head>
<body>
<form method="POST" action="logout.php" >
<input type="submit" name="logout" value="Logout"/>
</form>
</body>
</html>

