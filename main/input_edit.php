<?php
session_start();
include_once 'db.php';
require_once 'admin_header.php';

//$name=$_POST['name'];//var_dump($name);
//$price=$_POST['price'];
//$quantity=$_POST['quantity'];
//$catagory=$_POST['catagory'];
//var_dump('id')
//echo $_POST['id'];
//$item_id = isset($_GET['id']) ? $_GET['id'] : '';
$item_id=$_GET['id'];
$item_id = $con->real_escape_string($item_id);

//echo $item_id ;
$item="SELECT `name`,`catagory`,`price`,`quantity`, `image_dir`FROM `item` WHERE I_ID='$item_id'";
$iteminfo=$con->query($item);
if($iteminfo->num_rows>0){
    //output data of each row
    while($row=mysqli_fetch_array($iteminfo)){
        $item_name=$row['name'];
        $catagory=$row['catagory'];
        $price=$row['price'];
        $quantity=$row['quantity'];
        $image=$row['image_dir'];
        //$id=$row['I_ID'];
    
    }
}
//echo $item_name ;
//echo $catagory;


?>

<h2>Edit Item</h2>
<form class="form-horizontal" action="http://localhost/cse391/burger/main/input_edit_action.php" method="POST"  enctype="multipart/form-data">
     <div class="form-group">
         <input type="hidden" value="<?php echo $item_id ?>" name="id" >
     </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="Name" >Name:</label>
        <div class="col-sm-10">
            <input type="name" value="<?php echo $item_name  ?>" class="form-control" id="name"  placeholder="Enter Name" name="name">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="price">Price:</label>
        <div class="col-sm-10">
            <input type="price" value="<?php echo $price ?>" class="form-control" id="price" placeholder="Enter price" name="price">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="quantity">Quantity:</label>
        <div class="col-sm-10">
            <input type="price" value="<?php echo $quantity ?>" class="form-control" id="quantity" placeholder="Enter price" name="quantity">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="catagory">Catagory:</label>
        <div class="col-sm-10">
            <select name="catagory" value="<?php echo $catagory ?>">
                <option value="bun">bun</option>
                <option value="sause">Sause</option>
                <option value="chesse">cheese</option>
                <option value="topings">Topings</option>
                <option value="topings">Meats</option>

            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="Image">Upload A Image:</label>
        <div class="col-sm-10">
            <input type="file" value="<?php echo $image_dir ?>"  name="fileupload" id="fileupload" >
            <label for="fileupload"></label>
            <br><!-- input type="image" src="/wp-content/uploads/sendform.png" alt="Submit" width="100"> -->
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <input type="submit" class="btn btn-default">Submit</input>
        </div>
    </div>
</form>

<?php 
    include_once 'footer.php'; 
?>



