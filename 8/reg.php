<?php 
session_start();
$username=$_SESSION["username"];
$password=$_SESSION["password"];

if(isset($_POST["submit"]) && isset($_POST["fullname"])){
	$fullname=$_POST["fullname"];
	$_SESSION["fullname"]=$fullname;
	
	$con=mysql_pconnect("localhost","root","");
	$db=mysql_select_db("test",$con);
	$query="insert into user_details(`username`,`password`,`fullname`) values('$username','$password','$fullname')";
	$records=mysql_query($query,$con);
	header("Location:welcome.php");
}

?>
<html>
<body>
<form method="POST" action="" >
Enter Your Fullname:<br />
<input type="text" name="fullname" /><br />
<input type="submit" value="Submit" name="submit" />
</form>
</body>
</html>