
<?php
session_start();
include_once 'admin_header.php'
?>

<h2>Add new Item</h2>
<form class="form-horizontal" method="post" action="action_input_item.php" enctype="multipart/form-data">
    <div class="form-group">
        <label class="control-label col-sm-2" for="Name" >Name:</label>
        <div class="col-sm-10">
            <input type="name" class="form-control" id="name" placeholder="Enter Name" name="name">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="price">Price:</label>
        <div class="col-sm-10">
            <input type="price" class="form-control" id="price" placeholder="Enter price" name="price">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="quantity">Quantity:</label>
        <div class="col-sm-10">
            <input type="price" class="form-control" id="quantity" placeholder="Enter price" name="quantity">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="catagory">Catagory:</label>
        <div class="col-sm-10">
            <select name="catagory">
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
            <input type="file" name="fileupload" id="fileupload" >
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
</div>


