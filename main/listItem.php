<?php
session_start();

if (isset($_SESSION['login_admin']) && $_SESSION['login_admin']) {
    var_dump($_SESSION);
} else {
    header('refresh:1; url=login.php');
}

require_once 'admin_header.php';

include_once 'db.php';

$data = null;

$query = "SELECT * FROM item";

$result = $con->query($query);

$num_result = $result->num_rows;

if ($num_result > 0) {

    while ($rows = $result->fetch_assoc()) {

        $data[] = $rows;
    }
}

?>

    <div class="row">
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">List of Items That Are available</div>
            <div class="panel-body">

            </div>


            <!-- Table -->
            <table class="table table-bordered">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Catagory</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
                <?php
                $counter_list = 1;
                if ($data != null):
                    foreach ($data as $value):
                        ?>
                        <tr>
                            <td><?php echo $counter_list; ?></td>
                            <td><?php echo $value['Name']; ?></td>
                            <td><?php echo $value['catagory']; ?></td>
                            <td><?php echo $value['price']; ?></td>
                            <td><?php echo $value['quantity'];?></td>
                            <td>
                                <a href="edit.php\?id=<?php echo $value['id']; ?>"> <input type="button" value="EDIT" />   </a>
                                <a href="delete.php\?id=<?php echo $value['id']; ?>"> <input type="button" value="DELETE" /></a>
                            </td>

                        </tr>

                        <?php
                        $counter_list++;
                    endforeach;
                endif;
                ?>

            </table>
        </div>
    </div>

<?php

require_once 'footer.php';
?>