<?php
if(!empty($_COOKIE)){
for each($_COOOKIE as $key=$val){
echo $key "is" $val"<br>\n";
}
}
else{
echo "Here are no cookies, You must set cookies";
}
?>