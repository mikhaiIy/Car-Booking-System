<?php
include 'cbssession.php';
if(!session_id()){
    session_start();
}
include ('dbconnect.php');
include ('modifymodal.php');
include ('cancelmodal.php');
include 'headercustomer.php';
$uid = $_SESSION['uid'];
//retrive individual bookins;
$sql = "SELECT * FROM tb_booking 
         LEFT JOIN tb_vehicle ON tb_booking.b_vehicle = tb_vehicle.v_reg
         LEFT JOIN tb_status on tb_booking.b_status = tb_status.s_id
        WHERE b_customer = '$uid'";
$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="style/slider.css">
    <link rel="stylesheet" type="text/css" href="style/mystyle.css">
    <link rel="stylesheet" type="text/css" href="css/mybutton.css">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="js/myscript.js"></script>
</head>
<body>
<div class="container">
    <div class="container">

        <div class="container">
            <h2>Your Booking List <small>Triggers on 767px</small></h2>
            <ul class="responsive-table">
                <li class="table-header">
                    <div class="col col-1">Booking ID</div>
                    <div class="col col-2">Vehicle</div>
                    <div class="col col-3">Pick-up date</div>
                    <div class="col col-4">Return date</div>
                    <div class="col col-5">Total Price</div>
                    <div class="col col-6">Status</div>
                    <div class="col col-11">Operation</div>
                </li>

                <?php

                while($row=mysqli_fetch_array($result)){
                    echo '<li class="table-row">';
                    echo '<div class="col col-1 " data-label="Booking ID">'.$row['b_id'].'</div>';
                    echo '<div class="col col-2" data-label="Vehicle Type">'.$row['v_type'].'</div>';
                    echo '<div class="col col-3" data-label="Pick-up date">'.$row['b_pdate'].'</div>';
                    echo '<div class="col col-4" data-label="Return date">'.$row['b_rdate'].'</div>';
                    echo '<div class="col col-5" data-label="Total Price">'.$row['b_total'].'</div>';
                    echo '<div class="col col-6" data-label="Status">'.$row['s_desc'].'</div>';
//                    echo '<div class="col col-11" data-label="Operation"><a class="btn btn-warning" style="" href="modifymodal.php"'.$row['b_id'].'> Modify</a><a class="btn btn-danger" href="customercancel.php?id="'.$row['b_id'].'> Cancel</a></div>';
                    echo '<div class="col col-11" data-label="Operation">';
                    ?>
                    <button type="button" class="open-my-modal2 btn btn-warning" data-v-reg="<?php echo $row["v_reg"]?>" data-bid="<?php echo $row['b_id']?>" data-v-type="<?php echo $row["v_type"]?>" data-v-price="<?php echo $row["v_price"]?>" data-pdate="<?php echo $row["b_pdate"]?>" data-rdate="<?php echo $row["b_rdate"]?>" data-toggle="modal" data-target="#largeShoes1">Modify</button>
                    <button type="button" class="open-my-modal3 btn btn-danger" data-v-reg="<?php echo $row["v_reg"]?>" data-bid="<?php echo $row['b_id']?>" data-v-type="<?php echo $row["v_type"]?>" data-v-price="<?php echo $row["v_price"]?>" data-pdate="<?php echo $row["b_pdate"]?>" data-rdate="<?php echo $row["b_rdate"]?>" data-toggle="modal" data-target="#largeShoes2">Cancel</button>
                    <?php
                    echo '</div>';
                    echo '</li>';
                }
                ?>
            </ul>
        </div>
    </div>
</div>
</body>
<?php include 'footermain.php' ?>
</html>





