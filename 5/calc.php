<?php 

if(isset($_POST["submit"]) && isset($_POST["op1"]) && isset($_POST["op2"]) && isset($_POST["operator"])){
	$op1=(int)$_POST["op1"];
	$op2=(int)$_POST["op2"];
	$operator=$_POST["operator"];
	
	$con=mysql_pconnect("localhost","root","");
	$db=mysql_select_db("test1",$con);
echo "sucess";
	$query="select * from computation_data where op1='$op1' and op2='$op2' and operator='$operator'";

	$record=mysqli_query($query,$db);
	if(mysql_num_rows($record)==1){
		$result=mysql_fetch_assoc($record);
		echo $op1." ".$operator." ".$op2." = ".$result["result"];
		
	}else{
		if($operator=="+"){
			$ans=$op1+$op2;
			echo $op1." ".$operator." ".$op2." = ".$ans;
		}else if($operator=="-"){
			$ans=$op1-$op2;
			echo $op1." ".$operator." ".$op2." = ".$ans;
		}else if($operator=="*"){
			$ans=$op1*$op2;
			echo $op1." ".$operator." ".$op2." = ".$ans;
		}else if($operator=="/"){
			if($op2!=0){
				$ans=$op1/$op2;	
				echo $op1." ".$operator." ".$op2." = ".$ans;
			}else{
				$ans=0;
			}
		}else if($operator=="%"){
			$ans=$op1%$op2;
			echo $op1." ".$operator." ".$op2." = ".$ans;
		}
		$query="insert into computation_data(`op1`,`op2`,`operator`,`result`) values('$op1','$op2','$operator','$ans')";
		mysql_query($query,$con);
		
	}
}

?>