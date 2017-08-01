<?php
/**
 * Created by PhpStorm.
 * User: bmabi
 * Date: 8/1/2017
 * Time: 1:48 AM
 */

require_once 'db.php';
extract($_POST);
$item_id_arr=json_decode($item_id);
if(!$con){
    echo 'db error';
}else{
    echo $item_id_arr[0];
    echo $total_price;
    echo $quant;

    $order_state=0; //Zero means unprocessed order
    $sql="INSERT INTO `order`(`total_price`, `quantity`, `o_state`,`placement_time`) VALUES ($total_price,$quant,$order_state,now())";
    if ($con->query($sql) === TRUE) {
        echo "New order record created successfully";
        $order_id= $con->insert_id;
        foreach ($item_id_arr as $item){
            echo $item;
            //$item=$item_id_arr[$i];
            $sql="INSERT INTO cart (O_ID,I_ID) VALUES ($order_id,$item)";
            if ($con->query($sql) === TRUE) {
                echo "New item record created successfully";
            }else{
                echo "Error: " . $sql . "<br>" . $con->error;
            }
        }

        //Show the Order Result to the user
        $sql = "SELECT * FROM `order` JOIN `cart`ON `order`.`O_ID`=`cart`.`O_ID` JOIN `item` ON `item`.`I_ID`=`cart`.`I_ID` WHERE `order`.`O_ID`='$order_id';";
        $result = $con->query($sql);

        $num_result = $result->num_rows;

        if ($num_result > 0) {

            while ($rows = $result->fetch_assoc()) {

                $data[] = $rows;

            }
        }



    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

}
?>

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
