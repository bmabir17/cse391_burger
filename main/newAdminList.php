<?php
session_start();

if (isset($_SESSION['login_super_admin']) && $_SESSION['login_super_admin']) {
    var_dump($_SESSION);
} else {
    header('refresh:1; url=login.php');
}

require_once 'su_header.php';

include_once 'db.php';

$data = null;

$query = "SELECT * FROM admin_reg";

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
            <div class="panel-heading">List of new Admin Registration</div>
            <div class="panel-body">

            </div>


            <!-- Table -->
            <table class="table table-bordered">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Username</th>
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
                            <td><?php echo $value['Email']; ?></td>
                            <td><?php echo $value['UserName']; ?></td>
                            <td>
                                <a href="confirmAdmin.php\?id=<?php echo $value['U_ID']; ?>"> <input type="button" value="Confirm" />   </a>
                                <a href="delete.php\?id=<?php echo $value['U_ID']; ?>"> <input type="button" value="DELETE" /></a>
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