<?php 
if(isset($_POST["submit"])){
	$age=$_POST["age"];
	$name=$_POST["name"];
	if($age<18){
		echo "<h3 style='color:red;'>Hello ".$name." you are not authorized to visit this site</h3>";
	}else{
		echo "<h3 style='color:green;'>Welcome to this site ".$name."</h3>";
	}
}

?>