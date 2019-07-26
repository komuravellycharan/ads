<?
$Firstname='aaa';
$Middlename='bbb';
$Lastname='ccc';
SetCookie('First name',$Firstname,time()+86400);
SetCookie('Middle name',$Middlename,time()+86400);
SetCookie('Last name',$Lastname,time()+86400);
print "cookies set";
?>