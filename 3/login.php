<?php 

	$uname=$_GET["uname"];
	$pass=$_GET["pass"];
	
	$con=mysqli_connect("localhost","root","","new");
	
	$query="select * from users1 where username='$uname' and password='$pass'";
	$records=mysqli_query($con,$query);
	if(mysqli_num_rows($records)>=1)
	{
		echo "welcome";
	}else{
		echo "wrong credentials";
	}

?>