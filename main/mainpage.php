<?php
    include_once 'db.php';
    $sql="SELECT * FROM `item` WHERE `catagory`='bun'";
    $result = $con->query($sql);
    $num_result = $result->num_rows;

    if ($num_result > 0) {

        while ($rows = $result->fetch_assoc()) {

            $data_bun[] = $rows;
        }
    }

    $sql="SELECT * FROM `item` WHERE `catagory`='cheese'";
    $result = $con->query($sql);
    $num_result = $result->num_rows;

    if ($num_result > 0) {

        while ($rows = $result->fetch_assoc()) {

            $data_cheese[] = $rows;
        }
    }

    $sql="SELECT * FROM `item` WHERE `catagory`='sause'";
    $result = $con->query($sql);
    $num_result = $result->num_rows;

    if ($num_result > 0) {

        while ($rows = $result->fetch_assoc()) {

            $data_sause[] = $rows;
        }
    }

    $sql="SELECT * FROM `item` WHERE `catagory`='topings'";
    $result = $con->query($sql);
    $num_result = $result->num_rows;

    if ($num_result > 0) {

        while ($rows = $result->fetch_assoc()) {

            $data_topings[] = $rows;
        }
    }
    $sql="SELECT * FROM `item` WHERE `catagory`='meats'";
    $result = $con->query($sql);
    $num_result = $result->num_rows;

    if ($num_result > 0) {

        while ($rows = $result->fetch_assoc()) {

            $data_meats[] = $rows;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Make your own burger</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="sidenav.css">
	<link rel="stylesheet" type="text/css" href="mainpage.css">
	
	<script src="sidenav.js" ></script>
    <script src="mainpage.js"></script>

</head>
<body>


	<div class="container-fluid" id="container" >
		

		<div class="row" style="background-image: url('back.jpg'); background-size: cover;">
			<div class="col-md-2"  min-height: 670px;"><nav class="navbar navbar-inverse sidebar" role="navigation" class="container-fluid">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Brand</a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="active"><a href="#">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
							<li ><a href="#">Profile<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
							<li ><a href="#">Messages<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a>
								<ul class="dropdown-menu forAnimate" role="menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
									<li class="divider"></li>
									<li><a href="#">One more separated link</a></li>
								</ul>
							</li>
							<li><a href="#">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
							<li ><a href="#">Profile<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
							<li ><a href="#">Messages<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a>
								<ul class="dropdown-menu forAnimate" role="menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
									<li class="divider"></li>
									<li><a href="#">One more separated link</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			
			</div>
			<div class="col-md-7" >
                <!-- For Bun -->
				<div class="col-md-12">
                    <h3 >CHOOSE YOUR BUN </h3>
                    <?php
                    $counter_list = 1;
                    if ($data_bun != null):
                        foreach ($data_bun as $value):
                            $value_id=$value['I_ID'];
                            $value_name=$value['Name'];
                            $value_price=$value['price'];
                            ?>
                            <div class="col-md-4" onclick="addToCart('<?php echo $value_id; ?>','<?php echo $value_name; ?>','<?php echo $value_price; ?>')">
                                <img src="<?= $value['image_dir']; ?>">
                                <br>
                                <h5><?php echo $value['Name']; ?></h5>
                                <br>
                                <h6 style="color: white;text-align: center;margin: auto;">BDT: <?php echo $value['price']; ?></h6>
                            </div>

                            <?php
                            $counter_list++;
                        endforeach;
                    endif;
                    ?>
                </div>
                <!-- For cheese -->
                <div class="col-md-12">
                    <h3 >MAKE IT CHEESY!! </h3>
                    <?php
                    $counter_list = 1;
                    if ($data_cheese != null):
                        foreach ($data_cheese as $value):
                            $value_id=$value['I_ID'];
                            $value_name=$value['Name'];
                            $value_price=$value['price'];
                            ?>
                            <div class="col-md-4" onclick="addToCart('<?php echo $value_id; ?>','<?php echo $value_name; ?>','<?php echo $value_price; ?>')">
                                <img src="<?= $value['image_dir']; ?>"><br><h5><?php echo $value['Name']; ?></h5>
                                <h6 style="color: white;text-align: center;margin: auto;">BDT: <?php echo $value['price']; ?></h6>
                            </div>
                            <?php
                            $counter_list++;
                        endforeach;
                    endif;
                    ?>
                </div>
                <div class="col-md-12">
                    <h3 >LET'S GET SAUCY !</h3>
                    <?php
                    $counter_list = 1;
                    if ($data_sause != null):
                        foreach ($data_sause as $value):
                            $value_id=$value['I_ID'];
                            $value_name=$value['Name'];
                            $value_price=$value['price'];
                            ?>
                            <div class="col-md-2" onclick="addToCart('<?php echo $value_id; ?>','<?php echo $value_name; ?>','<?php echo $value_price; ?>')">
                                <img src="<?= $value['image_dir']; ?>"><br><h5><?php echo $value['Name']; ?></h5>
                                <h6 style="color: white;text-align: center;margin: auto;">BDT: <?php echo $value['price']; ?></h6>

                            </div>

                            <?php
                            $counter_list++;
                        endforeach;
                    endif;
                    ?>
                </div>
                <!-- For cheese -->
                <div class="col-md-12">
                    <h3 >TOP IT OFF! </h3>
                    <?php
                    $counter_list = 1;
                    if ($data_topings != null):
                        foreach ($data_topings as $value):
                            $value_id=$value['I_ID'];
                            $value_name=$value['Name'];
                            $value_price=$value['price'];
                            ?>
                            <div class="col-md-2" onclick="addToCart('<?php echo $value_id; ?>','<?php echo $value_name; ?>','<?php echo $value_price; ?>')">
                                <img src="<?= $value['image_dir']; ?>"><br><h5><?php echo $value['Name']; ?></h5>
                                <h6 style="color: white;text-align: center;margin: auto;">BDT: <?php echo $value['price']; ?></h6>

                            </div>

                            <?php
                            $counter_list++;
                        endforeach;
                    endif;
                    ?>
                </div>
                <div class="col-md-12">
                    <h3 >TURN UP THE TASTE</h3>
                    <?php
                    $counter_list = 1;
                    if ($data_meats != null):
                        foreach ($data_meats as $value):
                            $value_id=$value['I_ID'];
                            $value_name=$value['Name'];
                            $value_price=$value['price'];
                            ?>
                            <div class="col-md-4" onclick="addToCart('<?php echo $value_id; ?>','<?php echo $value_name; ?>','<?php echo $value_price; ?>')">
                                <img src="<?= $value['image_dir']; ?>"><br><h5><?php echo $value['Name']; ?></h5>
                                <h6 style="color: white;text-align: center;margin: auto;">BDT: <?php echo $value['price']; ?></h6>

                            </div>

                            <?php
                            $counter_list++;
                        endforeach;
                    endif;
                    ?>
                </div>
				
			</div>
			<div class="col-md-3" style=" min-height:670px;">
					<h3 style="color: white; text-align:  center;">Your Ingradients !!</h3>
					<table class="table blue" id="cart_table">
						
							<tr>
								<th>Ingradients</th>
								<th >QTY</th>
								<th >Unit Price</th>
								<th >Total Price</th>
							</tr>
							

							<tr id="grandTotal" >
								<th colspan="2" ><span class="pull-right">Grand Total</span></th>
								<th id="grandTotalBox" > 0.00</th>
								<th>Taka</th>
							</tr>
							<tr>
								
								
							</tr>
						
					</table> 
					<a onclick="onCheckOut()" class="pull-right btn btn-success" style="background-color: #3d3a3a; border:0px; color: white; ">Checkout</a>
					<a href="#" class="btn btn-dark" style="background-color: #3d3a3a; border:0px; color: white; ">Continue Ordering</a>         

				
			</div>
		</div>
	</div>

</body>
</html>