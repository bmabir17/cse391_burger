<?php
/**
 * Created by PhpStorm.
 * User: bmabi
 * Date: 8/1/2017
 * Time: 1:17 PM
 */

require_once 'db.php';


if(!$con){
    echo 'db error';
}else {

    $sql = "SELECT * FROM `order` JOIN `cart`ON `order`.`O_ID`=`cart`.`O_ID` JOIN `item` ON `item`.`I_ID`=`cart`.`I_ID`;";
    $result = $con->query($sql);

    $num_result = $result->num_rows;

    if ($num_result > 0) {

        while ($rows = $result->fetch_assoc()) {

            $data[] = $rows;

        }
    }

}

?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    <div class="container">
    <div class="row">
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Order Confirmation</div>
            <div class="panel-body">

            </div>


            <!-- Table -->
            <table class="table table-bordered">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Order ID</th>
                    <th>Total Pric</th>
                </tr>
                <?php
                    $counter_list = 1;
                    if ($data != null):
                        foreach ($data as $value):
                            ?>
                            <tr>
                                <td><?php echo $counter_list; ?></td>
                                <td><?php echo $value['Name']; ?></td>
                                <td><?php echo $value['O_ID']; ?></td>
                                <td><?php echo $value['total_price']; ?></td>


                            </tr>
                            <?php
                            $counter_list++;
                        endforeach;
                    endif;
                ?>

            </table>
        </div>
    </div>
    </div>
    </body>
</html>
