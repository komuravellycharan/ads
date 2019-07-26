<?php
// Setting a cookie
setcookie("username", "John Carter", time()+30*24*60*60);
if(isset($_COOKIE["username"])){
    echo "Hi " . $_COOKIE["username"];
} else{
    echo "Welcome Guest!";
}

?>