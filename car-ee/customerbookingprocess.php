<?php
include 'cbssession.php';
if (!session_id()){
    session_start();
}
include("dbconnect.php");


$uid = $_SESSION['uid'];
$fvec= $_POST['vreg'];
$fpdate = $_POST['fpdate'];
$frdate = $_POST['frdate'];

var_dump($fvec);

//Calculate number of days
$pickup = date('Y-m-d H:i:s', strtotime($fpdate));
$return = date('Y-m-d H:i:s', strtotime($frdate));
$dayDiff = ceil(strtotime($frdate) - strtotime($fpdate));

//seconds
$daynum = $dayDiff/(60*60*24);

//retrieve price from DB
$sqlprice = "SELECT v_price FROM tb_vehicle WHERE v_reg ='$fvec'  ";
$resultprice = mysqli_query($con, $sqlprice);
$rowprice = mysqli_fetch_array($resultprice);

//calculate total price
$totalprice = ($daynum * $rowprice['v_price']);

//record (insert) new booking into DB
$sql = "INSERT INTO tb_booking (b_customer, b_vehicle, b_pdate, b_rdate, b_total, b_status) 
        VALUES ('$uid ', '$fvec', '$fpdate', '$frdate', '$totalprice', '1')";

mysqli_query($con, $sql);
mysqli_close($con);

//successful notification of redirect
header('location:customermanage.php');

