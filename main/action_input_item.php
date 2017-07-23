<?php
include_once 'db.php';
//$config['base_url'] = 'http://localhost/frame/';
$target_dir='images/';
$target_file=$target_dir.basename($_FILES['fileupload']['name']);
$uploadOK=1;
$imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOK = 0;
}
//Check if image or not
if(isset($_POST['submit'])){
    $check=getimagesize($_FILES['fileupload']['temp_name']);
    if($check !=false){
        echo 'File is an image -'.$check['mime'].'.';
        $uploadOK=1;
    }else{
        echo 'File is not a image';
        $uploadOK=0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOK = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOK == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES['fileupload']['tmp_name'], $target_file)) {
        echo "The file ". basename( $_FILES["fileupload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

echo $target_file;
echo $imageFileType;
var_dump($_POST);
$name=$_POST['name'];
var_dump($name);
$price=$_POST['price'];
$quantity=$_POST['quantity'];
$catagory=$_POST['catagory'];
//$image=$_POST['fileupload'];

echo "$name";
echo "$price";
echo  "$catagory";
//echo "$image";

$sql = "INSERT INTO item (Name, catagory,price,quantity, image_dir)
VALUES ('$name','$catagory', '$price', '$quantity','$target_file')";

if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}



?>