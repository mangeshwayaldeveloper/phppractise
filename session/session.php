<?php
setcookie("uname","mangesh",time()+86400);
if(isset($_COOKIE["uname"]))
{
    echo "cookies set with value".$_COOKIE["uname"];
}else{
    echo "cookie is not set";
}
?>