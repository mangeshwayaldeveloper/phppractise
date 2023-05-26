<?php
include "formInHtml.html";
if(isset($_POST['sub'])){

$username = $_POST['uname'];
$password = $_POST['pass'];

echo "Hello $username have login successfully";
}

?>