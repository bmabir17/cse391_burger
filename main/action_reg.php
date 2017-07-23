

<?php
include_once 'db.php';
$name=$_POST['name'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];

$password=md5($password);

//echo "$name";
//echo "$email";
//echo  "$username";
//echo "$password";

$sql = "INSERT INTO admin_reg (Name, Email,UserName,Password)
VALUES ('$name','$email', '$username', '$password')";

if ($con->query($sql) === TRUE) {
    echo "<h2>New record created successfully</h2>";

    echo "<h4>redirecting to login page</h4>";
    //header('Location:http://localhost/cse391/burger/main/login.php');
    header('refresh:3; url=login.php');
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}



?>