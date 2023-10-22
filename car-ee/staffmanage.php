<?php
include 'cbssession.php';
if(!session_id()){
    session_start();
}
include ('dbconnect.php');
include 'headerstaff.php';

//retrive new bookings
$sql = "SELECT * FROM tb_booking 
         LEFT JOIN tb_vehicle ON tb_booking.b_vehicle = tb_vehicle.v_reg
         LEFT JOIN tb_status ON tb_booking.b_status = tb_status.s_id
         LEFT JOIN tb_user ON tb_booking.b_customer = tb_user.u_id
        ORDER BY b_status ASC, b_id DESC ";
$result = mysqli_query($con, $sql);
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <style>
        #myInput {
            background-image: url('/css/searchicon.png');
            background-position: 10px 10px;
            background-repeat: no-repeat;
            width: 100%;
            font-size: 16px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="container">
        <h2>Manage Booking <small>search anything, table changes triggered at 767px</small></h2>
        <ul class="responsive-table">
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">
            <li class="table-header">
                <div class="col col-1">Booking ID</div>
                <div class="col col-2">Customer</div>
                <div class="col col-3">Vehicle</div>
                <div class="col col-4">Pick-up date</div>
                <div class="col col-5">Return date</div>
                <div class="col col-6">Total Price</div>
                <div class="col col-7">Status</div>
                <div class="col col-8">Operation</div>
            </li>

            <?php
            while($row=mysqli_fetch_array($result)){
                echo '<form method="post" action="staffapproval.php">';
                echo '<li class="table-row target">';
                echo '<div class="col col-1 "  data-label="Booking ID">'.$row['b_id'].'</div>';
                echo '<div class="col col-2 " data-label="Customer Name">'.$row['u_name'].'</div>';
                echo '<div class="col col-3" data-label="Vehicle Type">'.$row['v_type'].'</div>';
                echo '<div class="col col-4" data-label="Pick-up date">'.$row['b_pdate'].'</div>';
                echo '<div class="col col-5" data-label="Return date">'.$row['b_rdate'].'</div>';
                echo '<div class="col col-6" data-label="Total Price">'.$row['b_total'].'</div>';
                echo '<div class="col col-7 " data-label="Status">'.$row['s_desc'].'<input type="hidden" name="id" value="'.$row["b_id"].'">';
                echo '</div>';
                echo '<div class="col col-8" data-label="Operation"><button class="btn btn-warning" type="submit"> Approval</button></div>';
                echo '</li>';
                echo '</form>';
            }
            ?>
        </ul>
        <input type="hidden" name="id3" value="<?php echo $row['b_id']?>">
    </div>
</div>
<script>
    function myFunction() {
        var input = document.getElementById("myInput");
        var filter = input.value.toLowerCase();
        var nodes = document.getElementsByClassName('target');

        for (i = 0; i < nodes.length; i++) {
            if (nodes[i].innerText.toLowerCase().includes(filter)) {
                nodes[i].style.display = "content";
            } else {
                nodes[i].style.display = "none";
            }
        }
    }
</script>
</body>
<?php include 'footermain.php' ?>
</html>





