
<?php 

	$uname=$_POST["uname"];
	$pass=$_POST["pass"];
	$flag=0;
	
	$xml = simplexml_load_file("userdetails.xml");
	
	foreach($xml->children() as $user){
		if($user->name==$uname && $user->password==$pass){
			$flag=1;
		}
				
	}
	
	if($flag==1){
		header("Location: success.html");
	}else{
		echo "wrong";
		
	}


?>