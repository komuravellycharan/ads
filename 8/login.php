<?php 
session_start();

if(isset($_POST["submit"])){
	$username=$_POST["uname"];
	$password=$_POST["pass"];
	
	$con=mysql_pconnect("localhost","root","");
	$db=mysql_select_db("test",$con);
	$query="select * from user_details where username='$username' and password='$password'";
	$records=mysql_query($query,$con);
	if(mysql_num_rows($records)==1){
		$row=mysql_fetch_assoc($records);
		
		$_SESSION["username"]=$username;
		$_SESSION["password"]=$password;
		$_SESSION["fullname"]=$row["fullname"];
		header("Location:welcome.php");
	}else {
		$query="select * from user_details where username='$username'";
		$records=mysql_query($query,$con);
		if(mysql_num_rows($records)==1){
			header("Location:mismatch.html");
		}else{
			$_SESSION["username"]=$username;
			$_SESSION["password"]=$password;
			header("Location:reg.php");
		}
	}
}

?>