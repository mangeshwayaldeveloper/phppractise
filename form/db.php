<?php
$host='localhost:3306';
$uname="root";
$pass="";
$conn=mysqli_connect($host,$uname,$pass);
if(!$conn) {

    die("The Connection is not Connect");
}
echo "Successfully Connected";

$sql="CREATE DATABASE empl";
mysqli_query($conn,$sql);

// Insert data
$sql = "INSERT INTO emp (name, salary) VALUES ('dy patil', 69000)";


if (mysqli_query($conn, $sql)) {
    echo 'Data inserted successfully<br>';
} else {
    echo 'Error inserting data: ' . mysqli_error($conn) . '<br>';
}


mysqli_close($conn)
?>