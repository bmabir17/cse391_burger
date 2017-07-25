<?php
session_start();
include_once 'db.php';
require_once 'admin_header.php';

$item_id=$_GET['id'];
$item_id = $con->real_escape_string($item_id);


//echo $item_id; 

$deleteinfo3="DELETE FROM item
WHERE `I_ID`='$item_id'";
if(mysqli_query($con, $deleteinfo3)){
	echo "item deleted  successfully";
}
else{
	echo "Error: ". $deleteinfo3 . "<br>" . mysqli_error($con);
}
?>
