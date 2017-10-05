<?php
/**
 * Created by PhpStorm.
 * User: bmabi
 * Date: 7/22/2017
 * Time: 10:47 PM
 */
session_start();
if(isset($_POST['username']) && isset($_POST['password'])){
    require_once 'db.php';
    extract($_POST);

    //echo $username;
    //echo $password;

    $username=$con->real_escape_string($username); //For security
    $password=$con->real_escape_string($password); //For security

    $password=md5($password);
    $sql = "SELECT * FROM admin  WHERE Username='$username' AND Password='$password'  ";

    $result = mysqli_query($con, $sql);

    $sql_su = "SELECT * FROM superadmin  WHERE uName='$username' AND password='$password'  ";
    $result_su = mysqli_query($con, $sql_su);
    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        $_SESSION['login_admin'] = true;
        $_SESSION['name'] = $data['Username'];
        header('refresh:1; url=listitem.php');
    } elseif ($result_su->num_rows > 0){
        $data = $result_su->fetch_assoc();
        $_SESSION['login_super_admin'] = true;
        $_SESSION['name'] = $data['uName'];
        header('refresh:1; url=superAdmin.php');

    }else{
        echo 'Login Failed.';
        header('refresh:1; url=start.php');
    }


}

//$userName=$_POST['username'];
//$passWord=$_POST['password'];
