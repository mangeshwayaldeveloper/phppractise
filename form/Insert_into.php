<?php
$host='localhost:3306';
$user='root';
$pass='';
$db='chu';
$conn=mysqli_connect($host,$user,$pass,$db);
if (!$conn){
    die("Not Connected to the database");
}else{
    echo "Connected Successfully";
}

$sql="INSER INTO customers (first_name,last_name,email) VALUES('mangesh','wayal','mangeshwayal@gmail.com')";
mysqli_query($conn,$sql);

if (mysqli_query($conn,$sql)){
    echo "data is inserted";
}else{
    echo "data is not inserted";
}
mysqli_close($conn);