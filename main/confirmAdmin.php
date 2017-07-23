<?php
/**
 * Created by PhpStorm.
 * User: bmabi
 * Date: 7/23/2017
 * Time: 12:31 AM
 */

session_start();

if (isset($_SESSION['login_super_admin']) && $_SESSION['login_super_admin']) {
    var_dump($_SESSION);
} else {
    header('refresh:1; url=login.php');
}


include_once 'db.php';
$data = null;
$user_id = $_GET['id'];
$user_id = $con->real_escape_string($user_id);

$query = "SELECT Name,Email,UserName,Password FROM admin_reg WHERE U_ID=$user_id";
$result = $con->query($query);

$num_result = $result->num_rows;

if ($num_result > 0) {

    while ($rows = $result->fetch_assoc()) {

        $data[] = $rows;
        //echo $data[0]['Name'];
        $name=$data[0]['Name'];
        $email=$data[0]['Email'];
        $username=$data[0]['UserName'];
        $password=$data[0]['Password'];
        echo $name;
        echo $email;
        echo $username;
        echo $password;
        $sql = "INSERT INTO admin (Name, Email,Username,Password) VALUES ('$name','$email', '$username', '$password')";
        if ($con->query($sql) === TRUE) {
            echo "<h2>New Admin Added successfully</h2>";

            echo "<h4>redirecting to Confirmation List</h4>";
            echo "<a href='newAdminList.php'>If not then click here</a>";
            //header('Location:http://localhost/cse391/burger/main/login.php');
            header('refresh:3; url=/cse391/burger/main/newAdminList.php');
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }

}

?>