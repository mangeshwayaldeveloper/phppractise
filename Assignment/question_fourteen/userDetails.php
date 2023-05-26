<?php
session_start();
if(isset($_POST['sub'])){
    $_SESSION['name']=$_POST['name'];
    $_SESSION['loginTime']=time();
    header('location:login_form.php');

}
?>