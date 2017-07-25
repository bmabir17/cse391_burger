<?php
include_once 'db.php';
//$config['base_url'] = 'http://localhost/frame/';

$name=$_POST['name'];
//var_dump($name);
$price=$_POST['price'];
$quantity=$_POST['quantity'];
$catagory=$_POST['catagory'];
$item_id=$_POST['id'];
//$image=$_POST['fileupload'];
//$image_dir=$['fileupload'];

echo "$name";
echo "$price";
echo  "$catagory";
//echo "$image";
if (!$con){
    die("connection failed" .mysqli_connect_error());
}

$delete_item="UPDATE item
SET Name = '$name', catagory= '$catagory',price='$price', quantity='$quantity'
WHERE I_ID = '$item_id'";

if(mysqli_query($con, $delete_item)){
    echo "item updated  successfully";
}
else{
    echo "Error: ". $delete_item . "<br>" . mysqli_error($con);
}



