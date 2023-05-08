<?php
$host='localhost:3306';
$uname="root";
$pass="";
$conn=mysqli_connect($host,$uname,$pass);
if(!$conn) {

    die("The Connection is not Connect");
}
echo "Successfully Connected";

$sql="create databse mydb";
mysqli_query($conn,$sql);

$table1="create table student";



mysqli_close($conn)
?>