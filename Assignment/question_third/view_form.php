<?php
$host = "localhost:3306";
$username = "root";
$password = "";
$databasename = "student";
$conn = mysqli_connect($host, $username, $password, $databasename);
//if (!$conn) {
//    die("Unable to connect with database");
//} else {
//    echo "sucessfully connected with database";
//}
$firstName = $_POST['fname'];
$LastName = $_POST['lname'];
$courseName = $_POST['course'];
$collegeName = $_POST['clname'];

try {
    if (!empty($firstName) && !empty($LastName) && !empty($courseName) && !empty($collegeName)) {
        $sql = "INSERT INTO tb (fname,lname,course,college) VALUES (?, ?,?,?)";
        $stmt=mysqli_prepare($conn,$sql);
        mysqli_stmt_bind_param($stmt,"ssss",$firstName,$LastName,$courseName,$collegeName);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
//        if (mysqli_stmt_affected_rows($stmt)>0) {
//            echo "Data inserted successfully<br>";
//        } else {
//            echo "Error";
//        }
    }else {
        header("Location:php_form.php?error=All fields are mandatory");
        echo "All Fields are required";
        exit;
    }
}catch (Exception $e){
    echo $e->getMessage();
}


//fecthing data
$sql="SELECT * FROM tb";
$result=$conn->query($sql);
if ($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        $firstName=$row["fname"];
        $LastName=$row["lname"];
        $courseName=$row["course"];
        $collegeName=$row["college"];
        echo "<h4>Student Record $count</h4><br>";
        echo "First Name: " . $firstName . "<br>";
        echo "Last Name: " . $LastName . "<br>";
        echo "Course: " . $courseName . "<br>";
        echo "College: " . $collegeName . "<br>";
        echo "<br>";
    }
}else{

    echo "no data found";

}
mysqli_close($conn);
?>
